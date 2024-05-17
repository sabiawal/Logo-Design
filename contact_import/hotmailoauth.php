<?php include('top.php');
include("api_loading.php");
unset($_SESSION['hotmail_loggedin']);
unset($_SESSION['hotmail_username']);
unset($_SESSION['hotmail_email']);
?>
<html>
<head>
<title>Super Tell A Friend Hotmail Contacts Importer</title>
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

///hotmail code
	
$auth_code = $_GET["code"];

    $fields=array(
        'code'=>  urlencode($auth_code),
        'client_id'=>  urlencode($hotmail_client_id),
        'client_secret'=>  urlencode($hotmail_client_secret),
        'redirect_uri'=>  urlencode($hotmail_redirect_uri),
        'grant_type'=>  urlencode('authorization_code')
    );
    $post = '';
    foreach($fields as $key=>$value) { $post .= $key.'='.$value.'&'; }
    $post = rtrim($post,'&');

    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,'https://login.live.com/oauth20_token.srf');
    curl_setopt($curl,CURLOPT_POST,5);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
    $result = curl_exec($curl);
    curl_close($curl);

    $response =  json_decode($result);
    $accesstoken = $response->access_token;
  
  
    $url = 'https://apis.live.net/v5.0/me/contacts?access_token='.$accesstoken.'';
    $xmlresponse =  file_get_contents($url);
    $xml = json_decode($xmlresponse, true);
	
    foreach($xml['data'] as $emails)
    {
            if((trim($emails['emails']['preferred']!="")) && ($hotmailcontacts<=$max_results))
			{
			$name = trim($emails['name']);
			$email = trim($emails['emails']['preferred']);
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
								 $hotmailcontacts++;								
								}	
			
			}
    }

//get user details
$url = 'https://apis.live.net/v5.0/me?access_token=='.$accesstoken.'';
$xmlresponse =  file_get_contents($url);
$xml = json_decode($xmlresponse, true);

$_SESSION['hotmail_username']=trim($xml['name']);
$_SESSION['hotmail_email']=trim($xml['emails']['preferred']);

if($_SESSION['hotmail_username']=='' && $_SESSION['hotmail_email']!='')
{
	$nn=explode("@",$_SESSION['hotmail_email']);
	$name=$nn[0];
	$_SESSION['hotmail_username']=$name;
}

	
if($_SESSION['hotmail_email']!="" && $hotmailcontacts>0)
{
$_SESSION['hotmail_loggedin']="yes";
}

///end hotmail code


//in the write the file here
$filename="temp/livecontacts.txt";
$handle = fopen($filename, 'w');
fwrite($handle, $somecontent);
fclose($handle);
echo("<script>window.close();</script>");
} //end if isset GET code
?>
</body>
</html>