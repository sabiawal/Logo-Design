<?php 
//unset($_SESSION['deletedServices']);
//echo "<pre>"; 
//print_r($_SESSION); echo "</pre>";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>

<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/basket.css" rel="stylesheet" type="text/css" />
<style>
.basketEdit,.freshbasketEdit {
 display:none;	
}
#editBasket {
	opacity:0.5;	
}
#editBasket:hover {
	opacity:1;
	cursor:pointer;
}
</style>

<script>
var baseUrl = '<?php echo base_url()?>';
var currency = '<?php echo CURRENCY; ?>';

var express_delivery = '<?php echo EXPRESS_DELIVERY; ?>';
var black_n_white = '<?php echo BLACK_N_WHITE; ?>';
var both_services = '<?php echo BOTH_SERVICES; ?>';
</script>
<!--<script language="javascript" src="<?php //echo base_url()?>js/orderone.js"></script>-->
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>

  
<!-- per Project stuff -->
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-ui-1.8.16.custom.min.js'></script>
<link rel="stylesheet" href="<?php echo base_url()?>js/jqueryUI/css/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" />
    <!-- END per project stuff -->
<script type="text/javascript">

function extraService(id,sesName1,sesValue1,sesName2,sesValue2) {	
	
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
			totalprice = parseFloat(<?php echo $_SESSION['select']?>) * parseFloat(totalprice);
		}
		if(id=='opt17')
		{
			
			totalprice = parseFloat(<?php echo $_SESSION['select2']?>) * parseFloat(totalprice);
			
		}
		if(id=='opt20')
		{
			totalprice = (parseFloat(<?php echo $_SESSION['select4']?>) * totalprice) + (parseFloat(<?php echo $_SESSION['select5']?>) * totalprice) + (parseFloat(<?php echo $_SESSION['select6']?>) * totalprice) + (parseFloat(<?php echo $_SESSION['select7']?>) * totalprice) + (parseFloat(<?php echo $_SESSION['select8']?>) * totalprice);
									
		}
		
		$('#'+id+'_tick').html('<img src="<?php echo base_url()?>images/basket-image/correct.gif" alt="check" title="check" />');
