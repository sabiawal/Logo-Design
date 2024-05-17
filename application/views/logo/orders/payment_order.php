<?php $this->load->view('includes/header-common-order'); ?>
<script type="text/javascript">
$(function(){
var ss=$.browser;
		console.log(ss);
		if(ss.safari){
			console.log("safari");
			}
			else{
    var mq = window.matchMedia( "(min-width: 768px)" );
if (mq.matches) {
   jQuery(document).ready(function($) {
if (window.history && window.history.pushState) {
    window.history.pushState('backward', null, 'orders/paymentorder/');
    $(window).on('popstate', function() {
		//alert("back button clicked");
	  window.location="<?php echo base_url()?>orders/specialoffers/";
	  return false;
    });

  }
});
}
else{}
			}
});
</script>
<style>
label.error{
	color: #f00;
    font-size: 15px !important;
    margin: 0 !important;
    padding: 0 !important;
	background:none !important;
	width:120px !important;
	text-align:left;
	margin-left:4px !important;
		}
		
		#jetpay-form label {

  width: 150px;
}
.presentbks{
	border:1px solid green !important;
	}
</style>
<section id="order-process" class="content">
  <div class="container">
    <div class="row">
      <section class=" clearfix">
        <div class="col-sm-7">
          <div class="jetpay-form-outer">
            <form id="jetpay-form" method="post" action="">
              <h3>Payment details </h3>
              <ul>
                <li>
                  <label>Name on card</label>
                  <input type="text" name="fullname" value="<?php echo @$_SESSION['fname'].' '.@$_SESSION['lname']?>" class="required" />
                </li>
                <li>
                  <label>Card number</label>
                  <input type="text" name="cardnum" class="required creditcard presentbks" />
                </li>
                <li>
                  <label>Card expiry</label>
                  <span>Mo.</span>
                  <select class="month required" name="expmonth">
                    <option value="">--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <span>Yr.</span>
                  <select class="year required" name="expyear">
                    <option value="">----</option>
                    <option value="15">2015</option>
                    <option value="16">2016</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                    <option value="24">2024</option>
                    <option value="25">2025</option>
                    <option value="26">2026</option>
                    <option value="27">2027</option>
                    <option value="28">2028</option>
                    <option value="29">2029</option>
                    <option value="30">2030</option>
                  </select>
                </li>
                <li>
                  <label>CVV number</label>
                  <div class="multiple-items">
                    <input type="text" name="cvv" class="required"/>
                    <p class="silver-txt" style="font-weight:700;">The CVV Number is the last 3 digits found on the back of your debit or credit card. </p>
                  </div>
                </li>
                <li>
                  <label>Package description</label>
                  <div class="multiple-items" id="pack_desc">
                    <p><?php echo $_SESSION['logo_package']?> ($<?php echo $_SESSION['logo_price']?>)
                    <?php 
					if(isset($_SESSION['web_package'])){echo '<span>, '.$_SESSION['web_package'].' ($'.$_SESSION['web_price'].')</span>';}if(isset($_SESSION['brouchure_package'])){echo '<span>, '.$_SESSION['brouchure_package'].' ($'.$_SESSION['brouchure'].')</span>';}if(isset($_SESSION['options'])){echo '<span>, '.$_SESSION['options'].' ($'.$_SESSION['options_price'].')</span>';} for($i=1;$i<=20;$i++){if(isset($_SESSION['options'.$i]) && $_SESSION['options'.$i] !=''){ echo '<span>, '.$_SESSION['options'.$i].' ($'.$_SESSION['options'.$i.'_price'].')</span>';}}?></p>
                    <span class="pay_discount">
                    <?php if($purchase_dis_rate > 0){?>
					<span style="color:#c00"> Gross Total : $<?php echo $gross_total_price;?></span>
                    <br/>
                    <?php 
					$purchase_dis_rate = $this->logodesignmodel->get_purchase_dis_rate($gross_total_price);
       
             $purchase_dis    = round($purchase_dis_rate*$gross_total_price,2);
			 $purchase_dis_rate=$purchase_dis_rate*100;
			 echo 'Purchase Discount '.$purchase_dis_rate.'% ($'.$purchase_dis.')';
           
        }
					?></span>
                  </div>
                </li>
                <li>
                  <label>Total amount ($)</label>
                 <span class="basket_total_price"><?php  if(@$purchase_dis_rate > 0){echo $gross_total_price-$purchase_dis;}else{echo @$gross_total_price;}?></span>
                 </li>
              </ul>
              <div class="normal-desc-box text-center"> 
                
                <!--<a href="javascript:history.go(-1)" class="green-btn order-back-btn">
    										<span data-hover="Back">Back</span>
    									</a>-->
                <button type="submit" class="green-btn order-submit-btn" name="submit"> <span data-hover="Place Your Order">Place Your Order</span> </button>
              </div>
            </form>
          </div>
          <div class="trust-icons">
            <div class="godaddy1">
              <ul>
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
        </div>
        <div class=" col-xs-12 col-md-5 col-sm-5"> 
         
          <style>
