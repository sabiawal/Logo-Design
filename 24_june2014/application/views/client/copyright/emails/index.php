<?php 
$select1 = $this->db->query("SELECT * from tbl_designers_post_orders join logo_web on tbl_designers_post_orders.logo_web_id=logo_web.logo_web_id where logo_web.status='6' and logo_web.logo_web_id=".$_SESSION['logoWebId']." and  tbl_designers_post_orders.whichOne='latest' and tbl_designers_post_orders.sent_to='client' order by tbl_designers_post_orders.designer_post_order_id")->result();
$logo_samples = $this->db->query("SELECT * from tbl_logo_samples where logo_web_id = ".$_SESSION['logoWebId']."")->result();
$sender_email = $_POST['sender_email'];
$add_receiver = $_POST['addemail'];
$sums = count($add_receiver);
$samples = $_POST['checked_all'];

$sum = count($samples);

$logos_got = $this->db->query("select image from logo_samples")->result();
$logo_count = count($logos_got); 
foreach($logos_got as $logos){
$all_got_logos[] = $logos->image;	
}
$client_message = str_replace('&nbsp;','',$_POST['text-message']);
$business_message = str_replace('&nbsp;','',$_POST['business_content']);
$verification =  generateRandom(10);
$verification1 =  generateRandom(5);
for($i=0;$i<$sum;$i++)
{
$abc[] = $all_got_logos[$i];
}
?>

<div style="margin:-143px 0 0 277px;">
<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo-vote/logo.jpg" width="418" height="132" /></a>
</div>
<table width="920" border="0" cellspacing="0" cellpadding="0" align="center">
<!-- Second Row -->
<tr>
<td width="500" style="padding-left:15px; padding-top:10px; font:14px Arial, Helvetica, sans-serif;">
<?php 
if($business_message=='') { echo $client_message;}
else{ 
echo $client_message."<br>"; echo $business_message;}
?>
<img src="<?php echo base_url();?>images/logo-vote/be-supportive.jpg" width="322" height="65" style="padding:10px 0px;" /><br />
<?php 
//if(empty($logo_samples)){
if(!empty($select1) || !empty($logo_samples)){?>
<a href="<?php echo base_url();?>client_panel/logovote?logo_id=<?php echo $verification;?>&<?php echo http_build_query(array('array'=>$samples));?>&sender_email=<?php echo $sender_email;?>&receiver_email=<?php echo $_email_;?>&verification=<?php echo $verification1;?><?php echo $_SESSION['logoWebId']?><?php echo $verification1;?>" class="logo-vote"><img src="<?php echo base_url();?>images/logo-vote/click-here.jpg" height="59" width="451" /></a>
<?php }else{?>
<a href="<?php echo base_url();?>client_panel/logovote?logo_id=<?php echo $verification;?>&<?php echo http_build_query(array('array'=>$abc));?>&sender_email=<?php echo $sender_email;?>&receiver_email=<?php echo $_email_;?>&verification=<?php echo $verification1;?><?php echo $_SESSION['logoWebId']?><?php echo $verification1;?>" class="logo-vote"><img src="<?php echo base_url();?>images/logo-vote/click-here.jpg" height="59" width="451" /></a>
<?php }//}else{    
//if(!empty($logo_samples)){?>
<!--<a href="<?php echo base_url();?>client_panel/logovote?logo_id=<?php echo $verification;?>&<?php echo http_build_query(array('array'=>$samples));?>&sender_email=<?php echo $sender_email;?>&receiver_email=<?php echo $_email_;?>&verification=<?php echo $verification1;?><?php echo $_SESSION['logoWebId']?><?php echo $verification1;?>" class="logo-vote"><img src="<?php echo base_url();?>images/logo-vote/click-here.jpg" height="59" width="451" /></a>
<?php //}else{?>
<a href="<?php echo base_url();?>client_panel/logovote?logo_id=<?php echo $verification;?>&<?php echo http_build_query(array('array'=>$abc));?>&sender_email=<?php echo $sender_email;?>&receiver_email=<?php echo $_email_;?>&verification=<?php echo $verification1;?><?php echo $_SESSION['logoWebId']?><?php echo $verification1;?>" class="logo-vote"><img src="<?php echo base_url();?>images/logo-vote/click-here.jpg" height="59" width="451" /></a>-->
<?php //}} ?>
</td>
</tr>
<tr>
<td>
<form id="logo-submit" method="post" action="<?php echo $ss?>">
<ul style="padding: 15px 0 0; width: 800px;">
<?php
$samples = $_POST['checked_all'];

