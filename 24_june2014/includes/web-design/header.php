<link rel="stylesheet" href='<?php echo base_url();?>css_web/slideshow1.css' type="text/css" />
<?php if($this->router->method != "cart"): ?>
<script type="text/javascript" src="<?php echo base_url();?>js/xfade2.js"></script>
<?php endif; ?>
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
    //$a = array('c_id'=>5,'display_name'=>"test test"); 
    //$this->session->set_userdata($a); 
    //$c_id = $this->session->userdata('c_id');
    //$this->session->unset_userdata("c_id");       
    if(isset($c_id) && $c_id !="")
    {
    ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css_web/clientpanel.css" />
<div class="header">
<div class="logo">
<h1><img src="<?php echo base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="380" height="132" /></h1>
</div>
<div class="tag" align="center"> 
<p style="margin-bottom:8px; margin-top:-5px; width:120px; margin-left:-5px;"><strong><a href="<?= site_url('reseller/index')?>" style="color:#f00;"><u>Reseller Opportunity</u></a></strong></p>
    
<div class="limited-sale">
<img src="<?php echo base_url(); ?>images/webdesign/top_offer/webdesign_sale.jpg" alt="Limited offer Sale" title="Limited offer Sale" />
</div>
<div style="visibility: hidden;">
<?php if(COUNTRY == 'UK' ){ ?>
<!-- START SCANALERT CODE FOR LDG.CO.UK -->
<!--<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>-->
<!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
<?php } if( COUNTRY == 'USA') { ?>
<!-- START SCANALERT CODE FOR LDG.COM -->
<!--<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>-->
<!-- END SCANALERT CODE LDG.COM  -->

<?php } if( COUNTRY == 'Canada') { ?>
    <!-- START SCANALERT CODE LDG.CA -->
    <!--<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.ca"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.ca/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>-->
    <!-- END SCANALERT CODE LDG.CA -->
<?php } ?>
</div>
<!--<p>Now under new ownership!</p>-->
</div>
<div class="welcome"><?= $this->session->userdata('display_name'); ?></div>
<div class="offer">
<img src="<?= $header_banner; ?>" alt="Special Offer" title="Special Offer" />
<?php
	/*include_once('time-zone/class-timezone-conversionbanner.php');   //Include class                   //
    $tz = new TimezoneConversionban();                  //Create TimezoneConversion Object//
    $tz->setProperty('DateTime', 'now');             //Set local 'DateTime' to convert //
    $tz->setProperty('Timezone', 'EST');             //Get BST                         //
   $today=date("D M j Y",mktime (gmdate("H")+1,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));*/
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
<div class="header">
<div class="logo">
<h1><img src="<?php echo base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="380" height="132" /></h1>
</div>
<div class="tag" align="center">
<!--<p style="margin-bottom:8px; margin-top:-5px; width:120px; margin-left:-5px;"><strong><a href="<?= site_url('reseller/index')?>" style="color:#f00;"><u>Reseller Opportunity</u></a></strong></p>
  
<div class="limited-sale">
<img src="<?php echo base_url(); ?>images/webdesign/top_offer/webdesign_sale.jpg" alt="Limited offer Sale" title="Limited offer Sale" />
</div>-->
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
<!--<div class="offer">
<img src="<?=$header_banner; ?>" alt="Special Offer" title="Special Offer" />
<?php
	/*include_once('time-zone/class-timezone-conversionbanner.php');   //Include class                   //
    $tz = new TimezoneConversionban();                  //Create TimezoneConversion Object//
    $tz->setProperty('DateTime', 'now');             //Set local 'DateTime' to convert //
    $tz->setProperty('Timezone', 'EST');             //Get BST                         //
   $today=date("D M j Y",mktime (gmdate("H")+1,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));*/
   $today=date("D M j Y");
   echo "<div class=\"time-blue\"/>".$today."</div>";
	?>
</div>-->
</div>

<?php } ?>