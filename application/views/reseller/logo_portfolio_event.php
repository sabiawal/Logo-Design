<?php $this->load->view('includes/reseller/header-common'); ?>
        <link href="<?php echo base_url() ?>assets/css/fotorama.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>assets/js/fotorama.js"></script>
        <section class="content">
			<div class="container">
				<div class="row">
					<div class="logo-in-portfolio col-xs-12">
						<section class="port-gray-border-round-box port-gray-border-round-box-alter clearfix">
							<h2>Event Logo Design</h2>
							<div class="fotorama" data-width="1000" data-ratio="1000/252" data-max-width="100%" data-autoplay="5000" data-transition="crossfade" data-loop="true" data-nav="thumbs" data-thumbwidth="250" data-thumbheight="67">
								<img  src="assets/images/logo-in-portfolio/Event1.jpg" alt="Event1"/>
								<img  src="assets/images/logo-in-portfolio/Event2.jpg" alt="Event1"/>
								<img  src="assets/images/logo-in-portfolio/Event3.jpg" alt="Event1"/>
							</div>
							<a href="<?php echo site_url('reseller/industry/logo_portfolio_financial_service'); ?>" class="green-btn-port">Next Industry</a>
						</section>
						<?php $this->load->view('includes/reseller/portfolio_category'); ?>
					</div>
				</div>
			</div>
			
			<section class="slogan normal-bottom-gray-border">
				<div class="container">
					<h1 class="text-center">
						Make people go nuts with their <span class="theme-red">memorable</span> occasion
						<br /> 
						by your events management services.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box">
				<div class="container">
					<h5 class="bf-med-title text-center"><span style="font-style: italic;">Gain the trust of</span> companies and groups that will celebrate occasions with the help of events organizing professionals.</h5>
					<div class="green-vertical-divider clearfix">
						<div class="col-sm-6">
							<p>With your <span style="text-decoration: underline;">unique branding</span> set up by your very own events logo, you get to enjoy the perks of earning more with clients who are willing to pay for your services.</p>
							<p>Flaunt your custom designed events logo which goes beyond a simple picture.</p>
							<p>It contains elements that directly reflect the kinds of gatherings and occasions that you can plan for your clients as well as the <strong>values and attitudes</strong> as an events organizing professional.</p>
							<p>Your events logo must be able to <strong style="font-style: italic;">imprint the ideal image of you.</strong> Events management logos normally take the form of abstract designs to express its flexibility in terms of event categories that the company or the professional can handle.</p>
							<p><strong>How to Make an Outstanding Events Logo</strong></p>
							<ul class="dot">
								<li>Color Combination</li>
								<li>Distinction</li>
								<li>Attractive Type Fonts</li>
							</ul>
							<p><strong style="text-decoration: underline;">Color combination</strong> plays a crucial role in logo design as it brings out the life of your events logo. A logo with black and white colors alone may be dull for your events services. It's advisable to have colorful design to show your flexibility.</p>
							<p>Next, <strong style="text-decoration: underline;">distinction</strong> makes your logo a unique brand mark to make you stand out from the crowd or better yet, be the only option as an event planner. </p>
							<p>The logo must be fresh and new while reflecting your ability to carry out excellent events management.</p>
							<p>Lastly, <strong style="text-decoration: underline;">attractive type fonts</strong> are important as they put some design to your company name placed on your logo together with a short tag line.</p>
						</div>
						
						<div class="col-sm-6">
							<h4 class="green-divider-title">Additional services for events managers:</h4>
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