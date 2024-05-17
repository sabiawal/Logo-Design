<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Retail Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Retail1.jpg" alt="Retail1"/>
								<img  src="assets/images/logo-in-portfolio/Retail2.jpg" alt="Retail1"/>
								<img  src="assets/images/logo-in-portfolio/Retail3.jpg" alt="Retail1"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_salon_dayspa'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Turn the heads of passers-by and <span class="theme-red">get</span> them in 
						<br />
						your retail store.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Let your retail logo boost your sales by turning window-
						<br />
						shoppers into <span style="font-weight: 700;">paying customers.</span>
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Being a <span style="text-decoration: underline;">peddler</span> is a thing of the past because today, retail logos can already replace your effort in approaching every customer.</p>
							<p>You don't need to knock on their door or shout along the streets to get a successful sale. With your own retail logo, <strong>customers will come to you.</strong></p>
							<p><strong>Contents of Good Retail Logo</strong></p>
							<p>Four important aspects create a ground-breaking retail logo:</p>
							<ul class="dot">
								<li>Eye-capturing design</li>
								<li>Mixture of colors</li>
								<li>Logo text</li>
								<li>Layout and style</li>
							</ul>
							<p>Eye-capturing design must be at the forefront of the retail logo to get <strong>massive traffic</strong> for your business. It is necessary to carry images that are pleasing to the eye and really look professional.</p>
							<p>In terms of color combination, the mixture can project various attractiveness and meanings to people. Usually a retail logo contains bright colors to attract the modern-day buyers. On the other hand, dark colors depict a more serious theme.</p>
							<p>The logo text is also important as it contains the message or tagline of your establishment coupled with flashy font designs. At the same time, layout also projects a big impact as it enhances the aesthetic quality of the logo.</p>
							<p>Our <strong style="font-style: italic;">highly-skilled in-house designers</strong> can create the results that you're expecting to receive as they work round the clock.</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for retail companies:</h4>
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