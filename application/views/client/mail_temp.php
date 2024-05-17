<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Good Rating Email</title>
</head>
<body>
<?php 
$Query = $this->db->query("select * from tbl_designers_post_orders where improvementId = '0' and logo_web_id = '".$_SESSION['logoWebId']."'")->row();


$row_data = array();
    if(!empty($Query->file_one)){
    $row_data[] = $Query->file_one;
    }
    if(!empty($Query->file_two)){
    $row_data[] = $Query->file_two;
    }
    if(!empty($Query->file_three)){
    $row_data[] = $Query->file_three;
    }
    if(!empty($Query->file_four)){
    $row_data[] = $Query->file_four;
    }
    if(!empty($Query->file_five)){
    $row_data[] = $Query->file_five;
    }
    if(!empty($Query->file_six)){
    $row_data[] = $Query->file_six;
    }
    if(!empty($Query->file_seven)){
    $row_data[] = $Query->file_seven;
    }
    if(!empty($Query->file_eight)){
    $row_data[] = $Query->file_eight;
    }
    if(!empty($Query->file_nine)){
    $row_data[] = $Query->file_nine;
    }
    if(!empty($Query->file_ten)){
    $row_data[] = $Query->file_ten;
    }
    if(!empty($Query->file_eleven)){
    $row_data[] = $Query->file_eleven;
    }
    if(!empty($Query->file_twelve)){
    $row_data[] = $Query->file_twelve;
    }
    if(!empty($Query->file_thirteen)){
    $row_data[] = $Query->file_thirteen;
    }
    if(!empty($Query->file_14)){
    $row_data[] = $Query->file_14;
    }
    if(!empty($Query->file_15)){
    $row_data[] = $Query->file_15;
    }
//echo '<pre>';print_r($row_data); die;

$qry1=$this->db->query("SELECT * FROM tbl_logo_samples where designer_post_id = '".$Query->designer_post_order_id."' and sample_type='logo' and logo_web_id ='".$_SESSION['logoWebId']."'")->result();   

$row1 = $this->db->get_where('tbl_designers_post_orders', array('logo_web_id' => $_SESSION['logoWebId']))->row();
$query1 = $this->db->query("select designer_name from designer_management where designer_id = '".$row1->designer_id."'")->row();
?>

<table align="center" border="0" cellpadding="0" bgcolor="#ffffff" cellspacing="0" width="620" style="border-collapse:collapse; background-color:#ffffff; font:0.9em Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; box-shadow: 0 0 5px 1px #999999;">


  <!--  logo -->
<tr style="border-bottom:1px solid #bfbfbf">
    <td valign="top" align="left" style="padding:1px 20px;"><a href="">
    <img src="http://www.logodesignguarantee.com/assets/images/logo_email.jpg" alt="design offshore nepal" width="212" height="64"/>
    </a></td>
 
  </tr>
  
    <tr>
    <td valign="top" align="center" style="padding:1px 20px;"><h1 style="font-weight:normal;">Wow! Look what we got..</h1></td>
 
  </tr>
  <tr>
  
    <td valign="top" align="center" style="padding:1px 58px;">
    <table width="415">
    <tr>
    <td align="left"><p style="font-size:70px; margin:0;"><strong><?php echo $rated_value;?>/10</strong></p> </td>
    <td align="right"><p style="font-size:30px; margin:0;"><strong>Customer rating!</strong> </p></td>
    </tr>
    </table>
    </td>
 
  </tr>
  <tr>
  <td valign="top" style="padding:1px 20px;">
  <p align="center" style="font-size:20px; margin:5px;">Congratulations to our excellent designer,</p>
  </td>
  </tr>
  
<tr style="border-bottom:1px solid #bfbfbf">
<td valign="top" style="padding:10px 50px;">
<table style="border:7px solid #ffff00;" width="500">
<tr>
<td width="300" align="center" style="border:7px solid #d8d8d8">
<h1 align="center" style="font-size:40px; margin:2px"><?php if (isset($query1->designer_name)){ echo $query1->designer_name;}?></h1>
</td>

</tr>
</table>
  

  </td>
  
  </tr>


<tr>
  <td valign="top" style="padding:1px 20px;">
  <p>Take a look at these fantastic designs..</p>
  </td>
</tr>

<tr>
<td valign="top">    
<?php
if(empty($row_data)){
foreach($qry1 as $r1)
{
?>
<img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $r1->sample_name?>" width="180" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC; margin:0 0 10px 15px" />
<?php }}else{ 
for($i=0;$i<count($row_data);$i++){
?>
<img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $row_data[$i]?>" width="180" style="border:2px solid #999; box-shadow:3px 3px 5px #CCC; margin:0 0 10px 15px" />
<?php }} ?>
</td> 
<tr>
<td valign="top" style="padding:1px 20px;">
<p style=" margin:0; line-height:20px;">Keep up the good work. </p>
<p style="margin:0;">Your design skills have boosted the reputation of our design team.</p>
<p><strong>Tips to Get Consistently High Ratings</strong></p>
<ul>
<li style="list-style-type:decimal;"><p>Always follow the design requirements of the customer closely.</p></li>
<li style="list-style-type:decimal;"><p style=" line-height:20px;">Always do extra research into the customer's industry and try to find some inspirational ideas for the logo.</p></li>
<li style="list-style-type:decimal;"><p>Always be unique.</p></li>
<li style="list-style-type:decimal;"><p>You are an artist. Always be proud of your final design, knowing that you have done your best work.</p></li>
</ul>
</td>
</tr>

<tr>
    <td valign="top" align="left" style="padding:1px 20px 0px;">
    <p style="font-size:1.8em; margin:0"><strong><u>Create to Inspire</u></strong></p>
    <p>Design Offshore Nepal</p>    </td>
  </tr>
</table>
</body>
</html> 
