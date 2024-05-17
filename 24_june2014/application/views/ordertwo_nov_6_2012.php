<?php /*echo "<pre>"; 
print_r($_SESSION); 
echo "</pre>";*/?>
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

var six_logo_concept				 = '<?php echo SIX_LOGO_CONCEPT; ?>';

var logo_by_different_designer		 = '<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>';

var life_time_file_storage			 = '<?php echo LIFE_TIME_FILE_STORAGE; ?>';

var animated_flash 					 = '<?php echo ANIMATED_FLASH; ?>';

var logo_within_24_hour				 = '<?php echo LOGO_WITHIN_24_HOUR; ?>';

var black_n_white_file_logo			 = '<?php echo BLACK_N_WHITE_FILE_LOGO; ?>';

var impress_with_business_card 		 = '<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>';

var letter_head						 = '<?php echo LETTER_HEAD; ?>';

var envalope_design					 = '<?php echo ENVELOPE_DESIGN; ?>';

var compliment_slip					 = '<?php echo COMPLIMENT_SLIP; ?>';

var stationary_design_bundle		 = '<?php echo STATIONARY_DESIGN_BUNDLE; ?>';



var business_card_print_250			 = '<?php echo BUSINESS_CARD_PRINT_250; ?>';

var business_card_print_500			 = '<?php echo BUSINESS_CARD_PRINT_500; ?>';



var letter_head_print_25			 = '<?php echo LETTER_HEAD_PRINT_25; ?>';

var letter_head_print_250			 = '<?php echo LETTER_HEAD_PRINT_250; ?>';

var letter_head_print_1000			 = '<?php echo LETTER_HEAD_PRINT_1000; ?>';



var envalope_design_print_100 		 = '<?php echo ENVELOPE_DESIGN_PRINT_100; ?>';

var envalope_design_print_250		 = '<?php echo ENVELOPE_DESIGN_PRINT_250; ?>';

var envalope_design_print_1000		 = '<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>';



var complement_slip_100 			 = '<?php echo COMPLIMENT_SLIP_PRINT_100; ?>';

var complement_slip_250				 = '<?php echo COMPLIMENT_SLIP_PRINT_250; ?>';

var complement_slip_1000			 = '<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>';



var mouse_mat_with_logo				 = '<?php echo MOUSE_MAT_WITH_LOGO; ?>';

var cap_with_logo					 = '<?php echo CAP_WITH_LOGO; ?>';

var pen_with_logo					 = '<?php echo PEN_WITH_LOGO; ?>';

var bag_with_logo 					 = '<?php echo BAG_WITH_LOGO; ?>';

var tshirt_with_logo 				 = '<?php echo TSHIRT_WITH_LOGO; ?>';

</script>
<script language="javascript" src="<?php echo base_url()?>js/ordertwo.js"></script>
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='<?php echo base_url()?>js/jqueryUI/js/jquery-ui-1.8.16.custom.min.js'></script>
<link rel="stylesheet" href="<?php echo base_url()?>js/jqueryUI/css/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" />

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
	$('#LblYouPay').val(totalPrice);
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
						var	pagename = 'delete_session.php';
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
<?php include_once("includes/logo-design/analytics.php"); ?>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>

<body class="theme2">

