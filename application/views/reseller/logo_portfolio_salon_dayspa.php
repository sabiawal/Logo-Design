<?php $this->load->view('includes/reseller/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Salon Day Spa Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Salon-Day-Spa1.jpg" alt="Salon-Day-Spa1"/>
								<img  src="assets/images/logo-in-portfolio/Salon-Day-Spa2.jpg" alt="Salon-Day-Spa1"/>
								<img  src="assets/images/logo-in-portfolio/Salon-Day-Spa3.jpg" alt="Salon-Day-Spa1"/>
							</div>
							<a href="<?php echo site_url('reseller/industry/logo_portfolio_service_industry'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/reseller/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Create an <span class="theme-red">alluring</span> and <span class="theme-red">charming</span> look for your 
						<br />
						salon and spa with a refreshing logo.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						A logo is the first to capture every prospect's eye. Your salon and spa logo 
						<br />
						should have all it takes to <strong>impress</strong> your prospects at first glance.  
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Every person who looks for a salon and spa wants <strong>solace and pampering...</strong> <span style="font-style: italic;">and every salon and spa promises to give this.</span></p>
							<p>Thus to make you <strong>shine</strong> above the rest you should think of ways to catch their attention, pick up their phone and make an appointment.</p>
							<p>One of the best ways is to <span style="text-decoration: underline;">attract</span> them with the right design of your logo.</p>
							<p>With our USA-award winning designers who have done <span style="font-style: italic;">quality logos</span> for salons and spas around the US, UK and many places all over the world, you will surely have the luxurious and classy appearance that will make you noticeable.</p>
							<p>We'll use the right type of color like calm colors to create an <strong>elegant look.</strong></p>
							<p>All this is to meet the expectations of your clients and make them do business again with you in the future! We do all this to help you succeed in your business. We can be your stepping stone for <strong style="font-style: italic;">success!</strong></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for salons and day spas:</h4>
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