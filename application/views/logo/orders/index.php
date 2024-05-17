<?php
if (isset($logo_package) && $logo_package != ''):
    $_SESSION['logo_package'] = $logo_package;
    $_SESSION['logo_price'] = $logo_price;
    $_SESSION['p_index'] = $p_index;
endif;
//$_SESSION['logo_price']     = $p_index; 
/* echo"<pre>"; print_r($_SESSION);
  die; */
?>
<?php $this->load->view('includes/header-common'); ?>
<section id="order-process" class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="clearfix order-stack">
                    <h3 class="order-blue">
                        Your order detail
                        <br />
                        <?php echo $_SESSION['logo_package'] . " " . CURRENCY . $_SESSION['logo_price']; ?>

                        <?php if (isset($_SESSION['poptions_pack' . $p_index])) {
                            echo '<br />' . $_SESSION['poptions_pack' . $p_index] . " " . CURRENCY . $_SESSION['poptions_price' . $p_index];
                        } ?>

                        <br />Total: 
                        <?php
                        if (isset($_SESSION['poptions_pack' . $p_index])) {
                            echo CURRENCY . ($_SESSION['poptions_price' . $p_index] + $_SESSION['logo_price']);
                        } else {
                            echo CURRENCY . $_SESSION['logo_price'];
                        }
                        ?>
                    </h3>
                    <ul class="tick">
                        <li>This order page below will allow you to add any other service we offer .i.e web design, brochure design and any others.</li>
                        <li>We provide a simple one page order form that takes only 3 minutes to fill in.</li>
                        <li>You can write as little brief or as much detail as you choose.</li>
                        <!--<li>Upon the successful completion of your ordering process, your initial logo samples will be delivered to you in 2 to 3 days</li>-->
                        <li>Your logo samples will be delivered to you within 24 to 72 hours</li>
                    </ul>
                </div>

                <form action="<?php echo site_url('orders/extramid'); ?>" method="post" name="order_detail" id="order_detail">
                    <input type="hidden" name="pack_id" value="<?php echo $p_index; ?>"/>

                    <div class="clearfix order-stack">
                        <h4 class="gray-bg-title">Contact Information</h4>
                        <ul class="form1">
                            <li>
                                <label>First Name:<span class="required theme-red">*</span></label>
                                <input type="text" name="fname" value="<?php echo (isset($_SESSION['fname'])) ? $_SESSION['fname'] : ''; ?>"  class="required"  />
                            </li>
                            <li>
                                <label>Last Name:<span class="required theme-red">*</span></label>
                                <input type="text" name="lname" value="<?php echo (isset($_SESSION['lname'])) ? $_SESSION['lname'] : ''; ?>"   class="required"   />
                            </li>
                            <li>
                                <label>Company:<span class="required theme-red">*</span></label>
                                <input type="text" name="company_name" value="<?php echo (isset($_SESSION['company_name'])) ? $_SESSION['company_name'] : ''; ?>"   class="required"  />
                            </li>
                            <li>
                                <label>Phone:</label>
                                <input type="text" name="phone_no" value="<?php echo (isset($_SESSION['phone_no'])) ? $_SESSION['phone_no'] : ''; ?>"  />
                            </li>
                            <li>
                                <label>Email:<span class="required theme-red">*</span></label>
                                <input type="text" name="email_id" value="<?php echo (isset($_SESSION['email_id'])) ? $_SESSION['email_id'] : ''; ?>"   class="required" />
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix order-stack">
                        <h4 class="gray-bg-title">Requirements</h4>
                        <ul class="form1 label-big">
                            <li>
                                <label>Exact name to be used in your logo:<span class="required theme-red">*</span></label>
                                <input type="text" name="cmp_logo_name" value="<?php echo (isset($_SESSION['cmp_logo_name'])) ? $_SESSION['cmp_logo_name'] : ''; ?>"   class="required" />
                            </li>
                            <li>
                                <label>Tagline to be used in your logo (if any):</label>
                                <input type="text" name="tagline" value="<?php echo (isset($_SESSION['tagline'])) ? $_SESSION['tagline'] : ''; ?>" />
                            </li>
                            <li>
                                <label>
                                    Describe your business or organization.<span class="required theme-red">*</span>
                                    <br />
                                    What is your primary activity, philosophy, style
                                    <br />
                                    (conservative, funky, modern, traditional etc.), goals, and 
                                    <br />
                                    anything else we should know:
                                </label>
                                <textarea name="business_detail"   class="required"><?php echo (isset($_SESSION['business_detail'])) ? $_SESSION['business_detail'] : ''; ?> </textarea>
                            </li>
                            <li>
                                <label>
                                    The colors you would like to see in your logo (select 
                                    <br />
                                    from predefined colors or enter your own if you don't 
                                    <br />
                                    see them here):
                                </label>
                                <div class="multi-items">
                                    <div>
                                        <div class="clearfix">
                                            <span class="color_picker" title="CC0000" >dark red</span>
                                            <span class="color_picker" title="FF0000" >red</span>
                                            <span class="color_picker" title="FF6600" >dark orange</span>
                                            <span class="color_picker" title="FF9900" >orange</span>
                                            <span class="color_picker" title="FFCC00" >yellow</span>
                                            <span class="color_picker" title="FFFF00" >lemon yellow</span>
                                            <span class="color_picker" title="CCFF00" >alien green</span>
                                            <span class="color_picker" title="00FF00" >lime green</span>
                                            <span class="color_picker" title="1CB900" >green</span>
                                            <span class="color_picker" title="1F8F24" >dark green</span>
                                            <span class="color_picker" title="00FF99" >aquamarine</span>
                                            <span class="color_picker" title="00CC99" >dark aquamarine</span>
                                            <span class="color_picker" title="00FFFF" >cyan blue</span>
                                            <span class="color_picker" title="0099FF" >baby blue</span>
                                            <span class="color_picker" title="0066CC" >royal blue</span>
                                            <span class="color_picker" title="0005D9" >blue</span><br />    											

                                            <span class="color_picker" title="000000" >black</span>
                                            <span class="color_picker" title="333333" >dark gray</span>
                                            <span class="color_picker" title="666666" >gray</span>
                                            <span class="color_picker" title="999999" >silver gray</span>
                                            <span class="color_picker" title="CCCCCC" >light gray</span>
                                            <span class="color_picker" title="FFFFFF" >white</span>
                                            <span class="color_picker" title="996600" >brown</span>
                                            <span class="color_picker" title="CC9900" >golden brown</span>
                                            <span class="color_picker" title="993333" >maroon</span>
                                            <span class="color_picker" title="CC3366" >violet red</span>
                                            <span class="color_picker" title="FF3399" >fuschia</span>
                                            <span class="color_picker" title="CC66CC" >violet</span>
                                            <span class="color_picker" title="9933FF" >purple</span>
                                            <span class="color_picker" title="6633CC" >violet blue</span>
                                            <span class="color_picker" title="6666CC" >slate blue</span>
                                            <span class="color_picker" title="003399" >navy blue</span>    											
                                        </div>
                                        <span class="selected_color">Click on the color to choose it!</span>
                                        <input type="hidden" name="m5_colors"  value="" />
                                    </div>

                                    <br />
                                    <div>
                                        <span>Other Colors:</span>
                                        <br />
                                        <textarea name="colors"><?php echo (isset($_SESSION['colors'])) ? $_SESSION['colors'] : ""; ?></textarea>
                                    </div>
                                    <div>
                                        <input type="checkbox"/><span> I leave this to designer</span>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <label>
                                    Are there any colors you hate so much that you do not 
                                    <br />
                                    want to see them in your logo?
                                </label>
                                <div class="multi-items">                                    
                                    <div>
                                        <div class="clearfix">
                                            <span class="color_picker" title="CC0000" >dark red</span>
                                            <span class="color_picker" title="FF0000" >red</span>
                                            <span class="color_picker" title="FF6600" >dark orange</span>
                                            <span class="color_picker" title="FF9900" >orange</span>
                                            <span class="color_picker" title="FFCC00" >yellow</span>
                                            <span class="color_picker" title="FFFF00" >lemon yellow</span>
                                            <span class="color_picker" title="CCFF00" >alien green</span>
                                            <span class="color_picker" title="00FF00" >lime green</span>
                                            <span class="color_picker" title="1CB900" >green</span>
                                            <span class="color_picker" title="1F8F24" >dark green</span>
                                            <span class="color_picker" title="00FF99" >aquamarine</span>
                                            <span class="color_picker" title="00CC99" >dark aquamarine</span>
                                            <span class="color_picker" title="00FFFF" >cyan blue</span>
                                            <span class="color_picker" title="0099FF" >baby blue</span>
                                            <span class="color_picker" title="0066CC" >royal blue</span>
                                            <span class="color_picker" title="0005D9" >blue</span><br />    											


                                            <span class="color_picker" title="000000" >black</span>
                                            <span class="color_picker" title="333333" >dark gray</span>
                                            <span class="color_picker" title="666666" >gray</span>
                                            <span class="color_picker" title="999999" >silver gray</span>
                                            <span class="color_picker" title="CCCCCC" >light gray</span>
                                            <span class="color_picker" title="FFFFFF" >white</span>
                                            <span class="color_picker" title="996600" >brown</span>
                                            <span class="color_picker" title="CC9900" >golden brown</span>
                                            <span class="color_picker" title="993333" >maroon</span>
                                            <span class="color_picker" title="CC3366" >violet red</span>
                                            <span class="color_picker" title="FF3399" >fuschia</span>
                                            <span class="color_picker" title="CC66CC" >violet</span>
                                            <span class="color_picker" title="9933FF" >purple</span>
                                            <span class="color_picker" title="6633CC" >violet blue</span>
                                            <span class="color_picker" title="6666CC" >slate blue</span>
                                            <span class="color_picker" title="003399" >navy blue</span>    											
                                        </div>
                                        <span class="selected_color">Click on the color to choose it!</span>
                                        <input type="hidden" name="m5_no_colors"  value="" />
                                    </div>
                                    <br />
                                    <div>
                                        <span>Other Colors:</span>
                                        <br />
                                        <textarea name="no_colors"><?php echo (isset($_SESSION['no_colors'])) ? $_SESSION['no_colors'] : ""; ?></textarea>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>
                                    Describe some ideas you might have in mind for your 
                                    <br />
                                    logo design, examples of logos you like/dislike, etc.
                                </label>
                                <textarea name="idea_of_clint"><?php echo (isset($_SESSION['idea_of_clint'])) ? $_SESSION['idea_of_clint'] : ""; ?></textarea>
                            </li>
                            <li>
                                <label>
                                    If you have images of logos you like or other files you'd 
                                    <br />
                                    like to send, please attach them here:
                                </label>
                                <div class="multi-items">
                                    <div class="file-choose">
                                            <!--<span>No file chosen!</span>-->
                                        <input type="file" name="attachment" id="attachment"  />
                                        <input type="hidden" name="fileList" value="<?php echo (isset($_SESSION['fileList'])) ? $_SESSION['fileList'] : '' ?>" id="fileList" />
                                    </div>
                                    <span>
                                        Note: File format should be ZIP, RAR, TAR JPG, GIF, PDF, ODT, PNG, PPT, PPTX, DOC, DOCX, PSD, AI or EPS. 
                                        <br />
                                        Maximum file size is 500KB.
                                    </span>
                                </div>
                            </li>
                            <li>
                                <label>
                                    Contact Details (Mandatory for plus and superplus type
                                    <br /> 
                                    Packages)
                                </label>
                                <textarea name="contact_details"><?php echo (isset($_SESSION['contact_details'])) ? $_SESSION['contact_details'] : ""; ?></textarea>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix yellow-info-box">
                        <span>Extra Services - </span><span> Promote your business to its full potential!</span>
                        <br />
                        <span style="padding: 0 0 0 98px;">Use one in-house design team for all your design needs!</span>
                    </div>

                    <div class="clearfix order-stack">
                        <h4 style="text-decoration: underline;" class="gray-bg-title">Web Design</h4>
                        <ul class="form1 label-big">
                            <li>
                                <label>
