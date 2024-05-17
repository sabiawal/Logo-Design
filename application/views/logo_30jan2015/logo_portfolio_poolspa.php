<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Pool and Spa Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Pool-and-Spa1.jpg" alt="Pool-and-Spa1"/>
								<img  src="assets/images/logo-in-portfolio/Pool-and-Spa2.jpg" alt="Pool-and-Spa1"/>
								<img  src="assets/images/logo-in-portfolio/Pool-and-Spa3.jpg" alt="Pool-and-Spa1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_real_estate'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						You can now <span class="theme-red">relax</span> as your pool or spa's logo 
						<br />
						does what it's meant to do!...
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						...Or even more! The custom logos we create are effective enough to 
						<br />
						advertise your company on their own... So even you can relax!
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Every person that would like to go and rest would surely want to seek help only from a company that has good offerings... <strong> And of course, a warm and inviting logo.</strong></p>
							<p>Hence, we ensure that the logos we create for such businesses are cozy, appealing custom logos that would have a <strong>direct impact</strong> on the customers.</p>
							<p>Our <?php echo COUNTRY;?> award-winning designers can do just that! With years of experience in dealing with different types of pool or spa owners, we are armed and capable of delivering <strong>what you want and need!</strong></p>
							<p>
								<strong>No, you relax and we'll take care of you</strong>
								<br />
								Wherever you are, as long as you have your mobile phone, or an internet connection, you can reach us to monitor your project.
							</p>
							<p>We never stop toiling on your project since you can contact us...<span style="font-style: italic;">24 hours a day</span>, 7 days a week! Yes, you can give us your input, <strong>no matter where you are</strong> in the meridian timeline! While you can call most companies only within office hours, you can call or chat <strong>with a designer... At any time!</strong></p>
							<p>We're also giving you unlimited revisions, so that you totally get your money's worth when you work with us!</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for pool &amp; spa companies:</h4>
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