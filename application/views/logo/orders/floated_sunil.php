<div id="floated">
    <div class="order-details">
        <h3 style="font-size:22px;">Your order details</h3>
         <p class="newtm"><?php echo ucfirst(strtolower($_SESSION['logo_package'])); ?><? if($_SESSION['logo_package'] == 'THE BEST'){?><span style="vertical-align: super;font-size: 18px;  font-family: 'PT Sans',sans-serif,Arial,Verdana !important;
                    font-weight: 700 !important;">&trade;</span><? } ?></p>
         <?php
        if ($_SESSION['p_index'] == 11 || $_SESSION['p_index'] == 16) {
            $logoprice = $_SESSION['logo_price'] + BUDGET_WP_P;
        } else if ($_SESSION['p_index'] == 12 || $_SESSION['p_index'] == 15 || $_SESSION['p_index'] == 17) {
            $logoprice = $_SESSION['logo_price'] + GOLD_WP_P;
        } else if ($_SESSION['p_index'] == 13 || $_SESSION['p_index'] == 14 || $_SESSION['p_index'] == 18) {
            $logoprice = $_SESSION['logo_price'] + ELITE_WP_P;
        } else {
            $logoprice = $_SESSION['logo_price'];
        }
        ?>

                <h3 class="main_price_green"><?php echo CURRENCY; ?><span class="main_price"><?php echo $logoprice; ?></span></h3>
         <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . $_SESSION['logo_price_cut']; ?></span> SAVE 50%</p>

         <span id="24hr">
<?php if (isset($_SESSION['poptions_pack' . $_SESSION['p_index']])) { ?>
                <p><?php echo $_SESSION['poptions_pack' . $_SESSION['p_index']]; ?></p>
                <h3> <?php echo CURRENCY; ?><span class="main_price"><?php echo $_SESSION['poptions_price' . $_SESSION['p_index']]; ?></span> </h3>
                <p class="save-pack"> <span class="save-cross"><?php echo CURRENCY . 80; ?></span> SAVE 50%</p>              <?php } ?>
        </span>

        <span id="web_package">

            <?php
            if ($_SESSION['p_index'] != 11 && $_SESSION['p_index'] != 12 && $_SESSION['p_index'] != 13 && $_SESSION['p_index'] != 14 && $_SESSION['p_index'] != 15 && $_SESSION['p_index'] != 16 && $_SESSION['p_index'] != 17 && $_SESSION['p_index'] != 18) {
               if(isset($_SESSION['web_package'])){
                switch ($_SESSION['web_package']) {
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
                        unset($_SESSION['web_package'], $_SESSION['web']);
                        break;
                }
                ?>
                <p><?php echo $_SESSION['web_package']; ?></p>
                <h3><?php echo CURRENCY ?><span class="main_price"><?php echo $_SESSION['web']; ?></span></h3>
            <?php } }?>
        </span>
        <span id="bro_package">
            <?php
            if (isset($_SESSION['brouchure_package'])) {
                if ($_SESSION['brouchure_package'] != '') {
                    switch ($_SESSION['brouchure_package']) {
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
                            unset($_SESSION['brouchure_package'], $_SESSION['brouchure']);
                            break;
                    }
                    ?>
                    <p><?php echo $_SESSION['brouchure_package']; ?></p>
                    <h3><?php echo CURRENCY ?><span class="main_price"><?php echo $_SESSION['brouchure']; ?></span></h3>
    <?php }
} ?>

        </span>          



        <div class="order-list">
             <ul>
                <?php
                if ($_SESSION['p_index'] == '4' || $_SESSION['p_index'] == '5' || $_SESSION['p_index'] == '7') {
                    $num = 12;
                } else {
                    $num = 6;
                }
                // echo $_SESSION['p_index'];
                $services = $this->db->order_by("service_order", "asc")->get_where('tbl_services', array('package_id' => $_SESSION['p_index'],'service_stat'=>'show'))->result();
                //echo "<pre>";print_r($services);
                ?>

<?php foreach ($services as $s) if($s->service_id != '6'){ 
             if($s->service_id == '32' || $s->service_id == '90' || $s->service_id == '391') {?>
               <li><span>3 Compliment Slip Designs</span></li>
               <? } else {?>
                    <li><span><?php echo ucfirst($s->service_name); ?></span></li>
                    <? } ?>
<?php } ?>


            </ul>
        </div>
       <div style="text-align:center !important;padding-top:10px;"> <img src="images/guranteed.png"> <img src="images/phone.png"> </div></div>
</div>