<?php // Header for Web Design ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="web design services by professional web designers, web page design services, website design service, web site development services, affordable web design, custom web design, web design service company, web designers, web design firm and web designers at affordable prices."/>
    <meta name="keywords" content="web design, web site design, website design, web page design, web designers, web design company, web development, web design firms, web design service, affordable web design, custom web design, cheap web design, web design companies, professional web design, web design business, <?php echo COUNTRY ?> web design"/>
    <base href="<?php echo base_url() ?>" target="_self" /> <!-- base path for images -->
    
    <title><?php echo (isset($page_title))?$page_title." :: ":""; ?>Logo Design Guarantee</title>
    
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="favicon.ico?id=<?php echo rand(); ?>" rel="shortcut icon"/>
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/css3-effects.min.css" rel="stylesheet">
    
    <link href="<?php echo base_url() ?>assets/css/res-slider.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/media.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/nav-web.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->   
  </head>
  <body>    
  	<section id="wrap">
		<header id="header">
			<section id="header-top">
				<div class="container">
					<div class="row">
						<aside class="col-sm-6">
							<h1 id="logo"><a title="LOGO DESIGN GUARANTEE" href="index.php"><img class="img-responsive" src="assets/images/logo.png" alt="logo design guarantee" /></a></h1>
						</aside>
						<aside class="col-sm-6 clearfix" id="right-section">
                            <div class="reseller-service">
            					<?php if(!isset($_SESSION['reseller_id'])): ?>
            					<a class="theme-red" href="<?php echo base_url('web-site-design/webdesigner-limited-sale'); ?>">Return to Site</a>
                                <?php else: ?>
                                <div>
                                    <?php echo $_SESSION['fullname'].' | ' ?>
                                    <a href="<?php echo site_url('reseller/logout') ?>">Logout</a>
                                </div>
                                    
                                <?php endif; ?>
            				</div>
							<div class="pull-right r-cont">
								<h2>24/7 <em class="color"> Devoted </em> Support<span class="trademark">&trade;</span></h2>
								<div class="info-box">
									<p>
										<a href="#">Sales/Support</a><span class="ph-no"><?php echo PHONE_NO; ?></span>
									</p>
									<p>
										<a class="live-chat" href="javascript:void(0);">Live chat <img src="assets/images/hi-bubble.png" alt="hi" /></a>
									</p>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</section>
            <?php $ignore_method = array('thankyou'); ?>
			<?php if(!in_array($this->router->method,$ignore_method)): ?>
			<section id="nav-main">
				<div class="container">
                    <nav id="web-nav" class="navbar navbar-default" role="navigation">
                    	<div class="navbar-header">
                    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    			<span class="sr-only">Toggle navigation</span>
                    			<span class="icon-bar"></span>
                    			<span class="icon-bar"></span>
                    			<span class="icon-bar"></span>
                    		</button>
                    	</div>
                    	<?php $fc = $this->router->fetch_class(); $rm = $this->router->method; ?>
                    	<div class="collapse navbar-collapse" id="main-nav">
                    		<ul class="nav navbar-nav">
                    			<li><a data-hover="Web Packages" href="<?php echo base_url('reseller_web/index'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'index')?"class = active":""; ?> >Web Packages</a></li>
                    			<li><a data-hover="Web Portfolio" href="<?php echo base_url('reseller_web/portfolio'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'portfolio')?"class = active":""; ?> >Web Portfolio</a></li>
                    			<li><a data-hover="Guarantee" href="<?php echo base_url('reseller_web/guarantee'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'guarantee')?"class = active":""; ?> >Guarantee</a></li>
                    			<li><a data-hover="How It Works" href="<?php echo base_url('reseller_web/howitworks'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'howitworks')?"class = active":""; ?> >How It Works</a></li>
                    			<li><a data-hover="Why Choose Us" href="<?php echo base_url('reseller_web/whyus'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'whyus')?"class = active":""; ?> >Why Choose Us</a></li>
                    			<li><a data-hover="Hosting" href="<?php echo base_url('reseller_web/hosting'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'hosting')?"class = active":""; ?> >Hosting</a></li>
                    			<li><a data-hover="SEO" href="<?php echo base_url('reseller_web/seo'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'seo')?"class = active":""; ?> >SEO</a></li>
                    			<li><a data-hover="About Us" href="<?php echo base_url('reseller_web/about'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'about')?"class = active":""; ?> >About Us</a></li>
                    			<li><a data-hover="Logo Design" href="<?php echo base_url('reseller/index'); ?>"  >Logo Design</a></li>
                    		</ul>
                    	</div>
                    </nav>
				</div>
			</section>
            <?php endif; ?>
            <?php $this->load->view('includes/reseller_web/slider-common'); ?>
		</header>