                            <script>
                                $(document).ready(function(){
                                    function get_total(){
                                        var total_price = 0;
                                	    $('.package_price').each(function(){
                                	       
                                	       total_price = eval(total_price)+ eval($(this).text());
                                	    });
                                        $('.pormo_update').click(function(){
                                        //alert('promotional');
                                        //alert($('.pcode').val());
                                        $.post("<?php echo site_url('web-site-design/webdesigner-limited-sale/orders/promo') ?>",{pcode:$('.pcode').val()},function(data){
                                            //alert(data);
                                            if(data){
                                                var d = eval('('+data+')');
                                                //alert(data);
                                                if($('.promo_dis').length){}
                                                else{
                                                    $(".calc-box.total").append("<div class='inner-border-box promo_dis' />");
                                                }
                                                $(".calc-box.total").find(".promo_dis").html('<span>Promo Discount </span><span class="pull-right"><?php echo CURRENCY; ?><span class="package_price">'+d.promo_dis+'</span></span>');
                                                
                                                if($('.gross_total2').length){}
                                                else{   
                                                    $(".calc-box.total").append("<div class='inner-border-box gross_total2' />");		  
                                                }
                                                $(".calc-box.total").find(".gross_total2").html('<span>Net Total</span><span class="pull-right"><?php echo CURRENCY; ?><span class="package_price">'+d.price_befor_tax+'</span></span>');
                                                $('.promotional-code-box').html("Please check new price");
                                            }
                                            else{
                                                //alert('false');
                                            }
                                        });                                        
                                    });
                                        
                                        $('#basket_total_price').text(total_price);
                                    }
                                    get_total();  
                                });
                                
                            </script>
                            <div id="floated">
								<div class="yellow-box">
									<div class="stack clearfix">
										<strong>Shopping Basket - Grow Your Business!</strong> <!--<a class="edit-btn pull-right" href="javascript:void(0);">Edit</a>-->
									</div>
									<div class="stack clearfix">
										<div class="calc-box">
											<div class="inner-border-box">
												<span><?php echo $_SESSION['web_package'] ?></span>
												<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['web_price'] ?></span></span>
											</div>
                                            <?php if(isset($_SESSION['logo_package'])): ?>
                                            <div class="inner-border-box">
    											<span><?php echo $_SESSION['logo_package'] ?></span>
    											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['logo_price'] ?></span></span>
    										</div>
                                            <?php endif; ?>
										</div>
										<div class="calc-box total">
											<strong>Total</strong>
											<strong class="pull-right theme-red"><?php echo CURRENCY; ?><span id="basket_total_price">0</span></strong>
										</div>
									</div>
									<div class="stack clearfix">
										<div class="desc pull-left">
											<strong style="color: #55554f;text-decoration: underline;"><?php echo GUARANTEE_DAYS; ?>-Day Unconditional Money Back Guarantee on All Fees Paid!</strong>
											<ul class="theme-blue">
												<li>- No admin fees</li>
												<li>- No questions</li>
												<li>- Just email "refund me"</li>
												<li style="color: #55554f;">- The Best Guarantee in the
	  Logo Industry </li>
											</ul>
										</div>
										<div class="pull-right">
											<img src="assets/images/website-small-clip.jpg" alt="clip picture" />
										</div>
									</div>
									<div class="stack clearfix promotional-code-box no-mar-bottom">
										
										<ul>
											<li>
												<label>Enter Promotional code:</label> 
												<input type="text" name="pcode" class="pcode" value="">
											</li>
											<li>
												<button class="pormo_update" href="javascript:void(0)">Update Price</button>
											</li>
										</ul>
										
									</div>
								</div>
							</div>