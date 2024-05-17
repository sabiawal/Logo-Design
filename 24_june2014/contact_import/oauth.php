<?php include('top.php');
include("api_loading.php");
unset($_SESSION['gmail_username']);
unset($_SESSION['gmail_email']);
unset($_SESSION['gmail_loggedin']);
?>
<html>
<head>
<title>Super Tell A Friend Gmail Contacts Importer</title>
<link rel="shortcut icon" href="images/favicon.ico" title="Super Tell A Friend">
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php if(isset($_GET['code']))
{ 
ob_flush();
global $max_allowed_contacts_to_import;
$max_results = $max_allowed_contacts_to_import;
if($max_results==0 || $max_results=="") {$max_results=5000;} 

$auth_code = $_GET["code"];

function curl_file_get_contents($url)
{
 $curl = curl_init();
 $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
 
 curl_setopt($curl,CURLOPT_URL,$url);	//The URL to fetch. This can also be set when initializing a session with curl_init().
 curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);	//TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
 curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,5);	//The number of seconds to wait while trying to connect.	
 
 curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);	//The contents of the "User-Agent: " header to be used in a HTTP request.
 curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);	//To follow any "Location: " header that the server sends as part of the HTTP header.
 curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);	//To automatically set the Referer: field in requests where it follows a Location: redirect.
 curl_setopt($curl, CURLOPT_TIMEOUT, 60);	//The maximum number of seconds to allow cURL functions to execute.
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);	//To stop cURL from verifying the peer's certificate.
 
 $contents = curl_exec($curl);
 curl_close($curl);
 return $contents;
}

$fields=array(
    'code'=>  urlencode($auth_code),
    'client_id'=>  urlencode($client_id),
    'client_secret'=>  urlencode($client_secret),
    'redirect_uri'=>  urlencode($redirect_uri),
    'grant_type'=>  urlencode('authorization_code')
);
$post = '';
foreach($fields as $key=>$value) { $post .= $key.'='.$value.'&'; }
$post = rtrim($post,'&');

$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'https://accounts.google.com/o/oauth2/token');
curl_setopt($curl,CURLOPT_POST,5);
curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
$result = curl_exec($curl);
curl_close($curl);

$response =  json_decode($result);
$accesstoken = $response->access_token;

//go to personal info
$url = 'https://www.googleapis.com/oauth2/v2/userinfo?access_token='.$accesstoken;
$xmlresponse =  curl_file_get_contents($url);

if((strlen(stristr($xmlresponse,'Authorization required'))>0) && (strlen(stristr($xmlresponse,'Error '))>0))
{
	echo "<h2>OOPS !!! Something went wrong. Please try reloading the page.</h2>";
	exit();
}

//get full name
$details =  json_decode($xmlresponse);
$user_name=$details->name;

///go to all contacts
$url = 'https://www.google.com/m8/feeds/contacts/default/full?max-results='.$max_results.'&oauth_token='.$accesstoken;
$xmlresponse =  curl_file_get_contents($url);


//parse username and email
$xml=  new SimpleXMLElement($xmlresponse);
$xml->registerXPathNamespace('gd', 'http://schemas.google.com/g/2005');
$user_email = $xml->id;

if(trim($user_name)=='')
{
$user_name  = $xml->author->name;
}


$_SESSION['gmail_username']=trim($user_name);
$_SESSION['gmail_email']=trim($user_email);


///go to contacts in group - my contacts
$url = 'https://www.google.com/m8/feeds/contacts/default/full';
$url .= '?group=http://www.google.com/m8/feeds/groups/'.$_SESSION['gmail_email'].'/base/6';
$url .= '&max-results='.$max_results.'&oauth_token='.$accesstoken;

$xmlresponse =  curl_file_get_contents($url);


$gmailcontacts=0;

$parts = explode('<entry>', $xmlresponse);
				foreach($parts as $v)
				{
					if (preg_match("/(?:<title type='text'>)([^<]*)<.*?(?:<gd:email)[^>]*?address='([^']+)'/si", $v, $matches))
					{
						$name = $matches[1];
						$email = $matches[2];
		
						///handle contacts
						 if($handlecontacts=="0") //do not import contacts with no name
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
							  //done contacts ->array
							  if($name!="" && $email!="")
								{
								 $somecontent=$somecontent.$email."%%%".$name."|||\n";
								 $gmailcontacts++;								
								}			   
					}
					
			}
if($gmailcontacts>0)
{
$_SESSION['gmail_loggedin']="yes";
}
//in the write the file here
$filename="temp/gmailcontacts.txt";
$handle = fopen($filename, 'w');
fwrite($handle, $somecontent);
fclose($handle); 
echo("<script>window.close();</script>");
} //end if isses GET code
?>
</body>
</html>