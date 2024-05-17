<?php
$route_method = $this->router->method;
 ?>
<!-- reseller design css -->
<style type="text/css">
.top .banner {
    background: url("<?php echo base_url()?>images/reseller/telephone_n_guarantee.png") no-repeat scroll 0 0 transparent;
}
</style>
<div class="banner">
<p style="color:#0b4a8d;">24/7 Reseller Sales: (phone number 1)<br/>
24/7 Reseller Support: (phone number 2)</p>
   <!--<span><?= PHONE_NO; ?></span></p>-->
</div>
<div class="menu">
<ul>
<li<?php if($route_method == 'index'){echo ' class="selected"';} ?> ><a href="<?php echo site_url('reseller/index');?>" title="home">Home</a></li>
<li<?php if($route_method == 'packages'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/packages');?>" title="packages">Packages</a></li>
<li<?php if($route_method == 'processs'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/processs'); ?>" title="Process">Process</a></li>
<li<?php if($route_method == 'compare'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/compare'); ?>" title="Compare Us">Compare Us</a></li>
<li<?php if($route_method == 'portfolio'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/portfolio'); ?>" title="Portfolio">Portfolio</a></li>
<li<?php if($route_method == 'guarantee'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/guarantee'); ?>" title="Guarantee">Guarantee</a></li>
<li<?php if($route_method == 'about'){echo ' class="selected"';} ?>><a href="<?php echo site_url('reseller/about'); ?>" title="About Us">About Us</a></li>
<li><a href="<?php echo site_url('reseller/webdesignindex'); ?>" title="Web Design">Web Design</a></li>
</ul>
</div>
<div class="main-banner">
<div class="left" style="position: relative; margin-top: 20px;">
<img src="<?= base_url()."images/reseller/price-".COUNTRY;?>.png" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>
<?php if($this->router->method != 'packages'){  ?><a href="<?=site_url('reseller/packages'); ?>" ></a><?php } ?>
</div>
<div class="right">
<a href="<?php echo site_url('reseller/portfolio'); ?>"><img src="<?php echo base_url();?>images/banner.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee" /></a>
</div>
<div class="clear"></div>
</div>