<style>

    #light-gray-bar-footer .privacy p {
    font-size: 15px;
    font-weight: 300;
    margin-bottom: -1rem;
}
    #blue-bar-footer .lag .big {
        font-size: 27px !important;
    }

    #blue-bar-footer .lag .small {
        width: 100px;
    }

    #blue-bar-footer .lag-icon .mobile-icon {
        width: 50px;
        margin: 0 auto;
        height: 42px;
        background: 0 0;
    }

    #blue-bar-footer .lag-icon span {
        display: inline-block;
        text-align: left;
        margin-left: 10px;
        text-decoration: underline;
    }

    #blue-bar-footer {
        background: #4c73a3;
        padding: 12px 0;
        color: #fff;
        text-align: center;
        font-weight: bold;
    }

    #brand-logo2 li {
        display: inline-block;
    }

    @media only screen and (max-width: 490px) {

        #black-bar-footer .col-xs-3,
        #brand-logo2 li {
            /* width: 100%; */
        }

        #brand-logo2 li {
            display: inline-block;
        }
        .dnb{
            margin-right:5rem;
        }
    }

    @media only screen and (max-width: 490px) {
        .bl-control {
            width: 50%;
            margin-bottom: 30px;
        }
    }
</style>
<footer id="footer">


    <section id="blue-bar-footer">
        <div class="container">
            <div class="row">
                <div class="lag col-xs-3">
                    <span class="small">We've got your back</span>
                    <span class="big">24x7x365</span>
                </div>

                <div class="lag-icon col-xs-3">
                    <i class="mobile-icon" style="font-size: 12px; position:relative; top:5px;">Sales &amp; Support</i><span><a style="font-size: 27px; font-weight:600;" href="https://web.archive.org/web/20181123100553/tel:0845 869 8793">0845 869 8793</a></span>
                </div>
                <!--<div class="live-support-cover lag-icon col-xs-3">-->
                <div class="lag-icon col-xs-3">
                    <!--  <i class="live-support"></i><span><a href="javascript:void(0);">Live Support</a></span>-->

                    <a href="javascript:void(Tawk_API.toggle())"><i class="live-support"></i><span>Live Chat</span></a>
                </div>

                <div style="margin: 5px 0 0;" class="lag-icon col-xs-3">
                    <i class="mail-icon"></i><span><a href="https://web.archive.org/web/20181123100553/https://logodesignguarantee.co.uk/contact.php">Email Us</a></span>
                </div>

                <!-- <div style="margin: 5px 0 0; padding-top:10px;" class="lag-icon col-xs-1" >
                   Est. since<br> 
                   <span style="font-size:24px;"><strong>2001</strong></span>         
                </div> -->

                <!--<div style="margin: 5px 0 0;" class="lag-icon col-xs-2">
                   Over <br> 
                   <span style="font-size:24px;"><strong>285,000 </strong></span>         <br>
                   clients served!                        
                </div> -->
            </div>
        </div>
    </section>



    <!-- <section id="blue-bar-footer">
        <div class="container">
            <div class="row">
                <div class="lag col-xs-3">
                    <span class="small">We've got your back</span>
                    <span class="big">24x7x365</span>
                </div>
                <div class="lag-icon col-xs-3">
                    <i class="mobile-icon"></i><span style="width: 120px;">Sales &amp; Support <a href="tel:<?php echo PHONE_NO_; ?>"><?php echo PHONE_NO_; ?></a></span>
                </div>
                <div class="live-support-cover lag-icon col-xs-3">
                    <i class="live-support"></i><span><a style="font-weight:600;" href="javascript:void(0);">Live Support</a></span>
                </div>
                <div style="margin: 5px 0 0;" class="lag-icon col-xs-3">
                    <i class="mail-icon"></i><span><a style="font-weight:600;" href="<?php echo site_url('contact') ?>">Email Us</a></span>
                </div>
            </div>
        </div>
    </section> -->

    <section id="black-bar-footer" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <ul class="col-xs-6">
                    <li><a data-hover="Management team" href="<?php echo site_url('management'); ?>">Management team</a></li>
                    <li><a data-hover="Quality control" href="<?php echo site_url('quality'); ?>">Quality control</a></li>
                    <li><a data-hover="Partnership programs" href="<?php echo site_url('partnership'); ?>">Partnership programs</a></li>
                    <li><a data-hover="Terms and conditions" href="<?php echo site_url('terms'); ?>">Terms and conditions</a></li>
                    <li><a data-hover="View our portfolio" href="<?php echo site_url('portfolio'); ?>">View our portfolio</a></li>
                    <li><a data-hover="Start my logo" href="<?php echo site_url('packages'); ?>">Start my logo</a></li>
                    <li><a data-hover="Guarantee" href="https://web.archive.org/web/20181123100553/https://logodesignguarantee.co.uk/guarantee.php">Guarantee</a></li>
                    <li><a data-hover="Privacy policy" href="<?php echo site_url('privacy'); ?>">Privacy policy</a></li>
                </ul>
                <ul class="col-xs-6">
                    <?php /* ?><li><a data-hover="Guarantee" href="<?php echo site_url('guarantee'); ?>">Guarantee</a></li><?php */ ?>
                    <li><a data-hover="Sample project" href="<?php echo site_url('sampleproject'); ?>">Sample project</a></li>
                    <li><a data-hover="FAQ" href="<?php echo site_url('faq'); ?>">FAQ</a></li>
                    <li><a data-hover="See our packages" href="<?php echo site_url('packages'); ?>">See our packages</a></li>
                    <li><a data-hover="Our charitable work" href="<?php echo site_url('charity'); ?>">Our charitable work</a></li>
                    <li><a data-hover="Contact Us" href="<?php echo site_url('contact'); ?>">Contact us</a></li>
                    <li><a data-hover="Compare prices" href="<?php echo site_url('compare'); ?>">Compare prices</a></li>
                    <li><a data-hover="Case study" href="<?php echo site_url('casestudy'); ?>">Case study</a></li>
                    <li><a data-hover="More Services" href="<?php echo site_url('new44/more_services'); ?>">More Services</a></li>
                </ul>
                <!-- <div class="pic col-xs-2">
                    <img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" width="165" height="137" />
                </div> -->
            </div>
        </div>
    </section>

    <section id="light-gray-bar-footer">
        <div class="container">
            <div class="privacy">
                <p><strong>Privacy Policy:</strong> We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you.</p>
                <br />

                <p>Copyright 2003-<?php echo date('Y'); ?>. <span class="for-desktop">Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws.</span> 
                   
                    <span style="margin-top:5px; display:block;"> <?php echo SITE_NAME; ?> is Committed to Producing High Quality Logos!</span>

                </p>
                <br>
            </div>
           
            <div class="payment-gateway-icons"style="padding-top:15px;">
                <ul style="padding-left:0px;">
                    <li><a href="javascript:void(0);"><img src="assets/images/american-express.gif" alt="american express" width="63" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/visa.gif" alt="visa" width="63" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/mastercard.gif" alt="mastercard" width="63" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/discover.gif" alt="discover" width="63" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/paypal.gif" alt="paypal" width="63" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/verified-visa.gif" alt="verified visa" width="70" height="34" /></a></li>
                    <li><a href="javascript:void(0);"><img src="assets/images/mastercard-secure.gif" alt="mastercard secure" width="100" height="34" /></a></li>
                </ul>
            </div>
        </div>
    </section>


    <section id="brand-logo2">
        <div class="container">
            <div class="row">
                <div class="round-box col-xs-10 col-xs-offset-1">
                    <ul class="for-mobile" style="padding: 0px;">

                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/microsoft.jpg" alt="microsoft" width="287" height="80"></a></li>
                        <li><a href="javascript:void(0);"><img class="bl-img-control" src="assets/images/brand-logos/tech.jpg" alt="tech" width="175" height="80"></a></li>

                        <li class="bl-control"><a href="javascript:void(0);"><img src="assets/images/brand-logos/fsb.jpg" alt="fsb" width="49" height="60"></a></li>

                        <li class="bl-control2"><a href="javascript:void(0);"><img class="dnb" src="assets/images/brand-logos/dNb.jpg" alt="dNb" width="84" height="60"></a></li>
                        <li class="bl-control1"><a href="javascript:void(0);"><img src="assets/images/brand-logos/iso.jpg" alt="iso" width="94" height="60"></a></li>
                        <li class="bl-control2"><a href="javascript:void(0);"><img src="assets/images/brand-logos/nasscom.jpg" alt="nasscom" width="101" height="60"></a></li>
                    </ul>
                    <ul class="for-desktop">
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/microsoft.jpg" alt="microsoft" width="287" height="80"></a></li>
                        <li><a href="javascript:void(0);"><img class="bl-img-control" src="assets/images/brand-logos/tech.jpg" alt="tech" width="175" height="80"></a></li>

                        <li class="bl-control"><a href="javascript:void(0);"><img src="assets/images/brand-logos/fsb.jpg" alt="fsb" width="49" height="60"></a></li>

                        <li class="bl-control2"><a href="javascript:void(0);"><img src="assets/images/brand-logos/dNb.jpg" alt="dNb" width="84" height="60"></a></li>
                        <li class="bl-control1"><a href="javascript:void(0);"><img src="assets/images/brand-logos/iso.jpg" alt="iso" width="94" height="60"></a></li>
                        <li class="bl-control2"><a href="javascript:void(0);"><img src="assets/images/brand-logos/nasscom.jpg" alt="nasscom" width="101" height="60"></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/google.jpg" alt="" width="93" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/yahoo.jpg" alt="" width="103" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/ukwda.jpg" alt="" width="101" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/amazon.jpg" alt="" width="73" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/paypal2.jpg" alt="" width="81" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/microsoft_net.jpg" alt="" width="64" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/bing.jpg" alt="" width="87" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/ebay.jpg" alt="" width="61" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/sage_pay.jpg" alt="" width="79" height="45" /></a></li>
                    </ul>
                </div>
            </div>


        </div>
        <br>
        Logo Design Guarantee, Hithercroft Rd, Wallingford, Oxfordshire, OX10 9EZ

    </section>



    <!-- <section id="brand-logo2">
        <div class="container">
            <div class="row">
                <div class="round-box col-xs-10 col-xs-offset-1">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/business.jpg" alt="business" width="180" height="80" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/microsoft.jpg" alt="microsoft" width="287" height="80" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/paypal.jpg" alt="paypal" width="99" height="80" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/tech.jpg" alt="tech" width="175" height="80" /></a></li>
                    </ul>
                    <ul>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/fsb.jpg" alt="fsb" width="49" height="60" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/cardsave.jpg" alt="cardsave" width="122" height="60" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/dNb.jpg" alt="dNb" width="84" height="60" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/iso.jpg" alt="iso" width="94" height="60" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/nasscom.jpg" alt="nasscom" width="101" height="60" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/worldpay.jpg" alt="worldpay" width="106" height="60" /></a></li>
                    </ul>
                    <ul>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/google.jpg" alt="" width="93" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/yahoo.jpg" alt="" width="103" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/ukwda.jpg" alt="" width="101" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/amazon.jpg" alt="" width="73" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/paypal2.jpg" alt="" width="81" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/microsoft_net.jpg" alt="" width="64" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/bing.jpg" alt="" width="87" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/ebay.jpg" alt="" width="61" height="45" /></a></li>
                        <li><a href="javascript:void(0);"><img src="assets/images/brand-logos/sage_pay.jpg" alt="" width="79" height="45" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
