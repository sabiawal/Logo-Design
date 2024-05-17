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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/projectgolf.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Jeff Mitchell</h3>
              <h4>CEO, Project Golf</h4>
              <p>Now who can do better than that? I had never expected my logo to be this good. I have also received many compliments on the quality of my logo. I feel I must thank Logo Design Guarantee for a great logo like this. I will definitely recommend everyone looking for a logo to your website.</p>
              <p>Thanks,<br />
                Jeff</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/promised.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Pamela DuVal</h3>
              <h4>Chairman, Promised Hearts</h4>
              <p>You gave me the logo of my dreams. It fit my criteria perfectly and it has definitely boosted my confidence in business.</p>
              <p>Thank you. <br />
                Pam Du Val </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/raindrop.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Jimmy Abney</h3>
              <h4>Managing Director, Raindrop</h4>
              <p>If you want a great logo, if you want exact representation of your ideas in your logo, Logo Design Guarantee is the place to go. You will never get a chance to complain about anything when you work with them.</p>
              <p>Thanks a lot.<br />
                Jim</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/recordclocks.jpg" title="recordclocks" alt="recordclocks" /></div>
            <div class="portfolio-text">
              <h3>William Norman</h3>
              <h4>Owner, Record Clocks </h4>
              <p>Everyone should have a great logo like the one you provided me with. I wish I discovered your company sooner. You saved me a lot of time and money that was crucial to my business. I hope you continue to satisfy your customers the way I was.</p>
              <p>Good Luck and Thanks, <br />
                William Norman </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/rescue.jpg" title="rescue" alt="rescue" /></div>
            <div class="portfolio-text">
              <h3>Jay Jaffari</h3>
              <h4>Chairman, Rescuezone.com </h4>
              <p>Logo Design Guarantee is a professional logo design company with endless experience in the logo design industry. Anyone can see this through the sheer quality and friendly customer service you provide. </p>
              <p>Thanks, <br />
                Jay Jaffari</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio9'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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