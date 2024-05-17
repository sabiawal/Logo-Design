
<?php 
	if($this->router->method == "index")
	{
	$main_banner = base_url()."images/webdesign/mainbanner-home-".COUNTRY.".jpg";	
	}
	else
	{
	$main_banner = base_url()."images/webdesign/mainbanner-".COUNTRY.".jpg";	
	}
?>


<div class="banner">
<p>Call a design expert 24/7:<br />
   <span>0800 756 9910</span></p>
   </div>
   
<div class="menu">
<ul>
<li id="nav-web-packages"><a href="<?php 

if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
else{
echo site_url('web-site-design/webdesigner-limited-sale/index');}
?>" title="home">Web Packages</a></li>
<li id="nav-web-portfolio"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages">Web Portfolio</a></li>
<li id="nav-web-howworks"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process">How It Works</a></li>
<li id="nav-web-whyus"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us">Why Choose Us</a></li>
<li id="nav-web-about"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio">About Us</a></li>
<li id="nav-logodesign"><a href="<?php echo base_url();?>" title="Logodesign">Logo Design</a></li>


</ul>
</div>
<div class="main-banner">
<!--Start Slide Show Banner-->
<div class="price_banner"><img src="../../images/webdesign/price_banner.jpg" /></div>
<div id="rotator">
	<img src="../../images/webdesign/slide_show/1.jpg" />
    <img src="../../images/webdesign/slide_show/2.jpg" />
    <img src="../../images/webdesign/slide_show/3.jpg" />
    <img src="../../images/webdesign/slide_show/4.jpg" />
    <img src="../../images/webdesign/slide_show/5.jpg" />
    <img src="../../images/webdesign/slide_show/6.jpg" />
    <img src="../../images/webdesign/slide_show/7.jpg" />
    <img src="../../images/webdesign/slide_show/8.jpg" />
    <img src="../../images/webdesign/slide_show/9.jpg" />
    <img src="../../images/webdesign/slide_show/10.jpg" />
    <img src="../../images/webdesign/slide_show/11.jpg" />    
</div>
<div class="clear"></div>
<!--End Slide Show Banner-->
<map name="Map" id="Map">
  <area shape="rect" coords="81,247,230,272" href="<?php echo site_url('web-site-design/webdesigner-limited-sale/index');?>" />

</map>

</div>