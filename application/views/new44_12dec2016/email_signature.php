<?php $this->load->view('includes/new44/header-common'); ?>
<?php 
$res = $package_detail->result(); 
//var_dump($res);      
$num_row =  $package_detail->num_rows();
for($i=0; $i<$num_row; $i++){            
    if(COUNTRY == 'USA'):
        $price[]    = $res[$i]->usd;
        $price_reg[]= $res[$i]->usd_reg;
    endif;            
    if(COUNTRY == 'UK'):
        $price[]    = $res[$i]->gbp;
        $price_reg[]= $res[$i]->gbp_reg;
    endif;  
}
?>
		<section class="content">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 clearfix we-care">
							<h3>We Care About You</h3>
							<div class="we-care-about-you">
								<ul>
									<li>3 <?php echo COUNTRY; ?> designers (minimum)</li>
									<li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li>
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
								<h3 class="text-center"><a href="<?php echo base_url('packages'); ?>"> See Our Packages</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						"Are you annoyed of typing a closing repetitively?..."
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Then you should grab an Email Signature NOW!
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Email Signature is a text that is automatically attached at the bottom of your email..</p>
							<p style="font-style: italic;">...these contains details of the sender, pertinent job titles or company names.</p>
							<p>It is also use to put some closing statements in every email.</p>
							<p>But using a signature with a wrong content may lead your email <span class="theme-red"> ...to junk or spambox.</span></p>
							<p>That's why you need some <strong> experts </strong> to help you customize one!</p>
							<p>With our <span style="text-decoration: underline;"><?php echo COUNTRY; ?> Award Winning Designers</span>, yours will surely hit the inbox of your email receiver.</p>
							<p>We will surely <strong> create a productive layout </strong> for your signature that affects the tone of every email you write, improve branding and engagement of your customers.</p>
							<p>Get it designed by us, <strong style="text-decoration: underline;"> now!</strong></p>
						</div>
						<div class="col-sm-4"></div>
					</div>
				</div>
			</section>
			
			<section class="more-service normal-desc-box clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-orange">Standard</h2>
							<div class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>2 </strong>designs to choose from</li>
									<li><strong>Unlimited </strong>revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>Full ownership </strong> of the final file.</li>
									<li>Easily <strong> downloadable </strong> file.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Premium</h2>
							<div class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price blue"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3 </strong>designs to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>Full ownership </strong> of the final file.</li>
									<li>Easily <strong> downloadable </strong> file.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Ultimate</h2>
							<div class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price green"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>4 </strong>designs to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>Full ownership </strong> of the final file.</li>
									<li>Easily <strong> downloadable </strong> file.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 devoted-support">
							<div class="pic">
								<img class="img-responsive" src="assets/images/devoted-support-pic.png" alt="devoted support" />
							</div>
							<div class="gurantee-box">
								<a href="#"><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</a>
								<span>The best in the industry, by far.</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="more-serve-blue-note">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<h3>
								Wish to order a service on this exact page?...
								<br />
								Please call our team now!
							</h3>
							<p>P.S. Our checkout pages for this service are currently being re-developed.</p>
						</div>
					</div>
				</div>
			</section>
		</section>
<?php $this->load->view('includes/new44/footer-common'); ?>