<?php $this->load->view('includes/header-common'); ?>
<link href="http://www.logodesignguarantee.co.uk/css/magnific-popup.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">

<style>
    @media(max-width:600px) {
        .wifidd {
            width: 200px !important;
        }
        #inner-cont-banner img{
        height:auto !important;
        margin-top: 75px !important;
    }
    }


    #inner-cont-banner img{
        height: auto !important;
    }

    #inner-cont-banner img{
        opacity:1 !important;
    }

    .carousel-inner {
        height: auto !important;
    }


    .dropdown-menu>.active>a {
        color: #000000;
    }

    /*
*   Owl Carousel Owl Demo Theme 
*   v1.23
*/

    .owl-theme .owl-controls {
        margin-top: 10px;
        text-align: center;
    }

    /* Styling Next and Prev buttons */

    /* Styling Pagination*/

    .owl-theme .owl-controls .owl-page {
        display: inline-block;
        zoom: 1;
        *display: inline;
        /*IE7 life-saver */
    }

    .owl-theme .owl-controls .owl-page span {
        display: block;
        width: 12px;
        height: 12px;
        margin: 5px 7px;
        filter: Alpha(Opacity=50);
        /*IE7 fix*/
        opacity: 0.5;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        background: #869791;
    }

    .owl-theme .owl-controls .owl-page.active span,
    .owl-theme .owl-controls.clickable .owl-page:hover span {
        filter: Alpha(Opacity=100);
        /*IE7 fix*/
        opacity: 1;
    }

    /* If PaginationNumbers is true */



    /* preloading images */

    .owl-prev:hover,
    .owl-next:hover {
        filter: Alpha(Opacity=100);
        /*IE7 fix*/
        opacity: 1;
    }


    .owl-theme .owl-controls .owl-buttons div {
        position: absolute;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev {
        left: 0;
        top: 41%;

    }

    .owl-theme .owl-controls .owl-buttons .owl-next {
        right: 0;
        top: 41%;
    }
</style>
<style>
    .nav-tabs,
    .nav-pills {
        position: relative;
    }

    .overlay-container .img-responsive {
        /*border: 1px solid green;*/
        margin-bottom: 10px;
        margin-top: 10px;
        padding: 10px;
    }

    .overlay-container .img-responsive {
        position: relative;
        -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    }

    ..overlay-container .img-responsive:before,
    .overlay-container .img-responsive:after {
        content: "";
        position: absolute;
        z-index: -1;
        -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
        top: 0;
        bottom: 0;
        left: 10px;
        right: 10px;
        -moz-border-radius: 100px / 10px;
        border-radius: 100px / 10px;
    }

    .overlay-container .img-responsive:after {
        right: 10px;
        left: auto;
        -webkit-transform: skew(8deg) rotate(3deg);
        -moz-transform: skew(8deg) rotate(3deg);
        -ms-transform: skew(8deg) rotate(3deg);
        -o-transform: skew(8deg) rotate(3deg);
        transform: skew(8deg) rotate(3deg);
    }

    .portfolio .image-box {
        overflow: hidden;
    }

    .image-box {
        /* margin-left: -15px;
      margin-right: -15px;*/
        margin-bottom: 10px;
        margin-top: 10px;
    }

    .image-boxes {
        /*  border: 1px solid #fff;
  border-radius: 3px;
  box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);*/
        overflow: hidden;
    }

    .overlay-container {
        display: block;
        overflow: hidden;
        position: relative;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        bottom: -1px;
        left: 0;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        right: -1px;
        text-align: center;
        top: 0;
        transform: scale(0.8);
        transition: all 0.2s linear 0s;
    }

    .overlay-links {
        display: block;
        font-size: 0;
        margin: 0 auto;
        opacity: 0;
        position: absolute;
        text-align: center;
        top: 40%;
        transform: scale(0.4);
        transition: all 0.25s linear 0.05s;
        width: 100%;
    }

    .overlay a {
        background-color: #ffffff;
        color: #e84c3d;
        display: inline-block;
        font-size: 16px;
        height: 30px;
        left: 50%;
        line-height: 30px;
        margin-left: -15px;
        margin-top: -15px;
        position: absolute;
        text-align: center;
        top: 50%;
        width: 30px;
    }

    .portfolio .image-box {
        /*border: 1px solid #fff;
    border-radius: 3px;
    box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.1);*/
        overflow: hidden;
    }

    .overlay-container {
        display: block;
        overflow: hidden;
        position: relative;
    }

    .overlay {
        /* background-color: rgba(241, 241, 241, 0.85);*/
        bottom: -1px;
        left: 0;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        right: -1px;
        text-align: center;
        top: 0;
        transform: scale(0.8);
        transition: all 0.2s linear 0s;
    }

    .overlay a {
        background-color: #ffffff;
        color: #e84c3d;
        display: inline-block;
        font-size: 16px;
        height: 30px;
        left: 50%;
        line-height: 30px;
        /* margin-left: -15px;
    margin-top: -15px;*/
        position: absolute;
        text-align: center;
        top: 50%;
        width: 30px;
    }

    .overlay span {
        bottom: 10px;
        color: #000000;
        display: block;
        font-style: italic;
        position: absolute;
        text-align: center;
        width: 100%;
    }

    .overlay-links {
        display: block;
        font-size: 0;
        margin: 0 auto;
        opacity: 0;
        position: absolute;
        text-align: center;
        top: 40%;
        transform: scale(0.4);
        transition: all 0.25s linear 0.05s;
        width: 100%;
    }

    .overlay-links a {
        margin-left: 0;
        margin-top: 0;
        position: static;
    }

    .overlay-links a+a {
        background-color: #e84c3d;
        color: #ffffff;
        left: 50px;
    }

    .overlay a:hover {
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
    }

    .overlay i {
        line-height: 30px;
    }

    .box-style-1 .overlay i {
        font-size: 16px;
        margin: 0;
    }

    a.overlay {
        background-color: rgba(255, 255, 255, 0.9);
        cursor: pointer;
    }

    a.overlay:hover {
        text-decoration: none;
    }

    .listing-item a.overlay {
        background-color: rgba(255, 255, 255, 0.7);
        transform: scale(1);
        transition: all 0.25s linear 0s;
    }

    .listing-item a.overlay:hover {
        text-decoration: none;
    }

    a.overlay i {
        color: #e84c3d;
        font-size: 40px;
        left: 50%;
        line-height: 42px;
        margin-left: -18px;
        margin-top: -22px;
        position: absolute;
        text-align: center;
        top: 50%;
    }

    a.overlay.small i {
        font-size: 18px;
        line-height: 1;
        margin-left: -8px;
        margin-top: -8px;
    }

    .overlay .social-links {
        bottom: 10px;
        margin: 0;
        position: absolute;
        text-align: center;
        width: 100%;
    }

    .overlay .social-links li {
        margin: 0 auto;
    }

    .overlay .social-links li a {
        font-size: 18px;
        height: 40px;
        margin: 2px;
        position: static;
        width: 40px;
    }

    .overlay .social-links li a:hover {
        background-color: #fff;
        border-color: #fff;
        text-decoration: none;
    }

    .overlay .social-links li a i {
        font-size: 24px;
        line-height: 38px;
        margin: 0;
    }

    .overlay-container:hover .overlay,
    .overlay-container:hover .overlay-links {
        opacity: 1;
        transform: scale(1);
    }

    .client-testimonials {
        background: rgba(0, 0, 0, 0) url("../images/client-testimonials.jpg") no-repeat scroll center top / cover;
        overflow: hidden;
    }

    ul.portab li a {

        display: inline-block;
        height: 38px;
        padding: 4px 23px !important;
        line-height: 28px;

    }

    ul.portab li a {
        border: 1px solid #eeeeee;
        border-bottom: none !important;
    }

    .logo-slide1 {


        clear: both;


    }

    .tab-content {
        /*border:1px solid #ddd ;*/
    }

    .logo-slide {
        background: none !important;
        border: none !important;
        border-radius: 0px !important;
        padding: 20px;
    }


    .nav-tabs li.active {
        border-top: 2px solid #7db701;
        border-width: 99%;
    }

    .nav-tabs li a {
        padding: 10px 0px;
    }

    .nav-tabs li {
        margin-right: 0px;
    }

    .nav-tabs>li>a {
        margin: 0;
    }

    .logo-stage {
        margin-top: 15px;


    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus {}

    .nav-tabs ul {
        border-bottom: none !important;
    }

    .forborder {
        border-bottom: 1px solid #e6e6e6;
        min-height: 40px;
        margin-bottom: 30px;
    }

    .portab.nav-tabs {

        text-align: center;
        display: block;
        margin: 0 auto;
    }

    @media screen and (min-width: 950px) {
        .portab.nav-tabs {
            width: 950px;
        }
    }

    @media screen and (max-width: 950px) {
        ul.portab li a {
            background-color: #ffffff !important;
            width: 100%;
        }
    }

    ul.portab li a {
        background-color: #ffffff;
        color: #000000;
    }

    .logohi {
        font-size: 16px !important;
    }
</style>

<link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
<section id="inner-cont-banner" style="position:relative;">
    <section>
        <div style=" background-color: #950b0b; padding:2px; position:absolute; top: 40px; z-index:100; width: 100%;" class="banner">
            <h5 class="text-center" style="color:white; font-weight:600; font-size:1.35rem;">Half-Price Sale Ends Midnight, Friday 10 February ’24 </h5>
        </div>
    </section>
    <div id="video_carousel" class="carousel video_carousel_fade animate_text video_carousel_wrapper" data-ride="carousel">
        <section>
            <div style=" background-color: #950b0b; padding:2px; position:absolute; top: 40px; z-index:100; width: 100%;" class="banner">
                <h5 class="text-center" style="color:white; font-weight:600; font-size:1.35rem;">Half-Price Sale Ends Midnight, Friday 10 February ’24 </h5>
            </div>
        </section>
        <!--======= Wrapper For Slides =======-->
        <div class="carousel-inner" role="listbox">

            <!--========= First Slide =========-->


            <div class="item active " data-interval="7000" data-pause="false">
                <img style="object-fit:contain;" src="assets/images/newslider/portfolio1.jpg">

            </div>


            <!--    <div class="item " data-interval="16000"  data-pause="hover"> -->

            <!--========= Second Slide =========-->




        </div>

    </div>
</section>

</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section class="port-gray-border-round-box clearfix">
                    <div class="logo-sl-cover">
                        <?php
                        if (date('d') < 8) {
                            $portfolio_month = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));
                            $portfolio_date  = trim(date("m Y", $portfolio_month));
                            $x               = explode(' ', $portfolio_date);
                            $mth = $x[0];
                            $mth = (int)$mth;
                            $month = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                            if ($mth == 12)
                                $portfolio_date = $month[$mth] . ' ' . (date('Y') - 1);
                            else
                                $portfolio_date = $month[$mth] . ' ' . (date('Y'));
                        } else {
                            $portfolio_date = date("F Y");
                        }
                        ?>
                        <h2>Recent Clients From <?php echo $portfolio_date; ?></h2>

                        <div class="forborder">
                            <ul id="tabs" class="portab nav nav-tabs" data-tabs="tabs" role="tablist">
                                <li class="active"> <a href="#logosm" data-toggle="tab">Logos</a></li>
                                <li> <a href="#bc" data-toggle="tab"> Business Cards</a></li>
                                <li><a href="#lh" data-toggle="tab"> Letterheads</a> </li>

                                <li>
                                    <a href="#cs" role="tab" data-toggle="tab"> Compliment Slips</a>
                                </li>

                                <li> <a href="#ev" role="tab" data-toggle="tab"> Envelopes</a> </li>


                                <li> <a href="#bro" role="tab" data-toggle="tab"> Brochures</a> </li>

                                <li> <a href="#dise" role="tab" data-toggle="tab"> Merchandise</a> </li>
                            </ul>

                        </div>

                        <div id="my-tab-content" class="tab-content">
                            <section id="logosm" class="tab-pane active fade in">
                                <div class="logo-slide">
                                    <div class="logo-stage">
                                        <div class="fotorama" data-width="1000" data-ratio="1000/295" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="230" data-thumbheight="67">
                                            <img src="assets/images/logo-portfolio/1.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/2.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/3.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/4.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/1.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/2.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/3.png" alt="portfolio" />
                                            <img src="assets/images/logo-portfolio/4.png" alt="portfolio" />
                                        </div>
                                        <div class="excited-pack">
                                            <img class="excited" src="assets/images/excited-txt.png" alt="excited ?" />
                                            <a class="green-btn" href="<?php echo base_url() ?>packages"><span data-hover="See Our Packages!" class="mgin">See Our Packages!</span></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- <section id="bc" class="tab-pane  fade in">
                				<div class="logo-slide1">
                                
                                <div class="gallery">
                               <div class="row">
            <div class="image-boxes owl-demo "> <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div> 
                <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc1.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc2.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                
             
