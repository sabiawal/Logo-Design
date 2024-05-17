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
					<h1 class="text-center">
						Case study
					</h1>
				</div>
			</section>
			
			<section id="bf-common-body" class="normal-desc-box normal-top-gray-border">
				<div class="container">
					<div class="row">
						<section class="green-vertical-divider clearfix">
							<div class="col-sm-6">
								<div class="simple-fade-slider">
									<img src="assets/images/other-slides/sample-project-img4.jpg" alt="case study" />
                                    <img src="assets/images/other-slides/sample-project-img3.jpg" alt="case study" />
                                    <img src="assets/images/other-slides/sample-project-img2.jpg" alt="case study" />
                                    <img src="assets/images/other-slides/sample-project-img1.jpg" alt="case study" />
								</div>
								<p>I would like to say thank you for my company logo you made for me. I was very impressed from the different designs you made and the price for it all! You made it very easy to pick from all the awesome designs you made.</p>
								<p>I've used the logo on my trucks and business cards and I still get complements! I have no hesitation to give them your website info. Again thanks for the logo and keep up the good work,</p>
								<p>
									Isaac Gonzalez
									<br />
									CEO
									<br />
									Trini Home Inspection, LLC
									<br />
									Mechanicsville, VA
									<br />
									Web/ <a href="http://www.trinihomeinspection.com" target="_blank">www.trinihomeinspection.com</a>
								</p>
							</div>
							
							
							
							<div class="col-sm-6">
								<p><strong>Below are all the samples we sent Mr Issac Gonzalez for him to choose from. Note, he requested for the color to be black and white only.</strong></p>
								<img class="img-responsive" src="assets/images/trini-house.jpg" alt="trini house" />
							</div>
						</section>
					</div>
				</div>
			</section>			
			<?php $this->load->view('includes/offer-banner'); ?>
			
		</section>
        <script>
        $(document).ready(function(){
			//for T.H.I slide
			var reqHeight = $(".simple-fade-slider").find("img").height();            
			$(".simple-fade-slider").height(reqHeight);
			var source = $(".simple-fade-slider").html();
			function fadeAction(){
				var elmChk = $(".simple-fade-slider").children().length;
				$(".simple-fade-slider").find("img:last-child").fadeOut(1500, function(){
					$(this).remove();
				});
				if(elmChk < 2){
					$(".simple-fade-slider").prepend(source);
				}
			}
			setInterval("fadeAction()", 4500);
        });
		</script>
<?php $this->load->view('includes/footer-common'); ?>