<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $m5_colors = @$_SESSION['m5_colors'];
    $m5_no_colors = @$_SESSION['m5_no_colors'];
    $first_name= stripslashes(@$_SESSION['fname']);
    $fname= str_replace("'", " ", $first_name);
    $last_name= stripslashes(@$_SESSION['lname']);
    $lname = str_replace("'", " ", $last_name);
    $phone= stripslashes(@$_SESSION['phone_no']);
    $phone_no = str_replace("'", " ", $phone);
    $email= stripslashes(@$_SESSION['email_id']);
    $email_id = str_replace("'", " ", $email);
    $se_email= stripslashes(@$_SESSION['se_email_id']);
    $se_email_id = str_replace("'", " ", $se_email);
    $business = stripslashes(@$_SESSION['business_detail']);
    $business_detail = str_replace("'", " ", $business);
    $company = stripslashes(@$_SESSION['company_name']);
    $company_name = str_replace("'", " ", $company);
    $cmp_logo = stripslashes(@$_SESSION['cmp_logo_name']);
    $cmp_logo_name = str_replace("'", " ", $cmp_logo);
    $tag = stripslashes(@$_SESSION['tagline']);
    $tagline = str_replace("'", " ", $tag);
    $idea= stripslashes(@$_SESSION['idea_of_clint']);
    $idea_of_clint = str_replace("'", " ", $idea);
    $contact= stripslashes(@$_SESSION['contact_details']);
    $contact_details = str_replace("'", " ", $contact);
    $yes_kalar= stripslashes(@$_SESSION['colors']);
    $colors = str_replace("'", " ", $yes_kalar);
    $no_kalar= stripslashes(@$_SESSION['no_colors']);
    $no_colors = str_replace("'", " ", $no_kalar);
    $mainLogoWebId = @$_SESSION['insert'];	
	$site       = ORDERED_SITE;	
	$web        = @$_SESSION['web'];
	$brouchure  = @$_SESSION['brouchure'];
	$option     = @$_SESSION['option'];
	$package    = @$_SESSION['package'];	
	$price      = @$_SESSION['price'];		
	$file       = @$_SESSION['file'];
	$grand_total= "Grand Total";
	$colour_yes = @$_SESSION['m5_colors'];
	$colour_no  = @$_SESSION['m5_no_colors'];
	$color      = explode(",",$colour_yes);
	$colorno    = explode(",",$colour_no);	
    $extPrice   = 0;	
	for($i=1;$i<21;$i++)
	{		
		$opt='opt'.$i;
		$extraopt='extraopt'.$i;
    	if(@$_SESSION[$opt]!="0.00" && @$_SESSION[$extraopt]!="")
    	{
    	$amount=@$_SESSION[$opt];	
    	if($i=='16')
    	{
    		$amount=$amount * @$_SESSION['select'];
    	}
    	if($i=='17')
    	{
    		$amount=$amount * @$_SESSION['select2'];
    	}
    	if($i=='20')
    	{
    		$cost=$amount;
    		$amount=($cost * @$_SESSION['select4']) + ($cost * @$_SESSION['select5']) + ($cost * @$_SESSION['select6']) + ($cost * @$_SESSION['select7']) + ($cost * @$_SESSION['select8']);
    	}    	
       	$extPrice=$extPrice + $amount;    
    	}
	}
