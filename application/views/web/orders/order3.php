<?php $this->load->view('includes/web/header-common_new'); ?>
<?php
if ($purchase_dis > 0):
$order_desc .= '<br ><span style="color:#c00"> Gross Total : ' . CURRENCY . $gross_total_price . '</span> <br>Purchase Discount ' . ($purchase_dis_rate * 100) . '% (' . CURRENCY . $purchase_dis . ')';
endif;
if ($promotional_discount > 0):
$order_desc .= ', <br> Promotional Discount (' . CURRENCY . $promotional_discount . ')';
endif;
if ($tax_amount > 0):
$order_desc.= ', <br> Tax Amount ' . CURRENCY . $tax_amount;
endif;
$order_desc .='.';
?>
<body>
  <section id="wrap">
    <header id="header">
      <section id="header-top">
        <div class="container">
          <div class="row">
            <aside class="col-sm-6">
              <h1 id="logo"><a title="LOGO DESIGN GUARANTEE" href="index.php"><img class="img-responsive" src="<?php echo base_url()?>assets/images/logo.png" alt="logo design guarantee" height="107" width="347" /></a></h1>
            </aside>
            <aside class="col-sm-6 clearfix" id="right-section">
              
              <div class="pull-right r-cont">
                <h2>24/7 <em class="color"> Devoted </em> Support<span class="trademark">&trade;</span></h2>
                <div class="info-box">    <p> <a href="#">Sales/Support</a><span class="ph-no">1 (866) 598-6266</span> </p>    <p> <a class="live-chat" href="javascript:void(0);">Live chat <img src="<?php echo base_url()?>assets/images/hi-bubble.png" alt="hi" width="36" height="34" /></a> </p>  </div>
              </div>
            </aside>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row smpl-step" style="border-bottom: 0; ">
            
            <div class="col-xs-4 smpl-step-step complete">
              <div class="text-center smpl-step-num"><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/index/<?php echo $_SESSION['p_index']?>" class="active123 fontsz"  >Contact Information </a></div>
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <span class="round-tabs five active1 inactive activesmall ">
                <a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/index/<?php echo $_SESSION['p_index']?>" class="active1">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"  viewBox="0 0 469.184 469.185"  xml:space="preserve" class="svgsmall">
                    <g>
                      <path d="M462.5,96.193l-21.726-21.726c-8.951-8.95-23.562-8.95-32.59,0L180.368,302.361l-119.34-119.34   c-8.95-8.951-23.562-8.951-32.589,0L6.712,204.747c-8.95,8.951-8.95,23.562,0,32.589L163.997,394.62   c4.514,4.514,10.327,6.809,16.218,6.809s11.781-2.295,16.219-6.809L462.27,128.783C471.45,119.68,471.45,105.145,462.5,96.193z" fill="#00af50 "/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </a> </span> </div>
                
                
                
                <div class="col-xs-4 smpl-step-step complete">
                  
                  <div class="text-center smpl-step-num"><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/logobrief"  class="active123 fontsz" >Website  Brief</a></div>
                  <div class="progress">
                    <div class="progress-bar"></div>
                  </div>
                  <span class="round-tabs five active1 inactive activesmall"> <a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/logobrief">
                    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"  viewBox="0 0 469.184 469.185" class="svgsmall" xml:space="preserve">
                      <g>
                        <path d="M462.5,96.193l-21.726-21.726c-8.951-8.95-23.562-8.95-32.59,0L180.368,302.361l-119.34-119.34   c-8.95-8.951-23.562-8.951-32.589,0L6.712,204.747c-8.95,8.951-8.95,23.562,0,32.589L163.997,394.62   c4.514,4.514,10.327,6.809,16.218,6.809s11.781-2.295,16.219-6.809L462.27,128.783C471.45,119.68,471.45,105.145,462.5,96.193z" fill="#00af50"/>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                    </svg></a> </span> </div>
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-xs-4 smpl-step-step complete">
                      <div class="text-center smpl-step-num "><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/payment" class="active123 fontsz">Payment</a></div>
                      <div class="progress">
                        <div class="progress-bar"></div>
                      </div>
                      <span class="round-tabs five active1"> <a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/orders/payment">
                        <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"  viewBox="0 0 469.184 469.185" class="svgbig" xml:space="preserve">
                          <g>
                            <path d="M462.5,96.193l-21.726-21.726c-8.951-8.95-23.562-8.95-32.59,0L180.368,302.361l-119.34-119.34   c-8.95-8.951-23.562-8.951-32.589,0L6.712,204.747c-8.95,8.951-8.95,23.562,0,32.589L163.997,394.62   c4.514,4.514,10.327,6.809,16.218,6.809s11.781-2.295,16.219-6.809L462.27,128.783C471.45,119.68,471.45,105.145,462.5,96.193z" fill="#00af50 "/>
                          </g>
                        </svg></a> </span> </div>
                        
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </header>
            <style>
            label.error{
            color: #f00 !important;
            font-size: 15px !important;
            margin: 0 !important;
            padding: 0 !important;
            background:none !important;
            width:120px !important;
            text-align:left !important;
            margin-left:4px !important;
            }
            
            #jetpay-form label {
            width: 153px !important;
            background-color: #f8f8f8 !important ;
            }
            .presentbks
            {
            border:1px solid green !important;
            }
            .valid{
            border:1px solid #7DB701 !important;
            }
            @media screen and (-webkit-min-device-pixel-ratio:0) {
            /* Safari and Chrome */
            
            /* Safari only override */
            ::i-block-chrome,.hero-flag-text p {
            
            font-family: 'PT Sans',sans-serif,Arial,Verdana !important;
            font-weight: 700 !important;
            }
            }
            @media screen and (-webkit-min-device-pixel-ratio:0) {
            /* Safari and Chrome */
            
            /* Safari only override */
            ::i-block-chrome, .svgbig {
            height: 32px;
            width: 36px;
            -webkit-font-smoothing: antialiased;
            padding-top: 5px !important;
            padding-left: 2px !important;
            }
            }
            </style>
            <div class="container">
              <div class="row">
                <section id="order-process" class=" clearfix">
                  <div class="col-sm-8 col-sm-offset-2 ">
                    <div class="jetpay-form-outer ldgouter">
                      
                       <form id="jetpay-form" method="post" action="">
                            <h3 style="font-size:18px; background-color:#f8f8f8 !important;">Billing Information</h3>
                            <?php if (isset($_POST['submit'])): ?>

                                <?php if (isset($ResponseText)): ?>
                                    <p class="errorText"><strong>Message: </strong><?php echo $ResponseText; ?></p>
                                <?php endif; ?>

                            <?php endif; ?>
                            <ul>
                                <li>
                                   
                                <li>
                                    <label>Name on Card</label>
                                    <input type="text" name="fullname" value="<?php echo @$_SESSION['fname'] . ' ' . @$_SESSION['lname']; ?>" class="required" required="required"/>
                                </li>
                                <li>
                                    <label>Card Number</label>
                                    <input type="text" name="cardnum" class="required creditcard" required="required"/>
                                </li>
                                <li>
                                    <label class="cardex">Card Expiry</label>
                                    <span>Mo.</span>
                                    <select class="month required" name="expmonth">
                                        <option value="">--</option>
                                        <?php for ($i = 1; $i <= 12; $i++): ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span>Yr.</span>
                                    <select class="year required" name="expyear">
                                        <option value="">----</option>
                                        <?php for ($i = date('Y'); $i <= date('Y') + 15; $i++): ?>
                                            <option value="<?php echo substr($i, -2); ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </li>
                                <li>
                                    <label>CVV Number</label>
                                    <div class="multiple-items">
                                        <input type="text" name="cvv" class="required"/>
                                        <a data-original-title="The CVV Number is the last 3 digits found on the back of your debit or credit card. " data-toggle="tooltip" title="" data-placement="top"> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                        <p style="color:grey !important;font-weight:normal !important;">Last 3 digits on the back of your debit/credit card. </p>
                                    </div>

                                </li>
                                <li>
                                    <label class="pacdesn">Package Description</label>
                                    <div class="multiple-items">
                                        <p><?php echo $order_desc; ?></p>
                                    </div>
                                </li>
                                <li>
                                    <label>Total Amount ($)</label>
                                    <span style="color:#7db53e;font-weight:bold;"><?php echo number_format($net_total,2); ?></span>
                                </li>
                            </ul>
                            <div class="normal-desc-box text-center">
                                <!--<a href="javascript:history.go(-1)" class="green-btn order-back-btn">
                                    <span data-hover="Back">Back</span>
                                </a>-->
                                <button type="submit" class="green-btn order-submit-btn" name="submit">
                                    <span data-hover="Place Your Order">Place Your Order <i aria-hidden="true" class="fa fa-chevron-right"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>     <div class="trust-icons col-sm-offset-2 ">
                    
                    <div class="payment-gateway-icons centerfix text-center">
                      <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/american-express.gif" alt="american express" width="63" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/visa.gif" alt="visa" width="63" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard.gif" alt="mastercard" width="63" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/discover.gif" alt="discover" width="63" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/paypal.gif" alt="paypal" width="63" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/verified-visa.gif" alt="verified visa" width="70" height="34"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo base_url()?>assets/images/mastercard-secure.gif" alt="mastercard secure" width="100" height="34"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5">
                </div>
              </section>
            </div>
          </div>
          
          <!-- Form Validation -->      
          <!--  /Uplodify  -->
          <footer id="footer">
             <?php $this->load->view('includes/web/footer-common_new'); ?>
          </footer>
        </section>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $('#jetpay-form').validate(
            {
                rules:
                        {
                            
                            fullname: "required",
                            cardnum: "required",
                            expmonth: "required",
                            expyear: "required",
                            cvv: "required"
                        },
                messages:
                        {
                            
                            fullname: "Enter Full Name",
                            cardnum: "Enter card number",
                            expmonth: "Select Exp Month",
                            expyear: "Select Exp Year",
                            cvv: "Enter CVV number"
                        }

            });
