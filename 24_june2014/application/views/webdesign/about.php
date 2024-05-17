<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Web Design services by professional web designers </title> 
<meta name="description" content="web design services by professional web designers, web page design services, website design service, web site development services, affordable web design, custom web design, web design service company, web designers, web design firm and web designers at affordable prices."/>  
<meta name="keywords" content="web design, web site design, website design, web page design, web designers, web design company, web development, web design firms, web design service, affordable web design, custom web design, cheap web design, web design companies, professional web design, web design business, US web design, USA web design,"/> 

<link href="<?= base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?= base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="header-container">
    	<?php include_once("includes/web-design/header.php"); ?>
    </div>

        <?php include_once("includes/web-design/menu-banner.php"); ?>
        <script language="javascript" type="text/javascript">
        document.getElementById('nav-web-about').className='selected';
        
        </script>

    <div class="main-container">
    <div class="main col3-layout">
      <div class="col3-main-wrap">
        <div class="side-bar">
          <?php 

include_once("includes/web-design/staff-list.php");

?>
        </div>
        <div class="col-main">
          <div class="about">
            <h1>Introduction</h1>
            <p>At Logo Design Guarantee we believe logo designs can be given at great prices with quality to match. As such, our 100% guarantee acts as an insurance for you. If you do not like your designs, then we return all your money, that simple.</p>
            <p>Our team of designers believe we can offer the best priced logos on the web. If you think you can find something cheaper, then send us the quote and we will try to beat it. </p>
            <p>We have a team of 14 in-house designers which allows quality reassurance checks on each logo design as ideas can be shared among various talented designers. The experience and expertise of our team allow us to offer such low prices without compromising on quality. </p>
            <p>Our business model is built on the principle of low price and higher turnover of logos. We offer great service for any form of customers, be it individuals, sole traders, small companies or large corporations. If you would like to know more, then please feel free to  contact us</p>
            <h1><img src="<?= base_url(); ?>images/webdesign/about_1.JPG" width="450" height="200" alt="Logodesign Guarantee Office" title="Logodesign Guarantee Office" /></h1>
            <h1>Company Mission Statement</h1>
            <p>We endeavor to offer quality custom made logos at the most affordable price in the world. We have satisfied over 1000 customers since becoming established in 2002. Currently, only approximately 1 in 50 customers ask for their money back.</p>
            <p>We intend to be the number one destination when anyone needs a quality logo. In addition, we provide an industry shattering <?php echo GUARANTEE_DAY; ?>-Day, 100% money&ndash;back guarantee to underscore our commitment to customer service. </p>
            <h1><img src="<?= base_url()."images/webdesign/about_2.JPG";?>" width="450" height="200" alt="Logodesign Guarantee Office" title="Logodesign Guarantee Office" /></h1>
            <h1>Company Values</h1>
            <p>No-one should pay <?= CURRENCY.LOGO_PLUS ?> plus for their set of logos. Our business model is built on the principle of lower price and more satisfied customers. Large staffing allows ample time to be spent on each logo order, so as to ensure full customer satisfaction. Moreover, if we do not offer quality work specific to a customer&sbquo;s needs, then he or she may ask for their money back. Thus we pursue every effort to avoid this and guarantee quality logos. </p>
            <h1><img src="<?php echo base_url(); ?>images/webdesign/about_3.JPG" width="450" height="200" title="Logodesign Guarantee Office" alt="Logodesign Guarantee Office" /></h1>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="col3-side-bar">
        <div class="side-bar">
          <?php include_once("includes/web-design/sidebar-1.php"); ?>
          <?php include_once("includes/web-design/sidebar-2.php"); ?>
        </div>
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