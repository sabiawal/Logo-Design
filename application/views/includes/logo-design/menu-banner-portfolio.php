<div class="banner">
  <p>Call "free" a design expert 24/7:<br />
    <span>
    <?= PHONE_NO; ?>
    </span></p>
</div>
<a name="slider_show" id="slider_show"></a>
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
if($this->router->method =="portfolio")
{
	?>
	<div class="main-banner"> 
        <!-- Main BAnner -->
        <div class="main-banner-wrap">
        <div class="banner-text"> <img src="<?php base_url();?>images/banner-text.png" /> </div>
        <div class="banner-img"> <img src="<?php base_url();?>images/banner-img.png" /> </div>
        <div class="banner-video"><img src="<?php base_url();?>images/instead-video.png" /></div>
        </div>
        <!-- Ends MAin BAnner --> 
	</div>
	<?php 
} 
else
{ 
		?>
         <!-- Recent Logo Slider -->
         <div class="industry-cat-wrap">
         <h2><?php if(isset($value)) echo str_replace('-',' ',$value);?></h2>
                            <?php include_once 'logo-by-industry.php'; ?>
                          <span class="next-industry"><a onclick="clickNext()"  href="javascript:;">Next Industry</a></span>
                        </div>
                        <!-- Ends Recent Logo Slider --> 
		<?php	
} 
?>