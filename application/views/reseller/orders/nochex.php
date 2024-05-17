<?php 
if($purchase_dis > 0 ):
    $order_desc .= ', Gross Total : '.CURRENCY.$gross_total_price.', Purchase Discount '.($purchase_dis_rate*100) ."٪ (".CURRENCY.$purchase_dis.')';
endif;
if($promotional_discount>0):
    $order_desc .= ', Promotional Discount ('.CURRENCY.$promotional_discount.')';        
endif;
if($reseller_dis > 0):
    $order_desc .= ', Reseller Discount '.($reseller_dis_rate*100) .'٪ ('.CURRENCY.$reseller_dis.')';        
endif;
if($tax_amount > 0):
    $order_desc.= ', Tax Amount : '.CURRENCY.$tax_amount;        
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
<?php  $order_desc =str_replace('(',' : ',$order_desc) ;?>
<?php   $order_desc =str_replace(')','',$order_desc);
//echo $order_desc;
//die;
//$order_desc ='START CARD PLUS BUSINESS CARD DESIGN';
 ?>

<p>Please Wait...</p>
<!--Start Nochex payment Start-->	
<!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->

<form name="checkoutform" action="https://secure.nochex.com" method="post">
<input type="hidden" name="email" value="fiftydollarslogo@gmail.com" />
<input type="hidden" name="logo" value="http://<?php echo SITE_NAME; ?>/images/logo.jpg" />
<input type="hidden" name="returnurl" value="<?php echo base_url().'reseller_orders/thankyou?p='.$net_total ?>" />
<input type="hidden" name="description" value="<?php echo html_entity_decode($order_desc,ENT_QUOTES, "utf-8");?> " />
<input type="hidden" name="amount" value="<?php echo $net_total;?>" />
</form>
<script language="javascript">
document.checkoutform.submit();
</script>
<!--End Nochex payment End-->


</body>
</html>
