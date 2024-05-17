<?php
$this->load->view('includes/header-common-order_sunil');
// echo"<pre>";print_r($_SESSION);die;
?>

<style>
    .tooltip {

        font-size: 15px;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: 400;


    }

    .tooltip-inner {
        max-width: 400px;
        /* If max-width does not work, try using width instead */
    }
    .inner-filelist {
        /*width: 207px;*/
        /*float: left;*/
        height: 200px;
        position: relative;
        /*float: left;*/
        overflow: hidden !important;
        text-overflow: ellipsis;

        white-space: nowrap;
    }
    label.error{
        padding-left:10px !important;
        color:#F00 !important;
        font-weight:bold !important;
        float:right;
        padding-right:25px !important;
    }

    .file-choose img
    {margin:5px;
    }

    .thremove {
        position: absolute;
        right: 40px;
        /* display:none;*/
        cursor:pointer;
    }
    .fileList
    {
        position:relative ;   }

    .inner-filelist
    { width:207px !important; position:relative;margin-bottom: 10px;padding-right: 66px;height: auto !important; }

    #header-top
    {border-bottom:1px solid #e8e8e8 !important;}

    .text-center.smpl-step-num > a {
        font-weight: 400;
    }
    .gray-bg-title {
        background: none repeat scroll 0 0 #f8f8f8 !important;
    }

    .modifi input[type="password"], input[type="text"], input[type="tel"], textarea
    {font-size: 15px !important;}

    ::-webkit-input-placeholder {
        font-size: 14px !important;
    }

    :-moz-placeholder { /* Firefox 18- */
        font-size: 14px !important;  
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        font-size: 14px !important; 
    }

    :-ms-input-placeholder {  
        font-size: 14px !important; 
    }

    .text-right
    {text-align: right;padding-right:79px;}

    i.fa.fa-question-circle-o
    {color:grey !important;
     font-size: 16px;
     padding-left:2px;}

    .order-details
    {border:1px solid #e8e8e8 ;
     text-align: left !important;}

    #order-process h3
    {font-weight: 400 !important;}

    .main_price_green
    {color:#7DB53E;}
    #order-process h3 {

        margin: 0 0 4px !important;
    }

    .smpl-step > .smpl-step-step .smpl-step-num {margin-left: 31px;
    }

    .order-list ul li {
        border-bottom: 1px solid #e8e8e8;

    }
</style>
<section id="order-process" class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9 ">
                <!-- <div class="clearfix order-stack">
                    <h3 class="order-blue">
                        You have chosen our 
                        <br />-->
                <?php
                if ($_SESSION['p_index'] == 11 || $_SESSION['p_index'] == 16) {
                    $logoprice = 299;
                } else if ($_SESSION['p_index'] == 12 || $_SESSION['p_index'] == 15 || $_SESSION['p_index'] == 17) {
                    $logoprice = 499;
                } else if ($_SESSION['p_index'] == 13 || $_SESSION['p_index'] == 14 || $_SESSION['p_index'] == 18) {
                    $logoprice = 899;
                } else {
                    $logoprice = 0;
                }
                // echo $_SESSION['logo_package'] . " " . CURRENCY;
                //echo $_SESSION['logo_price'] + $logoprice;
                ?>

                <?php
                if (isset($_SESSION['poptions_pack' . $_SESSION['p_index']])) {
                    // echo '<br />' . $_SESSION['poptions_pack' . $_SESSION['p_index']] . " " . CURRENCY . $_SESSION['poptions_price' . $_SESSION['p_index']];
                }
                ?>

                <!-- <br />Total:  -->
                <?php
                if (isset($_SESSION['poptions_pack' . $_SESSION['p_index']])) {
                    // echo CURRENCY;
                    //  echo ($_SESSION['poptions_price' . $_SESSION['p_index']] + $_SESSION['logo_price'] + $logoprice);
                } else {
                    // echo CURRENCY;
                    //echo $_SESSION['logo_price'] + $logoprice;
                }
                ?>
                <!-- </h3>

             </div> -->

                <form enctype="multipart/form-data" action="orders/special?uk=special" method="post" name="order_detail" id="order_detail">




                    <div class="clearfix order-stack logobrief">
                        <h4 class="gray-bg-title" style="margin-left:38px;"><span style="font-weight:normal !important;font-size:16px !important;" >Write as briefly as you choose:</span></h4>

                        <ul class="form1  label-big">
                            <li>
                                <label>Logo name: <span class="required theme-red">*</span></label>
                                <input type="text" name="cmp_logo_name" value="<?php if (isset($_SESSION['cmp_logo_name'])) {
                    echo $_SESSION['cmp_logo_name'];
                } ?>"   class="required <?php if (isset($_SESSION['cmp_logo_name'])) {
                    echo 'valid';
                } ?>" placeholder="Your logo name" style="border:1px solid green;"/>
                                <a data-toggle="tooltip" title="Exact Name to be used in your logo"  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>

                            </li>
                            <li>
                                <label>Tagline (if any):</label>
                                <input type="text" name="tagline" value="<?php
                if (isset($_SESSION['tagline'])) {
                    echo $_SESSION['tagline'];
                }
                ?>" placeholder="To be used in your logo" class="<?php
                if (isset($_SESSION['tagline'])) {
                    echo 'valid';
                }
                ?>"/>
                                <a data-toggle="tooltip" title="This is a catchphrase or a slogan you like to include in your Logo."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>

                            </li>
                            <li>
                                <label>
                                    Business description: <span class="required theme-red">*</span>

                                </label>
                                <textarea name="business_detail"  placeholder="Describe your business"  class="required <?php
                if (isset($_SESSION['business_detail'])) {
                    echo 'valid';
                }
                ?>"><?php if (isset($_SESSION['business_detail'])) {
                    echo $_SESSION['business_detail'];
                } ?></textarea>   
                                <a data-toggle="tooltip" title="Your primary activity, philosophy, style (conservative, funky, modern, and traditional, etc.), goals, and anything else you would like to incorporate in your logo."  data-placement='top'  style="vertical-align:bottom !important;"> <i class="fa fa-question-circle-o" style="vertical-align:bottom !important;"></i></a>

                            </li>
                            <li>
                                <label >
                                    Colors you like for your logo: 
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
                                        <span class="selected_color">Click to choose.</span>
                                        <input type="hidden" name="m5_colors"  value="<?php
                if (isset($_SESSION['m5_colors'])) {
                    echo $_SESSION['m5_colors'];
                }
                ?>" />
                                    </div>

                                    <br />
                                    <div>
                                        <span>Other colors:</span>
                                        <br />
                                        <input type="text" name="colors" value="<?php
                if (isset($_SESSION['colors'])) {
                    echo $_SESSION['colors'];
                }
                ?>" placeholder="Type here the colors you like that are not in the option above" / style="font-size:13px !important;">
                                               <a data-toggle="tooltip" title="You may select from the given predefined colors, or enter your own if you don’t see them here."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                    </div>
                                    <div>
                                        <input type="checkbox"/><span> I leave this to designer</span>
                                        <a data-toggle="tooltip" title="Please check this box if you prefer to leave the choosing of your logo’s colors to the designers’ discretion."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <label>
                                    Colors you dislike:
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
                                        <span class="selected_color">Click to choose.</span>
                                        <input type="hidden" name="m5_no_colors"  value="<?php
                if (isset($_SESSION['m5_no_colors'])) {
                    echo $_SESSION['m5_no_colors'];
                }
                ?>" />
                                    </div>
                                    <br />
                                    <div>
                                        <span>Other colors:</span>
                                        <br />
                                        <input type="text" name="no_colors" value="<?php
                if (isset($_SESSION['no_colors'])) {
                    echo $_SESSION['no_colors'];
                }
                ?>" placeholder="Type here the colors you don’t like that is not in the option above" / style="font-size:13px !important;">

                                               <a data-toggle="tooltip" title="Are there colors you don’t like so much that you do NOT want to see them in your logo? If so, select from the given predefined colors, or enter your own if you don’t see them here."  data-placement='top'> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <label>
                                    Your ideas: 
                                </label>
                                <textarea name="idea_of_clint"  placeholder="Add any comments here (optional)" ><?php
                if (isset($_SESSION['idea_of_clint'])) {
                    echo $_SESSION['idea_of_clint'];
                }
                ?></textarea>   
                                <a data-toggle="tooltip" title="Describe some ideas you might have in mind for your Logo design. You may use examples of logos you like/dislike as a reference."  data-placement='top' style="vertical-align:bottom !important;"> <i class="fa fa-question-circle-o" style="vertical-align:bottom !important;"  ></i></a>

                            </li>
                            <li>
                                <label>
                                    <!-- If you have images of logos you like or other files you'd 
                                    <br />
                                    like to send, please attach them here: -->
                                </label>
                                <div class="multi-items">
                                    <div class="file-choose" style="float:left;">

                                                   <!--<span>No file chosen!</span>-->

                                        <img src="<?php echo base_url() ?>assets/uploadify/attachment_image.gif" class="uploadimages" style="cursor: pointer;">
                                        <input type="file" name="attachment[]" id="attachmentss" class="attachmentss" multiple="multiple" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, image/*, text/plain, .pdf, application/msword, .rar, .zip" style="display:none;" />

                                        <script type="text/javascript">

                                            $(function () {
                                                $('.uploadimages').click(function () {
                                                    $('#attachmentss').trigger('click');
                                                });

                                                $('#attachmentss').on('change', uploadFiles);



                                                function uploadFiles(event)
                                                {
                                                    filess = event.target.files;
                                                    var data = new FormData();
                                                    $.each(filess, function (key, value)
                                                    {
                                                        data.append(key, value);
                                                    });

                                                    // datavl = $(this).attr('data-value');

                                                    $('.loads').show();
                                                    $.ajax({
                                                        url: 'orders/uploadimagesfile',
                                                        type: 'POST',
                                                        data: data,
                                                        cache: false,
                                                        processData: false, // Don't process the files
                                                        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                                                        success: function (data)
                                                        {

                                                            // console.log(data);
                                                            $('div.fileList').append(data);
                                                            $('.loads').fadeOut('2000');

                                                        }

                                                    });
                                                }


                                            })
                                        </script>                              
                                        <br/>

                                        <span class="loads" style="display: none;">Uploading....
                                            <br/>
                                            <img src="<?php echo base_url() ?>images/loaders.gif" class="loader">
                                        </span>

                                        <div class="fileList" >

<?php
if (isset($_SESSION['fileList']) && !empty($_SESSION['fileList'])) {

    $filess = explode(":", $_SESSION['fileList']);
    //$no_file= count($filess);
    foreach ($filess as $f) {
        $ext = pathinfo($f, PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'JPG' || $ext == 'svgz' || $ext == 'SVGZ' || $ext == 'svg' || $ext == 'SVG' || $ext == 'tiff' || $ext == 'TIFF' || $ext == 'tif' || $ext == 'TIF' || $ext == 'ico' || $ext == 'ICO' || $ext == 'bmp' || $ext == 'BMP' || $ext == 'jpe' || $ext == 'JPE' || $ext == 'jpeg' || $ext == 'JPEG' || $ext == 'GIF' || $ext == 'gif' || $ext == 'PNG' || $ext == 'png') {
            echo '<div class="inner-filelist" ><img src="' . base_url() . 'web_images/' . $f . '" height="150" width="150" class="remove_attach" title="' . $f . '"/><a class="thremove"><img src="assets/images/delete1.png"></a>  </div>';
        } else if ($ext == 'DOC' || $ext == 'doc' || $ext == 'DOCX' || $ext == 'docx' || $ext == 'CSV' || $ext == 'csv' || $ext == 'pdf' || $ext == 'PDF' || $ext == 'ppt' || $ext == 'pptx' || $ext == 'PPT' || $ext == 'xlsx' || $ext == 'XLSX' || $ext == 'fodt' || $ext == 'odt' || $ext == 'ott' || $ext == 'odt' || $ext == 'odp' || $ext == 'otp' || $ext == 'ods' || $ext == 'ots' || $ext == 'zip' || $ext == 'rar' || $ext == 'rtf' || $ext == 'tar' || $ext == 'psd' || $ext == 'ai' || $ext == 'eps') {


            $b = substr($f, 13);
            echo '<div class="inner-filelist" ><a title="' . $f . '" href="' . base_url() . 'web_images/' . $f . '" download>' . $b . '</a><a class="thremove"><img src="assets/images/delete1.png"></a></div>';
        }
    }
}
?>



                                        </div>
                                    </div>
                                    <a data-toggle="tooltip" title="If you have images of logos you like or other files you would like to send, please attach them here. Note: File format should be ZIP, RAR, TAR JPG, GIF, PDF, ODT, PNG, PPT, PPTX, DOC, DOCX, PSD, AI or EPS. Maximum file size is 500kb."  data-placement='top' class="pull-left"> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
                                </div>




                            </li>

<?php if ($_SESSION['p_index'] != '1' && $_SESSION['p_index'] != '4' && $_SESSION['p_index'] != '16' && $_SESSION['p_index'] != '17' && $_SESSION['p_index'] != '18' && $_SESSION['p_index'] != '21') { ?>
                                <li>
                                    <label>
                                        Contact details:
                                    </label>
                                    <textarea name="contact_details" placeholder="Mandatory for packages with business card design"><?php
    if (isset($_SESSION['contact_details'])) {
        echo $_SESSION['contact_details'];
    }
    ?></textarea>		 	
                                    <a data-toggle="tooltip" title="Indicate here what specific details you want included in your business card. (Ex. Complete Address, Phone Number, etc.)  "  data-placement='top' class="pull-right"> <i class="fa fa-question-circle-o" aria-hidden="true"></i></a>

                                </li>
<?php } ?>
                        </ul>
                    </div>

                    <div class="row">

                        <div class="clearfix yellow-info-box">
                            <h3 class="order-blue" style="font-weight:700 !important;">Frequently bought with Logo Design:</h3>


                                            <!-- <h3 class="order-blue" style="font-weight:700 !important;">Frequently bought with <?php if ($_SESSION['p_index'] != 11 && $_SESSION['p_index'] != 12 && $_SESSION['p_index'] != 13 && $_SESSION['p_index'] != 14 && $_SESSION['p_index'] != 15 && $_SESSION['p_index'] != 16 && $_SESSION['p_index'] != 17 && $_SESSION['p_index'] != 18) { ?> Web Design  and <?php } ?> Brochures</h3>
                            -->

                        </div>

<?php if ($_SESSION['p_index'] != 11 && $_SESSION['p_index'] != 12 && $_SESSION['p_index'] != 13 && $_SESSION['p_index'] != 14 && $_SESSION['p_index'] != 15 && $_SESSION['p_index'] != 16 && $_SESSION['p_index'] != 17 && $_SESSION['p_index'] != 18) { ?>   

                            <div class="clearfix order-stack">
                                <h4 style="text-decoration: underline;" class="gray-bg-title">Web Design</h4>
                                <ul class="form1 modifiedbrief label-big">
                                    <li class="pull-left">
                                        <label>

                                            Special promotion:
                                            <br />
                                            Half-Price on all web packages.
                                            <br />
                                            Valid to <span class="theme-red"><?php echo $today; ?></span>									
                                        </label>
                                        <div class="multi-items">
                                            <span style="font-size: 16px;">Select package: </span>
                                            <select class="select1" name="web_package">
                                                <option value="">See package options</option>
                                                <option value="<?php echo BUDGET_WP ?>" <?php echo (@$_SESSION['web_package'] == BUDGET_WP) ? 'selected="selected"' : '' ?>><?php echo BUDGET_WP ?> - Now <?php echo CURRENCY . BUDGET_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . BUDGET_WP_P_R ?><?php endif; ?></option>
                                                <option value="<?php echo GOLD_WP ?>" <?php echo (@$_SESSION['web_package'] == GOLD_WP) ? 'selected="selected"' : '' ?>><?php echo GOLD_WP ?> - Now <?php echo CURRENCY . GOLD_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . GOLD_WP_P_R ?><?php endif; ?></option>
                                                <option value="<?php echo ELITE_WP ?>" <?php echo (@$_SESSION['web_package'] == ELITE_WP) ? 'selected="selected"' : '' ?>><?php echo ELITE_WP ?> - Now <?php echo CURRENCY . ELITE_WP_P ?> <?php if (SHOW_REGULAR_PRICE): ?>Was <?php echo CURRENCY . ELITE_WP_P_R ?><?php endif; ?></option>
                                            </select>
                                        </div>

                                        <img src="images/web.jpg"  >
                                    </li>
                                </ul>
                                <div class="small-txt-note">
                                    <p class="text-center">
                                        For more information on the web design packages we offer, click <a class="theme-blue" href="<?php echo base_url() ?>web-site-design/webdesigner-limited-sale">here</a>. 
                                        <br />
                                        Your order details entered above will be saved. To return to this page, click "back" on your browser.
                                    </p>
                                </div>
                            </div>
<?php } ?>
                        <div class="clearfix order-stack">
                            <h4 style="text-decoration: underline;" class="gray-bg-title">Brochure</h4>
                            <ul class="form1 modifiedbrief label-big">
                                <li>
                                    <label>

                                        Special promotion:
                                        <br />
                                        Half-Price on all brochure packages.
                                        <br />
                                        Valid to <span class="theme-red"><?php echo $today; ?></span>									
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
                                    <img src="images/brochure.jpg"  >
                                </li>
                            </ul>
                        </div>

                        <div class="normal-desc-box1 text-right1 ">
                            <div style="float:left;">
                                <a href="<?php echo base_url() ?>orders/index/<?php echo $_SESSION['p_index'] ?>" style="color:#666666;font-size:18px;"><i class="fa fa-chevron-left" aria-hidden="true"></i><span style="padding-left:17px;">Back </span></a></div>
                                  <!-- <a class="green-btn order-back-btn" href="<?php echo base_url() ?>orders/index/4">
                                      <span data-hover="Back">Back</span>
                                  </a> -->


                            <!--<a class="green-btn order-submit-btn" href="javascript:void(0)">
                                                <span data-hover="Continue">Continue</span>
                                        </a>-->
                            <div style="float:right;padding-right:86px;">
                                <button class="green-btn order-submit-btn " type="submit">
                                    <span data-hover="Continue">Continue <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>     
                </form>

            </div>
            <div class="col-xs-12 col-md-3 col-sm-3">
<?php include('floated_sunil.php'); ?>
            </div>

        </div>


    </div>
</div>
</section>

<script>
    $(document).ready(function ()
    {
        $('textarea, input').on('input propertychange change', function ()
        {
            var name = this.name;
            var value = this.value;
            $.post("<?php echo base_url() ?>orders/autosave.php", name + '=' + value);
        });
        $('select').change(function ()
        {
            var name = this.name;
            var value = this.value;
            $.post("<?php echo base_url() ?>orders/autosave.php", name + '=' + value, function () {


                $.post("<?php echo base_url() ?>orders/update_floated/", {'name': name, 'value': value}, function (msg) {
                    if (name == 'web_package') {
                        $('#web_package').html(msg);
                    }
                    else if (name == 'brouchure_package') {
                        $('#bro_package').html(msg);
                    }

                });
            });
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
    });</script>

<!-- Form Validation -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
    $('#order_detail').validate(
            {
                rules:
                        {
                            cmp_logo_name: "required",
                            business_detail: "required"

                        },
                messages:
                        {
                            cmp_logo_name: "Please enter the exact name to be used in your logo",
                            business_detail: "Please describe your business or organization"

                        }

            });</script>
<!-- /Form Validation -->



<!--  Uplodify  -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/uploadify.css">
<script type="text/javascript">
    $(function () {

        $('.remove_attach').hover(function () {
            $(this).next('a.thremove').show();
        });
        $('.fileList').delegate('.thremove', 'click', function () {
            var thisss = $(this);
            var number = $(this).parent().prevAll('div.inner-filelist').length;
            var next_number = $(this).parent().nextAll('div.inner-filelist').length;

            var file_name = $(this).prev().attr('title');
            console.log(file_name);
            $.post('<?php echo base_url() ?>orders/remove_attach', {'file_name': file_name, 'number': number, 'next_number': next_number}, function (msg) {
                $(thisss).parent().remove();
                $('#fileList').val(msg);
            });
        });
        $('#attachment').uploadify({
            'buttonText': 'BROWSE...',
            'buttonClass': 'some-class',
            'hideButton': true,
            'wmode': 'transparent',
            'formData': {
                'timestamp': '1467700174',
                'token': 'b3e6bec3460965e4e26dc1c9f0bd79d2',
                'targetFolder': ''
            },
            height: 20,
            swf: '<?php echo base_url() ?>assets/uploadify/uploadify.swf',
            uploader: '<?php echo base_url() ?>assets/uploadify/uploadify.php',
            // script: '<?php echo base_url() ?>assets/uploadify/uploadify.ashx',
            width: 120,
            cancelImg: '<?php echo base_url() ?>assets/uploadify/cancel.png',
            buttonText: 'Attach Files',
                    buttonCursor: 'hand',
            multi: true,
            auto: true,
            fileTypeDesc: 'Custom',
            fileSizeLimit: '307200KB',
            queueSizeLimit: 30,
            fileTypeExts: '*.doc;*.docx;*.rtf;*.zip;*.rar;*.tar;*.jpg;*.gif;*.pdf;*.bmp;*.rtf;*.tiff;*.tif;*.odt;*.ppt;*.pptx;*.psd;*.ai;*.eps;*.png;',
            checkExisting: '<?php echo base_url() ?>assets/uploadify/check-exists.php',
            /* 'onFallback': function () {
             alert('Flash was not detected.');
             },*/
            onSelect: function (file) {

                $('.order-submit-btn span').html('Please wait while uploading...');
                $('.order-submit-btn').attr('disabled', 'disabled');
            },
            onUploadSuccess: function (file, data, response) {

                if (data == 'Invalid file type. Upload Failed') {
                    alert('Invalid file type. Upload Failed \n Please try with image file');
                    return false;
                }
                //var prev_file=$('#fileList').val();

                /*if(prev_file != ''){
                 $.post('orders/prev_file/',{'prev_file':prev_file},function(msg){
                 //alert(msg);
                 });
                 }*/
                //alert(data);
                $.post('<?php echo base_url() ?>orders/prev_file/', {'fileList': data}, function (ms) {
                    $('#fileList').val(ms);
                });
                //	return false;
                $('#fileList').val('<?php echo base_url() ?>web_images/' + data);
                var ext = data.split('.').pop();
                if (ext == 'jpg' || ext == 'JPG' || ext == 'svgz' || ext == 'SVGZ' || ext == 'svg' || ext == 'SVG' || ext == 'tiff' || ext == 'TIFF' || ext == 'tif' || ext == 'TIF' || ext == 'ico' || ext == 'ICO' || ext == 'bmp' || ext == 'BMP' || ext == 'jpe' || ext == 'JPE' || ext == 'jpeg' || ext == 'JPEG' || ext == 'GIF' || ext == 'gif' || ext == 'PNG' || ext == 'png') {
                    $('.fileList').append('<div class="inner-filelist"><img src="<?php echo base_url() ?>web_images/' + data + '" height="150" width="150" title="' + data + '" class="remove_attach"/><a class="thremove" style="display: inline;"><img src="assets/images/delete1.png"></a></div>');
                }
                else {
                    $('.fileList').append('<div class="inner-filelist"><a href="<?php echo base_url() ?>web_images/' + data + '" title="' + data + '" class="remove_attach" download>' + data.slice(11) + '</a><a class="thremove" style="display: inline;"><img src="assets/images/delete1.png"></a>');
                }


                $('.order-submit-btn span').html('Continue');
                $('.order-submit-btn').removeAttr('disabled');
            }
        });
    });</script>

