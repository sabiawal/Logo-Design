<?php $this->load->view('includes/header-common'); ?>
<style>
  .carousel-inner {
        height: 60vh;
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
            <h5 class="text-center banner-text">Half-Price Sale Ends Midnight, Friday 10 February ’24</h5>
        </div>
    </section>

	<div id="mycarousel" class="carousel video_carousel_fade animate_text" data-ride="carousel" data-interval="8000">

				<!--======= Wrapper For Slides =======-->
				<div class="carousel-inner" role="listbox">

					<!--========= First Slide =========-->


			<div class="item active " data-interval="7000" data-pause="false">
				<img src="assets/images/newslider/simple.jpg">

				<div class="carousel-caption video_carousel_caption">
					<div class="video_carousel_caption_text">
						<div class="container" style="padding-right:0px;">
							<div class="row">
								<div class="col-md-7">
									<div class="banner-caption text-left white-bg-main">
										<div class="banner-caption-head">
											<h2>
												Simple 5 Step Process
											</h2>
										</div>
										<div class="banner-desc ">
											<ul>
												<li>It only takes 3 minutes to order</li>
												<li>We start designing your logos immediately</li>
												<li>We update you every step of the way</li>
											</ul>
										</div>
										<br>
										<a class="button pull-left" href="http://www.logodesignguarantee.co.uk/packages.php">See Our Packages</a>
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
		</div>
	</div>
</section>

<section class="content">
	<div id="banner-bottom-slogan">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="for-desktop">
						Our Devoted Support™ offers you
						<br />
						<?php /*?><a class="theme-green-style2" href="<?php echo base_url('guarantee'); ?>"> <?php echo GUARANTEE_DAYS; ?> Day, 100% Money Back Guarantee </a><?php */ ?>
						<a class="theme-green-style2" style="cursor:pointer;">phone contact to your designers</a>
					</h3>
					<h3 class="for-mobile">
						Our Devoted Support™ <br>offers you
						<a class="theme-green-style2" style="cursor:pointer;">phone contact <br> to your designers</a>
					</h3>
				</div>
				<div class="col-sm-6 for-desktop">
					<div class="trapzoid-box about-box">
						<h3 class="text-center">

							<?php /*?><a href="<?php echo base_url('guarantee'); ?>">Learn more about our Guarantee...</a><?php */ ?>
							<a href="<?php echo base_url('about'); ?>">Learn more about our company…</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="slogan">
		<div class="container">
			<h1 class="text-center">
				Simple Process. Brilliant Branding.
			</h1>
			<div class="text-center slogan-tagline">It only takes<span class="theme-green-style2-conly"> 3 minutes </span>to submit an order online with us. Your logo designers will start on your project the same day.</div>
		</div>
	</section>

	<section id="simple-process-body">
		<div class="container">
			<div class="row">
				<div id="process-order-details">
					<article>
						<div class="text-center pic">
							<img src="assets/images/process-logo1.png" alt="Select a Logo Package" />
						</div>
						<h4>Select a Logo Package</h4>
						<p>We offer only a few main logo packages to keep things simple for you.</p>
						<p>You can also opt for a package that combines business card designs and complete stationery designs.</p>
						<p>From our packages page, you will easily be able submit your order.</p>
					</article>
					<article>
						<div class="text-center pic">
							<img src="assets/images/process-logo2.png" alt="Select a Logo Package" />
						</div>
						<h4>Place Your Order</h4>
						<p>Order conveniently online within only 3 minutes. We provide a professional one page order form for you.</p>
						<p>Unlike other companies, who ask for verifications of identity, we keep it quick and simple.</p>
						<p>If you wish you can simply state a few details and allow our designers to use their creativity and initiative.</p>
					</article>
					<article>
						<div class="text-center pic">
							<img src="assets/images/process-logo3.png" alt="Select a Logo Package" />
						</div>
						<h4>Receive Your Samples</h4>
						<!-- <p>Within 3 business days you will have all your logos emailed to you. We also have an option for you to opt for the 24 hour process.</p> -->
						<p>Unlike offshore logo firms, all our logos are 100% custom-made, 100% unique and 100% different to one another.</p>
						<p>To speed things up, we send a free SMS text message to you so you know when your logos have arrived.</p>
					</article>
					<article>
						<div class="text-center pic">
							<img src="assets/images/process-logo4.png" alt="Select a Logo Package" />
						</div>
						<h4>Request Revisions</h4>
						<p>You can request free unlimited revisions. We work on your logos as soon as we get the revision requests.</p>
						<p>See our comparison table that displays how some logo firms limit the number of revisions.</p>
						<p>Further, they often offer far less number of original logo samples at a higher price.</p>
					</article>
					<article>
						<div class="text-center pic">
							<img src="assets/images/process-logo5.png" alt="Select a Logo Package" />
						</div>
						<h4>Receive your Final Logo</h4>
						<p>When you are 100% satisfied, we will send you the logo files free of cost. The files will allow you to use them for whatever purpose. </p>
						<p>The logo files, for example, will enable you to place it on your website, letterheads, business cards, company vehicles, t-shirts, mugs...the list goes on.</p>
						<p>Unlike others, our files allow you to resize your logo without distortion to quality.</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="slogan">
		<div class="container">
			<h1 class="text-center">
				What is different about our process?
			</h1>
		</div>
	</section>

	<section class="process-diff-body clearfix">
		<div class="container">
			<div class="row">
				<h4>Unlimited Concepts and Revisions</h4>
				<div class="green-vertical-divider clearfix">
					<div class="col-sm-6 stack">
						<p>Unlike many firms who limit the number of revisions, we provide unlimited revisions for you as part of our core customer service.</p>
						<p>There is another crucial factor for you to consider - we offer unlimited concepts, which means if your first set of designs does not satisfy you we will provide a totally fresh set. </p>
						<p>This is an additional service free of cost for you. Further, if at any time in the design process you would like fresh logo concepts (fresh ideas), then we also provide 3 fresh concepts to you free of cost.</p>
					</div>
					<div class="col-sm-6">
						<p>You can ask for this an unlimited time. Now this is totally unique to our competitors just offering "unlimited revisions" as they only revise a "previously" designed logo.</p>
						<p>If you wanted fresh logo concepts with a competitor you would have to pay for another order. You are also unlikely to get your money back on the first order too.</p>
						<p>This underlines a massive difference between us and other logo firms. You control the design process with total flexibility.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="process-diff-body-patt">
		<div class="container">
			<div class="row text-left-mobile paddingsm">
				<h3>Advanced Online Voting System</h3>
				<p>
				Wouldn't it be helpful for your colleagues
				and friends to view your designs and for
				them to vote for their favorite? They can
				provide helpful feedback to you also.
				<br>
				<br>
				This advertises your business and starts
				making connections.
				</p>
			</div>
		</div>
	</section>
	<section class="process-diff-body clearfix">
		<div class="container">
			<div class="row">
				<h4>Personal Design Account</h4>
				<div class="col-sm-6 stack">
					<p>Each of our customers receives a free personal account which enables them to check into their very own business design center.</p>
					<p>First, many of our competitors use email to send logo samples to their customers which means you cannot see the history and progress your project has taken and the communication in between.</p>
					<p>With us you can conveniently log in to your account and see all such information and request changes to your designs at any time.</p>
				</div>
				<div class="col-sm-6">
					<p>We also equip you there with a complete design service that any business could possibly demand.</p>
					<p>We can work as your personal "all in-one" design team so that you do not have to deal with different companies about different designs.</p>
					<p>All your business designs are stored within one place for you to access at any time. You can access all your files or order more design services to expand your brand.</p>
				</div>
			</div>
		</div>
	</section>
</section>
<?php $this->load->view('includes/footer-common'); ?>