<?php $this->load->view('includes/header-common'); ?>
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
								<h3 class="text-center"><a href="<?php echo site_url('packages'); ?>">See Our Packages</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="slogan">
				<div class="container">
					<h1 class="text-center">
						Logo Design Guarantee's <span class="theme-green-style2-conly"> innovation </span> within
						<br />
						the design industry can be reflected by our
						<br />
						recent <span class="theme-green-style2-conly"> sponsorship for charities!... </span>
					</h1>
				</div>
			</section>
			
			<section class="top-fade-shadow normal-desc-box">
				<div class="container">
					<div class="row">
						<h5 class="bf-med-title text-center">
							We are a socially conscious business, the way modern
							<br />
							business should be.
						</h5>
					</div>
				</div>
			</section>
			
			<section id="bf-common-body" class="normal-desc-box">
				<div class="container">
					<div class="row">
                    <?php
                    if(date('d')<8){    
                        $portfolio_month = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
                        $portfolio_date  = trim(date("m Y",$portfolio_month));
                        $x               = explode(' ',$portfolio_date);    
                        $mth = $x[0];
                        $mth = (int)$mth;      
                        $month = array('','January','February','March','April','May','June','July','August','September','October','November','December');  
                            if($mth ==12)
                            $portfolio_date = $month[$mth].' '.(date('Y')-1);
                            else
                            $portfolio_date = $month[$mth].' '.(date('Y'));
                        }
                        else{$portfolio_date = date("F Y");} 
                    ?>
						<p class="text-center" style="font-style: italic; color: #000000;"><strong>Recent logos designed for charities, <?php echo $portfolio_date ?>:</strong></p>
						<section class="green-vertical-divider clearfix">
							<div class="col-sm-6">
								<div class="stack">
									<h5 style="text-decoration: underline;" class="theme-green-style2-conly">Road to Damascus Christian Church</h5>
									<div class="clearfix">
										<img src="assets/images/damascus-christian-church.jpg" alt="damascus christian church" />
									</div>
									<p><strong>The following text was provided to us within the logo order
brief:</strong></p>
									<p>"I am interested in a simple contemporary logo with clean lines. Our ministry is called Road To Damascus Christian Church (RTD). It is a non-denominational church with an emphasis on building strong Christian lives and families.</p>
									<p>We would like the letters RTD to be used. And the entire church name (Road to Damascus Christian Church) printed beneath. Also, possible if a road could be designed in the logo as well, would be great."</p>
								</div>
								<div class="stack">
									<h5 style="text-decoration: underline;" class="theme-green-style2-conly">Customer testimonial</h5>
									<p>"I thoroughly enjoyed working with your company.</p>
									<p>I received fast, quality service at an affordable price. Your designers had a creative way of capturing the essence of our church ministry and placed it into a contemporary logo design.</p>
									<p>All of my feedback was warmly received and was promptly responded to. I would recommend your site to anyone looking for an awesome professional logo."</p>
									
									<p>
										Sincerely,
										<br />
										Pastor Joseph Graham
										<br />
										Pastor of Road to Damascus Christian Church Charlotte, NC 
									</p>
								</div>
							</div>
							
							
							
							<div class="col-sm-6">
								<div class="stack">
									<h5 style="text-decoration: underline;" class="theme-green-style2-conly">Heritage Community Church</h5>
									<div class="clearfix">
										<img src="assets/images/heritage-comm-church.jpg" alt="damascus christian church" />
									</div>
									<p><strong>The following text was provided to us within the logo order
brief:</strong></p>
									<p>We are a church that values family and passing down a legacy of faith to the next generation. We value authentic, honest relationships.</p>
									<p>Maybe the idea of a tree (family tree, roots, reproduce or passing down legacy, etc.)</p>
									<p>
										Brian Williams, Pastor
										<br />
										Heritage Community Church
										<br />
										PO Box 728
										<br />
										Fruitland Park
										<br />
										FL 34731 
									</p>
								</div>
							</div>
						</section>

						
					</div>
				</div>
			</section>
			
			<section class="slogan normal-top-gray-border">
				<div class="container">
					<p style="font-style: italic; color: #000000; margin: 20px 0 0;" class="text-center"><strong>Are you a charity?...</strong></p>
					<h1 class="text-center">
						We give you back <span class="theme-green-style2-conly"> all the best that you </span>
						<br />
						 <span class="theme-green-style2-conly"> deserve,</span> for the kindness you've done!
					</h1>
				</div>
			</section>
			
			<section class="normal-desc-box normal-gray-box">
				<div class="container">
					<div class="row">
						<p><strong>At Logo Design Guarantee we extend our professional aid to any Charitable Institution, with a 10% discount only you can access.</strong></p>
						<p>Charitable institutions seldom receive support from the outside, as people wrongly tend to think of some institutions as phony, unless you've become established over several years...</p>
						<p>In short, trust is still required to run your charity, profit or non-profit. We'd like to extend a hand... No, even a whole arm, to help charitable institutions in our own small way, by providing you professional logos...</p>
						<p>...At very charitable prices.</p>
						<p>Caritas, the word from which the word charity came from, is the Latin translation of agape, which means "unlimited, unconditional love to others."</p>
						<p>We can help you express that love, even with the logos that you'd have us create. Using colors like white or light blue, both of which foster purity and cleanliness, among other colors, to look professional and loving at the same time... Such logos can really help you gain trust from the first look.</p>
						<p>And yes, to help you even further, as a way of humbling ourselves just like you do, we're offering your charity a 10% discount if you give us a call, on any and all design packages you order...</p>
						<p><strong>Our "lowest prices" just got even lower for you!</strong></p>
						<p>For all of your design needs, we at Logo Design Guarantee would be more than happy to serve you, in order for you to be able to serve others much more. Our 10% also applies for any future design service you order
with us!</p>
						<p>See our <a href="<?php echo base_url('packages')?>">packages</a> now, and then call us to get your 10% OFF Today!</p>
					</div>
				</div>
			</section>			
			<?php $this->load->view('includes/offer-banner'); ?>
			
		</section>
<?php $this->load->view('includes/footer-common'); ?>