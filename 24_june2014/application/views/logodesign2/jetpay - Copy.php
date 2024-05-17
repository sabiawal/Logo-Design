<?php
    include_once("jetpay/gatewayapi/inc_gatewayapi.php");
    //echo "<pre>";	
    //print_r($_SESSION);    
    @$_SESSION['address1'];
    @$_SESSION['address2'];
    @$_SESSION['city'];
    @$_SESSION['state'];
    @$_SESSION['zip'];
    @$_SESSION['country'];
    @$_SESSION['name'];
    @$_SESSION['email'];
    $price = @$_POST['total_real_price'];  // for getting the real amount ($ or Pound Currency)  which is in the site
    $rnum = '';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/basket.css" rel="stylesheet" type="text/css" />
<?php include_once("includes/logo-design2/analytics.php"); ?>
<script type="text/javascript" src="js/cardvalidation.js"></script>
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
</script>
<style type="text/css">

.jetpay td img{
    display: inherit;
}
.jetpay h1{
    font: normal 48px/60px arial;
    white-space: nowrap;
    padding: 10px;
}
tr{
    background: #fff;
    display: block;
    margin-bottom: 10px;
}
td.highlight, tr.background{
    background: #ccc;
    display: block;
    padding: 1%;
    width: 98%;
}
td.tdleft{
    padding: 0 5px 0 0;
    text-align: right;
    width: 145px;
    
}
.front{
    background: #fff;
    border: 1px solid #ccc;
    display: inline-block;
    padding: 5px;
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
    
    padding: 5px 0;
}
.label-wrap span{
    display: inline-block;
    padding: 3px 5px;
}
.label-wrap span.labeltext{
    background: #eee;
    border-right: 1px solid #ddd;
    margin-left: 5px;   
    text-align: right;
    width: 145px;
}

</style>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design2/header.php"); ?>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main jetpay">
      <h1>Almost Done!...</h1>
        <form method="post" onSubmit="submitonce(this)" name="form1" action="<?= site_url('process_transactionmid2'); ?>">
        <input type="hidden" name="rnum" value="<?php echo $rnum; ?>" />
        <div class="form-wrap">
            <h2>Billing Information!</h2>
            <div style="border: 1px solid #ccc;">
                <div class="label-wrap">
                <span class="labeltext"><label>Company Name</label></span>
                <span ><input type="text" name="company_name" value="<?= @$_SESSION['company_name']; ?>" /></span>
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
                <span ></span>
                </div>
                
                
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        <table width="512" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="background">
        <td width="512"><table width="499" border="0" cellpadding="3" cellspacing="1" class="front">
        <tr>
        <td colspan="2" class="highlight">Billing Information!</td>
        </tr>
        <tr>
        <td class="tdleft">*Name on Card : </td>
        <td width="341"><input name="name" type="text" id="name" size="40" maxlength="50" value="<? print @$_REQUEST['name']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">*Address 1:</td>
        <td><input name="address1" type="text" id="address1" size="40" maxlength="50" value="<? print @$_REQUEST['address1']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">&nbsp;Address 2: </td>
        <td><input name="address2" type="text"  size="40" maxlength="60" value="<? print @$_REQUEST['address2']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">*City: </td>
        <td><input name="city" type="text" size="40" maxlength="40" value="<? print @$_REQUEST['city']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">*State: </td>
        <td><?if($GatewaySettings['AllowInternational']) { ?>
        <input name="state" type="text" size="40" maxlength="40" value="<? print @$_REQUEST['state']; ?>" />
        <? } else { ?>
        <select name="state" id="select">
        <?  print printStateDropdown(@$_REQUEST['state'],$value); ?>
        </select>
        <? } ?>            </td>
        </tr>
        <tr>
        <td class="tdleft">*Zip: </td>
        <td><input name="zip" type="text" size="10" maxlength="20" value="<? print @$_REQUEST['zip']; ?>" />            </td>
        </tr>
        
        <tr>
        <td class="tdleft">&nbsp;Phone Number: </td>
        <td><input name="phone" type="text"  size="20" maxlength="25" value="<? print @$_REQUEST['phone']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">*Email Address: </td>
        <td><input name="email" type="text"  size="40" maxlength="248" value="<? print @$_REQUEST['email']; ?>" />            </td>
        </tr>
        <tr>
        <td class="tdleft">*Credit Card Number: </td>
        <td><input name="cardnum" type="text"  size="22"  maxlength="22" onChange="handleCCTyping(this.form, event);" onKeyUp="handleCCTyping(this.form, event);" />
        <img src="jetpay/images/cards/invalid.gif" alt="card_logo" name="cardimage" width="36"  height="24" hspace="10" vspace="0" align="middle" />
        <div align="center"></div></td>
        </tr>
        <tr>
        <td class="tdleft">*Expiration Date:</td>
        <td>Mo.
        <select name="exp_month" id="select3">
        <? print printMonthDropdown(@$_REQUEST['expmo']); ?>
        </select>
        Yr.
        <select name="exp_year" id="select4">
        <? print printYearDropdown(@$_REQUEST['expyr']); ?>
        </select></td>
        </tr>
        <tr>
        <td class="tdleft">*Security Code:</td>
        <td><input name="CVV2" type="text" size="4" maxlength="4" value="<? print @$_REQUEST['CVV2']; ?>" />
        <a href="javascript:popUp('<?= site_url('cvv2')?>')">What is this?</a></td>
        </tr>
        <tr>
        <td class="tdleft">&nbsp;Package Description:</td>
        <td><font color="#FF0000"><b><i>  <? print @$_SESSION['description']; ?></i></b></font></td>
        </tr>
        
        <tr>
        <td class="tdleft">&nbsp;Total Amount:</td>
        <td><font color="#FF0000"><b><i> $<? print @$_SESSION['amount']; ?></i></b></font></td>
        </tr>
        
       
      
        <tr>
        <td height="27"><div align="right"></div></td>
        <td align="right" valign="middle"><div align="left">
        <p align="right" class="style2">
        <input class="button" type="submit" name="submit" value="Submit" onClick="javascript:showProgress();" />
        <span id="progress" style="visibility:hidden"> <img src="images/ajax-loader.gif" alt="processing" width="148" height="19" align="absmiddle" /> </span></p></div></td>
        <input type="hidden" name="amount" value="amount" />
        </tr>
        <tr>
        <td colspan="2" align="center" valign="baseline"><div align="right"><span class="style4">transactions processed by<span class="style5"> <a href="http://www.jetpay.com">JetPay</a></span></span></div></td>
        </tr>
        <tr>
        <td height="45" colspan="2" align="center" valign="middle">
        <div align="right"><img src="images/lock_ok.jpg" alt="ssl secure" width="21" height="21" align="middle" /><img src="images/508WAI_Approved.jpg" alt="508/wai" width="85" height="26" align="middle" /></div>
        <div align="right"></div></td>
        </tr>
        </table></td>
        </tr>
        </table>
</form>
        
        
      </div>
      <div class="side-bar" style="position:relative;">
        
      </div>
      <div class="clear"></div>
      <?php include_once("includes/logo-design2/seal-top.php"); ?>
    </div>
  </div>
  <div class="footer-container">
    <?php include_once("includes/logo-design2/footer.php"); ?>
  </div>
</div>
</body>
</html>