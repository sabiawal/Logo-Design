<div class="banner">
<p>Call "free" a design expert 24/7:<br />
   <span><?= PHONE_NO; ?></span></p>
</div>

<div class="menu">
<ul>
<li id="nav-home"><a href="<?= base_url();?>" title="home">Home</a></li>
<li id="nav-packages"><a href="<?php echo "https://".SITE_NAME."/packages2.php"; ?>" title="packages">Packages</a></li>
<li id="nav-process"><a href="<?php echo site_url('process2'); ?>" title="Process">Process</a></li>
<li id="nav-compare"><a href="<?php echo site_url('compare2'); ?>" title="Compare Us">Compare Us</a></li>
<li id="nav-portfolio"><a href="<?php echo site_url('portfolio2'); ?>" title="Portfolio">Portfolio</a></li>
<li id="nav-guarantee"><a href="<?php echo site_url('guarantee2'); ?>" title="Guarantee">Guarantee</a></li>
<li id="nav-about"><a href="<?php echo site_url('about2'); ?>" title="About Us">About Us</a></li>
<li id="nav-web-design"><a href="<?php 
if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
else{echo site_url('web-site-design/webdesigner-limited-sale/index');}
?>" title="Web Design">Web Design</a></li>
</ul>
</div>

<div class="main-banner">
<div class="left" style="position: relative; margin-top: 20px;">
<img src="<?= base_url()."images/price2-".COUNTRY;?>.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>
<?php if($this->router->method == 'packages' || $this->router->method == 'packages2'){} else{  ?><a href="<?=site_url('packages'); ?>" ></a><?php } ?>
</div>
<div class="right">
<a href="<?php echo site_url('portfolio2'); ?>"><img src="<?php echo base_url();?>images/banner.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee" /></a>
</div>
<div class="clear"></div>

</div>
