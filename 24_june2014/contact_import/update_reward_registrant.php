<?php error_reporting(0); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
include("config/bdvars.php"); 
include("config/scriptvars.php"); 
include("includes/functions.php");  //script functions
include("includes/bdconnect.php");   //bd connect functions
if (($enable_reward4==1) && ($reward4_invitations_sent!=9999)) 
{
$visitorcode=trim($_COOKIE['staf_visitor_reg']);
$res_vis=mysql_query('SELECT * FROM staf_recievers WHERE visitedcode="'.$visitorcode.'" AND registered=0 ');

//check if visitor exists
	$visitor=mysql_num_rows($res_vis);
	if($visitor!=0)
	{
		$visitdetails=mysql_fetch_array($res_vis);
		$branchid=$visitdetails['branch_id'];
		$senderid=$visitdetails['sender_id'];
		
		//update visitor -> registered
		$res=mysql_query('UPDATE staf_recievers SET registered="1" WHERE recieverid="'.$visitdetails['recieverid'].'" AND registered=0 ');
		
		//update branches -> total registered
		$res=mysql_query('SELECT * FROM staf_senders_branches WHERE branch_id="'.$branchid.'" ');
		$branchdetails=mysql_fetch_array($res);
		$new_branch_visits=$branchdetails['branch_registered']+1;
		$res=mysql_query('UPDATE staf_senders_branches SET branch_registered="'.$new_branch_visits.'" WHERE branch_id="'.$branchid.'" ');
		
		//update total registrants for user
		$res=mysql_query('SELECT * FROM staf_senders WHERE senderid="'.$senderid.'" ');
		$userdetails=mysql_fetch_array($res);
		$new_total_reg= $userdetails['total_registered']+1;
		$res=mysql_query('UPDATE staf_senders SET total_registered="'.$new_total_reg.'" WHERE senderid="'.$senderid.'" ');
		
		//DONE
		
		//send reward
		if(($new_total_reg==$reward4_invitations_sent) || ($new_total_reg==($reward4_invitations_sent+1)))
		{
		//send reward mail
			include("includes/phpmailer/class.phpmailer.php");
			$Mail = new PHPMailer();
			$Mail->IsHTML(true);
			$Mail->AddReplyTo($reply_all_email,$admin_name);
			$Mail->From     = $reward4_email_from_address;
			$Mail->FromName = $reward4_email_from_name;
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
					//END SMTP
					//send to
					$useremail=$userdetails['sender_email'];
					//subject
					$newsubject=$reward4_emailsubject;
					$newsubject = @str_replace("%%%sendername%%%", $userdetails['sender_name'], $newsubject); 
					$newsubject = @str_replace("%%%senderemail%%%", $userdetails['sender_email'], $newsubject); 
					///body
					$emailcontent2=$reward4_emailbody;
					$emailcontent2 = @str_replace("%%%sendername%%%",$userdetails['sender_name'] , $emailcontent2); 
					$emailcontent2 = @str_replace("%%%senderemail%%%", $userdetails['sender_email'], $emailcontent2); 
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
					$Mail->AddAddress($userdetails['sender_email'], $userdetails['sender_name']);
					$Mail->Send();
					$Mail->ClearAddresses();
					$Mail->ClearReplyTos();
					 //close smtp
					 if($mailmethod_smtp=="1")
						{
						$Mail->SmtpClose();
						}
					///update rewards
					mysql_query('UPDATE staf_senders SET reward4_sent="1" WHERE senderid="'.$userdetails['senderid'].'"');
		}
	}

}
?>