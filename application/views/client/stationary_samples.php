<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>:: Client Panel ::</title>
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
        <link href="<?php echo base_url() ?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
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

<!--<script type="text/javascript" src="<?php //echo base_url();    ?>web/uploadify/jquery-1.4.2.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/uploadify_old/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/uploadify_old/jquery.uploadify.v2.1.4.min.js"></script>
        <link href="<?php echo base_url(); ?>assets/uploadify_old/uploadify.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            // <![CDATA[
            $(document).ready(function () {
                $('#attachment').uploadify({
                    'uploader': '<?php echo base_url(); ?>assets/uploadify_old/uploadify.swf',
                    'script': '<?php echo base_url(); ?>assets/uploadify_old/uploadify.php',
                    'cancelImg': '<?php echo base_url(); ?>assets/uploadify_old/cancel.png',
                    'folder': '../admin_panel/upload/',
                    'auto': true,
                    'multi': true,
                    'hideButton': false,
                    'buttonImg': "<?php echo base_url(); ?>assets/images/client/attachment_image.gif",
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
            }
            $(function () {
                $('#imp-submit').on('click', function () {
                    $('#feedback-containner').slideToggle();
                });
            });
        </script>
        <style>
            #feedback-containner div{
                margin-top:10px;
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
        </head>
        <body>
            <div class="wrapper">
                <?php $this->load->view("includes/client/header.php"); ?>
                <?php $this->load->view("includes/client/top_container.php"); ?>
            <div class="main-container">
                <div class="main col2-right-layout">
                    <div class="col-main client-panel">
                        <?php if (isset($_SESSION['success_message'])) { ?>
                            <div style="color:#f00;border:1px solid #f00;background-color:#FF6;padding:10px;margin-bottom:20px;"><?php
                                echo $_SESSION['success_message'];
                                unset($_SESSION['success_message']);
                                ?></div>
                        <?php } ?>

                        <h1>Your stationary samples </h1>
                        <span class="style1">*Click to Enlarge any image</span>
                        <br/>
                        <?php
                        if ($samples) {
                            foreach ($samples as $row) {
                                ?>
                                <div class="feedbacks">
                                    <?php if (!empty($row['adminMessage'])): ?>     
                                        <!--  ADMIN MESSAGE START -->
                                        <div class="feedback_msg">        
                                            <div class="comment_header">
                                                <h3 class="">            
                                                    <strong><?php echo $date = date('D d M Y H:i', strtotime($row['sentDate']) - (5 * 60 * 60) - (45 * 60)); ?></strong>
                                                </h3>
                                            </div>

                                            <div class="comments">
                                            <?php if($row['adminMessage'] != 'plzchecksample'){ echo $row['adminMessage'];}?>
                                                <?php //echo $row['adminMessage'] ?>
                                            </div>        
                                        </div>
                                    <?php endif; ?>


                                    <!--  <div class="feedback_msg">
                                      
                                      <div class="comment_header">
                                          <h3 class="">            
                                        <strong><?php // echo $date = date('D d M Y H:i', strtotime($row['sentDate']));    ?></strong>
                                      </h3>
                                          </div>
                                      
                                      <div class="comments">
                                    <?php //echo $row['adminMessage']   ?>
                                      </div>
                                      
                                      </div>-->

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
                                    <?php $get_client_message = $this->clientmodel->get_client_message($row['improvementId']); ?>
                                    <?php if (!empty($get_client_message[0])): ?>
                                        <div class="feedback_msg">        
                                            <div class="comment_header">
                                                <h3 class="">            
                                                    <strong><?php echo $date = date('D d M Y H:i', strtotime($get_client_message[0]['submit_date'])); ?></strong>
                                                </h3>
                                            </div>

                                            <div class="comments" style="font-style: italic; font-weight: bold;">
                                                <?php echo $get_client_message[0]['idea_of_clint']; ?>
                                            </div>        
                                        </div>
                                    <?php endif; //endif;  ?>
                                    <div style="clear:both;height:1px"></div>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                            </table>

                            <?php /* if(isset($_GET['showbox'])) {?>
                              <input name="button" type="button" class="imp-submit" id="imp-submit"/>
                              <br />
                              <form method="post" name="form1" action="<?php echo base_url()?>client_panel/information" class="sample" id="rate-designeer">
                              <div style="width:350px; color:#990000; font-size:12px; ">"Attach any documents if desired (optional)"</div><br />
                              <div id="feedback-containner" style="margin:20px 0;display:none;">
                              <div>Your Revision Request<br><textarea name="msgcustomer" rows="8" cols="60"></textarea></div>
                              <div><input type="file" name="attachment" id="attachment" /></div>
                              <input type="hidden" id="fileList" name="fileList" />
                              <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly">
                              <input type="hidden" name="redirect" value="<?php echo $this->uri->segment(2); ?>">
                              <div><input type="submit" name="submit_revision" id="submit_revision" value="Submit" /></div>
                              </div>
                              </form>
                              <?php } */ ?>
                            <?php
                        }
                        ?>
                        <form method="post" name="form1" action="<?php echo base_url() ?>client_panel/revision" class="sample">
                            <span class="style1">Click to Enlarge any image</span>
                            <br /><br />
                            <input name="button" type="button" class="imp-submit" id="imp-submit"/>
                            <br />
                            <div style="width:350px; color:#990000; font-size:12px; ">"Attach any documents if desired (optional)"</div><br />
                            <div id="feedback-containner" style="margin:20px 0;display:none;">
                                <div>Your Revision Request<br><textarea name="msgcustomer" rows="8" cols="60"></textarea></div>            
                                <div><input type="file" name="attachment" id="attachment" /></div>
                                <input type="hidden" name="logo_or_stat" value="stat" />
                                <input type="hidden" id="fileList" name="fileList" />
                                <input type="hidden" name="id" value="<?php echo $id; ?>" readonly="readonly"> 
                                    <input type="hidden" name="redirect" value="<?php echo $this->uri->segment(2); ?>">
                                        <div><input type="submit" name="submit_revision" id="submit_revision" value="Submit" /></div>           
                                        </div>        
                                        </form>
                                        <script language="javascript">
                                            document.title = ":: Client Panel"
                                            document.bgColor = "#99FFCC"
                                            function logo(a)
                                            {
                                                window.open(a, "myWindow", "status = 1,resizable = 1,scrollbars=yes, width=400")
                                            }
                                        </script>
                                        <div style="clear: left;"></div>
                                        <?php $this->load->view('includes/client/copyright.php'); ?>
                                        </div>
                                        <div class="side-bar">
                                            <?php $this->load->view("includes/client/sidebar-1.php"); ?>
                                            <div class="security" align="center">
                                                <?php if (COUNTRY == 'UK') { ?>
                                                    <!-- START SCANALERT CODE FOR LDG.CO.UK --> 
                                                    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
                                                    <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
                                                <?php } elseif (COUNTRY == 'USA') { ?>
                                                    <!-- START SCANALERT CODE FOR LDG.COM --> 
                                                    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a> 
                                                    <!-- END SCANALERT CODE LDG.COM  -->
                                                <?php } ?>
                                            </div>
                                            <?php $this->load->view("includes/client/sidebar-2.php"); ?>
                                        </div>
                                        <div class="clear"></div>
                                        </div>
                                        </div>
                                        <div class="footer-container">
                                            <div class="footer">
                                                <?php
                                                $this->load->view('includes/client/footer.php');
                                                $this->load->view('includes/client/seal-top.php');
                                                $this->load->view('includes/client/footer-menu.php');
                                                ?>
                                            </div>
                                        </div>
                                        </div>
                                        </body>
                                        </html>