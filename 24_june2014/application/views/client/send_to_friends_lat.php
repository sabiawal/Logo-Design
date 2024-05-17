<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<base href="<?php echo base_url();?>" />
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>

<!------CKeditor getting data + email validation Script---------->
<script type="text/javascript">
$(document).ready(function(){ 
$('#send_btn').click(function(){ 
var values = CKEDITOR.instances['contents'].getData();

var replaced_values=values.replace(/\s+/g, ' ');
var business_aim1 = CKEDITOR.instances['business_aim'].getData();
var replaced_business=business_aim1.replace(/\s+/g, ' ');
$(".check_this2").append('<textarea cols="20" id="conts" name="text-message" rows="20" style="display:none;">'+replaced_values+'</textarea>');
$(".check_this2").append('<textarea cols="20" id="business_content" name="business_content" rows="20" style="display:none;">'+replaced_business+'</textarea>');
});

function countChecked() {
	var items = [];
	$("input[name='checked_all[]']:checked").each(function(){items.push($(this).val());
	});
	$("#add_details").append('<input type="hidden" name="logo-names" value='+items+'>');
}
countChecked();
$(".checked_box:checkbox").click(countChecked);
});
</script>

<!-----Dublicate Email Check------>
<script type="text/JavaScript">
function dublicate_email_check()
{
	var count_imports = $('p#stores li').length;
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	for (var i=1; i<200; i++)
	{
		for (var j=1; j<200; j++)
		{
			if (i!=j)
			{ 
				if (document.getElementById('addemail'+i).value==document.getElementById('addemail'+j).value)
				{
					alert("Sorry, you have entered the same address in both field "+i+" and field "+j+",\nPlease change one of them...");
					document.getElementById('addemail'+j).select();
					return false;
				}
			}
			if(document.getElementById('sender_email').value=='')
			{
				alert("You must enter the email address!!!");
				document.getElementById("sender_email").focus();
				return false;	
			}
			if(!emailReg.test($('#sender_email').val()))
			{
				alert('You have entered invalid sender email address!!!');
				document.getElementById("sender_email").focus();
				return false;
			}
			if(count_imports==0)
			{
				if(count>0 && $('#addemail'+count+'').val()==''){
				alert("Receiver email address should not be emptied!!!");
				$('#addemail'+count+'').focus();
				return false;
			}
			}
			if((emailReg.test(document.getElementById('addemail'+i).value) == false) || (emailReg.test(document.getElementById('addemail'+j).value) == false))
			{
				alert("Receiver's email is incorrect format");
				document.getElementById('addemail'+j).focus();
				return false;
			}
			if (document.getElementById('addemail'+i).value!='' && document.getElementById('addemail'+j).value!='' && document.getElementById('sender_email').value==document.getElementById('addemail'+i).value)
			{
				alert("Sender's email is same with receiver's email!!!");
				document.getElementById('addemail'+i).select();
				return false;
			}
			if (document.getElementById('addemail'+i).value!='' && document.getElementById('addemail'+j).value!='' && document.getElementById('sender_email').value==document.getElementById('addemail'+j).value)
			{
				alert("Sender's email is same with receiver's email!!!");
				document.getElementById('addemail'+j).select();
				return false;
			}
		}
	}
}
</script>

<!----------Creating Text Box Script---------->
<script type="text/javascript">
var count = 1;
$(document).ready(function() {
    $("body").on("click",".add-more",function(){
        count++;    
		$('.clonnings').append('<li style="width:300px !important;"><input name="addemail[]" id="addemail'+count+'" class="add_email" placeholder="Add Receiver Email Address" type="text" value="" style="margin:5px 9px 5px 35px; height:22px;"><img src="images/social_icons/delete.png" class="remove-img" height="10" style=" float:right; cursor: pointer; margin-top:14px !important;"></li>');	
        });
	$("body").on("click",".remove-img",function(){ //alert('suman');
		$(this).parent(".clonnings li").remove();
	});
});
</script>

