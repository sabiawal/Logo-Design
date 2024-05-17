<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">  
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php"); ?> 
  
  <div class="main-container">
    <div class="main col1-layout">
    <div class="col-main client-panel">
    
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
<tr >
<td colspan="14" align="left">&nbsp;</td>
</tr>

<tr >
<td colspan="14" align="center">&nbsp;</td>
</tr>
<tr bgcolor="#99CCFF">
<th width="8%" align="center"><span class="style3">.AI, .F11, .CDR </span></th>
<th width="8%" align="center"><span class="style3">.EPS</span></th>
<th width="8%" align="center"><span class="style3">.JPG</span></th>
<th width="8%" align="center"><span class="style3">.PNG</span></th>
<th width="8%" align="center"><span class="style3">.PSD</span></th>
<th width="8%" align="center"><span class="style3">.TIF</span></th>
<th width="8%" align="center"><span class="style3">.GIF</span></th>     

<th width="8%" align="center">Busi Card </th>
<th width="8%" align="center">Letter Head 1 </th>
<th width="8%" align="center">Letter Head 2 </th>
<th width="8%" align="center">Letter Head 3 </th>
<th width="8%" align="center">Comp Slip</th>
<th width="8%" align="center"><span class="style3">ZIP FILE</span> </th>
<th width="10%" align="center"><span class="style3">Submited On </span></th>
</tr>

<?php
if(!empty($final))
{
foreach($final as $rown)
{

?>

<tr>

<td align="center" valign="middle">
<?php 
$file = $rown['file_ai'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_ai']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  />				</a>
<?php
}
?></td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_eps'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_eps']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_jpg'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_jpg']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_png'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_png']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_psd'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_psd']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_tif'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_tif']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_gif'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_gif']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>                              </td>



<td align="center" valign="middle">
<?php 
$file = $rown['busiCard'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['busiCard']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['letterHead1'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead1']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['letterHead2'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead2']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['letterHead3'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead3']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['comSlip'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['comSlip']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['zip_file'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['zip_file']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>
<td><?php 
$submitDate=strtotime($rown['submit_date']);
echo date("D d M Y H:i",$submitDate); ?></td>
</tr>

<?php			

}
}
else
{

?>

<tr>
<td colspan="14" align="center" style="color:#FF0000;">&nbsp;</td>
</tr>
<tr bgcolor="#99CCFF">

<td colspan="14" align="center" style="color:#FF0000;"><strong>No final files has been submited till now</strong></td>
</tr>
<tr>
<td colspan="14" align="center" style="color:#FF0000;">&nbsp;</td>
</tr>

<?php
}

?>
</table>
    
    <div style="clear: left;"></div>
    <?php $this->load->view('includes/client/copyright.php'); ?>
    </div>
    <div class="side-bar">
    <?php $this->load->view("includes/client/sidebar-1.php"); ?>
    <div class="security" align="center">
    <?php if(COUNTRY == 'UK' ){ ?>
    <!-- START SCANALERT CODE FOR LDG.CO.UK -->
    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
    <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
    <?php } elseif( COUNTRY == 'USA') { ?>
    <!-- START SCANALERT CODE FOR LDG.COM -->
    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
    <!-- END SCANALERT CODE LDG.COM  -->
    <?php } ?>
    
    </div>
    <?php $this->load->view("includes/client/sidebar-2.php"); ?>
    </div>
    <div class="clear"></div>
    </div>    
    </div>
<div class="footer-container">
    <div class="footer">
   <?php 
      $this->load->view('includes/client/footer.php');
      $this->load->view('includes/client/seal-top.php');
      $this->load->view('includes/client/footer-menu.php');
    ?>
    </div>
</div>
    
  
</div>
</body>
</html>