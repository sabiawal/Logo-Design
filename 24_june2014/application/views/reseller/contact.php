<style>#mailSuccess{display: none; border: 1px solid #ccc; color: #098; font: bold 16px/18px arial; margin-bottom: 20px; padding: 10px;}</style>
<?php if (isset($_POST['submit'])): ?>
    <style>div#mailSuccess{display: block;}</style>
<?php endif; ?>
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
    }
    );
});
</script>
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
    <div class="main col2-right-layout">
      <div class="col-main">
        <div class="footer-link contact">
          <h1>Contact us? </h1>
          <h1><img src="<?php echo base_url(); ?>images/contact-banner.jpg" title="kontakt" alt="kontakt"/></h1>
          <h3>We are here to help. </h3>
          <p>We have full-time support team online. This is available by clicking the image to the right side of this page titled &quot;Live Support&quot;. If our team are offline, then please leave a message below. All emails are replied to within 12-24 hours.</p>
          <p>'*' represents mandatory fields</p>
          <div id="mailSuccess">Thank you for your comment. We have received your message.</div>
          <div class="contact-form">
            <form class="cmxform" id="commentForm" method="post" action="#successShow">
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
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua &amp; Barb.">Antigua &amp; Barb.</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia">Bosnia</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Virgin Is.">British Virgin Is.</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Rep.">Dominican Rep.</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="Germany">Germany</option>
                  <option value="Greece">Greece</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Iran">Iran</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Korea">Korea</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Lao P.Dem.R.">Lao P.Dem.R.</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Malta">Malta</option>
                  <option value="Marocco">Marocco</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua N. Guinea">Papua N. Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Pitcairn">Pitcairn</option>
                  <option value="Please Select">Please Select</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Romania">Romania</option>
                  <option value="Russian Fed.">Russian Fed.</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Serbia">Serbia and Montenegro</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St. Kitts &amp; Nevis">St. Kitts &amp; Nevis</option>
                  <option value="St. Lucia">St. Lucia</option>
                  <option value="St. Vincent">St. Vincent</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syrian Arab Rep.">Syrian Arab Rep.</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States" selected="selected">United States</option>
                  <option value="Untd. Arab Emir.">Untd. Arab Emir.</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="US Virgin Islands">US Virgin Islands</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Viet Nam">Viet Nam</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zimbabwe">Zimbabwe</option>
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
                    <input class="required" name="verificationcode" type="text" id="verificationcode" value=""  size="10" />
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
                <td><strong><a href="javascript:void(0)">
                  <?= INFO_MAIL; ?>
                  </a></strong></td>
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
                <td>Press Release: </td>
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
          </div>
          <br />
          <?php include_once("includes/reseller/blue-offer.php"); ?>
        </div>
      </div>
      <div class="side-bar">
        <?php 
            $this->load->view('blocks/money-back'); 
            $this->load->view('blocks/live-support'); 
            $this->load->view('blocks/charity'); 
            $this->load->view('blocks/security-sidebar');
            /////////////
            $this->load->view('blocks/awards'); 
            $this->load->view('blocks/testimonials'); 
            $this->load->view('blocks/customer-support');            
        ?>
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