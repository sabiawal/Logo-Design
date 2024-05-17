<style>
    .resdis
    {
        background-color:#fedc45 ;


        font-size:14px !important;
        height:60px;


        line-height: 60px;
        text-align: center;
        font-size: 23px !important;
        font-weight: 700;
        text-transform: uppercase;
        color: #000 !important;
        margin-bottom:10px;



    }
    .resdis > strong
    {color:#F00 !important;
    }
</style>
<?php $this->load->view('includes/reseller/header-common'); ?>
<section class="content">
    <div id="banner-bottom-slogan">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 clearfix we-care">
                    <h3>All Packages Include</h3>
                    <div class="we-care-about-you">
                        <ul>
                            <li>3 <?php echo COUNTRY; ?> In-House Designers</li>
                            <li><?php GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee</li>
                            <li>Free, Unlimited Concepts, Redraws &amp; Revisions</li>
                        </ul>
                        <ul>
                            <li>24 Hour Revisions Turnaround</li>
                            <li>Hand-Drawn Logos</li>
                            <li>Personal Account Manager</li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-4 clearfix">
                    <div class="trapzoid-box guarantee-box">
                        <h3 style="padding: 46px 0;" class="text-center">
                            <a href="<?php echo site_url('reseller/compare'); ?>">
                                Learn More About 
                                <br />
                                Our Advantages</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="package-pg-body">
        <div class="container">
            <div class="row">
                <div class="col-md-9"><p class="resdis"><strong>Reseller discount:</strong> A further 10% will be deducted during checkout.</p>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <div class="row">
                <div class="color-box clearfix">
                    <div style="margin: 0 0 50px;" class="clearfix">


                        <?php $this->load->view('includes/reseller/package-red'); ?>
                        <?php $this->load->view('includes/reseller/package-blue'); ?>
                        <?php $this->load->view('includes/reseller/package-green'); ?>
                        <?php $this->load->view('includes/reseller/support-pic'); ?>
                    </div>

                    <div id="package-super-WS" class="col-md-9 auto-center">
                        <div class="left">
                            <div class="top">
                                <p><b style="text-decoration: line-through;"><?php echo CURRENCY . LOGO_COPYRIGHT_P; ?></b><span> FREE </span> Copyright Legal Certificate</p>
                                <p><b style="text-decoration: line-through;"><?php echo CURRENCY . LOGO_ALTERNATION_P; ?></b><span> FREE </span> Lifetime Alterations to your Logo</p>
                            </div>
                            <span class="include">Included in All Logo Packages</span>
                        </div>
                        <div class="right">
                            <p class="red">Ends <?php echo $today ?></p>
                            <div class="fact-box text-center">
                                <h5>Fact</h5>
                                <p>
                                    The Best Logo Offer 
                                    <br />
                                    you'll Ever Find
                                </p>

                            </div>
                        </div>
                        <h3 class="super-w-title">Super winter sale</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="slogan">
        <div class="container">
            <h1 class="text-center">
                Just to Reassure You...
            </h1>
            <div class="text-center slogan-tagline">Here are some advantages you won't find with our competitors</div>
        </div>
    </section>

    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/images/package-network-people-pic.png" alt="Logo Samples" />
                </div>
                <div class="col-sm-8">
                    <div style="padding: 0 0 0 36px;" class="clearfix">
                        <h2>The Most Logo Samples for the Lowest Price</h2>
                        <ul class="width-half">
                            <li>A Minimum of <span> 6 </span> Samples</li>
                            <li><span>In-House </span> Designers</li>
                            <li><span>3 </span> Professional Designers work on your Logo</li>
                        </ul>
                        <ul class="width-half">
                            <li>Others Offer Just 1 or 2</li>
                            <li>Others Outsource Your Designs</li>
                            <li>Others Offer Just 1</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="widget1 normal-whitebox clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Perfectly Hand Crafted Logos</h2>
                    <ul class="width-half">
                        <li>100% <span> Hand Drawn </span> &amp; Custom Made</li>
                        <li><span>Unlimited </span> Revisions with All Packages</li>
                        <li><span>Unlimited </span> Redraws</li>
                    </ul>
                    <ul class="width-half">
                        <li>Others Use Templates and Clip Art</li>
                        <li>Others Only Offer this with High Prices</li>
                        <li>Others Do Not Offer This</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <img class="img-responsive" src="assets/images/hand-drawn-logo2.png" alt="hand drawn logo" />
                </div>
            </div>
        </div>
    </section>

    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="assets/images/time--watch.png" alt="time watch" />
                </div>
                <div class="col-sm-8">
                    <h2>24 x 7 x <?php GUARANTEE_DAYS; ?> Free Support</h2>
                    <ul class="width-half">
                        <li>We Offer Support<span> Whenever You Need It</span></li>
                        <li>We Give You a <span> Dedicated Project Manager</span></li>
                        <li>Your Revisions Will Be Completed in Just <span> 24 Hours</span></li>
                    </ul>
                    <ul class="width-half">
                        <li>Others Usually Offer Support Weekday 9-5</li>
                        <li>Others Do Not Offer This</li>
                        <li>Others Take Several Days or Weeks</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="widget1 normal-whitebox clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>The Strongest Guarantee</h2>
                    <ul class="width-half tick">
                        <li><span>365 Day, 100% Money Back Guarantee</span></li>
                        <li><span>No </span> Hidden Fees</li>
                        <li>We'll Give You a Refund, <span> No Questions Asked</span></li>
                    </ul>
                    <ul class="width-half thin-arrow">
                        <li>The Best in the Industry, By Far</li>
                        <li>Other Will Surprise You After Placing an Order</li>
                        <li>Other Will Debate Whether You Deserve a Refund</li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center clearfix">
                    <img style="display: inline-block;" class="img-responsive" src="assets/images/guarantee-batch.png" alt="100% guarantee" />
                </div>
            </div>
        </div>
    </section>
</section>
<?php $this->load->view('includes/reseller/footer-common'); ?>