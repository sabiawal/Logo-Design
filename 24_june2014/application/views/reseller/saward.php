<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('blocks/analytics'); ?>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
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
      <div class="col-main">
        <div class="footer-link">
          <h1 style="font-size:42px; color:#000; margin-top:20px;">The Summit International Awards!</h1>
          <br/>
          <p style="font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray; line-height:25px; word-spacing:1px;">Going beyond what is expected or asked... That is <span style="color:red;">excellence.</span> <br/>
            And that is what the Summit International Awards pioneers. </p>
          <p style="color:#000;">The Summit International Awards is an international award- <br/>
            giving body that covers over 50 countries, over five continents.</p>
          <p style="color:#000;">&quot;Effective communication&quot;: The Summit International Awards<br/>
            focus on how effectively a design can communicate a person or <br/>
            a company, the design being <span style="color:red;">simple and reasonably priced.</span></p>
          <p style="color:#000;">Also, winning in the awards provides not only our company,<br/>
            but yours as well, <span style="color:red;">ample opportunities to advertise,</span> for free.</p>
          <p style="color:#000;">That being said, <?php echo SITE_NAME2 ?> keeps a close<br/>
            look on the feedbacks from the Summit International Awards. </p>
          <p style="color:#000;">This is impertinent; we recognize that a design should be<br/>
            able to properly and <b>effectively communicate</b> what your <br/>
            company needs to communicate...</p>
          <p style="color:#000;"><i>And that it should be nothing short of <span style="color:red;">excellent.</span></i></p>
          <p style="color:#000;">As we strive to fulfill your needs; or to even go beyond that...<br/>
            We work hard to ensure that our quality retains that amount<br/>
            of excellence, while charging you with <b>the lowest prices.</b></p>
          <p style="color:#000;">No other company can give you this; see our <a href="<?php echo base_url();?>reseller/portfolio" style="color:#06C;"><u>portfolio</u></a> now!</p>
          <?php include_once("includes/reseller/blue-offer.php"); ?>
        </div>
      </div>
      <div class="side-bar">
        <?php 
            $this->load->view('blocks/money-back'); 
            $this->load->view('blocks/live-support'); 
            $this->load->view('blocks/charity'); 
            $this->load->view('blocks/security-sidebar');
            /////////////
            $this->load->view('blocks/awards'); 
            $this->load->view('blocks/testimonials'); 
            $this->load->view('blocks/customer-support');            
        ?>
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