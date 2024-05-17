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
// Added by padam
function new_captcha()
{
var c_currentTime = new Date();
var c_miliseconds = c_currentTime.getTime();
document.getElementById('captcha').src = '<?php echo base_url()?>includes/logo-design/security_image.php?x='+ c_miliseconds;
document.getElementById('verificationcode').value="";
}

function checkerror() {
	$('.error[for="verificationcode"]').css('margin-left','20px');
	$('.error[for="verificationcode"]').css('font-weight','bold');
}

// End added by padam

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
			},
            file: {
						accept:'docx?|zip|rar|tar|jpg|gif|pdf|ai|eps|odt|psd|png|ppt|pptx|bmp|xls|xlsx'
			},
            verificationcode: {
        		required: true,
        	    remote: "<?php echo base_url()?>includes/logo-design/process-capcha.php"
    		},
     	    business_detail:"required"
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
			email_id: "Email is Required Field",
            file: "Invalid File Format",
			business_detail: "Business is Required Field",
            verificationcode: "Invalid Verification Code"
		}
        
    }
    
    
    );

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


$(document).ready(function()
{    
    $('input,textarea').bind('keyup', function()
    {
        var name  = this.name;
        var value = this.value;
        
        $.post("<?php echo site_url('autosave') ?>",name+'='+value,
        function(result)
        {
            //alert(result);
            //$("body").html(result);
        });
    
    }); 
     
});
</script>

<style>
.tablebg td{padding:5px;}
.order-page p {
	color:#000;
    font: normal 12px Arial, Helvetica, sans-serif;
}
</style>

<?php include_once("includes/logo-design/analytics.php"); ?>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="top-container">
    <div class="top">
      <?php include_once("includes/logo-design/menu-banner.php"); ?>
    </div>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main">
        <div class="order-page">         
          <h1>Your order detail </h1>
          <h1><?php echo @$_SESSION['package'].' '.CURRENCY.@$_SESSION['price'];?></h1>
          <ul>
            <li>This order page below will allow you to add any other service we offer .i.e web design, brochure design and any others. </li>
            <li>We provide a simple one page order form that takes only <span class="text-green"> 3 minutes</span> to fill in. You can write as little brief or as much detail as you choose.</li>
            <li>Upon the successful completion of your ordering process, your initial logo samples will be delivered to you in 2 to 3 days </li>
          </ul>
          <br/>
          <!--<h1 style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">Congratulations! We have received your payment.</h1><br/><br/>
         <p style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000;"><strong> Now make your design requests!   </strong></p>
<p>We provide a one page design form that can take just <strong>3 minutes</strong> to fill in. </p>
<p>You can write as little or as much detail as you choose.</p>
<p>Generally, the more information you provide then the better idea our design<br/> 
team will have of your logo concept you have in mind.</p><br/>

<p style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000;"><strong>Unsure of how you want your logo to look?</strong></p>
<p>Do <em>not</em> worry &ndash; our designers will use their experience to come up with <br/>
initial samples. Please do provide information to the compulsory fields <br/>
mentioned vis&ndash;&agrave;&ndash;vis the asterisk fields given below.</p><br/>

