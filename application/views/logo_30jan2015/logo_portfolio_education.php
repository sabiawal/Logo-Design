<?php $this->load->view('includes/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Education Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Education1.jpg" alt="education"/>
								<img  src="assets/images/logo-in-portfolio/Education2.jpg" alt="education"/>
								<img  src="assets/images/logo-in-portfolio/Education3.jpg" alt="education"/>
							</div>
							<a href="<?php echo site_url('industry/logo_portfolio_entertainment'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
		      <section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Express your <span class="theme-red">vision</span> with a professionally designed
						<br />
						logo for your school!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center">If you want people to recognize your school as an institution that offers high quality education, <span style="font-style: italic;">let your logo be brilliant. Let it be designed by us.</span></h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>Educational institutions should always be <strong>unique.</strong> One of the most important things that you should consider looking at is the design of your school logo... </p>
							<p>Education logos are not just about designing for school uniforms or sweatshirts...It should also represent the image and specialization of the institution it represents.</p>
							<p>With our <strong>experienced <?php echo COUNTRY;?>-award winning designers</strong> who have done education logos for universities and colleges around the US and UK, we will see to it that your finished logo will definitely be superb.</p>
							<p>Our designers can work in effort to show <strong>virtue, dignity and honor</strong> in the logo designs by using the proper color, font and graphics...</p>
							<p>Using bright colors and animated characters in preschool education to convey the nature of its playfulness and friendliness is a great example of the designs we can do.</p>
							<p>All these logos bring a <strong style="text-decoration: underline;">nostalgic feeling</strong> to former students, make every current student <span style="text-decoration: underline;">proud</span> of your institution and <span style="text-decoration: underline;">impress</span> prospective students!</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for schools:</h4>
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