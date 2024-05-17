<?php $this->load->view('includes/reseller/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Illustrative Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Illustrative1.jpg" alt="Illustrative1"/>
								<img  src="assets/images/logo-in-portfolio/Illustrative2.jpg" alt="Illustrative1"/>
								<img  src="assets/images/logo-in-portfolio/Illustrative3.jpg" alt="Illustrative1"/>
							</div>
							<a href="<?php echo site_url('reseller/industry/logo_portfolio_international'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/reseller/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Establish your authority as a capable Illustrating
						<br />
						company from the <span class="theme-red">get-go.</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
				<h5 class="bf-med-title text-center">
					High-quality illustrations are highly visual, and having a bad logo just doesn't suit such a business. You need equally
					<br />
					high- quality custom logos that would suit your business style.  
				</h5>
				<div class="green-vertical-divider clearfix">
					<div class="col-sm-6">
						<p>Our <strong>USA award-winning designers</strong> can help you create a logo that would suit your tastes, and give the feel of total professionalism; mixed with the elegance and skill and art that others must see.</p>
						<p>There's also a need to be picky with colors: it all depends on the image you want your company to portray. Is it a serious one, or a rather playful one?</p>
						<p>You can attract different types of customers with different approaches for us to give your logos some shape.</p>
						<p><strong>A picture paints a thousand words</strong></p>
						<p>We want your company to be identified as a credible company. That's why we assign 2-3 man teams on every single project... And they stay devoted on that project, to ensure high-quality.</p>
						<p>Our goal is the same as your goal: <strong>To make you successful.</strong> For us, we'll try to work that out with the help of the logos that we can make for your company.</p>
						<p>We also recognize your own expertise! When we said that we'd establish your authority right from the get-go, it is no lie. Your authority begins, the moment you start your project with us... <span style="font-style: italic;">This is why we're working, <strong>24/7.</strong></span></p>
						<p>Yes, you can give us your ideas, <strong>no matter where you are</strong> in the face of the earth! While you can call most companies only within office hours, you can call or chat with a designer <strong>... At any time!</strong></p>
						<p><strong>High-quality design, guaranteed</strong></p>
						<p>Our high quality designs that are among the best in the world normally come with a hefty price, but that isn't the case with us.</p>
						<p>We pride ourselves in having the lowest prices among the competition... And in the off-chance that you find a company cheaper than us, let us know by giving us proof, like the website itself <strong style="font-style: italic;">...And we'll beat their price.</strong></p>
					</div>
					
					<div class="col-sm-6">
						<h4 class="green-divider-title">Additional services for illustrative firms:</h4>
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