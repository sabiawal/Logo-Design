<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
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
          <h1>Our charitable work...</h1>
          <h3>Logo Design Guarantee&rsquo;s innovation within the design industry can <br />
            be reflected by our recent sponsorships for charities. </h3>
          <br />
          <h1><strong>Recent logos designed for charity:</strong></h1>
          <br />
          <div class="charity-works">
            <h2>Road to Damascus Christian Church</h2>
            <img src="<?php echo base_url(); ?>images/webdesign/rtd.jpg" title="rtd" alt="rtd logo" align="left" width="171" height="163" />
            <h3>The following text was provided to us within the logo order brief: </h3>
            <p>&quot;I am interested in a simple contemporary logo with clean lines. Our ministry is called Road to Damascus Christian Church (RTD). It is a non-denominational church with an emphasis on building strong Christian lives and families.</p>
            <p>We would like the letters RTD to be use. And the entire church name (Road to Damascus Christian Church) printed beneath. Also, possibly if a "road" could be designed in the logo as well, would be great.&quot;</p>
          </div>
          <div class="charity-works">
            <h2>Customer testimonial</h2>
            <p>&quot;I thoroughly enjoyed working with your company.</p>
            <p>I received fast, quality service at an affordable price. Your designers had a creative way of
              capturing the essence of our church ministry and placed it into a contemporary logo design.</p>
            <p>All of my feedback was warmly received and was promptly responded to.
              I would recommend your site to anyone looking for an awesome professional logo. &quot; </p>
            <p>Sincerely, <br />
              Pastor Joseph Graham,<br />
              Pastor of Road to Damascus Christian Church Charlotte, NC</p>
          </div>
          <div class="charity-works">
            <h2>Heritage Community Church</h2>
            <img src="<?php echo base_url(); ?>images/webdesign/hcc.jpg" title="hcc" alt="hcc logo" align="left" width="171" height="163" />
            <h3>The following text was provided to us within the logo order brief: </h3>
            <p>We are a church that values family and passing down a legacy of faith to the next generation. We value authentic, honest relationships. Maybe the idea of a tree (family tree, roots, reproduce or passing down legacy, etc)</p>
            <p>Brian Williams, Pastor</p>
            <br />
            <br />
            <br />
            <p><a href="http://www.theheritagecommunity.org" target="_blank"><strong>www.theheritagecommunity.org</strong></a><br />
              Heritage Community Church |<br />
              PO Box 728<br />
              Fruitland Park<br />
              FL 34731</p>
          </div>
          <div class="charity-works">
            <h2>Huntsville State Prison Ministries</h2>
            <p>Non profit prison ministry teaching bible studies in Texas prisons.<br />
              <strong><a href="http://www.huntsville-state-prison-ministries.org" target="_blank">www.huntsville-state-prison-ministries.org</a></strong><br />
              Michael Hames</p>
          </div>
          <div class="charity-works">
            <h2>Are you a charity? </h2>
            <p>If you are a charity you can make a request by clicking here <a href="<?php echo site_url('webdesign/contact'); ?>"><strong>contact us</strong></a>, and submitting your request. Please include all information in the contact details fields for us to get in contact. </p>
            <p>Ensure you state you are a charity wishing to enter for a free logo package and explain the type of logo design you are looking for. We will ensure 5 charities are able to <strong>receive a free Silver package</strong> logo design just like all our customers. </p>
          </div>
        </div>
      </div>
        <div class="side-bar">
            <?php $this->load->view('blocks/best-value'); ?>
            <?php $this->load->view('blocks/live-support'); ?>
            <?php $this->load->view('blocks/charity'); ?>
            <?php $this->load->view('blocks/security-sidebar'); ?>
            <!--  -->
            <?php $this->load->view('blocks/awards'); ?>
            
            <?php $this->load->view('blocks/customer-support'); ?>
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