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
						<span class="theme-red">Introduce</span> your restaurant to your
						<br />
						customer, the best way you can.
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you want a good menu that would complement the service, decor and food quality of your 
						<br />
						restaurant... We can create the best, most appropriate Menu Design that fits your needs.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>The menu design should incorporate the colors and themes that the customers can see from the tables and the surroundings.</p>
							<p>A properly-designed menu can help any restaurant - whether a fine dining restaurant, a family restaurant, or fast food - achieve its sales goals, increase efficiency of service, and return a desired <strong>profit.</strong></p>
							<p>Accentuate your restaurant's theme with great-looking menus that would surely give your customers satisfaction, even before they eat.</p>
							<p>Get your restaurant's menus designed <span style="text-decoration: underline;">here.</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/menu-d1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/menu-d2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/menu-d3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/menu-d4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange double">Single page Double Sided Menu</h2>
							<div class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> custom made designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions/ concepts.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
									<li><strong>Unlimited</strong> pictures can be added.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue double">3 pages Double Sided Menu</h2>
							<div class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> custom made designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions/ concepts.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
									<li><strong>Unlimited</strong> pictures can be added.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green double">6 pages Double Sided Menu</h2>
							<div class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> custom made designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions/ concepts.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
									<li><strong>Unlimited</strong> pictures can be added.</li>
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