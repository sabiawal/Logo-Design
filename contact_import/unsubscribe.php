<?php include("top.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Unsubscribe from our email list</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $htmlcharset ?>"/>
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<?php
///POST->unsubscribe
if(isset($_POST['recipientemail'])) //unsubscribe newsletter
{
$res=mysql_query('SELECT * FROM staf_newsletters_campaigns_recipients WHERE usercode="'.$_POST['usercode'].'" AND usertype="'.$_POST['usertype'].'" AND recipientemail="'.$_POST['recipientemail'].'"');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>You have been unsubscribed from our email list.<br>
		</div>");
	
	mysql_query('UPDATE staf_newsletters_campaigns_recipients SET unsubscribed="1" WHERE usercode="'.trim($_POST['usercode']).'"');
		
	$unsubscriber_det=mysql_fetch_array($res);
	$res2=mysql_query('SELECT * FROM staf_newsletters_campaigns WHERE campaignid="'.$unsubscriber_det['campaignid'].'"');
	$campaign_det=mysql_fetch_array($res2);
	$new_unsub_nr=$campaign_det['campaign_total_unsubscribers']+1;
	mysql_query('UPDATE staf_newsletters_campaigns SET campaign_total_unsubscribers="'.$new_unsub_nr.'" WHERE campaignid="'.$unsubscriber_det['campaignid'].'"');
	
	//update other campaigns. if this email in other campaigns, he will not get the emails anymore
	mysql_query('UPDATE staf_newsletters_campaigns_recipients SET unsubscribed="1" WHERE recipientemail="'.$unsubscriber_det['recipientemail'].'"');
		

		if($_POST['usertype']=="0") //unsubscribe sender
		{
		mysql_query('UPDATE staf_senders SET optintomailinglist="0" WHERE sender_email="'.$unsubscriber_det['recipientemail'].'"');
		}
		
		if($_POST['usertype']=="1") //unsubscribe recipinet
		{
		mysql_query('UPDATE staf_recievers SET unsubscribed="1" WHERE reciever_email="'.$unsubscriber_det['recipientemail'].'"');
		}
		 
   
	}
	else
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}
}

//end unsubscribe newsletter
		
if(isset($_POST['reciever_email'])) //unsubscribe user
{
$res=mysql_query('SELECT * FROM staf_recievers WHERE unsubscribecode="'.trim($_POST['unsubscribecode']).'"');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>You have been unsubscribed from our email list.<br>
		</div>");
		 mysql_query('UPDATE staf_recievers SET unsubscribed="1" WHERE unsubscribecode="'.trim($_POST['unsubscribecode']).'"');
	}
	else
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}
}
/////
if(isset($_POST['sender_email'])) //unsubscribe sender
{
$res=mysql_query('SELECT * FROM staf_senders WHERE sender_email="'.trim($_POST['sender_email']).'" AND optintomailinglist="1" ');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>You have been unsubscribed from our email list.<br>
		</div>");
		 mysql_query('UPDATE staf_senders SET optintomailinglist="0" WHERE sender_email="'.trim($_POST['sender_email']).'"');
	}
	else
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}
}
////end post

///get ->first screen
if(isset($_GET['emailcode']) && (!isset($_GET['useremail']))) //check user
{
$emailcode=trim($_GET['emailcode']);
$res=mysql_query('SELECT * FROM staf_recievers WHERE unsubscribecode="'.$emailcode.'"');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
	$unsub=mysql_fetch_array($res);
		if($unsub['unsubscribed']=="1")
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>You are unsubscribed from our email list.</div>");
		}
		else
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>
		Are you sure you want to unsubscribe from our email list?<br><br>
		<form method=\"post\" action=\"unsubscribe.php\">
		<input type=\"hidden\" class=\"inputbox\" size=\"30\" value=\"".$unsub['reciever_email']."\" name=\"reciever_email\">
		<input type=\"hidden\"  value=\"".$emailcode."\" name=\"unsubscribecode\">
		<input type=\"submit\" style=\"color:#CC0000;font-size:13px;font-family:Tahoma;cursor:pointer;background-color:#E4E4E4;border:1px solid #A8A8A8;font-weight: bold;\" value=\"YES, unsubscribe me\">
		</form>
		</div>");
	   
		}
	
	}
	else 
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}

}

if(isset($_GET['emailcode']) && (isset($_GET['useremail']))) //check user
{
$emailaddress=trim($_GET['useremail']);
$emailcode=trim($_GET['emailcode']);
$is_ok=false;
if(trim($_GET['emailcode'])==trim(md5($_GET['useremail'])))
{$is_ok=true;}
$res=mysql_query('SELECT * FROM staf_senders WHERE sender_email="'.$emailaddress.'"');
$nr=mysql_num_rows($res);
	if($nr>0 && $is_ok==true)
	{
	$unsub=mysql_fetch_array($res);
		if($unsub['optintomailinglist']=="0")
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>You are unsubscribed from our email list.</div>");
		}
		else
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>
		Are you sure you want to unsubscribe from our email list?<br><br>
		<form method=\"post\" action=\"unsubscribe.php\">
		<input type=\"hidden\" class=\"inputbox\" size=\"30\" value=\"".$emailaddress."\" name=\"sender_email\">
		<input type=\"hidden\"  value=\"".$emailaddress."\" name=\"sender_email\">
		<input type=\"hidden\"  value=\"".$emailcode."\" name=\"emailcode\">
		<input type=\"submit\" style=\"color:#CC0000;font-size:13px;font-family:Tahoma;cursor:pointer;background-color:#E4E4E4;border:1px solid #A8A8A8;font-weight: bold;\" value=\"YES, unsubscribe me\">
		</form>
		</div>");

		}
	
	}
	else 
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}

}

///newsleter screen 
if(isset($_GET['nl']) && (isset($_GET['usercode']))) //
{

$usercode=trim($_GET['usercode']);
$usertype=trim($_GET['ut']);

$res=mysql_query('SELECT * FROM staf_newsletters_campaigns_recipients WHERE usercode="'.$usercode.'" AND usertype="'.$usertype.'" ');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
		$unsub=mysql_fetch_array($res);
		if($unsub['unsubscribed']=="1")
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>You are unsubscribed from our email list.</div>");
		}
		else
		{
		echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\">
		<b>
		Are you sure you want to unsubscribe from our email list?<br><br>
		<form method=\"post\" action=\"unsubscribe.php\">
		<input type=\"hidden\" class=\"inputbox\" size=\"30\" value=\"".$unsub['recipientemail']."\" name=\"recipientemail\">
		<input type=\"hidden\"  value=\"".$usercode."\" name=\"usercode\">
		<input type=\"hidden\"  value=\"".$usertype."\" name=\"usertype\">
		<input type=\"submit\" style=\"color:#CC0000;font-size:13px;font-family:Tahoma;cursor:pointer;background-color:#E4E4E4;border:1px solid #A8A8A8;font-weight: bold;\" value=\"YES, unsubscribe me\">
		</form>
		</div>");

		}
	
	}
	else 
	{
	echo("<div style=\"padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000\" align=\"center\"><b>Your email address does not exist in our database.</b></div>");
	}

}
?>
</body>
</html>
