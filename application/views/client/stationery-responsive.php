<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <base href="<?php echo base_url() ?>clientpanel/"></base>
        <title>:: Client Panel ::</title>
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
        <!--<link href="<?php echo base_url() ?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
        <link href="<?php echo base_url() ?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url() ?>assets/css_client/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css_client/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>-->
        <!--jquery slider-->
        <link rel="stylesheet" href='<?php echo base_url() ?>assets/css/newmodify.css' type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />


        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

        <script type="text/javascript" language="javascript" src="<?php echo base_url() ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
        <link href="<?php echo base_url() ?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

            <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css_client/newclientpanel.css">

                <script type="text/javascript" language="javascript">
                    $(function () {
                        //	Scrolled by user interaction
                        $('#foo2').carouFredSel({
                            auto: true,
                            prev: '#prev2',
                            next: '#next2',
                            pagination: "#pager2",
                            mousewheel: true,
                            swipe: {
                                onMouse: true,
                                onTouch: true
                            },
                            scroll: {fx: "crossfade", duration: 900}
                        });
                    });
                </script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#request_callbackaa").fancybox();
                        $("a.zoom").fancybox();
                        $("a.zoom1").fancybox({
                            'overlayOpacity': 0.7,
                            'overlayColor': '#FFF'
                        });
                        $("a.zoom2").fancybox({
                            'zoomSpeedIn': 500,
                            'zoomSpeedOut': 500
                        });
                    });
                </script>
                <script type="text/javascript">
                    // <![CDATA[
                    $(document).ready(function () {
                        $('#attachment').uploadify({
                            'uploader': '<?php echo base_url() ?>assets/uploadify_old/uploadify.swf',
                            'script': '<?php echo base_url() ?>assets/uploadify_old/uploadify.php',
                            'cancelImg': '<?php echo base_url() ?>assets/uploadify_old/cancel.png',
                            'folder': '../admin_panel/upload/',
                            'auto': true,
                            'multi': true,
                            'hideButton': false,
                            'buttonImg': "<?php echo base_url() ?>assets/images/client/attachment_image.gif",
                            'width': 132,
                            'height': 25,
                            'removeCompleted': false,
                            'onSelect': function (file) {
                                $('#submit_revision').attr('disabled', 'disabled');
                            },
                            'onComplete': function (event, ID, fileObj, response, data) {

                                if (response == 'error')
                                {
                                    $('#attachment' + ID).prepend('<div style="float:left;margin-right:10px;font-weight:bold;">Invalid file type!</div>');

                                }
                                else
                                {
                                    //$('#attachment'+ID).prepend('<div style="float:left;margin-right:10px;"><img src="../uploads/Banners/thumbs/'+response+'"></div>');
                                    if ($('#fileList').val() != '')
                                        $('#fileList').val($('#fileList').val() + ',' + response);
                                    else
                                        $('#fileList').val(response);

                                }
                                $('#submit_revision').removeAttr('disabled');
                            }
                        });
                        $('#attachment1').uploadify({
                            'uploader': '<?php echo base_url() ?>assets/uploadify_old/uploadify.swf',
                            'script': '<?php echo base_url() ?>assets/uploadify_old/uploadify.php',
                            'cancelImg': '<?php echo base_url() ?>assets/uploadify_old/cancel.png',
                            'folder': '../admin_panel/upload/',
                            'auto': true,
                            'multi': true,
                            'hideButton': false,
                            'buttonImg': "<?php echo base_url() ?>assets/images/client/attachment_image.gif",
                            'width': 132,
                            'height': 25,
                            'removeCompleted': false,
                            'onSelect': function (file) {
                                $('#submit_question').attr('disabled', 'disabled');
                            },
                            'onComplete': function (event, ID, fileObj, response, data) {

                                if (response == 'error')
                                {
                                    $('#attachment1' + ID).prepend('<div style="float:left;margin-right:10px;font-weight:bold;">Invalid file type!</div>');

                                }
                                else
                                {
                                    //$('#attachment'+ID).prepend('<div style="float:left;margin-right:10px;"><img src="../uploads/Banners/thumbs/'+response+'"></div>');
                                    if ($('#fileList1').val() != '')
                                        $('#fileList1').val($('#fileList1').val() + ',' + response);
                                    else
                                        $('#fileList1').val(response);

                                }
                                $('#submit_question').removeAttr('disabled');
                            }
                        });
                    });
                    function delete_image(name) {
                        var filelist = $('#fileList').val();
                        var filenames = filelist.split(',');
                        $('#fileList').val('');
                        for (var i = 0; i < filenames.length; i++)
                        {
                            var names = filenames[i].split('_');
                            if (names[1] != name)
                            {
                                //returnText.replace(/^\s+|\s+/,"")
                                if ($('#fileList').val() == '')
                                    $('#fileList').val(filenames[i]);
                                else
                                    $('#fileList').val($('#fileList').val() + ',' + filenames[i]);
                            }
                        }
                        // Forquestions
                        var filelist = $('#fileList1').val();
                        var filenames = filelist.split(',');
                        $('#fileList1').val('');
                        for (var i = 0; i < filenames.length; i++)
                        {
                            var names = filenames[i].split('_');
                            if (names[1] != name)
                            {
                                //returnText.replace(/^\s+|\s+/,"")
                                if ($('#fileList1').val() == '')
                                    $('#fileList1').val(filenames[i]);
                                else
                                    $('#fileList1').val($('#fileList1').val() + ',' + filenames[i]);
                            }
                        }
                    }
                    $(function () {
                        $('#imp-submit').on('click', function () {
                            $('#feedback-containner').slideDown();
                            $('#question-containner').slideUp();
                            if ($('object#attachmentUploader').is(':visible')) {
                                $('#attachment').hide();
                            } else {
                                $('#attachment').show();
                            }

                        });
                        $('#question-submit').on('click', function () {
                            $('#feedback-containner').slideUp();
                            $('#question-containner').slideDown();

                        });
                    });
                    $(document).ready(function () {
                        $('.rate').click(function () {
                            var rate = $(this).attr('id');
                            $('#rate-error').html('');
                            $('.raitng li').removeClass('rated');
                            $('.raitng li').addClass("rate");
                            for (var i = 1; i <= rate; i++) {
                                $('#' + i).removeClass("rate");
                                $('#' + i).addClass("rated");
                            }
                            ;
                            $('#rated-value').val(rate);
                        })
                        $('#submit_revision').click(function () {
                            var $this = $(this);
                            var rate = $('#rated-value').val();
                            if (rate == '' && $this.attr("id") == "submit_revision") {
                                $('#rate-error').html('Select Rate for this design.');
                                confirm('Please can you click on one of the stars to score your initial samples from 1 to 10. We appreciate your feedback. Design support team.');
                                return false;
                            }
                        })

                    })
                    function checkForm() {

                        var text = $('#msgcustomer').val();
                        var file = $('#fileList').val();
                        if (text == '' && file == '') {
                            confirm('Please provide us feedback or have an attachment.');
                            return false;
                        }
                        else
                        {
                            return true;
                        }

                    }
                    function checkForm1() {

                        var text = $('#msgcustomer1').val();
                        var file = $('#fileList1').val();
                        if (text == '' && file == "") {
                            confirm('Please provide us question or have an attachment.');
                            return false;
                        }
                        else
                        {
                            return true;
                        }

                    }
                </script>



                <style>

                    .price-quotation h2
                    {
                        background:#c2d69b;
                        padding:10px;
                        color:#636228;
                        font-size:16px !important;
                        font-family:Arial, Helvetica, sans-serif;
                        font-weight:bold !important;
                        text-align:center;
                        margin-bottom:20px;
                    }

                    .price-quotation label
                    {
                        font-size:14px;
                        font-weight:bold;
                        padding-right:10px;


                    }
                    .price-quotation  input[type="text"]
                    {
                        border:2px solid #d2d2d2;
                        padding:5px;
                    }

                    .attach
                    {color:#ad2d43 !important;
                     line-height:30px; 
                    }

                    .price-quotation textarea
                    {width:100%;
                     border:2px solid #d2d2d2;
                     min-height:150px;
                     margin-bottom:10px;
                     padding:5px;  
                    }

                    .quo_submit
                    {
                        /*  padding:10px;
                          background:#00b050;
                          border:1px solid #239123;
                          color:#fff;
                          font-weight:bold !important;
                          margin:10px 0;
                          width:210px;
                          cursor:pointer !important;
                          clear:both;
                          display:block;*/

                    }

                    .quo_submit:hover
                    {/*background-color:#0f8946;
                    text-decoration:none;*/
                    }
                    .fancybox-close, .fancybox-item{
                        display:none;
                    }
                </style>
                <style>
                    .currentTextHolder {
                        font-size: 24px;
                    } 
                    .pp_nav {
                        display: table !important;
                        margin: 0 auto !important;
                    } 
                </style>


                <!--[if lt IE 8]>
                <script src="<?php echo base_url() ?>js/IE8.js"></script>
                <![endif]-->
                </head>
                <body>


                    <link rel="stylesheet" href='<?php echo base_url() ?>assets/css_client/slideshow.css' type="text/css" />
                  <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fancybox/xfade2.js"></script> -->


                    <?php include 'menu.php'; ?>

                    <style type="text/css">
                        /*    .col2-right-layout .col-main {
                            float: left;
                            margin: 0 0 20px 0;
                            width: 705px;
                        }*/</style>
                    <style>
                        .currentTextHolder {
                            font-size: 24px;
                        }
                        .pp_nav {
                            display: table !important;
                            margin: 0 auto !important;
                        }
                    </style>


                    <div class="container border-new">
                        <div class="row">




                            <div class="main-banner  ">
                                <!--Start Slide Show Banner-->

                                <div class="price_banner col-md-custom " style="padding-right:0px;"><a href="<?php echo base_url() ?>web-site-design/webdesigner-limited-sale/" target="_blank"><img src="<?php echo base_url() ?>assets/images/webdesign/price_banner-UK.jpg" class="img-responsive" /></a></div>


                                <div class="col-md-8  col-sm-8 col-xs-8" style="padding-left:0px;">
                                    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel" data-slide-to="1"></li>
                                            <li data-target="#carousel" data-slide-to="2"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/1.jpg" class="img-responsive" /></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/2.jpg" class="img-responsive" /></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/3.jpg" class="img-responsive" /></div>

                                            <div class="item">        <img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/4.jpg"  class="img-responsive"/></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/5.jpg" class="img-responsive" /></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/6.jpg"  class="img-responsive"/></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/7.jpg" class="img-responsive" /></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/8.jpg"  class="img-responsive"/></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/9.jpg" class="img-responsive" /></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/10.jpg"  class="img-responsive"/></div>
                                            <div class="item"><img src="<?php echo base_url() ?>assets/images/webdesign/slide_show/11.jpg"  class="img-responsive"/>    </div>
                                        </div>

                                    </div>

                                </div>


                                <!--End Slide Show Banner-->

                            </div>

                            <script type="text/javascript" charset="utf-8">
                                $(document).ready(function () {
                                    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 6000, autoplay_slideshow: true});
                                });
                            </script>



                            <script type="text/javascript" charset="utf-8">
                                $(document).ready(function () {
                                    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 6000, autoplay_slideshow: true});
                                });
                            </script>



                        </div>

                    </div>


                    <style type="text/css">
                        #imp-submit , #question-submit
                        {    padding: 10px 70px;
                             font-size: 15px;}
                        .feedback-containner textarea
                        {font-size: 15px !important;
                         padding: 5px;}
                    </style> 			 <div class="main-container container border-new-down">
                        <div class="row">
                            <div class="col-main client-panel  col-md-9 col-sm-8">

                                <?php if (@$_SESSION['success_message']) { ?>
                                    <div style="color:#f00;border:1px solid #f00;background-color:#FF6;padding:10px;margin-bottom:20px;"><?php echo $_SESSION['success_message'];
                                unset($_SESSION['success_message']) ?></div>
<?php } ?>

                                <h1>YOUR STATIONERY SAMPLES </h1>
                                <!-- <br/> -->
                                <form enctype="multipart/form-data" onsubmit="return checkForm()" method="post" name="form1" action="<?php echo base_url() ?>client_panel/revision" class="sample">
                                    <input name="button" type="button" class="btn btn-success" id="imp-submit" value="Submit Free Revision Request" />
                                    <div style="height: 8px;"></div>
                                    <!-- <br /> --><!-- <br /> -->
                                    <!-- <div style="width:350px; color:#990000; font-size:12px; ">"Attach any documents if desired (optional)"</div> --><!-- <br /> -->
                                    <div id="feedback-containner" style="margin:20px 0;display:none;">
                                        <div > Your Revision Request<br><textarea class="mbottom form-control" name="msgcustomer" rows="8" cols="70" id="msgcustomer"></textarea></div>            
                                        <div><input type="file" name="attachment" id="attachment" /></div>
                                        <input type="hidden" name="logo_or_stat" value="stat" />
                                        <input type="hidden" id="fileList" name="fileList" />
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly"> 
                                            <input type="hidden" name="redirect" value="<?php echo $this->uri->segment(2); ?>">
                                                <div><input type="submit" name="submit_revision" id="submit_revision1" value="Submit"   class="btn btn-success mbottom" /></div>           
                                                </div>        
                                                </form>
                                                <?php
                                                if (!empty($samples)) {
                                                    ?>
                                                    <!-- <br/> -->
                                                            <!-- <span class="style1">*Click to enlarge any image</span> -->
                                                    <br/>	
                                                    <?php
                                                    $sr = 1;
                                                    foreach ($samples as $row) {
                                                        ?>

                                                        <div class="feedbacks <?php echo $row['designer_post_order_id'] ?>" <?php if ($row['adminMessage']) { ?>style="padding:10px 0px;<?php } ?>">

                                                            <?php if (!empty($row['adminMessage'])) { ?>  
                                                                <div class="feedback_msg ">

                                                                    <div class="comment_header">
                                                                        <h3 class="">            
                                                                          <!-- <strong><?php //echo $date = date('D d M Y H:i', strtotime($row['sentDate'])); ?></strong> -->
                                                                            <strong><?php echo $date = date('D d M Y H:i', strtotime($row['sentDate']) - (4 * 60 * 60) - (45 * 60)); ?></strong>
                                                                        </h3>
                                                                    </div>

                                                                    <div class="comments">
                                                                        <?php if ($row['adminMessage'] != 'plzchecksample') {
                                                                            echo $row['adminMessage'];
                                                                        } ?>
            <?php //echo $row['adminMessage']; ?>
                                                                    </div>

                                                                </div>
                                                            <?php
                                                            } else {


                                                                $get_client_message = $this->clientmodel->get_client_message_stat($row['improvementId']);
                                                                ?>
            <?php if (!empty($get_client_message[0])): ?>
                                                                    <div class="feedback_msg">        
                                                                        <div class="comment_header">
                                                                            <h3 class="">            
                                                                                <!-- <strong><?php //echo $date = date('D d M Y H:i', strtotime($get_client_message[0]['submit_date'])); ?></strong> -->
                                                                                <strong><?php echo $date = date('D d M Y H:i', strtotime($get_client_message[0]['submit_date']) - (4 * 60 * 60) - (45 * 60)); ?></strong>
                                                                            </h3>
                                                                        </div>

                                                                        <div class="comments" style="font-style: italic; font-weight: bold;">
                                                                        <?php echo $get_client_message[0]['idea_of_clint']; ?>
                                                                        </div> 
                                                                        <?php
                                                                        if ($get_client_message[0]['files']) {
                                                                            $files = explode(",", $get_client_message[0]['files']);
                                                                            foreach ($files as $f => $filename) {
                                                                                ?>
                                                                                <a target="_blank" href="<?php echo base_url() ?>admin_panel/upload/<?php echo $filename; ?>" rel="group" class="zoom pull-left">
                                                                                    <img src="<?php echo base_url() ?>admin_panel/upload/thumbs/<?php echo $filename; ?>">
                                                                                </a>  
                                                                        <?php }
                                                                    } ?>
                                                                    </div>
            <?php endif;
        } ?>








                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <?php
                                                                $designer_post_id = $row['designer_post_order_id'];
                                                                $oldORnew = 'old';
                                                                if ($this->clientmodel->countTotal('tbl_logo_samples', array('designer_post_id' => $designer_post_id)) > 0) {
                                                                    //echo $this->db->last_query();
                                                                    $oldORnew = 'new';
                                                                    $logos = $this->clientmodel->getAll('tbl_logo_samples', 'designer_post_id', array('designer_post_id' => $designer_post_id, 'sample_type' => 'stationary'));
                                                                    //$data['stationary'] = $this->general_db_model->getAll( 'tbl_logo_samples', 'designer_post_id', array('designer_post_id'=>$designer_post_id,'sample_type'=>'stationary'));
                                                                }

                                                                if ($oldORnew == 'new') {
                                                                    //die('asdfasdf');
                                                                    if (!empty($logos)) {
                                                                        echo '<tr><td>';
                                                                        foreach ($logos as $row1) {
                                                                            //echo PATH_SAMPLE.'thumb_'.$row1->sample_name;
                                                                            if (@fopen(PATH_SAMPLE . 'thumb_' . $row1->sample_name, "r") && $row1->sample_name != '') {
                                                                                echo '<a class="zoom" rel="group" href="' . PATH_SAMPLE . $row1->sample_name . '" target="_blank"><img src="' . PATH_SAMPLE . 'thumb_' . $row1->sample_name . '"></a>';
                                                                            }
                                                                        }
                                                                        echo '</td></tr>';
                                                                        ?>
                                                                        <?php
                                                                    }
                                                                } else {
                                                                    ?>

                                                                    <tr>
                                                                        <td><?php
                                                        if ($row['file_five'] != "") {
                                                            //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                            if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_five'], "r")) {
                                                                $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_five'], "ISO-8859-1");
                                                                            ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_five'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_five'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_five'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_six'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_six'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_six'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_six'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_six'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_six'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_seven'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_seven'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_seven'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_seven'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_seven'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_seven'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_eight'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_eight'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_eight'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_eight'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_eight'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_eight'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_nine'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_nine'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_nine'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_nine'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_nine'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_nine'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_ten'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_ten'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_ten'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_ten'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_ten'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_ten'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_eleven'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_eleven'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_eleven'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_eleven'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_eleven'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_eleven'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_twelve'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_twelve'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_twelve'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_twelve'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_twelve'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_twelve'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }

                                                                            if ($row['file_thirteen'] != "") {
                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_thirteen'], "r")) {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_thirteen'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_thirteen'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                } else {
                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_thirteen'], "ISO-8859-1");
                                                                                    ?>
                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_thirteen'], "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?></td>
                                                                    </tr>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                            </table>


                                                            <div style="clear:both;height:1px"></div>
                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>      
                                                    <span class="style1">Click to enlarge any image</span>  
                                                    <br/>
                                                    <br/>        
                                                                <?php
                                                                } else {
                                                                    ?>
                                                    <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td align="center"><strong>Sorry no stationary samples for your order till now.<br />
                                                          <br />
                                                          We will be in touch shortly if you have ordered this particular design service. <br />
                                                          <br />
                                                          Thank you !!!</strong></td>
                                                      </tr>
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                      </tr>         
                                                    </table> -->

                                                    <p>If you have ordered stationery samples, they will be shown here in the future.</p>

                                                    <br />


    <?php
}
?>             















                                                <script language="javascript">
                                                    document.title = ":: Client Panel"
                                                    document.bgColor = "#99FFCC"
                                                    function logo(a)
                                                    {
                                                        window.open(a, "myWindow", "status = 1,resizable = 1,scrollbars=yes, width=400")
                                                    }
                                                </script>
                                                <div style="clear: left;"></div>
                                                <!--<div class="copyright">
                                        <a href="<?php echo base_url() ?>client_panel/copyright.php"  ><img src="<?php echo base_url() ?>assets/images/client/copyright.jpg" alt="Copyright Your Logo Now" title="Copyright Your Logo Now" /></a>
                                        </div>-->      </div>
                                                <div class="side-bar  col-md-3 col-sm-4">
                                                    <div class="best-value">
                                                        <div class="best-value-text">
                                                            <div align="center"><a href="<?php echo base_url() ?>web-site-design/webdesigner-limited-sale/" target="_blank"><img src="<?php echo base_url() ?>assets/images/webdesign/best-value.jpg" alt="Best Value" class="img-responsive" title="Best Value"></a></div>
                                                        </div>
                                                    </div>

                                                    <div class="awards">

                                                        <div class="awards-text">
                                                            <h1>Awards</h1>
                                                            <h2 class="text-red text-bold">UK Design Awards</h2>
                                                            <p><span class="text-red">The UK Design Awards was founded in the year 2000 rewarding <span class="text-bold">excellence in design</span> and business.</span></p>
                                                            <h2 class="text-blue text-bold">Summit International Awards</h2>
                                                            <p><span class="text-blue">Throughout its 13 year history, the Summit organization has established itself as one of the premier arbiters of <span class="text-bold"> communication excellence.</span></span></p>
                                                            <h2 class="text-dark-red">Red Dot Awards</h2>
                                                            <p><span class="text-dark-red">This award ranks among the largest and <span class="text-bold">most renowned design competitions</span> in the world. The red dot design award attracted almost 6,000 submissions from 52 countries in 2006 alone. Since then, the award body has grown x10 in submissions.</span><!-- <span class="text-bold"><a href="<?php echo base_url() ?>web-site-design/webdesigner-limited-sale/rdaward.php">Read more.</a></span> --> </p>
                                                        </div>

                                                    </div>
                                                    <!-- <div class="security" align="center">
                                                                 
                                                       <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
                                                       
                                                               </div>
                                                      <div class="guarantee" align="center">
                                             <img src="<?php //echo base_url() ?>assets/images/webdesign/guarantee.jpg" alt="Guarantee" title="Guarantee">
                                             
                                             </div> -->

                                                    <div class="sidebar-support" align="center">
                                                        <span class="images">
                                                            <img src="<?php echo base_url().'assets/images/webdesign/lst-'.COUNTRY.'.gif'; ?> " alt="<?= COUNTRY. ' Live Support'; ?>" title="<?= COUNTRY. ' Live Support'; ?>" />
                                                            <!--<img src="https://www.logodesignguarantee.co.uk/assets/images/webdesign/lst-UK.gif " alt="UK Live Support" title="UK Live Support">-->
                                                        </span>
                                                        <p>0800 279 6215</p>

                                                    </div>

                                                </div>
                                                <div class="clear"></div>
                                                </div>
                                                </div>


<?php include 'footer.php'; ?>

                                                <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrapValidator.css"/>
                                                <link href="<?php echo base_url() ?>assets/css/bootstrapDatepicker.css" rel="stylesheet">
                                                <!--<script src='<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js' type='text/javascript'></script>
                                                    -->
                                                    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
                                                    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrapValidator.js"></script>
                                                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
                                                    <!--    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
                                                    -->
                                                    <link href="<?php echo base_url() ?>assets/css/jquery.timepicker.css" rel="stylesheet">
                                                        <script src="<?php echo base_url() ?>assets/js/jquery.timepicker.js"></script>
                                                        <!-- <link rel="stylesheet" type="text/css" href="css/newclientpanel.css"> -->
                                                        <script type="text/javascript" language="javascript">
// var j = jQuery.noConflict();
$(function () {
$('#timetocall').timepicker();
$('#datetocall').datepicker();


//	Scrolled by user interaction
$('#CallbackrequestForm').bootstrapValidator({
message: 'This value is not valid',
fields: {
client_name: {
message: 'The Client is not valid',
validators: {
notEmpty: {
    message: 'The Client Name is required and can\'t be empty'
}
}

},
phone: {
message: 'The Phone is not valid',
validators: {
notEmpty: {
    message: 'Phone Number is required and can\'t be empty'
}
}

},
datetocall: {
message: 'The Date is not valid',
validators: {
notEmpty: {
    message: 'Date  to Call is required and can\'t be empty'
}
}

},
timetocall: {
message: 'The Time is not valid',
validators: {
notEmpty: {
    message: 'Time to Call is required and can\'t be empty'
}
}

},
notes: {
message: 'Notes is not valid',
validators: {
notEmpty: {
    message: 'Notes is required and can\'t be empty'
}
}

},
email: {
validators: {
notEmpty: {
    message: 'The email address is required and can\'t be empty'
},
emailAddress: {
    message: 'The input is not a valid email address'
}
}
}
}


});

/*j("#Save_callbackrequest" ).on('click',function(e){
e.preventDefault();
e.stopImmediatePropagation();
         
         
var dataForm =$('#CallbackrequestForm').serializeArray();
//dataForm.push({name: 'searchdate', value: searchdate},{name: 'callback_id', value: callback_id});
//  alert(client_name); return false
$.post( "<?php echo base_url() ?>client_panel/aaddcallbackreport",dataForm,
function( data ) {
//$('#CallbackrequestForm').reset();
$('#CallbackrequestForm').find("input[type=text] , textarea ").each(function(){
$(this).val('');
});
alert(data);
$('.fancybox-close').trigger('click');
});
});*/



});
                                                        </script>

                                                        </body>
                                                        </html>