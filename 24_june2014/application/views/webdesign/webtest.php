<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function submitPackage(Pack,Price,Pageno){
    document.getElementById('web_package').value=Pack;
    document.getElementById('web_price').value=Price;
    document.getElementById('pageno').value=Pageno;
    document.forms.webForm.submit();
	
}

var currency   					= '<?php echo CURRENCY; ?>';
var country 					= '<?php echo COUNTRY; ?>';

var revision_price_other_r1 	= '<?php echo REVISION_PRICE_0THER_R1; ?>';
var revision_price_other_r2		= '<?php echo REVISION_PRICE_0THER_R2; ?>';

var hosting_price_other_r1   	= '<?php echo HOSTING_PRICE_0THER_R1; ?>';
var hosting_price_other_r2 		= '<?php echo HOSTING_PRICE_0THER_R2; ?>';

var cms_price_other 			= '<?php echo CMS_OTHER_PRICE; ?>';
var cms_other_monthly_price 	= '<?php echo CMS_OTHER_MONTHLY_PRICE; ?>';

var flash_intro 				= '<?php echo FLASH_BANNER_OTHER_PRICE; ?>';

var mouse_hover_price_other_r1 	= '<?php echo MOUSE_HOVER_PRICE_0THER_R1; ?>';
var mouse_hover_price_other_r2  = '<?php echo MOUSE_HOVER_PRICE_0THER_R2; ?>';

var contact_us_price_other_r1 	= '<?php echo CONTACT_US_PRICE_0THER_R1; ?>';
var contact_us_price_other_r2   = '<?php echo CONTACT_US_PRICE_0THER_R2; ?>';

var links_price_other_r1 		= '<?php echo LINKS_PRICE_0THER_R1; ?>';
var links_price_other_r2		= '<?php echo LINKS_PRICE_0THER_R2; ?>';

var seo_price_other 			= '<?php echo SEO_PRICE_0THER; ?>';

var extra_page_price_other 		= '<?php echo EXTRA_PAGE_PRICE_0THER; ?>';

var monthly_fee_price_other_r1	= '<?php echo MONTHLY_FEE_PRICE_0THER_R1; ?>';
var monthly_fee_price_other_r2	= '<?php echo MONTHLY_FEE_PRICE_0THER_R2; ?>';
</script>



<style type="text/css">
*{
	margin:0; padding:0;
	}

#dhtmltooltip{
position: absolute;
width: 400px;
border: 2px solid #ccc;
padding: 2px;
background-color: lightyellow;
visibility: hidden;
z-index: 100;
margin-left:67%;

/*Remove below line to remove shadow. Below line should always appear last within this CSS*/
filter: progid:DXImageTransform.Microsoft.Shadow(color=gray,direction=135);
}
#dhtmltooltip h1{
	background:#ccc;
	color:#222;
	font:bold 16px/24px Arial, Helvetica, sans-serif;
	padding:2px;
	white-space:nowrap;
	
	}
</style>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/web-design/header.php"); ?>
  </div>
  <div class="top-container">
    <div class="top">
     
<?php 
	if($this->router->method == "index")
	{
	$main_banner = base_url()."images/webdesign/mainbanner-home-".COUNTRY.".jpg";	
	}
	else
	{
	$main_banner = base_url()."images/webdesign/mainbanner-".COUNTRY.".jpg";	
	}
?>


<div class="banner">
<p>Call a design expert 24/7:<br />
   <span>0800 756 9910</span></p>
   </div>
   
<div class="menu">
<ul>
<li id="nav-web-packages"><a href="<?php 

if(COUNTRY == 'USA'){echo site_url('')."web-site-design/webdesigner-limited-sale/";}
else{
echo site_url('web-site-design/webdesigner-limited-sale/index');}
?>" title="home">Web Packages</a></li>
<li id="nav-web-portfolio"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/portfolio'); ?>" title="packages">Web Portfolio</a></li>
<li id="nav-web-howworks"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/howworks'); ?>" title="Process">How It Works</a></li>
<li id="nav-web-whyus"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/whyus'); ?>" title="Compare Us">Why Choose Us</a></li>
<li id="nav-web-about"><a href="<?php echo site_url('web-site-design/webdesigner-limited-sale/about'); ?>" title="Portfolio">About Us</a></li>
<li id="nav-logodesign"><a href="<?php echo base_url();?>" title="Logodesign">Logo Design</a></li>


