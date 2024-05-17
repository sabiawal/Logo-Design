<?php  if(isset($c_id) && $c_id !=""): ?>
    <div class="menu-top">
        <ul>
<?php /*?>            <li class="<?php if($this->router->method == 'index' || $this->router->method == 'home' )echo 'selected'; ?>"><a href="<?= site_url('client_panel/index');?>" >Home</a></li><?php */?>
<li class="<?php if($this->router->method == 'logosamples')echo 'selected'; ?>"><a href="<?= site_url('client_panel/logosamples');?>" >Logo Samples</a></li>
<li class="<?php if($this->router->method == 'stationary')echo 'selected'; ?>"><a href="<?= site_url('client_panel/stationary');?>" >Stationary Samples</a></li>
<li class="<?php if($this->router->method == 'finalfiles')echo 'selected'; ?>"><a href="<?= site_url('client_panel/finalfiles');?>" >Final Files</a></li>           
<li class="<?php if($this->router->method == 'category')echo 'selected'; ?>"><a href="<?= site_url('new44/category');?>" >More Services</a></li>
<!--<li class="<?php if($this->router->method == 'printing')echo 'selected'; ?>"><a href="<?= site_url('client_panel/printing');?>" >Printing</a></li>-->
<li class="<?php if($this->router->method == 'send_to_friends')echo 'selected'; ?>" id="logo_send"><a href="<?= site_url('client_panel/send_to_friends');?>" >LogoVote<sup>TM</sup>  / Send to Friends</a></li>
            <?php if($this->session->userdata('show')==1){?>
            <li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="javascript:void(0);">LogoVote<sup>TM</sup>  / Your Feedbacks <?php 
if($this->session->userdata('show')){			
echo "(".$this->session->userdata('show').")";
}
?></a></li>
<?php }else{?>
<li class="<?php if($this->router->method == 'logo_vote_feedback')echo 'selected'; ?>" id="logo_feedback"><a href="<?= site_url('client_panel/logo_vote_feedback');?>">LogoVote<sup>TM</sup>  / Your Feedbacks</a></li>
<?php } ?>
            <li><a href="<?= site_url('client_panel/logout'); ?>">Log Out</a></li>
            <div style="clear: both;"></div>
        </ul>
    </div>
    <div class="limited-offer">
    <a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" target="_blank"><img src="<?= base_url().'images/client/limited-offer.jpg'?>" width="972" alt="Limited Offer, 50% off" title="Limited Offer, 50% off" /></a>
    </div>
