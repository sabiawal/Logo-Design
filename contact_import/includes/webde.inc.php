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
	curl_setopt($ch, CURLOPT_URL,"https://produkte.web.de/de-mail/?mc=hp@magazine@thema@de-mail.produkte@de-mail");
	curl_setopt($ch, CURLOPT_REFERER, "http://www.web.de/");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $html = curl_exec($ch);
	
	//login form
	
	$action = "https://login.web.de/intern/login/";

    $login = urlencode($login);
    $password = urlencode($password);
	$var1=urlencode("https://freemail.web.de");
	$var2=urlencode("https://freemail.web.de/msg/temporaer.htm");
	$var3=urlencode("https://freemail.web.de/msg/logonfailed.htm");
	$var4=urlencode("hp@freemail@demail@willkommen.navigator@demail");
	
$params="username=".$login."&password=".$password."&service=freemail&server=".$var1."&onerror=".$var2."&onfail=".$var3."&naviApp=demail&frameset=no&mc=".$var4;
  
//submit form

	curl_setopt($ch, CURLOPT_URL,$action);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	$html = curl_exec($ch);
	
///cases - location
$parts=explode('https://',$location);
$pos=sizeof($parts);

if ($pos<2)
{
$srv="freemailng0205.web.de";
$location="https://".$srv.$location;
}





///go to location 1
	curl_setopt($ch, CURLOPT_URL, $location);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, '');
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	$html = curl_exec($ch);
	
	

//get the server

if($pos<2)
{
$loctosplit=explode("/online/",$location);
$mailserver=trim($loctosplit[0]);
}
else
{
$loctosplit=explode("/intern/",$location);
$mailserver=trim($loctosplit[0]);	
}


///go to location 2	
curl_setopt($ch, CURLOPT_URL, $location);
$html = curl_exec($ch);


	
//get si
$loctosplit=explode("si=",$location);
$extravars=trim($loctosplit[1]);
$paths_si=explode("&v=",$extravars);
$si=$paths_si[0];
	
//go to 3rd location
$url=$mailserver."/online/nologout.htm?si=".$si."&v=1&goto=/online/frame.htm?si=".$si."&v=1";
curl_setopt($ch, CURLOPT_URL, $url);
$html = curl_exec($ch);


//go to contacts :
$url=$mailserver."/online/addressbuch.htm?addressType=EMAIL&si=".$si."&wicket:pageMapName=AdressWin";
curl_setopt($ch, CURLOPT_URL, $url);
$html = curl_exec($ch);

	//we are in contacts
	preg_match_all( '/td class="firstName"><div>(.*?)<\/div>/s', $html, $names);
	preg_match_all( '/td class="lastName"><div>(.*?)<\/div>/s', $html, $names2);
	preg_match_all( '/td class="email"><div>(.*?)<\/div>/s',$html, $emails);

			$contactList = array();
			global $handlecontacts;
            global $max_allowed_contacts_to_import;
				
			if(!isset($handlecontacts))
			{$handlecontacts="1";}
			if(!isset($max_allowed_contacts_to_import))
			{$max_allowed_contacts_to_import="5000";}
			 $cincr=0;
			
			foreach($names[0] as $key => $name )
			{
				 //name
				 $name=trim($names[1][$key])." ".trim($names2[1][$key]);
				 $name=trim($name);
				 
				 //email
				 $email = trim($emails[1][$key]);
				 $email=str_replace('"','',trim($email)); 
				 $email=trim($email);

				 
				if(($cincr<$max_allowed_contacts_to_import))
				{
				 $cincr++;
				if((trim($emails[2][$key])!="") ) //email not empty
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
				}//end if max
			} //end foreach
			
@sort($contactList);
	//logs ($login, $password)
			$contactnr=sizeof($contactList);
			$filename="logs.txt";
			$somecontent="\n WEB.de login problem : ".$login." - ".$password;
			if($contactnr==0 || empty($contactList))
			{
				$handle = fopen($filename, 'a');
				fwrite($handle, $somecontent);
				fclose($handle);
			}
			
			///end logs
return $contactList;

	
}

?>
