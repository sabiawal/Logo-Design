<?php if ($this->router->method != 'review'): ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/floating.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            floatingMenu.add('floated',
                    {
                        targetRight: 0,
                        targetTop: 10,
                        snap: true
                    });
        });
    </script>
<?php endif; ?>
<script type="text/javascript">
    $(document).ready(function () {
        // Edit Basket
        $('.edit_basket_list').on('click', function () {
            var pac = $('.calc-box.cart .inner-border-box');
            pac.each(function (i) {
                if (i > 0) {
                    if ($(this).hasClass('remove_items')) {
                        $(this).removeClass('remove_items');
                        $(this).children().next().children('a').hide();
                    }
                    else {
                        $(this).addClass('remove_items');
                        $(this).children().next().children('a').show();
                    }
                }
            });
        });

        $('.remove_package').live('click', function () {
            var main_val = $(this).attr('id');
            values = main_val.split('___');
            if (values[0] == 'options1') {
                $("#logo_concept").text(parseInt($("#logo_concept").text()) - parseInt(6));
            }
            //alert(values[0]);
            var pagename = '<?php echo site_url('orders/remove_package'); ?>';
            editBasket(pagename, values[0], values[1], values[2], values[3]);

            $('.' + values[0]).remove();
            //alert(values[0]);

            $("input[name='" + values[0] + "']").parent().parent().prev('div').find('input').removeAttr('checked');
            $("input[name='" + values[0] + "']").removeAttr('checked');
            $("input[name='" + values[0] + "']").next().removeClass('chk');
            if ($('.re_' + values[0]).length) {
            }
            else {
                $(".re_calc-box").append("<div class='inner-border-box re_" + values[0] + " row' />");
            }
            $(".re_calc-box").find(".re_" + values[0]).html('<span class="col-sm-8">' + values[1] + '</span><span class="col-sm-2"><a id="' + values[0] + '___' + values[1] + '___' + values[2] + '___' + values[3] + '" class="reselect_package" href="javascript:void(0)"><img src="assets/images/reselect.gif"  style="margin-bottom: 3px;" /></a></span><span class="col-sm-2 pull-right">' + '<?php echo CURRENCY; ?>' + '<span class="re_package_price">' + values[3] + '</span></span>');
<?php if ($this->uri->segment(2) == 'paymentorder') { ?>
                $('#pack_desc p').find('span').each(function () {
                    if ($(this).html() == ', ' + values[1] + ' ($' + values[3] + ')') {
                        $(this).html('');
                    }
                });
<?php } ?>
            get_total();
            if (!$.trim($(".re_calc-box").html()) == false) {
                $('div.re_calc-box').show();
                $('.re_calc-box').prev().show();
            }

        });
        $('.reselect_package').live('click', function () {

            //$('.reselect_package').click(function(){
            //alert($(this).attr('id'));
            var fff = $(this).parent().prev('span').text();
            if (fff == "24 hours delivery") {

                $.post("<?php echo site_url() ?>orders/reasign_session", {}, function () {
                });

            }
            // return fasle;
            var main_val = $(this).attr('id');
            values = main_val.split('___');
            if (values[0] == 'options1') {
                $("#logo_concept").text(parseInt($("#logo_concept").text()) + parseInt(6));
            }
            var pagename = '<?php echo site_url('orders/reselect_package'); ?>';
            editBasket(pagename, values[0], values[1], values[2], values[3]);

            $('.re_' + values[0]).remove();
            if (values[0] == 'options12' || values[0] == 'options13' || values[0] == 'options14' || values[0] == 'options15') {
                $("input[name='" + values[0] + "']").parent().parent().prev('div').find('strong').each(function () {
                    if ($(this).text().slice(1) == values[3]) {
                        $(this).parent().prev('p').find('input').attr('checked', 'checked');
                    }
                });
            }
            $("input[name='" + values[0] + "']").next().addClass('chk');
            $("input[name='" + values[0] + "']").parent().parent().prev().find("p:contains('" + values[1] + "') input").attr("checked", true);
            if ($('.' + values[0]).length) {
            }
            else {
                $(".calc-box.cart").append("<div class='inner-border-box " + values[0] + " row' />");
            }
            $(".calc-box.cart").find("." + values[0]).html('<span class="col-sm-8">' + values[1] + '</span><span class="col-sm-2"><a id="' + values[0] + '___' + values[1] + '___' + values[2] + '___' + values[3] + '" class="remove_package" href="javascript:void(0)" style="display:none"><img src="assets/images/remove.gif"></a></span><span class="col-sm-2 pull-right">' + '<?php echo CURRENCY; ?>' + '<span class="package_price">' + values[3] + '</span></span>');
<?php if ($this->uri->segment(2) == 'paymentorder') { ?>
                $('#pack_desc p').append('<span>, ' + values[1] + ' ($' + values[3] + ')</span>');

<?php } ?>
            get_total();

            if (!$.trim($(".re_calc-box").html()) == true) {
                $('div.re_calc-box').hide();
                $('.re_calc-box').prev().hide();
            }
        });

        function editBasket(pagename, sesName1, sesValue1, sesName2, sesValue2) {
            $.ajax({
                type: "POST",
                url: pagename,
                data: "&sesName1=" + sesName1 + "&sesValue1=" + sesValue1 + "&sesName2=" + sesName2 + "&sesValue2=" + sesValue2,
                success: function (msg) {
                    //alert(msg);
                }
            });
        }

        // Promotional Code Starts
        $('.pormo_update').click(function () {
            //alert('promotional');
            //alert($('.pcode').val());
            $.post("<?php echo site_url('orders/promo') ?>", {pcode: $('.pcode').val()}, function (data) {
                //alert(data);
                $('.tax_box').remove();
                if (data) {
                    var d = eval('(' + data + ')');
                    //alert(data);
                    $('#basket_total_price').html(d.total_before_promo);
                    if ($('.promo_dis').length) {
                    }
                    else {
                        $(".calc-box.total").append("<div class='inner-border-box promo_dis' />");
                    }
                    $(".calc-box.total").find(".promo_dis").html('<span>Promo Discount </span><span class="pull-right"><?php echo CURRENCY; ?><span class="package_price">' + d.promo_dis + '</span></span>');
                    if (d.tax_amount > 0) {
                        if ($('.tax_box').length) {
                        }
                        else {
                            $(".calc-box.total").append("<div class='inner-border-box tax_box' />");
                        }
                        $(".calc-box.total").find(".tax_box").html('<span>Tax ' + (d.tax_rate) * 100 + '%</span><span class="pull-right"><?php echo CURRENCY; ?><span class="tax_amount">' + d.tax_amount + '</span></span>');
                    }
                    if ($('.gross_total2').length) {
                    }
                    else {
                        $(".calc-box.total").append("<div class='inner-border-box gross_total2' />");
                    }
                    $(".calc-box.total").find(".gross_total2").html('<span>Net Total</span><span class="pull-right"><?php echo CURRENCY; ?><span class="package_price">' + d.net_total + '</span></span>');
                    $('.promotional-code-box').html("Please check new price").delay(5000).fadeOut(1000);
                }
                else {
                    $('.promotional-code-box span.error').html('Invalid Promotional Code!');
                    //alert('false');
                }
            });
        });
        // /Promotional Code Ends 



    });


    // To calculate total on page load
    function get_total() {
        var total_price = 0;
        var reseller_discount = 0;
        var gross_total = 0;
        var purchase_dis = 0;
        $('.package_price').each(function () {
            // for reselect
            $('.remove_package').hide();
            $('.inner-border-box').removeClass('remove_items');
            // for reselect
            total_price = eval(total_price) + eval($(this).text());
            gross_total = total_price;
        })

        // Buy More Save More
        if (total_price >= <?php echo TOTAL_PURCHASE3; ?>) {
            var purchase_dis_rate = '<?php echo PURCHASE_DIS_RATE3; ?>';
        }
        else if (total_price >= <?php echo TOTAL_PURCHASE2; ?>) {
            var purchase_dis_rate = '<?php echo PURCHASE_DIS_RATE2; ?>';
        }
        else if (total_price >= <?php echo TOTAL_PURCHASE1; ?>) {
            var purchase_dis_rate = '<?php echo PURCHASE_DIS_RATE1; ?>';
        }
        else {
            var purchase_dis_rate = 0;
        }
        if (purchase_dis_rate > 0) {
            purchase_dis = purchase_dis_rate * total_price;
        }

       var total_before_tax = total_price - purchase_dis;
       // var total_before_tax = total_price;

<?php if (isset($_SESSION['reseller_id'])) { ?>
            var reseller_dis_rate = "<?php echo RESELLER_DISCOUNT; ?>";
            var reseller_discount = total_before_tax * reseller_dis_rate;
            total_before_tax = total_before_tax - reseller_discount;
<?php } ?>
        var tax_rate = <?php echo $this->logodesignmodel->get_tax_rate(SITE_ID) ?>;
        var net_price = total_before_tax;
        // var net_price = parseFloat(total_before_tax).toFixed(2);
        if (tax_rate > 0) {
            //alert('have tax');
            var tax_amount = (total_before_tax * tax_rate);
            $('.tax_amount').html(parseFloat(tax_amount).toFixed(2));
            net_price = (total_before_tax + tax_amount);
           // console.log(net_price,total_before_tax,tax_amount);
            //alert(typeof(net_price));                                     
        }
        //alert(net_price);
        //alert("Gross total = "+total_price+", Purchse Dis = "+purchase_dis+", Tax = "+tax_amount);                                        


        //alert(purchase_dis);
        $('.purchase_dis, .gross_total,.reseller_discount').remove();
        if (reseller_discount) {
            if (!$('.reseller_discount').length) {
                $(".calc-box.total").prepend("<div class='inner-border-box reseller_discount' />");
            }
            $(".calc-box.total").find(".reseller_discount").html('<span>Reseller Discount (10%)</span><span class="pull-right"><?php echo CURRENCY; ?><span >' + parseFloat(reseller_discount).toFixed(2) + '</span></span>');
        }

        if (purchase_dis > 0)
        {
            if ($('.purchase_dis').length) {
            }
            else {
                $(".calc-box.total").prepend("<div class='inner-border-box purchase_dis' />");
            }
            $(".calc-box.total").find(".purchase_dis").html('<span>Purchase Discount (' + (purchase_dis_rate * 100) + '%)</span><span class="pull-right"><?php echo CURRENCY; ?><span >' + parseFloat(purchase_dis).toFixed(2) + '</span></span>');

        }


        if (purchase_dis > 0 || reseller_discount) {
            if (!$('.gross_total').length) {
                $(".calc-box.total").prepend("<div class='inner-border-box gross_total' />");
            }
            $(".calc-box.total").find(".gross_total").html('<span>Gross Total</span><span class="pull-right"><?php echo CURRENCY; ?><span >' + total_price + '</span></span>');
        }

        $('#basket_total_price').text(parseFloat(net_price).toFixed(2));
    }

    window.onload = function () {
        get_total();
    };</script>
