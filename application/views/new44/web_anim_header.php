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
						Let your audiences be impressed with your <span class="theme-red">eye-catching</span> 
						<br />
						Web Header Design...NOW!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you want your website to <span style="font-style: italic;"></span> register in the mind of your prospects at first glance... 
						<br />
						having a fine and dandy Animated Web Header is the key.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>The Web Header is the <span style="text-decoration: underline;">first thing that the viewer</span> notice when they is it your site so make sure it tells a <span class="theme-red">thousand words at a brief look.</span> </p>
							<p>But an Animated Web Header would be <strong>more attractive...</strong></p>
							<p style="font-style: italic;">...than a plain and simple web header.</p>
							<p>It also encourages audiences to view your whole website.</p>
							<p>With our <strong>expert designers</strong>, yours will surely leave them an expression that it is a quality site that they will surely enjoy.</p>
							<p>Have it designed by us <span style="text-decoration: underline;">today.</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><a href="http://www.wavefitnessclub.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-header1.jpg" alt="animated header" /></a></li>
									<li class="col-sm-3"><a href="http://www.justforusflowers.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-header2.jpg" alt="animated header" /></a></li>
									<li class="col-sm-3"><a href="http://www.wedddingbliss.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-header3.jpg" alt="animated header" /></a></li>
									<li class="col-sm-3"><a href="http://www.queensinterior.com" target="_blank"><img class="img-responsive" src="assets/images/brand-logos/anim-web-header4.jpg" alt="animated header" /></a></li>
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
							<h2 class="color-box-title-orange">Standard Animated GIF</h2>
							<div class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee..</li>
									<li><strong>1</strong> Designers.</li>
									<li>Image Based <strong>Animated GIF.</strong></li>
									
									 
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Silver Flash Animated</h2>
							<div class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee..</li>
									<li><strong>1</strong> Designers.</li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Elite Flash Animated</h2>
							<div class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>6</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee..</li>
									<li><strong>2</strong> Designers.</li>
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