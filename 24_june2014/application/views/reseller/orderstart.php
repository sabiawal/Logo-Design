<?php
//print_r($_SESSION);
for($i=0;$i<10;$i++)
{
    $rand =  $rand .  rand(0, 9); 
}
$username = substr(md5(mktime()),0,5);
$pw = substr(md5($rand),0,5);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>lib/jquery.1.3.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url()?>js/cmxforms.js"></script>
<script type="text/javascript">
$(function()
{    
    $(".signup_form").validate(
    {
        rules:
        {
            fullname:"required",
            company_name:"required",
            email_id:
            {
                required:true,
                email:true
            }            
        },
        messages:
        {
            fullname:"",
            company_name:"",
            email_id:""            
        }
    }
    );
	 // Kick- start form javascript    
     $('.signup_form label.input input').keyup(function(){
		var name  = this.name;
        var value = this.value;
        $.post("<?php echo site_url('autosave') ?>",name+'='+value);
        $(this).prev().hide();
		if($(this).val()=="") $(this).prev().show();
	});
	$('.signup_form label.input input').focusout(function(e) {
        if($(this).val()=="") $(this).prev().show();
    });
});
</script>
<script language="JavaScript" type="text/javascript">
// HOW TO ADD NEW COLOR TO THE TABLE:
// 1. Add the table ceel in the same format as existing cells
// 2. Add the new color to the colors array below. ORDER IS IMPORTANT (first row colors, second row colors etc.)
function m5ColorClicked(obj_cell, color, collection_name, output_id_name, hidden_id_name)
{
 colors = new Array('dark red','red','dark orange','orange','yellow','lemon yellow','alien green','lime green','green','dark green','aquamarine','dark aquamarine','cyan blue','baby blue','royal blue','blue','black','dark gray','gray','silver gray','light gray','white','brown','golden brown','maroon','violet red','fuschia','violet','purple','violet blue','slate blue','navy blue');
	number_of_cells = colors.length;
	// CHANGE THE STATE OF THE CELL
	if (obj_cell.innerHTML == '&nbsp;') {
		obj_cell.innerHTML = '<img src="<?php echo base_url()?>images/order_checked_color.gif" width="14" height="19">';
	} else {
		obj_cell.innerHTML = '&nbsp;';
	}
	// SET THE HIDDEN FIELD WITH COLOR CODES
	// SET THE LABEL WITH DESCRIPTIVE FIELD
	str_hidden_field = "";
	str_label_output = "";
	for (i=1; i<=number_of_cells; i++) {
		cell_id = collection_name + '_' + i;
		if (document.getElementById(cell_id).innerHTML != '&nbsp;') {
			if (str_hidden_field == '') {
                str_hidden_field = document.getElementById(cell_id).bgColor;
			} else {
                str_hidden_field = str_hidden_field + ',' + document.getElementById(cell_id).bgColor;
			}
			if (str_label_output == '') {
				str_label_output = colors[i-1];
			} else {
				str_label_output = str_label_output + ', ' + colors[i-1];
			}
		}
	}
	if (str_label_output == '') str_label_output = 'Click on the color to choose it!';
	document.getElementById(output_id_name).innerHTML = str_label_output;
	document.getElementById(hidden_id_name).value = str_hidden_field;
}
</script>
<style>
.tablebg td {
	padding: 5px;
}
</style>
<!-- main container, leftcha & rightcha css style -->
<style type="text/css">
body{background:#fff;}
.top{background:#fff;}
.main{background:#fff;
border:1px solid #ddd;
border-bottom:none;
border-radius:10px 10px 0px 0px;}
.footer{background:#fff;
border-left:1px solid #ddd;
border-right:1px solid #ddd;
border-bottom:1px solid #ddd;
border-radius:0px 0px 10px 10px;
}
.footer-container{background:none;}
.mid-container {
	/*background:url(images/order-bg.png) no-repeat;*/
	margin:auto;
	margin-bottom:20px;
    width: 1000px;
	height:501px;
	border-bottom:1px solid #999;
	position:relative;
	background:#fff;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	-o-border-radius:10px;
	border-radius:10px;
	border:1px solid #ddd;
	border-bottom:2px solid #ddd;
}
.leftcha{
	/*background:url(images/order-bg-clouds.png) no-repeat;*/
	float: left;
	left: 35px;
    margin-top: 40px;
   	position: absolute;
    width: 300px;
	height:500px
	}
.order-text{
	float: left;
    margin-left:-15px;
    margin-top:-15px;
    position: absolute;
    width:306px;
	}
.midcha{
	float:left;
	margin-left: 220px;
    margin-top: 41px;
	height:460px;
	width:325px;
	background:url("<?php echo base_url()?>images/order-bg-midcha.png") no-repeat;
	}
.rightcha{
	margin-top:20px;
	margin-right:5px;
	width:450px;
	float:right;
	height:500px;
	background:url("<?php echo base_url()?>images/order-bg-rightcha.png") no-repeat;}
.signup{
	 background: none repeat scroll 0 0 transparent;
    border: 0 none;
    float: left;
   margin-left: 88px;
    padding: 78px 0 0;
	text-align:center;
	display: block;
	border-radius: 9px 9px 9px 9px;
	position: relative;
    text-align: center;
    width: 360px;}
section.signup input[type="button"], section.signup input[type="submit"] {
    background-color: #339933;
    border-radius: 3px 3px 3px 3px;
    color: white;
    cursor: pointer;
    display: inline;
    font-size: 13px;
    font-weight: bold;
    height: 42px;
    padding: 0 10px;
    width: 100px;
}
label.input input, label.input textarea, label.input select {
    font-size: 18px;
    z-index: 0;
}
label.input {
    display: block;
    position: relative;
    text-align: left;
}
label.input span {
    color: #A9A9A9;
    cursor: text;
    font-size: 18px;
    margin-left: 35px;
    margin-top: 10px;
    position: absolute;
    text-align: left;
    z-index: 1;
}
.signup input {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
	 border-color: #999999 #CCCCCC #CCCCCC
	 border-right: 1px solid #CCCCCC;
    -moz-transition: all 0.3s ease 0s;
	 border-radius: 3px 3px 3px 3px;
	 border-style: solid;
    border-width: 1px;
    display: block;
	height: 25px;
    margin: 0 auto 15px;
    padding: 5px;
    width: 300px;}
.signup input:focus {
    background-color: white;
    border: 1px solid #339933;
    box-shadow: 0 0 5px #339933;
    outline: medium none;
}
.signup input[type="button"], .signup input[type="submit"] {
    background-color: #339933;
    border-radius: 3px 3px 3px 3px;
    color: white;
    cursor: pointer;
    display: inline;
    font-size: 13px;
    font-weight: bold;
    height: 42px;
    padding: 0 10px;
    width: 165px;
}
/*.signup_form p.error {
    color: #CC0000;
	font-size: 12px;
    margin: -10px 0 5px 25px;
}*/
.top .banner {
    background: url("<?php echo base_url()?>images/reseller/telephone_n_guarantee.png") no-repeat scroll 0 0 transparent;
    display: block;
    height: 88px;
    width: 1002px;
}
</style>
<?php $this->load->view('blocks/analytics'); ?>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper" style="background:#FFF !important;">
  <div class="header-container">
    <?php $this->load->view('blocks/header/header');  ?>
  </div>
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
  <!-- New added -->
  <div class="mid-container">
    <div class="leftcha">
    	<div class="order-text">
    		<h1 style="font-size:22px; font-family:Arial;"><strong>Simple &ldquo;One page&rdquo; sign up:</strong></h1>
				<p style="font-size:16px; font-family:Arial; color:#808080; margin-top:5px;">
                <strong>Instant activation of your FREE account!</strong></p>
                <br/><br/><br/><br/>
	            <p style="font-size:22px; line-height:20px; font-family:Calibri; margin-top:90px;">Turn your ideas<br/>
				&nbsp;into reality...</p>
		</div>
    </div>
    <div class="midcha">
    </div>
    <div class="rightcha">
    <div class="signup">
        <div id="realSignups">
          <h2 style="font-size:24px;"><span style="color:#00b050;"><strong>Kick-Start</strong></span> Your Reseller Fun!</h2>
          <h3 style="margin-bottom:10px; font-size:16px; padding:10px;">You can get your first project to our designers<br />
            in less than 2 minutes!</h3>
        </div>
        <form method="post" class="signup_form" action="<?php echo site_url('reseller/okordermid'); ?>">
        <p class="error" style="margin-bottom: 5px;"><?php if(isset($_SESSION['error_msg'])){echo $_SESSION['error_msg'];} ?></p>
          <label class="input">
            <?php if(!isset($_SESSION['fullname']) || $_SESSION['fullname'] == "" ){?>
            <span style="color: rgb(153, 153, 153);">Your full name</span>
            <?php } ?>
            <input type="text" title="Your full name" class="fields required" id="fullname" name="fullname" value="<?= $_SESSION['fullname'] ?>" />
          </label>
          <label class="input">
          <?php if(!isset($_SESSION['company_name']) || $_SESSION['company_name'] == "" ){?>
            <span>Company or organization</span>
            <?php } ?>
            <input type="text" title="Company or organization" class="fields required" id="company_name" name="company_name" value="<?= $_SESSION['company_name'] ?>" />
          </label>
          <label class="input">
          <?php if(!isset($_SESSION['email_id']) || $_SESSION['email_id'] == "" ){?>
            <span>Email</span>
            <?php } ?>
            <input type="text" title="email_id" class="fields required email" id="email_id" name="email_id" value="<?= $_SESSION['email_id'] ?>" />           
          </label> 
          <input id="username" type="hidden" name="username" value="<?= $username; ?>" />
          <input type="hidden" name="password" value="<?=$pw; ?>" />
          <input type="submit" value="Get My Account Now!" />
        </form>
      </div>
    </div>
  </div>
   <!-- new added ends -->
     <div class="main col1-layout">
      <div class="clear"></div>
    <br />
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