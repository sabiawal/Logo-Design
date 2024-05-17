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
</head>
<body>
<div class="wrapper">
<div class="header-container">
<?php include_once("includes/web-design/header.php"); ?>
</div>

<?php include_once("includes/web-design/menu-banner.php"); ?>
<script language="javascript" type="text/javascript">
document.getElementById('nav-web-whyus').className='selected';

</script>

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
<?php 
include_once("includes/web-design/sidebar-1.php");
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
        <?php include_once("includes/web-design/sidebar-2.php"); ?>
</div>
<div class="clear"></div>
<?php 
    if(isset($c_id) && $c_id !="")
    {
        include_once('includes/client/copyright.php');
    } 
?>
</div>


</div>
    <div class="footer-container">
        <div class="footer">
            <?php 
            include_once("includes/web-design/footer.php");
            include_once("includes/web-design/seal-top.php"); 
            include_once("includes/web-design/footer-menu.php");
            ?>      
        </div>
    </div>
    
</div>
</body>
</html>