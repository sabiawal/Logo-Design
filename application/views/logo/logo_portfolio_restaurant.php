<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Restaurant Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Restaurant1.jpg" alt="Restaurant1"/>
								<img  src="assets/images/logo-in-portfolio/Restaurant2.jpg" alt="Restaurant1"/>
								<img  src="assets/images/logo-in-portfolio/Restaurant3.jpg" alt="Restaurant1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_retail'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Want your restaurant to be acknowledged and 
						<br />
						enjoyed by <span class="theme-red">all</span> demographics?
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you are, using a hand drawn, unique logo is the solution!
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>
								Choose our expert designers who have done many logos of successful restaurants in US and UK...
								<br />
								...yours will surely look <span style="font-style: italic;">appetizing in the eye</span> of your customers.
							</p>
							<p>Our designers can create a <span style="text-decoration: underline;">delicious and mouthwatering logo</span> that will leave your prospects <strong>hungry and craving</strong> for your products.</p>
							<p>We ensure that your customers will be given an idea of what kind of food you serve and how savory it is even before they taste it.</p>
							<p>We can also use your logo to show <strong>the history and principle</strong> of your restaurant to your customers without a single word.</p>
							<p>Putting up a chopstick or sushi in your logo to <span style="font-style: italic;">let people know</span> you serve a Japanese cuisine or cups with aroma on your logo <span style="font-style: italic;">to entice and let them long</span> for coffee are among just some of our great designs.</p>
							<p>With our excellence, people will <strong style="font-style: italic;">surely</strong> recognize and look up to your restaurant because of your logo!</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for restaurants:</h4>
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
								<li>Logo concepts that are unique and different to give you ideas </li>
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