<?php
$route_method = $this->router->method;

$base_link = '';

if($this->router->fetch_class() == 'reseller')
{
    //$base_link = site_url('reseller');
    $base_link = base_url().'reseller/';
}
elseif($this->router->fetch_class() == 'webdesign')
{
    $base_link = base_url().'web-site-design/webdesigner-limited-sale/';
}
else
{
    $base_link = base_url();
}

 ?>
<!-- reseller design css -->
<style type="text/css">
.top .banner {
    background: url("<?php echo base_url()?>images/reseller/telephone_n_guarantee.png") no-repeat scroll 0 0 transparent;
    font: bold 14px/27px Arial,Helvetica,sans-serif;
}
.top .banner p{font: bold 14px/27px Arial,Helvetica,sans-serif;}
</style>
<div class="banner">
<p style="color:#0b4a8d;">24/7 Reseller Sales: <?= PHONE_RESELLER_SALES; ?><br/>
24/7 Reseller Support: <?= PHONE_RESELLER_SUPPORT; ?></p>
   <!--<span><?= PHONE_NO; ?></span></p>-->
</div>
<?php if($this->router->fetch_class() == 'reseller' || $this->router->fetch_class() == 'logodesign'): ?>
    <div class="menu">
        <ul>
            <li<?php if($route_method == 'index'){echo ' class="selected"';} ?> ><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/index'); else echo base_url(); ?>" title="home">Home</a></li>
            <li<?php if($route_method == 'packages'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/packages'); else echo site_url('packages'); ?>" title="packages">Packages</a></li>
            <li<?php if($route_method == 'processs'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/processs'); else echo site_url('process'); ?>" title="Process">Process</a></li>
            <li<?php if($route_method == 'compare'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/compare'); else echo site_url('compare'); ?>" title="Compare Us">Compare Us</a></li>
            <li<?php if($route_method == 'portfolio'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/portfolio'); else echo site_url('portfolio'); ?>" title="Portfolio">Portfolio</a></li>
            <li<?php if($route_method == 'guarantee'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/guarantee'); else echo site_url('guarantee'); ?>" title="Guarantee">Guarantee</a></li>
            <li<?php if($route_method == 'about'){echo ' class="selected"';} ?>><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller/about'); else echo site_url('about'); ?>" title="About Us">About Us</a></li>
            <li><a href="<?php if(isset($_SESSION['reseller_id']) && $_SESSION['reseller_id'] != '') echo site_url('reseller_web/index'); else echo site_url('web-site-design/webdesigner-limited-sale'); ?>" title="Web Design">Web Design</a></li>
        </ul>
    </div>
<?php elseif($this->router->fetch_class() == 'webdesign'): ?> 
    <div class="menu">
        <ul>
        <li<?php if($route_method == 'index'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" title="home">Web Packages</a></li>    
        <li<?php if($route_method == 'portfolio'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages">Web Portfolio</a></li>
        <li<?php if($route_method == 'guarantee'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/guarantee'); ?>" title="Guarantee">Guarantee</a></li>    
        <li<?php if($route_method == 'howworks'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process">How It Works</a></li>
        <li<?php if($route_method == 'whyus'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us">Why Choose Us</a></li>
        <li<?php if($route_method == 'hosting'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/hosting'); ?>" title="Hosting">Hosting</a></li>
        <li<?php if($route_method == 'seo'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/seo'); ?>" title="SEO">SEO</a></li>    
        <li<?php if($route_method == 'about'){echo ' class="selected"';} ?>><a href="<?= site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio">About Us</a></li>
        <li><a href="<?= base_url();?>" title="Logodesign">Logo Design</a></li>    
        </ul>
    </div>
<?php elseif($this->router->fetch_class() == 'reseller_web'): ?> 
    <div class="menu">
        <ul>
        <li<?php if($route_method == 'index'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/index');?>" title="home">Web Packages</a></li>    
        <li<?php if($route_method == 'portfolio'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/portfolio'); ?>" title="packages">Web Portfolio</a></li>
        <li<?php if($route_method == 'guarantee'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/guarantee'); ?>" title="Guarantee">Guarantee</a></li>    
        <li<?php if($route_method == 'howworks'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/howworks'); ?>" title="Process">How It Works</a></li>
        <li<?php if($route_method == 'whyus'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/whyus'); ?>" title="Compare Us">Why Choose Us</a></li>
        <li<?php if($route_method == 'hosting'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/hosting'); ?>" title="Hosting">Hosting</a></li>
        <li<?php if($route_method == 'seo'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/seo'); ?>" title="SEO">SEO</a></li>    
        <li<?php if($route_method == 'about'){echo ' class="selected"';} ?>><a href="<?= site_url('reseller_web/about'); ?>" title="Portfolio">About Us</a></li>
        <li><a href="<?= site_url('reseller/index');?>" title="Logodesign">Logo Design</a></li>    
        </ul>
    </div>
<?php endif; ?>

