<?php $this->load->view('includes/header-common'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
	#inner-cont-banner img {
		width: 100%;
		height: 600px;
		object-fit: cover !important;
	}
</style>

<style>
	/* General styles for the banner */
	.banner {
		background-color: #FEDC45;
		padding: 10px;
		text-align: center;
	}

	.banner-text {
		color: black;
		font-weight: 600;
		font-size: 1.6rem;
	}

	/* Styles for mobile view */
	@media (max-width: 700px) {
		.banner {
			padding: 3px;
		}

		.banner-text {
			font-size: 1.36rem;
		}
	}

	/* Styles for desktop view */
	@media (min-width: 600px) {
		.banner {
			padding: 3px;
		}

		.banner-text {
			font-size: 1.6rem;
		}
	}
</style>

<style>
	/* General styles */
	.information {
		margin: 0 auto;
		padding: 10px;
	}

	.head-list {
		padding-left: 0;
	}

	.info-item {
		color: #222;
		font-size: 1.4rem;
		font-weight: 600;
		margin-top: 25px;
	}

	.info-item a img {
		margin-left: 5px;
	}

	/* Remove margin-top for second info-item */
	.info-item + .info-item {
		margin-top: 0;
	}

	/* Tooltip custom styles */
	.tooltip {
		left: 35px !important; /* Adjusts the tooltip slightly to the left */
	}

	/* Styles for mobile view */
	@media (max-width: 767px) {
		.info-item {
			font-size: 1.2rem;
			margin-top: 20px;
		}

		.info-item + .info-item {
			margin-top: 0;
		}

		.info-item a img {
			width: 16px;
			height: 16px;
		}
	}

	/* Styles for desktop view */
	@media (min-width: 768px) {
		.info-item {
			font-size: 1.4rem;
			margin-top: 25px;
		}

		.info-item + .info-item {
			margin-top: 0;
		}

		.info-item a img {
			width: 20px;
			height: 20px;
		}
	}
</style>

<style>
	/* Default styles for desktop */
	.center-text {
		text-align: left; /* Default text alignment */
		display: block; /* Ensure display is block on desktop */
		justify-content: flex-start; /* Align items to the start by default */
		align-items: flex-start; /* Align items to the start by default */
	}

	/* Media query for mobile devices */
	@media (max-width: 767px) {
		.center-text {
			display: flex; /* Use flexbox for centering */
			justify-content: center; /* Center horizontally */
			align-items: center; /* Center vertically */
			text-align: center; /* Center the text itself */
		}
	}
</style>

<style>
	/* Hide the mobile version by default */
	.mobile-only {
		display: none;
	}

	/* Show the desktop version by default */
	.desktop-only {
		display: block;
	}

	/* Media query for mobile devices */
	@media (max-width: 767px) {
		/* Hide the desktop version on mobile */
		.desktop-only {
			display: none;
		}

		/* Show the mobile version on mobile */
		.mobile-only {
			display: block;
		}
	}
</style>

<section>
	<div class="container" style="padding:0px;">
		<div class="information">
			<div class="col-sm-12 clearfix">
				<ul class="list-unstyled head-list">
					<li class="info-item">UK Hand-Drawn Logos = Higher Quality 
						<a class="test1" data-toggle="tooltip" data-placement="bottom" data-html="true" data-max-width="550px" title="" data-original-title="<span class='tt-head'>Logo Design Guarantee™</span><br/>
						<span class='tt-inner'>All our designers are based in the UK.<br/><br/>
						<ul class='ldg-tooltip'><li class='ldg-bp'>&#10004; All our designers hold graphic design degrees.</li>
						<li class='ldg-bp'>&#10004; We do <u>not</u> outsource any works.</li>
						<li class='ldg-bp'>&#10004; All our logos are hand-drawn, which greatly increases the sophistication of our logos.</li>
						<li class='ldg-bp'>&#10004; We have 16+ yrs experience.</li>
						<li class='ldg-bp'>&#10004; We have served 285,000+ clients.</li></ul><br/>
						<span class='tt-head'>Our competitors:</span><br/><ul class='ldg-tooltip'><li class='ldg-bp2'>&#10004; They often outsource to India, but use London PO 
						Box addresses.</li><li class='ldg-bp2'>&#10004; They use templates and clip-art software, which makes their logos look cheap.</li></ul>"><img src="assets/images/added/silver-info.jpg"> </a>
					</li>
					<li class="info-item">365-Day, 100% Money Back Guarantee
						<a class="test" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" 
						data-max-width="550px" data-original-title="No questions, no interrogations, no fuss – just a whole lot of trust. We guarantee your money back if for any reason you are dissatisfied with our services."><img src="assets/images/added/silver-info.jpg"> </a>
					</li>
				</ul>
				<hr>
			</div>
		</div>
	</div>
