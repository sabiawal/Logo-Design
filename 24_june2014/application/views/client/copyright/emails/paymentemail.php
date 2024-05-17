<?php
 $name = (isset($_SESSION['fullName']) &&  $_SESSION['fullName'] != '') ? $_SESSION['fullName'] : $_SESSION['orgName'] ;     
    
$payment_path = (COUNTRY == UK) ? 'copy_payment': 'copy_jetpaypayment';

echo '<table width="682" border="0" style="margin:0;padding:0;font:normal 13px/18px Arial, Helvetica, sans-serif;color:#333333;">

  <tr>
    <td><table width="650" border="0" style="margin-left:10px; margin-bottom:0;">
       
        <table width="648" style="border:1px solid #26ad22; margin-left:12px; margin-top:0;">
          <tr>
            <td><table width="625" class="aa" style="border:1px solid #cccccc; margin:10px;" >
                <tr>
                  <td width="20"></td>
                  <td><br />
                  Dear '.$name.',<br />
                    <br />
                    Thank you for your Copyright order with Logo Design Guarantee.<br />
                    <br />
                    Before we can actually begin work on your design requirements we stress<br />
                    that <strong>we require payment before we can start.</strong> <br />
                    <br />
                    This is standard process in the logo industry.<br />
                    <br />
                    Payment can be made via this secure link...<br />
                    <br />
                    <a href="https://'.SITE_NAME.'/client_panel/'.$payment_path.'.php?copyright_id='.$_SESSION['copyright_id'].'&amp;authentication_code='.$_SESSION['authentication_code'].'" target="_blank"><img src="http://'.SITE_NAME.'/images/payment.gif" width="396" height="94" alt="payment" /></a><br />
                    If you have made payment already then please feel free to ignore this email.<br />
                    <br />
                    We would have successfully received your payment. Our designers will get 
                    straight to work on your requests. There is no need to do anything further.<br />
                    <br />
                    However, if you have <strong>yet to make payment</strong>, please do so by clicking on the <br />
                    payment button.<br />
                    <br />
                    
Here is the payment link again for you...<br />
<br />
<a href="https://www.'.SITE_NAME.'/client_panel/'.$payment_path.'.php?copyright_id='.$_SESSION['copyright_id'].'&amp;authentication_code='.$_SESSION['authentication_code'].'" target="_blank"><img src="http://'.SITE_NAME.'/images/payment.gif" width="396" height="94" alt="payment" /></a><br /><br />
 Remember we would have received your Copyright order , and this would<br />
have been automatically saved in our system. There is no need to place an order again.<br />
<br /><br />
Once payment is made, then our staff will automatically be notified and allocate your<br />
order.<br /><br />
<div style="border:2px solid #6bc024;"></div><br />
<u><strong>Questions?</strong></u><br /><br />
You can reply to this email or call us 24/7 on the number below.<br /><br />
Customer Services<br />
Logo Design Guarantee<br />
We Guarantee the Lowest Prices and the Best Money back Guarantee<br />
<a href="mailto:info@'.SITE_NAME.'" style=" color:#0090ff;">Info@'.SITE_NAME.'</a><br /><br />
<span style="font:bold 24px Verdana, Geneva, sans-serif;">'.PHONE_NO.' <strong style="font:italic 16px Verdana, Geneva, sans-serif;">(24/7 Sales and Support)</strong></span><br /><br />
<a href="http://messenger.providesupport.com/messenger/pradyumna.html" target="_blank" ><img name="psz1K7image" src="http://image.providesupport.com/image/pradyumna/online-1751026284.gif" width="140" border="0" height="60"></a>
<br />
<br />
<div style="border:2px solid #6bc024;"></div><br />
P.S. We also offer additional design services such as <strong>web site design, brochure design</strong><br />
and company start-up design packages.<br /><br />
For more information click here:  <br />
<a href="http://www.'.SITE_NAME.'/web-site-design/webdesigner-limited-sale/index.php" target="_blank" style=" color:#0090ff;">http://'.SITE_NAME.'/web-site-design/webdesigner-limited-sale/index.php</a>
<br /><br />
</td>
<td width="20"></td>
                </tr>
              </table></td>
          </tr>
        </table><br />
        <tr>
          <td align="center"><img src="http://'.SITE_NAME.'/images/we-accept.gif" width="276" height="30" alt="We accept" style="margin:0;padding:0;border:none;"/></td>
          </tr>
          <tr><td></td></tr>
          <tr>
  <td><img src="http://'.SITE_NAME.'/images/office.gif" width="653" height="153" alt="Logo design guarantee" style="margin:0;padding:0;border:none;"/></td>
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
