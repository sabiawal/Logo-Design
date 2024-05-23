<?php $this->load->view('includes/header-common'); ?>
<style>
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

<div class="information">
	<aside class="clearfix" id="right-section">
		<ul class="list-unstyled head-list">
			<li style="color:#222; font-size: 1.4rem;font-weight:600; margin-top: 25px;">UK Hand-Drawn Logos = Higher Quality <a class="test1" data-toggle="tooltip" data-placement="bottom" data-html="true" data-max-width="550px" title="" data-original-title="<span class='tt-head'>Logo Design Guarantee™</span><br/>
				<span class='tt-inner'>All our designers are based in the UK.<br/><br/>
				<ul class='ldg-tooltip'><li class='ldg-bp'>&#10004; All our designers hold graphic design degrees.</li>
				<li class='ldg-bp'>&#10004; We do <u>not</u> outsource any works.</li>
				<li class='ldg-bp'>&#10004; All our logos are hand-drawn, which greatly increases the sophistication of our logos.</li>
				<li class='ldg-bp'>&#10004; We have 16+ yrs experience.</li>
				<li class='ldg-bp'>&#10004; We have served 285,000+ clients.</li></ul><br/>
				<span class='tt-head'>Our competitors:</span><br/><ul class='ldg-tooltip'><li class='ldg-bp2'>&#10004; They often outsource to India, but use London PO 
				Box addresses.</li><li class='ldg-bp2'>&#10004; They use templates and clip-art software, which makes their logos look cheap.</li></ul>"><img src="assets/images/added/silver-info.jpg"> </a></li>
			<li style="color:#222; font-size: 1.4rem;font-weight:600;">365-Day, 100% Money Back Guarantee
				<a class="test" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="No questions, no interrogations, no fuss – just a whole lot of trust. We guarantee your money back if for any reason you are dissatisfied with our services."><img src="assets/images/added/silver-info.jpg"> </a>
			</li>
		</ul>
		<hr>
	</aside>
</div>

<section id="inner-cont-banner" style="position:relative;">
	<section>
		<div class="banner">
			<h5 class="text-center banner-text">Half-Price Sale Ends Midnight, Friday 10 February ’24 </h5>
		</div>
	</section>
	<div id="mycarousel" class="carousel video_carousel_fade animate_text video_carousel_wrapper" data-ride="carousel" data-interval="8000">
		<!--======= Wrapper For Slides =======-->
		<div class="carousel-inner" role="listbox">

			<!--========= First Slide =========-->


			<div class="item active " data-interval="7000" data-pause="false">
				<img src="assets/images/newslider/compare.jpg" alt="carousel video img" />

				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">

						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												How do we stack up?
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>We always go the extra mile for you</li>
												<li>No logo company offers you all our features at such a low price</li>
												<li>We can prove it!</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">See Our Packages</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/compare1.png" alt=""> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="item  " data-interval="7000" data-pause="false">
				<img src="assets/images/newslider/compare2.jpg" alt="carousel video img" />
				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												Fast, quality service!
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>Speak with your designers personally</li>
												<li>No revision limit, plus they’re free</li>
												<li>More logo samples for a lower cost</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">See Our Packages</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/compare2.png" alt=""> -->
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="item  " data-interval="7000" data-pause="false">
				<img src="assets/images/newslider/compare1.jpg" alt="carousel video img" />

				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												One-of-a-kind designs for the most affordable price!
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>Guaranteed original designs</li>
												<li>No clip-arts or image templates</li>
												<li>Expert, well-trained designers</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">See Our Packages</a>
									</div>
								</div>
								<div class="col-md-5" style="padding-left:0px;">
									<!-- <img style="margin-top: 40px;" id="#banner-img" src="assets/images/compare3.png" alt=""> -->
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

		</ol>
		<!--======= Navigation Buttons =========-->

		<!--======= Left Button =========-->
		<a class="left carousel-control video_carousel_control_right" href="#mycarousel" role="button" data-slide="next">
			<span class="fa fa-arrow-circle-left video_carousel_control_icons" aria-hidden="true">
			</span>
			<span class="sr-only">Previous</span>
		</a>

		<!--======= Right Button =========-->
		<a class="right carousel-control video_carousel_control_left" href="#mycarousel" role="button" data-slide="prev">
			<span class="fa fa-arrow-circle-right video_carousel_control_icons" aria-hidden="true">
			</span>
			<span class="sr-only">Next</span>
		</a>

	</div>
