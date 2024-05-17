<?php $this->load->view('includes/web/header-common'); ?>
		<section id="order-process" class="content">
			<div class="container">
				<div class="row">
					<section class="green-vertical-divider2 clearfix">
						<div class="col-sm-7">
							<div class="leftcol">
								<div class="stack">
									<h2 class="blue-title1">Before you proceed to the payment page.....</h2>
									<p>
										Your order has the following <strong> 5 Unique benefits 
										<br />
										that will greatly support your business:</strong>
									</p>
									<div class="greeny-yellow-box clearfix">
										<ul>
											<li><span class="num">1. </span> <span class="desc"> Free and Unlimited revisions and redraws. We design any part of your order until you are 100% happy. Other firms limit the number of revisions or the timeline to finish your designs.</span></li>
											<li><span class="num">2. </span> <span class="desc"> We provide certified in-house <?php echo COUNTRY; ?> designers. All our designers are degreed. We hire "Quality" to produce "Quality". Nearly all competitors outsource to India.</span></li>
											<li><span class="num">3. </span> <span class="desc"> Free Content Management System (CMS) with every package. This allows you to easily edit your text at any stage in the future. Other firms charge up to <?php echo CURRENCY.CMS_OTHER_PRICE; ?> for CMS.</span></li>
											<li><span class="num">4. </span> <span class="desc"> Free flash head banner. This means you have an animated design to your site. This requires more advanced designing. Most firms also charge up to <?php echo CURRENCY.FLASH_BANNER_OTHER_PRICE; ?> for Flash.</span></li>
											<li><span class="num">5. </span> <span class="desc"> Free dedicated designers. We take up to just "2 weeks" to complete a web site. Most firms use a designer to work for several customers at one time. No wonder they take up to 6-8 weeks to complete a project!</span></li>
										</ul>
									</div>
								</div>	
								
								<div class="stack">
									<h2 class="blue-title1">Price promise:</h2>
									<p>You will not find a more affordable web design company!</p>
									<p>If you later find a more affordable offer, we will refund the difference.</p>
									<p>IF THE ABOVE IS NOT ENOUGH:</p>
									<p><strong>We offer</strong> the best guarantee in the Design industry....</p>
								</div>
								
								<div class="stack">
									<div class="greeny-yellow-box yellow-borderd clearfix">
										<p>We offer a <?php echo GUARANTEE_DAYS; ?>-Day, 100% Money Back Guarantee on all your order.</p>
										<p>If you don't think your web site is worth at least <?php echo CURRENCY.WEB_QUALITY_PRICE; ?> to your business we will refund you in full.</p>
										<ul style="width: 73%;">
											<li><span class="num">1. </span> <span class="desc"> No admin fees.</span></li>
											<li><span class="num">2. </span> <span class="desc"> No questions asked.</span></li>
											<li><span class="num">3. </span> <span class="desc"> We offer this refund at any stage of your design, even if we have revised several times and you are still not happy (there is no other company that offers this).</span></li>
											<li><span class="num">4. </span> <span class="desc"> Immediate refund upon request.</span></li>
										</ul>
										<img style="margin: 60px 0 0;" src="assets/images/web-guarantee-seal.jpg" alt="guarantee" />
									</div>
								</div>
								
								
								
								
								<div class="stack">
									<h2 class="blue-title1">You can only win.</h2>
									<p>Either you'll get a web site 100% to your "defined satisfaction" or you will get all your money back and working examples and design ideas to use.</p>
									<p>Remember... Most other firms do not offer 100% Money back. It does not say much about their design quality and customer service focus.</p>
									<p>We can offer this outstanding guarantee as we produce high quality designs and achieve an industry high 97% customer satisfaction rate!</p>
									<p>Our clients are happy and only 3% ask for a refund.</p>
								</div>
								<div class="stack">
									<h2 class="blue-title1">So what happens next?...</h2>
									<p>Upon payment, we will set up your personal design panel and email it to you within 12-24 hrs. This will allow you to keep your web design project all within one online account. Other firms use email communication - this is just too basic.</p>
									<p>Please do not delay payment. This will delay us being able to start your project.</p>
									<p>As a business ourselves, we are sure you understand that we need payment before we commence a project as a web project costs a lot of money for our in-house staff.</p>
									<p>We have tried to provide peace of mind via our <?php echo GUARANTEE_DAYS; ?>-Day, 100% Money Back Guarantee Policy.</p>
									<p>Act now and we guarantee 100% satisfaction or your money back!</p>
									<p>That simple.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-5">
							<?php $this->load->view('includes/web/shopping-basket'); ?>
						</div>
					</section>

					<div class="normal-desc-box text-center">
						<a href="<?php echo base_url('web-site-design/webdesigner-limited-sale/orders/index/');?>" class="green-btn order-back-btn">
							<span data-hover="Back">Back</span>
						</a>
						<!--<button type="submit" class="green-btn order-submit-btn">
							<span data-hover="Continue to our secure payment page">Continue to our secure payment page</span>
						</button>-->
                        <a class="green-btn order-submit-btn" href="<?php echo base_url().'web-site-design/webdesigner-limited-sale/orders/payment'; ?>">
                        	<span data-hover="Continue">Continue to our secure payment page</span>
                        </a>
					</div>
					
					<div style="padding: 0 15px;" class="text-center">
						<p>
							*This order qualifies for our <strong> <?php echo GUARANTEE_DAYS; ?>-Day, 100% Money Back Guarantee Policy.</strong>
							<br />
							<span style="font-style: italic;">Simple!</span> > No fees. no questions asked.
							<br />
							Please be reassured that:
						</p>
					</div>
					
					<div class="greeny-yellow-box greeny-yellow-box-space clearfix">
						<ul class="green-tick">
							<li>Free and Unlimited revisions and redraws. We design any part of your order until you are 100% happy.</li>
							<li>We send all files required for any web or print use via email.</li>
							<li>You own full copyright on every part of the designs we produce for you!</li>
						</ul>
					</div>
				</div>
			</div>
			
		</section>
<?php $this->load->view('includes/web/footer-common'); ?>