$new_replace_sample = str_replace(' ','_',$samples);
$sum = count($samples);
//echo $sum; die;
$client_message = $_POST['contents'];
$y = 1;	
if(!empty($select1) || !empty($logo_samples)){
for($i=0;$i<$sum;$i++)
{    //echo '<pre>'; print_r($samples);
//if(!empty($select1)){
//$dats = $this->db->query('select distinct logo_name from  logo_samples_to_client where logo_name="'.rawurldecode($samples[$i]).'"')->result();
//foreach($dats as $qry)
//{
$replace_sample = str_replace('_',' ',$qry->logo_name);
echo '<li style="list-style: none outside none; padding: 15px;float:left!important;">';
echo '<img src="http://50dollarlogo.com/admin_panel/sample/'.$samples[$i].'" width="230" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC;" />';
echo '<h3 style="text-align:center; margin:0px; padding:5px 0px 5px 0px; font-family: times new roman,Times,serif; font-size: 20px;">Sample '.$y.'</h3>';
echo '</li>';
$y++;
//}
//}else{	
//$dats = $this->db->query("select * from  logo_samples where image='".$all_got_logos[$i]."'")->result();
//foreach($dats as $qry)
//{
//echo '<li style="float: left; list-style: none outside none; padding: 15px;">';
//echo '<img src="'.base_url().'images/logo-portfolio/'.$all_got_logos[$i].'" width="230" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC;" />';
//echo '<h3 style="text-align:center; margin:0px; padding:5px 0px 5px 0px; font-family: times new roman,Times,serif; font-size: 20px;">Sample '.$y.'</h3>';
//echo '</li>';
//$y++;
//}
//}
}//die;
}
else{ 
$y = 1;    
//if(!empty($logo_samples)){
//$dats = $this->db->query("SELECT * from tbl_logo_samples where logo_web_id = ".$_SESSION['logoWebId']."")->result();
//foreach($dats as $qry)
//{ 
//if(!empty($qry->sample_name)){
//$replace_sample = str_replace('_',' ',$qry->sample_name);
//echo '<li style="list-style: none outside none; padding: 15px;float:left!important;">';
//echo '<img src="http://50dollarlogo.com/admin_panel/sample/'.$qry->sample_name.'" width="230" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC;" />';
//echo '<h3 style="text-align:center; margin:0px; padding:5px 0px 5px 0px; font-family: times new roman,Times,serif; font-size: 20px;">Sample '.$y.'</h3>';
//echo '</li>';
//$y++;
//} 
//}
//}
//else{	

//$dats = $this->db->query("select * from  logo_samples where image='".$all_got_logos[$i]."'")->result();
//echo '<pre>'; print_r($dats);
//foreach($dats as $qry)
//{
for($i=0;$i<$sum;$i++)
{
echo '<li style="float: left; list-style: none outside none; padding: 15px;">';
echo '<img src="'.base_url().'images/logo-portfolio/'.$all_got_logos[$i].'" width="230" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC;" />';
echo '<h3 style="text-align:center; margin:0px; padding:5px 0px 5px 0px; font-family: times new roman,Times,serif; font-size: 20px;">Sample '.$y.'</h3>';
echo '</li>';
$y++;
}
//}
} //die;
for($i=0;$i<$email_count;$i++)
{
echo '<input type="hidden" name="receiver-email" value="'.$results[$i].'" />';
}
?>
</ul>
<input type="hidden" name="sender-email" value="<?php echo $sender_email?>" />
</form>
</td>
<td>&nbsp;</td>
</tr>
</table>