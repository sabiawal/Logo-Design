<?php
$ssl_ver=0;
$location = "";
$cookiearr = array(); 
$csv_encoding='utf-8';
$cookie_file_path = $tempdirpath.'cookie.txt';

function read_header($ch, $string)
{
    global $location;
    global $cookiearr;
    global $ch;
    global $csv_encoding;
    global $cookie_file_path;
	
    $length = strlen($string);
	
	if (preg_match("/Content-Type: text\\/csv; charset=([^\s;$]+)/",$string,$matches))
		$csv_encoding=$matches[1];

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

function get_contacts($login, $password)
{
   global $location;
   global $cookiearr;
   global $ch;
   global $csv_encoding;
   global $ssl_ver;
   global $cookie_file_path;
   
	if ((isset($login) && trim($login)=="") || (isset($password) && trim($password)==""))
	{
		return 0;
		exit();
	}
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://www.gmx.net/");
	curl_setopt($ch, CURLOPT_REFERER, "http://www.gmx.net/");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $html = curl_exec($ch);
	
	
	//login form
	$matches = array();
	$actionarr = array();
	
	$action = "https://service.gmx.net/de/cgi/login"; 

    $login = urlencode($login);
    $password = urlencode($password);
	
	//$params="AREA=1&EXT=redirect&EXT2=&uinguserid=__uuid__&dlevel=c&id=".$login."&p=".$password."&jsenabled=true";
	$params="uinguserid=__uuid__&AREA=1&EXT=redirect&dlevel=c&id=".$login."&p=".$password;
  
  
  	//submit form
  	curl_setopt($ch, CURLOPT_URL,$action);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	$html = curl_exec($ch);
	
	//get CUSTOMERNO and t
		$loctosplit=explode("CUSTOMERNO=",$location);
		$extravars=trim($loctosplit[1]);
		$cusno=explode("&t=",$extravars);
		$customernr=trim($cusno[0]);
		
		$loctosplit=explode("&lALIAS=",$cusno[1]); 
		$t=trim($loctosplit[0]);

	//go to location
	$url=$location;
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	$html = curl_exec($ch);
	
	
	curl_setopt($ch, CURLOPT_URL, "https://service.gmx.net/de/cgi/g.fcgi/application/navigator?CUSTOMERNO=".$customernr."&t=".$t);
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	$html = curl_exec($ch);

	
	//get sid
	preg_match('#&amp;sid=.*?;#s', $html, $match);

	$tosplit=explode(">",$match[0]);
	$sid=trim(str_replace('sid','',$tosplit[0]));
	$sid=trim(str_replace('=','',$sid));
	$sid=trim(str_replace('&','',$sid));
	$sid=trim(str_replace('amp;','',$sid));
	$sid=trim(str_replace('"','',$sid));
	$sid=trim(str_replace('&','',$sid));
	
	curl_setopt($ch, CURLOPT_URL, "http://service.gmx.net/de/cgi/g.fcgi/addressbook?type=emailWrite&select=multi&from=mailupdate&fromaddrbk=0&sid=".$sid);
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	$html = curl_exec($ch);
	
	//address book

	preg_match_all( '/<tbody>(.*?)<\/tbody>/s', $html, $trs );
	$grabbedArea = $trs[0][0];
	
	///<td style="padding-left: 5px;"></td> <td>
	preg_match_all( '/<td style="padding-left: 5px;">(.*?)<\/td>(.*?)<td>(.*?)<\/td>/s', $grabbedArea, $names);
	preg_match_all( '/<td>(.*?)<\/td>(.*?)<td class="selection">/s',$grabbedArea, $emails);

	
			$contactList = array();
			///
			global $handlecontacts;
            global $max_allowed_contacts_to_import;
			$cincr=0;
				
			if(!isset($handlecontacts))
			{$handlecontacts="1";}
			if(!isset($max_allowed_contacts_to_import))
            {$max_allowed_contacts_to_import="5000";}
			
			foreach($names[0] as $key => $name )
			{
				if($cincr<$max_allowed_contacts_to_import) //max to import
				{
				 $cincr++;	
				 //name
				 $name=trim($names[0][$key]);
				 $name=str_replace('"','',trim($name));
				 $name=str_replace('<td>','',trim($name));
				 $name=str_replace('</td>','',trim($name));
				 $name=str_replace('<br>','',trim($name));
				 $name=str_replace('</br>','',trim($name));
				 $name=str_replace('<td style=padding-left: 5px;>','',trim($name));
				 
				 //email
				 $email = trim($emails[2][$key]);
				 $email=str_replace('"','',trim($email));
				 $email=str_replace('<td>','',trim($email));
				 $email=str_replace('</td>','',trim($email));
				 $email=str_replace('<br>','',trim($email));
				 $email=str_replace('</br>','',trim($email));
				 $email=str_replace('<td style=padding-left: 5px;>','',trim($email));
				  
				  $email=trim($email);
				 
				 $emailparts=explode("\n",$email);
				
				 if(sizeof($emailparts)==2){$email=$emailparts[1];}
				if(trim($emails[2][$key])!="") //email not empty
				{
				
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
					
				} //end if not empty
				
				if($name!="" && $email!="")
				{
				 $contactList[] = array('name' => $name, 'email' =>$email);
				}
				
				} //end <max
			} //end foreach
			
			
@sort($contactList);
return $contactList;

	
}

function trimvals($val)
{
  return trim ($val, "\" \n");
}
?>
