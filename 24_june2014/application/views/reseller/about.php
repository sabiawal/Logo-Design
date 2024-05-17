<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
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
    <div class="main col3-layout">
      <div class="col3-main-wrap">
        <div class="side-bar">
          <?php 
include_once("includes/logo-design/staff-list.php");
?>
        </div>
        <div class="col-main">
          <div class="about">
            <h1>Introduction</h1>
            <p>At Logo Design Guarantee we believe logo designs can be given at great prices with quality to match. As such, our 100% guarantee acts as an insurance for you. If you do not like your designs, then we return all your money, that simple.</p>
            <p>Our team of designers believe we can offer the best priced logos on the web. If you think you can find something cheaper, then send us the quote and we will try to beat it. </p>
            <p>We have a team of 14 in-house designers which allows quality reassurance checks on each logo design as ideas can be shared among various talented designers. The experience and expertise of our team allow us to offer such low prices without compromising on quality. </p>
            <p>Our business model is built on the principle of low price and higher turnover of logos. We offer great service for any form of customers, be it individuals, sole traders, small companies or large corporations. If you would like to know more, then please feel free to  contact us</p>
            <h1><img src="<?php echo base_url(); ?>images/about_1.JPG" width="450" height="200" alt="Logodesign Guarantee Office" title="Logodesign Guarantee Office" /></h1>
            <h1>Company Mission Statement</h1>
            <p>We endeavor to offer quality custom made logos at the most affordable price in the world. We have satisfied over 1000 customers since becoming established in 2002. Currently, only approximately 1 in 50 customers ask for their money back.</p>
            <p>We intend to be the number one destination when anyone needs a quality logo. In addition, we provide an industry shattering <?php echo GUARANTEE_DAY; ?>-Day, 100% money&ndash;back guarantee to underscore our commitment to customer service. </p>
            <h1><img src="<?php echo base_url()."images/about_2.JPG";?>" width="450" height="200" alt="Logodesign Guarantee Office" title="Logodesign Guarantee Office" /></h1>
            <h1>Company Values</h1>
            <p>No-one should pay <?php echo CURRENCY.LOGO_PLUS ?> plus for their set of logos. Our business model is built on the principle of lower price and more satisfied customers. Large staffing allows ample time to be spent on each logo order, so as to ensure full customer satisfaction. Moreover, if we do not offer quality work specific to a customer&rsquo;s needs, then he or she may ask for their money back. Thus we pursue every effort to avoid this and guarantee quality logos. </p>
            <h1><img src="<?php echo base_url(); ?>images/about_3.JPG" width="450" height="200" title="Logodesign Guarantee Office" alt="Logodesign Guarantee Office" /></h1>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="col3-side-bar">
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
      </div>
      <div class="clear"></div>
      <div class="offer-about" align="center">
        <?php include_once("includes/reseller/blue-offer.php") ?>
      </div>
      
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
</body>
</html>