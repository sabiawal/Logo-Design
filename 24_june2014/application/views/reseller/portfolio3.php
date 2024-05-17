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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/conway.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Bill Stacey</h3>
              <h4>Owner, Conway prowash</h4>
              <p>All I can say is WOW!. Your service is perfect. There is no hassle, no wait, no hidden fees and it&rsquo;s so cheap. If there is one thing I value in a business, it is being effective and simplistic. You have done a great job and anyone who turns down this service is a moron.</p>
              <p>Bill. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/csi.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Joe Carmen</h3>
              <h4>Managing Director, CSI Bridgeport Public School </h4>
              <p>It&rsquo;s pretty amazing, how you work around the clock and deliver right on time. The designs were excellent. You will never know how much you helped my business move forward and I can&rsquo;t thank you enough. </p>
              <p>Thank you, <br />
                Joe C. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/darkknignt.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Justina Lafferty</h3>
              <h4>President, Impact Teen ministry </h4>
              <p>When I received the logo concepts, I found it quite difficult to choose one&ndash;they were all great. It was one of the few times when I actually got more for my money. I was thoroughly satisfied with my logo and even happier with the price.</p>
              <p>Thank you so much, <br />
                Justina Lafferty. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/diversified.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Martin Stevens</h3>
              <h4>Managing Director, Diversified</h4>
              <p>You fit my design specifications perfectly. When I received my concepts, they were all good, but one of them was the logo I had always pictured. I never thought I would be able to get the perfect logo for my business. I always thought that going through that process would take an infinite amount of time and money. But to my pleasant surprise, I got the logo of my dreams in 24 hours and at a very reasonable price.</p>
              <p>Thank you <br />
                Martin Stevens. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/drugtest.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Angie Hope</h3>
              <h4>Director, Drug test Services of East Texas</h4>
              <p>You have a great design team, reliable customer service and a very friendly and professional working style. I have to say thank you for the great logo and timely responses of my queries.</p>
              <p>Thanks again, <br />
                Angie. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio4'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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