</ul>
</div>
<div class="main-banner">
<!--Start Slide Show Banner-->
<div class="price_banner"><img src="<?php echo base_url(); ?>images/webdesign/price_banner.jpg" /></div>
<div id="rotator">
	<img src="<?php echo base_url(); ?>images/webdesign/slide_show/1.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/2.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/3.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/4.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/5.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/6.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/7.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/8.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/9.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/10.jpg" />
    <img src="<?php echo base_url(); ?>images/webdesign/slide_show/11.jpg" />    
</div>
<div class="clear"></div>
<!--End Slide Show Banner-->
<map name="Map" id="Map">
  <area shape="rect" coords="81,247,230,272" href="<?php echo site_url('web-site-design/webdesigner-limited-sale/index');?>" />

</map>

</div>
      <script language="javascript" type="text/javascript">
document.getElementById('nav-web-packages').className='selected';

</script>
    </div>
  </div>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main home">
      
        <h1>Website Design</h1>
        
   
         
        <div class="package-list">
        
<div id="dhtmltooltip"></div>
<script type="text/javascript" src="<?php echo base_url()?>js/tooltip.js" ></script>
        <table width="700" border="0" cellpadding="0" cellspacing="0">
        
          <tr>
            <th width="240" height="120">&nbsp;</th>
            <td colspan="3" height="120" style="padding:0;"><img src="<?php echo base_url()."images/webdesign/packages.jpg"; ?>" /></td>
          </tr>
          <tr>
            <th width="240">&nbsp;</th>
            <td width="146" bgcolor="#8BBC00"><p>Budget Web <br />
              Design Package <br />
            (Only <?php echo CURRENCY.Budget_Website_Price; ?>  )</p></td>
            <td width="146" bgcolor="#8BBC00"><p>Gold Web<br />
