<?php
//foreach ($logo_package_rows as $r){
//   echo  $r->package_type;
//   echo "<br />";
//}
foreach ($web_package_rows as $r){
    if(COUNTRY == 'UK'){
   $web_price[] =   $r->gbp;
   }
   if(COUNTRY == 'USA'){
   $web_price[] =   $r->usd;
   }
   if(COUNTRY == 'Canada'){
   $web_price[] =   $r->cad;
   }
}
$budget_web_price = $web_price[0];
$gold_web_price   = $web_price[1];
$elite_web_price  = $web_price[2];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?=base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>css/packages.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?=base_url(); ?>js/jquery.js"></script>
<script language="javascript" type="text/javascript">
function submitPackage(Pack,Price){
    document.getElementById('package').value=Pack;
    document.getElementById('price').value=Price;
    document.forms.packageFrm.submit();
}

$(document).ready(function(){
    $('.see-more').bind('click', function(){  
    $('#more-package').slideToggle(1000,function(){        
     //$('.see-more').css('background','red');    
     $('.bg-left').toggleClass("toggleactive");
     $('.bg-right').toggleClass("toggleactive");      
    });
	
     if($('.bg-right').hasClass("toggleactive") == true){
                $('.see-more .more-packages').html("<span class='handwriting'>More Packages</span> &gt;  More Savings!  &gt;  <span style='font-size:12px'>Click Here</span>");
            }
            else {
                $('.see-more .more-packages').html("<span class='handwriting'>Hide More Packages</span>");  
            } 
        
    });
	
	//$('.package-list').bind({
//	click: function(){
//	//alert('success');
//	$(this).css('border','3px solid green')											  
//	},
//	blur: function(){
//		$(this).css('border','3px solid #eee')
//	}
//	});
	
	$('.package-list').click(function(){
		$('.package-list').removeClass("green-bg");
		$(this).addClass("green-bg");
	});
	
	//$//('.package-list').bind('click', function(){
//		$(this).css('border','3px solid green');		
//	});
//	$('.package-list').bind('blur', function(){
//		$(this).css('border','1px solid green');		
//		
//	});
	
});
//<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=1002,height=auto,left = 490,top = 312');");
}
// End -->
</script>

<?php include_once("includes/logo-design/analytics.php"); ?>
<style type="text/css">
.main{
    border: 1px solid #CDCDCD;    
    -webkit-border-radius: 5px;   
    -moz-border-radius: 5px;   
    border-radius: 5px;    
    
}
.arrow_show ul li {
	padding: 6px 10px 0px 21px;
	margin-bottom:12px;
	background: url(<?=base_url();
?>images/tick-bullet-yellow.png) no-repeat;
}
p.promo_banner {
	background-color: #C9CC38;
	border-radius: 30px;
	height: 55px;
	margin: 20px 0;
	overflow: hidden;
	width: 984px;
}
.promo_banner .promo_heading {
	color: white;
	float: left;
	font-family: 'Open Sans' !important;
	font-style:  normal!important;
	font-weight: 400!important;
	font-size: 26px;
	margin: 17px 20px;
}
.promo_banner .promo_subheading {
	color: white;
	float: right;
	font-size: 14px;
	margin: 22px 20px;
}
</style>
<!--[if lt IE 8]>
<script src="<?=base_url()?>js/IE8.js"></script>
<![endif]-->
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="icon" />
<link type="image/x-icon" href="<?= base_url().'favicon.ico?rand='.rand(); ?>" rel="shortcut icon" />
</head>
<body style="background: #fff;">
<div class="wrapper" style="background: #fff;">
  <div class="header-container">
    <?php include_once("includes/logo-design/header.php"); ?>
  </div>
  <div class="top-container">
    <div class="top" style="background: #fff;">
      <?php include_once("includes/logo-design/menu-banner2.php"); ?>      
    </div>
  </div>
  <form method="post" name="packageFrm" id="packageFrm" action="<?=site_url('logodesign/ordermid');?>">
    <div class="main-container">
      <div class="main col1-layout" style="background: none;">
        <div class="col-main">
          <div class="packages-text" style="font-family: helvetica, arial, sans-serif;"> <br />
            <h1 align="center" style="font-size:44px; letter-spacing:-1px; color:#000; font-family: helvetica, arial, sans-serif;">&nbsp; Honest prices. Exceptional Features.</h1>
            <br />
            <h2 align="center" style="font-size:24px; color:#AA9C84; font-family:Helvetica, Arial, sans-serif;	">#1
              <?= ISM; ?>
              specialised design firm for start-ups and small businesses.</h2>
            <h1>&nbsp;</h1>
            <h1 style="font-size:15.5px;"><strong><span style="font-family:&quot;Helvetica&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;color:#0070C0;mso-font-kerning:18.0pt;mso-fareast-language:
