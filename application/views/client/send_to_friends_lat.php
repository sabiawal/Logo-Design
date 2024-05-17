<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<base href="<?php echo base_url();?>" />
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/all_jquery.min.js" type="text/javascript"></script>
<link href="<?php echo base_url()?>css/send_to_friend.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.pack.js"></script>

</head>
<body>
<div id="contents_preview"></div>
<div class="wrapper">
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container1.php"); ?>
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

<script type="text/javascript" src="<?php echo base_url();?>assets/js/address_books.js"></script>
<script type="text/javascript" charset="utf-8">

var owner_email, owner_first_name, owner_last_name;
var appendInTextarea = true; // whether to append to existing contacts in the textarea
var emailSep = ", "; // email address separator to use in textarea
function populateTextarea(contacts) {
var contact, email;
var emails = [];
var textarea = document.getElementById('contact_list');
// preserve the original value in the textarea
if (appendInTextarea && textarea.value.strip().length > 0) {
emails = textarea.value.split(emailSep);
}
// format each email address properly
for (var i = 0; i < contacts.length; i++) {
contact = contacts[i];
email = contact.selectedEmail();
entry = email;
var sum111 = $('li.sumans input#checked_datas'+i+'').val();
if(entry!=sum111){
$("#import_contact p#stores").append('<li id="addrs'+i+'" class="sumans"><input name="addr_addemail1[]" id="checked_datas'+i+'" type="text" value='+entry+' disabled="disabled"></li>\n');
}
if (emails.indexOf(entry) < 0) {
emails.push(entry);
}
}
textarea.value = emails.join(emailSep);
// capture the owner information
owner_email = (owner && owner.email && owner.email[0] && owner.email[0].address) || "";
owner_first_name = (owner && owner.first_name) || "";
owner_last_name = (owner && owner.last_name) || "";
}
// Replace the domain_key and stylesheet with valid values.
var csPageOptions = {
domain_key:"6Z4PU7F3PB3R4Y2PEA7B",
afterSubmitContacts:populateTextarea
};
</script>    
    
<textarea id="contact_list" style="width:450px;height:82px; display:none;"></textarea>
<div class="bd">
<h3>Preview (You can un-select any logo samples so as <u>not</u> to show them to your contacts)</h3>
<a id="logo_select" class="">Selected logo designs</a>
<?php 
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
<li id="logo_select<?php echo $qrys->designer_post_order_id?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qry->sample_name);?>" title="<?php echo rawurlencode($qry->sample_name);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qry->designer_post_order_id?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qry->sample_name)?>" id="select_all<?php echo $qry->designer_post_order_id?>" type="checkbox">
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
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_one']);?>" title="<?php echo rawurlencode($qrys['file_one']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_one'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_two']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_two']);?>" title="<?php echo rawurlencode($qrys['file_two']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_two'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_three']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_three']);?>" title="<?php echo rawurlencode($qrys['file_three']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo $qrys['file_three']?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_four']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_four']);?>" title="<?php echo rawurlencode($qrys['file_four']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_four'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_five']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_five']);?>" title="<?php echo rawurlencode($qrys['file_five']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_five'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_six']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_six']);?>" title="<?php echo rawurlencode($qrys['file_six']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_six'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_seven']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_seven']);?>" title="<?php echo rawurlencode($qrys['file_seven']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_seven'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_eight']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_eight']);?>" title="<?php echo $qrys['file_eight'];?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_eight'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_nine']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_nine']);?>" title="<?php echo rawurlencode($qrys['file_nine']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_nine'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_ten']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_ten']);?>" title="<?php echo rawurlencode($qrys['file_ten']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_ten'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_eleven']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_eleven']);?>" title="<?php echo rawurlencode($qrys['file_eleven']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_eleven'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_twelve']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_twelve']);?>" title="<?php echo rawurlencode($qrys['file_twelve']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_twelve'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_thirteen']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_thirteen']);?>" title="<?php echo rawurlencode($qrys['file_thirteen']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_thirteen'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_14']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_14']);?>" title="<?php echo rawurlencode($qrys['file_14']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
<form id="cheked_bx" name="check_this1" class="check_this1" method="post">
<input class="checked_box" name="checked_all[]" value="<?php echo rawurlencode($qrys['file_14'])?>" id="select_all<?php echo $qrys['designer_post_order_id']?>" type="checkbox">
</form>
<?php } ?>
<?php
if($qrys['file_15']!='')
{
?>
<li id="logo_select<?php echo $qrys['designer_post_order_id']?>"><img src="http://50dollarlogo.com/admin_panel/sample/thumb_<?php echo rawurlencode($qrys['file_15']);?>" title="<?php echo rawurlencode($qrys['file_15']);?>" height="140px" width="140px" class="select-this" id="logo<?php echo $qrys['designer_post_order_id']?>" />
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

<div class="import-email"> <a id="source-yahoo" href="javascript:void(0);" onclick="return cloudsponge.launch('yahoo');" title="Yahoo"><img class="cs_import" src="<?php echo base_url();?>images/social_icons/yahoo1.png" height="100" />
<p class="seal-image">Yahoo</p>
</a> <a id="source-gmail" href="javascript:void(0);" onclick="return cloudsponge.launch('gmail');" title="Gmail"><img class="cs_import" src="<?php echo base_url();?>images/social_icons/gmail1.png" height="100" />
<p class="seal-image">Gmail</p>
</a> <!--<a id="source-windowslive" href="javascript:void(0);" onclick="return cloudsponge.launch('windowslive');" title="Hotmail"><img class="cs_import" src="<?php //echo base_url();?>images/social_icons/hotmail1.png" height="100" />
<p class="seal-image">Hotmail</p>
</a>--><a id="source-aol" href="javascript:void(0);" onclick="return cloudsponge.launch('aol');" title="Aol"><img class="cs_import" src="<?php echo base_url();?>images/social_icons/aol_icon1.png" height="100" />
<p class="seal-image">Aol</p>
</a><!--<a id="source-outlook" href="javascript:void(0);" onclick="return cloudsponge.launch('outlook');" title="Outlook"><img class="cs_import" src="<?php //echo base_url();?>images/social_icons/outlook1.png" height="100" />
<p class="seal-image">Outlook</p>
</a>--><a id="source-plaxo" href="javascript:void(0);" onclick="return cloudsponge.launch('plaxo');" title="Plaxo"><img class="cs_import" src="<?php echo base_url();?>images/social_icons/plaxo.png" height="100" />
<p class="seal-image">Plaxo</p>
</a> </div>
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
<script type='text/javascript' src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
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