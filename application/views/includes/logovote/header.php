<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />

<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />

<style type="text/css"></style>

<div class="header" style=" min-height: 146px; overflow: visible;">

  <div class="logo">

    <h1><a href="<?= base_url(); ?>"><img src="<?php echo base_url()?>assets/images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>

  </div>

  <div class="reseller-head"></div>

  <div class="tag" align="center"> 

    <!-- For Reseller -->

    <p style="margin-bottom:8px; margin-top:-5px; width:120px; margin-left:-5px;"><strong><a href="<?php echo base_url()?>" style="color:#f00;"><u>See main website</u></a></strong></p>

    <?php if(COUNTRY == 'UK' ){ ?>

    <!-- START SCANALERT CODE FOR LDG.CO.UK --> 

    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a> 

    <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->

    <?php } elseif( COUNTRY == 'USA') { ?>

    <!-- START SCANALERT CODE FOR LDG.COM --> 

    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a> 

    <!-- END SCANALERT CODE LDG.COM  -->

    <?php } ?>

    <!--Now under new ownership!--> </div>

  <div class="offer"> <img src="<?= base_url(); ?>assets/images/top_yellow_banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer"

     />

    <?php            //

      $today=date("l j M y");

	  $din=date("l");

	   $gate=date("j");

	    $mahina=date("M");

		 $sal=date("y");

       echo "<div class=\"time-red\" >"."Midnight EST,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";

    	?>

  </div>

</div>

<style type="text/css">

.time-red{

	left: 215px;

top: 6px;

font-size: 13px;

	}

</style>

