<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dialogbox/jquery-ui.css">
<script src="<?php echo base_url()?>assets/css/dialogbox/jquery-1.9.0.js"></script>
<script src="<?php echo base_url()?>assets/css/dialogbox/jquery-ui.js"></script>

<script type="text/javascript" src="<?= base_url();?>assets/js/cardvalidation.js"></script>
<!--<script src="<?php echo base_url()?>js/jquery.validate.js"></script>-->

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(function(){
	
	$('#commentForm').validate(
	{
		rules:
		{
			/*company_name: "required",
			billing_address:"required",
			city:"required",
			state:"required",
			state:"required",
			zip:"required",
			fullname:"required",*/
			cardnum:"required",
			expmonth:"required",
			expyear:"required"
			//cvv: "required"
		},
		messages:
		{
			/*company_name: "",
			billing_address:"",
			city:"",
			state:"",
			state:"",
			zip:"",
			fullname:"",*/
			cardnum:"",
			expmonth:"",
			expyear:""
			//cvv: ""                                                       
		}
	});
	
	$( "#confirm-form" ).dialog({
	autoOpen: false,
	width: 'auto',
	height: 'auto',
	buttons: {
			
			"OK": function() {
				$( this ).dialog( "close" );
				$('#confirm-form').hide();
				$('.ui-widget-overlay').remove();
				$('.success_img').remove();
				$('#commentForm').submit();
				$('#loading').html("<img src='<?php echo base_url()?>assets/css/dialogbox/loader.gif' class='loads'/><span class='Loader'>Processing...</span>").fadeIn('fast');	
				$('#loading').css('border','1px solid');
				$('#loading').css('display','block');	
																	
			}
		}
	});
	$( ".newbuttoncontinue" ).click(function() {
		
		$('#commentForm').validate(
		{
			rules:
			{
				cardnum:"required",
				expmonth:"required",
				expyear:"required"
			},
			messages:
			{
				cardnum:"",
				expmonth:"",
				expyear:""
			}
		});
		if($("#commentForm").valid()){
		$( "#confirm-form" ).dialog( "open" );
		$('body').append('<div class="ui-widget-overlay" style="width: 1349px; height: 1134px;"></div>');
		$('.ui-dialog').append('<img class="success_img" src="<?php echo base_url()?>assets/images/success_icon.png">');
		}
	});
	
	$( ".ui-dialog-titlebar-close" ).click(function() {
		//$( this ).dialog( "close" );
		$('#confirm-form').hide();
		$('.ui-widget-overlay').remove();
		$('.success_img').remove();	
	});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#commentForm").validate(
    {
        rules:
        {
            fname: {
        		required: true,
        		minlength: 1,
        		maxlength: 25
    		},
            lname: {
				required: true,
				minlength: 1,
                maxlength: 25
				},	
			company_name: "required",
            cmp_logo_name: "required",
			email_id: {
				required: true,
				email: true
			}
        },
       	messages: {
			fname: {
				required: "First Name is Required Field",
				minlength: "First Name Must Consist of at least 1 Characters",
				maxlength: "Only Upto 25 Characters"
			},
            lname:{
				required: "Last Name is Required Field",
				minlength: "First Name Must Consist of at least 1 Characters",
				maxlength: "Only Upto 25 Characters"
				},
            company_name: "Comany Name is Required Field",
            cmp_logo_name: "Exact Logo Name is Required Field",
			email_id: "Email is Required Field"
		}
    }
    );
});
</script>

<style>
.ui-dialog .ui-dialog-buttonpane{
	border:none;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset{
	margin-right: 190px;
}
#feedback-containner div{
	margin-top:10px;
}
.success_img {
    bottom: 120px;
    left: 20px;
    position: relative;
}
.ui-dialog .ui-dialog-buttonpane button {
    border: 1px solid;
    width: 65px;
}
#confirm-form{
	color: #FF0000;
    font-size: 20px;
    font-weight: bold;
    height: auto;
    margin-left: 65px;
    margin-top: 15px;
    max-height: none;
    min-height: 16px;
    width: auto;
}


