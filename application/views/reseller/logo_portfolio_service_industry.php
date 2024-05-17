<?php $this->load->view('includes/reseller/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Service Industries Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Service-Industries1.jpg" alt="Service-Industries1"/>
								<img  src="assets/images/logo-in-portfolio/Service-Industries2.jpg" alt="Service-Industries1"/>
								<img  src="assets/images/logo-in-portfolio/Service-Industries3.jpg" alt="Service-Industries1"/>
							</div>
							<a href="<?php echo site_url('reseller/industry/logo_portfolio_travel'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/reseller/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Let that excellent quality <span class="theme-red">ooze</span> from your 
						<br />
						service's custom logo.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Do you have the excellence and the attitude to be able to keep customers with you, but lack 
						<br />
						the ability to attract them...? Invite customers to your company with the power of a 
						<br />
						custom logo that's designed to fit the company you run.
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p><span style="font-style: italic;">A logo must suit the company it belongs to.</span> That is especially true for service companies like yours. In order to be able to bring home the bacon, you must <strong>do a good job</strong> with the services that you offer!</p>
							<p>Whatever technical skills and expertise your employees have, whatever fields you specialize in, whatever your quality is...They would only take care of the <strong>second half</strong> of your business.</p>
							<p>The point is that you need a customer base to be able to put that excellent workmanship possessed by your company to use. Without it, your skills will be put to waste.</p>
							<p>That is the first half. We can take care of the <strong>first half</strong> for you. Employ our USA award-winning designers to create your custom logo that would suit your purposes...</p>
							<p>Custom logos that are serious, but warm and inviting at the same time.</p>
							<p>With these, you can attract and hit the customer base you need for your company <strong>to grow even further!</strong></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for service companies:</h4>
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
<?php $this->load->view('includes/reseller/footer-common'); ?>