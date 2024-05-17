<?php
//echo '<pre>'; print_r($_SESSION);
//include_once("jetpay/gatewayapi/inc_gatewayapi.php");
    $rnum = '';
    $web_gold_package = '';
    $web_elite_package = '';
	$brouchure_package = '';
	$web_package = '';
	$option_package = '';
	$gbp = "GBP";
    $usd = "USD";
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
    $company = stripslashes(@$row->company_name);
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
                $amount=$amount * @$_SESSION['select1'];
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
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].'('.CURRENCY.$_SESSION['opta'.$i].')';
		}elseif($i == '16'){
		$costs = $_SESSION['opta16'];
		$adds = ($costs * @$_SESSION['select1']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].'('.CURRENCY.$adds.')';	
		}elseif($i == '17'){
		$costs = $_SESSION['opta17'];
		$adds = ($costs * @$_SESSION['select2']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].'('.CURRENCY.$adds.')';	
		}
		else{
		$costs = $_SESSION['opta20'];
		$adds = ($costs * @$_SESSION['select4']) + ($costs * @$_SESSION['select5']) + ($costs * @$_SESSION['select6']) + ($costs * @$_SESSION['select7']) + ($costs * @$_SESSION['select8']);	
		$option_package_extra .= ', '.$_SESSION['extraopt'.$i].'('.CURRENCY.$adds.')';	
		}
		}
		}
		$str= ltrim ($option_package_extra,',');
		$option_package_extra = substr($str, 1);
		$_SESSION['extra_package'] = $option_package_extra;
        $option_dollar_extra = $extra_opt_price;
		$option_pound_extra = ceil($extra_opt_price * CONVERSION_MULTIPLYER);		
		$gbp = "GBP";
    }
	//echo $option_package_extra; die;
    $price_dollar = $price;
    $price_dollar_option = $option;
    $price_dollar_brouchure = $brouchure;
    $price_dollar_web = $web;
    $tax_in_total = @$_SESSION['tax_in_total'];     
    //$total_real_price =$price + $brouchure + $web + $option+ $extra_opt_price + $tax_in_total; # $ Price for usa and pound for UK
    //$total_real_price = number_format($total_real_price,"2",".","");
    $total_real_price = @$_SESSION['subtotal'];
    @$_SESSION['amount'] = @$_SESSION['net_total'];
    # Price In dollar for Jetpay Transaction
    $price2             = number_format(($price * CONVERSION_MULTIPLYER2),"2",".","");
    $brouchure2         = ceil($brouchure * CONVERSION_MULTIPLYER2);
    $web2               = ceil($web * CONVERSION_MULTIPLYER2);
    $option2            = ceil($option * CONVERSION_MULTIPLYER2);    
    $extra_opt_price2   = ceil($extra_opt_price * CONVERSION_MULTIPLYER2);   
   	//$total_jetpay_dollar= $price2 + $option2 + $extra_opt_price2 + $brouchure2 + $web2 + $tax_in_total;  
    //$total_jetpay_dollar = number_format($total_jetpay_dollar,"2",".","");
    $total_jetpay_dollar =  number_format(($total_real_price * CONVERSION_MULTIPLYER2),"2",".","");
    # Price In Pound for Nochex Transaction   
    $price              = number_format(($price * CONVERSION_MULTIPLYER),"2",".","");
    $brouchure          = ceil($brouchure * CONVERSION_MULTIPLYER);
    $web                = ceil($web * CONVERSION_MULTIPLYER);
    $option             = ceil($option * CONVERSION_MULTIPLYER);    
    $extra_opt_price    = ceil($extra_opt_price * CONVERSION_MULTIPLYER);   
   	$total_nochex_pound = $price + $option + $extra_opt_price + $brouchure + $web + $tax_in_total;  
    $total_nochex_pound = number_format($total_nochex_pound,"2",".","");    
    
	
	
	$order_discription = "";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $price.$gbp.'='; 
        }
        //$order_discription .=  $price2.$usd.")";
        if(@$_SESSION['option']!="")
        { //echo '123';
            $order_discription .=  $option_package." (";
            if(COUNTRY == "UK")
            {
                $order_discription .=  $option.$gbp.'='; 
            }
            $order_discription .=  $option2.$usd.")";
        }
        if($extra_opt_price != 0)
        {    //echo $extra_opt_price2;        
            $order_discription .=  $option_package_extra." (";
            if(COUNTRY == "UK")
            {
                $order_discription .=  $extra_opt_price.$gbp.'='; 
            }
            $order_discription .=  $extra_opt_price2.$usd.")";
        }
        if($web != "")
        {
            $order_discription .=  $web_package."(";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $web.$gbp.'='; 
        }
        $order_discription .=  $web2.$usd.")";            
        }
        if($brouchure!="")
        {
            $order_discription .=  $brouchure_package."(";
        if(COUNTRY == "UK")
        {
            $order_discription .=  $brouchure.$gbp.'='; 
        }
        $order_discription .=  $brouchure2.$usd.")";
        }
        if(COUNTRY == "UK")
        {
            $order_discription .=  ' Tax  20% '. number_format(($tax_in_total*CONVERSION_MULTIPLYER2),2,".","").$usd."";
        }
		
		
		$purchase_dis_rate=0.15;
		$purchase_dis=number_format($total_real_price*$purchase_dis_rate,2,".","") ;
		 $option_package_extra     .= '<br ><br ><span style="color:#c00"> Gross Total : '.CURRENCY.$total_real_price.'</span> <br>
                                    Purchase Discount '.($purchase_dis_rate*100).'% ('.CURRENCY.$purchase_dis.')                                    
                                    ';
									
			 $extra_opt_price2 = $extra_opt_price2 - $purchase_dis;
									
		//echo '<pre>'; print_r($_SESSION); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?= base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>assets/css/basket.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>assets/css_client/style_jet.css" rel="stylesheet" type="text/css" />
