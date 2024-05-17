<?php
$route_method = $this->router->method;
if($route_method == 'index')
{
	$background = 'bg_grow_with_email.jpg';
	$images = "video_start_email.png";
	$processlink = 'process.php';
	$compare_uslink='compare_us.php';
	$compare_us_text ='Compare Us';
}
if($route_method == 'compare_us')
{
	$background = 'purple_bg_grow_with_email.jpg';
	$images = "compareus_logobanner.png";
	$processlink = 'process.php';
	$compare_uslink='confidentiality.php';
	$compare_us_text ='View how our confidentiality works';
}
if($route_method == 'confidentiality')
{
	$background = 'blue_bg_grow_with_email.jpg';
	$images = "Confidentiality_logobanner.png";
	$processlink = 'process.php';
	$compare_uslink='compare_us.php';
	$compare_us_text ='Compare Us';
}
if($route_method == 'process')
{
	$background = 'green_bg_grow_with_email.jpg';
	$images = "process_logobanner.png";
	$processlink = 'qualifications.php';
	$compare_uslink='compare_us.php';
	$compare_us_text ='Compare Us';
}
if($route_method == 'programme')
{
	$background = 'red_bg_grow_with_email.jpg';
	$images = "programme_logobanner.png";
	$processlink = 'process.php';
	$compare_uslink='compare_us.php';
	$compare_us_text ='Compare Us';
}
if($route_method == 'qualifications')
{
	$background = 'qualifications_bg_grow_with_email.jpg';
	$images = "qualifications_logobanner.png";
	$processlink = 'process.php';
	$compare_uslink='compare_us.php';
	$compare_us_text ='Compare Us';
}
 ?>
<!-- reseller design css -->
<style type="text/css">
body, .top, .main, .footer, .wrapper {
	background: #fff;
}
.main {	
	border: 1px solid #ddd;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
}
.footer {	
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	border-radius: 0px 0px 10px 10px;
}
/* starts */
.clear_fix:after {
	clear: both;
	content: " ";
	display: block;
	font-size: 0;
	height: 0;
	visibility: hidden;
}
#container{
	margin-top:20px;
	border:1px solid #ccc;
	-moz-border-radius:10px;
	border-radius:10px;}
#container.nortcol {
	background-color: #FFFFFF;
	background-image: none;
}
#container.nortcol #middle {
	float: right;
	margin: 0;
	width: 780px;
}
#container.nortcol #main {
    clear: both;
}
#main .header-resell {
    background: url("<?php echo base_url()."images/reseller/".$background; ?>") no-repeat scroll 0 0 white;
    height: 314px;
    padding: 35px 33px 13px 34px;
	 border-radius: 0px 10px 10px 0px;
}
#main .header-resell .button.get-em {
    background-image: url("<?php echo base_url()?>images/reseller/btn_get_email_white.png");
    height: 81px;
    margin-top: 212px;
    width: 201px;
}
.ctas .button, .ctas .text-link, .header-resell .button, .header-resell .text-link, .signup .text-link {
    background: none no-repeat scroll left top transparent;
    display: block;
    text-indent: -9000px;}
