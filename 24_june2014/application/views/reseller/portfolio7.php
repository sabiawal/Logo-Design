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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/pamark.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Mark Madrack</h3>
              <h4>CEO, Pamark</h4>
              <p>Yeah. I would sure love to leave a comment. Your design works are great and the co-operation that I experienced had closed the gap between what I wanted and what you gave me. The logo is fantastic. </p>
              <p>Thank you, <br />
                Mark M.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/pickurbean.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Cherillyn Belli</h3>
              <h4>CEO, Pick Your Bean </h4>
              <p>How can I describe your company? Little investment for a superb logo. I would recommend anyone to Logo Design Guarantee.</p>
              <p>Thank you so much,<br />
                Cherillyn </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/pmb.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Heidi Wight</h3>
              <h4>Chairman, PMB</h4>
              <p>Simplicity was what I needed. I found just that when using your service.</p>
              <p>Thanks Logo Design Guarantee, <br />
                Heidi Wight</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/prestons.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Rosina Coker</h3>
              <h4>Founder, Rerston's Garden Service </h4>
              <p>Your service was more than satisfactory. I found your staff easy to talk to and I felt they were really taking my points in to account. When my logo was delivered, I was amazed how good it was, especially considering the small amount I paid for it.</p>
              <p>Thanks, <br />
                Rosina</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio8'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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