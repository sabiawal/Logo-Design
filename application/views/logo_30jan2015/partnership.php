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
								<?php /*?>	<li><?php echo GUARANTEE_DAYS; ?> day, 100% money back guarantee</li><?php */?>
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
						Partnership programme
					</h1>
				</div>
			</section>
			
			<section id="bf-common-body" class="normal-desc-box normal-top-gray-border">
				<div class="container">
					<div class="row">
						<p><?php echo SITE_NAME; ?> seeks continued strategic partnerships for successful growth. We welcome contact from any individual or organisation that believes they can benefit our work as well as providing greater returns for them.</p>
						<p>We seek partners with complementary business models like in web design or printing services, as well from the logo design sector. We value our outsourcing possibilities and the efficiency by which <?php echo SITE_NAME; ?> can provide very affordable services in an easy and efficient manner.</p>
						<p>For those able to contract large numbers of orders on a regular basis we can offer attractive discounts. Further, we provide a dedicated account manager for each partner for efficient communication.</p>
						<p>We welcome any form of partnership/ contracting relationship and guarantee a reply to all such emails. If you are keen to pursue a partnership arrangement, please send an email with your brief proposal to <a href="javascript:void(0);">Partners@<?php echo strtolower(SITE_NAME); ?> </a>.</p>
					</div>
				</div>
			</section>
			<?php $this->load->view('includes/offer-banner'); ?>			
		</section>
<?php $this->load->view('includes/footer-common'); ?>