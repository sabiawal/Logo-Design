<?php $this->load->view('includes/reseller/header-common'); ?>
		<section id="order-process" class="content">
			<section class="slogan">
				<div class="container">
					<h1 class="text-center theme-green">
						Congratulations: You have successfully
						<br />
						signed up for our reseller service!
					</h1>
					<div class="text-center slogan-tagline-2">
						You now have access to your reseller account. You now will be able to order all our branding
						<br />
						design services with a <strong style="color: #000000;"> 10% discount.</strong>
					</div>
				</div>
			</section>
			
			<section id="order-ok-body" class="normal-desc-box">
				<div class="container">
					<div class="row">
						<h5 style="padding: 0 15px;" class="bf-med-title text-center">
							<span style="text-decoration: underline; font-style: italic;">Getting started</span>
							<br />
							We have emailed you your account details.
							<br />
							Click the button below to access your reseller account directly now! 
						</h5>
						
						<div class="green-vertical-divider clearfix">
							<div class="col-sm-6">
								<h4 class="green-divider-title">How do I place an order now?</h4>
								<ul class="tick">
									<li>Once inside your own reseller account, then you will have access to all our services.</li>
									<li>You will be able to place an order online (with the 10% discount being applied).</li>
									<li>We have provided more instructions in your email to help you get started.</li>
								</ul>
							</div>
							
							<div class="col-sm-6">
								<h4 class="green-divider-title">Can I place a reseller order over the phone?</h4>
								<ul class="tick">
									<li>Yes, certainly. You can quote your reseller username (found in your email) or email address, and this will entitle you to 10% discount on all our services.</li>
								</ul>
								<br />
								<h4 class="green-divider-title">Do you need more help?</h4>
								<ul class="tick">
									<li>Utilise our dedicated reseller hotlines available 24/7.</li>
									<li>We have live chat also available.</li>
								</ul>
							</div>
						</div>
						
						<div class="normal-desc-box text-center">
							<a href="<?php echo site_url('reseller/login') ?>" class="green-btn order-back-btn">
								<span data-hover="Access my reseller account now!">Access my reseller account now!</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			
		</section>
		
<?php $this->load->view('includes/reseller/footer-common'); ?>