</section>
<section class="content">
	<div id="banner-bottom-slogan">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 paddingsm">
					<h3>We Care About You</h3>
					<div class="we-care-about-you">
						<ul>
							<li>3 <?php echo COUNTRY; ?> designers (minimum)</li>
							<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li><?php */ ?>
							<li>Phone contact to your designers</li>
							<li>Free unlimited redraws &amp; revisions</li>
						</ul>
						<ul>
							<!-- <li>24 Hour revisions turnaround</li> -->
							<li>100% Satisfaction Guaranteed</li>
							<li>Personal account manager</li>
						</ul>
					</div>

				</div>
				<div class="col-sm-4 for-desktop">
					<div class="trapzoid-box about-box">
						<h3 class="text-center"><a href="<?php echo site_url('packages'); ?>">See Our Packages</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="slogan">
		<div class="container">
			<h1 class="text-center">
				Put us to the test!
			</h1>
			<div class="text-center slogan-tagline-2">
				To see how we compare on all features, just read below. <!--If you want to see how we compare based on a 
						<br />
						specific feature, please choose it in our drop down options below.-->
			</div>
		</div>
	</section>

	<section class="slogan double-border">
		<div class="container">
			<h1 class="text-center">
				Pricing <i class="blue-down-arrow"></i>
			</h1>
		</div>
	</section>

	<section id="lowest-price-guarantee">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 leftcol">
					<h3>Lowest Price Guarantee</h3>
					<ul>
						<li>
							We will beat any competitor's price.
							<br/>
							Guaranteed.
						</li>
						<li>
							We keep our prices low because every business deserves an excellent logo, not just the big guys.
						</li>
						<li>
							See how we compare <img src="assets/images/green-arrow1.png" alt="compare" />
						</li>
					</ul>
				</div>
				<div class="col-sm-7 rightcol" style="padding:0px;">
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Company</th>
								<th>Lowest Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img src="assets/images/logo-small.png" alt="Logo Design Guarantee" /></td>
								<td>
									<?php if (SHOW_REGULAR_PRICE) : ?>
										<del><?php echo CURRENCY . START_LP_P_R ?></del>
									<?php endif; ?>
									<span style="color:red"><?php echo CURRENCY . START_LP_P ?></span>
								</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logotree.com</a></td>
								<td>$675</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Thelogoco.co.uk</a></td>
								<td>$299</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logodesignpros.co.uk</a></td>
								<td>$299</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logoworks.com</a></td>
								<td>$299</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logobee.com</a></td>
								<td>$249</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Businesslogo.net</a></td>
								<td>$199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logodesignguru.com</a></td>
								<td>$199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logogenesis.com</a></td>
								<td>$199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logodesignworks.com</a></td>
								<td>$197</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</section>

	<section id="lowest-price-guarantee-part">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 leftcol" style="padding-left:0px;">
					<table cellpadding="0" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="170px">Company</th>
								<th>Revision Rounds</th>
								<th>Number of Samples</th>
								<th>Price ($)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img class="img-responsive" src="assets/images/logo-small.png" alt="Logo Design Guarantee" /></td>
								<td>Unlimited</td>
								<td>6</td>
								<td>
									<?php if (SHOW_REGULAR_PRICE) : ?>
										<span> <del><?php echo CURRENCY . START_LP_P_R ?></del> </span>
									<?php endif; ?>
									<span class="red"> <?php echo CURRENCY . START_LP_P ?> </span>
								</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logotree.com</a></td>
								<td>2</td>
								<td>9</td>
								<td>675</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Thelogoco.co.uk</a></td>
								<td>Unlimited</td>
								<td>3</td>
								<td>299(&pound;149)</td>

							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logdesignpros.co.uk</a></td>
								<td>Unlimited</td>
								<td>4</td>
								<td>299(&pound;149)</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logoworks.com</a></td>
								<td>2</td>
								<td>4</td>
								<td>299</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logobee.com</a></td>
								<td>6</td>
								<td>6</td>
								<td>249</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Businesslogo.net</a></td>
								<td>Unlimited</td>
								<td>4</td>
								<td>199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logodesignguru.com</a></td>
								<td>3</td>
								<td>4</td>
								<td>199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logogenesis.com</a></td>
								<td>3</td>
								<td>3</td>
								<td>199</td>
							</tr>
							<tr>
								<td><a href="javascript:void(0);">Logodesignworks.com</a></td>
								<td>3</td>
								<td>3</td>
								<td>197(&pound;99)</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-sm-6 rightcol">
					<h3>The most samples for the lowest price</h3>
					<ul>
						<li>Keeping pricing in mind, it is clear that we give you more bang for your buck.</li>
						<li>All of our 6 unique logo samples come with unlimited revisions.</li>
						<li>All our competitors will offer you less in return for more of your hard earned money.</li>
						<li>Our revisions are always free and unlimited. Many of our competitors will limit the number of revisions and charge for each revision.</li>
						<li>Our revision turnaround is only 24 hours!</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="hand-drawn">
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<h3 class="title30">100% Tailored for your needs!</h3>
					<ul class="dot-bullet">
						<li>Each one of our logos are 100% unique and custom made</li>
						<li>Others will use clip art and templates.</li>
						<li>Every minute detail of your logo is crafted by expert designers.</li>
					</ul>
				</div>
				<div class="col-sm-5">
					<img class="img-responsive small-img1" src="assets/images/hand-drawn-logo.png" alt="100% Hand Drawn and Custom" />
				</div>
			</div>
		</div>
	</section>

	<section id="house-expert-designers" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<img class="img-responsive small-img2" src="assets/images/house-expert-designers.png" alt="house expert designers" />
				</div>
				<div class="col-sm-7">
					<h3 class="title30">&lsquo;&lsquo;Minimum&rsquo;&rsquo; 3 In-House Expert Designers</h3>
					<ul class="dot-bullet">
						<li>More expert designers = more expert ideas and lightning speed turnaround.</li>
						<li>Other companies will only have one designer work on your project.</li>
						<li>Our designers are degreed from accredited design institutions.</li>
						<li>All designers have over 10 years of experience in logo design.</li>
						<li>Other companies outsource design work.</li>
					</ul>

					<h5>Beware of Crowdsourcing and Logo Competition Websites</h5>
					<ul class="dot-bullet">
						<li>Some companies tempt people to believe that having multiple designers from all over the world will create the best logo for them.</li>
						<li>Nothing could be farther from the truth. Most of these logos end up violating copyright and being entirely unusable.</li>
						<li>The experience and qualifications of these freelance designers are low.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="slogan">
				<div class="container">
					<h1 class="text-center">Our international awards show that we settle for only the best</h1>
				</div>
			</section>
			<section id="brand-logo1">
				<div class="container">
					<ul>
						<li><img alt="" src="assets/images/brand-logo1.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo2.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo3.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo4.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo5.jpg" class="img-responsive"></li>
					</ul>
				</div>
			</section> -->


</section>
<?php $this->load->view('includes/footer-common'); ?>