<?php
 $ip = $_SERVER['REMOTE_ADDR'];
if($this->router->fetch_class() == 'reseller_web'):
$_SESSION['payment_link'] = base_url().'reseller_web/payment.php?web_package='.@$_SESSION['web_package'].'&amp;web_price='.@$_SESSION['web_price'].'&amp;logo_package='.@$_SESSION['logo_package'].'&amp;logo_price='.@$_SESSION['logo_price'].'&amp;web_id='.@$_SESSION['insert_id'].'&amp;logo_id='.@$_SESSION['insert_id2'].'&amp;ip='.$ip.'&authentication_code ='.$_SESSION['authentication_code'];
$link_name = base_url().'reseller_web/payment.php';
else:
$_SESSION['payment_link'] = base_url().'web-site-design/webdesigner-limited-sale/payment.php?web_package='.@$_SESSION['web_package'].'&amp;web_price='.@$_SESSION['web_price'].'&amp;logo_package='.@$_SESSION['logo_package'].'&amp;logo_price='.@$_SESSION['logo_price'].'&amp;web_id='.@$_SESSION['insert_id'].'&amp;logo_id='.@$_SESSION['insert_id2'].'&amp;ip='.$ip.'&authentication_code ='.$_SESSION['authentication_code'];

if(isset($_SESSION['tax_amount'])){
	$_SESSION['payment_link'].='&vat='.$_SESSION['tax_amount'];
}

if(isset($_SESSION['temp_logo_price'])){
	$_SESSION['payment_link'].='&dis='.($_SESSION['logo_price']+$_SESSION['web_price']-$_SESSION['temp_logo_price']-$_SESSION['temp_web_price']);
}
$link_name = base_url().'web-site-design/webdesigner-limited-sale/payment.php';
endif;
echo '<table width="730" border="0" align="center" bgcolor="#FFFFFF">
  <tr align="left" bgcolor="#FFFFFF">
    <td colspan="3" align="left" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr align="left" bgcolor="white">
    <td width="15" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="558" align="left" bgcolor="white">
	<p>Dear '.@$_SESSION['company_name'].'</p>
	<p>Thank you for your order with  Logo Design Guarantee.</p>
	<br/>
          <p align="justify">Before we can actually start work on your design requirements we stress that we require payment at time of ordering. This email is just a reminder for payment.</p>
          <p align="justify">If you have made payment then please feel free to ignore this email. We would have successfully received your payment.</p>
		  <p align="justify">Our designers will get straight to work on your requests. There is no need to do anything further.</p>
		  <p align="justify">However, if you have yet to make payment, please do so by paying on the given Nochex payment page that should have immediately followed from the order page. This page is fully safe and secure.</p>
		  <p align="justify">If you have yet to make payment then you can do so via the secure and safe link below.</p>
          <p align="justify">
		  <a href="'.$_SESSION['payment_link'].'" >'.$link_name.'</a>   
		  </p>
		  <p align="justify">We wish to reassure you that all our designs are fully custom-made, and you are entitled to a 100% money back-guarantee, unlike many firms. You can only win.</p>
		  <p align="justify">If you wish to ask any questions, you can do so by replying to this email.</p>
		  <p align="justify">With every business success.</p>
		  <p><br/>
		  Customer Services<br/>
		  Logo Design Guarantee<br/>
		  '.INFO_MAIL.'</p>
		  <p><br/>
          </p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>    </td>
    <td width="15" align="left" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr align="left" bgcolor="#FFFFFF">
    <td colspan="3" align="left" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>';
?>