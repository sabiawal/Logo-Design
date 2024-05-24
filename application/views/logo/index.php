<?php 
$this->load->view('includes/header-common'); 
if ($this->uri->segment(1) != 'sixhourdetail') {
    $this->load->view('includes/slider-common');
}
?>
<style>
	
.orange-button{
    background-color:#F06E00;
    padding:3px 0px;
    border bottom: 3px solid #c05700;
}
.green-button{
    background-color:#7db701;
    padding:3px 0px;
    border-bottom: 3px solid #578307;
}
@media only screen and (max-width: 767px){

    .recent-work{
        margin-left: 1.5rem;
        margin-top: 1rem;
    }

    .detail .tooltip-inner {
  left: 0;
  min-width: 350px;
} 
#sief-design-process .title div {
    height: auto;
    line-height: 1;
    text-align: center;
}

.pt-5{
    padding-top: 7rem;

}

.pt-8{
    padding-top: 9rem;
}

}
  @media (max-width: 400px) {
    .text-left {
      text-align: left;
    }
    .recent-work{
        margin-top: 1rem;
    }
  }


  
</style>
<section id="logo-section">
    <div class="for-mobile">
        <div class="lag1">
            <div class="container" style="padding:0px;">
                <div class="col-sm-6 super-winter-sale clearfix">
                    <h3 class="text-center" style="font-size:1.7rem;">Super Summer Sale</h3>
                    <ul class="text-left" style="margin-top:3px;">
                        <li>• Half-Price on All Packages</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Copyright Certificate worth £50</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Lifetime Alteration to Your Logo worth £50</span></li>
                    </ul>
                    <h4 style="margin-top:4px; color:#fff; font-size:1.8rem;" class="text-center">Ends Midnight, Friday 10 February ’24 </h4>

                    <!--<hgroup>-->
                    <!-- <h4><strong>Free </strong>Copyright Certificate worth <?php echo CURRENCY . LOGO_COPYRIGHT_P; ?></h4>	
							<h4><strong>Free </strong>Lifetime Alteration to Your Logo worth <?php echo CURRENCY . LOGO_ALTERNATION_P; ?></h4>	
							<?php if (SHOW_OFFER_DATE) : ?>
                            <h4><span>Ends: <?php echo $today; ?></span></h4>
                            <?php endif; ?> -->
                    <!--</hgroup>-->
                </div>
                <div class="col-sm-6 alpha" style="padding:15px;">
                    <h3 style="margin-top:20px;">We will <a href="<?php echo base_url(); ?>compare" class="theme-green-style"> beat </a> any competitor's price.<br />
                        Guaranteed.</h3>
                </div>

            </div>
        </div>
    </div>
    <div class="for-desktop">
        <div class="lag1">
            <div class="container">
                <div class="col-sm-6 alpha">
                    <h3 style="margin-top:20px;">We will <a href="<?php echo base_url(); ?>compare" class="theme-green-style"> beat </a> any competitor's price.<br />
                        Guaranteed.</h3>
                </div>
                <div class="col-sm-6 super-winter-sale clearfix">
                    <h3 class="text-center" style="font-size:1.7rem;">Super Summer Sale</h3>
                    <ul style="margin-top:3px;">
                        <li>• Half-Price on All Packages</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Copyright Certificate worth £50</li>
                        <li>• <strong style="color:#e0ff35;">FREE</strong> Lifetime Alteration to Your Logo worth £50</li>
                    </ul>
                    <h4 style="margin-top:3px; color:#fff; font-size:1.8rem;">Ends Midnight, Friday 10 February ’24 </h4>

                    <!--<hgroup>-->
                    <!-- <h4><strong>Free </strong>Copyright Certificate worth <?php echo CURRENCY . LOGO_COPYRIGHT_P; ?></h4>	
							<h4><strong>Free </strong>Lifetime Alteration to Your Logo worth <?php echo CURRENCY . LOGO_ALTERNATION_P; ?></h4>	
							<?php if (SHOW_OFFER_DATE) : ?>
                            <h4><span>Ends: <?php echo $today; ?></span></h4>
                            <?php endif; ?> -->
                    <!--</hgroup>-->
                </div>
            </div>
        </div>
    </div>



    <div class="slogan">
        <!-- <div class="container">
					<h1 class="text-center-desktop">Shake up your competition ight now with a <a href="<?php //echo base_url(); 
                                                                                                        ?>portfolio" class="theme-green-style"> stunning </a> logo</h1>
				</div> -->
        <div class="container">
            <h1 class="text-center-desktop">Shake up your competition with a <a class="theme-green-style">stunning</a> logo</h1>

        </div>
    </div>

    <div class="lag3">
        <div class="container">
            <div class="row">
                <div id="logo-hold">
                    <ul class="logo-list clearfix">
                        <li><img class="img-responsive" src="assets/images/logo1.jpg" alt="logo" width="202" height="190" /></li>
                        <li><img class="img-responsive" src="assets/images/logo2.jpg" alt="logo" width="202" height="190" /></li>
                        <li><img class="img-responsive" src="assets/images/logo3.jpg" alt="logo" width="202" height="190" /></li>
                        <li><img class="img-responsive" src="assets/images/logo4.jpg" alt="logo" width="202" height="190" /></li>
                        <li><img class="img-responsive" src="assets/images/logo5.jpg" alt="logo" width="202" height="190" /></li>
                    </ul>
                </div>
            </div>
            <div id="logo-type-info">
                <ul class="text-center-desktop">
                    <li>100% Custom Made</li>
                    <li><?php echo substr(COUNTRY, 0, 2); ?> In House Design Team</li>
                    <li>Designed for All Industries</li>
                    <div class="simple-box clearfix">
                        <a class="orange-btn" href="<?php echo site_url('portfolio'); ?>">
                            <span class="recent-work" data-hover="See Our Recent Work">See Our Recent Work</span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="slogan">
    <div class="container">
        <!-- <h1 class="text-center-desktop">Meet our <?php //echo COUNTRY; 
                                                        ?> <a href="<?php echo base_url(); ?>about" class="theme-green-style" title="Logo Design Guarantee Award Winning Artists"> award winning </a> logo artists!</h1> -->

        <h1 class="text-center-desktop">Meet Our UK <a class="theme-green-style"> award winning</a> logo artists</h1>
    </div>
