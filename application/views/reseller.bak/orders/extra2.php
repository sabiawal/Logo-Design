<?php $this->load->view('includes/reseller/header-common'); ?>
<section id="order-process" class="content">
    <div class="container">
	<div class="row">
	    <section class="green-vertical-divider2 clearfix">
		<div class="col-sm-7">
		    <div class="leftcol">
			<div class="gray-box">
			    <h2 style="color: #2c6ba0;">
				HALF-PRICE
				<span class="sub-title">SPECIALS NOW ON...</span>
			    </h2>
			    <p class="theme-red">
				Hurry. All offers below end @
				<br />
				<?php echo $today; ?> 
			    </p>
			    <p class="theme-blue">
				Did you know that our clients prove a competitive business nature?
				<br />
				Check out some data we have collected...
			    </p>
			    <p class="theme-brown">
				94% select at least one of the services below.
				<br />
				69% select at least two of the services below.
				<br />
				53% select at least three of the services below.
				<br /><br />
				We are proud that it shows our good value.
				<br /><br />
				Don't get left behind, especially in the current economic climate.
				<br /><br />
				Be a serious business person and consider all the branding options open to you now!
			    </p>
			    <p>This will save you time having to purchase the items later.</p>
			    <p class="theme-brown">You need to invest to make it happen.</p>
			</div>
			<!--<form action="" method="post">-->
			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon1"></i> Add an extra 6 logo concepts to your logo package</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$70</span>. Now only <strong>$35</strong></p>
			    <p>You currently have ordered 6 logo concepts. Select the above to receive a total of 12 logo concepts. This will massively increase the creativity and options for you. All services are backed by our <?php echo GUARANTEE_DAYS ?>-Day, 100% Money Back guarantee.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input" name="options1" value="1">
				    <span class="unchk <?php echo (isset($_SESSION['options1'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon2"></i> Get each one of you logos created by a different designer</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$70</span>. Now only <strong>$35</strong></p>
			    <p> You currently have 3 designers assigned to your project. By adding this service you will have 6 designers working on your 6 logo concepts. This will massively increase the creativity and options for you. All services are backed by our <?php echo GUARANTEE_DAYS ?>-Day, 100% Money Back guarantee.
			    </p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options2" value="1">
				    <span class="unchk <?php echo (isset($_SESSION['options2'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon3"></i> Order lifetime file storage</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$50</span>. Now only <strong>$25</strong></p>
			    <p>We save all your design files on our servers for life in case you lose them. Otherwise, if you lose your files you will have to pay and go through a "re-design" process to obtain the files again.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options3" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options3'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon4"></i> Order an animated FLASH logo version</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$172.5,</span>. Now only <strong>$69</strong> (60% OFF)</p> 

			    <p>Make your web site stand out. Receive an animated logo version for your chosen logo that will make your logo flash consistently with a beam of light racing across it.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options4" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options4'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>
            <?php if(!isset($_SESSION['options']) || ($_SESSION['options'] != EXPRESS_DELIVERY && $_SESSION['options'] != BOTH_SERVICES) ): ?>
			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon5"></i> Get your logos within 24hrs</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$78</span>. Now only <strong>$39</strong></p> 

			    <p>Grow your business faster! The designs can be at your fingertips. This express service applies to all logos and stationary ordered. The quality is not affected. We simply prioritise your order. </p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options5" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options5'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>
            <?php endif; ?>
            <?php if(!isset($_SESSION['options']) || ($_SESSION['options'] != BLACK_N_WHITE && $_SESSION['options'] != BOTH_SERVICES) ): ?>
			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon6"></i> Order black and white file logo version</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$58</span>. Now only <strong>$29</strong></p> 

			    <p>Necessary for any print or fax requirements. Recommended for your peace of mind.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options6" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options6'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>
            <?php endif; ?>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon7"></i> Impress with business cards</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$50</span>. Now only <strong>$25</strong></p> 

			    <p>Order 3 business card design concepts.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options7" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options7'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon8"></i> Order letterhead designs</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$62.5</span>. Now only <strong>$25</strong></p> 

			    <p>Order 3 letterhead design concepts.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options8" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options8'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon9"></i> Order envelope designs</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$50</span>. Now only <strong>$25</strong></p> 

			    <p>Order 3 envelope design concepts.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options9" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options9'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon10"></i> Order compliment slip designs</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$50</span>. Now only <strong>$25</strong></p> 

			    <p> Order 3 compliment slip design concepts.</p>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options10" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options10'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon11"></i> Order stationary design bundle</h4>
			    <p class="now-only"><span style="text-decoration: line-through;" class="theme-red">$172.5.,</span>. Now only <strong>$69</strong> (60% OFF)</p>

			    <p>Order 3 design concepts for each of the following:</p>
			    <ul>
				<li>Business cards</li>
				<li>Letterheads</li>
				<li>Compliment slips</li>
			    </ul>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options11" value="1">
				    <span class="unchk <?php echo (isset($_SESSION['options11'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="get-print">
			    <a class="theme-red" href="javascript:void(0);">Get your print now!</a>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-dark-blue"><i class="logo-pak-icon12"></i> Order business card prints now</h4>
			    <div class="lft-spacer">
				<p class="theme-green-style2-conly bold700"><input name="extra_qty12" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options12']) && $_SESSION['options12']) == BUSINESS_CARD_PRINT_250) ? "checked='checked'" : ""; ?> /> 250 business cards (matt) including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$158.,</span> Now only <strong>$79</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty12" class="extra_qty" value="2"  type="radio" <?php echo (isset($_SESSION['options12']) && $_SESSION['options12'] == BUSINESS_CARD_PRINT_500) ? "checked='checked'" : ""; ?>/> 500 business cards (matt) including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$198.,</span> Now only <strong>$99</strong></p>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options12" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options12'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-dark-blue"><i class="logo-pak-icon13"></i> Order letterhead prints now</h4>
			    <div class="lft-spacer">
				<p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_25)) ? "checked='checked'" : ""; ?> /> 25 letterheads including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$98.,</span> Now only <strong>$49</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="2" type="radio" <?php echo (isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_250) ? "checked='checked'" : ""; ?> /> 250 letterheads including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$220.,</span> Now only <strong>$110</strong> (60% OFF)</p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="3" type="radio" <?php echo (isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_1000) ? "checked='checked'" : ""; ?> /> 1000 letterheads including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$398.,</span> Now only <strong>$199</strong></p>

			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options13" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options13'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-dark-blue"><i class="logo-pak-icon14"></i> Order envelope design prints now</h4>
			    <div class="lft-spacer">
				<p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options14']) && $_SESSION['options14'] == '')) ? "checked='checked'" : ""; ?> /> 100 envelopes including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$138.,</span> Now only <strong>$69</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="2" type="radio"/> 250 envelopes including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$220.,</span> Now only <strong>$110</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="3" type="radio"/>1000 envelopes including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$398.,</span> Now only <strong>$199</strong></p>

			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options14" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options14'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-dark-blue"><i class="logo-pak-icon15"></i> Order compliment slip prints now</h4>
			    <div class="lft-spacer">
				<p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="1" type="radio"/>100 compliment slips including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$138.,</span> Now only <strong>$69</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="2" type="radio"/>250 compliment slips including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$198.,</span> Now only <strong>$99</strong></p>
				<p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="2" type="radio"/>1000 compliment slips including free delivery</p>
				<p><span style="text-decoration: line-through;" class="theme-red">$398.,</span> Now only <strong>$199</strong></p>

			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options15" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options15'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon16"></i> Order a Mouse Mat with your personal logo on</h4>
			    <p class="now-only">(free delivery)! <span style="text-decoration: underline;" class="theme-red">$50.,</span>  Now only <strong>$25</strong> Each</p>
			    <div class="lft-spacer">
				<p>Be motivated to grow your business. Motivate you and/or your staff!</p>
				<ul class="form2">
				    <li>
					<label>Quantity: </label>
					<select class="select-qty">
					    <?php for($i=1;$i<=10;$i++):?>
					    <option value="<?php echo $i ?>"><?php echo $i ?></option>
					    <?php endfor; ?>
					</select>
				    </li>
				</ul>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options16" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options16'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon17"></i> Order a custom CAP with your personal logo on</h4>
			    <p class="now-only">(free delivery)! <span style="text-decoration: underline;" class="theme-red">$70.,</span>  Now only <strong>$35</strong> Each</p>
			    <div class="lft-spacer">
				<p>Look dead professional!</p>
				<ul class="form2">
				    <li>
					<label>Quantity: </label>
					<select class="select-qty">
					    <?php for($i=1;$i<=10;$i++):?>
					    <option value="<?php echo $i ?>"><?php echo $i ?></option>
					    <?php endfor; ?>
					</select>
				    </li>
				    <li>
					<label>Colour Options: </label>
					<select class="select-qty">
					    <option>Cap Color - Black</option>
					    <option>Cap Color - White</option>
					</select>
				    </li>
				</ul>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options17" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options17'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon18"></i> Order pens with your personal logo on</h4>
			    <p class="now-only">(free delivery)! <span style="text-decoration: underline;" class="theme-red">$70.,</span>  Now only <strong>$35</strong> Each</p>
			    <div class="lft-spacer">
				<p>5 quality black ink pens with stylish hand grip.</p>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options18" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options18'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon19"></i> Order a cotton carrier bag with your personal logo on</h4>
			    <p class="now-only">(free delivery)! <span style="text-decoration: underline;" class="theme-red">$70.,</span>  Now only <strong>$35</strong> Each</p>
			    <div class="lft-spacer">
				<p>A great way to promote your business, or a useful accessory for personal use. Made from 100% natural 8 oz. (272 g/m2) cotton canvas-great for the environment. Approximate size of a supermarket bag. </p>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options19" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options19'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="white-shade-box">
			    <h4 class="theme-green-style2-conly"><i class="logo-pak-icon20"></i> Order a T-shirt with your personal logo on</h4>
			    <p class="now-only">(free delivery)! <span style="text-decoration: underline;" class="theme-red">$70.,</span>  Now only <strong>$35</strong> Each</p>
			    <div class="lft-spacer">
				<p>
				    Impress friends and family! Order here a 100% cotton white T-shirt with your logo centralised large on the front. 
				</p>
				<table cellpadding="0" cellspacing="0" width="200px">
				    <thead>
					<tr>
					    <td>Size:</td>
					    <td>Quantity:</td>
					</tr>
				    </thead>
				    <tbody>
					<tr>
					    <td>S</td>
					    <td>
						<select class="select-qty">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						</select>
					    </td>
					</tr>
					<tr>
					    <td>M</td>
					    <td>
						<select class="select-qty">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						</select>
					    </td>
					</tr>
					<tr>
					    <td>L</td>
					    <td>
						<select class="select-qty">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						</select>
					    </td>
					</tr>
					<tr>
					    <td>XL</td>
					    <td>
						<select class="select-qty">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						</select>
					    </td>
					</tr>
					<tr>
					    <td>XXL</td>
					    <td>
						<select class="select-qty">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						</select>
					    </td>
					</tr>
				    </tbody>
				</table>
			    </div>
			    <div class="cus-input-shell-cover text-center clearfix">
				<div class="select-txt">Select here</div>
				<div class="custom-input-shell">
				    <input type="checkbox" class="custom-input"  name="options20" value="1">
				    <span class="unchk  <?php echo (isset($_SESSION['options20'])) ? "chk" : ""; ?>"></span></div>
			    </div>
			</div>

			<div class="normal-desc-box text-center">
			    <a href="<?php echo base_url('reseller_orders/extra1'); ?>" class="green-btn order-back-btn">
				<span data-hover="Back">Back</span>
			    </a>
			    <!--<button type="submit" class="green-btn order-submit-btn">
				    <span data-hover="Continue">Continue</span>
			    </button>-->
			    <a class="green-btn order-submit-btn" href="<?php echo base_url('reseller_orders/review'); ?>">
				<span data-hover="Continue">Continue</span>
			    </a>
			</div>
			<!--</form>-->
		    </div>
		</div>

		<div class="col-sm-5">
		    <?php $this->load->view('includes/reseller/logo-shopping-basket'); ?>							
		</div>
	    </section>
	</div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
    	// Basic Shopping Cart Function for order2(extra2) page Starts
    	$(".custom-input-shell").find(".unchk").on("click", function(){
            var val = $(this).prev("input").val();
            var row_class = $(this).prev("input").attr("name");
            var ext_value = 1;     // for optional(cnofigurable)) packages
            var checked_status = 0;  // for default checked value of optional(cnofigurable)) packages
            var childs = $(this).parent().parent().parent().children().next().children("p");
    	    childs.each(function(){
    			if(this.className != ''){
    			   var input = $(this).children('input');
    			    if(input.is(":checked")){
    				ext_value = input.val();
                    checked_status = 1;
    			    }
    			}
    	    });
            
    		var select = $(this).parent().parent().parent().children().next().next().children("ul").children("li");
    		var s = $(this).parent().parent().parent().children().next().children("table").children("tbody").children("tr");
    		
            s.each(function(){
                if(ext_value == 0){
                    ext_value = $(this).children().next().children("select").val();
                }
                else{
                    ext_value = ext_value+':'+$(this).children().next().children("select").val();
                }
    		});
    		
    	    if(select.length > 0){
        		var x = 1;
        		select.each(function(){
        		    var y = $(this).children("select").val();
        		    if(x == 1){
        		        ext_value = y;
        		    }
        		    else{
        			ext_value = ext_value+':'+y;
        		    }
        		    x++;
        		});
    	    }
         
    	    if($(this).hasClass("chk")){
        		$(this).removeClass("chk").prev("input").attr("checked", false);
        		val=0;
    	    }
    	    else{
    		  $(this).addClass("chk").prev("input").attr("checked", true);
    	    }
    	    
    	    $.post("<?php echo site_url('orders/save_extra_options') ?>",{extra_options:row_class,val:val, ext_option:ext_value},function(data){
    		
        		var opt = eval("("+data+")");
        		
        		if(opt.extra_options){
        		    if($('.'+row_class).length){}
        		    else{$(".calc-box.cart").append("<div class='inner-border-box "+row_class+"' />");}
        		    $(".calc-box.cart").find("."+row_class).html('<span>'+opt.extra_options+'</span><span class="pull-right">$<span class="package_price">'+opt.extra_options_price+'</span></span>');
        		}
        		else{$('.'+row_class).remove();}
                
                get_total();
        		
    	    });    
    	});
    	// Basic Shopping Cart Function for order2(extra2) page Ends
    	$('.extra_qty').click(function(){
    	    var row_class = $(this).parent().parent().next().children().next().children('input').attr('name');
    	    var chk_status = $(this).parent().parent().next().children().next().children().next('span');
    	    
    	    var val = 1;
    	    var extra_qty = $(this).val();	    
    		$.post("<?php echo site_url('orders/save_extra_options') ?>",{extra_options:row_class,val:val,extra_qty:extra_qty},function(data){
    		    var opt = eval('('+data+')');
    		    if($('.'+row_class).length){}
    		    else{$(".calc-box.cart").append("<div class='inner-border-box "+row_class+"' />");}
                $(".calc-box.cart").find("."+row_class).html('<span>'+opt.extra_options+'</span><span class="pull-right">$<span class="package_price">'+opt.extra_options_price+'</span></span>');
    		    
                
                var chk = $("input[name='"+row_class+"']").next('span');
                if(chk.hasClass('chk')){}else{chk.addClass('chk');}                
                get_total();                	
    		});        
    	});
    	
    	// Basic Shopping Cart Function for order2(extra2) page Ends
    	$('.select-qty').on('change',function(){    	
    	    var row_class = $(this).parent().parent().parent().next().children().next().children('input').attr('name');
    	    var chk_status = $(this).parent().parent().parent().next().children().next().children().next('span');
    	    //alert(chk_status.hasClass('chk'));
    	    var val = 1;   
    	    var extra_qty = 0;
    	    var selects = $(this).parent().parent().children("li");
    	    var table_selects = $(this).parent().parent().parent().children("tr");
    	   
    	    var increment = 1;
    	    selects.each(function(){
        		var sel_val = $(this).children("select").val();
        		if(increment == 1){
        		  extra_qty = sel_val;
        		}
        		else{
        		   extra_qty = extra_qty+':'+sel_val;
        		}
        		increment++;
    	    })
    	    
    	    if(table_selects.length > 0){
                row_class = $(this).parent().parent().parent().parent().parent().next().children().next().children('input').attr('name');
                chk_status = $(this).parent().parent().parent().parent().parent().next().children().next().children().next('span');    	    
    	    }
    	    
    	    table_selects.each(function(){    		
        		var table_sel_val = $(this).children().next().children("select").val();
        		if(extra_qty == 0){
        		    extra_qty = table_sel_val;
        		}
        		else{
        		   extra_qty = extra_qty+':'+table_sel_val; 
        		}
    	    })
    	    
    	    // to work only option is selected
    	    if(chk_status.hasClass('chk')){
        		$.post("<?php echo site_url('orders/save_extra_options') ?>",{extra_options:row_class,val:val,extra_qty:extra_qty},function(data){
        		    var opt = eval('('+data+')');
        		    $(".calc-box.cart").find("."+row_class).html('<span>'+opt.extra_options+'</span><span class="pull-right">$<span class="package_price">'+opt.extra_options_price+'</span></span>');
        		  
                    get_total();
        		    
        		});
    	    }           
    	});
    });
</script>
<?php $this->load->view('includes/reseller/footer-common'); ?>