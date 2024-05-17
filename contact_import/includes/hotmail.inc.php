<?php
global $cookie_file_path, $cookie;
$cookie_file_path = "temp/cookie.txt";
global $location;
global $cookiearr;
global $ch;
$ssl_ver=0;

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

function isEmail($email)
{
		return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", $email);
}
	
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
      $cookie = trim ($cookie, "; ");
      curl_setopt($ch, CURLOPT_COOKIE, $cookie);
      curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }

    return $length;
}
 
function hotmail_login($email, $password)
{
  global $location;
  global $cookiearr;
  global $cookie_file_path;
  global $ch;
  global $chpost;
  global $ssl_ver;


//go to login screen
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax)");
curl_setopt($ch, CURLOPT_URL,"https://mid.live.com/si/login.aspx");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);

//get form action
preg_match('/action="([^"]+)"/', $result, $matches);
$opturl = $matches[1];

//sumbit form

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL,"https://mid.live.com/si/".$opturl);
curl_setopt($ch, CURLOPT_POSTFIELDS, "__ET=&PasswordSubmit=Sign in&LoginTextBox=".$email."&PasswordTextBox=".$password);
$result = curl_exec($ch);
	if (eregi('Required information is missing', $result) || eregi('We were unable to sign you in with your Windows Live ID',$result))
		{
			return $contacts;
			exit();
		}
		else
		{

		preg_match("/url=([^\"]*)\"/si", $result, $matches);
				   
		///go to main page
		$url = $matches[1];
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_URL,$url);
		$result = curl_exec($ch);
		//go 1
		$url = "http://mail.live.com/mail/EditMessageLight.aspx?n=";
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_URL,$url);
		$result = curl_exec($ch);
		//go 2
		$url = "http://mail.live.com/mail/EditMessageLight.aspx?n=";
		curl_setopt($ch, CURLOPT_URL,$url);
		$result = curl_exec($ch);
	
//new export page
$info = curl_getinfo($ch);
$base_url = str_replace('mail/EditMessageLight.aspx?n=','',$info['url']);
preg_match('/ContactList.aspx(.*?)\"/si', $result, $matches);
$getn=explode("&mt",$matches[1]);
$url = $base_url.'mail/GetContacts.aspx'.$getn[0];
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_URL,$url);
$html = curl_exec($ch);
$logouturl = $base_url.'/mail/logout.aspx';

//parse CSV 
		global $handlecontacts;
		global $max_allowed_contacts_to_import;
		$contactList = array();
		$j=0;
		
		if(!isset($handlecontacts))
		{$handlecontacts="1";}
		if(!isset($max_allowed_contacts_to_import))
		{$max_allowed_contacts_to_import=2500;}

		
		$html = str_replace( "\r\n", "\n", $html );
		$html = str_replace( ";", ",", $html );
		$html = str_replace( "\r", "\n", $html );
		$html = str_replace( "chr(13)", "\n", $html );
		
				
		$csvrows = explode("\n", $html);
		array_shift($csvrows);
		$names = array();
		$emails = array();
	
foreach ($csvrows as $row)
  {  
    $values = explode(",", $row);
	
    if (eregi("@", $values[46]))
    { 
	  //name
	   $name=trim(trim($values[1])." ".trim($values[3]));
	  //email
	  $email = $values[46];
	  ////
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
	 
			if($name!="" && $email!="")
			{
			$name = str_replace( '"', '', $name );
			$name = str_replace( '&quot;', '', $name );
			$email = str_replace( '"', '', $email );
			$email = str_replace( '&quot;', '', $email );
	 		 $contactList[] = array('name' => $name, 'email' =>$email);
			}
    }
  }
	
//end parse CSV		
		///logout
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_URL,$logouturl);
		$result = curl_exec($ch);
		///end
		sort($contactList);
		return $contactList;
	}

}
?>