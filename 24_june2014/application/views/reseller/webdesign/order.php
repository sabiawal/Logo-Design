<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script src="<?php echo base_url()?>js/cmxforms.js"></script>
<script type="text/javascript">
$(document).ready(function() 
{
	$("#frmWebOrder").validate(
    {
        rules:
        { 
			company_name: "required",
            contact_info: "required",
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
            company_name: "Comany Name is Required Field",
            contact_info: "Contact Info Required",
			email_id: "Email is Required Field",
            file: "Invalid File Format",
			business_detail: "Business is Required Field",
            verificationcode: "Invalid Verification Code"
		}
    }
    );
});
</script>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
<style>
tr, th, td{
	padding:10px;
	text-align:left;
	border:5px solid #ffffff;
	}
</style>
<?php $this->load->view('blocks/analytics'); ?>
</head>
<body>
<div class="wrapper">
    <div class="header-container">
        <?php $this->load->view('blocks/header/header');  ?>
    </div>
    <div class="top-container">
        <div class="top">
            <?php $this->load->view('blocks/menu');  ?>
            <?php $this->load->view('blocks/main-banner');  ?>
        </div>
    </div> 
  <div class="main-container">
    <div class="main col1-layout">
    <form action='<?php echo site_url('reseller_web/cartmid');?>' method='post' id="frmWebOrder" name='frmWebOrder' enctype='multipart/form-data'>
      <div class="col-main order-page">
        <h1>Order your website today!</h1>
        <p>Need another package also? This order page below will allow you to add any other service we offer. </p>
        <p>Please fill in the details below. It will only take a few minutes of your time. After receiving your order, we will get in touch with a more in-depth questionnaire. This will help you express exactly what you want. The order page here is intended to get things started for you! </p>
        <p>We have an experienced team in handling web design projects. We opt for a simple and effective process.</p>
        <p><span class="text-red">The fields marked * are mandatory.</span> </p>
        <h1>
        <?php 
        if(COUNTRY == 'USA')
        { 
            //echo @$_SESSION['web_package'].", ". CURRENCY . @$_SESSION['web_price']  . " USD = &pound;" . ceil(@$_SESSION['web_price']* CONVERSION_MULTIPLYER) ."GBP" ;
            echo @$_SESSION['web_package'].", ". CURRENCY . @$_SESSION['web_price']  . " USD";
        }
        if(COUNTRY == 'UK')
        {
            echo @$_SESSION['web_package']." ".CURRENCY.@$_SESSION['web_price']."GBP" ;
        }
         ?>
         </h1>
        <table width="757" >
          <tr>
            <td width="5" colspan="2" rowspan="2" valign="top" align="center"><h2 class="style3"><strong>1. </strong></h2></td>
            <td colspan="2" valign="top"><h2><strong>Company Name:</strong></h2></td>
          </tr>
          <tr>
            <td width="242" valign="top" bgcolor="#ECE9D8"><strong>Company Name: </strong></td>
            <td width="465" height="28" bgcolor="#ECE9D8"><input name="company_name" type="text" id="company_name" size="40" maxlength="50" value="<?php echo @$_SESSION['company_name'] ?>" />
              <span class="text-red">*</span><br />
              Enter the name of the company that the website is being designed for.</td>
          </tr>
          <tr>
            <td colspan="2" rowspan="6" valign="top" align="center" width="5"><h2><strong>2.</strong> </h2></td>
            <td colspan="2"><h2><strong>Contact Info:</strong></h2></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8"><span class="normaltxt"><strong>Contact Name: </strong></span></td>
            <td bgcolor="#ECE9D8"><input name="contact_info" type="text" id="contact_info" size="40" maxlength="50" value="<?php echo @$_SESSION['contact_info'] ?>" />
              <span class="text-red">*</span> <br />
              <span class="smalltxt">Enter the full name and phone number of the person responsible for making decisions about the website design.</span></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8"><span class="normaltxt"><strong>Email: </strong></span></td>
            <td bgcolor="#ECE9D8"><input name="email_id" type="text" id="email_id" size="40" maxlength="50" value="<?php echo @$_SESSION['email_id'] ?>" />
              <span class="text-red">*</span> <br />
              <span class="smalltxt">Enter your valid email address. </span></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><div align="justify"><strong>Contact Phone No:(Optional)</strong></div></td>
            <td valign="top" bgcolor="#ECE9D8"><input name="contact_phone" type="text" id="contact_phone" size="40" maxlength="50" value="<?php echo @$_SESSION['contact_phone'] ?>"  />
              <br />
              <span class="smalltxt"><span class="text-red">IMPORTANT:</span> this is the number that your website designer will call to have a pre-design consultation with you. </span><br /></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong> The best time for our web designer to call you?</strong></td>
            <td valign="top" bgcolor="#ECE9D8"><input name="best_time" type="text" id="best_time" size="40" maxlength="50" value="<?php echo @$_SESSION['best_time'] ?>"  />
              <br />
              <span class="smalltxt">Enter the best time of day for the designer to call you. Make sure to include your time zone.</span></td>
          </tr>
          <tr>
           <!--<td valign="top" bgcolor="#ECE9D8"><span class="normaltxt"><strong>Security Code: </strong></span></td>
            <td bgcolor="#ECE9D8">
            <img border="1" src="<?php //echo base_url()?>includes/logo-design/security_image.php?width=144" width="144" height="30" alt="Security Image"  /> 
              <input name="verificationcode" type="text" id="verificationcode" value=""  size="10" />
                  <span class="text-red">*</span> <br />
              <span class="smalltxt">Enter your code shown above. </span></td>-->
          </tr>
          </div>
          <tr>
            <td colspan="2" rowspan="4" align="center"  valign="top" width="5"><h2 ><strong>3.</strong></h2></td>
            <td colspan="2" class="normaltxt"><h2><strong>Basic Website Design Info: </strong></h2></td>
          </tr>
          <tr>
            <td height="57" valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong>Do you have content (text or writing about your company) or images that  you want included in your site? </strong></td>
            <td bgcolor="#ECE9D8"><input type="file" name="file" id="file" class="accept" size="40" maxlength="50"  />
              <br />
              <span class="smalltxt">No text or images is needed at this stage. We will be in touch with you  with more detailed information in this regard. </span></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong>Do you have a domain name that you will want to use? If so, what is it?</strong></td>
            <td bgcolor="#ECE9D8"><input name="domain_name" type="text" id="domain_name" size="40" maxlength="50" value="<?php echo @$_SESSION['domain_name'] ?>"  />
              &nbsp;<br />
              <span class="smalltxt">Enter the domain name that you will want your website located at (like: mycompanyname.com). If you have not already registered a domain name we can help you do that as well. </span></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong>Do you have any specific ideas for your website? If so please share them  here:</strong></td>
            <td bgcolor="#ECE9D8"><label for="textarea"></label>
              <textarea name="web_idea" id="web_idea" cols="50" rows="4" ><?php echo @$_SESSION['web_idea'] ?></textarea>
              <p class="smalltxt">Briefly explain your ideas for your website, if any. </p></td>
          </tr>
          <tr>
            <td colspan="2" rowspan="2" valign="top" align="center" width="5"><h2><strong>4.</strong></h2></td>
            <td colspan="2" valign="top"><h2> <strong>Any Comments </strong></h2> </td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong>Please share your comments(If any):</strong></td>
            <td valign="middle" bgcolor="#ECE9D8"><textarea name="comment" cols="50" rows="4"><?php echo @$_SESSION['comment'] ?></textarea>
              <p class="smalltxt">We welcome any comments </p></td>
          </tr>
          <tr>
            <td colspan="2" rowspan="2" valign="top" align="center" width="5"><h2><strong>5.</strong></h2></td>
            <td colspan="2" valign="top"><h2><strong>Extra service </strong> </h2></td>
          </tr>
          <tr>
            <td colspan="2" valign="top" bgcolor="#ECE9D8" class="normaltxt"><h2 class="style3">Logo Package 
                &nbsp;</h2>
              <strong>Your website will include one concept logo design inclusive of the web package cost.
              For more design variations to ensure you get the exact logo you need  -  then order a logo package below: </strong></td>
          </tr>
          <tr>
            <td colspan="2" rowspan="2" valign="top"><h2 class="style3">&nbsp;</h2></td>
          </tr>
          <tr>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt"><strong class="normaltxt">Logo packages:</strong>&nbsp;</td>
            <td valign="top" bgcolor="#ECE9D8" class="normaltxt">
            <select name="logo_detail" class="title2" >
                <option value="">None</option>
                <option value="<?php echo Silver_Logo_Package_Price.'-'.Silver_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Silver_Logo_Package_Price.'-'.Silver_Logo_Package ){echo 'selected="selected"';} ?> >Silver - 6 logo concepts <?php echo CURRENCY.Silver_Logo_Package_Price; ?> </option>
                <option value="<?php echo Super_Silver_Logo_Package_Price.'-'.Super_Silver_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Super_Silver_Logo_Package_Price.'-'.Super_Silver_Logo_Package ){echo 'selected="selected"';} ?>>Silver plus Biz card designs <?php echo CURRENCY.Super_Silver_Logo_Package_Price; ?></option>
                <option value="<?php echo Super_Silver_Plus_Logo_Package_Price.'-'.Super_Silver_Plus_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Super_Silver_Plus_Logo_Package_Price.'-'.Super_Silver_Plus_Logo_Package ){echo 'selected="selected"';} ?> >Silver plus full stationary <?php echo CURRENCY.Super_Silver_Plus_Logo_Package_Price; ?></option>
                <option value="<?php echo Elite_Logo_Package_Price.'-'.Elite_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Elite_Logo_Package_Price.'-'.Elite_Logo_Package ){echo 'selected="selected"';} ?> >Elite &ndash; 12 logo concepts <?php echo CURRENCY.Elite_Logo_Package_Price; ?></option>
                <option value="<?php echo Super_Elite_Logo_Package_Price.'-'.Super_Elite_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Super_Elite_Logo_Package_Price.'-'.Super_Elite_Logo_Package ){echo 'selected="selected"';} ?> >Elite plus Biz card designs <?php echo CURRENCY.Super_Elite_Logo_Package_Price; ?></option>
                <option value="<?php echo Super_Elite_Plus_Logo_Package_Price.'-'.Super_Elite_Plus_Logo_Package; ?>" <?php if(@$_SESSION['logo_detail'] == Super_Elite_Plus_Logo_Package_Price.'-'.Super_Elite_Plus_Logo_Package ){echo 'selected="selected"';} ?>>Elite plus full stationary <?php echo CURRENCY.Super_Elite_Plus_Logo_Package_Price; ?></option>
              </select></td>
          </tr>
        </table>
        <input type="hidden" name="authentication_code" value="<?php echo md5(mktime()); ?>" />
        <div align="center" class="button">
        <p>For more information about the logo packages we offer, then <a href="<?php echo site_url('packages'); ?>" target="_blank">click here. </a></p>
        <p><span class="text-red">Note: You will not lose the data you have entered above.  Click back on your browser to return to this page.</span></p>
        <img src="<?php echo base_url()."images/webdesign/back.jpg"; ?>" title="back" alt="back" onclick="javascript:history.go(-1);" name="back" align="absmiddle" style="display:inline;" />
        <input type="image" src="<?php echo base_url()."images/webdesign/pay_continue.jpg"; ?>" align="absmiddle" />
        <p><span class="text-red">Note: unlike many design firms we provide 100% Money Back Guarantee. No questions asked or fees. </span></p>
        </div>
      </div>
      </form>
      <div class="side-bar">
            <?php $this->load->view('blocks/best-value'); ?>
            <?php $this->load->view('blocks/live-support'); ?>
            <?php $this->load->view('blocks/charity'); ?>
            <?php $this->load->view('blocks/security-sidebar'); ?>
            <?php $this->load->view('blocks/mcafee'); ?>
            <!--  -->
            <?php $this->load->view('blocks/awards'); ?>
            
            <?php $this->load->view('blocks/customer-support'); ?>
        </div>
      <div class="clear"></div>
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