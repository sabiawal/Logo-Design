<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Web Design services by professional web designers </title>
<meta name="description" content="web design services by professional web designers, web page design services, website design service, web site development services, affordable web design, custom web design, web design service company, web designers, web design firm and web designers at affordable prices."/>  
<meta name="keywords" content="web design, web site design, website design, web page design, web designers, web design company, web development, web design firms, web design service, affordable web design, custom web design, cheap web design, web design companies, professional web design, web design business, US web design, USA web design,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css_web/block.css" rel="stylesheet" type="text/css" />
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
<div class="col-main howworks">
<h1>Order Online Today </h1>
	<div class="col2-set">
            <div class="col-1">
              <img src="<?php echo base_url()."images/webdesign/web_hw1.jpg" ?>" alt="how works" title="how works" /> 
            </div>
            <div class="col-1 col-2">
            <div class="block-title"><h2>Creative Brief</h2></div>
            <div class="block-content">
            <p>We provide a brief questionnaire page online so we can understand what your requirements are. An account manager picks up the creative brief and assigns 2 designers to start work on your designs immediately. </p>
            <p>Our designers brainstorm for ideas so that your website is impressive and fits your business model perfectly.</p>
            </div>
            </div>
	</div>
    <div class="col2-set">
            <div class="col-1">
              <img src="<?php echo base_url()."images/webdesign/web_hw2.jpg" ?>" alt="how works" title="how works" /> 
            </div>
            <div class="col-1 col-2">
            <div class="block-title"><h2>Receive Initial Concepts </h2></div>
            <div class="block-content">
            <p>This is the exciting part. Our design experts get to work on your requests. You are guaranteed to receive the initial design concepts to review within 3 days after placing your order. We will provide the opportunity for you to voice your feedback.  </p>
            </div>
            </div>
	</div>
    <div class="col2-set">
            <div class="col-1">
              <img src="<?php echo base_url()."images/webdesign/web_hw3.jpg" ?>" alt="how works" title="how works" /> 
            </div>
            <div class="col-1 col-2">
            <div class="block-title"><h2>Revisions and Perfections </h2></div>
            <div class="block-content">
            <p>Our designers receive your feedback and start to make improvements to any parts of the design according to your feedback expressed. If needed, we will make free and unlimited improvements and adjustments and continue the revision process until you are 100% satisfied with the final design. Note, most firms limit revision rounds to 2 or 3 in order to lower their costs.</p>
            <p>After satisfying you with a design that fits your needs, we then programme your website. This involves making each link work and ensuring that the &ldquo;contact us&rdquo; page, for example, is able to direct messages to the email address you desire.</p>
            </div>
            </div>
	</div>
    <div class="col2-set">
            <div class="col-1">
              <img src="<?php echo base_url()."images/webdesign/web_hw4.jpg" ?>" alt="how works" title="how works" /> 
            </div>
            <div class="col-1 col-2">
            <div class="block-title"><h2>Web Completion</h2></div>
            <div class="block-content">
            <p>Once you are 100% satisfied we will upload the site live. Any person, anywhere in the world will be able to see what you have to offer them. Business really starts to get exciting.</p>
            <p>In addition, we provide a free e-book written by our internet marketing experts to help you with internet marketing strategies. We wish to be your contact for any help you may need with your website. Unlike, other firms, we don&rsquo;t just move on to the next client, but instead provide life-long customer support and provide 10% discount on any further design requirements.</p>
            </div>
            </div>
	</div>
 <div align="center"><a href="<?php echo site_url('reseller_web/index');?>" ><img src="<?php echo base_url()."images/webdesign/seeourpkgs.jpg" ?>"  /></a></div>   
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