if($this->router->fetch_class() == 'reseller'):
$_SESSION['payment_link'] = base_url().'reseller/payment.php?package='.$package.'&amp;price='.$price.'&amp;option='.$option.'&amp;extprice='.$extPrice.'&amp;p_discount='.@$_SESSION['p_discount'].'&amp;tax_in_total='.@$_SESSION['tax_in_total'].'&amp;net_total='.@$_SESSION['net_total'].'&amp;mainlogowebid='.$mainLogoWebId.'&amp;company_name='.$company_name.'&amp;web='.@$_SESSION['web'].'&amp;brouchure='.@$_SESSION['brouchure'].'&amp;purchase_discount='.@$_SESSION['purchase_discount'];
else:
$_SESSION['payment_link'] = base_url().'payment.php?package='.$package.'&amp;price='.$price.'&amp;option='.$option.'&amp;extprice='.$extPrice.'&amp;p_discount='.@$_SESSION['p_discount'].'&amp;tax_in_total='.@$_SESSION['tax_in_total'].'&amp;net_total='.@$_SESSION['net_total'].'&amp;mainlogowebid='.$mainLogoWebId.'&amp;company_name='.$company_name.'&amp;web='.@$_SESSION['web'].'&amp;brouchure='.@$_SESSION['brouchure'].'&amp;purchase_discount='.@$_SESSION['purchase_discount'];
endif;
echo '<table width="680" border="0" style="margin:0;padding:0;font:normal 13px/18px Arial, Helvetica, sans-serif;color:#333333; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;-webkit-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 0px 5px rgba(50, 50, 50, 0.75);
box-shadow:         0px 0px 5px rgba(50, 50, 50, 0.75);">
  <tr>
   <td width="680" height="160" valign="bottom" style=""><img src="'.base_url().'images/logo-'.COUNTRY.'.gif" width="680" /><div style="margin-top:-30px;padding-left:15px;font:normal 20px Georgia, \'Times New Roman\', Times, serif;">Order Confirmation</div></td>
  </tr>
  <tr>
    <td><table width="680" border="0" style="margin-bottom:0;">
        <tr>
          <td><img src="'.base_url().'images/sale.gif" width="680"  alt="sale" style="margin:0;padding:0;border:none;"/></td>
        </tr>
        <table width="680" style="margin:0;">
          <tr>
            <td><table width="680" style="margin:0px; border:1px solid #ccc" >
                <tr>
                  <td width="20"></td>
                  <td><br />
                  Dear '.@$first_name.',<br />
                    <br />
                    Thank you for your order with Logo Design Guarantee.<br />
                    <br />
                    Before we can actually begin work on your design requirements we stress<br />
                    that <strong>we require payment before we can start.</strong> <br />
                    <br />
                    This is standard process in the logo industry.<br />
                    <br />
                    Payment can be made via this secure link...<br />
                    <br />
                    <a id="payment_link" href="'.@$_SESSION['payment_link'].'" target="_blank"><img src="'.base_url().'images/payment.gif" width="396" height="94" alt="payment" /></a><br />
                    If you have made payment already then please feel free to ignore this email.<br />
                    <br />
                    We would have successfully received your payment. Our designers will get 
                    straight to work on your requests. There is no need to do anything further.<br />
                    <br />
                    However, if you have <strong>yet to make payment</strong>, please do so by clicking on the <br />
                    payment button.<br />
                    <br />
                    We reassure you of our premium rated services:
                    <table width="570px" style="padding:5px 0 0 0px;">
                      <tr>
                        <td><img src="'.base_url().'images/bullet.gif" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>We have <strong>award winning,</strong> professional <i>&ldquo;in-house&rdquo;</i> designers! <br />
                          <img src="'.base_url().'images/bullet.gif" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>Your designs will be fully <strong>100% custom-made!</strong><br />
                          <img src="'.base_url().'images/bullet.gif" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>You will been entitled to <strong>unlimited redraws and revisions!</strong><br />
                          <img src="'.base_url().'images/bullet.gif" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>We have the best guarantee in the industry ><strong>'.GUARANTEE_DAY.'-Day,100% money back-guarantee!</strong> <br />
                          <br /></td>
                      </tr>
                    </table>
                    Here is the payment link again for you...<br />
<br />
<a href="'.$_SESSION['payment_link'].'" target="_blank"><img src="http://'.SITE_NAME.'/images/payment.gif" width="396" height="94" alt="payment" /></a><br /><br />
 Remember we would have received your logo order brief, and this would<br />