</section>

<section id="inner-cont-banner" style="position:relative;">
	<section>
		<div class="banner">
			<h5 class="text-center banner-text">Half-Price Sale Ends Midnight, Friday 10 February ’24 </h5>
		</div>
	</section>
	<div id="mycarousel" class="carousel slide video_carousel_fade animate_text" data-ride="carousel" data-interval="8000">

		<!--======= Wrapper For Slides =======-->
		<div class="carousel-inner" role="listbox">

			<!--========= First Slide =========-->

			<div class="item active" data-interval="8000" data-pause="false">
				<img src="assets/images/newslider/office.jpg">
				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												Over<span> 10 Years</span> of Experience 
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>We have served 285,000+ clients</li>
												<li>Our recruitment is highly selective</li>
												<li>Each one of our designers have over 10 years of experience</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide1.jpeg" alt=""> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item" data-interval="8000" data-pause="false">
				<img src="assets/images/newslider/office2.jpg">
				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												<span>In-House</span> UK Design	Team
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li> We do not outsource</li>
												<li>All of our designers hold graphic design degrees from leading UK institutions</li>
												<li>Multiple expert designers work on your logo</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide2.jpg" alt=""> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item" data-interval="8000" data-pause="false">
				<img src="assets/images/newslider/office1.jpg">
				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption white-bg-main text-left">
										<div class="banner-caption-head">
											<h2>
												24x7x365<span> Devoted Support™</span></h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>Personal UK support 24x7x365 by phone and live chat (competitors are 9am - 5pm)</li>
												<li>Speak to your actual UK designers by phone or live chat for support (industry beating)</li>
												<li>Dedicated project manager</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item" data-interval="8000" data-pause="false">
				<img src="assets/images/newslider/office3.jpg">
				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption white-bg-main text-left">
										<div class="banner-caption-head">
											<h2>
												<span>Extensive Quality</span> Assurance checks
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>Customizes every design for your specific needs</li>
												<li>Show-off your brand wherever you go</li>
												<li>Boost your customers' brand awareness</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">Get Started</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/slide3.jpeg" alt=""> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
			<li data-target="#mycarousel" data-slide-to="3"></li>
		</ol>
		<!--======= Navigation Buttons =========-->

		<a class="left carousel-control video_carousel_control_left" href="#mycarousel" role="button" data-slide="prev">
			<span class="fas fa-arrow-circle-left video_carousel_control_icons" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control video_carousel_control_right" href="#mycarousel" role="button" data-slide="next">
			<span class="fas fa-arrow-circle-right video_carousel_control_icons" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

