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
						Even your letterhead's digital form should
						<br />
						be no less than a <span class="theme-red">masterpiece!</span>
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						The world steadily moves on to a digital stage, and growing companies <span class="theme-red">must keep up.</span> Debut in the internet with a blast!
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Although direct mailing is a large and highly effective area in marketing, most of the world now has access to the internet...</p>
							<p style="font-style: italic;">...And it is imperative that you explore this huge market as well.</p>
							<p>But the netizens are hungry for great visuals. Anything less is tantamount to garbage, and will be <span class="theme-red">rejected in a snap.</span></p>
							<p>We can create electronic letterheads for your online needs. And, based on your specifications, it will be cohesive to your existing letterhead design!</p>
							<p>Give your company that consistently high-quality look that <strong>we can provide for you.</strong> Give us a call <span style="text-decoration: underline;">today!</span></p>
							<div class="row">
								<ul id="featured-logo-coll" class="clearfix">
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/electronic-letterhead1.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/electronic-letterhead2.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/electronic-letterhead3.jpg" alt="" /></li>
									<li class="col-sm-3"><img class="img-responsive" src="assets/images/brand-logos/electronic-letterhead4.jpg" alt="" /></li>
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
							<h2 class="color-box-title-orange four">For Every Additional User (Same design with different name)</h2>
							<div style="min-height: 470px;" class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li>For additional user (<strong>different</strong> name).</li>
									<li>The <strong>original</strong> design ordered will be use.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different</strong> formats.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue four">Personalized Electronic Letterhead in MSWord</h2>
							<div style="min-height: 470px;" class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li>Personalized to <strong>each</strong> user.</li>
									<li>Including their name, title, e-mail address, direct dial number (if applicable), and any other personal <strong>information</strong> requested.</li>
									<li><strong>3</strong> design templates.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different</strong> formats.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong>100%</strong> money back guarantee.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green four">Generic Electronic Letterhead in MSWord</h2>
							<div style="min-height: 470px;" class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong></strong> 3 design templates.</li>
									<li>Can be used by <strong>anyone</strong> in the company.</li>
									<li><strong>Unlimited</strong> revisions.</li>
									<li>Final design will be sent in <strong>different</strong> formats.</li>
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