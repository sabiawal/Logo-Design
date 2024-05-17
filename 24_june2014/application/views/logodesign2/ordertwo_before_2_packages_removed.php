<?php
//if(ENVIRONMENT =='development'){
    //echo "hello form development";
    //echo "<pre>";
    //print_r($_SESSION);  
    //echo "</pre>";  
    
//}//echo @$_SESSION["package"];
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
<script>
var baseUrl = '<?= base_url()?>';
var currency = '<?= CURRENCY; ?>';

var six_logo_concept				 = '<?= SIX_LOGO_CONCEPT; ?>';
var logo_by_different_designer		 = '<?= LOGO_BY_DIFFERENT_DESIGNER; ?>';
var life_time_file_storage			 = '<?= LIFE_TIME_FILE_STORAGE; ?>';
var animated_flash 					 = '<?= ANIMATED_FLASH; ?>';
var logo_within_24_hour				 = '<?= LOGO_WITHIN_24_HOUR; ?>';
var black_n_white_file_logo			 = '<?= BLACK_N_WHITE_FILE_LOGO; ?>';
var impress_with_business_card 		 = '<?= IMPRESS_WITH_BUSINESS_CARD; ?>';
var letter_head						 = '<?= LETTER_HEAD; ?>';
var envalope_design					 = '<?= ENVELOPE_DESIGN; ?>';
var compliment_slip					 = '<?= STATIONARY_DESIGN_BUNDLE; ?>';
var business_card_print_250			 = '<?= BUSINESS_CARD_PRINT_250; ?>';
var business_card_print_500			 = '<?= BUSINESS_CARD_PRINT_500; ?>';
var letter_head_print_25			 = '<?= LETTER_HEAD_PRINT_25; ?>';
var letter_head_print_250			 = '<?= LETTER_HEAD_PRINT_250; ?>';
var letter_head_print_1000			 = '<?= LETTER_HEAD_PRINT_1000; ?>';
var envalope_design_print_100 		 = '<?= ENVELOPE_DESIGN_PRINT_100; ?>';
var envalope_design_print_250		 = '<?= ENVELOPE_DESIGN_PRINT_250; ?>';
var envalope_design_print_1000		 = '<?= ENVELOPE_DESIGN_PRINT_1000; ?>';
var complement_slip_100 			 = '<?= COMPLIMENT_SLIP_PRINT_100; ?>';
var complement_slip_250				 = '<?= COMPLIMENT_SLIP_PRINT_250; ?>';
var complement_slip_1000			 = '<?= COMPLIMENT_SLIP_PRINT_1000; ?>';
var mouse_mat_with_logo				 = '<?= MOUSE_MAT_WITH_LOGO; ?>';
var cap_with_logo					 = '<?= CAP_WITH_LOGO; ?>';
var pen_with_logo					 = '<?= PEN_WITH_LOGO; ?>';
var bag_with_logo 					 = '<?= BAG_WITH_LOGO; ?>';
var tshirt_with_logo 				 = '<?= TSHIRT_WITH_LOGO; ?>';
</script>

<script language="javascript" src="<?= base_url()?>js/ordertwo.js"></script>
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
				window.location = 'delete_session.php?del_name1='+values[0]+'&del_name2='+values[1]+'&redirectto=<?php echo base_url()?>ordertwo';
				/*var thiss = $(this);
				$.ajax({
				  type: "GET",
				  url: "delete_session.php",
				  data: "del_name="+values[0],
				  success: function(msg){					  
					window.location.reload();
				  }
				});*/
			}
		});
	});
</script>
<?php include_once("includes/logo-design/analytics.php"); ?>
</head>
<body>

