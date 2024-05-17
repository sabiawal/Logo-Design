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
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li><?php */?>
                                     <li>Phone contact with your designers</li>
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
						Don't let your freebies <span class="theme-red">look cheap...</span>
						<br />
						Even those should be dressed to impress!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you want your merchandise to look impressive, even before they see the product itself...
						<br />
						Suit your sales up with <span style="font-style: italic;">Catalogs.</span>
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Get our team of experts working for you to improve on your catalog designs, no matter <strong>how you want them to be.</strong></p>
							<p>Avoid making your catalog look like it's a good match with a trash can.</p>
							<p>Avail of our Catalogs design services and we'll make your freebie catalogs look like a <strong>shiny treasure chest</strong> with lots of goodies inside.</p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/catalog1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/catalog2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/catalog3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/catalog4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange">Up to 2 pages Catalog</h2>
							<div style="min-height: 430px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions / concepts.</li>
									<li>Our designed cards are totally in house creativity by <strong>highly</strong> professional designers.</li>
									<li><strong>FREE</strong> consultation.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">Up to 3 pages Catalog</h2>
							<div style="min-height: 430px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price blue"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions / concepts.</li>
									<li>Our designed cards are totally in house creativity by <strong>highly</strong> professional designers.</li>
									<li><strong>FREE</strong> consultation.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">Up to 4 pages Catalog</h2>
							<div style="min-height: 430px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price green"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li>Flat rate, no <strong>hidden</strong> charges.</li>
									<li><strong>3</strong> designs to choose from.</li>
									<li><strong>Unlimited</strong> revisions / concepts.</li>
									<li>Our designed cards are totally in house creativity by <strong>highly</strong> professional designers.</li>
									<li><strong>FREE</strong> consultation.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
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
								<?php /*?><a href="#"><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</a>
								<span>The best in the industry, by far.</span><?php */?>
                                 Phone contact with your designers
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
