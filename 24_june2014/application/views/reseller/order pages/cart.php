<?php
/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/
$tax_in_total = 0.00;
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
<style>
.basketEdit, .freshbasketEdit {
	display: none;
}
#editBasket {
	opacity: 0.5;
}
#editBasket:hover {
	opacity: 1;
	cursor: pointer;
}
</style>
<script>
var baseUrl = '<?php echo base_url()?>';
var currency = '<?php echo CURRENCY; ?>';
</script>
<script language="javascript" src="<?php echo base_url()?>js/ordertwo.js"></script>
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="javascript" src="<?php echo base_url()?>js/promotional.js"></script>
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-ui-1.8.16.custom.min.js'></script>
<link rel="stylesheet" href="<?php echo base_url()?>js/jqueryUI/css/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" />
<script type="text/javascript">
	$(document).ready(function(){
		/*$('.basketEdit').hide();	
		$('#editBasket').click(function(){
			$('.basketEdit').show();	
		});
		$('.basketEdit').click(function(){
			if(confirm('Are you sure want to delete?'))
			{
				var value = $(this).attr('id');
				var values = value.split('___');
				window.location = 'delete_session.php?del_name1='+values[0]+'&del_name2='+values[1]+'&redirectto=<?php echo base_url()?>cart';
			}
		});*/        
	$("input").keypress(function(e) {
		//e.preventDefault();
		if(e.keyCode == 13) {
			$("#btnUpdatePric").click();
			return false;
		}
	});
	});
