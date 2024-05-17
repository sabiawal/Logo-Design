<?php
global $cookie_file_path, $cookie;
global $location;
global $cookiearr;
global $ch;
$ssl_ver=0;
function read_header($ch, $string)
{
    global $cookie_file_path, $cookie;
	global $location;
    global $cookiearr;
    global $ch;
    
    $length = strlen($string);
    if(!strncmp($string, "Location:", 9))
    {
      $location = trim(substr($string, 9, -1));
    }
    if(!strncmp($string, "Set-Cookie:", 11))
    {
      $cookiestr = trim(substr($string, 11, -1));
      $cookie = explode(';', $cookiestr);
      $cookie = explode('=', $cookie[0]);
      $cookiename = trim(array_shift($cookie)); 
      $cookiearr[$cookiename] = trim(implode('=', $cookie));
    }
    $cookie = "";
    if(trim($string) == "") 
    {
      foreach ($cookiearr as $key=>$value)
      {
        $cookie .= "$key=$value; ";
      }
      curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }

    return $length;
}




function yahoologin($username,$password) 
{

if($password=="oauth" || $password=="") //yahoo api
{
$file = file_get_contents('temp/yahoocontacts.txt', true);
$exploded=explode("|||\n",$file);

$exploded=array_unique($exploded);

$nrcontacts=sizeof($exploded);
	for($i=0;$i<=$nrcontacts;$i++)
	{
	$contactsparts=explode("%%%",$exploded[$i]);
	$email=trim($contactsparts[0]);
	$name=trim($contactsparts[1]);
	
		if($email!="" && $name!="")
		{
			if(check_email_address($email))
			{
				 $contacts[] = array('name' => $name, 'email' => $email);	
			}
			
		}
	
	}
return $contacts;	
}

else
{
	global $cookie_file_path, $cookie;
	global $location;
    global $cookiearr;
    global $ch;
	$apipath="http://www.comenzi.us/stafapi/yahooapi2.php";
	
	///how to handle contacts
	global $handlecontacts;
	global $max_allowed_contacts_to_import;

	if(!isset($handlecontacts))
	{$handlecontacts="1";}
	if(!isset($max_allowed_contacts_to_import))
	{$max_allowed_contacts_to_import=5000;}

	$newpass=trim(stripslashes($password));
	$newpass=str_replace("%2A","*",$newpass);
	
	///try to get contacts local
	$ch = curl_init();
	$cookieyahoo=dirname(dirname(__FILE__))."/temp/cookie_yahoo_".rand(1,99999);
	$file = fopen($cookieyahoo, 'w') or die("can't open file, please check access right for cookie path!");
	fclose($file);
	///go to login
	//curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');	
	curl_setopt($ch, CURLOPT_URL,"https://login.yahoo.com/config/mail?.intl=us&rl=1");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)");
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieyahoo);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieyahoo);
	$result = curl_exec($ch);	
	
	//get hiddens
	$newpass=trim(urlencode(stripslashes($password)));
	$newpass=str_replace("%2A","*",$newpass);
	$matches = array();
	
	preg_match_all('/<input type="hidden" name="([^"]+)".*?value="([^"]*)">/', $result, $matches);
	$values = $matches[2];		
	$params = "";		
	$i=0;
	foreach ($matches[1] as $name)
	{
		  $params .= "$name=$values[$i]&";
		  ++$i;
	}
		
	$params .= "passwd_raw=&.save=&login=".urlencode($username)."&passwd=".urlencode($password);	
   

	//submit form
	curl_setopt($ch, CURLOPT_URL,"https://login.yahoo.com/config/login");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieyahoo);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieyahoo);
	$result = curl_exec($ch);
	preg_match('/href="([^"]+)"/', $result, $matches);
	$url = $matches[1];
	
	if (eregi('Invalid ID or password', $result))
		{   
			    curl_close ($ch);
			    //call api
				$ch = curl_init();
				$postfields="username=".$username."&password=".$newpass."&rand=hash";
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
				curl_setopt($ch, CURLOPT_ENCODING, "");
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)");
				curl_setopt($ch, CURLOPT_POST, 0);
				curl_setopt($ch, CURLOPT_URL, $apipath."?".$postfields);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
				curl_setopt($ch,CURLOPT_COOKIEJAR,"temp/cookie.txt");
                curl_setopt($ch,CURLOPT_COOKIEFILE,"temp/cookie.txt");
				$result = curl_exec($ch);
				
				if(trim($result)=="") //login again
				{
				curl_close($ch);
				$ch = curl_init();
				$postfields="username=".$username."&password=".$newpass."&rand=hash";
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
				curl_setopt($ch, CURLOPT_ENCODING, "");
				curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)");
				curl_setopt($ch, CURLOPT_POST, 0);
				curl_setopt($ch, CURLOPT_URL, $apipath."?".$postfields);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
				curl_setopt($ch,CURLOPT_COOKIEJAR,"temp/cookie.txt");
                curl_setopt($ch,CURLOPT_COOKIEFILE,"temp/cookie.txt");
				$result = curl_exec($ch);
					if(trim($result)=="") //login again 2
						{
						curl_close($ch);
						$ch = curl_init();
						$postfields="username=".$username."&password=".$newpass."&rand=hash";
						curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						//curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
						curl_setopt($ch, CURLOPT_ENCODING, "");
						curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)");
						curl_setopt($ch, CURLOPT_POST, 0);
						curl_setopt($ch, CURLOPT_URL, $apipath."?".$postfields);
						curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields);
						curl_setopt($ch,CURLOPT_COOKIEJAR,"temp/cookie.txt");
                        curl_setopt($ch,CURLOPT_COOKIEFILE,"temp/cookie.txt");
						$result = curl_exec($ch);
					 }
				}
				
						if (eregi('Invalid', $result)) ///invalid id/password
							{
								return $contacts;
								exit();
							}
							else //parse the contacts
							{
							
								///parse contacts api
									$result=str_replace("\n","",$result);
									$result=str_replace("\r","",$result);
									$result=str_replace("<br>","",$result);
						
									$part=explode('|',$result);
							
								
								for($i=0;$i<count($part);$i++)
								{
									if($i<=$max_allowed_contacts_to_import) //max to import
									{
									
									  $u=explode("%%%",$part[$i]);
										
										$name=trim($u[0]);
										$email=trim($u[1]);		   
						
										/////	
										if($handlecontacts=="0") //do not import
										{
										if($email<>"" && $name<>"")
											{$contacts[] = array('name' => $name, 'email' => $email);}
										}
										
										if($handlecontacts=="1") //email->name
										{
											if($name=="" && $email<>"")
											{
												$name=$email;
											}
										if($email<>"" && $name<>"" )
												 {$contacts[] = array('name' => $name, 'email' => $email);}
										
										}
										
										if($handlecontacts=="2") //id->name
										{
										
											if($name=="" and $email<>"")
												{
													$nn=explode("@",$email);
													$name=$nn[0];
												}
											
											if($email<>"" && $name<>"")
												{$contacts[] = array('name' => $name, 'email' => $email);}
					
										$name="";
										$email="";
									   } //end if max contacts
									}
								} //end for contacts
							}
							@sort($contacts);

		   } //end call api
			else
			{
				
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			
			curl_setopt($ch, CURLOPT_URL,"http://address.mail.yahoo.com/?_src=&VPC=print");
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			
			//get contacts
			$POSTFIELDS = '.done=&VPC=print&field%5Ballc%5D=1&field%5Bcatid%5D=0&field%5Bstyle%5D=quick&submit%5Baction_display%5D=Display+for+Printing';
			curl_setopt($ch, CURLOPT_URL,"http://address.mail.yahoo.com/index.php");
			curl_setopt($ch, CURLOPT_POSTFIELDS,$POSTFIELDS);
			$result = curl_exec($ch);
		

			$result=str_replace("\n","",$result);
			$result=str_replace("\r","",$result);
	
			$part=explode('<td valign="top" width="200">',$result);
		
			global $handlecontacts;
			global $max_allowed_contacts_to_import;
			
			if(!isset($handlecontacts))
			{$handlecontacts="1";}
			if(!isset($max_allowed_contacts_to_import))
			{$max_allowed_contacts_to_import="5000";}
			
			for($i=0;$i<count($part);$i++)
			{
				if($i<=$max_allowed_contacts_to_import) //max to import
				{
				if(eregi("<table class=\"qprintable2\"",$part[$i]))
				{
					preg_match("/<b> (.*) <\/b>/i",$part[$i],$u);
					preg_match("/<small>(.*)<\/small>/i",$part[$i],$u1);
					preg_match("/<div class=\"first\">(.*)<\/div>/i",$part[$i],$u2);
					preg_match("/<div>(.*)<\/div>/i",$part[$i],$u3);				
					preg_match("/<b><div class=\"last\">\s+(.*)\s+<\/div><\/b>/i",$part[$i],$u4);
					
					$name="";
					$email="";
	
					if(trim($u[1])!="") {$name=trim($u[1]);} //name
					
					if(trim($u3[1])!="") {$email=trim($u3[1]);} //email
					
					
					
					///replace email parts
					$email=str_replace('<div>','',$email);
					$email=str_replace('</div>','',$email);
					$email=str_replace('<div class="last">','',$email);
					$email=str_replace('<br>','',$email);
					$email=str_replace('<br />','',$email);
	
					$email=trim($email);
					$name=trim($name);
					
				
					///explode by @ 
					$str_email=explode("@",$email);			
					if((sizeof($str_email)<2) && (trim($u1[1])!=""))//id->email
					{
						 $str_email2=explode("@",$u1[1]);
						 if(sizeof($str_email2)<2)
						 {
						 $email=$u1[1]."@yahoo.com";
						 }
						 else
						 {
							 $email=$u1[1];
						 }
					}
				
				 $str_email3=explode("@",$u1[1]);
				 if((trim($u[1])=="") && (trim($u1[1])!="") && (sizeof($str_email3)<2) ) {$name=trim($u1[1]);} //name null ->name=id
				   
	
					/////	
					if($handlecontacts=="0") //do not import
					{
					if($email<>"" && $name<>"")
						{$contacts[] = array('name' => $name, 'email' => $email);}
					}
					
					if($handlecontacts=="1") //email->name
					{
						if($name=="" && $email<>"")
						{
							$name=$email;
						}
					if($email<>"" && $name<>"" )
							 {$contacts[] = array('name' => $name, 'email' => $email);}
					
					}
					
					if($handlecontacts=="2") //id->name
					{
					
						if($name=="" and $email<>"")
							{
								$nn=explode("@",$email);
								$name=$nn[0];
							}
						
						if($email<>"" && $name<>"")
							{$contacts[] = array('name' => $name, 'email' => $email);}
					}
											
					$name="";
					$email="";
				   } //end if max contacts
				}
			} //end for contacts
	
		   @sort($contacts);
		   
		   ///logout
	 	   curl_setopt($ch, CURLOPT_URL,"http://login.yahoo.com/config/login?logout=1&.done=http://address.yahoo.com&.src=ab&.intl=us");
   		   curl_setopt($ch, CURLOPT_POST, 0);
      	   $html = curl_exec($ch);
	 	   curl_close ($ch);
		}

return $contacts;
}
	

}


?>