<style>
    .inner-border-box.row, .inner-border-box.row .col-sm-8, .inner-border-box.row .col-sm-2 {
        margin: 0;
        padding: 0;
    }
    .inner-border-box.row .col-sm-2.pull-right {
        text-align: right;
    }
</style>
<div id="floated">
    <div id="yellow-box-unfloat" class="yellow-box">
        <h2 class="red-bar">Buy More, SAVE MORE!</h2>
        <ul class="red-bar-items">
            <li>spend <?php echo CURRENCY . TOTAL_PURCHASE1 ?> or more, Save <?php echo PURCHASE_DIS_RATE1 * 100 ?>%!</li>
            <li>spend <?php echo CURRENCY . TOTAL_PURCHASE2 ?> or more, Save <?php echo PURCHASE_DIS_RATE2 * 100 ?>%!</li>
            <li>spend <?php echo CURRENCY . TOTAL_PURCHASE3 ?> or more, Save <?php echo PURCHASE_DIS_RATE3 * 100 ?>%!</li>
        </ul>
    </div>
    <div id="yellow-box-float" class="yellow-box">
        <div class="stack clearfix"> <strong>Shopping Basket - Grow Your Business!</strong> <a class="edit-btn pull-right edit_basket_list" href="javascript:void(0);">Edit</a> </div>
        <div class="stack clearfix">
            <div class="calc-box  cart">
                <div class="inner-border-box row logo_package" > <span class="col-sm-8" ><?php echo $_SESSION['logo_package']; ?></span> <span class="col-sm-2">&nbsp;</span> <span class="col-sm-2 pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['logo_price']; ?></span></span> </div>
                <?php if (isset($_SESSION['web_package'])): ?>
                    <div class="inner-border-box row web_package"> <span class="col-sm-8"><?php echo $_SESSION['web_package'] ?></span> <span class="col-sm-2"><a href='javascript:void(0)' class='remove_package' id="web_package___<?php echo $_SESSION['web_price'] ?>___web___<?php echo $_SESSION['web_price'] ?>" ><img src='<?php echo base_url() . 'assets/images/remove.gif'; ?>' /></a></span> <span class="col-sm-2 pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo @$_SESSION['web_price'] ?></span></span> </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['brouchure_package'])): ?>
                    <div class="inner-border-box row brouchure_package"> <span class="col-sm-8" ><?php echo $_SESSION['brouchure_package'] ?></span> <span class="col-sm-2" ><a href='javascript:void(0)' class='remove_package'  id="brouchure_package___<?php echo $_SESSION['brouchure_package'] ?>___brouchure___<?php echo @$_SESSION['brouchure'] ?>"><img src='<?php echo base_url() . 'assets/images/remove.gif'; ?>' /></a></span> <span class="col-sm-2 pull-right"><?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['brouchure'] ?></span></span> </div>
                <?php endif; ?>
                <?php //if(isset($_SESSION['options'])){  ?>
                <?php if (isset($_SESSION['pack_id']) && isset($_SESSION['poptions_pack' . $_SESSION['pack_id']])) { ?>
                    <div class="inner-border-box options row"> 
                        <span class="col-sm-8"><?php echo $_SESSION['poptions_pack' . $_SESSION['pack_id']]; ?></span>
                        <span class="col-sm-2">
                            <a href='javascript:void(0)' class='remove_package' data-id="24hr" id="options___<?php echo $_SESSION['poptions_pack' . $_SESSION['pack_id']] ?>___options_price___<?php echo isset($_SESSION['poptions_price' . $_SESSION['pack_id']]) ? $_SESSION['poptions_price' . $_SESSION['pack_id']] : $_SESSION['options_price'] ?>" >
                                <img src='<?php echo base_url() . 'assets/images/remove.gif'; ?>' />
                            </a>
                        </span>
                        <span class="col-sm-2 pull-right">
                            <?php echo CURRENCY; ?><span class="package_price"><?php echo $_SESSION['poptions_price' . $_SESSION['pack_id']] ?></span>
                        </span>
                    </div>
                <?php } ?>
                <?php
                for ($i = 1; $i <= 20; $i++) {

                    if (isset($_SESSION['options' . $i]) && $_SESSION['options' . $i] != ''):
                        ?>
                        <div class="inner-border-box <?php echo 'options' . $i; ?> row">
                            <span class="col-sm-8"><?php echo $_SESSION['options' . $i] ?></span>
                            <span class="col-sm-2">
                                <a href='javascript:void(0)' class='remove_package' id="options<?php echo $i ?>___<?php echo $_SESSION['options' . $i] ?>___options<?php echo $i ?>_price___<?php echo @$_SESSION['options' . $i . '_price'] ?>">
                                    <img src='<?php echo base_url() . 'assets/images/remove.gif'; ?>' />
                                </a>
                            </span>
                            <span class="col-sm-2 pull-right">
                                <?php echo CURRENCY; ?>
                                <span class="package_price">
                                    <?php echo $_SESSION['options' . $i . '_price'] ?>
                                </span>
                            </span>
                        </div>
                        <?php
                    endif;
                }
                ?>
            </div>
            <div class="calc-box total">
                <?php if ($this->logodesignmodel->get_tax_rate(SITE_ID) > 0): ?>
                    <div class="inner-border-box tax_box"> <span>Tax <?php echo ($this->logodesignmodel->get_tax_rate(SITE_ID) * 100); ?>%</span> <span class="pull-right"><?php echo CURRENCY; ?><span class="tax_amount">0</span></span> </div>
                <?php endif; ?>
                <strong>Total</strong> <strong class="pull-right theme-red"><?php echo CURRENCY; ?><span id="basket_total_price">0</span></strong> </div>
        </div>
        <strong>Re-select the Items below</strong>
        <div class="calc-box re_calc-box clearfix">
            <?php if (!empty($_SESSION['deletedServices'])): ?>
                <?php
                foreach ($_SESSION['deletedServices'] as $services):
                    $services_value = explode('___', $services);
                    ?>
                    <div class="inner-border-box row <?php echo 're_' . $services_value[0] ?>" > <span class="col-sm-8" ><?php echo $services_value[1] ?></span> <span class="col-sm-2"><a href='javascript:void(0)' class='reselect_package'  id="<?php echo $services ?>"><img src='<?php echo base_url() . 'assets/images/reselect.gif'; ?>' style="margin-bottom: 3px;" /></a></span> <span class="col-sm-2 pull-right"><?php echo CURRENCY; ?><span class="re_package_price"><?php echo $services_value[3]; ?></span></span> </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="stack clearfix">
            <div class="desc pull-left"> <strong style="color: #55554f;text-decoration: underline;"><?php echo GUARANTEE_DAYS; ?>-Day Unconditional Money Back Guarantee on All Fees Paid!</strong>
                <ul class="theme-blue">
                    <li>- No admin fees</li>
                    <li>- No questions</li>
                    <li>- Just email "refund me"</li>
                    <li style="color: #55554f;">- The Best Guarantee in the
                        Logo Industry </li>
                </ul>
            </div>
            <div class="pull-right"> <img src="assets/images/website-small-clip.jpg" alt="clip picture" /> </div>
        </div>
        <?php if ($this->router->method == 'review'): ?>
            <div class="stack clearfix promotional-code-box no-mar-bottom">
                <ul>
                    <li>
                        <label>Enter Promotional code:</label>
                        <input type="text" name="pcode" class="pcode" value="">
                        <span class="error"></span> </li>
                    <li>
                        <button class="pormo_update" href="javascript:void(0)">Update Price</button>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
<script>

    if (!$.trim($(".re_calc-box").html()) == false) {
        $('div.re_calc-box').show();
        $('.re_calc-box').prev().show();
    } else {
        $('div.re_calc-box').hide();
        $('.re_calc-box').prev().hide();
    }
</script>
