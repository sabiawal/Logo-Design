<?php
    include_once("jetpay/gatewayapi/inc_gatewayapi.php");
    $rnum = ''; 
//    echo '<pre>';
//    print_r($_SESSION);
//    echo '</pre>';
    
    $web_package = @$_SESSION['web_package'];
	$logo_package = @$_SESSION['logo_package'];	
		
	$web_price = @$_SESSION['web_price'];
	$logo_price = @$_SESSION['logo_price'];
	
    $usd = "USD";

	if(!isset($_SESSION['temp_web_price'])){
		$web_price = @$_SESSION['web_price'];
		$logo_price = @$_SESSION['logo_price'];
		$tax_amount=@$_SESSION['tax_amount'];
	}
	elseif(isset($_SESSION['temp_web_price'])){
		
		$web_price = @$_SESSION['web_price'];
		$logo_price = @$_SESSION['logo_price'];
		/*$web_price = @$_SESSION['temp_web_price'];
		$logo_price = @$_SESSION['temp_logo_price'];*/
		$tax_amount=@$_SESSION['tax_amount'];
		$discount=@$_SESSION['web_price']+@$_SESSION['logo_price']-@$_SESSION['temp_web_price']-@$_SESSION['temp_logo_price'];
	}
    if(isset($_SESSION['dis']))
    {
        $discount = $_SESSION['dis'];
    }
    $total_real_price = $web_price + $logo_price+$tax_amount-@$discount;
	//if(isset($discount)) $total_real_price = $total_real_price-$discount;
    
    
    $_SESSION['amount'] = $total_real_price;
    if(isset($_SESSION['order_description'])) // this is set form payment.php while go to pament page thruogh email
    {
        $order_discription = $_SESSION['order_description'].$discount;
    }
    
    else
    {
        $order_discription = $web_package.' '.number_format($web_price,2, '.', '').$usd.' ';
        if($logo_price > 0) $order_discription .= $logo_package.' '.number_format($logo_price,2, '.', '').$usd;
    	if(isset($discount)) $order_discription .=' Discount:'.number_format($discount,2, '.', '').$usd;
        if($tax_amount > 0){$order_discription .=' V.A.T:'.number_format($tax_amount,2, '.', '');}
        
    }

	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?= base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>css/basket.css" rel="stylesheet" type="text/css" />
<?php include_once("includes/logo-design/analytics.php"); ?>
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>js/cardvalidation.js"></script>
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
<style type="text/css">


.jetpay h1{
    font: normal 48px/60px arial;
    white-space: nowrap;
    padding: 10px;
}

.form-wrap{
    border: 2px solid #ccc;
    border-radius:5px;
    margin: 0 0 10px;
    padding: 5px;
    width: 490px;    
}
.form-wrap h2{
    background: #bbb;
    margin-bottom: 10px;
    padding: 2px 5px;
    
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
   background: url(<?= base_url(); ?>images/jetpay-back.jpg) no-repeat 0 -40px; 
   width: 70px;
}
.label-wrap .button-back:hover
{
  background: url(<?= base_url(); ?>images/jetpay-back.jpg) no-repeat 0 0px;   
}
.label-wrap .button-submit
{
    background: url(<?= base_url(); ?>images/jetpay-make-payment.jpg) no-repeat 0 -40px; 
    width: 190px;
    
}
.label-wrap .button-submit:hover
{
   background: url(<?= base_url(); ?>images/jetpay-make-payment.jpg) no-repeat 0 0px; 
}

</style>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main jetpay">
      <h1>Almost Done!...</h1>
        <form method="post" onSubmit="submitonce(this)" name="form1" action="<?= site_url('web-site-design/webdesigner-limited-sale/process_transactionmid'); ?>">
        <input type="hidden" name="rnum" value="<?= $rnum; ?>" />
        <div class="form-wrap">
            <h2>Billing Information!</h2>
            <div style="border: 1px solid #ccc;">
                <div class="label-wrap">
                <span class="labeltext"><label>Company Name</label></span>
                <span ><?= @$_SESSION['company_name']; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Billing Address</label></span>
                <span ><input type="text" name="address1" value="<?= @$_SESSION['address1']; ?>" /></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>City</label></span>
                <span ><input type="text" name="city" value="<?= @$_SESSION['city']; ?>" /></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>State</label></span>
                <span ><?if($GatewaySettings['AllowInternational']) { ?>
                        <input name="state" type="text" size="40" maxlength="40" value="<? print @$_REQUEST['state']; ?>" />
                        <? } else { ?>
                        <select name="state" id="select">
                        <?  print printStateDropdown(@$_SESSION['state'],$value); ?>
                        </select>
                        <? } ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Zip Code/Postcode</label></span>
                <span ><input type="text" name="zip" value="<?= @$_SESSION['zip']; ?>" /></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Name on Card</label></span>
                <span ><input type="text" name="name" value="<?= @$_SESSION['name']; ?>" /></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Card Number</label></span>
                <span ><input name="cardnum" type="text"  size="22"  maxlength="22" onChange="handleCCTyping(this.form, event);" onKeyUp="handleCCTyping(this.form, event);" />
        <img src="<?= base_url(); ?>jetpay/images/cards/invalid.gif" alt="card_logo" name="cardimage" width="36"  height="24" hspace="10" vspace="0" align="middle" /></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Card Expiry</label></span>
                <span >Mo.
                    <select name="exp_month" id="select3">
                    <? print printMonthDropdown(@$_REQUEST['expmo']); ?>
                    </select>
                    Yr.
                    <select name="exp_year" id="select4">
                    <? print printYearDropdown(@$_REQUEST['expyr']); ?>
                    </select>
                </span>
                </div> 
                
                <div class="label-wrap">
                <span class="labeltext"><label>CVV Number</label></span>
                <span ><input name="CVV2" type="text" size="4" maxlength="4" value="<? print @$_REQUEST['CVV2']; ?>" />
        <a href="javascript:popUp('<?= site_url('cvv')?>')" style="float: right;">The CVV Number is the last 3 digits found on the back of your debit or credit card. </a></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Package Discription</label></span>
                <span ><?= $order_discription ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Total Amount($)</label></span>
                <span ><?= number_format($total_real_price,2,'.',''); ?></span>
                </div>                
                <div class="label-wrap">
                <input type="button"  onclick="document.location='<?= site_url('web-site-design/webdesigner-limited-sale/cart'); ?>'" value="Back" class="button-back" />
                <input type="submit" value="Make Payment" onClick="javascript:showProgress();" class="button-submit" />
                <span id="progress" style="visibility:hidden"> <img src="<?= base_url(); ?>jetpay/images/ajax-loader.gif" alt="processing" width="148" height="19" align="absmiddle" /> </span>
                </div>
            </div>
        </div>
</form>
        
        
      </div>
      <div class="side-bar" style="position:relative;">
        
      </div>
      <div class="clear"></div>
      <?php include_once("includes/logo-design/seal-top.php"); ?>
    </div>
  </div>
  <div class="footer-container">
    <?php include_once("includes/logo-design/footer.php"); ?>
  </div>
</div>
</body>
</html>