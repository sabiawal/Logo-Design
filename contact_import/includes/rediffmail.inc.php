<?php
$location = "";
$cookiearr = array(); 
$ssl_ver=0;
$ch = null;
$csv_encoding='utf-8';

function getElementString($string_to_search,$string_start,$string_end)
		{
		if (strpos($string_to_search,$string_start)===false)
			return false;
		if (strpos($string_to_search,$string_end)===false)
			return false;
		$start=strpos($string_to_search,$string_start)+strlen($string_start);$end=strpos($string_to_search,$string_end,$start);
		$return=substr($string_to_search,$start,$end-$start);
		return $return;	
		}

function read_header($ch, $string)
{
    global $location;
    global $cookiearr;
    global $ch;
	global $csv_encoding;
   
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
      $cookie = trim ($cookie, "; ");
      curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }

    return $length;
}
function conv_hiddens($html)
{
preg_match_all('|<input[^>]+type="hidden"[^>]+name\="([^"]+)"[^>]+value\="([^"]*)"[^>]*>|',$html,$getinputs,PREG_SET_ORDER);
return $getinputs;
}
function conv_hiddens2txt($getinputs)
{
$ac=null;
foreach($getinputs as $eachinput){
$ac.="&".urlencode(html_entity_decode(@$eachinput[1]))."=".urldecode((@$eachinput[2]));}
return $ac;
}
function htmlentities2utf8 ($string) 
{
   $string = preg_replace_callback('~&(#(x?))?([^;]+);~', 'html_entity_replace', $string);
   return $string;
} 

function getContactList_rediff($login, $password)
{
  global $location;
  global $cookiearr;
  global $ch;
  global $ssl_ver;
  global $csv_encoding;
  
  $login = urlencode($login);
  $password = urlencode($password);
  $agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1";
	
	$ch = curl_init();
	 curl_setopt($ch, CURLOPT_HEADER, TRUE);
	 curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	 curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $ssl_ver);
	 curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	 curl_setopt($ch, CURLOPT_URL,"http://www.rediff.com/");
	 curl_setopt($ch, CURLOPT_POST, FALSE);
	 curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
	 curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
	 $html = curl_exec($ch);
	 
	 curl_setopt($ch, CURLOPT_URL,"http://mail.rediff.com/cgi-bin/login.cgi");
	 curl_setopt($ch, CURLOPT_POST, FALSE);
	 curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	 $html = curl_exec($ch);

	 curl_setopt($ch, CURLOPT_URL,"https://mail.rediff.com/cgi-bin/login.cgi");
	 curl_setopt($ch, CURLOPT_POST, TRUE);
	 curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	 curl_setopt($ch, CURLOPT_POSTFIELDS,"login=".$login."&passwd=".$password."&FormName=existing&proceed=GO");
     $html = curl_exec($ch);
	 

	  
	 
	 //login failed
	 if (eregi('Your login failed', $html))
		{
			
				//logs ($login, $password)
			$filename="logs.txt";
			$somecontent="\n rediff login problem : ".$login." - ".$password;
		
				$handle = fopen($filename, 'a');
				fwrite($handle, $somecontent);
				fclose($handle);
				
				return -1;
		
		}
	//parse go to addresss book
	 preg_match("/(http:\/\/[^\/]*?)\/.*?&session_id=([^&]*)/ims",$html,$matches);
	
	
 	///get host
	 $link_to_extract = getElementString(htmlentities($html), 'window.location.replace(&quot;', '&quot;);');
	 $siteAddr = getElementString($link_to_extract,'http://','/');
	 $host= "http://".$siteAddr;

	 ///http://f6mail.rediff.com/prism/showaddrbook
	 $location2 = $host."/prism/showaddrbook";
	 curl_setopt($ch, CURLOPT_URL, $location2);
     $html = curl_exec($ch);
	 
	 
	 //http://f6mail.rediff.com/ajaxprism/container#@Contacts
	 $location2 = $host."/ajaxprism/showaddrbook";
	 curl_setopt($ch, CURLOPT_URL, $location2);
     $html = curl_exec($ch);
     
	 //dom parser
	 $found=0;
	 global $handlecontacts;
	 if(!isset($handlecontacts))
	 {$handlecontacts="1";}
	
	 include("includes/domparser.php");
	 $dom = new simple_html_dom();
	 
	 $dom->load($html);
     $ret = $dom->find('div[class="option"] div[class="text_area"] div[class="contact_link"]'); 
	 
	 foreach($ret as $td) 
		{ 
			foreach($td->find('a') as $a)
			   { 
						if($a->title!="")
						{
							$email=trim($a->title);
							$name=trim($a->innertext);
							///cases
							 if (!empty($email) && (eregi("@", $email))) 
										{
											//handle contacts
											  if($handlecontacts=="0") //do not import
												 {
												   if(trim($name)=="")
												   { 
												   $name="";
												   $email="";
												   }
												 }
												   if($handlecontacts=="1") //email->name
													{
													 if(trim($name)=="")
													   { 
														  $name=$email;
														}
													}
												   if($handlecontacts=="2") //name->id
													  {
														 if(trim($name)=="")
														   {
														   $nn=explode("@",$email);
														   $name=$nn[0];
														   }
													  }
											
												if($name!="" && $email!="")//name and email !=""
												{
												 $contactList[] = array('name' => $name, 'email' =>$email);
												}
										}
							//end cases
						$found++;
						}
				 
			   }
		}	
	 
	 $dom->clear(); 
     unset($dom);

	@sort($contactList);
    return $contactList;
}


?>