<?php endif; ?>
<script type="text/javascript" src="<?= base_url();?>js/sliderman.1.3.7.js"></script>
<?php if($package_id == 1){ $img_src = base_url()."images/new44/brochure/brochure-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 2){ $img_src = base_url()."images/new44/socialmedia/socialmedia-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 3){ $img_src = base_url()."images/new44/flyer/flyer-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 4){ $img_src = base_url()."images/new44/poster/poster-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 5){ $img_src = base_url()."images/new44/invitationcard/invitationcard-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 6){ $img_src = base_url()."images/new44/membershipcard/membershipcard-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 7){ $img_src = base_url()."images/new44/powerpoint/powerpoint-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 8){ $img_src = base_url()."images/new44/menu/menu-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 9){ $img_src = base_url()."images/new44/bumper/bumper-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 10){ $img_src = base_url()."images/new44/postcard/postcard-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 11){ $img_src = base_url()."images/new44/productlabel/productlabel-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 12){ $img_src = base_url()."images/new44/cddvdcover/cddvdcover-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 13){ $img_src = base_url()."images/new44/catalog/catalog-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 14){ $img_src = base_url()."images/new44/illustration/illustration-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 15){ $img_src = base_url()."images/new44/magazinecover/magazinecover-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 16){ $img_src = base_url()."images/new44/productpackaging/productpackaging-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 17){ $img_src = base_url()."images/new44/bookcover/bookcover-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 18){ $img_src = base_url()."images/new44/sticker/sticker-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 19){ $img_src = base_url()."images/new44/animatedlogo/animatedlogo-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 20){ $img_src = base_url()."images/new44/logoredesign/logoredesign-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 21){ $img_src = base_url()."images/new44/logograyscale/logograyscale-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 22){ $img_src = base_url()."images/new44/emailnewsletter/emailnewsletter-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 23){ $img_src = base_url()."images/new44/emailtemplate/emailtemplate-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 24){ $img_src = base_url()."images/new44/landingwebpage/landingwebpage-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 25){ $img_src = base_url()."images/new44/animatedwebbanner/animatedwebbanner-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 26){ $img_src = base_url()."images/new44/iconbutton/iconbutton-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 27){ $img_src = base_url()."images/new44/favicon/favicon-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 28){ $img_src = base_url()."images/new44/tshirt/tshirt-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 29){ $img_src = base_url()."images/new44/bookmark/bookmark-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 30){ $img_src = base_url()."images/new44/signage/signage-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 31){ $img_src = base_url()."images/new44/folder/folder-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 32){ $img_src = base_url()."images/new44/merchandise/merchandise-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 33){ $img_src = base_url()."images/new44/doorhanger/doorhanger-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 34){ $img_src = base_url()."images/new44/screensaver/screensaver-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 35){ $img_src = base_url()."images/new44/stationeryfull/stationeryfull-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 36){ $img_src = base_url()."images/new44/businesscard/businesscard-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 37){ $img_src = base_url()."images/new44/letterhead/letterhead-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 38){ $img_src = base_url()."images/new44/envelope/envelope-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 39){ $img_src = base_url()."images/new44/complimentslip/complimentslip-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 40){ $img_src = base_url()."images/new44/faxtemplate/faxtemplate-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 41){ $img_src = base_url()."images/new44/animatedwebheader/animatedwebheader-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 42){ $img_src = base_url()."images/new44/emailsignature/emailsignature-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 43){ $img_src = base_url()."images/new44/notepad/notepad-green-banner-".COUNTRY.".jpg";}?>
<?php if($package_id == 44){ $img_src = base_url()."images/new44/electronicletterhead/electronicletterhead-green-banner-".COUNTRY.".jpg";}?>

<div class="banner">
<p>Call "free" a design expert 24/7:<br />
   <span><?= PHONE_NO; ?></span></p>
</div>

<?php  if(isset($c_id) && $c_id !=""): ?>
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
<?php else: ?>
    <div class="menu">
        <ul>
            <li id="nav-home"><a href="<?= base_url();?>" title="home">Home</a></li>
            <li id="nav-packages"><a href="<?= site_url('packages');?>" title="packages">Packages</a></li>
            <li id="nav-process"><a href="<?= site_url('process'); ?>" title="Process">Process</a></li>
            <li id="nav-compare"><a href="<?= site_url('compare'); ?>" title="Compare Us">Compare Us</a></li>
            <li id="nav-portfolio"><a href="<?= site_url('portfolio'); ?>" title="Portfolio">Portfolio</a></li>
            <li id="nav-guarantee"><a href="<?= site_url('guarantee'); ?>" title="Guarantee">Guarantee</a></li>
            <li id="nav-about"><a href="<?= site_url('about'); ?>" title="About Us">About Us</a></li>
            <li id="nav-web-design"><a href="<?= site_url('web-site-design/webdesigner-limited-sale/index');?>" title="Web Design">Web Design</a></li>
        </ul>
    </div>    
<?php endif; ?>

