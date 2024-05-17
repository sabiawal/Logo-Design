<?php
    $web_gold_package = '';
    $web_elite_package = '';
	$brouchure_package = '';
	$web_package = '';
	$option_package = '';
	$gbp = "GBP";
    $tax_in_total ='';    
	
    $submit_date = date("Y-m-d H:i:s",mktime (gmdate("H")+5,gmdate("i")+45,gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));    
    $ip = $_SERVER['REMOTE_ADDR'];
        
    $m5_colors = @$_SESSION['m5_colors'];    
    $m5_no_colors = @$_SESSION['m5_no_colors'];
        
    $first_name= stripslashes(@$_SESSION['fname']);
    $fname= str_replace("'", " ", $first_name);
    
    $last_name= stripslashes(@$_SESSION['lname']);
    $lname = str_replace("'", " ", $last_name);
    
    $phone= stripslashes(@$_SESSION['phone_no']);
    $phone_no = str_replace("'", " ", $phone);
    
    $email= stripslashes(@$_SESSION['email_id']);
    $email_id = str_replace("'", " ", $email);
    
    $se_email= stripslashes(@$_SESSION['se_email_id']);
    $se_email_id = str_replace("'", " ", $se_email);
    
    $business = stripslashes(@$_SESSION['business_detail']);
    $business_detail = str_replace("'", " ", $business);
    
    $company = stripslashes(@$_SESSION['company_name']);
    $company_name = str_replace("'", " ", $company);
    
    $cmp_logo = stripslashes(@$_SESSION['cmp_logo_name']);
    $cmp_logo_name = str_replace("'", " ", $cmp_logo);
    
    $tag = stripslashes(@$_SESSION['tagline']);
    $tagline = str_replace("'", " ", $tag);
    
    $idea= stripslashes(@$_SESSION['idea_of_clint']);
    $idea_of_clint = str_replace("'", " ", $idea);
    
    $contact= stripslashes(@$_SESSION['contact_details']);
    $contact_details = str_replace("'", " ", $contact);
    
    $yes_kalar= stripslashes(@$_SESSION['colors']);
    $colors = str_replace("'", " ", $yes_kalar);
    
    $no_kalar= stripslashes(@$_SESSION['no_colors']);
    $no_colors = str_replace("'", " ", $no_kalar);
	
	/*$printing_services=@$_SESSION['extraopt1'].", ".@$_SESSION['extraopt2'].", ".@$_SESSION['extraopt3'].", ".@$_SESSION['extraopt4'].", ".@$_SESSION['extraopt5'].", ".@$_SESSION['extraopt6'].", ".@$_SESSION['extraopt7'].", ".@$_SESSION['extraopt8'].", ".@$_SESSION['extraopt9'].", ".@$_SESSION['extraopt10'].", ".@$_SESSION['extraopt11'].", ".@$_SESSION['extraopt12'].", ".@$_SESSION['extraopt13'].", ".@$_SESSION['extraopt14'].", ".@$_SESSION['extraopt15'].", ".@$_SESSION['extraopt16'].", ".@$_SESSION['extraopt17'].", ".@$_SESSION['extraopt18'].", ".@$_SESSION['extraopt19'].", ".@$_SESSION['extraopt20'];*/
	
	$site = ORDERED_SITE;	
	
	$web= @$_SESSION['web'];
	$brouchure= @$_SESSION['brouchure'];
	$option= @$_SESSION['option'];
	
	$web_gold= @$_SESSION['web_gold'];
	$web_elite= @$_SESSION['web_elite'];
	$package= @$_SESSION['package'];
	
	$price= @$_SESSION['price'];
		
	$file = @$_SESSION['file'];
	$grand_total = "Grand Total";
	$colour_yes = @$_SESSION['m5_colors'];
	$colour_no = @$_SESSION['m5_no_colors'];
	$color=explode(",",$colour_yes);
	$colorno=explode(",",$colour_no);
	
	
	
			//web packages
	if(@$_SESSION['web'] == Budget_Website_Price)
		{
		$web_package = "Budget website 1 page.";
		$web_pound = Budget_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
	
		$pound = "GBP";
		}
	if(@$_SESSION['web'] == Gold_Website_Price)
		{
		$web_package = "Gold website up to 5 pages.";
		$web_pound = Gold_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$pound = "GBP";
		}
	if(@$_SESSION['web'] == Elite_Website_Price)
		{
		$web_package = "Elite website  up to 12 pages.";
		$web_pound = Elite_Website_Price;
		$web_brac_start = "(";
		$web_brac_close = ")";
		$pound = "GBP";
		}
		//packages brouchure
	if(@$_SESSION['brouchure'] == Brochure_Tri_Fold_Price)
		{
		$brouchure_package = "Tri-fold double-sided.";
		$brouchure_pound = Brochure_Tri_Fold_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure'] == Brochure_4_Page_Price)
		{
		$brouchure_package = "4 Page exec.";
		$brouchure_pound = Brochure_4_Page_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$gdp = "GBP";
		}
		if(@$_SESSION['brouchure'] == Brochure_8_Page_Price)
		{
		$brouchure_package = "Brochure up to 8 pages..";
		$brouchure_pound = Brochure_8_Page_Price;
		$brouchure_brac_start = "(";
		$brouchure_brac_close = ")";
		$gdp = "GBP";
		}
		/*//Packages web_gold
		if(@$_SESSION['web_gold'] == Gold_Website_Price)
		{
		$web_gold_package = "Start-up Gold Package";
		$web_gold_pound = Gold_Website_Price;
		$web_gold_brac_start = "(";
		$web_gold_brac_close = ")";
		$bgp = "GBP";
		}
		//Packages web_elite
		if(@$_SESSION['web_elite'] == Elite_Website_Price)
		{
		$web_elite_package = "Start-up Elite Package.";
		$web_elite_pound = Elite_Website_Price;
		$web_elite_brac_start = "(";
		$web_elite_brac_close = ")";
		$gbp = "GBP";
		}*/
		//packages option
        
		if(@$_SESSION['option']==EXPRESS_DELIVERY)
		{
			$option_package = "24 hours delivery";
			$option_pound = EXPRESS_DELIVERY;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$gbp = "GBP";
		}

		if(@$_SESSION['option']==BLACK_N_WHITE)
		{
			$option_package = "Black/White logo design";	
			$option_pound = BLACK_N_WHITE;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$gbp = "GBP";
		}

		if(@$_SESSION['option']==BOTH_SERVICES)
		{
			$option_package = "Both order service";	
			$option_pound = BOTH_SERVICES;
			$option_brac_start = "(";
			$option_brac_close = ")";
			$gbp = "GBP";
		}
		
		//Nochex Price	
		
	$row='23';
	$total=0;	
	$total1=0;
	for($i=1;$i<$row-2;$i++)
	{		
		$opt='opt'.$i;
		$extraopt='extraopt'.$i;
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
    //echo $total + $amount + $price + $option + $web + $brouchure; die;
    if(COUNTRY == 'UK'){
        $high_amount = 700;
    }
    if(COUNTRY == 'USA'){
        $high_amount = 700*1.57095;
    }
    if(($total + $amount + $price + $option + $web + $brouchure) <= $high_amount)
	{                                    
	$total=$total + $amount;
	}
	else
	{
	$total1=$total1 + $amount."<br />";
    
	}
	}
	}
	$total_price=$total;
    if($total_price >= 0){
        $option_package_extra = "Total Extra Packages Service";	
        $option_dollar_extra = $total_price;
		$option_pound_extra = ceil($total_price * CONVERSION_MULTIPLYER);
		$option_brac_start = "(";
		$option_brac_close = ")";
		$gbp = "GBP";
    }
	
    $price_dollar = $price;
    $price_dollar_option = $option;
    $price_dollar_brouchure = $brouchure;
    $price_dollar_web = $web;
    $tax_in_total = @$_SESSION['tax_in_total'];     
    
    $total_real_price =$total + $price + $option +$brouchure + $web + $tax_in_total;
    //echo $total_real_price; die;
    $total = ceil($total * CONVERSION_MULTIPLYER);
    $price = ceil($price * CONVERSION_MULTIPLYER);
    $option = ceil($option * CONVERSION_MULTIPLYER);
    $brouchure = ceil($brouchure * CONVERSION_MULTIPLYER);
    $web = ceil($web * CONVERSION_MULTIPLYER);
   
   	$total_nochex_pound =$total + $price + $option + $brouchure + $web + $tax_in_total;
    
    if(@$_SESSION['option']!=="")
    {
        $order_discription = $package." (";
        if(COUNTRY == "USA")
        {
            $order_discription .=  $price_dollar.'USD='; 
        }
        $order_discription .=  $price.$gbp."), ".$option_package." (";
        if(COUNTRY == "USA")
        {
            $order_discription .=  $price_dollar_option.'USD='; 
        }
        $order_discription .=  $option.$gbp."), ".$option_package_extra." (";
        if(COUNTRY == "USA")
        {
            $order_discription .=  $option_dollar_extra.'USD='; 
        }
        $order_discription .=  $option_pound_extra.$gbp.") ";
        
        if($web != "")
        {
            $order_discription .=  $web_package."(";
            if(COUNTRY == "USA")
            {
                $order_discription .=  $price_dollar_web.'USD='; 
            }
            $order_discription .=  $web.$gbp.")";            
        }
        if($brouchure!="")
        {
            $order_discription .=  $brouchure_package."(";
            if(COUNTRY == "USA")
            {
                $order_discription .=  $price_dollar_brouchure.'USD='; 
            }
            $order_discription .=  $brouchure.$gbp.")";
        }
        if(COUNTRY == "UK")
        {
            $order_discription .=  html_entity_decode('Tax  20&permil; '). CURRENCY.$tax_in_total;
        }
    }
    
    
    
    if(@$_SESSION['option']=="")
	{
	   $order_discription = $package." (";
        if(COUNTRY == "USA")
        {
            $order_discription .=  $price_dollar.'USD='; 
        }
        $order_discription .=  $price.$gbp."), ".$option_package_extra." (";
        if(COUNTRY == "USA")
        {
            $order_discription .=  $option_dollar_extra.'USD='; 
        }
        $order_discription .=  $option_pound_extra.$gbp.") ";
        
        if($web != "")
        {
            $order_discription .=  $web_package."(";
            if(COUNTRY == "USA")
            {
                $order_discription .=  $price_dollar_web.'USD='; 
            }
            $order_discription .=  $web.$gbp.")";            
        }
        if($brouchure!="")
        {
            $order_discription .=  $brouchure_package."(";
            if(COUNTRY == "USA")
            {
                $order_discription .=  $price_dollar_brouchure.'USD='; 
            }
            $order_discription .=  $brouchure.$gbp.")";
        }
        if(COUNTRY == "UK")
        {
            $order_discription .=  html_entity_decode('Tax  20&permil; '). CURRENCY.$tax_in_total;
        }
        
    }
    
    //echo $order_discription; die;
    
