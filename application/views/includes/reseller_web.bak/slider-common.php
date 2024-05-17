			<?php             
            if($this->router->fetch_class() == 'reseller_web'):  // checking controller name            
            $rm = $this->router->method; 
            
            switch($rm){ 
            case 'index':  
            ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <section id="cus-slider" class="">
				<div class="custom">
					<ul class="clearfix">
					    <li><img src="assets/images/web-design-slider/ldg-<?php echo COUNTRY; ?>-webDesign.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/2.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/3.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/4.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/5.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/6.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/7.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/8.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/9.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/10.jpg" alt="" /></li>
						<li><img src="assets/images/web-design-slider/11.jpg" alt="" /></li>
                    </ul>
                </div>
            </section>   
            <?php break; case 'portfolio': ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <section id="cus-slider" class="inner-slide-banner">
				<div class="custom">
					<ul class="clearfix">
						<li>
							<img src="assets/images/hero/web-portfolio-pic1.jpg" alt="hand drawn to perfection"/>
							<div class="res-caption">
				              <div class="res-head">
				                <h2>
									Rise above your 
									<br />
									competition
								</h2>
				              </div>
				              <div class="res-desc">
				                  <p>
								  	Do not settle for second best
								  </p>
				                  <p>
								  	Get a striking high quality website that
									<br />
									sets you apart
								  </p>
				                  <p>
								  	All web packages include free SEO to get
									<br />
									you to the top of those search rankings
								  </p>
								  <a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">Get Started</a>
							  </div>
				             </div>
						</li>
					    <li>
							<img src="assets/images/hero/web-portfolio-pic2.jpg" alt="get a minimum of 6 samples"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										A website as
										<br />
										unique as you are
									</h2>
								</div>
								<div class="res-desc res-desc-alter">
									<p>All of our websites are designed from scratch</p>
									<p>We never use templates.</p>
									<p>
										Our expert web designers build your website
										<br />
										with proven techniques to delight your audience.
									</p>
									<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">Get Started</a>
							  	</div>
							</div>
						</li>
						<li>
							<img src="assets/images/hero/web-portfolio-pic3.jpg" alt="We have got your back"/>
							<div class="res-caption">
								<div style="padding: 3px 20px;" class="res-head">
									<h2>
										Let us give you
										<br />
										peace of mind
									</h2>
								</div>
								<div class="res-desc">
									<p>
										You will get your own personal client
										<br />
										design panel
									</p>
									<p>
										You will be able to see your website's progress
										<br />
										through the entire process
									</p>
									<p>
										We are available to take your feedback
										<br />
										on board 24/7
									</p>
									<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">Get Started</a>
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</section>   
            <?php break; case 'guarantee': ?>
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>            
            <section id="cus-slider" class="inner-slide-banner">
				<div class="custom">
					<ul class="clearfix">
						<li>
							<img src="assets/images/hero/web-guarantee-pic1.jpg" alt="we are here for you"/>
							<div class="res-caption">
				              <div class="res-head">
				                <h2>
									We are here for you!
								</h2>
				              </div>
				              <div class="res-desc">
				                  <p><?php echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee</p>
				                  <p>The best guarantee in the industry</p>
				                  <p>You can request a full refund at any time</p>
				                  <p>No Questions. No Fees.</p>
							  </div>
				             </div>
						</li>
					    <li>
							<img src="assets/images/hero/logo-package-pic2.jpg" alt="hank drawn to prerfection"/>
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
							<img src="assets/images/hero/logo-package-pic3.jpg" alt="We have got your back"/>
							<div class="res-caption">
								<div class="res-head">
									<h2>
										<span class="inner-title-green">24 x 7 x 365</span>
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
						<li>
							<img src="assets/images/hero/logo-package-pic4.jpg" alt="We have got your back"/>
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
						</li>
					</ul>
				</div>	
			</section> 
            <?php break; case 'howitworks': ?>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img alt="about us" src="assets/images/how-it-work-banner.jpg">
								<div style="top: 10px;" class="banner-caption process-ban-caption">
									<div class="banner-caption-head">
										<h2>
											<span>Simple </span>4 Step Process
										</h2>
									</div>
									<div class="banner-desc">
										<p>
											We have made the design process as simple
											<br />
											as possible for you
										</p>
										<p>
											After all, you are paying us. Such a low price.
										</p>
										<p>
											You can have as little or as much
											<br />
											involvement in the design process as yowish.
										</p>
										<p>
											We guarantee your satisfaction
										</p>
										<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; case 'whyus': ?>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img src="assets/images/why-choose-us-banner.jpg" alt="about us"/>
								<div class="banner-caption process-ban-caption">
									<div class="banner-caption-head">
										<h2>
											Why should you choose us?
										</h2>
									</div>
									<div class="banner-desc why-choose-us-ban-desc">
										<p>The strongest guarantee in the industry</p>
										<p>The most features for the lowest price</p>
										<p>Free, 24/7 lifetime support</p>
									</div>
									<a class="button" href="<?php echo base_url('reseller_web/index#websites-packages'); ?>">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; case 'hosting': ?>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img alt="about us" src="assets/images/web-hosting-banner.jpg">
								<div style="top: 10px;" class="banner-caption process-ban-caption">
									<div class="banner-caption-head">
										<h2>
											<span>Hosting </span> you can
											<br />
											truly rely on
										</h2>
									</div>
									<div class="banner-desc">
										<p>99.9% Uptime Guarantee!</p>									
										<p>Free with all web packages</p>								
										<p>Free domain registration</p>									
										<p>Unlimited custom business email addresses</p>
										<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; case 'seo': ?>
            <section id="inner-cont-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-banner">
								<img src="assets/images/seo-banner.jpg" alt="about us"/>
								<div style="top: 7px;" class="banner-caption process-ban-caption">
									<div class="banner-caption-head">
										<h2>
											Claim your place at the 
											<br />
											top of the rankings
										</h2>
									</div>
									<div class="banner-desc">
										<p>
											You get free SEO with any web package
										</p>
										<p>
											We will optimize your website from the start to be sure
											<br />
											you get the highest search rankings
										</p>
										<p>
											Every month we will optimize your website to
											<br />
											ensure you're getting the highest rank possible
										</p>
										<a class="button" href="<?php echo base_url('reseller_web/index#websites-packages'); ?>">See Packages</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <?php break; case 'about': ?> 
            <script src="<?php echo base_url() ?>assets/js/res-slider.min.js"></script>              
            <section id="cus-slider" class="inner-slide-banner">
				<div class="custom">
					<ul class="clearfix">
					    <li>
							<img src="assets/images/hero/about-pic1.jpg" alt="over 10 years of experience"/>
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
				                  <a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">See Packages</a> 
							  </div>
				             </div>
						</li>
						<li>
							<img src="assets/images/hero/about-pic2.jpg"/>
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
				                  	<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">See Packages</a> 
							  </div>
							</div>
						</li>
						<li>
							<img src="assets/images/hero/about-pic3.jpg"/>
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
									<a href="<?php echo base_url('reseller_web/index#websites-packages'); ?>" class="button">See Packages</a>
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</section> 
            <?php break; default : ?>           
            <?php break; } ?>
            <script>
			//for res slider
			$(window).load(function(){
				$(".custom").resSlider({ duration: 1500, loopInterval: 5000, stopOnCustomNavigation:true, loop:true });
			});						
			
			$(window).resize(function(){
				var winW = $(this).width();
				if(winW < 750){
					$(".btn-wrap .green-btn").find("span").html('More Info');
				}
			});
			
		</script>
            <?php endif; ?>