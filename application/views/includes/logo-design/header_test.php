<div class="header">



<div class="logo">



<h1><img src="<?php echo base_url()?>images/logo.jpg" alt="LogoDesign Guarantee" title="logodesign guarantee" width="380" height="132" /></h1>



</div>



<div class="tag" align="center"> 



<?php if(COUNTRY == 'UK' ){ ?>



<!-- START SCANALERT CODE FOR LDG.CO.UK -->



<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>



<!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->



<?php } elseif( COUNTRY == 'USA') { ?>



<!-- START SCANALERT CODE FOR LDG.COM -->

<a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>

<!-- END SCANALERT CODE LDG.COM  -->



<?php } ?>



Now under new ownership!</div>



<div class="offer">

<img src="<?php echo base_url(); ?>images/top_yellow_banner-<?php echo COUNTRY; ?>1.jpg" alt="Special Offer" title="Special Offer" />

<?php



	include_once('time-zone/class-timezone-conversionbanner.php');   //Include class                   //



    $tz = new TimezoneConversionban();                  //Create TimezoneConversion Object//



    $tz->setProperty('DateTime', 'now');             //Set local 'DateTime' to convert //



    $tz->setProperty('Timezone', 'EST');             //Get BST                         //



   $today=date("D M j Y",mktime (gmdate("H")+1,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));



   echo "<div class=\"time-red\"/>".$today."</div>";



	?>



    



    



</div>







</div>