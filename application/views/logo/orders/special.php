<?php $this->load->view('includes/header-common-order_sunil'); ?>
<script type="text/javascript">
// $(function(){
// var ss=$.browser;
//    //console.log(ss);
//    if(ss.safari){
//      //console.log("safari");
//      }
//      else{
//    var mq = window.matchMedia( "(min-width: 768px)" );
// if (mq.matches) {
//    jQuery(document).ready(function($) {
// if (window.history && window.history.pushState) {
//     window.history.pushState('forward', null, 'orders/special/');
//     $(window).on('popstate', function() {
//    window.location="<?php echo base_url()?>orders/logobrief/";
//    return false;
//     });

//   }
// });
// }
// else{}
//      }
// });
</script>
<section id="order-process" class="content">
  <div class="container">
    <div class="row">
      <section class="green-vertical-divider2 clearfix">
        <div class="col-sm-7">
          <div class="leftcol">
            <div class="process12-top clearfix">
              <h2 class="black-title1">Act NOW. Save BIG!</h2>
              <p class="special">Special offers open only to our customers.</p>
              <p class="special">Offers below apply to <u>all</u> logo/stationery parts you may be ordering. </p>
              <p class="special">Our 1 month Offer Must End @ <span class="theme-red"> <?php echo $today; ?></span></p>
            </div>
            <form id="package-select" action="orders/specialoffers?uk=specialoffers" method="post">
             <!--  <div class="white-box">
                <div  class="onsale tungsten">On Sale</div>
                <h4 class="multi-color"><span class="theme-blue">24 Hours Express Delivery </span><span style="text-decoration: line-through;" class="theme-blue"><?php //echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span> <span class="theme-red">Now  <?php //echo CURRENCY . EXPRESS_DELIVERY_P ?></span></h4>
                <div class="clearfix">
                  <ul>
                    <li>
                      <p><strong>All  initial concepts</strong> given within 24 hours.</p>
                    </li>
                    <li>
                      <p><strong>All  revisions</strong> given within 24 hours.</p>
                    </li>
                    <li>
                      <p>Massively speeds up you getting your final logo! </p>
                    </li>
                    <li>
                    <p>Usually saves about 10 days from start to finish!</p>
                    </li>
                    <li>
                      <p>100% Risk Free, Money Back Guarantee.</p>
                    </li>
                  </ul>
                </div>
                <div class="cus-input-shell-cover text-center clearfix">
                  <div class="select-txt">Select here</div>
                  <div class="custom-input-shell">
                    <input type="checkbox" <?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == '24 hours delivery'){ echo 'checked="checked"';}?> class="custom-input" name="options" value="1">
                    <span class="unchk <?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == '24 hours delivery'){ echo 'chk';}?>"></span> </div>
                </div>
              </div> -->
              <div class="double-shadow1"></div>
              <div class="white-box">
                <div  class="onsale tungsten">On Sale</div>
                <h4 class="multi-color"><span class="theme-blue">Black + White Logo File </span><span style="text-decoration: line-through;" class="theme-blue"><?php echo CURRENCY . BLACK_N_WHITE_P_R ?></span> <span class="theme-red">Now  <?php echo CURRENCY . BLACK_N_WHITE_P?></span></h4>
                <ul>
                  <li>We’ll provide you with a black + white version of your final color logo.</li>
                  <li>Necessary for print and fax requirements.</li>
                  <li>Saves massively on future print costs.</li>
                  <!-- <li >100% Risk Free, Money Back Guarantee.</li> -->
                </ul>
                <div class="cus-input-shell-cover text-center clearfix">
                  <div class="select-txt">Select here</div>
                  <div class="custom-input-shell">

                    <!-- <input type="checkbox"<?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == 'Black and white additional logo design file'){ echo 'checked="checked"';}?> class="custom-input" name="options" value="2">
                    <span class="unchk <?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == 'Black and white additional logo design file'){ echo 'chk';}?>" ></span>  -->

 <input type="checkbox" class="custom-input"  name="options6" value="1" <?php echo (isset($_SESSION['options6'])) ? 'checked="checked"' : ''; ?>>
                                        <span class="unchk  <?php echo (isset($_SESSION['options6'])) ? "chk" : ""; ?>"></span>


                    </div>
                </div>
              </div>
              <!-- <div class="double-shadow1"></div>
              <div class="white-box">
                <div  class="onsale tungsten">On Sale</div>
                <h4 class="multi-color"><span class="theme-blue">Order both services above </span> <span class="theme-red">for only <?php //echo CURRENCY ?>29</span></h4>
                <ul>
                  <li>Saves <?php //echo CURRENCY ?>5 by ordering both!</li>
                </ul>
                <div class="cus-input-shell-cover text-center clearfix">
                  <div class="select-txt">Select here</div>
                  <div class="custom-input-shell">
                    <input type="checkbox" <?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == '24 Hour Delivery and Black and White file'){ echo 'checked="checked"';}?> class="custom-input" name="options" value="3">
                    <span class="unchk <?php //if(@$_SESSION['poptions_pack'.$_SESSION['p_index']] == '24 Hour Delivery and Black and White file'){ echo 'chk';}?>" ></span> </div>
                </div>
              </div> -->
              <div class="double-shadow1"></div>
              <div class="clearfix">
                <h4 class="multi-color2 text-center theme-red"> Our 1 month Offer <span class="theme-red"> Must End</span> <br />
                 <?php echo $today; ?></h4>
                <ul class="txt-widget1">
                  <!--<li>Great value for money</li>-->
                  <li>Life time investment for your business</li>
                </ul>
              </div>
              <div class="feedback-box clearfix">
                <div class="inner-lvl clearfix">
                  <div class="pic-holder"> <img src="<?php echo base_url()?>assets/images/user-pic.jpg" alt="user" /> </div>
                  <div class="desc-testo">
                    <h6><strong>Debra Doubek,</strong> MD, 3X Business Solutions.</h6>
                    <p>"It was very exciting to get all my logos within 
                      6 hours. The black and white file provided full 
                      peace of mind. Thanks." </p>
                  </div>
                </div>
              </div>
              <div class="double-shadow1"></div>

              <div class="normal-desc-box text-center">
              <a href="<?php echo base_url() ?>orders/logobrief" style="color:#666666;font-size:18px; float:left;"><i class="fa fa-chevron-left" aria-hidden="true"></i><span style="padding-left:17px;">Back </span></a>

                <button class="green-btn order-submit-btn" type="submit" style="float:right;"> <span data-hover="Continue">Continue <i class="fa fa-chevron-right" aria-hidden="true"></i></span> </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-5"> 
          <script type="text/javascript" src="<?php echo base_url()?>assets/js/floating.js"></script> 
          <script type="text/javascript">
                                $(document).ready(function(){
                                    //for floating yellow box Buy More Save More
                              /*$(window).scroll(function(){
                                var winPos = $(this).scrollTop();
                                if(winPos > 100){
                                  $("#yellow-box-unfloat").hide();
                                }
                                else{
                                  $("#yellow-box-unfloat").show();
                                }
                              });*/
                              
                              floatingMenu.add('floated',  
                                  {  
                                      targetRight: 0,  
                                      targetTop: 10,  
                                      snap: true  
                                  });
                                });
                                </script> 
          
          <style>
