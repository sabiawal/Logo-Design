<?php $this->load->view('includes/header-common'); ?>
        <section class="content">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 clearfix we-care">
							<h3>We Care About You</h3>
							<div class="we-care-about-you">
								<ul>
									<li>3 <?php echo COUNTRY; ?> designers (minimum)</li>
									<!--<li><?php //echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li>-->
                                    <li>Phone contact with your designers</li>
									<li>Free unlimited redraws &amp; revisions</li>
								</ul>
								<ul>
									<li>24 Hour revisions turnaround</li>
									<li>Hand-drawn logos</li>
									<li>Personal account manager</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4 clearfix">
							<div class="trapzoid-box guarantee-box">
								<h3 class="text-center"><a href="<?php echo site_url('packages'); ?>">See Our Packages</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="slogan">
				<div class="container">
					<h1>
						We are here to help.
					</h1>
					<div class="slogan-tagline">
						We offer 24/7 "sales and support" via phone, live chat and email.
						<br /><br />
						The live chat is available by clicking the text at the top-right "Live Chat".
						<br /><br />
						If our team are offline, then please leave a message below. 
						<br />
						All emails are replied to within 12-24 hours.
						<br /><br />
						<span class="theme-red">'*' represents mandatory fields</span>
						<br />
					</div>
				</div>
			</section>	
			
			<section id="form-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<form action="" method="post" id="contactForm">
								<ul class="form1">
									<li>
										<label>Title:</label>
										<input type="text" name="title"/>
									</li>
									<li>
										<label>First Name: <span class="required theme-red">*</span></label>
										<input type="text"  class="required" name="fname"/>
									</li>
									<li>
										<label>Last Name: <span class="required theme-red">*</span></label>
										<input type="text"  class="required" name="lname"/>
									</li>
									<li>
										<label>Company:</label>
										<input type="text" name="company_name"/>
									</li>
									<li>
										<label>Address:</label>
										<input type="text"  name="address"/>
									</li>
									<li>
										<label>State:</label>
										<input type="text" name="state"/>
									</li>
									<li>
										<label>City:</label>
										<input type="text" name="city"/>
									</li>
									<li>
										<label>ZIP/Postal Code:</label>
										<input type="text" name="zip"/>
									</li>
									<li>
										<label>Country:</label>
										<input type="text" name="country"/>
									</li>
									<li>
										<label>Email: <span class="required theme-red">*</span></label>
										<input type="text" class="required email" name="email_id"/>
									</li>
									<li>
										<label>Phone: <span class="required theme-red">*</span></label>
										<input type="text"  class="required"  name="phone_no"/>
									</li>
									<li>
										<label>Fax:</label>
										<input type="text" name="fax"/>
									</li>
									<li>
										<label>Your comment (required): <span class="required theme-red">*</span></label>
										<textarea  class="required" name="comments"></textarea>
									</li>
									<!--<li>
										<label>Security Code (required):</label>
										<input type="text"/>
									</li>
									<li>
										<label>Enter the text here: <span class="required theme-red">*</span></label>
										<input type="text"/>
									</li>-->
									<li>
										<button style="margin: 0 0 0 204px;" class="green-btn" type="submit" name="submit"><span data-hover="Send Feedback">Send Feedback</span></button>
                                        
									</li>
								</ul>
							</form>
						</div>

						<div class="col-sm-5">
							<h3>Email Contacts</h3>
							<ul class="email-contact">
								<li><span>General information: </span><a href="mailto:info@<?php echo strtolower(SITE_NAME);?>">info@<?php echo strtolower(SITE_NAME);?></a></li>
								<li><span>Order &amp; Billing:</span><a href="mailto:order@<?php echo strtolower(SITE_NAME);?>">order@<?php echo strtolower(SITE_NAME);?></a></li>
								<li><span>Article submission:</span><a href="mailto:articles@<?php echo strtolower(SITE_NAME);?>">articles@<?php echo strtolower(SITE_NAME);?></a></li>
								<li><span>Press Release:</span><a href="mailto:press@<?php echo strtolower(SITE_NAME);?>">press@<?php echo strtolower(SITE_NAME);?></a></li>
								<li><span>Employment opportunities:</span><a href="mailto:employment@<?php echo strtolower(SITE_NAME);?>">employment@<?php echo strtolower(SITE_NAME);?></a></li>
								<li><span>Partnership opportunities:</span><a href="mailto:partnership@<?php echo strtolower(SITE_NAME);?>">partnership@<?php echo strtolower(SITE_NAME);?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>		
		</section>
        <!-- Form Validation -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#contactForm').validate();
        </script>
        <!-- /Form Validation -->
<?php $this->load->view('includes/footer-common'); ?>