.inner-border-box.row, .inner-border-box.row .col-sm-8, .inner-border-box.row .col-sm-2 {
	margin: 0;
	padding: 0;
}
.inner-border-box.row .col-sm-2.pull-right {
	text-align: right;
}
</style>
          <div <?php if($this->uri->segment(2) != 'paymentorder'){?>id="floated"<?php }?>>
            <?php include('floated-special.php');?>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>
<!-- Form Validation --> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script> 
<script type="text/javascript">

            $('#jetpay-form').validate(
            {
                rules:
                {
                   
                    fullname:"required",
                    cardnum:"required",
                    expmonth:"required",
                    expyear:"required",
                    cvv: "required"
                },
                messages:
                {
                    
                    fullname:"Enter Full Name",
                    cardnum:"Enter card number",
                    expmonth:"Select Exp Month",
                    expyear:"Select Exp Year",
                    cvv: "Enter CVV number"                                                       
                }
                
            });
        </script> 
<!-- /Form Validation -->

<footer id="footer">
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
            <!--<a target="_blank" href="http://certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb&pop=true"><img src="<?php echo base_url()?>assets/images/godaddy.png" alt="go daddy" width="146" height="31" /></a>
            <span id="siteseal" style="display: inline-block;"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=qHwD7KdZ2yocqsiUmu3U0vMD7qlfms8eOr01fHGM4RGqcjqakuedi"></script></span> 
            <script type="text/JavaScript">
                                //<![CDATA[
                                var sealServer=document.location.protocol+"//seals.websiteprotection.com/sealws/503846bb-7bc4-4d46-ab46-09bccbdd56cb.gif";var certServer=document.location.protocol+"//certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb";var hostName="logodesignguarantee.com";document.write(unescape('<div style="text-align:center;margin:0 auto;"><a target="_blank" href="'+certServer+'&pop=true" style="display:inline-block;"><img src="'+sealServer+'"  alt="Website Protection&#153; Site Scanner protects this website from security threats." title="This Website Protection site seal is issued to '+ hostName +'. Copyright &copy; 2014, all rights reserved."oncontextmenu="alert(\'Copying Prohibited by Law\'); return false;" border="0" width="146" height="31" /></a></div>'));
                                //]]>
                                </script> --> 
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
</footer>
</section>
<div class="package-info-box"></div>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="<?php echo base_url()?>assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url()?>assets/js/respond.min.js"></script>
    <![endif]--> 
<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]--> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<!--<script src="<?php echo base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>--> 
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
</body>
<?php //echo "<pre>"; print_r($_SESSION);?>
<script type="text/javascript">
$(function(){
	$("input[name='fullname']").focus(function(){
	$(this).addClass('presentbks');
	$("input[name='cardnum']").removeClass('presentbks');
	});
$("input[name='cardnum']").focus();
$("input[name='cardnum']").focus(function(){
	$(this).addClass('presentbks');
	$("input[name='fullname']").removeClass('presentbks');
	});

$("input[name='fullname'], input[name='cardnum']").blur(function(){
	$(this).removeClass('presentbks');
	});

	});
</script>

<?php //echo "<pre>";print_r($_SERVER);?>
</html>