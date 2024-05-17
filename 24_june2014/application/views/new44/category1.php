<?php
$package_rows = intval($package_rows);
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
<!--[if lt IE 8]>
<script src="<?=base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body <?php if(@$c_id == ''){echo 'class="theme2"';} ?>>
<div class="wrapper">
    <div class="header-container">
        <?php
	if($this->router->method == "index")

	{

	$header_banner = base_url()."images/webdesign/top_offer/index-".COUNTRY.".jpg";	

	}

	elseif($this->router->method == "portfolio")

	{

	$header_banner = base_url()."images/webdesign/top_offer/portfolio-".COUNTRY.".jpg";	

	}

	elseif($this->router->method == "howworks")

	{

	$header_banner = base_url()."images/webdesign/top_offer/howworks-".COUNTRY.".jpg";	

	}

	elseif($this->router->method == "whyus")

	{

	$header_banner = base_url()."images/webdesign/top_offer/whyus-".COUNTRY.".jpg";	

	}

	else

	{

	$header_banner = base_url()."images/webdesign/top_offer/about-".COUNTRY.".jpg";	

	}   
    if(isset($c_id) && @$c_id !="")
    {
    ?>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/clientpanel.css" />

<div class="header">

<div class="logo">

<h1><img src="<?php echo base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="380" height="132" /></h1>

</div>

<div class="tag" align="center"> 

<div class="limited-sale">

<img src="<?php echo base_url(); ?>images/webdesign/top_offer/webdesign_sale.jpg" alt="Limited offer Sale" title="Limited offer Sale" />

</div>

<div style="visibility: hidden;">

<?php if(COUNTRY == 'UK' ){ ?>

<!-- START SCANALERT CODE FOR LDG.CO.UK -->

<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>

<!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->

<?php } if( COUNTRY == 'USA') { ?>

<!-- START SCANALERT CODE FOR LDG.COM -->

<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>

<!-- END SCANALERT CODE LDG.COM  -->

<?php } if( COUNTRY == 'Canada') { ?>

    <!-- START SCANALERT CODE LDG.CA -->

    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.ca"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.ca/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>

    <!-- END SCANALERT CODE LDG.CA -->

<?php } ?>

</div>

<!--<p>Now under new ownership!</p>-->

</div>

<div class="welcome"><?= $this->session->userdata('display_name'); ?></div>

<div class="offer">

<img src="<?= $header_banner; ?>" alt="Special Offer" title="Special Offer" />

<?php
   $today=date("D M j Y");
   echo "<div class=\"time-red\"/>".$today."</div>";
	?>
</div>
</div>

    <?php  
    }
    else
    {
?>

<div class="header" style="height:146px; overflow:visible !important;">

<?php 
    // To get Cache file Name on CI cache folder - application/cache

    // echo md5(base_url().$this->uri->segment(1).'/'.$this->router->method);

    if($_SERVER['REMOTE_ADDR'] == '202.166.221.122' || $_SERVER['REMOTE_ADDR'] == '202.166.221.121' || $_SERVER['REMOTE_ADDR'] == '202.79.35.56' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1'){

    echo md5(base_url().$this->uri->uri_string);

    }
?>
    <div class="logo">

    <h1><a href="<?= base_url(); ?>"><img src="<?php echo base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>

    </div>
    <div class="tag" align="center"> 

    <?php if(COUNTRY == 'UK' ){ ?>

    <!-- START SCANALERT CODE FOR LDG.CO.UK -->

    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>

    <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->

    <?php } elseif( COUNTRY == 'USA') { ?>

    <!-- START SCANALERT CODE FOR LDG.COM -->

    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>

    <!-- END SCANALERT CODE LDG.COM  -->

    <?php } ?>

    

    Now under new ownership!

    </div>

    

    <div class="offer">

    <img src="<?php echo base_url(); ?>images/top_yellow_banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer" />

        <?php            //

      $today=date("l j M y");

	  $din=date("l");

	   $gate=date("j");

	    $mahina=date("M");

		 $sal=date("y");

       echo "<div class=\"time-red\" >"."Midnight,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";

    	?> 

    </div>

</div>

<?php } ?>

<style type="text/css">

.time-red{left:215px;}

</style>

        <?php //include_once("includes/new44/header.php"); ?>
    </div>
    <div class="phone-banner-container">
    <div class="phone-banner">
    <p>Call "free" a design expert 24/7:<br />
   <span><?= PHONE_NO; ?></span></p>
    </div>
</div>
    <div class="top-container">
        <div class="top">
        <?php include_once("includes/new44/menu-banner.php"); ?>
        </div>
    </div>
    
<div class="main-container">
<div class="main col2-right-layout box-shadow">
<div class="col-main">
<div class="pages category">
    <h2>Step 1. What do you want designed?</h2><br />
    <div style="overflow: hidden;">
        <?php
                    
            $this->db->select('*');           
            $this->db->from('new_category');            
            //$where = "id <'45'";
            //$this->db->where($where);
            $this->db->order_by("categories", "asc"); 
            $query = $this->db->get(); 
                        
            $count = 1;           
            foreach ($query->result() as $row)
            {
                
                $subheading = $row->categories;
                $category_id = $row->id;
                
                if($count % 2 == 0){ $style = 'style="margin-right:0;"'; }else{$style = "";}
                if($count  == 5){ $style = 'style="margin-bottom:20px;"'; }
                echo '<div class="new-package-detail"'.$style.'>';
                echo '<h3>'.$subheading.'</h3>';
                echo '<ul>';
                
                
				//$this->db->select('*');
                //$this->db->from('new_packages');
                //$this->db->where('category_id', $category_id); 
                //$this->db->order_by("package_name", "asc"); 
                //$query2 = $this->db->get();
				$query2 = $this->db->query("Select * from new_packages where category_id='".$category_id."' Order by package_name asc");
                foreach($query2->result() as $row2)
                { 
                    $package_name = $row2->package_name;
                    $package_id = $row2->id;
                    
                    $q  = $this->db->query("select * from new_sub_packages where package_id = $package_id");
                    $pp = $q->row(); 
                   
                    if(COUNTRY == 'UK'){$package_price = $pp->gbp;}else{$package_price = $pp->usd;}                    
                    echo '<li> <a href="'.site_url('new44/newpackages').'?pid='.$package_id.'">'.$package_name.' <span class="price-detail">from '.CURRENCY.$package_price.'</span></a></li>';
                    
                    
                }
                
                echo '</ul>';
                echo '</div>';
                $count++;
            }
        ?>
    </div>
</div>
    

</div>
<div class="side-bar">
<?php 
if(isset($c_id) && $c_id!="")
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
<div class="clear"></div>
<?php  if(isset($c_id) && $c_id !=""): ?>
    <?php include_once('includes/client/copyright.php'); ?>
<?php endif; ?>
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
if(isset($c_id) && $c_id!="")//checking for client panel login
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