EN-GB">Every package includes our <u>Unique</u>, <i style='mso-bidi-font-style:
normal'>Devoted Support &trade;</i>:<span style='mso-spacerun:yes'></span></span></strong></h1>
            <div class="arrow_show" style="font-family:Helvetica, Arial, sans-serif; margin-left: 3px;">
              <table border="0" width="982">
                <tr>
                  <td width="982px"><table border="0" class="packages-block">
                      <tbody>
                        <tr style="padding: 0 0 0 15px;">
                          <td><ul>
                              <li>LogoTalk&trade; <strong>Talk to <em>your</em> designer</strong><br />anytime you want! </li>
                              <li>(VIP - <strong>No time restrictions on calls!</strong>)</li>
                              <li><strong>Award-winning <?= ISM; ?> designers!</strong><br />All in-house! Work with the best!</li>
                              <li><strong><?= GUARANTEE_DAY; ?> - Day</strong>, Money Back Guarantee.<br />By far the biggest in the industry!</li>
                              <li>We have the <strong>most <?= ISM; ?> phone staff</strong><br />in the logo sector!</li>
                              <li><strong><em>Best Price Guarantee!</em></strong>- We&rsquo;ll beat<br />
                              any like-to-like service by 10%</li>
                              <li><strong>LogoVote&trade;</strong> - Use our patented system <br />to let your friends vote on their favourite <br />logo sample! Get Feedback</li>
                             
                            </ul></td>
                        </tr>
                      </tbody>
                    </table>
                    <table  border="0" class="packages-block">
                      <tr>
                        <td><ul>
                            <li><strong>24/7 <?= ISM; ?> phone</strong>/live-chat/email support!</li>
                            <li>Final files sent via email (<strong>full HD files</strong>)!</li>
                            <li><strong>100% original, custom-made</strong> logos.<br />No templates! No clipart!</li>
                            <li>All files are <strong>print/web ready</strong>. The files<br />allow you to resize without distortion!</li>
                            <li>Logo concepts are 100% bespoke,<br /><strong>unique and different</strong> to give you a<br />variety of ideas!</li>
                            <li>Revision <strong><em>turnarounds</em> within 24 hours!</strong><br />Warning: Most firms take 4 weeks to<br />complete a project!</li>
                          </ul></td>
                      </tr>
                    </table>
                    <table  border="0" class="packages-block" style="margin-right: 0;">
                      <tr>
                        <td><ul>
                            <li>We undertake <strong>free logo <em>research</em></strong><br /> for you!</li>
                            <li><strong>Free assistance</strong> with any print firm!</li>
                            <li><strong><em>Lifetime support</em></strong> via phone/live-chat/ email!</li>
                            <li><strong>Free complete ownership</strong> of all samples!</li>
                            <li><strong>We start your designs today!</strong><br />(Same day you place an order)!</li>
                            <li>Dedicated <strong>project manager!</strong><br />A real designer (not a sales/admin staff).</li>
                            <li>We use <strong><em>Pantone colours!</em></strong> The standard<br />for most printers and <?php if(COUNTRY == 'UK'){echo 'FTSE';} else {echo "Fortune"; }?> 500 firms!</li>
                          </ul></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </div>
          </div>
          <p><strong><span style="font-size:13.0pt;font-family:Helvetica,sans-serif">We tick <i>more</i> than &ldquo;all the boxes!&rdquo;</span></strong></p>
          <p class="promo_banner"> <span class="promo_heading">Summer Sale &ndash; Up to 70% off Prices</span> 
          <span class="promo_subheading">Valid until <?= $today; ?> 11.59pm (EST)</span> </p>
          <p><strong><span style="font-size:13.0pt;font-family:
