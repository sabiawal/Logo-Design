<?php include("top.php");
if(($enablecaptcha=="1") && (!isset($_SESSION['captchaok'])) && ($_SESSION['captchaok']!="yes"))  //captcha redirect
{
echo("<script>window.location='index.php'</script>");
}

///yahoo api code
if((!$importsucess) && ($contactimporter_service17==1) &&(!$csvimportsucess) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{
require dirname(__FILE__).'/includes/lib/Yahoo.inc';
session_save_path('/tmp/');

$yahoohasSession = YahooSession::hasSession(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, OAUTH_APP_ID);
if($yahoohasSession == FALSE) {
  // create the callback url,
  if($_GET['importype']=='import')
   {$callback = YahooUtil::current_url()."&in_popup";}
   else
   {$callback = YahooUtil::current_url()."?in_popup";}

  // pass the credentials to get an auth url.
  // this URL will be used for the pop-up.
  $yahoo_auth_url = YahooSession::createAuthorizationUrl(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, $callback); 

}
else {

  // pass the credentials to initiate a session
  $yahoo_session = YahooSession::requireSession(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, OAUTH_APP_ID);

  // if the in_popup flag is detected,
  // the pop-up has loaded the callback_url and we can close this window.

  if(array_key_exists("in_popup", $_GET)) 
  {
	close_popup();
    exit;
  }
}
}
//end yahoo api


if((!$importsucess)&&(!$csvimportsucess) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{ //get enabled services 
		$nr_serv_in_combo=0;
		for($sv=1;$sv<=18;$sv++)
		{
		$nt=${"contactimporter_service".$sv};
		if($nt=="1"){$nr_serv_in_combo++;}
		}
	$res_extra_services=mysql_query("SELECT * FROM staf_additional_email_services WHERE visible='1'");
	$extraservices=mysql_num_rows($res_extra_services);
	$nr_serv_in_combo=$nr_serv_in_combo+$extraservices;
	
}// end enabled
		
	///user IP
	$userip=$_SERVER['REMOTE_ADDR'];

if($_POST['act']=="showContacts")  //importing operation here
{
	///banned email
	///service
	if($_POST['service']!='otheremail' && $_POST['service']!='fastmail' && $_POST['service']!='gmx.net' && $_POST['service']!='web.de' &&(strpos($_POST['service'],'additionalemail_')=== false)) 
	{ $userfullemailaddress=trim($_POST['username'])."@".$_POST['service'].".com"; }
	if ($_POST['service']=='fastmail'){$userfullemailaddress=trim($_POST['username'])."@fastmail.fm";}
	if ($_POST['service']=='otheremail') {$userfullemailaddress=trim($_POST['username']);}
	if ($_POST['service']=='gmx.net'){$userfullemailaddress=trim($_POST['username'])."@gmx.net";}
	if ($_POST['service']=='web.de'){$userfullemailaddress=trim($_POST['username'])."@web.de";}
	
	if(strpos($_POST['service'],'additionalemail_')!== false) 
	{ 
		$webemail_ext_arr=explode("_",$_POST['service']);
		$userfullemailaddress=trim($_POST['username'])."@".$webemail_ext_arr[1];
	}
	
	is_banned_email($userfullemailaddress);
	//end banned email

	RemoveDir($tempdirpath,false);
	$message="";
	$message2="";
	$message3="";
	$importsucess=false;
	$csvimportsucess=false;
	include("includes/curl.inc.php");
	switch ($_POST['service']) 
	{
	
	case "web.de" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/webde.inc.php");  
	$res=get_contacts($only_username[0]."@".$_POST['service'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2."<br>";
				$importsucess=true;
			}
		}
	break;
		
	case "yahoo" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	//$_POST['username'] = @str_replace("@yahoo.com", "", $_POST['username']);
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin(trim($_POST['username']), trim($_POST['password']));
		if (eregi('Invalid ID or password.', $res))
		{
			$message=$importermessage1;
		}
		else if (eregi('This ID is not yet taken.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	
	case "ymail" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	//$_POST['username'] = @str_replace("@yahoo.com", "", $_POST['username']);
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin(trim($_POST['username']."@ymail.com"), trim($_POST['password']));
		if (eregi('Invalid ID or password.', $res))
		{
			$message=$importermessage1;
		}
		else if (eregi('This ID is not yet taken.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case "rocketmail" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	//$_POST['username'] = @str_replace("@yahoo.com", "", $_POST['username']);
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin(trim($_POST['username']."@rocketmail.com"), trim($_POST['password']));
		if (eregi('Invalid ID or password.', $res))
		{
			$message=$importermessage1;
		}
		else if (eregi('This ID is not yet taken.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case "aol" : 
	//$_POST['username'] = @str_replace("@aol.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	require("includes/aol.inc.php"); 
	$res=getContactList(trim($_POST['username']), trim($_POST['password']));
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case "hotmail" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	//$_POST['username'] = @str_replace("@hotmail.com", "", $_POST['username']);
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login(trim($_POST['username'])."@hotmail.com", trim($_POST['password']));

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case "msn" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	//$_POST['username'] = @str_replace("@msn.com", "", $_POST['username']);
	include("includes/msn_api.inc.php"); 
	$res=hotmail_login(trim($_POST['username'])."@msn.com", trim($_POST['password']));

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case "gmail" : 
	//$_POST['username'] = @str_replace("@gmail.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/gmail_api.inc.php"); 
	$login = trim($_POST['username']);
  	$password = trim($_POST['password']);
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{

  		 if (!eregi("@", $login))
  	 	 {
		 $login = $login . "@" . strtolower($iscript) . ".com";
  		 }
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
		}
	break;
	
	case "googlemail" : 
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/gmail_api.inc.php"); 
	$login = trim($_POST['username']);
  	$password = trim($_POST['password']);
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{

  		 if (!eregi("@", $login))
  	 	 {
		 $login = $login . "@" . strtolower($iscript) . ".com";
  		 }
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
		}
	break;
	
	case "lycos" : 
	//$_POST['username'] = @str_replace("@lycos.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/lycos.inc.php"); 
	$res=getContactList(trim($_POST['username']), trim($_POST['password']));
		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;

	case "maildotcom" : 
	//$_POST['username'] = @str_replace("@mail.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	$_POST['service']="mail";
	include("includes/mail.inc.php"); 
	$res=getContactList(trim($_POST['username']), trim($_POST['password']));
		if (eregi('The email address or password is incorrect', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	
	case "live" : 
	//$_POST['username'] = @str_replace("@live.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login(trim($_POST['username'])."@live.com", trim($_POST['password']));

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	///
	case "icqmail" : 
	//$_POST['username'] = @str_replace("@icqmail.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	require("includes/icq.inc.php"); 
	$res=getContactList_icq(trim($_POST['username'])."@icqmail.com", trim($_POST['password']));
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{ 
			$contacts=$res;
			if(count($res)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($res)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	///
	case  "rediffmail" :
	//$_POST['username'] = @str_replace("@rediffmail.com", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/rediffmail.inc.php"); 
	$res=getContactList_rediff(trim($_POST['username']), trim($_POST['password']));
		if ($res==-1)
		{
			$message=$importermessage1;
			$importsucess=false;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	case  "fastmail" :
	//$_POST['username'] = @str_replace("@fastmail.fm", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/fastmail.inc.php"); 
	$res=getContactList_fastmail(trim($_POST['username'])."@fastmail.fm", trim($_POST['password']));
		if ($res==-1)
		{
			$message=$importermessage1;
			$importsucess=false;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	break;
	
	case "gmx.net" : 
	//$_POST['username'] = @str_replace("@gmx.net", "", $_POST['username']);
	$only_username=explode("@",$_POST['username']);
	$_POST['username'] = $only_username[0];
	
	include("includes/gmx.inc.php"); 
	$login = trim($_POST['username'])."@gmx.net";
  	$password = trim($_POST['password']);
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
	}
	break;
	////
	case "otheremail" : 
	///find service
	$servicefound=0;
	
	
	if(strpos(strstr($_POST['username'], '@'),"web.de")) //web.de
	{
	$servicefound=1;
	include("includes/webde.inc.php");  
	$res=get_contacts($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2."<br>";
				$importsucess=true;
			}
		}
	}
	
	if(strpos(strstr($_POST['username'], '@'),"gmx")) //gmx
	{
	
	include("includes/gmx.inc.php"); 
	$login = trim($_POST['username']);
  	$password = trim($_POST['password']);
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
	}
	}
	
	
	if(strpos(strstr($_POST['username'], '@'),"yahoo")) //yahoo
	{
	$servicefound=1;
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strpos(strstr($_POST['username'], '@'),"ymail")) //ymail
	{
	$servicefound=1;
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	
	if(strpos(strstr($_POST['username'], '@'),"rocketmail")) //rocketmail
	{
	$servicefound=1;
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
 
  if(strpos(strstr($_POST['username'],'@'),"aol")) //aol
  {
  	$servicefound=1;
	require("includes/aol.inc.php"); 
	$uname_s=explode("@",$_POST['username']);
	$res=getContactList($uname_s[0], $_POST['password']);
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

   if(strpos(strstr($_POST['username'],'@'),"icqmail.com")) //icq
   {
  	$servicefound=1;
	require("includes/icq.inc.php"); 
	$res=getContactList_icq($_POST['username'], $_POST['password']);
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{ 
			$contacts=$res;
			if(count($res)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($res)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strpos(strstr($_POST['username'], '@'),"hotmail")) //hotmail
	{
	$servicefound=1;
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login($_POST['username'], $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	
	if(strpos(strstr($_POST['username'], '@'),"msn")) //msn
	{
	$servicefound=1;
	include("includes/msn_api.inc.php"); 
	$res=hotmail_login($_POST['username'], $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strpos(strstr($_POST['username'], '@'),"live"))
	{
	$servicefound=1;
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login($_POST['username'], $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strpos(strstr($_POST['username'], '@'),"gmail")) 
	{
	$servicefound=1;
	include("includes/gmail_api.inc.php"); 
	$login = $_POST['username'];
  	$password = $_POST['password'];
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{
  		 if (!eregi("@", $login))
  	 	 {
		 $login = $login . "@" . strtolower($iscript) . ".com";
  		 }
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
		}
	}
	if(strpos(strstr($_POST['username'], '@'),"lycos"))
	{
	$servicefound=1;
	include("includes/lycos.inc.php"); 
	$uname_s=explode("@",$_POST['username']);
	$res=getContactList($uname_s[0], $_POST['password']);
		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strstr($_POST['username'], '@')=="@mail.com") //mail.com 
	{
	$servicefound=1;
	include("includes/mail.inc.php"); 
	$res=getContactList($_POST['username'], $_POST['password']);
		if (eregi('The email address or password is incorrect', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
    } 
	
	if(strpos(strstr($_POST['username'], '@'),"rediffmail.com")) //rediff
	{
	$servicefound=1;
	include("includes/rediffmail.inc.php"); 
	$split_username=explode("@",$_POST['username']);
	$res=getContactList_rediff($split_username[0], $_POST['password']);
		if ($res==-1)
		{
			$message=$importermessage1;
			$importsucess=false;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
    } 
	//search in fastmail
	$is_fm=false;
	$fm_domain=explode("@",trim($_POST['username']));
	$fm_found=array_search(trim($fm_domain[1]),$fm_array);
	if(is_numeric($fm_found)){$is_fm=true;}

	if($is_fm) //fastmail
	{

	$servicefound=1;
	include("includes/fastmail.inc.php"); 
	$res=getContactList_fastmail(trim($_POST['username']), trim($_POST['password']));
		if ($res==-1)
		{
			$message=$importermessage1;
			$importsucess=false;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
    } 
	
	//end if service
	////
	///serice not found message
	if($servicefound==0)
	{$message=$importermessage4;}
	break;
	}
	
	////new code ->additional emails
	if(strpos($_POST['service'],'additionalemail_')!== false) 
	{ 

	$webemail_ext_arr=explode("_",$_POST['service']);
	$useremailaddress=trim($_POST['username'])."@".$webemail_ext_arr[1];
	
	
	if(strpos($webemail_ext_arr[1],"gmx")!== false) //gmx
	{
	
	include("includes/gmx.inc.php"); 
	$login = trim($useremailaddress);
  	$password = trim($_POST['password']);
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
	}
	}
	
	if(strpos($webemail_ext_arr[1],"yahoo")!== false) //yahoo
	{
	
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	if(strpos($webemail_ext_arr[1],"ymail")!== false) //ymail
	{
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	
	
	if(strpos($webemail_ext_arr[1],"rocketmail")!== false) //rocketmail
	{
	include("includes/yahoo_api.inc.php");  
	$res=yahoologin($_POST['username'], $_POST['password']);
		if ($res==false)
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
 
    if(strpos($webemail_ext_arr[1],"aol")!== false) //aol
	{
	require("includes/aol.inc.php"); 
	$res=getContactList(trim($_POST['username']), $_POST['password']);
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

    if(strpos($webemail_ext_arr[1],"icqmail")!== false) //icqmail
	{
	require("includes/icq.inc.php"); 
	$res=getContactList_icq($useremailaddress, $_POST['password']);
		if (eregi('Invalid Screen Name or Password.', $res))
		{
			$message=$importermessage1;
		}
		else
		{ 
			$contacts=$res;
			if(count($res)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($res)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

	if(strpos($webemail_ext_arr[1],"hotmail")!== false) //hotmail
	{
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login($useremailaddress, $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}
	
	if(strpos($webemail_ext_arr[1],"msn")!== false) //msn
	{
	include("includes/msn_api.inc.php"); 
	$res=hotmail_login($useremailaddress, $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

	if(strpos($webemail_ext_arr[1],"live")!== false) //live
	{
	include("includes/hotmail_api.inc.php"); 
	$res=hotmail_login($useremailaddress, $_POST['password']);

		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(empty($contacts) || (trim($contacts[0])=='T'&&trim($contacts[1])=='h' &&trim($contacts[2])=='e' &&trim($contacts[4])=='e'))
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

	if(strpos($webemail_ext_arr[1],"gmail")!== false) //gmail
	{
	include("includes/gmail_api.inc.php"); 
	$login = $useremailaddress;
  	$password = $_POST['password'];
	$contacts=get_contacts($login, $password);
	if(is_array($contacts))
	{
  		 if (!eregi("@", $login))
  	 	 {
		 $login = $login . "@" . strtolower($iscript) . ".com";
  		 }
	$message2=count($contacts)." ".$importermessage2;
	$importsucess=true;
	}
	  else 
  	{
   	 switch ($contacts)
		{
		  case 1: #invalid login
			$message = $importermessage1;
			break;
		  case 2: #empty username or password
			$message = $importermessage1;
			break;
		}
		}
	}

	if(strpos($webemail_ext_arr[1],"lycos")!== false) //lycos
	{
	include("includes/lycos.inc.php"); 
	$res=getContactList($_POST['username'], $_POST['password']);
		if (eregi('The email address or password is incorrect.', $res))
		{
			$message=$importermessage1;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
	}

	
	if(strpos($webemail_ext_arr[1],"rediffmail")!== false) //lycos
	{	
	include("includes/rediffmail.inc.php"); 
	$res=getContactList_rediff($_POST['username'], $_POST['password']);
		if ($res==-1)
		{
			$message=$importermessage1;
			$importsucess=false;
		}
		else
		{
			$contacts=$res;
			if(count($contacts)==0)
			{
				$message=$importermessage1;
			}
			else
			{
				$message2=count($contacts)." ".$importermessage2;
				$importsucess=true;
			}
		}
    } 



}
	
	///end new code for additional
	
	////check again contacts
	if(empty($contacts) || count($contacts)==0)
	{
	$importsucess=false;
	$message=$importermessage1;
	}

	///insert into import here///
	if($importsucess==true)
	{
    ///service
	if($_POST['service']!='otheremail' && $_POST['service']!='fastmail' && $_POST['service']!='gmx.net'&& $_POST['service']!='web.de'&&(strpos($_POST['service'],'additionalemail_')=== false)) 
	{ $userfullemailaddress=trim($_POST['username'])."@".$_POST['service'].".com"; }
	if ($_POST['service']=='fastmail'){$userfullemailaddress=trim($_POST['username'])."@fastmail.fm";}
	if ($_POST['service']=='otheremail') {$userfullemailaddress=trim($_POST['username']);}
	if ($_POST['service']=='gmx.net'){$userfullemailaddress=trim($_POST['username'])."@gmx.net";}
	if ($_POST['service']=='web.de'){$userfullemailaddress=trim($_POST['username'])."@web.de";}
	if(strpos($_POST['service'],'additionalemail_')!== false) 
	{ 
		$webemail_ext_arr=explode("_",$_POST['service']);
		$userfullemailaddress=trim($_POST['username'])."@".$webemail_ext_arr[1];
	}
	
	
	//get existing user details
	$todaycomplete=date("Y-m-d H:i");
	$totalimportedcontacts=count($contacts);
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE sender_email='".$userfullemailaddress."'");
	$exists=mysql_num_rows($res_sender);
	if($exists=='0') //the user does not exist
	{
	mysql_query('INSERT INTO staf_senders VALUES ("","'.$userfullemailaddress.'","'.trim($_POST['clientname']).'","","","","","'.$totalimportedcontacts.'","","","","0","0","'.$userip.'","0","'.trim($_POST['affiliateid']).'")');
	$senderid=mysql_insert_id();
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","'.$totalimportedcontacts.'","0","0","0","'.$todaycomplete.'","0","Email import","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
	if($exists=='1') //the user exist
	{
	$senderdata=mysql_fetch_array($res_sender);
	$senderid=$senderdata['senderid'];
	$newtotalimported=$senderdata['total_imported']+$totalimportedcontacts;
	mysql_query('UPDATE staf_senders SET total_imported="'.$newtotalimported.'", useraffiliateid="'.trim($_POST['affiliateid']).'" WHERE senderid="'.$senderid.'"');
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","'.$totalimportedcontacts.'","0","0","0","'.$todaycomplete.'","0","Email import","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
		///top message
			$nrtobesent=0;
			$nrtovisit=0;
			$senttillnow=0;
		if(($reward1_afterimporting)&&($reward1_invitations_sent!='9999')) //if reward1 enabled and show remaining enabled 
		{
		
			if($exists) //the user exists in database
			{
				$senttillnow=$senderdata['total_sent'];
				$nrtobesent=$reward1_invitations_sent-$senderdata['total_sent'];
					if($nrtobesent>0)
					{
					$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward1_afterimporting_text);
					$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
					$newmessage = @str_replace("%%%emailstobesent%%%", $nrtobesent, $newmessage);
					$message2=$message2."<br><b>".$newmessage."</b>";
					}
					if($nrtobesent<=0)
					{
					$message2=$message2;
					$nrtobesent2=0;
					}
				
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward1_invitations_sent;
			$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward1_afterimporting_text);
			$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
			$newmessage = @str_replace("%%%emailstobesent%%%", $nrtobesent, $newmessage);
			$message2=$message2."<br><b>".$newmessage."</b>";
			}
		  $nrtobesent2=$nrtobesent;
		}
		///visits
		if(($reward2_afterimporting)&&($reward2_invitations_sent!='9999')) //if reward2 enabled and show remaining enabled 
		{

			if($exists=='1') //the user exists in database
			{ 
				$senttillnow=$senderdata['total_visited'];
				$nrtobesent=$reward2_invitations_sent-$senderdata['total_visited'];
					if($nrtobesent>0)
					{
					$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward2_afterimporting_text);
					$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
					$newmessage = @str_replace("%%%visitorstocome%%%", $nrtobesent, $newmessage);
					$message2=$message2."<br><b>".$newmessage."</b>";
					}
					if($nrtobesent<=0)
					{
					$message2=$message2;
					$nrtobesent=0;
					}
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward2_invitations_sent;
			$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward2_afterimporting_text);
			$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
			$newmessage = @str_replace("%%%visitorstocome%%%", $nrtobesent, $newmessage);
			$message2=$message2."<br><b>".$newmessage."</b>";
			}
		  
		}
	}
////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	
$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

if($emailstosent_today<=0) //if today all emails have beed sent
{$maxemailnr=0;}
	else
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		
		}	
	}
///	
}
///csv file import here
if($_POST['act']=="csvshowContacts")  //importing operation  here
{
	/////banned email
	$userfullemailaddress=trim($_POST['fromemail']);
	is_banned_email($userfullemailaddress);
	///
	$message="";
	$message2="";
	$message3="";
	$importsucess=false;
	$csvimportsucess=false;
	include('includes/classupload/class.upload.php');
	    
		//delete csv file if exists
		$filename='temp/newcsvfile.csv';
		if(file_exists('temp/newcsvfile.csv')) 
		@unlink($filename);
		//delete txt file if exists
		$filename='temp/newfile.txt';
		if(file_exists('temp/newfile.txt')) 
		@unlink($filename);
	
	if($_POST['csvformat']=='4') //comma file
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newfile.txt';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode(",",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=0;$i<=$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					$emailsdetails[0]=trim($emails[$i]);
					$emailsdetails[1]=trim($emails[$i]);
			

					if(check_email_address(trim($emailsdetails[1])))
						{
						$nn=explode("@", $emailsdetails[1]);
						$fname=trim($nn[0]);
			
						if($fname!="" && trim($emailsdetails[1])!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($emailsdetails[1]));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end comma
	if($_POST['csvformat']=='5') //tab file
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newfile.txt';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode("\t",$emails[$i]);
					$emailsdetails[1]=trim($emailsdetails[1]);
			

					if(check_email_address(trim($emailsdetails[1])))
						{
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($emailsdetails[0])=="")
										{
										$fname="";
										}
									else
									{$fname= trim($emailsdetails[0]);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($emailsdetails[0])=="")
										{
										$fname=trim($emailsdetails[1]);
										}
									else
									{$fname= trim($emailsdetails[0]);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim( $emailsdetails[0])=="")
									{
									$nn=explode("@", $emailsdetails[1]);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($emailsdetails[0]);}
								}
							
						if($fname!="" && trim($emailsdetails[1])!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($emailsdetails[1]));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end tab
	
	if($_POST['csvformat']=='3') //generic
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					$emailsdetails[1]=trim($emailsdetails[1]);
			

					if(check_email_address(trim($emailsdetails[1])))
						{
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($emailsdetails[0])=="")
										{
										$fname="";
										}
									else
									{$fname= trim($emailsdetails[0]);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($emailsdetails[0])=="")
										{
										$fname=trim($emailsdetails[1]);
										}
									else
									{$fname= trim($emailsdetails[0]);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim( $emailsdetails[0])=="")
									{
									$nn=explode("@", $emailsdetails[1]);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($emailsdetails[0]);}
								}
							
						if($fname!="" && trim($emailsdetails[1])!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($emailsdetails[1]));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end generic
	if($_POST['csvformat']=='8') //hotmai csv
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					
					$userfullname="";
					$useremail="";
					
					///build email
					$useremail=trim($emailsdetails[46]); //default email field
					if($useremail=="") ///look for other email
					{
						$useremail=trim($emailsdetails[49]);
					}
					if($useremail=="") ///look for other email
					{
						$useremail=trim($emailsdetails[51]);
					}
					
					$useremail=preg_replace('/[\x00-\x09\x0B-\x19\x7F]/', '', $useremail);
					if(check_email_address(trim($useremail)))
						{
							
							///build name
							$userfullname=trim($emailsdetails[1])." ".trim($emailsdetails[2])." ".trim($emailsdetails[3]);
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($userfullname)=="")
										{
										$fname="";
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($userfullname)=="")
										{
										$fname=trim($useremail);
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim($userfullname)=="")
									{
									$nn=explode("@", $useremail);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($userfullname);}
								}
							
						if($fname!="" && trim($useremail)!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($useremail));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end hotmail csv
	
	if($_POST['csvformat']=='7') //gmail csv
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					
					$userfullname="";
					$useremail="";
					
					///build email
					$useremail=trim($emailsdetails[28]); //default email field
					if($useremail=="") ///look for other email
					{
						$useremail=trim($emailsdetails[30]);
					}
					if($useremail=="") ///look for other email
					{
						$useremail=trim($emailsdetails[32]);
					}
					if($useremail=="") ///look for other email
					{
						$useremail=trim($emailsdetails[34]);
					}		
					
					$useremail=preg_replace('/[\x00-\x09\x0B-\x19\x7F]/', '', $useremail);
					if(check_email_address(trim($useremail)))
						{
							///build name
							$userfullname=trim($emailsdetails[1])." ".trim($emailsdetails[2])." ".trim($emailsdetails[3]);
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($userfullname)=="")
										{
										$fname="";
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($userfullname)=="")
										{
										$fname=trim($useremail);
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim($userfullname)=="")
									{
									$nn=explode("@", $useremail);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($userfullname);}
								}
							
						if($fname!="" && trim($useremail)!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($useremail));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end gmail csv
	
	if($_POST['csvformat']=='9') //aol csv
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					
					$userfullname="";
					$useremail="";
					
					///build email
					$useremail=trim($emailsdetails[4]); //default email field
					if($useremail=="") ///look for second email
					{
						$useremail=trim($emailsdetails[5]);
					}
					$useremail=preg_replace('/[\x00-\x09\x0B-\x19\x7F]/', '', $useremail);
					if(check_email_address(trim($useremail)))
						{
							
							///build name
							$userfullname=trim($emailsdetails[0])." ".trim($emailsdetails[1]);
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($userfullname)=="")
										{
										$fname="";
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($userfullname)=="")
										{
										$fname=trim($useremail);
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim($userfullname)=="")
									{
									$nn=explode("@", $useremail);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($userfullname);}
								}
							
						if($fname!="" && trim($useremail)!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($useremail));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end aol csv
	
	
	if($_POST['csvformat']=='6') //yahoo csv
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					
					$userfullname="";
					$useremail="";
					
					///build email
					$useremail=trim($emailsdetails[4]); //default email field
					if($useremail=="") ///look for yahoo id
					{
						if(check_email_address($emailsdetails[7]))
						{
							$useremail=trim($emailsdetails[7]); //full email id
						}
						else
						{
							$useremail=trim($emailsdetails[7])."yahoo.com"; //yahoo id
						}
						
					}
					if($useremail=="") ///look for id
					{
						$useremail=trim($emailsdetails[50]); //icq id
					}
					if($useremail=="") ///look for id
					{
						$useremail=trim($emailsdetails[51]); //gmail id
					}
					if($useremail=="") ///look for id
					{
						$useremail=trim($emailsdetails[52]); //gmail id
					}
						if($useremail=="") ///look for id
					{
						$useremail=trim($emailsdetails[55]); //aim id
					}
			
					$useremail=preg_replace('/[\x00-\x09\x0B-\x19\x7F]/', '', $useremail);
					if(check_email_address(trim($useremail)))
						{
							
							///build name
							$userfullname=trim($emailsdetails[0])." ".trim($emailsdetails[1])." ".trim($emailsdetails[2]);
							//option to import
							  if($handlecontacts=="0") //do not import
				       			{
									if(trim($userfullname)=="")
										{
										$fname="";
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="1") //email->name
								{
									if(trim($userfullname)=="")
										{
										$fname=trim($useremail);
										}
									else
									{$fname= trim($userfullname);}
								}
								if($handlecontacts=="2") //id->name
								{
									if(trim($userfullname)=="")
									{
									$nn=explode("@", $useremail);
									$fname=trim($nn[0]);
									}
									else
									{$fname= trim($userfullname);}
								}
							
						if($fname!="" && trim($useremail)!="") 
						  {
						  $contacts[] = array('name' => $fname, 'email' => trim($useremail));
						  }
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	}///end yahoo csv
	
	
	////
    if($_POST['csvformat']=='0' || $_POST['csvformat']=='1') //outlook
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$data=str_replace('"','',$data);
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		////find position name and email
		$tofindpos=explode(",",$emails[0]);
		$nrtoparse=sizeof($tofindpos);
		$goodpos="";
		$goodpos2="";
		$goodpos1_1="";
		$goodpos1_2="";
		
		for($x=0;$x<$nrtoparse;$x++)
		{
		if(strtoupper(trim($tofindpos[$x]))=="NAME")
			{
			$goodpos=$x;
			}
		if(strtoupper(trim($tofindpos[$x]))=="E-MAIL ADDRESS")
			{
			$goodpos2=$x;
			}
		}
		//name not found
		if(trim($goodpos)=="")
		{
			for($x=0;$x<$nrtoparse;$x++)
			{
			if(strtoupper(trim($tofindpos[$x]))=="FIRST NAME")
				{
				$goodpos1_1=$x;
				}
			if(strtoupper(trim($tofindpos[$x]))=="LAST NAME")
				{
				$goodpos1_2=$x;
				}
			}
		
		}
		////end names and emails
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);

					//explode
					$emailsdetails=explode(",",$emails[$i]);
					$emailsdetails[$goodpos2]=trim($emailsdetails[$goodpos2]);
					
					if(check_email_address($emailsdetails[$goodpos2]))
						{
							//final name - field - name
							if(trim($goodpos)!="")
							{
							$final_found_name=trim($emailsdetails[$goodpos]);
							}
							if(trim($goodpos)=="")//field name not found
							{
							$final_found_name=trim($emailsdetails[$goodpos1_1])." ".trim($emailsdetails[$goodpos1_2]);
							}
						$final_found_name=trim($final_found_name);
						
						//import options
						if($handlecontacts=="0") //do not import
				       	{
							if(trim($final_found_name)=="")
								{
								$fname="";
								}
								else
								{$fname=trim($final_found_name);}
						}
						 if($handlecontacts=="1") //email->name
				        {
									if(trim($final_found_name)=="")
									{	
									$fname=trim($emailsdetails[$goodpos2]);
									}
									else
									{$fname=trim($final_found_name);}
						}
						if($handlecontacts=="2") //id->name
				        {
							if(trim($final_found_name)=="")
							{
							$nn=explode("@",$emailsdetails[$goodpos2]);
							$fname=trim($nn[0]);
							}
							else
							{$fname=trim($final_found_name);}
						}
						
							if($fname!="" && trim($emailsdetails[$goodpos2])!="")
							{
							$contacts[] = array('name' => $fname, 'email' => trim($emailsdetails[$goodpos2]));
							}
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2;$csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2;$csvimportsucess=false;}

	///end outlook
	}
	 if($_POST['csvformat']=='2') //thunderbird
	{
	$handle = new Upload($_FILES['fis']);
	if ($handle->uploaded) 
	{
	$handle->file_new_name_body = 'newcsvfile';
	$handle->file_auto_rename = false;
	$handle->file_overwrite = true;
	$handle->Process("temp");
	if ($handle->processed) 
		{
		$handle->clean();
		$filename='temp/newcsvfile.csv';
		$handle = fopen($filename, "r");
		$data = fread($handle, filesize($filename));
		$data=str_replace('"','',$data);
		$emails=explode("\n",$data);
		$totalemails=sizeof($emails);
		$endposition=$totalemails-1;
		for($i=1;$i<$endposition;$i++)
				{
					if((trim($emails[$i]!='')) && (!empty($emails[$i])))
					{
						
					//replace quotes
					$emails[$i]=str_replace('"','',$emails[$i]);
					$emails[$i]=str_replace("'","",$emails[$i]);
					
					//explode
					$emailsdetails=explode(",",$emails[$i]);
					$emailsdetails[4]=trim($emailsdetails[4]);
					
					if(check_email_address($emailsdetails[4]))
						{
						//import or not
						  if($handlecontacts=="0") //do not import
				      		 {
							 if(trim($emailsdetails[3])=="")
								{$fname="";}
								else
								{$fname=trim($emailsdetails[3]);}
							 }
					  if($handlecontacts=="1") //email->name
				       {
						   if(trim($emailsdetails[3])=="")
							{
							$fname=trim($emailsdetails[4]);
							}
							else
							{$fname=trim($emailsdetails[3]);}
					   } 
					  if($handlecontacts=="2") //id->name
				       {
						   if(trim($emailsdetails[3])=="")
							{
							$nn=explode("@",$emailsdetails[4]);
							$fname=trim($nn[0]);
							}
							else
							{$fname=trim($emailsdetails[3]);}
					   }
						
						///
						if($fname!="" && trim($emailsdetails[4])!=""){$contacts[] = array('name' => $fname, 'email' => trim($emailsdetails[4]));}
						}
					}
				
				}
				$totcontacts=count($contacts);
				if($totcontacts>0)
				{
				$message3=count($contacts)." ".$csvimportermessage3;
				$csvimportsucess=true;
			    @sort($contacts);
				
				}
				else
				{
				$message3=$csvimportermessage1;
				$csvimportsucess=false;
				}
			} 
			else 
			{
			$message3=$csvimportermessage2; $csvimportsucess=false;}
			} 
			else 
			{$message3=$csvimportermessage2; $csvimportsucess=false;}	
		}
	//end thbird
	////check again # of contacts
	if(empty($contacts) || count($contacts)==0)
	{
	$csvimportsucess=false;
	$message3=$csvimportermessage1;
	}
	///insert into import table here///
	if($csvimportsucess==true)
	{
	$userfullemailaddress=trim($_POST['fromemail']);
	//get existing user details
	$todaycomplete=date("Y-m-d H:i");
	$totalimportedcontacts=count($contacts);
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE sender_email='".$userfullemailaddress."'");
	$exists=mysql_num_rows($res_sender);
	if($exists=='0') //the user does not exist
	{
	mysql_query('INSERT INTO staf_senders VALUES ("","'.$userfullemailaddress.'","'.trim($_POST['clientname']).'","","","","","'.$totalimportedcontacts.'","","","","0","0","'.$userip.'","0","'.trim($_POST['affiliateid']).'")');
	$senderid=mysql_insert_id();
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","'.$totalimportedcontacts.'","0","0","0","'.$todaycomplete.'","0","Csv import","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
	if($exists=='1') //the user exist
	{
	$senderdata=mysql_fetch_array($res_sender);
	$senderid=$senderdata['senderid'];
	$newtotalimported=$senderdata['total_imported']+$totalimportedcontacts;
	mysql_query('UPDATE staf_senders SET total_imported="'.$newtotalimported.'", useraffiliateid="'.trim($_POST['affiliateid']).'" WHERE senderid="'.$senderid.'"');
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","'.$totalimportedcontacts.'","0","0","0","'.$todaycomplete.'","0","Csv import","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
	///top message
	$nrtobesent=0;
	$nrtovisit=0;
	$senttillnow=0;
		if(($reward1_afterimporting)&&($reward1_invitations_sent!='9999')) //if reward1 enabled and show remaining enabled 
		{
		
			if($exists="1") //the user exists in database
			{ 
				$senttillnow=$senderdata['total_sent'];
				$nrtobesent=$reward1_invitations_sent-$senderdata['total_sent'];
					if($nrtobesent>0)
					{
					$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward1_afterimporting_text);
					$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
					$newmessage = @str_replace("%%%emailstobesent%%%", $nrtobesent, $newmessage);
					$message3=$message3."<br><b>".$newmessage."</b>";
					}
					if($nrtobesent<=0)
					{
					$message3=$message3;
					$nrtobesent2=0;
					}
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward1_invitations_sent;
			$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward1_afterimporting_text);
			$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
			$newmessage = @str_replace("%%%emailstobesent%%%", $nrtobesent, $newmessage);
			$message3=$message3."<br><b>".$newmessage."</b>";
			}
		 $nrtobesent2=$nrtobesent;
		}
		///visits
		if(($reward2_afterimporting)&&($reward2_invitations_sent!='9999')) //if reward2 enabled and show remaining enabled 
		{
		
			if($exists) //the user exists in database
			{
				$senttillnow=$senderdata['total_visited'];
				$nrtobesent=$reward2_invitations_sent-$senderdata['total_visited'];
					if($nrtobesent>0)
					{
					$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward2_afterimporting_text);
					$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
					$newmessage = @str_replace("%%%visitorstocome%%%", $nrtobesent, $newmessage);
					$message3=$message3."<br><b>".$newmessage."</b>";
					}
					if($nrtobesent<=0)
					{$message3=$message3;}
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward2_invitations_sent;
			$newmessage = @str_replace("%%%sendername%%%", $_POST['clientname'], $reward2_afterimporting_text);
			$newmessage = @str_replace("%%%senderemail%%%", $userfullemailaddress, $newmessage);
			$newmessage = @str_replace("%%%visitorstocome%%%", $nrtobesent, $newmessage);
			$message3=$message3."<br><b>".$newmessage."</b>";
			}
		
		}
	}
	////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	
$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

if($emailstosent_today<=0) //if today all emails have beed sent
{$maxemailnr=0;}
	else
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		
		}	
	}
///	
}
///send invitations ->CSV import 
if($_POST['act']=="sendcsvMessage" && isset($_POST['csvsendemails'])) 
{
////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	
$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

if($emailstosent_today<=0) //if today all emails have beed sent
{$maxemailnr=0;}
	else ///send today still possible
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		
		}	
	}

//get existing user details
$lastbranchid=$_POST['lastbranchid'];
$senderid=$_POST['senderid'];
$todaycomplete=date("Y-m-d H:i");
//get user details
$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
$exists=mysql_num_rows($res_sender);
if($exists=='1') //the user exist
{
$senderdata=mysql_fetch_array($res_sender);
$senderid=$senderdata['senderid'];
$senderemailmd5=md5($senderdata['sender_email']);
$oldtotalsent=$senderdata['total_sent'];
$oldtotalimported=$senderdata['total_imported'];
}
////
if(trim($_POST['fromemail'])!='')
{
include("includes/phpmailer/class.phpmailer.php");
$nrsent=0;
/////////////////////email
$Mail = new PHPMailer();
$Mail->IsHTML(true);
$Mail->AddReplyTo($reply_all_email,$sender_email_from_name);
//SMTP
	if($mailmethod_smtp=="1")
	{
	//get the first SMTP server
	$ressmtp=mysql_query("SELECT * FROM staf_smtp_servers WHERE used=(SELECT min(used) FROM staf_smtp_servers) LIMIT 1");
	$emailsettingssmtp=mysql_fetch_array($ressmtp);
	$mailmethod_smtp_username=$emailsettingssmtp['mailmethod_smtp_username'];
	$mailmethod_smtp_password=$emailsettingssmtp['mailmethod_smtp_password'];
	$mailmethod_smtp_host_secure=$emailsettingssmtp['mailmethod_smtp_host_secure'];
	$mailmethod_smtp_host_port=$emailsettingssmtp['mailmethod_smtp_host_port'];
	$mailmethod_smtp_host=$emailsettingssmtp['mailmethod_smtp_host'];	
	$Mail->IsSMTP();
	$Mail->Host = trim($mailmethod_smtp_host); 
	$Mail->SMTPKeepAlive=true;
		 if((trim($mailmethod_smtp_username)!="") && (trim($mailmethod_smtp_password)!="")) //auth
		 {
		 $Mail->SMTPAuth = true;
		 $Mail->Username = trim($mailmethod_smtp_username);
		 $Mail->Password = trim($mailmethod_smtp_password);
		 }
		//PORT
		if(trim($mailmethod_smtp_host_port)!=="")
		{
			$Mail->Port =$mailmethod_smtp_host_port;
		}
		//Secure
		if(trim($mailmethod_smtp_host_secure)!=="")
		{
			$Mail->SMTPSecure =$mailmethod_smtp_host_secure;
		}
	}
//end smtp

//mail params
$new_from_email_address = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $reciever_email_from_address); 
$Mail->From = trim($new_from_email_address);

//from name
$new_from_name=$reciever_email_from_name;
$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
$new_from_name = @str_replace(":", " ", $new_from_name); 
$new_from_name = @str_replace(",", " ", $new_from_name); 

$Mail->FromName = trim($new_from_name);
//charset
$Mail->CharSet  = $emailcharset;
$useremail=$_POST['fromemail'];
//sending email to selected contacts ->
	for($i=1;$i<=$_POST['nrcontacts'];$i++)
	{
		if((isset($_POST['address_'.$i])) && ($nrsent<$maxemailnr))
		{
		///see if email unsubscribed
		$usr=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.$_POST['address_'.$i].'" AND unsubscribed="1" ');
		$unsubscribed=mysql_num_rows($usr);
		$usr2=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.$_POST['address_'.$i].'" AND sender_id="'.$senderid.'" ');
		$alreadysentbythisuser=mysql_num_rows($usr2);
		///$allowduplicateemails var
		if(($unsubscribed==0 && $alreadysentbythisuser==0 && $allowduplicateemails==0) || ($unsubscribed==0 && $allowduplicateemails==1))
		{
		 if($send_emails_as_cron=="0") //no cron
			 {
				//subject
				$newsubject=$reciever_email_subject;
				$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
				$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
				$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
				$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
				//email tags
				$emailcontent2="";
				$emailcontent2=$reciever_email_content;
				$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
				$emailcontent2 = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $emailcontent2);
				$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
				$emailcontent2 = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $emailcontent2); 
				////
				} //end no cron
					
					if(get_magic_quotes_gpc()) 
					{
					if(ini_get('magic_quotes_sybase')) 
					{
						$sendercustommessage= str_replace("''", "'", $_POST['sendercustommessage']);
						} 
					else {$sendercustommessage= stripslashes($_POST['sendercustommessage']);}
					 } else {
					 $sendercustommessage= $_POST['sendercustommessage'];
					 }
					$sendercustommessage = htmlspecialchars($sendercustommessage);
					$sendercustommessage=nl2br($sendercustommessage);
					$sendercustommessage = @str_replace("'", "&quot;", $sendercustommessage);
					$sendercustommessage_fordb=$sendercustommessage;
					if($removecustommessagelinks=="0") { $sendercustommessage=makelink($sendercustommessage);}
					if($removecustommessagelinks=="1") { $sendercustommessage=remove_link($sendercustommessage);}
					
					$emailcontent2 = @str_replace("%%%usercustommessage%%%", $sendercustommessage, $emailcontent2);
					
					///replace unsubscribe link 
					$fullaffunsubscribelink=$reciever_unsubscribelink;
					$fullaffunsubscribelink='<a href="'.$fullaffunsubscribelink.'?emailcode='.md5(trim($_POST['address_'.$i])).'">'.$reciever_unsubscribelinktext.'</a>';
					$emailcontent2 = @str_replace("%%%unsubscribelink%%%",$fullaffunsubscribelink,$emailcontent2);
					//visitor website link
					//reff
					$visitor_websitelink_get="";
					$sess_reff="";
					if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
					{
					$sess_reff=str_replace("&","::",trim($_SESSION['reff']));
					$sess_reff=str_replace("www.","",trim($sess_reff));
					$sess_reff=str_replace("http://","",trim($sess_reff));
					//urlencode
					$sess_reff=urlencode($sess_reff);
					$visitor_websitelink_get="&reff=".trim($sess_reff);
					}
					
					$fullwebsitelink=$visitor_websitelink;
					if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
					{
					$visitor_websitelink_get=trim($visitor_websitelink_get);
					$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).$visitor_websitelink_get.'">'.$visitor_websitelinktext.'</a>';
					}
					else
					{
					$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'">'.$visitor_websitelinktext.'</a>';
					}
					
					$emailcontent2 = @str_replace("%%%visitorslink%%%",$fullwebsitelink,$emailcontent2);
					$emailcontent2 = preg_replace("/[\n\r]/","",$emailcontent2);  
					$emailbody='
					<html>
					<body>'.$emailcontent2.'<br><br>
					</body>
					</html>
					';
						if($send_emails_as_cron=="0") //no cron
						{
						 $Mail->MsgHTML($emailbody);
						 //altmail
						 $Mail->AltBody=html_mail_to_txt($emailbody); 
						 
						 $Mail->Subject  = $newsubject;
						 $Mail->AddAddress($_POST['address_'.$i], $_POST['recname_'.$i]);
						 $Mail->Send();
						 $Mail->ClearAddresses();
						 }
						 $nrsent++;
						 //insert into receivers - csv import
						 if($send_emails_as_cron=="0") //no cron
						 {
						 mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$_POST['address_'.$i].'","'.$_POST['recname_'.$i].'","'.md5(trim($_POST['address_'.$i])).'","0","'.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'","0","","0","1","0") ');
						 }
						 if($send_emails_as_cron=="1") // cron
						 {
						 mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$_POST['address_'.$i].'","'.$_POST['recname_'.$i].'","'.md5(trim($_POST['address_'.$i])).'","0","'.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'","0","","0","0","0") ');
						 mysql_query('UPDATE staf_senders_branches  
						 SET sender_custom_message="'.$sendercustommessage_fordb.'",
						 sender_reff="'.$visitor_websitelink_get.'" WHERE branch_id="'.$lastbranchid.'"');
						 }
			 ///
			
			}
		}
	}
	////update emails sent
	mysql_query('UPDATE staf_senders_branches SET branch_sent="'.$nrsent.'" WHERE branch_id="'.$lastbranchid.'"');
	$_SESSION['emailssentthistime']=$nrsent;
	//set cookie
	if(!isset($_COOKIE['staf_inviter_esent']))
	{
	setcookie('staf_inviter_esent',$_SESSION['emailssentthistime'],time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	if(isset($_COOKIE['staf_inviter_esent']))
	{
	$newsent=$_COOKIE['staf_inviter_esent']+$_SESSION['emailssentthistime'];
	unset($_COOKIE['staf_inviter_esent']); 
	setcookie('staf_inviter_esent',$newsent,time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	//end set cookie
	//update total sent for user
	$newtotalsent=$nrsent+$oldtotalsent;
	mysql_query('UPDATE staf_senders SET total_sent="'.$newtotalsent.'", optintomailinglist="'.$_POST['optintomailinglist'].'", useraffiliateid="'.$_POST['affiliateid'].'" WHERE senderid="'.$senderid.'"');
	///send reward emails here
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
	$rewards=mysql_fetch_array($res_sender);
	//send email to sender
	if($enablethankyouemail)
	{
	    $emailcontent2=$sender_email_content;
		$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%nrofemailssent%%%", $nrsent, $emailcontent2); 
		$nrtobesentdiff=($_POST['nrtobesent2']-$nrsent);
		if($nrtobesentdiff<0){$nrtobesentdiff=0;}
		$emailcontent2 = @str_replace("%%%emailstobesent%%%", $nrtobesentdiff, $emailcontent2);
        $emailcontent2 = @str_replace("%%%visitorstocome%%%", $_POST['nrtobesent'], $emailcontent2);
		$emailcontent2 = @str_replace("%%%visitorstocome_timed%%%", $reward3_invitations_sent, $emailcontent2);
	    $emailcontent2 = @str_replace("%%%visitorstocome_deadline%%%", $reward3_valability, $emailcontent2);
		
       //subject
		$newsubject=$sender_email_subject;
		$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
		$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
		$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
		$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
		$newsubject = @str_replace("%%%nrofemailssent%%%", $nrsent, $newsubject); 
		//from name
		$new_from_name=$sender_email_from_name;
		$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
		$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
		$new_from_name = @str_replace(":", " ", $new_from_name); 
		$new_from_name = @str_replace(",", " ", $new_from_name); 
		$new_from_name=trim($new_from_name);
		//
	//$Mail = new PHPMailer();
	$Mail->From     = $sender_email_from_address;
	$Mail->FromName = $new_from_name;
	$Mail->Subject  = $newsubject;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->MsgHTML($emailbody);
	 $Mail->AltBody=html_mail_to_txt($emailbody); 
	  
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send(); 
	 $Mail->ClearAddresses();
	}
	 ////
	if($oldtotalsent<$reward1_invitations_sent && $reward1_invitations_sent<=$newtotalsent && $rewards['reward1_sent']=="0") //send first reward
	{
    //subject
	$newsubject=$reward1_emailsubject;
	$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
	$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
	$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
	$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
	//
	//$Mail = new PHPMailer();
	$Mail->From     = $reward1_email_from_address;
	$Mail->FromName = $reward1_email_from_name;
	$Mail->Subject  = $newsubject;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	$emailcontent2=$reward1_emailbody;
	$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
	
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->MsgHTML($emailbody);
	  $Mail->AltBody=html_mail_to_txt($emailbody); 
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send();
	 $Mail->ClearAddresses();
	 //update senders
	 mysql_query('UPDATE staf_senders SET reward1_sent="1" WHERE senderid="'.$senderid.'"');
	}
//unset reff
unset($_SESSION['reff']);
//clear emails & close smtp
	$Mail->ClearAddresses();
	$Mail->ClearReplyTos();
	if($mailmethod_smtp=="1")
	{
	$Mail->SmtpClose();
	}

}
}
//send invitations emails ->service importer
if($_POST['act']=="sendMessage") 
{
////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}

$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');

	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	
$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

if($emailstosent_today<=0) //if today all emails have beed sent
{$maxemailnr=0;}
	else
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		
		}	
	}

////
//get existing user details
$lastbranchid=$_POST['lastbranchid'];
$senderid=$_POST['senderid'];
$todaycomplete=date("Y-m-d H:i");
//get user details
$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
$exists=mysql_num_rows($res_sender);
if($exists=='1') //the user exist
{
$senderdata=mysql_fetch_array($res_sender);
$senderid=$senderdata['senderid'];
$senderemailmd5=md5($senderdata['sender_email']);
$oldtotalsent=$senderdata['total_sent'];
$oldtotalimported=$senderdata['total_imported'];
}
////
if(trim($_POST['fromemail'])!='')
{
include("includes/phpmailer/class.phpmailer.php");
$nrsent=0;
/////////////////////email
$Mail = new PHPMailer();
$Mail->IsHTML(true);
$Mail->AddReplyTo($reply_all_email,$sender_email_from_name);
//SMTP
	if($mailmethod_smtp=="1")
	{
	//get the first SMTP server
	$ressmtp=mysql_query("SELECT * FROM staf_smtp_servers WHERE used=(SELECT min(used) FROM staf_smtp_servers) LIMIT 1");
	$emailsettingssmtp=mysql_fetch_array($ressmtp);
	$mailmethod_smtp_username=$emailsettingssmtp['mailmethod_smtp_username'];
	$mailmethod_smtp_password=$emailsettingssmtp['mailmethod_smtp_password'];
	$mailmethod_smtp_host_secure=$emailsettingssmtp['mailmethod_smtp_host_secure'];
	$mailmethod_smtp_host_port=$emailsettingssmtp['mailmethod_smtp_host_port'];
	$mailmethod_smtp_host=$emailsettingssmtp['mailmethod_smtp_host'];
	$Mail->IsSMTP();
	$Mail->Host = trim($mailmethod_smtp_host); 
	$Mail->SMTPKeepAlive=true;
		 if((trim($mailmethod_smtp_username)!="") && (trim($mailmethod_smtp_password)!="")) //auth
		 {
		 $Mail->SMTPAuth = true;
		 $Mail->Username = trim($mailmethod_smtp_username);
		 $Mail->Password = trim($mailmethod_smtp_password);
		 }
		//PORT
		if(trim($mailmethod_smtp_host_port)!=="")
		{
			$Mail->Port =$mailmethod_smtp_host_port;
		}
		//Secure
		if(trim($mailmethod_smtp_host_secure)!=="")
		{
			$Mail->SMTPSecure =$mailmethod_smtp_host_secure;
		}
	}
//end smtp
$new_from_email_address = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $reciever_email_from_address); 
$Mail->From = trim($new_from_email_address);
 //from name
$new_from_name=$reciever_email_from_name;
$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
$new_from_name = @str_replace(":", " ", $new_from_name); 
$new_from_name = @str_replace(",", " ", $new_from_name); 
$Mail->FromName = trim($new_from_name);
//charset
$Mail->CharSet  = $emailcharset;
$useremail=$_POST['fromemail'];
//sending email to selected contacts ->
	for($i=1;$i<=$_POST['nrcontacts'];$i++)
	{
		if((isset($_POST['address_'.$i])) && ($nrsent<$maxemailnr))
		{
		///see if  email unsubscribed
		$usr=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.$_POST['address_'.$i].'" AND unsubscribed="1" ');
		$unsubscribed=mysql_num_rows($usr);
		$usr2=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.$_POST['address_'.$i].'" AND sender_id="'.$senderid.'" ');
		$alreadysentbythisuser=mysql_num_rows($usr2);
		///$allowduplicateemails var
		if(($unsubscribed==0 && $alreadysentbythisuser==0 && $allowduplicateemails==0) || ($unsubscribed==0 && $allowduplicateemails==1))
		{
		if($send_emails_as_cron=="0") //no cron
			 {
			//subject
			$newsubject=$reciever_email_subject;
			$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
			$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
			$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
			$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
			//email tags
			$emailcontent2="";
			$emailcontent2=$reciever_email_content;
			$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
			$emailcontent2 = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $emailcontent2);
			$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
			$emailcontent2 = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $emailcontent2); 
			} //end no cron
		////
		    if(get_magic_quotes_gpc()) 
			{
            if(ini_get('magic_quotes_sybase')) {
                $sendercustommessage= str_replace("''", "'", $_POST['sendercustommessage']);
				
            } 
			else {
                $sendercustommessage= stripslashes($_POST['sendercustommessage']);
				
            }
        } else {
            $sendercustommessage= $_POST['sendercustommessage'];
			 }
		$sendercustommessage = htmlspecialchars($sendercustommessage);
		$sendercustommessage=nl2br($sendercustommessage);
		$sendercustommessage = @str_replace("'", "&quot;", $sendercustommessage);
		$sendercustommessage_fordb=$sendercustommessage;

			if($removecustommessagelinks=="0") {$sendercustommessage=makelink($sendercustommessage);}
			if($removecustommessagelinks=="1") {$sendercustommessage=remove_link($sendercustommessage);}
					
		$emailcontent2 = @str_replace("%%%usercustommessage%%%", $sendercustommessage, $emailcontent2);
		
		///replace unsubscribe link 
		$fullaffunsubscribelink=$reciever_unsubscribelink;
		$fullaffunsubscribelink='<a href="'.$fullaffunsubscribelink.'?emailcode='.md5(trim($_POST['address_'.$i])).'">'.$reciever_unsubscribelinktext.'</a>';
		$emailcontent2 = @str_replace("%%%unsubscribelink%%%",$fullaffunsubscribelink,$emailcontent2);
		//visitor website link
		//reff
		$visitor_websitelink_get="";
		$sess_reff="";
		if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
		{
		$sess_reff=str_replace("&","::",trim($_SESSION['reff']));
		$sess_reff=str_replace("www.","",trim($sess_reff));
		$sess_reff=str_replace("http://","",trim($sess_reff));
		//urlencode
		$sess_reff=urlencode($sess_reff);
		$visitor_websitelink_get="&reff=".trim($sess_reff);
	    }

		$fullwebsitelink=$visitor_websitelink;
		if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
		{
		$visitor_websitelink_get=trim($visitor_websitelink_get);
		$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).$visitor_websitelink_get.'">'.$visitor_websitelinktext.'</a>';
		}
		else
		{
		$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'">'.$visitor_websitelinktext.'</a>';
		}
		 $emailcontent2 = @str_replace("%%%visitorslink%%%",$fullwebsitelink,$emailcontent2);
         $emailcontent2 = preg_replace("/[\n\r]/","",$emailcontent2);
			$emailbody='
			<html>
			<body>'.$emailcontent2.'<br><br>
			</body>
			</html>
			';
			if($send_emails_as_cron=="0") //no cron
			{
			 $Mail->MsgHTML($emailbody);
			 $Mail->AltBody=html_mail_to_txt($emailbody); 
			 $Mail->Subject  = $newsubject;
			 $Mail->AddAddress($_POST['address_'.$i], $_POST['recname_'.$i]);
		     $Mail->Send();
			 $Mail->ClearAddresses();
			 }
			 $nrsent++;
			 //insert into receivers
			  if($send_emails_as_cron=="0") //no cron
			  {
			   mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$_POST['address_'.$i].'","'.$_POST['recname_'.$i].'","'.md5(trim($_POST['address_'.$i])).'","0","'.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'","0","","0","1","0") ');
			  }
			  if($send_emails_as_cron=="1") // cron
			  {
			  mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$_POST['address_'.$i].'","'.$_POST['recname_'.$i].'","'.md5(trim($_POST['address_'.$i])).'","0","'.md5(trim(trim($_POST['address_'.$i]).$lastbranchid)).'","0","","0","0","0") ');
			  mysql_query('UPDATE staf_senders_branches  
			  SET sender_custom_message="'.$sendercustommessage_fordb.'",
			  sender_reff="'.$visitor_websitelink_get.'" WHERE branch_id="'.$lastbranchid.'"');
			 }
			 ///
			}
		}
	}
	////update emails sent
	mysql_query('UPDATE staf_senders_branches SET branch_sent="'.$nrsent.'" WHERE branch_id="'.$lastbranchid.'"'); 
	$_SESSION['emailssentthistime']=$nrsent;
	//set cookie
	if(!isset($_COOKIE['staf_inviter_esent']))
	{
	setcookie('staf_inviter_esent',$_SESSION['emailssentthistime'],time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	if(isset($_COOKIE['staf_inviter_esent']))
	{
	$newsent=$_COOKIE['staf_inviter_esent']+$_SESSION['emailssentthistime'];
	unset($_COOKIE['staf_inviter_esent']); 
	setcookie('staf_inviter_esent',$newsent,time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	//end set cookie
	//update total sent for user
	$newtotalsent=$nrsent+$oldtotalsent;
	mysql_query('UPDATE staf_senders SET total_sent="'.$newtotalsent.'", optintomailinglist="'.$_POST['optintomailinglist'].'", useraffiliateid="'.$_POST['affiliateid'].'" WHERE senderid="'.$senderid.'"');
	///send reward emails here
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
	$rewards=mysql_fetch_array($res_sender);
	//send email to sender
	if($enablethankyouemail)
	{
	    $emailcontent2=$sender_email_content;
		$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%nrofemailssent%%%", $nrsent, $emailcontent2); 
		$nrtobesentdiff=($_POST['nrtobesent2']-$nrsent);
		if($nrtobesentdiff<0){$nrtobesentdiff=0;}
		$emailcontent2 = @str_replace("%%%emailstobesent%%%", $nrtobesentdiff, $emailcontent2);
        $emailcontent2 = @str_replace("%%%visitorstocome%%%", $_POST['nrtobesent'], $emailcontent2);
		$emailcontent2 = @str_replace("%%%visitorstocome_timed%%%", $reward3_invitations_sent, $emailcontent2);
	    $emailcontent2 = @str_replace("%%%visitorstocome_deadline%%%", $reward3_valability, $emailcontent2);
       //subject
		$newsubject=$sender_email_subject;
		$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
		$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
		$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
		$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
		$newsubject = @str_replace("%%%nrofemailssent%%%", $nrsent, $newsubject); 
		//from name
		$new_from_name=$sender_email_from_name; 
		$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
		$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
		$new_from_name = @str_replace(":", " ", $new_from_name); 
        $new_from_name = @str_replace(",", " ", $new_from_name); 
		$new_from_name=trim($new_from_name);
		///
	//$Mail = new PHPMailer();
	$Mail->From     = $sender_email_from_address; 
	$Mail->FromName = $new_from_name;
	$Mail->Subject  = $newsubject;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->MsgHTML($emailbody);
	 $Mail->AltBody=html_mail_to_txt($emailbody); 
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send(); 
	 $Mail->ClearAddresses();
	}
	 ////
	if($oldtotalsent<$reward1_invitations_sent && $reward1_invitations_sent<=$newtotalsent && $rewards['reward1_sent']=="0") //send first reward
	{
  //subject
	$newsubject=$reward1_emailsubject;
	$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
	$newsubject = @str_replace("%%%recipientname%%%", $_POST['recname_'.$i], $newsubject);
	$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
	$newsubject = @str_replace("%%%recipientemail%%%", $_POST['address_'.$i], $newsubject);
	//
	//$Mail = new PHPMailer();
	$Mail->From     = $reward1_email_from_address;
	$Mail->FromName = $reward1_email_from_name;
	$Mail->Subject  = $newsubject;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	$emailcontent2=$reward1_emailbody;
	$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
	
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->MsgHTML($emailbody);
	 $Mail->AltBody=html_mail_to_txt($emailbody); 
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send();
	 $Mail->ClearAddresses();
	 //update senders
	 mysql_query('UPDATE staf_senders SET reward1_sent="1" WHERE senderid="'.$senderid.'"');
	}
//unset reff
unset($_SESSION['reff']);
//clear emails & close smtp
	$Mail->ClearAddresses();
	$Mail->ClearReplyTos();
	if($mailmethod_smtp=="1")
	{
	$Mail->SmtpClose();
	}
	
}
}

//manual invite here
$nospam_em=false;
if((trim($_POST['fromemail'])!='') && isset($_POST['totalnumberemails']) && ($_POST['totalnumberemails']>0) && ($_POST['nrofemails']>0) && ($_POST['act']=='manualinvite')) 
{
/////banned email
$userfullemailaddress=trim($_POST['fromemail']);
is_banned_email($userfullemailaddress);
$loop_tch=$_POST['nrofemails'];
///loop emails here
	for($i=1;$i<=$loop_tch;$i++)
	{  
		if(isset($_POST['friend_'.$i]))
		{ 
		$nospam_em=true;
		}
	}
}
if((trim($_POST['fromemail'])!='') && isset($_POST['totalnumberemails']) && ($_POST['totalnumberemails']>0) && ($_POST['nrofemails']>0) && ($nospam_em==true)&& ($_POST['act']=='manualinvite')) 
{
	//get existing user details
	$userfullemailaddress=trim($_POST['fromemail']);
	$todaycomplete=date("Y-m-d H:i");
	$totalimportedcontacts=$_POST['totalnumberemails'];
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE sender_email='".$userfullemailaddress."'");
	$exists=mysql_num_rows($res_sender);
	if($exists=='0') //the user does not exist
	{
	mysql_query('INSERT INTO staf_senders VALUES ("","'.$userfullemailaddress.'","'.trim($_POST['clientname']).'","","","","","0","","","","'.$_POST['optintomailinglist'].'","0","'.$userip.'","0","'.trim($_POST['affiliateid']).'")');
	$senderid=mysql_insert_id();
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","0","0","0","0","'.$todaycomplete.'","0","Manual","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
	if($exists=='1') //the user exist
	{
	$senderdata=mysql_fetch_array($res_sender);
	$senderid=$senderdata['senderid'];
	$newtotalimported=$senderdata['total_imported']+$totalimportedcontacts;
	mysql_query('UPDATE staf_senders SET optintomailinglist="'.$_POST['optintomailinglist'].'", useraffiliateid="'.trim($_POST['affiliateid']).'" WHERE senderid="'.$senderid.'"');
	//insert into branches
	mysql_query('INSERT INTO staf_senders_branches VALUES ("","'.$senderid.'","0","0","0","0","'.$todaycomplete.'","0","Manual","","")');
	$lastbranchid=mysql_insert_id();
	$branchemailid=md5(trim($userfullemailaddress).$lastbranchid);
	//update branch with email code
	mysql_query('UPDATE staf_senders_branches SET branch_emailcode="'.$branchemailid.'" WHERE branch_id="'.$lastbranchid.'"');
	}
	
////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	
$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

if($emailstosent_today<=0) //if today all emails have beed sent
{$maxemailnr=0;}
	else
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		}	
	}
//get existing user details
$todaycomplete=date("Y-m-d H:i");
$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
$exists=mysql_num_rows($res_sender);
	if($exists=='1') //the user exist
	{
	$senderdata=mysql_fetch_array($res_sender);
	$senderid=$senderdata['senderid'];
	$senderemailmd5=md5($senderdata['sender_email']);
	$oldtotalsent=$senderdata['total_sent'];
	$oldtotalimported=$senderdata['total_imported'];
	}	
///
include("includes/phpmailer/class.phpmailer.php");
$nrsent=0;
/////////////////////email
$Mail = new PHPMailer();
$Mail->IsHTML(true);
$Mail->AddReplyTo($reply_all_email,$sender_email_from_name);
//SMTP 
	if($mailmethod_smtp=="1")
	{
	//get the first SMTP server
	$ressmtp=mysql_query("SELECT * FROM staf_smtp_servers WHERE used=(SELECT min(used) FROM staf_smtp_servers) LIMIT 1");
	$emailsettingssmtp=mysql_fetch_array($ressmtp);
	$mailmethod_smtp_username=$emailsettingssmtp['mailmethod_smtp_username'];
	$mailmethod_smtp_password=$emailsettingssmtp['mailmethod_smtp_password'];
	$mailmethod_smtp_host_secure=$emailsettingssmtp['mailmethod_smtp_host_secure'];
	$mailmethod_smtp_host_port=$emailsettingssmtp['mailmethod_smtp_host_port'];
	$mailmethod_smtp_host=$emailsettingssmtp['mailmethod_smtp_host'];
	$Mail->IsSMTP();
	$Mail->Host = trim($mailmethod_smtp_host); 
	$Mail->SMTPKeepAlive=true;
		 if((trim($mailmethod_smtp_username)!="") && (trim($mailmethod_smtp_password)!="")) //auth
		 {
		 $Mail->SMTPAuth = true;
		 $Mail->Username = trim($mailmethod_smtp_username);
		 $Mail->Password = trim($mailmethod_smtp_password);
		 }
		//PORT
		if(trim($mailmethod_smtp_host_port)!=="")
		{
			$Mail->Port =$mailmethod_smtp_host_port;
		}
		//Secure
		if(trim($mailmethod_smtp_host_secure)!=="")
		{
			$Mail->SMTPSecure =$mailmethod_smtp_host_secure;
		}
	}
//end smtp
//

$new_from_email_address = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $reciever_email_from_address); 
$Mail->From = trim($new_from_email_address);

 //from name
$new_from_name=$reciever_email_from_name;
$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
$new_from_name = @str_replace(":", " ", $new_from_name); 
$new_from_name = @str_replace(",", " ", $new_from_name); 
$Mail->FromName = trim($new_from_name);
//charset
$Mail->CharSet  = $emailcharset;
$loop=$_POST['nrofemails'];

///loop emails here
	for($i=1;$i<=$loop;$i++)
	{  
		if(isset($_POST['friend_'.$i]) && ($nrsent<$maxemailnr))
		{ 
		$receiverdetails=explode(",",$_POST['friend_'.$i]);
		///see if  email unsubscribed
		$usr=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.trim($receiverdetails[0]).'" AND unsubscribed="1" ');
		$unsubscribed=mysql_num_rows($usr);
		$usr2=mysql_query('SELECT * FROM staf_recievers WHERE reciever_email="'.trim($receiverdetails[0]).'" AND sender_id="'.$senderid.'" ');
		$alreadysentbythisuser=mysql_num_rows($usr2);
		///
		if(($unsubscribed==0 && $alreadysentbythisuser==0 && $allowduplicateemails==0) || ($unsubscribed==0 && $allowduplicateemails==1))
		{ 
		 if($send_emails_as_cron=="0") //no cron
		{ 
		$newsubject=$reciever_email_subject;
		$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
		$newsubject = @str_replace("%%%recipientname%%%", $receiverdetails[1], $newsubject);
		$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
		$newsubject = @str_replace("%%%recipientemail%%%", $receiverdetails[0], $newsubject);
		$emailcontent2="";
		$emailcontent2=$reciever_email_content;
		$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%recipientname%%%", $receiverdetails[1], $emailcontent2);
		$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
		$emailcontent2 = @str_replace("%%%recipientemail%%%", $receiverdetails[0], $emailcontent2); 
		}
		///custom message
		    if(get_magic_quotes_gpc()) 
			{
            if(ini_get('magic_quotes_sybase')) {
                $sendercustommessage= str_replace("''", "'", $_POST['sendercustommessage']);  } 
			else {
                $sendercustommessage= stripslashes($_POST['sendercustommessage']); }
        } else {
        $sendercustommessage= $_POST['sendercustommessage'];}
		
		$sendercustommessage = htmlspecialchars($sendercustommessage);
		$sendercustommessage=nl2br($sendercustommessage);
		$sendercustommessage = @str_replace("'", "&quot;", $sendercustommessage);
		$sendercustommessage_fordb=$sendercustommessage;

			if($removecustommessagelinks=="0") {$sendercustommessage=makelink($sendercustommessage);}
			if($removecustommessagelinks=="1") {$sendercustommessage=remove_link($sendercustommessage);}
		
		$emailcontent2 = @str_replace("%%%usercustommessage%%%", $sendercustommessage, $emailcontent2);

		///replace unsubscribe link 
		$fullaffunsubscribelink=$reciever_unsubscribelink;
		$fullaffunsubscribelink='<a href="'.$fullaffunsubscribelink.'?emailcode='.md5(trim($receiverdetails[0])).'">'.$reciever_unsubscribelinktext.'</a>';
		$emailcontent2 = @str_replace("%%%unsubscribelink%%%",$fullaffunsubscribelink,$emailcontent2);
		//visitor website link
		//reff
		$visitor_websitelink_get="";
		$sess_reff="";
		if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
		{
		$sess_reff=str_replace("&","::",trim($_SESSION['reff']));
		$sess_reff=str_replace("www.","",trim($sess_reff));
		$sess_reff=str_replace("http://","",trim($sess_reff));
		//urlencode
		$sess_reff=urlencode($sess_reff);
		$visitor_websitelink_get="&reff=".trim($sess_reff);
	    }
		
		$fullwebsitelink=$visitor_websitelink;
		if(trim($_SESSION['reff']!="")&&($redirecttype=="0"))
		{
		$visitor_websitelink_get=trim($visitor_websitelink_get);
		$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim((trim($receiverdetails[0]).trim($lastbranchid)))).$visitor_websitelink_get.'">'.$visitor_websitelinktext.'</a>';
		}
		else
		{
		$fullwebsitelink='<a href="'.$fullwebsitelink.'?visitorcode='.md5(trim((trim($receiverdetails[0]).trim($lastbranchid)))).'">'.$visitor_websitelinktext.'</a>';
		}
		$emailcontent2 = @str_replace("%%%visitorslink%%%",$fullwebsitelink,$emailcontent2);
        $emailcontent2 = preg_replace("/[\n\r]/","",$emailcontent2);
			$emailbody='
			<html>
			<body>'.$emailcontent2.'<br><br>
			</body>
			</html>
			'; 
			 if($send_emails_as_cron=="0") //no cron
			{
				
			 $Mail->Subject  = $newsubject;
			 $Mail->MsgHTML($emailbody); 
			 $Mail->AltBody=html_mail_to_txt($emailbody); 
 
			 $Mail->AddAddress($receiverdetails[0], $receiverdetails[1]);
		     $Mail->Send(); 
			 $Mail->ClearAddresses(); 
			 }
             $nrsent++;  
			 //insert into receivers
			  if($send_emails_as_cron=="0") //no cron
			 { 
			 mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$receiverdetails[0].'","'.$receiverdetails[1].'","'.md5(trim($receiverdetails[0])).'","0","'.md5(trim((trim($receiverdetails[0]).trim($lastbranchid)))).'","0","","0","1","0") ');
			 }
			  if($send_emails_as_cron=="1") // cron
			 {
			  mysql_query('INSERT INTO staf_recievers VALUES ("","'.$senderid.'","'.$lastbranchid.'","'.$receiverdetails[0].'","'.$receiverdetails[1].'","'.md5(trim($receiverdetails[0])).'","0","'.md5(trim((trim($receiverdetails[0]).trim($lastbranchid)))).'","0","","0","0","0") ');
			  mysql_query('UPDATE staf_senders_branches  
						 SET sender_custom_message="'.$sendercustommessage_fordb.'",
						 sender_reff="'.$visitor_websitelink_get.'" WHERE branch_id="'.$lastbranchid.'"');
			 }
			 ///
			}
		}
	}
	
	////update emails sent
	mysql_query('UPDATE staf_senders_branches SET branch_sent="'.$nrsent.'" WHERE branch_id="'.$lastbranchid.'"');
	$_SESSION['emailssentthistime']=$nrsent;
	//set cookie
	if(!isset($_COOKIE['staf_inviter_esent']))
	{
	setcookie('staf_inviter_esent',$_SESSION['emailssentthistime'],time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	if(isset($_COOKIE['staf_inviter_esent']))
	{
	$newsent=$_COOKIE['staf_inviter_esent']+$_SESSION['emailssentthistime'];
	unset($_COOKIE['staf_inviter_esent']); 
	setcookie('staf_inviter_esent',$newsent,time() + (3600 * $cookie_time_hours),"/"); // X hours
	unset($_SESSION['emailssentthistime']);
	}
	//end set cookie
	//update total sent for this user
	$newtotalsent=$nrsent+$oldtotalsent;
	mysql_query('UPDATE staf_senders SET total_sent="'.$newtotalsent.'" WHERE senderid="'.$senderid.'"');

	///send thank you email
	if($enablethankyouemail) 
	{
	///top message
			$nrtobesent=0;
			$nrtovisit=0;
			$senttillnow=0; 
		if(($reward1_afterimporting)&&($reward1_invitations_sent!='9999')) //if reward1 enabled and show remaining enabled 
		{
		
			if($exists) //the user exists in database
			{
				$senttillnow=$senderdata['total_sent'];
				$nrtobesent=$reward1_invitations_sent-$senderdata['total_sent'];
					if($nrtobesent<=0)
					{
					$nrtobesent2=0;
					}
				
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward1_invitations_sent;
			}
		  $nrtobesent2=$nrtobesent;
		}
		///visits
		if(($reward2_afterimporting)&&($reward2_invitations_sent!='9999')) //if reward2 enabled and show remaining enabled 
		{

			if($exists=='1') //the user exists in database
			{ 
				$senttillnow=$senderdata['total_visited'];
				$nrtobesent=$reward2_invitations_sent-$senderdata['total_visited'];
					
					if($nrtobesent<=0)
					{
					$nrtobesent=0;
					}
			}
			else  //the user does not exist in the database
			{
		    $nrtobesent=$reward2_invitations_sent;
			}
		  
		}
	////
	
	$newsubject=$sender_email_subject;
	$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
	$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
	$newsubject = @str_replace("%%%nrofemailssent%%%", $nrsent, $newsubject);
	//send email to sender
	$emailcontent2=$sender_email_content;
	$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%nrofemailssent%%%", $nrsent, $emailcontent2);
	$nrtobesentdiff=($nrtobesent2-$nrsent);
		if($nrtobesentdiff<0){$nrtobesentdiff=0;}
	$emailcontent2 = @str_replace("%%%emailstobesent%%%", $nrtobesentdiff, $emailcontent2);
    $emailcontent2 = @str_replace("%%%visitorstocome%%%", $nrtobesent, $emailcontent2);
	$emailcontent2 = @str_replace("%%%visitorstocome_timed%%%", $reward3_invitations_sent, $emailcontent2);
	$emailcontent2 = @str_replace("%%%visitorstocome_deadline%%%", $reward3_valability, $emailcontent2);
	//from name
		$new_from_name=$sender_email_from_name;
		$new_from_name = @str_replace("%%%sendername%%%", $_POST['clientname'], $new_from_name); 
		$new_from_name = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $new_from_name); 
		$new_from_name = @str_replace(":", " ", $new_from_name); 
        $new_from_name = @str_replace(",", " ", $new_from_name); 
		$new_from_name=trim($new_from_name);
	///
	//$Mail = new PHPMailer();
	$Mail->From     = $sender_email_from_address;
	$Mail->FromName = $new_from_name;
	$Mail->Subject  = $newsubject;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->MsgHTML($emailbody);
	 $Mail->AltBody=html_mail_to_txt($emailbody); 
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send(); 
	 $Mail->ClearAddresses();
	}
	//rewards
	$res_sender=mysql_query("SELECT * FROM staf_senders WHERE senderid='".$senderid."'");
	$rewards=mysql_fetch_array($res_sender);
	if($oldtotalsent<$reward1_invitations_sent && $reward1_invitations_sent<=$newtotalsent && $rewards['reward1_sent']=="0") //send first reward
	{
	//$Mail = new PHPMailer();
	$Mail->From     = $reward1_email_from_address;
	$Mail->FromName = $reward1_email_from_name;
	$Mail->CharSet  = $emailcharset;
	$useremail=$_POST['fromemail'];
	//subject
	$newsubject=$reward1_emailsubject;
	$newsubject = @str_replace("%%%sendername%%%", $_POST['clientname'], $newsubject); 
	$newsubject = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $newsubject); 
	///body
	$emailcontent2=$reward1_emailbody;
	$emailcontent2 = @str_replace("%%%sendername%%%", $_POST['clientname'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%senderemail%%%", $_POST['fromemail'], $emailcontent2); 
	$emailcontent2 = @str_replace("%%%visitorslink%%%",$fullwebsitelink,$emailcontent2);
	 $emailcontent2 = preg_replace("/[\n\r]/","",$emailcontent2);
	$emailbody='
	<html>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->Subject  = $newsubject;
	 $Mail->MsgHTML($emailbody);
	 $Mail->AltBody=html_mail_to_txt($emailbody); 
	 $Mail->AddAddress($_POST['fromemail'], $_POST['clientname']);
	 $Mail->Send();
	 $Mail->ClearAddresses();
	 //update senders
	 mysql_query('UPDATE staf_senders SET reward1_sent="1" WHERE senderid="'.$senderid.'"');
	}
	//unset reff
unset($_SESSION['reff']);
//clear emails & close smtp
	$Mail->ClearAddresses();
	$Mail->ClearReplyTos();
	if($mailmethod_smtp=="1")
	{
	$Mail->SmtpClose();
	}

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $websiteurl_gen; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $htmlcharset ?>"/>
<link rel="shortcut icon" href="images/favicon.ico" title="Super Tell A Friend">
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jscript/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
<!-- sort dropdown -->
function sortDropDownListByText() {
	    // Loop for each select element on the page.
    $("select").each(function() {
 
        // Keep track of the selected option.
	        var selectedValue = $(this).val();
	 
	        // Sort all the options by text. I could easily sort these by val.
        $(this).html($("option", $(this)).sort(function(a, b) {
            return a.text == b.text ? 0 : a.text < b.text ? -1 : 1
        }));
	 
	        // Select one option.
	        $(this).val(selectedValue);
	    });
}

<!-- char count -->

function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>
<!--- -->
<!--buzz form -->
<?php if ($enablebuzz) { 
//check browser
include("includes/browser_detection.php"); 
$enable_buzz_form=false;
$current_browser=trim(browser_detection('browser')); 

if(strtoupper($current_browser)=="MOZ" || strtoupper($current_browser)=="IE"  || strtoupper($current_browser)=="NS4" || strtoupper($current_browser)=="OP"){$enable_buzz_form=true;}

?>
<script type="text/javascript" src="jscript/vibrate.js"></script>
<?php } ?>
<!--end buzz form -->

<script language="JavaScript">
function stripHTML()
{
var re= /<\S[^><]*>/g
	for (i=0; i<arguments.length; i++)
	{
	arguments[i].value=arguments[i].value.replace(re, "");
	}
}

function CalcKeyCode(aChar) 
{
  var character = aChar.substring(0,1);
  var code = aChar.charCodeAt(0);
  return code;
}
function checknothtml(val) {
  var strPass = val.value;
  var strLength = strPass.length;
  var lchar = val.value.charAt((strLength) - 1);
  var cCode = CalcKeyCode(lchar);
  if (cCode == 60 || cCode == 62 ) {
    var myNumber = val.value.substring(0, (strLength) - 1);
    val.value = myNumber;
  }
  return false;
}
function changeusercustommessage(id)
{
	var id2,txt,tosplit,arrle,indx,lastword,lastwordsize,allstringsize;
	var tosplit = new Array();
	id2='usercustommessage'+id;
	txt=document.getElementById('sendercustommessage').value;
	//
	tosplit=txt.split(' '); 
	arrle=tosplit.length;
	indx=parseInt(tosplit.length)-1;
	if(trimAll(tosplit[indx])!='')
	{
	lastword=tosplit[indx];
	lastwordsize=lastword.length;
	allstringsize=txt.length
	 if(lastwordsize>100) //last word >100
	 	{
		//a=lastword.substring(0, parseInt(lastwordsize/2));
		//b=lastword.substring(parseInt(lastwordsize/2)-1,lastwordsize);
		//lastword=a+'\n '+b;
		//lastword=lastword.substring(0, parseInt(lastwordsize)-1);
		//tosplit[indx]=lastword;
		document.forms[0].sendercustommessage.value = txt.substring(0, allstringsize-lastwordsize);
		txt=document.getElementById('sendercustommessage').value;
		//}
		// otherwise, update 'characters left' counter
			//else 
			//{
			//txt=tosplit.join(' ');
			//}
	}
	}

	txt=txt.replace(/\n/g, '<br>');
	if(trimAll(txt)=="")
	{document.getElementById(id2).innerHTML='<?php echo $previewemail_tag5 ?>';}
	else {
	document.getElementById(id2).innerHTML=txt; }
}

function show_api_buttons()
{
	val=document.massimport.service.value;
	//document.massimport.password.value='';
	document.getElementById('message').style.visibility='hidden';
	if(val=='yahoo_api' || val=='rocketmail_api' || val=='ymail_api')
	{
		document.getElementById('yloginLink2').style.display='block';
		document.getElementById('gloginLink2').style.display='none'; 
		document.getElementById('hloginLink2').style.display='none';
		document.massimport.masssubmit.style.display='none';
		
		document.massimport.clientname.value='Click on Import Contacts';
		document.massimport.username.value='Click on Import Contacts';
		document.massimport.password.value='Not required'; 
		document.massimport.password.type='text';
		
		document.massimport.clientname.disabled=true;
        document.massimport.username.disabled=true;
		document.massimport.password.disabled=true;
		
		//document.massimport.masssubmit2.focus();
		
	}
	else
	{
			if(val=='gmail_api' || val=='googlemail_api')
			{
			document.getElementById('yloginLink2').style.display='none';
			document.getElementById('gloginLink2').style.display='block';
			document.getElementById('hloginLink2').style.display='none';
			document.massimport.masssubmit.style.display='none';

			document.massimport.clientname.value='Click on Import Contacts';
			document.massimport.username.value='Click on Import Contacts';
			document.massimport.password.value='Not required'; 
		    document.massimport.password.type='text';
			
			
			document.massimport.clientname.disabled=true;
			document.massimport.username.disabled=true;
			document.massimport.password.disabled=true;
			
			//document.massimport.masssubmit1.focus();
		
			}
			else
			{
				if(val=='hotmail_api' || val=='live_api' || val=='msn_api')
				{
					document.getElementById('yloginLink2').style.display='none';
					document.getElementById('gloginLink2').style.display='none';
					document.getElementById('hloginLink2').style.display='block';
					document.massimport.masssubmit.style.display='none';
					
					document.massimport.clientname.value='Click on Import Contacts';
					document.massimport.username.value='Click on Import Contacts';
					document.massimport.password.value='Not required'; 
		            document.massimport.password.type='text';
					
					
					document.massimport.clientname.disabled=true;
					document.massimport.username.disabled=true;
					document.massimport.password.disabled=true;
					
					//document.massimport.masssubmit3.focus();
				}
				else
				{
				document.getElementById('yloginLink2').style.display='none';
				document.getElementById('gloginLink2').style.display='none';
				document.getElementById('hloginLink2').style.display='none';
				document.massimport.masssubmit.style.display='block';
				document.massimport.clientname.disabled=false;
				document.massimport.username.disabled=false;
				document.massimport.password.disabled=false;
				document.massimport.password.value=''; 
		        document.massimport.password.type='password';
				
				
				document.massimport.username.focus();
				if(document.massimport.clientname.value=='Click on Import Contacts')
				{
				 document.massimport.clientname.value='';
				 document.massimport.username.value='';
				 document.massimport.password.value='';
				}
			}
		}
	}
}

function submitenter(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   verimport();
   return false;
   }
else
   return true;
}
function submitenter2(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   veruploadfile();
   return false;
   }
else
   return true;
}
function submitenter3(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   vermanualsend();
   return false;
   }
else
   return true;
}
function submitenter4(myfield,e)
{
var keycode;
if (window.event) keycode = window.event.keyCode;
else if (e) keycode = e.which;
else return true;

if (keycode == 13)
   {
   checkimavailability();
   return false;
   }
else
   return true;
}
	 function checkimavailability()
	 {
	 	var w,a;
	 	if(trimAll(document.getElementById('yahooidtxt').value)!='')
		{
		a=document.getElementById('yahooidtxt').value;
		document.getElementById('ymicon').innerHTML='<div class=\"warningym\"><img hspace=5 align=absmiddle border=0 vspace=5 src=\'http://opi.yahoo.com/online?u='+a+'&m=g&t=9\' id=ymstat> <img src=\'images/loader3.gif\' align=absmiddle border=0 hspace=3 vspace=1> <span color=\'#B90101\'> <?php echo $ym_message1 ?></span></div>';
		window.setTimeout("doym()",1000);
		}
      
	 } 
	  function checkimavailability2()
	 {
	 	var w,a;
	 	if(trimAll(document.getElementById('yahooidtxt').value)=='')
		{
		document.getElementById('ymicon').innerHTML=' &nbsp;';
		}
    
	 } 
	 function doym()
	 {
	 var w,a;
	 a=document.getElementById('yahooidtxt').value;
	 w=document.getElementById('ymstat').width;
		 if(w=='110')
		 {
		 document.getElementById('shownextym').style.display='block';
		// document.getElementById('ymcheck').style.display='none';
		 document.getElementById('ymicon').innerHTML='<div class=\"warningym\"><img align=absmiddle hspace=5 border=0 vspace=5 src=http://opi.yahoo.com/online?u='+a+'&m=g&t=9 id=ymstat> <?php echo $ym_message2 ?></div>';
		 }
		else
		{
		document.getElementById('shownextym').style.display='none';
		document.getElementById('ymcheck').style.display='block';
		document.getElementById('ymicon').innerHTML='<div class=\"warningym\"><img align=absmiddle border=0 hspace=5 vspace=5 src=http://opi.yahoo.com/online?u='+a+'&m=g&t=9 id=ymstat> <?php echo $ym_message3 ?></div>';
		}
	 }
function check_email(e) 
{
	ok = "1234567890qwertyuiop[]asdfghjklzxcvbnm.@-_QWERTYUIOPASDFGHJKLZXCVBNM";
	var i=0;
	for(i=0; i < e.length ;i++)
	{
		if(ok.indexOf(e.charAt(i))<0)
		{ 
			return (false);
		}
	} 
		
	if (document.images) 
	{
		re = /(@.*@)|(\.\.)|(^\.)|(^@)|(@$)|(\.$)|(@\.)/;
		re_two = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!e.match(re) && e.match(re_two)) 
		{
			return (-1);
		} 
	}	
}
function trimAll( strValue ) {
var objRegExp = /^(\s*)$/;

    //check for all spaces
    if(objRegExp.test(strValue)) {
       strValue = strValue.replace(objRegExp, '');
       if( strValue.length == 0)
          return strValue;
    }

   //check for leading & trailing spaces
   objRegExp = /^(\s*)([\W\w]*)(\b\s*$)/;
   if(objRegExp.test(strValue)) {
       //remove leading and trailing whitespace characters
       strValue = strValue.replace(objRegExp, '$2');
    }
  return strValue;
}
function togglechecked()
	{ 
	var ch,maxtocheck,maxmaluetocheck;
	maxtocheck= <?php echo $maxemailnr ?>;
	maxmaluetocheck=document.sendemailsform.nrcheckedcontacts.value;
		if(document.sendemailsform.elements[0].checked==false) //unselect all
		{
		ch=false;
		document.sendemailsform.nrcheckedcontacts.value='0';
		}
		if(document.sendemailsform.elements[0].checked==true) //select all
		{
		ch=true;
		document.sendemailsform.nrcheckedcontacts.value=maxtocheck;
		}
		
      for (var i = 1; i < document.sendemailsform.elements.length; i++) 
	  {
        var e = document.sendemailsform.elements[i];

			if (e.type == 'checkbox' && e.id!='optintomailinglist')
			 {
				   if(ch)
				   {
						if(maxmaluetocheck<maxtocheck)
					    {
							if(e.checked==false){
							e.checked = ch;
							maxmaluetocheck++;}
						}
				   }
				   if(!ch)
				   {
				   e.checked = ch;
				   }
			  
			 }
			
      }
    }
function togglechecked2(){ 
	   var ch;
		if(document.sendemailsform.elements[0].checked==false) {ch=false;}
		if(document.sendemailsform.elements[0].checked==true) {ch=true;}
      for (var i = 1; i < document.sendemailsform.elements.length; i++) 
	  {
        var e = document.sendemailsform.elements[i];

			if (e.type == 'checkbox' && e.id!='optintomailinglist')
			 {
				e.checked = ch;
			 }
			
      }
    }
function is_one_checked()
{
var ischecked;
ischecked=false;
 document.getElementById('selectatleastonecontact').style.visibility='hidden';
  for (var i = 1; i < document.sendemailsform.elements.length; i++) 
	  {
        var e = document.sendemailsform.elements[i];

			if (e.type == 'checkbox' && e.id!='optintomailinglist')
			 {
				if(e.checked){ischecked=true;}
			 }
			
      }
	  if(ischecked)
	  {document.sendemailsform.submit();}
	  else
	  {
	  document.getElementById('selectatleastonecontact').style.visibility='visible';
	  }

}
function updatecheckedcontacts(ischecked,id)
{
    var checkedcontacts,maxtocheck;
    maxtocheck= <?php echo $maxemailnr ?>;
    checkedcontacts=document.sendemailsform.nrcheckedcontacts.value;

		if(ischecked==false)
		{
		document.sendemailsform.nrcheckedcontacts.value=parseInt(checkedcontacts)-1;
		document.sendemailsform.allbox2.checked=false;
		}
		if(ischecked==true)
		{
			if(maxtocheck==document.sendemailsform.nrcheckedcontacts.value)
			{
			document.getElementById('address_'+id).checked=false;
			}
			else 
			{
			document.sendemailsform.nrcheckedcontacts.value=parseInt(checkedcontacts)+1;
			}
		}

}

function unchecktop(ischecked,id)
{
	if(ischecked==false)
	{
	document.sendemailsform.allbox2.checked=false;
	}
}
<?php if((!$importsucess)&&(!$csvimportsucess) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{  ?>
function verimport()
{
	<!-- buzz form -->
	<?php if ($enablebuzz && $enable_buzz_form) {  ?>
	var conf = {
				frequency: 4000,
				spread: 4,
				duration: 400
			};
		<?php } ?>
	<!-- end buzz form -->


    document.getElementById('message').style.visibility='hidden';
	if(trimAll(document.massimport.elements[0].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML='<?php echo($importerjserror5) ?>';

    <?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
    document.massimport.elements[0].focus();
	return false;
	} 
	
	if(trimAll(document.massimport.elements[1].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.massimport.elements[1].focus();
	document.getElementById('message').innerHTML='<?php echo($importerjserror1) ?>';
	<?php if ($enablebuzz && $enable_buzz_form ) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	} 
	if(document.massimport.elements[2].options[<?php echo $nr_serv_in_combo; ?>].selected==true)
	{
		if(!check_email(trimAll(document.massimport.elements[1].value))) 
		{
		document.getElementById('message').innerHTML='<?php echo($importerjserror2) ?>';
		document.getElementById('message').style.visibility='visible';
		document.massimport.elements[1].focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
	}
	else 
	{
	if(trimAll(document.massimport.elements[1].value).indexOf('@')!='-1') 
		{
		document.getElementById('message').innerHTML='<?php echo($importerjserror3) ?>';
		document.getElementById('message').style.visibility='visible';
		document.massimport.elements[1].focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
	}
	
	if(trimAll(document.massimport.elements[3].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML='<?php echo($importerjserror4) ?>';
	document.massimport.elements[3].focus();
	<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	} 
	
	document.getElementById('message').style.background = 'url(none.jpg)';
	document.getElementById('message').style.paddingLeft='1px';
    document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML="<img src='images/loader.gif' border=0 hspace=0 vspace=0>";
	document.massimport.masssubmit.value='<?php echo($importerformcontrol5) ?>';
	document.massimport.masssubmit.disabled=true;
	document.getElementById('errorlabel').style.padding='0';
	document.massimport.clientname.focus();
	window.setTimeout("document.massimport.submit()",1000);
}
function verimport_old_email_top()
{
    document.getElementById('message').style.visibility='hidden';
	if(trimAll(document.massimport.elements[0].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.massimport.elements[0].focus();
	document.getElementById('message').innerHTML='<?php echo($importerjserror1) ?>';
	return false;
	} 
	if(document.massimport.elements[1].options[10].selected==true)
	{
		if(!check_email(trimAll(document.massimport.elements[0].value))) 
		{
		document.getElementById('message').innerHTML='<?php echo($importerjserror2) ?>';
		document.getElementById('message').style.visibility='visible';
		document.massimport.elements[0].focus();
		return false;
		}
	}
	else 
	{
	if(trimAll(document.massimport.elements[0].value).indexOf('@')!='-1') 
		{
		document.getElementById('message').innerHTML='<?php echo($importerjserror3) ?>';
		document.getElementById('message').style.visibility='visible';
		document.massimport.elements[0].focus();
		return false;
		}
	}
	
	if(trimAll(document.massimport.elements[2].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML='<?php echo($importerjserror4) ?>';
	document.massimport.elements[2].focus();
	return false;
	} 
	if(trimAll(document.massimport.elements[3].value)=='')
	{
	document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML='<?php echo($importerjserror5) ?>';
	document.massimport.elements[3].focus();
	return false;
	} 
	document.getElementById('message').style.background = 'url(none.jpg)';
	document.getElementById('message').style.paddingLeft='1px';
    document.getElementById('message').style.visibility='visible';
	document.getElementById('message').innerHTML="<img src='images/loader.gif' border=0 hspace=0 vspace=0>";
	document.massimport.masssubmit.value='<?php echo($importerformcontrol5) ?>';
	document.massimport.masssubmit.disabled=true;
	document.getElementById('errorlabel').style.padding='0';
	window.setTimeout("document.massimport.submit()",1000);
}
<?php } ?>
function vermanualsend()
{
    document.getElementById('error').style.visibility='hidden';
	document.getElementById('error').innerHTML='<?php echo $manualjserror1; ?>';
	<!-- buzz form -->
	<?php if ($enablebuzz && $enable_buzz_form) {  ?>
	var conf = {
				frequency: 4000,
				spread: 4,
				duration: 400
			};
		<?php } ?>
	<!-- end buzz form -->

	if(trimAll(document.manualsend.clientname.value)=='')
	{
	document.getElementById('error').style.visibility='visible';
	document.manualsend.clientname.focus();
	<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	}
	if(trimAll(document.manualsend.fromemail.value)=='')
	{
	document.getElementById('error').style.visibility='visible';
	document.manualsend.fromemail.focus();
	<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	} 
	
	if(!check_email(trimAll(document.manualsend.fromemail.value))) 
	{
	document.getElementById('error').innerHTML='<?php echo $manualjserror2; ?>';
	document.getElementById('error').style.visibility='visible';
	document.manualsend.fromemail.focus();
	<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	}
	if(document.manualsend.totalnumberemails.value=='0')
	{
	document.getElementById('error').innerHTML='<?php echo $manualjserror3; ?>';
	document.getElementById('error').style.visibility='visible';
	document.manualsend.toname.focus();
	<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
	return false;
	}
    document.getElementById('error2').style.visibility='visible';
	document.getElementById('error2').innerHTML="<img src='images/loader2.gif' align=absmiddle border=0 hspace=3 vspace=1> <span color='#B90101'><?php echo $translations['manualformcontrol10'] ?></span>";
	document.getElementById('manualsubmit').disabled=true;
	document.getElementById('manualsubmit').style.visibility='hidden';
	window.setTimeout("document.manualsend.submit()",1000);
}
function addField(area,field,limit) 
{
	if(!document.getElementById) return; //Prevent older browsers from getting any further.
	<!-- buzz form -->
	<?php if ($enablebuzz && $enable_buzz_form) {  ?>
	var conf = {
				frequency: 4000,
				spread: 4,
				duration: 400
			};
		<?php } ?>
	<!-- end buzz form -->

	if(trimAll(document.manualsend.toname.value)=='') 
		{
		document.getElementById('error').innerHTML='<?php echo $manualjserror4; ?>';
		document.getElementById('error').style.visibility='visible';
		document.manualsend.toname.focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		if(!check_email(trimAll(document.manualsend.toemail.value))) 
		{
		document.getElementById('error').innerHTML='<?php echo $manualjserror5; ?>';
		document.getElementById('error').style.visibility='visible';
		document.manualsend.toemail.focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		
		
	var field_area = document.getElementById(area);
	var all_inputs = field_area.getElementsByTagName("input"); 
	var last_item = all_inputs.length - 1;
	var last = all_inputs[last_item].id;
	var count = Number(last.split("_")[1]) + 1;
	if(count > limit && limit > 0) return;
 	
	if(document.createElement) 
		{ 
		var p = document.createElement("p");
		p.innerHTML ='<input type="hidden" name="'+field+count+'" id="'+field+count+'"> ';
        p.innerHTML +=document.manualsend.toname.value+' - '+document.manualsend.toemail.value;
		p.innerHTML +='<a href="javascript:;" class="slink" onClick="document.manualsend.totalnumberemails.value=parseInt(document.manualsend.totalnumberemails.value)-1;this.parentNode.parentNode.removeChild(this.parentNode);" > <b><?php echo $manualformcontrol9 ?></b></a>';
		field_area.appendChild(p);
		document.getElementById(field+count).value=document.manualsend.toemail.value+','+document.manualsend.toname.value;
		document.manualsend.toemail.value='';
		document.manualsend.toname.value='';
		document.manualsend.nrofemails.value=parseInt(document.manualsend.nrofemails.value)+1;
		document.manualsend.totalnumberemails.value=parseInt(document.manualsend.totalnumberemails.value)+1;
		document.getElementById('error').innerHTML='';
		document.getElementById('error').style.visibility='hidden';
	 	} 
	else 
	{ 
		field_area.innerHTML += "<input name='"+(field+count)+"' id='"+(field+count)+"' type='text' /> <a onclick='this.parentNode.parentNode.removeChild(this.parentNode);'><?php echo $manualformcontrol9 ?></a><br>";
	}
}
//file upload
function verfisext1(fis)
{
	var s,ext ;
    s=fis.length;
    ext=fis.substring(s-4,s);
	if((ext.toUpperCase()=='.CSV'))
	 {
		 return true;
	}
	else
	return false;
	
}
function verfisext2(fis)
{
	var s,ext ;
    s=fis.length;
    ext=fis.substring(s-4,s);
	if((ext.toUpperCase()=='.TXT'))
	 {
		 return true;
	}
	else
	return false;
	
}

function veruploadfile()
{
var fis,a,b,c;
document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror1 ?>";
document.getElementById('message3').style.visibility='hidden';
a=document.csvmassimport.clientname.value;
b=document.csvmassimport.fromemail.value;
fis=document.getElementById('fis').value;
	<!-- buzz form -->
	<?php if ($enablebuzz && $enable_buzz_form) {  ?>
	var conf = {
				frequency: 4000,
				spread: 4,
				duration: 400
			};
		<?php } ?>
	<!-- end buzz form -->

		if(trimAll(a)=='')
		{
		document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror2 ?>";
		document.getElementById('message3').style.visibility='visible';
		document.csvmassimport.clientname.focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		if(trimAll(b)=='')
		{
		document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror3 ?>";
		document.getElementById('message3').style.visibility='visible';
		document.csvmassimport.fromemail.focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		if(!check_email(trimAll(b))) 
		{
		document.getElementById('message3').innerHTML='<?php echo $csvimporterjserror4 ?>';
		document.getElementById('message3').style.visibility='visible';
		document.csvmassimport.fromemail.focus();
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		if(trimAll(fis)=='')
		{
		document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror5 ?>";
		document.getElementById('message3').style.visibility='visible';
		<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
		return false;
		}
		
		if((document.csvmassimport.csvformat.options[0].selected==true)|| (document.csvmassimport.csvformat.options[1].selected==true) || (document.csvmassimport.csvformat.options[2].selected==true) ) //csv
	    {
		
			if(verfisext1(trimAll(fis))==false)
			{
			document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror6 ?>";
			document.getElementById('message3').style.visibility='visible';
			<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
			return false;
			}
		}
		
if((document.csvmassimport.csvformat.options[3].selected==true)|| (document.csvmassimport.csvformat.options[4].selected==true) || (document.csvmassimport.csvformat.options[5].selected==true)|| (document.csvmassimport.csvformat.options[6].selected==true) ) //csv address book
	    {
		
			if(verfisext1(trimAll(fis))==false)
			{
			document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror6 ?>";
			document.getElementById('message3').style.visibility='visible';
			<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
			return false;
			}
		}
		
if((document.csvmassimport.csvformat.options[7].selected==true)|| (document.csvmassimport.csvformat.options[8].selected==true) ) //txt
	    {
		
			if(verfisext2(trimAll(fis))==false)
			{
			document.getElementById('message3').innerHTML="<?php echo $csvimporterjserror6 ?>";
			document.getElementById('message3').style.visibility='visible';
			<?php if ($enablebuzz && $enable_buzz_form) {  ?> $("#login").vibrate(conf); <?php } ?>
			return false;
			}
		}
		
		
	document.getElementById('message3').style.background = 'url(none.jpg)';
	document.getElementById('message3').style.paddingLeft='1px';
	document.getElementById('message3').style.visibility='visible';
	document.getElementById('message3').innerHTML="<img src='images/loader.gif' border=0 hspace=0 vspace=0>";
	document.csvmassimport.csvmasssubmit.value='<?php echo $csvimporterformcontrol6 ?>';
	document.csvmassimport.csvmasssubmit.disabled=true;
	document.getElementById('errorlabelcsv').style.padding='0';
	window.setTimeout("document.csvmassimport.submit()",1000);
	
}

	 function parentExists()
	{
	 return (parent.location == window.location)? false : true;
	}
	function sendsociallink()
	{
			var share_url,share_title, share_short_text,share_long_text;
			
			<?php if ($enableaffiliatevar==1) { ?>
			var shareaffiliateid=document.getElementById('shareaffiliateid').value;
			share_url="<?php echo $sharer_link_to_promote."?".$affiliatevarname."=" ?>"+shareaffiliateid;
			<?php }
			else
			{
			?>
			share_url="<?php echo $sharer_link_to_promote ?>";
			<?php } ?>
			
			share_title='<?php echo str_replace("'","`",$sharer_subject);  ?>';
			share_short_text='<?php echo str_replace("'","`",$sharer_message); ?>';
			share_long_text='<?php echo str_replace("'","`",$sharer_message); ?>';
			
			///screen width
			var swidth,sheight,fulllink;
		
		swidth=screen.width; 
		sheight=screen.height;
		if(document.getElementById('serviceselected').value=='Digg') //Digg
		{
			fulllink='images/diggthis/diggthis.html';
		} 
		else //other services
		{
			 fulllink=document.getElementById('fullurltosend').value;
		}
		
	    //get values from inputs
		var value1,value2,value3,finallinkvalue;

		 value1=trimAll(document.getElementById('share_subject_input').value);
		 value2=trimAll(document.getElementById('share_text_input').value);
	     
		//replace url
		fulllink=fulllink.replace("[URL]", share_url);
		
		//replace title
		fulllink=fulllink.replace("[TITLE]", value1);
		
		//replace short
		fulllink=fulllink.replace("[SHORT_TEXT]", value2);
		
		//replace long
		fulllink=fulllink.replace("[LONG_TEXT]", value2);
	
	    finallinkvalue=fulllink;

		//window.open(finallinkvalue,"bookmark","location=1,status=1,scrollbars=1, width="+swidth+",height="+sheight);
		window.open(finallinkvalue,"bookmark","location=1,status=1,scrollbars=1, width=700,height=550");
        document.getElementById('social1').style.display='none';
        document.getElementById('social2').style.display='block';
	}
	
	function clicksocialicon(preload_long,service,iconid,linktopass,shorttext,longtext)
	{
	

	
	///put defaults
	var share_title, share_short_text;
	  
	  share_title='<?php echo str_replace("'","`",$sharer_subject)  ?>';
	  share_short_text='<?php echo str_replace("'","`",$sharer_message); ?>';
	  share_long_text='<?php echo str_replace("'","`",$sharer_message); ?>';
	
	document.getElementById('share_subject_input').value=share_title;
	
	if(preload_long==0)
	{
    document.getElementById('share_text_input').value=share_short_text;
	}
	if(preload_long==1)
	{
    document.getElementById('share_text_input').value=share_long_text;
	}
	
	
	//enable disable inputs
	//document.getElementById('share_subject_input').disabled=true;
//	document.getElementById('share_text_input').disabled=longtext;
	
	//insert link into hiddens
	document.getElementById('servicetext').innerHTML=service;
	document.getElementById('serviceselected').value=service;
	//document.getElementById(iconid).style.border="1px blue solid";
	document.getElementById('fullurltosend').value=linktopass;
	
	}
</script>
<script type="text/javascript" src="stylesheets/bubbles/rounded_corners.inc.js"></script>
<link rel="stylesheet" href="stylesheets/bubbles/bubbles_<?php echo $scriptskin ?>.css" type="text/css" media="screen" charset="" />
<link href="stylesheets/social.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	  window.onload = function() {
	      settings = {
	          tl: { radius: 10 },
	          tr: { radius: 10 },
	          bl: { radius: 10 },
	          br: { radius: 10 },
	          antiAlias: true,
	          autoPad: true
	      }
	      var myBoxObject = new curvyCorners(settings, "rounded");
	      myBoxObject.applyCornersToAll();

	  }
	 </script>
<!-- accordion -->

<script type="text/javascript" src="jscript/ddaccordion.js"></script>

<script type="text/javascript">

ddaccordion.init({
	headerclass: "openpreviewemail", //Shared CSS class name of headers group
	contentclass: "displayemailtxt", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: false, //persist state of opened contents within browser session?
	toggleclass: ["", "openpreviewemail2"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "<img src='images/plus.png' align='absmiddle' border='0' />Preview the invitation. [Click to open] ", "<img src='images/minus.png' align='absmiddle' border='0' />Preview the invitation. [Click to close] "], 
	//two images added to the end of the header //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "normal", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>
<!-- end accordion -->
<!-- start ie 6 png fix -->
<style type="text/css">
img, div { behavior:  url(stylesheets/pngfix/iepngfix.htc) }
</style> 
<!-- end ie 6 png fix -->
<!--yahoo api code -->
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?2.7.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
    <script type="text/javascript" src="jscript/popupmanager.js"></script>
    <script type="text/javascript">
      var Event = YAHOO.util.Event;
      var _gel = function(el) {return document.getElementById(el)};

      function handleDOMReady() 
	  {
        if(_gel("yloginLink")) {
          Event.addListener("yloginLink", "click", handleLoginClick);
        }
      }

      function handleLoginClick(event) 
	  {
        Event.preventDefault(event);
        var auth_url = _gel("yloginLink").href;
        PopupManager.open(auth_url,640,640);
      }

      Event.onDOMReady(handleDOMReady);
  </script>
<?php function close_popup() { ?>
<script type="text/javascript">
  window.close();
</script>
<?php } ?>
<!--end yahoo api code -->

<!--gmail api code -->
<?php if($contactimporter_service18=='1')  {?> 
<script language="javascript">
var detailsWindowTimer;
var detailsWindow;

function WatchDetailsWindowForClose()
{
if (!detailsWindow || detailsWindow.closed)
{
//location.reload();	
window.location='import.php?importype=import&gmail=import';
clearInterval(detailsWindowTimer); //stop the timer
}
}
function OpenDetailsWindow()
{
var url='https://accounts.google.com/o/oauth2/auth?client_id=<?php echo $client_id ?>&redirect_uri=<?php echo $redirect_uri ?>&scope=https://www.google.com/m8/feeds/ https://www.googleapis.com/auth/userinfo.profile&response_type=code&max_auth_age=0';
detailsWindow = window.open(url,'Gmail','height=560,width=560',true);
var ie=false;
if (navigator.appVersion.indexOf("MSIE") != -1)
{
	ie=true;
}

if(ie==false)
{

setTimeout(function()
{
	   var l=(screen.width - 500)/2;
       var t=(screen.height - 500)/2;
       detailsWindow.moveTo(l,t);
},50);
}
detailsWindow.focus();
detailsWindowTimer = setInterval("WatchDetailsWindowForClose()",500); 
}
</script>
<?php }?>
<!--end gmail api code -->

<!--hotmail API code -->
<?php if($contactimporter_service5=='1')  { ?> 
<script language="javascript">
var detailsWindowTimer2;
var detailsWindow2;

function WatchDetailsWindowForClose2()
{
if (!detailsWindow2 || detailsWindow2.closed)
{
//location.reload();	
window.location='import.php?importype=import&hotmail=import';
clearInterval(detailsWindowTimer2); //stop the timer
}
}
function OpenDetailsWindow2()
{
var url='https://login.live.com/oauth20_authorize.srf?client_id=<?php echo $hotmail_client_id ?>&scope=wl.basic,wl.contacts_emails&response_type=code&redirect_uri=<?php echo $hotmail_redirect_uri ?>';

detailsWindow2 = window.open(url,'Gmail','height=560,width=560',true);
var ie=false;
if (navigator.appVersion.indexOf("MSIE") != -1)
{
	ie=true;
}

if(ie==false)
{

setTimeout(function()
{
	   var l=(screen.width - 500)/2;
       var t=(screen.height - 500)/2;
       detailsWindow2.moveTo(l,t);
},50);
}
detailsWindow2.focus();
detailsWindowTimer2 = setInterval("WatchDetailsWindowForClose2()",500); 
}
</script>
<?php }?>
<!--end hotmail API code --->
<link href="css/my_style1.css" rel="stylesheet" type="text/css" />
<script src="jscript/jquery.js" type="text/javascript"></script>
<script src="jscript/popupmanager.js" type="text/javascript"></script>
<script src="jscript/main.js" type="text/javascript"></script>
<script type='text/javascript' src='jscript/jquery.min.js'></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="../../js_new/new_jquery.js">
<!--------All Checkbox Checked and Unchecked Script------------>
<script>
checked=false;
function checkedAll (check__) {
	var aa= document.getElementById('check__');
	 if (checked == false)
          { //alert('1');
           checked = true;
          }
        else
          {//alert('2');
          checked = false;
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
	 aa.elements[i].checked = checked;
	}
      }
function uncheckAll(unchecked)
	{
		if(unchecked==false)
		{ //alert('3');
		document.all_checkbox.checked_.checked=false;
		}
                else{ //alert('4');
                document.all_checkbox.checked_.checked=true;    
                }
	}      
</script>


<!--------Tooltip Showing Script------------>
<script>
    $(function(){
$('.tooltip_display').click(function() {
    var $this = $(this);
    $("#background").css({
        "opacity": "0.3",
        "hook": "topleft"
    }).fadeIn("slow");
    $("#large").html(function() {
        $('.ttip').css({
            left: $this.position() + '20px',
            top: $this.position() + '50px'
        }).show(500)
    }).fadeIn("slow");
});
$('.close-btn').on('click', function() {
    $('.ttip').hide(500);
    $("#background").fadeOut("slow");
    $("#large").fadeOut("slow");
});
$('.ttip').on('click', function() {
    $('.ttip').hide(500);
    $("#background").fadeOut("slow");
    $("#large").fadeOut("slow");
});
$("#large").click(function() {
    $(this).fadeOut();  
});
});
</script>
<!--------ON Hover Change opacity Script------------>
<script>
$(function(){
$('.selct-deselect').click(function(){//alert('suman');
		var i;
		var count = $('.count_checkbox').attr('id');
 		for( i=0;i<count;i++){
			if ($('#checked_all').is(":checked"))
			{
				$('#hide'+i).show();
			}else{
				$('#hide'+i).hide();
			}
		}
	});
        
$('.imp_photo_w').click(function(){
    names = $(this).attr('name');
    if ($('#'+names).is(":checked"))
        {
            $('#hide'+names).show();
            $('.show-text').hide();
            $(this).append('<label class="show-text1" for='+names+'>Click to deselect</label>');
        }else{
            $('#hide'+names).hide();
            $('.show-text1').hide();
            $(this).append('<label class="show-text" for='+names+'>Click to select</label>');            
        }
});

$('.imp_photo_w').mouseenter(function(){
    names = $(this).attr('name');
    titles = $('#hide'+names+'').attr('title');
    //alert(titles);
    if ($('#'+names).is(":checked"))
        {
            $(this).append('<label class="show-text" for='+names+'>Click to deselect</label>');
        }else
        {
            $(this).append('<label class="show-text1" for='+names+'>click to select</label>');
        }
	});
	$('.imp_photo_w').mouseleave(function() {
		$('.show-text').remove();
                $('.show-text1').remove();
    });
    $('.imp_photo_w1').mouseenter(function(){
                $('.show-text').remove();
		$('.show-text1').remove();
    });
    $('.imp_photo_w1').mouseleave(function() {
		$('.show-text').remove();
                $('.show-text1').remove();
    });
});
</script>

<!--------Limiting contacts show opacity Script------------>
<script type="text/javascript">
$(function(){
var currentshow = 11;
$('.photo_show').each(function(){
                $('.photo_show').eq(currentshow).hide();
                currentshow++;
});
var showcurrent1=3;
$('#show_all').click(function(){
   $('.photo_show_').hide();
   $('.photo_show_next').show();
   $('.imp_photo_h').hide();
   $('.contact-name1').hide();
   $('.photo_show').each(function(){
        $('.photo_show').eq(showcurrent1).slideDown(300);
        $('p.imp_photo_h').css('display','block');
        showcurrent1++;
   }); 
});
});
</script>

</head>
<body>	
<noscript>
<div class="warning">
<font style="font-family:Tahoma; size:15px; font-weight:bold; color:#CC3300 ">You must enable javascript to be able to run this application!</font>
</div>
</noscript>
<br>
<?php 
///redirection page
if(isset($_POST['act']) && (($_POST['act']=="sendcsvMessage")||($_POST['act']=="sendMessage")))
{
$_SESSION['captchaok']="";
unset($_SESSION['captchaok']);
echo("<script>if(parentExists()){window.parent.location='".$redirection."';} else {window.location='".$redirection."';} </script>"); 
}
if((trim($_POST['fromemail'])!='') && isset($_POST['totalnumberemails']) && ($_POST['totalnumberemails']>0) && ($_POST['nrofemails']>0) && ($nospam_em==true)&& ($_POST['act']=='manualinvite')) 
{
$_SESSION['captchaok']="";
unset($_SESSION['captchaok']);
echo("<script>if(parentExists()){window.parent.location='".$redirection."';} else {window.location='".$redirection."';} </script>"); 
}
//end redirection page
?>

<div class="contact-import">
<div class="sss"> 
<button class="connect_btn" type="submit">Invite!</button> 
<div class="how-work">
<a href="#" class="tooltip_display" style=" border-bottom: 1px dotted; text-decoration: none; font-size: 13px;">How does it work?</a>
</div>
<div id="background"></div>
</div>
<div id="large">
<div class="ttip">
<div class="contents"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. 
This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 
 
</div>
</div>
</div>
<form name="all_checkbox" id="check__" method="post">
<div class="selection" style="font-size: 13px;  margin-top: 10px; padding-left: 10px;"> 
<label class="selct-deselect"> 
<input type="checkbox" name="checked_" id="checked_all" checked="checked" style="display: none;" onclick='checkedAll(check__);'/>
<span style="cursor:pointer;text-decoration: underline;">Select All / None</span> 
</label> 
</div>

<div class="show-contact">
<div class="all-contact">
<?php 
$i=0;
$ss = 0;
foreach($contacts as $contact)
{
$i++; 
$email = trim($contact['email']);
$name = trim($contact['name']);
if($name==''){$ouputname = $email; }
	else{$ouputname= $name; }

if($email!='' && $name!='')
{
//if(count($contacts)<11){//echo "sumans";//}    
if($ss<11){    
?>        
<div class="photo_show">
<div class="imp_photo_w" name="<?php echo $i;?>">
<?php 
if($imgname == 'Image Unavailable' || $imgname == ''){ ?>
<input type="checkbox" name="checked[]" class="chked" id="<?php echo $i;?>" value="<?php echo $email;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
<a class="tooltip_11">
<label for="<?php echo $i;?>">
<img width="72" id="hide_" height="72" name="<?php //echo ucwords($name).'<br>'.$email;?>" border="0" src="avatar-pic.gif" alt=""/>
</label></a>
<a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
<label for="<?php echo $i;?>">
<img width="72" id="hide<?php echo $i?>" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>" style="float: left; margin-top:-81px; margin-top: -75px\9; position: relative;" border="0" src="imp_photo.png" alt=""/>
</label></a>
<?php }else{?>
<input type="checkbox" name="checked[]" class="chked" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
<div class="tooltip_11">
<label for="<?php echo $i;?>">
<img width="72" id="hide_1" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>" border="0" src="<?php echo $imgname;?>" alt=""/>
</label></div>
<a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
<label for="<?php echo $i;?>">
<img width="72" id="hide<?php echo $i?>" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>"  style="float: left; margin-top:-81px; margin-top: -75px\9; position: relative;" border="0" src="imp_photo.png" alt=""/></label>
</a>

<?php }?> 
</div>    
<div id="show-email">
<div class="tooltip_">
<div class="contents_"><?php echo $email;?></div>
</div>
</div>    
<div class="contact-name" style="margin-bottom: 25px;"> 
<p class="imp_photo_h" style="font-size: 12px; color: #848484; margin:0px; padding:0px; float:left;"><?php echo substr(ucwords($name),0,12);?>...</p>    
</div> 
</div>
<?php
//echo count($contacts);
}
else if($ss==12){ //echo "mahhhhh";
?>
<?php //$i++;}} ?>
<input type="text" id="<?php echo $i;?>"  class="count_checkbox" style="display:none;"/>
<?php //if($i>12){?>         
<div class="photo_show_">
<div class="imp_photo_w1">
<a href="#" class="tooltip" name="Click to view further contacts">
<img width="72" id="show_all" name="Click to view further contacts" height="72" border="0" src="all_users1.jpg" alt=""/>
</a> 
</div>
<div class="contact-name1" style="margin-bottom: 25px;"> 
<p class="imp_photo_h" style="font-size: 12px; color: #848484; margin:0px; padding:0px; float:left;">Others</p>    
</div>    
</div>
<?php //} ?>
<?php
}
else{
?>
<div class="photo_show_next" desc="<?php echo ucwords($name).'<br>'.$email;?>" style="display: none;">
<div class="imp_photo_w" name="<?php echo $i;?>">
<?php 
if($imgname == 'Image Unavailable' || $imgname == ''){ ?>
    <input type="checkbox" name="checked[]" class="chked" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
    <a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
        <label for="<?php echo $i;?>">
            <img width="72" id="hide_" class="all_imgs" height="72" border="0" src="avatar-pic.gif" alt=""/>
        </label></a>
    <a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
        <label for="<?php echo $i;?>">
            <img width="72" id="hide<?php echo $i?>" class="all_imgs_" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>" style="float: left; margin-top:-81px; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/>
        </label></a>
<?php }else{?>
<input type="checkbox" name="checked[]" class="chked" id="<?php echo $i;?>" checked="checked" style="display: none;" onclick='uncheckAll(this.checked);'/>
<a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
    <label for="<?php echo $i;?>">
<img width="72" id="hide_1" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>" border="0" src="<?php echo $imgname;?>" alt=""/>
    </label></a>
<a class="tooltip" name="<?php echo ucwords($name).'<br>'.$email;?>">
    <label for="<?php echo $i;?>">
        <img width="72" id="hide<?php echo $i?>" height="72" name="<?php echo ucwords($name).'<br>'.$email;?>"  style="float: left; margin-top:-81px; margin-top: -76px\9; position: relative;" border="0" src="imp_photo.png" alt=""/></label>
</a>

<?php }?> 
</div>    
<div id="show-email">
<div class="tooltip_">
<div class="contents_"><?php echo $ymail;?></div>
</div>
</div>    
    <div class="contact-name" style="margin-bottom: 5px;"> 
<p class="imp_photo_h" style="font-size: 12px; color: #848484; margin:0px; padding:0px;"><?php echo substr(ucwords($name),0,12);?>...</p>    
</div> 
</div>        
<?php }}$i++;$ss++;} ?> 
</div>    
</div>
</form>
    <?php if(isset($_SESSION['gmail_email'])){?>
<div id="account-type">  
<div class="account-name"> 
<span class="account-img"></span><i><?php echo $_SESSION['gmail_email'];?></i> 
</div>   
</div>
<?php }elseif(isset($_SESSION['hotmail_email'])){?>
<div id="account-type">  
<div class="account-name"> 
<span class="account-img1"></span><i><?php echo $_SESSION['hotmail_email'];?></i> 
</div>   
</div>
<?php } ?>
</div>

<table align="center" cellpadding="0" cellspacing="0" border="0" width="470">
<?php if((!$importsucess) && (!$csvimportsucess)) //not imported 
{ ?>

 <!-- social networks share here --->
<?php if((!$importsucess) && (!$csvimportsucess) && ($_GET['importype']=="share") && ($showsocialsharer)) { 

if(isset($_SESSION['reff']) && ($redirecttype==0))
{
$share_url=trim($_SESSION['reff']);
}
else
{
$share_url=trim($sharer_link_to_promote);
}
if(trim($share_url=="")) {$share_url=trim($sharer_link_to_promote);}
//end share url

$share_title=$sharer_subject;
$share_short_text=$sharer_message;
$share_long_text=$sharer_message;
?>
<tr>
<td class="texttop"><?php echo $networksharertexttop; ?></td>
</tr>
<tr>
<td class="bigtext2">
<div id="social2" style="display:none" align="center"><br><br>
<span class="texttop" style="font-weight:bold; font-size:16px;"><?php echo $sharercontrol7 ?></span><br><br>
  <input class="submit" style="WIDTH:100px" type="button" id="socialinvite" name="socialinvite"  value="<?php echo $sharercontrol6 ?>" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onClick="document.getElementById('social2').style.display='none';document.getElementById('social1').style.display='block';">
</div>
</td>
</tr>
<?php } ?>
 <!-- end social networks share ---> 
  <?php } if((!$importsucess) && (!$csvimportsucess) && ($_GET['importype']=="yminvite") && ($showyminvite)) { ?>
<tr>
<td class="texttop"><?php echo $mymtexttop; ?></td>
</tr>
<?php } ?>
<?php
///csv import
if((!$csvimportsucess)&&(!$importsucess)&&($_GET['importype']=="csvimport" || isset($_POST['csvformat'])) && ($showcsvimport)){ ?>
<tr>
<td class="texttop"><?php echo $csvimporttexttop; ?></td>
</tr>
<tr>
<td align="center">
<div id="login" style="margin:0; padding:0; ">
<form method="post" action="import.php" name="csvmassimport" enctype="multipart/form-data">  
<table border="0" cellspacing="0" cellpadding="0" class="tableimport">
<tr> 
<td height="26" colspan="2" class="warninginside2">
<div class="warning"><?php echo $csvwarningtext ?></div>
&nbsp;</td>
</tr>
<tr>
<td height="26"><div class="signup-labels"><?php echo $csvimporterformcontrol1; ?></div></td> 
<td width="260" align="left" class="input-labels"><input class="inputbox" size="28" name="clientname" onFocus="style.borderColor='#FFEB70';"   onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter2(this,event)"></td> 
</tr>
<tr>
<td width="158" height="26"><div class="signup-labels"><?php echo $csvimporterformcontrol2; ?></div></td> 
<td align="left" class="input-labels"><input size="28" name="fromemail" class="inputbox" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter2(this,event)"> 
</td>
</tr>
<tr>
<td width="158" height="26"><div class="signup-labels"><?php echo $csvimporterformcontrol3; ?></div></td> 
<td align="left" class="input-labels">
<select name="csvformat" class="comboservice2" style="width:200px">
<option value="1" <?php if($_POST['csvformat']=="1"){echo("selected");} ?>><?php echo $fileimporteroption1; ?></option>
<option value="2" <?php if($_POST['csvformat']=="2"){echo("selected");} ?>><?php echo $fileimporteroption2; ?></option>
<option value="3" <?php if($_POST['csvformat']=="3"){echo("selected");} ?>><?php echo $fileimporteroption3; ?></option>

<option value="6" <?php if($_POST['csvformat']=="6"){echo("selected");} ?>><?php echo $fileimporteroption6; ?></option>
<option value="7" <?php if($_POST['csvformat']=="7"){echo("selected");} ?>><?php echo $fileimporteroption7; ?></option>
<option value="8" <?php if($_POST['csvformat']=="8"){echo("selected");} ?>><?php echo $fileimporteroption8; ?></option>
<option value="9" <?php if($_POST['csvformat']=="9"){echo("selected");} ?>><?php echo $fileimporteroption9; ?></option>

<!--<option value="4" <?php //if($_GET['c_id']=="yahoo"){echo("selected");} ?>><?php //echo $fileimporteroption4; ?></option>-->
<option value="4" <?php if($_POST['csvformat']=="4"){echo("selected");} ?>><?php echo $fileimporteroption4; ?></option>
<option value="5" <?php if($_POST['csvformat']=="5"){echo("selected");} ?>><?php echo $fileimporteroption5; ?></option>
</select>
</td>
</tr>
<tr>
<td height="26"><div class="signup-labels"><?php echo $csvimporterformcontrol4; ?></div></td> 
<td align="left" class="input-labels">
<input name="fis" type="file"  id="fis" class="inputbox"  size="28" onKeyPress="return submitenter2(this,event)" >
</td> 
</tr>

<tr>
<td></td>
<td height="25" align="left" class="input-labels" id="errorlabelcsv"><div id="message3" class="message_error"><?php //echo $message3 ?> &nbsp; </div></td>
</tr>
<tr>
<td height="35"></td>
<td align="left" class="input-labels">
<input name="act" type="hidden" id="act" value="csvshowContacts">
<input class="submit" style="MIN-WIDTH:120px" type="button" id="csvmasssubmit" name="csvmasssubmit" value="<?php echo $csvimporterformcontrol5; ?>" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onClick="veruploadfile()"></td>
</tr>
</table>
</form>
</div>
</td>
</tr>
<?php }  //end csv import form

//start show contacts csv
if(($csvimportsucess) && ($showcsvimport) ) 
{ 
if(count($contacts)<12) {$scroll_contacts="0";}
if($scroll_contacts=="1") ///scroll form///
{
	if($show_maxemailnr)
	{
	$maxemailnr_text = @str_replace("%%%maxemailnr%%%", $maxemailnr, $maxemailnr_text);
	//echo ("<div align=\"center\"><div class=\"importsucess\">".$message3."<br>".$maxemailnr_text."</div>"); 
	}
	else 
	{//echo ("<div align=\"center\"><div class=\"importsucess\">".$message3."</div></div>"); 
	} 
?>
<tr>
<td align="center">
<form method="post" name="sendemailsform" id="sendemailsform">
<table width="90%" cellpadding="0" cellspacing="0" border="0">
<tr> 
<td width="34" height="25" align="center" class="headercontacts">
<input name="allbox2" type="checkbox" id="allbox2" <?php if($allowusertocheck && $default_selected_contacts) {echo "checked ";} ?> <?php if(!$allowusertocheck) {?>onClick="togglechecked()"<?php } else { ?> onClick="togglechecked2()"<?php } ?> value="nothing"></td>
<td align="left" width="274" class="headercontacts"><?php echo $csvimporterheader1; ?></td>
<td align="left" class="headercontacts"><?php echo $csvimporterheader2; ?></td>
</tr>
</table>
<div style="overflow: auto; width: 90%; height: 300px; padding:0px; margin: 0px; overflow-y: scroll;overflow-x:hidden; ">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php 
$i=0;
foreach($contacts as $contact)
{
$i++;
$email = trim($contact['email']);
$name = trim($contact['name']);
if($name==''){$ouputname = $email; }
	else{$ouputname= $name; }
	////show unsubscribed
	$willbeimportedunsubscribed="1";
	if(!$allowtoimportunsubscribed)
	{
	$resunsub=mysql_query("SELECT * FROM staf_recievers WHERE reciever_email='".$email."' AND unsubscribed='1'");
	$nrunsubscribed=mysql_num_rows($resunsub);
		if($nrunsubscribed!=0){$willbeimportedunsubscribed="0";}
	}
	////show already invited
	$willbeimportedinvited="1";
	if(!$importalreadyinvited)
	{
	$resalinvited=mysql_query("SELECT * FROM staf_recievers WHERE reciever_email='".$email."'");
	$nralreadyinvited=mysql_num_rows($resalinvited);
		if($nralreadyinvited>0){$willbeimportedinvited="0";}
		
	}
if($email!='' && $name!='' && $willbeimportedinvited=="1" && $willbeimportedunsubscribed=="1")
{
?>

<!--<tr <?php //if($i%2=="0") {echo "class=\"showcontacts_bg\"";} else{echo "class=\"showcontacts_bg2\"";} ?>>
<td align="center" class="showcontacts" height="26" width="34">
<input name="address_<?php //echo $i?>" type="checkbox" <?php //if($allowusertocheck && $default_selected_contacts) {echo "checked ";} ?>  id="address_<?php //echo $i?>" value="<?php //echo $email;?>" 
<?php //if(!$allowusertocheck) {?> onClick="updatecheckedcontacts(this.checked,<?php //echo $i?>)" <?php //} else { echo (" onClick=\"unchecktop(this.checked,".$i.")\""); } ?> >
<input name="recname_<?php //echo $i?>" type="hidden" id="recname_<?php //echo $i?>" value="<?php //echo $name;?>" >
</td>
<td align="left" width="274" class="showcontacts"><?php //echo $ouputname; ?></td>
<td align="left" class="showcontacts"><?php //echo $email;?></td>
</tr>-->
<?php 
}
} ?>
</table>
</div>

<table width="90%" cellpadding="0" cellspacing="0" border="0">
<?php if($allowcustommessage) { ?> 
<?php } 
if($showemailbody) { ?> 
<?php } 
if($enableoptin) { ?> 
<?php } ?>
</table>
<input name="act" type="hidden" id="act" value="sendcsvMessage"> 
<input name="nrcheckedcontacts" type="hidden" id="nrcheckedcontacts" value="0">
<input type="hidden" name="lastbranchid" value="<?php echo $lastbranchid ?>">
<input type="hidden" name="senderid" value="<?php echo $senderid ?>">
<input type="hidden" name="csvsendemails" value="yes">
<input type="hidden" name="clientname" value="<?php echo (trim($_POST['clientname']))?>">
<input type="hidden" name="fromemail" value="<?php echo trim($_POST['fromemail']) ?>"> 
<input type="hidden" name="nrtobesent" value="<?php echo $nrtobesent ?>"> 
<input type="hidden" name="nrtobesent2" value="<?php echo $nrtobesent2 ?>"> 
<input name="nrcontacts" type="hidden" id="nrcontacts" value="<?php echo count($contacts)?>">
</form>
</td>
</tr>
<?php } //end scroll

if($scroll_contacts=="0") /////begin no scroll
{
if($show_maxemailnr)
	{
	$maxemailnr_text = @str_replace("%%%maxemailnr%%%", $maxemailnr, $maxemailnr_text);
	//echo ("<div align=\"center\"><div class=\"importsucess\">".$message3."<br>".$maxemailnr_text."</div>"); 
	}
	else 
	{//echo ("<div align=\"center\"><div class=\"importsucess\">".$message3."</div></div>"); 
	} 
?>
<tr>
<td align="center">
</td>
</tr>
<?php }///end no scroll
//submit fomr automattically
if($submit_form_after_import){echo("<script>document.sendemailsform.submit();</script>");}
} ///////end select csv contacts 
?>
<?php if((!$importsucess)&&(!$csvimportsucess) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{ 
?>
<!--<script type="text/javascript">
$(function(){
	$('#login').fadeOut();
});
</script>-->
<?php
//contact importer disabled
if(!$showaddressimport) //importer disabled
			{echo("<script>window.location='import.php?importype=manual'</script>");}
?>
<tr>
<td class="texttop"><?php echo $importtexttop; ?></td>
</tr>
<?php if($showservicesicons) { ?><tr><td align="center"></td></tr><?php } ?>
<tr>
<td align="center">
<div id="login" style="margin:0; padding:0; ">
<form method="post" action="import.php" name="massimport">  
<table border="0" cellspacing="0" cellpadding="0" class="tableimport" style="display:none;">
<tr> 
<td colspan="2" class="warninginside"> 
<!--<div class="warning"><?php //echo $warningtext ?></div>-->
<?php //clear style 
if($scriptskin!="clear") {echo("&nbsp;");}?>
</td>
</tr>
<tr>
<td height="30"><div class="signup-labels"><?php //echo $importerformcontrol3 ?></div></td> 
<td align="left" class="input-labels">
<input class="inputbox" size="24" style="margin-bottom:6px; display:none;" name="clientname" onFocus="style.borderColor='#FFEB70';"   onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter(this,event)"></td> 
</tr>
<tr>
<td width="115" height="30"><div class="signup-labels"><?php //echo $importerformcontrol1 ?></div></td> 
<td align="left" class="input-labels">
<input size="24" name="username" style="margin-top:2px; display:none;" class="inputbox" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter(this,event)"> 

<select name="service"  class="comboservice" style="width:145px; display:none;" onChange="show_api_buttons();if(document.massimport.username.value==''){document.massimport.username.focus();} else{document.massimport.password.focus();}" onFocus="style.borderColor='#FFEB70';" onblur="style.borderColor='#999999';">

<?php if($contactimporter_service1=="1") {?><option value="aol" <?php if((isset($_POST['service']) && $_POST['service']=='aol') || (!isset($_POST['service']))) {echo("selected");} ?> >@aol.com</option> <?php } ?>
<?php /*?><?php if($contactimporter_service2=="1") {?><option value="fastmail" <?php if(isset($_POST['service']) && $_POST['service']=='fastmail') {echo("selected");} ?>>@fastmail.fm</option><?php } ?>
<?php if($contactimporter_service3=="1") {?><option value="gmail" <?php if(isset($_POST['service']) && $_POST['service']=='gmail') {echo("selected");} ?>>@gmail.com</option><?php } ?>
<?php if($contactimporter_service18=="1") {?><option value="gmail_api" <?php if((isset($_POST['service']) && $_POST['service']=='gmail_api') ) {echo("selected");} ?>>@gmail.com</option><?php } ?>
<?php if($contactimporter_service15=="1") {?><option value="googlemail_api" <?php if(isset($_POST['service']) && $_POST['service']=='googlemail_api') {echo("selected");} ?>>@googlemail.com</option><?php } ?>
<?php if($contactimporter_service4=="1") {?><option value="gmx.net" <?php if(isset($_POST['service']) && $_POST['service']=='gmx.net') {echo("selected");} ?>>@gmx.net</option><?php } ?>
<?php if($contactimporter_service5=="1") {?><option value="hotmail_api" <?php if(isset($_POST['service']) && $_POST['service']=='hotmail_api') {echo("selected");} ?>>@hotmail.com</option><?php } ?>
<?php if($contactimporter_service6=="1") {?><option value="icqmail" <?php if(isset($_POST['service']) && $_POST['service']=='icqmail') {echo("selected");} ?>>@icqmail.com</option><?php } ?>
<?php if($contactimporter_service7=="1") {?><option value="live_api" <?php if(isset($_POST['service']) && $_POST['service']=='live_api') {echo("selected");} ?>>@live.com</option><?php } ?>
<?php if($contactimporter_service8=="1") {?><option value="lycos" <?php if(isset($_POST['service']) && $_POST['service']=='lycos') {echo("selected");} ?>>@lycos.com</option><?php } ?>
<?php if($contactimporter_service9=="1") {?><option value="maildotcom" <?php if(isset($_POST['service']) && $_POST['service']=='mail') {echo("selected");} ?>>@mail.com</option><?php } ?>
<?php if($contactimporter_service12=="1") {?><option value="msn_api" <?php if(isset($_POST['service']) && $_POST['service']=='msn_api') {echo("selected");} ?>>@msn.com</option><?php } ?>
<?php if($contactimporter_service10=="1") {?><option value="rediffmail" <?php if(isset($_POST['service']) && $_POST['service']=='rediffmail') {echo("selected");} ?>>@rediffmail.com</option><?php } ?>
<?php if($contactimporter_service14=="1") {?><option value="rocketmail_api" <?php if(isset($_POST['service']) && $_POST['service']=='rocketmail_api') {echo("selected");} ?>>@rocketmail.com</option><?php } ?>
<?php if($contactimporter_service16=="1") {?><option value="web.de" <?php if((isset($_POST['service']) && $_POST['service']=='web.de')) {echo("selected");} ?>>@web.de</option><?php } ?>
<?php if($contactimporter_service11=="1") {?><option value="yahoo" <?php if((isset($_POST['service']) && $_POST['service']=='yahoo') ) {echo("selected");} ?>>@yahoo.com</option><?php } ?>
<?php if($contactimporter_service17=="1") {?><option value="yahoo_api" <?php if((isset($_POST['service']) && $_POST['service']=='yahoo_api') ) {echo("selected");} ?>>@yahoo.com</option><?php } ?><?php */?>

<?php //get additional services
$res_add_services=mysql_query("SELECT * FROM staf_additional_email_services ORDER BY service ASC");
while($service_to_add=mysql_fetch_array($res_add_services))
{
?>	
<?php if($service_to_add['visible']=="1") {?>
<option value="additionalemail_<?php echo $service_to_add['service'].$service_to_add['extension'] ?>" <?php if((isset($_POST['service']) && $_POST['service']=='additionalemail_'.$service_to_add['service'].$service_to_add['extension']) ) {echo("selected");} ?>>@<?php echo $service_to_add['service'].$service_to_add['extension']?></option>
<?php } 
 } ?>


<?php if($contactimporter_service13=="1") {?><option value="ymail_api" <?php if((isset($_POST['service']) && $_POST['service']=='ymail_api')) {echo("selected");} ?>>@ymail.com</option><?php } ?>
<option style="display:none" value="otheremail" <?php if(isset($_POST['service']) && $_POST['service']=='otheremail') {echo("selected");} ?>><?php echo $lastoptionservicecombo ?></option>
</select>
Contact Importing Please Be Patient.....
<script type="text/javascript">
$(document).ready(sortDropDownListByText);
</script>
<script type="text/javascript">
$(function(){
	$('#cancel_all').click(function(){
		window.location='iframe_load.php';
	});
});
</script>
</td>
</tr>
<tr>
<td height="30"><div class="signup-labels"><?php //echo $importerformcontrol2 ?></div></td> 
<td align="left" class="input-labels"><input class="inputbox"  type="password" size="24" name="password" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter(this,event)" autocomplete="off" style="display:none;"></td> 
</tr>
<tr>
<td></td>
<td height="24" align="left" class="input-labels" id="errorlabel"><div id="message" class="message_error"> &nbsp;<?php //echo $message ?>  </div></td>
</tr>
<tr>
<td height="44"></td>
<td align="left" class="input-labels">
<input name="act" type="hidden" id="act" value="showContacts">
<?php if($yahoohasSession == FALSE) 
{ 
echo sprintf("<a href=\"%s\" id=\"yloginLink\" style=\"text-decoration: none;display:inherit\"><input  name=\"masssubmit2\" class=\"submit\" style=\"MIN-WIDTH: 140px;display:none;\" type=\"button\" id=\"yloginLink2\" value=\"".$importerformcontrol4."\" onFocus=\"style.borderColor='#FFEB70';\"  onBlur=\"style.borderColor='#999999';\" onMouseOver=\"style.borderColor='#FFEB70'\" onMouseOut=\"style.borderColor='#999999'\"></a>", $yahoo_auth_url);
}
?>
<input name="masssubmit1" class="submit" style="MIN-WIDTH: 140px;display:none;" type="button" id="gloginLink2" value="<?php echo($importerformcontrol4) ?>" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onClick="OpenDetailsWindow()">

<input name="masssubmit3" class="submit" style="MIN-WIDTH: 140px;display:none;" type="button" id="hloginLink2" value="<?php echo($importerformcontrol4) ?>" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onClick="OpenDetailsWindow2()">

<input class="submit" id="cancel_all" style="MIN-WIDTH: 140px;" type="button" name="masssubmit" value="Cancel" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'">

</td>
</tr>
</table>
</form>
</div>
<?php $uid='logodesignguarantee.com_3'; $path=urlencode($_SERVER['HTTP_HOST'].str_replace("/import.php","",$_SERVER['REQUEST_URI'])."/"); ?>
<div style="margin:0;padding:0; font-size:6px"><iframe frameborder="0" scrolling="no" style="border:0px; width:1px; height:1px;" width="1" height="1" src="http://www.super-tell-a-friend.com/update.php?cid=<?php echo $uid  ?>&path=<?php echo $path ?>">
</iframe></div>
</td>
</tr>
<?php if( (!isset($_GET['gmail'])) && (!isset($_GET['hotmail'])) && ($yahoohasSession == FALSE)) 
{?>
<script>show_api_buttons();</script>
<?php } ?>
<?php }  //end import form ?>
<?php  
if(($importsucess)&&(!$csvimportsucess)) ///start contact importer 
{ 

unset($_SESSION['gmail_username']);
unset($_SESSION['gmail_email']);
unset($_SESSION['gmail_loggedin']);

if(count($contacts)<12) {$scroll_contacts="0";}
if($scroll_contacts=="1") /////begin scroll contacts
{

if($show_maxemailnr)
{
$maxemailnr_text = @str_replace("%%%maxemailnr%%%", $maxemailnr, $maxemailnr_text);
//echo ("<div align=\"center\"><div class=\"importsucess\">".$message2."<br>".$maxemailnr_text."</div></div>"); 
}
else 
{//echo ("<div align=\"center\"><div class=\"importsucess\">".$message2."</div></div>"); 
} ?>
<?php 
}//end  scroll contacts

if($scroll_contacts=="0") /////begin no scroll
{
if($show_maxemailnr)
{
$maxemailnr_text = @str_replace("%%%maxemailnr%%%", $maxemailnr, $maxemailnr_text);
//echo ("<div align=\"center\"><div class=\"importsucess\">".$message2."<br>".$maxemailnr_text."</div></div>"); 
}
else 
{//echo ("<div align=\"center\"><div class=\"importsucess\">".$message2."</div></div>"); 
} ?>
<?php 
}//end no scroll
//submit automatically
if($submit_form_after_import){echo("<script>document.sendemailsform.submit();</script>");}
//end submit
} ///end contact importer

///start manual invite
if((!$importsucess) && ($showmanualimport) && ($_GET['importype']=="manual") &&(!$csvimportsucess))
{ 
?>
<tr>
<td class="texttop"><?php echo $manualinvitetexttop  ?></td>
</tr>
 <tr>
<td align="center"> 
<form method="post" action="import.php" name="manualsend">
<div id="login" style="margin:0; padding:0; ">
<table border="0" cellspacing="0" cellpadding="0" class="tableimport2">
<tr align="left">
<td colspan="2" class="warninginside">
<div class="warning"><?php echo $warningtext2 ?></div>
</td>
</tr>
<?php
if($show_maxemailnr)
{
////get total sent from branches - today
$totalsenttoday=0;
$totalsentthishour=0;
$today_today=date("Y-m-d");
$today_thishour=date("Y-m-d H");
$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_today.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsenttoday=$totalsenttoday+$emailssenttoday['branch_sent'];
	}
	$res5=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_dateandtime LIKE "%'.$today_thishour.'%" ');
	while($emailssenttoday=mysql_fetch_array($res5))
	{
	$totalsentthishour=$totalsentthishour+$emailssenttoday['branch_sent'];
	}
	$emailstosent_thishour=$totalemailsperhour-$totalsentthishour; //emails that can be sent this hour
	$emailstosent_today=$totalemailsperday-$totalsenttoday; //emails that can be sent today

	if($emailstosent_today<=0) //if today all emails have beed sent
	{$maxemailnr=0;}
	else
	{
	if($emailstosent_thishour<=0) ///this hour emails have been sent
		{$maxemailnr=0;}
		else
		{
		if($emailstosent_today >= $emailstosent_thishour ){$maxemailnr=$emailstosent_thishour;}
		else{$maxemailnr=$emailstosent_today;}
		
		}	
	}

	$maxemailnr_text = @str_replace("%%%maxemailnr%%%", $maxemailnr, $maxemailnr_text);
	echo ("<div align=\"center\"><div class=\"importsucess_manual\">".$maxemailnr_text."</div>"); 
	}
?>
<tr>
<td height="30" width="168" ><div class="signup-labels"><?php echo $manualformcontrol1 ?></div></td> 
<td align="left" class="signup-labels"><input class="inputbox" size="24"   name="clientname" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter3(this,event)"></td> 
</tr>
<tr>
<td height="30"><div class="signup-labels"><?php echo $manualformcontrol2 ?></div></td> 
<td align="left" class="signup-labels"><input class="inputbox" size="24"   name="fromemail" onFocus="style.borderColor='#FFEB70';"  onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter3(this,event)"></td>
</tr>
<tr>
<td height="30" ><div class="signup-labels"><?php echo $manualformcontrol3 ?></div></td> 
<td align="left" class="signup-labels"><input class="inputbox" size="24"   name="toname" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter3(this,event)"> 
</td>
</tr>
<tr>
<td height="30"><div class="signup-labels"><?php echo $manualformcontrol4 ?></div></td> 
<td align="left" class="signup-labels">
<input class="inputbox" size="24"   name="toemail" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'" onKeyPress="return submitenter3(this,event)"> 
<input class="submit"  title="<?php echo $manualformcontrol5 ?>"  type="button" onClick="addField('manual_emails','friend_',0);" value="<?php echo $manualformcontrol5 ?>" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'">
</td>
</tr>
<tr><td height="25" colspan="2" class="signup-labels"><div id="error" class="message_error"></div></td></tr>
<tr>
<td height="10"></td>
<td align="left" class="signup-labels">
<input name="act" type="hidden" id="act" value="manualinvite">
<input name="nrofemails" type="hidden" id="nrofemails" value="0">
<input name="totalnumberemails" type="hidden" id="totalnumberemails" value="0">
</td>
</tr>
</table>
</div>
<div id="manual_emails" class="manualaddbox">
<strong><?php echo $manualformcontrol7 ?></strong><input type="hidden" name="friend_0" id="friend_0">
</div>
<?php if($enableaffiliatevar) { ?> 
<div class="warning_affiliatelink" style="margin-top:25px">
<?php echo $enableaffiliatevar_text ?> 
<input type="text" size="21" style="margin-top:3px; margin-bottom:3px;" id="affiliateid"  name="affiliateid"  class="inputbox" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'"> 
</div>

<?php } ?>
<?php if($allowcustommessage) { ?> 
<div class="textbeforecustommessage" align="left"><?php echo $sendersmessage ?></div>
<div class="displaycustommessage" align="left">
<textarea name="sendercustommessage" id="sendercustommessage" cols="95" rows="2" class="inputbox" onKeyUp="stripHTML(this.form.sendercustommessage);limitText(this.form.sendercustommessage,this.form.countdown,<?php echo $sendersmessage_max ?>);" onKeyDown="stripHTML(this.form.sendercustommessage);limitText(this.form.sendercustommessage,this.form.countdown,<?php echo $sendersmessage_max ?>);" onFocus="style.borderColor='#FFEB70';" onBlur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999';stripHTML(this.form.sendercustommessage);">
<?php echo trim($sendersmessage_default) ?>
</textarea>
<p class="div_counter"><?php echo $characters_limitation ?>    
<input readonly type="text" name="countdown" size="3" value="<?php echo $sendersmessage_max ?>" class="inputbox_counter" ></p>

</div>
<?php }  if($showemailbody) { ?> 
<?php } 
if($enableoptin) { ?> 
<?php } ?>
</form>
</td>
</tr>
<tr>
<td colspan="3" class="textbeforeemailtext2">
<?php if( ($enableoptin=="1")||($showemailbody=="1") || ($allowcustommessage=="1") ) { ?>
<div id="error2" class="message_error2"></div>
<input class="submit_invite" id="manualsubmit"  name="manualsubmit" style="MIN-WIDTH: 120px;" type="button" onClick="vermanualsend()" value="<?php echo $manualformcontrol6 ?>" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'">
<?php } else { ?>
<div style="margin-left:95px">
<div id="error2" class="message_error2"></div>
<input class="submit_invite" id="manualsubmit"  name="manualsubmit" style="MIN-WIDTH: 120px;" type="button" onClick="vermanualsend()" value="<?php echo $manualformcontrol6 ?>" onFocus="style.borderColor='#FFEB70';"  onblur="style.borderColor='#999999';" onMouseOver="style.borderColor='#FFEB70'" onMouseOut="style.borderColor='#999999'">
</div>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if($enablecheckstatusmodulelink || $enablerankingsmodulelink || $showcopy=true) { ?>
<tr><td align="center">
<!-- Do not remove copyright information! -->
</td></tr>
<?php } ?>
</table>

<br>
<?php
if((!$importsucess) && (!$csvimportsucess) && ($_GET['importype']!="manual") && ($_GET['importype']!="yminvite") && ($_GET['importype']!="csvimport") && ($_GET['importype']!="share") && (isset($_POST['username'])) )
{ 
echo("<script>
document.massimport.username.value='".trim($_POST['username'])."';
document.massimport.clientname.value='".trim($_POST['clientname'])."';
</script>");
} 
if( (!$importsucess) && (!$csvimportsucess) && ($_GET['importype']!="yminvite") && ($_GET['importype']!="share") )  
{echo("<script>if(parentExists()==false){document.forms[0].elements[0].focus();}</script>");} 

if($_GET['importype']=="yminvite")  
{echo("<script>document.getElementById('yahooidtxt').focus();</script>");} 
if(trim($message)!="" && !($importsucess)) 
{
echo("<script>document.getElementById('message').style.visibility='visible';</script>");
}
if(trim($message3)!="" && !($csvimportsucess)) 
{
echo("<script>document.getElementById('message3').style.visibility='visible';</script>");
}



//yahoo api code
if((!$importsucess)&&(!$csvimportsucess) &&($yahoohasSession != FALSE) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{
  // if a session is initialized, fetch the user's profile information
  if($yahoo_session) 
  {

    // Get the currently sessioned user.
    $user = $yahoo_session->getSessionedUser();
	// Load the profile for the current user.
    $profile = $user->getProfile();
	// email
	$nremails=sizeof($profile->emails);
	for($n=0;$n<=$nremails;$n++)
	{
	
		if(isset($profile->emails[$n]->primary)) 
		{
		$username = $profile->emails[$n]->handle;
		}
	}
	
	if(trim($username==""))
	{
		$username=trim($profile->emails[0]->handle);
	}
	
	if(trim($username==""))
	{
		$username=trim($profile->emails[1]->handle);
	}
	
	//name
	$clientname=trim(trim($profile->givenName)." ".trim($profile->familyName));
    if(trim($clientname)=="")
	{
		$clientname=$profile->nickname;
	}
	 if(trim($clientname)=="")
	{
		$nn=explode("@",$profile->emails[0]->handle);
		$clientname=$nn[0];
	}

	///hidden profile
	if($username=="")
	{
	$username=strtolower($profile->nickname)."@yahoo.com";
		if(trim($clientname)=="")
		{$clientname=trim($profile->nickname);}
	  
	}

///logout
YahooSession::clearSession();

$filename="temp/yahoocontacts.txt";
$handle = fopen($filename, 'w');
	
$w=0;
///get contacts here
$contact=$user->getContacts(0,5000);

$n1=$contact->contacts->total;
$contacts=$contact->contacts->contact;
foreach($contacts as $cont)   
{  

$num=count($cont->fields);
for($i=0;$i<$num;$i++)
 {
$name="";


		for($i1=0;$i1<$num;$i1++)
		 {
					if($cont->fields[$i1]->type=="name")
					{
					
			
							 $fname=trim($cont->fields[$i1]->value->givenName);
							 $lname=trim($cont->fields[$i1]->value->familyName);
							 $mname=trim($cont->fields[$i1]->value->middleName);
							 $name=trim($fname." ".$mname." ".$lname); 
					}
		 }
	 
}
 
//email
$email="";
if(trim($cont->fields[0]->type)=="email")
{
$email=trim($cont->fields[0]->value);
}

if(trim($cont->fields[1]->type)=="email")
{
$email=trim($cont->fields[1]->value);
}

if(trim($cont->fields[0]->type)=="yahooid" && $email=="")
{
$email=$cont->fields[0]->value."@yahoo.com";
}

if(trim($cont->fields[0]->type)=="otherid" && $email=="")
{
$email=trim($cont->fields[0]->value);
}
	
//fix name
if (trim($name)=="")
{
	$nn=explode("@",$email); 
	$name=$nn[0];
}

	if($email!="")
	 {
		 $somecontent=$somecontent.$email."%%%".$name."|||\n";
		 $w++;
	 }
}
   
}

//write in contacts file			
fwrite($handle, $somecontent);
fclose($handle);

echo("<script>
	 document.massimport.clientname.value='".$clientname."';
	 document.massimport.clientname.focus();
	 document.massimport.username.value='".$username."';
	 document.massimport.clientname.readOnly=true;
	 document.massimport.username.readOnly=true;
	 document.massimport.password.value='oauth';
	 document.massimport.password.disabled=true;
	 document.massimport.service.options[".$nr_serv_in_combo."].selected=true;
	 document.getElementById('message').style.background = 'url(none.jpg)';
	 document.getElementById('message').style.paddingLeft='1px';
     document.getElementById('message').style.visibility='visible';
	 document.getElementById('message').innerHTML='<img src=\'images/loader.gif\' border=0 hspace=0 vspace=0>';
	 document.getElementById('errorlabel').style.padding='0';
	 document.massimport.submit();
	 </script>");
}
///end yahoo api code


//gmail api
if((!$importsucess)&&(!$csvimportsucess) &&(isset($_GET['gmail'])) &&($_GET['gmail']=="import") &&(isset($_SESSION['gmail_loggedin'])) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{
	echo("<script>
	 document.massimport.clientname.value='".$_SESSION['gmail_username']."';
	 document.massimport.clientname.focus();
	 document.massimport.username.value='".$_SESSION['gmail_email']."';
	 document.massimport.clientname.readOnly=true;
	 document.massimport.username.readOnly=true;
	 document.massimport.password.value='oauth';
	 document.massimport.password.disabled=true;
	 document.massimport.service.options[".$nr_serv_in_combo."].selected=true;
	 document.getElementById('message').style.background = 'url(none.jpg)';
	 document.getElementById('message').style.paddingLeft='1px';
     document.getElementById('message').style.visibility='visible';
	 document.getElementById('message').innerHTML='<img src=\'images/loader.gif\' border=0 hspace=0 vspace=0>';
	 document.getElementById('errorlabel').style.padding='0';
	 document.massimport.submit();
	 </script>");
	unset($_SESSION['gmail_loggedin']);
}
//end gmail api

///start hotmail api code
if((!$importsucess)&&(!$csvimportsucess) &&(isset($_GET['hotmail']))&&($_GET['hotmail']=="import") &&(isset($_SESSION['hotmail_loggedin'])) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{
echo("<script>
	 document.massimport.clientname.value='".$_SESSION['hotmail_username']."';
	 document.massimport.clientname.focus();
	 document.massimport.username.value='".$_SESSION['hotmail_email']."';
	 document.massimport.clientname.readOnly=true;
	 document.massimport.username.readOnly=true;
	 document.massimport.password.value='oauth';
	 document.massimport.password.disabled=true;
	 document.massimport.service.options[".$nr_serv_in_combo."].selected=true;
	 document.getElementById('message').style.background = 'url(none.jpg)';
	 document.getElementById('message').style.paddingLeft='1px';
     document.getElementById('message').style.visibility='visible';
	 document.getElementById('message').innerHTML='<img src=\'images/loader.gif\' border=0 hspace=0 vspace=0>';
	 document.getElementById('errorlabel').style.padding='0';
	 document.massimport.submit();
	 </script>");
	unset($_SESSION['hotmail_loggedin']);
}
///end hotmail api code


?>
</body>
</html>
