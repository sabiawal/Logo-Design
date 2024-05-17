<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogoVote™ | Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>


<!-- Rating scripts -->
<style type="text/css">
.jquery-ratings-star {
width: 16px;
height: 16px;
background: url('<?= base_url(); ?>images/logovote/empty-star.png');
background-repeat: no-repeat;
position: relative;
float: left;
margin-right: 2px;
}
.jquery-ratings-full {
background-image: url('<?= base_url(); ?>images/logovote/full-star.png');
}
</style>
<script src="<?php echo base_url()?>js/jquery.js"></script>


<!--<script src="<?php echo base_url()?>js/logovote/jquery-1.3.2.min.js"></script>-->
<script src="<?php echo base_url()?>js/logovote/jquery.ratings.js"></script>
<script src="<?php echo base_url()?>js/example.js"></script>
<script src="<?php echo base_url()?>js/logovote/nicEdit.js"></script>
<!-- Ends -->

<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url()?>js/cmxforms.js"></script>
<script src="<?php echo base_url()?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>widgEditor/scripts/widgEditor.js"></script>

<script type="text/javascript">
var count=0;
$(function(){
	$(".win-vote").live("click",function(){
		count++;
		var id = $(this).attr('id');
		var my_id = id.replace("vote_this", "");
		$(".logo_samples ul li button.win-vote").removeAttr("disabled");
		$(this).attr('disabled','disabled');
		$(".logo_samples ul li button.win-vote").css("background-color","");
		$(this).css("background-color","#D0FFB7");
		$('.logo_samples ul li span').html("");
		$('span#select-message'+my_id+'').html('The winning vote selected.').fadeOut(3000);
		$('#voting-system').append('<input type="hidden" name="winning-vote" id="wins" value='+id+'>');
		return false;
	});
	$('div[name="suman"]').live('click',function(){
		count++;
		var id = $(this).attr('id');
		var len = $('.example-'+id+' .jquery-ratings-full').size();
		$("#voting-system").append('<input type="hidden" name="logo-name['+id+']" value='+id+'>');
		$("#voting-system").append('<input type="hidden" name="rated-score['+id+']" value='+len+'>');
	});
	$('.send-vote').click(function(){				 
		var $this = $(this);
		var len = $(".jquery-ratings-full").size();
			if(count==0 || len==0){			
				$('#rate-error').html('Select either Rate or give winning vote before Voting and Scoring.'+'<br><br>');
				confirm('Please can you click on one of the stars to score your initial samples from 1 to 10. We appreciate your feedback.\n\n50dollarlogo team.');
				return false;
			}
			else{
			$('#voting-system').submit();
			}
	})
	$('.send-feedback').click(function(){
		var iframes = $('#messageWidgIframe').contents().find('#iframeBody').html();
		var n=iframes.replace(/\s+/g, '');
		$('#voting-system').append('<input type="hidden" name="wigdet_text" value="'+iframes+'"/>');
			if(n.length<1){	
				confirm('Please give your personal thoughts. We appreciate your feedback.');
				return false;
			}
			else if(count==0){
				$('#rate-error').html('Select either Rate or give winning vote before Voting and Scoring.'+'<br><br>');
				confirm('Please can you click on one of the stars to score your initial samples from 1 to 10. We appreciate your feedback.\n\n50dollarlogo team.');
				return false;
			}
			else{
			$('#voting-system').submit();
			}
	})
	$('div[name="suman"]').click(function(){
		var rate=$(this).attr('id');
		var len = $(".jquery-ratings-full").size();
		$('#rate-error').html('');
	})
	$('.win-vote').click(function(){
		var rate=$(this).attr('id');
		var len = $(".jquery-ratings-full").size();
		$('#rate-error').html('');
	})
});
</script>