<?php if (SHOW_OFFER_DATE): ?>                                    
                                        Special Promotion:
                                        <br />
                                        Half-Price on all web Packages.
                                        <br />
                                        Valid to <span class="theme-red"> <?php echo $today; ?></span>									
<?php endif; ?>
                                </label>
                                <div class="multi-items">
                                    <span style="font-size: 16px;">Select package: </span>
                                    <select class="select1" name="web_package">
                                        <option value="">See package options</option>
                                        <option value="<?php echo BUDGET_WP ?>" <?php echo (@$_SESSION['web'] == BUDGET_WP_P) ? 'selected="selected"' : '' ?>><?php echo BUDGET_WP ?> - Now <?php echo CURRENCY . BUDGET_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . BUDGET_WP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo GOLD_WP ?>" <?php echo (@$_SESSION['web'] == GOLD_WP_P) ? 'selected="selected"' : '' ?>><?php echo GOLD_WP ?> - Now <?php echo CURRENCY . GOLD_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . GOLD_WP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo ELITE_WP ?>" <?php echo (@$_SESSION['web'] == ELITE_WP_P) ? 'selected="selected"' : '' ?>><?php echo ELITE_WP ?> - Now <?php echo CURRENCY . ELITE_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . ELITE_WP_P_R ?><?php endif; ?></option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                        <div class="small-txt-note">
                            <p class="text-center">
                                For more information on the Web design packages we offer, click <a class="theme-blue" href="<?php echo base_url('web-site-design/webdesigner-limited-sale'); ?>">here</a>. 
                                <br />
                                Your order details entered above will be saved. To return to this page, click "back" on your browser.
                            </p>
                        </div>
                    </div>

                    <div class="clearfix order-stack">
                        <h4 style="text-decoration: underline;" class="gray-bg-title">Brochure</h4>
                        <ul class="form1 label-big">
                            <li>
                                <label>
