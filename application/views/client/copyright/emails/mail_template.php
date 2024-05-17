<?php
$reff = $_SESSION['reff'];
$sum = explode('?user_email=',$reff);
$sum1 = explode('&logoWebId',$sum[1]);
//$string = 'reply-234-private';
preg_match('/=(.*?)&/',$sum1[1], $logoWebId);
//$logoWebId = $_SESSION['logo_id'];
//$sender_email = $_SESSION['c_email'];
$samples = $_SESSION['new_emails'];

$select1 = $this->db->query("select * from tbl_designers_post_orders where logo_web_id='".$logoWebId[1]."' order by submit_date desc")->result();
//$select1 = $this->db->query("SELECT * from tbl_designers_post_orders join logo_web on tbl_designers_post_orders.logo_web_id=logo_web.logo_web_id where logo_web.status='6' and logo_web.logo_web_id=".$logoWebId." and  tbl_designers_post_orders.whichOne='latest' and tbl_designers_post_orders.sent_to='client' order by tbl_designers_post_orders.designer_post_order_id")->result();
$logo_samples = $this->db->query("SELECT * from tbl_logo_samples where logo_web_id = '".$logoWebId[1]."'")->result();
 
                $row_data = array();
		foreach($select1 as $sels){
		if(!empty($sels->file_one)){
		$row_data[] = $sels->file_one;
		}
		if(!empty($sels->file_two)){
		$row_data[] = $sels->file_two;
		}
		if(!empty($sels->file_three)){
		$row_data[] = $sels->file_three; 
		}
		if(!empty($sels->file_four)){
		$row_data[] = $sels->file_four;
		}
		if(!empty($sels->file_five)){
		$row_data[] = $sels->file_five;
		}
		if(!empty($sels->file_six)){ 
		$row_data[] = $sels->file_six;
		}
		if(!empty($sels->file_seven)){
		$row_data[] = $sels->file_seven;
		}
		if(!empty($sels->file_eight)){ 
		$row_data[] = $sels->file_eight;
		}
		if(!empty($sels->file_nine)){
		$row_data[] = $sels->file_nine;
		}
		if(!empty($sels->file_ten)){
		$row_data[] = $sels->file_ten;
		}
		if(!empty($sels->file_eleven)){ 
		$row_data[] = $sels->file_eleven;
		}
		if(!empty($sels->file_twelve)){
		$row_data[] = $sels->file_twelve; 
		}
		if(!empty($sels->file_thirteen)){
		$row_data[] = $sels->file_thirteen;
		}
		if(!empty($sels->file_14)){
		$row_data[] = $sels->file_14; 
		}
		if(!empty($sels->file_15)){
		$row_data[] = $sels->file_15;
		}
                }
                
                foreach($logo_samples as $logos){
                    if(!empty($logos->sample_name))
                    $row_data[] = $logos->sample_name;
                    //print_r($logos->sample_name);
                }
                 
$this->db->where('logo_web_id',$logoWebId[1]);
            $query = $this->db->get('message_template');
            $row = $query->row();
            
            if(empty($row)){
                $message = '<p>Dear Friends,</p>
                            <p><i>Hopefully you can help...</i></p>
                            <p>The images below are my logo samples for my new business.</p>
                            <p>I would appreciate any feedback you may wish to give me.</p>
                            <p>You can vote for your best one!<br /></p>
                            <p>You can also score each logo sample out of 10.</p>
                            <p>This will help me to get my perfect logo.</p>
                            <p>Thank you kindly,</p>';
                $client_message = str_replace('&nbsp;','',$message);
            }
            else{
                $message = $row->client_message.'<br>';
                $message.= $row->business_aim;
                $business_message = str_replace('&nbsp;','',$message);
            }



$sum = count($row_data);

$verification =  generateRandom(10);
$verification1 =  generateRandom(5);
/*for($i=0;$i<$sum;$i++)
{
$abc[] = $all_got_logos[$i];
}*/
?>
<div style="margin:-143px 0 0 277px;">
<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo-vote/logo.jpg" width="418" height="132" /></a>
</div>
<table width="920" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td width="500" style="padding-left:15px; padding-top:10px; font:14px Arial, Helvetica, sans-serif;">
<?php 
if(empty($row)){ echo $client_message;}
else{ 
echo $business_message;}
?>
<img src="<?php echo base_url();?>assets/images/logo-vote/be-supportive.jpg" width="322" height="65" style="padding:10px 0px;" /><br />
<a href="<?php echo base_url();?>client_panel/logovote?logo_id=<?php echo $verification;?>&<?php echo http_build_query(array('array'=>$row_data));?>&sender_email=<?php echo $_SESSION['receiver_email'];?>&receiver_email=<?php echo $_email1_;?>&verification=<?php echo $verification1;?><?php echo $logoWebId?><?php echo $verification1;?>" class="logo-vote"><img src="<?php echo base_url();?>assets/images/logo-vote/click-here.jpg" height="59" width="451" /></a>
</td>
</tr>
<tr>
<td>
<form id="logo-submit" method="post">
<ul style="padding: 15px 0 0; width: 800px;">
<?php
$samples = $row_data;

//$new_replace_sample = str_replace(' ','_',$samples);
$sum = count($samples);
//$client_message = $_POST['contents'];
$y = 1;	
for($i=0;$i<$sum;$i++)
{    
echo '<li style="list-style: none outside none; padding: 15px;float:left!important;">';
echo '<img src="http://50dollarlogo.com/admin_panel/sample/'.$row_data[$i].'" width="230" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC;" />';
echo '<h3 style="text-align:center; margin:0px; padding:5px 0px 5px 0px; font-family: times new roman,Times,serif; font-size: 20px;">Sample '.$y.'</h3>';
echo '</li>';
$y++;
}
/*for($i=0;$i<$email_count;$i++)
{
echo '<input type="hidden" name="receiver-email" value="'.$results[$i].'" />';
}*/
?>
</ul>
<input type="hidden" name="sender-email" value="<?php echo $_SESSION['receiver_email']?>" />

</form>
</td>
<td>&nbsp;</td>
</tr>
</table>
