<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>

<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?= base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>css/basket.css" rel="stylesheet" type="text/css" />

<script>
var baseUrl = '<?= base_url()?>';
var currency = '<?= CURRENCY; ?>';

var express_delivery = '<?= EXPRESS_DELIVERY; ?>';
var black_n_white = '<?= BLACK_N_WHITE; ?>';
var both_services = '<?= BOTH_SERVICES; ?>';
</script>
<script language="javascript" src="<?= base_url()?>js/orderone.js"></script>
<script language="javascript" src="<?= base_url()?>js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('.basketEdit').hide();	
		$('#editBasket').click(function(){
			$('.basketEdit').show();	
		});
		$('.basketEdit').click(function(){
			if(confirm('Are you sure want to delete?'))
			{
				var value = $(this).attr('id');
				var values = value.split('___');
				window.location = 'delete_session.php?del_name1='+values[0]+'&del_name2='+values[1]+'&redirectto=<?php echo base_url()?>orderone';				
			}
		});
	});
</script>

<?php include_once("includes/logo-design2/analytics.php"); ?>
</head>
<body>
<div class="wrapper">
<div class="header-container">
<?php include_once("includes/logo-design2/header.php"); ?>
</div>

<div class="main-container">

<div class="main col2-right-layout">

<div class="col-main-basket">
<div class="order-one">

<div align="center" style="margin:0 0 10px 0;">
<!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
<div id="ciz1K7" style="z-index:100;position:absolute"></div>
<div id="scz1K7" style="display:inline; text-align:center;"> </div>
<div id="sdz1K7" style="display:none; text-align:center;"></div>
<script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script>

<!-- END ProvideSupport.com Graphics Chat Button Code -->
 </div>
 <h1 style="line-height:60px; color:#00cc33; font-family:Arial, Helvetica, sans-serif;"><span class="text-20">Act Now. <span class="text-50">Save Big....</span></span></h1>
 <p class="text-bold"><span class="text-blue text-14">Special offer <span class="text-blue1 text-16"> open only to our customers</span></span></p>  
 
 <h1 class="text-blue">Our 1 month Offer Must End @<br />
<span class="text-red">Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span></h1> 