<?php if (SHOW_OFFER_DATE): ?>                                    
                                        Special Promotion:
                                        <br />
                                        Half-Price on all web Packages.
                                        <br />
                                        Valid to <span class="theme-red"> <?php echo $today; ?></span>									
<?php endif; ?>
                                </label>
                                <div class="multi-items">
                                    <span style="font-size: 16px;">Select package: </span>
                                    <select class="select1" name="brouchure_package">
                                        <option value="">See package options</option>
                                        <option value="<?php echo TRI_FOLD_BP ?>" <?php echo (@$_SESSION['brouchure'] == TRI_FOLD_BP_P) ? 'selected="selected"' : '' ?> ><?php echo TRI_FOLD_BP; ?> - Now <?php echo CURRENCY . TRI_FOLD_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . TRI_FOLD_BP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo FOUR_PAGE_EXEC_BP ?>" <?php echo (@$_SESSION['brouchure'] == FOUR_PAGE_EXEC_BP_P) ? 'selected="selected"' : '' ?> ><?php echo FOUR_PAGE_EXEC_BP; ?> - Now <?php echo CURRENCY . FOUR_PAGE_EXEC_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . FOUR_PAGE_EXEC_BP_P_R ?><?php endif; ?></option>
                                        <option value="<?php echo EIGHT_PAGE_EXEC_BP ?>" <?php echo (@$_SESSION['brouchure'] == EIGHT_PAGE_EXEC_BP_P) ? 'selected="selected"' : '' ?> ><?php echo EIGHT_PAGE_EXEC_BP; ?> - Now <?php echo CURRENCY . EIGHT_PAGE_EXEC_BP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . EIGHT_PAGE_EXEC_BP_P_R ?><?php endif; ?></option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="normal-desc-box text-center">
                        <a class="green-btn order-back-btn" href="<?php echo site_url('packages'); ?>">
                            <span data-hover="Back">Back</span>
                        </a>
