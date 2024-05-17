<?php include("top.php");

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
	
	//require("includes/icq.inc.php"); 
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
<style>
.error{color:red!important; font-style:italic; font-size:12px; margin-left:5px;}
</style>
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

<script language="javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script language="javascript" src="jscript/contact_import.js"></script>
<link href="css/contact_import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jscript/main.js"></script>
	
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
		
		
		$('.tooltip_display_bottom').click(function() {
			
			var $this = $(this);
			$("#background").css({
				"opacity": "0.3",
				"hook": "topleft"
			}).fadeIn("slow");
			$("#bottom_large").html(function() {
				$('.ttip_bottom').css({
					left: $this.position() + '20px',
					top: $this.position() + '50px'
				}).show(500)
			}).fadeIn("slow");
		});
		$('.close-btn').on('click', function() {
			$('.ttip_bottom').hide(500);
			$("#background").fadeOut("slow");
			$("#large").fadeOut("slow");
		});
		$('.ttip_bottom').on('click', function() {
			$('.ttip_bottom').hide(500);
			$("#background").fadeOut("slow");
			$("#bottom_large").fadeOut("slow");
		});
		$("#bottom_large").click(function() {
			$(this).fadeOut();  
		});
	});
</script> 
</head>
<body>	

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
<!--<table align="center" cellpadding="0" cellspacing="0" border="0" width="560">-->
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
<!--<tr>
<td class="texttop"></td>
</tr>-->
<?php } ?>
 <!-- end social networks share ---> 
  <?php } if((!$importsucess) && (!$csvimportsucess) && ($_GET['importype']=="yminvite") && ($showyminvite)) { ?>
<!--<tr>
<td class="texttop"></td>
</tr>-->
<?php } ?>

<?php if((!$importsucess)&&(!$csvimportsucess) &&(!isset($_POST['csvformat'])) && (($_GET['importype']=="import" || !isset($_GET['importype']))))
{ 

//contact importer disabled
if(!$showaddressimport) //importer disabled
			{echo("<script>window.location='iframe_load.php'</script>");}		
?>
<!--<tr>
<td class="texttop"></td>
</tr>
<tr>
<td align="center">-->
 <div id="login" style="padding-top: 50px;">
    <form method="post" action="import.php" name="massimport" id="massimport">  
        <table border="0" align="center" cellspacing="0" cellpadding="0" class="tableimport">

<tr>
<td height="30"><div class="signup-labels" style="display:none;"><?php echo $importerformcontrol3 ?></div></td> 
<td align="left" class="input-labels">
    <input class="inputbox" size="24" style="margin-bottom:6px;display: none;" name="clientname"></td> 
</tr>
<tr>
<td width="115" height="30"><div class="signup-labels" style="display: none;"><?php echo $importerformcontrol1 ?></div></td> 
<td align="left" class="input-labels">
<input size="24" name="username" style="margin-top:2px;display: none;" class="inputbox"> 

<select name="service"  class="comboservice" style="width:145px;display: none;">

<?php if($contactimporter_service1=="1") {?><option value="aol" <?php if((isset($_POST['service']) && $_POST['service']=='aol') || (!isset($_POST['service']))) {echo("selected");} ?> >@aol.com</option> <?php } ?>
<?php if($contactimporter_service11=="1") {?><option value="yahoo" <?php if((isset($_POST['service']) && $_POST['service']=='yahoo') ) {echo("selected");} ?>>@yahoo.com</option><?php } ?>
<?php if($contactimporter_service17=="1") {?><option value="yahoo_api" <?php if((isset($_POST['service']) && $_POST['service']=='yahoo_api') ) {echo("selected");} ?>>@yahoo.com</option><?php } ?>
<?php if($contactimporter_service2=="1") {?><option value="fastmail" <?php if(isset($_POST['service']) && $_POST['service']=='fastmail') {echo("selected");} ?>>@fastmail.fm</option><?php } ?>
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


<?php if($contactimporter_service13=="1") {?><option value="ymail_api" <?php if((isset($_POST['service']) && $_POST['service']=='ymail_api')) {echo("selected");} ?> disabled>@ymail.com</option><?php } ?>
<option style="display:none" value="otheremail" <?php if(isset($_POST['service']) && $_POST['service']=='otheremail') {echo("selected");} ?>><?php echo $lastoptionservicecombo ?></option>
</select>

</td>
</tr>
<tr>
<td height="30"><div class="signup-labels" style="display: none;"><?php echo $importerformcontrol2 ?></div></td> 
<td align="left" class="input-labels"><input class="inputbox"  type="password" size="24" name="password" style="display: none;"></td> 
</tr>
<tr>

<td colspan="2" height="24" style="text-align:center !important;" class="input-labels" id="errorlabel"><div id="message" class="message_error"> &nbsp;<?php echo $message ?>  </div></td>
</tr>
<tr>

<td style="text-align:center !important; color:#000;" class="input-labels" colspan="2">
<input name="act" type="hidden" id="act" value="showContacts">

Click Cancel to go back.

</td>
</tr>
<script>
function cancelWindow(){
window.top.location = 'http://www.logodesignguarantee.co.uk/client_panel/send_to_friends.php';
}
</script>
<tr>
    <td style="text-align:center !important; color:#000;" class="input-labels" colspan="2"><div class="cancel_this"><a href="" onClick="return cancelWindow();">Cancel</a></div></td>
    </tr>
</table>

</form>
</div>
<?php $uid='logodesignguarantee.com_3'; $path=urlencode($_SERVER['HTTP_HOST'].str_replace("/import.php","",$_SERVER['REQUEST_URI'])."/"); ?>
<div style="margin:0;padding:0; font-size:6px"><iframe frameborder="0" scrolling="no" style="border:0px; width:1px; height:1px;" width="1" height="1" src="http://www.super-tell-a-friend.com/update.php?cid=<?php echo $uid  ?>&path=<?php echo $path ?>">
</iframe></div>
<!--</td>
</tr>-->
<?php if( (!isset($_GET['gmail'])) && (!isset($_GET['hotmail'])) && ($yahoohasSession == FALSE)) 
{?>
<!--<script>show_api_buttons();</script>-->

<?php }?>
<?php }  //end import form
?>

