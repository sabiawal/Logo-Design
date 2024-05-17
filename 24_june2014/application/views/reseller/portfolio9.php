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
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/responsiblefam.jpg" title="responsiblefam" alt="responsiblefam" /></div>
            <div class="portfolio-text">
              <h3>Brittany Michaelianl</h3>
              <h4>CEO, Responsible Family Company </h4>
              <p>I wanted to make my company feel both professional and approachable. The logo you gave me displayed this perfectly. I want to personally thank you for driving my business forward without much effort on my side.</p>
              <p>Thanks,<br />
                Brittany Michaelian </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/rocknbaby.jpg" title="rocknbaby" alt="rocknbaby" /></div>
            <div class="portfolio-text">
              <h3>Kim Katnik</h3>
              <h4>Chairman, Rock n Baby Boutique </h4>
              <p>I just wanted to drop a note and tell Logo Design Guarantee how happy we are to get such a great logo for our company at such a low price. You have been outstanding all the way.</p>
              <p>Thanks for everything.<br />
                Kim </p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/scorebb.jpg" title="scorebb" alt="scorebb" /></div>
            <div class="portfolio-text">
              <h3>Refiloe Lethunya</h3>
              <h4>Director, Score Basketball Academy</h4>
              <p>I would like to personally thank Logo Design Guarantee and the crew for completing my logos in a timely manner and producing a final project that my prospects and customers often compliment upon.</p>
              <p>Keep up the good work,<br />
                Refiloe Lethunya</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/shawway.jpg" title="shawway" alt="shawway" /></div>
            <div class="portfolio-text">
              <h3>Helen Shaw</h3>
              <h4>Owner,The Shaw Way</h4>
              <p>My logo looks great and I am utterly satisfied with the end result. I am eternally grateful.</p>
              <p>Thank you so much, <br />
                Helen S.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-list">
            <div class="folio-list-img"><img src="<?php echo base_url();?>images/logo-portfolio/somethingfishy.jpg" title="somethingfishy" alt="somethingfishy" /></div>
            <div class="portfolio-text">
              <h3>Nicholas DuBois</h3>
              <h4>Marketing Manager, Something Fishy</h4>
              <p>I would like to start out by saying how impressed my partner and I are with the first concepts of our logo.  We are truly amazed.  Hopefully one day you will see the logo in action and smile knowing where it was from!  Many pre-thanks for all the work.  The logo just &lsquo;wows&rsquo; us completely.</p>
              <p>Thanks a lot, <br />
                Nick DuBois.</p>
            </div>
            <div class="clear"></div>
          </div>
          <div class="portfolio-botton" align="center"><a href="javascript:history.go(-1);"><img src="<?php echo base_url();?>images/prev.gif" /></a><a href="<?php echo site_url('reseller/portfolio10'); ?>#portfolio"><img src="<?php echo base_url();?>images/next.gif" /></a></div>
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