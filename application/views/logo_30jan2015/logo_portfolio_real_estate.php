<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Real Estate Development Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Real-Estate-Development1.jpg" alt="Real-Estate-Development1"/>
								<img  src="assets/images/logo-in-portfolio/Real-Estate-Development2.jpg" alt="Real-Estate-Development1"/>
								<img  src="assets/images/logo-in-portfolio/Real-Estate-Development3.jpg" alt="Real-Estate-Development1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_realtor'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Raise your flag in being the <span class="theme-red">best</span> property seller.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Advertise your spaces to get the buyers and renters by capturing 
						<br />
						their interests using an <span style="text-decoration: underline;">irresistible logo.</span>
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Having your own custom logo can <strong>support your marketing</strong> campaigns to promote your real estate services. Maybe you're thinking, what can make a real estate logo extra special?</p>
							<p>Well... it depends upon how you're going to use it as a <strong style="text-decoration: underline;">tool for communication</strong> and letting your clients interpret it the way you want it to be.</p>
							<p>In this case, you need the assistance of <strong style="font-style: italic;">professional designers</strong> to create a unique real estate logo for your business. Luckily, you've come to the right place. A group of dedicated designers will help you...</p>
							<p>We can make the logo the way you want it to be. <span style="font-style: italic;">You're the boss.</span> Imagine... <strong><?php echo COUNTRY;?>-Award Winning designers</strong> are going to treat a real estate client as the boss. Isn't it awesome?</p>
							<p><strong>How we can make the best logo?</strong></p>
							<p>Basically, we start with the following considerations before making the logo:</p>
							<ul class="dot">
								<li>Design</li>
								<li>Font</li>
								<li>Color</li>
							</ul>
							<p>We can help you with the layout and the graphics included in your logo. You envision your logo, <strong>we make it materialize.</strong> We make your real estate logo very formal and connect it with your company's name and surroundings.</p>
							<p>We also consider the fonts like style, size, color and highlights like bold, italics or underline for emphasis. The font supports the appearance of the text especially the company name.</p>
							<p>Color is also considered as it gives life to both the fonts and the design. Usually dark colors are used for formality.</p>
							<p><strong>Undeniably to be the Best Guarantee Ever!</strong></p>
							<p>If ever you're not satisfied with our work, we offer you <strong style="font-style: italic;"><?php echo GUARANTEE_DAYS; ?>-Day Money Back Guarantee!</strong></p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for real estate companies:</h4>
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