<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Construction Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Construction1.jpg" alt="construction"/>
								<img  src="assets/images/logo-in-portfolio/Construction2.jpg" alt="construction"/>
								<img  src="assets/images/logo-in-portfolio/Construction3.jpg" alt="construction"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_consulting'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Build client relationships and <span class="theme-red">grow</span> your 
						<br />
						construction business with an excellent logo.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">People will come to you for electric, piping and construction needs as you showcase your trustworthy logo.</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Getting clients is like construction work, you need to <strong>create</strong> a sturdy foundation...and a perfect way to construct the relationship is through a reliable and trustworthy logo.</p>
							<p>People will come to you when you show them that you can be trusted.</p>
							<p>A good logo design can flaunt the <strong>real values</strong> that you have. Once you open your door of value, they can see how you give importance to your clients.</p>
							<p>Construction logos must also show a high level of knowledge and reliability for the value of truth to be genuine. Once a professional design company creates this reliable construction logo, you'll notice the big advantage.</p>
							<p>LogoDesignGuarantee.com houses <strong><?php echo COUNTRY;?>-Award Winning Designers</strong> with years of experience in making construction logos.</p>
							<p>They continue to learn about the construction services to cater to the growing needs of construction companies.</p>
							<p>Our design team starts with a blueprint in constructing your logo in the same way that an architect starts a building construction with a sound plan. We <strong>consult you</strong> for the specifications needed before going on with the design.</p>
							<p>Fonts, layout, images and colors are all considered carefully to create the <span style="text-decoration: underline;">professional, presentable and trustworthy logo with relevance to your field.</span></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for construction clients:</h4>
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