<?php
    $web_gold_package = '';
    $web_elite_package = '';
	$brouchure_package = '';
	$web_package = '';
	$option_package = '';
    $option_package_extra = '';
	$gbp = "GBP";
    $gbp2 = "&pound;";
    $per = '&permil;';
    $tax_in_total =0;    
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
	if(isset($_SESSION['blackn24']) && $_SESSION['blackn24'] !=''){$option_package = $_SESSION['blackn24'];}
    if(isset($_SESSION['webpackage']) && $_SESSION['webpackage'] !=''){$web_package = $_SESSION['webpackage'];}
    if(isset($_SESSION['bhaucharpackage']) && $_SESSION['bhaucharpackage'] !=''){$brouchure_package = $_SESSION['bhaucharpackage'];}
	//Nochex Price	
	$row=23;
	$extra_opt_price=0;
	for($i=1;$i<$row-2;$i++)
	{		
        $opt='opt'.$i;
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
    {
        $option_package_extra = "Total Extra Packages Service";	
        $option_dollar_extra = $extra_opt_price;
		$option_pound_extra = ceil($extra_opt_price * CONVERSION_MULTIPLYER);		
		$gbp = "GBP";
    }
    $price_dollar = $price;
    $price_dollar_option = $option;
    $price_dollar_brouchure = $brouchure;
    $price_dollar_web = $web;
    $tax_in_total = @$_SESSION['tax_in_total'];
    $total_real_price = @$_SESSION['net_total'];
    # Price In Pound for Nochex Transaction   
    $price              = number_format(($price * CONVERSION_MULTIPLYER),"2",".","");
    $brouchure          = ceil($brouchure * CONVERSION_MULTIPLYER);
    $web                = ceil($web * CONVERSION_MULTIPLYER);
    $option             = ceil($option * CONVERSION_MULTIPLYER);    
    $extra_opt_price    = ceil($extra_opt_price * CONVERSION_MULTIPLYER);   
   	$total_nochex_pound =$price + $option + $extra_opt_price + $brouchure + $web + $tax_in_total + $_SESSION['package_discount_amount'];  
   // $total_nochex_pound = number_format($total_nochex_pound,"2",".","");   
   $total_nochex_pound = number_format($total_real_price,"2",".","");     		
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
    $order_discription .=  htmlspecialchars($gbp2).$price."),";
    if($option_package)
    {
        $order_discription .= ' '.$option_package." (";
        $order_discription .=  htmlspecialchars($gbp2).$option."),";
    }
    if($option_package_extra)
    {
        $order_discription .= ' '.$option_package_extra." (";
        $order_discription .=  htmlspecialchars($gbp2).$option_pound_extra."),";
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
        //$order_discription .=  ' '.'Purchase Discount '.$_SESSION['purchase_discount_rate'].htmlspecialchars($per).' (';
        $order_discription .=  ' Purchase Discount (';
        $order_discription .=  htmlspecialchars($gbp2).number_format(($_SESSION['purchase_discount']*CONVERSION_MULTIPLYER),2,".","")."),";   
    }
    if(isset($_SESSION['p_discount']) && $_SESSION['p_discount'] != '')
    {
        $order_discription .=  ' Promotional Discount (';
        $order_discription .=  htmlspecialchars($gbp2).number_format(($_SESSION['p_discount']*CONVERSION_MULTIPLYER),2,".","")."),";   
    }
    $order_discription .=  ' Tax '. htmlspecialchars($gbp2).$tax_in_total;
    $order_discription .= '.';
?>
        <p>Please Wait...</p>
        <!--Start Nochex payment Start-->	
        <!--<form name="checkoutform" action="https://www.nochex.com/nochex.dll/checkout" method="post">-->
        <form name="checkoutform" action="https://secure.nochex.com" method="post">
        <input type="hidden" name="email" value="fiftydollarlogo@gmail.com" />
        <input type="hidden" name="logo" value="https://logodesignguarantee.com/images/logo.jpg" />
        <input type="hidden" name="returnurl" value="<?php echo base_url(); ?>reseller/thankyou.php?ip=<?php echo $ip; ?>&mainlogowebid=<?php echo @$_SESSION['insert']; ?>&price=<?=@$total_real_price;?>" />
        <input type="hidden" name="description" value="<?= $order_discription; ?>" />
        <input type="hidden" name="amount" value="<?=$total_nochex_pound;?>" />
        </form>
        <script language="javascript">
        document.checkoutform.submit();
        </script>
        <!--End Nochex payment End-->
</body>
</html>