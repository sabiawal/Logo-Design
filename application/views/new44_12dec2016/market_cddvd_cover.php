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
						Turn those days of dull sales...
						<br />
						Into <span class="theme-red">Blockbuster sales!</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If your CDs/DVDs have good content, but still have low sales... Then you can improve on the lack in 
						<br />
						their looks! Purchase our <span style="font-style: italic">CD/DVD design service </span> <span style="text-decoration: underline;"> now!</span>

					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>The competition is fierce, and the stakes are high. You have to build up <strong>every aspect</strong> that you can build up on.</p>
							<p style="font-style: italic;">Even aesthetics.</p>
							<p>With our award-winning team of professional graphic designers, you can get the perfect design for your CDs or DVDs, and/or their covers, at low, low prices!</p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/cddvd-cover1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/cddvd-cover2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/cddvd-cover3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/cddvd-cover4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange triple">Customize CD or DVD Label</h2>
							<div style="min-height: 475px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> design samples.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue triple">CD or DVD Case(Front &amp; Back Case Labels)</h2>
							<div style="min-height: 475px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price blue"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> FRONT CASE LABEL design samples.</li>
									<li><strong>3</strong> BACK CASE LABEL design samples.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green triple">Complete CD or DVD Labels(Front &amp; Back Case Labels included)</h2>
							<div style="min-height: 475px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price green"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3</strong> CD or DVD LABEL design samples.</li>
									<li><strong>3</strong> FRONT CASE LABEL design samples.</li>
									<li><strong>3</strong> BACK CASE LABEL design samples.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<?php /*?><li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li><?php */?>
                                     <li>Phone contact with your designers</li>
									<li>Final design will be sent in <strong>7</strong> different formats.</li>
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