<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main-basket">
        <div class="order-one">
          <h1 style="line-height:40px; font:Arial, Helvetica, sans-serif;"><span class="text-50 text-blue">HALF-PRICE<br />
            <span class="text-24">SPECIALS NOW ON...</span></span></h1>
          <p style="font:'Times New Roman', Times, serif"><span class="text-red text-18">Hurry. All offers below end @<br />
            Midnight <?php if(COUNTRY == "UK"){echo $today;}else{echo $today.'('.date('e').')';} ?></span></p>
          <form id="form1" name="form1" method="post" action="<?php echo site_url('logodesign2/cartmid');?>">
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
                <?php if(@$_SESSION["package"] == 'Basic Logo Package' || @$_SESSION["package"] == 'Economy Logo Package' || @$_SESSION["package"] == 'Deluxe Logo Package' || @$_SESSION["package"] == 'Premium Logo Package' || @$_SESSION["package"] == 'Ultimate Logo Package' ){  ?>
                  <table width="500" height="260" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
                     <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/1.png" width="400" align="absmiddle"/></strong><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/1-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>Now only</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/1-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>
                    </tr>
                    
                    
                    <tr>
                      <td bgcolor="#F8FCE3" id="ram"><div align="center">
                          <input name="opta1" <?php if(@$_SESSION['opt1']==SIX_LOGO_CONCEPT){ ?>style="display:none"<?php }else{  ?>style="display:inherit"<?php }?> type="radio" id="optt1" onclick="javascript:SelectAll_2('Extra 6 Logo Concept','<?php echo SIX_LOGO_CONCEPT; ?>','opta1','1');" value='<?php echo SIX_LOGO_CONCEPT; ?>' />

                          <input name="opta1" type="radio" <?php if(@$_SESSION['opt1']== SIX_LOGO_CONCEPT){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?> id="optdel1" value= '<?php echo SIX_LOGO_CONCEPT; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta1','1');"  />

                          <input name="opta1" type="radio" style="display:none" id="optdela1" onclick="javascript:SelectAll_2('Extra 6 Logo Concept','<?php echo SIX_LOGO_CONCEPT; ?>','opta1','1');" value='<?php echo SIX_LOGO_CONCEPT; ?>' />
                          <br />
                          <strong><span id="tick1">
                          <?php if(@$_SESSION['opt1']== SIX_LOGO_CONCEPT ){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="138" bgcolor="#F8FCE3">
                      <p align="left">
                          <?php if (@$_SESSION["package"]=='Silver Logo Package' || @$_SESSION["package"]=='Silver Plus Logo Package' || @$_SESSION["package"]=='Super Silver Plus Logo Package' || @$_SESSION["package"]=='Premium Logo Package' || @$_SESSION["package"]=='Ultimate Logo Package'){ ?>
                      </p>

                        <p><span class="correctfont">You currently have ordered 6 logo concepts.  Select the above to receive a total of <u>12 logo concepts.</u>This will massively increase the creativity and  options for you. All  services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span> </p>

                        <p align="left">
                          <?php } else if (@$_SESSION["package"]=='Elite Logo Package' || @$_SESSION["package"]=='Elite Plus Logo Package' || @$_SESSION["package"]=='Super Elite Plus Logo Package'){ ?></p>

                        <p><span class="correctfont">You currently have ordered 12 logo  concepts. Select the above to receive 18 logo concepts.This will massively increase the creativity and  options for you. </span></p>

                        <p><span class="correctfont">All  services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee. </span></p>
                        <p>
                        <!-- Added FOR New Package page Started -->
                        <?php } else if (@$_SESSION["package"]=='Basic Logo Package'){ ?></p>

                        <p><span class="correctfont">You currently have ordered 1 logo concepts.  Select the above to receive a total of <u>7 logo concepts.</u>This will massively increase the creativity and  options for you. All  services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span></p>                        
                        <p>
                        
                        <?php } else if (@$_SESSION["package"]=='Economy Logo Package'){ ?></p>

                        <p><span class="correctfont">You currently have ordered 2 logo concepts.  Select the above to receive a total of <u>8 logo concepts.</u>This will massively increase the creativity and  options for you. All  services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span></p>
                        <p>
                        <?php } else if (@$_SESSION["package"]=='Deluxe Logo Package'){ ?></p>

                        <p><span class="correctfont">You currently have ordered 3 logo concepts.  Select the above to receive a total of <u>9 logo concepts.</u>This will massively increase the creativity and  options for you. All  services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span></p>
                        
                        <p>
                        
                        <!-- Added FOR New Package page Ended -->
                        
                        <?php }?></p>

                        <p align="left"><strong><br />
                          &nbsp;&nbsp;</strong></p>
                          </td>
                    </tr>                    
                    
                  </table>
                  <?php }?>
 <?php if(@$_SESSION["package"] == 'Basic Logo Package' || @$_SESSION["package"] == 'Economy Logo Package' || @$_SESSION["package"] == 'Deluxe Logo Package' || @$_SESSION["package"] == 'Premium Logo Package' || @$_SESSION["package"] == 'Ultimate Logo Package' ){  ?>
    <table width="500"  border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
        <tr>
            <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
            <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/2.png" width="400" align="absmiddle"/></strong><font color="#FF0000"><br />        
            <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/2-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font> <img src="<?php echo base_url(); ?>images/prices/order2/prices/2-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>
        </tr>
        
        <tr>
            <td bgcolor="#F8FCE3"><div align="center">
            <input id="optt2" name="opta2" <?php if(@$_SESSION['opt2'] == LOGO_BY_DIFFERENT_DESIGNER){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  value='<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>' onclick="javascript:SelectAll_2('Get logos created by a different designer','<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>','opta2','2');" type="radio" />
            <input name="opta2" type="radio" <?php if(@$_SESSION['opt2']== LOGO_BY_DIFFERENT_DESIGNER ){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel2" value= '<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta2','2');"  />
            <input name="opta2" type="radio" style="display:none" id="optdela2" onclick="javascript:SelectAll_2('Get logos created by a different designer','<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>','opta2','2');" value='<?php echo LOGO_BY_DIFFERENT_DESIGNER; ?>' />
            <br />
            <strong><span id="tick2">
            <?php if(@$_SESSION['opt2']== LOGO_BY_DIFFERENT_DESIGNER){?>
            <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
            <?php }else{?>
            Select<br />
            here
            <?php }?>
            </span></strong></div></td>
            <td  bgcolor="#F8FCE3" id="logoconcept"><p align="left">&nbsp;</p>
            <?php 
            if(@$_SESSION["package"]=='Elite Logo Package' || @$_SESSION["package"]=='Elite Plus Logo Package' || @$_SESSION["package"]=='Super Elite Plus Logo Package' || @$_SESSION["package"]=='Premium Logo Package' || @$_SESSION["package"]=='Ultimate Logo Package'){ ?>
            <span class="correctfont">You currently have 6 designers assigned  to your project. By adding this service you will have 12 designers working on  your 12 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span>
            <?php 
            }
            if(@$_SESSION["package"]=='Basic Logo Package'){ ?>
            <span class="correctfont">You currently have 1 designers assigned  to your project. By adding this service you will have 3 designers working on  your 3 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span>
            <?php 
            }
            if(@$_SESSION["package"]=='Economy Logo Package'){ ?>
            <span class="correctfont">You currently have 1 designers assigned  to your project. By adding this service you will have 4 designers working on  your 4 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span>
            <?php 
            }
            if(@$_SESSION["package"]=='Silver Logo Package' || @$_SESSION["package"]=='Silver Plus Logo Package' || @$_SESSION["package"]=='Super Silver Plus Logo Package' || @$_SESSION["package"]=='Deluxe Logo Package'){?>
            
            <span class="correctfont">You currently have 3 designers assigned  to your project. By adding this service you will have 6 designers working on  your 6 logo concepts. This will massively increase the creativity and options  for you.All services are backed by our <?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back guarantee.</span>
            
            <?php } ?>
            <strong><br />
            &nbsp;&nbsp;</strong></td>
        </tr>
    </table>
    <?php }?>

                  <table width="500" height="194" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/3.png" align="absmiddle"/> <br />

                        <font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/3-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u>&nbsp;Now only<span class="heading" style="font-size:18px; font-weight:bold;"><strong><font color="#FF0000"><img src="<?php echo base_url(); ?>images/prices/order2/prices/3-<?php echo COUNTRY; ?>.png" align="absmiddle"/></font></strong></span></span></font></strong></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt3" name="opta3" value='<?php echo LIFE_TIME_FILE_STORAGE; ?>' <?php if(@$_SESSION['opt3'] == LIFE_TIME_FILE_STORAGE){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order lifetime file storage','<?php echo LIFE_TIME_FILE_STORAGE; ?>','opta3','3');" type="radio" />

                          <input name="opta3" type="radio" <?php if(@$_SESSION['opt3'] == LIFE_TIME_FILE_STORAGE){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel3" value='<?php echo LIFE_TIME_FILE_STORAGE; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta3','3');"  />

                          <input name="opta3" type="radio" style="display:none" id="optdela3" onclick="javascript:SelectAll_2('Order lifetime file storage','<?php echo LIFE_TIME_FILE_STORAGE; ?>','opta3','3');" value='<?php echo LIFE_TIME_FILE_STORAGE; ?>' />
                          <br />
                          <strong><span id="tick3">
                          <?php if(@$_SESSION['opt3']== LIFE_TIME_FILE_STORAGE ){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
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
                          <input id="optt4" name="opta4" value= '<?php echo ANIMATED_FLASH; ?>' <?php if(@$_SESSION['opt4']== ANIMATED_FLASH){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Order  an animated FLASH logo version','<?php echo ANIMATED_FLASH; ?>','opta4','4');" type="radio" />

                          <input name="opta4" type="radio" <?php if(@$_SESSION['opt4']== ANIMATED_FLASH ){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel4" value= '<?php echo ANIMATED_FLASH; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta4','4');"  />

                          <input name="opta4" type="radio" style="display:none" id="optdela4" onclick="javascript:SelectAll_2('Order  an animated FLASH logo version','<?php echo ANIMATED_FLASH; ?>','opta4','4');" value= '<?php echo ANIMATED_FLASH; ?>' />
                          <br />
                          <strong><span id="tick4">
                          <?php if(@$_SESSION['opt4']== ANIMATED_FLASH){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="112" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>
                        <p><span class="correctfont">Make your web site stand out.  Receive an animated logo version for your chosen logo that will make your logo  flash consistently with a beam of light racing across it.</span></p>
                        <p align="left">&nbsp;</p></td>
                    </tr>
                  </table>

                  <?php	if(@$_SESSION['option']!= BOTH_SERVICES){
			if(@$_SESSION['option']!= EXPRESS_DELIVERY){ ?>
                  <table width="500" height="194" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/5.png" align="absmiddle"/><font color="#FF0000"><br />
                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/5-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/5-<?php echo COUNTRY; ?>.png" align="absmiddle"/></strong></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt5" name="opta5" value='<?php echo LOGO_WITHIN_24_HOUR; ?>'<?php if(@$_SESSION['opt5'] == LOGO_WITHIN_24_HOUR){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Get  your logos within 24 hrs','<?php echo LOGO_WITHIN_24_HOUR; ?>','opta5','5');" type="radio" />

                          <input name="opta5" type="radio" <?php if(@$_SESSION['opt5']==LOGO_WITHIN_24_HOUR){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel5" value='<?php echo LOGO_WITHIN_24_HOUR; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta5','5');"  />

                          <input name="opta5" type="radio" style="display:none" id="optdela5" onclick="javascript:SelectAll_2('Get  your logos within 24 hrs','<?php echo LOGO_WITHIN_24_HOUR; ?>','opta5','5');" value='<?php echo LOGO_WITHIN_24_HOUR; ?>' />

                          <br />
                          <strong><span id="tick5">
                          <?php if(@$_SESSION['opt5'] == LOGO_WITHIN_24_HOUR ){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="126" bgcolor="#F8FCE3"><p align="left"><strong>&nbsp;</strong></p>
                        <p><span class="correctfont">Grow your business faster! The designs can  be at your fingertips. This express service applies to all logos and stationary  ordered. The quality is not affected. We simply prioritise your order.</span> </p>
                        <p>&nbsp;</p>
                        <p align="left"><strong><br />
                          &nbsp;&nbsp;</strong></p></td>
                    </tr>
                  </table>

                  <?php }
            if(@$_SESSION['option']!= BLACK_N_WHITE){ ?>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/6.png" align="absmiddle"/></strong><font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/6-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now  only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/6-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>

                    </tr>

                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt6" name="opta6" value='<?php echo BLACK_N_WHITE_FILE_LOGO; ?>' <?php if(@$_SESSION['opt6'] == BLACK_N_WHITE_FILE_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order  black and white file logo version','<?php echo BLACK_N_WHITE_FILE_LOGO; ?>','opta6','6');" type="radio" />

                          <input name="opta6" type="radio" <?php if(@$_SESSION['opt6']== BLACK_N_WHITE_FILE_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel6" value='<?php echo BLACK_N_WHITE_FILE_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta6','6');"  />

                          <input name="opta6" type="radio" style="display:none" id="optdela6" onclick="javascript:SelectAll_2('Order  black and white file logo version','<?php echo BLACK_N_WHITE_FILE_LOGO; ?>','opta6','6');" value="15" />

                          <br />
                          <strong><span id="tick6">
                          <?php if(@$_SESSION['opt6'] == BLACK_N_WHITE_FILE_LOGO){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>

                          </span></strong></div></td>

                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">Necessary  for any print or fax requirements. Recommended for your peace of mind.</span></p>
                        <p align="left">&nbsp;</p></td>
                    </tr>

                  </table>
                  <?php }

			}?>

                  <table width="500" height="124" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>

                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/7.png" align="absmiddle"/></strong> <font color="#FF0000"><br />

                        <u><img src="<?php echo base_url(); ?>images/prices/order2/cross/7-<?php echo COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/7-<?php echo COUNTRY; ?>.png" align="absmiddle"/></td>
                    </tr>

                    <tr>

                      <td bgcolor="#F8FCE3">
                      <div align="center">

                          <input id="optt7" name="opta7" value='<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>' <?php if(@$_SESSION['opt7'] == IMPRESS_WITH_BUSINESS_CARD){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Impress  with business cards ','<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>','opta7','7');" type="radio" />                          

                          <input name="opta7" type="radio" <?php if(@$_SESSION['opt7'] == IMPRESS_WITH_BUSINESS_CARD){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel7" value='<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta7','7');"  />

                          <input name="opta7" type="radio" style="display:none" id="optdela7" onclick="javascript:SelectAll_2('Impress  with business cards ','<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>','opta7','7');" value='<?php echo IMPRESS_WITH_BUSINESS_CARD; ?>' />

                          <br />
                          <strong><span id="tick7">
                          <?php if(@$_SESSION['opt7'] == IMPRESS_WITH_BUSINESS_CARD){?>
                          <img src="<?= base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>

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
                          <input id="optt8" name="opta8" value='<?php echo LETTER_HEAD; ?>' <?php if(@$_SESSION['opt8'] == LETTER_HEAD){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order  letterhead designs ','<?php echo LETTER_HEAD; ?>','opta8','8');" type="radio" />

                          <input name="opta8" type="radio" <?php if(@$_SESSION['opt8'] == LETTER_HEAD){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel8" value='<?php echo LETTER_HEAD; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta8','8');"  />

                          <input name="opta8" type="radio" style="display:none" id="optdela8" onclick="javascript:SelectAll_2('Order  letterhead designs ','<?php  echo LETTER_HEAD; ?>','opta8','8');" value='<?php echo LETTER_HEAD; ?>' />

                          <br />
                          <strong><span id="tick8">
                          <?php if(@$_SESSION['opt8'] == LETTER_HEAD){?>
                          <img src="<?= base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">Order  3 letterhead design concepts. </span></p></td>
                    </tr>
                  </table>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/9.png" align="absmiddle"/><br />

                        <font color="#FF0000"><u><img src="<?= base_url(); ?>images/prices/order2/cross/9-<?= COUNTRY; ?>.jpg" align="texttop"/></u>&nbsp;Now only<span class="heading" style="font-size:18px; font-weight:bold;"><strong><font color="#FF0000"><img src="<?php echo base_url(); ?>images/prices/order2/prices/9-<?php echo COUNTRY; ?>.png" align="absmiddle"/></font></strong></span></span></font></strong></td>
                    </tr>

                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt9" name="opta9" value='<?php echo ENVELOPE_DESIGN; ?>' <?php if(@$_SESSION['opt9'] == ENVELOPE_DESIGN){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Order  envelope designs','<?php echo ENVELOPE_DESIGN; ?>','opta9','9');" type="radio" />

                          <input name="opta9" type="radio"<?php if(@$_SESSION['opt9'] == ENVELOPE_DESIGN){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel9" value='<?php echo ENVELOPE_DESIGN; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta9','9');"  />

                          <input name="opta9" type="radio" style="display:none" id="optdela9" onclick="javascript:SelectAll_2('Order  envelope designs','<?php echo ENVELOPE_DESIGN; ?>','opta9','9');" value= '<?php echo ENVELOPE_DESIGN; ?>' />

                          <br />
                          <strong><span id="tick9">
                          <?php if(@$_SESSION['opt9'] == ENVELOPE_DESIGN){?>
                          <img src="<?= base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>

                          </span></strong></div></td>
                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">&nbsp;Order  3 envelope design concepts.</span></p>

                        <p>&nbsp;</p>
                        <p align="left">&nbsp;</p></td>
                    </tr>
                  </table>

                  <table width="500" height="138" border="0" cellpadding="5" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/10.png" align="absmiddle"/></strong> <strong><font color="#FF0000"><br />

                        <u><img src="<?= base_url(); ?>images/prices/order2/cross/10-<?= COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/10-<?php echo COUNTRY; ?>.png" align="absmiddle"/></strong></td>
                    </tr>

                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt10" name="opta10" value='<?php echo COMPLIMENT_SLIP; ?>' <?php if(@$_SESSION['opt10'] == COMPLIMENT_SLIP){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order  compliment slip designs','<?php echo COMPLIMENT_SLIP; ?>','opta10','10');" type="radio" />

                          <input name="opta10" type="radio" <?php if(@$_SESSION['opt10'] == COMPLIMENT_SLIP){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel10" value= '<?php echo COMPLIMENT_SLIP; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta10','10');"  />

                          <input name="opta10" type="radio" style="display:none" id="optdela10" onclick="javascript:SelectAll_2('Order  compliment slip designs','<?php echo COMPLIMENT_SLIP; ?>','opta10','10');" value='<?php echo COMPLIMENT_SLIP; ?>' />

                          <br />
                          <strong><span id="tick10">
                          <?php if(@$_SESSION['opt10'] == COMPLIMENT_SLIP){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="70" bgcolor="#F8FCE3"><p align="left"><span class="correctfont">&nbsp;Order  3 compliment slip design concepts.</span></p>
                       </td>
                    </tr>
                  </table>

                  <table width="500" height="319" border="0" cellpadding="10" cellspacing="0" bgcolor="#F8FCE3">
                    <tr>
                      <td width="70" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;">&nbsp;</td>
                      <td width="364" height="58" bgcolor="#FFFFFF" class="heading" style="font-size:18px; font-weight:bold;"><strong><img src="<?php echo base_url(); ?>images/prices/order2/11.png" align="absmiddle"/><font color="#FF0000"><br />

                        <u><img src="<?= base_url(); ?>images/prices/order2/cross/11-<?= COUNTRY; ?>.jpg" align="texttop"/></u> Now only </font><font color="#33FF00"><img src="<?php echo base_url(); ?>images/prices/order2/prices/11-<?php echo COUNTRY; ?>.png" align="absmiddle"/>&nbsp;(60% OFF)</font></strong></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="optt11" name="opta11" value='<?php echo STATIONARY_DESIGN_BUNDLE; ?>'<?php if(@$_SESSION['opt11'] == STATIONARY_DESIGN_BUNDLE){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Order  stationary design bundle','<?php echo STATIONARY_DESIGN_BUNDLE; ?>','opta11','11');" type="radio" />

                          <input name="opta11" type="radio" <?php if(@$_SESSION['opt11'] == STATIONARY_DESIGN_BUNDLE){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel11" value='<?php echo STATIONARY_DESIGN_BUNDLE; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta11','11');"  />

                          <input name="opta11" type="radio" style="display:none" id="optdela11" onclick="javascript:SelectAll_2('Order  stationary design bundle','<?php echo STATIONARY_DESIGN_BUNDLE; ?>','opta11','11');" value='<?php echo STATIONARY_DESIGN_BUNDLE; ?>' />
                          <br />
                          <strong><span id="tick11">
                          <?php if(@$_SESSION['opt11'] == STATIONARY_DESIGN_BUNDLE){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
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
                          <input id="optt12" name="opta12" value='<?php echo BUSINESS_CARD_PRINT_250; ?>' <?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_250){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('250 business cards (matt) including free  delivery','<?php echo BUSINESS_CARD_PRINT_250; ?>','opta12','12');" type="radio" />

                          <input name="opta12" type="radio" <?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_250){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel12" value= '<?php echo BUSINESS_CARD_PRINT_250; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta12','12');"  />

                          <input name="opta12" type="radio" style="display:none" id="optdela12" onclick="javascript:SelectAll_2('250 business cards (matt) including free  delivery','<?php echo BUSINESS_CARD_PRINT_250; ?>','opta12','12');" value='<?php echo BUSINESS_CARD_PRINT_250; ?>' />

                          <br />
                          <strong><span id="tick12">
                          <?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_250){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><span class="correctfont">250 business cards (matt) <u>including</u> free  delivery<font color="#FF0000">&nbsp;</font></span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/12-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp; </font><img src="<?php echo base_url(); ?>images/prices/order2/prices/12-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>
                        <p>&nbsp;</p></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt112" name="opta12" value= '<?php echo BUSINESS_CARD_PRINT_500; ?>'<?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_500){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('500  business cards (matt) including free delivery','<?php  echo BUSINESS_CARD_PRINT_500; ?>','opta12','112');" type="radio" />

                          <input name="opta12" type="radio" <?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_500){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel112" value= '<?php echo BUSINESS_CARD_PRINT_500; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta12','112');"  />

                          <input name="opta12" type="radio" style="display:none" id="optdela112" onclick="javascript:SelectAll_2('500  business cards (matt) including free delivery','<?php echo BUSINESS_CARD_PRINT_500; ?>','opta12','112');" value= '<?php echo BUSINESS_CARD_PRINT_500; ?>' />

                          <br />
                          <strong><span id="tick112">
                          <?php if(@$_SESSION['opt12'] == BUSINESS_CARD_PRINT_500){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>

                          </span></strong></div></td>

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
                          <input id="optt13" name="opta13" value= '<?php echo LETTER_HEAD_PRINT_25; ?>' <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_25){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('25  letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_25; ?>','opta13','13');" type="radio" />

                          <input name="opta13" type="radio" <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_25){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel13" value= '<?php echo LETTER_HEAD_PRINT_25; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta13','13');"  />

                          <input name="opta13" type="radio" style="display:none" id="optdela13" onclick="javascript:SelectAll_2('25  letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_25; ?>','opta13','13');" value= '<?php echo LETTER_HEAD_PRINT_25; ?>' />

                          <br />
                          <strong><span id="tick13">
                          <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_25){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>
                        <p><span class="correctfont">25  letterheads including free delivery&nbsp;&nbsp;</span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/14-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp;  Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/14-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>

                        <p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt113" name="opta13" value= '<?php echo LETTER_HEAD_PRINT_250; ?>'<?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_250){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('250 letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_250; ?>','opta13','113');" type="radio" />

                          <input name="opta13" type="radio" <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_250){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel113" value= '<?php echo LETTER_HEAD_PRINT_250; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta13','113');"  />

                          <input name="opta13" type="radio" style="display:none" id="optdela113" onclick="javascript:SelectAll_2('250 letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_250; ?>','opta13','113');" value= '<?php echo LETTER_HEAD_PRINT_250; ?>' />

                          <br />
                          <strong><span id="tick113">
                          <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_250){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>

                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250 letterheads including free delivery&nbsp;<font color="#FF0000">&nbsp;</font></span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/15-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp;  Now only &nbsp;</font><font color="#33FF00"><b><img src="<?php echo base_url(); ?>images/prices/order2/prices/15-<?php echo COUNTRY; ?>.png" align="absmiddle"/>&nbsp;(60% OFF)</b></font></span></p>

                        <p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt213" name="opta13" value= '<?php echo LETTER_HEAD_PRINT_1000; ?>' <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_1000){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('1000  letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_1000; ?>','opta13','213');" type="radio" />

                          <input name="opta13" type="radio" <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_1000){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel213" value= '<?php echo LETTER_HEAD_PRINT_1000; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta13','213');"  />

                          <input name="opta13" type="radio" style="display:none" id="optdela213" onclick="javascript:SelectAll_2('1000  letterheads including free delivery','<?php echo LETTER_HEAD_PRINT_1000; ?>','opta13','213');" value= '<?php echo LETTER_HEAD_PRINT_1000; ?>' />

                          <br />
                          <strong><span id="tick213">
                          <?php if(@$_SESSION['opt13'] == LETTER_HEAD_PRINT_1000){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
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
                          <input id="optt14" name="opta14" value= '<?php echo ENVELOPE_DESIGN_PRINT_100; ?>' <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_100){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('100  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_100; ?>','opta14','14');" type="radio" />

                          <input name="opta14" type="radio" <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_100){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel14" value= '<?php echo ENVELOPE_DESIGN_PRINT_100; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta14','14');"  />

                          <input name="opta14" type="radio" style="display:none" id="optdela14" onclick="javascript:SelectAll_2('100  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_100; ?>','opta14','14');" value= '<?php echo ENVELOPE_DESIGN_PRINT_100; ?>' />

                          <br />
                          <strong><span id="tick14">
                          <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_100){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>

                          </span></strong></div></td>
                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>
                        <p><span class="correctfont">100  envelopes including free delivery&nbsp; </span></p>
                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/17-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/17-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>
                        <p>&nbsp;</p></td>
                    </tr>

                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt114" name="opta14" value= '<?php echo ENVELOPE_DESIGN_PRINT_250; ?>' <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_250){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('250  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_250; ?>','opta14','114');" type="radio" />

                          <input name="opta14" type="radio" <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_250){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel114" value= '<?php echo ENVELOPE_DESIGN_PRINT_250; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta14','114');"  />

                          <input name="opta14" type="radio" style="display:none" id="optdela114" onclick="javascript:SelectAll_2('250  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_250; ?>','opta14','114');" value= '<?php echo ENVELOPE_DESIGN_PRINT_250; ?>' />
                          <br />
                          <strong><span id="tick114">
                          <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_250){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>

                          </span></strong></div></td>
                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250  envelopes including free delivery&nbsp; </span></p>
                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/18-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp; Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/18-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>
                        <p>&nbsp;</p></td>
                    </tr>
                    
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt214" name="opta14" value= '<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>' <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_1000){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('1000  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>','opta14','214');" type="radio" />

                          <input name="opta14" type="radio" <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_1000){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel214" value= '<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta14','214');"  />

                          <input name="opta14" type="radio" style="display:none" id="optdela214" onclick="javascript:SelectAll_2('1000  envelopes including free delivery','<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>','opta14','214');" value= '<?php echo ENVELOPE_DESIGN_PRINT_1000; ?>' />
                          <br />
                          <strong><span id="tick214">
                          <?php if(@$_SESSION['opt14'] == ENVELOPE_DESIGN_PRINT_1000){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
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
                          <input id="optt15" name="opta15" value= '<?php echo COMPLIMENT_SLIP_PRINT_100; ?>' <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_100){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('100  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_100; ?>','opta15','15');" type="radio" />

                          <input name="opta15" type="radio" <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_100){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel15" value= '<?php echo COMPLIMENT_SLIP_PRINT_100; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta15','15');"  />

                          <input name="opta15" type="radio" style="display:none" id="optdela15" onclick="javascript:SelectAll_2('100  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_100; ?>','opta15','15');" value= '<?php echo COMPLIMENT_SLIP_PRINT_100; ?>' />
                          <br />
                          <strong><span id="tick15">
                          <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_100){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td bgcolor="#F8FCE3" valign="bottom"><p align="left"><strong>&nbsp;</strong></p>
                        <p><span class="correctfont">100  compliment slips including free delivery&nbsp; </span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/20-<?php echo COUNTRY; ?>.gif" align="texttop"/></u> Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/20-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>
                        <p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt115" name="opta15" value= '<?php echo COMPLIMENT_SLIP_PRINT_250; ?>' <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_250){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('250  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_250; ?>','opta15','115');" type="radio" />

                          <input name="opta15" type="radio" <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_250){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel115" value= '<?php echo COMPLIMENT_SLIP_PRINT_250; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta15','115');"  />

                          <input name="opta15" type="radio" style="display:none" id="optdela115" onclick="javascript:SelectAll_2('250  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_250; ?>','opta15','115');" value= '<?php echo COMPLIMENT_SLIP_PRINT_250; ?>' />
                          <br />
                          <strong><span id="tick115">
                          <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_250){?>
                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />
                          <?php }else{?>
                          Select<br />
                          here
                          <?php }?>
                          </span></strong></div></td>
                      <td height="56" bgcolor="#F8FCE3"><p><span class="correctfont">250  compliment slips including free delivery&nbsp;</span></p>

                        <p><span class="correctfont"><font color="#FF0000"><u><img src="<?php echo base_url(); ?>images/prices/order2/cross/21-<?php echo COUNTRY; ?>.gif" align="texttop"/></u>&nbsp; Now only &nbsp;</font><img src="<?php echo base_url(); ?>images/prices/order2/prices/21-<?php echo COUNTRY; ?>.png" align="absmiddle"/></span></p>
                        <p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td bgcolor="#F8FCE3"><div align="center">
                          <input id="opt215" name="opta15" value= '<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>' <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_1000){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('1000  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>','opta15','215');" type="radio" />

                          <input name="opta15" type="radio" <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_1000){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel215" value= '<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta15','215');"  />

                          <input name="opta15" type="radio" style="display:none" id="optdela215" onclick="javascript:SelectAll_2('1000  compliment slips including free delivery','<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>','opta15','215');" value= '<?php echo COMPLIMENT_SLIP_PRINT_1000; ?>' />

                          <br />

                          <strong><span id="tick215">

                          <?php if(@$_SESSION['opt15'] == COMPLIMENT_SLIP_PRINT_1000){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

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

                          <input id="optt16" name="opta16"<?php if(@$_SESSION['opt16'] == MOUSE_MAT_WITH_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  value= '<?php echo MOUSE_MAT_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Order a Mouse Mat with your personal logo on (free delivery)!','<?php echo MOUSE_MAT_WITH_LOGO; ?>','opta16','16');" type="radio" />

                          <input name="opta16" type="radio" <?php if(@$_SESSION['opt16'] == MOUSE_MAT_WITH_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel16" value= '<?php echo MOUSE_MAT_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta16','16');"  />

                          <input name="opta16" type="radio" style="display:none" id="optdela16" onclick="javascript:SelectAll_2('Order a Mouse Mat with your personal logo on (free delivery)!','<?php echo MOUSE_MAT_WITH_LOGO; ?>','opta16','16');" value= '<?php echo MOUSE_MAT_WITH_LOGO; ?>' />

                          <br />

                          <strong><span id="tick16">

                          <?php if(@$_SESSION['opt16'] == MOUSE_MAT_WITH_LOGO){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

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

                                <select name="select" onchange="javascript:selectbox1('Order a Mouse Mat with your personal logo on (free delivery)!','<?php echo MOUSE_MAT_WITH_LOGO; ?>','opta16','16');">

                                  <option <?php if(@$_SESSION['select']=='1'){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="1">1 </option>

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

                          <input id="optt17" name="opta17" value= '<?php echo CAP_WITH_LOGO; ?>' <?php if(@$_SESSION['opt17'] == CAP_WITH_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order a <u>custom CAP</u> with your personal logo on (free delivery)! ','<?php echo CAP_WITH_LOGO; ?>','opta17','17');" type="radio" />

                          <input name="opta17" type="radio" <?php if(@$_SESSION['opt17'] == CAP_WITH_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel17" value= '<?php echo CAP_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta17','17');"  />

                          <input name="opta17" type="radio" style="display:none" id="optdela17" onclick="javascript:SelectAll_2('Order a <u>custom CAP</u> with your personal logo on (free delivery)! ','<?php echo CAP_WITH_LOGO; ?>','opta17','17');" value= '<?php echo CAP_WITH_LOGO; ?>' />

                          <br />

                          <strong><span id="tick17">

                          <?php if(@$_SESSION['opt17'] == CAP_WITH_LOGO){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

                      <td bgcolor="#F8FCE3" valign="bottom">

                        <p><span class="correctfont">Look dead professional! </span></p>

                        </td>

                    </tr>

                    <tr>

                      <td height="56" bgcolor="#F8FCE3">

                      <p>Quantity<br />

                          <select name="select2" onchange="javascript:selectbox1('Order a custom CAP with your personal logo on (free delivery)! ','<?php echo PEN_WITH_LOGO; ?>','opta17','17');">

                            <?php for($i=1;$i<=50;$i++){

                            ?>

                            <option <?php if(@$_SESSION['select2']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

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

                                <select name="select3" onchange="javascript:selectbox1('Order a <u>custom CAP</u> with your personal logo on (free delivery)! ','<?php echo CAP_WITH_LOGO; ?>','opta17','17');">

                                  <option <?php if(@$_SESSION['select3']=='Cap Colour - White'){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="Cap Colour - White">Cap Colour - White </option>

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

                          <input id="optt18" name="opta18" value= '<?php echo PEN_WITH_LOGO; ?>' <?php if(@$_SESSION['opt18'] == PEN_WITH_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?> onclick="javascript:SelectAll_2('Order <u>pens </u>with  your personal logo on (free delivery)!','<?php echo PEN_WITH_LOGO; ?>','opta18','18');" type="radio" />

                          <input name="opta18" type="radio" <?php if(@$_SESSION['opt18'] == PEN_WITH_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel18" value= '<?php echo PEN_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta18','18');"  />

                          <input name="opta18" type="radio" style="display:none" id="optdela18" onclick="javascript:SelectAll_2('Order <u>pens </u>with  your personal logo on (free delivery)!','<?php echo PEN_WITH_LOGO; ?>','opta18','18');" value= '<?php echo PEN_WITH_LOGO; ?>' />

                          <br />

                          <strong><span id="tick18">

                          <?php if(@$_SESSION['opt18'] == PEN_WITH_LOGO){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

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

                          <input id="optt19" name="opta19" value= '<?php echo BAG_WITH_LOGO; ?>'<?php if(@$_SESSION['opt19'] == BAG_WITH_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!','<?php echo BAG_WITH_LOGO; ?>','opta19','19');" type="radio" />

                          <input name="opta19" type="radio" <?php if(@$_SESSION['opt19'] == BAG_WITH_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel19" value= '<?php echo BAG_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta19','19');"  />

                          <input name="opta19" type="radio" style="display:none" id="optdela19" onclick="javascript:SelectAll_2('Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!','<?php echo BAG_WITH_LOGO; ?>','opta19','19');" value= '<?php echo BAG_WITH_LOGO; ?>' />

                          <br />

                          <strong><span id="tick19">

                          <?php if(@$_SESSION['opt19'] == BAG_WITH_LOGO){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

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

                          <input id="optt20" name="opta20" value= '<?php echo TSHIRT_WITH_LOGO; ?>' <?php if(@$_SESSION['opt20'] == TSHIRT_WITH_LOGO){?>style="display:none"<?php }else{?>style="display:inherit"<?php }?>  onclick="javascript:SelectAll_2('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','<?php echo TSHIRT_WITH_LOGO; ?>','opta20','20');" type="radio" />

                          <input name="opta20" type="radio" <?php if(@$_SESSION['opt20'] == TSHIRT_WITH_LOGO){?>style="display:inherit" checked="checked" <?php }else{?>style="display:none"<?php }?>  id="optdel20" value= '<?php echo TSHIRT_WITH_LOGO; ?>' onclick="javascript:SelectAll_2('Thank you','0.00','opta20','20');"  />

                          <input name="opta20" type="radio" style="display:none" id="optdela20" onclick="javascript:SelectAll_2('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','<?php echo TSHIRT_WITH_LOGO; ?>','opta20','20');" value= '<?php echo TSHIRT_WITH_LOGO; ?>' />

                          <br />

                          <strong><span id="tick20">

                          <?php if(@$_SESSION['opt20']== TSHIRT_WITH_LOGO){?>

                          <img src="<?php echo base_url(); ?>images/basket-image/correct.gif" />

                          <?php }else{?>

                          Select<br />

                          here

                          <?php }?>

                          </span></strong></div></td>

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

                                <select name="select4" onchange="javascript:selectbox1('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','<?php echo TSHIRT_WITH_LOGO; ?>','opta20','20');" >

                                  <?php for($i=0;$i<=50;$i++){

                            ?>

                                  <option <?php if(@$_SESSION['select4']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                                  <?php }?>

                                </select>

                              </p></td>

                          </tr>

                          <tr>

                            <td><p><span class="correctfont">M</span></p></td>

                            <td><p>

                                <select name="select5" onchange="javascript:selectbox1('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','<?php echo TSHIRT_WITH_LOGO; ?>','opta20','20');" >

                                  <?php for($i=0;$i<=50;$i++){

                            ?>

                                  <option <?php if(@$_SESSION['select5']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                                  <?php }?>

                                </select>

                              </p></td>

                          </tr>

                          <tr>

                            <td><p><span class="correctfont">L</span></p></td>

                            <td><p>

                                <select name="select6" onchange="javascript:selectbox1('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','19','opta20','20');" >

                                  <?php for($i=0;$i<=50;$i++){

                            ?>

                                  <option <?php if(@$_SESSION['select6']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                                  <?php }?>

                                </select>

                              </p></td>

                          </tr>

                          <tr>

                            <td><p><span class="correctfont">XL</span></p></td>

                            <td><p>

                                <select name="select7" onchange="javascript:selectbox1('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','<?php echo TSHIRT_WITH_LOGO; ?>','opta20','20');" >

                                  <?php for($i=0;$i<=50;$i++){

                            ?>

                                  <option <?php if(@$_SESSION['select7']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                                  <?php }?>

                                </select>

                              </p></td>

                          </tr>

                          <tr>

                            <td><p><span class="correctfont">XXL</span></p></td>

                            <td><p>

                                <select name="select8" onchange="javascript:selectbox1('Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!','19','opta20','20');" >

                                  <?php for($i=0;$i<=50;$i++){

                            ?>

                                  <option <?php if(@$_SESSION['select8']==$i){?> selected="selected" <?php }else{?>selected="selected"<?php }?> value="<?php echo $i;?>"><?php echo $i;?></option>

                                  <?php }?>

                                </select>

                              </p></td>

                          </tr>

                        </table></td>

                    </tr>

                  </table>

                  <div align="center">

                    <input name='selectbox' type='hidden' id='selectbox' value="<?=@$_SESSION['selectbox'];?>" />
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
                    <input name='opt20' type='hidden' id='opt20' value="<?=@$_SESSION['opt20'];?>" />
                    <input name='rowcoun' type='hidden' id='rowcoun' value="23" />

                    <a href="javascript: history.go(-1)"><img src="<?= base_url(); ?>images/back.jpg" alt="a" width="100" height="49" border="0" align="absmiddle" style="display:inline" /></a>
                    <input name='submit' type='image' src='<?= base_url(); ?>images/pay_continue.jpg' align="middle"/>
                  </div></td>
                <td width="249" valign="top"><br /></td>
              </tr>
            </table>
          </form>
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
                        <td class="shoppingheading" style="padding-top: 5px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!<div style="float:right"><!--<img src="<?php //echo base_url()?>images/basket-image/edit.gif" id="editBasket"/>--></div></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
              
              <tr>
                <td class="basketlftbg" align="left" width="0"></td>
                <td width="365"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td><img src="<?= base_url()?>images/basket-image/textup.gif" width="343" height="8"></td>
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
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["price"];?></td>
                                      </tr>

                                      <?php if(@$_SESSION['brouchure']!='' && @$_SESSION['bhaucharpackage']!=''){?>
                                      
                                      <tr>
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['bhaucharpackage'];?></td>
                                        <td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="brouchure___bhaucharpackage___<?php //echo $_SESSION['brouchure']?>"/>--></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["brouchure"];?></td>
                                      </tr>

                                      <?php }?>

                                      <?php if(@$_SESSION['web']!='' && @$_SESSION['webpackage']!=''){ ?>
                                      <tr>
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION['webpackage'];?></td>
                                        <td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="web___webpackage___<?php //echo $_SESSION['web']?>"/>--></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["web"];?></td>
                                      </tr>

                                      <?php	
                                      }
                                      
                                      if(@$_SESSION['option']!='' && @$_SESSION["blackn24"]!='') { ?>
                                      <tr>
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION["blackn24"];?></td>
                                        <td class="basketdesc" align="right" valign="top"><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="option___blackn24___<?php //echo $_SESSION['option']?>"/>--></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . @$_SESSION["option"];?></td>
                                      </tr>
                                      <?php }	 

	$total=0;
	if(@$_SESSION['rowcoun']!=''){
	$row=@$_SESSION['rowcoun'];	

	for($i=1;$i<$row-2;$i++){
		$opt='opt'.$i;
		$extraopt='extraopt'.$i;
	if(@$_SESSION[$opt]!='' && @$_SESSION[$extraopt]!=''){	

	$opta='opta'.$i.'a';
	$amount=@$_SESSION[$opt];
	if($i=='16'){
		$amount=$amount * @$_SESSION['select'];
	}
	if($i=='17'){
		$amount=$amount * @$_SESSION['select2'];
	}

	if($i=='20'){
		$cost=$amount;
		$amount=($cost * @$_SESSION['select4']) + ($cost * @$_SESSION['select5']) + ($cost * @$_SESSION['select6']) + ($cost * @$_SESSION['select7']) + ($cost * @$_SESSION['select8']);

	}	

	?>

                                      <tr id="<?= $opta;?>">
                                        <td class="basketdesc" align="left" valign="top"><?php echo @$_SESSION[$extraopt];?></td>
                                        <td class="basketdesc" align="right" valign="top" ><!--<img src="<?php //echo base_url()?>images/basket-image/remove.gif" class="basketEdit" id="<?php //echo $extraopt.'___'.$opt.'___'.$amount?>"/>--></td>
                                        <td class="basketdesc" align="right" valign="top"><?php echo CURRENCY . $amount?></td>
                                      </tr>
    <?php
	$total=$total + $amount;
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
                        <td><img src="<?= base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8"/></td>
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
                        <td width="330" colspan="2" align="center"><img src="<?= base_url()?>images/basket-image/textup.gif" width="343" height="8"/></td>
                      </tr>

                      <tr>
                        <td class="totalpricetxt" colspan="2" align="center" bgcolor="#ffffff"><table width="345" border="0" cellpadding="0" cellspacing="0" class="formtoptext">
                            <tbody>
                              <tr align="right">
                                <td width="175" rowspan="2"align="left" style="width: 165px; padding-left: 10px;"><span id="LblYouPayText" style="font-weight: bold;" class="totalpricetxt">Total </span></td>
                                <td width="14" rowspan="2" align="right">&nbsp;</td>
                                <td colspan="2" align="right"><input name="LblCurrencySign3" id="LblCurrencySign3" style="text-align: right; width: 15px;" class="pricetxt" readonly="readonly" value= '<?php echo CURRENCY; ?>' type="text"/><input name="LblYouPay" id="LblYouPay" class="pricetxt" readonly="readonly" style="width: 45px; text-align: left;" value="<?php echo $total + @$_SESSION["price"] + @$_SESSION["option"] + @$_SESSION['web'] + @$_SESSION['brouchure'].".00";?>" type="text" /></td>
                              </tr>

                              <tr align="right">
                                <td width="20" align="right" >&nbsp;</td>
                                <td width="50" height="10" align="right" style="background-image:url(<?= base_url()?>images/basket-image/shoose.gif); background-repeat:no-repeat; background-position:right;background-position:top;">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table></td>
                      </tr>
                      
                      <tr>
                        <td colspan="2" align="center"><img src="<?= base_url()?>images/basket-image/textboxbtm.gif" width="343" height="8" /></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>

              <tr>
                <td colspan="3" class="bgpic"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                    <tr>
                      <td width="62%" height="190" ><p style="text-decoration:blink; padding:0 0 0 15px;"><font face="Arial, Helvetica, sans-serif"  size="+0"><u><?php echo GUARANTEE_DAY; ?>-Day Unconditional Money Back Guarantee on All Fees Paid!</u></font></p>
                        <p style="padding:0 0 0 15px; color:#0000CC; font-weight:bold;">- No admin fees<br />
                          - No questions<br />
                          - Just email &ldquo;refund me&rdquo;<br />
                          <span style="color:#555">- The Best Guarantee in the<br />
                          &nbsp;&nbsp;Logo Industry </span> </p></td>
                      <td width="38%" id="bgimg" align="left"><img src="<?= base_url()?>images/basket-image/photolia5.gif" /></td>
                    </tr>
                  </table>
                  <p class="pad" style="text-decoration:blink;">&nbsp;</p></td>
              </tr>
              <tr>
                <td colspan="3" ><p><img src="<?= base_url()?>images/basket-image/basket2.gif" alt="basket-bottom1" width="365" height="17"/></p></td>
              </tr>
            </tbody>
          </table>
        </div>

        <script src="<?= base_url()?>js/float2.js" type="text/javascript"></script>
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