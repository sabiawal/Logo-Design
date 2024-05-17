<div class="banner">
  <p>Call "free" a design expert 24/7:<br />
    <span>
    <?= PHONE_NO; ?>
    </span></p>
</div>
<div class="menu">
  <ul>
    <li id="nav-home"><a href="<?php echo base_url();?>" title="home">Home</a></li>
    <li id="nav-packages"><a href="<?php echo site_url('packages');?>" title="packages">Packages</a></li>
    <li id="nav-process"><a href="<?php echo site_url('process'); ?>" title="Process">Process</a></li>
    <li id="nav-compare"><a href="<?php echo site_url('compare'); ?>" title="Compare Us">Compare Us</a></li>
    <li id="nav-portfolio"><a href="<?php echo site_url('portfolio'); ?>" title="Portfolio">Portfolio</a></li>
    <li id="nav-guarantee"><a href="<?php echo site_url('guarantee'); ?>" title="Guarantee">Guarantee</a></li>
    <li id="nav-about"><a href="<?php echo site_url('about'); ?>" title="About Us">About Us</a></li>
    <li id="nav-web-design"><a href="<?php 
if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
else{echo site_url('web-site-design/webdesigner-limited-sale/index');}
?>" title="Web Design">Web Design</a></li>
  </ul>
</div>
<?php
if($this->router->method == "portfolio")
{
?>
<div class="main-banner"> 
  
  <!-- Main BAnner -->
  <div class="main-banner-wrap">
    <div class="banner-text"> <img src="<?php base_url();?>images/banner-text.png" /> </div>
    <div class="banner-img"> <img src="<?php base_url();?>images/banner-img.png" /> </div>
    <div class="banner-video">
      <div class="banner-video"><img src="<?php base_url();?>images/instead-video.png" /></div>
    </div>
  </div>
  <!-- Ends MAin BAnner --> 
</div>
<?php	
}
else
{
 ?>
<div class="main-banner">
  <div class="left" style="position: relative; margin-top: 20px;"> <img src="<?= base_url()."images/price-".COUNTRY;?>.jpg" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>
    <?php if($this->router->method != 'packages'){  ?>
    <a href="<?=site_url('packages'); ?>" ></a>
    <?php } ?>
  </div>
  <div class="right"> <a href="<?php echo site_url('portfolio'); ?>"><img src="<?php echo base_url();?>images/banner.png" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee" /></a> 
  <?php            //
      $today=date("l j M y");
	  $din=date("l");
	   $gate=date("j");
	    $mahina=date("M");
		 $sal=date("y");
       echo "<div class=\"time-redcha\" >"."Must End Midnight EST,"." <u>".$din."</u>"." ".$gate." ".$mahina." '".$sal."</div>";
    	?> 
        </div>
  <div class="clear"></div>
</div>
<?php
}
 ?>
<style type="text/css">
.time-redcha{
position: absolute;
margin-left: 245px;
color:#edbf58;
top: 380px;
font-size: 14px;
z-index:999;
font-weight:bold;
	}
</style>