<p>Grow your business fast with the following offers to help you.</p>
<p>The good news is the offers below apply to the logo<br />
and any stationary parts you may have ordered<br />
-business cards, letterheads etc. </p>      
<form action="<?php echo site_url('logodesign2/ordertwomid');?>" method="post">
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
                <tr>

                  <td>
						<img src="<?php echo base_url()?>images/up-bar.jpg" width="538" height="18"/>
                      <table width="538" border="0" cellpadding="0" cellspacing="0" bgcolor="#F8FCE3">
						 <tr>

                          <td>&nbsp;</td>

                          <td width="372"><p>&nbsp;</p></td>

                          <td width="31" rowspan="4">&nbsp;</td>

                        </tr>
                        <tr>

                          <td width="39" rowspan="2"><label>

                            <div align="center">
							<input id="option99" name="option55" <?php if(@$_SESSION['option']==EXPRESS_DELIVERY){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> value='<?php echo EXPRESS_DELIVERY;?>' onclick="javascript:SelectAll_21('24 hours delivery','<?php echo EXPRESS_DELIVERY;?>','option55','1');" type="radio" /><input name="option55" type="radio" <?php if(@$_SESSION['option']==EXPRESS_DELIVERY){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?> id="option1" value='<?php echo EXPRESS_DELIVERY;?>' onclick="javascript:SelectAll_21('Thank you','0.00','option55','1');"  /><input name="option55" type="radio" style="display:none" id="optiona1" onclick="javascript:SelectAll_21('24 hours delivery','<?php echo EXPRESS_DELIVERY;?>','option55','1');" value='<?php echo EXPRESS_DELIVERY;?>' /><br /><strong><span id="tick1"><?php if(@$_SESSION['option']==EXPRESS_DELIVERY){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div>

                          </label></td>

                          <td width="372" bgcolor="#FFFFFF" class="text-blue" style="font-size:18px; font-weight:bold;"><strong>24 Hours Express Delivery. Was <img src="<?php echo base_url()?>images/prices/order1/cross/express-delivery-cross-<?php echo COUNTRY; ?>.gif" align="absbottom" /><br /> </strong><img src="<?php echo base_url()?>images/prices/order1/express-delivery-price-<?php echo COUNTRY; ?>.png" align="absbottom" />
                          <p>(All revisions given within  24 hours also).</p></td>

                        </tr>

                        <tr>

                          <td bgcolor="#FFFFFF" class="features">
                          <ul>
                          <li>Massively speeds up you getting your final logo! Usually
                            saves about 10 days.</li>
                          <li>Receive your logo order guaranteed within 24 hours, instead of 3 days.</li>
                          <li>All revisions given within 24 hours also!</li>
                          <li>full set of concepts are given within 24 hours!</li>
                          <li>This includes your complete order if you have ordered any stationary designs(business cards, letterheads, etc).</li>
                          <li>The quality is not affected; we simply prioritize your order!</li>
                          <li>Recommended for the ambitious business person who wishes to grow their business fast!</li>
                          <li>100% Risk Free, Money Back Guarantee. If you don&rsquo;t like your designs at anytime in the future, simply ask for a refund and get the logo design fees and the 24 hour express fee refunded in full. No questions.Totally risk-free!</li>
                          <li>Total Risk-Reversal.&nbsp; We take the risk!</li>
                          
                          <li></li>
                          <li></li>
                          </ul>
    
                            <div align="justify" style="padding:0 0 20px;"><font color="red">You can only win&hellip; as either  you get all your fees back and with free, inspiring logo ideas&hellip;&hellip;or you get a  final logo very quickly, with a great price to match!</font>
                            </div>
                          </td>

                        </tr>

                       

                      </table>
                      
                        <img src="<?php echo base_url()?>images/basket-image/low-bar.jpg" width="538" height="18"/>
                
                  <table width="538" border="0" cellpadding="o" cellspacing="0" bgcolor="#F8FCE3">
					    <tr>

                          <td>&nbsp;</td>

                          <td width="372"><p>&nbsp;</p></td>

                          <td width="31" rowspan="4">&nbsp;</td>

                        </tr>

                        <tr>

                          <td width="39" rowspan="2"><label>
<div align="center">
                            <input id="option2" name="option55" <?php if(@$_SESSION['option']==BLACK_N_WHITE){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> value='<?php echo BLACK_N_WHITE;?>' onclick="javascript:SelectAll_21('Black and white additional logo design file','<?php echo BLACK_N_WHITE;?>','option55','2');" type="radio" /><input name="option55" type="radio" <?php if(@$_SESSION['option']==BLACK_N_WHITE){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?> id="option12" value='<?php echo BLACK_N_WHITE;?>' onclick="javascript:SelectAll_21('Thank you','0.00','option55','2');"  /><input name="option55" type="radio" style="display:none" id="optiona2" onclick="javascript:SelectAll_21('Black and white additional logo design file','<?php echo BLACK_N_WHITE;?>','option55','2');" value='<?php echo BLACK_N_WHITE;?>' /><br /><strong><span id="tick2"><?php if(@$_SESSION['option']==BLACK_N_WHITE){?><img src="<?php echo base_url()?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div></label></td>
<td width="372" bgcolor="#FFFFFF" class="text-blue" style="font-size:18px; font-weight:bold;"><strong>Black + White Logo File. Was <img src="<?php echo base_url()?>images/prices/order1/cross/black-N-white-cross-<?php echo COUNTRY; ?>.gif" align="absbottom" /><br /> </strong><img src="<?php echo base_url()?>images/prices/order1/black-N-white-price-<?php echo COUNTRY; ?>.png" align="absbottom" />
                        </td>
    </tr>

                        <tr>

                          <td bgcolor="#FFFFFF" class="features">
                          <ul>
                          <li>Certainly necessary for any print requirements!</li>
                          <li>Certainly necessary for any fax requirements you make.</li>
                          <li>We will supply your final color logo with a black and white version so you have all the files you need for peace of mind.</li>
                          <li>Can massively save on any print costs in the lifetime of your business.</li>
                          <li>Recommended for the professional business person who wishes to own all color files to help with future print requirements. </li>
                          <li>100% Risk Free, Money Back Guarantee. If you do not find any use(although we certainly think you will), you can receive a full 100% money back guarantee at anytime (no time limit on when you can ask for your money back).</li>
                         
                          </ul>
                          
                           <p class="text-red">Total Risk-Reversal. We take the risk!</p>
                          <p class="text-red">You can only win&hellip; as  either you get all your fees back and with a free
                            look at your logo in black  and white&hellip;&hellip;or you get a final logo with a black and white file for  back-up for life, with a great price to match! </p>
                          
                          
                         </td>

                        </tr>

                       

                      </table>

                        <img src="<?php echo base_url()?>images/basket-image/low-bar.jpg" width="538" height="18"/>
                      <table width="538" border="0" cellpadding="0" cellspacing="0" bgcolor="#F8FCE3">
                        <tr>
                          <td bgcolor="#F8FCE3">
						  <div align="center">
                            <input id="option3" name="option55" value='<?php echo BOTH_SERVICES; ?>' <?php if(@$_SESSION['option']==BOTH_SERVICES){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_21('24 Hour Delivery and Black and White file ','<?php echo BOTH_SERVICES; ?>','option55','3');" type="radio" /><input name="option55" type="radio" <?php if(@$_SESSION['option']==BOTH_SERVICES){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?> id="option13" value='<?php echo BOTH_SERVICES; ?>' onclick="javascript:SelectAll_21('Thank you','0.00','option55','3');"  /><input name="option55" type="radio" style="display:none" id="optiona3" onclick="javascript:SelectAll_21('24 Hour Delivery and Black and White file ','<?php echo BOTH_SERVICES; ?>','option55','3');" value='<?php echo BOTH_SERVICES; ?>' /><br /><strong><span id="tick3"><?php if(@$_SESSION['option']==BOTH_SERVICES){?><img src="<?php echo base_url()?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div></td>
                          <td bgcolor="#F8FCE3"><div align="left" >
                              <label></label>
                              <font color="#000099" size="+2" face="Times New Roman, Times, serif">Order both the&nbsp;services above&nbsp;for<br/></font> <img src="<?php echo base_url()?>images/prices/order1/both-price-<?php echo COUNTRY; ?>.png" align="absbottom" /><br />
                                <h1 style="line-height:24px; color:#000000; font:normal Arial, Helvetica, sans-serif;"><span class="text-20">(Save additional <?php echo CURRENCY . Save_Additional; ?>)<br />SAVE 60% ..</span></h1></div></td>
                        </tr>
                        
                        
                      </table>
                        <img src="<?php echo base_url()?>images/basket-image/low-bar.jpg" width="538" height="18"/>
                        

                   </td>

                </tr>

              </table>
              
  <div align="center" class="orderone-btn-text"><h2 style="font:bold 18px/24px Verdana, Geneva, sans-serif"><span class="text-orange">Our 1 month Offer <span class="text-blue">Must End</span><br />
Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span> </h2>
<ul>
<li>Great value for money</li>
<li>Life time investment for your business</li>
</ul>
<p><span class="text-10 text-green">&quot; It was very exciting to get all my logos within 24 hours.<br />
The black and white file provided full peace of mind and certainly worked out well later. Thanks.&quot;</span>
</p>
<div>
<img src="<?php echo base_url(); ?>images/girl.gif" align="left" height="80" width="80" />
<p><span class="text-10"><br />Debra Doubek<br />

Managing Director<br />

3X Business Solutions</span></p>
</div>
<div align="center">
<input type='hidden' id='blackn24' name='blackn24' value='<?php echo @$_SESSION['blackn24'];?>' />
<input type='hidden' id='option' name='option' value='<?php echo @$_SESSION['option']; ?>' />
<a href="javascript: window.location='<?= site_url('order2')?>'"><img src="<?php echo base_url();?>images/back.jpg" style="display:inline;" align="absmiddle" /></a>
 <input name='submit' type='image' src='<?php echo base_url()?>images/pay_continue.jpg' align="middle" />
 </div>
<h2 style="font:bold 18px/24px Verdana, Geneva, sans-serif"><span class="text-orange">Our 1 month Offer <span class="text-blue">Must End</span><br />
Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span> </h2>
</div>
</form>             
</div>

</div>
<div class="side-bar" style="position:relative;">
<div id="floatdiv" style="width: 365px; position: absolute; right:0;"> 
            <table summary="ShoppingBasket" border="0" cellpadding="0" cellspacing="0" width="365">
              <tbody>
              <tr> 
                <td colspan="3" class="baskettopheader">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr> 
                      
                      <td class="shoppingheading" style="padding-top: 5px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!<div style="float:right"><!--<img src="<?php //echo base_url()?>images/basket-image/edit.gif" id="editBasket"/>--></div></td>
                    </tr>
                  </tbody></table></td>
              </tr>
              <tr> 
                <td class="basketlftbg" align="left" width="0"></td>
                <td width="365"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr> 
                      <td><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"></td>
                    </tr>
                    <tr> 
                      <td style="height: 0px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="98%">
                          <tbody><tr> 
                            <td rowspan="4" align="right" width="10"></td>
                            <td width="353" colspan="2" align="left" style="padding-right: 10px;"> 
                              <table id="tblFloat" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
	<tr>
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['package'];?></td>
		<td class="basketdesc" align="right" valign="top"></td>
		<td class="basketdesc" align="right" valign="top"><?= CURRENCY.@$_SESSION['price'];?></td>
	</tr>
	<?php if(@$_SESSION['brouchure']!='' && @$_SESSION['bhaucharpackage']!='')
	{
	?>
	<tr>
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['bhaucharpackage'];?></td>
		<td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="brouchure___bhaucharpackage___<?php// echo $_SESSION['brouchure']?>"/>--></td>
		<td class="basketdesc" align="right" valign="top"><?= CURRENCY.@$_SESSION['brouchure'];?></td>
	</tr>
	<?php
	}
	?>
	<?php if(@$_SESSION['web']!='' && @$_SESSION['webpackage']!='')
	{
	?>
	<tr>
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['webpackage'];?></td>
		<td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="web___webpackage___<?php //echo $_SESSION['web']?>"/>--></td>
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['web'];?></td>
	</tr>
    	<?php
	}
	?>
    <?php 
	if(@$_SESSION['option']!='' && @$_SESSION['blackn24']!='')
	{
	?>
		<tr id="removeopt">
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['blackn24'];?></td>
		<td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="option___blackn24___<?php //echo $_SESSION['option']?>"/>--></td>
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['option'];?></td>
	</tr>
	<?php
	}
	?>

    <?php 
	$total=0;	
	if(@$_SESSION['rowcoun']!='')
	{
	$row=@$_SESSION['rowcoun'];
		
	for($i=1;$i<$row-2;$i++)
	{		
		$opt='opt'.$i;
		$extraopt='extraopt'.$i;
		if(isset($_SESSION[$opt]) && isset($_SESSION[$extraopt]))
		{
			if($_SESSION[$opt]!='' && $_SESSION[$extraopt]!='')
			{
			
			$opta='opta'.$i.'a';
			
			$amount=$_SESSION[$opt];	
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
			
				
		?>     <tr id="<?php echo $opta;?>">
				<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION[$extraopt];?></td>
				<td class="basketdesc" align="right" valign="top" ><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="<?php //echo $extraopt.'___'.$opt.'___'.$amount?>"/>--></td>
				<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo $amount?></td>
			  </tr>
			  <?php
			$total=$total + $amount;
			}
		}
	}
	
	}
	
	?>
	
	</tbody></table>                            </td>
                          </tr>
                          <tr> 
                            <td align="left"> <table class="formtoptext" style="color: rgb(255, 255, 255); font-weight: bold; padding-top: 10px;" align="center" border="0" cellpadding="0" cellspacing="0" width="196">
                                
                                <tbody><tr> 
                                  <td style="width: 165px; height: 6px;" align="right">                                  </td>
                                  <td id="LblCurrencySign1" style="width: 40px; height: 6px;" align="right"></td>

                                  <td style="width: 17px; height: 6px;"><span id="LblShop"></span>                                  </td>
                                </tr>
                                <tr> 
                                  <td style="width: 165px; height: 5px;" align="right"> 
                                    <span id="LblTaxPercentage"></span>                                  </td>
                                  <td id="LblCurrencySign2" style="width: 40px; height: 5px;" align="right"></td>

                                  <td style="width: 17px; height: 5px;"><span id="LblTax"></span>                                  </td>
                                </tr>
                              </tbody></table></td>
                          </tr>
                        </tbody></table>                      </td>
                    </tr>
                    <tr> 
                      <td><img src="<?= base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"/></td>
                    </tr>
                </tbody></table></td>
                <td class="basketrgtbg" align="left" width="5"></td>
              </tr>
              <tr> 
                <td colspan="3" class="basketbg" align="center" height="8"></td>
              </tr>
              <tr> 
                <td colspan="3" class="basketbg2" align="right">
                <table style="display: none;" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody><tr> 
                      <td class="baskettax" align="center">Tax (15%)</td>
                      <td class="baskettax" align="left">$85.00</td>
                    </tr>
                    <tr> 
                      <td colspan="2" align="center" height="10"></td>
                    </tr>
                  </tbody></table></td>
              </tr>
              <tr> 
                <td colspan="3" class="basketbg2" align="center"> 
                <table border="0" cellpadding="0" cellspacing="0" width="330">
                    <tbody><tr> 
                      <td width="330" colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                    </tr>
                    <tr> 
                      <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"> 
                        <table width="345" border="0" cellpadding="0" cellspacing="0" class="formtoptext">
                          <tbody>
                            <tr align="right">
                              <td width="175" rowspan="2"align="left" style="width: 165px; padding-left: 10px;"> 
                                <span id="LblYouPayText" style="font-weight: bold;" class="totalpricetxt">Total </span></td>
                              <td width="14" rowspan="2" align="right">&nbsp;</td>
                              <td colspan="2" align="right"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value="<?php echo CURRENCY; ?>" type="text"/><input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 63px; " value="<?php echo $total + @$_SESSION['price'] + @$_SESSION['option'] + @$_SESSION['web'] + @$_SESSION['brouchure'];?>" type="text" /></td>
                            </tr>
							<tr align="right">
                              <td width="20" align="right" >&nbsp;</td> 
                            <td width="50" height="10" align="right" style="background-image:url(<?php echo base_url()?>images/basket-image/shoose.gif); background-repeat:no-repeat; background-position:right;background-position:top;">&nbsp;</td>
                            </tr>
                        </tbody></table></td>
                    </tr>
                    <tr> 
                      <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"></td>
                    </tr>
                  </tbody></table></td>
              </tr>
              <tr> 
                <td colspan="3" class="bgpic"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                  <tr>
                    <td width="62%" height="190" ><p style="text-decoration:blink; padding:0 0 0 15px;"><font face="Arial, Helvetica, sans-serif"  size="+0"><u><?php echo GUARANTEE_DAY; ?>-Day Unconditional Money Back Guarantee on All Fees Paid!</u></font></p>
                      <p style="padding:0 0 0 15px; color:#0000CC; font-weight:bold;">- No admin fees<br />
                        - No questions<br />
                        - Just email &ldquo;refund me&rdquo;<br />
                    <span style="color:#555">- The Best Guarantee in the<br>
                      &nbsp;&nbsp;Logo Industry </span>
                    </p>
                    </td>
                    <td width="38%" id="bgimg" align="left"><img src="<?= base_url()?>images/basket-image/photolia5.gif" /></td>
                  </tr>
                </table>                <p class="pad" style="text-decoration:blink;">&nbsp;</p>
                </td>
              </tr>
              <tr>
                <td colspan="3" >
                <p><img src="<?php echo base_url()?>images/basket-image/basket2.gif" alt="basket-bottom1" width="365" height="17"/></p></td>
              </tr>
    </tbody></table>
</div>
		
          <script src="<?php echo base_url()?>js/float1.js" type="text/javascript"></script> 
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