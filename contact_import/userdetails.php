<?php include("top.php");
function reward_to_str($val)
{
	$toret="<font color=\"blue\">NO</font>";
	if($val=="0") {$toret="<font color=\"red\">NO</font>";}
	if($val=="1") {$toret="<font color=\"blue\">YES</font>";}
	return $toret;
}
if(isset($_POST['checkemail']))
{
$result=mysql_query('SELECT * FROM staf_senders WHERE sender_email="'.trim($_POST['sender_email']).'"');
$nr=mysql_num_rows($result);
	if($nr>0)
	{
	$sender=mysql_fetch_array($result);
	$result2=mysql_query('SELECT * FROM staf_recievers WHERE sender_id="'.$sender['senderid'].'" AND unsubscribed=1');
    $unsub=mysql_num_rows($result2);
	$reward1txt="";
	$reward2txt="";
	$reward3txt="";
	$subscribedtxt="";
	$showrewhead=false;
	$showrewheadtxt="";
	$timer_e="";
	if($reward1_invitations_sent!="9999")
	{
	$reward1txt="<br><br>For The Total Number Of Recipients : <b>".reward_to_str($sender['reward1_sent'])."</b>";
	$showrewhead=true;
		if($sender['reward1_sent']=="0"){$reward1txt.="<br><img src=\"images/warning_err2.png\" align=\"absmiddle\">&nbsp;&raquo; Remaining invitations to send : ".($reward1_invitations_sent-$sender['total_sent']);}
	}
	
	if($reward2_invitations_sent!="9999")
	{
	$reward2txt="<br><br>For The Total Number Of Visitors : <b>".reward_to_str($sender['reward2_sent'])."</b> ";
	$showrewhead=true;
		if($sender['reward2_sent']=="0"){$reward2txt.="<br><img src=\"images/warning_err2.png\" align=\"absmiddle\">&nbsp;&raquo; Remaining visitors to come : ".($reward2_invitations_sent-$sender['total_visited']);}
	}
	
	if($reward3_invitations_sent!="9999")
	{
	///
	$reward3txt="<br><br>For The Total Number Of Timed Visitors : <b>".reward_to_str($sender['reward3_sent'])."</b> ";
	$todaycomplete=date("Y-m-d H:i:s");
	if($sender['reward3_sent']=="0") //reward not sent
	{
	///
	if($resetcounter_reward3) ///if reset date and time ->last branch date and time
		{
			$res_branch=mysql_query('SELECT MAX(branch_dateandtime) FROM staf_senders_branches WHERE senderid="'.$sender['senderid'].'"');
			$start_time=mysql_fetch_array($res_branch);
		    $vis_start_time=$start_time[0];
			
			$res_branch2=mysql_query('SELECT * FROM staf_recievers WHERE visit_datetime>="'.$vis_start_time.'" AND sender_id="'.$sender['senderid'].'" ');
			$nr_of_visitors_till_start_time=mysql_num_rows($res_branch2);
			
			
		}
		if(!$resetcounter_reward3) ///if NOT reset date and time ->first branch date and time
		{
			$res_branch=mysql_query('SELECT MIN(branch_dateandtime) FROM staf_senders_branches WHERE senderid="'.$sender['senderid'].'"');
			$start_time=mysql_fetch_array($res_branch);
		    $vis_start_time=$start_time[0];
			
			$res_branch2=mysql_query('SELECT * FROM staf_recievers WHERE visit_datetime>="'.$vis_start_time.'" AND sender_id="'.$sender['senderid'].'" ');
			$nr_of_visitors_till_start_time=mysql_num_rows($res_branch2);
		}
		$totalvisitorstillnow=$sender['total_visited'];

			if( (date("Y-m-d H:i:s", strtotime ("now - ".$reward3_valability." hours"))<=$vis_start_time)) //still available
			{ 
				if($totalvisitorstillnow<$reward3_invitations_sent)
				{
				$reward3txt.="<br><img src=\"images/warning_err2.png\" align=\"absmiddle\">&nbsp;&raquo;  Remaining visitors to come : ".($reward3_invitations_sent-$nr_of_visitors_till_start_time);
				$reward3txt.="<br><b>Time remaining : </b><b><span id='timer_invite' style=\"color:red;\"></span></b>";
				////
				$dbdatecomplete=date("Y-m-d H:i:s", strtotime ($vis_start_time." + ".$reward3_valability." hours"));
				$dif=get_time_difference($todaycomplete,$dbdatecomplete);
				$totalsecdiff=(($dif['days']*1440)+($dif['hours']*60)+$dif['minutes'])*60+$dif['seconds'];
				$timer_e=$totalsecdiff;
				}
				else
				{$reward3txt.="";}
			}
				
			 else
				{
				$reward3txt.="<br><span style=\"color:red;\"><img src=\"images/warning_err2.png\" align=\"absmiddle\">&nbsp;&raquo;  The reward expired.</span>";
				if($resetcounter_reward3=='1'){$reward3txt.=" <span style=\"color:red;\">Invite more friends to win another chance.</span>";}
				}
			
		}
	$showrewhead=true;
		
	}

	if($showrewhead)
	{
	$showrewheadtxt="<br><br><b>REWARDS : </b>";
	}
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $websiteurl_gen; ?> :: Show user details</title>
<link rel="shortcut icon" href="images/favicon.ico" title="Super Tell A Friend">
<script language="JavaScript">
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
function versendform()
{
document.forms[0].submit();
}
</script>
<script type="text/javascript" src="jscript/count.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $htmlcharset ?>"/>
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css"></link>
<link href="stylesheets/font_styles.css" rel="stylesheet" type="text/css"></link>
</head>
<?php if($timer_e!="") { ?>
<body onload="display_c(<?php echo $timer_e; ?>);">
<?php } else { echo("<body>"); }?>

<div align="center">
<div class="topnavigation" style="padding-top:20px;font-size:13px;font-family:Tahoma;color:#CC0000; width:500px;" align="left"> 
</div>
<div style="padding-top:30px;font-size:13px;font-family:Tahoma;color:#CC0000; width:470px;" align="center">
<div class="warning" style="height:80px;">
		<form method="post" action="userdetails.php">
		<p style="margin:0; margin-bottom:8px; font-weight:bold">
		<img src="images/mydetails.png" border="0" align="absmiddle"> &nbsp;Enter your email address and click on &quot;Show details&quot; button </p>
		<input type="text" class="inputbox" size="50" value="" name="sender_email"> 
		<input type="button" class="submit" value="Show details" onClick="versendform()" style="width:110px; ">
		<input type="hidden" name="checkemail" value="1">
		</form>
	</div>
    
  </div>
  
</div>
		<?php
		if(isset($_POST['checkemail']))
		{
			if($nr>0)
			{
				echo("
				<div align=\"center\">
				<div style=\"padding-top:20px;font-size:14px;font-family:Tahoma;color:#0000FF; width:470px;\" align=\"left\">
				<div class=\"warning\" style=\"text-align:left;color:#000000;padding-left:10px;font-size:14px\">
				<p style=\"margin:0;padding-left:0px;padding-top:0px;font-size:14px;font-family:Tahoma;color:#0000FF;width:470px;margin-bottom:10px\">
				<b>Details for user : ".$sender['sender_email']."</b>
				</p>
				Total invitations sent : ".$sender['total_sent']."<br>
				Total visitors : ".$sender['total_visited'].$showrewheadtxt.$reward1txt.$reward2txt.$reward3txt."
				</div>
				<p style=\"padding-left:3px;\"><a href=\"import.php\" class=\"slink2\"><b>Click here to invite more friends!</p></a>
				</div>
				</div>");
			}
		else
		{
		echo("<div align=\"center\">
		<div class=\"warning\" style=\"margin-top:20px;padding-top:10px;padding-bottom:20px;font-size:13px;font-family:Tahoma;color:#CC0000;width:470px;\" align=\"center\">
		<img src=\"images/warning.png\" align=\"absmiddle\" border=\"0\">
		<b>Your email address does not exist in our database.</b><br><a href=\"import.php\" class=\"slink2\"><b>Click here to invite your friends!</b></a>
		</div></div>");
		}
}
?>
<?php if($enablecheckstatusmodulelink || $enablerankingsmodulelink) { ?>
<div align="center">
<div  style=" width:500px;" align="center"> 
<div class="bottomnavigation">
<?php if($enablecheckstatusmodulelink) { ?>
<a href="userdetails.php"  class="bottomlinks"><?php echo $checkstatusmodulelink_text ?></a> 
<?php } ?>
<?php if($enablecheckstatusmodulelink && $enablerankingsmodulelink) { ?>
&nbsp;|&nbsp;
<?php } ?>
<?php if($enablerankingsmodulelink) { ?>
<a href="rankings.php" class="bottomlinks"><?php echo $rankingsmodule_text ?></a>
<?php } ?>
</div>
</div>
</div>
<?php } ?>
</body>
</html>