.inner-border-box.row, .inner-border-box.row .col-sm-8, .inner-border-box.row .col-sm-2 {
  margin: 0;
  padding: 0;
}
.inner-border-box.row .col-sm-2.pull-right {
  text-align: right;
}
</style>
          <div id="floated">
            <?php include('floated-special.php');?>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<script type="text/javascript"> 
         $(document).ready(function(){      
      

       $(".custom-input-shell").find(".unchk").on("click", function () {
            //console.log($(this).is(':checked'));

            //return false;options1
            var name_input = $(this).prev('input').attr('name');
            

           
            var val = $(this).prev("input").val();
            var row_class = $(this).prev("input").attr("name");
            var ext_value = 1;     // for optional(cnofigurable) packages
            var checked_status = 0;  // for default checked value of optional(cnofigurable) packages
            
           

            if ($(this).hasClass("chk")) {
                $(this).removeClass("chk").prev("input").attr("checked", false);
                val = 0;
            }
            else {
                $(this).addClass("chk").prev("input").attr("checked", true);
            }

            $.post("<?php echo site_url('orders/save_extra_options') ?>", {extra_options: row_class, val: val, ext_option: ext_value}, function (data) {
       
      

                var opt = eval("(" + data + ")");

                if (opt.extra_options) {
                    if ($('.' + row_class).length) {
                    }
                    else {
                        $(".calc-box.cart").append("<div class='inner-border-box " + row_class + " row' />");
                    }
                    $(".calc-box.cart").find("." + row_class).html('<span class="col-sm-8">' + opt.extra_options + '</span><span class="col-sm-2"><a href="javascript:void(0)" class="remove_package"  id="' + row_class + '___' + opt.extra_options + '___' + row_class + '_price___' + opt.extra_options_price + '" style="display:none"><img src="<?php echo base_url() . "assets/images/remove.gif"; ?>" /></a></span><span class="col-sm-2 pull-right">' + '<?php echo CURRENCY; ?>' + '<span class="package_price">' + opt.extra_options_price + '</span></span>');

                    $('.re_' + row_class).remove(); //removing item form reselect section if there is current item
                }
                else {
                    $('.' + row_class).remove();
                }

                get_total();

            });
        });
        });
        </script>
