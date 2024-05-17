<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery.js"></script>
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
          verificationcode: {
				required: true,
			    remote: "<?php echo base_url()?>includes/logo-design/process-capcha.php"
			}            
        }        
    });
});
</script>
<?php include_once("includes/logo-design2/analytics.php"); ?>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design2/header.php"); ?>
  </div>

  <div class="top-container">
    <div class="top">
      <?php include_once("includes/logo-design2/menu-banner.php"); ?>
    </div>
  </div>

  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main">
        <div class="footer-link contact">
          <h1>Contact us? </h1>
          <h1><img src="<?php echo base_url(); ?>images/contact-banner.jpg" title="kontakt" alt="kontakt"/></h1>
          <h3>We are here to help. </h3>
          <p>We have full-time support team online. This is available by clicking the image to the right side of this page titled &quot;Live Support&quot;. If our team are offline, then please leave a message below. All emails are replied to within 48-72 hours.</p>
          <p>'*' represents mandatory fields</p>
          <div class="contact-form">
            <form class="cmxform" id="commentForm" method="post" action="<?php echo site_url('logodesign2/contactMail'); ?>">
              <div class="contact-list">
                  <label for="title">Title</label>
                  <input id="title" name="title" class="" size="40" />
                </div>
                <div class="contact-list">
                  <label for="Fname">First Name: *</label>
                  <input id="Fname" name="Fname" class="required" minlength="4" size="40" />
              </div>
                <div class="contact-list">
                  <label for="Lname">Last Name: *</label>
                  <input id="Lname" name="Lname" class="required" size="40" />
            </div>

                <div class="contact-list">
                  <label for="company">Company</label>
                  <input id="company" class="" name="company"  size="40" />
             </div>
                <div class="contact-list">
                  <label for="address">Address:</label>
                  <input id="address" class="" name="address" size="40" />
         </div>

                <div class="contact-list">
                  <label for="state">State:</label>
                  <input id="state" class="" name="state" minlength="2" size="40" />
                  </div>
                <div class="contact-list">
                  <label for="city">City:</label>
                  <input id="city" class="" name="city"  size="40" />
                  </div>
               <div class="contact-list">
                  <label for="zip">ZIP/Postal Code:</label>
                  <input id="zip" class="" name="zip" maxlength="5"  size="5" />
                  </div>
                <div class="contact-list">
                  <label for="country">Country:</label>
                  <select id="country" class="required" name="country">
                  
                    <?php
                    $q = $this->db->get("tbl_countries");
                    foreach($q->result() as $row){
                    echo $row->country_name;
                    echo '<option value="'.$row->country_name.'">'.$row->country_name.'</option>';
                    }?>                    
                  </select>
                  </div>

                <div class="contact-list">
                  <label for="cemail">E-Mail: *</label>
                  <input id="cemail" name="email" class="required email" size="40" />
                  </div>

                <div class="contact-list">
                  <label for="phone">Phone:</label>
                  <input id="phone" name="phone" class="" size="40" />
                  </div>

                <div class="contact-list">
                  <label for="fax">Fax:</label>
                  <input id="fax" name="fax" class="" size="40" />
                  </div>

               <div class="contact-list">
                  <label for="ccomment">Your comment (required)</label>
                  <textarea id="ccomment" name="comment" class="required" cols="30" rows="5"></textarea>
                  </div>
                <div class="contact-list">
                <label for="captcha">Security Code (required)</label>
                  <div style="clear:none;float:left"><img border="1" id="captcha" src="<?php echo base_url()?>includes/logo-design/security_image.php?width=100" width="265" height="50"  alt="Security Image"  /></div><div style="clear:none;float:left;padding:10px;"><a href="javaScript: new_captcha();"><img src="<?php echo base_url()?>images/refresh.gif" />Refresh</a></div>
                </div>                 
                
                <div class="contact-list">
                    <label>Enter the text here:<span class="redTxt">*</span></label>
                    <input name="verificationcode" type="text" id="verificationcode" value=""  size="10" />
                    </div>
                              
               <div class="contact-list">
                  <input class="submit" type="submit" name="submit" value="Send Feedback"/>
                </div>
            </form>
          </div>
          

          <div class="email-contact">
          <h1>Email contacts:</h1>
          
    <table width="550" border="0" >
    <tr>    
        <td>General information: </td>    
        <td><strong><a href="javascript:void(0)"><?= INFO_MAIL; ?></a></strong></td>    
    </tr>    
    <tr>    
        <td>Order &amp; Billing: </td>    
        <td><strong><a href="javascript:void(0)">order@<?php echo SITE_NAME ?></a></strong></td>    
    </tr>    
    <tr>    
        <td>Article submission: </td>    
        <td><strong><a href="javascript:void(0)">articles@<?php echo SITE_NAME ?></a></strong></td>    
    </tr>    
    <tr>    
        <td>Press Release:  </td>    
        <td><strong><a href="javascript:void(0)">press@<?php echo SITE_NAME ?></a></strong></td>    
    </tr>    
    <tr>    
        <td>Employment opportunities:</td>    
        <td><strong><a href="javascript:void(0)">employment@<?php echo SITE_NAME ?></a></strong></td>    
    </tr>    
    <tr>    
        <td>Partnership opportunities: </td>    
        <td><strong><a href="javascript:void(0)">partnership@<?php echo SITE_NAME ?></a></strong></td>    
    </tr>    
</table>          

          </div><br />
          <?php include_once("includes/logo-design2/blue-offer.php"); ?>
        </div>
      </div>
      
      <div class="side-bar">
        <?php 
        include_once("includes/logo-design2/sidebar-1.php");
        include_once("includes/logo-design2/sidebar-2.php");
        ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="footer-container">
    <?php include_once("includes/logo-design2/footer.php"); ?>
  </div>
</div>

</body>
</html>