</script>
<script type="text/javascript">
function extraService(id,sesName1,sesValue1,sesName2,sesValue2) {
	//$('.basketEdit').hide();
	//$('.freshbasketEdit').hide();
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
		$('#'+id+'_tick').html('<img src="<?php echo base_url()?>images/basket-image/correct.gif" alt="check" title="check" />');
$('#tblFloat').append('<tr id="b'+sesName1+'"><td class="basketdesc" align="left" valign="top">'+sesValue2+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="freshbasketEdit" id="'+id+'___'+sesName1+'___'+sesValue1+'___'+sesName2+'___'+sesValue2+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+totalprice+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+totalprice+'"/></td></tr>');
	 	var	pagename = 'add_session.php';				
	}
	else
	{
		extra.checked = false;
		extra.value = '';
		var	pagename = 'delete_session.php';
	}
	addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2);	
	//calculatePrice();
	if($('#reselect').html()=='<tbody></tbody>' || $('#reselect').html()=='')
		$('#forReselect').hide();
}
function addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2){
	// Add for promotion code
	jQuery("#discount").html('');
	//jQuery("#total_before_tax").html('');	                     									
	jQuery("#promotional").show();
	jQuery("#basketbg").hide();
	jQuery("#success").hide();
	// End promotion code	
	var extra = '';
	/*if(id=='opt16')
		extra = '&select='+$('#select1').val();
	if(id=='opt17')
		extra = '&select2='+$('#select2').val()+'&select3='+$('#select3').val();
	if(id=='opt20')
		extra = '&select4='+$('#select4').val()+'&select5='+$('#select5').val()+'&select6='+$('#select6').val()+'&select7='+$('#select7').val()+'&select8='+$('#select8').val();*/
		extra = '&subtotal='+$('#LblYouPay').val();
	$.ajax({
		  type: "POST",
		  url: pagename,
		  data: "id="+id+"&sesName1="+sesName1+"&sesValue1="+sesValue1+"&sesName2="+sesName2+"&sesValue2="+sesValue2+extra,
		  success: function(msg){
			  	calculatePrice();
				//alert($('#taxamount').val());
				//alert($('#LblYouPay').val());
		  }						
	});	
}
function calculatePrice() {
	var totalPrice = 0;
	$('.pricewala').each(function(i){
		totalPrice += parseFloat($(this).val());							  
	});	
	// Added for package discount
	var firstSelPackage = parseFloat($('#firstSelPackage').val());
	var totalAmount = totalPrice;
	var discountVal3 = parseFloat($('#discountVal3').val());
	var discountPer3 = parseFloat($('#discountPer3').val());
	var discountVal2 = parseFloat($('#discountVal2').val());
	var discountPer2 = parseFloat($('#discountPer2').val());
	var discountVal1 = parseFloat($('#discountVal1').val());
	var discountPer1 = parseFloat($('#discountPer1').val());
	if(totalAmount > discountVal1)
	{
		if(totalAmount >= discountVal3)
			packageDiscountPer = discountPer3;
		else if(totalAmount >= discountVal2)
			packageDiscountPer = discountPer2;
		else if(totalAmount >= discountVal1)
			packageDiscountPer = discountPer1;
		else
			packageDiscountPer = 0;
		var packageDiscount = (totalAmount * packageDiscountPer)/100;
		var netTotal = totalAmount - packageDiscount;
		$('.packageDiscount').show();								
	}
	else
	{
		var packageDiscountPer = 0;
		var packageDiscount = 0;
		var netTotal = totalAmount;
		$('.packageDiscount').hide();		
	}
	$('#sub_total').val(netTotal);
	if(document.getElementById('taxamount'))
	{
		var taxpercent = parseFloat(document.getElementById('taxPercent').value);
		var taxamount = netTotal * taxpercent;
		taxamount = taxamount.toFixed(2);
		$('#taxamount').text(taxamount);
		//$('#subtotalamount').text(totalPrice);
		$('#totalBeforeTaxAmount').text(netTotal);
		netTotal = parseFloat(netTotal) + parseFloat(taxamount);				
	}	
	$('#LblYouPay').val(netTotal);
	$('#LblYouPayTxt').text(netTotal.toFixed(2));
	$('#net_total').val(netTotal);
	$('#subtotalamount').text(totalAmount.toFixed(2));
	$('#packageDiscountPer').text(packageDiscountPer);
	$('#packageDiscountAmount').text(packageDiscount.toFixed(2));
    $('#purchase_discount').text(packageDiscount.toFixed(2));
	$('#package_discount_amount').val(packageDiscount);
	// End for package discount	
	$('.basketEdit').fadeOut();
	$('.freshbasketEdit').fadeOut();
}
	$(document).ready(function(){		
		$('.basketEdit').hide();
		$('.freshbasketEdit').hide();	
		$('#editBasket').live('click',function(){
			$('.basketEdit').toggle();
			$('.freshbasketEdit').toggle();	
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
						//alert(values[2]);
						var	pagename = 'delete_session.php';
						addRemoveSession(pagename,values[0],values[1],values[2],values[3],values[4]);
						//alert(value);
						//alert('#b'+values[1]);
						$('#b'+values[1]).remove();
						$('#'+values[1]+'_del').remove();
						var id = values[1];
						//var amount = '';						
						if(id=='opt16')
						{
							var amount = parseFloat(values[2]) * parseFloat(<?php echo $_SESSION['select']?>);
						}
						else if(id=='opt17')
							var amount = parseFloat(values[2]) * parseFloat(<?php echo $_SESSION['select2']?>);
						else if(id=='opt20')
							var amount = parseFloat(values[2]) * (parseFloat(<?php echo $_SESSION['select4']?>) + parseFloat(<?php echo $_SESSION['select5']?>) + parseFloat(<?php echo $_SESSION['select6']?>) + parseFloat(<?php echo $_SESSION['select7']?>) + parseFloat(<?php echo $_SESSION['select8']?>) );
						else				
							var amount = values[2];	
						//alert(id);
						//alert(amount);								
						var add = '<tr id="'+values[1]+'_del"><td valign="top" align="left" class="basketdesc">'+values[4]+'</td><td valign="top" align="right" class="basketdesc"><img id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" class="basketEdit_reselect" src="images/basket-image/select.gif" alt="'+values[4]+'" title="'+values[4]+'"></td><td valign="top" align="right" class="basketdesc">'+currency+amount+'<input type="hidden" name="deletedServices['+values[1]+']" value="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" ></td></tr>';						
						$('#reselect').append(add);						
						$('#forReselect').show();
						//calculatePrice();
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
						var add = '<tr id="'+values[1]+'_del"><td valign="top" align="left" class="basketdesc">'+values[4]+'</td><td valign="top" align="right" class="basketdesc"><img id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[3]+'" class="basketEdit_reselect" src="images/basket-image/select.gif" alt="'+values[4]+'" title="'+values[4]+'"></td><td valign="top" align="right" class="basketdesc">'+currency+values[2]+'<input type="hidden" name="deletedServices['+values[1]+']" value="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'" ></td></tr>';						
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
				id = values[1];
				var amount = '';
				if(id=='opt16')
					amount = parseFloat(values[2]) * parseFloat(<?php echo $_SESSION['select']?>);
				else if(id=='opt17')
					amount = parseFloat(values[2]) * parseFloat(<?php echo $_SESSION['select2']?>);
				else if(id=='opt20')
					amount = parseFloat(values[2]) * (parseFloat(<?php echo $_SESSION['select4']?>) + parseFloat(<?php echo $_SESSION['select5']?>) + parseFloat(<?php echo $_SESSION['select6']?>) + parseFloat(<?php echo $_SESSION['select7']?>) + parseFloat(<?php echo $_SESSION['select8']?>) );
				else				
					amount = values[2];	
				//alert(amount);									
				$('#tblFloat').append('<tr id="b'+values[1]+'"><td class="basketdesc" align="left" valign="top">'+values[4]+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+amount+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+amount+'"/></td></tr>');
	 			var	pagename = 'add_session.php';		
				addRemoveSession(pagename,values[0],values[1],values[2],values[3],values[4]);	
				//calculatePrice();
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
<?php $this->load->view('blocks/analytics'); ?>
<style type="text/css">
#pc_box {
	margin-left: 3px;
	width: 357px;
}
#promotional {
	background: #FFF345 url(images/promotional-bg.png) no-repeat -105px -80px;
	border: 1px dashed red;
	padding: 20px;
	position: relative;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-moz-border-radius-bottomleft: 5px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
}
#promotional img.scissors {
	position: absolute;
	right: -5px;
	top: -17px;
}
#promotional .bluebutton1 {
	color: #E35400;
	cursor: pointer;
	display: inline-block;
	font: 16px arial;
	margin: 10px 0 0 0px;
	padding: 5px;
	text-transform: uppercase;
}
#promotional span {
	color: #FE5E00;
	display: block;
	font: normal 20px/30px arial;
	font-style: italic;
	padding: 10px 0 0;
}
#promotional span.black {
	color: #000;
	display: inline-block;
	font: bold 15px/24px arial;
	font-style: normal;
	text-transform: uppercase;
}
#promotional label {
	color: #FF0000;
	font: 16px/18px arial;
}
#promotional #txtPc {
	width: 133px;
}
#promotional #err {
	display: inline-block;
	font: normal 12px/16px arial;
	width: 168px;
}
#success {
	color: #009D0B;
	font: normal 14px/16px arial;
	display: none;
}
</style>
</head>
<body>
<div id="dialog-confirm" style="display:none">Are you sure you wish to remove this service?</div>
<div class="wrapper">
    <div class="header-container">
        <?php $this->load->view('blocks/header/header');  ?>
    </div>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main-basket">
        <div class="order-one info">
          <div style="text-align:left"> <a href="http://www.providesupport.com?messenger=pradyumna"></a> 
            <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
            <div id="ciz1K7"></div>
            <div id="scz1K7" style="display:inline; text-align:center;"> </div>
            <div id="sdz1K7" style="display:none; text-align:center;"></div>
            <script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script>
            <noscript>
            <div style="display:inline; text-align:center"></div>
            </noscript>
            <!-- END ProvideSupport.com Graphics Chat Button Code --><br />
            Before you proceed to the payment page.....</div>
          <p>Your order has the  following <strong>benefits that will greatly support your business:</strong></p>
          <ul>
            <li><strong>Free and Unlimited revisions and redraws</strong>.  We design any part of your order until you are 100% happy. </li>
            <li>We send all files required for  any web or print use via email.</li>
            <li>You own full copyright on  every part of the designs we produce for you!</li>
          </ul>
          <h1>Price promise:</h1>
          <p><strong>You will not find a more affordable logo company.</strong><br />
            If you find another logo firm  more affordable, we will happily refund the difference.<br />
            Read on... </p>
          <p>AND IF THE ABOVE IS NOT ENOUGH <br />
            We offer <strong>the best guarantee in the logo industry....</strong> </p>
          <div class="info-gurantee-list">
            <ul>
              <li>We offer <strong>100% Money Back Guarantee</strong> on all your order.</li>
              <li>The guarantee covers the 24  hour delivery (if applicable), and any stationery designs ordered.</li>
              <li>If you don&rsquo;t &nbsp;think your logo is worth at least <strong><?php echo CURRENCY; ?>500</strong> to your business we will  refund you in full.</li>
              <li>No admin fees.</li>
              <li>No questions asked.</li>
              <li>We offer this refund <strong>at any stage</strong> of your design, even if we  have revised several times and you are still not happy (there is no other  company that offers this).</li>
              <li>Immediate refund upon request.</li>
            </ul>
            <img src="<?php echo base_url(); ?>images/100mbg.jpg" alt="money_Back" width="130" height="105" align="absmiddle" />
            <div style="clear:both"></div>
          </div>
        </div>
        <div class="info-text-bottom">
        <h1>You can only win.</h1>
        <div align="center"><br/>
          <p style="text-align:left;"><strong>Remember... Most other firms do not offer 100% Money back.</strong></p>
          <p style="text-align:left;">We can offer this outstanding service as we produce high quality designs<br/>
          and achieve an industry<span class="text-underline"> <strong>high 97% customer satisfaction rate.</strong></span> <br /></p>
          <p style="text-align:left;">Our clients are happy and only 3% ask for a refund. We will start working<br />
 on your designs as soon as payment is received. We will email you the<br />
