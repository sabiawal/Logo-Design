<div class="header">
    <div class="logo">
    <h1><a href="<?= base_url(); ?>"><img src="<?= base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="418" height="132" /></a></h1>
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
    <img src="<?= base_url(); ?>images/top_yellow_banner-<?= COUNTRY; ?>.jpg" alt="Special Offer" title="Special Offer" />
        <?php            //
      $today=date("D M j Y");
       echo "<div class=\"time-red\" >".$today."</div>";
    	?>    
    </div>
</div>