Design Package <br />
(Only <?php echo CURRENCY.Gold_Website_Price; ?>)</p></td>
            <td width="146" bgcolor="#8BBC00"><p>Elite Web <br />
              Design Package <br />
            (Only <?php echo CURRENCY.Elite_Website_Price; ?>)</p> </td>
          </tr>
        </table>
       
        <table width="700" border="2" bordercolor="#888888" cellpadding="2" >
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Number of pages </h1><u><b>Definition:</b></u><br />This is the number of web pages that are included in the price for your package.<br /><br /><u><b>Benefits to You:</b></u><br />&bull; Each page we design for you will be 100% unique. <br />&bull;	You can completely change the layout for each page. <br />&bull; We do not use templates.<br />&bull;	This allows your website to stay fresh and interesting. Too much design consistency throughout the web pages can be boring which often makes potential customers stray.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Many of our competitors will only allow you to change the text for each page. The layout and images will remain exactly the same throughout all pages of the website. This allows you very little flexibility. The main reason many of our competitors are so strict on this is that they use a template for your website that cannot be changed', '#EFEFEF')";
 onMouseout="hideddrivetip()">Number of Pages <span class="text-red"> ?</span></div></th>
            <td width="146"><p>1 page</p></td>
            <td width="146"><p>Upto 6 pages</p></td>
            <td width="146"><p>Upto 12 Pages</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Designer(s)</h1><u><b>Definition:</b></u><br />The number of designers you receive with each package is the number of our in house professional designers who will work on your website project.<br /><br /><u><b>Benefits to You:</b></u><br />&bull; All of our designers are degreed and many have over 10 years of experience in web design. <br />&bull;	We only employ in house, ' + country + ' professionals.<br />&bull; Several of our web designers have won awards for their work.<br />&bull;	If you choose a more expensive package, you will have more than one designer working on your website project. This allows you to get a good variety of design ideas to choose from.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Many of our competitors outsource your design work. This does very little to guarantee the quality of your design. This way, you can never be sure if a qualified designer is working on your project. Our competitors do not offer you the option to have more than one designer working on your project; they would charge you twice as much. This allows you no variation in design.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Designer(s) <span class="text-red"> ?</span></div></th>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Design Concept(s)</h1><u><b>Definition:</b></u><br />At the initial stage of the design process, you will receive the layout and design for your new home page. This is called a design concept.  No text will be included at this stage. Depending on which package you choose, you can receive up to 3 design concepts for you to revise or build upon.<br /><br /><u><b>Benefits to You:</b></u><br />&bull; When you receive your design concept(s), you can choose to have them revised or you can have them completely redesigned, free of charge. <br />&bull;	You will receive your design concepts within 48 hours of placing an order.<br />&bull;	More than one concept allows you to have a better variety of ideas for your design.<br />&bull;	Once you are happy with your concept, the theme will be integrated into the rest of your project and you can begin to add new text and images for your website.<br />&bull;	Offering you design concepts at the beginning allows us to understand your vision for your project and to create the perfect website for you.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Many of our competitors do not offer web design concepts. They will simply charge you for your website, design it and give you the results up to 8 weeks later. You then have no flexibility to change the design they have given you. They will charge you for every change you wish to make. Others will offer you one design concept and allow you to revise it for a charge. None of our competitors will redraw a concept for free.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Design Concept(s) <span class="text-red"> ?</span></div></th>
            <td width="146"><p>1</p></td>
            <td width="146"><p>2</p></td>
            <td width="146"><p>3</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Revisions</h1><u><b>Definition:</b></u><br />A revision request can be made by you to change an aspect of your design or to make changes to the content of your website. You can make an unlimited number of revision requests free of charge.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	You can have complete control of your design and can revise your website until you are happy.<br />&bull;	Free unlimited revisions with all packages.<br />&bull;	Your revision request will reflect on your website within 24 hours.<br />&bull;	Unlimited revisions will help to guarantee your satisfaction as you can change anything you want on your website at any time.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> None of our competitors offer free unlimited revisions. Some will allow you one revision to your website and will charge you ' + currency + revision_price_other_r1 + ' - ' + currency + revision_price_other_r2 + ' per revision request. Some of our competitors can take up to two weeks to fulfill a revision request. We offer you free unlimited revisions throughout the entire design process and you will see the result of each request in only 24 hours.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Revisions <span class="text-red"> ?</span></div></th>
            <td><p>Unlimited</p></td>
            <td><p>Unlimited</p></td>
            <td><p>Unlimited</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Hosting</h1><u><b>Definition:</b></u><br />Hosting is a type of internet service that allows businesses or individuals to have content on the internet. This means the host (us) provides space to store files and content for your website.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	We offer free hosting for your website.<br />&bull;	With our hosting service, your website is guaranteed to have 99% uptime<br />&bull; We will set up unlimited business email addresses for your company.<br />&bull;	No contracts. You can take your files and host your website elsewhere at anytime. <br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> No design or hosting companies offer hosting services for free. Hosting services range from ' + currency + hosting_price_other_r1 + ' - ' + currency + hosting_price_other_r2 + ' per month. Other companies will usually only offer you 5 business email addresses and will charge you for any extra you need. Other companies have a minimum of a 12 month contract which you cannot get out of without paying an expensive cancellation fee.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Hosting<span class="text-red"> ?</span></div></th>
            <td width="146"><p>Included</p></td>
            <td width="146"><p>Included</p></td>
            <td width="146"><p>Included</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Content Management System</h1><u><b>Definition:</b></u><br />A content management system allows a number of people to maintain a website using a simple web-browser-based interface (instead of manually authoring web pages). At anytime you can add or edit the content of your website without having to pay a professional to do it. For example, you can easily change your website if you are running a new special promotion or if you want to notify your customers of an upcoming event.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	You don&rsquo;t need any technical knowledge to use our content management system. We have made the interface so simple, a child could use it.<br />&bull;	Our content management system is free.<br />&bull;	You can change any number of things you want on your website easily at anytime in the future.<br />&bull;	You will never have to pay a professional to update or redesign your website. <br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> Our competitors charge up to ' + currency + cms_price_other + ' for a content management system. Many other companies offer you this service for a monthly fee of up to ' + currency + cms_other_monthly_price + ' and lock you into a contract for at least 12 months. Many other companies resell content management systems to you which can be very difficult to use. We have created our own content management system for you to use with detailed instructions so you will always have full control over your website.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Content Management System <span class="text-red">?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Copy</h1><u><b>Definition:</b></u><br />Copy refers to the text that will appear on your website. When &lsquo;Client&rsquo; appears under your package, the text for your website must be provided by you. We do not currently offer writing services, however we offer free proofreading with all packages.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	You can control exactly what text will appear on your website and where. <br />&bull;	Since you are the expert in your field, you will be able to use more effective text to drive your sales.<br />&bull;	We offer free proofreading of your text no matter what package you choose.<br />&bull;	You can add and edit text at anytime during the design process and afterwards.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> Some of our competitors offer a writing service. However, they usually use outsourced writers and do very little research into your market. There have been many complaints about this in the web design market from people expecting to receive well written and relevant text. With our competitors, you will pay a very high fee for this service which is often non refundable. With us, you leave nothing to chance. You will have full control of the quality of your website.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Copy <span class="text-red">?</span></div></th>
            <td width="146"><p>Client</p></td>
            <td width="146"><p>Client</p></td>
            <td width="146"><p>Client</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Pictures</h1><u><b>Definition:</b></u><br />Pictures refer to the images we will use on your website. The images we add to your website are high quality stock images. We can also use any images you wish to provide.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	High quality stock photography for your website.<br />&bull;	The right images can make a great impression on your customers and will strengthen your company&rsquo;s image. This is proven to increase sales.<br />&bull;	You can choose what images go on your website and where to create the appropriate impression of your company.<br />&bull;	Our images are guaranteed to create a corporate and professional style to your website.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> A few of our competitors use stock photography but most images they provide are not unique. If you search through a few websites, you are likely to see the same business staff images on different websites. These well known images will do nothing to help your company&rsquo;s reputation. Many of our competitors do not use stock photography and stretch low quality images which look very unprofessional. With us you are guaranteed unique high quality images that will drive your business forward.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Pictures <span class="text-red"> ?</span></div></th>
            <td><p>Included</p></td>
            <td><p>Included</p></td>
            <td><p>Included</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Flash Intro</h1><u><b>Definition:</b></u><br />A flash intro refers to a flash animation that your website visitors will land on when they enter your site. Flash animation refers to anything that moves on your website. This can refer to words which can slide on and off the page or a photo slide show for example. See our portfolio for some recent flash intros we have created.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	We offer free flash animation with whatever package you choose.<br />&bull;	Flash intros can be very impressive to the eye and are sure to make an impression on your visitors.<br />&bull;	Flash intros are known to keep website visitors on your site longer.<br />&bull;	Flash intros are proven to increase professionalism and increase sales.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> None of our competitors offer flash animation for free. The most basic flash animation, such as an animated logo, can be in excess of ' + currency + flash_intro + '. With us, you will get all flash animation and intros included in your package price. No matter how complex you want your flash animations to be, we can fulfill your order without extra charge.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Flash Intro <span class="text-red"> ?</span></div></th>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>24 Hours Access to Concepts</h1><u><b>Definition:</b></u><br />When you order your website with us, you will have access to our Client Design Panel. This panel allows you to check the most recent updates on your website at any time. You can request revisions, add content and receive support all within the panel.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	You will be given an easy to use interface which will allow you to clearly see the progress of your website.<br />&bull;	You will be able to request revisions and add content to your website at the click of a button.<br />&bull;	You will be able to speak to our support staff 24/7.<br />&bull;	Your panel will save and archive all design concepts and revisions from the beginning of the process.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> Many of our competitors do not use a panel like this or allow you to have an account with them to even view your order. Most web design companies are well known to rely on email communication with their customers which can be very ineffective when you need to add or edit the content of your website. They will simply send you a link or copy and paste a screen shot of your website in an email. With us you will always have access to your website and know exactly how your project is coming along.', '#EFEFEF')";
 onMouseout="hideddrivetip()">24 Hours Access to Concepts <span class="text-red"> ?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Mouseovers</h1><u><b>Definition:</b></u><br />Mouseovers refer to the use of links. When a visitor puts their cursor over one of your links, it will slightly change colour so the visitor is positive that he/she can click this link. Mouseovers clearly show that the link is valid and working.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	Mouseovers create a much stronger awareness of the links on your website.<br />&bull;	Without the use of mouseovers, visitors frequently overlook the links on your website with the belief that they do not work.<br />&bull;	Mouseovers are included in your package price.<br />&bull;	Mouseovers are known to increase the use of links which in turn, increase sales.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br /> Other web design companies are known to charge for mouseovers. Some even charge you ' + currency + mouse_hover_price_other_r1 + ' - ' + currency + mouse_hover_price_other_r2 + ' for each link. With such a basic and necessary feature, we believe you should not have to pay any extra for this service. By default, we will add mouseovers to all links on your website.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Mouseovers <span class="text-red"> ?</span></div></th>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Contact Us Form</h1><u><b>Definition:</b></u><br />A contact us form allows your website visitors to contact you by leaving their name, contact details and a message they can submit to you. Depending on how many pages you order, you can have this on a contact page for your company which will display all methods of contact or the contact us form can be added at the end of one of your existing pages.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	The contact us form is the easiest way for your customers to request information from you.<br />&bull;	If you do not have a phone number, this will increase customer trust.<br />&bull;	A contact us form will add to the reliability of your business.<br />&bull;	Requests made through the contact us form are very easy to manage and will allow you to keep track of your customers&rsquo; needs.<br />&bull;	A contact us form is a good method of customer support which will cost you nothing.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />The contact us form is included in your package price no matter what package you choose. Other companies will definitely charge you for this service, usually the equivalent of an extra page (' + currency + contact_us_price_other_r1 + ' - ' + currency + contact_us_price_other_r2 + '). Many web design companies will give you a standard contact us form that is not customisable. You will be able to completely customise your contact us form so it meets your business needs.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Contact Us Form <span class="text-red"> ?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Links (External and Internal)</h1><u><b>Definition:</b></u><br />A link is an object on the web page. When a visitor of your website clicks on that object, the user is taken to another web page where the link is pointing to. Different types of links are: text links, graphic links, java links and form links. Internal links are links which lead to different pages within your website. External links are those which lead somewhere other than your website.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	We provide you with an unlimited number of links for no extra charge.<br />&bull;	An increased number of links is known to greatly improve search engine ranking.<br />&bull;	The more links you have on your website, the more professional and detailed it will appear to your visitors.<br />&bull;	The more links you have, the more interactive your website will become. This will keep visitors on your website longer and increase sales.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />We offer you an unlimited number of links at no extra charge. Many web design companies will charge you ' + currency + links_price_other_r1 + ' - ' + currency + links_price_other_r2 + ' per link. With all these small extra charges, your price with our competitors will quickly become very expensive.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Links(External and Internal) <span class="text-red"> ?</span></div></th>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Search Engine Submission</h1><u><b>Definition:</b></u><br />If you choose to advertise your website on a search engine, such as Google, your website needs to be submitted to them. We will submit your website to the top 15 search engines and we will also optimise your website to improve your ranking. Search Engine Optimisation (SEO) is the act of increasing the number of visitors to your website by adding appropriate keywords and phrases, and ranking high in the search results. The higher a website ranks in the results of a search, the greater the chance that your site will be found by a search user.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	We will submit your website to the top 15 search engines.<br />&bull;	We offer you search engine optimisation free of charge.<br />&bull;	We will optimise your website on a monthly basis to improve your ranking.<br />&bull;	Our programmers are highly experienced with SEO and will use your main keywords to get your website to the highest possible ranking.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Some web design companies offer search engine submission. Most will simply submit your website to one search engine and do nothing toward optimising your site. Without SEO, search engine submission is generally useless as you may never be found by users searching for your products or services. Some of our competitors offer SEO but charge in excess of ' + currency + seo_price_other + ' for this service. We will submit your website to 15 search engines and we will optimise your site free of charge.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Search Engine Optimisation <span class="text-red"> ?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>100% Copyright for Clients</h1><u><b>Definition:</b></u><br />100% copyright for clients means that you own 100% of your new unique website and all the text and design elements within it. You will have 100% copyright ownership of all your files. We do not use templates so rest assured, your design is unique and you own all of the design rights.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	No one can copy or imitate any feature or text within your website.<br />&bull;	You will have 100% copyright ownership of all your files.<br />&bull;	We do not use templates to ensure your design is unique.<br />&bull;	You own all of the design rights.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Many of our competitors do not offer any copyright protection. Most web design companies are known to use templates which can make your website look exactly the same as many others. Often you will not have full ownership of your files and will not own the design rights to your site. This can leave you very vulnerable to those who may copy elements of your website or possibly your entire site. Rest assured that you will have 100% copyright and ownership of your design when you choose us.', '#EFEFEF')";
 onMouseout="hideddrivetip()">100% Copyrights for Clients <span class="text-red"> ?</span></div></th>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Multiple File Formats Ready for Print & Web</h1><u><b>Definition:</b></u><br />When we finish your website, your files will be given to you in multiple compatible file formats. This allows you flexibility to use your files both on the web and for printing purposes such as on signs or stationery. We can also offer you print services upon request.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	Your website will work on all browsers.<br />&bull;	Your files will be compatible for use with all web programmes.<br />&bull;	Any files you need for any purpose will be handed over to you free of charge.<br />&bull;	You will be able to use printing services for your files with the compatible formats we will provide.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />With us your website will work on all browsers. Many others will design a website which will only be compatible with Internet Explorer. Other design companies will not provide you with all the file formats you need. Without multiple file formats you will not be able to use your files on other programmes or be able to print them. Many design firms will charge you when you request your files. We will never charge you and will hand your files over to you whenever you need them.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Multiple File Formats Ready For Print &amp; Web <span class="text-red"> ?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Additional Pages</h1><u><b>Definition:</b></u><br />When your website needs do not match the standard pages for each package, you may request additional pages for a low fee. <br /><br /><u><b>Benefits to You:</b></u><br />&bull;	Our additional pages are very affordable.<br />&bull;	You can order additional pages with us at anytime 24/7.<br />&bull;	You will have a content management system for each of your pages.<br />&bull;	Additional pages can help to give a more comprehensive view of your products/services and your company.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />Our additional pages are offered at a very affordable price. Our competitors charge in excess of ' + currency + extra_page_price_other + ' per extra page. Other companies will not allow content management of the additional pages and restrict its use to the main pages or just the home page. With us you can add extra pages at anytime with the full features at an affordable price.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Additional Pages <span class="text-red"> ?</span></div></th>
            <td width="146"><p><?php echo CURRENCY.WEB_EXTRA_PER_PAGE_PRICE; ?></p></td>
            <td width="146"><p><?php echo CURRENCY.WEB_EXTRA_PER_PAGE_PRICE; ?></p></td>
            <td width="146"><p><?php echo CURRENCY.WEB_EXTRA_PER_PAGE_PRICE; ?></p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Monthly Fees</h1><u><b>Definition:</b></u><br />A monthly fee is an automatic charge you will receive for the continuation of a service. We do not charge any monthly fees for any of our services. <br /><br /><u><b>Benefits to You:</b></u><br />&bull;	No further cost to you but the base price for your package.<br />&bull;	You will receive a content management system and hosting for free.<br />&bull;	You will not be locked in to any annual contracts.<br />&bull;	You will not need to worry about making payments to keep your website active.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />All of our competitors are known to charge monthly fees of ' + currency + monthly_fee_price_other_r1 + ' - ' + currency + monthly_fee_price_other_r2 + ' for services such as hosting and a content management system. Over time, such fees can become very costly to your business. We feel that you shouldn&rsquo;t have to pay for services which are so basic and necessary for your website&rsquo;s success. Our competitors will also try to lock you into hosting contracts which you can only cancel by paying an expensive fee. If you were to break that contract, you would also lose your content management system. With us your hosting is free and your content management system is for life.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Monthly Fees <span class="text-red"> ?</span></div></th>
            <td><p>Zero</p></td>
            <td><p>Zero</p></td>
            <td><p>Zero</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1>Installation On Your Server</h1><u><b>Definition:</b></u><br />Installation on your server refers to us uploading your files on the web. Put simply, we will post your website on the internet.<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	We will do all the uploading for you.<br />&bull;	If you choose to host with another company, we will upload it to your hosting company.<br />&bull;	With us uploading your files you will spare yourself a lot of time and hassle, particularly if you have no experience with this process.<br /><br /><u><b>Why our offer is better than our competitors:</b></u> <br />With our competitors, you must host with them if you want this service. If you host with another company, many of them will leave you to figure out your hosting and the uploading of your files. With us, your website is our main priority and just because the order process has finished, this does not mean that we will not help you further. Other companies will charge for this service. We will upload your files and post your website live for free.', '#EFEFEF')";
 onMouseout="hideddrivetip()">Installation on Your Server <span class="text-red"> ?</span></div></th>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
            <td width="146"><p>Yes</p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><div style="width:240px; cursor:pointer;" onMouseover="ddrivetip('<h1><?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back Guarantee<br />No fees. No questions. Best in Industry</h1><u><b>Definition:</b></u><br />We offer by far the best guarantee in the design industry!<br />Put simply, we offer a whopping <b><?php echo GUARANTEE_DAY; ?>-Day, 100% Money Back Guarantee</b> on all web design packages!<br /><br /><u><b>Benefits to You:</b></u><br />&bull;	Complete peace of mind &ndash; no risk!<br />&bull;	No questions asked. <br />&bull;	No fees.<br />&bull;	Refund can be requested at any stage of<br />&nbsp;&nbsp;the design process.<br />&bull;	Immediate refund within 5 days.<br />&bull;	An excellent guarantee often underlines a <br />&nbsp;&nbsp;company&rsquo;s commitment to customer service!<br />&bull;	How can you trust a firm that can-not even offer<br />&nbsp;&nbsp; a money back guarantee? <br /><br /><u><b>Why our Guarantee is better than our competitors?</b></u>:<br />&bull;	It&rsquo;s simple. Most design firms do not offer<br />&nbsp;&nbsp; a guarantee at all!<br />&bull;	This shows complete lack of commitment<br />&nbsp;&nbsp;to customer service.<br />&bull;	Once you place your order with them, then<br />&nbsp;&nbsp; you are at full risk. <br />&bull;	The few who offer 100% money back will limit it<br />&nbsp;&nbsp; to 7 days, or will not allow a refund after any<br />&nbsp;&nbsp; revision has been requested by you. <br />&bull;	Our refund can be given at any stage of<br />&nbsp;&nbsp; the design process.', '#EFEFEF')";
 onMouseout="hideddrivetip()"><?php echo GUARANTEE_DAY; ?> Days Money Back Guarantee No Fees. No Questions. Best In Industry <span class="text-red"> ?</span></div></th>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
            <td><p>Yes</p></td>
          </tr>
          <tr class="bg-gray">
            <th width="240" >Was</th>
            <td width="146"><p><?php echo CURRENCY.WEB_BUDGECT_OTHERS_PRICE; ?></p></td>
            <td width="146"><p><?php echo CURRENCY.WEB_GOLD_OTHERS_PRICE; ?></p></td>
            <td width="146"><p><?php echo CURRENCY.WEB_ELITE_OTHERS_PRICE; ?></p></td>
          </tr>
          <tr class="bg-white">
            <th width="240" ><span class="text-green1 text-14">Discount: Half Price <br />Limited to <br /></span><span class="text-red text-18">Midnight <?php echo $today; ?></span></th>
            <td><div align="center"><img src="<?php echo base_url()."images/webdesign/bullet_tick.jpg"; ?>" height="27" align="absmiddle" /></div></td>
            <td><div align="center"><img src="<?php echo base_url()."images/webdesign/bullet_tick.jpg"; ?>" height="27" align="absmiddle" /></div></td>
            <td><div align="center"><img src="<?php echo base_url()."images/webdesign/bullet_tick.jpg"; ?>" height="27" align="absmiddle" /></div></td>
           
          </tr>
          <tr class="bg-gray" >
            <th width="240"><span class="text-18">Now Total Fees</span></th>
            <td width="150"><p><?php echo "<span class=\"text-18\">".CURRENCY.Budget_Website_Price."</span>"; ?></p></td>
            <td width="150"><p><?php echo "<span class=\"text-18\">".CURRENCY.Gold_Website_Price."</span>"; ?></p></td>
            <td width="150"><p><?php echo "<span class=\"text-18\">".CURRENCY.Elite_Website_Price."</span>"; ?></p></td>
          </tr>
          <tr>
          <td colspan="4" style="padding:0;">
          <form action="<?php echo site_url('webdesign/ordermid'); ?>" method="post" name="webForm">
          <input type="hidden" value="" name="web_package" id="web_package"/>
          <input type="hidden" value="" name="web_price" id="web_price"/>
          <input type="hidden" value="" name="pageno" id="pageno"/>
          <table border="0">
          <tr class="bg-gray">
            <th width="240"></th>
            <td width="146"><input type="button" class="button" onclick="submitPackage('<?php echo Budget_Website;?>','<?php echo Budget_Website_Price;?>',1);" value=""/></td>
            <td width="146"><input type="button" class="button" src="<?php echo base_url()."images/webdesign/order_now.png"; ?>" onclick="submitPackage('<?php echo Gold_Website;?>','<?php echo Gold_Website_Price;?>',6);" value=""/></td>
            <td width="146"><input type="button" class="button" src="<?php echo base_url()."images/webdesign/order_now.png"; ?>" onclick="submitPackage('<?php echo Elite_Website;?>','<?php echo Elite_Website_Price;?>',12);" value=""/></td>
          </tr></table>
          </form>
          </td>
          </tr>
          
          
        </table>
        </div>
        
        <h1>Your Site Online in 2 Weeks </h1>
        <p>We provide our clients first concepts within 3 days. Further, most clients have their project completed fully within 2 weeks. Unlike other firms, we have dedicated design staff to web projects and logo projects. Some firms are known in the industry to take up to 8 weeks. This is mainly because their staff multi-task between various projects to lower costs. This stalls your growth. <br />    
      Our model is built on prioritising customer satisfaction at each level so as to increase repeat business (clients returning to us).</p>
      
      <h1>Free web hosting for a year</h1>
      <p>We provide 1 year web hosting for free. Our website design facilitates you with one year free web hosting. Next year webhosting nominal fee will be <?php echo CURRENCY . HOSTING_PER_YEAR_PRICE; ?> per month. We will provide you with free email accounts with this. Most firms will charge for hosting in their small print and also limit the number of email addresses you can have.</p>
      
      <h1>Talented Developers</h1>
      <p>We offer 100% Money Back Guarantee on all our web packages. We therefore have to work for you in every way. We have to employ very talented designers to ensure our clients are satisfied with their work. We have internal quality assurance checks as an extra means to guarantee quality. Many other firms will not offer 100% Money Back Guarantee!</p>
      
      <h1>Low Investment for a Lifetime Return</h1>
      <p>Once you get your website set up, you have a brand new marketing avenue. Many firms who just make 1 sale per week from a website lead can capture return on investment in only several weeks. We design and present text in a way that is suppose to generate leads for your business or calls for action.</p>
      </div>
      <div class="side-bar">
        <?php include_once("includes/web-design/sidebar-1.php"); ?>
        <div class="security" align="center">
          <?php if(COUNTRY == 'UK' ){ ?>
          <!-- START SCANALERT CODE FOR LDG.CO.UK -->
          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.co.uk"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.co.uk/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
          <!-- END SCANALERT CODE CODE FOR LDG.CO.UK -->
          <?php } elseif( COUNTRY == 'USA') { ?>
          <!-- START SCANALERT CODE FOR LDG.COM -->
          <a target="_blank" href="https://www.mcafeesecure.com/RatingVerify?ref=www.logodesignguarantee.com"><img width="94" height="54" border="0" src="//images.scanalert.com/meter/www.logodesignguarantee.com/13.gif" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.'); return false;"></a>
          <!-- END SCANALERT CODE LDG.COM  -->
          <?php } ?>
         
        </div>
        <?php include_once("includes/web-design/sidebar-2.php"); ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer-container">
    <div class="footer">
      <?php include_once("includes/web-design/footer.php");
include_once("includes/web-design/seal-top.php"); ?>
      <div class="footer-menu" align="center">
        <?php

include_once("includes/web-design/footer-menu.php");
?>
      </div>
    </div>
  </div>
</div>
</body>
</html>