<!--<a class="green-btn order-submit-btn" href="javascript:void(0)<?php //echo base_url('orders/extra1');  ?>">
                <span data-hover="Continue">Continue</span>
        </a>-->
                        <button class="green-btn order-submit-btn" type="submit">
                            <span data-hover="Continue">Continue</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function ()
    {
        $('input,textarea').change(function ()
        {
            var name = this.name;
            var value = this.value;
            $.post("<?php echo site_url('orders/autosave') ?>", name + '=' + value);

        });
        $('select').change(function ()
        {
            var name = this.name;
            var value = this.value;
            $.post("<?php echo site_url('orders/autosave') ?>", name + '=' + value);
        });
        $('.order-submit-btn').click(function () {

            /*var datastring = $("form").serialize();
             $.ajax({
             type: "POST",
             url: "<?php echo site_url('orders/autosave') ?>",
             data: datastring,
             //dataType: "json",
             success: function(data) {
             //alert("success");
             window.location = "<?php echo site_url('orders/extra1'); ?>";
                     
             //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
             // do what ever you want with the server response
             },
             error: function(){
             //alert('error handing here');
             }
             });*/
        });

        // custom color picker
        // for background 
        $('.color_picker').each(function () {
            var color = $(this).attr('title');
            //alert(color);
            $(this).css('background', '#' + color);
        });

        $('.color_picker').click(function () {
            var color_pick = $(this).parent().children();

            if ($(this).hasClass('checked')) {
                $(this).removeClass('checked');
            }
            else {
                $(this).addClass('checked');
            }
            var colors_name = '';
            var colors_code = '';


            $(color_pick).each(function () {
                if ($(this).hasClass('checked')) {
                    colors_code += "#" + $(this).attr('title') + ", ";
                    colors_name += $(this).html() + ", ";
                }
            });
            colors_code = colors_code.substring(0, colors_code.length - 2);
            colors_name = colors_name.substring(0, colors_name.length - 2);
            $(this).parent().parent().children().next('span').html(colors_name);
            if ($(this).parent().parent().children().next('span').html() == "")
            {
                $(this).parent().parent().children().next('span').html("Click on the color to choose it!");
            }
            $(this).parent().parent().children().next().next('input').val(colors_code);
            //alert(colors_code + " " + colors_name);
        });

    });