$('#tblFloat').append('<tr id="b'+sesName1+'"><td class="basketdesc" align="left" valign="top">'+sesValue2+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="freshbasketEdit" id="'+id+'___'+sesName1+'___'+sesValue1+'___'+sesName2+'___'+sesValue2+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+sesValue1+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+sesValue1+'"/></td></tr>');
	 	var	pagename = 'add_session.php';				
	}
	else
	{
		extra.checked = false;
		extra.value = '';
		var	pagename = 'delete_session.php';
		
	}
	addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2);	

	calculatePrice();
	if($('#reselect').html()=='<tbody></tbody>' || $('#reselect').html()=='')
		$('#forReselect').hide();
}
function addRemoveSession(pagename,id,sesName1,sesValue1,sesName2,sesValue2,sesName3,sesValue3){
	var extra = '';
	if(id=='opt16')
		extra = '&select=<?php echo $_SESSION['select']?>';
	if(id=='opt17')
		extra = '&select2=<?php echo $_SESSION['select2']?>&select3=<?php echo $_SESSION['select3']?>';
	if(id=='opt20')
		extra = '&select4=<?php echo $_SESSION['select4']?>&select5=<?php echo $_SESSION['select5']?>&select6=<?php echo $_SESSION['select6']?>&select7=<?php echo $_SESSION['select7']?>&select8=<?php echo $_SESSION['select8']?>';
		
	$.ajax({
		  type: "POST",
		  url: pagename,
		  data: "id="+id+"&sesName1="+sesName1+"&sesValue1="+sesValue1+"&sesName2="+sesName2+"&sesValue2="+sesValue2+"&sesName3="+sesName3+"&sesValue3="+sesValue3+extra,
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
	$('#LblYouPay').val(totalPrice);	
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
					amount = values[2] * parseFloat(<?php echo $_SESSION['select']?>);
				else if(id=='opt17')
					amount = values[2] * parseFloat(<?php echo $_SESSION['select2']?>);
				else if(id=='opt20')
					amount = values[2] * (parseFloat(<?php echo $_SESSION['select4']?>) + parseFloat(<?php echo $_SESSION['select5']?>) + parseFloat(<?php echo $_SESSION['select6']?>) + parseFloat(<?php echo $_SESSION['select7']?>) + parseFloat(<?php echo $_SESSION['select8']?>) );
				else				
					amount = values[2];	
					
				//alert(amount);									
		
				$('#tblFloat').append('<tr id="b'+values[1]+'"><td class="basketdesc" align="left" valign="top">'+values[4]+'</td><td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="'+values[0]+'___'+values[1]+'___'+values[2]+'___'+values[3]+'___'+values[4]+'"/></td><td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?>'+amount+'<input type="hidden" name="priceValue[]" class="pricewala" value="'+amount+'"/></td></tr>');
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
<?php include_once("includes/logo-design/analytics.php"); ?>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body class="theme2">

<?php $_SESSION['rowcoun'] = 23;?>
<div id="dialog-confirm" style="display:none">Are you sure you wish to remove this service?</div>
<form action="<?php echo site_url('logodesign/ordertwomid');?>" method="post">

<div class="wrapper">
<div class="header-container">
<?php include_once("includes/logo-design/header.php"); ?>
</div>
<div class="top-container">
    <div class="top">
        <?php include_once("includes/logo-design/top_phone_banner.php"); ?>
    </div>
</div>
<div class="main-container">

<div class="main col2-right-layout">

<div class="col-main-basket">
<div class="order-one">

<div align="center" style="width: 140px;"> 
            <!-- BEGIN ProvideSupport.com Graphics Chat Button Code -->
            <div id="ciz1K7" style="z-index:100;position:absolute"></div>
            <div id="scz1K7" style="display:inline; text-align:center;"> </div>
            <div id="sdz1K7" style="display:none; text-align:center;"></div>
            <script type="text/javascript">var sez1K7=document.createElement("script");sez1K7.type="text/javascript";sez1K7.defer=true;sez1K7.src=(location.protocol.indexOf("https")==0?"https://secure.providesupport.com/image":"http://image.providesupport.com")+"/js/pradyumna/safe-standard.js?ps_h=z1K7\u0026ps_t="+new Date().getTime();document.getElementById("sdz1K7").appendChild(sez1K7)</script> 
            
            <!-- END ProvideSupport.com Graphics Chat Button Code --> 
          </div>
          <h1 style="line-height:60px; color:#339933; font-family:Arial, Helvetica, sans-serif; font-size:30px">Act Now. Save Big....</h1>
          <p style="font-size:16px;"><strong>Special offer</strong> open only to our customers</p>
          <h1 class="text-blue">Our 1 month Offer Must End @
            <span class="text-red">Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?>
            </span></h1>
            <br/>
          <p>Grow your business fast with the following offers to help you.</p>
          <p>The good news is the offers below apply to the logo<br />
            and any stationary parts you may have ordered<br />
            -business cards, letterheads etc. </p>
    

<input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url()?>" />
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

                          <td width="60" rowspan="2"><label>

                            <div align="center">
                            <input id="option1" name="option" type="radio" value="<?php if(@$_SESSION['option']==EXPRESS_DELIVERY) echo EXPRESS_DELIVERY;?>" onclick="extraService('option1','option','<?php echo EXPRESS_DELIVERY?>','blackn24','24 hours delivery')" <?php if(@$_SESSION['option']==EXPRESS_DELIVERY) echo 'checked'?>/>
                            <br /><strong><span id="option1_tick"><?php if(@$_SESSION['option']==EXPRESS_DELIVERY){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?><strong>Select<br /> here</strong><?php }?></span></strong>                                                       
                          </div>
                          </label></td>

                          <td width="372" bgcolor="" class="text-blue" style="font-size:18px; font-weight:bold; text-align: center;"><strong>24 Hours Express Delivery. Was <img src="<?php echo base_url()?>images/prices/order1/cross/express-delivery-cross-<?php echo COUNTRY; ?>.gif" align="absbottom" /><br /> </strong><img src="<?php echo base_url()?>images/prices/order1/express-delivery-price-<?php echo COUNTRY; ?>.png" align="absbottom" />
                          <p>(All revisions given within  24 hours also).</p></td>

                        </tr>

                        <tr>

                          <td bgcolor="" class="features">
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
                          </ul>
    
                            <div align="justify" style="padding:0 0 20px;"><font color="red">You can only win&hellip; as either  you get all your fees back and with free, inspiring logo ideas&hellip;&hellip;or you get a  final logo very quickly, with a great price to match!</font>
                            </div>
                          </td>

                        </tr>

                       

                      </table>                      
                      <img src="<?php echo base_url()?>images/basket-image/low-bar.jpg" width="538" height="18"/>                      
                      <div style="height: 50px;"></div>
                
                  <img src="<?php echo base_url()?>images/up-bar.jpg" width="538" height="18"/>
                  <table width="538" border="0" cellpadding="o" cellspacing="0" bgcolor="#F8FCE3">
					    <tr>

                          <td>&nbsp;</td>
                          <td width="372"><p>&nbsp;</p></td>
                          <td width="31" rowspan="4">&nbsp;</td>
                        </tr>

                        <tr>

                          <td width="39" rowspan="2">
                          <label>

                            <div align="center">
                            <input id="option2" name="option" type="radio" value="<?php if(@$_SESSION['option']==BLACK_N_WHITE) echo BLACK_N_WHITE;?>" onclick="extraService('option2','option','<?php echo BLACK_N_WHITE?>','blackn24','Black and white additional logo design file')"  <?php if(@$_SESSION['option']==BLACK_N_WHITE) echo 'checked'?>/>
                            <br /><strong><span id="option2_tick"><?php if(@$_SESSION['option']==BLACK_N_WHITE){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>                                                       
                          </div>
                          </label>                                                   
                        </td>
                        <td width="372" class="text-blue" style="font-size:18px; font-weight:bold; text-align:center;"><strong>Black + White Logo File. Was <img src="<?php echo base_url()?>images/prices/order1/cross/black-N-white-cross-<?php echo COUNTRY; ?>.gif" align="absbottom" /><br />
                        </strong><img src="<?php echo base_url()?>images/prices/order1/black-N-white-price-<?php echo COUNTRY; ?>.png" align="absbottom" /></td>
    					</tr>

                        <tr>

                          <td bgcolor="" class="features">
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
                      <div style="height: 50px;"></div>
                      
                      <img src="<?php echo base_url()?>images/up-bar.jpg" width="538" height="18"/>
                      <table width="538" border="0" cellpadding="0" cellspacing="0" bgcolor="#F8FCE3">
                        <tr>
                          <td bgcolor="#F8FCE3">
                           <label>

                            <div align="center">
                            <input id="option3" name="option" type="radio" value="<?php if(@$_SESSION['option']==BOTH_SERVICES) echo BOTH_SERVICES;?>" onclick="extraService('option3','option','<?php echo BOTH_SERVICES?>','blackn24','24 Hour Delivery and Black and White file')" <?php if(@$_SESSION['option']==BOTH_SERVICES) echo 'checked'?>/><br /><strong><span id="option3_tick"><?php if(@$_SESSION['option']==BOTH_SERVICES){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>                                                       
                          </div>
                          </label>
                                                    
						 </td>
                          <td bgcolor="#F8FCE3"><div align="left" >
                              <label></label>
                              <font color="#000099" size="+2" face="Times New Roman, Times, serif">Order both the&nbsp;services above&nbsp;for<br/></font> <img src="<?php echo base_url()?>images/prices/order1/both-price-<?php echo COUNTRY; ?>.png" align="absbottom" /><br />
                                <h1 style="line-height:24px; color:#000000; font:normal Arial, Helvetica, sans-serif;"><span class="text-20">(Save additional <?php echo CURRENCY . Save_Additional; ?>)<br />SAVE 60% ..</span></h1></div></td>
                        </tr>
                        
                        
                      </table>
                      <img src="<?php echo base_url()?>images/basket-image/low-bar.jpg" width="538" height="18"/>
                       <div style="height: 50px;"></div> 

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
<?php if(isset($_SESSION['blackn24']) && $_SESSION['blackn24']!='') { ?>
<!--<input type='hidden' id='blackn24' name='blackn24' value='<?php echo @$_SESSION['blackn24'];?>' />-->
<?php } ?>
<!--<input type='hidden' id='option' name='option' value='<?php //echo @$_SESSION['option']; ?>' />-->

<input type="button" class="newbuttonback" value="Back" onclick="javascript:window.location='<?= site_url('order') ?>'" />
 <input  type='submit' class="newbuttoncontinue" value="Continue" align="middle" />
 </div>
<h2 style="font:bold 18px/24px Verdana, Geneva, sans-serif"><span class="text-orange">Our 1 month Offer <span class="text-blue">Must End</span><br />
Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span> </h2>
</div>
            
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
                      
                      <td class="shoppingheading" style="padding-top: 5px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!<div style="float:right"><img src="<?php echo base_url()?>images/basket-image/edit.gif" id="editBasket"/></div></td>
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
	
	<tr>
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['package'];?></td>
		<td class="basketdesc" align="right" valign="top"></td>
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['price'];?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['price']?>"/></td>
	</tr>
	<?php if(@$_SESSION['brouchure']!='' && @$_SESSION['bhaucharpackage']!='')
	{
	?>
	<tr id="bbrouchure">
		<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['bhaucharpackage'];?></td>
		<td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="brouchure___brouchure___<?php echo $_SESSION['brouchure']?>___bhaucharpackage___<?php echo $_SESSION['bhaucharpackage']?>"/></td>
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['brouchure'];?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['brouchure']?>"/></td>
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
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['web'];?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['web']?>"/></td>
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
		<td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="freshbasketEdit" id="option<?php echo $optionCount?>___option___<?php echo $_SESSION['option']?>___blackn24___<?php echo $_SESSION['blackn24']?>" title="<?php echo @$_SESSION['blackn24'];?>"/></td>
		<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo @$_SESSION['option'];?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo @$_SESSION['option']?>"/></td>
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
							
		?>     <tr id="b<?php echo $opt?>">
				<td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION[$extraopt];?></td>
				<td class="basketdesc" align="right" valign="top" ><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="<?php echo $opt.'___'.$opt.'___'.$_SESSION[$opt].'___'.$extraopt.'___'.@$_SESSION[$extraopt]?>"/></td>
				<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo $amount?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo $amount?>"/></td>
			  </tr>
			  <?php
			$total=$total + $amount;
			}
		}
	}	
	}	
	?>		
    </table>
    </td>
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
                      <td><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"/></td>
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
                              <td colspan="2" align="right"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value="<?php echo CURRENCY; ?>" type="text"/><input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 45px; text-align: left;" value="<?php echo $total + @$_SESSION['price'] + @$_SESSION['option'] + @$_SESSION['web'] + @$_SESSION['brouchure'].".00";?>" type="text" /></td>
                            </tr>
							<tr align="right">
                              <td width="20" align="right" >&nbsp;</td> 
                            <td width="50" height="10" align="right" style="background-image:url(<?php echo base_url()?>images/basket-image/shoose.gif); background-repeat:no-repeat; background-position:right;background-position:top;">&nbsp;</td>
                            </tr>
                        </tbody></table></td>
                    </tr>
                    
                    <tr> 
                      <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8" /></td>
                    </tr>
                  </tbody></table></td>
              </tr>
             <tr id="forReselect"> 
                <td colspan="3" class="basketbg2" align="center"> 
                <div style="float:left;padding:5px 15px;"><strong>Re-select the Items below</strong></div>
                <table border="0" cellpadding="0" cellspacing="0" width="330">
                    <tbody><tr> 
                      <td width="330" colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                    </tr>
                    <tr> 
                      <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff">                       	
                        <table width="325" border="0" cellpadding="0" cellspacing="0" class="formtoptext" id="reselect">
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
							<tr id="<?php echo $services_value[1]?>_del"><td valign="top" align="left" class="basketdesc"><?php echo $services_value[4]?></td><td valign="top" align="right" class="basketdesc"><img title="<?php echo $services_value[4]?>" alt="<?php echo $services_value[4]?>" src="<?php echo base_url()?>images/basket-image/select.gif" class="basketEdit_reselect" id="<?php echo $services?>"></td><td valign="top" align="right" class="basketdesc"><?php echo CURRENCY; ?><?php echo $amount?><!--<input type="hidden" value="<?php //echo $services?>" name="deletedServices['<?php //echo $services_value[2]?>']">--></td></tr>
                        <?php } }?>
                        </table>
                        </td>
                    </tr>
                    
                    <tr> 
                      <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"></td>
                    </tr>
                  </tbody></table></td>
              </tr>
              <tr> 
                <td colspan="3" class="bgpic"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                  <tr>
                    <td width="62%" height="190" ><p style="text-decoration:blink; padding:0 0 0 15px;"><font face="Arial, Helvetica, sans-serif"  size="+0"><u><?php echo GUARANTEE_DAY?>-Day Unconditional Money Back Guarantee on All Fees Paid!</u></font></p>
                      <p style="padding:0 0 0 15px; color:#0000CC; font-weight:bold;">- No admin fees<br />
                        - No questions<br />
                        - Just email &ldquo;refund me&rdquo;<br />
                    <span style="color:#555">- The Best Guarantee in the<br>
                      &nbsp;&nbsp;Logo Industry </span>
                    </p>
                    </td>
                    <td width="38%" id="bgimg" align="left"><img src="<?php echo base_url()?>images/basket-image/photolia5.gif" /></td>
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
<?php include_once("includes/logo-design/seal-top.php"); ?>
</div>



</div>
<div class="footer-container">
<?php include_once("includes/logo-design/footer.php"); ?>
</div>



</div>
</form> 
</body>
</html>