<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Landscaping Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Landscaping1.jpg" alt="Landscaping1"/>
								<img  src="assets/images/logo-in-portfolio/Landscaping2.jpg" alt="Landscaping1"/>
								<img  src="assets/images/logo-in-portfolio/Landscaping3.jpg" alt="Landscaping1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_medical'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Enhance the productivity of your lawn care
						<br />
						business with a visually <span class="theme-red">stimulating</span> 
						<br />
						landscaping logo! 
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Because your logo should make your prospects feel that you could make their property look its best, you should let
						<br />
						 yours be designed only by the experts. 
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>You might think that creating your landscaping logo is <strong>extremely easy</strong> because you'll only use trees, grass, waters and green shades in it... <span style="font-style: italic;">but don't you know that the wrong design of logo can cause a company's <strong>destruction?</strong></span></p>
							<p>With our UK-award winning designers who are <strong>well-known for creating aesthetically pleasing logos</strong> for landscaping companies around the UK .</p>
							<p>You will surely notice the <span style="text-decoration: underline;">favorable outcome</span> your logo will have for your company.</p>
							<p>Our designers produce refreshing, revitalizing and pleasant logos that will surely soothe your prospects' eyes.</p>
							<p>We sprinkle the right colors, fonts and graphics to help every one of our customers succeed.</p>
							<p>Who knows? 5 years from now, your landscaping business could be the <strong>best and excellent</strong> just because of your logo?</p>
							<p>So don't underestimate its power! Get an effective logo, let it designed by us <span style="text-decoration: underline;">now.</span></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for landscaping companies:</h4>
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