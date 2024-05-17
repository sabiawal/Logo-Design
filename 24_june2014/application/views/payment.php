<?php
$order_id   = $_GET['mainlogowebid'];
$p_code     = @$_GET['p_code'];
if($order_id){
    if($p_code){
        // checking Promotional Code for specific order no
        $q  = "select discounted_logo_id as order_id,pc_discount as pc_discount_rate from promotional_codes where `discounted_logo_id`= '$order_id' and `pc_code`= '$p_code' and `auto_generated`='1'";
        if(mysql_num_rows(mysql_query($q))>0){            
            $row = mysql_fetch_object(mysql_query($q));            
            $pc_discount_rate = $row->pc_discount_rate;
            //echo $pc_discount_rate;
        }
        else{
            die('Invalid or Expired Link');
        }
    }    
    else{
        //echo 'no promotional';
    }
    //getting total amount from logo_web table
    $query = mysql_query("select web as web_price, brouchure as brouchure_price,options,price, web_gold as web_package,web_elite as brouchure_package from logo_web where logo_web_id = '$order_id'");
}
else{
    die('Invalid Link');
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
$gbp = "&pound;";
$usd = "USD";
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
		$web_package = "Gold website up to 6 pages.";
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

	}
	if(@$_GET['option']==BLACK_N_WHITE)
	{
		$option_package = "Black/White logo design";	
		$option_pound = BLACK_N_WHITE;

	}
	if(@$_GET['option']==BOTH_SERVICES)
	{
		$option_package = "Both order service";	
		$option_pound = BOTH_SERVICES;

	}
		//Nochex Price	
    if($extra_opt_price >= 0){
        $option_package_extra = "Total Extra Packages Service";	
        $option_dollar_extra = $extra_opt_price;
		$option_pound_extra = ceil($extra_opt_price * CONVERSION_MULTIPLYER);		
		
    }
    $price_dollar = $price;
    $price_dollar_option = $option;
    $price_dollar_brouchure = $brouchure;
    $price_dollar_web = $web;
    $tax_in_total = @$_GET['tax_in_total'];     
    $total_real_price = @$_GET['net_total'];
    if(isset($_GET['purchase_discount']) && $_GET['purchase_discount'] !=''){$purchase_discount = $_GET['purchase_discount'];}else{$purchase_discount = 0;}
    if($pc_discount_rate){ // checking email promotional discount
        $tax_in_total = 0;
        $tot = $price + @$option +@$extra_opt_price + @$web + @$brouchure - $purchase_discount; // $price -> logo price, $option -> first options, $extra_opt_price -> other extra price 

        $email_promo_discount = number_format((($tot*$pc_discount_rate)/100),2,'.','');
        $total_before_tax = $tot-$email_promo_discount;
        if(COUNTRY == "UK"){
            $tax_in_total = number_format(($total_before_tax*0.2),2,'.','');
        }
        $total_real_price = $total_before_tax+$tax_in_total;
    }
    else{
        if(isset($_GET['p_discount']) && $_GET['p_discount'] !=''){$promotional_discount = $_GET['p_discount'];}
    }
    # Price In dollar for Jetpay Transaction    
    $price2             = number_format(($price * CONVERSION_MULTIPLYER2),"2",".","");
    $brouchure2         = ceil($brouchure * CONVERSION_MULTIPLYER2);
    $web2               = ceil($web * CONVERSION_MULTIPLYER2);
    $option2            = ceil($option * CONVERSION_MULTIPLYER2);    
    $extra_opt_price2   = ceil($extra_opt_price * CONVERSION_MULTIPLYER2);
   	#$total_jetpay_dollar= $price2 + $option2 + $extra_opt_price2 + $brouchure2 + $web2 + $tax_in_total; 
    #$total_jetpay_dollar = number_format($total_jetpay_dollar,"2",".",""); 
    if($email_promo_discount){$email_promo_discount2 = number_format(($email_promo_discount * CONVERSION_MULTIPLYER2),"2",".","");}
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
    if($email_promo_discount){$email_promo_discount1 = number_format(($email_promo_discount * CONVERSION_MULTIPLYER),"2",".","");}
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
        $order_discription = $package;
        $order_discription .=  htmlspecialchars($gbp).$price;
        if(@$_GET['option']!=""){
            $order_discription .= ', '.$option_package;
            $order_discription .=  htmlspecialchars($gbp).$option;
        }
        if($extra_opt_price > 0){
            $order_discription .= ', '.$option_package_extra;
            $order_discription .=  htmlspecialchars($gbp).$option_pound_extra;
        }
        if($web != ""){
            $order_discription .=  ', '.$web_package;
            $order_discription .=  htmlspecialchars($gbp).$web;            
        }
        if($brouchure!=""){
            $order_discription .=  ', '.$brouchure_package;
            $order_discription .=  htmlspecialchars($gbp).$brouchure;
        }
        if($purchase_discount > 0){
            $order_discription .=  ', Purchase Discount ';
            $order_discription .=  htmlspecialchars($gbp).$purchase_discount;
        }
        if($promotional_discount > 0){
            $order_discription .=  ', Promotional Discount ';            
            $order_discription .=  htmlspecialchars($gbp).$promotional_discount;
        }
        if($pc_discount_rate){
            $order_discription .=  ', Email Promotional Discount '.$pc_discount_rate.htmlspecialchars("&permil;").' ';            
            $order_discription .=  htmlspecialchars($gbp).$email_promo_discount1;
        }

        $order_discription .=  ', Tax '. htmlspecialchars($gbp).$tax_in_total;
        $order_discription .=  ".";
        ?>
        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->	
        <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
        <input type="hidden" name="logo" value="<?php echo base_url();?>images/logo.jpg" />
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
        $order_discription .=  $price2.$usd.")";
        if(@$_GET['option']!=""){
            $order_discription .=  ', '.$option_package." (";
            $order_discription .=  $option2.$usd.")";
        }
        if($extra_opt_price > 0){            
            $order_discription .=  ', '.$option_package_extra." (";
            $order_discription .=  $extra_opt_price2.$usd.") ";
        }
        if($web != ""){
            $order_discription .=  ', '.$web_package."(";
            $order_discription .=  $web2.$usd."), ";            
        }
        if($brouchure!=""){
            $order_discription .=  ', '.$brouchure_package."(";
            $order_discription .=  $brouchure2.$usd."), ";
        }
        if($purchase_discount > 0){
            $order_discription .=  ', Purchase Discount (';
            $order_discription .=  number_format(($purchase_discount*CONVERSION_MULTIPLYER2),2,".","").$usd.") ";   
        }
        if($promotional_discount > 0){
            $order_discription .=  ', Promotional Discount (';
            $order_discription .=  number_format(($promotional_discount*CONVERSION_MULTIPLYER2),2,".","").$usd.") ";   
        }
        if($pc_discount_rate){
            $order_discription .=  ', Email Promotional Discount '.$pc_discount_rate.htmlspecialchars("&permil;").' (';            
            $order_discription .=  $email_promo_discount2.$usd.") ";
        }
        $order_discription .='.';
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