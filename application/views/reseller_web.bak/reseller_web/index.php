<?php $this->load->view('includes/reseller_web/header-common'); ?>
<style type="text/css">
    .resdis
    {
        background-color:#fedc45 ;
        font-size:14px !important;
        min-height:60px;
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
<section class="content">
    <div id="banner-bottom-slogan">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>All Packages Include</h3>
                    <div class="we-care-about-you clearfix">
                        <ul>
                            <li><?php echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee</li>
                            <li>Up to 3 Designers</li>
                            <li>Hosting</li>
                        </ul>
                        <ul>
                            <li>Unlimited Revisions</li>
                            <li>Content Management System</li>
                            <li>Search Engine Optimization</li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="trapzoid-box guarantee-box">
                        <h3 style="padding: 46px 0;" class="text-center trapzoid-extent1">
                            <a href="<?php echo base_url('reseller_web/guarantee') ?>">
                            Learn About Our 
                            <br />
                            Guarantee
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="slogan">
        <div class="container">
            <h1 class="text-center">
                Big Business Websites. Small Business Prices.
            </h1>
        </div>
    </section>

    <section id="websites-packages">
        <div class="container">
            <?php if (isset($_SESSION['reseller_id'])) { ?>
                <div class="row">
                    <div class="col-md-9"><p class="resdis"><strong>Reseller discount:</strong> A further 10% will be deducted during checkout.</p>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-9">
                    <div class="web-pak-head">
                        <h4>Select Package: (<span>click package title to select</span>)</h4>
                        <h3>All Packages Include</h3>
                    </div>
                    <div class="scroll-cover">

                        <section id="website-left-main">
                            <section id="package-head" class="clearfix">
                                <div id="all-include-info">
                                    <ul>
                                        <li><i class="business"></i><span>Business Name Verifications</span></li>
                                        <li><i class="preparation"></i><span>Preparation &amp; Filing of All Documents</span></li>
                                        <li><i class="ldg-monitor"></i><span>Logo Design Guarantee- 24/7 Business Monitoring Tool &amp; Document L</span></li>
                                    </ul>
                                </div>
                                <div id="all-package-pic">
                                    <div class="stack">
                                        <div class="pic">
                                            <a href="#" class="null">null</a>
                                            <img src="assets/images/budget-package-box.png" alt="budget package" />
                                            <div class="price-box">
                                                <span class="old-price">$599</span>
                                                <span class="new-price">$299</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="stack">
                                        <a class="gradient" href="javascript:void(0);">Most Popular</a>
                                        <img src="assets/images/gold-package-box.png" alt="gold package" />
                                        <div class="price-box">
                                            <span class="old-price">$999</span>
                                            <span class="new-price">$499</span>

                                        </div>
                                    </div>
                                    <div class="stack active">
                                        <a class="gradient" href="javascript:void(0);">Best Value</a>
                                        <img src="assets/images/elite-package-box.png" alt="elite package" />
                                        <div class="price-box">
                                            <span class="old-price">$1799</span>
                                            <span class="new-price">$899</span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="package-body" class="clearfix">
                                <?php $this->load->view('includes/reseller_web/web-packages-list'); ?>
                            </section>
                        </section>

                    </div>
                </div>

                <div class="col-lg-3 devoted-support">
                    <div class="pic">
                        <img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" />
                    </div>
                    <div class="gurantee-box">
                        <a href="#"><?php echo GUARANTEE_DAYS; ?> DAY, 100% MONEY BACK GUARANTEE</a>
                        <span>The best in the industry, by far.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="web-widgets">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 stack text-center">
                    <div class="pic">
                        <img class="img-responsive" src="assets/images/web-widget-pic1.png" alt="Site Online Within 2 Weeks!" />
                    </div>
                    <h3>Site Online Within 2 Weeks!</h3>
                    <p>We will provide your first concepts within 3 days. Further, most clients have their projects completed within 2 weeks.</p>
                    <p>Unlike other firms, we will have a dedicated designer allocated to your project!..</p>
                    <div class="text-center">
                        <a class="yellow-find-more-btn" href="<?php echo base_url('reseller_web/howitworks'); ?>">Find out more</a>
                    </div>
                </div>
                <div class="col-lg-6 stack text-center">
                    <div class="pic">
                        <img class="img-responsive" src="assets/images/web-widget-pic2.png" alt="<?php echo GUARANTEE_DAYS ?> Day, Money Back Guarantee!" />
                    </div>
                    <h3><?php echo GUARANTEE_DAYS ?> Day, Money Back Guarantee!</h3>
                    <p>The Best Guarantee in the industry. No one gets close. Our guarantee reflects our commitment to our Devoted Support&trade;.</p>
                    <p>Our guarantee underlies our unique design excellence. It's also part of our company slogan, "We Guarantee the Lowest Prices and the Best Money Back Guarantee!"... </p>
                    <div class="text-center">
                        <a class="yellow-find-more-btn" href="<?php echo base_url('reseller_web/guarantee'); ?>">Find out more</a>
                    </div>
                </div>
                <div class="col-lg-6 stack text-center">
                    <div class="pic">
                        <img class="img-responsive" src="assets/images/web-widget-pic3.png" alt="Expert SEO Included!" />
                    </div>
                    <h3>Expert SEO Included!</h3>
                    <p>Complete Search Engine Optimization (SEO) is provided with every package. Most design firms will charge extra for this!</p>
                    <p>Our SEO includes full indexing of your site and submission to the top 19 search engines.</p>
                    <div class="text-center">
                        <a class="yellow-find-more-btn" href="<?php echo base_url('reseller_web/seo'); ?>">Find out more</a>
                    </div>
                </div>
                <div class="col-lg-6 stack text-center">
                    <div class="pic">
                        <img class="img-responsive" src="assets/images/web-widget-pic4.png" alt="Hosting Free, For Life!" />
                    </div>
                    <h3>Hosting Free, For Life!</h3>
                    <p>Yes, that's correct..."For Life!" Our hosting includes 99.9% guaranteed uptime of your site.</p>
                    <p>We set all the hosting up for you, and ensure your site is fully live on the internet before we complete your project.</p>
                    <p>We also offer unlimited, 24/7 technical phone support, for life.</p>
                    <div class="text-center">
                        <a class="yellow-find-more-btn" href="<?php echo base_url('reseller_web/hosting'); ?>">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slogan">
        <div class="container">
            <h1 class="text-center">Our international awards show that we settle for only the best</h1>
        </div>
    </section>
    <section id="brand-logo1">
        <div class="container">
            <ul>
                <li><img alt="" src="assets/images/brand-logo1.jpg" class="img-responsive"></li>
                <li><img alt="" src="assets/images/brand-logo2.jpg" class="img-responsive"></li>
                <li><img alt="" src="assets/images/brand-logo3.jpg" class="img-responsive"></li>
                <li><img alt="" src="assets/images/brand-logo4.jpg" class="img-responsive"></li>
                <li><img alt="" src="assets/images/brand-logo5.jpg" class="img-responsive"></li>
            </ul>
        </div>
    </section>
</section>

<?php $this->load->view('includes/reseller_web/footer-common'); ?>