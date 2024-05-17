<?php $this->load->view('includes/new44/header-common'); ?>		
<?php 
$res = $package_detail->result(); 
//var_dump($res);      

$_SESSION['category_id']= $res[0]->category_id;
$_SESSION['categories']= $res[0]->categories;
$_SESSION['new_package_id']= $res[0]->package_id;
$_SESSION['new_package_name']= $res[0]->package_name;

if(isset($_SESSION['sub_package_id'])){

	unset($_SESSION['price'],$_SESSION['price_reg'],$_SESSION['sub_package_id'],$_SESSION['package_type'],$_SESSION['package_description2']);
}


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
						The <span class="theme-red">secret</span> to increasing your website's <span style="font-style: italic;">click-through's</span>  
						<br />
can be found right here!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Having a web banner embedded in another website with heavy traffic is, indeed a good <span style="font-style: italic;">investment...</span> 
						<br />
						Make the most out of this investment by making your custom-made web banner 
						<br />
						look <span class="theme-red">outstandingly appealing!</span>
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>With the many different websites online, you'd want to post your web banner advertisement on a website that surely has a lot of traffic, so you can make the most out of your investment...</p>
							<p style="font-style: italic;">...But that's not enough.</p>
							<p>In order to make your web banner truly successful, you must also invest in making the design truly <strong>visually appealing!</strong></p>
							<p>This is no simple task for a person working alone, but if you employ us, we'll have 3 designers to work on your project, and finish it as soon as possible! If there's something you dislike, you can also request to revise the designs, anytime!</p>
							<p>If we really cannot satisfy you, <span style="font-style: italic;">we guarantee your money back</span>, <span class="theme-red"><?php echo GUARANTEE_DAYS; ?> days</span> after you make your purchase!</p>
							<p>Our  designers (minimum) are ready to answer your call, 24/7, so go ahead and call us, <span style="text-decoration: underline;">right away!</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><a href="http://www.seawiseconstruction.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-banner1.jpg" alt="animated banner" /></a></li>
									<li class="col-sm-3"><a href="http://www.lovecoffeemix.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-banner2.jpg" alt="animated banner" /></a></li>
									<li class="col-sm-3"><a href="http://www.onetwoeducation.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-banner3.jpg" alt="animated banner" /></a></li>
									<li class="col-sm-3"><a href="http://www.drewsrealestate.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-banner4.jpg" alt="animated banner" /></a></li>
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
							<h2 class="color-box-title-orange">Micro Bar</h2>
							<div style="min-height: 580px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> concepts to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Half Animated</h2>
							<div style="min-height: 580px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li>
										<strong>Sizes can be:</strong>
										<br />
										- Half Banner (234 x 60 pixel)
										<br />
										- Rectangle (180 x 150 pixel)
										<br />
										- Square Button (125 x 125 
										  pixel)
									</li>
									<li><strong>3</strong> concepts to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Full Animated</h2>
							<div style="min-height: 580px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li>
										<strong>Sizes can be:</strong>
										<br />
										- Leaderboard (728 x 90 pixel)
										<br />
										- Full Banner (468 x 60 pixel) 
										  or Skyscraper (120 x 600 
										  pixel)
										  <br />
										- Wide Skyscraper (160 x 600 
										  pixel)
										  <br />
										- Large Rectangle (336 x 280 
										  pixel)
										  <br />
										- Medium Rectangle 
										  (300 x 250 pixel)
									</li>
									<li><strong>3</strong> concepts to choose from.</li>
									<li><strong></strong>Unlimited revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee..</li>
									<li>Landing page with forms or shopping cart.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[2]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
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
			
			<!--<section id="more-serve-blue-note">
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
		</section>-->
<?php $this->load->view('includes/new44/footer-common'); ?>