<div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc4.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc5.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc6.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>

              <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc7.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc8.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc8.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc9.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc9.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc10.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc10.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc11.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc11.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc12.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc12.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc13.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc13.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc14.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc14.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc15.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc15.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc16.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc16.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc18.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc18.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div><div class="col-md-3  ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc19.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc19.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc20.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc20.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc21.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc21.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
<div class="col-md-3 ">
                    <div class="image-box">
                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/bc22.jpg " alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/bc22.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                </div> 
                            </div>
                        </div>
                        
                    </div>
                </div>
              


                </div>
                </div>
                </div>
								</div>
                                </section> -->

                            <section id="bc" class="tab-pane  fade in">
                                <div class="logo-slide1">

                                    <div class="gallery">
                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc6.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc7.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc8.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc8.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc9.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc9.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="http://www.logodesignguarantee.co.uk/assets/images/bc/bc10.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="http://www.logodesignguarantee.co.uk/assets/images/bc/bc10.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <section id="lh" class="tab-pane  fade in">
                                <div class="logo-slide1">
                                    <div class="gallery">

                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh3.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh6.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh7.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh8.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh8.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh9.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh9.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh10.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh10.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh11.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh11.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/lh12.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/lh12.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>





                            <section id="cs" class="tab-pane  fade in">
                                <div class="logo-slide1">
                                    <div class="gallery">

                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs3.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs6.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/cs7.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/cs7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <section id="ev" class="tab-pane  fade in">
                                <div class="logo-slide1">
                                    <div class="gallery">

                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev3.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev6.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/ev7.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/ev7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>






                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>




                            <section id="bro" class="tab-pane  fade in">
                                <div class="logo-slide1">

                                    <div class="gallery">
                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br3.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br6.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br6.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/br7.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/br7.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <section id="dise" class="tab-pane  fade in">
                                <div class="logo-slide1">

                                    <div class="gallery">
                                        <div class="row">
                                            <div class="image-boxes owl-demo ">
                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer1.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer1.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer2.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer2.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer3.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer3.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer4.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer4.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-4 ">
                                                    <div class="image-box">
                                                        <div class="overlay-container"> <img src="<?php echo base_url() ?>assets/images/mer5.jpg " alt="" class="img-responsive">
                                                            <div class="overlay">
                                                                <div class="overlay-links"> <a href="<?php echo base_url() ?>assets/images/mer5.jpg" class="popup-img"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </section>
                <?php $this->load->view('includes/portfolio_category'); ?>
                <!-- <section class="port-gray-border-round-box clearfix">
	<div class="col-lg-8">
		<div class="logos-by-industry">
			<h4>See Logos By Industry!</h4>
			<div class="category-list clearfix">
				<ul>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_accounting.php">Accounting</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_attorney_legal.php">Attorney and Legal</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_automotive.php">Automotive</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_bio_techno.php">Biotechnology and Pharmaceutical</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_church_religious.php">Church and Religious</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_construction.php">Construction</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_consulting.php">Consulting</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_dental.php">Dental</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_education.php">Education</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_entertainment.php">Entertainment</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_event.php">Event</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_financial_service.php">Financial Services</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_golf_courses.php">Golf Courses</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_high_tech.php">High_Tech</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_illustrative.php">Illustrative</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_international.php">International</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_internet.php">Internet</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_landscaping.php">Landscaping</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_medical.php">Medical</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_networking.php">Networking</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_poolspa.php">Pool and Spa</a></li>
				</ul>
				<ul>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_real_estate.php">Real Estate Development</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_realtor.php">Realtor</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_restaurant.php">Restaurant</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_retail.php">Retail</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_salon_dayspa.php">Salon/Day Spa</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_service_industry.php">Service Industries</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_travel.php">Travel</a></li>
					<li><a href="<?php echo base_url() ?>industry/logo_portfolio_offthewall.php">Off The Wall</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="unique-devoted-box">
			<h4 style="border-bottom: 1px solid #919191;">Unique, <span> Devoted Support&trade;</span></h4>
			<ul>
				<li><span>Hand-crafted </span>logo process from the very beginning!</li>
				<li><span>LogoTalk&trade; - Talk to your designer </span> anytime you want!</li>
				<li><span>Award-winning USA designers! </span> All in-house! Work with the best!</li>
				<li><span>365  - Day, </span> Money Back Guarantee. By far the biggest in the industry!</li>
				<li>We have the<span> most USA phone staff </span> in the logo sector!</li>
				<li><span>Best Price Guarantee! </span> - We'll beat any like-to-like service by 10%</li>
				<li><span>LogoVote&trade;</span> - Use our patented system to let your friends vote on their favourite logo sample! Get Feedback!</li>
			</ul>
			<h4><span>Fantastic Pricing</span></h4>
			
			<div class="concept-bar silver">
				<p>START  <span class="old-price">$99</span> $49 | 6 Concepts</p>
			</div>
			<div class="concept-bar elite">
				<p>SURGE  <span class="old-price">$138</span> $69 | 12 Concepts</p>
			</div>
			<div class="text-center">
				<a class="green-btn" href="<?php echo base_url() ?>packages"><span data-hover="See Our Packages!">See Our Packages!</span></a>
			</div>
		</div>
	</div>
