<?php $this->load->view('includes/reseller_web/header-common'); ?>
        
		<section class="content clearfix">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3>We will <span class="theme-green-style"> beat </span> any competitor&rsquo;s price.
								<br>
								Guaranteed.
							</h3>
						</div>
						<div class="col-sm-6">
							<div class="trapzoid-box about-box">
								<h3 class="text-center"><a href="<?php echo base_url('web-site-design/webdesigner-limited-sale/guarantee') ?>">Learn more about our Guarantee...</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						Free Hosting and Best in Industry 99.9% Uptime 
						<br />
						Guarantee for your New Website!
					</h1>
				</div>
			</section>	
			
			<section id="hosting-green-divide">
				<div class="container">
					<div class="row">
						<div class="green-vertical-divider clearfix">
							<div class="col-sm-6">
								<p>Web hosting is a type of internet service that allows your business to have content on the internet. This means we provide space on the internet for you to store the files and content of your website.</p>
								<p>Our <strong> all-encompassing hosting solution </strong> includes everything you need to put your business or personal site online and to <strong> manage it for years to come.</strong></p>
								<p>Remember, no matter what web design package you choose, you will get <strong> free hosting for your website. </strong> There are <strong> no limits </strong> on the disk space or data transfer (bandwidth) that we provide to all customers.</p>
							</div>
							<div class="col-sm-6">
								<p>We will set up <strong> unlimited business email addresses </strong> for your company <strong> free </strong> of charge. Unlike other companies, we will <strong> never lock you into contracts </strong> so you can take your files and host your website elsewhere at anytime.</p>
								<p>No web design or hosting company offers hosting services for free. Hosting services typically range from <?php echo CURRENCY.HOSTING_PRICE_0THER_R1." - ".CURRENCY.HOSTING_PRICE_0THER_R2 ?> per month. Other companies will only offer you a limited number of email addresses and will charge you for any extra you need.</p>
								<p>Most hosting services have a minimum of a 12 month contract which you cannot get out of without paying expensive cancellation fees. We try and keep things simple by providing <strong> no contracts.</strong></p>
							</div>
						</div>
					</div>
				</div>
			</section>	
			
			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						Remember...We Hide Nothing!
					</h1>
					<div class="text-center slogan-tagline">Here are all the details of our hosting plan so you can judge for yourself.</div>
				</div>
			</section>	
			
			<section id="hosting-details">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<?php $this->load->view('includes/reseller_web/hosting-details.php'); ?>
						</div>
						<div class="col-sm-6">
							<?php $this->load->view('includes/reseller_web/website-guaranteed.php'); ?>
						</div>
					</div>
				</div>
			</section>
		</section>
<?php $this->load->view('includes/reseller_web/footer-common'); ?>