<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<!-- Scripts Portfo Logo -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>lib/jquery.ad-gallery.css" />
<script type="text/javascript" src="<?= base_url()?>lib/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>lib/jquery.ad-gallery.js"></script>
<script type="text/javascript">
$(function()
{
    var galleries = $('.ad-gallery').adGallery();    
    $('#switch-effect').change(function() 
    {
        galleries[0].settings.effect = $(this).val();
        return false;
    });
    $('#toggle-slideshow').click(function()
    {
        galleries[0].slideshow.toggle();
        return false;
    });
});
</script>
<!-- Ends Scripts -->
<?php include_once("includes/logo-design/analytics.php"); ?>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="top-container">
    <div class="top">
      <?php include_once("includes/logo-design/menu-banner.php"); ?>
      <script language="javascript" type="text/javascript">
document.getElementById('nav-portfolio').className='selected';
</script>
    </div>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main">
        <div class="portfolio">
          <!-- New Portfo -->
            <div class="portfolio-wrap"> 
              <!-- Recent Logos -->
              <div class="recent-logos">
                <div class="recent-logo-bg-repeat">
                  <div class="recent-logo-bg-top">
                    <div class="recent-logo-bg-bottom">
                    <?php       
    if(date('d')<=7){    
    $portfolio_month = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
    $portfolio_date  = trim(date("m Y",$portfolio_month));
    $x               = explode(' ',$portfolio_date);    
    $mth = $x[0];
    $mth = (int)$mth;      
    $month = array('','January','February','March','April','May','June','July','August','September','October','November','December');  
        if($mth ==12)
        $portfolio_date = $month[$mth].' '.(date('Y')-1);
        else
        $portfolio_date = $month[$mth].' '.(date('Y'));
    }
    else{$portfolio_date = date("F Y");}    
    ?>
                      <h2>Recent Clients From 
                        <?= $portfolio_date; ?>
                      </h2>
                      <div class="recently-added-logos"> 
                        <!-- Recent Logo Slider -->
                        <div id="gallery" class="ad-gallery">
                          <div class="ad-image-wrapper"> </div>
                          <div class="ad-controls"> </div>
                          <div class="ad-nav">
                            <div class="ad-thumbs">
                              <ul class="ad-thumb-list">
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/1.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/1.jpg" class="image0" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/2.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/2.jpg"  class="image1" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/3.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/3.jpg"  class="image2" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/4.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/4.jpg"  class="image3" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/5.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/5.jpg" class="image4" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/6.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/6.jpg"  class="image5" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/7.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/7.jpg"  class="image6" /> </a> </li>
                                <li> <a href="<?php echo base_url()?>images/images-portfolio/8.png"> <img src="<?php echo base_url()?>images/images-portfolio/thumbs/8.jpg"  class="image7" /> </a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- Ends Recent Logo Slider --> 
                        <!-- Btn -->
                        <div class="see-our-packages-now"> <span><img src="<?php echo base_url()?>images/excited.png" /></span> <span><a href="<?= site_url('packages'); ?>"> <img src="<?php echo base_url()?>images/see-our-packages-now.png" /> </a></span> </div>
                        <!-- End Btn --> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Ends Recent Logos --> 
              <!-- Logo by industry -->
              <div class="logos-by-category-wrap">
                <div class="logos-by-category">
                  <div class="logos-by-cat-bg-repeat">
                    <div class="logos-by-cat-bg-top">
                      <div class="logos-by-cat-bg-bottom">
                        <h2>See Logos By Industry!</h2>
                        <div class="logo-cats">
                          <ul>
                            <li><a href="<?= site_url('industry/Accounting-Logo-Design')?>">Accounting</a></li>
                            <li><a href="<?= site_url('industry/Attorney-and-Legal-Logo-Design')?>">Attorney and Legal</a></li>
                            <li><a href="<?= site_url('industry/Automotive-Logo-Design')?>">Automotive</a></li>
                            <li><a href="<?= site_url('industry/Biotechnology-and-Pharmaceutical-Logo-Design')?>">Biotechnology and Pharmaceutical</a></li>
                            <li><a href="<?= site_url('industry/Church-and-Religious-Logo-Design')?>">Church and Religious</a></li>
                            <li><a href="<?= site_url('industry/Construction-Logo-Design')?>">Construction</a></li>
                            <li><a href="<?= site_url('industry/Consulting-Logo-Design')?>">Consulting</a></li>
                            <li><a href="<?= site_url('industry/Dental-Logo-Design')?>">Dental</a></li>
                            <li><a href="<?= site_url('industry/Education-Logo-Design')?>">Education</a></li>
                            <li><a href="<?= site_url('industry/Entertainment-Logo-Design')?>">Entertainment</a></li>
                           </ul>
                           <ul>                            
                            <li><a href="<?= site_url('industry/Event-Logo-Design')?>">Event</a></li>
                            <li><a href="<?= site_url('industry/Financial-Services-Logo-Design')?>">Financial Services</a></li>
                            <li><a href="<?= site_url('industry/Golf-Courses-Logo-Design')?>">Golf Courses</a></li>
                            <li><a href="<?= site_url('industry/High-Tech-Logo-Design')?>">High-Tech</a></li>
                            <li><a href="<?= site_url('industry/Illustrative-Logo-Design')?>">Illustrative</a></li>
                            <li><a href="<?= site_url('industry/International-Logo-Design')?>">International</a></li>
                            <li><a href="<?= site_url('industry/Internet-Logo-Design')?>">Internet</a></li>
                            <li><a href="<?= site_url('industry/Landscaping-Logo-Design')?>">Landscaping</a></li>
                            <li><a href="<?= site_url('industry/Medical-Logo-Design')?>">Medical</a></li>
                            <li><a href="<?= site_url('industry/Networking-Logo-Design')?>">Networking</a></li>
                            <li><a href="<?= site_url('industry/Pool-and-Spa-Logo-Design')?>">Pool and Spa</a></li>
                           </ul>
                           <ul>                           
                            <li><a href="<?= site_url('industry/Real-Estate-Development-Logo-Design')?>">Real Estate Development</a></li>
                            <li><a href="<?= site_url('industry/Realtor-Logo-Design')?>">Realtor</a></li>
                            <li><a href="<?= site_url('industry/Restaurant-Logo-Design')?>">Restaurant</a></li>
                            <li><a href="<?= site_url('industry/Retail-Logo-Design')?>">Retail</a></li>
                            <li><a href="<?= site_url('industry/Salon-Day-Spa-Logo-Design')?>">Salon/Day Spa</a></li>
                            <li><a href="<?= site_url('industry/Service-Industries-Logo-Design')?>">Service Industries</a></li>
                            <li><a href="<?= site_url('industry/Travel-Logo-Design')?>">Travel</a></li>
                            <li><a href="<?= site_url('industry/Off-The-Wall-Logo-Design')?>">Off The Wall</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="logo-cat-right">
                  <div class="logo-cat-right-content">
                  	<h2>Unique, <span>Devoted Support <sup>TM</sup></span></h2>
                  	<div class="support-list">
                  		<ul>
                  			<li><span class="bold">Hand-crafted</span> logo process <br /> from the very beginning!</li>
                  			<li>LogoTalk <sup>TM</sup> <span class="bold">Talk to your designer</span> <br /> anytime you want!</li>
                  			<li><span class="bold">Award-winning <?= COUNTRY; ?> designers!</span> <br /> All in-house! Work with the best!</li>
                  			<li><span class="bold"><?= GUARANTEE_DAY; ?> - Day</span>, Money Back Guarantee. <br />By far the biggest in the industry!</li>
                  			<li>We have the <span class="bold">most <?= COUNTRY; ?> phone staff</span> <br /> in the logo sector!</li>
                  			<li><span class="bold">Best Price Guarantee!</span>- We'll beat <br /> any like-to-like service by 10%</li>
                  			<li><span class="bold">LogoVote <sup>TM</sup></span> - Use our patented system to let your friends vote on their favourite logo sample! Get Feedback!</li>
                  		</ul>
                  	</div>
                  <!-- Test -->
                  	<h2><span>Fantastic Pricing</span></h2>
                  	<div class="fantastic-pricing">
                  		<a href="">
                  			<div class="pack-info pack-silver">
                  				<span class="pack-name">Silver</span>
                  				<span class="pack-price"><?= CURRENCY.Silver_Logo_Package_Price; ?></span>
                  				<span class="pack-sep">|</span>
                  				<span class="pack-concept">6 Concepts</span>
                  			</div>
                  		</a>
                  		<a href="">
                  			<div class="pack-info pack-elite">
                  				<span class="pack-name">Elite</span>
                  				<span class="pack-price"><?php echo CURRENCY.Elite_Logo_Package_Price; ?></span>
                  				<span class="pack-sep">|</span>
                  				<span class="pack-concept">12 Concepts</span>
                  			</div>
                  		</a>
                  	</div>
                  	<!-- TEst -->
                  	<a href="<?= site_url('packages'); ?>" class="see-our-packages"><img src="<?php echo base_url()?>images/see-our-package.png" /></a>
                  </div>
                </div>
              </div>
              <!-- Ends logo by industry --> 
            </div>
            <!-- Ends New Portfo --> 
          </div>
        <div class="offer-portfolio">
          <?php include_once("includes/logo-design/blue-offer.php") ?>
        </div>
      </div>
      <div class="side-bar">
        <?php 
include_once("includes/logo-design/sidebar-1.php");
include_once("includes/logo-design/sidebar-2.php");
?>
      </div>
      <div class="clear"></div> 
    </div>
  </div>
  <div class="footer-container">
    <?php include_once("includes/logo-design/footer.php"); ?>
  </div>
</div>
</body>
</html>