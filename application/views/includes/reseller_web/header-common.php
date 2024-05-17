<?php // Header for Web Design  ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
        <base href="<?php echo base_url() ?>" target="_self" /> <!-- base path for images -->

        <title><?php echo (isset($page_title)) ? $page_title . " :: " : ""; ?>Logo Design Guarantee</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="favicon.ico?id =<?php echo rand(); ?>" rel="shortcut icon"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/css3-effects.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/res-slider.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/media.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/nav-web.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

    </head>
    <body>    
        <section id="wrap">
            <header id="header">
                <section id="header-top">
                    <div class="container">
                        <div class="row">
                            <aside class="col-sm-4">
                                <h1 id="logo"><a title="LOGO DESIGN GUARANTEE" href="index.php"><img class="img-responsive" src="assets/images/logo.png" alt="logo design guarantee" height="107" width="347" /></a></h1>
                            </aside>
                            <aside class="col-sm-8 clearfix" id="right-section">
                                <div class="reseller-service sideright">
                                    <div class="hero-flag-content" style="margin-bottom: 8px;">
                                        <div class="hero-flag-text">
                                          <p style="font-size:13px !important;"><span style="font-size: 15px !important;">6 Hour Logos:</span><br/> <span class="heronew">All logos given within 6 hours, no extra fee. </span> <!-- <a href=""  data-toggle="tooltip" title="No matter what time you order (24/7) all your logos will be delivered within  6 hours."  data-placement='bottom' > Learn more<img src="assets/images/added/silver-info.jpg"> </a> -->
                                                <a href="<?php echo base_url() ?>sixhourdetail"  style="color:#00af50;text-decoration:underline;">Learn more</a>
                                            </p>
                                            <svg class="svg img-responsive" xml:space="preserve" enable-background="new 0 0 110 60" viewBox="0 0 110 60" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" preserveAspectRatio="none">
                                            <polygon points="0,0 110,0 100,55, 5,60 " fill="#FEDC45"/>
                                            </svg>
                                        </div>

                                    </div>

                                    <a class="theme-red" href="http://www.logodesignguarantee.co.uk/new44/more_services.php"style="margin-left:20px;" >More Services</a>

                                    <?php if (!isset($_SESSION['reseller_id'])): ?>
                                        <a class="theme-red" href="<?php echo site_url('reseller/index'); ?>" style="padding-left:3px;">Reseller Opportunity</a>
                                    <?php else: ?>
                                        <div>
                                            <?php echo $_SESSION['fname'] . ' | ' ?>
                                            <a href="<?php echo site_url('reseller/logout') ?>">Logout</a>
                                        </div>

                                    <?php endif; ?>
                                    
                                </div>
                                <div class="pull-right r-cont">
                                    <h2><!-- 24/7 -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em class="color"> Devoted </em> Support<span class="trademark">&trade;</span></h2>
                                    <div class="info-box" style="position:relative;">
                                        <p>
                                            <a href="#">Sales/Support</a><span class="ph-no"><?php echo PHONE_NO; ?></span>
                                        </p>
                                        <p>
                                            <a class="live-chat" href="javascript:void(0);">Live chat <img src="assets/images/hi-bubble.png" alt="hi" width="36" height="34" /></a>&nbsp; &nbsp; &nbsp;
                                        </p>
                                        <nav>
      <ul class="nav1 navbar-nav1 " style="position: absolute;
    right:0px;
    top: 32px;""  >
     <li id="login">
            <a id="login-trigger" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                Sign in <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
            </a>
            <div id="login-content">
            <a href="http://www.logodesignguarantee.co.uk/index.php/reseller " target="_blank">Reseller Login</a>
            <a href="http://www.clientdesignpanel.com/login" target="_blank">Web Client Panel</a>
                </div>                     
        </li>
        
    </ul>
</nav>
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
                            <nav id="web-nav" class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <?php $fc = $this->router->fetch_class();
                                $rm = $this->router->method; ?>
                                <div class="collapse navbar-collapse" id="main-nav">
                                    <ul class="nav navbar-nav">
                                        <li><a data-hover="Web Packages" href="<?php echo base_url('reseller_web/index'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'index') ? "class = active" : ""; ?> >Web Packages</a></li>
                                        <li><a data-hover="Web Portfolio" href="<?php echo base_url('reseller_web/portfolio'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'portfolio') ? "class = active" : ""; ?> >Web Portfolio</a></li>
                                        <!--<li><a data-hover="Guarantee" href="<?php echo base_url('reseller_web/guarantee'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'guarantee') ? "class = active" : ""; ?> >Guarantee</a></li>-->
                                        <li><a data-hover="How It Works" href="<?php echo base_url('reseller_web/howitworks'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'howitworks') ? "class = active" : ""; ?> >How It Works</a></li>
                                        <li><a data-hover="Why Choose Us" href="<?php echo base_url('reseller_web/whyus'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'whyus') ? "class = active" : ""; ?> >Why Choose Us</a></li>
                                        <li><a data-hover="Hosting" href="<?php echo base_url('reseller_web/hosting'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'hosting') ? "class = active" : ""; ?> >Hosting</a></li>
                                        <li><a data-hover="SEO" href="<?php echo base_url('reseller_web/seo'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'seo') ? "class = active" : ""; ?> >SEO</a></li>
                                        <li><a data-hover="About Us" href="<?php echo base_url('reseller_web/about'); ?>" <?php echo ($fc == 'reseller_web' && $rm == 'about') ? "class = active" : ""; ?> >About Us</a></li>
                                        <li><a data-hover="Logo Design" href="<?php echo base_url('reseller/index'); ?>"  >Logo Design</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </section>
                <?php endif; ?>
