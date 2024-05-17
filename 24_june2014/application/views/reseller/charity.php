<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('blocks/analytics'); ?>
</head>
<body>
<div class="wrapper">
  <div class="header-container">
    <?php $this->load->view('blocks/header/header');  ?>
  </div>
  <div class="top-container">
    <div class="top">
        <?php $this->load->view('blocks/menu');  ?>
        <?php $this->load->view('blocks/main-banner');  ?>
    </div>
  </div>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main">
        <div class="footer-link">
          <?php       
    if(date('d')<8){    
    $portfolio_month = mktime(0,0,0,date("m")-1,date("d"),date("Y"));
    $portfolio_date  = trim(date("m Y",$portfolio_month));
    $x               = explode(' ',$portfolio_date);    
    $mth = $x[0];
    $mth = (int)$mth;      
    $month = array('','January','February','March','April','May','June','July','August','September','October','November','December');  
        if($mth ==12)
        $portfolio_date = $month[$mth].' '.(date('Y')-1);
        else
        $portfolio_date = $month[$mth].' '.(date('Y'));
    }
    else{$portfolio_date = date("F Y");}    
    ?>
          <h1 style="font-size:35px; font-family:Arial, Helvetica, sans-serif; color:#000; margin-top:20px; line-height:45px;"> Logo Design Guarantee&apos;s <span style="color:red;">innovation</span> within<br/>
            the design industry can be reflected by our <br/>
            recent <span style="color:red;">sponsorship for charities!...</span></h1>
          <p style="font-size:21px; font-family:Arial, Helvetica, sans-serif; color:gray; line-height:26px; word-spacing:1px;"> We are a socially conscious business, the way modern<br/>
            business should be. </p>
          <br/>
          <p style="color:#000;"><strong><i>Recent logos designed for charities,
            <?= $portfolio_date;?>
            :</i></strong></p>
          <br/>
          <div class="charity-works">
            <p style="color:#44bb00;"><strong><u>Road to Damascus Christian Church</u></strong></p>
            <img src="<?php echo base_url(); ?>images/rtd.jpg" title="rtd" alt="rtd logo" align="left" width="171" height="163" /> <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <p style="color:#000;"><strong>The following text was provided to us within the logo order brief:</strong></p>
            <p style="color:#000;">&quot;I am interested in a simple contemporary logo with clean lines.<br/>
              Our ministry is called Road To Damascus Christian Church (RTD).<br/>
              It is a non-denominational church with an emphasis on building<br/>
              strong Christian lives and families. </p>
            <p style="color:#000;">We would like the letters RTD to be used. And the entire church name<br/>
              (Road to Damascus Christian Church) printed beneath. Also, possible<br/>
              if a road could be designed in the logo as well, would be great.&quot; </p>
          </div>
          <div class="charity-works">
            <p style="color:#44bb00;"><strong><u>Customer testimonial</u></strong></p>
            <p style="color:#000;">&quot;I thoroughly enjoyed working with your company.</p>
            <p style="color:#000;">I received fast, quality service at an affordable price. Your designers <br/>
              had a creative way of capturing the essence of our church ministry<br/>
              and placed it into a contemporary logo design. </p>
            <p style="color:#000;">All of my feedback was warmly received and was promptly responded<br/>
              to. I would recommend your site to anyone looking for an awesome<br/>
              professional logo.&quot; </p>
            <p style="color:#000;">Sincerely,<br/>
              Pastor Joseph Graham<br/>
              Pastor of Road to Damascus Christian Church Charlotte, NC </p>
          </div>
          <div class="charity-works">
            <p style="color:#44bb00;"><strong><u>Heritage Community Church</u></strong></p>
            <img src="<?php echo base_url(); ?>images/hcc.jpg" title="hcc" alt="hcc logo" align="left" width="171" height="163" /> <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <p style="color:#000;"><strong>The following text was provided to us within the logo order brief:</strong></p>
            <p style="color:#000;">We are a church that values family and passing down a legacy of <br/>
              faith to the next generation. We value authentic, honest relationships.<br/>
              Maybe the idea of a tree (family tree, roots, reproduce or passing<br/>
              down legacy, etc.) </p>
            <p style="color:#000;">Brian Williams, Pastor<br/>
              Heritage Community Church <br/>
              PO Box 728<br/>
              Fruitland Park<br/>
              FL 34731 </p>
          </div>
          <div class="charity-works"> </div>
          <div class="charity-works">
            <p style="font-size:20px; font-family:Arial, Helvetica, sans-serif; color:#44bb00; line-height:25px; word-spacing:1px;"><strong><i>Are you a charity?...</i></strong></p>
            <h1 style="font-size:35px; font-family:Arial, Helvetica, sans-serif; color:#000; margin-top:20px; line-height:45px;"> We give you back <span style="color:red;">all the best that you<br/>
              deserve,</span> for the kindness you&apos;ve done!</h1>
            <p style="font-size:21px; font-family:Arial, Helvetica, sans-serif; color:gray; line-height:26px; word-spacing:1px;"> At Logo Design Guarantee we extend our <span style="color:red;">professional aid</span> to any<br/>
              Charitable Institution, with a <strong>10% discount</strong> only you can access. </p>
            <br/>
            <p style="color:#000;">Charitable institutions seldom receive support from the outside, as people<br/>
              wrongly tend to think of some institutions as <i>phony,</i> unless you&apos;ve become<br/>
              established over several years... </p>
            <p style="color:#000;"><i>In short, trust is still required to run your charity, profit or non-profit.</i><br/>
              We&apos;d like to extend a hand... No, even a whole arm, to help charitable<br/>
              institutions in our own small way, by providing you professional logos... </p>
            <p style="color:#000;"><i>...At very charitable prices.</i></p>
            <p style="color:#000;"><i>Caritas,</i> the word from which the word charity came from, is the Latin<br/>
              translation of agape, which means &quot;unlimited, unconditional love to others.&quot;<br/>
            </p>
            <p style="color:#000;">We can help you <span style="color:red;">express that love,</span> even with the logos that you&apos;d have us<br/>
              create. Using colors like white or light blue, both of which foster purity and<br/>
              cleanliness, among other colors, to look professional and loving at the <br/>
              same time... Such logos can really help you gain trust <span style="color:red;">from the first look.</span> </p>
            <p style="color:#000;">And yes, to help you even further, as a way of humbling ourselves just<br/>
              like you do, we&apos;re offering your charity a 10% discount if you give us <br/>
              a <a href="<?php echo base_url();?>reseller/contact" style="color:#06C;"><u>call</u></a>, on any and all design packages you order... <br/>
            </p>
            <p style="color:#000;"><strong>Our &quot;lowest prices&quot; just got even lower for you!</strong> </p>
            <p style="color:#000;">For all of your design needs, we at Logo Design Guarantee would be<br/>
              more than happy to serve you, in order for you to be able to serve others<br/>
              much more. Our 10% also applies for any future design service you order <br/>
              with us! </p>
            <p style="color:#000;">See our <a href="<?php echo base_url();?>reseller/packages" style="color:#06C;"><u>packages</u></a> now, and then call us to get your 10% OFF Today!</p>
          </div>
          <?php include_once("includes/reseller/blue-offer.php"); ?>
        </div>
      </div>
      <div class="side-bar">
        <?php 
            $this->load->view('blocks/money-back'); 
            $this->load->view('blocks/live-support'); 
            $this->load->view('blocks/charity'); 
            $this->load->view('blocks/security-sidebar');
            /////////////
            $this->load->view('blocks/awards'); 
            $this->load->view('blocks/testimonials'); 
            $this->load->view('blocks/customer-support');            
        ?>
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
</div>
</body>
</html>