<p style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000;"><strong>What happens next?</strong></p>
<p>After the successful completion of your design form below, your initial logo <br/>
samples will be delivered to you within 1 to 3 days (24 hours if 24 hour express <br/>
service has been already ordered). </p><br/>-->
          <h1 class="order-head-bg">Contact Information</h1>
          <div class="order-form-container">
            <div class="order-form">
              <div class="basic-info-wrp">
              <form class="cmxform" id="commentForm" method="post" action="<?php echo site_url('orderonemid');?>" enctype="multipart/form-data">
              <div style="width:930px;">
                <div class="basic-info">
                
                  <div class="contact-list">
                    <label for="fname">First Name: *</label>
                    <input id="fname" name="fname" class="required ses_val" size="40" value="<?php echo @$_SESSION['fname']; ?>"  />
                  </div>
                  <div class="contact-list">
                    <label for="lname">Last Name: *</label>
                    <input id="lname" name="lname" class="required" size="40" value="<?php echo @$_SESSION['lname']; ?>" />
                  </div>
                  <div class="contact-list">
                    <label for="company_name">Company: *</label>
                    <input id="company_name" class="required" name="company_name"  size="40" value="<?php echo @$_SESSION['company_name']; ?>" />
                  </div>
                  <div class="contact-list">
                    <label for="phone_no">Phone: </label>
                    <input id="phone_no" name="phone_no"  size="40" value="<?php echo @$_SESSION['phone_no']; ?>" />
                  </div>
                  <div class="contact-list">
                    <label for="email">E-Mail: *</label>
                    <input id="email_id" name="email_id" class="required email" size="40" value="<?php echo @$_SESSION['email_id']; ?>" />
                  </div>
                  <div class="contact-list">
                    <label for="se_email_id">Secondary E-Mail:</label>
                    <input id="se_email_id" name="se_email_id" class="email" size="40" value="<?php echo @$_SESSION['se_email_id']; ?>" />
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
                    <div align="center"> <img src="<?php echo base_url()?>images/thumb_bbb.jpg" alt="thumb_bbb.jpg"/> </div>
                    <div align="center"><img src="<?php echo base_url()?>images/thumb_verisign.jpg" /><br />
                      <a href="https://www.scanalert.com/RatingVerify?ref=www.logodesignguarantee.co.uk" target="_blank"><img src="<?php echo base_url()?>images/thumb_hackersafe.jpg" width="159" height="63" /></a><span class="style3  style1">TESTED</span><?php echo "<font color='red' size='1' align='right'>".date('d-F')."</font>"; ?><br />
                    </div>
                  </div>
                  <div class="clear"></div>
                  </div>
                  <div class="order-info">                    
                    
                    <table width="922"  border="0" cellpadding="9" cellspacing="0" class="form_area">
                    <tr class="tablebg">
                        <td colspan="2" class="titlebg2"><h1 class="order-head-bg"><strong>Requirements</strong></h1></td>
                      </tr>
                      <tr class="tablebg">
                        <td width="291" align="right" valign="top" class="titlebg2"><span class="text-bold">* Exact name  to be used in your logo:</span></td>
                        <td width="595" class="titlebg2"><input name="cmp_logo_name" type="text" class="input-box" id="cmp_logo_name" size="60" value="<?php echo @$_SESSION['cmp_logo_name'] ?>" /></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="titlebg2"><span class="text-bold">Tagline to be used in your logo (if any):</span></td>
                        <td class="titlebg2"><input name="tagline" type="text" class="input-box" id="tagline" value="<?php echo @$_SESSION['tagline'] ?>" size="60" /></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">* Describe your  business or organization.<br />
                          What is your primary activity,  philosophy, style (conservative, funky, modern, traditional etc.), goals, and anything else we should know: </td>
                        <td><textarea name="business_detail" cols="46" rows="5" class="input-box" id="business_detail" ><?php echo @$_SESSION['business_detail'];?></textarea></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">The colors you would like to see in your logo (select from predefined colors or enter your own if you don't see them here): </td>
                        <td align="left" valign="top"><table border="0" cellspacing="1" cellpadding="0">
                            <tr>
                              <td id="cc1_1" width="14" bgcolor="#CC0000" onclick="m5ColorClicked(this, '#CC0000', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_2" width="14" bgcolor="#FF0000" onclick="m5ColorClicked(this, '#FF0000', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_3" width="14" bgcolor="#FF6600" onclick="m5ColorClicked(this, '#FF6600', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_4" width="14" bgcolor="#FF9900" onclick="m5ColorClicked(this, '#FF9900', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_5" width="14" bgcolor="#FFCC00" onclick="m5ColorClicked(this, '#FFCC00', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_6" width="14" bgcolor="#FFFF00" onclick="m5ColorClicked(this, '#FFFF00', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_7" width="14" bgcolor="#CCFF00" onclick="m5ColorClicked(this, '#CCFF00', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_8" width="14" bgcolor="#00FF00" onclick="m5ColorClicked(this, '#00FF00', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_9" width="14" bgcolor="#1CB900" onclick="m5ColorClicked(this, '#1CB900', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_10" width="14" bgcolor="#1F8F24" onclick="m5ColorClicked(this, '#1F8F24', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_11" width="14" bgcolor="#00FF99" onclick="m5ColorClicked(this, '#00FF99', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_12" width="14" bgcolor="#00CC99" onclick="m5ColorClicked(this, '#00CC99', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_13" width="14" bgcolor="#00FFFF" onclick="m5ColorClicked(this, '#00FFFF', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_14" width="14" bgcolor="#0099FF" onclick="m5ColorClicked(this, '#0099FF', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_15" width="14" bgcolor="#0066CC" onclick="m5ColorClicked(this, '#0066CC', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_16" width="14" bgcolor="#0005D9" onclick="m5ColorClicked(this, '#0005D9', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                            </tr>
                            <tr>
                              <td id="cc1_17" bgcolor="#000000" onclick="m5ColorClicked(this, '#000000', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_18" bgcolor="#333333" onclick="m5ColorClicked(this, '#333333', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_19" bgcolor="#666666" onclick="m5ColorClicked(this, '#666666', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_20" bgcolor="#999999" onclick="m5ColorClicked(this, '#999999', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_21" bgcolor="#CCCCCC" onclick="m5ColorClicked(this, '#CCCCCC', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_22" bgcolor="#FFFFFF" onclick="m5ColorClicked(this, '#FFFFFF', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_23" bgcolor="#996600" onclick="m5ColorClicked(this, '#996600', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_24" bgcolor="#CC9900" onclick="m5ColorClicked(this, '#CC9900', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_25" bgcolor="#993333" onclick="m5ColorClicked(this, '#993333', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_26" bgcolor="#CC3366" onclick="m5ColorClicked(this, '#CC3366', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_27" bgcolor="#FF3399" onclick="m5ColorClicked(this, '#FF3399', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_28" bgcolor="#CC66CC" onclick="m5ColorClicked(this, '#CC66CC', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_29" bgcolor="#9933FF" onclick="m5ColorClicked(this, '#9933FF', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_30" bgcolor="#6633CC" onclick="m5ColorClicked(this, '#6633CC', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_31" bgcolor="#6666CC" onclick="m5ColorClicked(this, '#6666CC', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                              <td id="cc1_32" bgcolor="#003399" onclick="m5ColorClicked(this, '#003399', 'cc1', 'm5_lbl1', 'm5_colors')">&nbsp;</td>
                            </tr>
                          </table>
                          <span class="text-bold" id="m5_lbl1">Click on the color to choose it!</span><span class="text-bold"><br />
                          <input name="m5_colors" type="hidden" id="m5_colors" />
                          <br />
                          Other colors: <br />
                          <textarea name="colors" cols="46" rows="4" class="input-box" id="colors"><?php echo @$_SESSION['colors'];?></textarea>
                          <br />
                          <input name="colors_designer" type="checkbox" id="colors_designer" value="Yes, I leave this to designer." />
                          I leave this to designer </span></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">Are there any  colors you hate so much that you <b>do not want</b> to see them in your logo?</td>
                        <td><table border="0" cellspacing="1" cellpadding="0">
                            <tr>
                              <td id="cc2_1" width="14" bgcolor="#CC0000" onclick="m5ColorClicked(this, '#CC0000', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_2" width="14" bgcolor="#FF0000" onclick="m5ColorClicked(this, '#FF0000', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_3" width="14" bgcolor="#FF6600" onclick="m5ColorClicked(this, '#FF6600', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_4" width="14" bgcolor="#FF9900" onclick="m5ColorClicked(this, '#FF9900', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_5" width="14" bgcolor="#FFCC00" onclick="m5ColorClicked(this, '#FFCC00', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_6" width="14" bgcolor="#FFFF00" onclick="m5ColorClicked(this, '#FFFF00', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_7" width="14" bgcolor="#CCFF00" onclick="m5ColorClicked(this, '#CCFF00', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_8" width="14" bgcolor="#00FF00" onclick="m5ColorClicked(this, '#00FF00', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_9" width="14" bgcolor="#1CB900" onclick="m5ColorClicked(this, '#1CB900', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_10" width="14" bgcolor="#1F8F24" onclick="m5ColorClicked(this, '#1F8F24', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_11" width="14" bgcolor="#00FF99" onclick="m5ColorClicked(this, '#00FF99', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_12" width="14" bgcolor="#00CC99" onclick="m5ColorClicked(this, '#00CC99', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_13" width="14" bgcolor="#00FFFF" onclick="m5ColorClicked(this, '#00FFFF', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_14" width="14" bgcolor="#0099FF" onclick="m5ColorClicked(this, '#0099FF', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_15" width="14" bgcolor="#0066CC" onclick="m5ColorClicked(this, '#0066CC', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_16" width="14" bgcolor="#0005D9" onclick="m5ColorClicked(this, '#0005D9', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                            </tr>
                            <tr>
                              <td id="cc2_17" bgcolor="#000000" onclick="m5ColorClicked(this, '#000000', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_18" bgcolor="#333333" onclick="m5ColorClicked(this, '#333333', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_19" bgcolor="#666666" onclick="m5ColorClicked(this, '#666666', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_20" bgcolor="#999999" onclick="m5ColorClicked(this, '#999999', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_21" bgcolor="#CCCCCC" onclick="m5ColorClicked(this, '#CCCCCC', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_22" bgcolor="#FFFFFF" onclick="m5ColorClicked(this, '#FFFFFF', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_23" bgcolor="#996600" onclick="m5ColorClicked(this, '#996600', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_24" bgcolor="#CC9900" onclick="m5ColorClicked(this, '#CC9900', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_25" bgcolor="#993333" onclick="m5ColorClicked(this, '#993333', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_26" bgcolor="#CC3366" onclick="m5ColorClicked(this, '#CC3366', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_27" bgcolor="#FF3399" onclick="m5ColorClicked(this, '#FF3399', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_28" bgcolor="#CC66CC" onclick="m5ColorClicked(this, '#CC66CC', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_29" bgcolor="#9933FF" onclick="m5ColorClicked(this, '#9933FF', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_30" bgcolor="#6633CC" onclick="m5ColorClicked(this, '#6633CC', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_31" bgcolor="#6666CC" onclick="m5ColorClicked(this, '#6666CC', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                              <td id="cc2_32" bgcolor="#003399" onclick="m5ColorClicked(this, '#003399', 'cc2', 'm5_lbl2', 'm5_no_colors')">&nbsp;</td>
                            </tr>
                          </table>
                          <span class="text-bold" id="m5_lbl2">Click on the color to choose it!</span><span class="text-bold"><br />
                          <input name="m5_no_colors" type="hidden" id="m5_no_colors" />
                          <br />
                          Other colors: <br />
                          <textarea name="no_colors" cols="46" rows="4" class="input-box" id="textarea2" value="" ><?php echo @$_SESSION['no_colors'];?></textarea>
                          </span></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">Describe some ideas you might have in mind for your logo design, examples of logos you like/dislike, etc.</td>
                        <td><textarea name="idea_of_clint" cols="46" rows="4" class="input-box" id="idea_of_clint" ><?php echo @$_SESSION['idea_of_clint'];?></textarea></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">If you have images of logos you like or other files you'd like to send, please attach them here:</td>
                        <td><input name="file" type="file" class="input-box accept" size="40" />
                          <font color="#666666" class="style1"><br />
                          </font><span class="text-bold"><font color="#666666"><b>Note:</b> File format should be ZIP, RAR, TAR JPG, GIF, PDF, ODT, PNG, PPT, PPTX, DOC, DOCX, PSD, AI or EPS. Maximum file size is 500KB. </font></span></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" valign="top" class="text-bold">Contact Details (Mandatory for plus and superplus type Packages)</td>
                        <td><textarea name="contact_details" cols="60" rows="4" class="input-box" id="contact_details" value="" ><?php echo @$_SESSION['contact_details'];?></textarea></td>
                      </tr>
                      <tr>
                        <td height="40" colspan="2" bgcolor="#F8FCE3"><h5 class="style8"><strong>Extra Services - Promote your business to its full potential!<br />
        <span style="margin:0 0 0 75px;"> Use one in-house design team for all your design needs!</span></strong></h5></td>
                      </tr>
                      <tr class="tablebg">
                        <td height="3" colspan="2" ></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" class="titlebg2"><h1 class="order-head-bg"><strong><u>Web Design</u></strong></h1></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" class="text-bold"><!--Special Promotion:<br />
                          Half-Price on all web
                          
                          Packages.<br />
                          Valid to <strong><span class="text-red"> <?php echo $today; ?> </span></strong>--></td>
                        <td valign="top" class="text-bold"> Select Package:&nbsp;&nbsp;&nbsp;
                          <select name="web" class="text-bold" >
                            <option  value="">See Package Options</option>                            
                            <option <?php if(isset($_SESSION['web']) && $_SESSION['web'] == Budget_Website_Price ) echo "selected='selected'"; ?> value="<?php echo Budget_Website_Price; ?>"><?php echo Budget_Website." - Now ". CURRENCY . Budget_Website_Price ." Was ". CURRENCY . Budget_Website_Price_Other; ?></option>
                            <option <?php if(isset($_SESSION['web']) && $_SESSION['web'] == Gold_Website_Price ) echo "selected='selected'"; ?> value="<?php echo Gold_Website_Price; ?>"><?php echo Gold_Website." - Now ". CURRENCY . Gold_Website_Price ." Was ". CURRENCY . Gold_Website_Price_Other; ?></option>
                            <option <?php if(isset($_SESSION['web']) && $_SESSION['web'] == Elite_Website_Price ) echo "selected='selected'"; ?> value="<?php echo Elite_Website_Price; ?>"><?php echo Elite_Website." - Now ". CURRENCY . Elite_Website_Price ." Was ". CURRENCY . Elite_Website_Price_Other; ?></option>
                           
                          </select></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" class="text-bold"><h5 align="center" class="style8">For more information on the Web design packages we offer, <a href="javascript:void(0);">click here</a>.    
                            
                           <br />
                            
                            Your order details entered above will be saved. To return to this page, click "back" on your browser. </h5></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" class="titlebg2"><h1 class="order-head-bg"><strong><u>Brochure</u></strong></h1></td>
                      </tr>
                      <tr class="tablebg">
                        <td align="right" class="text-bold"><!--<div align="right"> Special Promotion:<br />
                            Half-Price on all Brochure
                            
                            Packages.<br />
                            Valid to <strong><span class="text-red"> <?php echo $today; ?> </span></strong> </div>--></td>
                        <td valign="top" class="text-bold"> Select Package:&nbsp;&nbsp;&nbsp;
                          <select name="brouchure" class="text-bold" >
                                                    
                            <option value="">See Package Options</option>                            
                            <option <?php if(isset($_SESSION['brouchure']) && $_SESSION['brouchure'] == Brochure_Tri_Fold_Price ) echo "selected='selected'"; ?> value="<?php echo Brochure_Tri_Fold_Price; ?>"><?php echo Brochure_Tri_Fold." - Now ". CURRENCY . Brochure_Tri_Fold_Price ." Was ". CURRENCY . Brochure_Tri_Fold_Price_Other; ?></option>
                            <option <?php if(isset($_SESSION['brouchure']) && $_SESSION['brouchure'] == Brochure_4_Page_Price ) echo "selected='selected'"; ?> value="<?php echo Brochure_4_Page_Price; ?>"><?php echo Brochure_4_Page." - Now ". CURRENCY . Brochure_4_Page_Price ." Was ". CURRENCY . Brochure_4_Page_Price_Other; ?></option>
                            <option <?php if(isset($_SESSION['brouchure']) && $_SESSION['brouchure'] == Brochure_8_Page_Price ) echo "selected='selected'"; ?> value="<?php echo Brochure_8_Page_Price; ?>"><?php echo Brochure_8_Page." - Now ". CURRENCY . Brochure_8_Page_Price ." Was ". CURRENCY . Brochure_8_Page_Price_Other; ?></option>
                            
                          </select></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" class="titlebg2"><h1 class="order-head-bg"><strong><u>Combo Package </u></strong></h1></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" class="text-bold"><h5 class="style8">You will have the opportunity in the next stage to select a combo package that combines all of our services we offer at a discount price. </h5></td>
                      </tr>
                      <tr class="tablebg">
                        <td colspan="2" align="right" class="text-bold"><div align="left" class="rednormaltext">We offer this for the ambitious business person or entrepreneur. </div></td>
                      </tr>
                      
                      <!-- //////////////////////////////////// 
                      <tr><td colspan="2">
                      ////////////////// -->
                      <!--  Changed by padam -->
                      <!--<div class="contact-list" style="margin:20px 0 0 150px;">
                    <label style="float:left"><br />Security Code:</label>
                    <img border="1" src="<?php //echo base_url()?>includes/logo-design/security_image.php?width=70" width="265" height="50" alt="Security Image"  /> </div>-->
                    
                    <!-- //////////////////////////////////// 
                     <div class="contact-list" style="margin:20px 0 0 150px;">
                    <label style="float:left"><br />Security Code:</label></div>
                    
                    <div style="clear:none;float:left"><img border="1" id="captcha" src="<?php echo base_url()?>includes/logo-design/security_image.php?width=100" width="265" height="50"  alt="Security Image"  /></div><div style="clear:none;float:left;padding:10px;"><a href="javaScript: new_captcha();"><img src="<?php echo base_url()?>images/refresh.gif" />Refresh</a></div>
                  	</td></tr>
                  <tr><td>
                  ////////////////// -->
                  
                  
                  
                   <!--  Changed by padam -->
                  	<!--<div class="contact-list" style="margin:0 0 0 150px;">
                    <label>Enter the text here:<span class="redTxt">*</span></label>
                    <input name="verificationcode" type="text" id="verificationcode" value=""  size="10" /><br /><br />
                  </div>-->
                  
                  <!-- //////////////////////////////////// 
                  <div class="contact-list" style="margin:0 0 0 150px;vertical-align:top">
                    <label>Enter the text here:<span class="redTxt">*</span></label>
                    
                    </div>
                    </td>
                    <td>
                  <input name="verificationcode" type="text" id="verificationcode" value=""  size="10" />
                  </td></tr>
                  ////////////////// -->
                      <tr class="tablebg">
                        <td colspan="2" align="center">
                        <!--<a href="javascript: window.location='<?php echo base_url()?>packages.php'"><img src="<?php echo base_url()?>images/back.jpg" width="100" height="49" border="0" align="middle" style="display:inline;" /></a>
                         <input name="submit" type="image" src="<?php echo base_url()?>images/pay_continue.jpg" alt="continue" align="middle" onclick="checkerror()"/>-->
                         
                         <input type="button" class="newbuttonback" value="Back" onclick="javascript:window.location='<?= site_url('packages') ?>'" />
 <input  type='submit' class="newbuttoncontinue" value="Continue" align="middle" />
                         
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
        <?php 
include_once("includes/logo-design/sidebar-1.php");
?>
        <div class="security">
          <h2 align="center"><img src="<?php echo base_url()?>images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
          <h2 align="center"><img src="<?php echo base_url()?>images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer-container">
    <?php include_once("includes/logo-design/footer.php"); ?>
  </div>
</div>
</body>
</html>