/*
$tbl="auto_mail";

$fl=array("email","submit_date","mail_body","ip","site_id");

$vl=array($email,$submit_date,$mailbody1,$ip,6);

$insert=$Objdb->insert($tbl, $fl, $vl, $prn);   

$tbl="order_extra";

$fl=array("extra_logo","logoby_designer","order_lifetime","order_flas","logo_24hr","black_white","business_card","order_letter","order_envelop","order_complement","order_stationary","order_business","order_letter_print","order_envelop_print","order_complement_print","order_mouse","order_cap","order_pens","order_cotton","order_tshirt","email","submit_date","ip","site_id","payment","logo_web_id");

$vl=array(@$_SESSION['extraopt1'],@$_SESSION['extraopt2'],@$_SESSION['extraopt3'],@$_SESSION['extraopt4'],@$_SESSION['extraopt5'],@$_SESSION['extraopt6'],@$_SESSION['extraopt7'],@$_SESSION['extraopt8'],@$_SESSION['extraopt9'],@$_SESSION['extraopt10'],@$_SESSION['extraopt11'],@$_SESSION['extraopt12'],@$_SESSION['extraopt13'],@$_SESSION['extraopt14'],@$_SESSION['extraopt15'],@$_SESSION['extraopt16'],@$_SESSION['extraopt17'],@$_SESSION['extraopt18'],@$_SESSION['extraopt19'],@$_SESSION['extraopt20'],$email,$submit_date,$ip,6,0,@$_SESSION['insert']);

$insert=$Objdb->insert($tbl, $fl, $vl, $prn);*/

		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Payment</title>

<?php include_once("includes/logo-design/analytics.php"); ?>
</head>

<body>
<p>Please Wait...</p>
<!--Start Nochex payment Start-->
	
<!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
<form name="checkoutform" action="https://secure.nochex.com" method="post">
<input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
<input type="hidden" name="logo" value="https://50dollarlogo.com/~dollar50/images/logo.jpg" />
<input type="hidden" name="returnurl" value="http://www.<?php echo SITE_NAME; ?>/thankyou.php?ip=<?php echo $ip; ?>&mainlogowebid=<?php echo @$_SESSION['insert']; ?>&price=<?=@$total_real_price;?>" />
<input type="hidden" name="description" value="<?= $order_discription; ?>" />
<input type="hidden" name="amount" value="<?=$total_nochex_pound;?>" />

</form>
<?php #session_destroy();?>
<script language="javascript">
	document.checkoutform.submit();
</script>
<!--End Nochex payment End-->


</body>
</html>