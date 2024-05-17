<?php
//echo 'paybank page';
//echo '<pre>'; print_r($_SESSION); die;
    $web_gold_package = '';
    $web_elite_package = '';
	$brouchure_package = '';
	$web_package = '';
	$option_package = '';
    $option_package_extra = '';
	$gbp = "GBP";
    $gbp2 = "&pound;";
    $gbp2 = "£";
    $per = '&permil;';
    $per = '%';
    $tax_in_total =0;    
    $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));    

	$site = ORDERED_SITE;	
	//Nochex Price	
	  
   $total_nochex_pound = number_format($_SESSION['amount_payment'],"2",".","");     	// die;	
   //echo '<pre>'; print_r($_SESSION); die;
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
<?php 
    $order_discription = "".$_SESSION['current_active_package']." upgraded to ".$_SESSION['upgraded_packages_name']."";
    //$order_discription .=  htmlspecialchars($gbp2).$price."),";
	//echo $total_real_price.' '.$total_nochex_pound; die;
?>

        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->	
        <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
        <input type="hidden" name="logo" value="https://<?php echo SITE_NAME; ?>/images/logo.jpg" />
        <input type="hidden" name="returnurl" value="https://<?php echo SITE_NAME; ?>/client_panel/thankyouPageUpgrade.php?ip=<?php echo $ip; ?>&mainlogowebid=<?php echo @$_SESSION['insert']; ?>&price=<?=@$total_real_price;?>" />
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="amount" value="<?=$total_nochex_pound;?>" />
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>
        <!--End Nochex payment End-->
</body>
</html>