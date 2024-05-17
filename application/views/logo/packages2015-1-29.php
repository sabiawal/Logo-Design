<?php $this->load->view('includes/header-common'); ?>
<section class="content">
    <div id="banner-bottom-slogan">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 clearfix we-care">
                    <h3>All Packages Include</h3>
                    <div class="we-care-about-you">
                        <ul>
                            <li>3 <?php echo COUNTRY; ?> designers (minimum)</li>
                           <!-- <li><?php //echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li>-->
                           <li>Phone contact with your designers</li>
                            <li>Free unlimited redraws &amp; revisions</li>
                        </ul>
                        <ul>
                            <li>24 Hour revisions turnaround</li>
                            <li>Hand-drawn logos</li>
                            <li>Personal account manager</li>
                        </ul>
                    </div> 
                </div>
                <div class="col-sm-4 clearfix">
                    <div class="trapzoid-box guarantee-box">
                        <h3 style="padding: 46px 0;" class="text-center">
                            <a href="<?php echo site_url('compare'); ?>">Learn More About <br /> Our Advantages</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="package-bg" id="package-pg-body">
        <section  style="background:none !important">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 package-top">
                        <h3>Honest prices. Exceptional Features.</h3>
                        <h5>The <?php echo COUNTRY; ?>&rsquo;s No. 1 <?php $s = 'specialized'; if(COUNTRY == 'UK'): $s = str_replace('z','s',$s);  endif; echo $s; ?> design firm for start-ups and small businesses.</h5>
                    </div>
                </div>
                <div class="row mrtb ">
                    <div class="col-md-4  ">
                        <div class="three-pack mtp">
                            <h5><?php echo ucwords(strtolower(str_replace('LOGO PACKAGE', '', START_LP))); ?></h5>
                            <p>Ideal for personal related logos</p>
                            <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_LP && isset($_SESSION['options_price'])) ? START_LP_P + $_SESSION['options_price'] : START_LP_P; ?></span></h4>
                            <?php if(SHOW_REGULAR_PRICE): ?>
                            <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_LP_P_R ?></span> SAVE 50%</p>
                            <?php endif; ?>
                            <div class="delivery dropdown">                        
                                <a class="<?php echo isset($_SESSION['options_price'])? "hourd" : ''?>" data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span>
                                    <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                <ul class="dropdown-menu"  >
                                    <li class="old-pack"><a> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?></span><span class="pack3">  ON SALE  <?php if(SHOW_REGULAR_PRICE): ?><br>SAVE 50% <?php endif; ?></span></a></li>
                                    <div class="add1">
                                        <li> <A class="add3 <?php //echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" href="javascript:void(0)" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A></li>
                                    </div>	
                                </ul>                       
                            </div>
                            <a class="order-pack" href="<?php echo base_url('orders/index/1/'); ?>">Order now</a>
                            <div class="pack-list">
                                <ul>
                                    <li> <strong>6</strong> Custom Made Logos</li>
                                    <li><strong>Unlimited</strong> Revisions</li>
                                    <li><strong>Unlimited</strong> Logo Concepts</li>
                                    <li><strong>Unlimited</strong> Redraws</li>
                                    <li><strong>3</strong> Designers</li>
                                    <li><strong>24 - 72 Hour</strong> Turnaround</li>
                                    <li><strong>Free</strong> Design Research</li>
                                    <li><strong>Dedicated</strong> Project Manager</li>
                                    <li><strong>Free</strong> Final Logo Files Sent via Email (includes formats for all print and web use)</li>
                                    <li><strong>Free</strong> Additional Files</li>
                                    <li><strong>Free</strong> Complete Ownership to All the Logo Design Samples</li>
                                    <li><strong>Free</strong> Assistance with Print Companies </li>
                                    <li><strong>Free</strong> File Designs that allow Resizing with No Distortion (suitable for professional print)</li>
                                    <li><strong>3 minute simple</strong> online order form!</li>
                                    <li><strong>We Start Your Designs Today!</strong><br>100% Satisfaction Guaranteed</li>
                                    <li><strong>Free After-Sales Support <br>(For Life!)</strong></li>
                                    <li><strong><?php echo GUARANTEE_DAYS ?>-Day - 100% No-Risk <br>Money Back Guarantee</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  ">
                        <div class="three-pack mtp">
                            <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE'), array(''), SURGE_LP))); ?></h5>
                            <p>Good for small businesses</p>
                            <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_LP && isset($_SESSION['options_price'])) ? SURGE_LP_P + $_SESSION['options_price'] : SURGE_LP_P; ?></span></h4>
                            <?php if(SHOW_REGULAR_PRICE): ?>
                            <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . SURGE_LP_P_R ?></span> SAVE 50%</p>
                            <?php endif; ?>
                            <div class="delivery dropdown">
                                <a  data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span><span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                <ul class="dropdown-menu"  >
                                    <li class="old-pack"><a> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?></span><span class="pack3">  ON SALE <?php if(SHOW_REGULAR_PRICE): ?><br>SAVE 50%<?php endif; ?></span></a></li>
                                    <div class="add1">
                                        <li> <A class="add3 <?php echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A></li>
                                    </div>
                                    </li>	
                                </ul>
                            </div>                                
                            <a class="order-pack" href="<?php echo base_url('orders/index/4/'); ?>">Order now</a>
                            <div class="pack-list">
                                <ul>
                                    <li> <strong>12</strong> Custom Made Logos</li>
                                    <li><strong>Unlimited</strong> Revisions</li>
                                    <li><strong>Unlimited</strong> Logo Concepts</li>
                                    <li><strong>Unlimited</strong> Redraws</li>
                                    <li><strong>6</strong> Designers</li>
                                    <li><strong>24 - 72 Hour</strong> Turnaround</li>
                                    <li><strong>Free</strong> Design Research</li>
                                    <li><strong>Dedicated</strong> Project Manager</li>
                                    <li><strong>Free</strong> Final Logo Files Sent via Email (includes formats for all print and web use)</li>
                                    <li><strong>Free</strong> Additional Files</li>
                                    <li><strong>Free</strong> Complete Ownership to All the Logo Design Samples</li>
                                    <li><strong>Free</strong> Assistance with Print Companies </li>
                                    <li><strong>Free</strong> File Designs that allow Resizing with No Distortion (suitable for professional print)</li>
                                    <li><strong>3 minute simple</strong> online order form!</li>
                                    <li><strong>We Start Your Designs Today!</strong> 100% Satisfaction Guaranteed</li>
                                    <li><strong>Free After-Sales Support <br>(For Life!)</strong></li>
                                    <li><strong><?php echo GUARANTEE_DAYS; ?>-Day - 100% No-Risk <br> Money Back Guarantee</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4  ">
                        <span class="best-value">Best Value</span>
                        <div class="three-pack mtp fmtp">
                            <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE'), array(''), EXCEL_LP))); ?></h5>
                            <p>Great value for any small business</p>
                            <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == EXCEL_LP && isset($_SESSION['options_price'])) ? EXCEL_LP_P + $_SESSION['options_price'] : EXCEL_LP_P; ?></span></h4>
                            <?php if(SHOW_REGULAR_PRICE): ?>
                            <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . EXCEL_LP_P_R ?></span> SAVE 50%</p>
                            <?php endif; ?>
                            <div class="delivery dropdown">
                                <a  data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2"> <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> </span>
                                    <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                                <ul class="dropdown-menu"  >
                                    <li class="old-pack"><a> <span class="pack1">24 hour delivery </span><span class="pack2"> <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?></span><span class="pack3">  ON SALE<?php if(SHOW_REGULAR_PRICE): ?><br>SAVE 50%<?php endif; ?></span></a></li>
                                    <div class="add1">
                                        <li> <A class="add3 <?php echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == EXCEL_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A></li>
                                    </div>
                                    </li>	
                                </ul>
                            </div>
                            <a class="order-pack" href="<?php echo base_url('orders/index/7/'); ?>">Order now</a>
                            <div class="pack-list">
                                <ul>
                                    <li  >  <span class="surge-pac-plus-left" ></span><strong><span class="surge-pac-plus1">SURGE PACKAGE PLUS</span></strong></li>
                                    <li><strong>3</strong> Business Card Designs</li>
                                    <li><strong>3</strong> Letterhead Designs</li>
                                    <li><strong>3</strong>  Compliment Slip Designs</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-<br></li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                    <li>-</li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    </section>
    <section class="even-more-pack">
        <div class="container">
            <div class="row">
                <div class="col-md-4  ">
                    <div class="pack-top-img">
                        <img alt="shadow fade" src="assets/images/gray-shadow1.png" width="263" height="24" class="img-responsive shadow">
                    </div>
                    <div class="purple-box">
                        <h3>Save Even More!</h3>
                    </div>
                    <div class="three-pack smt">
                        <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE', 'PLUS'), array('', '+'), START_PLUS_LP))); ?></h5>
                        <p>Ideal for personal related logos</p>
                        <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_PLUS_LP && isset($_SESSION['options_price'])) ? START_PLUS_LP_P + $_SESSION['options_price'] : START_PLUS_LP_P; ?></span></h4>
                        <?php if(SHOW_REGULAR_PRICE): ?>
                        <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . START_PLUS_LP_P_R ?>	</span> SAVE 50%</p>
                        <?php endif; ?>
                        <div class="delivery dropdown">
                            <a  data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2"><?php echo CURRENCY . EXPRESS_DELIVERY_P ?></span>
                                <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                            <ul class="dropdown-menu"  >
                                <li class="old-pack"><a> <span class="pack1">24 hour delivery
                                        </span><span class="pack2">          <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif;?>       </span>
                                        <span class="pack3">  ON SALE<?php if(SHOW_REGULAR_PRICE): ?><br>
                                            SAVE 50%<?php endif; ?></span></a></li>
                                <div class="add1">
                                    <li> <A class="add3 <?php echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_PLUS_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A>
                                    </li>
                                </div>
                                </li>	
                            </ul>
                        </div>
                        <a class="order-pack" href="<?php echo base_url('orders/index/2/'); ?>">
                            Order now
                        </a>
                        <div class="pack-list">
                            <ul>
                                <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">START PACKAGE PLUS</span></strong></li>
                                <li> <strong>3</strong> Business Card Designs</li>
                                <li><strong>Unlimited </strong>Redraws</li>
                                <li><strong>Unlimited</strong> Revisions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  ">
                    <div class="pack-top-img">
                        <img alt="shadow fade" src="assets/images/gray-shadow1.png" width="263" height="24" class="img-responsive shadow">
                    </div>
                    <div class="purple-box">
                        <h3>Save Even More!</h3>
                    </div>
                    <div class="three-pack smt">
                        <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE', 'PLUS'), array('', '+'), SURGE_PLUS_LP))); ?></h5>
                        <p>Great for small businesses</p>
                        <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_PLUS_LP && isset($_SESSION['options_price'])) ? SURGE_PLUS_LP_P + $_SESSION['options_price'] : SURGE_PLUS_LP_P; ?></span></h4>
                        <?php if(SHOW_REGULAR_PRICE): ?>
                        <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . SURGE_PLUS_LP_P_R ?>	</span> SAVE 50%</p>
                        <?php endif; ?>
                        <div class="delivery dropdown">
                            <a  data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2">          <?php echo CURRENCY . EXPRESS_DELIVERY_P ?>        </span>
                                <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                            <ul class="dropdown-menu"  >
                                <li class="old-pack"><a> <span class="pack1">24 hour delivery
                                        </span><span class="pack2">          <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?>       </span>
                                        <span class="pack3">  ON SALE<?php if(SHOW_REGULAR_PRICE): ?><br>
                                            SAVE 50%<?php endif; ?></span></a></li>
                                <div class="add1">
                                    <li> <A class="add3 <?php echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_PLUS_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A>
                                    </li>
                                </div>
                                </li>	
                            </ul>
                        </div>
                        <a class="order-pack" href="<?php echo base_url('orders/index/5/'); ?>">
                            Order now
                        </a>
                        <div class="pack-list">
                            <ul>
                                <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">SURGE PACKAGE PLUS</span></strong></li>
                                <li> <strong>3</strong> Business Card Designs</li>
                                <li><strong>Unlimited </strong>Redraws</li>
                                <li><strong>Unlimited</strong> Revisions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4  ">
                    <div class="three-pack smt mtp1">
                        <h5><?php echo ucwords(strtolower(str_replace(array('LOGO PACKAGE', 'PLUS'), array('', '+'), SUPER_START_PLUS_LP))); ?></h5>
                        <p>Ideal for personal related logos</p>
                        <h4><?php echo CURRENCY; ?><span class="main_price"><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SUPER_START_PLUS_LP && isset($_SESSION['options_price'])) ? SUPER_START_PLUS_LP_P + $_SESSION['options_price'] : SUPER_START_PLUS_LP_P; ?></span></h4>
                        <?php if(SHOW_REGULAR_PRICE): ?>
                        <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . SUPER_START_PLUS_LP_P_R ?>	</span> SAVE 50%</p>
                        <?php endif; ?>
                        <div class="delivery dropdown">
                            <a  data-toggle="dropdown" href="#"> <span class="pack1">24 hour delivery</span><span class="pack2"> <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> </span>
                                <span class="pack3">  ON SALE</span><span class="caret"></span></a>
                            <ul class="dropdown-menu"  >
                                <li class="old-pack"><a> <span class="pack1">24 hour delivery
                                        </span><span class="pack2">          <?php echo CURRENCY . EXPRESS_DELIVERY_P ?> <?php if(SHOW_REGULAR_PRICE): ?><span class="old-d"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span><?php endif; ?>       </span>
                                        <span class="pack3">  ON SALE<?php if(SHOW_REGULAR_PRICE): ?><br>
                                            SAVE 50% <?php endif; ?></span></a></li>
                                <div class="add1">
                                    <li> <A class="add3 <?php echo isset($_SESSION['options_price'])? "removecolor" : 'addcolor'?>" ><?php echo (isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SUPER_START_PLUS_LP && isset($_SESSION['options_price'])) ? "Remove" : "Add"; ?></A>
                                    </li>
                                </div>
                                </li>	
                            </ul>
                        </div>
                        <a class="order-pack" href="<?php echo base_url('orders/index/3/'); ?>">
                            Order now
                        </a>
                        <div class="pack-list">
                            <ul>
                                <li>  <span class="surge-pac-plus"></span><strong><span class="surge-pac-plus1">START PACKAGE PLUS</span></strong></li>
                                <li> <strong>3</strong> Business Card Designs</li>
                                <li> <strong>3</strong> Letterhead Designs</li>
                                <li> <strong>3</strong>  Compliment Slip Designs</li>
                                <li><strong>Unlimited </strong>Redraws</li>
                                <li><strong>Unlimited</strong> Revisions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('includes/offer-banner'); ?>
    <div class="slogan">
        <div class="container">
            <h1 class="text-center">Shake up your competition with a <span class="theme-green-style"> stunning </span> logo</h1>
        </div>
    </div>
    <section class="slogan">
        <div class="container">
            <h1 class="text-center">
                Just to Reassure You...
            </h1>
            <div class="text-center slogan-tagline silver-col">Here are some advantages you won't find with our competitors</div>
        </div>
    </section>
    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" width="260" height="131" src="assets/images/package-network-people-pic.png" alt="Logo Samples" />
                </div>
                <div class="col-sm-8">
                    <div style="padding: 0 0 0 36px;" class="clearfix">
                        <h2>The Most Logo Samples for the Lowest Price</h2>
                        <ul class="width-half tick">
                            <li>A Minimum of <span> 6 </span> Samples</li>
                            <li><span>In-House </span> Designers</li>
                            <li><span>3 </span>  Designers work on your Logo (minimum)</li>
                        </ul>
                        <ul class="width-half thin-arrow">
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
                    <ul class="width-half tick">
                        <li>100% <span> Hand Drawn </span> &amp; Custom Made</li>
                        <li><span>Unlimited </span> Revisions with All Packages</li>
                        <li><span>Unlimited </span> Redraws</li>
                    </ul>
                    <ul class="width-half thin-arrow">
                        <li>Others Use Templates and Clip Art</li>
                        <li>Others Only Offer this with High Prices</li>
                        <li>Others Do Not Offer This</li>
                    </ul>
                </div>
                <div class="col-sm-4 clearfix">
                    <img class="img-responsive" width="260" height="164" src="assets/images/hand-drawn-logo2.png" alt="hand drawn logo" />
                </div>
            </div>
        </div>
    </section>
    <section class="widget1 normal-gray-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" width="260" height="131" src="assets/images/time--watch.png" alt="time watch" />
                </div>
                <div class="col-sm-8">
                    <h2>24 x 7 x 365 Free Support</h2>
                    <ul class="width-half tick">
                        <li>We Offer Support<span> Whenever You Need It</span></li>
                        <li>We Give You a <span> Dedicated Project Manager</span></li>
                        <li>Your Revisions Will Be Completed in Just <span> 24 Hours</span></li>
                    </ul>
                    <ul class="width-half thin-arrow">
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
                        <!--<li><span><?php //echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee</span></li>-->
                        <li><span>Phone contact with your designers.</span></li>
                        <li><span>No </span> Hidden Fees</li>
                        <li>We'll Give You a Refund, <span> No Questions Asked</span></li>
                    </ul>
                    <ul class="width-half thin-arrow">
                        <li>The Best in the Industry, By Far</li>
                        <li>Others Will Surprise You After Placing an Order</li>
                        <li>Others Will Debate Whether You Deserve a Refund</li>
                    </ul>
                </div>
                <div class="col-sm-4 text-center clearfix">
                    <img style="display: inline-block;" class="img-responsive" width="168" height="202" src="assets/images/guarantee-batch.png" alt="100% guarantee" />
                </div>
            </div>
        </div>
    </section>
