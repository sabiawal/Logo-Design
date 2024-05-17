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
						Your primary means of communication should only be... 
						<br />
						No less than <span class="theme-red">excellent.</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you want a way to show the world that you're a good company, 
						<br />
						then investing in <span class="theme-red">visually appealing</span> stationeries is the key.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Your stationery is a big part of your company's identity. Yes, it is basically how you show your company's face to the people, <span class="theme-red">essentially the world...</span></p>
							<p>And we take that into consideration <span style="text-decoration: underline;">every single time.</span> Our Stationery full design package includes the designs of your business cards, letterheads, electronic letterheads, and envelopes.</p>
							<p style="font-style: italic;">All of these need to have designs that work together...</p>
							<p>And our <?php echo COUNTRY; ?> award-winning professional designers will work around the clock to make it work for you! We pay attention to <strong>every single, little intricate detail</strong> that you need for it to work.</p>
							<p>Your full stationery might as well be your company's identity, so investing on it would mean a lot on the long run.</p>
							<p>Order from us or give us a call <span style="text-decoration: underline;">today!</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/stationary-full1.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/stationary-full2.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/stationary-full3.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/stationary-full4.jpg" alt="notepad" /></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4"></div>
					</div>
				</div>
			</section>
			
			<section class="more-service normal-desc-box clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-orange">Basic</h2>
							<div style="min-height: 445px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> business card designs.</li>
									<li><strong>3</strong> letterhead designs.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different formats.</strong></li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Super</h2>
							<div style="min-height: 445px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> business card designs.</li>
									<li><strong>3</strong> letterhead designs.</li>
									<li><strong>3</strong> complimentary slip designs.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different formats.</strong></li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Pro</h2>
							<div style="min-height: 445px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> business card designs.</li>
									<li><strong>3</strong> letterhead designs.</li>
									<li><strong>3</strong> complimentary slip designs.</li>
									<li><strong>3</strong> envelope designs.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different formats.</strong></li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
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