</section>

<section id="learn-about-us">
    <div class="container">
        <div class="row">
            <ul class="pic-hold clearfix">
                <li class="col-sm-4">
                    <img class="img-responsive" src="assets/images/about-us-pic1.jpg" alt="learn more about us" width="360" height="259" />
                </li>
                <li class="col-sm-4">
                    <img class="img-responsive" src="assets/images/about-us-pic2.jpg" alt="learn more about us" width="360" height="259" />
                </li>
                <li class="col-sm-4">
                    <img class="img-responsive" src="assets/images/about-us-pic3.jpg" alt="learn more about us" width="360" height="259" />
                </li>
            </ul>
            <div class="simple-box clearfix">
                <a class="orange-btn" href="<?php echo base_url() ?>about">
                    <span data-hover="Learn More About Us...">Learn More About Us...</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="slogan">
    <div class="container">
        <h1 class="text-center-desktop" style="font-size: 35px;">Our international awards show that we settle for only the best</h1>
    </div>
</section>

<section id="brand-logo1">

    <div class="container">
        <div class="row ms-auto">
            <div class="col-md-2"><img class="img-responsive" src="assets/images/brand-logo1.jpg" alt="Logo Design Guarantee - red dot design Award" /></div>
            <div class="col-md-2"><img class="img-responsive" src="assets/images/brand-logo2.jpg" alt="Logo Design Guarantee - Logo Design Love Award" /></div>
            <div class="col-md-2"><img class="img-responsive" src="assets/images/brand-logo3.jpg" alt="Logo Design Guarantee - Logo Design Week" /></div>
            <div class="col-md-2"><img class="img-responsive" src="assets/images/brand-logo4.jpg" alt="Logo Design Guarantee - Logo Design Logo Awards" /></div>
            <div class="col-md-2"><img class="img-responsive" src="assets/images/brand-logo5.jpg" alt="Logo Design Guarantee - SIA Award" /></div>
            </ul>
        </div>
</section>

<section style="margin: 0 0 15px;" class="slogan">
    <div class="container">
        <h1 class="text-center-desktop">Packages with huge value and <a href="<?php echo base_url(); ?>packages" class="theme-green-style"> rock bottom prices</a></h1>
    </div>
</section>