<!---Import Contact Change to Input Form Code---->
<script type="text/javascript">
$(function() {
$('.chk').attr('checked', 'checked');
$("#form1").validate();
$('.checked_box').attr('checked', 'checked');
});
</script>


<!----Send Now Button CSS--->
<style type="text/css">
.send-button input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-image: none;
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    display: block;
    height: 25px;
    margin: 0 auto 15px;
    padding: 5px;
    transition: all 0.3s ease 0s;
    width: 300px;
}
#sender_email:focus {
    background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
#items input:focus {
    background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
#my_ajax input:focus{
	background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
.send-button input:focus {
    background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
.send-button input[type="submit"] {
    background-color: #339933;
    border-radius: 3px 3px 3px 3px;
    color: white;
    cursor: pointer;
    display: inline;
    font-size: 15px;
    font-weight: bold;
    height: 42px;
    padding: 0 10px;
    width: 100px;
}
#import_contact ul li{
	background: url("images/green-tick.gif") no-repeat scroll 3px -3px transparent;
    color: #333333;
    padding: 0 0 5px 20px;
    margin-left: 34px;
}
p.seal-image{
	text-align: center;
    width: 83px;
	font-weight:bold;
}
</style>


<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript" src="<?= base_url(); ?>js/fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.js" type="text/javascript"></script>

<!--Zoom Script ---->
<script type="text/javascript">
	$(document).ready(function() {
		$("a.zoom").fancybox();

		$("a.zoom1").fancybox({
			'overlayOpacity'	:	0.7,
			'overlayColor'		:	'#FFF'
		});

		$("a.zoom2").fancybox({
			'zoomSpeedIn'		:	500,
			'zoomSpeedOut'		:	500
		});
	});
</script>


<!------Message Displaying CSS------->
<style>
.success_message {
    background-color: #DFF2BF;
	background-position: 10px center;
    background-repeat: no-repeat;
    background-image: url(images/social_icons/success.png);
    color: #4F8A10;
	border: 1px solid;
    cursor: pointer;
    margin: 10px 10px;
    padding: 8px 10px 8px 55px;
	font-size:20px;
	font-weight:bold;
	text-align:center;
}
.error_message {
    background-color: #FDE4E1;
    background-image: url("images/social_icons/errors_1.png");
    background-position: 10px center;
    background-repeat: no-repeat;
    border: 1px solid;
    color: #D8000C;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
    margin: 10px 10px;
    padding: 14px 10px 14px 55px;
    text-align: center;
}
</style>

