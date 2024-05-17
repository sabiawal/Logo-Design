<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<base href="<?php echo base_url();?>" />
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css_client/send_to_friend.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="<?= base_url(); ?>assets/js/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/all_jquery.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    //obj.style.height = obj.contentWindow.document.body.scrollHeight + 150 + 'px';
	obj.style.height = obj.contentDocument.documentElement.scrollHeight + 'px';
  }
</script> 

</head>
<body>
<div id="contents_preview"></div>
<div class="wrapper">
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php"); ?>
<div class="main-container">

<div class="main col2-left-layout" id="reload-page">   
<?php echo global_message();?>
<div class="showcase-text">
<p class="big-text"><span>Showcase</span> your logo samples to your<br /> friends and contacts!</p>
<p class="bigger">Let them <u>vote</u> for their best one, and get feedback to help you!...</p>

<p>Other benefits:</p>
<ul>
<li>Get your new business idea out to potential customers.</li>
<li><strong>Free</strong> way to advertise to many of your email contacts.</li>
<li>Open your mind to other's views and feedbacks. </li>
<li><strong>Fast</strong>. Only takes 2 minutes to use.  </li>
</ul>
</div>

<div class="col-main client-panel" style="width:630px">

<div class="body2-left">

<textarea id="contact_list" style="width:450px;height:82px; display:none;"></textarea>
<div class="bd">
<h3>Preview (You can un-select any logo samples so as <u>not</u> to show them to your contacts)</h3>
<a id="logo_select" class="">Selected logo designs</a>
<?php 
//print_r($_SESSION);
$my_Datas_1 = $this->db->query("select * from tbl_logo_samples where logo_web_id=".$_SESSION['logoWebId']." ORDER BY id ASC")->result();
if(empty($samples) && empty($my_Datas_1))
{
?>
<div class="sample-text">
<p>The samples below are examples. When you receive your logo samples, then your samples will automatically appear below (ready for you to send to your contacts and friends).</p>
</div>
<?php } ?>
<div style="overflow: hidden;" class="sm-preview" id="card_preview_block">
<ul>
<?php
$c_email = $this->db->query("select username from client_info where logoWebId=".$_SESSION['logoWebId']."")->result();
$user_email = $c_email[0]->username;
$my_Datas_1 = $this->db->query("select * from tbl_logo_samples where logo_web_id=".$_SESSION['logoWebId']." ORDER BY id ASC")->result();
if(!empty($samples) || !empty($my_Datas_1))
{ 
$my_Datas = $this->db->query("select * from tbl_logo_samples where logo_web_id=".$_SESSION['logoWebId']." ORDER BY id ASC")->result();
if(count($my_Datas)>0){ 
foreach($my_Datas as $qry)
{ 
if(!empty($qry->sample_name))  {  
?>
<li id="logo_select" value="<?php echo rawurlencode($qry->sample_name)?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qry->sample_name);?>" title="<?php echo rawurlencode($qry->sample_name);?>" height="140px" width="140px" class="select-this" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qry->sample_name)?>" type="checkbox">
</form>
</li>
<?php }}} ?>    
<?php
foreach($samples as $qrys)
{
if($qrys['file_one']!='')
{
?>
<!-----live site = http://50dollarlogo.com/   localhost = http://localhost/50dl/------>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_one'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_one']);?>" title="<?php echo rawurlencode($qrys['file_one']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo $qrys['file_one']?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_two']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_two'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_two']);?>" title="<?php echo rawurlencode($qrys['file_two']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_two'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_three']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_three'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_three']);?>" title="<?php echo rawurlencode($qrys['file_three']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_three'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_four']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_four'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_four']);?>" title="<?php echo rawurlencode($qrys['file_four']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_four'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_five']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_five'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_five']);?>" title="<?php echo rawurlencode($qrys['file_five']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_five'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_six']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_six'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_six']);?>" title="<?php echo rawurlencode($qrys['file_six']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_six'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_seven']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_seven'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_seven']);?>" title="<?php echo rawurlencode($qrys['file_seven']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_seven'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_eight']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_eight'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_eight']);?>" title="<?php echo $qrys['file_eight'];?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_eight'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_nine']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_nine'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_nine']);?>" title="<?php echo rawurlencode($qrys['file_nine']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_nine'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_ten']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_ten'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_ten']);?>" title="<?php echo rawurlencode($qrys['file_ten']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_ten'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_eleven']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_eleven'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_eleven']);?>" title="<?php echo rawurlencode($qrys['file_eleven']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_eleven'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_twelve']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_twelve'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_twelve']);?>" title="<?php echo rawurlencode($qrys['file_twelve']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_twelve'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_thirteen']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_thirteen'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_thirteen']);?>" title="<?php echo rawurlencode($qrys['file_thirteen']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_thirteen'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_14']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_14'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_14']);?>" title="<?php echo rawurlencode($qrys['file_14']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_14'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_15']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>" value="<?php echo rawurlencode($qrys['file_15'])?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_15']);?>" title="<?php echo rawurlencode($qrys['file_15']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_15'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
</li>
<?php }}
else
{
$dats = $this->db->query("select * from logo_samples")->result();
foreach($dats as $qry)
{	
?>
<li id="logo_select<?php echo $qry->id?>"><img src="<?php echo base_url();?>images/logo-portfolio/<?php echo $qry->image?>" title="<?php echo $qry->image;?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qry->id?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" action="<?php echo site_url("client_panel/logo_send_mail");?>" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo $qry->id?>" id="select_all<?php echo $qry->id?>" type="checkbox">
</form>
</li>
<?php }} ?>
</ul>