<?php /*?><footer id="footer">
  <section id="blue-bar-footer">
    <div class="container">
      <div class="row">
        <div class="lag col-xs-3"> <span class="small">We've got your back</span> <span class="big">24x7x365</span> </div>
        <div class="lag-icon col-xs-3"> <i class="mobile-icon"></i><span style="width: 120px;">Sales &amp; Support (866) 598-6266</span> </div>
        <div class="live-support-cover lag-icon col-xs-3"> <i class="live-support"></i><span><a href="javascript:void(0);">Live Support</a></span> </div>
        <div style="margin: 5px 0 0;" class="lag-icon col-xs-3"> <i class="mail-icon"></i><span><a href="<?php echo base_url()?>contact.php">Email Us</a></span> </div>
      </div>
    </div>
  </section>
  <section id="black-bar-footer">
    <div class="container">
      <div class="row">
        <ul class="col-xs-3">
          <li><a data-hover="Management team" href="<?php echo base_url()?>management.php">Management team</a></li>
          <li><a data-hover="Quality control" href="<?php echo base_url()?>quality.php">Quality control</a></li>
          <li><a data-hover="Partnership programs" href="<?php echo base_url()?>partnership.php">Partnership programs</a></li>
          <li><a data-hover="Terms and conditions" href="<?php echo base_url()?>terms.php">Terms and conditions</a></li>
          <li><a data-hover="View our portfolio" href="<?php echo base_url()?>portfolio.php">View our portfolio</a></li>
          <li><a data-hover="Start my logo" href="<?php echo base_url()?>packages.php">Start my logo</a></li>
        </ul>
        <ul class="col-xs-3">
          <li><a data-hover="Guarantee" href="<?php echo base_url()?>guarantee.php">Guarantee</a></li>
          <li><a data-hover="Privacy policy" href="<?php echo base_url()?>privacy.php">Privacy policy</a></li>
          <li><a data-hover="Sample project" href="<?php echo base_url()?>sampleproject.php">Sample project</a></li>
          <li><a data-hover="FAQ" href="<?php echo base_url()?>faq.php">FAQ</a></li>
          <li><a data-hover="See our packages" href="<?php echo base_url()?>packages.php">See our packages</a></li>
          <li><a data-hover="Our charitable work" href="<?php echo base_url()?>charity.php">Our charitable work</a></li>
        </ul>
        <ul class="col-xs-3">
          <li><a data-hover="Contact Us" href="<?php echo base_url()?>contact.php">Contact us</a></li>
          <li><a data-hover="Compare prices" href="<?php echo base_url()?>compare.php">Compare prices</a></li>
          <li><a data-hover="Case study" href="<?php echo base_url()?>casestudy.php">Case study</a></li>
          <li><a data-hover="More Services" href="<?php echo base_url()?>new44/more_services.php">More Services</a></li>
        </ul>
        <div class="pic col-xs-2"> <img class="img-responsive" src="<?php echo base_url()?>assets/images/devoted-support-pic.png" alt="devoted support" width="165" height="137" /> </div>
      </div>
    </div>
  </section>
  <section id="light-gray-bar-footer">
    <div class="container">
      <div class="privacy">
        <p><strong>Privacy Policy:</strong> We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you.</p>
        <br />
        <br />
        <p>Copyright 2003-2015. Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws. <br />
          LogoDesignGuarantee.com is Committed to Producing Award-Winning Logos!</p>
      </div>
      <div class="godaddy">
        <ul>
          <li> 
            <!--<a target="_blank" href="http://certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb&pop=true"><img src="<?php echo base_url()?>assets/images/godaddy.png" alt="go daddy" width="146" height="31" /></a>--> 
            <!--<span id="siteseal" style="display: inline-block;"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=qHwD7KdZ2yocqsiUmu3U0vMD7qlfms8eOr01fHGM4RGqcjqakuedi"></script></span> -->
            <script type="text/JavaScript">
                                //<![CDATA[
                               <!-- var sealServer=document.location.protocol+"//seals.websiteprotection.com/sealws/503846bb-7bc4-4d46-ab46-09bccbdd56cb.gif";var certServer=document.location.protocol+"//certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb";var hostName="logodesignguarantee.com";document.write(unescape('<div style="text-align:center;margin:0 auto;"><a target="_blank" href="'+certServer+'&pop=true" style="display:inline-block;"><img src="'+sealServer+'"  alt="Website Protection&#153; Site Scanner protects this website from security threats." title="This Website Protection site seal is issued to '+ hostName +'. Copyright &copy; 2014, all rights reserved."oncontextmenu="alert(\'Copying Prohibited by Law\'); return false;" border="0" width="146" height="31" /></a></div>'));-->
                                //]]>
                                </script> 
          </li>
          <li> 
            <!--<a target="_blank" href="https://smarticon.geotrust.com/smarticonprofile?Referer=http://www.logodesignguarantee.com"><img src="<?php echo base_url()?>assets/images/smarticon.gif" alt="smarticon" width="115" height="55" /></a>--> 
            <!-- GeoTrust QuickSSL [tm] Smart Icon tag. Do not edit. --> 
            <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"
                                 SRC="//smarticon.geotrust.com/si.js"></SCRIPT> 
            <!-- end GeoTrust Smart Icon tag --></li>
          </li>
        </ul>
      </div>
      <div class="payment-gateway-icons">
        <ul>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/american-express.gif" alt="american express" width="63" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/visa.gif" alt="visa" width="63" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard.gif" alt="mastercard" width="63" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/discover.gif" alt="discover" width="63" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/paypal.gif" alt="paypal" width="63" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/verified-visa.gif" alt="verified visa" width="70" height="34" /></a></li>
          <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard-secure.gif" alt="mastercard secure" width="100" height="34" /></a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="brand-logo2">
    <div class="container">
      <div class="row">
        <div class="round-box col-xs-10 col-xs-offset-1">
          <ul>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/business.jpg" alt="business"  width="180" height="80" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/microsoft.jpg" alt="microsoft"  width="287" height="80" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/paypal.jpg" alt="paypal"   width="99" height="80"/></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/tech.jpg" alt="tech"   width="175" height="80"/></a></li>
          </ul>
          <ul>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/fsb.jpg" alt="fsb"  width="49" height="60" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/cardsave.jpg" alt="cardsave"  width="122" height="60" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/dNb.jpg" alt="dNb"  width="84" height="60" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/iso.jpg" alt="iso"  width="94" height="60" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/nasscom.jpg" alt="nasscom"  width="101" height="60" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/worldpay.jpg" alt="worldpay"  width="106" height="60" /></a></li>
          </ul>
          <ul>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/google.jpg" alt=""  width="93" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/yahoo.jpg" alt=""  width="103" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/ukwda.jpg" alt=""  width="101" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/amazon.jpg" alt=""   width="73" height="45"/></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/paypal2.jpg" alt=""  width="81" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/microsoft_net.jpg" alt=""  width="64" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/bing.jpg" alt=""  width="87" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/ebay.jpg" alt=""  width="61" height="45" /></a></li>
            <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/brand-logos/sage_pay.jpg" alt=""  width="79" height="45" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</footer><?php */?>
