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
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?=base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?=base_url(); ?>js/image.hover.js"></script>
<script language="javascript" type="text/javascript">
function submitPackage(Pack,Price){
    document.getElementById('package').value=Pack;
    document.getElementById('price').value=Price;
    document.forms.packageFrm.submit();
}
</script>
<?php include_once("includes/logo-design/analytics.php"); ?>
<!--[if lt IE 8]>
<script src="<?=base_url()?>js/IE8.js"></script>
<![endif]-->
<style type="text/css">
.text-16 {
	margin-top: -10px;
	left: -2px;
}
.time-red {
	width: 244px;
}
.text-price {
	color: #5d8193;
	font-size: 16px;
	font-weight: bold;
	padding-right: 1px;
	padding-bottom: 2px;
}
.text-sale {
	color: #990000;
	font-size: 20px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	/*padding-left: 15px;*/
	padding-bottom: 2px;
}
.text-save {
	color: #990000;
	font-size: 15px;
	font-weight: bold;
	padding-right: 2px;
	padding-bottom: 2px;
}
.newsave {
	margin-right: 10px;
}
.newsale {
	margin-right: -3px;
}
.newpricena {
	margin-right: 8px;
}
</style>
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="top-container">
    <div class="top">
      <?php include_once("includes/logo-design/menu-banner.php"); ?>
      <script language="javascript" type="text/javascript">
        document.getElementById('nav-packages').className='selected';
        </script> 
    </div>
  </div>
  <form method="post" name="packageFrm" id="packageFrm" action="<?=site_url('ordermid');?>">
    <div class="main-container">
      <div class="main col2-right-layout">
        <div class="col-main">
          <div class="packages-text">
            <h1>Choose your package below and order on-line now!</h1>
            <p>Our lowest fee package offers an outstanding 6 custom-sample package! </p>
            <p><span class="text-red"><span class="text-bold">Warning:</span> Many logo firms will tempt you with low fees such as &ldquo;
              <?=CURRENCY . $silver_price; ?>
              &rdquo; or &ldquo;
              <?=CURRENCY . $super_silver_plus_price; ?>
              &rdquo; but they will only provide 1 or 2 samples for their advertised fee.</span> Do not fall for this! Several logo variations are essential in getting the logo you have in mind!</p>
            <p>We have achieved the status of the leading
              <?=ISM; ?>
              logo design company, because our standard package provides 6 custom-logos for only <!--<del><?= CURRENCY.$silver_price_regular; ?></del>--> <span style="color:#f00; font-weight:bold;">
              <?= CURRENCY . $silver_price; ?></span>
              with a <span class="text-green text-10">
              <?=GUARANTEE_DAY; ?>
              -Day, 100% money back guarantee.</span></p>
            <p class="factors">There are 7 core factors which will give you 100% confidence to place an order with us today...</p>
            <ul class="factors-list">
              <li>All of our designers are <span class="text-bold"> in-house professionals.</span> We do not outsource or use freelance designers like most other logo firms. </li>
              <li>We provide a minimum of<span class="text-bold"> 3 designers working</span> on each project. This is essential in getting a good mix of ideas. </li>
              <li>You will be assigned a personal<span class="text-bold"> account manager</span> for your project! </li>
              <li>Free unlimited<span class="text-bold"> concepts, redraws and revisions</span> for every package. Most of our competitors will limit the number and charge much more for the "unlimited" feature. </li>
              <li>Our lowest fee package offers 6 custom-samples. Many logo firms will tempt you with low fees but only provide 1 or 2 samples for their advertised fee. Do not fall for this. Several variations are essential in getting the logo that is  right for you! </li>
              <li>We provide revision <span class="text-bold">turnarounds within 24 hours.</span> Most firms take up to 4 weeks to complete a project. </li>
              <li><span class="text-bold">
                <?=GUARANTEE_DAY; ?>
                -Day, 100% Money Back Guarantee</span> on all our packages. We provide you with the best guarantee in the industry. Most firms only state 100% money back guarantee as a marketing gimmick. Their policies often apply solely to expensive packages and have lots of small print, subjecting you to incurring administration charges often at
                <?=CURRENCY . $super_silver_plus_price; ?>.</li>
              <p>If you are confused about what to do first, <a href="<?=base_url(); ?>process.php">click here</a> to see our 5 easy steps to a great custom logo.</p>
            </ul>
          </div>
          <div class="packages">
            <div class="silver" align="center">
              <div><img src="<?=base_url(); ?>images/silvtitle-<?=COUNTRY; ?>.jpg" align="silver-package" title="silver-package"/></div>
              <div class="silver-text" align="left"> <img src="<?=base_url(); ?>images/sliver-package.jpg" alt="Silver Package" title="Silver Package" />
                <p>This Silver logo design package includes original logo design and file formats that can be used for any print or web needs. The logo designs are <span class="text-orange">100% unique</span> to your organization and will promote professionalism for your new start-up or current firm.</p>
                <ul>
                  <li><span class="text-orange">Free</span> complete logo design research.</li>
                  <li><span class="text-orange">3 designers</span> to share and contribute ideas.</li>
                  <li><span class="text-orange">Dedicated</span> project manager!.</li>
                  <li>6 custom-made logo samples.</li>
                  <li>Professional design - No templates - No clipart used.</li>
                  <li>Each logo sample is 100% original, unique and different.</li>
                  <li><span class="text-orange">Unlimited</span> redraws</li>
                  <li><span class="text-orange">Unlimited</span> concepts</li>
                  <li><span class="text-orange">Unlimited</span> revisions</li>
                  <li>1- 3 business days turn around on all our logo designs</li>
                  <li><span class="text-orange">Free</span> Final logo files sent via email - includes formats for all print and web use.</li>
                  <li><span class="text-orange">Free</span> of charge for any additional files you request</li>
                  <li><span class="text-orange">Free</span> complete ownership to all the logo design samples we design for you.</li>
                  <li><span class="text-orange">Free</span> assistance with any print company.</li>
                  <li><span class="text-orange">Free</span> file designs that allow resize with no distortion (suitable for professional print).</li>
                  <li>3 minute simple online order form!</li>
                  <li>We start your designs today!</li>
                  <li>100% satisfaction Guaranteed</li>
                  <li><span class="text-orange">Free</span> After-sales support</li>
                </ul>
                <p><span class="text-orange">
                  <?=GUARANTEE_DAY; ?>
                  -Day - 100% No-Risk Money Back Guarantee.</span> No fees, no questions. Immediate refund. Don't be fooled...we refund at any stage of the design process. Our competitors do not! <br />
                  (By far the best guarantee in the industry)</p>
                
                <div align="center">
                	
                  <div class="text-sale">
                    
                    <label>
                      <?=CURRENCY . $silver_price; ?>
                    </label>
                  </div>
                  
                  <input type="image" onclick="submitPackage('<?=Silver_Logo_Package;?>','<?=$silver_price;?>');" src="<?=base_url(); ?>images/silver-order.gif" name="silver" id="silver" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('silver','','<?=base_url(); ?>images/silver-order-hover.gif',1)" />
                  
                </div>
                <div class="button-extra">
                  <div class="super-silver">
                    <h2><strong>The above logo package <span class="text-orange">plus:</span></strong></h2>
                    <ul>
                      <li>- 3 business card designs</li>
                      <li>- Unlimited redraws</li>
                      <li>- Unlimited revisions</li>
                    </ul>
                    <div align="center">
                    	
                      <div class="text-sale">
                        
                        <label>
                          <?=CURRENCY . $silver_plus_price; ?>
                        </label>
                      </div>
                      
                      <input type="image" onclick="submitPackage('<?=Super_Silver_Logo_Package;?>','<?=$silver_plus_price;?>');" src="<?=base_url(); ?>images/silver-order.gif" name="super-silver" id="super-silver" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-silver','','<?=base_url(); ?>images/silver-order-hover.gif',1)" />
                      
                    </div>
                  </div>
                  <div class="silver-plus">
                    <h2><strong>The above logo package <span class="text-orange">plus:</span></strong></h2>
                    <ul>
                      <li>- 3 business card designs</li>
                      <li>- 3 letterhead designs</li>
                      <li>- 3 complement slip designs</li>
                      <li>- Unlimited redraws</li>
                      <li>- Unlimited revisions</li>
                    </ul>
                    <div align="center">
                    	<!--<div class="text-price">
                        <label class="newpricena">Price:</label>
                        <label><?=CURRENCY . $super_silver_plus_price_regular; ?></label>
                      </div>-->
                      <div class="text-sale">
                        <!--<label class="newsale">SALE:</label>-->
                        <label>
                          <?=CURRENCY . $super_silver_plus_price; ?>
                        </label>
                      </div>
                      <!--<div class="text-save">
                        <label class="newsave">(Save:</label>
                        <label><?=CURRENCY . ($super_silver_plus_price_regular-$super_silver_plus_price); ?>)</label>
                      </div>-->
                      <input type="image" onclick="submitPackage('<?=Super_Silver_Plus_Logo_Package;?>','<?=$super_silver_plus_price;?>');" src="<?=base_url(); ?>images/silver-order.gif" name="super-silver-plus" id="super-silver-plus" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-silver-plus','','<?=base_url(); ?>images/silver-order-hover.gif',1)" />
                      <!--<a href="javascript:void(0);" onclick="submitPackage('<?php //echo Super_Silver_Plus_Logo_Package;?>','<?php //echo Super_Silver_Plus_Logo_Package_Price;?>');"><img  src="<?php //echo base_url(); ?>images/silver-order.gif" name="super-silver-plus" id="super-silver-plus" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-silver-plus','','<?php //echo base_url(); ?>images/silver-order-hover.gif',1)" /></a>--> 
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div><img src="<?=base_url(); ?>images/bxfooter.gif" align="#" title="#" /></div>
            </div>
            <div class="elite" align="center">
              <div><img src="<?=base_url(); ?>images/elitetitle-<?=COUNTRY; ?>.jpg" align="Elite-package" title="Elite-package" /></div>
              <div class="elite-text" align="left"> <img src="<?=base_url(); ?>images/elite-package.jpg" alt="Elite Packages" title="Elite Packages" />
                <p>The Elite Logo Design Package truly provides a comprehensive logo design service. This package has been specifically created from client feedback. Everything an organization needs for complete peace of mind on design variations.</p>
                <ul>
                  <li><span class="text-orange">Free</span> Complete logo design research.</li>
                  <li><span class="text-orange text-18">6 designers</span> to share and contribute ideas. </li>
                  <li><span class="text-orange">Dedicated</span> project manager!.</li>
                  <li><span class="text-orange"><span class="text-18">12 custom-made</span> logo samples.</span></li>
                  <li>Professional design - No templates - No clipart used.</li>
                  <li>Each logo sample is 100% original, unique and different.</li>
                  <li><span class="text-orange">Unlimited </span>redraws</li>
                  <li><span class="text-orange">Unlimited </span>concepts</li>
                  <li><span class="text-orange">Unlimited </span>revisions</li>
                  <li>1- 3 business days turn around on all our logo designs</li>
                  <li><span class="text-orange">Free</span> Final logo files sent via email - includes formats for all print and web use.</li>
                  <li><span class="text-orange">Free</span> of charge for any additional files you request</li>
                  <li><span class="text-orange">Free</span> complete ownership to all the logo design samples we design for you.</li>
                  <li><span class="text-orange">Free</span> assistance with any print company.</li>
                  <li><span class="text-orange">Free</span> file designs that allow resize with no distortion (suitable for professional print).</li>
                  <li>3 minute simple online order form!</li>
                  <li>We get your designs started today!</li>
                  <li>100% satisfaction Guaranteed</li>
                  <li><span class="text-orange">Free</span> After-sales support </li>
                </ul>
                <p><strong><span class="text-orange">
                  <?=GUARANTEE_DAY; ?>
                  -Day - 100% No-Risk Money Back Guarantee.</span> No fees, no questions. Immediate refund. Don't be fooled...we refund at any stage of the design process. Our competitors do not!<br />
                  (By far the best guarantee in the industry)</strong></p>
                
                <div align="center">
                	
                  <div class="text-sale">
                    
                    <label>
                      <?=CURRENCY . $elite_price; ?>
                    </label>
                  </div>
                  
                  <input type="image" onclick="submitPackage('<?=Elite_Logo_Package;?>','<?= $elite_price;?>');" src="<?=base_url(); ?>images/elite-order.gif" name="elite" id="elite" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('elite','','<?=base_url(); ?>images/elite-order-hover.gif',1)" />
                  <!--<a href="javascript:void(0);" onclick="submitPackage('<?php //echo Elite_Logo_Package;?>','<?php //echo Elite_Logo_Package_Price;?>');"><img  src="<?php //echo base_url(); ?>images/elite-order.gif" name="elite" id="elite" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('elite','','<?php //echo base_url(); ?>images/elite-order-hover.gif',1)" /></a>--> 
                </div>
                <div class="button-extra">
                  <div class="super-silver">
                    <h2><strong>The above logo package <span class="text-orange">plus:</span></strong></h2>
                    <ul>
                      <li>- 3 business card designs</li>
                      <li>- Unlimited redraws</li>
                      <li>- Unlimited revisions</li>
                    </ul>
                    <div align="center">
                    <!--<div class="text-price">
                        <label class="newpricena">Price:</label>
                        <label><?= CURRENCY . $elite_plus_price_regular; ?></label>
                      </div>-->
                      <div class="text-sale">
                        <!--<label class="newsale">SALE:</label>-->
                        <label>
                          <?= CURRENCY . $elite_plus_price; ?>
                        </label>
                      </div>
                      <!--<div class="text-save">
                        <label class="newsave">(Save:</label>
                        <label><?= CURRENCY . ($elite_plus_price_regular-$elite_plus_price); ?>)</label>
                      </div>-->
                      <input type="image" onclick="submitPackage('<?= Super_Elite_Logo_Package;?>','<?= $elite_plus_price;?>');" src="<?= base_url(); ?>images/elite-order.gif" name="super-elite" id="super-elite" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-elite','','<?= base_url(); ?>images/elite-order-hover.gif',1)" />
                      <!--<a href="javascript:void(0);" onclick="submitPackage('<?php //echo Super_Elite_Logo_Package;?>','<?php //echo Super_Elite_Logo_Package_Price;?>');"><img  src="<?php //echo base_url(); ?>images/elite-order.gif" name="super-elite" id="super-elite" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-elite','','<?php //echo base_url(); ?>images/elite-order-hover.gif',1)" /></a>--> 
                    </div>
                  </div>
                  <div class="silver-plus">
                    <h2><strong>The above logo package <span class="text-orange">plus:</span></strong></h2>
                    <ul>
                      <li>- 3 business card designs</li>
                      <li>- 3 letterhead designs</li>
                      <li>- 3 complement slip designs</li>
                      <li>- Unlimited redraws</li>
                      <li>- Unlimited revisions</li>
                    </ul>
                    <div align="center">
                    <!--<div class="text-price">
                        <label class="newpricena">Price:</label>
                        <label><?= CURRENCY . $super_elite_plus_price_regular; ?></label>
                      </div>-->
                      <div class="text-sale">
                        <!--<label class="newsale">SALE:</label>-->
                        <label>
                          <?= CURRENCY . $super_elite_plus_price; ?>
                        </label>
                      </div>
                      <!--<div class="text-save">
                        <label class="newsave">(Save:</label>
                        <label><?= CURRENCY . ($super_elite_plus_price_regular-$super_elite_plus_price); ?>)</label>
                      </div>-->
                      <input type="image" onclick="submitPackage('<?= Super_Elite_Plus_Logo_Package;?>','<?= $super_elite_plus_price;?>');" src="<?= base_url(); ?>images/elite-order.gif" name="super-elite-plus" id="super-elite-plus" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-elite-plus','','<?= base_url(); ?>images/elite-order-hover.gif',1)" />
                      <!--<a href="javascript:void(0);" onclick="submitPackage('<?php //echo Super_Elite_Plus_Logo_Package;?>','<?php //echo Super_Elite_Plus_Logo_Package_Price;?>');"><img  src="<?php //echo base_url(); ?>images/elite-order.gif" name="super-elite-plus" id="super-elite-plus" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('super-elite-plus','','<?php //echo base_url(); ?>images/elite-order-hover.gif',1)" /></a>--> 
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div><img src="<?= base_url(); ?>images/bxfooter.gif" align="#" title="#" /></div>
            </div>
            <!--<div class="offer-package">
              <div class="purple-img"> <img src="<?= base_url(); ?>images/purple-banner-<?= COUNTRY; ?>.png" /> <span class="text-red text-16"><strong>
                <?php echo "<div class=\"time-red\" >".$today."</div>";	?>
                </strong></span></div>
            </div>-->
          </div>
        </div>
        <div class="side-bar">
          <?php 
include_once("includes/logo-design/sidebar-1.php");
?>
          <div class="security">
            <h2 align="center"><img src="<?= base_url()?>images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
            <h2 align="center"><img src="<?= base_url()?>images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
            <h2 align="center"><img src="<?= base_url()?>images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
            <h2 align="center"><img src="<?= base_url()?>images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
          </div>
        </div>
        <div class="clear"></div>
        <?php //include_once("includes/logo-design/seal-top.php"); ?>
        <br />
        <?php include("includes/logo-design/payment_seals.php"); ?>
        <br />
        <?php include("includes/logo-design/partners.php"); ?>
        <br />
        <?php include("includes/logo-design/phone-banner-bottom.php"); ?>
        <br />
      </div>
    </div>
    <input type="hidden" name="package" id="package" value=""/>
    <input type="hidden" name="price" id="price" value=""/>
  </form>
  <div class="footer-container">
    <?php include_once("includes/logo-design/footer.php"); ?>
  </div>
</div>
</body>
</html>