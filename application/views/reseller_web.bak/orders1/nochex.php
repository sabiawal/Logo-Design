<?php 
if($purchase_dis > 0 ):
    $order_desc .= ' Gross Total : '.CURRENCY.$gross_total_price.' Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')';
endif;
if($promotional_discount>0):
    $order_desc .= ', Promotional Discount ('.CURRENCY.$promotional_discount.')';        
endif;
if($tax_amount > 0):
    $order_desc.= ', Tax Amount '.CURRENCY.$tax_amount;        
endif;
$order_desc .='.'; 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>

<body>
<p>Please Wait...</p>
<!--Start Nochex payment Start-->	
<!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
<form name="checkoutform" action="https://secure.nochex.com" method="post">
<input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
<input type="hidden" name="logo" value="https://<?php echo SITE_NAME; ?>/assets/images/logo.png" />
<input type="hidden" name="returnurl" value="<?php echo base_url().'web-site-design/webdesigner-limited-sale/orders/thankyou?p='.$net_total ?>" />
<input type="hidden" name="description" value="<?php echo str_replace('br','',$order_desc) ?> " />
<input type="hidden" name="amount" value="<?php echo $net_total;?>" />
</form>
<script language="javascript">
document.checkoutform.submit();
</script>
<!--End Nochex payment End-->


</body>
</html>
