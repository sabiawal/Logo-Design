<?php $this->load->view('includes/web/header-common'); ?>
        <section class="content">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h3>All Packages Include</h3>
							<div class="we-care-about-you clearfix">
								<ul>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> Day, 100% money back guarantee</li><?php */?>
                                    <li>Phone contact with your designers</li>
									<li>Up to 3 designers</li>
									<li><?php if(COUNTRY == "UK") echo 'Free '; ?>Hosting</li>
								</ul>
								<ul>
									<li>Unlimited revisions</li>
									<li>Content management system</li>
									<li>Search engine optimization</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="trapzoid-box guarantee-box">
								<?php /*?><h3 style="padding: 46px 0;" class="text-center trapzoid-extent1"><a href="<?php echo base_url('web-site-design/webdesigner-limited-sale/guarantee') ?>">Learn About Our Guarantee</a><?php */?>
                                <h3 style="padding: 46px 0;" class="text-center trapzoid-extent1"><a href="<?php echo base_url('web-site-design/webdesigner-limited-sale/howitworks') ?>">Learn How it <br/> Works</a>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						Big Business Websites. Small Business Prices.
					</h1>
				</div>
			</section>
			
			<section id="websites-packages">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<div class="web-pak-head">
								<h4>Select Package: (<span>click package title to select</span>)</h4>
								<h3>All Packages Include</h3>
							</div>
							<div class="scroll-cover">
							<?php $this->load->view('includes/web/web-packages-list'); ?>
							</div>
						</div>

						<div class="col-lg-3 devoted-support">
							<div class="pic">
								<img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" />
							</div>
							<div class="gurantee-box">
								<?php /*?><a href="#"><?php echo GUARANTEE_DAYS; ?> DAY, 100% MONEY BACK GUARANTEE</a>
								<span>The best in the industry, by far.</span><?php */?>
                                Speak to your actual designers on the phone (not just a project manager)
                                
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="web-widgets">
				<div class="container">
					<div class="row">
                    <div class="col-lg-3 stack"></div>
						<div class="col-lg-6 stack text-center">
							<div class="pic">
								<img class="img-responsive" src="assets/images/web-widget-pic1.png" alt="Site Online Within 2 Weeks!" />
							</div>
							<h3>Site Online Within 2 Weeks!</h3>
							<p>We will provide your first concepts within 3 days. Further, most clients have their projects completed within 2 weeks.</p>
							<p>Unlike other firms, we will have a dedicated designer allocated to your project!..</p>
							<div class="text-center">
								<a class="yellow-find-more-btn" href="<?php echo base_url('web-site-design/webdesigner-limited-sale/howitworks'); ?>">Find out more</a>
							</div>
						</div>
                        <div class="col-lg-3 stack"></div>
                        
						<?php /*?><div class="col-lg-6 stack text-center">
							<div class="pic">
								<img class="img-responsive" src="assets/images/web-widget-pic2.png" alt="<?php echo GUARANTEE_DAYS ?> Day, Money Back Guarantee!" />
							</div>
							<h3><?php echo GUARANTEE_DAYS ?> Day, Money Back Guarantee!</h3>
							<p>The Best Guarantee in the industry. No one gets close. Our guarantee reflects our commitment to our Devoted Support&trade;.</p>
							<p>Our guarantee underlies our unique design excellence. It's also part of our company slogan, "We Guarantee the Lowest Price and the Best Money Back Guarantee!"... </p>
							<div class="text-center">
								<a class="yellow-find-more-btn" href="<?php echo base_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>">Find out more</a>
							</div>
						</div><?php */?>
                        
						<div class="col-lg-6 stack text-center">
							<div class="pic">
								<img class="img-responsive" src="assets/images/web-widget-pic3.png" alt="Expert SEO Included!" />
							</div>
							<h3>Expert SEO Included!</h3>
							<p>Complete Search Engine <?php $s = 'Optimization'; if(COUNTRY == 'UK'): $s = str_replace('z','s',$s);  endif; echo $s; ?> (SEO) is provided with every package. Most design firms will charge extra for this!</p>
							<p>Our SEO includes full indexing of your site and submission to the top 19 search engines.</p>
							<div class="text-center">
								<a class="yellow-find-more-btn" href="<?php echo base_url('web-site-design/webdesigner-limited-sale/seo'); ?>">Find out more</a>
							</div>
						</div>
						<div class="col-lg-6 stack text-center">
							<div class="pic">
								<img class="img-responsive" src="assets/images/web-widget-pic4.png" alt="Hosting Free, For Life!" />
							</div>
							<h3>Hosting Free<?php if(COUNTRY == "USA") echo ', For Life';?>!</h3>
							<p><?php if(COUNTRY == "USA") echo "Yes, that's correct...\"For Life!\" ";?>Our hosting includes 99.9% guaranteed uptime of your site.</p>
							<p>We set all the hosting up for you, and ensure your site is fully live on the internet before we complete your project.</p>
							<p>We also offer unlimited, 24/7 technical phone support, for life.</p>
							<div class="text-center">
								<a class="yellow-find-more-btn" href="<?php echo base_url('web-site-design/webdesigner-limited-sale/hosting'); ?>">Find out more</a>
							</div>
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
						<li><img alt="" src="assets/images/brand-logo1.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo2.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo3.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo4.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo5.jpg" class="img-responsive"></li>
					</ul>
				</div>
			</section>
		</section>
		
<?php $this->load->view('includes/web/footer-common'); ?>