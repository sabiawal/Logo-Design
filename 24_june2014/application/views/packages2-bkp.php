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
              <?= COUNTRY; ?>
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
                              <li><strong>Award-winning UK designers!</strong><br />All in-house! Work with the best!</li>
                              <li><strong>180 - Day</strong>, Money Back Guarantee.<br />By far the biggest in the industry!</li>
                              <li>We have the <strong>most UK phone staff</strong><br />in the logo sector!</li>
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
                            <li><strong>24/7 UK phone</strong>/live-chat/email support!</li>
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
                            <li>We undertake <strong>free logo <em>research</em></strong> for you!</li>
                            <li><strong>Free assistance</strong> with any print firm!</li>
                            <li><strong><em>Lifetime support</em></strong> via phone/live-chat/ email!</li>
                            <li><strong>Free complete ownership</strong> of all samples!</li>
                            <li><strong>We start your designs today!</strong><br />(Same day you place an order)!</li>
                            <li>Dedicated <strong>project manager!</strong><br />A real designer (not a sales/admin staff).</li>
                            <li>We use <strong><em>Pantone colours!</em></strong> The standard<br />for most printers and FTSE 500 firms!</li>
                          </ul></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
            </div>
          </div>
          <p><strong><span style="font-size:13.0pt;font-family:Helvetica,sans-serif">We tick <i>more</i> than &ldquo;all the boxes!&rdquo;</span></strong></p>
          <p class="promo_banner"> <span class="promo_heading">Spring Sale &ndash; Up to 70% off Prices</span> <span class="promo_subheading">Valid until
            <?php            
    $today=date("D M j Y");
    echo $today;
    ?>
            11.59pm (GMT)</span> </p>
          <p><strong><span style="font-size:13.0pt;font-family:
