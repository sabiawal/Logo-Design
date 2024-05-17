
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Client Panel :: Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>css_client/import.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/clientpanel.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	
    <link href="<?php echo base_url();?>css/basket.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
	h2 {
    font: 16px/20px Arial,Helvetica,sans-serif !important;
}

.newprints h2
{
	font-weight: 700 !important;
margin: 15px 0px 10px !important;
font-size: 20px !important;
}

.newprints h1
{
	line-height:30px;
	margin-bottom:20px;
}

.correctfont
{font-size:15px !important;
line-height:25px !important;
padding-bottom:10px !important;
}
.col-main{
	padding:0 !important;
}
    </style>
<!--[if lt IE 8]>
<script src="http://www.logodesignguarantee.com/js/IE8.js"></script>
<![endif]-->

<script type="text/javascript">
$('.newbuttoncontinue').live('click',function(){
	//alert($("input[type='radio']:checked").length);
	if ($("input[type='radio']:checked").length < 1){
		alert('You need to tick at least one option!!!'); return false;
	}
});
function extraService(id,sesName1,sesValue1,sesName2,sesValue2) {
	//$('.basketEdit').hide();
	//$('.freshbasketEdit').hide();
	//alert(sesValue2); return false;
	var name = $('#'+id).attr('name');
	var extra = document.getElementById(id);
	//alert(extra);
	$('input[name|="'+name+'"]').each(function(index) {
		var select_id = $(this).attr('id');
		$('#'+select_id+'_tick').html('Select<br /> here');	
		if($(this).attr('id')!=id)
			$(this).val('');	
	});
	$('#b'+sesName1).remove();
	$('#'+sesName1+'_del').remove();
	if(extra.checked && !extra.value)
	{
		extra.checked = true;
		extra.value = sesValue1;
		var totalprice = sesValue1;
		if(id=='opt16')
		{
			totalprice = parseFloat($('#select1').val()) * parseFloat(totalprice);
		}
		if(id=='opt17')
		{
			totalprice = parseFloat($('#select2').val()) * parseFloat(totalprice);
		}
		if(id=='opt20')
		{
			totalprice = (parseFloat($('#select4').val()) * totalprice) + (parseFloat($('#select5').val()) * totalprice) + (parseFloat($('#select6').val()) * totalprice) + (parseFloat($('#select7').val()) * totalprice) + (parseFloat($('#select8').val()) * totalprice);
		}
		$('#form1').append('<input name="'+sesName2+'" type="hidden" value="'+sesValue2+'">');
		
		$('#'+id+'_tick').html('<img src="<?php echo base_url()?>images/basket-image/correct.gif" alt="check" title="check" />');
$('#tblFloat').append('<tr id="b'+sesName1+'"><td class="basketdesc" align="left" valign="top">'+sesValue2+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="freshbasketEdit" id="'+id+'___'+sesName1+'___'+sesValue1+'___'+sesName2+'___'+sesValue2+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+totalprice+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+totalprice+'"/></td></tr>');
	 	var	pagename = '<?php echo base_url();?>client_panel/add_session';				
	}
	else
	{
		extra.checked = false;
		extra.value = '';
		var	pagename = '<?php echo base_url();?>client_panel/delete_session';
	}
	addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2);	
	calculatePrice();
	if($('#reselect').html()=='<tbody></tbody>' || $('#reselect').html()=='')
		$('#forReselect').hide();
}
function addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2){
	var extra = '';
	if(id=='opt16')
		extra = '&select='+$('#select1').val();
	if(id=='opt17')
		extra = '&select2='+$('#select2').val()+'&select3='+$('#select3').val();
	if(id=='opt20')
		extra = '&select4='+$('#select4').val()+'&select5='+$('#select5').val()+'&select6='+$('#select6').val()+'&select7='+$('#select7').val()+'&select8='+$('#select8').val();
	$.ajax({
		  type: "POST",
		  url: pagename,
		  data: "id="+id+"&sesName1="+sesName1+"&sesValue1="+sesValue1+"&sesName2="+sesName2+"&sesValue2="+sesValue2+extra,
		  success: function(msg){
				//alert(msg);
		  }						
	});	
}
function calculatePrice() {
	var totalPrice = 0;
	$('.pricewala').each(function(i){
		totalPrice += parseFloat($(this).val());							  
	});
	//$('#LblYouPay').val(totalPrice);	  // comment for package discount
	// added For package discount
	//alert(totalPrice);
	var firstSelPackage = parseFloat($('#firstSelPackage').val());
	var totalAmount = totalPrice;
		var packageDiscountPer = 0;
		var packageDiscount = 0;
		var netTotal = totalAmount;
		$('#subtotalamount').show();		
	
	$('#subtotalamount').text(totalAmount.toFixed(2));
	$('#packageDiscountPer').text(packageDiscountPer);
    $('#purchase_discount_rate').val(packageDiscountPer);
	$('#packageDiscountAmount').text(packageDiscount.toFixed(2));
	$('#LblYouPayAmount').text(totalAmount.toFixed(2));
	$('#LblYouPayAmount1').val(totalAmount.toFixed(2));
	$('#LblYouPay').val(netTotal.toFixed(2));
	// End for package discount	
	$('.basketEdit').fadeOut();
	$('.freshbasketEdit').fadeOut();
}
	$(document).ready(function(){		
		$('.basketEdit').hide();
		$('.freshbasketEdit').hide();	
		$('#editBasket').live('click',function(){
			$('.basketEdit').fadeToggle();
			$('.freshbasketEdit').fadeToggle();	
		});
		$('.basketEdit').live('click',function(){
			var mainThis = $(this);
			$( "#dialog-confirm" ).dialog({
				resizable: false,
				height:140,
				modal: true,
				autoOpen: false,
				buttons: {
					NO: function() {
						$( this ).dialog( "close" );
					},
					"Yes": function() {
						var value = mainThis.attr('id');
						var values = value.split('___');
						var	pagename = '<?php echo base_url();?>client_panel/delete_session.php';
						addRemoveSession(pagename,values[0],values[1],values[2],values[3],values[4]);
						$('#b'+values[1]).remove();
						$('#'+values[1]+'_del').remove();	
						var add = '<tr id="'+values[1]+'_del"><td valign="top" align="left" class="basketdesc">'+values[4]+'</td><td valign="top" align="right" class="basketdesc"><img id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" class="basketEdit_reselect" src="images/basket-image/select.gif" alt="'+values[4]+'" title="'+values[4]+'"></td><td valign="top" align="right" class="basketdesc">'+currency+values[2]+'<input type="hidden" name="deletedServices['+values[1]+']" value="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" ></td></tr>';						
						$('#reselect').append(add);						
						$('#forReselect').show();
						calculatePrice();
						//End reselect
						$( this ).dialog( "close" );
					}
				}	
			});
			$( "#dialog-confirm" ).dialog({ title: 'Logo Design Guarantee' });			
			$( "#dialog-confirm" ).dialog( "open" );
			$('.ui-dialog-buttonset button:first-child span').css('font-size','16px');						
		});
		$('.freshbasketEdit').live('click',function(){
			var mainThis = $(this);
			$( "#dialog-confirm" ).dialog({
				resizable: false,
				height:140,
				modal: true,
				autoOpen: false,
				buttons: {
					NO: function() {
						$( this ).dialog( "close" );
					},
					"Yes": function() {
						var value = mainThis.attr('id');
						var values = value.split('___');				
						extraService(values[0],values[1],values[2],values[3],values[4]);
						//For reselect
						// Added later for select box
						var totalprice = values[2];
						if(values[1]=='opt16')
						{
							totalprice = parseFloat($('#select1').val()) * parseFloat(totalprice);
						}
						if(values[1]=='opt17')
						{
							totalprice = parseFloat($('#select2').val()) * parseFloat(totalprice);
						}
						if(values[1]=='opt20')
						{
							totalprice = (parseFloat($('#select4').val()) * totalprice) + (parseFloat($('#select5').val()) * totalprice) + (parseFloat($('#select6').val()) * totalprice) + (parseFloat($('#select7').val()) * totalprice) + (parseFloat($('#select8').val()) * totalprice);
						}
						var add = '<tr id="'+values[1]+'_del"><td valign="top" align="left" class="basketdesc">'+values[4]+'</td><td valign="top" align="right" class="basketdesc"><img id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[3]+'" class="basketEdit_reselect" src="images/basket-image/select.gif" alt="'+values[4]+'" title="'+values[4]+'"></td><td valign="top" align="right" class="basketdesc">'+currency+totalprice+'<input type="hidden" name="deletedServices['+values[1]+']" value="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" ></td></tr>';						
						$('#reselect').append(add);						
						$('#forReselect').show();
						//End reselect
						$( this ).dialog( "close" );
					}					
				}	
			});
			$( "#dialog-confirm" ).dialog({ title: 'Logo Design Guarantee' });			
			$( "#dialog-confirm" ).dialog( "open" );
			$('.ui-dialog-buttonset button:first-child span').css('font-size','16px');
			/*$('.ui-dialog-buttonset button:first-child span').css('padding-left','80px');
			$('.ui-dialog-buttonset button:first-child span').css('padding-right','80px');*/
		});
		$('.basketEdit_reselect').live('click',function(){
			//$('.basketEdit').hide();
			//$('.freshbasketEdit').hide();
			var value = $(this).attr('id');
			var values = value.split('___');
			if(document.getElementById(values[0]))
			{				
				document.getElementById(values[0]).click();
			}
			else
			{
				$('#tblFloat').append('<tr id="b'+values[1]+'"><td class="basketdesc" align="left" valign="top">'+values[4]+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+values[2]+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+values[2]+'"/></td></tr>');
	 			var	pagename = 'add_session.php';		
				addRemoveSession(pagename,values[0],values[1],values[2],values[3],values[4]);	
				calculatePrice();
			}
			if(document.getElementById(values[1]+'_del'))
			{
				$('#'+values[1]+'_del').remove();
			}
			if($('#reselect').html()=='<tbody></tbody>' || $('#reselect').html()=='')
				$('#forReselect').hide();				
		});
		if($('#reselect').html()=='<tbody></tbody>' || $('#reselect').html()=='')
			$('#forReselect').hide();
	});
