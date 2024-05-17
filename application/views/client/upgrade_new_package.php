<?php
if(COUNTRY == 'UK'):
    # Redirect into https from packages page Starts
    if($_SERVER['REMOTE_ADDR'] != '127.0.0.1'){
    
        $url = "http" . (($_SERVER['SERVER_PORT']==443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $a = explode("/",$url);
        if($a[0] != "https:"){
        //header("Location: https://".SITE_NAME."/logodesign2/packages2.php/"); 
        header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        }       
    }
    # Redirect into https from packages page Ends
endif;


$query = $this->db->query('select * from new_sub_packages where package_id="48"');
$result = $query->result();
if(COUNTRY == "UK")
{
    //Silver Package
    $silver_price = $result[0]->gbp;
    $silver_price_regular = $result[0]->gbp_reg;
    $silver_price_reseller = number_format($result[0]->gbp_reseller,2,'.','');
    //Silver Plus Package
    $silver_plus_price = $result[1]->gbp;
    $silver_plus_price_regular = $result[1]->gbp_reg;
    $silver_plus_price_reseller = number_format($result[1]->gbp_reseller,2,'.','');
    //Super Silver Plus
    $super_silver_plus_price = $result[2]->gbp;
    $super_silver_plus_price_regular = $result[2]->gbp_reg;
    $super_silver_plus_price_reseller = number_format($result[2]->gbp_reseller,2,'.','');
    //Elite Package
    $elite_price = $result[3]->gbp;
    $elite_price_regular = $result[3]->gbp_reg;
    $elite_price_reseller = number_format($result[3]->gbp_reseller,2,'.','');
    //Elite Plus Package
    $elite_plus_price = $result[4]->gbp;
    $elite_plus_price_regular = $result[4]->gbp_reg;
    $elite_plus_price_reseller = number_format($result[4]->gbp_reseller,2,'.','');
    //Elite Silver Plus
    $super_elite_plus_price = $result[5]->gbp;
    $super_elite_plus_price_regular = $result[5]->gbp_reg;
    $super_elite_plus_price_reseller = number_format($result[5]->gbp_reseller,2,'.','');
}
else
{
    //Silver Package
    $silver_price = $result[0]->usd;
    $silver_price_regular = $result[0]->usd_reg;
    $silver_price_reseller = number_format($result[0]->usd_reseller,2,'.','');
    //Silver Plus Package
    $silver_plus_price = $result[1]->usd;
    $silver_plus_price_regular = $result[1]->usd_reg;
    $silver_plus_price_reseller = number_format($result[1]->usd_reseller,2,'.','');
    //Super Silver Plus
    $super_silver_plus_price = $result[2]->usd;
    $super_silver_plus_price_regular = $result[2]->usd_reg;
    $super_silver_plus_price_reseller = number_format($result[2]->usd_reseller,2,'.','');
    //Elite Package
    $elite_price = $result[3]->usd;
    $elite_price_regular = $result[3]->usd_reg;
    $elite_price_reseller = number_format($result[3]->usd_reseller,2,'.','');
    //Elite Plus Package
    $elite_plus_price = $result[4]->usd;
    $elite_plus_price_regular = $result[4]->usd_reg;
    $elite_plus_price_reseller = number_format($result[4]->usd_reseller,2,'.','');
    //Elite Silver Plus
    $super_elite_plus_price = $result[5]->usd;
    $super_elite_plus_price_regular = $result[5]->usd_reg;
    $super_elite_plus_price_reseller = number_format($result[5]->usd_reseller,2,'.','');
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	$('.current-button').on('click',function(){
		$('#upgrade-package1').submit();
	});
	$('.upgrades').on('click',function(){
		$('#upgrade-package2').submit();
	});
	$('.new_upgrades').on('click',function(){
		$('#upgrade-package3').submit();
	});
	$('.new_upgrades1').on('click',function(){
		$('#upgrade-package4').submit();
	});
	$('.new_upgrades2').on('click',function(){
		$('#upgrade-package5').submit();
	});
});
</script>

<style>
#feedback-containner div{
	margin-top:10px;
}
.img-error {
    float: left;
    height: 35px;
    margin-right: 15px;
    margin-top: -10px;
}

.main.LogIn-Message span {
    color: hsl(22, 100%, 50%);
    float: left;
    font-size: 18px;
    font-weight: bold;
}
.main.LogIn-Message span a{
	color:#54B91F;
}
</style>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/newmodify.css" />
</head>

<body>
<div class="wrapper">
  <?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php"); ?>

