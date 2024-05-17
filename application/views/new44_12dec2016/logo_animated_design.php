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
						"Pull your customers into your store, 
						<br />
						give them <span class="theme-red"> eye-candy!...</span>"
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-top-gray-border no-pad-bottom">
				<div class="container">
					<h5 class="bf-med-title text-center">
						If you want your audiences to be amazed by your product in just a few seconds... 
						<br />
						Then we can help you create an Animated Logo Design that will surely capture your prospect's attention.
					</h5>
				</div>
			</section>
			
			<section class="normal-desc-box no-pad-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p>Logo is a very important thing in business because it gets <strong> firm footing </strong> in the market where competition is running high.</p>
							<p><span style="font-style: italic;">It is a different yet a very effective way to promote your business.</span></p>
							<p>Great animated features may help <span style="text-decoration: underline;">keep customers</span> and make them feel comfortable in doing business with your company. But if these features do not look promising...</p>
							<p>...They can <span class="theme-red">steer customers away.</span></p>
							<p>With our <span style="text-decoration: underline;"><?php echo COUNTRY; ?> Award-Winning Designers</span>, you can be sure that your logos will be <strong style="font-style: italic;"> catchy, straightforward, and excellent.</strong></p>
							<p>We have the ability to breathe life into any animated logo to give you exactly what you are looking for.</p>
							<p>Give us a call <strong> today!</strong></p>
							
							<div id="flash-anim-logo">
								<div class="col-sm-6 clearfix">
									<div class="item">
									<object width="328" height="270" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="FlashID">
									  <param value="assets/images/brand-logos/animated/animatedlogo1.swf" name="movie">
									  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
									  <!--[if !IE]>-->
									  <object width="328" height="270" data="assets/images/brand-logos/animated/animatedlogo1.swf" type="application/x-shockwave-flash">
									    <!--<![endif]-->
									    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
									    <div>
									      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
									      <p><a href="https://www.adobe.com/go/getflashplayer"><img width="112" height="33" alt="Get Adobe Flash player" src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"></a></p>
									    </div>
									    <!--[if !IE]>-->
									  </object>
									  <!--<![endif]-->
									</object>
									</div>
								</div>
								<div class="col-sm-6 clearfix">
									<div class="item">
									<object width="328" height="270" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="FlashID">
								  	<param value="assets/images/brand-logos/animated/animatedlogo2.swf" name="movie">
								  	<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
								  	<!--[if !IE]>-->
								  	<object width="328" height="270" data="assets/images/brand-logos/animated/animatedlogo2.swf" type="application/x-shockwave-flash">
								    <!--<![endif]-->
								    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
								    <div>
								      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
								      <p><a href="https://www.adobe.com/go/getflashplayer"><img width="112" height="33" alt="Get Adobe Flash player" src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"></a></p>
								    </div>
								    <!--[if !IE]>-->
								  </object>
								  
								  <!--<![endif]-->
								</object>
								</div>
								</div>
								<div class="col-sm-6 clearfix">
									<div class="item">
									<object width="328" height="270" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="FlashID">
									  <param value="assets/images/brand-logos/animated/animatedlogo3.swf" name="movie">
									  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
									  <!--[if !IE]>-->
									  <object width="328" height="270" data="assets/images/brand-logos/animated/animatedlogo3.swf" type="application/x-shockwave-flash">
									    <!--<![endif]-->
									    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
									    <div>
									      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
									      <p><a href="https://www.adobe.com/go/getflashplayer"><img width="112" height="33" alt="Get Adobe Flash player" src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"></a></p>
									    </div>
									    <!--[if !IE]>-->
									  </object>
									  <!--<![endif]-->
									</object>
									</div>
								</div>
								<div class="col-sm-6 clearfix">
									<div class="item">
										<object width="328" height="270" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="FlashID">
										  <param value="assets/images/brand-logos/animated/animatedlogo4.swf" name="movie">
										  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
										  <!--[if !IE]>-->
										  <object width="328" height="270" data="assets/images/brand-logos/animated/animatedlogo4.swf" type="application/x-shockwave-flash">
										    <!--<![endif]-->
										    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
										    <div>
										      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
										      <p><a href="https://www.adobe.com/go/getflashplayer"><img width="112" height="33" alt="Get Adobe Flash player" src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"></a></p>
										    </div>
										    <!--[if !IE]>-->
										  </object>
										  <!--<![endif]-->
										</object>
									</div>
								</div>
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
							<h2 class="color-box-title-orange">2 Logo Samples</h2>
							<div class="body orange clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[0]; ?></span>
									<span class="new-price orange"><?php echo CURRENCY.$price[0]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>2 </strong> Animated/Flash Logo samples to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><strong>Unlimited </strong> concepts.</li>
									<li><strong>Unlimited </strong> redraws.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>1 </strong> Designer.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-blue">3 Logo Samples</h2>
							<div class="body blue clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[1]; ?></span>
									<span class="new-price blue"><?php echo CURRENCY.$price[1]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>3 </strong> Animated/Flash Logo samples to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><strong>Unlimited </strong> concepts.</li>
									<li><strong>Unlimited </strong> redraws.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>2 </strong> Designer.</li>
								</ul>
								<div class="btn-wrap clearfix">
									<a class="green-btn" href="#"><span data-hover="More info">More info</span></a>
									<a class="orange-btn-s" href="#"><span data-hover="Order now">Order now</span></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 multi-color-box">
							<h2 class="color-box-title-green">6 Logo Samples</h2>
							<div class="body green clearfix">
								<div class="price clearfix">
									<span class="old-price"><?php echo CURRENCY.$price_reg[2]; ?> </span>
									<span class="new-price green"><?php echo CURRENCY.$price[2]; ?></span>
								</div>
								<ul class="detail">
									<li><strong>6 </strong> Animated/Flash Logo samples to choose from.</li>
									<li><strong>Unlimited </strong> revisions.</li>
									<li><strong>Unlimited </strong> concepts.</li>
									<li><strong>Unlimited </strong> redraws.</li>
									<li><?php echo GUARANTEE_DAYS; ?> day <strong> 100% </strong> money back guarantee.</li>
									<li><strong>3 </strong> Designer.</li>
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