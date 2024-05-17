<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reseller | Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url(); ?>css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/reseller.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('blocks/analytics'); ?>
<style type="text/css">
.spotlight .list-3 {
background:url(images/tmb-price-<?php echo COUNTRY;
?>.jpg) no-repeat 184px 0;
}
</style>
<style type="text/css">
.left-col-main{
	min-height:1439px;
	}
</style>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php $this->load->view('blocks/header/header');  ?>
  </div>
  <div class="top-container">
    <div class="top">
        <?php $this->load->view('blocks/menu');  ?>
        <?php $this->load->view('blocks/menu-reseller');  ?>
    </div>
  </div>
  <div class="main-container">
    <div class="main col2-right-layout">
    <div class="left-col-main"></div>
      <div class="col-main">
        <div class="footer-link">
          <h1 style="font-size:36px; color:#000; margin-top:20px; line-height:45px;">
          <span>The Process towards Wealth:</span> the<br/>
          Journey with our reseller program.</h1><br/>
<p style="font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray; line-height:25px; word-spacing:1px;">
        <u>Start taking action</u> towards <em>wealth building</em> with our<br/>
        reseller program.</span></p><br/>
<p>Whoever you are as long as you&rsquo;re interested to earn extra money,<br/>
Logo Design Guarantee can help you out.</p>   
<p>We can help established entrepreneurs, working students, stay&ndash;at&ndash;<br/>
home moms, regular employees, start&ndash;up businesses and many<br/>
more. All you need is effort, willingness to collaborate with us<br/>
and to invest some trust into our <span><?= COUNTRY; ?>&ndash;Award winning designers!</span></p>
<p><strong>The Simple Path towards Success</strong></p>
<p>The steps in our reseller program can be summed up easily:</p>
<ul>
	<li class="fst">Free sign up for our reseller program!</li>
    <li class="fst">You&rsquo;ll instantly be given a reseller account to work through.</li>
    <li class="fst">Check out our discounted packages within your account.</li>
    <li class="fst">Place orders using your clients design requests/briefs.</li>
    <li class="fst">Our designers get to work the same day!</li>
    <li class="fst">We upload the artwork into your reseller account and <br/>
notify you by email.</li>
    <li class="fst">You forward the outputs to your clients.</li>
    <li class="fst">The client receives the artwork with no mention of our<br/> 
company Logo Design Guarantee. Simple.</li>
</ul>
<p>Our phone staffs are available 24/7 to assist you<br/>
with your queries.</p>
<p>Remember, that our packages normally start at <span><!--<?=CURRENCY.$_SESSION['price']; ?>-->$49</span>, but for our<br/>
reseller program we give you <span>10% discount</span> and you can sell it<br/>
for whatever price you wish!</p>
<p>Devote your resources into marketing and sales campaigns<br/>
to get a solid market. Remember, we assist you by popularizing <br/>
our services under your name to get you loyal clients.</p>
<p><em>...No need for complicated knowledge or training,</em> and we&rsquo;re done<br/>
with the process that repeats itself for each <u>customer&rsquo;s orders.</u></p>
<p><strong>Our Reseller Program Stands Out</strong></p>
<p>Our reseller program has the following <u>unique</u> factors:</p>
<ul>
	<li class="snd">24/7 Phone Staffs</li>
	<li class="snd"><?= COUNTRY; ?>&ndash;Award winning designers</li>
	<li class="snd">10% Discount for each design package</li>
	<li class="snd">180 Days Money Back Guarantee</li>
	<li class="snd">Quality logo packages with at least 6 logo concepts </li>
	<li class="snd">Custom&ndash;made packages that suit you and your clients.</li>
</ul>
<p>Excited?</p>
<p><a href="<?php echo site_url('reseller/orderstart');?>"><u>Get started</u></a> and let&rsquo;s <span><strong>begin the journey</strong></span> together right now!</p><br/>
<p style="font-size:28px; color:#000; line-height:35px;">&ldquo;Remember, you get a free account<br/>
<strong>instantly</strong> activated upon sign up that<br/>
you can start using today!&rdquo;</p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
<div class="footer-container">
    <div class="footer">
        <?php $this->load->view('blocks/footer/footer-links'); ?>
        <?php $this->load->view('blocks/footer/footer-text'); ?>
        <?php $this->load->view('blocks/footer/footer-seals'); ?>
    </div>
</div>
  <!--<div class="seals" align="center"> <p>Call us TOLL FREE<br />
  <span><?= PHONE_NO; ?></span></p> 
  </div>--> 
    <br />
    <?php $this->load->view('blocks/footer/payment-seals'); ?><br />
    <?php $this->load->view('blocks/footer/partners');?><br />
    <?php $this->load->view('blocks/footer/phone-banner-bottom');?><br />
  <div class="footer-menu" align="center">
    <?php include_once("includes/reseller/footer-menu.php");?>
  </div>
</div>
</body>
</html>