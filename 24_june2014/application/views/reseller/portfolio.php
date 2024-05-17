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
        <div class="portfolio">
          <h1>Our client lounge</h1>
          <h1><img src="<?php echo base_url();?>images/clientlounge.jpg" title="client lounge" alt="client lounge" /></h1>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/3x.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Debra Doubek</h3>
              <h4>Managing Director, 3X Business Solutions </h4>
              <p>I never thought that my logo would turn out to be so good. I think you are a very well priced logo design company. I would recommend you to anyone looking for a great logo at an affordable cost.</p>
              <p>Thanks a lot.<br />
                Debra</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/adminent.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Isaiac Estrada</h3>
              <h4>Managing Director, Admin enterprises </h4>
              <p>The logos look awesome!!! The color is excellent. The 3D (ae) is excellent. Reflection and shadowing are amazing. The font is excellent. </p>
              <p>Thank you. </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/advancedweb.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Presley Mixon</h3>
              <h4>Managing Director, Advance web designs. </h4>
              <p>I would just like to thank the Logo Design Guarantee company. I started a small business a few years ago and used the &lsquo;best&rsquo; logo design company at the time. It charged around 700 and their designs didn&rsquo;t even come close to yours. How do you manage to produce these incredible logos at such a low price? If I ever need a logo again, I know what company I&rsquo;m using.</p>
              <p>Thanks. <br />
                Presley Mixon </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/anchor.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Tariq DAbdullah</h3>
              <h4>MD, Anchor Accounting Services, LLC. </h4>
              <p>I must thank you for the great logos I received. They are fantastic! I was particularly pleased with the customer support team. They were very patient, answered my questions very well and made me feel secure that I was going to get exactly what I wanted. My logo fits my business needs very well and I couldn&rsquo;t be happier.</p>
              <p>Thanks again, <br />
                Tariq A.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/ascf.jpg" title="3x logo" alt="3x logo" /></div>
            <div class="portfolio-text">
              <h3>Jenny Dantone</h3>
              <h4>Owner, ASCF Consulting Corp. </h4>
              <p>When I first thought of getting a logo for my business, every penny counted. When I was browsing through the other websites, getting a logo looked like it would be out of the question. I couldn&rsquo;t really afford any of them. But then I stumbled upon Logo Design Guarantee. I have to admit, I was a little skeptical at first. I naturally assumed that a logo this cheap would be a truly pathetic one. </p>
              <p>Thanks to Martin and his team. <br />
                Jenny.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="<?php echo site_url('reseller/portfolio2'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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