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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/avision.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Akiva Hunter</h3>
              <h4>Managing Director, Avision capital management, LLC </h4>
              <p>The way you provide improvements over improvements is just amazing-and for free! The result is worth much more than the package price. Logo Design Guarantee is an excellent company. I don&rsquo;t know how you do it, but keep it up. Anyone would be happy with such a great service.</p>
              <p>Thanks and way to go!<br />
                Akiva Hunter </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/bullship.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Timothy Sykes</h3>
              <h4>Owner, Bullship Press </h4>
              <p>I know that a logo is something that plays a major role in the success of any business. A good logo can help the company stamp its presence in the market with its identity. I got a pretty good logo from you guys. I would recommend you to any small business that needs an inexpensive and high quality logo.</p>
              <p>Thank you for the great logo, <br />
                Tim S. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/christopher.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Christopher Murray</h3>
              <h4>Chrisopher Murray Personal Training </h4>
              <p>The color combination of my logo has given me a new set of corporate colors for my company and now I know that every color can make a different, but significant impact. What I got is more than just a logo. I got an original corporate identity for my organization.</p>
              <p>Well done Folks, <br />
                CJM </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/chya.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Allen Nells</h3>
              <h4>Owner, Color your herd Alpacas</h4>
              <p>We wanted you to know what wonderful remarks we have received for our logo since revamping it through you. We have recommended many people to your service and rightly so. We have a new feel for our business and we just wanted to say thanks for your effort. </p>
              <p>Thanks, <br />
                Allen Nells</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio3'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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