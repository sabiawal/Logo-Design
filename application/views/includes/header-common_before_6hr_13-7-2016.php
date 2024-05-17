<?php // Common Header for logo Design   ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies"/>
        <base href="<?php echo base_url() ?>" target="_self" /> <!-- base path for images -->

        <title><?php echo (isset($page_title)) ? $page_title . " :: " : ""; ?>Logo Design Guarantee &trade;</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="favicon.ico?id=<?php echo rand(); ?>" rel="shortcut icon"/>
        <!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>-->
        <link href="<?php echo base_url() ?>assets/css/res-slider.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/css3-effects.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/jquery.loadmask.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/media.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/magnific-popup.css" rel="stylesheet">
        <!--<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="<?php //echo base_url()  ?>assets/js/html5shiv.js"></script>
          <script src="<?php //echo base_url()  ?>assets/js/respond.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->

    </head>
    <body>    
        <section id="wrap">
            <header id="header">
                <section id="header-top">
                    <div class="container">
                        <div class="row">
                            <aside class="col-sm-5">
                                <h1 id="logo"><a title="LOGO DESIGN GUARANTEE" href="index.php"><img class="img-responsive" src="assets/images/logo.png" alt="logo design guarantee" height="107" width="347" /></a></h1>
                            </aside>
                            <aside class="col-sm-7 clearfix" id="right-section">
                                <div class="reseller-service">
                                    <?php if (!isset($_SESSION['reseller_id'])): ?>
                                        <a class="theme-red" href="<?php echo site_url('reseller/index'); ?>">Reseller Opportunity</a>
                                    <?php else: ?>
                                        <div>
                                            <?php echo $_SESSION['fname'] . ' | ' ?>
                                            <a href="<?php echo site_url('reseller/logout') ?>">Logout</a>
                                        </div>

                                    <?php endif; ?>
                                    <a class="theme-red" href="http://www.logodesignguarantee.co.uk/new44/more_services.php" style="padding-left:30px;">More Services</a>
                                </div>
                                <div class="pull-right r-cont">
                                    <h2>24/7 <em class="color"> Devoted </em> Support<span class="trademark">&trade;</span></h2>
                                    <div class="info-box">
                                        <p>
                                            <a href="#">Sales/Support</a><span class="ph-no"><?php echo PHONE_NO; ?></span>
                                        </p>
                                        <p>
                                            <a class="live-chat" href="javascript:void(0);">Live chat <img src="assets/images/hi-bubble.png" alt="hi" width="36" height="34" /></a>
                                        </p>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>                
                </section>
                <?php $ignore_method = array('thankyou'); ?>
                <?php if (!in_array($this->router->method, $ignore_method)): ?>
                    <section id="nav-main">
                        <div class="container">
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <?php
                                $fc = $this->router->fetch_class();
                                $rm = $this->router->method;
                                ?>
                                <div class="collapse navbar-collapse" id="main-nav">
                                    <ul class="nav navbar-nav">
                                        <li><a data-hover="home" href="<?php echo base_url(); ?>" <?php echo ($fc == 'logo' && $rm == 'index') ? "class = active" : ""; ?> >home</a></li>
                                        <li><a data-hover="packages" href="<?php echo site_url('packages'); ?>" <?php echo ($fc == 'logo' && $rm == 'packages') ? "class = active" : ""; ?>  >packages</a></li>
                                        <li><a data-hover="process" href="<?php echo site_url('process'); ?>" <?php echo ($fc == 'logo' && $rm == 'process') ? "class = active" : ""; ?>    >process</a></li>
                                        <li><a data-hover="compare us" href="<?php echo site_url('compare'); ?>" <?php echo ($fc == 'logo' && $rm == 'compare') ? "class = active" : ""; ?>  >compare us</a></li>
                                        <li><a data-hover="portfolio" href="<?php echo site_url('portfolio'); ?>" <?php echo (($fc == 'logo' && $rm == 'portfolio') || $fc == 'logo_portfolio') ? "class = active" : ""; ?>  >portfolio</a></li>

                                        <?php /* ?><li><a data-hover="guarantee" href="<?php echo site_url('guarantee'); ?>" <?php echo ($fc == 'logo' && $rm == 'guarantee') ? "class = active" : ""; ?>  >guarantee</a></li><?php */ ?>

                                        <li><a data-hover="about us" href="<?php echo site_url('about'); ?>" <?php echo ($fc == 'logo' && $rm == 'about') ? "class = active" : ""; ?> >about us</a></li>
                                        <li><a data-hover="web design" href="<?php echo base_url('web-site-design/webdesigner-limited-sale'); ?>" >web design</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </section>
                <?php endif; ?>
                <?php $this->load->view('includes/slider-common'); ?>
            </header>

            <style>
                #main-nav .nav > li > a {
                    padding: 10px 44px !important;
                }
            </style>