<!--<link href="<?= base_url()?>assets/css/css3-effects.css" rel="stylesheet">-->
<?php $this->load->view("includes/logo-design/analytics.php"); ?>
<script src="<?= base_url()?>assets/js/jquery.js"></script>
<script src="<?= base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url()?>assets/js/modernizr.custom.js"></script>
<!--<script src="<?php echo base_url()?>js/jquery.js"></script>-->
<script type="text/javascript" src="<?= base_url();?>assets/js/cardvalidation.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(function(){

	$('#jetpay-form').validate(
	{
		rules:
		{
			company_name: "required",
			billing_address:"required",
			city:"required",
			state:"required",
			state:"required",
			zip:"required",
			fullname:"required",
			cardnum:"required",
			expmonth:"required",
			expyear:"required",
			cvv: "required"
		},
		messages:
		{
			company_name: "",
			billing_address:"",
			city:"",
			state:"",
			state:"",
			zip:"",
			fullname:"",
			cardnum:"",
			expmonth:"",
			expyear:"",
			cvv: ""                                                       
		}
	});
	
	$( ".order-submit-btn" ).click(function() { //alert(123);
		
		$('#jetpay-form').validate(
		{
			rules:
		{
			company_name: "required",
			billing_address:"required",
			city:"required",
			state:"required",
			state:"required",
			zip:"required",
			fullname:"required",
			cardnum:"required",
			expmonth:"required",
			expyear:"required",
			cvv: "required"
		},
		messages:
		{
			company_name: "",
			billing_address:"",
			city:"",
			state:"",
			state:"",
			zip:"",
			fullname:"",
			cardnum:"",
			expmonth:"",
			expyear:"",
			cvv: ""                                                       
		}
		});
		if($("#jetpay-form").valid()){ 
			showProgress();
			$('#jetpay-form').submit();
		}else{
			//alert('not valid');
		}
	});
});
</script>

<script language="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=590,height=245,left = 490,top = 312');");
}
// End -->
</script>
<script language="JavaScript">
<!--
function showProgress() 
	{
	document.getElementById("progress").style.visibility = 'visible';
	}	