&quot;Helvetica&quot;,&quot;sans-serif&quot;">Buy More, Save More&hellip;</span></strong></p>
          <div class="packages" style="margin-left: 5px;">
          <div  style="display:inline-block">
            <div class="package-list"> <span class="heading">
              <h1>Basic &pound;25 <br />
                <span class="basic"></span> </h1>
              </span>
              <ul class="package-detail s-bullet">
                <li><strong>1</strong> Original Logo Concept</li>
                <li><strong>1 Professional Designer</strong> working for you</li>
                <li><strong>No Revision</strong> Rounds</li>
                <li><strong>5 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
            </div>
            <div class="package-list"> <span class="heading">
              <h1>Economy <span class="line">&pound;49.99</span> <br />
                <span class="economy"></span> </h1>
              </span>
              <ul class="package-detail s-bullet">
                <li><strong>2</strong> Original Logo Concepts</li>
                <li><strong>1 Professional Designer</strong> working for you</li>
                <li><strong>2 Revision</strong> Rounds</li>
                <li><strong>4 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 10%</span>
                <div class="price"><span style="font-size: 27px;">&pound;44.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;5 Save</strong> </div>
            </div>
            <div class="package-list" style="margin-right: 0;"> <span class="heading">
              <h1>Deluxe <span class="line">&pound;99.99</span> <br />
                <span class="deluxe"></span> </h1>
              </span>
              <ul class="package-detail g-bullet">
                <li><strong>3</strong> Original Logo Concepts</li>
                <li><strong>Hand Illustrated</strong> Logos - More Advanced</li>
                <li><strong>3 Professional Designers</strong> working for you</li>
                <li><strong>Unlimited Revision</strong> Rounds</li>
                <li><strong>3 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 30%</span>
                <div class="price"><span style="font-size: 27px;">&pound;69.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;30 Save</strong> </div>
            </div>
          </div>
          <div  style="display:inline-block; position: relative;">
            <div class="package-list"> <span class="most-popular"></span> <span class="heading">
              <h1>Premium <span class="line">&pound;149.99</span> <br />
                <span class="premium"></span> </h1>
              </span>
              <ul class="package-detail g-bullet">
                <li><strong>6</strong> Original Logo Concepts</li>
                <li><strong>Hand Illustrated</strong> Logos - More Advanced</li>
                <li><strong>6 Professional Designers</strong> working for you</li>
                <li><strong>Unlimited Revision</strong> Rounds</li>
                <li><strong>Business Card Design</strong>
                  <ul>
                    <li>2 Concepts</li>
                  </ul>
                </li>
                <li><strong>3 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 50%</span>
                <div class="price"><span style="font-size: 27px;">&pound;74.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;75 Save</strong> </div>
                
            </div>
            <div class="package-list"> <span class="heading">
              <h1>Ultimate <span class="line">&pound;199.99</span> <br />
                <span class="ultimate"></span> </h1>
              </span>
              <ul class="package-detail g-bullet">
                <li><strong>6</strong> Original Logo Concepts</li>
                <li><strong>Hand Illustrated</strong> Logos - More Advanced</li>
                <li><strong>6 Professional Designers</strong> working for you</li>
                <li><strong>Unlimited Revision</strong> Rounds</li>
                <li><strong>Full Stationary Design</strong>
                  <ul>
                    <li>3 Business Card Concepts</li>
                    <li>3 Letterhead Card Concepts</li>
                    <li>3 Compliment Slip Concepts</li>
                  </ul>
                </li>
                <li><strong>3 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 50%</span>
                <div class="price"><span style="font-size: 27px;">&pound;99.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;100 Save</strong> </div>
            </div>
            <div class="package-list green-bg" style="margin-right: 0;"> <span class="best-value"></span> <span class="heading">
              <h1 style="text-align: left;">Be the Best!&trade; <span class="line">&pound;429.99</span> <br />
                <span style="font: normal 12px/16px arial; text-align: center;">(No Compromises)</span><br />
                <span class="bethebest"></span> </h1>
              </span>
              <ul class="package-detail g-bullet">
                <li><strong>Unlimited</strong> Original Logo Concepts (12 initially)</li>
                <li><strong>Hand Illustrated</strong> Logos - More Advanced</li>
                <li><strong>12 Professional Designers</strong> working for you</li>
                <li><strong>Unlimited Redraws</strong></li>
                <li><strong>Unlimited Revision</strong> Rounds</li>
                <li><strong>Full Stationary Design</strong>
                  <ul>
                    <li>3 Business Card Concepts</li>
                    <li>3 Letterhead Card Concepts</li>
                    <li>3 Compliment Slip Concepts</li>
                  </ul>
                </li>
                <li><strong>3 Days</strong> Turnaround</li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 70%</span>
                <div class="price"><span style="font-size: 27px;">&pound;129.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;300 Save</strong> </div>
              <br />
              <br />
              <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
              <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
              <span style=" display: inline-block; text-align: left; width: 290px;">
              <ul>
                <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                  In MS Word (Easy to Edit)</li>
              </ul>
              </span> </div>
              <div style="position: absolute; left: 0; top: 524px; width: 644px;">
                <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;"><span class="text-red">Save Much More</span> by ordering your<br /> logo plus other essential branding today!...   </p>
                <!--<h2><i>Aim</i> for more:</h2>
            <h3> &quot;You (and your logo) can go much further...&quot;</h3>-->
               <p style="color:#aa9c84; font:normal 20px/24px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;">You save up to <strong>60% more</strong> by ordering a logo package <br /><em>combined</em> with other branding, rather than separately with time!<br /><br />