have been automatically saved in our system. There is no need to place an order again.<br />
<br /><br />
Once payment is made, then our staff will automatically be notified and allocate your<br />
order to our designers.<br /><br />
<div style="border:2px solid #6bc024;"></div><br />
<u><strong>Questions?</strong></u><br /><br />
You can reply to this email or call us 24/7 on the number below.<br /><br />
Customer Services<br />
Logo Design Guarantee<br />
We Guarantee the Lowest Prices and the Best Money back Guarantee<br />
<a href="mailto:'.INFO_MAIL.'" style=" color:#0090ff;">'.INFO_MAIL.'</a><br /><br />
<span style="font:bold 24px Verdana, Geneva, sans-serif;">'.PHONE_NO.' <strong style="font:italic 16px Verdana, Geneva, sans-serif;">(24/7 Sales and Support)</strong></span><br /><br />
<a href="http://messenger.providesupport.com/messenger/pradyumna.html" target="_blank" ><img name="psz1K7image" src="http://image.providesupport.com/image/pradyumna/online-1751026284.gif" width="140" border="0" height="60"></a>
<br />
<br />
<div style="border:2px solid #6bc024;"></div><br />
P.S. We also offer additional design services such as <strong>web site design, brochure design</strong><br />
and company start-up design packages.<br /><br />
For more information click here:  <br />
<a href="'.base_url().'web-site-design/webdesigner-limited-sale/index.php" target="_blank" style=" color:#0090ff;">http://'.SITE_NAME.'/web-site-design/webdesigner-limited-sale/index.php</a>
<br /><br />
</td>
<td width="20"></td>
                </tr>
              </table></td>
          </tr>
        </table><br />
        <tr>
          <td align="center"><img src="'.base_url().'images/we-accept.gif" width="276" height="30" alt="We accept" style="margin:0;padding:0;border:none;"/></td>
          </tr>
          <tr><td></td></tr>
          <tr>
  <td><img src="'.base_url().'images/office.gif" width="680" alt="Logo design guarantee" style="margin:0;padding:0;border:none;"/></td>
  </tr>
      </table></td>
  </tr>
</table>';
/*echo "<table width=\"100%\" border=\"0\">
  <tr>
    <td><p>Dear ".$first_name."</p>
	<p>Thank you for your order with Logo Design Guarantee.</p>
          <p align=\"justify\">Before we can actually begin work on your design requirements we stress  that we require payment before we can start. This email is just a reminder for  payment.</p>
          <p align=\"justify\">Payment can be made via this secure link:</p>
		  <p align=\"justify\"><a href=\"http://".SITE_NAME."/payment.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId\">http://".SITE_NAME."/payment.php</a></p>
		  <p align=\"justify\">If you have made payment already then please feel free to ignore this  email. We would have successfully received your payment. We would have already  been notified via our internal system.</p>
		  <p align=\"justify\">Our designers will get straight to work on your requests. There is no  need to do anything further.</p>
		  <p align=\"justify\">However, if you have yet to make payment, please do so by paying on the  given payment link. </p>
		  <p align=\"justify\">We wish to reassure you that your designs will be fully custom-made, and,  unlike most firms, you are entitled to a <strong>100%  money back-guarantee</strong>. You can only win.</p>
		  <p align=\"justify\">Further, we have a team of professional &ldquo;in-house&rdquo; designers and all  orders are entitled to unlimited redraws and revisions.</p>
		  <p align=\"justify\">Here is the payment link again for you.</p>
		  <p align=\"justify\">
		  <a href=\"http://".SITE_NAME."/payment.php?package=$package&amp;price=$price&amp;web=$web&amp;brouchure=$brouchure&amp;option=$option&amp;extprice=$extPrice&amp;mainlogowebid=$mainLogoWebId\">http://".SITE_NAME."/payment.php</a>
		  </p>
		  <p>Remember we would have received your logo order specification, and this  would have been automatically saved in our system. There is no need to place an  order again. Once payment is made, then our staff will automatically be  notified and allocate your order to our designers.</p>
		  <p align=\"justify\">If you wish to ask any questions, you can do so by replying to this  email.</p>
		  <p align=\"justify\">With every business success.</p><br/>
		  <p align=\"justify\">		  Customer Services<br/>
		 Logo Design Guarantee<br/>
		  We Guarantee the Lowest Prices and the Best Money back Guarantee<br/>
		  Info@".SITE_NAME."</p>
		  <p align=\"justify\">P.S.  We also offer additional design services such as web site design, brochure  design and company start-up design packages. </p>
		  <p align=\"justify\">For  more information click here:&nbsp;&nbsp;&nbsp; <a href=\"http://".SITE_NAME."\">http://".SITE_NAME."/web-site-design/webdesigner-limited-sale/index.php</a>. </p></td>
  </tr>
</table>";*/
?>