<!--  /Uplodify  -->
<br/><br/>
<?php $this->load->view('includes/footer-common'); ?>
<style type="text/css">
    .svgsmall
    {    

        margin-left: 3px !important;
        margin-top: 2px !important;
        height: 16px;
        width: 15px;enable-background:new 0 0 469.184 469.185;position: relative;
        top: 1px;
        display: inline-block;
        line-height: 1;-webkit-font-smoothing: antialiased;
    }

    .smpl-step > .smpl-step-step .smpl-step-num
    {}



    span.round-tabs.five.activesmall {
        height: 25px;
        width: 25px;
        top: 53px;
    }

    .text-center.smpl-step-num > a {
        font-weight: 400;
        font-size: 15px;
    }
    .fontsz
    { font-size: 17px !important;
      margin-left:15px;}

    .smpl-step > .smpl-step-step .smpl-step-num
    {margin-left: 0px;}

    @media only screen and (max-width: 695px){
        .text-center.smpl-step-num > a {
            color: #999999;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-weight: normal;
            font-size: 12px !important;
        }}
    </style>
    <style type="text/css">
    .uploadify-button {
        background-color: transparent;
        border: none;
        padding: 0;
        background: none;
        border: 1px solid grey;
        border-radius: 5px;
        color:grey;

    }
    .uploadify:hover .uploadify-button {
        background-color: transparent;
        background: none;
        border: 1px solid #7DB701;
    }

</style>
<style type="text/css">
    @media screen and (-webkit-min-device-pixel-ratio:0) { 
        /* Safari and Chrome */


        /* Safari only override */
        ::i-block-chrome,.svgbig{

            height: 32px;
            width: 36px;
            -webkit-font-smoothing: antialiased;
            padding-top: 5px !important;
            padding-left:2px !important;
        }

    } 
</style>
<?php //echo "<pre>";print_r($_SESSION); ?>

</html>