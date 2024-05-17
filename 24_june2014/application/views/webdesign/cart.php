<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>
<?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>
Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
<style>
#shopingCart{background:#FFF345;	width:400px;position:absolute; padding:5px;z-index:100;-webkit-border-radius: 8px;	-moz-border-radius: 8px;border-radius: 8px; right: 0!important;}
.sav_cart_body{	padding:10px;}
.shoppingheading{font-weight: bold; padding-right: 8px;  text-align: left;}
.sav_row{}
.sav_right{	float:right;}
.sav_inner{	background:#fff; width: 100%; margin: 10px 0;	-webkit-border-radius: 8px;	-moz-border-radius: 8px;	border-radius: 8px;}
.sav_inner td { padding: 5px 10px;}
.sav_inner tr{border-bottom: 1px solid #e4e4e4;}
.sav_tots{	color:red;}
.cart{float: left; width:540px}
#promotional { background: url("<?php echo base_url()?>images/promotional-bg.png") no-repeat scroll -100px -80px #FFF345; border: 1px dashed red; border-bottom-left-radius: 5px;  border-bottom-right-radius: 5px;  padding: 20px; position: relative;}
#promotional label { color: #FF0000; font: 16px/18px arial;}
#promotional .bluebutton1 {	color: #E35400; cursor: pointer; display: inline-block; font: 16px arial; margin: 10px 0 0 180px; padding: 5px;text-transform: uppercase;}
#promotional img.scissors { position: absolute; right: -5px; top: -17px;}
#promotional span#wrong{font: normal 10px/12px arial; color: #990000;}
.cart-box{ float: right; position: relative; width: 410px; }
</style>
<script>var baseUrl = '<?php echo base_url()?>';</script>
<script language="javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	base_url = '<?=base_url()?>';  
	loadpage=base_url+'web-site-design/webdesigner-limited-sale/shoping_basket';
	//alert(loadpage);
	//$("#shopingCart").load(loadpage);
    $.post(loadpage,{},function(d){
        $("#shopingCart").html(d)
    });
	//$('.testme').live("click",function(){alert('savman');})	
	$('#updatePrice').live("click",function(){
		base_url = '<?=base_url()?>';  
		sav_url=base_url+'web-site-design/webdesigner-limited-sale/savmanWebPromotion';
		promo_code=$('#txtPc_sav').val();
        //alert(sav_url);
		$.ajax({			  
		  url: sav_url,
		  type:'POST',
		  data: "promo_code="+promo_code,
		  success: function(data) {
			if(data=='wrong')
            {
				$('#wrong').text('Sorry You Entered Wrong Promotional Codes');	
			}
			else{
				$("#shopingCart").load(loadpage);
			}
		  }
		});
	})					   
})
</script>
<script language="javascript" src="<?php echo base_url()?>js/floating-1.12.js"></script>
<script type="text/javascript">  
        floatingMenu.add('shopingCart',  
            {  
                // Represents distance from left or right browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                //targetLeft: 0,  
                targetRight: 10,  
                // Represents distance from top or bottom browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                 targetTop: 10,  
                //targetBottom: 10,  
                // Uncomment one of those if you need centering on  
                // X- or Y- axis.  
                // centerX: true,  
                // centerY: true,  
                // Remove this one if you don't want snap effect  
                snap: true  
            });  
    </script>
