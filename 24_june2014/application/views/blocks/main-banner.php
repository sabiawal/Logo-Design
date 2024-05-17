<?php if($this->router->fetch_class() == 'reseller'):  ?>
    <div class="main-banner">
        <div class="left" style="position: relative; margin-top: 20px;">
            <img src="<?= base_url()."images/reseller/price-".COUNTRY;?>.png" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>
            <?php if($this->router->method != 'packages'){  ?><a href="<?= site_url('reseller/packages'); ?>" ></a><?php } ?>
        </div>
        <div class="right">
            <a href="<?php echo $base_link.'portfolio.php'; ?>"><img src="<?php echo base_url();?>images/banner.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee" /></a>
        </div>
        <div class="clear"></div>
    </div>
<?php elseif($this->router->fetch_class() == 'reseller_web'):  ?>
<link rel="stylesheet" href='<?php echo base_url();?>css_web/slideshow1.css' type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>js/xfade2.js"></script>
    <div class="main-banner">
        <!--Start Slide Show Banner-->
        <div class="price_banner">
            <a href="<?php if($this->router->method == "guarantee") echo site_url('reseller_web/index');else echo site_url('reseller_web/guarantee'); ?>"><img src="<?=base_url()?>images/reseller/price_banner-<?= COUNTRY; ?>.png" /></a>
        </div>
        <div id="rotator">
        <img src="<?=base_url()?>images/webdesign/slide_show/1.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/2.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/3.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/4.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/5.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/6.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/7.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/8.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/9.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/10.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/11.jpg" />    
        </div>
        <div class="clear"></div>
        <!--End Slide Show Banner-->
    </div>

<?php elseif($this->router->fetch_class() == 'webdesign'):  ?>
<link rel="stylesheet" href='<?php echo base_url();?>css_web/slideshow1.css' type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>js/xfade2.js"></script>
    <div class="main-banner">
        <!--Start Slide Show Banner-->
        <div class="price_banner">
            <a href="<?php if($this->router->method == "guarantee")echo site_url('web-site-design/webdesigner-limited-sale/index'); else echo site_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>"><img src="<?=base_url()?>images/webdesign/price_banner-<?= COUNTRY; ?>.jpg" /></a>
         </div>
        <div id="rotator">
        <img src="<?=base_url()?>images/webdesign/slide_show/1.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/2.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/3.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/4.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/5.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/6.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/7.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/8.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/9.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/10.jpg" />
        <img src="<?=base_url()?>images/webdesign/slide_show/11.jpg" />    
        </div>
        <div class="clear"></div>
        <!--End Slide Show Banner-->
    </div>
<?php else:  ?>
    <div class="main-banner">
        <div class="left" style="position: relative; margin-top: 20px;">
            <img src="<?= base_url()."images/reseller/price-".COUNTRY;?>.png" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>
            <?php if($this->router->method != 'packages'){  ?><a href="<?= $base_link.'packages.php'; ?>" ></a><?php } ?>
        </div>
        <div class="right">
            <a href="<?php echo $base_link.'portfolio.php'; ?>"><img src="<?php echo base_url();?>images/banner.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee" /></a>
        </div>
        <div class="clear"></div>
    </div>
<?php endif; ?>