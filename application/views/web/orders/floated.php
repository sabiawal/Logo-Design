<?php 
$pindex= $_SESSION['p_index'];
		  $query = $this->db->get_where("tbl_web_services", array('service_status'=>'active', 'us_site_id'=>'7', 'package_id'=>$pindex))->result();
		  //print_r($query);
?>
<div class="order-details">
        <h3 style="font-size: 22px">Your order details</h3>
        <p id="<?php echo $_SESSION['p_index']?>"><?php echo ucfirst(strtolower($_SESSION['web_package'])); ?></p>
                <h3 class="main_price_green"><?php echo CURRENCY?><span class="main_price"><?php echo $_SESSION['web_price'];?></span> </h3>
        <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY.$_SESSION['web_price_reg'];?></span> SAVE 50%</p>

<span id="logo_package" ng-bind-html="logopackage"></span>

        <div class="order-list">
            <ul>
            <?php foreach($query as $r){?>

                    <li><span><?php echo $r->service_name;?></span></li>
            	<?php }?>
                <!-- 
                    <li><span>1 Designer </span></li>
                    <li><span>1 Design concept</span></li>
                    <li><span>Unlimited revisions</span></li>
                    <li><span>Content management system</span></li>
                    <li><span>Zero Monthly Fees</span></li>
                   
                    <li><span>365-Day - 100% MB Guarantee</span></li> -->

                  <!-- <li><span style="font-weight:700 !important;">Unlimited</span> Logo Concepts</li>
                  <li><span style="font-weight:700 !important;">365-Day</span> 100% MB Guarantee </li> -->
            </ul>
        </div>
        <div style="text-align:center !important;padding-top:10px;"> <img src="images/guranteed.png"> <img src="images/phone.png"> </div> </div>