designs within 1-3 days (24 hrs if ordered). </p>
          <p style="text-align:left;"><strong>Please do not delay payment.</strong> This will delay you receiving the logo<br />
you require and slow your business growth. Every successful business<br />
has a good logo.</p>
          <p style="text-align:left;">Act now and we guarantee 100% satisfaction or your money back!</p>
        </div>
      </div>
      </div>
      <div class="side-bar" style="position:relative;">
        <div id="floatdiv" style="width: 365px; position: absolute; right:0;"> 
          <!-- Buy More --> 
          <!--<div class="buy-more-container" style="margin: 7px 0 0;">
<div class="buy-more">
	<div class="save-more">
		<p style="padding:0px;padding-left: 4px;"><img src="<?php //echo base_url()?>/images/buy-more-img.png" /></p>
	</div>
</div>
</div>-->
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
          <?php
if(@$_SESSION['firstSelPackage'] == PACKAGE1)
{
	$discountVal1 = PACKAGE11VAL;
	$discountPer1 = PACKAGE11PER;
	$discountVal2 = PACKAGE12VAL;
	$discountPer2 = PACKAGE12PER;
	$discountVal3 = PACKAGE13VAL;
	$discountPer3 = PACKAGE13PER;		 
}
else if(@$_SESSION['firstSelPackage'] == PACKAGE2)
{
	$discountVal1 = PACKAGE21VAL;
	$discountPer1 = PACKAGE21PER;
	$discountVal2 = PACKAGE22VAL;
	$discountPer2 = PACKAGE22PER;
	$discountVal3 = PACKAGE23VAL;
	$discountPer3 = PACKAGE23PER;		 
}
else if(@$_SESSION['firstSelPackage'] == PACKAGE3)
{
	$discountVal1 = PACKAGE31VAL;
	$discountPer1 = PACKAGE31PER;
	$discountVal2 = PACKAGE32VAL;
	$discountPer2 = PACKAGE32PER;
	$discountVal3 = PACKAGE33VAL;
	$discountPer3 = PACKAGE33PER;		 
}
else if(@$_SESSION['firstSelPackage'] == PACKAGE4)
{
	$discountVal1 = PACKAGE41VAL;
	$discountPer1 = PACKAGE41PER;
	$discountVal2 = PACKAGE42VAL;
	$discountPer2 = PACKAGE42PER;
	$discountVal3 = PACKAGE43VAL;
	$discountPer3 = PACKAGE43PER;		 
}
else if(@$_SESSION['firstSelPackage'] == PACKAGE5)
{
	$discountVal1 = PACKAGE51VAL;
	$discountPer1 = PACKAGE51PER;
	$discountVal2 = PACKAGE52VAL;
	$discountPer2 = PACKAGE52PER;
	$discountVal3 = PACKAGE53VAL;
	$discountPer3 = PACKAGE53PER;		 
}
else if(@$_SESSION['firstSelPackage'] == PACKAGE6)
{
	$discountVal1 = PACKAGE61VAL;
	$discountPer1 = PACKAGE61PER;
	$discountVal2 = PACKAGE62VAL;
	$discountPer2 = PACKAGE62PER;
	$discountVal3 = PACKAGE63VAL;
	$discountPer3 = PACKAGE63PER;		 
}
?>
          <div class="buy-more-container">
            <div class="buy-more">
              <div class="buy-more-repeat">
                <div class="buy-more-top">
                  <div class="buy-more-bottom">
                    <div class="save-more"> <img src="<?php echo base_url(); ?>images/buy-more-save-more.jpg" /> </div>
                    <div class="save-offer">
                      <ul>
                        <li>spend <?php echo CURRENCY.$discountVal1?> or more, Save <?php echo $discountPer1?>%!</li>
                        <li>spend <?php echo CURRENCY.$discountVal2?> or more, Save <?php echo $discountPer2?>%!</li>
                        <li>spend <?php echo CURRENCY.$discountVal3?> or more, Save <?php echo $discountPer3?>%!</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                        <td><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8" /></td>
                      </tr>
                      <tr>
                        <td style="height: 0px;"><table border="0" cellpadding="0" cellspacing="0" width="98%">
                            <tbody>
                              <tr>
                                <td rowspan="4" align="right" width="10"></td>
                                <td width="353" colspan="2" align="left" style="padding-right: 10px;"><table id="tblFloat" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                      <tr>
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION["package"];?></td>
                                        <td class="basketdesc" align="right" valign="top">&nbsp;</td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["price"];?>
                                          <input class="pricewala" type="hidden" value="<?php echo @$_SESSION["price"]?>" name="priceValue[]"></td>
                                      </tr>
                                      <?php if(@$_SESSION['brouchure']!='' && @$_SESSION['bhaucharpackage']!='')
    {
    ?>
                                      <tr id="bbrouchure">
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['bhaucharpackage'];?></td>
                                        <td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="brouchure___brouchure___<?php echo $_SESSION['brouchure']?>___bhaucharpackage___<?php echo $_SESSION['bhaucharpackage']?>"/></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['brouchure'];?>
                                          <input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['brouchure']?>"/></td>
                                      </tr>
                                      <?php
    }
    ?>
                                      <?php if(@$_SESSION['web']!='' && @$_SESSION['webpackage']!='')
    {
    ?>
                                      <tr id="bweb">
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['webpackage'];?></td>
                                        <td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="web___web___<?php echo $_SESSION['web']?>___webpackage___<?php echo $_SESSION['webpackage']?>"/></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['web'];?>
                                          <input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['web']?>"/></td>
                                      </tr>
                                      <?php
    }
    ?>
                                      <?php 
	if(@$_SESSION['option']!='' && @$_SESSION['blackn24']!='')
	{
		if(@$_SESSION['option']==EXPRESS_DELIVERY)
			$optionCount = 1;
		else if(@$_SESSION['option']==BLACK_N_WHITE)
			$optionCount = 2;
		else
			$optionCount = 3;
	?>
                                      <tr id="boption" >
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['blackn24'];?></td>
                                        <td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="option<?php echo $optionCount?>___option___<?php echo $_SESSION['option']?>___blackn24___<?php echo $_SESSION['blackn24']?>" title="<?php echo @$_SESSION['blackn24'];?>"/></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['option'];?>
                                          <input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['option']?>"/></td>
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
		?>
                                      <tr id="b<?php echo $opt?>">
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION[$extraopt];?></td>
                                        <td class="basketdesc" align="right" valign="top" ><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="<?php echo $opt.'___'.$opt.'___'.$_SESSION[$opt].'___'.$extraopt.'___'.@$_SESSION[$extraopt]?>"/></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo $amount?>
                                          <input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo $amount?>"/></td>
                                      </tr>
                                      <?php
			$total=$total + $amount;
			}
		}
	}	
	}	
	?>
                                    </tbody>
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
                <td colspan="3" class="basketbg2" align="center"><table border="0" cellpadding="0" cellspacing="0" width="330">
                    <tbody>
                      <tr>
                        <td width="330" colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                      </tr>
                      <tr>
                        <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"><?php 
							$totalAmount = $total + @$_SESSION['price'] + @$_SESSION['option'] + @$_SESSION['web'] + @$_SESSION['brouchure'];
							 @$_SESSION['subtotal'] = $totalAmount;
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
                          <table width="345" border="0" cellpadding="0" cellspacing="0" class="formtoptext">
                            <tbody>
                              <tr id="subtotal" class="packageDiscount" style="display:<?php echo $display?>">
                                <td valign="top" align="left" style="padding-left:10px;" class="basketdesc"><strong>Sub Total</strong></td>
                                <td valign="top" align="right" class="basketdesc"></td>
                                <td valign="top" align="right" style="padding-right:10px;" class="basketdesc" colspan="2"><strong><?php echo CURRENCY?><span id="subtotalamount"><?php echo number_format($totalAmount,2,".","")?></span></strong></td>
                              </tr>
                              <tr id="packageDiscount" class="packageDiscount" style="display:<?php echo $display?>">
                                <td class="basketdesc" align="left" valign="top" style="padding-left:10px;">Discount: <span id="packageDiscountPer"><?php echo $packageDiscountPer?></span>% OFF </td>
                                <td class="basketdesc" align="right" valign="top" ></td>
                                <td class="basketdesc" align="right" valign="top" colspan="2"  style="padding-right:10px;"><?php echo CURRENCY?><span id="packageDiscountAmount"><?php echo number_format($packageDiscount,2,".","") ?></span>
                                  <input type="hidden" id="firstSelPackage" name="firstSelPackage" value="<?php echo @$_SESSION['firstSelPackage']?>" />
                                  <input type="hidden" id="discountVal1" name="discountVal1" value="<?php echo $discountVal1?>" />
                                  <input type="hidden" id="discountPer1" name="discountPer1" value="<?php echo $discountPer1?>" />
                                  <input type="hidden" id="discountVal2" name="discountVal2" value="<?php echo $discountVal2?>" />
                                  <input type="hidden" id="discountPer2" name="discountPer2" value="<?php echo $discountPer2?>" />
                                  <input type="hidden" id="discountVal3" name="discountVal3" value="<?php echo $discountVal3?>" />
                                  <input type="hidden" id="discountPer3" name="discountPer3" value="<?php echo $discountPer3?>" />
                                  <input type="hidden" id="package_discount_amount" name="package_discount_amount" value="<?php echo $packageDiscount?>"/></td>
                              </tr>
                              <!-- Added here from above --> 
                              <!--<tr id="subtotal">
    <?php /*if(COUNTRY == "UK"){
							 $totalBeforeTax = $total + @$_SESSION["price"] + @$_SESSION["option"] + @$_SESSION['web'] + @$_SESSION['brouchure'];
							 echo '<td  class="basketdesc" align="left" valign="top" style="padding-left:10px;"><strong>Sub Total</strong></td>
                                                    <td class="basketdesc" align="right" valign="top" ></td>
                                                    <td colspan="2" class="basketdesc" align="right" valign="top" style="color:#f00;padding-right:10px;"  ><strong>'.CURRENCY.'<span id="subtotalamount">'.$totalBeforeTax.'</span></strong></td>';
	}*/
	?>
                        </tr>-->
                              <tr id="discount"> </tr>
                              <?php if(COUNTRY == "UK"){
							echo '<tr id="total_before_tax">
							<td  class="basketdesc" align="left" valign="top" style="padding-left:10px;"><strong> Total Before Tax</strong></td>
							<td class="basketdesc" align="right" valign="top" ></td>
							<td  colspan="2" class="basketdesc" align="right" valign="top" style="color:#f00;padding-right:10px;"  ><strong>'.CURRENCY.'<span id="totalBeforeTaxAmount">'.number_format($netTotal,2,".","").'</span></strong></td>
                        </tr>'; 
                         //$tax_in_total = ($total + @$_SESSION["price"] + @$_SESSION["option"] + @$_SESSION['web'] + @$_SESSION['brouchure'])*0.2;
						 $tax_in_total = $netTotal*0.2;
                         $tax_in_total = number_format($tax_in_total, 2, '.', '');
                        echo '<tr>
                        <td class="basketdesc" align="left" valign="top" style="padding-left:10px;">Tax (20%)</td>
						<td class="basketdesc" align="right" valign="top" ></td>                        
                        <td class="basketdesc" align="right" valign="top" colspan="2"  style="padding-right:10px;">'.CURRENCY.'<span id="taxamount">'.number_format($tax_in_total,2,".","").'</span></td>
                        </tr>';                        
                        }
						else
						{
							$tax_in_total = 0;	
						}?>
                              <!-- End added from above --> 
                              <!-- Calculation of promotional including tax --> 
                              <!--<tr align="right">
                                <td width="175" rowspan="2"align="left" style="width: 165px; padding-left: 10px;"><span id="LblYouPayText" style="font-weight: bold;" class="totalpricetxt">Total </span></td>
                                <td width="14" rowspan="2" align="right">&nbsp;</td>
                                <td colspan="2" align="right"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value="<?php #echo CURRENCY; ?>" type="text"/><input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 45px; text-align: left;" value="<?php
                                #@$_SESSION['subtotal'] = number_format(($total + @$_SESSION["price"] + @$_SESSION["option"] + @$_SESSION['web'] + @$_SESSION['brouchure'] + @$tax_in_total), 2, '.', '');
                                 #echo @$_SESSION['subtotal']; ?>" type="text" /></td>
                              </tr>--> 
                              <!-- Calculation of promotional including tax --> 
                              <!-- Calculation of promotional Excluding tax -->
                              <tr align="right">
                                <td width="175" rowspan="2" align="left" style="padding-left: 10px;padding-top:5px;"><span id="LblYouPayText" style="font-weight: bold;" class="totalpricetxt">Total </span></td>
                                <td width="14" rowspan="2" align="right">&nbsp;</td>
                                <td colspan="2" align="right" style="padding-right:10px;vertical-align:bottom;text-align:right;padding-top:5px;"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value="<?php echo CURRENCY; ?>" type="text"/>
                                  <input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 45px; text-align: left;" value="<?php echo number_format($netTotal + @$tax_in_total,2,".",""); ?>" type="hidden" />
                                  <span id="LblYouPayTxt" class="pricetxt"><?php echo number_format(@$netTotal + @$tax_in_total,2,".",""); ?></span></td>
                              </tr>
                              <!--<tr align="right">
                                <td width="20" align="right" >&nbsp;</td>
                                <td width="50" height="10" align="right" style="background-image:url(<?php //echo base_url()?>images/basket-image/shoose.gif); background-repeat:no-repeat; background-position:right;background-position:top;">&nbsp;</td>
                              </tr>-->
                            </tbody>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8" /></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
              <tr id="forReselect">
                <td colspan="3" class="basketbg2" align="center"><div style="float:left;padding:5px 15px;"><strong>Re-select the Items below</strong></div>
                  <table border="0" cellpadding="0" cellspacing="0" width="330">
                    <tbody>
                      <tr>
                        <td width="330" colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                      </tr>
                      <tr>
                        <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"><table width="325" border="0" cellpadding="0" cellspacing="0" class="formtoptext" id="reselect">
                            <?php 
							 if(!empty($_SESSION['deletedServices'])) { 
								foreach($_SESSION['deletedServices'] as $services) { 
								$services_value = explode('___',$services);	
								$amount=$services_value[2];	
								if($services_value[1]=='opt16')
								{
									$amount=$amount * @$_SESSION['select'];
								}
								if($services_value[1]=='opt17')
								{
									$amount=$amount * @$_SESSION['select2'];
								}
								if($services_value[1]=='opt20')
								{
									$cost=$amount;
									$amount=($cost * @$_SESSION['select4']) + ($cost * @$_SESSION['select5']) + ($cost * @$_SESSION['select6']) + ($cost * @$_SESSION['select7']) + ($cost * @$_SESSION['select8']);
								}							
							?>
                            <tr id="<?php echo $services_value[1]?>_del">
                              <td valign="top" align="left" class="basketdesc"><?php echo $services_value[4]?></td>
                              <td valign="top" align="right" class="basketdesc"><img title="<?php echo $services_value[4]?>" alt="<?php echo $services_value[4]?>" src="<?php echo base_url()?>images/basket-image/select.gif" class="basketEdit_reselect" id="<?php echo $services?>"></td>
                              <td valign="top" align="right" class="basketdesc"><?php echo CURRENCY; ?><?php echo $amount?><!--<input type="hidden" value="<?php //echo $services?>" name="deletedServices['<?php //echo $services_value[1]?>']">--></td>
                            </tr>
                            <?php } }?>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
              <tr>
                <td colspan="3" class="bgpic"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                      <td width="62%" height="140" ><p style="text-decoration:blink; padding:0 0 0 15px;margin-top: -15px;"><font face="Arial, Helvetica, sans-serif"  size="2"><u><?php echo GUARANTEE_DAY; ?>-Day Unconditional Money Back Guarantee on All Fees Paid!</u></font></p>
                        <p style="font-size: 11px; padding: 5px 0 0 15px; color:#0000CC; font-weight:bold;">- No admin fees<br />
                          - No questions<br />
                          - Just email &ldquo;refund me&rdquo;<br />
                          <span style="color:#555">- The Best Guarantee in the<br />
                          &nbsp;&nbsp;Logo Industry </span> </p></td>
                      <td width="38%" id="bgimg" align="left"><img src="<?php echo base_url()?>images/basket-image/photolia5.gif" /></td>
                    </tr>
                  </table>
                  <!--<p class="pad" style="text-decoration:blink;">&nbsp;</p>--></td>
              </tr>
              <tr id="basketbg" style="display: none;">
                <p>
                <td colspan="3" ><img src="<?php echo base_url()?>images/basket-image/basket2.gif" alt="basket-bottom1" width="365" height="17"/>
                  </p></td>
              </tr>
            </tbody>
          </table>
          <div id="pc_box">
            <div id="promotional">
              <label for="txtPc"> Enter Promotional code: </label>
              <input type="text" name="txtPc" id="txtPc" />
              <br />
              <p><span id="err" style="color:#C00;"></span>
                <input type="button" onclick="validatePromotional(document.getElementById('txtPc').value, '<?= @$_SESSION['insert']; ?>',document.getElementById('sub_total').value);" value="Update price" class="bluebutton1" id="btnUpdatePric" />
              </p>
              <img src="<?= base_url().'images/scissors.png';?>" class="scissors" /> 
              <!--<span>
        Need Code <span class="black"> Just Call us</span>
        <br /><span style=" font: normal 24px/36px arial; overflow: hidden; margin-left: 50px;"><img src="<?= base_url().'images/phone.png';?>" align="left"  /><?= " ".PHONE_NO; ?></span>
        </span>--> 
            </div>
          </div>
          <span id="success"></span> </div>
      </div>
      <div class="clear"></div>
      <div class="info-text-bottom">
        <div align="center">
          <form action='<?php if(COUNTRY == "UK") {echo site_url('reseller/paybankmid');} else{echo site_url('reseller/jetpaymid'); }?>' method='post' name='frmOrder' enctype='multipart/form-data'>
            <a href="javascript: window.location='<?php echo base_url()?>ordertwo'"><img src="<?php echo base_url(); ?>images/sback.jpg" width="80" height="35" align="middle" /></a>
            <input type="hidden" name="pcid" id="pcid" value="" />
            <input type="hidden" name="purchase_discount" id="purchase_discount" value="<?php echo number_format($packageDiscount,2,".","") ?>" />
            <input type="hidden" name="p_discount" id="p_discount" value="" />
            <input type="hidden" name="sub_total" id="sub_total" value="<?= $netTotal; ?>" />
            <input type="hidden" name="net_total" id="net_total" value="<?= $netTotal + @$tax_in_total; ?> " />
            <input type="hidden" name="taxPercent" id="taxPercent" value="<?php if(COUNTRY == "UK"){ echo 0.2;} else {echo 0;}?>" />
            <input type="hidden" name="tax_in_total" value="<?= $tax_in_total; ?>" id="taxintotal" />
            
            <input type="hidden" name="base_url" value="<?php echo base_url()?>" id="base_url"/>
            <input name='submit' type='image' src='<?php echo base_url(); ?>images/continue.jpg' align="middle" width='337' height='40' border='0'img />
          </form>
          <?php if(COUNTRY == "UK"){?>
          <p><strong>Our payment page displays price in British Pounds only.</strong> Please be reassured that:</p>
          <ul>
            <li><strong>Free and Unlimited revisions and redraws</strong>.  We design any part of your order until you are 100% happy. </li>
            <li>We send all files required for  any web or print use via email.</li>
            <li>You own full copyright on  every part of the designs we produce for you!</li>
          </ul>
          <p><span class="text-green1"><strong>We wish to apologise for any currency  confusions, but do be reassured &nbsp;that you  are <span class="text-underline">not</span> charged any more or additional fees to your card. Thank you !</strong></span></p>
          <?php } ?>
        </div>
      </div>
    <?php $this->load->view('blocks/footer/payment-seals'); ?><br />
    <?php $this->load->view('blocks/footer/partners');?><br />
    <?php $this->load->view('blocks/footer/phone-banner-bottom');?><br />
    </div>
  </div>
    <div class="footer-container">
        <div class="footer">
            <?php $this->load->view('blocks/footer/footer-links'); ?>
            <?php $this->load->view('blocks/footer/footer-text'); ?>
            <?php $this->load->view('blocks/footer/footer-seals'); ?>
        </div>
    </div>
</div>
</body>
</html>