&quot;Helvetica&quot;,&quot;sans-serif&quot;">Buy More, Save More&hellip;</span></strong></p>
          <div class="packages" style="margin-left: 5px;">
          <div  style="display:inline-block; position:relative; overflow: hidden;">
          
   <?php
   $div_count = 1;
   //$count = count($logo_package_rows);
  //var_dump($logo_package_rows);
    for ($i=0;$i<9;$i++){        
        $logo_package  = $logo_package_rows[$i]->package_type." Logo Package"; 
        if($logo_package_rows[$i]->package_type == "Flash Logo + More"){
            $package_display_name = $logo_package_rows[$i]->package_type."! ";
        }
    elseif($logo_package_rows[$i]->package_type == "Be the Best" || $logo_package_rows[$i]->package_type == "Start Getting Serious" || $logo_package_rows[$i]->package_type == "Make It Happen"){
        $package_display_name = $logo_package_rows[$i]->package_type."!&trade; ";
    }
    else{
         $package_display_name = $logo_package_rows[$i]->package_type." ";
    } 
               
     if(COUNTRY == "USA"){
            $regular_price = $logo_package_rows[$i]->usd_reg;
            $new_price     = $logo_package_rows[$i]->usd; 
            $weblink       = base_url("")."web-site-design/webdesigner-limited-sale/"; 
        }
        if(COUNTRY == "UK"){
            $regular_price = $logo_package_rows[$i]->gbp_reg;
            $new_price     = $logo_package_rows[$i]->gbp; 
            $weblink        = site_url("web-site-design/webdesigner-limited-sale/index"); 
        }
        if(COUNTRY == "Canada"){
            $regular_price = $logo_package_rows[$i]->cad_reg;
            $new_price     = $logo_package_rows[$i]->cad;  
        }
        
        ?>
        
   <div class="package-list <?php if($logo_package_rows[$i]->package_type == "Be the Best"){echo "green-bg";}  ?>" <?php if($div_count % 3 == 0){
    echo "style='margin-right:0;'"; } ?>> 
       
   <?php 
   if($logo_package_rows[$i]->package_type == "Premium"){
    echo "<span class = 'most-popular'></span>";
   }
   if($logo_package_rows[$i]->package_type == "Be the Best"){
    echo "<span class = 'best-value'></span>";
   }   
    echo '<span class="heading">
        <h1 ';  
        if($logo_package_rows[$i]->package_type == "Be the Best"){echo "style='text-align:left;'";}
        if($logo_package_rows[$i]->package_type == "Start Getting Serious"){echo "style='font-size:19px;'";}         
        echo '>'.        
        $package_display_name;       
        
        if($logo_package_rows[$i]->package_type != "Basic"){
            echo '<span class="line">';
        }
          echo CURRENCY.$regular_price;
        
        if($logo_package_rows[$i]->package_type != "Basic"){
            echo '</span>';
        }
        
        $discription = $logo_package_rows[$i]->package_discription;
        if($logo_package_rows[$i]->package_type == "Be the Best"){
            echo '<br />
            <span style="font: normal 12px/16px arial; text-align: center;">(No Compromises)</span>';
        }        
        echo '<br />
            <span class="'. $logo_package_rows[$i]->package_star. '"></span> 
        </h1>
        </span>'. $discription; 
               
         if($logo_package_rows[$i]->package_type == "Flash Logo + More" || $logo_package_rows[$i]->package_type == "Start Getting Serious" || $logo_package_rows[$i]->package_type == "Make It Happen"){
            if($logo_package_rows[$i]->package_type == "Flash Logo + More"){
                $plus = '<h4>Plus:</h4>';
            }
            if($logo_package_rows[$i]->package_type == "Start Getting Serious"){
                $plus = '<h4>Plus: <span>Following Prints:</span></h4>';
            }
            if($logo_package_rows[$i]->package_type == "Make It Happen"){
                $plus = '<h4>Plus:<a href="'.$weblink.'" target="_blank"><span> <span style="text-decoration: underline;"><strong>Budget Web Design</strong> Package</span><br />
                <span style="display: inline-block; margin-left: 35px;">(<strong>'.CURRENCY.$budget_web_price.' Value</strong> Ordered Separately)</span> </span></a></h4>';
            }            
         
         echo $plus;
         echo  $logo_package_rows[$i]->package_discription2;
         }
              
         echo "<br /><br />"; ?> 
        <input type="button" class="button" onclick="submitPackage('<?= $logo_package; ?>','<?= $new_price; ?>')" />
        <?php
        if($logo_package_rows[$i]->package_type != "Basic"){
        echo '<br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE '.$logo_package_rows[$i]->save_per.'%</span>
                <div class="price"><span style="font-size: 27px;">'.CURRENCY.$new_price.'</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>'.CURRENCY.($regular_price-$new_price).' Save</strong> </div>';
         }
    echo $logo_package_rows[$i]->bonus_offer; ?>      
    </div>
    <?php  
    if($div_count % 6 == 0){echo "<div style='clear:left; display:block; height:105px; width:1002px;'></div><br />";}    
    $div_count++;
   }
   
            
   ?>         
  <div style="position: absolute; left: 0; top: 959px; width: 644px;">
                <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;"><span class="text-red">Save Much More</span> by ordering your<br /> logo plus other essential branding today!...   </p>
                <!--<h2><i>Aim</i> for more:</h2>
            <h3> &quot;You (and your logo) can go much further...&quot;</h3>-->
               <p style="color:#aa9c84; font:normal 20px/24px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;">You save up to <strong>60% more</strong> by ordering a logo package <br /><em>combined</em> with other branding, rather than separately with time!<br /><br />
