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
						Turn your <span class="theme-red">plain</span> notepad into a more
						<br /> 
						<span class="theme-red">colorful</span> and <span class="theme-red">livelier</span> one!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Why settle for a dull notepad when, in fact,
						<br /> 
						you can have it designed.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Notepad is a ticket when you need to jot something down, create a grocery list, or write a love letter-- heck, <span style="font-style: italic;">whatever tickles your fantasy.</span></p>
							<p>It is a perfect give-away and a business card.</p>
							<p>And what's good is that you can design it <span style="text-decoration: underline;">personally</span> to fit any mood.</p>
							<p>Make it more unique and exciting by having a <strong>design</strong>. Call us now, and let our award-winning team put their expertise to work for you.</p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/notepad1.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/notepad2.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/notepad3.jpg" alt="notepad" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/notepad4.jpg" alt="notepad" /></li>
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
							<h2 class="color-box-title-orange">Standard</h2>
							<div style="min-height: 490px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> design concepts.</li>
									<li>Get (8.5" x 11" - A4) or <strong></strong>any custom size.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Flat rate, no <strong>hidden charges.</strong></li>
									<li>Fully designed according to <strong>your business needs.</strong></li>
									<li>Insertion of images / photos - <strong>Free of cost.</strong></li>
									<li>Full Optimization + Support from our <strong>design experts.</strong></li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Premium</h2>
							<div style="min-height: 490px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> design concepts.</li>
									<li>Get (8.5" x 11" - A4) or <strong>any custom size.</strong></li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Flat rate, no <strong>hidden charges.</strong></li>
									<li>Fully designed according to <strong>your business needs.</strong></li>
									<li>Insertion of images / photos - <strong>Free of cost.</strong></li>
									<li>Full Optimization + Support from our <strong>design experts.</strong></li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Ultimate</h2>
							<div style="min-height: 490px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> design concepts.</li>
									<li>Includes <strong>1</strong> Final Electronic Notepad Template.</li>
									<li>Get (8.5" x 11" - A4) or <strong>any custom size.</strong></li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Flat rate, no <strong>hidden charges.</strong></li>
									<li>Fully designed according to <strong>your business needs.</strong></li>
									<li>Insertion of images / photos - <strong>Free of cost.</strong></li>
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