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
                                Get 6 samples for just <span style="text-decoration: line-through;"><?php echo CURRENCY . START_LP_P_R; ?></span> <?php echo CURRENCY . START_LP_P; ?>!
                            </p>
                        <?php if (!isset($_SESSION['reseller_id'])): ?>
                            <a href="#get-started" data-toggle="tab" class="button" id="get_started">Get Started</a>
                        <?php endif; ?>
                    
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $('#get_started').click(function () {
            $('html,body').animate({ scrollTop: $("#get_start_active").offset().top }, 'slow');
            $("#get_start_active").addClass('active');
            $("#get_start_active").siblings().removeClass('active');
        });
    })
</script>