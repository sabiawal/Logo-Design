<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>:: Client Panel ::</title>
        <base href="<?php echo base_url() ?>clientpanel/"></base>



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

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />


        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

        <script type="text/javascript" language="javascript" src="<?php echo base_url() ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>


        <script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
        <link href="<?php echo base_url() ?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" language="javascript">
            $(function () {
                //  Scrolled by user interaction
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
                    if ($('object#attachment1Uploader').is(':visible')) {
                        $('#attachment1').hide();
                    } else {
                        $('#attachment1').show();
                    }


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
                if (text == '' && file == "") {
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

        <style type="text/css" media="all">
            .list_carousel {
                left: 40px;
                position: relative;
                top: 174px;
                width: 900px;
            }
            .list_carousel ul {

                list-style: none;
                display: block;
            }
            .list_carousel li {
                font-size: 40px;
                color: #999;
                padding-right:106px;
                display: block;
                float: left;
            }


            .list_carousel li img
            {width:190px;
             height:190px;


            }
            .list_carousel.responsive {
                width: auto;
                margin-left: 0;
            }
            .clearfix {
                float: none;
                clear: both;
            }
            .prev {
                float: left;
                margin-left: 10px;
            }
            .next {
                float: right;
                margin-right: 50px;
            }
            .pager {
                float: left;
                width: 300px;
                text-align: center;
            }
            .pager a {
                margin: 0 5px;
                text-decoration: none;
            }
            .pager a.selected {
                text-decoration: underline;
            }
            .timer {
                background-color: #999;
                height: 6px;
                width: 0px;
            }

            #foo2
            {

            }
            .list_carousel

            {padding-left:25px;
            }

            .no_image {
                display: block;
                font-size: 30px;
                font-weight: bold;
                left: 200px;
                position: relative;
                text-shadow: 4px 4px 2px #9EBDBD;
                top: 270px;
                width: 580px;
                z-index: 999999;
            }
        </style>

        <style>
            .feedback-containner div{
                margin-top:10px;
            }
            #rate-error{
                color:red;
            }
            .raitng li p {
                font-weight: bold;
                margin-top: 18px;
                text-align: center;
            }
            .raitng li{
                background:url(../assets/images/client/rate.png) no-repeat;
                height:50px;
                width:50px;
                cursor:pointer;
            }
            li.rated{
                background:url(../assets/images/client/rated.png) no-repeat;
            }

            #submit_revision, #submit_revision_rate
            {
                background: none repeat scroll 0 0 #339933;
                border: 0 none;
                color: #FFFFFF;
                cursor: pointer;
                font-weight: bold;
                padding: 10px;
            }

            #submit_question
            {
                background: none repeat scroll 0 0 #339933;
                border: 0 none;
                color: #FFFFFF;
                cursor: pointer;
                font-weight: bold;
                padding: 10px;
            }
        </style>


        <!-- Feedback css -->
        <style type="text/css">
            .feedbacks{
                background: none repeat scroll 0 0 #FFFFFF;
                border-bottom: 1px solid #DDDDDD;
                clear: left;
                color: #333333;
                padding: 10px 0;}
            .feedbacker img{
                float: left;
                margin: 0 0 5px;
                width: 48px;
            }
            .feedback_msg{
                /*margin-left: 60px;*/}
            .comment_header h3{
                color: #333333;
                font-size: 11px;
                font-weight: normal;
                margin: 0 0 5px;}
            .comment_header a{
                color: #333333;
                font-size: 12px;
                margin-right: 2px;
                text-decoration: none !important;}
            .comments{
                margin-bottom: 10px;
                font-size: 12px;}
            </style>

            <!--[if lt IE 8]>
            <script src="<?php echo base_url() ?>js/IE8.js"></script>
            <![endif]-->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
                <link rel="stylesheet" href='<?php echo base_url() ?>assets/css/newmodify.css' type="text/css" />
                <link rel="stylesheet" href='<?php echo base_url() ?>assets/css_client/newclientpanel.css' type="text/css" />
        </head><body>

            <div class="wrapper1">
            <link rel="stylesheet" href='<?php echo base_url() ?>assets/css_client/slideshow.css' type="text/css" />
          <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/js/fancybox/xfade2.js"></script> -->
            <style>
                .currentTextHolder {
                    font-size: 24px;
                } 
                .pp_nav {
                    display: table !important;
                    margin: 0 auto !important;
                } 

                .carousel-control1
                {display: inline-block;
                 margin-top: -10px;
                 position: absolute;
                 top: 50%;
                 z-index: 5;}

                .fa-chevron-left{left: 10%;
                                 margin-left: -10px;
                                 font-size: 30px !important;
                                 color: #000000;
                                 cursor: pointer;}

                .fa-chevron-right{margin-right: -10px;
                                  right: 10%;font-size: 30px !important;color: #000000;
                                  cursor: pointer;
                }

            </style><script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 6000, autoplay_slideshow: true});
            });
            </script>
            <style type="text/css">
                #imp-submit , #question-submit
                {
                    font-size: 15px;}
                .feedback-containner textarea
                {font-size: 15px !important;
                 padding: 5px;}
                </style>   
                <?php include 'menu.php'; ?>
                <div class="top-container">
                <div class="container border-new">
                    <div class="col-md-12 visible-sm visible-xs" id="ourclients">



                    </div>




                    <div class="row ">
                        <div class="recent-logos">
                            <div class="recent-logo-bg-repeat">
                                <div class="recent-logo-bg-top">
                                    <div class="recent-logo-bg-bottom">
                                        <div class="logos-added"> 
                                            <!-- Recent Logo Slider -->

                                            <div id="demo5" class="scroll-img list_carousel">
                                                <div class="caroufredsel_wrapper" ><div class="caroufredsel_wrapper" >

                                                        <ul class="gallery clearfix" id="foo2">

                                                            <?php for ($i = 0; $i < count($slider); $i++) { ?>          
                                                                <li><a href="http://50dollarlogo.com/admin_panel/sample/<?php echo $slider[$i] ?>" rel="prettyPhoto[gallery2]"><img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $slider[$i] ?>"></a></li>
                                                            <?php } ?>
                                                        </ul>

                                                        <div class="clearfix"></div>
                                                        <a id="prev2" class="prev demo5-backward" href="#">&lt;</a>
                                                        <a id="next2" class="next demo5-forward" href="#">&gt;</a>
                                                    </div></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                    </div>


                </div>



            </div>

            <div class="main-container container border-new-down">
                <div class=" col2-right-layout row ">
                    <div class="col-main client-panel col-md-9 col-sm-8">

                        <?php if (@$_SESSION['success_message']) { ?>
                            <div style="color:#f00;border:1px solid #f00;background-color:#FF6;padding:10px;margin-bottom:20px;"><?php echo $_SESSION['success_message'];
                        unset($_SESSION['success_message'])
                            ?></div>
<?php } ?>

                        <h3>YOUR LOGO SAMPLES </h3>
                        <button type="button" id="imp-submit" class="btn btn-success">Submit Free Revision Request</button>
                        <button  type="button" class="btn btn-success" id="question-submit" >Submit Your Questions</button>
                        <div style="height:10px !important;"></div>

                        <!-- <div style="width:350px; color:#F00; font-size:12px; ">"Attach any documents if desired (optional)"</div> --><!-- <br>  -->       
                        <div class="feedback-containner" style="margin:10px 0;display:none;" id="feedback-containner">
                            <form enctype="multipart/form-data" method="post" name="form1" action="<?php echo base_url() ?>client_panel/revision" class="sample" id="rate-designeer" onsubmit="return checkForm()">
