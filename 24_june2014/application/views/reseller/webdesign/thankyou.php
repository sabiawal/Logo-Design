<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Web Design services by professional web designers </title> 
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
</noscript>
 <?php }?>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css_web/block.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
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
    <p>Thank you for placing an order at <?php echo SITE_NAME; ?>. <br /><br />Please <a href="<?php echo base_url(); ?>">click here</a> to return to the homepage if you are not redirected automatically. </p>
<?php 
//print_r($_REQUEST);
//print_r($_SESSION);
?>
</div>
<div class="side-bar">
    <?php $this->load->view('blocks/best-value'); ?>
    <?php $this->load->view('blocks/live-support'); ?>
    <?php $this->load->view('blocks/charity'); ?>
    <?php $this->load->view('blocks/security-sidebar'); ?>
    <?php $this->load->view('blocks/mcafee'); ?>
    <!--  -->
    <?php $this->load->view('blocks/awards'); ?>
    
    <?php $this->load->view('blocks/customer-support'); ?>
</div>
<div class="clear"></div>

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
</body>
</html>