#loading {
    /*border: 1px solid;
    display: block;*/
    margin-left: 420px;
    padding: 5px;
    width: 100px;
}
.loads {
    margin-left: 40px;
}
.Loader {
    margin-left: 20px;
}
</style>
<!-- Feedback css -->
<style type="text/css">
#commentForm label.error, #commentForm input.submit{
	display:none !important;
}
input.error, textarea.error, select.error {
    border: 1px solid hsl(0, 100%, 40%);
}
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

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/newmodify.css" />
</head>

<body>
<div class="wrapper">
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php");
/*if($client_details->package == 'Silver Logo Package')
$upgraded_package = 'Elite Logo Package';
else
$upgraded_package = 'Complete Stationary Designs';*/
?>
<div id="confirm-form" title="Confirmation" style="display:none;">Thank you upgrading your package.<br /><br /> You will receive a confirmation email <br /> regarding your upgrade.</div>
<div class="main-container">
    <div class="main col1-layout">
      <div class="col-main">
        <div class="order-page">         
          <h1>Your Upgrade Detail </h1>
          <h1>From <u><?php echo @$_SESSION['current_active_package']?></u> to <u><?php echo @$_SESSION['upgraded_packages_name']?></u></h1>
          <!--New added divs for updrade details-->
          <div class="current-diff current-pack">
                    <table width="923"  style="margin:0 auto;">
  <tr class="blue-table">
    <th>Upgraded Packages</th>
    <th>Current Package
    (Less)</th>
    <th>Upgraded Amount</th>
  </tr>
  <tr>
    <td><?php echo CURRENCY.$_SESSION['upgraded_packages_amount']?></td>
    <td><?php echo CURRENCY.$_SESSION['current_package_amount']?></td>
    <td class="current-last-price"><?php echo CURRENCY.$_SESSION['upgraded_amount']?></td>
  </tr>
  
</table>


</div>
          <br/>
          
          <h1 class="order-head-bg">Contact Information</h1>
          <p class="upg-p">Note:Please confirm your Contact Information details </p>

<div class="order-form-container">
<div class="order-form">
<div class="basic-info-wrp">
<?php /*?>action="<?php echo base_url()?>client_panel/process_upgrade_trans" <?php */?>
<form class="cmxform" id="commentForm" action="<?php echo base_url()?>client_panel/process_upgrade_trans" method="post" novalidate="novalidate">
<input type="hidden" name="current_package" value="<?php echo @$client_details->package?>" />
<div style="width:930px;">
<div class="basic-info">

<div class="contact-list">
<label for="fname">First Name: *</label>
<input id="fname" name="fname" class="required ses_val" size="40" value="<?php echo @$client_details->fname; ?>"  />
</div>
<div class="contact-list">
<label for="lname">Last Name: *</label>
<input id="lname" name="lname" class="required" size="40" value="<?php echo @$client_details->lname; ?>" />
</div>
<div class="contact-list">
<label for="company_name">Company: *</label>
<input id="company_name" class="required" name="company_name"  size="40" value="<?php echo @$client_details->company_name; ?>" />
</div>
<div class="contact-list">
<label for="phone_no">Phone: </label>
<input id="phone_no" name="phone_no"  size="40" value="<?php echo @$client_details->phone_no; ?>" />
</div>
<div class="contact-list">
<label for="email">E-Mail: *</label>
<input id="email_id" name="email_id" class="required email" size="40" value="<?php echo @$client_details->email_id; ?>" />
</div>
<div class="contact-list">
<label for="se_email_id">Secondary E-Mail:</label>
<input id="se_email_id" name="se_email_id" class="email" size="40" value="<?php echo @$client_details->se_email_id; ?>" />
</div>
<div class="contact-list">
<label for="se_email_id">Additional Information:</label>
<textarea placeholder="Provide us additional information for your upgrade " cols="30"  rows="6" class="textarea-upgrade" name="your_message"></textarea>
</div>

</div>
<div class="security-images">
<div align="center">
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<div id="ciz1K7"></div>
<div id="scz1K7" style="display:inline;" align="center"> </div>
<div id="sdz1K7" style="display:none;" align="center"></div>
<script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script>
<noscript>
<div style="display:inline;" align="center"></div>
</noscript>
<!-- END ProvideSupport.com Graphics Chat Button Code -->
</div>
<div align="center"> <img src="<?php echo base_url()?>assets/images/thumb_bbb.jpg" alt="thumb_bbb.jpg"/> </div>
<div align="center"><img src="<?php echo base_url()?>assets/images/thumb_verisign.jpg" /><br />
<a href="https://www.scanalert.com/RatingVerify?ref=www.logodesignguarantee.co.uk" target="_blank"><img src="<?php echo base_url()?>assets/images/thumb_hackersafe.jpg" width="159" height="63" /></a><span class="style3  style1">TESTED</span><font color='red' size='1' align='right'>13-April</font><br />
</div>
</div>
<div class="clear"></div>
</div>
<div class="order-info">                    

