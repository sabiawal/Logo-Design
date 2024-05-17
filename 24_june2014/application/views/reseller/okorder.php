<?php
//if($_SESSION['code'] != strtoupper(str_replace(" ","", $_SESSION['verificationcode']))){    
    //echo '<script type="text/javascript"> alert("Invalid Captcha"); document.location="order.php"</script>';
//}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/basket.css" rel="stylesheet" type="text/css" />
<script>
var baseUrl = '<?php echo base_url()?>';
var currency = '<?php echo CURRENCY; ?>';
var express_delivery = '<?php echo EXPRESS_DELIVERY; ?>';
var black_n_white = '<?php echo BLACK_N_WHITE; ?>';
var both_services = '<?php echo BOTH_SERVICES; ?>';
</script>
<script language="javascript" src="<?php echo base_url()?>js/orderone.js"></script>
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('.basketEdit').hide();	
		$('#editBasket').click(function(){
			$('.basketEdit').show();	
		});
		$('.basketEdit').click(function(){
			if(confirm('Are you sure want to delete?'))
			{
				var value = $(this).attr('id');
				var values = value.split('___');
				window.location = 'delete_session.php?del_name1='+values[0]+'&del_name2='+values[1]+'&redirectto=<?php echo base_url()?>orderone';
				/*var thiss = $(this);
				$.ajax({
				  type: "GET",
				  url: "delete_session.php",
				  data: "del_name="+values[0],
				  success: function(msg){					  
					//var totalPrice = $('#LblYouPay').val();
					//var price = parseFloat(totalPrice) - parseFloat(values[1]);
					//$('#LblYouPay').val(price);
					//thiss.parent().parent().remove();
					window.location.reload();
				  }
				});*/
			}
		});
	});
</script>
<style type="text/css">
/*.col-main-basket tr td {
    background: none repeat scroll 0 0 #ebebeb;
}*/
.newbuttonback, .newbuttoncontinue{
    background-color: #339933;
    border-radius: 3px 3px 3px 3px;
	border-width:1px;
    color: white;
    cursor: pointer;
    display: inline;
    font-size: 13px;
    font-weight: bold;
    height: 42px;
    padding: 0 10px;
    width: 100px;
	text-transform:uppercase;
	margin-left:5px;
	text-align:center;
}
.nohover a:hover{
	text-decoration:none !important;}
.newbuttoncontinue{
	font-size:16px;
	text-transform:uppercase;
	height:70px;
	width:120px;
	margin-bottom:15px;}
input:focus {
    background-color: #339933;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
	text-decoration:none;
}
</style>
<!-- New -->
<style type="text/css">
body{background:#fff;}
.top{background:#fff;}
.main, .footer, .wrapper{background:#fff;}
.main{background:#fff;
border:1px solid #ddd;
border-bottom:none;
border-radius:10px 10px 0px 0px;}
.footer{background:#fff;
border-left:1px solid #ddd;
border-right:1px solid #ddd;
border-bottom:1px solid #ddd;
border-radius:0px 0px 10px 10px;}
span.returnhome{ background-color: #339933;
    border-radius: 3px 3px 3px 3px;
	border-width:1px;
    color: white;
    cursor: pointer;
    display: block;
    font-size: 13px;
    font-weight: bold;
    padding:15px;
    width: 160px !important;
	text-transform:uppercase;
	margin-left:5px;
	text-align:center;
}
.footer-link{
	margin:25px 0px 5px 20px;
	}
button:focus, span:focus {
    background-color: #339933;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
	text-decoration:none;
}
.top .banner {
    background: url("<?php echo base_url()?>images/reseller/telephone_n_guarantee.png") no-repeat scroll 0 0 transparent;
    display: block;
    height: 88px;
    width: 1002px;
}
.footer-link p{
	color:#000;}
ul li.snd{
	color:#000;
	font-size:14px;
	list-style-image:url("<?php echo base_url()?>images/reseller/tick-mark.gif");}
</style>
<?php $this->load->view('blocks/analytics'); ?>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php $this->load->view('blocks/header/header');  ?>
  </div>
  <!-- top banner with phone no. -->
  <div class="top-container">
    <div class="top">
        <div class="banner">
        <p style="color:#0b4a8d;">24/7 Reseller Sales: <?= PHONE_RESELLER_SALES; ?><br/>
        24/7 Reseller Support: <?= PHONE_RESELLER_SUPPORT; ?></p>
           <!--<span><?= PHONE_NO; ?></span></p>-->
        </div>
    </div>
  </div>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="footer-link">
      <h1 style="font-size:30px; color:#00b050; margin-top:20px; line-height:35px;">
      Congratulations: You have successfully<br/>
      signed up for our reseller service!</h1><br/>
<p style="font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray; line-height:25px; word-spacing:1px;">You now have access to your reseller account.<br /><br />
You now will be able to order all our branding<br />
design services with a <strong>10% discount.</strong></p><br/>
<p><em><u>Getting started</u></em></p>
<p>We have emailed you your account details.</p> 
<p>Click the button below to access your reseller account directly now! </p>
<p><u>How do I place an order now?</u></p>
<ul>
	<li class="snd">Once inside your own reseller account, then you will have access to all our services. </li>
    <li class="snd">You will be able to place an order online (with the 10% discount being applied).</li>
    <li class="snd">We have provided more instructions in your email to help you get started.</li>
</ul>
<p><u>Can I place a reseller order over the phone?</u></p>
<ul>
	<li class="snd">Yes, certainly. You can quote your reseller username (found in your email) or email address,<br/>
     and this will entitle you to 10% discount on all our services.</li>
</ul>
<p><u>Do you need more help?</u></p>
<ul>
	<li class="snd">Utilise our dedicated reseller hotlines available 24/7. </li>
    <li class="snd">We have live chat also available.</li>
</ul>
<br/>
<a  href="<?php echo site_url('reseller/login'); ?>">
<span class="returnhome">Access my reseller account now!</span>
</a>
</div>
      <div class="clear"></div>
      <br />
    <?php $this->load->view('blocks/footer/payment-seals'); ?><br />
    <?php $this->load->view('blocks/footer/partners');?><br />
    <?php $this->load->view('blocks/footer/phone-banner-bottom');?><br />
    </div>
  </div>
<div class="footer-container">
    <div class="footer">
        <?php $this->load->view('blocks/footer/footer-links'); ?>
        <?php $this->load->view('blocks/footer/footer-text'); ?>
        <?php $this->load->view('blocks/footer/footer-seals'); ?>
    </div>
</div>
</div>
</body>
</html>