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
                            <?php if (SHOW_OFFER_DATE): ?>
                                <p class="theme-red">
                                    Hurry. All offers below end @
                                    <br />
                                    <?php echo $today; ?> 
                                </p>
                            <?php endif; ?>
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
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?>
                                    <span style="text-decoration: line-through;" class="theme-red">
                                        <?php echo CURRENCY . SIX_LOGO_CONCEPT_P_R ?></span>.<?php endif; ?>
                                Now only <strong><?php echo CURRENCY . SIX_LOGO_CONCEPT_P ?></strong>
                            </p>
                            <p>You currently have ordered <?php
                                if ($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3') {
                                    echo "6";
                                } else {
                                    echo "12";
                                }
                                ?> logo concepts. Select the above to receive a total of <?php
                                if ($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3') {
                                    echo "12";
                                } else {
                                    echo "18";
                                }
                                ?> logo concepts. 
                                This will massively increase the creativity and options for you. 
                                All services are backed by our <?php echo GUARANTEE_DAYS ?>-Day, 100% Money Back guarantee.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input" name="options1" value="1" <?php echo (isset($_SESSION['options1'])) ? 'checked="checked"' : ''; ?>>
                                    <span class="unchk <?php echo (isset($_SESSION['options1'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon2"></i> Get each one of your logos created by a different designer</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LOGO_BY_DIFFERENT_DESIGNER_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . LOGO_BY_DIFFERENT_DESIGNER_P ?></strong></p>
                            <p> You currently have <?php
                                if ($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3') {
                                    echo "3";
                                } else {
                                    echo "6";
                                }
                                ?> designers assigned to your project. By adding this service you will have <?php
                                if ($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3') {
                                    echo "6";
                                } else {
                                    echo "12";
                                }
                                ?> designers working on your <span id="logo_concept"><?php
                                if ($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3') {
                                    if (isset($_SESSION['options1'])) {
                                        echo "12";
                                    } else {
                                        echo "6";
                                    }
                                } else {
                                    if (isset($_SESSION['options1'])) {
                                        echo "18";
                                    } else {
                                        echo "12";
                                    }
                                }
                                ?></span> logo concepts. This will massively increase the creativity and options for you. All services are backed by our <?php echo GUARANTEE_DAYS ?>-Day, 100% Money Back guarantee.
                            </p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options2" value="1" <?php echo (isset($_SESSION['options2'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk <?php echo (isset($_SESSION['options2'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon3"></i> Order lifetime file storage</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LIFE_TIME_FILE_STORAGE_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . LIFE_TIME_FILE_STORAGE_P ?></strong></p>
                            <p>We save all your design files on our servers for life in case you lose them. Otherwise, if you lose your files you will have to pay and go through a "re-design" process to obtain the files again.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options3" value="1" <?php echo (isset($_SESSION['options3'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options3'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon4"></i> Order an animated FLASH logo version</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . ANIMATED_FLASH_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . ANIMATED_FLASH_P ?></strong> (60% OFF)</p> 

                            <p>Make your web site stand out. Receive an animated logo version for your chosen logo that will make your logo flash consistently with a beam of light racing across it.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options4" value="1" <?php echo (isset($_SESSION['options4'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options4'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>
                        <?php if (!isset($_SESSION['options']) || ($_SESSION['options'] != EXPRESS_DELIVERY && $_SESSION['options'] != BOTH_SERVICES)): ?>
                            <div class="white-shade-box">
                                <h4 class="theme-green-style2-conly"><i class="logo-pak-icon5"></i> Get your logos within 24hrs</h4>
                                <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . EXPRESS_DELIVERY_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . LOGO_WITHIN_24_HOUR_P ?></strong></p> 

                                <p>Grow your business faster! The designs can be at your fingertips. This express service applies to all logos and stationary ordered. The quality is not affected. We simply prioritise your order. </p>
                                <div class="cus-input-shell-cover text-center clearfix">
                                    <div class="select-txt">Select here</div>
                                    <div class="custom-input-shell">
                                        <input type="checkbox" class="custom-input"  name="options5" value="1" <?php echo (isset($_SESSION['options5'])) ? "checked='checked'" : ""; ?>>
                                        <span class="unchk  <?php echo (isset($_SESSION['options5'])) ? "chk" : ""; ?>"></span></div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!isset($_SESSION['options']) || ($_SESSION['options'] != BLACK_N_WHITE && $_SESSION['options'] != BOTH_SERVICES)): ?>
                            <div class="white-shade-box">
                                <h4 class="theme-green-style2-conly"><i class="logo-pak-icon6"></i> Order black and white file logo version</h4>
                                <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . BLACK_N_WHITE_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . BLACK_N_WHITE_FILE_LOGO_P ?></strong></p> 

                                <p>Necessary for any print or fax requirements. Recommended for your peace of mind.</p>
                                <div class="cus-input-shell-cover text-center clearfix">
                                    <div class="select-txt">Select here</div>
                                    <div class="custom-input-shell">
                                        <input type="checkbox" class="custom-input"  name="options6" value="1" <?php echo (isset($_SESSION['options6'])) ? "checked='checked'" : ""; ?>>
                                        <span class="unchk  <?php echo (isset($_SESSION['options6'])) ? "chk" : ""; ?>"></span></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon7"></i> Impress with business cards</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . IMPRESS_WITH_BUSINESS_CARD_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . IMPRESS_WITH_BUSINESS_CARD_P ?></strong></p> 

                            <p>Order 3 business card design concepts.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options7" value="1" <?php echo (isset($_SESSION['options7'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options7'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon8"></i> Order letterhead designs</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LETTER_HEAD_P_R ?></span>. <?php endif; ?>Now only <strong><?php echo CURRENCY . LETTER_HEAD_P ?></strong></p> 

                            <p>Order 3 letterhead design concepts.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options8" value="1" <?php echo (isset($_SESSION['options8'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options8'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon9"></i> Order envelope designs</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . ENVELOPE_DESIGN_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . ENVELOPE_DESIGN_P ?></strong></p> 

                            <p>Order 3 envelope design concepts.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options9" value="1" <?php echo (isset($_SESSION['options9'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options9'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon10"></i> Order compliment slip designs</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . COMPLIMENT_SLIP_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . COMPLIMENT_SLIP_P ?></strong></p> 

                            <p> Order 3 compliment slip design concepts.</p>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options10" value="1" <?php echo (isset($_SESSION['options10'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options10'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon11"></i> Order stationary design bundle</h4>
                            <p class="now-only"><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . STATIONARY_DESIGN_BUNDLE_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . STATIONARY_DESIGN_BUNDLE_P ?></strong> (60% OFF)</p>

                            <p>Order 3 design concepts for each of the following:</p>
                            <ul>
                                <li>Business cards</li>
                                <li>Letterheads</li>
                                <li>Compliment slips</li>
                            </ul>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options11" value="1" <?php echo (isset($_SESSION['options11'])) ? "checked='checked'" : ""; ?>>
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
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . BUSINESS_CARD_PRINT_250_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . BUSINESS_CARD_PRINT_250_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty12" class="extra_qty" value="2"  type="radio" <?php echo (isset($_SESSION['options12']) && $_SESSION['options12'] == BUSINESS_CARD_PRINT_500) ? "checked='checked'" : ""; ?>/> 500 business cards (matt) including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . BUSINESS_CARD_PRINT_500_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . BUSINESS_CARD_PRINT_500_P ?></strong></p>
                            </div>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options12" value="1" <?php echo (isset($_SESSION['options12'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options12'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-dark-blue"><i class="logo-pak-icon13"></i> Order letterhead prints now</h4>
                            <div class="lft-spacer">
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_25)) ? "checked='checked'" : ""; ?> /> 25 letterheads including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LETTER_HEAD_PRINT_25_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . LETTER_HEAD_PRINT_25_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="2" type="radio" <?php echo (isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_250) ? "checked='checked'" : ""; ?> /> 250 letterheads including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LETTER_HEAD_PRINT_250_P_R ?></span>. <?php endif; ?>Now only <strong><?php echo CURRENCY . LETTER_HEAD_PRINT_250_P ?></strong> (60% OFF)</p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty13" class="extra_qty" value="3" type="radio" <?php echo (isset($_SESSION['options13']) && $_SESSION['options13'] == LETTER_HEAD_PRINT_1000) ? "checked='checked'" : ""; ?> /> 1000 letterheads including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . LETTER_HEAD_PRINT_1000_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . LETTER_HEAD_PRINT_1000_P ?></strong></p>

                            </div>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options13" value="1" <?php echo (isset($_SESSION['options13'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options13'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-dark-blue"><i class="logo-pak-icon14"></i> Order envelope design prints now</h4>
                            <div class="lft-spacer">
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options14']) && $_SESSION['options14'] == ENVELOPE_DESIGN_PRINT_100)) ? "checked='checked'" : ""; ?> /> 100 envelopes including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_100_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_100_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="2" type="radio" <?php echo ((isset($_SESSION['options14']) && $_SESSION['options14'] == ENVELOPE_DESIGN_PRINT_250)) ? "checked='checked'" : ""; ?>/> 250 envelopes including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_250_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_250_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty14" class="extra_qty" value="3" type="radio" <?php echo ((isset($_SESSION['options14']) && $_SESSION['options14'] == ENVELOPE_DESIGN_PRINT_1000)) ? "checked='checked'" : ""; ?>/>1000 envelopes including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_1000_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . ENVELOPE_DESIGN_PRINT_1000_P ?></strong></p>

                            </div>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options14" value="1" <?php echo (isset($_SESSION['options14'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options14'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-dark-blue"><i class="logo-pak-icon15"></i> Order compliment slip prints now</h4>
                            <div class="lft-spacer">
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="1" type="radio" <?php echo ((isset($_SESSION['options15']) && $_SESSION['options15'] == COMPLIMENT_SLIP_PRINT_100)) ? "checked='checked'" : ""; ?>/>100 compliment slips including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_100_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_100_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="2" type="radio" <?php echo ((isset($_SESSION['options15']) && $_SESSION['options15'] == COMPLIMENT_SLIP_PRINT_250)) ? "checked='checked'" : ""; ?>/>250 compliment slips including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_250_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_250_P ?></strong></p>
                                <p class="theme-green-style2-conly bold700"><input name="extra_qty15" class="extra_qty" value="3" type="radio" <?php echo ((isset($_SESSION['options15']) && $_SESSION['options15'] == COMPLIMENT_SLIP_PRINT_1000)) ? "checked='checked'" : ""; ?>/>1000 compliment slips including free delivery</p>
                                <p><?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: line-through;" class="theme-red"><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_1000_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . COMPLIMENT_SLIP_PRINT_1000_P ?></strong></p>

                            </div>
                            <div class="cus-input-shell-cover text-center clearfix">
                                <div class="select-txt">Select here</div>
                                <div class="custom-input-shell">
                                    <input type="checkbox" class="custom-input"  name="options15" value="1" <?php echo (isset($_SESSION['options15'])) ? "checked='checked'" : ""; ?>>
                                    <span class="unchk  <?php echo (isset($_SESSION['options15'])) ? "chk" : ""; ?>"></span></div>
                            </div>
                        </div>

                        <div class="white-shade-box">
                            <h4 class="theme-green-style2-conly"><i class="logo-pak-icon16"></i> Order a Mouse Mat with your personal logo on</h4>
                            <p class="now-only">(free delivery)! <?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: underline;" class="theme-red"><?php echo CURRENCY . MOUSE_MAT_WITH_LOGO_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . MOUSE_MAT_WITH_LOGO_P ?></strong> Each</p>
                            <div class="lft-spacer">
                                <p>Be motivated to grow your business. Motivate you and/or your staff!</p>
                                <ul class="form2">
                                    <li>
                                        <label>Quantity: </label>
                                        <select class="select-qty">                                            
                                            <?php for ($i = 1; $i <= 10; $i++): ?>
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
                            <p class="now-only">(free delivery)! <?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: underline;" class="theme-red"><?php echo CURRENCY . CAP_WITH_LOGO_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . CAP_WITH_LOGO_P ?></strong> Each</p>
                            <div class="lft-spacer">
                                <p>Look dead professional!</p>
                                <ul class="form2">
                                    <li>
                                        <label>Quantity: </label>
                                        <select class="select-qty">
                                            <?php for ($i = 1; $i <= 10; $i++): ?>
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
                            <p class="now-only">(free delivery)! <?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: underline;" class="theme-red"><?php echo CURRENCY . PEN_WITH_LOGO_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . PEN_WITH_LOGO_P ?></strong> Each</p>
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
                            <p class="now-only">(free delivery)! <?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: underline;" class="theme-red"><?php echo CURRENCY . BAG_WITH_LOGO_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . BAG_WITH_LOGO_P ?></strong> Each</p>
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
                            <p class="now-only">(free delivery)! <?php if (SHOW_REGULAR_PRICE): ?><span style="text-decoration: underline;" class="theme-red"><?php echo CURRENCY . TSHIRT_WITH_LOGO_P_R ?></span>.<?php endif; ?> Now only <strong><?php echo CURRENCY . TSHIRT_WITH_LOGO_P ?></strong> Each</p>
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
                                                    <option value="0">0</option>
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>
                                                <select class="select-qty">
                                                    <option value="0">0</option>
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
                                                    <option value="0">0</option>
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
                                                    <option value="0">0</option>
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
                                                    <option value="0">0</option>
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
    $(document).ready(function () {
        // Basic Shopping Cart Function for order2(extra2) page Starts

        $(".custom-input-shell").find(".unchk").on("click", function () {
            check_uncheck($(this));
        });
        /*  function check_uncheck($this) {
         var val = $this.prev("input").val();
         var row_class = $this.prev("input").attr("name");            
         var ext_value = 1;     // for optional(cnofigurable)) packages
         var checked_status = 0;  // for default checked value of optional(cnofigurable)) packages
         //var childs = $this.parent().parent().parent().children().next().children("p");
         var childs = $this.parent().parent().parent().find('p');
         if (childs.length) {
         ext_value = childs.find('input:checked').val();
         checked_status = 1;
         }
         var select = $this.parent().parent().parent().children().next().next().children("ul").children("li");
         var s = $this.parent().parent().parent().children().next().children("table").children("tbody").children("tr");
         if (s.length) {
         ext_value = 0;
         s.each(function () {
         if (ext_value == 0) {
         ext_value = $(this).children().next().children("select").val();
         }
         else {
         ext_value = ext_value + ':' + $(this).children().next().children("select").val();
         }
         });
         }
         
         if (select.length > 0) {
         var x = 1;
         select.each(function () {
         var y = $(this).children("select").val();
         if (x == 1) {
         ext_value = y;
         }
         else {
         ext_value = ext_value + ':' + y;
         }
         x++;
         });
         }
         
         if ($this.hasClass("chk")) {
         $this.removeClass("chk").prev("input").attr("checked", false);
         val = 0;
         }
         else {
         $this.addClass("chk").prev("input").attr("checked", true);
         }
         
         $.post("<?php //echo site_url('reseller_orders/save_extra_options')    ?>", {extra_options: row_class, val: val, ext_option: ext_value}, function (data) {
         
         var opt = eval("(" + data + ")");
         
         if (opt.extra_options) {
         if ($('.' + row_class).length) {
         }
         else {
         $(".calc-box.cart").append("<div class='inner-border-box " + row_class + " row' />");
         }
         $(".calc-box.cart").find("." + row_class).html('<span class="col-sm-8">' + opt.extra_options + '</span><span class="col-sm-2"><a href="javascript:void(0)" class="remove_package"  id="' + row_class + '___' + opt.extra_options + '___' + row_class + '_price___' + opt.extra_options_price + '" style="display:none"><img src="<?php echo base_url() . "assets/images/remove.gif"; ?>" /></a></span><span class="col-sm-2 pull-right">' + '<?php echo CURRENCY; ?>' + '<span class="package_price">' + opt.extra_options_price + '</span></span>');
         
         $('.re_' + row_class).remove(); //removing item form reselect section if there is current item
         }
         else {
         $('.' + row_class).remove();
         }
         
         get_total();
         
         });
         
         }*/

        function check_uncheck($this) {
            var val = $this.prev("input").val();
            var row_class = $this.prev("input").attr("name");
            var ext_value = 1;     // for optional(cnofigurable)) packages
            var checked_status = 0;  // for default checked value of optional(cnofigurable)) packages

            var name_input = row_class;
            if (name_input == 'options1') {

                if (!$this.prev('input').is(':checked')) {
                    $("#logo_concept").text(parseInt($("#logo_concept").text()) + parseInt(6));
                }
                else {
                    $("#logo_concept").text(parseInt($("#logo_concept").text()) - parseInt(6));
                }
            }

            if (name_input == 'options11') {
                if ($this.prev('input:checked')) {
                    $("input[name='options10']:checked,input[name='options8']:checked,input[name='options7']:checked").next().trigger('click');
                }
            }

            if (((name_input == 'options10') || (name_input == 'options8') || (name_input == 'options7')) && $("input[name='options11']:checked") && !$this.prev('input').is(':checked')) {
                $("input[name='options11']:checked").next().trigger('click');
            }

            if (name_input == 'options12' || name_input == 'options13' || name_input == 'options14' || name_input == 'options15') {
                var title_of_option = $this.parent().parent().siblings('h4').text();
                if ($this.prev('input').is(':checked')) {
                    $this.parent().parent().prev('div').find('input:checked').each(function () {
                        $(this).removeAttr('checked');

                    });
                }
                else {
                    var as = 0;
                    $this.parent().parent().prev('div').find('input').each(function () {
                        if ($(this).is(':checked')) {
                            as++;
                        }
                    });
                    if (as <= 0) {
                        alert("Please select an option in \n" + title_of_option);
                        //alert(as);
                        return false;
                    }
                }
            }


            //var childs = $this.parent().parent().parent().children().next().children("p");
            var childs = $this.parent().parent().parent().find('p');
            if (childs.length) {
                ext_value = childs.find('input:checked').val();
                checked_status = 1;
            }
            var select = $this.parent().parent().parent().children().next().next().children("ul").children("li");
            var s = $this.parent().parent().parent().children().next().children("table").children("tbody").children("tr");
            if (s.length) {
                ext_value = 0;
                s.each(function () {
                    if (ext_value == 0) {
                        ext_value = $(this).children().next().children("select").val();
                    }
                    else {
                        ext_value = ext_value + ':' + $(this).children().next().children("select").val();
                    }
                });
            }

            if (select.length > 0) {
                var x = 1;
                select.each(function () {
                    var y = $(this).children("select").val();
                    if (x == 1) {
                        ext_value = y;
                    }
                    else {
                        ext_value = ext_value + ':' + y;
                    }
                    x++;
                });
            }

            if ($this.hasClass("chk")) {
                $this.removeClass("chk").prev("input").attr("checked", false);
                val = 0;
            }
            else {
                $this.addClass("chk").prev("input").attr("checked", true);
            }

            $.post("<?php echo site_url('reseller_orders/save_extra_options') ?>", {extra_options: row_class, val: val, ext_option: ext_value}, function (data) {

                var opt = eval("(" + data + ")");

                if (opt.extra_options) {
                    if ($('.' + row_class).length) {
                    }
                    else {
                        $(".calc-box.cart").append("<div class='inner-border-box " + row_class + " row' />");
                    }
                    $(".calc-box.cart").find("." + row_class).html('<span class="col-sm-8">' + opt.extra_options + '</span><span class="col-sm-2"><a href="javascript:void(0)" class="remove_package"  id="' + row_class + '___' + opt.extra_options + '___' + row_class + '_price___' + opt.extra_options_price + '" style="display:none"><img src="<?php echo base_url() . "assets/images/remove.gif"; ?>" /></a></span><span class="col-sm-2 pull-right">' + '<?php echo CURRENCY; ?>' + '<span class="package_price">' + opt.extra_options_price + '</span></span>');

                    $('.re_' + row_class).remove(); //removing item form reselect section if there is current item
                }
                else {
                    $('.' + row_class).remove();
                }

                get_total();

            });

        }

        // Basic Shopping Cart Function for order2(extra2) page Ends
        $('.extra_qty').click(function () {
            var row_class = $(this).parent().parent().next().children().next().children('input').attr('name');
            var chk_status = $(this).parent().parent().next().children().next().children().next('span');
            $(this).parent().parent().find('input').each(function () {
                $(this).removeAttr('checked')

            });
            $(this).attr('checked', 'checked');
            $(this).parent().parent().parent().find('.custom-input-shell input').attr('checked', 'checked');
            var val = 1;
            var extra_qty = $(this).val();
            $.post("<?php echo site_url('reseller_orders/save_extra_options') ?>", {extra_options: row_class, val: val, extra_qty: extra_qty}, function (data) {
                var opt = eval('(' + data + ')');
                if ($('.' + row_class).length) {
                }
                else {
                    $(".calc-box.cart").append("<div class='inner-border-box " + row_class + " row' />");
                }
                $(".calc-box.cart").find("." + row_class).html('<span class="col-sm-8">' + opt.extra_options + '</span><span class="col-sm-2"><a style="" id="' + row_class + '___' + opt.extra_options + '___' + row_class + '_price___' + opt.extra_options_price + '" class="remove_package" href="javascript:void(0)"><img src="<?php echo base_url('assets/images/remove.gif'); ?>"></a></span><span class="col-sm-2 pull-right">$<span class="package_price">' + opt.extra_options_price + '</span></span>');


                var chk = $("input[name='" + row_class + "']").next('span');
                if (chk.hasClass('chk')) {
                } else {
                    chk.addClass('chk');
                }
                get_total();
            });
        });

        // Basic Shopping Cart Function for order2(extra2) page Ends
        $('.select-qty').on('change', function () {
            var row_class = $(this).parent().parent().parent().next().children().next().children('input').attr('name');
            var chk_status = $(this).parent().parent().parent().next().children().next().children().next('span');
            $(this).parent().parent().next('div').find('input').attr('checked', 'checked');
            var val = 1;
            var extra_qty = 0;
            var selects = $(this).parent().parent().children("li");
            var table_selects = $(this).parent().parent().parent().children("tr");

            var increment = 1;
            selects.each(function () {
                var sel_val = $(this).children("select").val();
                if (increment == 1) {
                    extra_qty = sel_val;
                }
                else {
                    extra_qty = extra_qty + ':' + sel_val;
                }
                increment++;
            })

            if (table_selects.length > 0) {
                row_class = $(this).parent().parent().parent().parent().parent().next().children().next().children('input').attr('name');
                chk_status = $(this).parent().parent().parent().parent().parent().next().children().next().children().next('span');
            }

            table_selects.each(function () {
                var table_sel_val = $(this).children().next().children("select").val();
                if (extra_qty == 0) {
                    extra_qty = table_sel_val;
                }
                else {
                    extra_qty = extra_qty + ':' + table_sel_val;
                }
            })
            // to work only option is selected
            if (chk_status.hasClass('chk')) {
                $.post("<?php echo site_url('orders/save_extra_options') ?>", {extra_options: row_class, val: val, extra_qty: extra_qty}, function (data) {
                    var opt = eval('(' + data + ')');
                    $(".calc-box.cart").find("." + row_class).html('<span class="col-sm-8">' + opt.extra_options + '</span><span class="col-sm-2"><a href="javascript:void(0)" class="remove_package"  id="' + row_class + '___' + opt.extra_options + '___' + row_class + '_price___' + opt.extra_options_price + '" style="display:none"><img src="<?php echo base_url() . "assets/images/remove.gif"; ?>" /></a></span><span class="col-sm-2 pull-right">$<span class="package_price">' + opt.extra_options_price + '</span></span>');

                    get_total();

                });

                if (extra_qty == 0) {
                    check_uncheck(chk_status);
                    table_selects.children().next().children("select:first").val(1);
                }
            }
        });
    });
</script>
<?php $this->load->view('includes/reseller/footer-common'); ?>
<?php
//echo "<pre>"; print_r($_SESSION);?>