</footer>
</section>
<div class="package-info-box"></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!--<script src="<?php echo base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>-->
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/modernizr.custom.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.loadmask.min.js"></script>
<?php if ($this->router->method == 'thankyou') : ?>
    <?php
    $price = $_GET['p'];
    if (SITE_ID == '7') :
        $price = $price / 100;
    endif;
    ?>
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = <?php echo GOOGLE_CONVERSION_ID; ?>;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "<?php echo GOOGLE_CONVERSION_LABEL; ?>";
        var google_conversion_value = <?php echo $price; ?>;
        /* ]]> */
    </script>
    <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/<?php echo GOOGLE_CONVERSION_ID; ?>/?label=<?php echo GOOGLE_CONVERSION_LABEL; ?>&amp;guid=ON&amp;script=0" alt="img" />
        </div>
    </noscript>
<?php endif; ?>
<!--<script src="https://track.monitis.com/mon_analytics.jsp?v=1" type="text/javascript"></script>-->
<script>
    // $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();

    //     var offset = 220;
    //     var duration = 500;
    //     $(window).scroll(function () {
    //         if ($(this).scrollTop() > offset) {
    //             $('#toTop').fadeIn(duration);
    //         } else {
    //             $('#toTop').fadeOut(duration);
    //         }
    //     });

    // $("#toTop").click(function () {
    //1 second of animation time
    //html works for FFX but not Chrome
    //body works for Chrome but not FFX
    //This strange selector seems to work universally               
    //         $("html, body").animate({scrollTop: 0}, 1000);
    //     });
    // });
    //Monitis 
    //monitorus_account_number ="883917623";
    //start_mon_counter();    
    //Monitis 

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '<?php echo GOOGLE_ANALYTICS ?>']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- <div id="toTop"><img src="assets/images/scroll_top.png" width="30" height="30" class="img-responsive" /></div>	  -->
</body>

</html>