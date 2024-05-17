<div class="banner">
    <p>Call a design expert 24/7:<br />
    <span><?= PHONE_NO; ?></span></p>
</div>

<div class="menu">
    <ul>
    <li id="nav-web-packages"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" title="home">Web Packages</a></li>    
    <li id="nav-web-portfolio"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages">Web Portfolio</a></li>
    <li id="nav-web-guarantee"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>" title="Guarantee">Guarantee</a></li>    
    <li id="nav-web-howworks"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process">How It Works</a></li>
    <li id="nav-web-whyus"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us">Why Choose Us</a></li>
    <li id="nav-web-hosting"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/hosting'); ?>" title="Hosting">Hosting</a></li>
    <li id="nav-web-seo"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/seo'); ?>" title="SEO">SEO</a></li>    
    <li id="nav-web-about"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio">About Us</a></li>
    <li id="nav-logodesign"><a href="<?= base_url();?>" title="Logodesign">Logo Design</a></li>    
    </ul>
</div>

<div class="main-banner">
    <!--Start Slide Show Banner-->
    <div class="price_banner"><a href="<?php
    if($this->router->method == "guarantee")
     echo site_url('web-site-design/webdesigner-limited-sale/index');
     else
     echo site_url('web-site-design/webdesigner-limited-sale/guarantee'); 
     ?>"><img src="<?=base_url()?>images/webdesign/price_banner-<?= COUNTRY; ?>.jpg" /></a></div>
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