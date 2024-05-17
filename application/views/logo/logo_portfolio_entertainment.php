<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Entertainment Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Entertainment1.jpg" alt="accounting"/>
								<img  src="assets/images/logo-in-portfolio/Entertainment2.jpg" alt="accounting"/>
								<img  src="assets/images/logo-in-portfolio/Entertainment3.jpg" alt="accounting"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_event'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Enhance your image in the entertainment industry 
						<br />
						with a <span class="theme-red">unique</span> and <span class="theme-red">fabulous</span> logo!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">Because your logo is the first to catch your viewers' attention, it is the subject for public interest.</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Designs for your logo should always be the <strong>best</strong> and <strong>most appealing</strong> among all your competitors. We at <span style="text-decoration: underline;">LogoDesignGuarantee.co.uk</span>  focus on this. We also ensure that every finished logo reflects the <span style="text-decoration: underline;">inner function and identity</span> of its company...</p>
							<p>For we believe that your logo should <strong>not just look interesting,</strong> but should also convey the image and activities of your company.</p>
							<p>Entertainment logos should also be <strong>adaptable</strong> for it will possibly be used in any or all forms of media.</p>
							<p>Choose our <strong>experienced designers</strong> who have done a lot of logos for entertainment industries around the UK </p>
							<p>Yours will surely be <span style="font-style: italic;">flexible, very engaging and will express the complete nature and theme</span> of your company. We can use high appealing bright colors that will <span style="text-decoration: underline;">undoubtedly shimmer</span> in every viewer's eye.</p>
							<p>With us you can obtain an <strong>entertaining and captivating logo</strong> that will surely stand above the rest!</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for entertainment clients:</h4>
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