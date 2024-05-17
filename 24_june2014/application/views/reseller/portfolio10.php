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
      <div class="col-main"> <a href="#" id="portfolio" name="portfolio"></a>
        <div class="portfolio">
          <h1>Our client lounge</h1>
          <h1><img src="<?php echo base_url();?>images/clientlounge.jpg" title="client lounge" alt="client lounge" /></h1>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/tdg.jpg" title="tdg" alt="tdg" /></div>
            <div class="portfolio-text">
              <h3>Andrew DiMaio</h3>
              <h4>Chairman, The Davian Group </h4>
              <p>Now who can do better thank that. I had never expected this good would be my logo. and I have also got appraisals from a lot of people for this. I want to thank Logo Design Guarantee for a great logo like this. And I promise I will redirect everyone looking for a logo to your website.</p>
              <p>Thanks you again.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/thirdchannel.jpg" title="thirdchannel" alt="thirdchannel" /></div>
            <div class="portfolio-text">
              <h3>Peter Ang</h3>
              <h4>Managing director, Third Channel Corporation </h4>
              <p>What a tremendous work!!! I cannot stay forward without saying thank you. The logo is superb. And I hope it is definitely gonna hike my corporate status.</p>
              <p>Thank you Again! </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/twistedmonekey.jpg" title="twistedmonekey" alt="twistedmonekey" /></div>
            <div class="portfolio-text">
              <h3>Joseph Morris </h3>
              <h4>Chairman, Twisted Monkey Studios</h4>
              <p>If you want a great logo, if you want exact representation of your ideas in your logo, Logo Design Guarantee is the place you should go. You will never get a chance to comment on anything when you work with them. </p>
              <p>Thanks. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/unikexpo.jpg" title="unikexpo" alt="unikexpo" /></div>
            <div class="portfolio-text">
              <h3>Kayoko Gutierrez</h3>
              <h4>Owner, Unik Expo</h4>
              <p>When I had thought about giving the logo order to an online firm I was skeptical. But the price was very affordable and I thought of giving it a try. Lets say I&rsquo;m in no way disappointed. I m glad that I gave u a shot.</p>
              <p>Well done!</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/urbankaos.jpg" title="urbankaos" alt="urbankaos" /></div>
            <div class="portfolio-text">
              <h3>Timothy Oberg </h3>
              <h4>Director, UrbanKAOS!</h4>
              <p>Magnificent ! I am overwhelmed by the batches of logos that I received. I will sure forward anyone looking for a good logo to your site.</p>
              <p>Thanks Logo Design Guarantee.</p>
            </div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a></div>
        </div>
        <div class="offer-portfolio">
          <?php include_once("includes/reseller/blue-offer.php") ?>
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
      <?php //include_once("includes/logo-design/seal-top.php"); ?>
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