#main .header-resell .thumbnail {
    background: url("<?php echo base_url()."images/reseller/".$images; ?>") no-repeat scroll 0 0 transparent;
    height: 264px;
    margin-bottom: 20px;
    text-indent: -9000px;
    width: 477px;
	margin-left: 35px;
	float:left;
}
#main .header-resell .thumbnail:hover {
    background-position: left bottom;
}
#main .header-resell .video-frame {
    background: none repeat scroll 0 0 black;
    height: 264px;
    width: 477px;
}
#main .header-resell .text-link {
    clear: both;
}
#main .content h1 {
    background-image: url("<?php echo base_url()?>images/reseller/grow_with_email_text.png");
    height: 91px;
    width: 720px;
}
/*.header-resell .text-link.pricing-plans {
	clear:both;
	float:right !important;
    background-image: url("<?php echo base_url()."images/reseller/".$compareimg; ?>");
    height: 17px;
    margin-top: -4px;
    width: 225px;
}*/
.ctas .button:hover, .ctas .text-link:hover, .header-resell .button:hover, .header-resell .text-link:hover, .signup .text-link:hover {
    background-position: left bottom;
}
.newcompare{
	float:right;
	color:#ebebeb;
	font-size:16px;
	text-decoration:underline;
}
.newcompare:hover{
	float:right;
	color:#404040;
	font-size:16px;
	text-decoration:underline;
}
#middle {
	float: left;
	height: 100%;
	width: 600px;
}
#container.nortcol #left {
	float: left;
	width: 220px;
}
#left {
	float: left;
	width: 180px;
}
#subnav {
	background: url("<?php echo base_url()?>images/reseller/left_rail.png") no-repeat scroll right bottom transparent;
	min-height: 350px;
	padding: 10px 10px 0 30px;
}
#subnav ul {
}
#subnav ul li {
	list-style: none outside none;
	padding: 0 0 5px 10px;
}
#subnav ul li.new a {
	padding-right: 36px;
}
#subnav h6 {
	color: #357E86;
	padding: 5px 0;
	font: 100% Arial, Helvetica, sans-serif;
	font-weight:bold;
}
#subnav a, #subnav a:link, #subnav a:active, #subnav a:visited {
	color: #808182;
	text-decoration: none;
}
#subnav .current {
	background: url("<?php echo base_url()?>images/reseller/arrow.png") no-repeat scroll 0 5px transparent;
}
#subnav .current a {
	color: #373737;
	font-weight: bold;
}
#subnav a:hover {
	color: #066BC7;
	text-decoration: underline;
}
</style>
<style type="text/css">
.top .banner {
    background: url("<?php echo base_url()?>images/reseller/telephone_n_guarantee.png") no-repeat scroll 0 0 transparent;
    display: block;
    height: 88px;
    width: 1002px;
}
</style>
<div class="banner">
<p style="color:#0b4a8d;">24/7 Reseller Sales: (phone number 1)<br/>
24/7 Reseller Support: (phone number 2)</p>
   <!--<span><?= PHONE_NO; ?></span></p>-->
</div>
<div class="menu">
<ul>
<li><a href="<?php echo base_url();?>" title="home">Home</a></li>
<li><a href="<?php echo site_url('packages');?>" title="packages">Packages</a></li>
<li><a href="<?php echo site_url('process'); ?>" title="Process">Process</a></li>
<li><a href="<?php echo site_url('compare'); ?>" title="Compare Us">Compare Us</a></li>
<li><a href="<?php echo site_url('portfolio'); ?>" title="Portfolio">Portfolio</a></li>
<li><a href="<?php echo site_url('guarantee'); ?>" title="Guarantee">Guarantee</a></li>
<li><a href="<?php echo site_url('about'); ?>" title="About Us">About Us</a></li>
<li><a href="<?php if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}else{echo site_url('web-site-design/webdesigner-limited-sale/index');} ?>" title="Web Design">Web Design</a></li>
</ul>
</div>
<?php 
//$active[$current]='class=current';
?>
      <div class="clear_fix nortcol" id="container">
        <div id="middle">
          <div id="main"> 
            <script src="http://fast.wistia.com/static/E-v1.js" charset="ISO-8859-1"></script>
            <div class="mboxDefault" style="visibility: visible; display: block;">
              <div class="header-resell"> 
              <a href="<?php echo site_url('reseller/orderstart');?>" class="button get-em left">Get Email Marketing</a>
              <a href="<?php echo base_url()."reseller/".$processlink; ?>" rel="" name="video_em_overview" class="video-bind thumbnail show right appconnect">Play Video</a> 
              <a href="<?php echo base_url()."reseller/".$compare_uslink; ?>" class="newcompare">
			  <?php echo $compare_us_text?></a>
              </div>
            </div>
            <div style="visibility:hidden;display:none" id="mboxMarker-default-hero_image-0">&nbsp;</div>
            <div id="mboxImported-default-hero_image-0" style="visibility: hidden; display: none"><!-- Offer Id: 174275  --></div>
          </div>
        </div>
        <div id="left">
          <div id="subnav">
            <h6>Reseller Service Overview</h6>
            <ul>
              <li<?php if($route_method == 'index'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/index');?>">Packages</a></li>
              <li<?php if($route_method == 'compare_us'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/compare_us');?>">Compare Us</a></li>
              <li<?php if($route_method == 'confidentiality'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/confidentiality');?>">Confidentiality</a></li>
              <li<?php if($route_method == 'process'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/process');?>">Process</a></li>
              <li<?php if($route_method == 'programme'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/programme');?>">Programme</a></li>
              <li<?php if($route_method == 'qualifications'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/qualifications');?>">Qualifications</a></li>
              <li<?php if($route_method == 'orderstart'){echo ' class="current"';} ?>>
              <a href="<?php echo site_url('reseller/orderstart');?>">Get Started</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- reseller design ends -->