</div><p id="logos1" class="ctr mg"></p>
</div>
  <form action="<?php echo site_url("client_panel/logo_send_mail");?>" method="post" name="check_this2" class="check_this2" id="cardsendfrm"  onSubmit="return dublicate_checks(this);">
  <div id="logo-show"></div>
  <h3 class="sender_det1">Sender Details</h3>
  <div class="bd">
    <ul class="std reciver">
      <li>
        <div class="sm disp-no"><span class="rec"></span><span class="rec"></span></div>
        <input class="sender_email" name="sender_email" id="sender_email" value="<?php echo $user_email;?>" type="text" placeholder="Your Email Address" onchange="return check_sender_details();">
            <input type="hidden" name="logo_web_id" id="logoWedId" class="logo_s" value="<?php echo $_SESSION['logoWebId'];?>"/>
      </li>
    </ul>
  </div>
</form>
  <h3 class="sender_det2">Receiver Details<span class="std"> (Send this ecard to multiple recipients)</span></h3>
  
  <div class="bd">
<h3>Address Book</h3>

<form action="<?php echo site_url("client_panel/logo_send_mail");?>" method="post" name="check_this3" class="check_this3" id="cardsendfrm">
<div style="display: block;" id="import_contact" class="disp-no">
<p class="std boldly" id="imports">Import Contacts &gt;&gt; Send to many people, fast!<br />Click below to import .....</p>
<p>"Import contacts" feature is recommended. Here's why:</p>
<ul>
<li>Allows you to <strong>send to all your contacts <em>efficiently</em></strong>.</li>
<li>Start mass marketing now &ndash; <strong>get much greater results!</strong></li>
<li>Only takes <strong>30 seconds to use</strong>.</li>   
<li>If you have more than one account, <strong>you can access all your<br /> email accounts</strong> (Yahoo, Gmail and Hotmail).</li>   
</ul>
<p><u>Click</u> your email account image below to use now!..</p>

<?php
$this->db->where('logo_web_id',$_SESSION['logoWebId']);			
$this->db->order_by('submit_date','desc');
$qry = $this->db->get('tbl_designers_post_orders');
$row = $qry->result_array();

$this->db->where('logo_web_id',$_SESSION['logoWebId']);			
$qry1 = $this->db->get('tbl_logo_samples');
$row_1 = $qry1->result_array();

$row_data = array();
foreach($row as $rw){
    if(!empty($rw['file_one'])){
    $row_data[] = $rw['file_one'];
    }
    if(!empty($rw['file_two'])){
    $row_data[] = $rw['file_two'];
    }
    if(!empty($rw['file_three'])){
    $row_data[] = $rw['file_three'];
    }
    if(!empty($rw['file_four'])){
    $row_data[] = $rw['file_four'];
    }
    if(!empty($rw['file_five'])){
    $row_data[] = $rw['file_five'];
    }
    if(!empty($rw['file_six'])){
    $row_data[] = $rw['file_six'];
    }
    if(!empty($rw['file_seven'])){
    $row_data[] = $rw['file_seven'];
    }
    if(!empty($rw['file_eight'])){
    $row_data[] = $rw['file_eight'];
    }
    if(!empty($rw['file_nine'])){
    $row_data[] = $rw['file_nine'];
    }
    if(!empty($rw['file_ten'])){
    $row_data[] = $rw['file_ten'];
    }
    if(!empty($rw['file_eleven'])){
    $row_data[] = $rw['file_eleven'];
    }
    if(!empty($rw['file_twelve'])){
    $row_data[] = $rw['file_twelve'];
    }
    if(!empty($rw['file_thirteen'])){
    $row_data[] = $rw['file_thirteen'];
    }
    if(!empty($rw['file_14'])){
    $row_data[] = $rw['file_14'];
    }
    if(!empty($rw['file_15'])){
    $row_data[] = $rw['file_15'];
    }
}
foreach($row_1 as $ro_w){
    if(!empty($ro_w['sample_name']))
    $row_data[] = $ro_w['sample_name'];
}
?>
<iframe id="contacts-imp" src="<?php echo base_url();?>contact_import/iframe_load.php?user_email=<?php echo $user_email;?>&logoWebId=<?php echo $_SESSION['logoWebId'];?>&<?php echo http_build_query(array('array'=>$row_data));?>" width="620" height="180" scrolling="auto" frameborder="0" style="border:0px #FFFFFF;overflow-x: hidden; overflow-y: auto;" name="Gmail Frame" marginheight="0" onload='javascript:resizeIframe(this);'>
</iframe>
<p class="sm txt-left" id="stores">We won't store the username and password.<br /><br /></p>
</div>

