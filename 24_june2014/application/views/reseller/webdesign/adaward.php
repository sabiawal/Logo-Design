<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>
<?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>
Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?= base_url()?>css_web/import.css" rel="stylesheet" type="text/css" />
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
          <h1 style="font-size:42px; color:#000; margin-top:20px;">The American Design Awards!</h1>
          <br/>
          <p style="font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray; line-height:25px; word-spacing:1px;"> If ethics are number one to you, the American Design Awards is the<br/>
            <span style="color:red;">most vigilant upholder</span> of ethical design guidelines, making them <br/>
            one of the <span style="color:red;">most respected </span> award-giving bodies, internationally.</p>
          <p style="color:#000;">The <b>American Design Awards</b> puts the best interest of the <br/>
            graphic designers, and the industry itself, in mind. </p>
          <p style="color:#000;">They have different categories catering to different experience <br/>
            levels of designers. They review website designs as well.</p>
          <p style="color:#000;">They are highly looked upon, being the pioneers of ethical <br/>
            design guidelines that they are. That is why our company,<br/>
            LogoDesignGuarantee.com, keeps a close focus on the ADA, <br/>
            so we can provide you with <b>only the most suitable designs.</b></p>
          <p style="color:#000;">We regularly submit our best designs as to give recognition <br/>
            to our own skilled and creative designers. This way, we will <br/>
            always be motivated to serve you <span style="color:red;">to the best of our abilities.</span></p>
          <p style="color:#000;">But that&apos;s not all; being able to win the Awards gives the<br/>
            company, to whom the logo belongs to, <b>great publicity.</b><br/>
            This is a huge opportunity to freely advertise your companies...</p>
          <p style="color:#000;"><i>...This is <span style="color:red;">very advantageous</span> to you!</i></p>
          <p style="color:#000;"> We&apos;re always working with this as our goal, so who knows?<br/>
            It might be your company&apos;s logo or website that wins next!</p>
          <p style="color:#000;">With the custom designs that we work on, we can both stand<br/>
            at the top of the chain, your company and ours. </p>
          <p style="color:#000;">Fulfill your design needs today, and check out our packages! </p>
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