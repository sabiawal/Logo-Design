<style type="text/css">
.time-red{left: 215px; top: 6px; font-size: 13px;}
.header{position: relative;}
ul.displayname{-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: #666 0px 2px 3px; -moz-box-shadow: #666 0px 2px 3px; box-shadow: #666 0px 2px 3px; font: normal 14px/16px arial; color: #999; position: absolute; top: 5px; left: 375px; overflow: hidden; background: #060; padding: 5px; z-index: 111;}
ul.displayname li{float: left; padding: 2px;}
ul.displayname li a{color: #fff;}
ul.displayname li:hover a{color: #fff;}
.header .tag {color: #009900; font: bold 15px/24px "Comic Sans MS",cursive;}
</style>
<?php if($this->router->fetch_class() == 'reseller' || $this->router->fetch_class() == 'logodesign'): ?>
<div class="header" style=" min-height: 146px; overflow: visible;">
    <div class="logo">
        <h1><a href="<?php if($this->router->fetch_class() == 'reseller') echo site_url('reseller/index'); else echo base_url(); ?>"><img src="<?php if($this->router->fetch_class() == 'reseller') echo base_url().'images/logo-reseller.jpg'; else echo base_url().'images/logo.jpg'; ?>" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>
    </div>
    <div class="tag" align="center">
        <!-- For Reseller --> 
        <span style="display: block; height: 30px;"><?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') { ?> <ul class="displayname"><li><?= $_SESSION['fname']; ?> </li> <li> | </li> <li><a href="<?= site_url('reseller/logout')?>">Logout</a></li></ul><?php }else {?><strong><a href="<?php echo base_url(); ?>"  ><u style="color:#000;">Back to site</u></a><?php }?></strong></span>
        <?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {if(COUNTRY == 'UK' ){ ?>
        <!-- START SCANALERT CODE FOR LDG.CO.UK -->
        <!--<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>-->
        <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
        <?php } elseif( COUNTRY == 'USA') { ?>
        <!-- START SCANALERT CODE FOR LDG.COM -->
        <!--<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>-->
        <!-- END SCANALERT CODE LDG.COM  -->
        <?php } }else{echo '<img src="'.base_url().'images/13.gif" />';}?>
        Now under new ownership!
    </div>
    <div class="offer">
        <img src="<?= base_url(); ?>images/top_yellow_banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer" />
        <?php            //
        $today=date("l j M y");
        $din=date("l");
        $gate=date("j");
        $mahina=date("M");
        $sal=date("y");
        ?>
        <div class="time-red" >Midnight<?php if(COUNTRY != 'UK'){echo " EST";} ?>, <u><?=$din; ?></u> <?= $gate." ".$mahina." ".$sal; ?></div>
    </div>
</div>
<?php elseif($this->router->fetch_class() == 'reseller_web' || $this->router->fetch_class() == 'webdesign'): ?>
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
?>
<div class="header">
    <div class="logo" <?php if($this->router->fetch_class() == 'reseller_web'){echo 'style="width:414px"';} ?>>
        <h1><a href="<?php if($this->router->fetch_class() == 'reseller_web') echo site_url('reseller_web/index'); else echo base_url(); ?>"><img src="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo base_url().'images/logo-reseller.jpg'; else echo base_url().'images/logo.jpg'; ?>" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>
    </div>
    <div class="tag" align="center" <?php if($this->router->fetch_class() == 'reseller_web'){echo 'style="width:110px"';} ?>>
        <!-- For Reseller --> 
        <span style="display: block; height: 30px;"><?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') { ?> <ul class="displayname"><li><?= $_SESSION['fname']; ?> </li> <li> | </li> <li><a href="<?= site_url('reselleropportunity/logout')?>">Logout</a></li></ul><?php }else {?><strong><a href="<?php echo base_url(); ?>"  ><u style="color:#f00;">Back to site</u></a><?php }?></strong></span>
        <?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {if(COUNTRY == 'UK' ){ ?>
        <!-- START SCANALERT CODE FOR LDG.CO.UK -->
        <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
        <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
        <?php } elseif( COUNTRY == 'USA') { ?>
        <!-- START SCANALERT CODE FOR LDG.COM -->
        <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
        <!-- END SCANALERT CODE LDG.COM  -->
        <?php } }else{echo '<img src="'.base_url().'images/13.gif" />';}?>
        Now under new ownership!
    </div>
<div class="offer">
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
</div>
</div>
<?php endif; ?>