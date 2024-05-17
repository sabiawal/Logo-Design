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
    <div class="main col2-right-layout">
      <div class="col-main">
        <div class="footer-link casestudy">
          <h1>Case study </h1>
          <div class="flash-object">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="558" height="166" title="case study">
              <param name="movie" value="<?php echo base_url(); ?>swf/case.swf" />
              <param name="quality" value="high" />
              <embed src="<?php echo base_url(); ?>swf/case.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="558" height="166"></embed>
            </object>
          </div>
          <p>I would like to say thank you for my company logo you made for me. I was very impressed from the different designs you made and the price for it all! You made it very easy to pick from all the awesome designs you made.</p>
          <p> I've used the logo on my trucks and business cards and I still get complements! I  have no hesitation to give them your website info. Again thanks for the logo and keep up the good work,</p>
          <p><span class="text-14">Isaac Gonzalez<br />
            CEO<br />
            Trini Home Inspection, LLC<br />
            Mechanicsville, VA<br />
            Web/<strong><a href="http://www.trinihomeinspection.com" target="_blank"> www.trinihomeinspection.com</a></strong></span></p>
          <p><span class="text-10 text-green"><strong>Below are all the samples we sent Mr Issac Gonzalez for him to choose from. Note, he requested for the color to be black and white only.</strong></span></p>
          <div align="center">
            <h1><img src="<?php echo base_url(); ?>images/trinisamples.jpg"  alt="triniti logo sample" title="triniti logo sample"/></h1>
          </div>
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