</form>

<div id="address_book" class="add-book std">
<div class="input_display">
</div>
<p id="mess" style="color: #4EB51C; font-weight: bold; height: 0; margin: 0 0 18px 20px; text-align: center; display:none;">Contact Updated successfully!!!</p>
<div class="input_data">
<ul style="display: block;" class="disp">
<p id="this_check" class="bd-yellow boldly sm ctr">Alternatively, manually add email addresses below for 
whom you want to send to.</p>
<li class="hide-show">
  <span class="add">Email Address</span>
</li>
</ul>
<!--</form>-->
</div>
<form id="my_ajax" class="ajax_call" method="post">
<ul>
<div class="error-message1"></div>
<li><input name="addemail[]" id="addemail1" class="add_email" placeholder="Add Receiver Email Address" type="text" value="" style="margin:5px 9px 5px 35px; height:22px;"></li>
<div class="clonnings"></div>
<li><p class="add-more" title="Add Receiver Email">Add another email</p></li>
</ul>
</form>
<br />
</div>
<form action="<?php echo site_url("client_panel/logo_send_mail");?>" method="post" name="check_this4" class="check_this4" id="cardsendfrm"  onsubmit="merge(); return true;">
<div class="send-button">
<input type="submit" class="send-now-btn boldly" value="Send Now" id="send_btn" onclick="return dublicate_email_check(this);">
</div>
</form>
</div>

</div>

        <div style="clear: left;"></div>
        <?php //$this->load->view('includes/client/copyright.php'); ?>
      </div>
 <!--block-->   
   <div class="body2-right side-bar">
  <h3 class="sender_det">Message<br /><span class="std">We have given a <strong>template text</strong> to<br /> help speed things up for you. You<br /> can modify the text if you wish. 
</span></h3>
  <div class="bd" id="editor-bd">
  
    <div class="editor">
  <div>
  
 <form class="check_this6" action="<?php echo site_url("client_panel/logo_send_mail");?>" name="check_this6" method="post">   
<p class="text_area"><textarea id="contents" name="contents" style="width: 100%; height: 135px;"><p>Dear Friends,</p><p><i>Hopefully you can help...</i></p><p>The images below are my logo samples for my new business.</p><p>I would appreciate any feedback you may wish to give me.</p><p>You can vote for your best one!<br /></p><p>You can also score each logo sample out of 10.</p><p>This will help me to get my perfect logo.</p><p>Thank you kindly,</p></textarea></p>
<div class="bd" id="text-hide">
    <ul id="receiver_dtl" class="std reciver">
<p class="text_area"><textarea id="business_aim" name="business_aim" placeholder="<p>Business aims (what image your logo is trying to project) >Inform your friends what you are trying to achieve so they can help with their feedback.</p><p>Optional* You can leave this part blank and this whole area will not be shown to your friends.</p>"></textarea></p>      
    </ul>
  </div>
</form>
<script type='text/javascript' src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script type='text/javascript'>
//CKEDITOR.plugins.addExternal( 'confighelper', 'http://martinezdelizarrondo.com/fckplugins/confighelper/' );
CKEDITOR.plugins.addExternal( 'confighelper', '<?php echo base_url();?>assets/js/confighelper_plugin.js' );
CKEDITOR.config.fillEmptyBlocks = false;
CKEDITOR.config.tabSpaces = 0;
CKEDITOR.config.extraPlugins = 'confighelper';
CKEDITOR.config.toolbar_Basic =
[
    [ 'Bold','Italic','Underline','NumberedList','BulletedList','Source'],
];
CKEDITOR.config.toolbar = 'Basic';
CKEDITOR.on('instanceCreated', function (e) {
	if (e.editor.name != 'business_aim') 
        return;	
});
CKEDITOR.replace('contents', CKEDITOR.config.toolbar_Basic);
CKEDITOR.replace('business_aim', CKEDITOR.config.extraPlugins);
</script>

</div>
    </div>
  </div>
<div class="success-message"></div>       
<div class="save-message" id="">Save Message</div>
<!--<div class="save-message" id="If you want to use your own message then please click on Save-Message button.">Save Message</div>-->
</div>
 <!--block-->   
      
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