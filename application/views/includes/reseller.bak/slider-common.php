<?php
$rm = $this->router->method;
if (($this->router->fetch_class() == 'reseller')):  // checking controller name 
    switch ($rm) {
        case 'portfolio':
            ?>
            <section style="margin: 0 0 30px;" id="inner-cont-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="inner-banner">
                                <img src="assets/images/logo-portfolio-banner.jpg" alt="logo portfolio banner" width="1140" height="367" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;
        default:
            ?>
            <section id="inner-cont-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="inner-banner">
                                <img src="assets/images/hero/logo-package-pic1.jpg" alt="hand drawn to perfection"/>
                                <div style="top: 10px;" class="banner-caption process-ban-caption">
                                    <div class="banner-caption-head">
                                        <h2>
                                            Get a Minimum
                                            <br />
                                            of <span class="inner-title-green"> 6 </span> Samples...
                                        </h2>
                                    </div>
                                    <div class="banner-desc">
                                        <p>
                                            We offer the most logo samples for the
                                            <br />
                                            lowest price
                                        </p>
                                        <p>
                                            3 In-House expert designers work on your logo
                                        </p>
                                        <p>
                                            Get 6 samples for just 
                                            <?php if (SHOW_REGULAR_PRICE): ?>
                                                <span style="text-decoration: line-through;"><?php echo CURRENCY . START_LP_P; ?></span> 
                                            <?php endif; ?>
            <?php echo CURRENCY . number_format(START_LP_P_RES, '2', '.', ''); ?>!
                                        </p>
                                    </div>
                                    < <?php if (!isset($_SESSION['reseller_id'])): ?>
                                        <a href="#get-started" data-toggle="tab" class="button" id="get_started">Get Started</a>
            <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                $(function () {
                    $('#get_started').click(function () {
                        $("#get_start_active").addClass('active');
                        $("#get_start_active").siblings().removeClass('active');
                    });
                })
            </script>
            <?php
            break;
    }
endif;
?>