<style>
.sm-preview li img {
	margin:-45px 10px 4px -14px;
	border: 2px solid #222222;
}
.sm-preview li a.selected {
	text-align: center;
}
.sm-preview li {
	float: left;
	margin: 60px -10px 5px 24px;
}
.sm-preview li a.selection {
	display: block;
	text-align: center;
	width: 120px;
}
.sm-preview a.remove-logo {
	cursor:pointer;
}
.bd a#logo_select{
	font-weight: bold;
    margin-left: 260px;
}
.body2-left {
	float:left;
	width:630px;
}
h3.sender_det {
	text-align:left;
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
	border-top:1px solid rgb(204, 204, 204);
	padding:0px 6px;
	height:60px;
	line-height:15px;
	position:relative;
}
h3.sender_det1{
	text-align:left;
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
	border-top:1px solid rgb(204, 204, 204);
	padding:0px 6px;
	height:30px;
	line-height:30px;
	position:relative;
}
h3.sender_det2{
	text-align:left;
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
	border-top:1px solid rgb(204, 204, 204);
	padding:0px 6px;
	height:30px;
	line-height:30px;
	position:relative;
}
h3.sender_det span {
	font-weight:normal;
}
.bd {
	border:1px solid rgb(204, 204, 204);
	margin:0px 0px 10px;
	padding:0px;
	position:relative;
	overflow: hidden;
}
ul.reciver li {
	margin:3px 6px;
	overflow:hidden;
}
ul.reciver li input {
	margin:5px 0px 5px 10px;
	vertical-align:middle;
	width:230px;
	height:22px;
	line-height:24px;
}
#items tr td input {
	margin:5px 0 5px 10px;
	vertical-align:middle;
	width:230px;
	height:22px;
	line-height:24px;
	float:left;
}
h1, h2, h3, h4 {
	font-weight:bold;
}
h3 {
	font-size:12px;
}
.editor {
	margin:7px;
}
.add-book {
	padding:5px;
}
.add-book {
	padding:5px;
}
.add-book li span.add, .add-book li input, .add-book li input.chk {
	vertical-align:middle;
	display:inline-block;
	white-space:nowrap;
	margin-right:5px;
}
.send-button {
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
	border-style:solid;
	border-color:rgb(204, 204, 204);
	-moz-border-top-colors:none;
	-moz-border-right-colors:none;
	-moz-border-bottom-colors:none;
	-moz-border-left-colors:none;
	border-width:1px 0px;
	padding:2px 6px;
	height:43px;
	line-height:25px;
	text-align:center;
	vertical-align:middle;
}
.send-now-btn {
	height:41px;
	width:124px;
	background:url("images/send_nows.png") no-repeat scroll -1px -8px transparent;
	border:1px solid rgb(153, 153, 153);
	color:white;
	cursor:pointer;
	font:bold 14px Arial, Helvetica, sans-serif;
	border-radius: 5px 5px 5px 5px;
	margin-top:1px;
}
.body2-right {
	float:right;
	width:320px;
	margin:10px 6px 0px;
}
.bd h3 {
	line-height:24px;
	text-align:center;
	color:rgb(102, 102, 102);
}
.bd h3 {
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
	border-bottom:1px solid rgb(204, 204, 204);
	margin-bottom:10px;
}
.sm-preview {
	/*padding:20% 10% 5%;  
	padding:70px 30px 0;*/
	text-align:center !important;
	/*margin:5px;*/
	background:none repeat scroll 0% 0% rgb(238, 238, 238);
}
.bd p {
	margin:8px;
	color:black;
}
#imports{
	font-size: 22px;
    line-height: 24px;
}
.bd p a {
	font-weight:bold;
	font-size:10px;
}
.sm {
	font-size:11px;
}
.msg-red, .msg-green, .msg-wait, .boldly {
	font-weight:bold;
}
.import-email {
	height: 36px;
	margin: 0 0 260px 10px;
	padding: 0px !important;
}
.import-email a {
	margin: 0px 85px 0px 3px;
	width: 32px;
	display: block;
	float:left;
}
a:link, a:visited, a:hover, a:active {
	outline:medium none;
}
.add-book {
	padding:5px;
}
.std {
	font-size:12px;
}
.add-book li.bd-yellow {
	margin:0 8px 10px;
}
.add-book li.bd-yellow p {
	font-size: 11px;
	font-weight: bold;
	margin: 0;
	padding: 2px;
	text-align: center;
	line-height: 15px;
}
a.add-more {
	text-decoration:none;
}
.side-bar ul li{

	color:#000;
}
.side-bar .add-book li {
	line-height:15px;
	position:relative;
	margin:7px 0 0 -18px;
}
.side-bar .add-book li.boldly {
	margin:0 4px 12px 5px;
}
.side-bar .add-book li.add-book-pg {
	height:20px;
}
.body2-left .bd-yellow {
	background:none repeat scroll 0% 0% rgb(255, 255, 204);
	border:1px solid rgb(255, 204, 102);
	padding:2px;
	clear:both;
	margin-top:-15px;
	text-align:center;
}
.body2-left .add-book li span.add, .body2-left .add-book li input, .body2-left .add-book li input.chk {
	vertical-align:middle;
	display:inline-block;
	white-space:nowrap;
	width: 35px;
}
.body2-left .add-book li input.chk1 {
	display: inline-block;
	vertical-align: middle;
	white-space: nowrap;
	width: 35px;
}
.body2-left .add-book li input {
	height:20px;
	margin:5px 5px 5px 0px;
	width:230px;
}
.body2-left .input_data li input {
	height:20px;
	margin:5px 9px 5px 35px;
	width:230px;
}
.body2-left .add-book li input#save-it {
	height: 26px;
	margin: 0 24px 5px 27px;
	width: 62px;
}
.body2-left .add-book li span.add {
	padding:0 60px 0 60px;
	width:110px;
	font-weight: bold;
	margin-bottom:6px;
}
.bd p#logos1 {
	text-align:center;
}
#text-hide{
	border:none;
	margin-top:-30px;
}
#editor-bd{
	border: 1px solid #CCCCCC;
    margin: 0 0 10px;
    overflow: hidden;
    padding: 0;
    position: relative;
	height:705px;
}
img.cs_import{
	border:1px solid #EEEEEE;
}
#stores li input{
	height: 20px;
    margin: 5px 9px 5px 35px;
    width: 230px;
}
#stores li input.chk1 {
    display: inline-block;
    vertical-align: middle;
    white-space: nowrap;
    width: 35px;
}
p.add-more{
	margin-left:35px;
	padding:0px;
	cursor:pointer;
	background: none repeat scroll 0 0 #FFFFCC;
    border: 1px solid #FFCC66;
    clear: both;
    padding: 2px;
    text-align: center;
	width:115px;
	font-size:12px;
}
.clonnings li input{
	height: 20px;
    margin: 5px 9px 5px 35px!important;
    width: 230px;
}
span#errors1 {
    color:#F00;
}
span#errors2 {
    color:#F00;
	margin-left:8px;
}
.showcase-text p.big-text{
	font-size:45px;
	font-weight:bold;
	padding:0px;
	line-height:50px;
	margin-bottom:12px;
}
.showcase-text p.bigger{
	font-size:17px;
	font-weight:bold;
}
.showcase-text span{
	color:#F03838;
	font-style:italic;
}
.showcase-text ul li{
	background: url("images/green-tick.gif") no-repeat scroll 3px -3px transparent;
    color: #333333;
    padding: 0 0 5px 20px;
    margin-left: 34px;
}
.showcase-text{
	margin-bottom:20px;
}
.sample-text p{
	font-family: 'Microsoft Sans Serif',Helvetica,sans-serif;
}
form#cheked_bx{
	margin-left: -15px;
}
</style>