<table width="922"  border="0" cellpadding="9" cellspacing="0" class="form_area">
<tr class="tablebg">
<td colspan="2" class="titlebg2"><h1 class="order-head-bg"><strong>Card Information</strong></h1></td>
</tr>
<tr>
<td>
<div class="current-cartdetail current-pack">
<p class="upg-p">Please Enter Your Credit Card Information below</p>
<div id="loading"></div>
<table width="625"  style="margin:0 auto;">
<tr class="blue-table">
<th width="371">Type Of Card</th>
<td width="242"></td>

</tr>
<tr>
<td>Card Number: </td>
<td>
<input name="cardnum" type="text" size="35"   maxlength="22" onChange="handleCCTyping(this.form, event);" onKeyUp="handleCCTyping(this.form, event);" class="required creditcard <?php //echo base_url()?>" />
<img src="<?php echo base_url()?>assets/images/cards/invalid.gif" alt="card_logo" name="cardimage" width="36"  height="24" hspace="10" vspace="0" align="middle" />
</td>
</tr>

<tr>
<td>Expiration Date</td>
<td><span>Mo.
<select name="exp_month" class="month required" id="select3">
<option value="">--</option>
<?php for($i=1;$i<=12;$i++): ?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php endfor; ?>
</select>
Yr.
<select name="exp_year" class="year required" id="select4">
<option value="">----</option>
<?php for($i=date('Y');$i<=date('Y')+15;$i++): ?>
<option value="<?php echo substr($i, -2); ?>"><?php echo $i; ?></option>
<?php endfor; ?>
</select>
</span> </td>

</tr>

<tr>
<td>Amount Of Payement</td>
<td class="current-last-price"><input name="amount_payment" type='hidden' value="<?php echo $_SESSION['upgraded_amount']?>" /><?php echo CURRENCY.$_SESSION['upgraded_amount']?></td>

</tr>

</table>


</div>
</td>
</tr>

<tr class="tablebg">
<td colspan="2" align="center">

<input type="button" class="newbuttonback" value="Back" onclick="javascript:window.location='<?php echo base_url()?>client_panel/upgrade_new_package'" />
<input type="hidden" name="submit_upgrade" value="submit_upgrade"/>
<input type="button" class="newbuttoncontinue" name="submit_upgrade" value="Continue" align="middle" />

</td>
</tr>
</table>
</div>
</form>
</div>
</div>
</div>

        </div>
      </div>
      <div class="side-bar">
        <div class="money-back">
    <div><img src="<?php echo base_url()?>assets/images/side-bar-bg-top.jpg" title="bg-top" /></div>
    <div class="money-back-text">
    <div align="center"><a href="<?php echo base_url()?>guarantee.php"><img src="<?php echo base_url()?>assets/images/guarantee.png" alt="Money Back Guarantee" title="Money Back Guarantee" /></a></div>
        <ul>
        <li>100 % original, custom-made</li>
        <li>No clipart </li>
                </ul>
        <div align="center"><a href="<?php echo base_url()?>packages.php"><img src="<?php echo base_url()?>assets/images/start-logo.jpg" alt="Start My Logo" title="Start My Logo" /></a></div>
        </div>
    <div><img src="<?php echo base_url()?>assets/images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
</div>

<div class="live-support">
<div><img src="<?php echo base_url()?>assets/images/side-bar-bg-top.jpg" title="bg-top" /></div>
<div class="live-support-text" align="center">
<div align="center" style="margin:0 0 10px 0;">
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<div id="ciz1K7" style="z-index:100;position:absolute"></div>
<div id="scz1K7" style="display:inline; text-align:center;"> </div>
<div id="sdz1K7" style="display:none; text-align:center;"></div>
<script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script>
<noscript>
<div style="display:inline; text-align:center">
<div style="text-align:center">
<a href="http://www.providesupport.com?messenger=pradyumna">Live Support</a></div>
</div></noscript>
<!-- END ProvideSupport.com Graphics Chat Button Code -->
</div>
<p>Our staff are here to help you now. Click the box above for immediate answers to your queries.</p>
</div>
<div><img src="<?php echo base_url()?>assets/images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
</div>

