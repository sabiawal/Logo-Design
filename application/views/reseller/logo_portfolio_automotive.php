<?php $this->load->view('includes/reseller/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Automotive Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Automotive1.jpg" alt="automotive"/>
								<img  src="assets/images/logo-in-portfolio/Automotive2.jpg" alt="automotive"/>
								<img  src="assets/images/logo-in-portfolio/Automotive3.jpg" alt="automotive"/>
							</div>
							<a href="<?php echo site_url('reseller/industry/logo_portfolio_bio_techno'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/reseller/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Spark up your automotive business with
						<br />
						<span class="theme-red">a strong and inspiring logo.</span> 
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">Whether you make cars, sell cars, fix cars or just want a logo for your vehicle, you've come to the right place. A logo can heat up your advertising and get more leads. 
</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Whether your clients are concerned with the environment or just focused on the car performance or even for status, your logo can <strong> match-up with their needs.</strong></p>
							<p>Branding allows customers to look for their desired impression which makes it an important consideration in logo design.</p>
							<p>For example, the Ferrari logo projects fast sports cars while Mercedes-Benz logo focuses on luxury family vehicles.</p>
							<p>Since the vehicle market is more than a billion-dollar industry, uniqueness and an appropriate mental picture must be instilled in the minds of the clients. </p>
							<p>Our <strong> USA-award winning team of designers have years of experience</strong> in making hotshot logos and designs for automobile owners and manufacturers worldwide. Our team of experienced and professional designers applies their knowledge on creating the perfect logo for your automotive company.</p>
							<p><strong>To deliver the best logo, we consider the following:</strong></p>
							<ul class="dot">
								<li>Quality</li>
								<li>Current trends</li>
								<li>Motive</li>
							</ul>
							<p>Quality pertains to the color, design and the overall visual impact of the logo once the automotive company  uses it. As professional designers, we guarantee the production of a unique logo using <strong style="font-style: italic;">state-of-the-art graphic design software.</strong></p>
							<p>Popularity and the ins and outs in the market affect sales and popularity. With Logo Design Guarantee, we ensure you that our <span style="text-decoration: underline;">unique designs are up-to-date</span> based on <strong>client feedback</strong> and endless learning for our expert designers.</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for automotive clients:</h4>
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