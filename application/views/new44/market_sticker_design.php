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
						Stick <span style="font-style: italic;">your brand</span> to your market's minds with <span class="theme-red">Sticker Design!</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Capture their attention with <span style="font-style: italic;">fancy but effective</span> way of <span style="text-decoration: underline;">promoting your business.</span>
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p><strong>Sticker</strong> is not just toys for children, but it's an advertising tool for businesses too. You can put your logo, tagline or any image and catchphrase that can get the <span style="font-style: italic;">curiosity of your market.</span></p>
							<p>Imagine... you can easily promote your brand by just peeling off the back of the sticker and post it on any allowed surfaces from office materials to glass windows and even on your car!</p>
							<p>It's <span style="text-decoration: underline;">little but effective commercial tool</span> as its glossy and colorful appearance can easily convey your messages to your potential clients. You'll be surprised with its effectiveness!</p>
							<p>You can use any shapes for your stickers as Logo Design Guarantee customizes them depending upon your specific needs. You can even choose the colors and texture for your stickers...</p>
							<p>...with Logo Design Guarantee, you're sure to get quality stickers for your needs. We deliver your orders on-time with the help of our in-house staffs.</p>
							<p>So what are you waiting for? <span style="text-decoration: underline;">Give us a call</span> and let's start working on your stickers.</p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/sticker-d1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/sticker-d2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/sticker-d3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/sticker-d4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange">Silver Sticker</h2>
							<div style="min-height: 423px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>2</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><strong>Any</strong> size according to your design needs.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Gold Sticker</h2>
							<div style="min-height: 423px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>4</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><strong>Any</strong> size according to your design needs.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Platinum Sticker</h2>
							<div style="min-height: 423px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>6</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><strong>Any</strong> size according to your design needs.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
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
			</section>-->
		</section>
<?php $this->load->view('includes/new44/footer-common'); ?>