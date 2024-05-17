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
<?php include_once("includes/web-design/analytics.php"); ?>
</head>

<body>
<div class="wrapper">
  <div class="header-container">
    <?php include_once("includes/web-design/header.php"); ?>
  </div>
  <?php include_once("includes/web-design/menu-banner.php"); ?>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main">
        <div class="footer-link">
          
           <h1 style="font-size:42px; color:#000; margin-top:20px;">The <span style="color:red;">Red Dot Awards!</span> Excellent<br/>
            <br/>
            Reputation on our side...</h1>
          <br/>
          <p style="font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray; line-height:25px; word-spacing:1px;">One of the strictest, most hard-to-win awards, and also the most<br/>
            rewarding... Only the <span style="color:red;">best of the best</span> can win the Red Dot Awards!</p>
          <p style="color:#000;">The Red Dot Awards gives recognition only to the highest<br/>
            levels of design. <span style="color:red;">Only a few designs can win this award.</span></p>
          <p style="color:#000;">It is an internationally-recognized label; which means that<br/>
            not only we will benefit, but <b>also you and your company.</b></p>
          <p style="color:#000;"><i>How? It&apos;s obvious...</i></p>
          <p style="color:#000;">Your design will be seen internationally, and so the message<br/>
            you want to send to people will be sent to <b>different nations!</b><br/>
            It is another form of free advertising. </p>
          <p style="color:#000;"><i>With this, we ensure that you get great designs.</i></p>
          <p style="color:#000;">So that both our company and yours can receive greater<br/>
            publicity, no, <span style="color:red;">positive publicity,</span> we at LogoDesignGuarantee<br/>
            regularly submit our designs, also to give our very own designers<br/>
            a taste of their very own success, on an <b>international stage.</b></p>
          <p style="color:#000;">That is how we treat every single one of your projects;<br/>
            and that is how devoted we are to <span style="color:red;">serving you.</span></p>
          <p style="color:#000;">As Red Dot gains more popularity as time passes by,<br/>
            LogoDesignGuarantee also gains the attention of<br/>
            business owners as <i>top provider</i> of designs for their<br/>
            business needs. It&apos;s win-win. </p>
          <p style="color:#000;">Be winners alongside us, and get more well-known like us.<br/>
            Grab the opportunity by choosing one of our <a href="<?php echo base_url();?>./web-site-design/webdesigner-limited-sale/index.php" style="color:#06C;"><u>packages</u></a> now! </p>
          
        </div>
      </div>
      <div class="side-bar">
        <?php 

include_once("includes/web-design/sidebar-1.php");

include_once("includes/web-design/sidebar-2.php");

?>
      </div>
      <div class="clear"></div>
      <?php 
    if(isset($c_id) && $c_id !="")
    {
        include_once('includes/client/copyright.php');
    } 
?>
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