<section id="package">
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs col-sm-offset-3" id="package-tab">
                <li class="active"><a href="#logos" data-toggle="tab">Logos</a></li>
                <li><a href="#websites" data-toggle="tab">Websites</a></li>
                <!--<li><a href="#guarantee" data-toggle="tab">Guarantee</a></li>-->
            </ul>
            <div class="tab-content clearfix">
                <div class="tab-pane fade in active" id="logos">
                    <div class="col-md-3 multi-color-box">
                        <h2 class="color-box-title-orange">Lite</h2>
                        <div class="body orange clearfix">
                            <div class="price clearfix">

                                <span class="old-price">&pound;50</span>
                                <span class="new-price orange">&pound;25</span>
                            </div>
                            <ul class="detail" style="padding:0;">
                                <li><strong>6 </strong>Custom Made Logos<a data-toggle="tooltip" title="You will have 6 logo designs to choose from, which are guaranteed to be original and custom-made for you.
                                                                                                      " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosing." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Logo Concepts<a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge.
                                                                                                 " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>3 </strong>Designers<a data-toggle="tooltip" title="Your project will have not one but 3 designers, who will all contribute to provide you with the perfect designs based on your specifications.
                                                                                           " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <!-- <li><strong>6 </strong>Hour Turnaround<a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                            </ul>
                            <div class="btn-wrap clearfix">
                                <a class="green-button" href="http://www.logodesignguarantee.co.uk/packages#package-pg-body"><span data-hover="More info">More info</span></a>
                                <a class="orange-button" style="border-bottom: 3px solid #c05700;" href="http://www.logodesignguarantee.co.uk/orders/index/1"><span data-hover="Order now">Order now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 multi-color-box">
                        <h2 class="color-box-title-blue">Surge</h2>
                        <div class="body blue clearfix">
                            <div class="price clearfix">

                                <span class="old-price">&pound;69 </span>
                                <span class="new-price blue">&pound;35</span>
                            </div>
                            <ul class="detail" style="padding:0;">
                                <li><strong>12 </strong>Custom Made Logos<a data-toggle="tooltip" title="You will have 12 logo designs to choose from, which are guaranteed to be original and custom-made for you." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Revisions<a data-toggle="tooltip" title="There will be no limit to the number of revisions you can make on the logo of your choosings" data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Logo Concepts <a data-toggle="tooltip" title="Changed your mind on the whole concept of your logo? No worries. You can always request for new logo concepts to be made just for you, for as many times as you may need, at no additional cost." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>Unlimited </strong>Redraws<a data-toggle="tooltip" title="Your choice won’t be limited to your first set of logo samples. You will have the privilege of requesting for a completely new set of samples, free of charge.
                                                                                                 " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>6 </strong>Designers<a data-toggle="tooltip" title="Your project will have not one, not even 3, but 6 designers, all contributing to provide you with the perfect designs based on your specifications." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <!-- <li><strong>6 </strong>Hour Turnaround<a data-toggle="tooltip" title="Get your logos within 6 hours. You won't find a faster logo service anywhere else! Best of all, this service is available 24/7, so you can order anytime and never worry about missing a cut-off. This 6-hour service only applies to LOGO services on all packages. " data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li> -->
                            </ul>
                            <div class="btn-wrap clearfix">
                                <a class="green-button" href="http://www.logodesignguarantee.co.uk/packages#package-pg-body"><span data-hover="More info">More info</span></a>
                                <a class="orange-button" style="border-bottom: 3px solid #c05700;" href="http://www.logodesignguarantee.co.uk/orders/index/4"><span data-hover="Order now">Order now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 multi-color-box">
                        <h2 class="color-box-title-green">Excel</h2>
                        <div class="body green clearfix">
                            <div class="price clearfix">

                                <span class="old-price">&pound;125 </span>

                                <span class="new-price green">&pound;59</span>
                            </div>
                            <div class="surge-plus clearfix">
                                <span class="blue">Surge</span>
                                <span>Plus</span>
                            </div>
                            <ul class="detail" style="padding:0;">
                                <li><strong>3 </strong>Business Card Designs<a data-toggle="tooltip" title="The perfect way to look professional while advertising your business. We will provide you with 3 custom-made designs to choose from." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>3 </strong>Letterhead Designs<a data-toggle="tooltip" title="Make sure your business letters clearly identify you and your business. Plus, you also get to advertise your brand for free. With this package, you will get 3 additional custom-made letterhead designs at no additional cost." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                                <li><strong>3 </strong>Compliment Slip Designs<a data-toggle="tooltip" title="Compliment Slips also help with branding and advertising. It also puts your business information out there. With this package, you will get 3 custom Compliment Slip designs." data-placement='top'> <img src="assets/images/added/silver-info.jpg"> </a></li>
                            </ul>
                            <div class="btn-wrap clearfix">
                            <a class="green-button" href="http://www.logodesignguarantee.co.uk/packages#package-pg-body"><span>More info</span></a>
                            <a class="orange-button" style="border-bottom: 3px solid #c05700;" href="http://www.logodesignguarantee.co.uk/orders/index/7"><span>Order now</span></a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 devoted-support">
                        <div class="pic">
                            <img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" width="262" height="217" />
                        </div>
                        <div class="gurantee-box">
                            <a style="cursor:default; text-decoration:none;">Speak to your actual designers on the phone (not just a project manager)</a>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="websites">
                    <h3 style="font-size: 20px!important;">All Packages Include</h3>
                    <div id="scroll-pane"> <?php $this->load->view('includes/web/web-packages-list'); ?>
                
                <div class="package-info-box"></div>
                </div>
            </div>
        </div>
