<div class="top-container">
<?php
$data_tables = $this->db->query("select * from notification_count where logo_web_id='".$_SESSION['logoWebId']."'")->result();
$num_rows = count($data_tables);
?>
<div class="top">

<div class="menu-top">

<ul>

<li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li>
<li class="<?php if($this->router->method == 'logosamples')echo 'selected'; ?>"><a href="<?= site_url('client_panel/logosamples');?>" >Logo Samples</a></li>
<li class="<?php if($this->router->method == 'stationary')echo 'selected'; ?>"><a href="<?= site_url('client_panel/stationary');?>" >Stationary Samples</a></li>
<li class="<?php if($this->router->method == 'finalfiles')echo 'selected'; ?>"><a href="<?= site_url('client_panel/finalfiles');?>" >Final Files</a></li>           
<li class="<?php if($this->router->method == 'moreservices')echo 'selected'; ?>"><a href="<?= site_url('new44/category');?>" >More Services</a></li>
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
<?php } ?>


</div>

</div>