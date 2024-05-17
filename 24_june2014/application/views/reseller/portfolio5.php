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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/inthedoghouse.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Sonya Newton</h3>
              <h4>Chief Marketing officer,In The Dog House</h4>
              <p>The Logo Design Guarantee crew helped us get our business 100% on track. It is now reflecting the identity we expected for our business.</p>
              <p>Thank you,<br />
                Sonya</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/kanobe.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>William Nelson</h3>
              <h4>Chairman, Kanobe </h4>
              <p>Well, from a technical point of view this logo is perfect. And then the simplicity adds a plus point to it. Well done Logo Design Guarantee team! You have done it. Another outstanding logo work and since it is I&rsquo;ve seen the benefits in my firm, I want to personally thank you. </p>
              <p>Nice job !<br />
                Will N.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/lacamilla.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Fabricio Duarte</h3>
              <h4>Chairman, La Camila</h4>
              <p>The logo you produced has given my business a unique identity. You can see what my business is all about just by seeing the logo. You followed my directions perfectly and added more. It turned out perfectly. I&rsquo;m glad I chose you.</p>
              <p>Thanks. <br />
                Fabricio Duarte</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/mario.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Mario Vergara</h3>
              <h4>Owner, Mario Vergara Photography </h4>
              <p>I must say, it&rsquo;s like you read my mind; it&rsquo;s just the specific logo I imagined to enable my business to ascend. </p>
              <p>Thanks again, <br />
                Mario</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio6'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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