<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css_web/pagination/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()."js/pagination/jquery-1.3.2.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url()."js/pagination/jquery.paginate.js"; ?>"></script>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
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
      <div class="portfolio_text">
      <?php       
    if(date('d')<10){    
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
      <h1>Our Web Portfolio: <?= $portfolio_date; ?></h1>
      <h2><span class="text-black">Below is a <strong>selection</strong> of the websites we have created <br />in the month of <strong><?= $portfolio_date; ?>.</strong></span></h2>
      <p>Please note that our portfolio below is not exhaustive and <strong>just includes our recent designs.</strong></p>
      <p>We have designed over <strong>1,000 websites</strong> and are capable of creating custom websites for you<br /> for any industry. We can also design any type of website from <strong>simple brochure sites</strong> to<br /> <strong>large ecommerce</strong> websites. We often add many custom things for free for our customers,<br /> so call us today and we can usually do that for you.</p>
      <h2>Its true...We are so much better: &quot;It&rsquo;s all in the detail...&quot;</h2>
      <p>Give us a call so we can tell you how our websites are designed with a 
<strong><br />distinct competitive advantage</strong>. We will guide you through our portfolio <br />
to show you how our designers create much <strong>more profitable websites
<br />than our competitors.</strong>
</p>
<p>When designing your website, we do not only put our full effort in to the big 
<br />obvious designs, e.g. flash animations but we also pay careful attention to the
<br />subtle, smaller details that can <strong>make your website really stand out.</strong>
</p>      
<p>These fine details are critical to get the <strong>right response from your customers.</strong> 
<br />Fine details can increase sales or phone conversions by over 50%. It&rsquo;s all about
<br />results right?
</p>     
 <h1>What most customer&rsquo;s don&rsquo;t know and why it&rsquo;s <br />hurting them...</h1>
 <p>When you call our <strong>friendly customer support specialists</strong>, feel free to ask<br />
for explanations and demonstrations of all our package features. We will<br />
show you our portfolio sites in detail and explain the different features<br /> 
that all add up to an excellent design.
</p>
 <p>We will tell you honestly what <strong>other companies don&rsquo;t provide</strong> and how <br />
they try and rip you off by charging you down the road!
</p>
 <h2>Call us now at <?= PHONE_NO; ?></h2>
      </div>
     <div id="paginationdemo" class="portfolio">
                 <ul style="height:735px;">
                <div id="p1" class="pagedemo _current" style="">
         <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>
                </div>
				<div id="p2" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>             </div>
				<div id="p3" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>          
                </div>
				<div id="p4" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>       
                </div>
				<div id="p5" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>       
                </div>
				<div id="p6" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>       
                </div>
				<div id="p7" class="pagedemo" style="display:none;">
           <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>      
                </div>
				<div id="p8" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>       
                </div>
				<div id="p9" class="pagedemo" style="display:none;">
          <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>       
                </div>
				<div id="p10" class="pagedemo" style="display:none;">
         <li><a href="http://seawiseconstruction.com/" target="_blank" ><img src="<?php echo base_url()."images/webdesign/portfolio/01_civil.jpg"; ?>" /></a></li>
         <li><a href="http://lovecoffeemix.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/02_coffee.jpg"; ?>" /></a></li>
         <li><a href="http://kimandlizbeauty.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/03_beauty.jpg"; ?>" /></a></li>
         <li><a href="http://onetwoeducation.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/04_education.jpg"; ?>" /></a></li>
         <li><a href="http://queensinterior.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/05_interior.jpg"; ?>" /></a></li>
         <li><a href="http://justforusflowers.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/06_flower.jpg"; ?>" /></a></li>
         <li><a href="http://drewsrealestate.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/07_realestate.jpg"; ?>" /></a></li>
         <li><a href="http://wedddingbliss.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/08_wedding.jpg"; ?>" /></a></li>
         <li><a href="http://wavefitnessclub.com/" target="_blank"><img src="<?php echo base_url()."images/webdesign/portfolio/09_fitness.jpg"; ?>" /></a></li>        
                </div>
               <div style="clear:left"></div>
                </ul>
				<div id="portfolio" style="margin:0 0 0 20px;">                   
                </div>
            </div>
     <div class="portfolio_btn"> <div align="center" class="button"><a href="<?php echo site_url('reseller_web/story'); ?>">Our Success Stories! &gt;&gt;</a></div></div>
<div class="portfolio_text ">
<h1>What is the No.1 question our customers ask us?...</h1>
<h2>Q. &ldquo;What sets you apart from other web design companies?&rdquo;</h2>
<p style="text-indent:50px;">A. Here are the <strong>top 4 things we offer you</strong> that other companies don&rdquo;t.</p>
<ul class="success_story">
<li><span>We offer you many important features that are <br />
<span>necessary for a great performing website, FREE!</span></span>
<p> We offer you hosting, a content management system, unlimited revisions,<br /> 
flash animation, copyright, mouse-over effects, specialised web designer, <br />
specialised programmer, specialised logo designer, 24/7 phone tech support  <br />
and much more.</p></li>
<li><span>We offer &ldquo;by far&rdquo; the best money back guarantee <br />
  <span>in the industry...YES IT&rdquo;S HUGE! </span>
</span>
<p>It&rdquo;s a full <strong><?php echo GUARANTEE_DAY; ?>-day</strong>, 100% money back guarantee... no fees, no questions.</p>
<p>Be careful; don&rsquo;t trust a company that does not provide a lengthy money back <br />
guarantee. It reflects pathetically on their weak customer service. Ask them and <br />
you will find that no-one beats our guarantee.
</p>
<p>Few competitors have a 100% money back guarantee and none have a guarantee <br />
as long as ours. We can offer this because of our amazing <strong>98% customer satisfaction rate</strong>. 
</p>
<p>We believe none of our competitors have a satisfaction rate this high, so they simply <br />
can&rdquo;t offer a guarantee as strong as ours as otherwise they would go out of business. <br /> 
It shows real lack of substance and reflects weak management.  <strong>Opt for quality and <br />
substance. </strong>   
</p>
<p></p>
</li>
<li><span>Yes, we have a large and well established team so we<br />
     <span> can offer you 24/7/365 phone support!  </span> 
</span><p>Most design companies will offer you just 9-5 support. It says little of their commitment <br />
to customer service. They just want to keep their costs low. Don&rsquo;t settle for it!
</p>
<p>We offer in-house phone support 24/7/365. There may be natural glitches to a website, <br />
and having 24/7/365 phone support allows you to get the help you deserve. Also, it&rsquo;s very<br />
useful if you want to get your project going fast.
</p>
</li>
<li><span>You can speak to the following specialists on the phone... <span>your web designer(s), programmer, logo designer</span> <br />
<span>and SEO/Marketing specialist.</span>
</span>
<p>That&rsquo;s right 4 people in total work on your project and you have opportunity <br />
to speak to them on the phone free of cost with no time constraints.
</p>
<p>We allow you access to <strong>team up with the people</strong> actually working on your<br />
project. You can learn first-hand from <strong>industry specialists</strong> over the phone. </p>
<p>Other companies just allocate you an account manager and outsource most <br />
works to India. The main phone service they have is for sales. Again it&rdquo;s just <br />
a way for them to cut costs. Don&rsquo;t settle for it. <strong>Opt for quality! Call us today.</strong>
</p>
</li>
</ul>
</div>
 <div class="portfolio_btn"> <div align="center" class="button"><a href="<?php echo site_url('reseller_web/story'); ?>">Our Success Stories! &gt;&gt;</a></div></div>   
      </div>
      <div class="side-bar">
            <?php $this->load->view('blocks/best-value'); ?>
            <?php $this->load->view('blocks/live-support'); ?>
            <?php $this->load->view('blocks/charity'); ?>
            <?php $this->load->view('blocks/security-sidebar'); ?>
            <?php $this->load->view('blocks/mcafee'); ?>
            <!--  -->
            <?php $this->load->view('blocks/awards'); ?>
            
            <?php $this->load->view('blocks/customer-support'); ?>
        </div>
      <div class="clear"></div>
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