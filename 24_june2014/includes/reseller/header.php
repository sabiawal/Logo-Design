<style type="text/css">
.time-red{left: 215px; top: 6px; font-size: 13px;}
.header{position: relative;}
ul.displayname{-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: #666 0px 2px 3px; -moz-box-shadow: #666 0px 2px 3px; box-shadow: #666 0px 2px 3px; font: normal 14px/16px arial; color: #999; position: absolute; top: 5px; left: 375px; overflow: hidden; background: #060; padding: 5px; z-index: 111;}
ul.displayname li{float: left; padding: 2px;}
ul.displayname li a{color: #fff;}
ul.displayname li:hover a{color: #fff;}
</style>
<div class="header" style=" min-height: 146px; overflow: visible;">
    <div class="logo">
    <h1><a href="<?= site_url('reseller/index'); ?>"><img src="<?php echo base_url()?>images/logo-reseller.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>
    </div>
    
    
    <div class="tag" align="center">
    <!-- For Reseller --> 
    <p style="margin-bottom:8px; margin-top:-5px; width:120px; margin-left:-5px; min-height: 24px;"><?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') { ?> <ul class="displayname"><li><?= $_SESSION['fname']; ?> </li> <li> | </li> <li><a href="<?= site_url('reselleropportunity/logout')?>">Logout</a></li></ul><?php }else {?><strong><a href="<?php echo site_url('reselleropportunity'); ?>"  ><u style="color:#000;">Reseller</u></a><?php }?></strong></p>
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
    <img src="<?= base_url(); ?>images/top_yellow_banner-<?php echo COUNTRY; ?>.png" alt="Special Offer" title="Special Offer"
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