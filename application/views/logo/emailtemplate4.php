<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> LDG Call Back Request</title>
</head>
<?php $result = $this->db->get_where('tbl_callback',array('id'=>$callback_id))->row();?>
<?php $phonestaff_detail=$this->db->get_where("tbl_phone_staff",array('staff_id'=>$result->assigned))->row();?>
<?php $sitename=$this->db->get_where("tbl_sites",array('site_id'=>$result->site_id))->row();?>

<body>
<table width="700" style="margin:0 auto;">
<tr>
<td style="padding:10px 0">
Dear<span style="color:#F00;"> <?php echo $phonestaff_detail->fname;?>,</span>
</td>
</tr>
<tr>
<td style="padding:10px 0">
<span>
Please be informed that there is an assigned call back request. Details are as follows:
</span></td>
</tr>
</table>

<table border="1" cellspacing="0" cellpadding="10" width="800" style="margin:0 auto">
  <tr>
  <!--  <td width="64"   align="center" style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Date of Request</span></td>-->
    <td width="74" style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Client From</span></td>
 <td width="74" style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Name of Client</span></td>
    <td width="80" align="center" style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Phone Number </span></td>
    <td width="114"  style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Email</span></td>

   <td width="64" style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Date To Call</span></td>

 <td width="62"  style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Time To Call</span></td>

 <td width="150"  style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Call back Notes </span></td>
  
   <!--<td width="150"  style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Completion Note </span></td>-->
  
   <td width="150"  style="background: none repeat scroll 0 0 #00b0f0;
color: #000000;
font: bold 12px/18px Arial,Helvetica,sans-serif;"><span>Assigned To </span></td>
  </tr>
  <tr>
<!--   <td ><span><?=date('m/d/Y',strtotime($result->datetime));?></span></td>
-->  
 <td ><span><?=$sitename->site_name?></span></td>
   <td ><span><?=$result->client_name?></span></td>
    <td  ><span><?=$result->phone?></span></td>
    <td ><span><?=$result->email?></span></td>
        <td ><span><?=$result->datetocall?></span></td>
         <td ><span><?=date('g:i a',strtotime($result->timetocall))?></span></td>
          <td  width="150" ><span><?=$result->notes?></span></td>
    <!--<td  width="150" ><span><?=$result->completion?></span></td>-->

          <td  width="150" ><span><?php echo $phonestaff_detail->fname;?></span></td>
  </tr>
</table>
<table width="700" style="margin:0 auto;">
<tr>
<td style="padding:10px 0">
<span>Go to the LDG Admin Panel to check the complete details of the request.</span>
</td>
</tr>
<tr>
<td style="padding:10px 0">
<span>
Thank you,
</span>
</td>
</tr>
<tr>
<td>
<span>
LDG Admin Team
</span>
</td>
</tr>
</table>
</body>
</html>