Why wait and pay more?...</p>

                <p><strong><em>Aim</em> for more:<br /><span class="text-blue">&quot;You (and your logo) can go much further...&quot;</span></strong></p>
            
            </div>
          </div>
            <br /><br /><br /><br /><br /><br /><br />
            <div  style="display:inline-block; position:relative;">
            <div class="package-list"> 
            <span class="heading">
              <h1>Flash Logo + More! <span class="line">&pound;499.99</span> <br />                
                <span class="bethebest"></span> </h1>
              </span>
              <h4>Includes: </h4>
              <ul class="package-detail g-bullet">
              <li>&quot;<strong><em>Be the Best&trade;</em></strong>&quot; Logo Package</li>
              </ul><br /><br />
              
              <h4>Plus:</h4>
              <ul class="package-detail g-bullet">
                <li><strong>1 Animated Flash Logo</strong> Design Concept!</li>
                <li><strong>E-Mail Signature Design </strong>With Your<br />
                  Logo Presented At The Bottom!</li>
                <li>Unlimited Revision Rounds For Each <br />
                  Design Type</li>
                <li>3 Days Turnaround </li>
                <li>10% Off On All Future Design Works</li>
                <!--<li>5 Days</li>-->
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 70%</span>
                <div class="price"><span style="font-size: 27px;">&pound;149.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;350 Save</strong> </div>
              <br />
              <br />
              <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
              <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
              <span style=" display: inline-block; text-align: left; width: 290px;">
              <ul>
                <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                  In MS Word (Easy to Edit)</li>
                <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                  In MS Word (Easy to Edit)</li>
              </ul>
              </span> </div>
            <div class="package-list"> <span class="heading">
              <h1 style="font-size:19px">Start Getting Serious!&trade; <span class="line">&pound;569.99</span> <br />                
                <span class="bethebest"></span> </h1>
              </span>
              <h4><span style="font: normal 12px/16px arial;">Really Start to Impress!</span><br /></h4>
              <h4>Includes:</h4>
              <ul class="package-detail g-bullet">
                <li>&quot;<strong><em>Be The Best&trade;</em></strong>&quot; Package</li>
                <li>&quot;<strong>Flash Logo + More </strong>&quot;Package </li>
              </ul>
              <br />
              <br />
              <h4>Plus: <span>Following Prints:</span></h4>
              <ul class="package-detail g-bullet">
                <li><strong>250 Business Cards</strong></li>
                <li><strong>250 Letterheads </strong></li>
                <li><strong>250 Compliment Slips </strong></li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 60%</span>
                <div class="price"><span style="font-size: 27px;">&pound;229.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;340 Save</strong> </div>
              <br />
              <br />
              <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
              <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
              <span style=" display: inline-block; text-align: left; width: 290px;">
              <ul>
                <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                  In MS Word (Easy to Edit)</li>
                <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                  In MS Word (Easy to Edit)</li>
                <li class="new"><span class="text-red">Free </span><strong> Fax Template </strong><br />
                  In MS Word (Easy to Edit)</li>
              </ul>
              </span> </div>
            <div class="package-list" style="margin-right: 0;"> <span class="heading">
              <h1>Make It Happen!&trade; <span class="line">&pound;849.99</span> <br />
                <span class="bethebest"></span> </h1>
              </span>
              <h4><span style="font: normal 12px/16px arial;"><strong>Save More</strong> by Ordering Your Logo<br />and Website Together! </span><br /></h4>
              <h4>Includes: </h4>
              <ul class="package-detail g-bullet">
                <li>&quot;<strong><em>Be The Best&trade;</em></strong>&quot; Package</li>
                <li>&quot;<strong>Flash Logo + More </strong>&quot;Package </li>
                <li>&quot;<strong>Start Getting Serious&trade;</strong>&quot; Package </li>
              </ul>
              <br />
              <!--<br />   <a href="javascript:popUp('web-site-design/webdesigner-limited-sale/index.php')">
              <h4>Plus:<span> <span style="text-decoration: underline;"><strong>Budget Web Design</strong> Package</span><br />                        <span style="display: inline-block; margin-left: 35px;">(<strong>&pound;199 Value</strong> Ordered Separately)</span> </span></a></h4>     -->
                <h4>Plus:<a href="<?= site_url('web-site-design/webdesigner-limited-sale/index'); ?>" target="_blank"><span> <span style="text-decoration: underline;"><strong>Budget Web Design</strong> Package</span><br />
                <span style="display: inline-block; margin-left: 35px;">(<strong>&pound;199 Value</strong> Ordered Separately)</span> </span></a></h4>              
                
              <ul class="package-detail g-bullet">
                <li><strong>1 Page</strong> Professional Website</li>
                <li><strong>1 Design Concept </strong>by 1 Designer </li>
                <li><strong>Content Management System</strong> (CMS)<br />
                  (Easily Edit Your Website)</li>
                <li><strong>Search Engine Optimisation</strong></li>
                <li><strong>Cross Browser Compatibility</strong></li>
                <li><strong>W3C Certified HTML</strong></li>
                <li><span class="text-red">Free</span> <strong>Flash Animated Head Banner</strong> </li>
                <li><span class="text-red">Free</span> <strong>Hosting For Life</strong></li>
                <li><strong>Many other features</strong> that can be <br />
                  seen on our <span style="text-decoration:underline">web packages page</span></li>
              </ul>
              <br />
              <br />
              <input type="button" class="button" />
              <br />
              <br />
              <br />
              <div class="save"> <span class="savesale"><span class="bg-red">SAVE 60%</span>
                <div class="price"><span style="font-size: 27px;">&pound;349.99</span><sup>SALE</sup></div>
                </span> <br />
                <br />
                <span class="lowprice">Lowest Ever Price</span> <strong>&pound;500 Save</strong> </div>
              <br />
              <br />
              <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
              <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
              <span style=" display: inline-block; text-align: left; width: 290px;">
              <ul>
                <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                  In MS Word (Easy to Edit)</li>
                <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                  In MS Word (Easy to Edit)</li>
                <li class="new"><span class="text-red">Free </span><strong> Fax Template </strong><br />
                  In MS Word (Easy to Edit)</li>
              </ul>
              </span> </div>
              <div style="position: absolute; left: 0; top: 832px; width: 644px;" class="free-brand">
                <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif; margin-bottom:10px; text-align: left; width: 640px;">Demand <span class="text-red">exceptional growth</span> and <em>the very biggest</em> savings!... </p><br />
                <h2><i>Free</i> your brand: </h2>
            <h3>&quot;Let yourself go the ultimate distance!...&quot; </h3>
               
              
            </div>
              </div>
            <br />            
           
            <br />
            <br />
            <!--<div class="see-more"> <span class="bg-left"></span><span class="bg-right"></span> &quot;More Savings?    &gt; <span class="more-packages">See More Packages!</span>&quot; </div>-->
            <div class="see-more"> <!--<span class="bg-left"></span>--><span class="bg-right"></span>
            <span class="more-packages"><span class="handwriting">More Packages</span> &gt;  More Savings!  &gt;  <span style="font-size:12px">Click Here</span></span>   </div>
            <div id="more-package" style="display: none; margin-bottom: 20px; overflow:hidden">
              <div class="package-list"> 
              <span class="heading">
                <h1 style="font-size:20px">It&rsquo;s a Web Culture!&trade; <span class="line">&pound;1149.99</span> <br />
                  
                  <span class="bethebest"></span> </h1>
                  </span>
                <h4><span style="font: normal 12px/16px arial;"><strong>Save Much More</strong> with a Complete<br />
                  Logo Package and 6 page website! </span><br /></h4>
                <h4>Includes: </h4>
                <ul class="package-detail g-bullet">
                  <li>&quot;<strong><em>Be The Best&trade;</em></strong>&quot; Package</li>
                  <li>&quot;<strong>Flash Logo + More</strong>&quot; Package </li>
                  <li>&quot;<strong>Start Getting Serious&trade;</strong>&quot; Package </li>
                </ul>
                <br />
                <br />
                <h4>Plus:<a href="<?= site_url('web-site-design/webdesigner-limited-sale/index'); ?>" target="_blank"><span> <span style="text-decoration: underline;"><strong>Gold Web Design</strong> Package</span><br />
                  <span style="display: inline-block; margin-left: 35px;">(<strong>&pound;349 Value</strong> Ordered Separately)</span> </span></a></h4>
                <ul class="package-detail g-bullet">
                  <li><strong>6 Page</strong> Professional Website</li>
                  <li><strong>2 Design Concepts </strong>by 2 Designer </li>
                  <li><strong>Content Management System</strong> (CMS)<br />
                    (Easily Edit Your Website)</li>
                  <li><strong>Search Engine Optimisation</strong></li>
                  <li><strong>Cross Browser Compatibility</strong></li>
                  <li><strong>W3C Certified HTML</strong></li>
                  <li><span class="text-red">Free</span> <strong>Flash Animated Head Banner</strong> </li>
                  <li><span class="text-red">Free</span> <strong>Hosting For Life</strong></li>
                  <li><strong>Many other features</strong> that can be <br />
                    seen on our <span style="text-decoration:underline">web packages page</span></li>
                </ul>
                <br />
                <br />
                <input type="button" class="button" />
                <br />
                <br />
                <br />
                <div class="save"> <span class="savesale"><span class="bg-red">SAVE 60%</span>
                  <div class="price"><span style="font-size: 27px;">&pound;449.99</span><sup>SALE</sup></div>
                  </span> <br />
                  <br />
                  <span class="lowprice">Lowest Ever Price</span> <strong>&pound;700 Save</strong> </div>
                <br />
                <br />
                <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
                <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
                <span style=" display: inline-block; text-align: left; width: 290px;">
                <ul>
                  <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong> Fax Template </strong><br />
                    In MS Word (Easy to Edit)</li>
                </ul>
                </span> </div>
              <div class="package-list"> <span class="heading">
                <h1>Stand Out!&trade; <span class="line">&pound;1749.99</span> <br />                  
                  <span class="bethebest"></span> </h1>
                </span>
                <h4><span style="font: normal 12px/16px arial;"><strong>Huge Savings</strong> with a complete logo <br />
