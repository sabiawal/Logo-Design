

          <div id="floated">
            <div class="order-details">
              <h3>Your Order Details</h3>
              <p><?php echo @$_SESSION['logo_package'];?></p>
              <h3> <?php echo CURRENCY; ?><span class="main_price"><?php echo $_SESSION['logo_price']; ?></span> </h3>
              <p class="save-pack"> <span class="save-cross"><?php echo  CURRENCY. 2*$_SESSION['logo_price']; ?></span> SAVE 50%</p>

<span id="24hr">
<?php if(isset($_SESSION['poptions_pack'.$_SESSION['p_index']])){ ?>
<p><?php echo $_SESSION['poptions_pack'.$_SESSION['p_index']];?></p>
              <h3> <?php echo CURRENCY; ?><span class="main_price"><?php echo $_SESSION['poptions_price'.$_SESSION['p_index']]; ?></span> </h3>
              <p class="save-pack"> <span class="save-cross"><?php echo  CURRENCY. 80; ?></span> SAVE 50%</p>              <?php }?>
   </span>
   <span id="web_package">
   <?php if(isset($_SESSION['web_package'])){
	   if( $_SESSION['web_package'] !=''){
		   switch($_SESSION['web_package']){
                case BUDGET_WP:
                    $_SESSION['web'] = BUDGET_WP_P;
                break;
                
                case GOLD_WP:
                    $_SESSION['web'] = GOLD_WP_P;
                break;
                
                case ELITE_WP:
                    $_SESSION['web'] = ELITE_WP_P;
                break;
                
                default:
                    unset($_SESSION['web_package'],$_SESSION['web']);
                break;
            }
		   ?>
   <p><?php echo $_SESSION['web_package'];?></p>
              <h3><?php echo CURRENCY ?><span class="main_price"><?php echo $_SESSION['web'];?></span></h3>
   <?php } }?>
   </span>
   <span id="bro_package">
   <?php if(isset($_SESSION['brouchure_package'])){
	  if( $_SESSION['brouchure_package'] !=''){
		  switch($_SESSION['brouchure_package']){
                case TRI_FOLD_BP:
                    $_SESSION['brouchure'] = TRI_FOLD_BP_P;
                break;
                
                case FOUR_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = FOUR_PAGE_EXEC_BP_P;
                break;
                
                case EIGHT_PAGE_EXEC_BP:
                    $_SESSION['brouchure'] = EIGHT_PAGE_EXEC_BP_P;
                break;
                
                default:
                    unset($_SESSION['brouchure_package'],$_SESSION['brouchure']);
                break;
            }
	   ?>
   <p><?php echo $_SESSION['brouchure_package'];?></p>
              <h3><?php echo CURRENCY ?><span class="main_price"><?php echo $_SESSION['brouchure'];?></span></h3>
   <?php } }?>
   
   </span>           
              
              
              
              <div class="order-list">
                <ul>
	<?php if($_SESSION['p_index'] == '1' || $_SESSION['p_index'] == '2' || $_SESSION['p_index'] == '3'){ $num = 6;}
    else if($_SESSION['p_index'] == '4' || $_SESSION['p_index'] == '5'){$num = 12;}
    else if($_SESSION['p_index'] == '7'){$num = 12;}
    ?>
                	<li> <strong><?php echo $num;?></strong> Custom Made Logos</li>
                  <li><span style="font-weight:700 !important;">Unlimited</span> Revisions</li>
                  <li><span style="font-weight:700 !important;">Unlimited</span> Logo Concepts</li>
                  <li><span style="font-weight:700 !important;">365-Day</span> 100% MB Guarantee </li>
                </ul>
              </div>
              <img src="images/guranteed.png"> <img src="images/phone.png"> </div>
          </div>
          