Why wait and pay more?...</p>

                <p><strong><em>Aim</em> for more:<br /><span class="text-blue">&quot;You (and your logo) can go much further...&quot;</span></strong></p>            
</div>
<div class="free-brand">
                <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;">Demand <span class="text-red">exceptional growth</span> and <em>the very biggest</em> savings!... </p><br />
                <h2><i>Free</i> your brand: </h2>
            <h3>&quot;Let yourself go the ultimate distance!...&quot; </h3>
               
              
            </div>          
            
            
  <div class="see-more"> <!--<span class="bg-left"></span>--><span class="bg-right"></span>
            <span class="more-packages"><span class="handwriting">More Packages</span> &gt;  More Savings!  &gt;  <span style="font-size:12px">Click Here</span></span> </div>          

<div id="more-package" style="display: none; margin-bottom: 20px; overflow:hidden">
 <?php
   $div_count = 1;
   //$count = count($logo_package_rows);
  //var_dump($logo_package_rows);
    for ($i=9;$i<12;$i++){        
        $logo_package           = $logo_package_rows[$i]->package_type." Logo Package";
        $package_display_name   = $logo_package_rows[$i]->package_type."!&trade; ";
               
     if(COUNTRY == "USA"){
            $regular_price = $logo_package_rows[$i]->usd_reg;
            $new_price     = $logo_package_rows[$i]->usd; 
             
        }
        if(COUNTRY == "UK"){
            $regular_price = $logo_package_rows[$i]->gbp_reg;
            $new_price     = $logo_package_rows[$i]->gbp;  
        }
        if(COUNTRY == "Canada"){
            $regular_price = $logo_package_rows[$i]->cad_reg;
            $new_price     = $logo_package_rows[$i]->cad;  
        }?>
        
   <div class="package-list " <?php if($div_count % 3 == 0){
    echo "style='margin-right:0;'"; } ?>> 
   <?php
    echo '<span class="heading">
        <h1 ';
        if($logo_package_rows[$i]->package_type == "It&rsquo;s a Web Culture"){echo "style='font-size:20px;'";}         
        echo '>'.
        $package_display_name."<span class='line'>".CURRENCY.$regular_price."</span>";        
        $discription = $logo_package_rows[$i]->package_discription;
        if($logo_package_rows[$i]->package_type == "Go For Glory"){
            echo '<br />
            <span style="font: normal 12px/16px arial; text-align: center;">(No Compromises for your Brand!)</span>';
        }        
        echo '<br />
            <span class="'. $logo_package_rows[$i]->package_star. '"></span> 
        </h1>
        </span>'. $discription;               
         if($logo_package_rows[$i]->package_type == "It&rsquo;s a Web Culture" || $logo_package_rows[$i]->package_type == "Stand Out" || $logo_package_rows[$i]->package_type == "Go For Glory"){
            
           
           if($logo_package_rows[$i]->package_type == "It&rsquo;s a Web Culture"){
                $plus = '<h4>Plus:<a href="'.$weblink.'" target="_blank"><span> <span style="text-decoration: underline;"><strong>Gold Web Design</strong> Package</span><br />
                <span style="display: inline-block; margin-left: 35px;">(<strong>'.CURRENCY.$gold_web_price.' Value</strong> Ordered Separately)</span> </span></a></h4>';
            }
           
            if($logo_package_rows[$i]->package_type == "Stand Out" || $logo_package_rows[$i]->package_type == "Go For Glory"){
                $plus = '<h4>Plus:<a href="'.$weblink.'" target="_blank"><span> <span style="text-decoration: underline;"><strong>Elite Web Design</strong> Package</span><br />
                <span style="display: inline-block; margin-left: 35px;">(<strong>'.CURRENCY.$elite_web_price.' Value</strong> Ordered Separately)</span> </span></a></h4>';
            }            
         
         echo $plus;
         echo  $logo_package_rows[$i]->package_discription2;
         }
              
         echo "<br /><br />"; ?> 
        <input type="button" class="button" onclick="submitPackage('<?= $logo_package; ?>','<?= $new_price; ?>')" />
        <?php
        if($logo_package_rows[$i]->package_type != "Basic"){
        echo '<br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE '.$logo_package_rows[$i]->save_per.'%</span>
                <div class="price"><span style="font-size: 27px;">'.CURRENCY.$new_price.'</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>'.CURRENCY.($regular_price-$new_price).' Save</strong> </div>';
         }
    echo $logo_package_rows[$i]->bonus_offer; ?>      
    </div>
    <?php 
    $div_count++;
   }
   
            
   ?> 