<br/><br/>
 <?php $this->load->view('includes/footer-common'); ?>
</section>
<div class="package-info-box"></div>


<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/custom.js"></script> 
<!--<script src="https://track.monitis.com/mon_analytics.jsp?v=1" type="text/javascript"></script>--> 
<script>
            $(document).ready(function(){
                
                var offset = 220;
                var duration = 500;
                $(window).scroll(function() {
                    if ($(this).scrollTop() > offset) {
                        $('#toTop').fadeIn(duration);
                    } else {
                        $('#toTop').fadeOut(duration);
                    }
                });
                
                $("#toTop").click(function () {
                   //1 second of animation time
                   //html works for FFX but not Chrome
                   //body works for Chrome but not FFX
                   //This strange selector seems to work universally               
                   $("html, body").animate({scrollTop: 0}, 1000);
                });
            });
            //Monitis 
            //monitorus_account_number ="883917623";
            //start_mon_counter();    
            //Monitis 
               
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-23784014-1']);
            _gaq.push(['_trackPageview']);
            
            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();        
        </script>
<div id="toTop"><img src="<?php echo base_url()?>assets/images/scroll_top.png" width="30" height="30" class="img-responsive" /></div>
</body><?php //unset($_SESSION['cmp_logo_name']);
 //echo "<pre>"; print_r($_SESSION);
 ?>
 

</html>