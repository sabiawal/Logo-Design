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
						Let your ads soar high with excellent,
						<br />
						good-looking <span class="theme-red"> merchandise designs!</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						Penetrate your market by giving them something that they can use <span class="theme-red"> every day...</span>
						<br />
						Use these things to <span class="theme-red"> promote your business </span> using various designs bearing your brand or company name.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Capture your audience's attention by giving them what they need, all the while promoting your business.</p>
							<p>Taglines, logos and brands can be placed on <span class="theme-red"> merchandise </span> like ball pens, clocks, mugs, accessories and many more.</p>
							<p>These objects serve as <strong> effective advertisements </strong> as people use them every day.</p>
							<p>Your target market will <span class="theme-red"> unconsciously and effectively </span> remember your business using merchandise designs.</p>
							<p>Add your merchandise as <strong> support advertisements </strong> to your brochures and flyers and see the difference!</p>
							<p>Try our packages <span style="text-decoration: underline;">right now!</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design4.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design5.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design6.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design7.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/merchandise-design8.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange">Mug Design</h2>
							<div class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li>Beautiful, lively and fancy <strong>designs.</strong></li>
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li>Final design will be sent in <strong> different formats.</strong></li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[0]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Hoodie Design</h2>
							<div class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3 </strong>designs to choose from</li>
									<li><strong>Unlimited </strong>revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li>Final design will be sent in<strong> different formats.</strong></li>
								</ul>
								<div class="btn-wrap clearfix">
									
									<a class="orange-btn-s" href="<?php echo base_url()?>new44/order/<?php echo $res[1]->sub_package_id;?>"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Shoe Design</h2>
							<div class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3 </strong>designs to choose from</li>
									<li><strong>Unlimited </strong>revisions.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li>Final design will be sent in<strong> different formats.</strong></li>
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