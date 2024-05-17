<?php $this->load->view('includes/reseller/header-common'); ?>		
        <section id="order-process" class="content">
			<div class="container">
				<div class="row">					
					<section class="green-vertical-divider2 clearfix">
						<div class="col-sm-7">
							<div class="leftcol">
                            
                                <div class="process2-top clearfix">
									<h2 class="green-title1">Act Now. Save Big....</h2>
									<p><strong>Special offer </strong> open only to our customers</p>
									<p class="theme-brown"><strong><span class="theme-blue">Our 1 month Offer Must End @ </span> <?php echo $today; ?></strong></p>
									<p>Grow your business fast with the following offers to help you.</p>
									<p>
										The good news is the offers below apply to the logo
										<br />
										and any stationary parts you may have ordered
										<br />
										-business cards, letterheads etc. 
									</p>
								</div>
                                
								<form id="package-select" action="<?php echo site_url('reseller_orders/extra2'); ?>" method="post">
								<div class="gray-box">
									<h4 class="multi-color"><span class="theme-blue">24 Hours Express Delivery. </span><span class="theme-red">Was</span></h4><span style="text-decoration: line-through;font-size: 25px;" class="theme-red">$80</span>
									<div class="clearfix">
										<img class="img-responsive" src="assets/images/now-only39.png" alt="now only 39" />
										<p class="theme-blue">(All revisions given within 24 hours also).</p>
										<ul>
											<li>Massively speeds up you getting your final logo! Usually saves about 10 days.</li>
											<li>Receive your logo order guaranteed within 24 hours, instead of 3 days.</li>
											<li>All revisions given within 24 hours also!</li>
											<li>full set of concepts are given within 24 hours!</li>
											<li>full set of concepts are given within 24 hours!This includes your complete order if you have ordered any stationary designs(business cards, letterheads, etc).</li>
											<li>The quality is not affected; we simply prioritize your order!</li>
											<li>Recommended for the ambitious business person who wishes to grow their business fast!</li>
											<li>100% Risk Free, Money Back Guarantee. If you don't like your designs at anytime in the future, simply ask for a refund and get the logo design fees and the 24 hour express fee refunded in full. No questions.Totally risk-free!</li>
											<li>Total Risk-Reversal.  We take the risk!</li>
										</ul>
										<p class="theme-red">You can only win... as either you get all your fees back and with free, inspiring logo ideas......or you get a final logo very quickly, with a great price to match!</p>
									</div>
									<div class="cus-input-shell-cover text-center clearfix">
										<div class="select-txt">Select here</div>
										<div class="custom-input-shell">
											<input type="checkbox" class="custom-input" name="opt" value="1">
                                            <span class="unchk <?php echo (@$_SESSION['options'] == EXPRESS_DELIVERY)?"chk":""; ?>" ></span>
										</div>
									</div>
								</div>

								<div class="gray-box">
									<h4 class="multi-color"><span class="theme-blue">Black + White Logo File. </span><span class="theme-red">Was</span></h4><span style="text-decoration: line-through;font-size: 25px;" class="theme-red">$60</span>
									<div class="clearfix">
										<img class="img-responsive" src="assets/images/now-only29.png" alt="now only 29" />
										<ul>
											<li>Certainly necessary for any print requirements!</li>
											<li>Certainly necessary for any fax requirements you make.</li>
											<li>We will supply your final color logo with a black and white version so you have all the files you need for peace of mind.</li>
											<li>Can massively save on any print costs in the lifetime of your business.</li>
											<li>Recommended for the professional business person who wishes to own all color files to help with future print requirements.</li>
											<li>100% Risk Free, Money Back Guarantee. If you do not find any use(although we certainly think you will), you can receive a full 100% money back guarantee at anytime (no time limit on when you can ask for your money back).</li>
										</ul>
										<p class="theme-red">Total Risk-Reversal. We take the risk!</p>
										<p class="theme-red">You can only win... as either you get all your fees back and with a free look at your logo in black and white......or you get a final logo with a black and white file for back-up for life, with a great price to match! </p>
									</div>
									<div class="cus-input-shell-cover text-center clearfix">
										<div class="select-txt">Select here</div>
										<div class="custom-input-shell">
											<input type="checkbox" class="custom-input" name="opt" value="2">
                                            <span class="unchk <?php echo (@$_SESSION['options'] == BLACK_N_WHITE)?"chk":""; ?>" ></span>
										</div>
									</div>
								</div>

								<div class="gray-box">
									<h4 class="multi-color"><span class="theme-blue">Order both the services above for </span></h4>
									<div class="clearfix">
										<img class="img-responsive" src="assets/images/now-only59.png" alt="now only 59" />
										
										<p>
											<strong>(Save additional $10)</strong>
											<br />
											<strong>SAVE 60% ..</strong>
										</p>
									</div>
									<div class="cus-input-shell-cover text-center clearfix">
										<div class="select-txt">Select here</div>
										<div class="custom-input-shell">
											<input type="checkbox" class="custom-input" name="opt" value="3">
                                            <span class="unchk <?php echo (@$_SESSION['options'] == BOTH_SERVICES)?"chk":""; ?>" ></span>
										</div>
									</div>
								</div>
								<div class="clearfix">
									<h4 class="multi-color2 text-center theme-red">
										Our 1 month Offer <span class="theme-blue"> Must End</span>
										<br />
										<?php echo $today; ?> 
									</h4>
									<ul class="txt-widget1">
										<li>Great value for money</li>
										<li>Life time investment for your business</li>
									</ul>
								</div>
								
								<div class="feedback-box clearfix">
									<div class="inner-lvl clearfix">
										<div class="pic-holder">
											<img src="assets/images/user-pic.jpg" alt="user" />
										</div>
										<div class="desc">
											<h6>Debra Doubek, <span class="theme-blue"> Managing Director, 3X Business Solutions</span></h6>
											<p>"It was very exciting to get all my logos within 24 hours. The black and white file provided full peace of mind and certainly worked out well later. Thanks."</p>
										</div>
									</div>
								</div>
								<div class="double-shadow1"></div>
								
								<div class="normal-desc-box text-center">
									<a href="<?php echo base_url('reseller_orders/index'); ?>" class="green-btn order-back-btn">
										<span data-hover="Back">Back</span>
									</a>
									<!--<button type="submit" class="green-btn order-submit-btn">
										<span data-hover="Continue">Continue</span>
									</button>-->
                                    <a class="green-btn order-submit-btn" href="<?php echo base_url('reseller_orders/extra2'); ?>">
            					<span data-hover="Continue">Continue</span>
            				</a>
								</div>
                                </form>
								<div class="clearfix">
									<h4 class="multi-color2 text-center theme-red">
										Our 1 month Offer <span class="theme-blue"> Must End</span>
										<br>
										Midnight EST, <span style="text-decoration: underline;">Friday</span> 17Jan 14 
									</h4>
								</div>
							</div>
						</div>

						<div class="col-sm-5">
							<?php $this->load->view('includes/reseller/logo-shopping-basket'); ?>
						</div>
					</section>
				</div>
			</div>
			
		</section>
        <script type="text/javascript"> 
         $(document).ready(function(){			
			$(".custom-input-shell").find(".unchk").on("click", function(){
                var val =  parseInt($(this).prev("input").val());
                if($(this).hasClass('chk')){
                    $(this).removeClass("chk").prev("input").attr("checked", false);
                    val = 0;             
                }
                else{
                    $(".unchk").removeClass("chk").prev("input").attr("checked", false);			
                    $(this).addClass("chk").prev("input").attr("checked", true);
                }
                                
                $.post("<?php echo site_url('orders/save_options') ?>",'opt='+val,function(data){
                    var opt = eval('('+data+')');                    
                    if(opt.options){
                        if($('.options').length){}
                        else{$(".calc-box.cart").append("<div class='inner-border-box options' />");}
                        $(".calc-box.cart").find(".options").html('<span>'+opt.options+'</span><span class="pull-right">$<span class="package_price">'+opt.options_price+'</span></span>');
                    }
                    else{$('.options').remove();}
                    get_total();                    
                }); 
			});
        });
        </script>
<?php $this->load->view('includes/reseller/footer-common'); ?>