<div id="dialog-confirm" style="display:none">Are you sure you wish to remove this service?</div>
<div class="wrapper">

  <div class="header-container">

    <?php include_once("includes/logo-design/header.php"); ?>

  </div>

  <div class="main-container">
 

    <div class="main col2-right-layout">
	 <form id="form1" name="form1" method="post" action="<?php echo site_url('logodesign/cartmid');?>">
      <div class="col-main-basket">

        <div class="order-one">

          <h1 style="line-height:40px; font:Arial, Helvetica, sans-serif;"><span class="text-50 text-blue">HALF-PRICE<br />

            <span class="text-24">SPECIALS NOW ON...</span></span></h1>

          <p style="font:'Times New Roman', Times, serif"><span class="text-red text-18">Hurry. All offers below end @<br />

            Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span></p>

          
          <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url()?>" />

            <table width="700" border="0" cellspacing="0" cellpadding="0" >

              <tr>

                <td width="520" valign="top"><table width="500" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td bgcolor="#F8FCE3">&nbsp;</td>

                      <td bgcolor="#F8FCE3"><p align="left">&nbsp;</p>

                        <p > <span class="text-pink text-14"><strong>Did  you know that our clients <br />

                          prove a competitive business  nature? <br />

                          Check out some data we have collected...</strong></span></p>

                        <p><span class="text-red">94%</span> select at least <span class="text-red">one</span> of the services  below.<br />

                          <span class="text-red"> 69% </span> select at least <span class="text-red">two</span> of the services  below.<br />

                          <span class="text-red">53% </span> select at least <span class="text-red">three</span> of the  services below.</p>

                        <p>We are proud that  it shows our good value. </p>

                        <p>Don&rsquo;t get left behind, especially in the current economic climate.</p>

                        <p>Be a serious business person and consider all the branding options open to you now!</p>

                        <p><strong>This will save you time having to purchase the items later.</strong></p>

                        <p> You need to invest to make it happen.</p></td>

                    </tr>

                  </table>

                  <table width="500" height="260" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/1.png" width="400" align="absmiddle"/></strong><font color="#FF0000"><Br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/1-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>Now only</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/1-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>

                    </tr>

                    <tr>
                    

                      <td bgcolor="#F8FCE3" id="ram"><div align="center">
							
                          
                          
                            <input id="opt1" name="opta1" type="radio" value="<?php if(@$_SESSION['opt1']==SIX_LOGO_CONCEPT) echo SIX_LOGO_CONCEPT;?>" onclick="extraService('opt1','opt1','<?php echo SIX_LOGO_CONCEPT?>','extraopt1','Extra 6 Logo Concept')" <?php if(@$_SESSION['extraopt1']=='Extra 6 Logo Concept') echo 'checked'?>/><br /><strong><span id="opt1_tick"><?php if(@$_SESSION['extraopt1']=='Extra 6 Logo Concept'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div></td>

                      <td height="138" bgcolor="#F8FCE3"><p align="left">

                          <?php if (@$_SESSION["package"]=='Silver Logo Package' || @$_SESSION["package"]=='Silver Plus Logo Package' || @$_SESSION["package"]=='Super Silver Plus Logo Package'){?>

                        </p>

                        <p><span class="correctfont">You currently have ordered 6 logo concepts.  Select the above to receive a total of <u>12 logo concepts.</u>This will massively increase the creativity and  options for you. All  services are backed by our 180-Day, 100% Money Back guarantee.</span> </p>

                        <p align="left">

                          <?php } else if (@$_SESSION["package"]=='Elite Logo Package' || @$_SESSION["package"]=='Elite Plus Logo Package' || @$_SESSION["package"]=='Super Elite Plus Logo Package'){?>

                        </p>

                        <p><span class="correctfont">You currently have ordered 12 logo  concepts. Select the above to receive 18 logo concepts.This will massively increase the creativity and  options for you. </span></p>

                        <p><span class="correctfont">All services are backed by our 180-Day, 100% Money Back guarantee. </span></p>

                        <p>

                          <?php }?>

                        </p>

                        <p align="left"><strong><br />

                          &nbsp;&nbsp;</strong></p></td>

                    </tr>

                  </table>

                  <table width="500"  border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/2.png" width="400" align="absmiddle"/></strong><font color="#FF0000"><Br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/2-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font> <img src="<?php echo base_url(); ?>images/prices/order2/prices/2-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>

                    </tr>


                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							 <input id="opt2" name="opta2" type="radio" value="<?php if(@$_SESSION['opt2']==LOGO_BY_DIFFERENT_DESIGNER) echo LOGO_BY_DIFFERENT_DESIGNER;?>" onclick="extraService('opt2','opt2','<?php echo LOGO_BY_DIFFERENT_DESIGNER?>','extraopt2','Get logos created a by a different designer')" <?php if(@$_SESSION['extraopt2']=='Get logos created a by a different designer') echo 'checked'?>/><br /><strong><span id="opt2_tick"><?php if(@$_SESSION['extraopt2']=='Get logos created a by a different designer'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                             
                         </div></td>

                      <td  bgcolor="#F8FCE3" id="logoconcept"><p align="left">&nbsp;</p>

                        <?php 

					  if (@$_SESSION["package"]=='Elite Logo Package' || @$_SESSION["package"]=='Elite Plus Logo Package' || @$_SESSION["package"]=='Super Elite Plus Logo Package')

					  {

					  ?>

                        <span class="correctfont">You currently have 6 designers assigned  to your project. By adding this service you will have 12 designers working on  your 12 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our 180-Day, 100% Money Back guarantee.</span>

                        <?php 

					  } 

					  if (@$_SESSION["package"]=='Silver Logo Package' || @$_SESSION["package"]=='Silver Plus Logo Package' || @$_SESSION["package"]=='Super Silver Plus Logo Package'){?>

                        <span class="correctfont">You currently have 3 designers assigned  to your project. By adding this service you will have 6 designers working on  your 6 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our 180-Day, 100% Money Back guarantee.</span>

                        <?php } ?>

                        <strong><br />

                        &nbsp;&nbsp;</strong></td>

                    </tr>

                  </table>

                  <table width="500" height="194" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/3.png" align="absmiddle"/> <br />

                        <font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/3-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>&nbsp;Now only<span class="heading" style="font-size:18px; font-weight:bold;"><strong><font color="#FF0000"><img src="<?php echo base_url(); ?>images/prices/order2/prices/3-<?php echo COUNTRY; ?>.png" align="absmiddle"/></font></strong></span></span></font></strong></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
							 <input id="opt3" name="opta3" type="radio" value="<?php if(@$_SESSION['opt3']==LIFE_TIME_FILE_STORAGE) echo LIFE_TIME_FILE_STORAGE;?>" onclick="extraService('opt3','opt3','<?php echo LIFE_TIME_FILE_STORAGE?>','extraopt3','Life time file storage')" <?php if(@$_SESSION['extraopt3']=='Life time file storage') echo 'checked'?>/><br /><strong><span id="opt3_tick"><?php if(@$_SESSION['extraopt3']=='Life time file storage'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                             
                        </div></td>

                      <td height="126" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">We save all your design files on our  servers for life in case you lose them. Otherwise,  if you lose your files you will have to pay and go through a &ldquo;re-design&rdquo;  process to obtain the files again.</span></p>

                        <p>&nbsp;</p>

                        <p align="left"><strong><br />

                          &nbsp;&nbsp;</strong></p></td>

                    </tr>

                  </table>

                  <table width="500" height="180" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/4.png" align="absmiddle"/></strong><strong><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/4-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/4-<?php echo COUNTRY; ?>.png" align="absmiddle"/> (60% OFF)</font></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
                      
						<input id="opt4" name="opta4" type="radio" value="<?php if(@$_SESSION['opt4']==ANIMATED_FLASH) echo ANIMATED_FLASH;?>" onclick="extraService('opt4','opt4','<?php echo ANIMATED_FLASH?>','extraopt4','Order an animated FLASH logo version')" <?php if(@$_SESSION['extraopt4']=='Order an animated FLASH logo version') echo 'checked'?>/><br /><strong><span id="opt4_tick"><?php if(@$_SESSION['extraopt4']=='Order an animated FLASH logo version'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                                 
                        </div></td>

                      <td height="112" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">Make your web site stand out.  Receive an animated logo version for your chosen logo that will make your logo  flash consistently with a beam of light racing across it.</span></p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                  </table>

                  <?php

			 

			if(@$_SESSION['option']!= BOTH_SERVICES)

			{

			if(@$_SESSION['option']!= EXPRESS_DELIVERY)

			{

			?>

                  <table width="500" height="194" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/5.png" align="absmiddle"/><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/5-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/5-<?php echo COUNTRY; ?>.png" align="absmiddle"/></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
                      
                      	<input id="opt5" name="opta5" type="radio" value="<?php if(@$_SESSION['opt5']==LOGO_WITHIN_24_HOUR) echo LOGO_WITHIN_24_HOUR;?>" onclick="extraService('opt5','opt5','<?php echo LOGO_WITHIN_24_HOUR?>','extraopt5','Get your logos within 24 hrs')" <?php if(@$_SESSION['extraopt5']=='Get your logos within 24 hrs') echo 'checked'?>/><br /><strong><span id="opt5_tick"><?php if(@$_SESSION['extraopt5']=='Get your logos within 24 hrs'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                        
</div></td>

                      <td height="126" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">Grow your business faster! The designs can  be at your fingertips. This express service applies to all logos and stationary  ordered. The quality is not affected. We simply prioritise your order.</span> </p>

                        <p>&nbsp;</p>

                        <p align="left"><strong><br />

                          &nbsp;&nbsp;</strong></p></td>

                    </tr>

                  </table>

                  <?php 

			}

			if(@$_SESSION['option']!= BLACK_N_WHITE)

			{

			?>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/6.png" align="absmiddle"/></strong><font color="#FF0000"><Br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/6-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/6-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td

                >

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt6" name="opta6" type="radio" value="<?php if(@$_SESSION['opt6']==BLACK_N_WHITE_FILE_LOGO) echo BLACK_N_WHITE_FILE_LOGO;?>" onclick="extraService('opt6','opt6','<?php echo BLACK_N_WHITE_FILE_LOGO?>','extraopt6','Order  black and white file logo version')" <?php if(@$_SESSION['extraopt6']=='Order  black and white file logo version') echo 'checked'?>/><br /><strong><span id="opt6_tick"><?php if(@$_SESSION['extraopt6']=='Order  black and white file logo version'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                         </div></td>

                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">Necessary  for any print or fax requirements. Recommended for your peace of mind.</span></p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                  </table>

                  <?php 

			}

			}

			?>

                  <table width="500" height="124" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/7.png" align="absmiddle"/></strong> <font color="#FF0000"><Br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/7-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/7-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3">

                      

                      <div align="center">
							<input id="opt7" name="opta7" type="radio" value="<?php if(@$_SESSION['opt7']==IMPRESS_WITH_BUSINESS_CARD) echo IMPRESS_WITH_BUSINESS_CARD;?>" onclick="extraService('opt7','opt7','<?php echo IMPRESS_WITH_BUSINESS_CARD?>','extraopt7','Impress with business cards')" <?php if(@$_SESSION['extraopt7']=='Impress with business cards') echo 'checked'?>/><br /><strong><span id="opt7_tick"><?php if(@$_SESSION['extraopt7']=='Impress with business cards'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                          </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">Order  3 business card design concepts.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p></td>

                    </tr>

                  </table>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/8.png" align="absmiddle"/> <br />

                        <font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/8-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>&nbsp;Now only<span class="heading" style="font-size:18px; font-weight:bold;"><strong><font color="#FF0000"><img src="<?php echo base_url(); ?>images/prices/order2/prices/8-<?php echo COUNTRY; ?>.png" align="absmiddle"/></font></strong></span></span></font></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt8" name="opta8" type="radio" value="<?php if(@$_SESSION['opt8']==LETTER_HEAD) echo LETTER_HEAD;?>" onclick="extraService('opt8','opt8','<?php echo LETTER_HEAD?>','extraopt8','Order letterhead designs')" <?php if(@$_SESSION['extraopt8']=='Order letterhead designs') echo 'checked'?>/><br /><strong><span id="opt8_tick"><?php if(@$_SESSION['extraopt8']=='Order letterhead designs'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                            
                          </div></td>

                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">Order  3 letterhead design concepts. </span></p></td>

                    </tr>

                  </table>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/9.png" align="absmiddle"/><br />

                        <font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/9-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>&nbsp;Now only<span class="heading" style="font-size:18px; font-weight:bold;"><strong><font color="#FF0000"><img src="<?php echo base_url(); ?>images/prices/order2/prices/9-<?php echo COUNTRY; ?>.png" align="absmiddle"/></font></strong></span></span></font></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt9" name="opta9" type="radio" value="<?php if(@$_SESSION['opt9']==ENVELOPE_DESIGN) echo ENVELOPE_DESIGN;?>" onclick="extraService('opt9','opt9','<?php echo ENVELOPE_DESIGN?>','extraopt9','Order envelope designs')" <?php if(@$_SESSION['extraopt9']=='Order envelope designs') echo 'checked'?>/><br /><strong><span id="opt9_tick"><?php if(@$_SESSION['extraopt9']=='Order envelope designs'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                         </div></td>

                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">&nbsp;Order  3 envelope design concepts.</span></p>

                        <p>&nbsp;</p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                  </table>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/10.png" align="absmiddle"/></strong> <strong><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/10-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/10-<?php echo COUNTRY; ?>.png" align="absmiddle"/></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt10" name="opta10" type="radio" value="<?php if(@$_SESSION['opt10']==COMPLIMENT_SLIP) echo COMPLIMENT_SLIP;?>" onclick="extraService('opt10','opt10','<?php echo COMPLIMENT_SLIP?>','extraopt10','Order compliment slip designs')" <?php if(@$_SESSION['extraopt10']=='Order compliment slip designs') echo 'checked'?>/><br /><strong><span id="opt10_tick"><?php if(@$_SESSION['extraopt10']=='Order compliment slip designs'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                         </div></td>

                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">&nbsp;Order  3 compliment slip design concepts.</span></p>

                       </td>

                    </tr>

                  </table>

                  <table width="500" height="319" border="0" cellpadding="10" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/11.png" align="absmiddle"/><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/11-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/11-<?php echo COUNTRY; ?>.png" align="absmiddle"/>&nbsp;(60% OFF)</font></strong></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							
                            <input id="opt11" name="opta11" type="radio" value="<?php if(@$_SESSION['opt11']==STATIONARY_DESIGN_BUNDLE) echo STATIONARY_DESIGN_BUNDLE;?>" onclick="extraService('opt11','opt11','<?php echo STATIONARY_DESIGN_BUNDLE?>','extraopt11','Order stationary design bundle')" <?php if(@$_SESSION['extraopt11']=='Order stationary design bundle') echo 'checked'?>/><br /><strong><span id="opt11_tick"><?php if(@$_SESSION['extraopt11']=='Order stationary design bundle'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>                            
                            
                          </div></td>

                      <td height="194" bgcolor="#F8FCE3">

                        <p><span class="correctfont">Order 3 design concepts for <u>each</u> of the following:</span></p>

                        <span class="correctfont">

                        <ul>

                          <li>Business  cards</li>

                          <li>Letterheads</li>

                          <li>Compliment  slips</li>

                          </ul>

                          </span>

                          </td>

                    </tr>

                    

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFF99" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFF99" class="heading" style="font-size:18px; font-weight:bold; color:#FF0000"><u>Get your print now!</u>

                        <p>&nbsp;</p>

                        <strong><img src="<?php echo base_url(); ?>images/prices/order2/12.png" align="absmiddle"/></strong></td>

                    </tr>

                    <tr height="30">

                      <td bgcolor="#F8FCE3"><div align="center">
						 <input id="opt12" name="opta12" type="radio" value="<?php if(@$_SESSION['opt12']==BUSINESS_CARD_PRINT_250) echo BUSINESS_CARD_PRINT_250;?>" onclick="extraService('opt12','opt12','<?php echo BUSINESS_CARD_PRINT_250?>','extraopt12','250 business cards (matt) including free delivery')" <?php if(@$_SESSION['extraopt12']=='250 business cards (matt) including free delivery') echo 'checked'?>/><br /><strong><span id="opt12_tick"><?php if(@$_SESSION['extraopt12']=='250 business cards (matt) including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                         
                         </div></td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><span class="correctfont">250 business cards (matt) <u>including</u> free  delivery<font color="#FF0000">&nbsp;</font></span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/12-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp; </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/12-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							 <input id="opt121" name="opta12" type="radio" value="<?php if(@$_SESSION['opt12']==BUSINESS_CARD_PRINT_500) echo BUSINESS_CARD_PRINT_500;?>" onclick="extraService('opt121','opt12','<?php echo BUSINESS_CARD_PRINT_500?>','extraopt12','500 business cards (matt) including free delivery')" <?php if(@$_SESSION['extraopt12']=='500 business cards (matt) including free delivery') echo 'checked'?>/><br /><strong><span id="opt121_tick"><?php if(@$_SESSION['extraopt12']=='500 business cards (matt) including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                             
                          </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p class="correctfont">500  business cards (matt) <u>including</u> free delivery </p>

                        <p class="correctfont"> <font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/13-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/13-<?php echo COUNTRY; ?>.png" align="absmiddle"/></p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><img src="<?php echo base_url(); ?>images/prices/order2/13.png" align="absmiddle"/></strong></td>

                    </tr>

                    <tr height="30">

                      <td bgcolor="#F8FCE3"><div align="center">
							 <input id="opt131" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_25) echo LETTER_HEAD_PRINT_25;?>" onclick="extraService('opt131','opt13','<?php echo LETTER_HEAD_PRINT_25?>','extraopt13','25 letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='25 letterheads including free delivery') echo 'checked'?>/><br /><strong><span id="opt131_tick"><?php if(@$_SESSION['extraopt13']=='25 letterheads including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                             
                          </div></td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">25  letterheads including free delivery&nbsp;&nbsp;</span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/14-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp;  Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/14-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
						 <input id="opt132" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_250) echo LETTER_HEAD_PRINT_250;?>" onclick="extraService('opt132','opt13','<?php echo LETTER_HEAD_PRINT_250?>','extraopt13','250 letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='250 letterheads including free delivery') echo 'checked'?>/><br /><strong><span id="opt132_tick"><?php if(@$_SESSION['extraopt13']=='250 letterheads including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                         
                         </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250 letterheads including free delivery&nbsp;<font color="#FF0000">&nbsp;</font></span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/15-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp;  Now only &nbsp;</font><font color="#33FF00"><b><img src="<?php echo base_url(); ?>images/prices/order2/prices/15-<?php echo COUNTRY; ?>.png" align="absmiddle"/>&nbsp;(60% OFF)</b></font></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt133" name="opta13" type="radio" value="<?php if(@$_SESSION['opt13']==LETTER_HEAD_PRINT_1000) echo LETTER_HEAD_PRINT_1000;?>" onclick="extraService('opt133','opt13','<?php echo LETTER_HEAD_PRINT_1000?>','extraopt13','1000  letterheads including free delivery')" <?php if(@$_SESSION['extraopt13']=='1000  letterheads including free delivery') echo 'checked'?>/><br /><strong><span id="opt133_tick"><?php if(@$_SESSION['extraopt13']=='1000  letterheads including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                            
                           </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p class="correctfont">1000  letterheads including free delivery&nbsp;&nbsp;</p>

                        <p class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/16-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp; Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/16-<?php echo COUNTRY; ?>.png" align="absmiddle"/></p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><img src="<?php echo base_url(); ?>images/prices/order2/14.png" align="absmiddle"/></strong></td>

                    </tr>

                    <tr height="30">

                      <td bgcolor="#F8FCE3"><div align="center">
							 <input id="opt141" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_100) echo ENVELOPE_DESIGN_PRINT_100;?>" onclick="extraService('opt141','opt14','<?php echo ENVELOPE_DESIGN_PRINT_100?>','extraopt14','100 envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='100 envelopes including free delivery') echo 'checked'?>/><br /><strong><span id="opt141_tick"><?php if(@$_SESSION['extraopt14']=='100 envelopes including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>
                             
                         </div></td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">100  envelopes including free delivery&nbsp; </span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/17-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/17-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt142" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_250) echo ENVELOPE_DESIGN_PRINT_250;?>" onclick="extraService('opt142','opt14','<?php echo ENVELOPE_DESIGN_PRINT_250?>','extraopt14','250  envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='250  envelopes including free delivery') echo 'checked'?>/><br /><strong><span id="opt142_tick"><?php if(@$_SESSION['extraopt14']=='250  envelopes including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong> 
                            
                          </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250  envelopes including free delivery&nbsp; </span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/18-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp; Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/18-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
                      
							<input id="opt143" name="opta14" type="radio" value="<?php if(@$_SESSION['opt14']==ENVELOPE_DESIGN_PRINT_1000) echo ENVELOPE_DESIGN_PRINT_1000;?>" onclick="extraService('opt143','opt14','<?php echo ENVELOPE_DESIGN_PRINT_1000?>','extraopt14','1000 envelopes including free delivery')" <?php if(@$_SESSION['extraopt14']=='1000 envelopes including free delivery') echo 'checked'?>/><br /><strong><span id="opt143_tick"><?php if(@$_SESSION['extraopt14']=='1000 envelopes including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong> 
                            
                          </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p class="correctfont">1000  envelopes including free delivery&nbsp; </p>

                        <p class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/19-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/19-<?php echo COUNTRY; ?>.png" align="absmiddle"/></p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><img src="<?php echo base_url(); ?>images/prices/order2/15.png" align="absmiddle"/></td>

                    </tr>

                    <tr height="30">

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt151" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_100) echo COMPLIMENT_SLIP_PRINT_100;?>" onclick="extraService('opt151','opt15','<?php echo COMPLIMENT_SLIP_PRINT_100?>','extraopt15','100 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='100 compliment slips including free delivery') echo 'checked'?>/><br /><strong><span id="opt151_tick"><?php if(@$_SESSION['extraopt15']=='100 compliment slips including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong> 
                            
                         </div></td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">100  compliment slips including free delivery&nbsp; </span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/20-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/20-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt152" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_250) echo COMPLIMENT_SLIP_PRINT_250;?>" onclick="extraService('opt152','opt15','<?php echo COMPLIMENT_SLIP_PRINT_250?>','extraopt15','250 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='250 compliment slips including free delivery') echo 'checked'?>/><br /><strong><span id="opt152_tick"><?php if(@$_SESSION['extraopt15']=='250 compliment slips including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong> 
                            
                         </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250  compliment slips including free delivery&nbsp;</span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/21-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp; Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/21-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							<input id="opt153" name="opta15" type="radio" value="<?php if(@$_SESSION['opt15']==COMPLIMENT_SLIP_PRINT_1000) echo COMPLIMENT_SLIP_PRINT_1000;?>" onclick="extraService('opt153','opt15','<?php echo COMPLIMENT_SLIP_PRINT_1000?>','extraopt15','1000 compliment slips including free delivery')" <?php if(@$_SESSION['extraopt15']=='1000 compliment slips including free delivery') echo 'checked'?>/><br /><strong><span id="opt153_tick"><?php if(@$_SESSION['extraopt15']=='1000 compliment slips including free delivery'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong> 
                            
                          </div></td>

                      <td height="56" bgcolor="#F8FCE3"><p class="correctfont">1000  compliment slips including free delivery </p>

                        <p class="correctfont"><font color="#FF0000"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/22-<?php echo COUNTRY; ?>.gif" align="texttop"/></u></font> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/22-<?php echo COUNTRY; ?>.png" align="absmiddle"/></p></td>

                    </tr>

                  </table>

                  <table width="500" height="198" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><img src="<?php echo base_url(); ?>images/prices/order2/16.png" width="400" align="absmiddle"/> (free delivery)!&nbsp;</strong><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/23-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/23-<?php echo COUNTRY; ?>.png" align="absmiddle"/>Each.</font></td>

                    </tr>

                    <tr height="30">

                      <td rowspan="2" bgcolor="#F8FCE3"><div align="center">

						<input id="opt16" name="opta16" type="radio" value="<?php if(@$_SESSION['opt16']==MOUSE_MAT_WITH_LOGO) echo MOUSE_MAT_WITH_LOGO;?>" onclick="extraService('opt16','opt16','<?php echo MOUSE_MAT_WITH_LOGO?>','extraopt16','Order a Mouse Mat with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt16']=='Order a Mouse Mat with your personal logo on (free delivery)!') echo 'checked'?>/><br /><strong><span id="opt16_tick"><?php if(@$_SESSION['extraopt16']=='Order a Mouse Mat with your personal logo on (free delivery)!'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>	
                         </div></td>

                      <td height="84" valign="bottom" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">Be  motivated to grow your business. Motivate you and/or your staff!</span></p>

                        <p>&nbsp;</p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td height="56" bgcolor="#F8FCE3"><table border="0" cellspacing="0" cellpadding="0">

                          <tr>

                            <td colspan="2"><p><span class="correctfont">Quantity:</span></p></td>

                          </tr>

                          <tr>

                            <td colspan="2"><p>&nbsp;</p></td>

                          </tr>

                          <tr>

                            <td width="68"><p>

                                <select name="select" id="select1" onchange="javascript:$('#opt16').click();$('#opt16').click();">

                                  <option <?php if(@$_SESSION['select']=='1'){?> selected="selected" <?php }?> value="1">1 </option>

                                  <option <?php if(@$_SESSION['select']=='2'){?> selected="selected" <?php }?>value="2">2 </option>

                                  <option <?php if(@$_SESSION['select']=='3'){?> selected="selected" <?php }?>value="3">3 </option>

                                  <option <?php if(@$_SESSION['select']=='4'){?> selected="selected" <?php }?>value="4">4 </option>

                                  <option <?php if(@$_SESSION['select']=='5'){?> selected="selected" <?php }?>value="5">5 </option>

                                  <option <?php if(@$_SESSION['select']=='10'){?> selected="selected" <?php }?>value="6">10 </option>

                                  <option <?php if(@$_SESSION['select']=='20'){?> selected="selected" <?php }?>value="7">20 </option>

                                  <option <?php if(@$_SESSION['select']=='50'){?> selected="selected" <?php }?>value="8">50 </option>

                                  <option <?php if(@$_SESSION['select']=='100'){?> selected="selected" <?php }?>value="9">100 </option>

                                  <option <?php if(@$_SESSION['select']=='200'){?> selected="selected" <?php }?>value="10">200 </option>

                                </select>

                              </p></td>

                            <td width="32"></td>

                          </tr>

                          <tr>

                            <td colspan="2"><p>&nbsp;</p></td>

                          </tr>

                        </table>

                        <p>&nbsp;</p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><img src="<?php echo base_url(); ?>images/prices/order2/17.png" width="400" align="absmiddle"/>(free delivery)! <img src="<?php echo base_url(); ?>images/prices/order2/cross/24-<?php echo COUNTRY; ?>.jpg" align="texttop"/>Now only <img src="<?php echo base_url(); ?>images/prices/order2/prices/24-<?php echo COUNTRY; ?>.png" align="absmiddle"/>Each.</td>

                    </tr>

                    <tr height="30">

                      <td rowspan="2" bgcolor="#F8FCE3"><div align="center">
                      
                      
						<input id="opt17" name="opta17" type="radio" value="<?php if(@$_SESSION['opt17']==CAP_WITH_LOGO) echo CAP_WITH_LOGO;?>" onclick="extraService('opt17','opt17','<?php echo CAP_WITH_LOGO?>','extraopt17','Order a <u>custom CAP</u> with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt17']=='Order a <u>custom CAP</u> with your personal logo on (free delivery)!') echo 'checked'?>/><br /><strong><span id="opt17_tick"><?php if(@$_SESSION['extraopt17']=='Order a <u>custom CAP</u> with your personal logo on (free delivery)!'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>	
                         </div>
                         
                          </td>

                      <td bgcolor="#F8FCE3" valign="bottom">

                        <p><span class="correctfont">Look dead professional! </span></p>

                        </td>

                    </tr>

                    <tr>

                      <td height="56" bgcolor="#F8FCE3">

                      <p>Quantity<br />

                          <select name="select2" id="select2" onchange="javascript:$('#opt17').click();$('#opt17').click();">

                            <?php for($i=1;$i<=50;$i++){

                            ?>

                            <option <?php if(@$_SESSION['select2']==$i){?> selected="selected" <?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                            <?php }?>

                          </select>

                          </p>

                          <table border="0" cellspacing="0" cellpadding="0">

                          <tr>

                          <td colspan="2"><p><span class="correctfont">Colour  Options:</span></p></td>

                          </tr>

                          <tr>

                            <td colspan="2"><p>&nbsp;</p></td>

                          </tr>

                          <tr>

                            <td><p>

                                <select name="select3" id="select3" onchange="javascript:$('#opt17').click();$('#opt17').click();">

                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - White'){?> selected="selected" <?php }?> value="Cap Colour - White">Cap Colour - White </option>

                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - Black'){?> selected="selected" <?php }?>value="Cap Colour - Black">Cap Colour - Black </option>

                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - Blue'){?> selected="selected" <?php }?>value="Cap Colour - Blue">Cap Colour - Blue </option>

                                </select>

                              </p></td>

                            <td></td>

                          </tr>

                        </table></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><img src="<?php echo base_url(); ?>images/prices/order2/18.png" width="370" align="absmiddle"/>(free delivery)! <img src="<?php echo base_url(); ?>images/prices/order2/cross/25-<?php echo COUNTRY; ?>.jpg" align="texttop"/> Now only <img src="<?php echo base_url(); ?>images/prices/order2/prices/1-<?php echo COUNTRY; ?>.png" align="absmiddle"/>Each.</td>

                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3"><div align="center">
							
                              <input id="opt18" name="opta18" type="radio" value="<?php if(@$_SESSION['opt18']==PEN_WITH_LOGO) echo PEN_WITH_LOGO;?>" onclick="extraService('opt18','opt18','<?php echo PEN_WITH_LOGO?>','extraopt18','Order <u>pens </u>with  your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt18']=='Order <u>pens </u>with  your personal logo on (free delivery)!') echo 'checked'?>/><br /><strong><span id="opt18_tick"><?php if(@$_SESSION['extraopt18']=='Order <u>pens </u>with  your personal logo on (free delivery)!'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div>
                            
                       </td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">5 quality black ink pens with stylish  hand grip.</span></p>

                        <p>&nbsp;</p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><img src="<?php echo base_url(); ?>images/prices/order2/19.png" align="absmiddle"/> (free delivery)!&nbsp;</strong><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/26-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/26-<?php echo COUNTRY; ?>.png" align="absmiddle"/> Each.</font></td>

                    </tr>

                    <tr height="30">

                      <td bgcolor="#F8FCE3"><div align="center">
                      
							 <input id="opt19" name="opta19" type="radio" value="<?php if(@$_SESSION['opt19']==BAG_WITH_LOGO) echo BAG_WITH_LOGO;?>" onclick="extraService('opt19','opt19','<?php echo BAG_WITH_LOGO?>','extraopt19','Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!')" <?php if(@$_SESSION['extraopt19']=='Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!') echo 'checked'?>/><br /><strong><span id="opt19_tick"><?php if(@$_SESSION['extraopt19']=='Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong></div>
                             
                        </td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><span class="correctfont">A great way to promote your business, or a useful  accessory for 

                          personal use.Made from 100% natural 8 oz. (272 g/m2)  cotton canvas</span><span class="correctfont">&ndash;great for the environment.  Approximate size of a supermarket bag.</span> </p>

                        <p>&nbsp;</p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                  </table>

                  <table width="500" height="150" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">

                    <tr>

                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><span class="heading" style="font-size:18px; font-weight:bold; color:#0033CC"><strong><img src="<?php echo base_url(); ?>images/prices/order2/20.png"  align="absmiddle"/></strong></span></strong></span></strong></span></strong></span></strong></span></strong></span></strong></span>(free delivery)!&nbsp;&nbsp;</strong><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/27-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/27-<?php echo COUNTRY; ?>.png" align="absmiddle"/> Each.</font></td>

                    </tr>

                    <tr height="30">

                      <td rowspan="2" bgcolor="#F8FCE3"><div align="center">
							<input id="opt20" name="opta20" type="radio" value="<?php if(@$_SESSION['opt20']==TSHIRT_WITH_LOGO) echo TSHIRT_WITH_LOGO;?>" onclick="extraService('opt20','opt20','<?php echo TSHIRT_WITH_LOGO?>','extraopt20','Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!')" <?php if(@$_SESSION['extraopt20']=='Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!') echo 'checked'?>/><br /><strong><span id="opt20_tick"><?php if(@$_SESSION['extraopt20']=='Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!'){?><img src="<?php echo base_url();?>images/basket-image/correct.gif" /><?php }else{?>Select<br /> here<?php }?></span></strong>	
                         </div></td>

                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>

                        <p><span class="correctfont">Impress friends and family! Order here a  100% cotton <br />

                          white T-shirt with your logo centralised  large on the front.</span> </p>

                        <p>&nbsp;</p>

                        <p align="left">&nbsp;</p></td>

                    </tr>

                    <tr>

                      <td height="56" bgcolor="#F8FCE3"><table border="0" cellpadding="0">

                          <tr>

                            <td><p><span class="correctfont">Size</span></p></td>

                            <td><p><span class="correctfont">Quantity</span></p></td>

                          </tr>

                          <tr>

                            <td><p><span class="correctfont">S</span></p></td>

                            <td><p>

                                <select name="select4" id="select4" onchange="javascript:$('#opt20').click();$('#opt20').click();" >

                                  <?php 
								  if(!$_SESSION['select4'])
								  	$selvalue = 50;
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
								  	$selvalue = 50;
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
								  	$selvalue = 50;
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
								  	$selvalue = 50;
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
								  	$selvalue = 50;
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

                  </table><br />

                  <div align="center">

                    <!--<input name='selectbox' type='hidden' id='selectbox' value="<?=@$_SESSION['selectbox'];?>" />

                    <input name='selectbox2' type='hidden' id='selectbox2' value="<?=@$_SESSION['selectbox2'];?>" />

                    <input name='selectbox4' type='hidden' id='selectbox4' value="<?=@$_SESSION['selectbox4'];?>" />

                    <input name='selectbox5' type='hidden' id='selectbox5' value="<?=@$_SESSION['selectbox5'];?>" />

                    <input name='selectbox6' type='hidden' id='selectbox6' value="<?=@$_SESSION['selectbox6'];?>" />

                    <input name='selectbox7' type='hidden' id='selectbox7' value="<?=@$_SESSION['selectbox7'];?>" />

                    <input name='selectbox8' type='hidden' id='selectbox8' value="<?=@$_SESSION['selectbox8'];?>" />

                    <input name='package' type='hidden' id='package' value="<?=@$_SESSION['package'];?>" />

                    <input name='extraopt1' type='hidden' id='extraopt1' value="<?=@$_SESSION['extraopt1'];?>" />

                    <input name='extraopt2' type='hidden' id='extraopt2' value="<?=@$_SESSION['extraopt2'];?>" />

                    <input name='extraopt3' type='hidden' id='extraopt3' value="<?=@$_SESSION['extraopt3'];?>" />

                    <input name='extraopt4' type='hidden' id='extraopt4' value="<?=@$_SESSION['extraopt4'];?>" />

                    <input name='extraopt5' type='hidden' id='extraopt5' value="<?=@$_SESSION['extraopt5'];?>" />

                    <input name='extraopt6' type='hidden' id='extraopt6' value="<?=@$_SESSION['extraopt6'];?>" />

                    <input name='extraopt7' type='hidden' id='extraopt7' value="<?=@$_SESSION['extraopt7'];?>" />

                    <input name='extraopt8' type='hidden' id='extraopt8' value="<?=@$_SESSION['extraopt8'];?>" />

                    <input name='extraopt9' type='hidden' id='extraopt9' value="<?=@$_SESSION['extraopt9'];?>" />

                    <input name='extraopt10' type='hidden' id='extraopt10' value="<?=@$_SESSION['extraopt10'];?>" />

                    <input name='extraopt11' type='hidden' id='extraopt11' value="<?=@$_SESSION['extraopt11'];?>" />

                    <input name='extraopt12' type='hidden' id='extraopt12' value="<?=@$_SESSION['extraopt12'];?>" />

                    <input name='extraopt13' type='hidden' id='extraopt13' value="<?=@$_SESSION['extraopt13'];?>" />

                    <input name='extraopt14' type='hidden' id='extraopt14' value="<?=@$_SESSION['extraopt14'];?>" />

                    <input name='extraopt15' type='hidden' id='extraopt15' value="<?=@$_SESSION['extraopt15'];?>" />

                    <input name='extraopt16' type='hidden' id='extraopt16' value="<?=@$_SESSION['extraopt16'];?>" />

                    <input name='extraopt17' type='hidden' id='extraopt17' value="<?=@$_SESSION['extraopt17'];?>" />

                    <input name='extraopt18' type='hidden' id='extraopt18' value="<?=@$_SESSION['extraopt18'];?>" />

                    <input name='extraopt19' type='hidden' id='extraopt19' value="<?=@$_SESSION['extraopt19'];?>" />

                    <input name='extraopt20' type='hidden' id='extraopt20' value="<?=@$_SESSION['extraopt20'];?>" />

                    <input name='opt1' type='hidden' id='opt1' value="<?=@$_SESSION['opt1'];?>" />

                    <input name='opt2' type='hidden' id='opt2' value="<?=@$_SESSION['opt2'];?>" />

                    <input name='opt3' type='hidden' id='opt3' value="<?=@$_SESSION['opt3'];?>" />

                    <input name='opt4' type='hidden' id='opt4' value="<?=@$_SESSION['opt4'];?>" />

                    <input name='opt5' type='hidden' id='opt5' value="<?=@$_SESSION['opt5'];?>" />

                    <input name='opt6' type='hidden' id='opt6' value="<?=@$_SESSION['opt6'];?>" />

                    <input name='opt7' type='hidden' id='opt7' value="<?=@$_SESSION['opt7'];?>" />

                    <input name='opt8' type='hidden' id='opt8' value="<?=@$_SESSION['opt8'];?>" />

                    <input name='opt9' type='hidden' id='opt9' value="<?=@$_SESSION['opt9'];?>" />

                    <input name='opt10' type='hidden' id='opt10' value="<?=@$_SESSION['opt10'];?>" />

                    <input name='opt11' type='hidden' id='opt11' value="<?=@$_SESSION['opt11'];?>" />

                    <input name='opt12' type='hidden' id='opt12' value="<?=@$_SESSION['opt12'];?>" />

                    <input name='opt13' type='hidden' id='opt13' value="<?=@$_SESSION['opt13'];?>" />

                    <input name='opt14' type='hidden' id='opt14' value="<?=@$_SESSION['opt14'];?>" />

                    <input name='opt15' type='hidden' id='opt15' value="<?=@$_SESSION['opt15'];?>" />

                    <input name='opt16' type='hidden' id='opt16' value="<?=@$_SESSION['opt16'];?>" />

                    <input name='opt17' type='hidden' id='opt17' value="<?=@$_SESSION['opt17'];?>" />

                    <input name='opt18' type='hidden' id='opt18' value="<?=@$_SESSION['opt18'];?>" />

                    <input name='opt19' type='hidden' id='opt19' value="<?=@$_SESSION['opt19'];?>" />

                    <input name='opt20' type='hidden' id='opt20' value="<?=@$_SESSION['opt20'];?>" />-->

                    <input name='rowcoun' type='hidden' id='rowcoun' value="23" />

                    <input type="button" class="newbuttonback" value="Back" onclick="javascript:window.location='<?= site_url('orderone') ?>'" />
                    <input  type='submit' class="newbuttoncontinue" value="Continue" align="middle" />
                  </div></td>

                <td width="249" valign="top"><br /></td>

              </tr>

            </table>

         

        </div>

      </div>

      <div class="side-bar" style="position:relative;">

        <div id="floatdiv" style="width: 365px; position: absolute; height: auto;">

          <table summary="ShoppingBasket" border="0" cellpadding="0" cellspacing="0" width="365">

            <tbody>

              <tr>

                <td colspan="3" class="baskettopheader"><table border="0" cellpadding="0" cellspacing="0" width="100%">

                    <tbody>

                      <tr>

                        <td class="shoppingheading" style="padding-top: 5px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!<div style="float:right"><img src="<?php echo base_url()?>images/basket-image/edit.gif" id="editBasket"/></div></td>

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

                                    <tbody>

                                      <tr>

                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION["package"];?></td>

                                        <td class="basketdesc" align="right" valign="top">&nbsp;</td>

                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["price"];?><input class="pricewala" type="hidden" value="<?php echo @$_SESSION["price"]?>" name="priceValue[]"></td>

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
		<td class="basketdesc" align="right" valign="top"><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="option<?php echo $optionCount?>___option___<?php echo $_SESSION['option']?>___blackn24___<?php echo $_SESSION['blackn24']?>" title="<?php echo @$_SESSION['blackn24'];?>"/></td>
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
				<td class="basketdesc" align="right" valign="top" ><img src="<?php echo base_url()?>images/basket-image/remove.gif" class="freshbasketEdit" id="<?php echo $opt.'___'.$opt.'___'.$_SESSION[$opt].'___'.$extraopt.'___'.@$_SESSION[$extraopt]?>"/></td>
				<td class="basketdesc" align="right" valign="top"><?php echo CURRENCY; ?><?php echo $amount?><input type="hidden" name="priceValue[]" class="pricewala" value="<?php echo $amount?>"/></td>
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

                        <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"><table width="345" border="0" cellpadding="0" cellspacing="0" class="formtoptext">

                            <tbody>

                              <tr align="right">

                                <td width="175" rowspan="2"align="left" style="width: 165px; padding-left: 10px;"><span id="LblYouPayText" style="font-weight: bold;" class="totalpricetxt">Total </span></td>

                                <td width="14" rowspan="2" align="right">&nbsp;</td>

                                <td colspan="2" align="right"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value= '<?php echo CURRENCY; ?>' type="text"/>

                                  <input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 45px; text-align: left;" value="<?php echo $total + @$_SESSION["price"] + @$_SESSION["option"] + @$_SESSION['web'] + @$_SESSION['brouchure'].".00";?>" type="text" /></td>

                              </tr>

                              <tr align="right">

                                <td width="20" align="right" >&nbsp;</td>

                                <td width="50" height="10" align="right" style="background-image:url(<?php echo base_url()?>images/basket-image/shoose.gif); background-repeat:no-repeat; background-position:right;background-position:top;">&nbsp;</td>

                              </tr>

                            </tbody>

                          </table></td>

                      </tr>

                      <tr>

                        <td colspan="2" align="center"><img src="<?php echo base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"></td>

                      </tr>

                    </tbody>

                  </table></td>

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
							<tr id="<?php echo $services_value[1]?>_del"><td valign="top" align="left" class="basketdesc"><?php echo $services_value[4]?></td><td valign="top" align="right" class="basketdesc"><img title="<?php echo $services_value[4]?>" alt="<?php echo $services_value[4]?>" src="<?php echo base_url()?>images/basket-image/select.gif" class="basketEdit_reselect" id="<?php echo $services?>"></td><td valign="top" align="right" class="basketdesc"><?php echo CURRENCY; ?><?php echo $amount?><!--<input type="hidden" value="<?php //echo $services?>" name="deletedServices['<?php //echo $services_value[1]?>']">--></td></tr>
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

                          &nbsp;&nbsp;Logo Industry </span> </p></td>

                      <td width="38%" id="bgimg" align="left"><img src="<?php echo base_url()?>images/basket-image/photolia5.gif" /></td>

                    </tr>

                  </table>

                  <p class="pad" style="text-decoration:blink;">&nbsp;</p></td>

              </tr>

              <tr>

                <td colspan="3" ><p><img src="<?php echo base_url()?>images/basket-image/basket2.gif" alt="basket-bottom1" width="365" height="17"/></p></td>

              </tr>

            </tbody>

          </table>

        </div>

        <script src="<?php echo base_url()?>js/float2.js" type="text/javascript"></script>

      </div>
	 </form>
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