</div>

            
          </div>
            
            <div class="text">
            <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif">&quot;OK, we are trying to make profit too...<br />But <span class="text-green"> do <span style="text-decoration:underline">not</span> just think 
  saving your funds</span><br /> is good business...
  <br /><br />
  <span class="text-green">Focus on the return</span> for you and <em>your business</em>...<br />Kick-off professionally today!&quot;         
  </p>
  <p style="color:#000; font:bold 13px/18px Helvetica, Arial, sans-serif">Need Help? We have <em>real people</em> on the phone 24/7:  Call Now:  <?= PHONE_NO; ?>. </p>
 
            </div>
          </div>
        </div>
        <!--<div class="side-bar">
<?php 
//include_once("includes/logo-design/sidebar-1.php");
?>
<div class="security">
<h2 align="center"><img src="<?= base_url()?>images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
<h2 align="center"><img src="<?= base_url()?>images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
<h2 align="center"><img src="<?= base_url()?>images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
<h2 align="center"><img src="<?= base_url()?>images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
</div>
</div>-->
        <div class="clear"></div>
        <?php include_once("includes/logo-design/seal-top.php"); ?>
         </div>
    </div>
    <input type="hidden" name="package" id="package" value=""/>
    <input type="hidden" name="price" id="price" value=""/>
  </form>
  <div class="footer-container">
    <?php include_once("includes/logo-design/footer2.php"); ?>
  </div>
</div> 
</body>
</html>