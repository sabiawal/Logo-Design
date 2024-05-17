
<?php 
 if(!isset($_SESSION['temp_web_price'])){
	 ?>
  <div class="sav_cart_body">
  <table summary="ShoppingBasket" border="0" cellpadding="0" cellspacing="0" class="sav_inner">
    <tbody>
      <tr>
        <td colspan="3" class="baskettopheader" style="height:35px;"><table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr>
                <td class="shoppingheading" style="padding-top: 5px;font-size:15px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!
                 
                 </td>
              </tr>
             
              <tr class='sav_row'>
              <table class="sav_inner">
              	<tr>
                    <td width="250">
                    <?php echo $_SESSION['web_package']?>
                    </td>
                    <td class="sav_right">
                    <?php echo CURRENCY.number_format($_SESSION['web_price'],2, '.', '');?>
                    </td>
                </tr>
              
              <?php if($_SESSION['logo_package']!=''){?>
                <tr class='sav_row'>
                    <td>
                    <?php echo $_SESSION['logo_package']?>
                    </td>
                    <td class="sav_right">
                    <?php  echo CURRENCY.number_format($_SESSION['logo_price'],2, '.', '')?>
                    </td>
                  </tr>
              <?php }?>
              </table>
              <tr>
               <tr>
                    <table class="sav_inner">
                    <tr>
                        <td>
                            <b>Gross Total:</b>
                        </td>
                        <td class="sav_right">
                        <?php echo CURRENCY.number_format(($_SESSION['logo_price']+$_SESSION['web_price']),2, '.', '');?>
                        </td>
                   </tr>
                   <?php
				   if($tax_rate!=0){
					?>
                   <tr class='sav_row'>
                        <td>
                            <b>V.A.T (20%): </b>
                        </td>
                        <td class="sav_right">
                        <?php 
    
                                $tax_amount=$tax_rate*($_SESSION['logo_price']+$_SESSION['web_price']);
								$_SESSION['tax_amount']=$tax_amount;
                                echo CURRENCY.number_format($tax_amount,2, '.', '');
                        ?>
                        </td>
                   </tr>
                   <?php } ?>
                   <tr class='sav_row'>
                        <td>
                            <b>Net Total:</b>
                        </td>
                        <td class="sav_right">
                        <?php if(isset($_SESSION['temp_web_price'])) echo CURRENCY.number_format(($_SESSION['temp_logo_price']+$_SESSION['temp_web_price']+$tax_amount),2, '.', '');else echo CURRENCY.number_format(($_SESSION['logo_price']+$_SESSION['web_price']+$tax_amount),2, '.', '');?>
                        </td>
                   </tr>
                  </table>
                 </tr>
            </tbody>
          </table>
          </td>
      </tr>      
    </tbody>
  </table>
 </div>
<?php 
 }
 elseif(isset($_SESSION['temp_web_price']))
 {
?>
<div class="sav_cart_body">
  <table summary="ShoppingBasket" border="0" cellpadding="0" cellspacing="0" class="sav_inner">
    <tbody>
      <tr>
        <td colspan="3" class="baskettopheader" style="height:35px;"><table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr>
                <td class="shoppingheading" style="padding-top: 5px;font-size:15px;" width="95%">&nbsp;&nbsp;&nbsp;Shopping Basket - Grow Your Business!
                 
                 </td>
              </tr>
              <tr class='sav_row'>
              	<table class="sav_inner">
                    <tr>
                    <td>
                    <?php echo $_SESSION['web_package']?>
                    </td>
                    <td class="sav_right">
                    <?php echo CURRENCY.number_format($_SESSION['web_price'],2, '.', '');?>
                    </td>
                  </tr>
                  
                  <?php if($_SESSION['logo_package']!=''){?>
                      <tr class='sav_row'>
                        <td>
                        <?php echo $_SESSION['logo_package']?>
                        </td>
                        <td class="sav_right">
                        <?php echo CURRENCY.number_format($_SESSION['logo_price'],2, '.', '')?>
                        </td>
                      </tr>
                  <?php }?>
                 </table>
               </tr>
               <tr class='sav_row'>
                  <table class="sav_inner">
                      <tr>           
                        <td>
                            <b>Sub Total:</b>
                        </td>
                        <td class="sav_right">
                        <?php echo CURRENCY.number_format(($_SESSION['logo_price']+$_SESSION['web_price']),2, '.', '');?>
                        </td>
                   </tr>
                   <tr class='sav_row'>
                        <td>
                            <b>Discount From Code:</b>
                        </td>
                        <td class="sav_right">
                        <?php echo number_format(($_SESSION['logo_price']+$_SESSION['web_price']-$_SESSION['temp_logo_price']-$_SESSION['temp_web_price']),2, '.', '')?>
                        </td>
                   </tr>
                   <?php if(COUNTRY=='UK'){?>
                    <tr class='sav_row'>
                        <td>
                            <b>Total Before V.A.T:</b>
                        </td>
                        <td class="sav_right sav_tots">
                        <?php if(isset($_SESSION['temp_web_price'])) echo CURRENCY.number_format(($_SESSION['temp_logo_price']+$_SESSION['temp_web_price']),2, '.', '');?>
                        </td>
                   </tr>
                 
                   <tr class='sav_row'>
                        <td>
                            <b>V.A.T (20%): </b>
                        </td>
                        <td class="sav_right">
                        <?php 
                                $tax_amount=$tax_rate*($_SESSION['temp_logo_price']+$_SESSION['temp_web_price']);
    
                                $_SESSION['tax_amount']=$tax_amount;
                                echo CURRENCY.number_format($tax_amount,2, '.', '');
                        ?>
                        </td>
                   </tr>
                   <?php
				   }
				   ?>
                   <tr class='sav_row'>
                        <td>
                            <b>Net Total:</b>
                        </td>
                        <td class="sav_right sav_tots">
                        <?php echo CURRENCY.number_format(($_SESSION['temp_logo_price']+$_SESSION['temp_web_price']+$tax_amount),2, '.', '');?>
                        </td>
                   </tr>
                </table>
               </tr>
            </tbody>
          </table>
          </td>
      </tr>      
    </tbody>
  </table>

<?php	 
}
 ?>
   <!--Add section -->
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody><tr>
          <td width="62%" height="140"><p style="text-decoration:blink; padding:0 0 0 15px;margin-top: -15px;"><font size="2" face="Arial, Helvetica, sans-serif"><u>365-Day Unconditional Money Back Guarantee on All Fees Paid!</u></font></p>
            <p style="font-size: 11px; padding: 5px 0 0 15px; color:#0000CC; font-weight:bold;">- No admin fees<br>
              - No questions<br>
              - Just email "refund me"<br>
              <span style="color:#555">- The Best Guarantee in the<br>
              &nbsp;&nbsp;Logo Industry </span> </p></td>
          <td width="38%" align="left" id="bgimg"><img src="https://www.logodesignguarantee.co.uk/images/basket-image/photolia5.gif"></td>
        </tr>
      </tbody>
   </table>
  
<?php 
 if(!isset($_SESSION['temp_web_price'])){
 ?>
 <div class="sav_cart_body"> 
  <!-- This is promotional section -->
  <div id="pc_box">
    <div id="promotional">
      <label for="txtPc"> Enter Promotional code: </label>
      <input type="text" name="txtPc" id="txtPc_sav" />
      <br />
      <p><span id="err" style="color:#C00;"></span>
        <input type="button" value="Update price" class="bluebutton1" id="updatePrice" />
      </p>
      <img src="<?= base_url().'images/scissors.png';?>" class="scissors" />
    </div>
  </div>
 <?php
 }
 ?>
  <span id="success"></span>
  <span id="wrong"></span>

<!-- End of promotional section-->
