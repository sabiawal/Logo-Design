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
	$row=23;
	$extra_opt_price=0;
	for($i=1;$i<$row-2;$i++)
	{		
        $opt='opta'.$i;
        $extraopt='extraopt'.$i;
        //echo @$_SESSION[$opt]."<br />";
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
            $extra_opt_price += $amount;
        }
	}    
    if($extra_opt_price >= 0)
    { //echo $extra_opt_price; die;
		$option_package_extra = '';
		for($i=12;$i<21;$i++){
		if(@$_SESSION['extraopt'.$i] != ''){	
		if($i != '16' && $i != '17' && $i != '20'){
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].' ('.CURRENCY.$_SESSION['opta'.$i].')';
		}elseif($i == '16'){
		$costs = $_SESSION['opta16'];
		$adds = ($costs * @$_SESSION['select']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].' ('.CURRENCY.$adds.')';	
		}elseif($i == '17'){
		$costs = $_SESSION['opta17'];
		$adds = ($costs * @$_SESSION['select2']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].' ('.CURRENCY.$adds.')';	
		}
		else{
		$costs = $_SESSION['opta20'];
		$adds = ($costs * @$_SESSION['select4']) + ($costs * @$_SESSION['select5']) + ($costs * @$_SESSION['select6']) + ($costs * @$_SESSION['select7']) + ($costs * @$_SESSION['select8']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].' ('.CURRENCY.$adds.')';	
		}
		}
		}
		$str= ltrim ($option_package_extra,',');
		$option_package_extra = substr($str, 1);
		//print_r($option_package_extra); die;
		$_SESSION['extra_package'] = $option_package_extra;
        $option_dollar_extra = $extra_opt_price;
		$option_pound_extra = ceil($extra_opt_price * CONVERSION_MULTIPLYER);		
		$gbp = "GBP";
    }
    $tax_in_total = @$_SESSION['tax_in_total'];
    $total_real_price = @$_SESSION['net_total'];
    # Price In Pound for Nochex Transaction   
//    $price              = number_format(($price * CONVERSION_MULTIPLYER),"2",".","");
//    $brouchure          = ceil($brouchure * CONVERSION_MULTIPLYER);
//    $web                = ceil($web * CONVERSION_MULTIPLYER);
//    $option             = ceil($option * CONVERSION_MULTIPLYER);    
    $extra_opt_price    = ceil($extra_opt_price * CONVERSION_MULTIPLYER);  
	//echo $extra_opt_price.'<br>'.$tax_in_total.'<br>'.$_SESSION['purchase_discount'];
   	$total_nochex_pound = $extra_opt_price + $tax_in_total - $_SESSION['purchase_discount'];  
	//$total_nochex_pound =$price + $option + $extra_opt_price + $brouchure + $web + $tax_in_total + $_SESSION['package_discount_amount'];
   // $total_nochex_pound = number_format($total_nochex_pound,"2",".","");   
   $total_nochex_pound = @number_format($total_real_price,"2",".","");     	// die;	
   
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
    $order_discription = " ()";
    //$order_discription .=  htmlspecialchars($gbp2).$price."),";
    if($option_package)
    {
        $order_discription .= ' '.$option_package." (";
        $order_discription .=  htmlspecialchars($gbp2).$option."),";
    }
    if($extra_opt_price > 0)
    {
        $order_discription .= ' '.$option_package_extra." ";
        //$order_discription .=  htmlspecialchars($gbp2).$option_pound_extra.")";
    }
    if($web_package)
    {
        $order_discription .=  ' '.$web_package." (";
        $order_discription .=  htmlspecialchars($gbp2).$web.")";            
    }
    if($brouchure_package)
    {
        $order_discription .=  ' '.$brouchure_package." (";
        $order_discription .=  htmlspecialchars($gbp2).$brouchure.")";
    }        
	if(isset($_SESSION['purchase_discount']) && $_SESSION['purchase_discount'] > 0)
    {
        $order_discription .=  ' '.'Purchase Discount 15 (';
        $order_discription .=  htmlspecialchars($gbp2).number_format(($_SESSION['purchase_discount']*CONVERSION_MULTIPLYER),2,".","").") ";   
    }
/*    if(isset($_SESSION['p_discount']) && $_SESSION['p_discount'] != '')
    {
        $order_discription .=  ' Promotional Discount (';
        $order_discription .=  htmlspecialchars($gbp2).number_format(($_SESSION['p_discount']*CONVERSION_MULTIPLYER),2,".","").")";   
    }*/
    $order_discription .=  ' Tax '. htmlspecialchars($gbp2).$tax_in_total;
    $order_discription .= '.';
	//echo $total_real_price.' '.$total_nochex_pound; die;
?>

        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->	
        <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarslogo@gmail.com" />
        <input type="hidden" name="logo" value="https://<?php echo SITE_NAME; ?>/images/logo.jpg" />
        <input type="hidden" name="returnurl" value="https://<?php echo SITE_NAME; ?>/client_panel/thankyouPage.php?mainlogowebid=<?php echo @$_SESSION['insert']; ?>&price=<?=@$total_real_price;?>" />
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="amount" value="<?=$total_nochex_pound;?>" />
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>
        <!--End Nochex payment End-->
</body>
</html>
