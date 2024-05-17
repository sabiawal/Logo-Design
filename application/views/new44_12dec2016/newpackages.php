<?php
//echo "<pre>";
//print_r($new_package);
$package_rows = count($new_package);
$package_id = $new_package[0]->package_id;

// Headign for all Packages
$q          = $this->db->query("select package_name from new_packages where id = $package_id");
$heading    = $q->row(); 

$package_heading = $heading->package_name.' Packages';
// count new packages row

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?=base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<?php if(isset($c_id) && $c_id !="")//checking for client panel login
{
	?>
	<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
	<?php 
}
?>
<script language="javascript" type="text/javascript" src="<?=base_url(); ?>js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{    
   //$('.new-packages').each(function(i){
//    
//    if(i=="0") var hei = $(this).height();
//    if(i>"0")
//    {
//        if(hei<$(this).height()) {var hei = $(this).height();} 
//    }
//  
//    $('.new-packages').height(hei);
//     
//   });

//2nd code
  for(i=0;i<$('.new-packages').length;i++){
    if(i==0) {var hei = $(".new-packages:eq("+i+")").height();}
    else{ if(hei<$(".new-packages:eq("+i+")").height()) var hei=$(".new-packages:eq("+i+")").height();}
    
  }$(".new-packages").height(hei);
  
  
  $('.new-packages').click(function(){
		$('.new-packages').removeClass("round");
		$(this).addClass("round");
	});
});
</script>
<?php include_once("includes/logo-design/analytics.php"); ?>
<!--[if lt IE 8]>
<script src="<?=base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body <?php if(@$c_id == ''){echo 'class="theme2"';} ?>>
<div class="wrapper">
    <div class="header-container">
        <?php include_once("includes/new44/header.php"); ?>
    </div>
    <div class="top-container">
        <div class="top">
        <?php include_once("includes/new44/menu-banner.php"); ?>
        </div>
    </div>
     
<div class="main-container">
<div class="main col2-right-layout">
<div class="col-main">
<div class="pages new44">

<?php 
$package_description = str_replace('180','365',$new_package[0]->package_description);
if(COUNTRY == "UK")
{
	$search1 = array(' USA ', '>USA ');
	$replace1= array(' '.COUNTRY.' ', '>'.COUNTRY.' ');
	echo str_replace($search1,$replace1,$package_description);
}
else
{
	echo $package_description;
}
include_once("includes/new44/small-slider.php"); 
?>

<br /><br />
<div style="width: 738px;">
<h3><?= $package_heading; ?></h3>
<?php
$row_count = 1;
for($i=0; $i<$package_rows; $i++)
{
    $package_type = $new_package[$i]->package_type;
    if(COUNTRY == "UK")
    {
        $new_price = $new_package[$i]->gbp;
        $reg_price = $new_package[$i]->gbp_reg;
    }
    if(COUNTRY == "USA")
    {
        $new_price = $new_package[$i]->usd;
        $reg_price = $new_package[$i]->usd_reg;        
    }
?>

	<div class="new-packages<?php if($row_count % 3 == 0)echo ' last'; if($row_count == 3){echo ' round';} ?>"  >
	<?php if($row_count == 3){ echo '<img style="position: absolute; left: 160px; top: -11px;" alt="best-value" title="best-value" src="'.base_url().'images/new44/best-value.png">';} ?>
	<h4><?= $package_type.'<br /><em> Now at <span style="color: #f00;  font-size: 22px;">'.CURRENCY.$new_price.'</span> was <span style=" text-decoration: line-through; ">'.CURRENCY.$reg_price.'</span></em>'; ?> </h4>
	<?php echo $new_package[$i]->package_description2; ?>
	 <br />
	<span><input type="submit"  class="button" value="" /></span> 
	</div>
	<?php
	$row_count++;
}
?>
</div>
</div>
</div>
<div class="side-bar">
<?php
if(isset($c_id) && $c_id!="")//checking for client panel login
{
	include_once("includes/client/sidebar-1.php");
	?>
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
	<?php include_once("includes/client/sidebar-2.php");
}
else
{ 
    include_once("includes/new44/sidebar-1.php");
    ?>
    <div class="security">
    <h2 align="center"><img src="<?= base_url()?>images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
    <h2 align="center"><img src="<?= base_url()?>images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
    <h2 align="center"><img src="<?= base_url()?>images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
    <h2 align="center"><img src="<?= base_url()?>images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
    </div>
<?php 
}
?>
</div>
<div class="col-main" style="margin: -30px 0px 20px;">
<span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#06C; font-weight: bold; ">Wish to order a service on this exact page?...<br/><br/>
Please call our team now!</span><br/><br/><br />
<span style="font-family:Arial, Helvetica, sans-serif; font-size:17px; color:#06C; font-weight: bold; ">P.S. Our checkout pages for this service are currently being re-developed.</span>
<br /><br />
</div>
<div class="clear"></div>
<?php  if(isset($c_id) && $c_id !=""): ?>
    <?php include_once('includes/client/copyright.php'); ?>
<?php endif; ?>
<!--<div class="payment_seals" align="center">
    <?php #include("includes/new44/payment_seals.php"); ?>
</div>
<br />
<div class="partners">
    <?php #include("includes/new44/partners.php"); ?>   
</div>-->
<?php 
if(isset($c_id) && $c_id!="")//checking for client panel login
    {}//Nothing
else
    include_once("includes/logo-design/seal-top.php"); 
?>
</div>
</div>

<div class="footer-container">
<?php
if(isset($c_id) && $c_id!="") //checking for client panel login
{
    ?>
    <div class="footer">
      <?php 
      include_once('includes/client/footer.php');
      include_once('includes/client/seal-top.php');
      include_once('includes/client/footer-menu.php');
    ?>
    </div><?php
}
else
    include_once("includes/new44/footer.php"); 
?>
</div>
</div>
</body>
</html>