<?php
    require_once("jetpay/gatewayapi/inc_gatewayapi.php");
    $rnum = '';
    $order_discription = $_SESSION['copyright_package']." Copyright Package worth ".CURRENCY.$_SESSION['copyright_price'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
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

</head>
<body>
<div class="wrapper">
  <?php include_once("includes/client/header.php"); ?>
    <?php include_once("includes/client/top_container_copyright.php"); ?>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main jetpay">
      <h1>Almost Done!...</h1>
        <form method="post" onSubmit="submitonce(this)" name="form1" action="<?= site_url('client_panel/process_transactionmid'); ?>">
        <input type="hidden" name="rnum" value="<?= $rnum; ?>" />
        <div class="form-wrap">
            <h2>Billing Information!</h2>
            <div style="border: 1px solid #ccc; margin-bottom: 5px;">
                <div class="label-wrap">
                <span class="labeltext"><label>Full Name</label></span>
                <span ><?= (isset($_SESSION['fullName']) && $_SESSION['fullName'] != "") ? $_SESSION['fullName'] : "-"; ?></span>
                </div>
                <div class="label-wrap">
                <span class="labeltext"><label>Organization Name</label></span>
                <span ><?= (isset($_SESSION['orgName']) && $_SESSION['orgName'] != "") ? $_SESSION['orgName'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Package Discription</label></span>
                <span ><?= $order_discription; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Total Amount($)</label></span>
                <span ><?= $_SESSION['amount']; ?></span>
                </div> 
            </div>
            
            
            <div style="border: 1px solid #ccc; margin-bottom: 5px;">
                <div class="label-wrap">
                <span class="labeltext"><label>Street</label></span>
                <span ><?= (isset($_SESSION['street']) && $_SESSION['street'] != "" ) ? $_SESSION['street'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>City</label></span>
                <span ><?= (isset($_SESSION['city']) && $_SESSION['city'] != "" ) ? $_SESSION['city'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>State</label></span>
                <span ><?= (isset($_SESSION['state']) && $_SESSION['state'] != "") ? $_SESSION['state'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Zip Code/Postcode</label></span>
                <span ><?= (isset($_SESSION['zipOrPostCode']) && $_SESSION['zipOrPostCode'] != "" ) ? $_SESSION['zipOrPostCode'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Country </label></span>
                <span ><?= (isset($_SESSION['country']) && $_SESSION['country'] != "") ? $_SESSION['country'] : "-"; ?></span>
                </div>
                <div class="label-wrap">
                <span class="labeltext"><label>Citizenship </label></span>
                <span ><?= (isset($_SESSION['citizenship']) && $_SESSION['citizenship'] != "") ? $_SESSION['citizenship'] : "-"; ?></span>
                </div>
                
                <div class="label-wrap">
                <span class="labeltext"><label>Domicile </label></span>
                <span ><?= (isset($_SESSION['domicile']) && $_SESSION['domicile'] != "") ? $_SESSION['domicile'] : "-"; ?></span>
                </div>
            </div>
            
            <div style="border: 1px solid #ccc; margin-bottom: 5px;">   
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
                <span class="text-red text-11"><strong>Note:</strong> Please re-check your mailing detail <br />
before you place your order. Thank you!</span>
                </div>                
                <div class="label-wrap">
                <input type="hidden" name="payment_method" value="Jetpay" />                
                <input type="button"  onclick="document.location='<?= site_url('client_panel/copy_order'); ?>'" value="Back" class="button-back" />
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