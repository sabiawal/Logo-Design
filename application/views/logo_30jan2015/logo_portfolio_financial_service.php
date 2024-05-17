<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Financial Services Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Financial1.jpg" alt="Financial1"/>
								<img  src="assets/images/logo-in-portfolio/Financial2.jpg" alt="Financial1"/>
								<img  src="assets/images/logo-in-portfolio/Financial3.jpg" alt="Financial1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_golf_courses'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Reassure your clients with a logo that conveys 
						<br />
						<span class="theme-red">trust, experience and credibility.</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">Getting the right logo is a small, but critical step to inspire confidence and trust in prospective clients. With years of experience in creating professional designs for financial firms, large and small, you are guaranteed a unique logo that will meet and exceed the needs of your firm.</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>The key to designing an excellent financial services logo is to convey that your organization is <strong>ethical, trustworthy, professional and experienced.</strong> In addition to this however, you need to stand out from the crowd.</p>
							<p>Many financial services logos tend to look quite boring with dull and muted colors. They all seem to just blend together and become forgettable.</p>
							<p>Our <strong>in-house <?php echo COUNTRY;?> designers</strong> have years of experience in finding the right balance between professionalism and unique creative design. This will gain more prospective clients and <strong>increase referrals</strong> for your firm.</p>
							<p>We pride ourselves on our award winning design team who has designed thousands of logos for financial services around the world.</p>
							<p>Whether you're just starting out or looking to freshen up your brand, you are assured a logo that will be modern and <strong>stand strong against your largest competitors.</strong></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for financial services:</h4>
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