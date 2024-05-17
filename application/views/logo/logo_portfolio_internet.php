<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Internet Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Internet1.jpg" alt="accounting"/>
								<img  src="assets/images/logo-in-portfolio/Internet2.jpg" alt="accounting"/>
								<img  src="assets/images/logo-in-portfolio/Internet3.jpg" alt="accounting"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_landscaping'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						The benefits of investing in the internet, in digital 
						<br />
						innovation are within your <span class="theme-red">reach!</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">
						The internet is so widespread, there's no way a company should ignore this. From small-time to big-time, the internet 
						<br />
						has become a powerful tool... And you should use it to your advantage.
					</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>The competition between companies working  through the internet has greatly increased. People are growing more aware of the presence of online businesses...</p>
							<p>Our designers can work with you and your logo so closely, that we can go from corporate or professional, or warm and casual. We can work a variety of things with our experience with different internet companies!</p>
							<p>What we have for you are services that are nowhere short of top-notch... Our <strong>UK award-winning designers</strong>  and all their experience with working with different internet-based companies are a testament to that. We believe that quality logos need <strong>not be expensive.</strong> Hence, we're offering you the lowest prices in the market! If someone beats us with their prices, just let us know...  
<br />
<span style="font-style: italic;">...We'll beat those prices.</span></p>
							<p>Besides that, we have the best guarantee in the business... A <strong><?php echo GUARANTEE_DAYS; ?>-Day Money Back Guarantee.</strong> This is entirely free of risk! There's no way you won't get a full return on investment with us. </p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for internet firms:</h4>
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