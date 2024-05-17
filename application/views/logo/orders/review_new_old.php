<?php $this->load->view('includes/header-common-order'); ?>
		<section id="order-process" class="content">
			<div class="container">
				<div class="row">
					<section class="green-vertical-divider2 clearfix">
						<div class="col-sm-7">
							<div class="leftcol">
								<div class="stack">
									<p>Before you proceed to the payment page.....</p>
									<p>Your order has the following <strong> benefits that will greatly support your business:</strong></p>
									<div class="gray-box">
										<ul class="green-sq-bullet">
											<li>Free and Unlimited revisions and redraws. We design any part of your order until you are 100% happy.</li>
											<li>We send all files required for any web or print use via email.</li>
											<li>You own full copyright on every part of the designs we produce for you!</li>
										</ul>
									</div>
								</div>	
								<div class="stack">
									<h2 class="green-title1">Price promise:</h2>
									<p><strong>You will not find a more affordable logo company.</strong></p>
									<p>If you find another logo firm more affordable, we will happily refund the difference.</p>
									<p>Read on... </p>
									<p>
										AND IF THE ABOVE IS NOT ENOUGH
										<br />
										We offer <strong> the best guarantee in the logo industry....</strong>
									</p>
								</div>	
								<div class="stack">
									<div class="gray-box clearfix">
										<ul class="green-sq-bullet side-pic">
											<li>We offer 100% Money Back Guarantee on all your order.</li>
											<li>The guarantee covers the 24 hour delivery (if applicable), and any stationery designs ordered.</li>
											<li>If you don't  think your logo is worth at least <?php echo CURRENCY.LOGO_WORTH;?> to your business we will refund you in full.</li>
											<li>No admin fees.</li>
											<li>No questions asked.</li>
											<li>We offer this refund at any stage of your design, even if we have revised several times and you are still not happy (there is no other company that offers this).</li>
											<li>Immediate refund upon request.</li>
										</ul>
										<div class="guarantee-pic-hold">
											<img class="img-responsive" src="assets/images/guarantee-batch.png" alt="guarantee" />
										</div>
									</div>
								</div>	
								<div class="stack">
									<h2 class="green-title1">You can only win.</h2>
									<p><strong>Remember... Most other firms do not offer 100% Money back.</strong></p>
									<p>We can offer this outstanding service as we produce high quality designs and achieve an industry <strong style="text-decoration: underline;">high 97% customer satisfaction rate.</strong></p>
									<p>Our clients are happy and only 3% ask for a refund. We will start working on your designs as soon as payment is received. We will email you the designs within 1-3 days (24 hrs if ordered).</p>
									<p><strong>Please do not delay payment.</strong> This will delay you receiving the logo you require and slow your business growth. Every successful business has a good logo.</p>
									<p>Act now and we guarantee 100% satisfaction or your money back!</p>
								</div>					
							</div>
						</div>

						<div class="col-sm-5">
						<style>
                        .inner-border-box.row, .inner-border-box.row .col-sm-8, .inner-border-box.row .col-sm-2 {
                            margin: 0;
                            padding: 0;
                        }
                        .inner-border-box.row .col-sm-2.pull-right {
                            text-align: right;
                        }
                    </style>
							<?php //$this->load->view('includes/logo-shopping-basket'); ?>
							<div id="floated">
<?php include("floated-special.php"); ?>
                    </div>
						</div>
					</section>

					<div class="normal-desc-box text-center">
						<a href="<?php echo base_url(); ?>orders/extra2" class="green-btn order-back-btn">
							<span data-hover="Back">Back</span>
						</a>
                        
                        <a class="green-btn order-submit-btn" href="<?php echo base_url(); ?>orders/payment_process">
                        	<span data-hover="Continue">Continue to our secure payment page</span>
                        </a>
                        
					</div>
				</div>
			</div>
			
		</section>
		<script type="text/javascript">
$(function(){
var ss=$.browser;
		//console.log(ss);
		if(ss.safari){
			//console.log("safari");
			}
			else{
var mq = window.matchMedia( "(min-width: 768px)" );
if (mq.matches) {
   jQuery(document).ready(function($) {
if (window.history && window.history.pushState) {
    window.history.pushState('forward', null, 'orders/review/');
    $(window).on('popstate', function() {
	  window.location="<?php echo base_url()?>orders/specialoffers/";
	  return false;
    });

  }
});
}
else{}
			}
});
</script>
<?php $this->load->view('includes/footer-common'); ?>