//-->
</script>
<script language="JavaScript">
<!--
function submitonce(form1)
	{
	if (document.all||document.getElementById){
		for (i=0;i<form1.length;i++)
	{
		var tempobj=form1.elements[i]
	if(tempobj.type.toLowerCase()=="submit"||tempobj.type.toLowerCase()=="reset")
	tempobj.disabled=true
	}
	}
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
$(document).ready(function()
{   
    $('input,textarea').bind('keyup', function()
    {      
        var name  = this.name;
        var value = this.value;
        $.post("<?php echo site_url('autosave') ?>",name+'='+value,
        function(result)
        {            
        });
    }); 
});
</script>

<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<style type="text/css">
.jetpay h1{
    font: normal 48px/60px arial;
    white-space: nowrap;
    padding: 10px;
}
.form-wrap{
    border: 2px solid #ccc;
	border-radius:0 !important;
    margin: 0 0 10px;
    padding: 19px;
    width: 590px;    
}
.form-wrap h3{
    background: none repeat scroll 0 0 #ACACAC;
    font-size: 20px;
    font-weight: 700;
    padding: 10px 12px;
}
.label-wrap{
    padding: 5px;
}
.label-wrap span{
    display: inline-block;
    padding: 3px 5px;
    width: 300px;
}
.label-wrap span#progress{   
    width: inherit;
}
.label-wrap span.labeltext{
    background: #eee;
    border-right: 1px solid #ddd;     
    text-align: right;
    width: 145px;
}
.label-wrap img{
    display: inherit;
}
.label-wrap .button-back, .label-wrap .button-submit
{
    border: none;
    cursor: pointer;
    height: 40px;
    outline: none;
    overflow: hidden; 
    text-indent: -9999px; 
}
.label-wrap .button-back
{
   background: url(<?= base_url(); ?>assets/images/jetpay-back.jpg) no-repeat 0 -40px; 
   width: 70px;
}
.label-wrap .button-back:hover
{
  background: url(<?= base_url(); ?>assets/images/jetpay-back.jpg) no-repeat 0 0px;   
}
.label-wrap .button-submit
{
    background: url(<?= base_url(); ?>assets/images/jetpay-make-payment.jpg) no-repeat 0 -40px; 
    width: 190px;
}
.label-wrap .button-submit:hover
{
   background: url(<?= base_url(); ?>assets/images/jetpay-make-payment.jpg) no-repeat 0 0px; 
}
.card_type{
	float: right;
    margin-right: 110px;
    margin-top: 2px;
}
label.error {
    display: none !important;
}
.error {
    color: hsl(0, 100%, 50%);
    white-space: nowrap;
	border:1px solid #FF0000 !important;
}
.footer{
	border-left:none !important;
	border-bottom:none !important;
	border-right:none !important;
}
</style>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
<?php //echo '<pre>'; print_r($_SESSION); //die;?>
  <div class="header-container">
    <?php $this->load->view("includes/logo-design/header.php"); ?>
  </div>
  <div class="main-container">
    <div class="main_1 col1-layout">
      <div class="col-main jetpay">      
        
        <section id="order-process" class="content">
    <div class="container">
      <div class="row">
        <section class="clearfix">
          <div class="col-md-7">
            <h2 class="blue-title1">Almost Done!...</h2>
            <div class="jetpay-form-outer">
              <!--<form id="jetpay-form">-->
              <form id="jetpay-form" method="post" onSubmit="submitonce(this)" name="form1" action="<?= site_url('client_panel/process_transactionmid_1'); ?>">
        <input type="hidden" name="rnum" value="<?= $rnum; ?>" />
                <h3>Billing Information!</h3>
                <ul>
                  <li>
                    <label>Company Name</label>
                    <input type="text" name="company_name" value="<?= @$company_name; ?>" readonly="readonly" />
                  </li>
                  <li>
                    <label>Billing Address</label>
                    <input type="text" name="address1" value="<?= @$_SESSION['address1']; ?>" />
                  </li>
                  <li>
                    <label>City</label>
                    <input type="text" name="city" value="<?= @$_SESSION['city']; ?>" />
                  </li>
                  <li>
                    <label>State</label>
                    <span ><?php if($state) { ?>
                        <select id="select" name="state">
                            <?php echo $state;?>
                        </select>
<!--                        <input name="state" type="text" size="40" maxlength="40" value="<? print @$_REQUEST['state']; ?>" />-->
                        <? } else {?>
                        <input name="state" type="text" size="40" maxlength="40" value="<? print @$_REQUEST['state']; ?>" />
                        <?  } ?></span>
                  </li>
                  <li>
                    <label>Zip Code/Postcode</label>
                    <input type="text" name="zip" value="<?= @$_SESSION['zip']; ?>" />
                  </li>
                  <li>
                    <label>Name on Card</label>
                    <input type="text" name="name" value="<?= @$_SESSION['name']; ?>" />
                  </li>
                  <li>
                    <label>Card Number</label>
                    <span ><input name="cardnum" type="text"  size="22"  maxlength="22" onChange="handleCCTyping(this.form, event);" onKeyUp="handleCCTyping(this.form, event);" class="required creditcard <?php //echo base_url()?>" />
        <img class="card_type" src="<?php echo base_url();?>assets/images/cards/invalid.gif" alt="card_logo" name="cardimage" width="36"  height="24" hspace="10" vspace="0" align="middle" /></span>
                  </li>
                  <li>
                    <label>Card Expiry</label>
                    <span>Mo.</span>
                    <select name="exp_month" class="month required" id="select3">
                    <? print printMonthDropdown(@$_REQUEST['expmo']); ?>
                    </select>
                    <span>Yr.</span>
                    <select name="exp_year" class="year required" id="select4">
                    <? print printYearDropdown(@$_REQUEST['expyr']); ?>
                    </select>
                  </li>
                  <li>
                    <label>CVV Number</label>
                    <div class="multiple-items">
                      <input name="CVV2" class="cvv required" type="text" size="4" maxlength="4" value="<? print @$_REQUEST['CVV2']; ?>" />
                      <p class="theme-blue" onclick="javascript:popUp('<?= site_url('client_panel/cvv')?>')" style="cursor:pointer;">The CVV Number is the last 3 digits found on the back of your debit or credit card. </p>
                    </div>
                  </li>
                  <li>
                    <label>Package Discription</label>
                    <div class="multiple-items">
                      <p><?= $option_package_extra ?></p>
                    </div>
                  </li>
                  <li>
                    <label>Total Amount($)</label>
                    <span><?= number_format((@$extra_opt_price2),2,'.',''); ?></span> </li>
                </ul>
              <!--</form>-->
              <div class="normal-desc-box text-center"> 
                 <a href="<?php echo base_url();?>client_panel/cart" class="green-btn order-back-btn"> <span data-hover="Back">Back</span> </a> 
<input type="hidden" name="submit_upgrade" value="submit_upgrade"/>                 
                 <button type="button" class="green-btn order-submit-btn" name="submit_upgrade"> <span data-hover="Place Your Order">Place Your Order</span> </button>
                 <span id="progress" style="visibility:hidden"> <img src="<?= base_url(); ?>assets/images/ajax-loader.gif" alt="processing" width="148" height="19" align="absmiddle" /> </span>            
              </div>
              </form>
            </div>
          </div>
          <div class="col-md-5"> </div>
        </section>
      </div>
    </div>
  </section>
        
<!--</form>-->
      </div>
      <div class="side-bar" style="position:relative;">
      </div>
      <div class="clear"></div>
      <?php $this->load->view("includes/logo-design/seal-top.php"); ?>
    </div>
  </div>
  <div class="footer-container">
    <?php $this->load->view("includes/logo-design/footer.php"); ?>
  </div>
</div>
</body>
</html>