<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <title>Accounting - Logo Design Guarantee</title>
  <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
  <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
  <link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico?id=<?php echo rand(); ?>" type="ico" />
  <?php include_once("includes/logo-design/analytics.php"); ?>

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
    
	if($(".logo-cats li.active").hasClass("endLi"))
		var nextUri = $(".logo-cats li.active").parent().next().children().children().attr("href");
	else 
        var nextUri = $(".logo-cats li.active").next().children().attr("href");
	//alert(nextUri);
    $(".next-industry a").attr("href",nextUri);
    $(document).scrollTop( $("#slider_show").offset().top ); 


	// next industry
//    $('span.next-industry a').hover(function () {
//        $(this).fadeIn(200).css('background', '#78A75C');
//        //alert ('ok');
//      }, function(){
//    	  $(this).fadeIn(200).css('background', '#339933');
//          });

     
  });
  </script>
  <!-- Ends Scripts -->
  <link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
  </head>
  <body style="background: #fff;">
  <div class="wrapper" style="background: #ffffff;">
    <div class="header-container">
      <?php include_once("includes/logo-design/header.php"); ?>
    </div>
    <div class="top-container">
      <div class="top" style="background: #ffffff;">
      
        <?php include_once("includes/logo-design/menu-banner-portfolio.php"); ?>
        <script language="javascript" type="text/javascript">document.getElementById('nav-portfolio').className='selected';</script> 
      </div>
    </div>
    <div class="main-container indus">
      <div class="main col1-layout" style="background: #ffffff; border: 1px solid #dddddd; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom: none; margin-top: 20px;">
        <div class="col-main">
          <div class="portfolio"> 
            <!-- New Portfo -->
            <div class="portfolio-wrap">              
              <!-- Logo by industry -->
              <div class="logos-by-category-wrap by-indus">
                <div class="logos-by-category">
                  <div class="logos-by-cat-bg-repeat">
                    <div class="logos-by-cat-bg-top">
                      <div class="logos-by-cat-bg-bottom">
                        <h2>See Logos By Industry!</h2>
                        <div class="logo-cats">
                          <ul id="industry">
                            <li class="<?php if($this->uri->segment(2)=="Accounting-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Accounting-Logo-Design')?>">Accounting</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Attorney-and-Legal-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Attorney-and-Legal-Logo-Design')?>">Attorney and Legal</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Automotive-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Automotive-Logo-Design')?>">Automotive</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Biotechnology-and-Pharmaceutical-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Biotechnology-and-Pharmaceutical-Logo-Design')?>">Biotechnology and Pharmaceutical</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Church-and-Religious-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Church-and-Religious-Logo-Design')?>">Church and Religious</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Construction-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Construction-Logo-Design')?>">Construction</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Consulting-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Consulting-Logo-Design')?>">Consulting</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Dental-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Dental-Logo-Design')?>">Dental</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Education-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Education-Logo-Design')?>">Education</a></li>
                            <li class="endLi <?php if($this->uri->segment(2)=="Entertainment-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Entertainment-Logo-Design')?>">Entertainment</a></li>
                           </ul>
                           
                           <ul>                            
                            <li class="<?php if($this->uri->segment(2)=="Event-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Event-Logo-Design')?>">Event</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Financial-Services-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Financial-Services-Logo-Design')?>">Financial Services</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Golf-Courses-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Golf-Courses-Logo-Design')?>">Golf Courses</a></li>
                            <li class="<?php if($this->uri->segment(2)=="High-Tech-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/High-Tech-Logo-Design')?>">High-Tech</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Illustrative-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Illustrative-Logo-Design')?>">Illustrative</a></li>
                            <li class="<?php if($this->uri->segment(2)=="International-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/International-Logo-Design')?>">International</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Internet-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Internet-Logo-Design')?>">Internet</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Landscaping-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Landscaping-Logo-Design')?>">Landscaping</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Medical-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Medical-Logo-Design')?>">Medical</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Networking-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Networking-Logo-Design')?>">Networking</a></li>
                            <li class="endLi <?php if($this->uri->segment(2)=="Pool-and-Spa-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Pool-and-Spa-Logo-Design')?>">Pool and Spa</a></li>
                           </ul>
                           
                           <ul>                           
                            <li class="<?php if($this->uri->segment(2)=="Real-Estate-Development-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Real-Estate-Development-Logo-Design')?>">Real Estate Development</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Realtor-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Realtor-Logo-Design')?>">Realtor</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Restaurant-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Restaurant-Logo-Design')?>">Restaurant</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Retail-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Retail-Logo-Design')?>">Retail</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Salon-Day-Spa-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Salon-Day-Spa-Logo-Design')?>">Salon/Day Spa</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Service-Industries-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Service-Industries-Logo-Design')?>">Service Industries</a></li>
                            <li class="<?php if($this->uri->segment(2)=="Travel-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Travel-Logo-Design')?>">Travel</a></li>
                            <li class="endLi <?php if($this->uri->segment(2)=="Off-The-Wall-Logo-Design")echo "active";?>"><a href="<?php echo site_url('industry/Off-The-Wall-Logo-Design')?>">Off The Wall</a></li>
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
                  			<li><span class="bold">24/7 <?= COUNTRY; ?> phone</span> /live-chat/email support!</li>
                  			<li>Final files sent via email (<span class="bold">full HD files</span>)!</li>
                  			<li><span class="bold">100% original, custom-made </span> logos.<br /> No templates! No clipart!</li>
                  			<li>All files are <span class="bold">print/web ready</span>. The files allow you to resize without distortion!</li>
                  			<li>Logo concepts are 100% bespoke, <span class="bold">unique and different</span> to give you a variety of ideas!</li>
                  			<li>Revision <span class="bold">turnarounds within 24 hours! </span>Warning: Most firms take 4 weeks to complete a project!</li>
                  			
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
              
              
              <!-- Description -->
              <div class="industry-description">
                  	<?php include_once("includes/logo-design/industry-description.php"); ?>
                  </div>
              <!-- Ends Description -->
              
            </div>
            <!-- Ends New Portfo --> 
          </div>
        </div>
        <div class="side-bar">
          
        </div>
        <div class="clear"></div>
        <?php //include_once("includes/logo-design/seal-top.php"); ?>
      <br />
        <?php include("includes/logo-design/payment_seals.php"); ?>
        <br />
        <?php include("includes/logo-design/partners.php"); ?>
        <br />
        <?php include("includes/logo-design/phone-banner-bottom.php"); ?>
        <br />
      </div>
    </div>
    <div class="footer-container indus-footer">
      <?php include_once("includes/logo-design/footer.php"); ?>
    </div>
  </div>
</body>
</html>