<!-----Merging Script---------->
<script type="text/javascript">
    function merge() {
        $check_this4 = $(".check_this4");
        $(".check_this1 :checkbox:checked, .check_this2 input:text, .check_this2 textarea#conts, .check_this2 textarea#business_content, .ajax_call input:text, .check_this3 input:text").each(function() {
            $check_this4.append("<input type='hidden' name='"+$(this).attr('name')+"' value='"+$(this).val()+"'   />");
        });		
    }
</script>

</head>
<body>
<div id="contents_preview"></div>
<div class="wrapper">
<?php include_once("includes/client/header.php"); ?>
<?php include_once("includes/client/top_container1.php"); ?>
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

<!-- Include these scripts to import address books with CloudSponge -->
<script type="text/javascript" src="<?php echo base_url();?>js/address_books.js"></script>
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
domain_key:"WZDEJ3JQG27F4SXBMSGW",
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
        <input class="sender_email" name="sender_email" id="sender_email" value="<?php echo $user_email;?>" type="text" onchange="return check_sender_details();">
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
        <?php //include_once('includes/client/copyright.php'); ?>
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
CKEDITOR.plugins.addExternal( 'confighelper', '<?php echo base_url();?>js/confighelper_plugin.js' );
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
      include_once('includes/client/footer.php');
      include_once('includes/client/seal-top.php');
      include_once('includes/client/footer-menu.php');
    ?>
    </div>
  </div>
</div>
</body>
</html>