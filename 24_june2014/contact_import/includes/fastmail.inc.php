<?php
$location = "";
$cookiearr = array(); 
$cookie_file_path = $tempdirpath."cookie.txt";
$ssl_ver=0;
$csv_encoding='utf-8';

function read_header($ch, $string)
{
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
function trimvals($val)
{
  return trim ($val, "\" \n");
}
function htmlentities2utf8 ($string) 
{
   $string = preg_replace_callback('~&(#(x?))?([^;]+);~', 'html_entity_replace', $string);
   return $string;
} 
function parseContent( $pattern, $subject ) 
{
$array = array();
preg_match_all( $pattern, $subject, $array );
return $array;
}
function getContactList_fastmail($login, $password)
{
  global $location;
  global $cookiearr;
  global $ch;
  global $cookie_file_path;
  global $ssl_ver;
  global $csv_encoding;
  $dom=explode("@",$login);
  $domain=$dom[1];

  
  $login = urlencode($login);
  $password = urlencode($password);
  $agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1";
	
	 $ch = curl_init();
	// curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
	// curl_setopt($ch, CURLOPT_COOKIE, $cookie_file_path);
	 curl_setopt($ch, CURLOPT_HEADER, TRUE);
	 curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	 curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl_ver);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $ssl_ver);
	 curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	 curl_setopt($ch, CURLOPT_URL,"http://www.".$domain."/mail/");
	 curl_setopt($ch, CURLOPT_POST, FALSE);
	 curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
	 // curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
	 $html = curl_exec($ch);

	 //get login form action
	  $matches = array();
     preg_match('/<form [^>]+action\="([^"]+)"[^>]*>/', $html, $matches);
     $opturl = $matches[1];
	 	 
	 curl_setopt($ch, CURLOPT_URL, $opturl);
	 curl_setopt($ch, CURLOPT_POST, TRUE);
	 curl_setopt($ch, CURLOPT_HTTPGET, FALSE);
	 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	 curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'read_header');
	 curl_setopt($ch, CURLOPT_POSTFIELDS,"FLN-UserName=".$login."&FLN-Password=".$password."&MLS=LN-*&MSS=&FLN-LoginMode=0&FLN-ShowedGA=1&FLN-Security=0&FLN-CssMode=1&FLN-SessionTime=7200");
     $html = curl_exec($ch);
	

	 //login failed 
	 if (eregi('Username not found or password incorrect. Please check that the username and/or password you have entered is correct', $html))
		{
			return -1;
		}
      if (strpos($html, 'class="ErrMsg"')!=false || strpos($html, 'you entered was incorrect')!=false)
		{
			return -1;
		}
	  // parse url
	  if (preg_match("/(Ust=[^&]*).*?(UDm=[^&]*)/ims",$html,$matches)==0)
	   {
		 	return -1;
	   } //no UST or UDM

		$ust = html_entity_decode($matches[1]);
		$udm = html_entity_decode($matches[2]);
		

$location = 'http://www.'.$domain.'/mail/?MLS=MB-*;MSS=;SMB-CF=13895389;'.$udm.';'.$ust.";MSignal=AD-*S-1.N-1";

curl_setopt($ch, CURLOPT_POST, FALSE);
curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
curl_setopt($ch, CURLOPT_URL, $location);
$html = curl_exec($ch);

$names = array();
$emails = array();
global $handlecontacts;
global $max_allowed_contacts_to_import;

if(!isset($handlecontacts))
{$handlecontacts="1";}
if(!isset($max_allowed_contacts_to_import))
{$max_allowed_contacts_to_import="5000";}
$cincr=0;


preg_match_all("/<td class=\"contacts wrap\">(.*?)<\/td>/si", $html, $match, PREG_SET_ORDER); 

foreach( $match as $value ) 
			{
				$value=$value[0];
				$contactName 	= parseContent( '/<span class=\"contactName\">(.*?)<\/span>/si', $value );
				$contactEmail	= parseContent( "/<a href=\"(.*)\">(.*)<\/a>/", $value);

			 if(trim($contactEmail[2][1]!="") && ($cincr<$max_allowed_contacts_to_import) )
				{
					$cincr++;
					if(trim($contactName[1][0])=="")
					{
					///
					 if($handlecontacts=="0") //do not import
						{
						$fname="";
						}
					 if($handlecontacts=="1") ///email->name
						{
						$fname=$contactEmail[2][1];
						}
					if($handlecontacts=="2") ///id->name
						{
						$nn=explode("@",$contactEmail[2][1]);
					    $fname=trim($nn[0]);
						}
					
					}
					else
					{$fname=trim($contactName[1][0]);}
					//revove ,
					$nn=explode(",",$contactName[1][0]);
					if($nn[0]!="")
					{
					$fname=trim($nn[1]." ".$nn[0]);
					}
					
						$femail=trim($contactEmail[2][1]);
						if($femail!="" && $fname!="")
						{
						$contactList[] = array('name' => $fname, 'email' => $femail);
						}
				}
			
			
			
			}
			@sort($contactList);
			return $contactList;

}


?>
