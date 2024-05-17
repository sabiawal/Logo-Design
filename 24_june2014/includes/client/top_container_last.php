<?php
$data_tables = $this->db->query("select * from notification_count where logo_web_id='".$_SESSION['logoWebId']."'")->result();
$num_rows = count($data_tables);
if($this->router->method != 'thankyou_1'){
?>
<div class="top-container">
    <div class="top">
    <div class="menu-top">
        <ul>
<?php /*?>            <li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li><?php */?>
<li class="<?php if($this->router->method == 'logosamples')echo 'selected'; ?>"><a href="<?= site_url('client_panel/logosamples');?>" >Logo Samples</a></li>
<li class="<?php if($this->router->method == 'stationary')echo 'selected'; ?>"><a href="<?= site_url('client_panel/stationary');?>" >Stationary Samples</a></li>
<li class="<?php if($this->router->method == 'finalfiles')echo 'selected'; ?>"><a href="<?= site_url('client_panel/finalfiles');?>" >Final Files</a></li>           
<li class="<?php if($this->router->method == 'moreservices')echo 'selected'; ?>"><a href="<?= site_url('new44/category');?>" >More Services</a></li>
<!--<li class="<?php if($this->router->method == 'printing')echo 'selected'; ?>"><a href="<?= site_url('client_panel/printing');?>" >Printing</a></li>-->
<li class="<?php if($this->router->method == 'send_to_friends')echo 'selected'; ?>" id="logo_send"><a href="<?= site_url('client_panel/send_to_friends');?>" >LogoVote<sup>TM</sup>  / Send to Friends</a></li>
            <?php if($num_rows>0){?>
            <li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="<?= site_url('client_panel/session_destroy1');?>">LogoVote<sup>TM</sup>  / Your Feedbacks <?php 
if($num_rows>0){			
echo "(".$num_rows.")";
}
?></a></li>
<?php }else{?>
<li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="<?= site_url('client_panel/logo_vote_feedback');?>">LogoVote<sup>TM</sup>  / Your Feedbacks</a></li>
<?php } ?>
<!--<li class="<?php if($this->router->method == 'upgrade_new_package')echo 'selected'; ?>" id="logo_feedback"><a href="<?= site_url('client_panel/upgrade_new_package');?>">Upgrade Your Package Now!</a></li>-->
<li><a href="<?= site_url('client_panel/logout'); ?>">Log Out</a></li>

<div style="clear: both;"></div>

</ul>

</div>
<?php if($this->router->method != 'send_to_friends' && $this->router->method != 'logo_vote_feedback'){ ?>
<div class="limited-offer">

<a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" ><img src="<?= base_url().'images/client/limited-offer.jpg'?>" width="972" alt="Limited Offer, 50% off" title="Limited Offer, 50% off" /></a>

</div>
<?php } ?>    

<?php if($this->router->method != 'finalStationary' && $this->router->method != 'finalfiles' && $this->router->method != 'send_to_friends' && $this->router->method != 'logo_vote_feedback'){ ?>
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
<?php 
//echo $this->router->method;
if($this->router->method != 'printing' && $this->router->method != 'logosamples' && $this->router->method != 'thankyou_1'){ 
//if($this->router->method != 'logosamples'){ 
?>
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
<?php }} ?>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
	});
</script>

<?php
if(isset($slider)){ 
if(count($slider)){?>
<div class="recent-logos">
<div class="recent-logo-bg-repeat">
  <div class="recent-logo-bg-top">
<div class="recent-logo-bg-bottom">
<div class="logos-added"> 
<!-- Recent Logo Slider -->
      
<div id="demo5" class="scroll-img list_carousel">
<ul class="gallery clearfix" id="foo2">
<?php for($i=0;$i<count($slider);$i++){?>          
<li><a href="http://50dollarlogo.com/admin_panel/sample/<?php echo $slider[$i]?>" rel="prettyPhoto[gallery2]"><img src="http://50dollarlogo.com/admin_panel/sample/<?php echo $slider[$i]?>"></a></li>
<?php } ?>
</ul>
<div class="clearfix"></div>
<a id="prev2" class="prev demo5-backward" href="#">&lt;</a>
<a id="next2" class="next demo5-forward" href="#">&gt;</a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }else{ if($this->router->method == "logosamples"){?>
<div class="recent-logos">
<div class="recent-logo-bg-repeat">
  <div class="recent-logo-bg-top">
<div class="recent-logo-bg-bottom">
<div class="logos-added"> 
<!-- Recent Logo Slider -->
<div class="no_image">Your logo samples will be shown here.</div>
</div>
</div>
</div>
</div>
</div>
<?php }} }?>

</div>

</div>
<?php } ?>