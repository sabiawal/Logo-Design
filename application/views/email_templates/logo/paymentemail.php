<?php
        
    $logo_web_id    = @$_SESSION['logo_web_id'];
    // Images links
    $header_image   = base_url().'assets/images/email_templates/payment_email/logo-'.COUNTRY.'.gif';
    $sale_image     = base_url().'assets/images/email_templates/payment_email/sale.gif';
    $payment_image  = base_url().'assets/images/email_templates/payment_email/payment.gif';
    $bullet_image   = base_url().'assets/images/email_templates/payment_email/bullet.gif';
    $we_accept      = base_url().'assets/images/email_templates/payment_email/we-accept.gif';
    $office_image   = base_url().'assets/images/email_templates/payment_email/office.gif';

    /*if($this->router->fetch_class() == 'reseller'):
        $_SESSION['payment_link'] = base_url().'reseller/payment.php?package='.@$package.'&amp;price='.@$price.'&amp;option='.@$option.'&amp;extprice='.@$extPrice.'&amp;p_discount='.@$_SESSION['p_discount'].'&amp;tax_in_total='.@$_SESSION['tax_in_total'].'&amp;net_total='.@$_SESSION['net_total'].'&amp;mainlogowebid='.@$logo_web_id.'&amp;company_name='.@$company_name.'&amp;web='.@$_SESSION['web'].'&amp;brouchure='.@$_SESSION['brouchure'].'&amp;purchase_discount='.@$_SESSION['purchase_discount'];
    else:
        $_SESSION['payment_link'] = base_url().'payment.php?package='.@$package.'&amp;price='.@$price.'&amp;option='.@$option.'&amp;extprice='.@$extPrice.'&amp;p_discount='.@$_SESSION['p_discount'].'&amp;tax_in_total='.@$_SESSION['tax_in_total'].'&amp;net_total='.@$_SESSION['net_total'].'&amp;mainlogowebid='.$mainLogoWebId.'&amp;company_name='.@$company_name.'&amp;web='.@$_SESSION['web'].'&amp;brouchure='.@$_SESSION['brouchure'].'&amp;purchase_discount='.@$_SESSION['purchase_discount'];
    endif;*/
    

echo '<table width="680" border="0" style="margin:0; padding:0; font:normal 13px/18px Arial, Helvetica, sans-serif; color:#333333; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;-webkit-box-shadow: 0px 0px 5px rgba(50, 50, 50, 0.75);
-moz-box-shadow:    0px 0px 5px rgba(50, 50, 50, 0.75);
box-shadow:         0px 0px 5px rgba(50, 50, 50, 0.75);">
  <tr>
   <td width="680" height="160" valign="bottom" style=""><img src="'.$header_image.'" width="680" /><div style="margin-top:-30px;padding-left:15px;font:normal 20px Georgia, \'Times New Roman\', Times, serif;">Order Confirmation</div></td>
  </tr>
  <tr>
    <td><table width="680" border="0" style="margin-bottom:0;">
        <tr>
          <td><img src="'.$sale_image.'" width="680"  alt="sale" style="margin:0;padding:0;border:none;"/></td>
        </tr>
        <table width="680" style="margin:0;">
          <tr>
            <td><table width="680" style="margin:0px; border:1px solid #ccc" >
                <tr>
                  <td width="20"></td>
                  <td><br />
                  Dear '.$_SESSION['fname'].',<br />
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
                    <a id="payment_link" href="'.@$_SESSION['payment_link'].'" target="_blank"><img src="'.$payment_image.'" width="396" height="94" alt="payment" /></a><br />
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
                        <td><img src="'.$bullet_image.'" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>We have <strong>award winning,</strong> professional <i>&ldquo;in-house&rdquo;</i> designers! <br />
                          <img src="'.$bullet_image.'" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>Your designs will be fully <strong>100% custom-made!</strong><br />
                          <img src="'.$bullet_image.'" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>You will been entitled to <strong>unlimited redraws and revisions!</strong><br />
                          <img src="'.$bullet_image.'" width="16" height="15" alt="bullet" style="margin:0;padding:0;border:none;"/>We have the best guarantee in the industry ><strong>'.GUARANTEE_DAYS.'-Day,100% money back-guarantee!</strong> <br />
                          <br /></td>
                      </tr>
                    </table>
                    Here is the payment link again for you...<br />
<br />
<a href="'.@$_SESSION['payment_link'].'" target="_blank"><img src="'.$payment_image.'" width="396" height="94" alt="payment" /></a><br /><br />
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
          <td align="center"><img src="'.$we_accept.'" width="276" height="30" alt="We accept" style="margin:0;padding:0;border:none;"/></td>
          </tr>
          <tr><td></td></tr>
          <tr>
  <td><img src="'.$office_image.'" width="680" alt="Logo design guarantee" style="margin:0;padding:0;border:none;"/></td>
  </tr>
      </table></td>
  </tr>
</table>';