<div class="main-container">
<?php 
//echo $upgrade_details->site_id.'<br>'.COUNTRY;
if($upgrade_details->site_id == '7'){
$siteName = 'USA';
$siteLink = 'http://www.logodesignguarantee.com/client_panel/signin/'.$_SESSION['c_id'];
}else{
$siteName = 'UK';
$siteLink = 'http://www.logodesignguarantee.co.uk/client_panel/signin/'.$_SESSION['c_id'];
}
if(($upgrade_details->site_id == '7' && COUNTRY == 'UK') || ($upgrade_details->site_id == '6' && COUNTRY == 'USA')){
	?>
<div class="main LogIn-Message">
<img class="img-error" src="<?php if(COUNTRY == 'UK'){echo base_url().'images/errors1.png';}else{echo base_url().'assets/images/client/errors1.png';}?>" />
<span>You have a <u><?php echo $siteName?></u> account.  Please click <a href="<?php echo $siteLink;?>">here</a> and login to view your logo package.</span></div>
<?php }else{ ?>
<?php 
if($upgrade_details->package == 'Silver Logo Package'){
		include 'packages_page/silver_package.php';
	}elseif($upgrade_details->package == 'Elite Logo Package') {
		include 'packages_page/elite_package.php';
	}elseif($upgrade_details->package == 'Silver Logo With Business Card Designs' || $upgrade_details->package == 'Silver Plus Logo Package') {
		include 'packages_page/silver_with_business_cards.php';
	}elseif($upgrade_details->package == 'Silver Logo With Complete Stationary' || $upgrade_details->package == 'Super Silver Plus Logo Package') {
		include 'packages_page/silver_with_complete_stationary.php';
	}elseif($upgrade_details->package == 'Elite Logo With Business Card Designs' || $upgrade_details->package == 'Elite Plus Logo Package') {
		include 'packages_page/elite_with_business_cards.php';
	}else{
		include 'packages_page/elite_with_complete_stationary.php';
	}
}
?>
</div>	
<?php //} ?>  
  <div class="footer-container">
    <div class="footer">
      <div class="list-1">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/ourmgmt.php">Management team </a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/qualitycontrol.php">Quality control</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/partnership.php">Partnership programmes</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/terms.php">Terms and conditions</a></li>
    </ul>
</div>

<div class="list-2">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/guarantee.php">Guarantee</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/privacypolicy.php">Privacy policy</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">View our portfolio </a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/faq.php">FAQ</a></li>
    </ul>
</div>
<div class="list-3">
    <ul>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/index.php">Start my Website</a></li>
        <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/contact.php">Contact us </a></li>
        <li><a href="<?php echo base_url()?>new44/category.php" title="home">More Services</a></li>
    </ul>
</div>
<div style="clear:left"></div>

<p>Privacy Policy: We will never share, sell, or rent individual personal information with anyone without your advance permission or unless ordered by a court of law. Information submitted to us is only available to employees managing this information for purposes of contacting you or sending you emails based on your request for information and to contracted service providers for purposes of providing services relating to our communications with you. </p>

<p>Copyright 2003-2014. Designated trademarks and brands are the property of their respective owners. The content on the Logo Design Guarantee website is protected under copyright, trademark, patent and other intellectual property rights belonging to Logo Design Guarantee and any unauthorized use of such content may violate such laws.</p>

<p>LogoDesignGuarantee.com is Committed to Producing <i>Award-Winning </i>Logos!</p>

<div  class="security-seals">
    <ul>
                <li><span id="siteseal" style="display: inline-block;"><script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=qHwD7KdZ2yocqsiUmu3U0vMD7qlfms8eOr01fHGM4RGqcjqakuedi"></script></span>
        <script type="text/JavaScript">
//<![CDATA[
var sealServer=document.location.protocol+"//seals.websiteprotection.com/sealws/503846bb-7bc4-4d46-ab46-09bccbdd56cb.gif";var certServer=document.location.protocol+"//certs.websiteprotection.com/sealws/?sealId=503846bb-7bc4-4d46-ab46-09bccbdd56cb";var hostName="logodesignguarantee.com";document.write(unescape('<div style="text-align:center;margin:0 auto;"><a target="_blank" href="'+certServer+'&pop=true" style="display:inline-block;"><img src="'+sealServer+'" width="132" alt="Website Protection&#153; Site Scanner protects this website from security threats." title="This Website Protection site seal is issued to '+ hostName +'. Copyright &copy; 2012, all rights reserved."oncontextmenu="alert(\'Copying Prohibited by Law\'); return false;" border="0" /></a></div>'));
//]]>
</script>
        
        </li>
         <li><!-- GeoTrust QuickSSL [tm] Smart Icon tag. Do not edit. -->
        <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"
         SRC="//smarticon.geotrust.com/si.js"></SCRIPT>         
         <!-- end GeoTrust Smart Icon tag --></li>
         <li>
        <!-- START SCANALERT CODE FOR LDG.COM -->
        <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" /></a>
        <!-- END SCANALERT CODE LDG.COM  --></li>
            </ul>
</div><div align="center" class="seal-top-all"><p>Call us TOLL FREE<br />
  
   <span class="adinsightNumber2593">866-598-6266</span> </p></div>    <div class="footer-menu" align="center">
        <ul>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Home</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Packages</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/" title="home">Design Process</a></li>
            
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">Portfolio</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/portfolio.php">Testimonials</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/faq.php">FAQ</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/terms.php">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/privacypolicy.php">Privacy policy</a></li>
            <li><a href="<?php echo base_url()?>new44/category.php">More Services</a></li>
            <li><a href="<?php echo base_url()?>web-site-design/webdesigner-limited-sale/contact.php">Contact</a></li>
        
        </ul>
    </div>

    </div>
  </div>
</div>
</body>
</html>