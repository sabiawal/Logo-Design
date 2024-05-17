<?php
$ip = $_SERVER['REMOTE_ADDR'];
$link_name = base_url().'web-site-design/webdesigner-limited-sale/orders/epayment.php';

$p_info = ''; 
    if(isset($_SESSION['pcode'])):
        $p_info = '&amp;pcode='.$_SESSION['pcode'];
    endif;   
    $_SESSION['payment_link'] = base_url().'web-site-design/webdesigner-limited-sale/orders/epayment.php?web_id='.$_SESSION['web_id'].'&amp;auth_code='.$_SESSION['auth_code'].$p_info;

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