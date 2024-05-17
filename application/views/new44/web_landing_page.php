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
						Make the <span class="theme-red">first</span> thing they see the <span class="theme-red">last</span> site 
						<br />
						they'll ever visit for their needs!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						A landing page is the first one your visitors will see when they click on a link to your company. 
						<br />
						And <span class="theme-red">first impressions last.</span>
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Landing pages usually push the readers to do a desired task. It can be getting people to sign up, selling a specific product, or getting people to download and install a program.</p>
							<p>An effective landing page <strong class="theme-red">greatly increases</strong> the percentage of site visitors that complete the action that you ask them to take...</p>
							<p style="font-style: italic;">We can give you designs that would surely land <span style="text-decoration: underline;">huge sales!</span></p>
							<p>Our <?php echo COUNTRY; ?> award-winning designers will work round-the-clock, just to finish the project that you hired us to do. We offer a <span class="theme-red">24/7</span> live customer service to address your concerns, <strong>anytime.</strong></p>
							<p>Check our packages and place an order, <span style="text-decoration: underline;">now!</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/web-landing-page1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/web-landing-page2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/web-landing-page3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/web-landing-page4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange">Custom Landing</h2>
							<div style="min-height: 430px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>2</strong> concepts to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different formats.</strong></li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li><strong>Custom</strong> made designs.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">AdWords Landing </h2>
							<div style="min-height: 430px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>2</strong> concepts to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different formats.</strong></li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li><strong>Custom</strong> made designs and customize adwords.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Ecommerce Landing</h2>
							<div style="min-height: 430px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>2</strong> concepts to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><strong>3</strong> Designers.</li>
									<li>Final design will be sent in <strong></strong>different formats.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li><strong>Custom</strong> made landing page with forms or shopping cart.</li>
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