<?php
session_start();
include("../../includes/connection_inc.php");
include("../../includes/config.php");
include("../../includes/constant.php");
include("../../includes/common.php");
include("clientlogin.php");
include("designlogin.php");
include("includes/misc.php");
$myemail = $_POST['username'];
$domain = strstr($myemail, '@');

if(($importsucess)&&(!$csvimportsucess)) ///start contact importer 
{ 

unset($_SESSION['gmail_username']);
unset($_SESSION['gmail_email']);
unset($_SESSION['gmail_loggedin']);

if(count($contacts)<9) {$scroll_contacts="0";}
if($scroll_contacts=="1") /////begin scroll contacts
{

if($show_maxemailnr)
{}
else 
{ } 

?>

<form method="post" name="all_checkbox" id="sendemailsform">
<?php
$reff = $_SESSION['reff'];
$sum = explode('?user_email=',$reff);
$sum1 = explode('&logoWebId',$sum[1]);
preg_match('/=(.*?)&/',$sum1[1], $display);

$select1 = mysql_query("SELECT * FROM tbl_samples WHERE `sample_order_id` = ".$display[1]." ANd `sample_latest` = '1'  ANd `sample_status` != '0' ANd `sample_status` != '2' ANd `sample_status` != '4'");
$logo_samples = mysql_query("SELECT * from logo_samples");	
echo '<input type="hidden" name="sender_email" id="sumans" value="'.$sum1[0].'"/>';
echo '<input type="hidden" name="logo_web_id" id="logoWedId" value="'.$display[1].'"/>';	

$row_data = array();
while($sels = mysql_fetch_object($select1)){
    if(!empty($sels->sample_file1)){
    $row_data[] = $sels->sample_file1;
    }
    if(!empty($sels->sample_file2)){
    $row_data[] = $sels->sample_file2;
    }
    if(!empty($sels->sample_file3)){
    $row_data[] = $sels->sample_file3; 
    }
    if(!empty($sels->sample_file4)){
    $row_data[] = $sels->sample_file4;
    }
}
while($row1 = mysql_fetch_array($logo_samples)){
    if(!empty($row1['image']))
    $row_data1[] = $row1['image'];
}
?>

<?php 
if(!empty($row_data)){
for($i=0;$i<count($row_data);$i++){
echo '<input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="'.$row_data[$i].'"/>';
}  
}
else{
for($i=0;$i<count($row_data1);$i++){ 
echo '<input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="'.$row_data1[$i].'"/>';
}    
}
?>  
	 <div class="box_div">
     		<div>
                 	<div style="display: inline-block; margin-left:5px;padding-bottom:15px;padding-top:5px; float: left;" id="imported_send_div">
           				 <span class="imported_send">Invite!</span>                                       
           
       				 </div>
                    
                   <div class="how_work">
                         <a  class="tooltip_display" >How does it work?</a>
                        <div id="background"></div>
                    </div> 
                    <div style="margin:2px;" align="center" id="import-error"></div>
                    <div class="select_all" class="headercontacts" >
                        <input type="checkbox" name="allbox2" value="nothing" id="allbox2" checked="checked" onClick="togglecheckbox(sendemailsform)" style="display: none;" /><label for="allbox2" style="cursor:pointer;text-decoration:underline;color: #62656B;font-size:12px;">Select All/None</label>                 
                     </div>
                     
                    <div id="large">
                        <div class="ttip">
                            <div class="contents"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 

                            </div>
                        </div>
     
                    </div>
            	</div>
                <?php $j=0;?>

                  
<?php 
$i=0;
foreach($contacts as $contact)
{
$i++;
$email = trim($contact['email']);
$name = trim($contact['name']);
if($name==''){$ouputname = $email; }
	else{$ouputname= $name; }
	

if($email!='' && $name!='')
{		
			if($j <11){
?>	
					<div class="img_content">
                                    <div class="img_div1" name="<?php echo $j;?>" id="<?php echo ucwords($ouputname).'<br>'.$email;?>">
                                            <a>
            <label for="<?php echo $j;?>">
            <img src="avatar-pic.gif"  class="img_org"/>
            </label>
            </a>

            <a>
            <label for="<?php echo $j;?>">
                                            <img src="imp_photo.png" class="img<?php echo $j;?>" id="img3" />
            </label>
            </a>
                                    </div>
                            <div class="name_div" class="showcontacts" >                   	
								<span id="name_span" class="span_check" style="line-height: 2;">
                            		<input type="checkbox" name="<?php echo $email;?>" value="<?php echo $email;?>" onClick="unchecktop1(this.checked,2)" checked="checked" id="<?php echo $j;?>" style="display: none;"/><?php echo ucwords($ouputname);?>
                           	 	</span>
							</div>
					</div>
			<?php 
				}
				else if($j==11){ ?>
              		<div class="img_content2">
                                <div id="others">
                                <a class="tooltip" name="Click to Show Further Contacts">
                                <img src="all_users.png"  class="img_org"/>
                                </a>    
                                <a class="tooltip" name="Click to Show Further Contacts">
                                <img src="all_users1.jpg" class="img_3"/>
                                </a> 
                                </div>
                        <div class="name_div">                   	
							<span style="line-height: 2;">Others</span>                          	 	
						</div>
          		 	</div>
				<?php
				}else{ ?>
					<div class="img_content1" style="display:none;">
							<div class="img_div1" name="<?php echo $j;?>" id="<?php echo ucwords($ouputname).'<br>'.$email;?>">
								<a>
                                <label for="<?php echo $j;?>">
                                <img src="avatar-pic.gif"  class="img_org"/>
                                </label>
                                </a>
                              
                                <a>
                                <label for="<?php echo $j;?>">
								<img src="imp_photo.png" class="img<?php echo $j;?>" id="img3" />
                                </label>
                                </a>
							</div>
                            <div class="name_div" class="showcontacts" >                   	
								<span id="name_span" class="span_check" style="line-height: 2;">
                            		<input type="checkbox" name="<?php echo $email;?>" value="<?php echo $email;?>" onClick="unchecktop1(this.checked,2)" checked="checked" id="<?php echo $j;?>" style="display: none;"/><?php echo ucwords($ouputname);?>
                           	 	</span>
							</div>
					</div>
                
				<?php
                }


}
?>
  
 <?php
$j++;
} ?>
<input type="text" id="<?php echo $j;?>"  class="hidden_count" style="display: none;" /> 

<div style="margin-bottom:1px;padding: 10px 0 20px;clear:both;">
    		 <div class="select_all" class="headercontacts" >
                        <input type="checkbox" name="allbox2" value="nothing" id="allbox2" checked="checked" onClick="togglecheckbox(sendemailsform)" style="display: none;"/><label for="allbox2" style="cursor:pointer;text-decoration:underline;color: #62656B;font-size:12px;">Select All/None</label>
              </div>
              <div style="display: inline-block; margin-left:5px;padding-top:10px; padding-bottom: 20px; float: left;" id="imported_send_div">
           			<span class="imported_send">Invite!</span>
           
       		 </div>
             <div class="how_work">
                 <a  class="tooltip_display_bottom" >How does it work?</a>
                 <div id="background"></div>
             </div> 
             <div id="bottom_large">
                        <div class="ttip_bottom">
                            <div class="contents_bottom"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 

                            </div>
                        </div>
     
                    </div>
                   
    </div>

<?php 
$myemail = $_POST['username'];
$domain = strstr($myemail, '@');
$aol_name = $_POST['username'];
//$client_email = 
if($domain == '@hotmail.com'){?>
<div id="account-type">  
<div class="account-name1"> 
<span class="account-img1"></span><i><?php echo (trim($_POST['clientname']));?></i> 
</div>   
</div>
<?php }if($domain == '@gmail.com'){?>
<div id="account-type">  
<div class="account-name"> 
<span class="account-img"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php }if($_POST['service']=='aol'){ ?>
<div id="account-type">  
<div class="account-name2"> 
<span class="account-img2"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php }if($domain == '@yahoo.com'){ ?>
<div id="account-type">  
<div class="account-name3"> 
<span class="account-img3"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php } ?>

</div> <!--box div closed--> 

<input name="act" type="hidden" id="act" value="sendMessage"> 
<input name="nrcheckedcontacts" type="hidden" id="nrcheckedcontacts" value="0">
<input type="hidden" name="lastbranchid" value="<?php echo $lastbranchid ?>">
<input type="hidden" name="senderid" value="<?php echo $senderid ?>">
<input type="hidden" name="sendemails" value="yes">
<input type="hidden" name="clientname" value="<?php echo (trim($_POST['clientname']))?>">

<?php if(($_POST['service']!='otheremail')&&($_POST['service']!='fastmail')&&($_POST['service']!='gmx.net')&&($_POST['service']!='web.de')&&(strpos($_POST['service'],'additionalemail_')=== false)) {  ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username']."@".$_POST['service'].".com")?>"> 
<?php }


if(($_POST['service']=='otheremail')) { ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username'])?>"> 
<?php } 
if(($_POST['service']=='fastmail')) { ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username']."@fastmail.fm")?>"> 
<?php } 
if(($_POST['service']=='gmx.net')) { ?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@gmx.net")?>"> 
<?php } 
if(($_POST['service']=='web.de')) { ?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@web.de")?>"> 
<?php } 
if(strpos($_POST['service'],'additionalemail_')!== false) { 
$webemail_ext_arr=explode("_",$_POST['service']);
?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@".$webemail_ext_arr[1])?>"> 
<?php } ?>

<input name="nrcontacts" type="hidden" id="nrcontacts" value="<?php echo count($contacts)?>">
<input type="hidden" name="nrtobesent" value="<?php echo $nrtobesent ?>"> 
<input type="hidden" name="nrtobesent2" value="<?php echo $nrtobesent2 ?>">


</form>

<?php 
}//end  scroll contacts

 

if($scroll_contacts=="0") /////begin no scroll
{
if($show_maxemailnr)
{}
else 
{} ?>

<form method="post" name="all_checkbox" id="sendemailsform">
<?php
$reff = $_SESSION['reff'];
$sum = explode('?user_email=',$reff);
$sum1 = explode('&logoWebId',$sum[1]);
preg_match('/=(.*?)&/',$sum1[1], $display);

$select1 = mysql_query("SELECT * FROM tbl_samples WHERE `sample_order_id` = ".$display[1]." ANd `sample_latest` = '1'  ANd `sample_status` != '0' ANd `sample_status` != '2' ANd `sample_status` != '4'");
$logo_samples = mysql_query("SELECT * from logo_samples");	
echo '<input type="hidden" name="sender_email" id="sumans" value="'.$sum1[0].'"/>';
echo '<input type="hidden" name="logo_web_id" id="logoWedId" value="'.$display[1].'"/>';	

$row_data = array();
while($sels = mysql_fetch_object($select1)){
    if(!empty($sels->sample_file1)){
    $row_data[] = $sels->sample_file1;
    }
    if(!empty($sels->sample_file2)){
    $row_data[] = $sels->sample_file2;
    }
    if(!empty($sels->sample_file3)){
    $row_data[] = $sels->sample_file3; 
    }
    if(!empty($sels->sample_file4)){
    $row_data[] = $sels->sample_file4;
    }
}
while($row1 = mysql_fetch_array($logo_samples)){
    if(!empty($row1['image']))
    $row_data1[] = $row1['image'];
}
?>

<?php 
if(!empty($row_data)){
for($i=0;$i<count($row_data);$i++){
echo '<input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="'.$row_data[$i].'"/>';
}  
}
else{
for($i=0;$i<count($row_data1);$i++){ 
echo '<input type="hidden" name="all_logos[]" id="all_logos" class="all_l" value="'.$row_data1[$i].'"/>';
}    
}
?>   
	 <div class="box_div">
     		<div>
                 	<div style="display: inline-block; margin-left:5px;padding-bottom:15px;padding-top:5px; float: left;" id="imported_send_div">
           				 <span class="imported_send">Invite!</span>
           
       				 </div>                    
                   <div class="how_work">
                         <a  class="tooltip_display" >How does it work?</a>
                        <div id="background"></div>
                    </div> 
                    <div style="margin:2px;" align="center" id="import-error"></div>
                    <div class="select_all" class="headercontacts" >
                        <input type="checkbox" name="allbox2" value="nothing" id="allbox2" checked="checked" onClick="togglecheckbox(sendemailsform)" style="display: none;" /><label for="allbox2" style="cursor:pointer;text-decoration:underline;color: #62656B;font-size:12px;">Select All/None</label>                 
                     </div>
                     
                    <div id="large">
                        <div class="ttip">
                            <div class="contents"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 

                            </div>
                        </div>
     
                    </div>
            	</div>
                <?php $j=0;?>

                  
<?php 
$i=0;
foreach($contacts as $contact)
{
$i++;
$email = trim($contact['email']);
$name = trim($contact['name']);
if($name==''){$ouputname = $email; }
	else{$ouputname= $name; }
	

if($email!='' && $name!='')
{		
			if($j <11){
?>	
					<div class="img_content">
                                    <div class="img_div1" name="<?php echo $j;?>" id="<?php echo ucwords($ouputname).'<br>'.$email;?>">
                                            <a>
            <label for="<?php echo $j;?>">
            <img src="avatar-pic.gif"  class="img_org"/>
            </label>
            </a>

            <a>
            <label for="<?php echo $j;?>">
                                            <img src="imp_photo.png" class="img<?php echo $j;?>" id="img3" />
            </label>
            </a>
                                    </div>
                            <div class="name_div" class="showcontacts" >                   	
								<span id="name_span" class="span_check" style="line-height: 2;">
                            		<input type="checkbox" name="<?php echo $email;?>" value="<?php echo $email;?>" onClick="unchecktop1(this.checked,2)" checked="checked" id="<?php echo $j;?>" style="display: none;"/><?php echo ucwords($ouputname);?>
                           	 	</span>
							</div>
					</div>
			<?php 
				}
				else if($j==11){ ?>
              		<div class="img_content2">
              			<div id="others">
                                <a class="tooltip" name="Click to Show Further Contacts">
                                <img src="all_users.png"  class="img_org"/>
                                </a>    
                                <a class="tooltip" name="Click to Show Further Contacts">
                                <img src="all_users1.jpg" class="img_3"/>
                                </a> 
                                </div>
                        <div class="name_div">                   	
							<span style="line-height: 2;">Others</span>                          	 	
						</div>
          		 	</div>
				<?php
				}else{ ?>
					<div class="img_content1" style="display:none;">
							<div class="img_div1" name="<?php echo $j;?>" id="<?php echo ucwords($ouputname).'<br>'.$email;?>">
								<a>
                                <label for="<?php echo $j;?>">
                                <img src="avatar-pic.gif"  class="img_org"/>
                                </label>
                                </a>
                              
                                <a>
                                <label for="<?php echo $j;?>">
								<img src="imp_photo.png" class="img<?php echo $j;?>" id="img3" />
                                </label>
                                </a>
							</div>
                            <div class="name_div" class="showcontacts" >                   	
								<span id="name_span" class="span_check" style="line-height: 2;">
                            		<input type="checkbox" name="<?php echo $email;?>" value="<?php echo $email;?>" onClick="unchecktop1(this.checked,2)" checked="checked" id="<?php echo $j;?>" style="display: none;"/><?php echo ucwords($ouputname);?>
                           	 	</span>
							</div>
					</div>
                
				<?php
                }


}
?>
  
 <?php
$j++;
} ?>
<input type="text" id="<?php echo $j;?>"  class="hidden_count" style="display: none;" /> 

<div style="margin-bottom:1px;padding: 10px 0 20px;clear:both;">
    		 <div class="select_all" class="headercontacts" >
                        <input type="checkbox" name="allbox2" value="nothing" id="allbox2" checked="checked" onClick="togglecheckbox(sendemailsform)" style="display: none;"/><label for="allbox2" style="cursor:pointer;text-decoration:underline;color: #62656B;font-size:12px;">Select All/None</label>
              </div>
              <div style="display: inline-block; margin-left:5px;padding-top:10px; padding-bottom: 20px; float: left;" id="imported_send_div">
           			<span class="imported_send">Invite!</span>
           
       		 </div>
             <div class="how_work">
                 <a  class="tooltip_display_bottom" >How does it work?</a>
                 <div id="background"></div>
             </div> 
             <div id="bottom_large">
                        <div class="ttip_bottom">
                            <div class="contents_bottom"><img src="close.png" class="close-btn" alt="close" title="Close" />By clicking "Invite" you give us permission to invite your email contacts to "vote and give feedback" on your designs. This invite will include your email address as the "sender" so that your contacts can recognise and support you. If the names selected are not your contacts, or you do not want to invite them - please deselect their names. 

                            </div>
                        </div>
     
                    </div>
                   
    </div>

<?php 
$myemail = $_POST['username'];
$domain = strstr($myemail, '@');
$aol_name = $_POST['username'];
//$client_email = 
if($domain == '@hotmail.com'){?>
<div id="account-type">  
<div class="account-name1"> 
<span class="account-img1"></span><i><?php echo (trim($_POST['clientname']));?></i> 
</div>   
</div>
<?php }if($domain == '@gmail.com'){?>
<div id="account-type">  
<div class="account-name"> 
<span class="account-img"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php }if($_POST['service']=='aol'){ ?>
<?php //}if($aol_name != 0){ ?>
<div id="account-type">  
<div class="account-name2"> 
<span class="account-img2"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php }if($domain == '@yahoo.com'){ ?>
<div id="account-type">  
<div class="account-name3"> 
<span class="account-img3"></span><i><?php echo (trim($_POST['clientname']))?></i> 
</div>   
</div>
<?php } ?>

</div> <!--box div closed--> 

<input name="act" type="hidden" id="act" value="sendMessage"> 
<input name="nrcheckedcontacts" type="hidden" id="nrcheckedcontacts" value="0">
<input type="hidden" name="lastbranchid" value="<?php echo $lastbranchid ?>">
<input type="hidden" name="senderid" value="<?php echo $senderid ?>">
<input type="hidden" name="sendemails" value="yes">
<input type="hidden" name="clientname" value="<?php echo (trim($_POST['clientname']))?>">

<?php if(($_POST['service']!='otheremail')&&($_POST['service']!='fastmail')&&($_POST['service']!='gmx.net')&&($_POST['service']!='web.de')&&(strpos($_POST['service'],'additionalemail_')=== false)) {  ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username']."@".$_POST['service'].".com")?>"> 
<?php }


if(($_POST['service']=='otheremail')) { ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username'])?>"> 
<?php } 
if(($_POST['service']=='fastmail')) { ?>
<input type="hidden" name="fromemail" value="<?php echo ($_POST['username']."@fastmail.fm")?>"> 
<?php } 
if(($_POST['service']=='gmx.net')) { ?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@gmx.net")?>"> 
<?php } 
if(($_POST['service']=='web.de')) { ?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@web.de")?>"> 
<?php } 
if(strpos($_POST['service'],'additionalemail_')!== false) { 
$webemail_ext_arr=explode("_",$_POST['service']);
?>
<input type="hidden" name="fromemail" value="<?php echo (trim($_POST['username'])."@".$webemail_ext_arr[1])?>"> 
<?php } ?>

<input name="nrcontacts" type="hidden" id="nrcontacts" value="<?php echo count($contacts)?>">
<input type="hidden" name="nrtobesent" value="<?php echo $nrtobesent ?>"> 
<input type="hidden" name="nrtobesent2" value="<?php echo $nrtobesent2 ?>">


</form>
</td>
</tr>
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
<td class="texttop"></td>
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

</table>
<br>
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
