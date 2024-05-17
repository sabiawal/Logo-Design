<?php
$web = '';
$brouchure = '';
$option = '';
$web_gold = '';
$web_elite = '';
$package = '';
$price = '';
$g2s_web_gold_package = '';
$g2s_web_gold_price = '';
$g2s_web_elite_package = '';
$g2s_web_elite_price = '';
$dollar = '';
$g2s_option_package = '';
$g2s_web_package = '';
$g2s_brouchure_package = '';
$web_package = '';
$option_brac_start = '';
$option_brac_close = '';
$brouchure_package = '';
$option_package_extra='';
$option_dollar_extra=0;
$option_pound_extra=0;
$gbp = "GBP";


	$ip = $_SERVER['REMOTE_ADDR'];
	$web= @$_GET['web'];
	$brouchure= @$_GET['brouchure'];
	$option= @$_GET['option'];
	$package= @$_GET['package'];
	$price= @$_GET['price'];
    $extra_opt_price = @$_GET['extprice'];
    $company_name = @$_GET['company_name'];
    
    //web packages
	if(@$_GET['web'] == Budget_Website_Price)
	{
		$web_package = "Budget website 1 page.";
		$web_pound = Budget_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
	
		$pound = "GBP";
	}
	if(@$_GET['web'] == Gold_Website_Price)
	{
		$web_package = "Gold website up to 5 pages.";
		$web_pound = Gold_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$pound = "GBP";
	}
	if(@$_GET['web'] == Elite_Website_Price)
	{
		$web_package = "Elite website  up to 12 pages.";
		$web_pound = Elite_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$pound = "GBP";
	}
	//packages brouchure
	if(@$_GET['brouchure'] == Brochure_Tri_Fold_Price)
	{
		$brouchure_package = "Tri-fold double-sided.";
		$brouchure_pound = Brochure_Tri_Fold_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$gdp = "GBP";
	}
	if(@$_GET['brouchure'] == Brochure_4_Page_Price)
	{
	$brouchure_package = "4 Page exec.";
	$brouchure_pound = Brochure_4_Page_Price;
	$brouchure_brac_start = "(";
	$brouchure_brac_close = ")";
	$gdp = "GBP";
	}
	if(@$_GET['brouchure'] == Brochure_8_Page_Price)
	{
	$brouchure_package = "Brochure up to 8 pages..";
	$brouchure_pound = Brochure_8_Page_Price;
	$brouchure_brac_start = "(";
	$brouchure_brac_close = ")";
	$gdp = "GBP";
	}
		
        
	if(@$_GET['option']==EXPRESS_DELIVERY)
	{
		$option_package = "24 hours delivery";
		$option_pound = EXPRESS_DELIVERY;
		/*$option_brac_start = "(";
		$option_brac_close = ")";
		$gbp = "GBP";*/
	}

	if(@$_GET['option']==BLACK_N_WHITE)
	{
		$option_package = "Black/White logo design";	
		$option_pound = BLACK_N_WHITE;
		/*$option_brac_start = "(";
		$option_brac_close = ")";
		$gbp = "GBP";*/
	}

	if(@$_GET['option']==BOTH_SERVICES)
	{
		$option_package = "Both order service";	
		$option_pound = BOTH_SERVICES;
		/*$option_brac_start = "(";
		$option_brac_close = ")";
		$gbp = "GBP";*/
	}
		
		//Nochex Price	
		

    if($extra_opt_price >= 0){
        $option_package_extra = "Total Extra Packages Service";	
        $option_dollar_extra = $extra_opt_price;
		$option_pound_extra = ceil($extra_opt_price * CONVERSION_MULTIPLYER);		
		$gbp = "GBP";
    }

    $price_dollar = $price;
    $price_dollar_option = $option;
    $price_dollar_brouchure = $brouchure;
    $price_dollar_web = $web;
    $tax_in_total = @$_GET['tax_in_total'];     
    
    #$total_real_price =$price + $brouchure + $web + $option+ $extra_opt_price + $tax_in_total; # $ Price for usa and pound for UK
    #$total_real_price = number_format($total_real_price,"2",".","");
    $total_real_price = @$_GET['net_total'];
    
    # Price In dollar for Jetpay Transaction    
    $price2             = number_format(($price * CONVERSION_MULTIPLYER2),"2",".","");
    $brouchure2         = ceil($brouchure * CONVERSION_MULTIPLYER2);
    $web2               = ceil($web * CONVERSION_MULTIPLYER2);
    $option2            = ceil($option * CONVERSION_MULTIPLYER2);    
    $extra_opt_price2   = ceil($extra_opt_price * CONVERSION_MULTIPLYER2);
    
   	#$total_jetpay_dollar= $price2 + $option2 + $extra_opt_price2 + $brouchure2 + $web2 + $tax_in_total; 
    #$total_jetpay_dollar = number_format($total_jetpay_dollar,"2",".",""); 
    $total_jetpay_dollar =  number_format(($total_real_price * CONVERSION_MULTIPLYER2),"2",".","");
    
    # Price In Pound for Nochex Transaction   
    #$price              = number_format(($price * CONVERSION_MULTIPLYER),"2",".","");
    $price              = ceil($price * CONVERSION_MULTIPLYER);
    $brouchure          = ceil($brouchure * CONVERSION_MULTIPLYER);
    $web                = ceil($web * CONVERSION_MULTIPLYER);
    $option             = ceil($option * CONVERSION_MULTIPLYER);    
    $extra_opt_price    = ceil($extra_opt_price * CONVERSION_MULTIPLYER);
       
   	#$total_nochex_pound =$price + $option + $extra_opt_price + $brouchure + $web + $tax_in_total;
    #$total_nochex_pound = number_format($total_nochex_pound,"2",".","");
    $total_nochex_pound = number_format(($total_real_price * CONVERSION_MULTIPLYER),"2",".","");
	
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
    //if($total_nochex_pound < 700  && COUNTRY == "UK")
    if(COUNTRY == "UK")
    {
        
        $order_discription = $package." (";
        //if(COUNTRY == "USA")
//        {
//            $order_discription .=  $price_dollar.'USD='; 
//        }
        $order_discription .=  $price.$gbp."), ";
        if(@$_GET['option']!="")
        {
            $order_discription .= $option_package." (";
            //if(COUNTRY == "USA")
//            {
//                $order_discription .=  $price_dollar_option.'USD='; 
//            }
            $order_discription .=  $option.$gbp."), ";
        }
        if($extra_opt_price > 0)
        {
            $order_discription .= $option_package_extra." (";
           // if(COUNTRY == "USA")
//            {
//                $order_discription .=  $option_dollar_extra.'USD='; 
//            }
            $order_discription .=  $option_pound_extra.$gbp.") ";
        }
        
        if($web != "")
        {
            $order_discription .=  $web_package."(";
       // if(COUNTRY == "USA")
//        {
//            $order_discription .=  $price_dollar_web.'USD='; 
//        }
        $order_discription .=  $web.$gbp.")";            
        }
        if($brouchure!="")
        {
            $order_discription .=  $brouchure_package."(";
        //if(COUNTRY == "USA")
//        {
//            $order_discription .=  $price_dollar_brouchure.'USD='; 
//        }
        $order_discription .=  $brouchure.$gbp.")";
        }
        //if(COUNTRY == "UK")
//        {
            $order_discription .=  'Tax '. $tax_in_total."GBP";
        //}
        if(isset($_GET['p_discount']) && $_GET['p_discount'] != '')
        {
            $order_discription .=  ' Discount (';
            //if(COUNTRY == "USA")
//            {
//            $order_discription .=  $_GET['p_discount']."USD=";
//            }
            $order_discription .=  number_format(($_GET['p_discount']*CONVERSION_MULTIPLYER),2,".","").$gbp.") ";   
        }
          
        ?>
        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->	
        <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
        <input type="hidden" name="logo" value="https://logodesignguarantee.com/images/logo.jpg" />
        <input type="hidden" name="returnurl" value="http://www.<?php echo SITE_NAME; ?>/thankyou.php?ip=<?php echo $ip; ?>&mainlogowebid=<?php echo @$_GET['mainlogowebid']; ?>&price=<?=@$total_real_price;?>" />
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="amount" value="<?=$total_nochex_pound;?>" />
        
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>
        <!--End Nochex payment End-->
        <?php 
    } 
    else
    {
        
        $order_discription = $package." (";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $price.$gbp.'='; 
        }
        $order_discription .=  $price2."USD), ";
        if(@$_GET['option']!="")
        {
            $order_discription .=  $option_package." (";
            if(COUNTRY == "UK")
            {
                $order_discription .=  $option.$gbp.'='; 
            }
            $order_discription .=  $option2."USD), ";
        }
        if($extra_opt_price != 0)
        {            
            $order_discription .=  $option_package_extra." (";
            if(COUNTRY == "UK")
            {
                $order_discription .=  $extra_opt_price.$gbp.'='; 
            }
            $order_discription .=  $extra_opt_price2."USD) ";
        }
        if($web != "")
        {
            $order_discription .=  $web_package."(";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $web.$gbp.'='; 
        }
        $order_discription .=  $web2."USD)";            
        }
        if($brouchure!="")
        {
            $order_discription .=  $brouchure_package."(";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $brouchure.$gbp.'='; 
        }
        $order_discription .=  $brouchure2."USD)";
        }
        if(COUNTRY == "UK")
        {
            $order_discription .=  'Tax  20% '. number_format(($tax_in_total*CONVERSION_MULTIPLYER2),2,".","")."USD";
        }
        if(isset($_GET['p_discount']) && $_GET['p_discount'] != '')
        {
            $order_discription .=  ' Discount (';
            if(COUNTRY == "UK")
            {
            $order_discription .=  $_GET['p_discount'].$gbp."=";
            }
            $order_discription .=  number_format(($_GET['p_discount']*CONVERSION_MULTIPLYER2),2,".","")."USD) ";   
        }
       
        ?>       
        <form name="checkoutform" action="<?= site_url('jetpaymidpayment') ?>" method="post">
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="company_name" value="<?= $company_name; ?>" />
        <input type="hidden" name="insert" value="<?= @$_GET['mainlogowebid']; ?>" />
        <input type="hidden" name="authentication_code" value="<?= @$_GET['authentication_code']; ?>" />
        <input type="hidden" name="package" value="<?= $package; ?>" /> 
        <input type="hidden" name="price" value="<?= $price2; ?>" />        
        <input type="hidden" name="total_real_price" value="<?=$total_real_price;?>" /><!-- $ amount for usa and pound amount for UK-->
        <input type="hidden" name="amount" value="<?=$total_jetpay_dollar;?>" />        
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>    
<?php }  ?>

</body>
</html>