</div>
</div>
</section>

<section class="slogan">
    <div class="container">
        <h1 class="text-center-desktop">The Logo Design Guarantee Advantage</h1>
    </div>
</section>

<section id="ldg-advantage">
    <div class="container">
        <div class="row">
            <ul class="clearfix text-center" style="padding:0px;">
                <li>
                    <span><img src="assets/images/custom-logo-design-icon.png" alt="" width="43" height="55" /></span>
                    <h4>100% Custom Logo Design</h4>
                    <p>With original concepts completely based on your business type.</p>
                </li>
                <li>
                    <span><img src="assets/images/order-process-icon.png" alt="" width="54" height="55" /></span>
                    <h4>3 Minute Order Process</h4>
                    <p>We know the importance of your time!</p>
                </li>
                <li>
                    <span><img src="assets/images/rock-price-icon-<?php echo COUNTRY; ?>.png" alt="" width="68" height="56" /></span>
                    <h4>Rock Bottom Prices</h4>
                    <p>Despite our multi-featured service, we keep our prices low to reach more customers.</p>
                </li>
                <li>
                    <span><img src="assets/images/satisfication-icon.png" alt="" width="45" height="55" /></span>
                    <h4>100% Satisfaction</h4>
                    <p>If you are dissatisfied you will receive a full refund. No questions asked.</p>
                </li>
                <li>
                    <span><img src="assets/images/cutomer-support-icon.png" alt="" width="71" height="55" /></span>
                    <h4>24x7x365 Customer Support</h4>
                    <p>To ensure you get the help you need, whenever you need it.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="slogan">
    <div class="container">
        <h1 id="hourlogo" class="text-center-desktop"> A Simple and Efficient Design Process
        </h1>
    </div>
</section>



<section id="sief-design-process" class="sief-design-desktop">
    <div class="container">
        <div class="row">
            <div class="process-pic col-xs-6 col-md-12">
                <img class="img-icon" src="assets/images/design-process-icon1.png" alt="design process" width="122" height="108">
                <img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46">
                <img class="img-icon" src="assets/images/design-process-icon21.png" alt="design process" width="122" height="108">
                <img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46">
                <img class="img-icon1" src="assets/images/design-process-icon3a.png" alt="design process" width="122" height="108">
                <img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46">
                <img class="img-icon" src="assets/images/design-process-icon4.png" alt="design process" width="122" height="108">
            </div>
            <div class="title col-xs-6 col-md-12">
                <div class="col-xs-3">Order Online or by Phone</div>
                <div class="col-xs-3 pt-5">Get a Minimum of 6 Samples</div>
                <div class="col-xs-3 pt-5">Request Revisions</div>
                <div class="col-xs-3 pt-5">Approve Final Logo</div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('includes/footer-common'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
<?php $this->load->view('web/package-item-info-data'); ?>
<?php $this->load->view('web/package-item-info-data2'); ?>

<script type="text/javascript">
    var tag = document.createElement('script');

    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    var playersecond;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('newplayer', {
            // playerVars: { 'autoplay': 0, 'controls': 0 }
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });


        playersecond = new YT.Player('newplayer1', {
            // playerVars: { 'autoplay': 0, 'controls': 0 }
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });


    }
</script>