</script>
        <div class="package-info-box"></div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="<?php echo base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>-->
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/custom.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.loadmask.min.js"></script>
        <!--<script src="https://track.monitis.com/mon_analytics.jsp?v=1" type="text/javascript"></script>-->
        <script>
        $(document).ready(function () {
        var offset = 220;
        var duration = 500;
        $(window).scroll(function () {
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
        (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
        })();
        </script>
        <div id="toTop"><img src="<?php echo base_url()?>assets/images/scroll_top.png" width="30" height="30" class="img-responsive" /></div>
      </body>
      </html>     </section>      <div class="package-info-box"></div>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script> 

       <script src="<?php echo base_url()?>js/bootstrap.min.js"></script> 
       <script src="<?php echo base_url()?>assets/js/custom.js"></script>
        <div id="toTop">
        <img src="<?php echo base_url()?>assets/images/scroll_top.png" width="30" height="30" class="img-responsive" />      </div>
         </body>
      <script type="text/javascript">               

       $(document).ready(function () {  


      $('[data-toggle="tooltip"]').tooltip();
      });
      </script>
      <style type="text/css">
      .svgbig{
      enable-background:new 0 0 469.184 469.185;position: relative;
      top: 1px;
      display: inline-block;
      line-height: 1;padding-left: 8px !important;
      padding-top: 10px !important;    height: 32px;
      width: 36px;
      -webkit-font-smoothing: antialiased;}
      .svgsmall
      {
      margin-left: 3px !important;
      margin-top: 2px !important;
      height: 16px;
      width: 15px;enable-background:new 0 0 469.184 469.185;position: relative;
      top: 1px;
      display: inline-block;
      line-height: 1;-webkit-font-smoothing: antialiased;
      }
      .smpl-step > .smpl-step-step .smpl-step-num
      {}
      
      span.round-tabs.five.activesmall {
      height: 25px;
      width: 25px;
      top: 53px;
      }
      .text-center.smpl-step-num > a {
      font-weight: 400;
      font-size: 15px;
      }
      .fontsz
      { font-size: 17px !important;
      margin-left:15px;}
      .smpl-step > .smpl-step-step .smpl-step-num
      {margin-left: 0px;}
      @media only screen and (max-width: 695px){
      .text-center.smpl-step-num > a {
      color: #999999;
      font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
      font-weight: normal;
      font-size: 12px !important;
      }}
      @media (max-width: 425px){
      .smpl-step > .smpl-step-step .smpl-step-num {
      width: 113px;
      height: 68px;
      }
      span.round-tabs{top:81px !important;}
      span.round-tabs.five.activesmall {
      
      top: 98px !important;
      }
      }
      </style>
      <style type="text/css">
      .uploadify-button {
      background-color: transparent;
      border: none;
      padding: 0;
      background: none;
      border: 1px solid grey;
      border-radius: 5px;
      color:grey;
      
      }
      .uploadify:hover .uploadify-button {
      background-color: transparent;
      background: none;
      border: 1px solid #7DB701;
      }
      </style>
      
      <style>
      .tooltip {
      
      font-size: 15px;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-weight: 400;
      
      
      }
      .tooltip-inner {
      max-width: 400px;
      /* If max-width does not work, try using width instead */
      }
      .inner-filelist {
      width: 207px;
      float: left;
      height: 200px;
      position: relative;
      float: left;
      overflow: hidden !important;
      text-overflow: ellipsis;
      white-space: nowrap;
      }
      label.error{
      padding-left:10px !important;
      color:#F00 !important;
      font-weight:bold !important;
      float:right;
      padding-right:25px !important;
      }
      .file-choose img
      {margin:5px;
      }
      .thremove {
      position: absolute;
      right: 40px;
      /* display:none;*/
      cursor:pointer;
      }
      .fileList
      {
      position:relative ;   }
      .inner-filelist
      { width:210px; position:relative; clear: both !important; margin-bottom: 10px;padding-right: 66px;height: auto !important; }
      #header-top
      {border-bottom:1px solid #e8e8e8 !important;}
      .text-center.smpl-step-num > a {
      font-weight: 400;
      }
      .gray-bg-title {
      background: none repeat scroll 0 0 #f8f8f8 !important;
      }
      .modifi input[type="password"], input[type="text"], input[type="tel"], textarea
      {font-size: 15px !important;}
      ::-webkit-input-placeholder {
      font-size: 14px !important;
      }
      :-moz-placeholder { /* Firefox 18- */
      font-size: 14px !important;
      }
      ::-moz-placeholder {  /* Firefox 19+ */
      font-size: 14px !important;
      }
      :-ms-input-placeholder {
      font-size: 14px !important;
      }
      .text-right
      {text-align: right;padding-right:79px;}
      i.fa.fa-question-circle-o
      {color:grey !important;
      font-size: 16px;
      padding-left:2px;}
      .order-details
      {border:1px solid #e8e8e8 ;
      text-align: left !important;}
      #order-process h3
      {font-weight: 400 !important;}
      .main_price_green
      {color:#7DB53E;}
      #order-process h3 {
      
      margin: 0 0 4px !important;
      }
      .order-list ul li {
      border-bottom: 1px solid #e8e8e8;
      }
      #order-process .form1 input[type="password"], #order-process .form1 input[type="text"], textarea ,.phone_no {
      width: 395px !important;
      }
      @media(max-width: 415px){
      #order-process .form1 input[type="password"], #order-process .form1 input[type="text"], textarea, .phone_no
      {width: 90% !important;}
      }
      </style>
      <?php //echo "<pre>"; print_r($_SESSION);?>
    </html>