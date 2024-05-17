<?php $this->load->view('includes/web/header-common'); ?>
       <section class="content clearfix">
			<div id="banner-bottom-slogan">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3>We will <span class="theme-green-style"> beat </span> any competitor's price.
								<br>
								Guaranteed.
							</h3>
						</div>
						<div class="col-sm-6">
							<div class="trapzoid-box about-box">
								<h3 class="text-center"><a href="<?php echo base_url('web-site-design/webdesigner-limited-sale/guarantee') ?>">Learn more about our Guarantee...</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="slogan">
				<div class="container">
					<h1 style="color: #00b050" class="text-center">
						Our Web Portfolio: 
                                <?php
                                if(date('d')<=7){    
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
                                    echo $portfolio_date;
                                ?>
					</h1>
				</div>
			</section>
			
			<section style="padding: 0 0 30px;" class="normal-desc-box">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>Please note that our portfolio below is not exhaustive and just includes our recent designs. We have designed over 1,000 websites and are capable of creating custom 
websites for you for any industry.</p>
						</div>
						<div class="col-sm-6">
							<p>We can also design any type of website from simple brochure sites to large ecommerce websites. We often add many custom things for free for our customers, so call us today and we can usually do that for you.
</p>
						</div>
					</div>
				</div>
			</section>
			
			<section id="web-portfolio-body" class="normal-gray-box normal-desc-box">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<img style="margin: 50px 0 0;" class="img-responsive" src="assets/images/customer-service-excellent.png" alt="customer service excellent" />
						</div>
						<div class="col-sm-8">
							<h3>Its true...We are so much better: "It&rsquo;s all in the detail..."</h3>
							<p>Give us a call so we can tell you how our websites are designed with a distinct competitive advantage. We will guide you through our portfolio to show you how our designers create much more profitable websites than our competitors.</p>
							<p>When designing your website, we do not only put our full effort in to the big obvious designs, e.g. flash animations but we also pay careful attention to the subtle, smaller details that can make your website really stand out.</p>
							<p>
								These fine details are critical to get the right response from your customers. Fine details can increase sales or phone conversions by over 50%. It&rsquo;s all about results right?
							</p>
						</div>
					</div>
				</div>
			</section>
			
			<section id="web-portfolio-body" class="normal-desc-box">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<h3>What most customer's don't know and why it's hurting them...</h3>
							<p>When you call our friendly customer support specialists, feel free to ask for explanations and demonstrations of all our package features. We will show you our portfolio sites in detail and explain the different features that all add up to an excellent design.</p>
							<p>We will tell you honestly what other companies don't provide and how they try and rip you off by charging you down the road!</p>
						</div>
						<div class="col-sm-4 text-right">
							<img style="margin: 50px 0 0;" class="img-responsive" src="assets/images/customer-clearfy-pic.png" alt="customer" />
						</div>
					</div>
				</div>
			</section>
			
			<section id="web-portfolio-thumb">
				<div class="container">
					<div class="row">
						<div class="clearfix">
							<a href="http://seawiseconstruction.com" target="_blank"><img src="assets/images/web-portfolio-thumb/1.jpg" alt="web portfolio" /></a>
							<a href="http://lovecoffeemix.com" target="_blank"><img src="assets/images/web-portfolio-thumb/2.jpg" alt="web portfolio" /></a>
							<a href="http://kimandlizbeauty.com" target="_blank"><img src="assets/images/web-portfolio-thumb/3.jpg" alt="web portfolio" /></a>
							<a href="http://onetwoeducation.com" target="_blank"><img src="assets/images/web-portfolio-thumb/4.jpg" alt="web portfolio" /></a>
							<a href="http://queensinterior.com" target="_blank"><img src="assets/images/web-portfolio-thumb/5.jpg" alt="web portfolio" /></a>
							<a href="http://justforusflowers.com" target="_blank"><img src="assets/images/web-portfolio-thumb/6.jpg" alt="web portfolio" /></a>
							<a href="http://drewsrealestate.com" target="_blank"><img src="assets/images/web-portfolio-thumb/7.jpg" alt="web portfolio" /></a>
							<a href="http://wedddingbliss.com" target="_blank"><img src="assets/images/web-portfolio-thumb/8.jpg" alt="web portfolio" /></a>
							<a href="http://wavefitnessclub.com" target="_blank"><img src="assets/images/web-portfolio-thumb/9.jpg" alt="web portfolio" /></a>
							<a href="http://vipexpress.co.uk" target="_blank"><img src="assets/images/web-portfolio-thumb/10.jpg" alt="web portfolio" /></a>
						</div>
						<div class="bottom clearfix">
							<ul class="info-widget">
								<li>100% Custom Made</li>
								<li><?php echo substr(COUNTRY,0,2); ?> In House Design Team</li>
								<li>Designed for All Industries</li>
							</ul>
							<div class="web-port-btn">
								<a href="<?php echo base_url('web-site-design/webdesigner-limited-sale') ?>" class="orange-btn">
									<span data-hover="See Our Packages">See Our Packages</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="web-portfolio-tab">
				<div id="web-portfolio-tab-inner">
					<div class="line"></div>
					<div class="container">
						<div class="row">
							<ul class="nav nav-tabs col-sm-offset-3" id="package-tab">
								<li class="active"><a href="#cutomer-question" data-toggle="tab">Customer Question</a></li>
								<li><a href="#customer-success-stories" data-toggle="tab">Customer Success Stories</a></li>
							</ul>
						</div>
					</div>
					<div class="tab-content clearfix">
						<div class="tab-pane fade in active" id="cutomer-question">
							<div class="normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<h3>Q. "What sets you apart from other web design companies?"</h3>
											<strong style="font-size: 16px; margin: 0 0 15px; display: block;">A. Here are the top 4 things we offer you that other companies don't.</strong>
											<h2 class="one">We offer you many important features that are necessary for a great performing website, FREE!</h2>
											<p>We offer you hosting, a content management system, unlimited revisions, flash animation, copyright, mouse-over effects, specialised web designer, specialised programmer, specialised logo designer, 24/7 phone tech support and much more.</p>
										</div>
										<div class="col-sm-4 text-center no-border-pic-section">
											<img class="img-responsive" src="assets/images/web-portfolio-thumb/customer-q-pic1.png" alt="web design companies" />
										</div>
									</div>
								</div>
							</div>
							<div class="normal-gray-box normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-4 text-center no-border-pic-section">
											<img class="img-responsive" src="assets/images/web-portfolio-thumb/customer-q-pic2.png" alt="money back guarantee" />
										</div>
										<div class="col-sm-8">
											<h2 class="two">We offer "by far" the best money back guarantee in the industry...YES IT'S HUGE!</h2>
											<p>It's a full <?php echo GUARANTEE_DAYS ?>-day, 100% money back guarantee... no fees, no questions.</p>
											<p>Be careful; don't trust a company that does not provide a lengthy money back guarantee. It reflects pathetically on their weak customer service. Ask them and you will find that no-one beats our guarantee.</p>
											<p>Few competitors have a 100% money back guarantee and none have a guarantee as long as ours. We can offer this because of our amazing <strong> 98% customer satisfaction rate.</strong></p>
											<p>We believe none of our competitors have a satisfaction rate this high, so they simply can't offer a guarantee as strong as ours as otherwise they would go out of business. It shows real lack of substance and reflects weak management.<strong> Opt for quality and substance.</strong></p>
										</div>
									</div>
								</div>
							</div>
							<div class="normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<h2 class="three">Yes, we have a large and well established team so we can offer you 24/7/365 phone support!</h2>
											<p>Most design companies will offer you just 9-5 support. It says little of their commitment to customer service. They just want to keep their costs low. Don&rsquo;t settle for it!</p>
											<p>We offer in-house phone support 24/7/365. There may be natural glitches to a website, and having 24/7/365 phone support allows you to get the help you deserve. Also, it&rsquo;s very useful if you want to get your project going fast.</p>
										</div>
										<div class="col-sm-4 text-center no-border-pic-section">
											<img class="img-responsive" src="assets/images/web-portfolio-thumb/customer-q-pic3.png" alt="large and well established" />
										</div>
									</div>
								</div>
							</div>
							<div class="normal-gray-box normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-4 text-center no-border-pic-section">
											<img class="img-responsive" src="assets/images/web-portfolio-thumb/customer-q-pic4.png" alt="money back guarantee" />
										</div>
										<div class="col-sm-8">
											<h2 class="four">You can speak to the following specialists on the phone... your web designer(s), programmer, logo designer and SEO/Marketing specialist.</h2>
											<p>That's right 4 people in total work on your project and you have opportunity to speak to them on the phone free of cost with no time constraints.</p>
											<p>We allow you access to <strong> team up with the people </strong>actually working on your project. You can learn first-hand from <strong> industry specialists </strong>over the phone.</p>
											<p>Other companies just allocate you an account manager and outsource most works to India. The main phone service they have is for sales. Again it's just a way for them to cut costs. Don't settle for it. <strong> Opt for quality! Call us today.</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="tab-pane fade in" id="customer-success-stories">
							<div class="normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<h3>Kim and Liz Beauty</h3>
											<p>Just 5 years ago, Kim and Elizabeth Woods started Kim and Liz Beauty. They had both worked in beauty salons for several years before they were brave enough to start their own salon. Since then, the family-owned business has boomed serving thousands of clients.</p>
											<p>Before they started a website with Logo Design Guarantee, most of their day was spent taking phone calls with clients asking about their locations, hours and services.</p>
											<p>With their new website, not only do they have more time to grow their business but have doubled their client base! The website&rsquo;s flash animation features have also given them a more professional and well established presence.</p>
										</div>
										<div class="col-sm-4 text-center pic-section">
											<a href="http://www.kimandlizbeauty.com" target="_blank">
												<img src="assets/images/web-portfolio-thumb/kim-and-liz-beauty.jpg" alt="kim and liz beauty" />
												<span>Click to enlarge</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="normal-gray-box normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-4 text-center pic-section">
											<a href="http://www.queensinterior.com" target="_blank">
												<img src="assets/images/web-portfolio-thumb/queens-interior.jpg" alt="queens interior" />
												<span>Click to enlarge</span>
											</a>
										</div>
										<div class="col-sm-8">
											<h3>Queens Interior</h3>
											<p>Queens Interior was founded by a small group of entrepreneurs and interior designers. They specialize in sleek and modern interior design solutions for residential and commercial properties.</p>
											<p>A few years ago, they had a website created by a small company. They had spent a lot of money with them and were disheartened by the image this website was giving them.</p>
											<p>Since they specialize in modern design, their outdated looking website was not doing them any favours. Then they chose Logo Design Guarantee to revamp their old website and have increased their client base by 40%. With free unlimited revisions, we were able to give them the website that totally matched their vision and took their reputation to new heights.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-8">
											<h3>SeaWise Construction</h3>
											<p>Seawise Construction, Inc. is a corporation that provides civil engineering consulting services. Seawise Construction was incorporated in 1998 and has continued to build a reputation as a responsive and professional engineering services company.</p>
											<p>Seawise Construction chose Logo Design Guarantee to build a website for them which would enhance their professional image and made use of search engine optimisation (SEO) so they could market effectively online.</p>
											<p>Logo Design Guarantee was a clear choice for them due to the low package price with SEO included for free. Since their new website launched, they are getting 30% more contracts within the first 4 months and their web presence now matches their professional and reputable image.</p>
										</div>
										<div class="col-sm-4 text-center pic-section">
											<a href="http://seawiseconstruction.com" target="_blank">
												<img src="assets/images/web-portfolio-thumb/sealwise-construction.jpg" alt="seal wise construction" />
												<span>Click to enlarge</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="normal-gray-box normal-desc-box clearfix">
								<div class="container">
									<div class="row">
										<div class="col-sm-4 text-center pic-section">
											<a href="http://wedddingbliss.com" target="_blank">
												<img src="assets/images/web-portfolio-thumb/wedding-bliss.jpg" alt="wedding bliss" />
												<span>Click to enlarge</span>
											</a>
										</div>
										<div class="col-sm-8">
											<h3>WeddingBliss</h3>
											<p>WedddingBliss' mission is to provide unique, custom, and personal websites about special occasions so you can share your story with your family and friends. WeddingBliss was started in 2004 by Julie Cartwright.</p>
											<p>After having a hectic wedding of her own, she decided to make a one stop shop for couples looking for advice and the best deals. She also saw the need to keep all the wedding memories (pictures and videos) in one safe and creative place. In order to get her name out there, she really needed a professional website so she could advertise online. On a tight budget, she chose Logo Design Guarantee because of its affordability, <?php echo GUARANTEE_DAYS ?> day money back guarantee and SEO service.</p>
											<p>She was also working a full time job and needed to be able to discuss her design needs when it was convenient for her. Logo Design Guarantee&rsquo;s 24/7 customer support, affordability and free extra services made her dream become a reality.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
			</section>
		</section> 
		
<?php $this->load->view('includes/web/footer-common'); ?>