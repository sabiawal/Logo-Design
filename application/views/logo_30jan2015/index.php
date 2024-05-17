<?php $this->load->view('includes/header-common'); ?>
		<section id="logo-section">
			<div class="lag1">
				<div class="container">
					<div class="col-sm-6 alpha">
						<h3>We will <a href="<?php echo base_url('compare'); ?>" class="theme-green-style"> beat </a> any competitor's price.<br />
						Guaranteed.</h3>
					</div>
					<div class="col-sm-6 super-winter-sale clearfix">
						<h3 class="text-center"><?php echo OFFER_NAME; ?></h3>
						<!--<hgroup>-->
							<h4><strong>Free </strong>Copyright Certificate worth <?php echo CURRENCY.LOGO_COPYRIGHT_P; ?></h4>	
							<h4><strong>Free </strong>Lifetime Alteration to Your Logo worth <?php echo CURRENCY.LOGO_ALTERNATION_P; ?></h4>	
							<?php if(SHOW_OFFER_DATE): ?>
                            <h4><span>Ends: <?php echo $today; ?></span></h4>
                            <?php endif; ?>
						<!--</hgroup>-->
					</div>
				</div>
			</div>
			
			<div class="slogan">
				<div class="container">
					<h1 class="text-center">Shake up your competition with a <a href="<?php echo base_url('portfolio'); ?>" class="theme-green-style"> stunning </a> logo</h1>
				</div>
			</div>
			
			<div class="lag3">
				<div class="container">
					<div class="row">
						<div id="logo-hold">
							<ul class="logo-list clearfix">
								<li><img class="img-responsive" src="assets/images/logo1.jpg" alt="logo" width="202" height="190" /></li>
								<li><img class="img-responsive" src="assets/images/logo2.jpg" alt="logo" width="202" height="190" /></li>
								<li><img class="img-responsive" src="assets/images/logo3.jpg" alt="logo" width="202" height="190" /></li>
								<li><img class="img-responsive" src="assets/images/logo4.jpg" alt="logo" width="202" height="190" /></li>
								<li><img class="img-responsive" src="assets/images/logo5.jpg" alt="logo" width="202" height="190" /></li>
							</ul>
						</div>
					</div>
					<div id="logo-type-info">
						<ul>
							<li>100% Custom Made</li>
							<li><?php echo substr(COUNTRY,0,2); ?> In-House Design Team</li>
							<li>Designed for All Industries</li>
							<li class="no-bg">
								<a class="orange-btn" href="<?php echo site_url('portfolio'); ?>">
									<span data-hover="See Our Recent Work">See Our Recent Work</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section class="slogan">
			<div class="container">
				<h1 class="text-center">Meet our <?php echo COUNTRY; ?> <a href="<?php echo base_url('about'); ?>" class="theme-green-style" title="Logo Design Guarantee Award Winning Artists"> award winning </a> logo artists!</h1>
			</div>
		</section>
		
		<section id="learn-about-us">
			<div class="container">
				<div class="row">
					<ul class="pic-hold clearfix">
						<li class="col-sm-4">
							<img class="img-responsive" src="assets/images/about-us-pic1.jpg" alt="learn more about us"  width="360" height="259" />
						</li>
						<li class="col-sm-4">
							<img class="img-responsive" src="assets/images/about-us-pic2.jpg" alt="learn more about us"  width="360" height="259" />
						</li>
						<li class="col-sm-4">
							<img class="img-responsive" src="assets/images/about-us-pic3.jpg" alt="learn more about us"  width="360" height="259" />
						</li>
					</ul>
					<div class="simple-box clearfix">
						<a class="orange-btn" href="<?php echo base_url('about') ?>">
							<span data-hover="Learn More About Us...">Learn More About Us...</span> 
						</a>
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
					<li><img class="img-responsive" src="assets/images/brand-logo1.jpg" alt="Logo Design Guarantee - red dot design Award"   width="229" height="149" /></li>
					<li><img class="img-responsive" src="assets/images/brand-logo2.jpg" alt="Logo Design Guarantee - Logo Design Love Award"   width="260" height="149"/></li>
					<li><img class="img-responsive" src="assets/images/brand-logo3.jpg" alt="Logo Design Guarantee - Logo Design Week"  width="203" height="149" /></li>
					<li><img class="img-responsive" src="assets/images/brand-logo4.jpg" alt="Logo Design Guarantee - Logo Design Logo Awards"   width="214" height="149"/></li>
					<li><img class="img-responsive" src="assets/images/brand-logo5.jpg" alt="Logo Design Guarantee - SIA Award"  width="233" height="149" /></li>
				</ul>
			</div>
		</section>
		
		<section style="margin: 0 0 15px;" class="slogan">
			<div class="container">
				<h1 class="text-center">Packages with huge value and <a href="<?php echo base_url('packages'); ?>" class="theme-green-style"> rock bottom prices</a></h1>
			</div>
		</section>
		
		<section id="package">
			<div class="line"></div>
			<div class="container">
				<div class="row">
					<ul class="nav nav-tabs col-sm-offset-3" id="package-tab">
						<li class="active"><a href="#logos" data-toggle="tab">Logos</a></li>
						<li><a href="#websites" data-toggle="tab">Websites</a></li>
						<!--<li><a href="#guarantee" data-toggle="tab">Guarantee</a></li>-->
					</ul>
					<div class="tab-content clearfix">
						<div class="tab-pane fade in active" id="logos">
							<div class="col-md-3 multi-color-box">
								<h2 class="color-box-title-orange">Start</h2>
								<div class="body orange clearfix">
									<div class="price clearfix">
										<?php if(SHOW_REGULAR_PRICE): ?>                                        
                                        <span class="old-price"><?php echo CURRENCY.START_LP_P_R; ?></span>
                                        <?php endif; ?>
										<span class="new-price orange"><?php echo CURRENCY.START_LP_P; ?></span>
									</div>
									<ul class="detail">
										<li><strong>6 </strong>Custom Made Logos</li>
										<li><strong>Unlimited </strong>Revisions</li>
										<li><strong>Unlimited </strong>Logo Concepts</li>
										<li><strong>Unlimited </strong>Redraws</li>
										<li><strong>3 </strong>Designers</li>
										<li><strong>24-72 </strong>Hour Turnaround</li>
									</ul>
									<div class="btn-wrap clearfix">
										<a class="green-btn" href="<?php echo base_url('packages#package-pg-body'); ?>"><span data-hover="More info">More info</span></a>
										<a class="orange-btn-s" href="<?php echo base_url('orders/index/1/'); ?>"><span data-hover="Order now">Order now</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-3 multi-color-box">
								<h2 class="color-box-title-blue">Surge</h2>
								<div class="body blue clearfix">
									<div class="price clearfix">
                                        <?php if(SHOW_REGULAR_PRICE): ?> 
										<span class="old-price"><?php echo CURRENCY.SURGE_LP_P_R; ?> </span>
                                        <?php endif; ?>
										<span class="new-price blue"><?php echo CURRENCY.SURGE_LP_P; ?></span>
									</div>
									<ul class="detail">
										<li><strong>12 </strong>Custom Made Logos</li>
										<li><strong>Unlimited </strong>Revisions</li>
										<li><strong>Unlimited </strong>Logo Concepts</li>
										<li><strong>Unlimited </strong>Redraws</li>
										<li><strong>6 </strong>Designers</li>
										<li><strong>24-72 </strong>Hour Turnaround</li>
									</ul>
									<div class="btn-wrap clearfix">
										<a class="green-btn" href="<?php echo base_url('packages#package-pg-body'); ?>"><span data-hover="More info">More info</span></a>
										<a class="orange-btn-s" href="<?php echo base_url('orders/index/4/'); ?>"><span data-hover="Order now">Order now</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-3 multi-color-box">
								<h2 class="color-box-title-green">Excel</h2>
								<div class="body green clearfix">
									<div class="price clearfix">
                                        <?php if(SHOW_REGULAR_PRICE): ?> 
										<span class="old-price"><?php echo CURRENCY.EXCEL_LP_P_R; ?> </span>
                                        <?php endif; ?>										
										<span class="new-price green"><?php echo CURRENCY.EXCEL_LP_P; ?></span>
									</div>
									<div class="surge-plus clearfix">
										<span class="blue">Surge</span>
										<span>Plus</span>
									</div>
									<ul class="detail">
										<li><strong>3 </strong>Business Card Designs</li>
										<li><strong>3 </strong>Letterhead Designs</li>
										<li><strong>3 </strong>Compliment Slip Designs</li>
									</ul>
									<div class="btn-wrap clearfix">
										<a class="green-btn" href="<?php echo base_url('packages#package-pg-body'); ?>"><span data-hover="More info">More info</span></a>
										<a class="orange-btn-s" href="<?php echo base_url('orders/index/7/'); ?>"><span data-hover="Order now">Order now</span></a>
									</div>
								</div>
							</div>
							<div class="col-md-3 devoted-support">
								<div class="pic">
									<img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support"  width="262" height="217" />
								</div>
								<div class="gurantee-box">
									<?php /*?><a href="<?php echo site_url('guarantee') ?>"><?php echo GUARANTEE_DAYS; ?> DAY, 100% MONEY BACK GUARANTEE</a>
									<span>The best in the industry, by far.</span><?php */?>
                                    
                                    Speak to your actual designers on the phone (not just a project manager)
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="websites">
							<!--<h4>Select Package: (<span>click package title to select</span>)</h4>-->
							<h3 style="font-size: 20px!important;">All Packages Include</h3>
							<div id="scroll-pane">							
							<?php $this->load->view('includes/web/web-packages-list'); ?>
							</div>
							
							

							<div class="col-lg-3 devoted-support">
								<div class="pic">
									<img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="Logo Design Guarantee - Devoted Support" width="262" height="217" />
								</div>
								<div class="gurantee-box">
									<?php /*?><a href="<?php echo site_url('guarantee') ?>"><?php echo GUARANTEE_DAYS; ?> DAY, 100% MONEY BACK GUARANTEE</a>
									<span>The best in the industry, by far.</span><?php */?>
                                    
                                    Speak to your actual designers on the phone (not just a project manager)
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="guarantee">
							<div class="col-md-9">
								<h3>
									Our "Biggest In Industry" Guarantee 
									<br />
									<a class="theme-green-style" href="javascript:void(0);"> <?php echo GUARANTEE_DAYS; ?>-Day, 100% No Risk Guarantee!...</a>
								</h3>
								<p>Our customer service professionalism is symbolized by our <strong class="theme-green-style"> <?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee.</strong></p>
								<p>If you are unhappy with your website or service for any reason we will refund all your money paid to us, that simple. <strong class="theme-green-style">No fees </strong> are deducted.</p>
								<p>Unlike most web design companies, there are no admin fees whatsoever. Your claim for refund can be made at any time <strong class="theme-green-style"> up to <?php echo GUARANTEE_DAYS; ?> days after placing your order with us!</strong></p>
								<p>We hope this reassures you of our design quality. If our designers were not talented, there would be no way we could offer this 100% guarantee and run our company.</p>
							</div>
							<div class="col-md-3 devoted-support">
								<div class="pic">
									<img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" width="262" height="217" />
								</div>
								<div class="gurantee-box">
									<a href="<?php echo site_url('guarantee')?>"><?php echo GUARANTEE_DAYS; ?> DAY, 100% MONEY BACK GUARANTEE</a>
									<span>The best in the industry, by far.</span>
								</div>
							</div>
							<div class="simple-box clearfix">
								<a href="<?php echo site_url('guarantee')?>" class="orange-btn col-sm-offset-5"><span data-hover="Learn More">Learn More</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="slogan">
			<div class="container">
				<h1 class="text-center">The Logo Design Guarantee Advantage</h1>
			</div>
		</section>
		
		<section id="ldg-advantage">
			<div class="container">
				<div class="row">
					<ul class="clearfix text-center">
						<li>
							<span><img src="assets/images/custom-logo-design-icon.png" alt="" width="43" height="55" /></span>
							<h4>100% Custom Logo Design</h4>
							<p>With original concepts completely based on your business type.</p>
						</li>
						<li>
							<span><img src="assets/images/order-process-icon.png" alt="" width="54" height="55"/></span>
							<h4>3 Minute Order Process</h4>
							<p>We know the importance of your time!</p>
						</li>
						<li>
							<span><img src="assets/images/rock-price-icon-<?php echo COUNTRY; ?>.png" alt=""width="68" height="56" /></span>
							<h4>Rock Bottom Prices</h4>
							<p>Despite our multi-featured service, we keep our prices low to reach more customers.</p>
						</li>
						<li>
							<span><img src="assets/images/satisfication-icon.png" alt=""width="45" height="55" /></span>
							<!--<h4>100% Satisfaction</h4>-->
                            <h4>Unlimited redraws & revisions</h4>
							<p>If you are dissatisfied, you will be entitled to unlimited redraws and revisions (free of cost).</p>
						</li>
						<li>
							<span><img src="assets/images/cutomer-support-icon.png" alt=""width="71" height="55" /></span>
							<h4>24/7 Customer Support</h4>
							<p>To ensure you get the help you need, whenever you need it.</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="slogan">
			<div class="container">
				<h1 class="text-center">A Simple and Efficient Design Process</h1>
			</div>
		</section>
		
		<!-- for desktop only controlled in custom.js -->
		<section id="sief-design-process" class="sief-design-desktop">
			<div class="container">
				<div class="row">
					<div class="process-pic col-xs-12">
						<img class="img-icon" src="assets/images/design-process-icon1.png" alt="design process"  width="122" height="108" />
						<img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46" />
						<img class="img-icon" src="assets/images/design-process-icon2.png" alt="design process" width="122" height="108" />
						<img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46" />
						<img class="img-icon1" src="assets/images/design-process-icon3.png" alt="design process" width="122" height="108" />
						<img class="process-arrow" src="assets/images/process-arrow.png" alt="design process" width="61" height="46" />
						<img class="img-icon" src="assets/images/design-process-icon4.png" alt="design process" width="122" height="108" />
					</div>
					<div class="title">
						<div class="col-xs-3">Order Online or by Phone</div>
						<div class="col-xs-3">Get a Minimum of 6 Samples</div>
						<div class="col-xs-3">Request Revisions</div>
						<div class="col-xs-3">Approve Final Logo</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- for device only controlled in custom.js -->
		<!--<section id="sief-design-process" class="sief-design-device">
			<div class="container">
				<div class="row">
					<div class="title">
						<div class="col-lg-4"><img src="assets/images/process-arrow-down.png" alt="process arrow" width="47" height="62" /></div>
						<div class="col-lg-3">Order Online or by Phone</div>
						<div class="col-lg-3">Get a minimum of 6 samples</div>
						<div class="col-lg-3">Request Revisions</div>
						<div class="col-lg-3">Approve Final Logo</div>
					</div>
				</div>
			</div>
		</section>-->
<?php $this->load->view('includes/footer-common'); ?>