</section>        
<script type="text/javascript">
    $(document).ready(function() {
        $(".add3").on("click", function() {
			//alert('ok');
            var check_val = $(this).html();
			
            var val = 1;
            $(this).html('Remove');
            if (check_val == "Remove") {
				$(this).removeClass('removecolor');
				$(this).addClass('addcolor');
				$(this).parent().parent().parent().prev('a').removeClass('hourd');
                val = 0;
                $(this).html('Add');
            }
			else{
				$(this).addClass('removecolor');
				$(this).removeClass('addcolor');
				$(this).parent().parent().parent().prev('a').addClass('hourd');
				}
            var price = $(this).parent().parent().parent().parent().parent().children('h4').find('.main_price');
			
            $.post("<?php echo site_url('orders/save_options') ?>", 'options=' + val, function(data) {
                var current_price = parseInt(price.html());
                //alert(data);                    
                var opt = eval('(' + data + ')');
                var opt1 = opt.options_price;
                var extPrice = parseInt('<?php echo EXPRESS_DELIVERY_P ?>');
                optPrice = 0;
                if (opt1) {
                    optPrice = opt1;
                }
                //alert(optPrice);
                if (val == 0) {
                    price.html(current_price - extPrice);
                }
                else {
                    price.html(current_price + extPrice);
                }
                // 
            });
        });
    });