<?php if (!empty($samples)) { ?>

                                    <div><b>Free Revision Requests!</b></div>
                                    <br>
                                        <div>Make your free revision requests now.  </div>
                                        <div><h2>Please provide feedback so we can undergo high quality revisions for you!</h2></div>

                                        <input type="hidden" id="rated-value" name="rated-value">   
                                            <div id="rate-section">   
                                                <b>Score your designs!</b>
                                                <br>
                                                    <br>
                                                        Please score your initial designs out of 10 (click to score):
                                                        <br>
                                                            <ul class="raitng">
                                                                <li class="rate" id="1"><p>1</p></li>
                                                                <li class="rate" id="2"><p>2</p></li>
                                                                <li class="rate" id="3"><p>3</p></li>
                                                                <li class="rate" id="4"><p>4</p></li>
                                                                <li class="rate" id="5"><p>5</p></li>
                                                                <li class="rate" id="6"><p>6</p></li>
                                                                <li class="rate" id="7"><p>7</p></li>
                                                                <li class="rate" id="8"><p>8</p></li>
                                                                <li class="rate" id="9"><p>9</p></li>
                                                                <li class="rate" id="10"><p>10</p></li>                    
                                                            </ul>
                                                            <span id="rate-error"></span>
                                                            <div>Note:  With score 1 meaning the lowest score, and score 10 being the highest score. </div>
                                                            </div><br>
<?php } ?>

                                                            <div><b>Provide us any feedback to help our designers revise your designs: </b><br> <br><textarea name="msgcustomer" rows="8" cols="70" id="msgcustomer" class="form-control"></textarea></div>  <br>          
                                                                            <div><input type="file" name="attachment" id="attachment"/>
                                                                                <div id="attachmentQueue" class="uploadifyQueue"></div>
                                                                            </div>
                                                                            <input type="hidden" name="logo_or_stat" value="logo" />
                                                                            <input type="hidden" id="fileList" name="fileList">
                                                                                <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly">
                                                                                    <input type="hidden" name="redirect" value="<?php echo $this->uri->segment(2); ?>"> 
                                                                                        <div>

                                                                                            <br>
                                                                                                <input class=" btn btn-success"  type="submit" name="submit_revision" id="submit_revision" value="Submit Your Score and Revision Request Now!">
                                                                                              <!--   <a id="request_callbackaa"  href="#addcallbackrequestForm"><input type="button" id="request_callback" value="REQUEST A CALL BACK!" /></a>-->

            </div>          <!-- <div><input type="submit" name="submit_revision_rate" id="submit_revision_rate" value="submit free revision request" /></div>-->

                                                                                                    </form></div>
                                                                                                    <div class="feedback-containner" style="margin:10px 0;display:none;" id="question-containner">
                                                                                                        <form enctype="multipart/form-data" method="post" name="form1" action="<?php echo base_url() ?>client_panel/questions" class="sample" id="send-question" onsubmit="return checkForm1()">

                                                                                                            <div>If you have any questions regarding your designs, or about any other design services, <br>provide them in the box below and we'll get back to you immediately.<br><br><textarea name="msgcustomer1" rows="8" cols="80" id="msgcustomer1" class="form-control"></textarea></div>            
                                                                                                                            <div><br><input type="file" name="attachment1" id="attachment1"/><div id="attachment1Queue" class="uploadifyQueue"></div></div>
                                                                                                                            <input type="hidden" id="fileList1" name="fileList1"> 
                                                                                                                                <input type="hidden" name="logo_or_stat" value="logo" />  
                                                                                                                                <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly">         
                                                                                                                                    <div><br><input type="submit" class="btn btn-success submitnow12" name="submit_question" id="submit_question" value="Submit Your Questions Now!"></div>        
                                                                                                                                                </form>
                                                                                                                                                </div>

