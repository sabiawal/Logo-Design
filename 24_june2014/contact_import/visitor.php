<?php include("top_visitor.php"); 
if(trim($websiteurl)=="")
{
$myurl=$visitor_websitelink;
preg_match("/^(http:\/\/)?([^\/]+)/i",$myurl, $domain_only);
$host = $domain_only[2]; 
$websiteurl="http://".$host;
}
	
if(!isset($_GET['nl'])) //not set nl -> visitors
{
if(isset($_GET['visitorcode']))
{ 
include("includes/phpmailer/class.phpmailer.php");
$todaycomplete=date("Y-m-d H:i:s");
$visitorcode=trim($_GET['visitorcode']);

////get affiliate link
$res_vis1=mysql_query('SELECT * FROM staf_recievers WHERE visitedcode="'.$visitorcode.'"');
$visitdetails1=mysql_fetch_array($res_vis1);

$res_vis2=mysql_query('SELECT * FROM staf_senders WHERE senderid="'.$visitdetails1['sender_id'].'"');
$visitdetails2=mysql_fetch_array($res_vis2);

if($enableaffiliatevar=="1")
{
$affgetlink="?".$affiliatevarname."=".$visitdetails2['useraffiliateid'];
}
else
{$affgetlink="";}
//end affiliate link

//process visits and rewards
$res=mysql_query('SELECT * FROM staf_recievers WHERE visitedcode="'.$visitorcode.'" AND visited="0"');
$nr=mysql_num_rows($res);
	if($nr>0)
	{
	$visitsuccess=mysql_fetch_array($res);
	
	//set cookie
	unset($_COOKIE['staf_visitor_reg']); 
	preg_match("/[^.]*\.[^.]*$/", $_SERVER['HTTP_HOST'], $domain);
	$staf_domain=$domain[0];
	setcookie('staf_visitor_reg',trim($visitorcode),time() + (86400 * 10),"/"); // 10 days
	
	///update recipients-visited
	mysql_query('UPDATE staf_recievers SET visited="1",visit_datetime="'.$todaycomplete.'" WHERE visitedcode="'.$visitorcode.'" AND branch_id="'.$visitsuccess['branch_id'].'"');
	
	//update total visits
	$res2=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_id="'.$visitsuccess['branch_id'].'"');
	$visits=mysql_fetch_array($res2);
	
    $newvisits=$visits['branch_visited']+1;
	mysql_query('UPDATE staf_senders_branches SET branch_visited="'.$newvisits.'" WHERE branch_id="'.$visitsuccess['branch_id'].'"');
	////get user details
	$res3=mysql_query('SELECT * FROM staf_senders WHERE senderid="'.$visits['senderid'].'"');
	$visits=mysql_fetch_array($res3);
	$newvisits=$visits['total_visited']+1;

	
	/////update total visits for the user
	mysql_query('UPDATE staf_senders SET total_visited="'.$newvisits.'" WHERE senderid="'.$visits['senderid'].'"');
	
	////check if reward for total visitors
	if(($reward2_invitations_sent!="9999")&&($reward2_invitations_sent==$newvisits) && ($visits['reward2_sent']=="0")) //send 2nd reward
	{
	$Mail = new PHPMailer();
	$Mail->IsHTML(true);
    $Mail->AddReplyTo($reply_all_email,$sender_email_from_name);
	$Mail->From     = $reward2_email_from_address;
	$Mail->FromName = $reward2_email_from_name;
	$Mail->CharSet  = $emailcharset;
	//SMTP
	if($mailmethod_smtp=="1")
	{
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
	$useremail=$visits['sender_email'];
	//subject
	$newsubject=$reward2_emailsubject;
	$newsubject = @str_replace("%%%sendername%%%", $visits['sender_name'], $newsubject); 
	$newsubject = @str_replace("%%%senderemail%%%", $visits['sender_email'], $newsubject); 
	///
	$emailcontent2=$reward2_emailbody;
	$emailcontent2 = @str_replace("%%%sendername%%%",$visits['sender_name'] , $emailcontent2); 
	$emailcontent2 = @str_replace("%%%senderemail%%%", $visits['sender_email'], $emailcontent2); 
	$emailbody='
	<html>
	<head>
	<title>Email</title>
	</head>
	<body>'.$emailcontent2.'<br>
	</body>
	</html>
	';
	 $Mail->Subject  = $newsubject;
	 $Mail->MsgHTML($emailbody);
	 $Mail->AddAddress($visits['sender_email'], $visits['sender_name']);
	 $Mail->Send();
	 $Mail->ClearAddresses();
	 $Mail->ClearReplyTos();
	 //close smtp
	 if($mailmethod_smtp=="1")
		{
		$Mail->SmtpClose();
		}
	 //update senders
	 mysql_query('UPDATE staf_senders SET reward2_sent="1" WHERE senderid="'.$visits['senderid'].'"');
	}
	////reward #3
	if(($reward3_invitations_sent!="9999") && ($visits['reward3_sent']=="0")) //send 3rd reward
	{
		if($resetcounter_reward3) ///if reset date and time ->last branch date and time
		{
			$res_branch=mysql_query('SELECT MAX(branch_dateandtime) FROM staf_senders_branches WHERE senderid="'.$visits['senderid'].'"');
			$start_time=mysql_fetch_array($res_branch);
		    $vis_start_time=$start_time[0];
			
			$res_branch2=mysql_query('SELECT * FROM staf_recievers WHERE visit_datetime>="'.$vis_start_time.'" AND sender_id="'.$visits['senderid'].'" ');
			$nr_of_visitors_till_start_time=mysql_num_rows($res_branch2);
			
		}
		if(!$resetcounter_reward3) ///if NOT reset date and time ->first branch date and time
		{
			$res_branch=mysql_query('SELECT MIN(branch_dateandtime) FROM staf_senders_branches WHERE senderid="'.$visits['senderid'].'"');
			$start_time=mysql_fetch_array($res_branch);
		    $vis_start_time=$start_time[0];
			
			$res_branch2=mysql_query('SELECT * FROM staf_recievers WHERE visit_datetime>="'.$vis_start_time.'" AND sender_id="'.$visits['senderid'].'" ');
			$nr_of_visitors_till_start_time=mysql_num_rows($res_branch2);
		}
		$totalvisitorstillnow=$newvisits;
			if( (date("Y-m-d H:i:s", strtotime ("now - ".$reward3_valability." hours"))<=$vis_start_time)&&($totalvisitorstillnow==$reward3_invitations_sent))
			{ 
			//send reward
			$Mail = new PHPMailer();
			$Mail->IsHTML(true);
			$Mail->AddReplyTo($reply_all_email,$sender_email_from_name);
			//SMTP
	if($mailmethod_smtp=="1")
	{
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
			$Mail->From     = $reward3_email_from_address;
			$Mail->FromName = $reward3_email_from_name;
			$Mail->CharSet  = $emailcharset;
			$useremail=$visits['sender_email'];
			//subject
			$newsubject=$reward3_emailsubject;
			$newsubject = @str_replace("%%%sendername%%%", $visits['sender_name'], $newsubject); 
			$newsubject = @str_replace("%%%senderemail%%%", $visits['sender_email'], $newsubject); 
			///
			$emailcontent2=$reward3_emailbody;
			$emailcontent2 = @str_replace("%%%sendername%%%",$visits['sender_name'] , $emailcontent2); 
			$emailcontent2 = @str_replace("%%%senderemail%%%", $visits['sender_email'], $emailcontent2); 
			$emailbody='
			<html>
			<head>
			<title>Email</title>
			</head>
			<body>'.$emailcontent2.'<br>
			</body>
			</html>
			';
			 $Mail->Subject  = $newsubject;
			 $Mail->MsgHTML($emailbody);
			 $Mail->AddAddress($visits['sender_email'], $visits['sender_name']);
			 $Mail->Send();
			 $Mail->ClearAddresses();
			 $Mail->ClearReplyTos();
			 //close smtp
			 if($mailmethod_smtp=="1")
				{
				$Mail->SmtpClose();
				}
			 //update senders
			 mysql_query('UPDATE staf_senders SET reward3_sent="1" WHERE senderid="'.$visits['senderid'].'"');
	}
  
	
	}
		if(isset($_GET['reff']))
		{
		$_GET['reff']=urldecode($_GET['reff']);
		$_GET['reff']=str_replace("::","&",$_GET['reff']);
		echo("<script>window.location='http://www.".$_GET['reff'].$affgetlink."'</script>");  
		}
		else 
		{
		echo("<script>window.location='".$websiteurl.$affgetlink."'</script>"); 
		}
	}
else 
{
if(isset($_GET['reff']))
		{
		$_GET['reff']=urldecode($_GET['reff']);
		$_GET['reff']=str_replace("::","&",$_GET['reff']);
		echo("<script>window.location='http://www.".$_GET['reff'].$affgetlink."'</script>");  
		}
		else 
		{
		echo("<script>window.location='".$websiteurl.$affgetlink."'</script>"); 
		}
}

}
else
{
if(isset($_GET['reff']))
		{
		$_GET['reff']=urldecode($_GET['reff']);
		$_GET['reff']=str_replace("::","&",$_GET['reff']);
		echo("<script>window.location='http://www.".$_GET['reff'].$affgetlink."'</script>");   
		}
		else 
		{
		echo("<script>window.location='".$websiteurl.$affgetlink."'</script>"); 
		}
}
}//end not set nl

if((isset($_GET['nl']))&&($_GET['nl']=="yes")) ///nl
{
$res=mysql_query('SELECT * FROM staf_newsletters_campaigns WHERE campaignid="'.$_GET['cid'].'" '); 
$exists=mysql_num_rows($res);


	if($exists=="1")
	{
	$usertypre=trim($_GET['ut']);
	$visitorcode=trim($_GET['visitorcode']);
	$campaigndetails=mysql_fetch_array($res);
	
		$res2=mysql_query('SELECT * FROM staf_newsletters_campaigns_recipients WHERE campaignid="'.$_GET['cid'].'" AND visitor="0" AND usercode="'.$visitorcode.'"');
		$alreadyvisited=mysql_num_rows($res2);
		if($alreadyvisited=="1")
		{
			//update visitor in campaign recipients
			mysql_query("UPDATE staf_newsletters_campaigns_recipients SET visitor='1' WHERE campaignid='".$_GET['cid']."' AND usercode='".$visitorcode."'");
			//update campaign
			$new_total_visitors=$campaigndetails['campaign_total_visitors']+1;
			mysql_query("UPDATE staf_newsletters_campaigns SET campaign_total_visitors='".$new_total_visitors."' WHERE campaignid='".$_GET['cid']."' ");
		}
		//redirect
		echo("<script>window.location='".$campaigndetails['campaign_websiteurl']."'</script>"); 
		
	}
	else
	{
	echo("<script>window.location='".$websiteurl."'</script>"); 
	}

						

}

?>
