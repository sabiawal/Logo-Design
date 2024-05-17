<?php     
    if(isset($c_id) && $c_id !="")
    {
    ?>
<div class="phone-banner-container">
    <div class="phone-banner">
    <p>Call "free" a design expert 24/7:<br />
   <span><?= PHONE_NO; ?></span></p>
    </div>
</div>
<div class="top-container">
    <div class="top">
    
    
        <?php
        $order_count = 0;
        
        if($order_count >0)
        {
           if($order_count == 1) 
           {
              //echo "<p>One Order</p>";  
           }
           if($order_count > 1)
           {
            ?>
            <div class="multi-order">
            <p>
            <select name="order_no">
            <option value="41039" >Logo Name 1</option>
            <option value="42002" selected="selected" >Logo Name 2</option>
            
            </select>
            <span style="padding: 0 0 0 20px;" id="CustomerDetail">Dear <span class="text-green" > Customer Name2,</span> You ordered the logo &quot;<strong>Logo Name</strong>&quot; on <span class="text-red">2012-7-18</span></span>
            </p>
            </div>
            <?php
            
           }
        }
        else
        {
            #echo "<p>No Order Made Yet</p>";
        }
        ?>
    
    <div class="menu-top">
        <ul>
            <li class="<?php if($this->router->method == 'index')echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li>
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
    <a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" target="_blank"><img src="<?= base_url().'images/client/limited-offer.jpg'?>" width="972" alt="Limited Offer, 50% off" title="Limited Offer, 50% off" /></a>
    </div>
    
    <div class="menu">
        <ul>
            <li class="<?php if($this->router->method == 'index')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" title="home" target="_self">Web Packages</a></li>    
            <li class="<?php if($this->router->method == 'portfolio')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages" target="_self">Web Portfolio</a></li>
            <li class="<?php if($this->router->method == 'guarantee')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>" title="Guarantee" target="_self">Guarantee</a></li>    
            <li class="<?php if($this->router->method == 'howworks')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process" target="_self">How It Works</a></li>
            <li class="<?php if($this->router->method == 'whyus')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us" target="_self">Why Choose Us</a></li>
            <li class="<?php if($this->router->method == 'hosting')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/hosting'); ?>" title="Hosting" target="_self">Hosting</a></li>
            <li class="<?php if($this->router->method == 'seo')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/seo'); ?>" title="SEO" target="_self">SEO</a></li>    
            <li class="<?php if($this->router->method == 'about')echo 'selected'; ?>"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio" target="_self">About Us</a></li>               
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
    
    </div>
</div>
    
    <?php        
    }
    else
    {
    ?>
<div class="top-container">
    <div class="top">

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
</div></div>
<?php } ?>