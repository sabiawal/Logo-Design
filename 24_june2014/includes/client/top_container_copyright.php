<div class="top-container">
    <div class="top">
    <div class="menu-top">
        <ul>
            <li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li>
            <li class="<?php if($this->router->method == 'logosample')echo 'selected'; ?>"><a href="<?= site_url('client_panel/logosample');?>" >Logo Samples</a></li>
            <li class="<?php if($this->router->method == 'businesscard')echo 'selected'; ?>"><a href="<?= site_url('client_panel/businesscard');?>" >Business Card Samples</a></li>
            <li class="<?php if($this->router->method == 'letterhead')echo 'selected'; ?>"><a href="<?= site_url('client_panel/letterhead');?>" >Letterhead Samples</a></li>
            <li class="<?php if($this->router->method == 'complement')echo 'selected'; ?>"><a href="<?= site_url('client_panel/complement');?>" >Compliment Samples</a></li>
            <li class="<?php if($this->router->method == 'clientfinal')echo 'selected'; ?>"><a href="<?= site_url('client_panel/clientfinal');?>" >Final Logo</a></li>
            <li class="<?php if($this->router->method == 'moreservices')echo 'selected'; ?>"><a href="<?= site_url('new44/category');?>" >More Services</a></li>
            <li><a href="<?= site_url('client_panel/logout'); ?>">Log Out</a></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
    <div class="limited-offer">
    <a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" ><img src="<?= base_url().'images/client/limited-offer.jpg'?>" width="972" alt="Limited Offer, 50% off" title="Limited Offer, 50% off" /></a>
    </div>
    <div class="menu">
        <ul>
            <li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" title="home" >Web Packages</a></li>    
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages" >Web Portfolio</a></li>
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>" title="Guarantee" >Guarantee</a></li>    
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process" >How It Works</a></li>
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us" >Why Choose Us</a></li>
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/hosting'); ?>" title="Hosting" >Hosting</a></li>
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/seo'); ?>" title="SEO" >SEO</a></li>    
            <li><a href="<?= site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio" >About Us</a></li>               
        </ul>
    </div>
    <div class="copyrightmenu">
        <ul>
                
            <li class="<?php if($this->router->method == 'copyright')echo 'selected'; ?>"><a href="<?= site_url('client_panel/copyright')?>" title="Copyright Home" >Copyright Home</a></li>
            <li  class="<?php if($this->router->method == 'copy_package')echo 'selected'; ?>"><a href="<?= site_url('client_panel/copy_package')?>" title="Copyright Packages" >Copyright Packages</a></li>
            <li class="<?php if($this->router->method == 'copy_how_works')echo 'selected'; ?>"><a href="<?= site_url('client_panel/copy_how_works')?>" title="Copyright How It Works" >Copyright How It Works</a></li>               
        </ul>
    </div>
    <!--<div class="main-banner">-->
        <!--Start Slide Show Banner-->
        <!--<div class="price_banner"><a href="<?php
            if($this->router->method == "guarantee")
             echo site_url('web-site-design/webdesigner-limited-sale/index');
             else
             echo site_url('web-site-design/webdesigner-limited-sale/guarantee'); 
             ?>"><img src="<?=base_url()?>images/webdesign/price_banner-<?= COUNTRY; ?>.jpg" /></a>
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
        End Slide Show Banner
    </div>-->
    </div>
</div>