</script>
<?php $this->load->view('includes/footer-common'); ?>

<style>
 .add1 {
  border: 1px solid #d4d4d4;
} 

 .addcolor {
  background: none repeat scroll 0 0  #01B0F1;
  border: 0 none !important;
  color: #fff !important;
  display: inline-block;
  font-size: 15px !important;
  font-weight: 700;
  margin: 0 auto;
  padding: 4px 8px;
  text-decoration: underline !important;
  width: 31% !important;
  min-height: auto !important;
  text-decoration:none !important;
} 

.removecolor{
text-decoration:none !important;
background: none repeat scroll 0 0 #f3514c;
border: 0 none !important;
color: #fff !important;
display: inline-block;
font-size: 15px !important;
font-weight: 700;
margin: 0 auto;
padding: 4px 8px;
text-decoration: underline !important;
width: 31% !important;
min-height: auto !important;
	}

.hourd
{background-color:#1fA971;
} 
.hourd span {
    color: #fff;
} 
 .three-pack:hover{
	 box-shadow: inset 1px 1px 10px 3px #ABABAB;
-webkit-box-shadow: inset 1px 1px 10px 3px #ABABAB;
-moz-box-shadow: inset 1px 1px 10px 3px #ABABAB;
-o-box-shadow: inset 1px 1px 10px 3px #ABABAB;

} 

</style>