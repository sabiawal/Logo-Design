<?php include("top.php");

function obfuscate_email($email)
{

$chars_to_show=6;
$emails_length=strlen($email);
$email_ret=substr($email ,0, $chars_to_show);
$toadd=$emails_length-$chars_to_show;
$asterix="";
	for($i=0;$i<=$toadd;$i++)
	{
		$asterix=$asterix."*";
	}

$email_ret.=$asterix;
return $email_ret;
}

function show_month_name($nr)
{
$month_nr=ltrim($nr, "0");	
	
$month_array=array();
$month_array[1][0]="01";
$month_array[1][1]="January";
$month_array[2][0]="02";
$month_array[2][1]="February";
$month_array[3][0]="03";
$month_array[3][1]="March";
$month_array[4][0]="04";
$month_array[4][1]="April";
$month_array[5][0]="05";
$month_array[5][1]="May";
$month_array[6][0]="06";
$month_array[6][1]="June";
$month_array[7][0]="07";
$month_array[7][1]="July";
$month_array[8][0]="08";
$month_array[8][1]="August";
$month_array[9][0]="09";
$month_array[9][1]="September";
$month_array[10][0]="10";
$month_array[10][1]="October";
$month_array[11][0]="11";
$month_array[11][1]="November";
$month_array[12][0]="12";
$month_array[12][1]="December";


$monthname=$month_array[$month_nr][1];
return $monthname; 
	
}

if(isset($_POST['month']))
{
$month=$_POST['month'];
$date_to_display=show_month_name($_POST['month'])." ".date("Y");
}

else
{
$month=date("m");
$date_to_display=date("F Y");
}


$month_array=array();
$month_array[1][0]="01";
$month_array[1][1]="January";
$month_array[2][0]="02";
$month_array[2][1]="February";
$month_array[3][0]="03";
$month_array[3][1]="March";
$month_array[4][0]="04";
$month_array[4][1]="April";
$month_array[5][0]="05";
$month_array[5][1]="May";
$month_array[6][0]="06";
$month_array[6][1]="June";
$month_array[7][0]="07";
$month_array[7][1]="July";
$month_array[8][0]="08";
$month_array[8][1]="August";
$month_array[9][0]="09";
$month_array[9][1]="September";
$month_array[10][0]="10";
$month_array[10][1]="October";
$month_array[11][0]="11";
$month_array[11][1]="November";
$month_array[12][0]="12";
$month_array[12][1]="December";

$combomonth="<select name=\"month\" class=\"combo\" style=\"width:120px\" onchange=\"document.forms[0].submit();\">";
$curmonth=date("n");
	for($k=1;$k<=$curmonth;$k++)
	{
		$selected="";
		if($month==$month_array[$k][0]){$selected=" selected";}
		
		$combomonth=$combomonth."<option value=\"".$month_array[$k][0]."\" ".$selected." >".$month_array[$k][1]." ".date("Y")."</option>";
		
	}
$combomonth=$combomonth."</select>";


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $websiteurl_gen; ?> :: Monthly rankings</title>
<link rel="shortcut icon" href="images/favicon.ico" title="Super Tell A Friend">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $htmlcharset ?>"/>
<link href="stylesheets/font_styles_<?php echo $scriptskin ?>.css" rel="stylesheet" type="text/css"></link>
<link href="stylesheets/font_styles.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div align="center">

<div style="padding-top:20px;padding-bottom:20px;font-size:13px;font-family:Tahoma;color:#CC0000; width:650px;" align="left">

<div class="topnavigation" style="margin-bottom:20px;font-size:13px;font-family:Tahoma;color:#CC0000; width:100%" align="left"> 
  </div>
<strong>Monthly Top Rankings For <?php echo $date_to_display; ?> </strong><br><br>
<?php
$nrtodisplay=$rankingsmodule_nrusers;
$limit=" LIMIT 0,".$nrtodisplay." ";
$nr=1;
$total_results_this_month=0;

$result_limit=mysql_query('SELECT * FROM staf_senders a, staf_senders_branches b WHERE b.senderid=a.senderid AND month(b.branch_dateandtime) = "'.$month.'" AND year(b.branch_dateandtime) = "'.date("Y").'" GROUP BY a.sender_email ORDER BY a.total_sent DESC '.$limit);

$total_results_this_month=mysql_num_rows($result_limit);

echo("<table width=100% cellspacing=0 cellpadding=0 border=0>");

if($total_results_this_month>0)
{
echo("<tr><td height=\"28\" class=\"headercontacts\"> &nbsp; <b>Email</b></td><td class=\"headercontacts\" width=\"125\"><b>Invitations sent:</b></td>
	 <td class=\"headercontacts\" width=\"90\"><b>Today</b></td><td class=\"headercontacts\" width=\"90\"><b>This Week</b></td>
	 <td class=\"headercontacts\" width=\"90\"><b>This month</b></td><td class=\"headercontacts\" width=\"90\"><b>All Time</b></td></tr>");	
while($top_users=mysql_fetch_array($result_limit))
{
	$today=0;
	$thisweek=0;
	$thismonth=0;
///get sent today
$res2=mysql_query('SELECT * FROM  staf_senders_branches WHERE senderid="'.$top_users['senderid'].'" AND DATE(branch_dateandtime) = "'.date("Y-m-d").'" ');
	while($top_users_today=mysql_fetch_array($res2))
	{
		$today=$today+$top_users_today['branch_sent'];
	}
	
//get sent this month	
$res3=mysql_query('SELECT * FROM staf_senders_branches WHERE senderid="'.$top_users['senderid'].'" AND month(branch_dateandtime) = "'.$month.'" AND year(branch_dateandtime) = "'.date("Y").'" ');
	while($top_users_thismonth=mysql_fetch_array($res3))
	{
		$thismonth=$thismonth+$top_users_thismonth['branch_sent'];
	}	

//get sent this week		
$res4=mysql_query('SELECT * FROM  staf_senders_branches WHERE senderid="'.$top_users['senderid'].'" AND WEEK(branch_dateandtime) = "'.date("W").'" ');
	while($top_users_thisweek=mysql_fetch_array($res4))
	{
		$thisweek=$thisweek+$top_users_thisweek['branch_sent'];
	}	
	$class="";
	if($nr%2=="0") {$class="class=\"showcontacts_bg\"";} else{$class="class=\"showcontacts_bg2\"";} 
	
	echo("<tr ".$class.">
	  <td height=\"28\" class=\"showcontacts\" colspan=\"2\"> &nbsp; ".$nr.". ".obfuscate_email($top_users['sender_email'])."</td>
	 <td class=\"showcontacts\">".$today."</td>
	<td class=\"showcontacts\">".$thisweek."</td>
	<td class=\"showcontacts\">".$thismonth."</td>
	<td class=\"showcontacts\">".$top_users['total_sent']."</td>
	 </tr>");	
$nr++;
}
echo("<tr><td colspan=6 height=\"50\" align=\"right\"><form method=\"post\">Select another month:  ".$combomonth." </form></td></tr>");
}
else
{
	echo("<tr><td colspan=6 height=\"50\" align=\"left\" ><b>No results for ".$date_to_display."! Please choose another month.</b></td></tr>");
	echo("<tr><td colspan=6 height=\"50\" align=\"left\" ><form method=\"post\">Select another month:  ".$combomonth." </form></td></tr>");
}

echo ("</table>");
?>
<?php if($enablecheckstatusmodulelink || $enablerankingsmodulelink) { ?>
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
<?php } ?>
</div>
</div>
</body>
</html>