<div class="charity">
<div><img src="<?php echo base_url()?>assets/images/side-bar-bg-top.jpg" title="bg-top" /></div>
<div class="charity-text">
<h1>See our charitable works </h1>
<div align="center"><a href="<?php echo base_url()?>charity.php"><img src="<?php echo base_url()?>assets/images/rtdthumb.jpg" alt="RTD" title="RTD" /></a></div><p>&nbsp;</p>
<p>Logo Design Guarantee has designed many logos for leading charities. See some of our logos we have designed for Churches.<br/>
<a href="<?php echo base_url()?>charity.php"  style="color:#666;"><span class="text-bold"> Read more.</span></a></p>
</div>
<div><img src="<?php echo base_url()?>assets/images/side-bar-bg-bottom.jpg" title="bg-top" /></div>
</div>        <div class="security">
          <h2 align="center"><img src="<?php echo base_url()?>assets/images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>assets/images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>assets/images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>assets/images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  	
  <div class="footer-container">
    <div class="footer">
      <div class="list-1">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/ourmgmt.php">Management team </a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/qualitycontrol.php">Quality control</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/partnership.php">Partnership programmes</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/terms.php">Terms and conditions</a></li>
    </ul>
</div>

<div class="list-2">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/guarantee.php">Guarantee</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/privacypolicy.php">Privacy policy</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">View our portfolio </a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/faq.php">FAQ</a></li>
    </ul>
</div>
<div class="list-3">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/index.php">Start my Website</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/contact.php">Contact us </a></li>
        <li><a href="<?php echo base_url()?>new44/category.php" title="home">More Services</a></li>
    </ul>
</div>
<div style="clear:left"></div>

<p>Privacy Policy: We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you. </p>

<p>Copyright 2003-2014. Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws.</p>

<p>LogoDesignGuarantee.com is Committed to Producing <i>Award-Winning </i>Logos!</p>

<div  class="security-seals">
    <ul>
                <li><span id="siteseal" style="display: inline-block;"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=qHwD7KdZ2yocqsiUmu3U0vMD7qlfms8eOr01fHGM4RGqcjqakuedi"></script></span>
        <script type="text/JavaScript">
//<![CDATA[
var sealServer=document.location.protocol+"//seals.websiteprotection.com/sealws/503846bb-7bc4-4d46-ab46-09bccbdd56cb.gif";var certServer=document.location.protocol+"//certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb";var hostName="logodesignguarantee.com";document.write(unescape('<div style="text-align:center;margin:0 auto;"><a target="_blank" href="'+certServer+'&pop=true" style="display:inline-block;"><img src="'+sealServer+'" width="132" alt="Website Protection&#153; Site Scanner protects this website from security threats." title="This Website Protection site seal is issued to '+ hostName +'. Copyright &copy; 2012, all rights reserved."oncontextmenu="alert(\'Copying Prohibited by Law\'); return false;" border="0" /></a></div>'));
//]]>
</script>
        
        </li>
         <li><!-- GeoTrust QuickSSL [tm] Smart Icon tag. Do not edit. -->
        <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"
         SRC="//smarticon.geotrust.com/si.js"></SCRIPT>         
         <!-- end GeoTrust Smart Icon tag --></li>
         <li>
        <!-- START SCANALERT CODE FOR LDG.COM -->
        <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
        <!-- END SCANALERT CODE LDG.COM  --></li>
            </ul>
</div><div align="center" class="seal-top-all"><p>Call us TOLL FREE<br />
  
   <span class="adinsightNumber2593">866-598-6266</span> </p></div>    <div class="footer-menu" align="center">
        <ul>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Home</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Packages</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Design Process</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">Portfolio</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">Testimonials</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/faq.php">FAQ</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/terms.php">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/privacypolicy.php">Privacy policy</a></li>
            <li><a href="<?php echo base_url()?>new44/category.php">More Services</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/contact.php">Contact</a></li>
        
        </ul>
    </div>

    </div>
  </div>
</div>
</body>
</html>