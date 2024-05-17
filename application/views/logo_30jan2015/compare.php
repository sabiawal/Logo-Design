<?php $this->load->view('includes/header-common'); ?>
        <section class="content">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
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
						<div class="col-sm-4">
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
						Put us to the test!
					</h1>
					<div class="text-center slogan-tagline-2">
						To see how we compare on all features, just read below. <!--If you want to see how we compare based on a 
						<br />
						specific feature, please choose it in our drop down options below.-->                        
					</div>
				</div>
			</section>
			
			<section class="slogan double-border">
				<div class="container">
					<h1 class="text-center">
						Pricing <i class="blue-down-arrow"></i>
					</h1>
				</div>
			</section>
			
			<section id="lowest-price-guarantee">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 leftcol">
							<h3>Lowest Price Guarantee</h3>
							<ul>
								<li>
									We will beat any competitor's price.
									<br />
									Guaranteed.
								</li>
								<li>
									We keep our prices low because every 
									<br />
									business deserves an excellent logo, not just the big guys.
								</li>
								<li>
									See how we compare <img src="assets/images/green-arrow1.png" alt="compare" />
								</li>
							</ul>
						</div>
						<div class="col-sm-7 rightcol">
							<table cellpadding="0" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Company</th>
										<th>Lowest Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img src="assets/images/logo-small.png" alt="Logo Design Guarantee" /></td>
										<td>
                                            <?php if(SHOW_REGULAR_PRICE): ?>
                                            <del><?php echo CURRENCY.START_LP_P_R ?></del> 
                                            <?php endif; ?>
                                            <span style="color:red"><?php echo CURRENCY.START_LP_P ?></span>
                                        </td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logotree.com</a></td>
										<td>$675</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Thelogoco.co.uk</a></td>
										<td>$299</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logodesignpros.co.uk</a></td>
										<td>$299</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logoworks.com</a></td>
										<td>$299</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logobee.com</a></td>
										<td>$249</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Businesslogo.net</a></td>
										<td>$199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logodesignguru.com</a></td>
										<td>$199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logogenesis.com</a></td>
										<td>$199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logodesignworks.com</a></td>
										<td>$197</td>
									</tr>
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</section>
			
			<section id="lowest-price-guarantee-part">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 leftcol">
							<table cellpadding="0" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th width="170px">Company</th>
										<th>Revision Rounds</th>
										<th>Number of Samples</th>
										<th>Price ($)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><img class="img-responsive" src="assets/images/logo-small.png" alt="Logo Design Guarantee" /></td>
										<td>Unlimited</td>
										<td>6</td>
										<td>
                                            <?php if(SHOW_REGULAR_PRICE): ?>
                                            <span> <del><?php echo CURRENCY.START_LP_P_R ?></del> </span>
                                            <?php endif; ?>
                                            <span class="red"> <?php echo CURRENCY.START_LP_P ?> </span>
                                        </td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logotree.com</a></td>
										<td>2</td>
										<td>9</td>
										<td>675</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Thelogoco.co.uk</a></td>
										<td>Unlimited</td>
										<td>3</td>
										<td>299(&pound;149)</td>
										                                                                       
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logdesignpros.co.uk</a></td>
										<td>Unlimited</td>
										<td>4</td>
										<td>299(&pound;149)</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logoworks.com</a></td>
										<td>2</td>
										<td>4</td>
										<td>299</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logobee.com</a></td>
										<td>6</td>
										<td>6</td>
										<td>249</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Businesslogo.net</a></td>
										<td>Unlimited</td>
										<td>4</td>
										<td>199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logodesignguru.com</a></td>
										<td>3</td>
										<td>4</td>
										<td>199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logogenesis.com</a></td>
										<td>3</td>
										<td>3</td>
										<td>199</td>
									</tr>
									<tr>
										<td><a href="javascript:void(0);">Logodesignworks.com</a></td>
										<td>3</td>
										<td>3</td>
										<td>197(&pound;99)</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<div class="col-sm-6 rightcol">
							<h3>The most samples for the lowest price</h3>
							<ul>
								<li>Keeping pricing in mind, it is clear that we give you more bang for your buck.</li>
								<li>All of our 6 unique logo samples come with unlimited revisions.</li>
								<li>All our competitors will offer you less in return for more of your hard earned money.</li>
								<li>Our revisions are always free and unlimited. Many of our competitors will limit the number of revisions and charge for each revision.</li>
								<li>Our revision turnaround is only 24 hours!</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<section id="hand-drawn">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<h3 class="title30">100% Hand Drawn and Custom Made for You</h3>
							<ul class="dot-bullet">
								<li>Each one of our logos are 100% unique and custom made</li>
								<li>Others will use clip art and templates.</li>
								<li>Every minute detail of your logo is hand crafted by expert designers.</li>
							</ul>
						</div>
						<div class="col-sm-5">
							<img class="img-responsive" src="assets/images/hand-drawn-logo.png" alt="100% Hand Drawn and Custom" />
						</div>
					</div>
				</div>
			</section>
			
			<section id="house-expert-designers" class="clearfix">
				<div class="container">
					<div class="row">
						<div class="col-sm-5">
							<img class="img-responsive" src="assets/images/house-expert-designers.png" alt="house expert designers" />
						</div>
						<div class="col-sm-7">
							<h3 class="title30">&lsquo;&lsquo;Minimum&rsquo;&rsquo; 3 In-House Expert Designers</h3>
							<ul class="dot-bullet">
								<li>More expert designers = more expert ideas and lightning speed turnaround.</li>
								<li>Other companies will only have one designer work on your project.</li>
								<li>Our designers are degreed from accredited design institutions.</li>
								<li>All designers have over 10 years of experience in logo design.</li>
								<li>Other companies outsource design work.</li>
							</ul>
							
							<h5>Beware of Crowdsourcing and Logo Competition Websites</h5>
							<ul class="dot-bullet">
								<li>Some companies tempt people to believe that having multiple designers from all over the world will create the best logo for them.</li>
								<li>Nothing could be farther from the truth. Most of these logos end up violating copyright and being entirely unusable.</li>
								<li>The experience and qualifications of these freelance designers are low.</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<section class="slogan">
				<div class="container">
					<h1 class="text-center">Our international awards show that we settle for only the best</h1>
				</div>
			</section>
			<section id="brand-logo1">
				<div class="container">
					<ul>
						<li><img alt="" src="assets/images/brand-logo1.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo2.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo3.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo4.jpg" class="img-responsive"></li>
						<li><img alt="" src="assets/images/brand-logo5.jpg" class="img-responsive"></li>
					</ul>
				</div>
			</section>
			
			
		</section>
<?php $this->load->view('includes/footer-common'); ?>