and E-Commerce web package!
</span><br /></h4>
                <h4>Includes: </h4>
                <ul class="package-detail g-bullet">
                  <li>&quot;<strong><em>Be The Best&trade;</em></strong>&quot;Package</li>
                  <li>&quot;<strong>Flash Logo + More</strong>&quot; Package </li>
                  <li>&quot;<strong>Start Getting Serious&trade;</strong>&quot; Package </li>
                </ul>
                <br />
                <br />
                <h4>Plus:<a href="<?= site_url('web-site-design/webdesigner-limited-sale/index'); ?>" target="_blank"><span> <span style="text-decoration: underline;"><strong>Elite Web Design </strong> Package</span><br />
                  <span style="display: inline-block; margin-left: 35px;">(<strong>&pound;599 Value</strong> Ordered Separately)</span> </span></a></h4>
                <ul class="package-detail g-bullet">
                  <li><strong>12 Page</strong> Professional Website</li>
                  <li><strong>Full </strong>E-Commerce Included</li>
                  <li><strong>3 Design Concepts </strong>by 3 Designer </li>
                  <li><strong>Content Management System</strong> (CMS)<br />
                  (Easily Edit Your Website)</li>
                  <li><strong>Search Engine Optimisation</strong></li>
                  <li><strong>Cross Browser Compatibility</strong></li>
                  <li><strong>W3C Certified HTML</strong></li>
                  <li><span class="text-red">Free</span> <strong>Flash Animated Head Banner</strong> </li>
                  <li><span class="text-red">Free</span> <strong>Hosting For Life</strong></li>
                  <li><strong>Many other features</strong> that can be <br />
                    seen on our <span style="text-decoration:underline">web packages page</span></li>
                </ul>
                <br />
                <br />
                <input type="button" class="button" />
                <br />
                <br />
                <br />
                <div class="save"> <span class="savesale"><span class="bg-red">SAVE 60%</span>
                  <div class="price"><span style="font-size: 27px;">&pound;699.99</span><sup>SALE</sup></div>
                  </span> <br />
                  <br />
                  <span class="lowprice">Lowest Ever Price</span> <strong>&pound;1050 Save</strong> </div>
                <br />
                <br />
                <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
                <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
                <span style=" display: inline-block; text-align: left; width: 290px;">
                <ul>
                  <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong> Fax Template </strong><br />
                    In MS Word (Easy to Edit)</li>
                </ul>
                </span> </div>
              <div class="package-list" style="margin-right: 0;"> <span class="heading">
                <h1>Go For Glory!&trade; <span class="line">&pound;1999.99</span> <br />
                  <span style="font: normal 12px/16px arial;">(No Compromises for your Brand!)</span><br />                  
                  <span class="bethebest"></span> </h1>
                </span>
                <h4><span style="font: normal 12px/16px arial;"><strong>Biggest Savings and Complete Branding</strong></span><br /></h4>
                <h4>Includes: </h4>
                <ul class="package-detail g-bullet">
                  <li>&quot;<strong><em>Be The Best&trade;</em>&quot;</strong> Package</li>
                  <li>&quot;<strong>Flash Logo + More</strong>&quot; Package </li>
                  <li>&quot;<strong>Start Getting Serious&trade;</strong>&quot; Package </li>
                </ul>
                <br />
                <br />
                <h4>Plus:<a href="<?= site_url('web-site-design/webdesigner-limited-sale/index'); ?>" target="_blank"><span> <span style="text-decoration: underline;"><strong>Elite Web Design</strong> Package</span><br />
                  <span style="display: inline-block; margin-left: 35px;">(<strong>&pound;599 Value</strong> Ordered Separately)</span> </span></a></h4>
                <ul class="package-detail g-bullet">
                  <li><strong>12 Page</strong> Professional Website</li>
                  <li><strong>Full </strong>E-Commerce Included</li>
                  <li><strong>3 Design Concept </strong>by 3 Designer </li>
                  <li><strong>Content Management System</strong> (CMS)<br />
                    (Easily Edit Your Website)</li>
                  <li><strong>Search Engine Optimisation</strong></li>
                  <li><strong>Cross Browser Compatibility</strong></li>
                  <li><strong>W3C Certified HTML</strong></li>
                  <li><span class="text-red">Free</span> <strong>Flash Animated Head Banner</strong> </li>
                  <li><span class="text-red">Free</span> <strong>Hosting For Life</strong></li>
                  <li><strong>Many other features</strong> that can be <br />
                    seen on our web packages page</li>
                </ul>
                <br />
                <br />
                <h4>Plus:<span> <strong>Social Media Design</strong></span></h4>
                <ul class="package-detail g-bullet">
                  <li><strong>Facebook </strong> Business Page</li>
                  <li><strong>Twitter </strong> Business Page</li>
                  <li><strong>Youtube </strong> Business Page</li>
                  <li><strong>Unlimited Revisions </strong>to All Designs!</li>
                </ul>
                <br />
                <br />
                <input type="button" class="button" />
                <br />
                <br />
                <br />
                <div class="save"> <span class="savesale"><span class="bg-red">SAVE 60%</span>
                  <div class="price"><span style="font-size: 27px;">&pound;749.99</span><sup>SALE</sup></div>
                  </span> <br />
                  <br />
                  <span class="lowprice">Lowest Ever Price</span> <strong>&pound;1250 Save</strong> </div>
                <br />
                <br />
                <div style="height: 1px; background: #e1e1e1; margin-bottom: 20px;"></div>
                <h3 style="font: normal 16px/18px arial; margin: 0 0 5px 34px; text-align: left; text-transform: uppercase;"><span class="text-red" style="font-size: 18px;">*</span> <span style="text-decoration: underline;">Bonus Offer</span></h3>
                <span style=" display: inline-block; text-align: left; width: 290px;">
                <ul>
                  <li class="new"><span class="text-red">Free </span><strong>Electronic Letterhead</strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong>Invoice Design </strong><br />
                    In MS Word (Easy to Edit)</li>
                  <li class="new"><span class="text-red">Free </span><strong> Fax Template </strong><br />
                    In MS Word (Easy to Edit)</li>
                </ul>
                </span> </div>
            </div>
            <div class="text">
            <p style="color:#000; font:bold 35px/43px Helvetica, Arial, sans-serif">&quot;OK, we are trying to make profit too...<br />But <span class="text-green"> do <span style="text-decoration:underline">not</span> just think 
  saving your funds</span><br /> is good business...
  <br /><br />
  <span class="text-green">Focus on the return</span> for you and <em>your business</em>...<br />Kick-off professionally today!&quot;         
  </p>
  <p style="color:#000; font:bold 13px/18px Helvetica, Arial, sans-serif">Need Help? We have <em>real people</em> on the phone 24/7:  Call Now:  0800 756 9910. </p>
 
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