<?php if($this->router->method != 'category'){ ?>
<div class="main-banner" style="margin: 18px 0 0 0;">
<div class="left" style="position: relative;">
<img src="<?= $img_src;?>" alt="Logo Design Guarantee" border="0" usemap="#Map" title="Logo Design Guarantee"/>

</div>
<div class="right">
<div class="imgfader" style="width: 691px; height:283px ;">

				<div id="SliderName_3" class="SliderName_3">
				<?php if($package_id == 1){?>
					<img src="<?= base_url();?>images/new44/brochure/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/brochure/banner/8.png" alt="image8" title="image8" style="border:none"/>
				<?php } elseif($package_id == 2){?>
					<img src="<?= base_url();?>images/new44/socialmedia/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/socialmedia/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 3){?>
					<img src="<?= base_url();?>images/new44/flyer/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/flyer/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 4){?>
					<img src="<?= base_url();?>images/new44/poster/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/poster/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 5){?>
					<img src="<?= base_url();?>images/new44/invitationcard/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/invitationcard/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 6){?>
					<img src="<?= base_url();?>images/new44/membershipcard/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/membershipcard/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 7){?>
					<img src="<?= base_url();?>images/new44/powerpoint/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/powerpoint/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 8){?>
					<img src="<?= base_url();?>images/new44/menu/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/menu/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 9){?>
					<img src="<?= base_url();?>images/new44/bumper/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bumper/banner/8.png" alt="image8" title="image8" style="border:none"/>                   					
				<?php } elseif($package_id == 10){?>
					<img src="<?= base_url();?>images/new44/postcard/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/postcard/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 11){?>
					<img src="<?= base_url();?>images/new44/productlabel/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productlabel/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 12){?>
					<img src="<?= base_url();?>images/new44/cddvdcover/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/cddvdcover/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 13){?>
					<img src="<?= base_url();?>images/new44/catalog/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/catalog/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 14){?>
					<img src="<?= base_url();?>images/new44/illustration/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/illustration/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 15){?>
					<img src="<?= base_url();?>images/new44/magazinecover/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/magazinecover/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 16){?>
					<img src="<?= base_url();?>images/new44/productpackaging/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/productpackaging/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 17){?>
					<img src="<?= base_url();?>images/new44/bookcover/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookcover/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 18){?>
					<img src="<?= base_url();?>images/new44/sticker/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/sticker/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 19){?>
					<img src="<?= base_url();?>images/new44/animatedlogo/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedlogo/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 20){?>
					<img src="<?= base_url();?>images/new44/logoredesign/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/5-<?= COUNTRY; ?>.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logoredesign/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 21){?>
					<img src="<?= base_url();?>images/new44/logograyscale/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/logograyscale/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 22){?>
					<img src="<?= base_url();?>images/new44/emailnewsletter/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailnewsletter/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 23){?>
					<img src="<?= base_url();?>images/new44/emailtemplate/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailtemplate/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 24){?>
					<img src="<?= base_url();?>images/new44/landingwebpage/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/7-<?= COUNTRY; ?>.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/landingwebpage/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 25){?>
					<img src="<?= base_url();?>images/new44/animatedwebbanner/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebbanner/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 26){?>
					<img src="<?= base_url();?>images/new44/iconbutton/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/5-<?= COUNTRY; ?>.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/iconbutton/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 27){?>
					<img src="<?= base_url();?>images/new44/favicon/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/favicon/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 28){?>
					<img src="<?= base_url();?>images/new44/tshirt/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/tshirt/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 29){?>
					<img src="<?= base_url();?>images/new44/bookmark/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/bookmark/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 30){?>
					<img src="<?= base_url();?>images/new44/signage/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/signage/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 31){?>
					<img src="<?= base_url();?>images/new44/folder/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/folder/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 32){?>
					<img src="<?= base_url();?>images/new44/merchandise/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/merchandise/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 33){?>
					<img src="<?= base_url();?>images/new44/doorhanger/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/6-<?= COUNTRY; ?>.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/doorhanger/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 34){?>
					<img src="<?= base_url();?>images/new44/screensaver/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/screensaver/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 35){?>
					<img src="<?= base_url();?>images/new44/stationeryfull/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/stationeryfull/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 36){?>
					<img src="<?= base_url();?>images/new44/businesscard/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/businesscard/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 37){?>
					<img src="<?= base_url();?>images/new44/letterhead/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/letterhead/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 38){?>
					<img src="<?= base_url();?>images/new44/envelope/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/envelope/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 39){?>
					<img src="<?= base_url();?>images/new44/complimentslip/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/complimentslip/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 40){?>
					<img src="<?= base_url();?>images/new44/faxtemplate/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/faxtemplate/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 41){?>
					<img src="<?= base_url();?>images/new44/animatedwebheader/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/animatedwebheader/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 42){?>
					<img src="<?= base_url();?>images/new44/emailsignature/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/7-<?= COUNTRY; ?>.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/emailsignature/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 43){?>
					<img src="<?= base_url();?>images/new44/notepad/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/notepad/banner/8.png" alt="image8" title="image8" style="border:none"/>
                <?php } elseif($package_id == 44){?>
					<img src="<?= base_url();?>images/new44/electronicletterhead/banner/1-<?= COUNTRY; ?>.png" alt="image1"  title="image1" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/2.png" alt="image2" title="image2" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/3.png" alt="image3" title="image3" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/4.png" alt="image4" title="image4" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/5.png" alt="image5" title="image5" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/6.png" alt="image6" title="image6" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/7.png" alt="image7" title="image7" style="border:none"/>
                    <img src="<?= base_url();?>images/new44/electronicletterhead/banner/8.png" alt="image8" title="image8" style="border:none"/>
                    
                <?php }else{ ?>
                
                <?php } ?>
                </div>
				

				<script type="text/javascript">
					//demo3Effect1 = {name: 'myEffect31', top: true, duration: 400};
//					demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400};
//					demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400};
//					demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400};
//					demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 50, duration: 100, order: 'random', fade: true};
//					demo3Effect6 = {name: 'myEffect36', rows: 50, cols: 100, delay: 1000, duration: 400, order: 'random', fade: true, chess: true};
                    
                    //demo4Effect1 = {name: 'myEffect41', rows: 6, cols: 12, fade: true, easing: 'swing', order: 'cross', delay: 100, duration: 400};
//                    demo4Effect2 = {name: 'myEffect42', rows: 6, cols: 12, fade: true, easing: 'swing', order: 'cross', delay: 100, duration: 400, reverse: true};
                    demo4Effect3 = {name: 'myEffect43', rows: 1, cols: 2, fade: true,  easing: 'pow2', order: 'rectangle', delay: 200, duration: 3000};
                    //demo4Effect4 = {name: 'myEffect44', rows: 6, cols: 12, fade: true, easing: 'pow2', order: 'rectangle', delay: 200, duration: 1000, reverse: true};
//                    demo4Effect5 = {name: 'myEffect45', rows: 3, cols: 10, zoom: true, move: true, right: true, easing: 'swing', order: 'circle', delay: 150, duration: 800};
//                    demo4Effect6 = {name: 'myEffect46', rows: 3, cols: 10, zoom: true, move: true, left: true, easing: 'swing', order: 'circle', delay: 150, duration: 800, reverse: true};
//                    demo4Effect7 = {name: 'myEffect49', rows: 5, cols: 1, zoom: true, move: true, bottom: true, easing: 'bounce', order: 'circle', delay: 150, duration: 800};
//                    demo4Effect8 = {name: 'myEffect410', rows: 5, cols: 1, zoom: true, move: true, top: true, easing: 'bounce', order: 'circle', delay: 150, duration: 800, reverse: true};

					//effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];
					//effectsDemo3 = ['blinds,rain'];
					effectsDemo3 = [demo4Effect3];

					var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width:691, height:283, effects: effectsDemo3, display: {autoplay: 5000}});
				</script>

				
		</div>
</div>
<div class="clear"></div>

</div>
<?php } ?>