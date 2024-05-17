<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Medical Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Medical1.jpg" alt="Medical1"/>
								<img  src="assets/images/logo-in-portfolio/Medical2.jpg" alt="Medical1"/>
								<img  src="assets/images/logo-in-portfolio/Medical3.jpg" alt="Medical1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_networking'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Give off the impression of great, quality 
						<br />
						medical services with your <span class="theme-red">new</span> logo!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						"First impressions last..." With the proper designs, you can be the
						<br />
						medical service provider people will trust, from just one look.
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Trust is crucial in the medical field. If people don't trust you, you simply don't get any patients. You get no income. ...So we at LogoDesignGuarantee.com take this seriously. Designing something that would help you and your company exude a high amount of <strong>trustworthiness</strong>, with low-priced, high quality designs that would surely <strong>fulfill your needs...</strong></p>
							<p><strong style="text-decoration: underline;">With the same precision and care that you practice everyday</strong></p>
							<p>Our hands might not be as skilled as the surgeons, nonetheless...We'd give your project careful focus and devotion, so that your logo will be a masterpiece!...</p>
							<p>We're not only giving you the best service of <?php echo COUNTRY;?> award-winning designers; we're not about to settle with giving you just the ability to request to revise our designs as many times...</p>
							<p>We're also giving it to you at the humblest prices in the market, along with the best guarantee: A <strong><?php echo GUARANTEE_DAYS; ?>-Day-Money Back Guarantee!</strong></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for medical companies:</h4>
							<ul class="dot">
								<li>Website design for online advertising</li>
								<li>Designs for company uniforms, folders, etc</li>
								<li>Mobile designs for services or deliveries</li>
								<li>Flyers, posters or brochures for giveaways</li>
								<li>Business cards or compliment slips design</li>
							</ul>
							<br />
							<p>Some logos come with these services.</p>
							<a href="<?php echo base_url('packages') ?>" class="orange-btn1"><span data-hover="See Our Packages!">See Our Packages!</span></a>
							<br />
							<br />
							<h4 class="green-divider-title theme-green-style2-conly">Satisfaction Guaranteed</h4>
							<p>We give you these advantages to meet and exceed your needs.</p>
							<ul class="dot">
								<li><?php echo GUARANTEE_DAYS; ?>-Day Money Back Guarantee</li>
								<li>Unlimited Revisions</li>
								<li>Logo concepts that are 100% bespoke, unique and different </li>
								<li>Best Price Guarantee! We'll beat any like-to-like service by 10%.</li>
								<li>Dedicated project manager</li>
								<li>We start your designs today!</li>
							</ul>
							<br />
							<p>Let the experts in logo design work for you! <a class="theme-green-style2-conly" href="javascript:void(0);">Call us now.</a></p>
						</div>
					</div>
				</div>
				
			</section>
		</section>
<?php $this->load->view('includes/footer-common'); ?>