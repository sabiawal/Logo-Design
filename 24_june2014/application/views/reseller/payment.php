<?php
    $query = $this->db->query('select * from new_sub_packages where package_id="46"');
    $result = $query->result();
    if(COUNTRY == "UK")
    {
        $currency = '&pound;';
        //Budget Package
        $budget_price = $result[0]->gbp;
        $budget_price_regular = $result[0]->gbp_reg;
        $budget_price_reseller = number_format($result[0]->gbp_reseller,2,'.','');
        //Gold Package
        $gold_price = $result[1]->gbp;
        $gold_price_regular = $result[1]->gbp_reg;
        $gold_price_reseller = number_format($result[1]->gbp_reseller,2,'.','');
        //Elite Package
        $elite_price = $result[2]->gbp;
        $elite_price_regular = $result[2]->gbp_reg;
        $elite_price_reseller = number_format($result[2]->gbp_reseller,2,'.','');
        $additional_page_price = $result[0]->additional_page_price_gbp;
        $additional_page_price_reseller = number_format($result[0]->additional_page_price_gbp_reseller,2,'.','');
    }
    else
    {
        $currency = '$';
        //Budget Package
        $budget_price = $result[0]->usd;
        $budget_price_regular = $result[0]->usd_reg;
        $budget_price_reseller = number_format($result[0]->usd_reseller,2,'.','');
        //Gold Package
        $gold_price = $result[1]->usd;
        $gold_price_regular = $result[1]->usd_reg;
        $gold_price_reseller = number_format($result[1]->usd_reseller,2,'.','');
        //Elite Package
        $elite_price = $result[2]->usd;
        $elite_price_regular = $result[2]->usd_reg;
        $elite_price_reseller = number_format($result[2]->usd_reseller,2,'.','');
        $additional_page_price = $result[0]->additional_page_price_usd;
        $additional_page_price_reseller = number_format($result[0]->additional_page_price_usd_reseller,2,'.','');
    }
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
if(isset($_GET['p_discount']) && $_GET['p_discount'] !=''){$promotional_discount = $_GET['p_discount'];}
if(isset($_GET['purchase_discount']) && $_GET['purchase_discount'] !=''){$purchase_discount = $_GET['purchase_discount'];}
    //Getting web packages & price $ price for usa and pound for uk site 
	if($web == $budget_price)
	{
		$web_package = "Budget website 1 page.";
		$web_price = $budget_price;		
	}
	elseif($web == $gold_price)
	{
		$web_package = "Gold website up to 6 pages.";
		$web_price = $gold_price;
	}
	elseif($web == $elite_price)
	{
		$web_package = "Elite website  up to 12 pages.";
		$web_price = $elite_price;
	}
    else
    {
        $web_package = '';
		$web_price = '';
    }
	//Getting Brouchure packages & price $ price for usa and pound for uk site 
	if($brouchure == Brochure_Tri_Fold_Price)
	{
		$brouchure_package = "Tri-fold double-sided.";
		$brouchure_price = Brochure_Tri_Fold_Price;	
	}
	elseif($brouchure == Brochure_4_Page_Price)
	{
    	$brouchure_package = "4 Page exec.";
    	$brouchure_price = Brochure_4_Page_Price;
	}
	elseif($brouchure == Brochure_8_Page_Price)
	{
    	$brouchure_package = "Brochure up to 8 pages..";
    	$brouchure_price = Brochure_8_Page_Price;
	}
    else
    {
        $brouchure_package = '';
        $brouchure_price = '';
    }
    //Getting 1st option packages & price $ price for usa and pound for uk site 
	if($option == EXPRESS_DELIVERY)
	{
		$option_package = "24 hours delivery";
		$option_price = EXPRESS_DELIVERY;
	}
	elseif($option == BLACK_N_WHITE)
	{
		$option_package = "Black and white additional logo design file";	
		$option_price = BLACK_N_WHITE;
	}
	elseif($option == BOTH_SERVICES)
	{
		$option_package = "24 Hour Delivery and Black and White file";	
		$option_price = BOTH_SERVICES;
	}
    else
    {
        $option_package = '';	
		$option_price = '';
    }
    if($extra_opt_price > 0)
    {
        $option_package_extra = "Total Extra Packages Service";	
        $option_price_extra = $extra_opt_price;	
    }
    $tax_in_total = @$_GET['tax_in_total'];     
    $total_real_price = @$_GET['net_total'];
    //Converting all Amount to Dollar amount for Jetpay payment
    $price_dollar               = number_format(($price * CONVERSION_MULTIPLYER2),"2",".","");
    $option_price_dollar        = ceil($option_price * CONVERSION_MULTIPLYER2);
    $web_price_dollar           = ceil($web_price * CONVERSION_MULTIPLYER2);
    $brouchure_price_dollar     = ceil($brouchure_price * CONVERSION_MULTIPLYER2);
    $option_price_extra_dollar  = ceil($option_price_extra * CONVERSION_MULTIPLYER2);
    $tax_in_total_dollar        = ceil($tax_in_total * CONVERSION_MULTIPLYER2);
    $total_jetpay_dollar        = number_format(($total_real_price * CONVERSION_MULTIPLYER2),"2",".","");
    //Converting all Amount to Pound amount for Nochex payment    
    $price_pound                = number_format(($price * CONVERSION_MULTIPLYER),"2",".","");
    $option_price_pound         = ceil($option_price * CONVERSION_MULTIPLYER);
    $web_price_pound            = ceil($web_price * CONVERSION_MULTIPLYER);
    $brouchure_price_pound      = ceil($brouchure_price * CONVERSION_MULTIPLYER);
    $option_price_extra_pound   = ceil($option_price_extra * CONVERSION_MULTIPLYER);
    $tax_in_total_pound         = ceil($tax_in_total * CONVERSION_MULTIPLYER);
    $total_nochex_pound         = number_format(($total_real_price * CONVERSION_MULTIPLYER),"2",".","");
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
    $order_discription = $package." (";
    $order_discription .=  htmlspecialchars($currency).$price."), ";
    if($option_package)
    {
        $order_discription .= ' '.$option_package." (";
        $order_discription .= htmlspecialchars($currency).$option_price."),";
    }
    if(@$option_price_extra > 0)
    {
        $order_discription .= ' '.$option_package_extra." (";
        $order_discription .= htmlspecialchars($currency).$option_price_extra."),";
    }
    if($web_package)
    {
        $order_discription .=  ' '.$web_package."(";
        $order_discription .=  htmlspecialchars($currency).$web_price."),";            
    }
    if($brouchure_package)
    {
        $order_discription .=  ' '.$brouchure_package."(";
        $order_discription .=  htmlspecialchars($currency).$brouchure_price."),";
    }
    if($purchase_discount)
    {
        $order_discription .=  ' '.'Purchase Discount '.' (';
        $order_discription .=  htmlspecialchars($currency).number_format($purchase_discount,2,".","")."), ";
    }
    if($promotional_discount)
    {
        $order_discription .= ' Promotional Discount (';
        $order_discription .= htmlspecialchars($currency).number_format($promotional_discount,2,'.','')."),";   
    }
    if(COUNTRY == "UK")
    {        
        $order_discription .=  ' Tax  '. htmlspecialchars($currency).number_format(($tax_in_total),2,".","").'.';
        ?>
        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->        
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
        <input type="hidden" name="logo" value="https://logodesignguarantee.com/images/logo.jpg" />
        <input type="hidden" name="returnurl" value="<?php echo base_url(); ?>reseller/thankyou.php?ip=<?php echo $ip; ?>&mainlogowebid=<?php echo @$_GET['mainlogowebid']; ?>&price=<?=@$total_real_price;?>" />
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
        $order_discription .= '.';
        ?>       
        <form name="checkoutform" action="<?= site_url('reseller/jetpaymidpayment') ?>" method="post">
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="company_name" value="<?= $company_name; ?>" />
        <input type="hidden" name="insert" value="<?= @$_GET['mainlogowebid']; ?>" />
        <input type="hidden" name="authentication_code" value="<?= @$_GET['authentication_code']; ?>" />
        <input type="hidden" name="package" value="<?= $package; ?>" /> 
        <input type="hidden" name="price" value="<?= $price; ?>" />        
        <input type="hidden" name="total_real_price" value="<?=$total_real_price;?>" /><!-- $ amount for usa and pound amount for UK-->
        <input type="hidden" name="amount" value="<?=$total_jetpay_dollar;?>" />        
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>    
<?php }  ?>
</body>
</html>