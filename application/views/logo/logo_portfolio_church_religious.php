<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Church and Religious Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Church-and-Religious1.jpg" alt="church and religious"/>
								<img  src="assets/images/logo-in-portfolio/Church-and-Religious2.jpg" alt="church and religious"/>
								<img  src="assets/images/logo-in-portfolio/Church-and-Religious3.jpg" alt="church and religious"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_construction'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Show your community that they can <span class="theme-red">trust</span> you 
						<br />
						to guide them in their <span class="theme-red">faith.</span> 
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">Although logos for churches and logos for companies are different, they basically have the same purpose... To invite people.
</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Religion pursues purity, and so the logo of your church should be a symbol of that same purity that reflects your lifestyle and your faith, as brothers and sisters.</p>
							<p>In this sense, the simplicity of the color white is the key. However, the use of various colors is important as well, to give a deeper meaning to your logo...</p>
							<p>In terms of skill, there's no room for doubt! Our <strong>UK award-winning designers</strong> at LogoDesignGuarantee.co.uk are willing to work with you...24 hours a day, 7 days a week!</p>
							<p>Yes, you can give us your input, <strong>no matter where you are</strong> in the meridian timeline! While you can call most companies only within office hours, you can call or chat <strong>with a designer... At any time!</strong></p>
							<p>You having read this is no accident; look no further. Check our <a href="packages.php">packages</a> and order online, or give us a call right away!</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for churches &amp; religious organizations:</h4>
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