</script>

</head>
<body >
<div class="wrapper">
<!--<span id="LblYouPayAmount"></span>-->
<?php include_once("includes/client/header.php"); ?>
<?php include_once("includes/client/top_container.php"); ?>        
    
<div class="main-container">
<div class="main col2-right-layout box-shadow">
<form action="<?php echo base_url();?>client_panel/printing_1" method="post" name="form1" id="form1">
<input type="hidden" id="LblYouPayAmount1" value="" />
<!--<img src="<?php echo base_url();?>images/client/discount.jpg" style="margin-bottom:20px;" />-->
<!--<img src="<?php echo base_url();?>images/50print.jpg" />-->
<div class="col-main">
<div class="pages newprints ">
   <table cellpadding="0" cellspacing="0" border="0" width="700">
              <tbody><tr>
                <td valign="top" width="520"><table cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" width="700">
                    <tbody><tr>
                    </tr>
                  </tbody></table>
                  <table style="margin-top:20px; padding-top:40px;" cellpadding="5" cellspacing="0" align="center" bgcolor="#F8FCE3" border="0" height="50" width="700">
                    <tbody><tr>
<!--                      <td class="get-print" width="70">&nbsp;</td>-->
                      <td class="get-print" height="50" width="364">Get your prints now to enjoy the additional <span style="color:#DB1A77">15% discount!</span></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="150" width="700">
                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon12.png" style="padding-top:5px;"></td>
                      <td style="font-size:18px; font-weight:bold; color:#FF0000; " height="25" width="364"><h1 style="clear:both; color:#03235C; padding:5px; margin:0px;">Order business card prints now</h1></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td><div align="center">
                          <input id="opt12" name="opta12" type="radio" value="<?php if(@$_SESSION['opt12']==BUSINESS_CARD_PRINT_250) echo BUSINESS_CARD_PRINT_250;?>" onclick="extraService('opt12','opt12','<?php echo BUSINESS_CARD_PRINT_250?>','extraopt12','250 business cards (matt) including free delivery')" <?php if(@$_SESSION['extraopt12']=='250 business cards (matt) including free delivery')?>/>
                          <br>
                          <strong><span id="opt12_tick">
                         <!--Select<br />
                          here-->
                                                    </span></strong> </div></td>
                      <td><h2 style="color:#393;">250 business cards (matt) <u>including</u> free  delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(BUSINESS_CARD_PRINT_250*2); ?></del></span> Now only <strong><?= CURRENCY.(BUSINESS_CARD_PRINT_250); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt121" name="opta12" type="radio" value="<?php if(@$_SESSION['opt12']==BUSINESS_CARD_PRINT_500) echo BUSINESS_CARD_PRINT_500;?>" onclick="extraService('opt121','opt12','<?php echo BUSINESS_CARD_PRINT_500?>','extraopt12','500 business cards (matt) including free delivery')" <?php if(@$_SESSION['extraopt12']=='500 business cards (matt) including free delivery') ?>/>
                          <br />
                          <strong><span id="opt121_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56" ><h2 style="color:#393;">500  business cards (matt) <u>including</u> free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(BUSINESS_CARD_PRINT_500*2); ?></del></span> Now only <strong><?= CURRENCY.(BUSINESS_CARD_PRINT_500); ?></strong></h2></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="150" width="700">

                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon13.png" style="padding-top:5px;"></td>
                      <td style="font-size:18px; font-weight:bold; color:#0033CC" height="25" width="364"><h1 style="clear:both; color:#03235C; padding:5px; margin:0px;">Order letterhead prints now</h1></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td ><div align="center">
                          <input id="opt131" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_25) echo LETTER_HEAD_PRINT_25;?>" onclick="extraService('opt131','opt13','<?php echo LETTER_HEAD_PRINT_25?>','extraopt13','25 letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='25 letterheads including free delivery') ?>/>
                          <br />
                          <strong><span id="opt131_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td ><h2 style="color:#393;">25  letterheads including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(LETTER_HEAD_PRINT_25*2); ?></del></span> Now only <strong><?= CURRENCY.(LETTER_HEAD_PRINT_25); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt132" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_250) echo LETTER_HEAD_PRINT_250;?>" onclick="extraService('opt132','opt13','<?php echo LETTER_HEAD_PRINT_250?>','extraopt13','250 letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='250 letterheads including free delivery') ?>/>
                          <br />
                          <strong><span id="opt132_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56" ><h2 style="color:#393;">250 letterheads including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(LETTER_HEAD_PRINT_250*2); ?></del></span> Now only <strong><?= CURRENCY.(LETTER_HEAD_PRINT_250); ?></strong> (60% OFF)</h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt133" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_1000) echo LETTER_HEAD_PRINT_1000;?>" onclick="extraService('opt133','opt13','<?php echo LETTER_HEAD_PRINT_1000?>','extraopt13','1000  letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='1000  letterheads including free delivery') ?>/>
                          <br />
                          <strong><span id="opt133_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56"><h2 style="color:#393;">1000  letterheads including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(LETTER_HEAD_PRINT_1000*2); ?></del></span> Now only <strong><?= CURRENCY.(LETTER_HEAD_PRINT_1000); ?></strong></h2></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="150" width="700">
                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon14.png" style="padding-top:5px;"></td>
                      <td style="font-size:18px; font-weight:bold; color:#0033CC" height="25" width="364"><h1 style="clear:both; color:#03235C; padding:5px; margin:0px;">Order envelope design prints now</h1></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td><div align="center">
                          <input id="opt141" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_100) echo ENVELOPE_DESIGN_PRINT_100;?>" onclick="extraService('opt141','opt14','<?php echo ENVELOPE_DESIGN_PRINT_100?>','extraopt14','100 envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='100 envelopes including free delivery') ?>/>
                          <br />
                          <strong><span id="opt141_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td><h2 style="color:#393;"> 100  envelopes including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_100*2); ?></del></span> Now only <strong><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_100); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt142" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_250) echo ENVELOPE_DESIGN_PRINT_250;?>" onclick="extraService('opt142','opt14','<?php echo ENVELOPE_DESIGN_PRINT_250?>','extraopt14','250  envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='250  envelopes including free delivery') ?>/>
                          <br />
                          <strong><span id="opt142_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56"><h2 style="color:#393;">250  envelopes including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_250*2); ?></del></span> Now only <strong><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_250); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt143" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_1000) echo ENVELOPE_DESIGN_PRINT_1000;?>" onclick="extraService('opt143','opt14','<?php echo ENVELOPE_DESIGN_PRINT_1000?>','extraopt14','1000 envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='1000 envelopes including free delivery') ?>/>
                          <br />
                          <strong><span id="opt143_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56"><h2 style="color:#393;">1000  envelopes including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_1000*2); ?></del></span> Now only <strong><?= CURRENCY.(ENVELOPE_DESIGN_PRINT_1000); ?></strong></h2></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="150" width="700">
                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon15.png" style="padding-top:5px;"></td>
                      <td style="font-size:18px; font-weight:bold; color:#0033CC" height="25" width="364"><h1 style="clear:both; color:#03235C; padding:5px; margin:0px;">Order compliment slip prints now</h1></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td><div align="center">
                          <input id="opt151" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_100) echo COMPLIMENT_SLIP_PRINT_100;?>" onclick="extraService('opt151','opt15','<?php echo COMPLIMENT_SLIP_PRINT_100?>','extraopt15','100 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='100 compliment slips including free delivery') ?>/>
                          <br />
                          <strong><span id="opt151_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td><h2 style="color:#393;">100  compliment slips including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_100*2); ?></del></span> Now only <strong><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_100); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt152" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_250) echo COMPLIMENT_SLIP_PRINT_250;?>" onclick="extraService('opt152','opt15','<?php echo COMPLIMENT_SLIP_PRINT_250?>','extraopt15','250 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='250 compliment slips including free delivery') ?>/>
                          <br />
                          <strong><span id="opt152_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56"><h2 style="color:#393;">250  compliment slips including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_250*2); ?></del></span> Now only <strong><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_250); ?></strong></h2></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt153" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_1000) echo COMPLIMENT_SLIP_PRINT_1000;?>" onclick="extraService('opt153','opt15','<?php echo COMPLIMENT_SLIP_PRINT_1000?>','extraopt15','1000 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='1000 compliment slips including free delivery') ?>/>
                          <br />
                          <strong><span id="opt153_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="56"><h2 style="color:#393;">1000  compliment slips including free delivery</h2>
                        <h2  style="clear:both;"><span style="color:#f00;"><del><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_1000*2); ?></del></span> Now only <strong><?= CURRENCY.(COMPLIMENT_SLIP_PRINT_1000); ?></strong></h2></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="100" width="700">
                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon16.png" style="padding-top:5px;"></td>
                      <td  align="left" width="364" height="38" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><h2 class="para">Order a Mouse Mat with your personal logo on</h2>
                        <h2 style="clear:both;">(free delivery)! <span style="color:#f00;"><del><?= CURRENCY.(MOUSE_MAT_WITH_LOGO*2); ?></del></span>. Now only <strong><?= CURRENCY.(MOUSE_MAT_WITH_LOGO); ?></strong> Each.</h2></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="15">
                      <td rowspan="2"><div align="center">
                          <input id="opt16" name="opta16" type="radio" value="<?php if(@$_SESSION['opt16']==MOUSE_MAT_WITH_LOGO) echo MOUSE_MAT_WITH_LOGO;?>" onclick="extraService('opt16','opt16','<?php echo MOUSE_MAT_WITH_LOGO?>','extraopt16','Order a Mouse Mat with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt16']=='Order a Mouse Mat with your personal logo on (free delivery)!') ?>/>
                          <br />
                          <strong><span id="opt16_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td height="50" valign="bottom" style="padding-top:10px;" ><p><span class="correctfont">Be  motivated to grow your business. Motivate you and/or your staff!</span></p></td>
                    </tr>
                    <tr>
                      <td height="30" ><table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td colspan="2"><p><span class="correctfont">Quantity:&nbsp;</span></p></td>
                            <td width="68"><p>
                                <select name="select1" id="select1" onchange="javascript:$('#opt16').click();$('#opt16').click();">
                                  <option <?php if(@$_SESSION['select']=='1'){?> selected="selected" <?php }?> value="1">1 </option>
                                  <option <?php if(@$_SESSION['select']=='2'){?> selected="selected" <?php }?>value="2">2 </option>
                                  <option <?php if(@$_SESSION['select']=='3'){?> selected="selected" <?php }?>value="3">3 </option>
                                  <option <?php if(@$_SESSION['select']=='4'){?> selected="selected" <?php }?>value="4">4 </option>
                                  <option <?php if(@$_SESSION['select']=='5'){?> selected="selected" <?php }?>value="5">5 </option>
                                  <option <?php if(@$_SESSION['select']=='10'){?> selected="selected" <?php }?>value="10">10 </option>
                                  <option <?php if(@$_SESSION['select']=='20'){?> selected="selected" <?php }?>value="20">20 </option>
                                  <option <?php if(@$_SESSION['select']=='50'){?> selected="selected" <?php }?>value="50">50 </option>
                                  <option <?php if(@$_SESSION['select']=='100'){?> selected="selected" <?php }?>value="100">100 </option>
                                  <option <?php if(@$_SESSION['select']=='200'){?> selected="selected" <?php }?>value="200">200 </option>
                                </select>
                              </p></td>
                          </tr>
                        </table></td>
                    </tr>
                  </tbody></table>
                  <table class="new-tr" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" border="0" height="100" width="700">
                    <tbody><tr>
                      <td align="center" width="70"><img src="<?php echo base_url();?>images/order-process/logo-package-icon17.png" style="padding-top:5px;"></td>
                      <td  align="left" width="364" height="38" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><h2 class="para">Order a custom CAP with your personal logo on</h2>
                        <h2 style="clear:both;">(free delivery)! <span style="color:#f00;"><del><?= CURRENCY.(CAP_WITH_LOGO*2); ?></del></span>. Now only <strong><?= CURRENCY.(CAP_WITH_LOGO); ?></strong> Each.</h2></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="15">
                      <td rowspan="2"><div align="center">
                          <input id="opt17" name="opta17" type="radio" value="<?php if(@$_SESSION['opt17']==CAP_WITH_LOGO) echo CAP_WITH_LOGO;?>" onclick="extraService('opt17','opt17','<?php echo CAP_WITH_LOGO?>','extraopt17','Order a <u>custom CAP</u> with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt17']=='Order a <u>custom CAP</u> with your personal logo on (free delivery)!') ?>/>
                          <br />
                          <strong><span id="opt17_tick">
                         <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td  valign="bottom" style="padding-top:10px;"><p><span class="correctfont">Look dead professional! </span></p></td>
                    </tr>
                    <tr>
                      <td height="50" ><p>Quantity:&nbsp;
                          <select name="select2" id="select2" onchange="javascript:$('#opt17').click();$('#opt17').click();">
                            <?php for($i=1;$i<=50;$i++){
                            ?>
                            <option <?php if(@$_SESSION['select2']==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php }?>
                          </select>
                        </p>
                        <table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td colspan="2"><p><span class="correctfont">Colour  Options:&nbsp;</span></p></td>
                            <td><p>
                                <select name="select3" id="select3" onchange="javascript:$('#opt17').click();$('#opt17').click();">
                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - White'){?> selected="selected" <?php }?> value="Cap Colour - White">Cap Colour - White </option>
                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - Black'){?> selected="selected" <?php }?>value="Cap Colour - Black">Cap Colour - Black </option>
                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - Blue'){?> selected="selected" <?php }?>value="Cap Colour - Blue">Cap Colour - Blue </option>
                                </select>
                              </p></td>
                          </tr>
                        </table></td>
                    </tr>
                  </tbody></table>
                  <table width="700" height="100" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" class="new-tr">
                    <tr>
                      <td width="70" align="center"><img src="<?php echo base_url(); ?>images/ordertwo-images/pen-offer.png" style="padding-top:5px;"/></td>
                      <td  align="left" width="364" height="38" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><h2 class="para">Order pens with your personal logo on</h2>
                        <h2 style="clear:both;">(free delivery)! <span style="color:#f00;"><del><?= CURRENCY.(PEN_WITH_LOGO*2); ?></del></span>. Now only <strong><?= CURRENCY.(PEN_WITH_LOGO); ?></strong> Each.</h2></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                          <input id="opt18" name="opta18" type="radio" value="<?php if(@$_SESSION['opt18']==PEN_WITH_LOGO) echo PEN_WITH_LOGO;?>" onclick="extraService('opt18','opt18','<?php echo PEN_WITH_LOGO?>','extraopt18','Order <u>pens </u>with  your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt18']=='Order <u>pens </u>with  your personal logo on (free delivery)!') ?>/>
                          <br />
                          <strong><span id="opt18_tick">
                          <!--Select<br />
                          here-->
                          </span></strong></div></td>
                      <td  valign="bottom"><p><span class="correctfont">5 quality black ink pens with stylish  hand grip.</span></p></td>
                    </tr>
                  </table>
                  <table width="700" height="100" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" class="new-tr">
                    <tr>
                      <td width="70" align="center"><img src="<?php echo base_url(); ?>images/ordertwo-images/bag-offer.png" style="padding-top:5px;"/></td>
                      <td  align="left" width="364" height="38" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><h2 class="para">Order a cotton carrier bag with your personal logo on</h2>
                        <h2 style="clear:both;">(free delivery)! <span style="color:#f00;"><del><?= CURRENCY.(BAG_WITH_LOGO*2); ?></del></span>. Now only <strong><?= CURRENCY.(BAG_WITH_LOGO); ?></strong> Each.</h2></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td><div align="center">
                          <input id="opt19" name="opta19" type="radio" value="<?php if(@$_SESSION['opt19']==BAG_WITH_LOGO) echo BAG_WITH_LOGO;?>" onclick="extraService('opt19','opt19','<?php echo BAG_WITH_LOGO?>','extraopt19','Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt19']=='Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!') ?>/>
                          <br />
                          <strong><span id="opt19_tick">
                          <!--Select<br />
                          here-->
                          </span></strong></div></td>
                      <td  valign="bottom"><p align="left"></p>
                        <p align="left"><span class="correctfont">A great way to promote your business, or a useful  accessory for 
                          personal use. Made from 100% natural 8 oz. (272 g/m2)  cotton canvas</span><span class="correctfont">&ndash;great for the environment.  Approximate size of a supermarket bag.</span> </p></td>
                    </tr>
                  </table>
                  <table width="700" height="100" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3" class="new-tr">
                    <tr>
                      <td width="70" align="center"><img src="<?php echo base_url(); ?>images/ordertwo-images/tshirt-offer.png" style="padding-top:5px;"/></td>
                      <td  align="left" width="364" height="38" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><h2 class="para">Order a T-shirt with your personal logo on</h2>
                        <h2 style="clear:both;">(free delivery)! <span style="color:#f00;"><del><?= CURRENCY.(TSHIRT_WITH_LOGO*2); ?></del></span>. Now only <strong><?= CURRENCY.(TSHIRT_WITH_LOGO); ?></strong> Each.</h2></td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="hr"></div></td>
                    </tr>
                    <tr height="30">
                      <td rowspan="2"><div align="center">
                          <input id="opt20" name="opta20" type="radio" value="<?php if(@$_SESSION['opt20']==TSHIRT_WITH_LOGO) echo TSHIRT_WITH_LOGO;?>" onclick="extraService('opt20','opt20','<?php echo TSHIRT_WITH_LOGO?>','extraopt20','Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!')" <?php if(@$_SESSION['extraopt20']=='Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!') ?>/>
                          <br />
                          <strong><span id="opt20_tick">
                          <!--Select<br />
                          here-->
                          </span></strong> </div></td>
                      <td  valign="bottom"><p align="left"></p>
                        <p><span class="correctfont">Impress friends and family! Order here a  100% cotton <br />
                          white T-shirt with your logo centralised  large on the front.</span> </p></td>
                    </tr>
                    <tr>
                      <td height="56"><table border="0" cellpadding="0">
                          <tr>
                            <td><p><span class="correctfont">Size:</span></p></td>
                            <td><p><span class="correctfont">Quantity:</span></p></td>
                          </tr>
                          <tr>
                            <td><p><span class="correctfont">S</span></p></td>
                            <td><p>
                                <select name="select4" id="select4" onchange="javascript:$('#opt20').click();$('#opt20').click();" >
                                  <?php 
								  if(!$_SESSION['select4'])
								  	$selvalue = 1;
								else
									$selvalue = @$_SESSION['select4'];
								  for($i=0;$i<=50;$i++){
                            ?>
                                  <option <?php if($selvalue==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                                </select>
                              </p></td>
                          </tr>
                          <tr>
                            <td><p><span class="correctfont">M</span></p></td>
                            <td><p>
                                <select name="select5" id="select5" onchange="javascript:$('#opt20').click();$('#opt20').click();" >
                                  <?php  if(!$_SESSION['select5'])
								  	$selvalue = 1;
								else
									$selvalue = @$_SESSION['select5'];
									for($i=0;$i<=50;$i++){
                            ?>
                                  <option <?php if($selvalue==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                                </select>
                              </p></td>
                          </tr>
                          <tr>
                            <td><p><span class="correctfont">L</span></p></td>
                            <td><p>
                                <select name="select6" id="select6" onchange="javascript:$('#opt20').click();$('#opt20').click();" >
                                  <?php  if(!$_SESSION['select6'])
								  	$selvalue = 1;
								else
									$selvalue = @$_SESSION['select6'];
									for($i=0;$i<=50;$i++){
                            ?>
                                  <option <?php if($selvalue==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                                </select>
                              </p></td>
                          </tr>
                          <tr>
                            <td><p><span class="correctfont">XL</span></p></td>
                            <td><p>
                                <select name="select7" id="select7" onchange="javascript:$('#opt20').click();$('#opt20').click();" >
                                  <?php 
								   if(!$_SESSION['select7'])
								  	$selvalue = 1;
								else
									$selvalue = @$_SESSION['select7'];
									for($i=0;$i<=50;$i++){
                            ?>
                                  <option <?php if($selvalue==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                                </select>
                              </p></td>
                          </tr>
                          <tr>
                            <td><p><span class="correctfont">XXL</span></p></td>
                            <td><p>
                                <select name="select8" id="select8" onchange="javascript:$('#opt20').click();$('#opt20').click();" >
                                  <?php  if(!$_SESSION['select8'])
								  	$selvalue = 1;
								else
									$selvalue = @$_SESSION['select8'];
									for($i=0;$i<=50;$i++){
                            ?>
                                  <option <?php if($selvalue==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php }?>
                                </select>
                              </p></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <br>
                  <div align="center"> 
                    <input name="rowcoun" id="rowcoun" value="23" type="hidden">                    
                    <input class="newbuttoncontinue" value="Continue" align="middle" type="submit">
                  </div></td>
                <td valign="top" width="249"><br></td>
              </tr>
            </tbody></table>
    
</div>
    

</div>
<div id="floatdiv" style="width: 365px; position: absolute; height: auto;margin-left: 341px; display:none;"> 
            <style type="text/css">
.buy-more-container {
	margin: 7px 0 0 4px;
}
.buy-more-container p {
	padding: 0px;
}
.buy-more-repeat {
	background: #fff454;
	width: 356px;
}
.buy-more-top {
 	background: url(<?php echo base_url();?>/images/buy-more-top-bg.jpg) no-repeat left top;
	width: 356px;
}
.buy-more-bottom {
 	background: url(<?php echo base_url();?>/images/buy-more-bottom-bg.jpg) no-repeat left bottom;
	width: 314px;
	padding: 10px 21px 3px 21px;
}
.save-more {
}
.save-offer {
 	background: url(<?php echo base_url();?>/images/offer-bg-repeat.gif) repeat-y 0 0;
	width: 307px;
	margin: 3px 0 0 3px;
}
.save-offerr ul {
}
.save-offer ul li {
	color: #ffffff;
	font: normal 16px/25px Arial, Helvetica, sans-serif;
	border-top: 1px solid #dadada;
}
.save-offer ul li:first-child {
	border-top: none;
}
</style>            
            <!-- Ends Buy More -->
            <table summary="ShoppingBasket" border="0" cellpadding="0" cellspacing="0" width="365">
              <tbody>
                <tr>
                  <td colspan="3" class="baskettopheader"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td class="shoppingheading" style="padding-top: 5px;font-size:15px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!
                            <div style="float:right"><img src="<?php echo base_url()?>images/basket-image/edit.gif" id="editBasket"/></div></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td class="basketlftbg" align="left" width="0"></td>
                  <td width="365"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"></td>
                        </tr>
                        <tr>
                          <td style="height: 0px;"><table border="0" cellpadding="0" cellspacing="0" width="98%">
                              <tbody>
                                <tr>
                                  <td rowspan="4" align="right" width="10"></td>
                                  <td width="353" colspan="2" align="left" style="padding-right: 10px;"><table id="tblFloat" border="0" cellpadding="0" cellspacing="0" width="100%">
                                      
                                    </table></td>
                                </tr>
                                <tr>
                                  <td align="left"><table class="formtoptext" style="color: rgb(255, 255, 255); font-weight: bold; padding-top: 10px;" align="center" border="0" cellpadding="0" cellspacing="0" width="196">
                                      <tbody>
                                        <tr>
                                          <td style="width: 165px; height: 6px;" align="right"></td>
                                          <td id="LblCurrencySign1" style="width: 40px; height: 6px;" align="right"></td>
                                          <td style="width: 17px; height: 6px;"><span id="LblShop"></span></td>
                                        </tr>
                                        <tr>
                                          <td style="width: 165px; height: 5px;" align="right"><span id="LblTaxPercentage"></span></td>
                                          <td id="LblCurrencySign2" style="width: 40px; height: 5px;" align="right"></td>
                                          <td style="width: 17px; height: 5px;"><span id="LblTax"></span></td>
                                        </tr>
                                      </tbody>
                                    </table></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                        <tr>
                          <td><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"/></td>
                        </tr>
                      </tbody>
                    </table></td>
                  <td class="basketrgtbg" align="left" width="5"></td>
                </tr>
                <tr>
                  <td colspan="3" class="basketbg" align="center" height="8"></td>
                </tr>
                <tr>
                  <td colspan="3" class="basketbg2" align="right"><table style="display: none;" border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td class="baskettax" align="center">Tax (15%)</td>
                          <td class="baskettax" align="left">$85.00</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center" height="10"></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td colspan="3" class="basketbg2" align="center"><?php 
							$totalAmount = $total + @$_SESSION['price'] + @$_SESSION['option'] + @$_SESSION['web'] + @$_SESSION['brouchure'];
							if($totalAmount > $discountVal1)
							{
								if($totalAmount >= $discountVal3)
									$packageDiscountPer = $discountPer3;
								else if($totalAmount >= $discountVal2)
									$packageDiscountPer = $discountPer2;
								else if($totalAmount >= $discountVal1)
									$packageDiscountPer = $discountPer1;
								else
									$packageDiscountPer = 0;
								$packageDiscount = ($totalAmount * $packageDiscountPer)/100;
								$netTotal = $totalAmount - $packageDiscount;
								$display = '';									
							}
							else
							{
								$packageDiscountPer = 0;
								$netTotal = $totalAmount;
								$display = 'none';
								$packageDiscount = 0;
							}
						?>
                    <table border="0" cellpadding="0" cellspacing="0" width="330">
                      <tbody>
                        <tr>
                          <td width="330" colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                        </tr>
                        <tr>
                          <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"><table width="345" border="0" cellpadding="0" cellspacing="0" class="formtoptext">
                              <tbody>
                                <tr id="subtotal" class="packageDiscount" style="display:<?php echo $display?>">
                                  <td valign="top" align="left" style="padding-left:10px;" class="basketdesc"><strong>Total</strong></td>
                                  <td valign="top" align="right" class="basketdesc"></td>
                                  <td valign="top" align="right" style="padding-right:10px;" class="basketdesc" colspan="2"><strong><?php echo CURRENCY?><span id="subtotalamount"><?php echo number_format($totalAmount,2,".","")?></span></strong></td>
                                </tr>                                
                              </tbody>
                            </table></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="2"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
                <tr>
                  <td colspan="3" ><p><img src="<?php echo base_url()?>images/basket-image/basket2.gif" alt="basket-bottom1" width="365" height="17"/></p></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--<script src="<?php echo base_url()?>js/float2.js" type="text/javascript"></script> -->
<div class="side-bar">
    <?php include("includes/client/sidebar-1.php"); ?>
    <div class="security" align="center">
    <?php if(COUNTRY == 'UK' ){ ?>
    <!-- START SCANALERT CODE FOR LDG.CO.UK -->
    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
    <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
    <?php } elseif( COUNTRY == 'USA') { ?>
    <!-- START SCANALERT CODE FOR LDG.COM -->
    <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
    <!-- END SCANALERT CODE LDG.COM  -->
    <?php } ?>
    
    </div>
    <?php include("includes/client/sidebar-2.php"); ?>
    </div>
    <div class="clear"></div>
    </div>    
    </div>
<div class="footer-container">
    <div class="footer">
    <?php 
      include('includes/client/footer.php');
      include('includes/client/seal-top.php');
      include('includes/client/footer-menu.php');
    ?>
    </div>
</div>
</div>
</body>
</html>