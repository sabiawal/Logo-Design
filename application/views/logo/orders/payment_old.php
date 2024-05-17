<?php $this->load->view('includes/header-common'); ?>
		<section id="order-process" class="content">
			<div class="container">
				<div class="row">
					<section class="green-vertical-divider2 clearfix">
						<div class="col-sm-7">
							<div class="jetpay-form-outer">
								<form id="jetpay-form" method="post" action="">
									<h3>Billing Information!</h3>
                                    <?php if(isset($_POST['submit'])): ?>
                                        
                                        <?php if($ResponseText): ?>
                                            <p class="errorText"><strong>Message: </strong><?php echo $ResponseText; ?></p>
                                        <?php endif; ?>
                                    
                                    <?php endif; ?>
									<ul>
										<li>
											<label>Company Name</label>
											<input type="text" name="company_name" value="<?php echo @$_SESSION['company_name']; ?>" class="required" disabled="disabled" />
										</li>
										<li>
											<label>Billing Address</label>
											<input type="text" name="billing_address" class="required" />
										</li>
										<li>
											<label>City</label>
											<input type="text" name="city" class="required"/>
										</li>
										<li>
											<label>State</label>
											<select class="required" name="state">
												<?php echo $state; ?>
											</select>
										</li>
										<li>
											<label>Zip Code/Postcode</label>
											<input type="text" name="zip" class="required" />
										</li>
										<li>
											<label>Name on Card</label>
											<input type="text" name="fullname" value="<?php echo @$_SESSION['fname'].' '.@$_SESSION['lname']; ?>" class="required" />
										</li>
										<li>
											<label>Card Number</label>
											<input type="text" name="cardnum" class="required creditcard" />
										</li>
										<li>
											<label>Card Expiry</label>
											<span>Mo.</span>
											<select class="month required" name="expmonth">
												<option value="">--</option>
                                                <?php for($i=1;$i<=12;$i++): ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
											</select>
											<span>Yr.</span>
											<select class="year required" name="expyear">
												<option value="">----</option>
                                                <?php for($i=date('Y');$i<=date('Y')+15;$i++): ?>
                                                    <option value="<?php echo substr($i, -2); ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
											</select>
										</li>
										<li>
											<label>CVV Number</label>
											<div class="multiple-items">
												<input type="text" name="cvv" class="required"/>
												<p class="theme-blue">The CVV Number is the last 3 digits found on the back of your debit or credit card. </p>
											</div>
											
										</li>
										<li>
											<label>Package Discription</label>
											<div class="multiple-items">
												<p><?php echo $order_desc; ?></p>
											</div>
										</li>
										<li>
											<label>Total Amount($)</label>
											<span><?php echo $gross_total_price; ?></span>
										</li>
									</ul>
                                    <div class="normal-desc-box text-center">
    									<a href="javascript:void(0);" class="green-btn order-back-btn">
    										<span data-hover="Back">Back</span>
    									</a>
    									<button type="submit" class="green-btn order-submit-btn" name="submit">
    										<span data-hover="Place Your Order">Place Your Order</span>
    									</button>
    								</div>
								</form>	
								
								
							</div>			
						</div>

						<div class="col-sm-5">
							
						</div>
					</section>
				</div>
			</div>
			
		</section>
        <!-- Form Validation -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#jetpay-form').validate(
            {
                rules:
                {
                    company_name: "required",
                    billing_address:"required",
                    city:"required",
                    state:"required",
                    state:"required",
                    zip:"required",
                    fullname:"required",
                    cardnum:"required",
                    expmonth:"required",
                    expyear:"required",
                    cvv: "required"
                },
                messages:
                {
                    company_name: "",
                    billing_address:"",
                    city:"",
                    state:"",
                    state:"",
                    zip:"",
                    fullname:"",
                    cardnum:"",
                    expmonth:"",
                    expyear:"",
                    cvv: ""                                                       
                }
                
            });
        </script>
        <!-- /Form Validation -->
        
<?php $this->load->view('includes/footer-common'); ?>