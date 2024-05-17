			<?php 
            $rm = $this->router->method;            
            if(($this->router->fetch_class() == 'logo')):  // checking controller name 
            switch($rm){ 
            case 'index':  
            
            ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <script>
                //for res slider
    			//$(window).load(function(){
    			$(document).ready(function(){
    			 //alert('test');
    				$(".custom").resSlider({ duration: 500, loopInterval: 5000, stopOnCustomNavigation:true, loop:true });
    			});			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>
            <section id="cus-slider" class="">
				<div class="custom">
					<ul class="clearfix">
					    <li>
							<img src="assets/images/hero/hero1.jpg" alt="Half Price Sale Now" width="1140" height="367"/>
							<div class="res-caption">
                            
				              <div class="res-head">
                              
				                <h2 style="line-height: 1.3;">
                                    <?php if(SHOW_REGULAR_PRICE): ?>
									<span style="font-size: 47px;">Half-Price Sale</span>
									<br />
                                    Now Only <span><del><?php echo CURRENCY.START_LP_P_R; ?></del></span> <span style="color:#ff3300;"><?php echo CURRENCY.START_LP_P; ?>!</span>
                                    <?php else: ?>
                                    <span style="font-size: 47px;">Logo Design</span>
									<br />
                                    Now Only <span style="color:#ff3300;"><?php echo CURRENCY.START_LP_P; ?>!</span>
                                      
                                    <?php endif; ?>									
									</h2>
                                
				              </div>
                              
				              <div class="res-desc">
				                  <p>Get a minimum of 6 samples</p>
				                  <p>Designed by a <?php echo COUNTRY; ?> in-house team</p>
				                  <p>Only 100% Custom Made!</p>
				                  <a style="margin: 15px 0 0;" href="<?php echo site_url('packages'); ?>" class="button">See Packages</a> 
							  </div>
				             </div>
						</li>
						<li>
							<img src="assets/images/hero/hero2.jpg" alt="Excellent Design" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>Yes, we have excellent design.<br/>Yes, we can prove it.</h2>
								</div>
								<div class="res-desc">
									<p>Only hand drawn logos</p>
									<p>Expert, award winning designers</p>
									<!--<p>98% Customer Satisfaction</p>-->
                                    <p>Unlimited revisions </p>
				                  	<a href="<?php echo site_url('portfolio'); ?>" class="button">See Portfolio</a> 
							  </div>
							</div>
						</li>
						<li>
							<img src="assets/images/hero/hero3.jpg" width="1140" height="367" alt="Money Back Guarantee" />
							<div class="res-caption">
								<div class="res-head">
									<h2>We've got your back!</h2>
								</div>
                                <div class="res-desc">
									<?php /*?><p><?php echo GUARANTEE_DAYS; ?> Day 100% Money Back Guarantee</p><?php */?>
                                    <p>Unlimited redraws (others only offer “unlimited revisions”)</p>
									<p>Applies to any part of the design process</p>
									<p>The best in the industry, by far</p>
									<p>We hide nothing!</p>
									<a style="margin: 34px 0 0;" href="<?php echo site_url('process'); ?>" class="button">Learn More</a>
								</div>
							</div>
						</li>
                    </ul>
                </div>
            </section>
            
            <?php break; case 'packages': ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <script>
                //for res slider
    			//$(window).load(function(){
    			$(document).ready(function(){
    			 //alert('test');
    				$(".custom").resSlider({ duration: 500, loopInterval: 5000, stopOnCustomNavigation:true, loop:true });
    			});            			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>
            <section id="cus-slider" class="inner-slide-banner">
				<div class="custom">
					<ul class="clearfix">
                        <li>
							<img src="assets/images/hero/logo-package-pic1.jpg" alt="hand drawn to perfection" width="1140" height="367"/>
							<div class="res-caption">
				              <div class="res-head">
				                <h2>
									Get a Minimum
									<br />
									of <span class="inner-title-green"> 6 </span> Samples...
								</h2>
				              </div>
				              <div class="res-desc">
				                  <p>
								  	 We offer the most logo samples for the
									 <br />
									 lowest price
								  </p>
				                  <p>
								  	 3 In-House expert designers work on
								  	 <br />
 									 your logo (minimum)
								  </p>
				                  <p>
								  	 Get 6 samples for just <?php if(SHOW_REGULAR_PRICE): ?><del><?php echo CURRENCY.START_LP_P_R; ?></del><?php endif; ?><?php echo " ".CURRENCY.START_LP_P; ?>!
								  </p>
							  </div>
				             </div>
						</li>
					    <li>
							<img src="assets/images/hero/logo-package-pic2.jpg" alt="get a minimum of 6 samples" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										Hand Drawn to 
										<br />
										<span class="inner-title-green"> Perfection...</span>
									</h2>
								</div>
								<div class="res-desc res-desc-alter">
									<p>All of our logos are hand drawn for you</p>
									<p>100% custom made and unique</p>
									<p>No templates. No clip art.</p>
							  	</div>
							</div>
						</li>
						<li>
							<img src="assets/images/hero/logo-package-pic3.jpg" alt="We have got your back" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										<span class="inner-title-green">24 x 7 x <?php echo GUARANTEE_DAYS; ?></span>
										<br />
										We've Got Your Back...
									</h2>
								</div>
								<div class="res-desc">
									<p>24/7 phone and live chat support</p>
									<p>Dedicated project manager</p>
									<p>24 Hour revisions turnaround</p>
								</div>
							</div>
						</li>
						<?php /*?><li>
							<img src="assets/images/hero/logo-package-pic4.jpg" alt="We have got your back" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										The Strongest
										<br />
										<span class="inner-title-green">Guarantee</span>
									</h2>
								</div>
								<div class="res-desc">
									<p><?php echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee</p>
									<p>We hide nothing</p>
									<p>No questions asked.</p>
								</div>
							</div>
						</li><?php */?>
                    </ul>                    
                </div>
            </section>
            
            <?php break; case 'process': ?> 
            <script>			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>           
   			<section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img src="assets/images/process-banner.jpg" alt="about us" width="1140" height="367"/>
								<div class="banner-caption process-ban-caption">
									<div class="banner-caption-head">
										<h2>
											<span>Simple </span>5 Step Process
										</h2>
									</div>
									<div class="banner-desc">
										<p>
											It only takes 3 minutes to order
										</p>
										<p>
											We start designing your logos immediately
										</p>
										<p>
											We update you every step of the way
										</p>
										<a class="button" href="<?php echo site_url('packages'); ?>">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; case 'compare': ?> 
            <script>			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img src="assets/images/compare-us-banner.jpg" alt="compare us" width="1140" height="367"/>
								<div class="banner-caption">
									<div class="banner-caption-head">
										<h2>
											How do we stack up?
										</h2>
									</div>
									<div class="banner-desc white-bg-banner-desc">
										<p>
											We always go the extra mile for you
										</p>
										<p>
											No logo company offers you all our features
											<br />
											at such a low price.
										</p>
										<p>
											We can prove it!
										</p>
									</div>
									<br />
									<a class="button" href="<?php echo site_url('packages'); ?>">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 
            <?php break; case 'portfolio': ?>
            <script>			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script> 
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
            <?php break; case 'about': ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <script>
                //for res slider
    			//$(window).load(function(){
    			$(document).ready(function(){
    			 //alert('test');
    				$(".custom").resSlider({ duration: 500, loopInterval: 5000, stopOnCustomNavigation:true, loop:true });
    			});
            			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>
            <section id="cus-slider" class="inner-slide-banner">
				<div class="custom">
					<ul class="clearfix">
					    <li>
							<img src="assets/images/hero/about-pic1.jpg" alt="over 10 years of experience" width="1140" height="367"/>
							<div class="res-caption">
				              <div class="res-head">
				                <h2>
									Over<span class="inner-title-green"> 10 Years </span>of 
									<br />
									Experience
								</h2>
				              </div>
				              <div class="res-desc">
				                  <p>
								  	 Our recruitment is highly selective
								  </p>
				                  <p>
								  	 Each one of our designers have over
								  	 <br />
 									 10 years of experience
								  </p>
				                  <p>
								  	 Many of our designers have won
								  	 <br />
									 international awards
								  </p>
				                  <a href="<?php echo site_url('packages'); ?>" class="button">See Packages</a> 
							  </div>
				             </div>
						</li>
						<li>
							<img src="assets/images/hero/about-pic2.jpg" alt="about" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>24/7 <span class="inner-title-green"> Devoted Support<sup>&trade;</sup></span></h2>
								</div>
								<div class="res-desc res-desc-alter">
									<p>
										Personal support 24/7 by phone and
										<br />
										live chat
									</p>
									<p>Dedicated project manager</p>
									<p>24 hour revisions turnaround</p>
				                  	<a href="<?php echo site_url('packages'); ?>" class="button">See Packages</a> 
							  </div>
							</div>
						</li>
						<li>
							<img src="assets/images/hero/about-pic3.jpg" alt="about" width="1140" height="367"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										<span class="inner-title-green">In-House </span> <?php echo COUNTRY; ?> Design 
										<br />
										Team
									</h2>
								</div>
								<div class="res-desc">
									<p>
										We do not outsource
									</p>
									<p>
										All of our designers hold degrees
										<br />
										from leading institutions
									</p>
									<p>
										Multiple expert designers work on
										<br />
										your logo
									</p>
									<a href="<?php echo site_url('packages'); ?>" class="button">See Packages</a>
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</section>
            <?php break; default : ?>
            <script>			
                $(document).resize(function(){
                    var winW = $(this).width();
                    if(winW < 750){
                    $(".btn-wrap .green-btn").find("span").html('More Info');
                    }
                });			
            </script>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img src="assets/images/guarantee-banner.jpg" alt="guarantee" width="1140" height="367"/>
								<div class="right-align-ban-caption">
									<div class="banner-caption-head">
										<h2>
											You can count on us!
										</h2>
									</div>
									<div class="banner-desc">
										<?php /*?><p>
											<?php echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee
										</p>
										<p>
											Refund available at any time
										</p>
										<p>
											No Questions. No Fees.
										</p>
										<a class="button" href="<?php echo site_url('packages'); ?>">Get Started</a><?php */?>
                                        <p>Phone contact with your designers</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; } ?>            
            <?php endif; ?>