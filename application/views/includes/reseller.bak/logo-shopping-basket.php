                            <?php if($this->router->method != 'review'): ?>
                            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/floating.js"></script>
                            
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    // Edit Basket
                                    
                                    $('.edit_basket_list').click(function(){
                                        //alert('edit');
                                        var pac = $('.calc-box.cart .inner-border-box');
                                        pac.each(function(i){
                                            if(i>0){
                                                if($(this).hasClass('remove_items')){
                                                    $(this).removeClass('remove_items');
                                                    $(this).children().next().children('a').hide();
                                                }
                                                else{
                                                    $(this).addClass('remove_items');
                                                    $(this).children().next().children('a').show();
                                                }
                                            }                                            
                                        });
                                        
                                    });
                                    
                                    $('.remove_package').click(function(){
                                        alert('remove');
                                    });
                                    
                                    
                                    //for floating yellow box
                        			/*$(window).scroll(function(){
                        				var winPos = $(this).scrollTop();
                        				if(winPos > 100){
                        					$("#yellow-box-unfloat").hide();
                        				}
                        				else{
                        					$("#yellow-box-unfloat").show();
                        				}
                        			});*/
                        			
                        			floatingMenu.add('floated',  
                                	{  
                        	            targetRight: 0,  
                        	            targetTop: 10,  
                        	            snap: true  
                        	        });
                                    
                                    

                                    
                                });
                                </script>
                                <?php endif; ?>
                                <script type="text/javascript">
                                
                                // To calculate total on page load
                               function get_total(){
                                    var total_price = 0;
                            	    $('.package_price').each(function(){
                            	       // for reselect
                            	       $('.remove_package').hide();
                                       $('.inner-border-box').removeClass('remove_items');
                                       // for reselect
                            	       total_price = eval(total_price)+ eval($(this).text());
                            	    })
                            	
                                                                        
                                    // Buy More Save More
                                    if(total_price >= <?php echo TOTAL_PURCHASE3; ?>){
                                        var purchase_dis_rate   = '<?php echo PURCHASE_DIS_RATE3;?>'; 
                                    }
                                    else if(total_price >= <?php echo TOTAL_PURCHASE2; ?>){
                                        var purchase_dis_rate = '<?php echo PURCHASE_DIS_RATE2;?>'; 
                                    }
                                    else if(total_price >= <?php echo TOTAL_PURCHASE1; ?>){
                                        var purchase_dis_rate = '<?php echo PURCHASE_DIS_RATE1;?>'; 
                                    }
                                    else{
                                        var purchase_dis_rate = 0;
                                    }
                                    //alert(purchase_dis_rate);
                                    var purchase_dis        = (purchase_dis_rate*total_price).toFixed(2);
                                    var net_price           = (total_price - purchase_dis).toFixed(2);
                                    
                                    
                                    // Promotional Code Starts
                                    $('.pormo_update').click(function(){
                                        //alert('promotional');
                                        //alert($('.pcode').val());
                                        $.post("<?php echo site_url('orders/promo') ?>",{pcode:$('.pcode').val()},function(data){
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
                                    // /Promotional Code Ends
                                    //alert(purchase_dis);
                                    $('.purchase_dis, .gross_total').remove();
                                    if(purchase_dis > 0)
                                    {
                                        if($('.purchase_dis').length){}
                                        else{
                                            $(".calc-box.total").prepend("<div class='inner-border-box purchase_dis' />");  
                                        }
                                        $(".calc-box.total").find(".purchase_dis").html('<span>Purchase Discount ('+(purchase_dis_rate*100)+'%)</span><span class="pull-right"><?php echo CURRENCY; ?><span >'+purchase_dis+'</span></span>'); 
                                        if($('.gross_total').length){}
                                        else{
                                            $(".calc-box.total").prepend("<div class='inner-border-box gross_total' />");
                                        } 
                                        $(".calc-box.total").find(".gross_total").html('<span>Gross Total</span><span class="pull-right"><?php echo CURRENCY; ?><span >'+total_price+'</span></span>');   
                                    }
                                    
                                                                        
                                    $('#basket_total_price').text(net_price);
                                }                                
                                window.onload = function() {  
                                  get_total();
                                };
                            </script>
                            
                            <div id="floated">
								<div id="yellow-box-unfloat" class="yellow-box">
									<h2 class="red-bar">Buy More, SAVE MORE!</h2>
									<ul class="red-bar-items">
										<li>spend $100 or more, Save 5%!</li>
										<li>spend $150 or more, Save 10%!</li>
										<li>spend $200 or more, Save 15%!</li>
									</ul>
								</div>
								
								<div id="yellow-box-float" class="yellow-box">
									<div class="stack clearfix">
										<strong>Shopping Basket - Grow Your Business!</strong> <a class="edit-btn pull-right edit_basket_list" href="javascript:void(0);">Edit</a>
									</div>
									<div class="stack clearfix">
										<div class="calc-box  cart">
											<div class="inner-border-box">
    											<span><?php echo $_SESSION['logo_package']; ?></span>
                                                <span><a href='javascript:void(0)' class='remove_package ' ><img src='<?php echo base_url().'assets/images/remove.gif'; ?>' /></a></span>
    											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['logo_price']; ?></span></span>
    										</div>
                                            <?php if(isset($_SESSION['web_package'])): ?>
                                            <div class="inner-border-box">
    											<span><?php echo $_SESSION['web_package'] ?></span>
                                                <span><a href='javascript:void(0)' class='remove_package ' ><img src='<?php echo base_url().'assets/images/remove.gif'; ?>' /></a></span>
    											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo @$_SESSION['web'] ?></span></span>
    										</div>
                                            <?php endif; ?>
                                            <?php if(isset($_SESSION['brouchure_package'])): ?>
                                            <div class="inner-border-box">
    											<span><?php echo $_SESSION['brouchure_package'] ?></span>
                                                <span><a href='javascript:void(0)' class='remove_package ' ><img src='<?php echo base_url().'assets/images/remove.gif'; ?>' /></a></span>
    											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['brouchure'] ?></span></span>
    										</div>
                                            <?php endif; ?>
                                            <?php if(isset($_SESSION['options'])): ?>
                                            <div class="inner-border-box options">
    											<span><?php echo $_SESSION['options'] ?></span>
                                                <span><a href='javascript:void(0)' class='remove_package ' ><img src='<?php echo base_url().'assets/images/remove.gif'; ?>' /></a></span>
    											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['options_price'] ?></span></span>
    										</div>
                                            <?php endif; ?>
                                            
                                            <?php 
                                            for($i=1;$i<=20;$i++){
                                                if(isset($_SESSION['options'.$i]) && $_SESSION['options'.$i] !=''): ?>
                                                    <div class="inner-border-box <?php echo 'options'.$i; ?>">
            											<span><?php echo $_SESSION['options'.$i] ?></span>
                                                        <span><a href='javascript:void(0)' class='remove_package ' ><img src='<?php echo base_url().'assets/images/remove.gif'; ?>' /></a></span>
            											<span class="pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['options'.$i.'_price'] ?></span></span>
            										</div>  
                                            <?php
                                                endif;
                                            }
                                            ?>
										</div>
										<div class="calc-box total">
											<strong>Total</strong>
											<strong class="pull-right theme-red"><?php echo CURRENCY; ?><span id="basket_total_price">0</span></strong>
										</div>
									</div>
									<div class="stack clearfix">
										<strong>Re-select the Items below</strong>
										<div style="background: #ffffff;height: 8px;"></div>
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
                                    <?php if($this->router->method == 'review'): ?>
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
                                    
                                    <?php endif; ?>
								</div>
							</div>