<?php $this->load->view('includes/reseller_web/slider-common'); ?>
                         <style type="text/css">


nav #login-content:before {
    content: '';
    display: inline-block;
    border-left: 18px solid transparent;
    border-right: 18px solid transparent;
    border-bottom: 18px solid #EFEFEF;
    position: absolute;
    top: -6px;
    right: 6px;
}
nav #login-content {
  display: none;
  position: absolute;
  top: 24px;
  right: 0;
  z-index: 999;    
  padding: 15px;
  
  width: 200px;
    background-color: #EFEFEF;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #EFEFEF;
 
  
    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
}

nav li #login-content {
  right: 0;

}

#login-content a
{display: block;
clear: both;color:grey !important;
font-weight: 400 !important;
font-size:15px;}


nav #login-trigger,
nav #signup a {
  display: inline-block;
  *display: inline;
  *zoom: 1;
  height: 25px;
  line-height: 25px;
  font-weight: 400;
  padding: 0 8px;
  text-decoration: none;
  color: grey !important;
  text-shadow: 0 1px 0 #fff; 
}

  .fa-chevron-down ,.fa-chevron-up
       {font-size: 10px;}

</style>

<script type="text/javascript">
       $(document).ready(function(){

       
    $('#login-trigger').click(function(e) {
      e.preventDefault();
        e.stopPropagation();
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active12');                    
        
        if ($(this).hasClass('active12')) $(this).find('span').html('<i class="fa fa-chevron-up" aria-hidden="true"></i>')
            else $(this).find('span').html('<i class="fa fa-chevron-down" aria-hidden="true"></i>')
        });

    $('#login-content').click(function(e){
    e.stopPropagation();
});

   $(document).click(function(){
            $('#login-content').slideUp();
        });  
});



       
   </script>

   <style type="text/css">
            .servicehour{
                margin: 0 0 30px;
                padding: 28px 0;
            }


            /*@font-face {
                font-family: 'texgyreherosregular';
                src: url('<?php echo base_url() ?>assets/fonts/texgy/reheros-regular-webfont.eot');
                src: url('<?php echo base_url() ?>assets/fonts/texgy/texgyreheros-regular-webfont.eot?#iefix') format('embedded-opentype'),
                    url('<?php echo base_url() ?>assets/fonts/texgy/texgyreheros-regular-webfont.woff2') format('woff2'),
                    url('<?php echo base_url() ?>assets/fonts/texgy/texgyreheros-regular-webfont.woff') format('woff'),
                    url('<?php echo base_url() ?>assets/fonts/texgy/texgyreheros-regular-webfont.ttf') format('truetype'),
                    url('<?php echo base_url() ?>assets/fonts/texgy/texgyreheros-regular-webfont.svg#texgyreherosregular') format('svg');
                font-weight: normal;
                font-style: normal;

            }*/
            .hero-flag-content {
                max-width: 100%;
                /*padding: 0px 30px 10px 20px;*/
            }
            /*.hero-flag-text p
            {  font-family: 'texgyreherosregular' !important;}
*/.hero-flag-text p
            { font-family: "Arial Black","Arial Bold","Gadget","sans-serif" !important;}

            .heronew
            {font-family: "Arial Rounded MT Bold", "Helvetica Rounded", "Arial", "sans-serif" !important;}

            .hero-flag-text {
                max-width: 100%;
                position: relative;
                z-index: 1;
                padding: 3px 40px 8px 29px;

            }

            .hero-flag-content svg {
                height: 100%;
                left: 0;
                max-width: 100%;
                position: absolute;
                top: 0;
                width: 100%;
                z-index:-1 !important;
            }
            svg:not(:root) {
                overflow: hidden;
            }

            .hero-flag {
                color: #000;
                line-height: 1em;
            }
            .sideright
            {margin-left: 5px;}

            .slogan h2 {
                font-size: 30px;
                font-weight: 700;
                margin: 23px 0;
                color: #a3a3a3;
            }

            #sief-design-process
            {   background-color:rgba(113, 173, 0, .1) !important;}

            .multi-color-box .body
            {min-height: 373px !important;}     .tooltip{font-size: 16px !important;  text-transform:none !important;  }
        </style>
            </header>