<section class="content clearfix">
	<div id="banner-bottom-slogan">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 alpha center-text" style="padding:15px;">
					<h3 style="margin-top:20px;">We will <a href="<?php echo base_url(); ?>compare" class="theme-green-style"> beat </a> any competitor's price.<br />
						Guaranteed.</h3>
				</div>

				<div class="col-sm-6">
					<!-- Desktop Version -->
					<div class="trapzoid-box about-box desktop-only">
						<h3 class="text-center-desktop">
							<a href="<?php echo site_url('portfolio'); ?>">See Our Portfolio</a>
						</h3>
					</div>

					<!-- Mobile Version -->
					<div class="simple-box clearfix mobile-only">
						<a class="orange-btn" href="<?php echo site_url('portfolio'); ?>">
							<span class="recent-work" data-hover="See Our Portfolio">See Our Portfolio</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<section class="slogan">
		<div class="container">
			<h1 class="text-center-desktop">Hello, there. Let us introduce ourselves in style...</h1>
		</div>
	</section>

	<section id="self-intro" class="lineH26">
		<div class="container">
			<div class="row">
				<div class="clearfix">
					<div class="col-sm-6">
						<p>At Logo Design Guarantee we believe logo designs can be given at great prices with quality to match. Further, all our logos are created in-house, which is essential in ensuring modern design standards are met. 
							Few competitors offer 24x7x365 phone support or unlimited redraws. We have invested in superior customer support services to improve the design process for you.</p>
						<p>Our team of designers believe we can offer the best priced logos on the web. If you think you can find something cheaper, then send us the quote and we will try to beat it.</p>
						<p>We have a team of 35 in-house designers which allows quality reassurance checks on each logo design as ideas can be shared among various talented designers.</p>
					</div>
					<div class="col-sm-6 gray-border1">
						<img class="img-responsive" src="assets/images/newslider/introduce.jpg" alt="introduce ourselves" />
					</div>
				</div>
				<div class="clearfix text-center-desktop col-sm-offset-2 col-xs-8">
					<p>The experience and expertise of our team allow us to offer such low prices without compromising on quality.</p>
					<p>Our business model is built on the principle of low price and low margins, but more happy customers to work with for the future. We offer great service for any form of customers, be it individuals, sole traders, small companies or large corporations. If you would like to know more, then please feel free to contact us.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="our-mission">
		<section class="slogan">
			<div class="container">
				<h1 class="text-center-desktop">Our Mission</h1>
			</div>
		</section>
		<section id="our-mission-body">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 gray-border1">
						<img class="img-responsive" src="assets/images/newslider/missionour.jpg" alt="our mission" />
					</div>
					<div class="col-sm-5 col-sm-offset-1 lineH26">
						<p>We endeavor to offer quality custom made logos at the most affordable price in the world. We have satisfied 285,000+ customers since becoming established in 2008. Currently, only approximately 1 in 50 customers ask for their money back.</p>
						<p>We intend to be the number one destination when anyone needs a quality logo. In addition, we provide the opportunity for you to speak to your actual designers before and during the design process.</p>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section id="we-stand-for" class="clearfix">
		<section class="slogan">
			<div class="container">
				<h1 class="text-center-desktop">What We Stand For...</h1>
			</div>
		</section>
		<div class="text-center-desktop col-sm-offset-2 col-xs-8 lineH26">
			<p>No-one should pay <?php echo CURRENCY . LOGO_PLUS; ?> plus for their set of logos. Our business model is built on the principle of lower price and more satisfied customers. Large staffing allows ample time to be spent on each logo order, so as to ensure full customer satisfaction.</p>
			<!--<p>Moreover, if we do not offer quality work specific to a customer's needs, then he or she may ask for their money back. Thus we pursue every effort to avoid this and guarantee quality logos.</p>-->
		</div>
	</section>

	<section class="slogan">
		<div class="container">
			<h1 class="text-center-desktop">Get In Touch With Us. We'd Love to Hear from You!</h1>
		</div>
	</section>

	<section id="members-coll" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="members-pic-coll">
						<img class="img-responsive" src="assets/images/member-pic.jpg" alt="get in touch with us" />
					</div>
				</div>
				<div class="members-detail-list">
					<div class="col-md-3">
						<ul>
							<li>
								<a href="mailto:jacob@<?php echo strtolower(SITE_NAME) ?>" target="_blank">jacob@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Jacob Smith</h5>
								<dfn>Director of Business Development</dfn>
							</li>
							<li>
								<a href="mailto:emma@<?php echo strtolower(SITE_NAME) ?>">emma@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Emma Moore</h5>
								<dfn>Creative Department Manager</dfn>
							</li>
							<li>
								<a href="mailto:daniel@<?php echo strtolower(SITE_NAME) ?>">daniel@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Daniel Jones</h5>
								<dfn>Account Manager/Designer</dfn>
							</li>
							<li>
								<a href="mailto:will@<?php echo strtolower(SITE_NAME) ?>">will@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Will Johnson</h5>
								<dfn>Account Manager/ Designer</dfn>
							</li>
							<li>
								<a href="mailto:ethan@<?php echo strtolower(SITE_NAME) ?>">ethan@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Ethan Brown</h5>
								<dfn>Customer Service/ Designer</dfn>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul>
							<li>
								<a href="mailto:joshua@<?php echo strtolower(SITE_NAME) ?>">joshua@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Joshua Davis</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:brad@<?php echo strtolower(SITE_NAME) ?>">brad@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Brad Miller</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:christina@<?php echo strtolower(SITE_NAME) ?>">christina@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Christina Wilson</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:anthony@<?php echo strtolower(SITE_NAME) ?>">anthony@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Anthony Taylor</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:william@<?php echo strtolower(SITE_NAME) ?>">william@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>William Martin</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul>
							<li>
								<a href="mailto:george@<?php echo strtolower(SITE_NAME) ?>">george@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>George Thomas</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:sophia@<?php echo strtolower(SITE_NAME) ?>">sophia@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Sophia Harris</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:matthew@<?php echo strtolower(SITE_NAME) ?>">matthew@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Matthew Clark</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:micheal@<?php echo strtolower(SITE_NAME) ?>">micheal@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Michael Lee</h5>
								<dfn>Designer /Graphic Artist</dfn>
							</li>
							<li>
								<a href="mailto:olivia@<?php echo strtolower(SITE_NAME) ?>">olivia@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Olivia Jolie</h5>
								<dfn>Designer</dfn>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul>
							<li>
								<a href="mailto:kevin@<?php echo strtolower(SITE_NAME) ?>">kevin@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Kevin Robinson</h5>
								<dfn>Designer</dfn>
							</li>
							<li>
								<a href="mailto:hillary@<?php echo strtolower(SITE_NAME) ?>">hillary@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Hillary Jones</h5>
								<dfn>Designer</dfn>
							</li>
							<li>
								<a href="mailto:david@<?php echo strtolower(SITE_NAME) ?>">david@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>David Walker</h5>
								<dfn>Designer</dfn>
							</li>
							<li>
								<a href="mailto:elizabeth@<?php echo strtolower(SITE_NAME) ?>">elizabeth@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Elizabeth Collins</h5>
								<dfn>Designer</dfn>
							</li>
							<li>
								<a href="mailto:emily@<?php echo strtolower(SITE_NAME) ?>">emily@<?php echo strtolower(SITE_NAME) ?></a>
								<h5>Emily Watson</h5>
								<dfn>Designer</dfn>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="slogan">
				<div class="container">
					<h1 class="text-center-desktop">Our international awards show that we settle for only the best</h1>
				</div>
			</section>
			
			<section id="brand-logo1">
				<div class="container">
					<ul>
						<li><img class="img-responsive" src="assets/images/brand-logo1.jpg" alt="" /></li>
						<li><img class="img-responsive" src="assets/images/brand-logo2.jpg" alt="" /></li>
						<li><img class="img-responsive" src="assets/images/brand-logo3.jpg" alt="" /></li>
						<li><img class="img-responsive" src="assets/images/brand-logo4.jpg" alt="" /></li>
						<li><img class="img-responsive" src="assets/images/brand-logo5.jpg" alt="" /></li>
					</ul>
				</div>
			</section> -->

<style type="text/css">
	@media (max-width:415px) {
		.res-desc p:nth-child(2) {
			display: none !important;

		}

		.res-desc p:nth-child(4) {
			display: none !important;

		}
		.res-desc p:nth-child(5) {
			display: none !important;

		}
		.res-desc p:nth-child(6) {
			display: none !important;

		}
	}
</style>

<?php $this->load->view('includes/footer-common'); ?>