</section>-->

            </div>
        </div>
    </div>
</section>

<!-- Isotope javascript -->
<script type="text/javascript" src="<?php echo base_url() ?>js/isotope.pkgd.min.js"></script>
<!-- Magnific Popup javascript -->
<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script>


<script type="text/javascript">
    $('.gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });

    $(function() {

        // Magnific popup
        //-----------------------------------------------
        if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
            $(".popup-img").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                }
            });
            $(".popup-img-single").magnificPopup({
                type: "image",
                gallery: {
                    enabled: false,
                }
            });
            $('.popup-iframe').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                preloader: false,
                fixedContentPos: false
            });
        };

    });
</script>

<?php $this->load->view('includes/footer-common'); ?>
<script src="http://www.logodesignguarantee.co.uk/assets/js/bootstrap-tabdrop.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.nav-pills, .nav-tabs').tabdrop();
    });
</script>
<script type="text/javascript">
    $('.nav-pills, .nav-tabs').tabdrop();
    /* var nt = jQuery;
     nt.noConflict();*/
    function activaTab(tab) {
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    };

    activaTab('tab1');
</script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        var checkWidth = $(document).width();

        if (checkWidth <= 600) {
            $(".owl-demo").owlCarousel({
                navigation: true,
                navigationText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                items: 10,
            });
        }

    });
</script>