<style>
.tablebg td {
padding: 5px;
}
.customer-details input.full-name{
	height: 22px;
    line-height: 24px;
    margin: 5px 0 20px;
    vertical-align: middle;
    width: 230px;
}
.customer-details p{
	margin:0px 0px 20px;
	padding:0px!important;
}
.customer-details input:focus{
	background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
</style>

<style type="text/css" media="all">
	@import "<?php echo base_url()?>widgEditor/css/main.css";
	@import "<?php echo base_url()?>widgEditor/css/widgEditor.css";
</style>

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
border: 1px solid #ddd;
border-bottom: none;
border-radius: 10px;
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
.main_mind_container{
padding:40px;}
.main_mind_container h1{
padding-top:10px;
font:26px Arial, Helvetica, sans-serif;
color:#000;}
.main_mind_container p{
padding-top:15px;
font:14px Arial, Helvetica, sans-serif;}
.logo_samples{
padding:30px 0px;}
.logo_samples li{
text-align: center;
text-decoration:none;
display:inline-block;
margin:20px 60px 0 5px;
}
.logo_samples button{
padding:5px;
background-color:#68bb4f;}
.logo_samples img{
border:2px solid #999;
box-shadow:3px 3px 5px #CCC;
}
.logo_samples h3{
text-align:center;
padding-top:5px;
padding-bottom:5px;
font:bold 16px Arial, Helvetica, sans-serif;
}
.logo_samples h4{
text-align:center;
font:bold 14px Arial, Helvetica, sans-serif;
color:#000;
padding-top:3px;}
.logo_samples p{
padding-top:3px;
text-align:center;
font:bold 12px Arial, Helvetica, sans-serif;
}
.main_mind_container h2{
font:16px Arial, Helvetica, sans-serif;
padding-top:10px;
}
.main_mind_container h2 a{
color:#093;}
.submit{
padding:10px 0px;
}
.success_message {
    background-color: #DFF2BF;
	background-position: 10px center;
    background-repeat: no-repeat;
    background-image: url(images/social_icons/success.png);
    color: #4F8A10;
	border: 1px solid;
    cursor: pointer;
    padding: 8px 10px 8px 15px;
	font-size:18px;
	font-weight:bold;
}
</style>

<?php 
$get_data = $_GET['array'];
$gets = $_GET;
$sum = count($get_data);
$logos_got = $this->db->query("select image from logo_samples")->result();
$logo_count = count($logos_got);
foreach($logos_got as $logos){
$all_got_logos[] = $logos->image;	
}
?>
<?php include_once("includes/reseller/analytics.php"); ?>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper" style="background:#FFF !important;">
<div class="header-container">
<?php include_once("includes/logovote/header.php"); ?>
</div>

<div class="main-container"> 
<!-- New added -->
<div class="mid-container">
<!-- For Logovote -->

<div class="main_mind_container">
<form name="logo_votings" id="voting-system" method="post" action="<?php echo base_url();?>client_panel/logo_voted">
<img src="<?= base_url(); ?>images/logovote/thank-you.jpg" alt="" title="" />
<h1>Please below can you <strong>vote for your favourite logo!</strong></h1><br />

<p>Please also can you give your score for each sample (optional). The scoring<br />
system is based on a rank of 1 to 10 (with 10 meaning you think the logo<br />
looks excellent).</p>

<p>There is a message field that allows you to give personal feedback.  Please <br />
try to be constructive to help your friend/contact get their perfect logo.</p>

<p>Note: Your friend will get an email notification letting them know that a<br />
new vote and/or scoring has been given. Any comments will also be<br />
displayed in the email to them.</p>

<br/>
<?php global_message();?>
<div class="logo_samples">
<ul>
<!-----live site = http://50dollarlogo.com/   localhost = http://localhost/50dl/------>
<?php
$rest = substr($_GET['verification'], 0, -5);
$get_user_id = substr($rest, 5);
//echo '<pre>'; print_r($get_user_id); die;
$select1=$this->db->query("select * from tbl_designers_post_orders where logo_web_id='".$get_user_id."' order by submit_date desc")->result();
$sample_files = $this->db->query("select * from tbl_logo_samples where logo_web_id='".$get_user_id."'")->result();
$samples = $_POST['checked_all'];
$sender_email = $_GET['sender_email'];
$get_files = $_GET['array'];
$ssss = count($get_files); 
if(empty($sample_files)){
for($i=0;$i<$ssss;$i++)
{
$decoded_logo = rawurldecode($get_files[$i]);	
if(!empty($select1)){	
$j = $i+1;
//if($j % 3 == 0){$style= ' style="margin-right:0"';}else{$style= '';}
echo '<li'.$style.'><img src="http://50dollarlogo.com/admin_panel/sample/'.$get_files[$i].'" alt="" title="" width="255" height="255" />
<h3>Sample '.$j.'</h3>
<button class="win-vote" id="vote_this'.$j.'">This Gets My Winning Vote!</button><br />
<span id="select-message'.$j.'" style="color: #FF0000; font-size: 15px; font-weight: bold; margin-left: 0px;"></span>
<h4>Score It!</h4>
<div class="example-'.$j.'" id="'.$j.'" name="suman" style="margin-left:35px;"></div>
Your Rating: <span class="example-rating-'.$j.'">Not set</span>
</li>';
}else{
$dats = $this->db->query("select * from  logo_samples where image='".$all_got_logos[$i]."'")->result();	
foreach($dats as $qry)
{
$j = $i+1;
if($j % 3 == 0){$style= ' style="margin-right:0"';}else{$style= '';}
echo '<li'.$style.'><img src="'.base_url().'images/logo-portfolio/'.$get_files[$i].'" alt="" title="" width="255" />
<h3>Sample '.$j.'</h3>
<button class="win-vote" id="vote_this'.$j.'">This Gets My Winning Vote!</button><br />
<span id="select-message'.$j.'" style="color: #FF0000; font-size: 15px; font-weight: bold; margin-left: 0px;"></span>
<h4>Score It!</h4>
<div class="example-'.$j.'" id="'.$j.'" name="suman" style="margin-left:35px;"></div>
Your Rating: <span class="example-rating-'.$j.'">Not set</span>
</li>';
}
}
}
}
else{
for($i=0;$i<$ssss;$i++)
{
$decoded_logo = rawurldecode($get_files[$i]);	
if(!empty($sample_files)){	
$j = $i+1;
if($j % 3 == 0){$style= ' style="margin-right:0"';}else{$style= '';}
echo '<li'.$style.'><img src="http://50dollarlogo.com/admin_panel/sample/'.$get_files[$i].'" alt="" title="" width="255" height="255" />
<h3>Sample '.$j.'</h3>
<button class="win-vote" id="vote_this'.$j.'">This Gets My Winning Vote!</button><br />
<span id="select-message'.$j.'" style="color: #FF0000; font-size: 15px; font-weight: bold; margin-left: 0px;"></span>
<h4>Score It!</h4>
<div class="example-'.$j.'" id="'.$j.'" name="suman" style="margin-left:35px;"></div>
Your Rating: <span class="example-rating-'.$j.'">Not set</span>
</li>';
}else{
$dats = $this->db->query("select * from  logo_samples where image='".$all_got_logos[$i]."'")->result();	
foreach($dats as $qry)
{
$j = $i+1;
if($j % 3 == 0){$style= ' style="margin-right:0"';}else{$style= '';}
echo '<li'.$style.'><img src="'.base_url().'images/logo-portfolio/'.$get_files[$i].'" alt="" title="" width="255" />
<h3>Sample '.$j.'</h3>
<button class="win-vote" id="vote_this'.$j.'">This Gets My Winning Vote!</button><br />
<span id="select-message'.$j.'" style="color: #FF0000; font-size: 15px; font-weight: bold; margin-left: 0px;"></span>
<h4>Score It!</h4>
<div class="example-'.$j.'" id="'.$j.'" name="suman" style="margin-left:35px;"></div>
Your Rating: <span class="example-rating-'.$j.'">Not set</span>
</li>';
}
}
}
}
?>
</ul>
<br />
<span id="rate-error" style="color: red; font-size: 15px; font-weight: bold; margin-left:0px;"></span>
<span id="vote-error" style="color: red; font-size: 15px; font-weight: bold; margin-left: 0px;"></span>
</div>

<input type="image" src="<?= base_url(); ?>images/logovote/vote.png" class="send-vote" id="submit-rating" name="send-vote">
<br /><br />
<h1><strong>Give your personal feedbacks now!...</strong></h1><br /><br />
<div class="customer-details">
<input type="text" name="customer-fullname" class="full-name" placeholder="Your full name"/>
<p>Note: You can leave the "name" box blank, and the message will be registered as "anonymous".<br /> <br />
Your name or email address will not be shown.</p> 
</div>

<textarea id="message" name="feebcak_us" class="widgEditor"></textarea>
<input type="hidden" name="sender-email" value="<?php echo $sender_email?>" />
<?php 
for($i=0;$i<$sum;$i++){
$j = $i+1;
echo "<input type='hidden' name='logo_names[]' value='".$get_data[$i]."' />";
}
for($i=1;$i<$ssss;$i++){
echo "<input type='hidden' name='sample-name[]' value='".$i."' />";	
}
?>
<input type="hidden" name="logo-id" value="<?php echo $gets['logo_id']?>" />
<input type="hidden" name="sender_email1" value="<?php echo $gets['sender_email']?>" />
<input type="hidden" name="receiver_email1" value="<?php echo $gets['receiver_email']?>" />
<input type="hidden" name="client_id" value="<?php echo $get_user_id;?>"/>
<input type="hidden" name="verification_code" value="<?php echo $_GET['verification'];?>"/>
<br/>
<input type="image" src="<?= base_url(); ?>images/logovote/feedback.png" class="send-feedback" id="sumbit-feedback" name="send-feedback">
<br /><br /><br /><br />

<h2>Thank you for your co-operation.</h2><br/>
<?php 
if(COUNTRY == 'UK'){
echo '<h2><strong><a href="'.base_url().'">LogoDesignGuarantee.co.uk</a></strong></h2>';
echo '<h2>0800 756 9910 (24/7)</h2>';
}
if(COUNTRY == 'USA'){
echo '<h2><strong><a href="'.base_url().'">LogoDesignGuarantee.com</a></strong></h2>';
echo '<h2>1-800 961 5259 (24/7)</h2>';
}
?>

</form>

</div>   
</div> 
<!-- new added ends -->

</div>
</div>
<div class="footer-container">
<?php include_once("includes/logo-design/footer.php"); ?>
</div>
</div>
</body>
</html>