<!-- <span class="style1" >*Click to Enlarge any image</span> -->

                                                                                                                                                <br/>

                                                                                                                                                <?php
                                                                                                                                                if (!empty($samples)) {
                                                                                                                                                    //echo "<pre>";print_r($samples);
                                                                                                                                                    $ak = 1;
                                                                                                                                                    foreach ($samples as $row) {
                                                                                                                                                        ?>


                                                                                                                                                        <div class="feedbacks">   
        <?php if (!empty($row['adminMessage'])) { ?>     
                                                                                                                                                                <!--  ADMIN MESSAGE START -->
                                                                                                                                                                <div class="feedback_msg <?php echo $row['improvementId']; ?>">        
                                                                                                                                                                    <div class="comment_header">
                                                                                                                                                                        <h3 class="">            
                                                                                                                                                                            <strong><?php echo $date = date('D d M Y H:i', strtotime($row['sentDate']) - (4*60*60) - (45*60)); ?></strong>
                                                                                                                                                                            <!-- <strong><?php //echo $date = date('D d M Y H:i', strtotime($row['sentDate']));  ?></strong> -->
                                                                                                                                                                        </h3>
                                                                                                                                                                    </div>

                                                                                                                                                                    <div class="comments">
                                                                                                                                                                        <?php
                                                                                                                                                                        if ($row['adminMessage'] != 'plzchecksample') {
                                                                                                                                                                            echo $row['adminMessage'];
                                                                                                                                                                        }
                                                                                                                                                                        ?>
                                                                                                                                                                <?php //echo $row['adminMessage'] ?>
                                                                                                                                                                    </div>        
                                                                                                                                                                </div>
                                                                                                                                                            <?php
                                                                                                                                                            } else {
                                                                                                                                                                $get_client_message = $this->clientmodel->get_client_message_logo($row['improvementId']);
                                                                                                                                                                ?>
            <?php if (!empty($get_client_message[0])): ?>
                                                                                                                                                                    <div class="feedback_msg <?php echo $row['improvementId']; ?>">        
                                                                                                                                                                        <div class="comment_header">
                                                                                                                                                                            <h3 class="">            
                                                                                                                                                                                <!-- <strong><?php //echo $date = date('D d M Y H:i', strtotime($get_client_message[0]['submit_date']));  ?></strong> -->
                                                                                                                                                                                <strong><?php echo $date = date('D d M Y H:i', strtotime($get_client_message[0]['submit_date']) - (4*60*60) - (45*60)); ?></strong>
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
                                                                                                                                                                    }
                                                                                                                                                                    ?>
                                                                                                                                                                    </div>
                                                                                                                                                                    <?php
                                                                                                                                                                endif;
                                                                                                                                                                // $ak=2; }else{$ak=1;}
                                                                                                                                                                ?>
        <?php } ?>
                                                                                                                                                            <!--  ADMIN MESSAGE ENDS AND CLIENT MESSAGE STARTS -->  
                                                                                                                                                                <?php //if($_SERVER['REMOTE_ADDR'] == '202.166.221.51'):  ?>          




                                                                                                                                                            <table class=" <?php echo $row['improvementId']; ?>" width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                                                <?php
                                                                                                                                                                $designer_post_id = $row['designer_post_order_id'];
                                                                                                                                                                $oldORnew = 'old';
                                                                                                                                                                if ($this->clientmodel->countTotal('tbl_logo_samples', array('designer_post_id' => $designer_post_id)) > 0) {
                                                                                                                                                                    $oldORnew = 'new';
                                                                                                                                                                    $logos = $this->clientmodel->getAll('tbl_logo_samples', 'designer_post_id', array('designer_post_id' => $designer_post_id, 'sample_type' => 'logo'));
                                                                                                                                                                    //$data['stationary'] = $this->general_db_model->getAll( 'tbl_logo_samples', 'designer_post_id', array('designer_post_id'=>$designer_post_id,'sample_type'=>'stationary'));
                                                                                                                                                                    //echo $this->db->last_query();
                                                                                                                                                                }
                                                                                                                                                                //echo '<pre>'; print_r($designer_post_id);
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
                                                                                                                                                                        /* if(!empty($stationary)){
                                                                                                                                                                          echo '<tr><td><strong>Stationary Samples</strong></td></tr><tr><td>';
                                                                                                                                                                          foreach($stationary as $row){
                                                                                                                                                                          echo '<a href="'.$this->config->item('sample_files_path').$row->sample_name.'" target="_blank"><img src="'.$this->config->item('sample_files_path').'thumb_'.$row->sample_name.'"></a>';
                                                                                                                                                                          }
                                                                                                                                                                          echo '</td></tr>';
                                                                                                                                                                          } */
                                                                                                                                                                    }
                                                                                                                                                                } else {
                                                                                                                                                                    ?>

                                                                                                                                                                    <tr>
                                                                                                                                                                        <td><?php
                                                                                                                                                                if ($row['file_one'] != "") {
                                                                                                                                                                    //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                    if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_one'], "r")) {
                                                                                                                                                                        $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_one'], "latin1", "ISO-8859-1");
                                                                                                                                                                            ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_one'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_one'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_one'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                }
                                                                                                                                                                            }

                                                                                                                                                                            if ($row['file_two'] != "") {
                                                                                                                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_two'], "r")) {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_two'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_two'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_two'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_two'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                }
                                                                                                                                                                            }

                                                                                                                                                                            if ($row['file_three'] != "") {
                                                                                                                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_three'], "r")) {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_three'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_three'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_three'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_three'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                }
                                                                                                                                                                            }

                                                                                                                                                                            if ($row['file_four'] != "") {
                                                                                                                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_four'], "r")) {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_four'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_four'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_four'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_four'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                            if ($row['file_14'] != "") {
                                                                                                                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_14'], "r")) {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_14'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_14'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_14'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_14'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                            if ($row['file_15'] != "") {
                                                                                                                                                                                //if (@getimagesize(PATH_SAMPLE.'thumb_'.$row['file_one']))
                                                                                                                                                                                if (@fopen(PATH_SAMPLE . 'thumb_' . $row['file_15'], "r")) {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . 'thumb_' . $row['file_15'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_15'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                                    <?php
                                                                                                                                                                                } else {
                                                                                                                                                                                    $path_thumb = mb_convert_encoding(PATH_SAMPLE . $row['file_15'], "latin1", "ISO-8859-1");
                                                                                                                                                                                    ?>
                                                                                                                                                                                    <a class="zoom" rel="group" href="<?php echo mb_convert_encoding(PATH_SAMPLE . $row['file_15'], "latin1", "ISO-8859-1"); ?>"> <img src="<?php echo $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                                                                                                                                                                            <?php
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                    ?></td>
                                                                                                                                                                    </tr>
                                                                                                                                                                <?php
                                                                                                                                                            }
                                                                                                                                                            ?>
                                                                                                                                                            </table>
        <?php
//if($ak == 1){
        ?>
                                                                                                                                                            <!--  CLIENT MESSAGE ENDS -->   




                                                                                                                                                            <div style="clear:both;height:1px"></div>
                                                                                                                                                        </div>
        <?php
        $ak++;
    }
    ?>   

 <span class="style1">Click to enlarge any image</span>

    <?php
} else {
    ?>
                                                                                                                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                                                                                        <tr>
                                                                                                                                                            <td>&nbsp;</td>
                                                                                                                                                        </tr>
                                                                                                                                                        <tr>
                                                                                                                                                            <td>&nbsp;</td>
                                                                                                                                           <tr>
                                                                                                                                                            <td align="left"><strong style="color:#A9A9A9;">Your logo samples will be posted here.<br />
                                                                                                                                                                    <br />
                                                                                                                                                                   You will be informed via email once the designs are ready for your viewing. <br />
                                                                                                                                                                    <br />
                                                                                                                                                                    Thank you.</strong></td>
                                                                                                                                                        </tr>
                                                                                                                                                        <tr>
                                                                                                                                                            <td>&nbsp;</td>
                                                                                                                                                        </tr>         
                                                                                                                                                    </table>

    <?php
}

//if(!empty($samples) or isset($_GET['fortest'])) { 
?>

                                                                                                                                               
                                                                                                                                                <br /><br /><br /><br />



                                                                                                                                                <script language="javascript">
                                                                                                                                                    document.title = ":: Client Panel"
                                                                                                                                                    // document.bgColor="#99FFCC"
                                                                                                                                                    function logo(a)
                                                                                                                                                    {

                                                                                                                                                        window.open(a, "myWindow", "status = 1,resizable = 1,scrollbars=yes, width=400")
                                                                                                                                                    }
                                                                                                                                                </script>
                                                                                                                                                <div style="clear: left;"></div>
                                                                                                                                                <!--<div class="copyright">
                                                                                                                                        <a href="<?php echo base_url() ?>client_panel/copyright.php"  ><img src="<?php echo base_url() ?>assets/images/client/copyright.jpg" alt="Copyright Your Logo Now" title="Copyright Your Logo Now" /></a>
                                                                                                                                        </div>-->      </div>
                                                                                                                                                <div class="side-bar col-md-3 col-sm-4">
                                                                                                                                                    <div class="best-value">
                                                                                                                                                        <div class="best-value-text">
                                                                                                                                                            <div align="center"><a href="<?php echo base_url() ?>web-site-design/webdesigner-limited-sale/" target="_blank"><img src="<?php echo base_url() ?>assets/images/webdesign/best-value.jpg" alt="Best Value" title="Best Value"></a></div>
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
                                                                                                                                                    <!--  <div class="security" align="center">
                                                                                                                                                                          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
                                                                                                                                                     
                                                                                                                                                              </div>
                                                                                                                                                   <div class="guarantee" align="center">
                                                                                                                                            <img src="<?php //echo base_url()  ?>assets/images/webdesign/guarantee.jpg" alt="Guarantee" title="Guarantee">
                                                                                                                                            
                                                                                                                                            </div> -->

                                                                                                                                                    <div class="sidebar-support" align="center">
                                                                                                                                                        <span class="images">
                                                                                                                                                            <img src="<?php echo base_url() ?>assets/images/webdesign/lst-UK.gif " alt="UK Live Support" title="UK Live Support">
                                                                                                                                                        </span>
                                                                                                                                                        <p>0800 279 6215</p>

                                                                                                                                                    </div>

                                                                                                                                                </div>
                                                                                                                                                <div class="clear"></div>
                                                                                                                                                </div>
                                                                                                                                                </div>      

<?php include 'footer.php'; ?>

                                                                                                                                                </style>
                                                                                                                                                </body>
                                                                                                                                                </html>