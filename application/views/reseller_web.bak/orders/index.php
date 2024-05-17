<?php 
    if(isset($web_package) && $web_package !=''):
        $_SESSION['web_package']   = $web_package;
        $_SESSION['web_price']     = $web_price; 
    endif;
?>
<?php $this->load->view('includes/reseller_web/header-common'); ?>
		<section id="order-process" class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="clearfix order-stack">
							<h3 class="order-blue">
								Order your website today!
							</h3>
							<p>Need another package also? This order page below will allow you to add any other service we offer.</p>
							<p>Please fill in the details below. It will only take a few minutes of your time. After receiving your order, we will get in touch with a more in-depth questionnaire. This will help you express exactly what you want. The order page here is intended to get things started for you!</p>
							<p>We have an experienced team in handling web design projects. We opt for a simple and effective process.</p>
							<p class="theme-red">The fields marked * are mandatory.</p>
						</div>
						
						<form id="web-order-process" action="<?php echo site_url('reseller_web_orders/extramid'); ?>" method="post" name="web_order_process">
                        
						
						<div class="clearfix order-stack">
							<h4 class="web-form-title">1. <span>Contact Information:</span></h4>
							<ul class="clearfix">
								<li>
									<div class="field-box left">
										<label>Company Name:</label>
									</div>
									<div class="field-box right">
										<input type="text" name="company_name" class="required" value="<?php echo (isset($_SESSION['company_name']))?$_SESSION['company_name']:"" ?>" /><span class="required theme-red">*</span>
										<br />
										<span class="note">Enter the name of the company that the website is being designed for.</span>
									</div>
								</li>
							</ul>
							<h4 class="web-form-title">2. <span>Contact Info:</span></h4>
							<ul class="clearfix">
								<li>
									<div class="field-box left">
										<label>Contact Name:</label>
									</div>
									<div class="field-box right">
										<input type="text" name="contact_info" class="required" value="<?php echo (isset($_SESSION['contact_info']))?$_SESSION['contact_info']:"" ?>"/><span class="required theme-red">*</span>
										<br />
										<span class="note">Enter the full name and phone number of the person responsible for making decisions about the website design.</span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>Email:</label>
									</div>
									<div class="field-box right">
										<input type="text" name="email" class="required email" value="<?php echo (isset($_SESSION['email']))?$_SESSION['email']:"" ?>"/><span class="required theme-red">*</span>
										<br />
										<span class="note">Enter your valid email address.</span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>Contact Phone No:(Optional)</label>
									</div>
									<div class="field-box right">
										<input type="text" name="contact_phone" value="<?php echo (isset($_SESSION['contact_phone']))?$_SESSION['contact_phone']:"" ?>" />
										<br />
										<span class="note"><span class="theme-red">IMPORTANT:</span> this is the number that your website designer will call to have a pre-design consultation with you. </span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>The best time for our web designer to call you?</label>
									</div>
									<div class="field-box right">
										<input type="text" name="best_time" class="required"  value="<?php echo (isset($_SESSION['best_time']))?$_SESSION['best_time']:"" ?>"/><span class="required theme-red">*</span>
										<br />
										<span class="note">Enter the best time of day for the designer to call you. Make sure to include your time zone.</span>
									</div>
								</li>
							</ul>
							<h4 class="web-form-title">3. <span>Basic Website Design Info:</span></h4>
							<ul>
								<li>
									<div class="field-box left">
										<label>Do you have content (text or writing about your company) or images that you want included in your site?</label>
									</div>
									<div class="field-box right">
										<div class="file-choose">
											<!--<span>No file chosen!</span>-->
                                            <input type="file" name="attachment" id="attachment"  />
											<input type="hidden" name="fileList" value="<?php echo (isset($_SESSION['fileList']))?$_SESSION['fileList']:'' ?>" id="fileList" />
										</div>
										<span class="note">No text or images is needed at this stage. We will be in touch with you with more detailed information in this regard.</span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>Do you have a domain name that you will want to use? If so, what is it?</label>
									</div>
									<div class="field-box right">
										<input type="text" name="domain_name"  value="<?php echo (isset($_SESSION['domain_name']))?$_SESSION['domain_name']:"" ?>" />
										<br />
										<span class="note">Enter the domain name that you will want your website located at (like:mycompanyname.com). If you have not already registered a domain name we can help you do that as well.</span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>Do you have any specific ideas for your website? If so please share them here:</label>
									</div>
									<div class="field-box right">
										<input type="text" name="web_idea"  value="<?php echo (isset($_SESSION['web_idea']))?$_SESSION['web_idea']:"" ?>"/>
										<br />
										<span class="note">Briefly explain your ideas for your website, if any.</span>
									</div>
								</li>
							</ul>
							<h4 class="web-form-title">4. <span>Any Comments:</span></h4>
							<ul>
								<li>
									<div class="field-box left">
										<label>Please share your comments (If any):</label>
									</div>
									<div class="field-box right">
										<textarea name="comment" > <?php echo (isset($_SESSION['comment']))?$_SESSION['comment']:"" ?></textarea>
										<br />
										<span class="note">We welcome any comments</span>
									</div>
								</li>
							</ul>
							<h4 class="web-form-title">4. <span>Extra service:</span></h4>
							<ul>
								<li>
									<div class="simple-field-box">
										<span class="theme-blue">Logo Package </span>
										<br />
										<span>Your website will include one concept logo design inclusive of the web package cost. For more design variations to ensure you get the exact logo you need - then order a logo package below:</span>
									</div>
								</li>
								<li>
									<div class="field-box left">
										<label>Logo packages:</label>
									</div>
									<div class="field-box right">
										<select name="logo_package">
											<option value="">None</option>
                                            <option value="<?php echo START_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_LP )?' selected="selected"':""; ?> ><?php echo START_LP; ?></option>
                                            <option value="<?php echo START_PLUS_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == START_PLUS_LP )?' selected="selected"':""; ?>><?php echo START_PLUS_LP; ?></option>
                                            <option value="<?php echo SUPER_START_PLUS_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SUPER_START_PLUS_LP )?' selected="selected"':""; ?>><?php echo SUPER_START_PLUS_LP; ?></option>
                                            <option value="<?php echo SURGE_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_LP )?' selected="selected"':""; ?>><?php echo SURGE_LP; ?></option>
                                            <option value="<?php echo SURGE_PLUS_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SURGE_PLUS_LP )?' selected="selected"':""; ?>><?php echo SURGE_PLUS_LP; ?></option>
                                            <option value="<?php echo SUPER_SURGE_PLUS_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == SUPER_SURGE_PLUS_LP )?' selected="selected"':""; ?>><?php echo SUPER_SURGE_PLUS_LP; ?></option>
                                            <option value="<?php echo EXCEL_LP; ?>" <?php echo(isset($_SESSION['logo_package']) && $_SESSION['logo_package'] == EXCEL_LP )?' selected="selected"':""; ?>><?php echo EXCEL_LP; ?></option>                                            
										</select>
									</div>
								</li>
							</ul>
						</div>
						
						<div class="text-center">
							<p>For more information about the logo packages we offer, then <strong><a href="<?php echo base_url('reseller/packages#package-pg-body'); ?>">click here.</a></strong></p>
							<p class="theme-red">Note: You will not lose the data you have entered above. Click back on your browser to return to this page.</p>
						</div>
						
						
						
						<div class="normal-desc-box text-center">
							<a class="green-btn order-back-btn" href="<?php echo base_url('reseller_web/index') ?>">
								<span data-hover="Back">Back</span>
							</a>
							<button class="green-btn order-submit-btn" type="submit">
								<span data-hover="Continue">Continue</span>
							</button>
						</div>
						<div class="text-center">
							<p class="theme-red">Note: unlike many design firms we provide 100% Money Back Guarantee. No questions asked or fees.</p>
						</div>
						</form>
					</div>
				</div>
			</div>
			
		</section>
        
        <!-- Form Validation -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $('#web-order-process').validate();
            
            $(document).ready(function(){
                $('input,textarea').keyup(function()
                {                    
                    var name  = this.name;
                    var value = this.value;
                    $.post("<?php echo site_url('orders/autosave') ?>",name+'='+value);
                
                }); 
                $('select').change(function()
                {                    
                    var name  = this.name;
                    var value = this.value;
                    $.post("<?php echo site_url('orders/autosave') ?>",name+'='+value);                
                });
            });
        </script>
            <!--  Uplodify  -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.uploadify.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/uploadify.css">
        <script type="text/javascript">
    		<?php $timestamp = time();?>
    		$(function() {
    			$('#attachment').uploadify({
    				'formData'     : {
    					'timestamp' : '<?php echo $timestamp;?>',
    					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
                        'targetFolder':''
    				},
                    height        	: 20,
                    swf           	: '<?php echo base_url() ?>assets/uploadify/uploadify.swf',
                    uploader      	: '<?php echo base_url() ?>assets/uploadify/uploadify.php',
                    width         	: 120,
                    cancelImg 	  	: '<?php echo base_url() ?>assets/uploadify/cancel.png',
                    buttonText 		: 'Attach Files',
                    buttonCursor 	: 'hand',
                    multi			: false,
                    fileTypeDesc 	: 'Custom',
                    fileSizeLimit 	: '3072KB',
                    queueSizeLimit 	: 3,
                    fileTypeExts 	: '*.gif; *.jpg; *.JPEG; *.png; *.doc; *.docx; *.xls; *.xlsx; *.pdf', 
                    checkExisting 	: '<?php echo base_url() ?>assets/uploadify/check-exists.php',
                    onSelect		: function(file){
                        //if($('#fileList').val()=='') return true; else return false;
                        //alert('a');
                        $('.order-submit-btn span').html('Please wait while uploading...');
                        $('.order-submit-btn').attr('disabled','disabled');
                    },
                    /*	//Default as provided by site: ITS ALWAYS SAME, THE ORDER NEEDS TO REMAIN SAME, NO MATTER THE NAME OF VARIABLE!
                        onUploadSuccess : function(file, data, response) {
                    alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                } */
                    onUploadSuccess : function(file, data, response) {	
                        //alert('File: '+file + " data: "+data+' response:'+response);
                        $('#fileList').val('<?php echo base_url() ?>web_images/'+data);
                        $('.order-submit-btn span').html('Continue');
                        $('.order-submit-btn').removeAttr('disabled');
                        
                    }
    			});
    		});
    	</script>
        
        <!--  /Uplodify  -->
        </script>
        <!-- /Form Validation -->
<?php $this->load->view('includes/reseller_web/footer-common'); ?>