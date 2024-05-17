<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<!-- Google Code for sale ldg.co.uk Conversion Page -->
<?php if(COUNTRY == 'UK' ){ ?>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1059042374;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "bRCYCI6kURDG6P74Aw";
var google_conversion_value = <?php echo @$_GET['price']?>;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1059042374/?label=bRCYCI6kURDG6P74Aw&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php }
elseif( COUNTRY == 'USA') { ?> 
 <!--Google Code for sale ldg.com Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1059042374;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "gFpyCOikURDG6P74Aw";
var google_conversion_value = <?php echo @$_GET['price']?>;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1059042374/?label=gFpyCOikURDG6P74Aw&amp;guid=ON&amp;script=0"/>
</div>
</noscript>';
 <?php }?>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('blocks/analytics'); ?>
</head>
<body>
<div class="wrapper">
<div class="header-container">
<?php $this->load->view('blocks/header/header');  ?>
</div>
<div class="top-container">
    <div class="top">
        <?php $this->load->view('blocks/menu');  ?>
        <?php $this->load->view('blocks/main-banner');  ?>
    </div>
  </div>
<div class="main-container">
<div class="main col2-right-layout">
<div class="col-main thankyou">
<h1>Thank you </h1>
    <p>Thank you for placing an order at <?php echo SITE_NAME; ?>.<br /><br />Please <a href="<?php echo base_url(); ?>">click here</a> to return to the homepage if you are not redirected automatically. </p>
</div>
<div class="side-bar">
<?php 
    $this->load->view('blocks/money-back'); 
    $this->load->view('blocks/live-support'); 
    $this->load->view('blocks/charity'); 
    $this->load->view('blocks/security-sidebar');           
?>
<div class="awards">
          <div><img src="<?php echo base_url()?>images/side-bar-bg-top.jpg" title="bg-top" /></div>
          <div class="awards-text">
            <h1>Awards</h1>
            <h2 class="text-red text-bold">American design awards</h2>
            <p><span class="text-red">The American Design Awards was founded in the year 2000 rewarding <span class="text-bold">excellence in design</span> and business.</span> <span class="text-bold"><a href="<?php echo site_url('adaward'); ?>">Read more.</a></span></p>
            <h2 class="text-blue text-bold">Summit international awards</h2>
            <p><span class="text-blue">Throughout its 13 year history, the Summit organization has established itself as one of the premier arbiters of <span class="text-bold"> communication excellence.</span></span><span class="text-bold"> <a href="<?php echo site_url('saward'); ?>">Read more.</a></span></p>
            <h2 class="text-dark-red">Red dot awards</h2>
            <p><span class="text-dark-red">This award ranks among the largest and <span class="text-bold">most renowned design competitions</span> in the world. The red dot design award attracted almost 6,000 submissions from 52 countries in 2006 alone. </span><span class="text-bold"><a href="<?php echo site_url('rdaward'); ?>" >Read more.</a></span> </p>
          </div>
          <div><img src="<?php echo base_url()?>images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
        </div>
</div>
<div class="clear"></div>
    <br />
    <?php $this->load->view('blocks/footer/payment-seals'); ?><br />
    <?php $this->load->view('blocks/footer/partners');?><br />
    <?php $this->load->view('blocks/footer/phone-banner-bottom');?><br />
</div>
</div>
<div class="footer-container">
    <div class="footer">
        <?php $this->load->view('blocks/footer/footer-links'); ?>
        <?php $this->load->view('blocks/footer/footer-text'); ?>
        <?php $this->load->view('blocks/footer/footer-seals'); ?>
    </div>
</div>
</div>
<script>
microsoft_adcenterconversion_domainid = 169378;
microsoft_adcenterconversion_cp = 5050; 
 </script>
<script src="http://0.r.msn.com/scripts/microsoft_adcenterconversion.js"></script>
<noscript>
<img width="1" height="1" src="http://169378.r.msn.com/?type=1&cp=1"/>
</noscript>
<a href="http://advertising.msn.com/MSNadCenter/LearningCenter/adtracker.asp" target="_blank">::adCenter::</a>
</body>
</html>