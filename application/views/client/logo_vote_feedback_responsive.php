<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>:: Client Panel ::</title>
        <base href="<?php echo base_url()?>"></base>
        <meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
        <meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>

        <!-- Rating scripts -->


<link href="<?php echo base_url()?>assets/css_client/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css_client/style.css" rel="stylesheet" type="text/css" />

        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/logovote/jquery.ratings.css" />


        <style type="text/css">
            .jquery-ratings-star {
                width: 16px;
                height: 16px;
                background: url('<?php echo base_url()?>/assets/images/logovote/empty-star.png');
                background-repeat: no-repeat;
                position: relative;
                float: left;
                margin-right: 2px;
            }
            .jquery-ratings-full {
                background-image: url('<?php echo base_url()?>assets/images/logovote/full-star.png');
            }
        </style>
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>



 <script>
  (function() {
    var cx = '014983249563816546536:z_l7jildzws';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<style type="text/css">
    table.gsc-search-box{
        visibility: hidden;
    }
</style>

<script type="text/javascript">
    $(function(){
        $('.searchres').keyup(function(e){
            var search_val= $(this).val();
            $('#gsc-i-id1').val(search_val);
                        if(e.which == 13) {
                        $('.gsc-search-button').trigger('click');
                        }

        });
        $('.input-group-btn').click(function(){
            // alert(12);
            var search_val= $('.searchres').val();
            $('#gsc-i-id1').val(search_val);
            $('.gsc-search-button').trigger('click');
        });

        $('body').delegate('.gsc-results-close-btn','click',function(){

            $('.searchres').val('');
        });
        $('body').delegate('.gsc-modal-background-image','click',function(){

            $('.searchres').val('');
        });
    })
</script>





       <!-- <script src="<?php echo base_url()?>assets/js/logovote/jquery-1.3.2.min.js"></script>-->
        <script src="<?php echo base_url()?>assets/js/logovote/jquery.ratings.js"></script>
        <script src="<?php echo base_url()?>assets/js/logovote/example.js"></script>
        <script src="<?php echo base_url()?>assets/js/logovote/nicEdit.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <!-- Ends -->

<!--<link href="<?php echo base_url()?>assets/css/import.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url()?>assets/js/cmxforms.js"></script>-->



        <style>
            .tablebg td {
                padding: 5px;
            }
        </style>

        <script type="text/javascript">
            $(function () {
                var sum = $('.sumans').attr('id');
                $(this).css('background-color', '#FFFFCC');
            });
        </script>

        <!-- main container, leftcha & rightcha css style -->
        <style type="text/css">
            body {
                background: #fff;
            }
            .top {
                background: #fff;
            }
            .main {
                background: #fff;
                /*border: 1px solid #ddd;*/
                border-bottom: none;
                /*border-radius: 10px;*/
            }
            .footer {
                background: #fff;
                border-left: 1px solid #ddd;
                border-right: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                border-radius: 10px;
            }
            .footer-container {
                background: none;
            }
            .mid-container {
                /*background:url(images/order-bg.png) no-repeat;*/
                margin: auto;
                margin-bottom: 0px;
                width: 1000px;
                height:auto;
                position: relative;
                background: #fff;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                -o-border-radius: 10px;
                border-radius: 10px;
                border: 1px solid #ddd;
            }
           /* .main_mind_container{
                padding:0 40px 0 58px;}*/
            .main_mind_container h1{
                padding-top:10px;
                font:26px Arial, Helvetica, sans-serif;
                color:#000;}
            .main_mind_container p{
                padding-top:15px;
                font:14px Arial, Helvetica, sans-serif;}
            .logo_samples{
                padding-bottom:30px;
            }
            .logo_samples li{
                text-decoration:none;
                display:inline-block;
                padding:20px 30px 0px 0px;}
            .logo_samples button{
                padding:5px;
                background-color:#68bb4f;}
            .logo_samples img{
                border:2px solid #999;
                box-shadow:3px 3px 5px #CCC;
                width:255px;
                height:255px;
            }
            .logo_samples h3{
                text-align:center;
                text-decoration:underline;
                padding-top:5px;
                padding-bottom:5px;
                font:bold 16px Arial, Helvetica, sans-serif;
            }
            .logo_samples h4{
                text-align:center;
                font:bold 14px Arial, Helvetica, sans-serif;
                color:#000;
                padding:3px 0px;}
            .avg_score, .fav_votes, .votes {
                border-radius:10px;
                -moz-border-radius:10px;
                -ms-border-radius:10px;
                -o-border-radius:10px;
                -webkit-border-radius:10px;
            }
            .avg_score{
                background-color:#fff475;}
            .fav_votes{
                background-color:#ddd;  }
            .votes{
                background-color:#71bf50;}
            .logo_samples p{
                padding-top:3px;
                font:bold 12px Arial, Helvetica, sans-serif;
            }
            .main_mind_container h2{
                font:16px Arial, Helvetica, sans-serif;
                padding-top:10px;
            }
            .main_mind_container h2 a{
                text-decoration:underline;
                color:#093;}
            .submit{
                padding:10px 0px;}
            .feedbacks{
                /*background: none repeat scroll 0 0 #FFFFFF;*/
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
                margin-left: 60px;}
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
            .logo-message p{
                font:16px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .logo-message p.biggest{
                font:bold 34px/50px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .logo-message p.bigger{
                font:bold 20px/35px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .logo-message1 p.biggest{
                font:bold 34px/50px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .logo-message1 p.bigger{
                font:bold 20px/35px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .logo-message span{
                color:#F03838;
            }
            .logo-message1 span{
                color:#F03838;
            }
            .logo-message p.some1{
                font:16px/35px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .feedback-show p.biggest{
                font:bold 18px Arial,Helvetica,sans-serif;
                padding:0px;
                margin-bottom:12px;
            }
            .feedback-show{
                border: 1px solid #7C9223;
                border-radius: 5px 5px 5px 5px;
            }
            .feedback-show p{
                font:16px Arial,Helvetica,sans-serif;
                padding-top: 3px;
                line-height:20px;
                margin: 8px 15px !important;
            }
            /*.show-me li {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0 !important;
}*/
            .show-me li{
                background: url("assets/images/green-tick.gif") no-repeat scroll 3px -3px transparent;
                color: #333333;
                margin-left: 150px !important;
                padding: 0 0 5px 20px !important;
                display:inherit;
                font:16px Arial,Helvetica,sans-serif !important;
                text-align: left;
            }
        </style>

        <!--[if lt IE 8]>
        <script src="<?php echo base_url()?>assets/js/IE8.js"></script>
        <![endif]-->
    

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/newclientpanel.css">
    </head>

    <body>
    
       
<?php include 'menu.php' ; ?>


      <div class="container border-new">
    <div class="row">
    
<center>
<div class="col-main col-md-12 col-sm-12 col-xs-12  " id="reload-page">
           
                    <!--<div class="col-main client-panel" style="width:630px">-->
                    <div class="main_mind_container">
<?php 
$select_s = $this->db->query("select distinct logo_name from logo_samples_to_client where logo_web_id='".$_SESSION['logoWebId']."'")->result();
$my_Datas = $this->db->query("select * from tbl_logo_samples where sent_to = 'client' and sample_type = 'logo' and logo_web_id=".$_SESSION['logoWebId']." order by designer_post_id desc")->result();
$select1 = $this->db->query("SELECT * from tbl_designers_post_orders join logo_web on tbl_designers_post_orders.logo_web_id=logo_web.logo_web_id where logo_web.status='6' and logo_web.logo_web_id=".$_SESSION['logoWebId']." and  tbl_designers_post_orders.whichOne='latest' and tbl_designers_post_orders.sent_to='client' order by tbl_designers_post_orders.designer_post_order_id")->result();
//echo '<pre>'; print_r($my_Datas); die;
if(empty($my_Datas) && empty($select_s)){ //echo 'sssss';
?>
<div class="logo-message">
<p class="biggest"><span>Actionable feedback</span> at your fingertips.</p>
<p class="bigger">See how your friends and contacts <em>score</em> your logo samples...</p>
<p class="some1">Not yet used our LogoVote<sup>TM</sup> function? <a href="<?php echo base_url();?>client_panel/send_to_friends"><u>Click here</u></a> to use now!</p> 
<p>The samples below are examples. When you receive your logo samples, then your samples will automatically appear below. Once you use LogoVote<sup>TM</sup>, and get feedback from friends/contacts then their scoring and personal feedbacks will automatically appear below.</p>  
<p>You will also receive an email notification each time you get a new score or feedback sent to you. </p>
</div>
<?php }else{ ?>

                                                    <div class="logo-message1">
                                <p class="biggest"><span>Actionable feedback</span> at your fingertips.</p>
                                <p class="bigger">See how your friends and contacts <em>score</em> your logo samples...</p>
                            </div>
                            <?php } ?>
                        
                        <div class="logo_samples">
                                <ul class="col-md-offset-1 col-xs-offset-0">

                                     <?php

$select_s=$this->db->query("select distinct logo_name from logo_samples_to_client where logo_web_id='".$_SESSION['logoWebId']."'")->result();
$my_Datas11 = $this->db->query("select * from tbl_logo_samples where sent_to = 'client' and sample_type = 'logo' and  logo_web_id=".$_SESSION['logoWebId']." ORDER BY id ASC")->result();
$summ = array();
$i=0;

foreach($select_s as $qry_1){
    if(!empty($qry_1->sample_name)){
    $summ[$i] = $qry_1->sample_name;
    }$i++;
}
$counts = count($summ)+1;

$my_Datas = $this->db->query("select * from tbl_logo_samples where sent_to = 'client' and sample_type = 'logo' and logo_web_id=".$_SESSION['logoWebId']." ORDER BY id ASC")->result();
if(count($my_Datas)>0 || count($select_s) > 0){ 
foreach($my_Datas as $qry)
{
$average_score = $this->db->query("SELECT sample_id, count(ratings),ROUND(AVG(ratings),2) FROM feedback_post where sample_id=".$counts." and logo_web_id=".$_SESSION['logoWebId']."")->result_array();
$favourite_vote = $this->db->query("SELECT sample_id, count(winning_vote) FROM feedback_post where winning_vote!=0 and sample_id=".$counts." and logo_web_id=".$_SESSION['logoWebId']."")->result_array();
$votes_count = $this->db->query("SELECT sample_id, count(sample_id) FROM feedback_post where sample_id=".$counts." and logo_web_id=".$_SESSION['logoWebId']."")->result_array(); 
if(!empty($qry->sample_name)){
if($average_score[0]['count(ratings)']>0)
{
?>  
                                    <!-- <li id="logo_select1">
                                    <img src="http://50dollarlogo.com/admin_panel/sample/p1a8lg6p1s3om1gsckid1pqfmo37.png" title="p1a8lg6p1s3om1gsckid1pqfmo37.png" height="120px" width="120px" class="select-this" id="logo1" />
                                            <h3>Logo Sample No. 1</h3>
                                            <h4 class="avg_score">Average Score : 4.90</h4>
                                            <h4 class="fav_votes">Favourite votes : 2</h4>
                                            <h4 class="votes">Votes : 10</h4>
                                    </li> -->
                                    <li id="logo_select<?php echo $counts?>" style="float:left;">
                                            <img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $qry->sample_name;?>" title="<?php echo $qry->sample_name;?>" height="120px" width="120px" class="select-this" id="logo<?php echo $counts?>" />
                                            <h3>Logo Sample No. <?php echo $counts?></h3>
                                            
                                            <?php 
                                            foreach($average_score as $qrys){?>
                                            <h4 class="avg_score">Average Score : <?php echo $qrys['ROUND(AVG(ratings),2)'];?></h4>
                                            <?php } ?>
                                            <?php 
                                            foreach($favourite_vote as $qrys){
                                            ?>
                                            <h4 class="fav_votes">Favourite votes : <?php echo $qrys['count(winning_vote)'];?></h4>
                                            <?php } ?>
                                            <?php 
                                            foreach($votes_count as $qrys){?>
                                            <h4 class="votes">Votes : <?php echo $qrys['count(sample_id)'];?></h4>
                                            <?php } ?>
                                    </li>
                                    <?php }else{
?>
<li id="logo_select<?php echo $counts?>"><img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $qry->sample_name;?>" title="<?php echo $qry->sample_name;?>" height="120px" width="120px" class="select-this" id="logo<?php echo $counts?>" />
<h3>Logo Sample No. <?php echo $counts?></h3>
<h4 class="avg_score">Average Score : 0</h4>
<h4 class="fav_votes">Favourite votes : 0</h4>
<h4 class="votes">Votes : 0</h4>
</li>
<?php }$counts++;}}}


else
{
$new_data = $this->db->query("select * from logo_samples")->result();
foreach($new_data as $mydata)
{
?>  
<li id="logo_select<?php echo $mydata->id?>"><img src="<?php echo base_url()?>images/logo-portfolio/<?php echo $mydata->image;?>" title="<?php echo $mydata->image;?>" height="120px" width="120px" class="select-this" id="logo<?php echo $mydata->id?>" />
<h3>Logo Sample No. <?php echo $mydata->id?></h3>
<h4 class="avg_score">Average Score : 0</h4>
<h4 class="fav_votes">Favourite votes : 0</h4>
<h4 class="votes">Votes : 0</h4>
</li>
<?php }}//} ?>


                                                                   


                                </ul>

                            <br /><br />
                            
                        </div>

                        <div class="col-md-10 col-md-offset-1 col-sm-offset-0 col-xs-offset-0 ">
<div class="feedback-show ">
                                <p class="biggest"><u>Scoring guide:</u> </p>
                                <p >Our LogoVote<sup>TM</sup> function allows for each contact to do as follows:</p>
                                <ul class="show-me">
                                    <li>Vote for their "favourite" logo sample.</li>
                                    <li>Score each sample from 1 to 10 (with 10 being defined as excellent).</li>
                                    <li>Provide written feedbacks in efforts to help you.</li>
                                </ul>
                                <br />
                                <p><strong>Average score</strong>: The average score for the specific logo sample.The average score<br />
                                    is calculated from all scores given for the specific logo sample. </p>

                                <p><strong>Favourite votes</strong>: The total number of times the specific logo sample has been chosen<br />
                                    as the "favourite" logo sample.  </p>

                                <p><strong>Votes</strong>: The total number of times the specific logo sample has received a score.<br />
                                    This helps put the "average" score into more perspective.</p>
                            </div>
                                
<?php
$query = $this->db->query("select * from feedback_messages where logo_web_id=".$_SESSION['logoWebId']." ORDER by id DESC")->result();
foreach($query as $qry)
{
$dates = $qry->posted_date; 
$new_dates = strtotime($dates);
$converted_date = date('D, d M', $new_dates);
if(!empty($qry->description)){
?>
<div class="feedbacks">
<div class="feedbacker">
<img src="<?= base_url(); ?>assets/images/social_icons/avatar.gif" alt="" title="" />
</div>
<div class="feedback_msg">
<div class="comment_header">
<?php if(!empty($qry->posted_user)){?>
<h3 class="sumans" id="maharjan<?php echo $qry->id?>">
<a href="javascript:void(0);">
<strong><?php echo $qry->posted_user;?></strong>
<?php echo $converted_date;?> at <?php echo $qry->posted_time;?></a>
</h3>
<?php }else{ ?>
<h3 class="sumans">
<a href="javascript:void(0);">
<strong>Anonymous</strong>
<?php echo $converted_date;?> at <?php echo $qry->posted_time;?></a>
</h3>
<?php } ?>
</div>
<div class="comments">
<?php echo str_replace('&nbsp;','',$qry->description);?>
</div>
</div>

</div>
<?php }} ?>
                                                                <br /><!--<br />-->


                        <!-- <h2>Thank you for your co-operation.</h2><br/> -->
                        <?php 
//echo '<h2><strong><a href="'.base_url().'">'.SITE_NAME.'</a></strong></h2>';
//echo '<h2>'.PHONE_NO.' (24/7)</h2>';
?>
                        <!-- <h2><strong><a href="<?php echo base_url()?>">LogoDesignGuarantee.com</a></strong></h2><h2>0800 279 6215 (24/7)</h2>                    </div> -->
                    <!--</div>-->
                    <div class="clear"></div>
                    </div>
                </div>
            </div>
            </div>
            
            </center>
       <script type="text/javascript">
//     //for pop out chat window on clicking on [Live Chat "HI"] and [Live Support "HI"]
// var winW1 = $(window).width();
// var hiIcon = $(".live-support-cover").find("i");
// var liveSupportTxt = $(".live-support-cover").find("a");
// var liveChat = $(".live-chat");
// var packageChat = $(".chat-service");
// var actionPop = (function(){
//     window.open("http://messenger.providesupport.com/messenger/pradyumna.html", "_blank", "width=600,height=650");
// });
// hiIcon.live("click", actionPop);
// liveSupportTxt.live("click", actionPop);
// liveChat.live("click", actionPop);
// packageChat.live("click", actionPop);
 </script>
<?php include 'footer.php' ; ?>
              </body>
</html>