</script>
<!-- Form Validation -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $('#order_detail').validate(
            {
                rules:
                        {
                            fname: {// fname is the name of input field not an ID 
                                required: true,
                                minlength: 2,
                                maxlength: 25
                            },
                            lname: {
                                required: true,
                                minlength: 2,
                                maxlength: 25
                            },
                            company_name: "required",
                            email_id: {
                                required: true,
                                email: true
                            },
                            cmp_logo_name: "required",
                            business_detail: "required"

                        },
                messages:
                        {
                            fname: {
                                required: "",
                                minlength: "",
                                maxlength: ""
                            },
                            lname: {
                                required: "",
                                minlength: "",
                                maxlength: ""
                            },
                            company_name: "",
                            email_id: "",
                            cmp_logo_name: "",
                            business_detail: ""

                        }

            });
</script>
<!-- /Form Validation -->



<!--  Uplodify  -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/uploadify.css">
<script type="text/javascript">
<?php $timestamp = time(); ?>
    $(function () {
        $('#attachment').uploadify({
            'formData': {
                'timestamp': '<?php echo $timestamp; ?>',
                'token': '<?php echo md5('unique_salt' . $timestamp); ?>',
                'targetFolder': ''
            },
            height: 20,
            swf: '<?php echo base_url() ?>assets/uploadify/uploadify.swf',
            uploader: '<?php echo base_url() ?>assets/uploadify/uploadify.php',
            width: 120,
            cancelImg: '<?php echo base_url() ?>assets/uploadify/cancel.png',
            buttonText: 'Attach Files',
            buttonCursor: 'hand',
            multi: false,
            fileTypeDesc: 'Custom',
            fileSizeLimit: '3072KB',
            queueSizeLimit: 3,
            fileTypeExts: '*.zip; *.rar; *.tar; *.jpg; *.gif; *.pdf; *.odt; *.png; *.ppt; *.pptx; *.doc; *.docx; *.psd; *.ai; *.eps',
            checkExisting: '<?php echo base_url() ?>assets/uploadify/check-exists.php',
            onSelect: function (file) {
                //if($('#fileList').val()=='') return true; else return false;
                //alert('a');
                $('.order-submit-btn span').html('Please wait while uploading...');
                $('.order-submit-btn').attr('disabled', 'disabled');
            },
            /*	//Default as provided by site: ITS ALWAYS SAME, THE ORDER NEEDS TO REMAIN SAME, NO MATTER THE NAME OF VARIABLE!
             onUploadSuccess : function(file, data, response) {
             alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
             } */
            onUploadSuccess: function (file, data, response) {
                //alert('File: '+file + " data: "+data+' response:'+response);                        
                $('#fileList').val('<?php echo base_url() ?>web_images/' + data);
                $('.order-submit-btn span').html('Continue');
                $('.order-submit-btn').removeAttr('disabled');

            }
        });
    });
</script>

<!--  /Uplodify  -->
<?php $this->load->view('includes/footer-common'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
    </body>
</html>