<?php include_once("includes/web-design/analytics.php"); ?>
</head>
<body>
 <?php
  /* echo "<pre>";
   print_r($_SESSION);
   echo '</pre>';*/
  ?>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/web-design/header.php"); ?>
  </div>
  <div class="main-container">
    <div class="main col1-layout">
      <div class="col-main">
        <div class="cart" style="float: left;">
          <h1> Before you proceed to the payment page.....</h1>
          <br />
          <h2>Your order has the following <strong>5 Unique benefits <br />
            that will greatly support your business:</strong></h2>
          <ul>
            <li>Free and Unlimited revisions and redraws. We design any part of your order until you are 100% happy. Other firms limit the number of revisions or the timeline to finish your designs.</li>
            <li>We provide certified in-house
              <?=COUNTRY; ?>
              designers. All our designers are degreed. We hire &ldquo;Quality&rdquo; to produce &ldquo;Quality&rdquo;. Nearly all competitors outsource to India.</li>
            <li>Free Content Management System (CMS) with every package. This allows you to easily edit your text at any stage in the future. Other firms charge up to <?php echo CURRENCY.CMS_OTHER_PRICE; ?> for CMS.</li>
            <li>Free flash head banner. This means you have an animated design to your site. This requires more advanced designing. Most firms also charge up to <?php echo CURRENCY.FLASH_BANNER_OTHER_PRICE; ?> for Flash.</li>
            <li>Free dedicated designers. We take up to just &ldquo;2 weeks&rdquo; to complete a web site. Most firms use a designer to work for several customers at one time. No wonder they take up
              to 6-8 weeks to complete a project!</li>
          </ul>
          <h1>Price promise:</h1>
          <h2>You will not find a more affordable<br />
            web design company!</h2>
          <br />
          <h2>If you later find a more affordable offer,<br />
            we will refund the difference. </h2>
          <br />
          <h2>IF THE ABOVE IS NOT ENOUGH:</h2>
          <br />
          <h2><span class="text-24"><strong>We offer</strong></span> the best guarantee in the Design industry.... </h2>
          <div class="cart-gurantee-list">
            <p>We offer a <strong><?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back<br />
              Guarantee </strong>on all your order.</p>
            <p>If you don&rsquo;t think your web site is worth at <br />
              least <strong><?php echo CURRENCY.WEB_QUALITY_PRICE; ?></strong> to your business we will refund you in full.</p>
            <ul>
              <li>No admin fees.</li>
              <li>No questions asked.</li>
              <li>We offer this refund <strong>at any stage</strong> of your design, even if we have revised several times and you are still not happy (there is no other company that offers this).</li>
              <li>Immediate refund upon request.</li>
            </ul>
            <img src="<?=base_url(); ?>images/100mbg.jpg" alt="money_Back" width="130" height="105" align="absmiddle" />
            <div style="clear:both"></div>
          </div>
          <h1>You can only win.</h1>
          <p>Either you&rsquo;ll get a web site 100% to your &ldquo;defined satisfaction&rdquo; or you
            will get all your money back and working examples and design ideas to use.</p>
          <p>Remember... Most other firms do not offer 100% Money back.
            It does not say much about their design quality and customer service focus.</p>
          <p>We can offer this outstanding guarantee as we produce high quality designs and
            achieve an industry  high 97% customer satisfaction rate!</p>
          <p>Our clients are happy and only 3% ask for a refund.</p>
          <h1>So what happens next?...</h1>
          <p>Upon payment, we will set up your personal design panel and
            email it to you within 12-24 hrs. This will allow you to keep your web design project
            all within one online account. Other firms use email communication &ndash; this is just too basic.</p>
          <p>Please do not delay payment. This will delay us being able to start your project.</p>
          <p>As a business ourselves, we are sure you understand that we need payment before
            we commence a project as a web project costs a lot of money for our in-house staff. </p>
          <p>We have tried to provide peace of mind via our
            <?=GUARANTEE_DAY; ?>
            -Day, 100% Money Back Guarantee Policy.</p>
          <p>Act now and we guarantee 100% satisfaction or your money back! </p>
          <p>That simple.</p>
        </div>
        <div class="cart-box">       
            <div id="shopingCart">
     		
             </div>
         </div>
         <div class="clear"></div>
      </div>
      <div class="side-bar" style="position:relative;"> </div>
      <div class="clear"></div>
      <div class="cart-bottom-list" align="center"> <img src="<?=base_url()."images/webdesign/sback.jpg"; ?>" title="back" alt="back" onclick="javascript:history.go(-1);" name="back" align="absmiddle" style="display:inline;" class="button" /> <img src="<?=base_url()."images/webdesign/continue.jpg"; ?>" title="continue" alt="continue" name="continue" align="absmiddle" onclick="document.location='<?php if(COUNTRY == "UK") {echo site_url('web-site-design/webdesigner-limited-sale/paybank');} else{echo site_url('web-site-design/webdesigner-limited-sale/jetpay'); }?>'" class="button"  />
        <p>*This order qualifies for our <strong>
          <?=GUARANTEE_DAY; ?>
          -Day, 100% Money Back Guarantee Policy.</strong><br />
          <i>Simple!</i> &gt; No fees. no questions asked. </p>
        <?php if(COUNTRY != 'UK'){ ?>
        <h1>Our payment page displays price in British<br />
          Pounds only.</h1>
        <p>Please be reassured that:</p>
        <?php } ?>
        <ul>
          <li><strong>Free and Unlimited revisions and redraws</strong>.  We design any part of your order until you are 100% happy. </li>
          <li>We send all files required for  any web or print use via email.</li>
          <li>You own full copyright on  every part of the designs we produce for you!</li>
        </ul>
        <?php if(COUNTRY != 'UK'){ ?>
        <p><span class="text-green1"><strong>We wish to apologise for any currency  confusions, but do be reassured &nbsp;that you  are <span class="text-underline">not</span> charged any more or additional fees to your card. Thank you !</strong></span></p>
        <?php } ?>
      </div>
      <?php 
    if(isset($c_id) && $c_id !="")
    {
        include_once('includes/client/copyright.php');
    } 
?>
      <?php include_once("includes/web-design/seal-top.php"); ?>
    </div>
  </div>
  <div class="footer-container">
    <div class="footer">
      <?php 
            include_once("includes/web-design/footer.php");
            include_once("includes/web-design/seal-top.php"); 
            include_once("includes/web-design/footer-menu.php");
		   ?>
    </div>
  </div>
</div>
</body>
</html>