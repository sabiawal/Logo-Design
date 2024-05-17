<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?= base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url()?>css_client/block.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?= base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
  <?php include_once("includes/client/header.php"); ?>
  <?php include_once("includes/client/top_container_copyright.php"); ?>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main copyright">        
        <h1>How It Works</h1>
        <p>Once you have decided to protect your original work from plagiarism, theft and infringement, the next step is copyright registration. A brief overview of the registration process is as follows:</p>
        <br />
        
        <div class="col2-set">
            <div class="col-1">
                <img src="<?php echo base_url()."images/client/copy_how1.jpg" ?>" alt="Best price" title="Guarantee" /> 
            </div>
            
            <div class="col-1 col-2">
                <div class="block-title"><h2>Complete our 60 second online order form</h2></div>
                <div class="block-content">
                <p>Within <strong>60 seconds,</strong> you will answer a few basic questions on our online application, securely upload your work (if required) and our team will do the rest.</p>
                <p><strong>97% of our customers register a copyright with us.</strong> We&quot;ve drafted thousands of copyright applications so you can be confident that the entire application process will be handled smoothly, accurately and to the highest professional standards. </p>
                </div>                  
            </div>
        </div> 
        
        <div class="col2-set">
            <div class="col-1">
                <img src="<?php echo base_url()."images/client/copy_how2.jpg" ?>" alt="Best price" title="Guarantee" /> 
            </div>
            
            <div class="col-1 col-2">
                <div class="block-title"><h2>Document Preparation</h2></div>
                <div class="block-content">
                <p><strong>We&quot;ll prepare</strong> all the appropriate forms and review your application for accuracy, common errors, and completeness.</p>
                </div>                  
            </div>
        </div>
            
        <div class="col2-set">
            <div class="col-1">
                <img src="<?php echo base_url()."images/client/copy_how3.jpg" ?>" alt="Best price" title="Guarantee" /> 
            </div>
            
            <div class="col-1 col-2">
                <div class="block-title"><h2>Copyright Confirmation and Certificate</h2></div>
                <div class="block-content">
                <p>Once your application has been processed and filed, you will receive an email confirmation. The email confirmation will inform you that your application has been filed and you will be given an &quot;effective registration date.&quot; <strong>You do not have to wait for your copyright certificate in the mail before you can start using your new copyright to your advantage.</strong> After your &quot;effective registration date,&quot; you are protected by your new copyright.</p>
                <p>Once the process is complete, we will mail your Certificate of Registration.</p>
                <p>Working with our legal service will <strong>save you literally hundreds of pounds</strong> in legal fees - plus, we back up our service with a <strong>100% satisfaction guarantee!</strong></p>
                </div>                  
            </div>
        </div>    
            
       	


      </div>
      <div class="side-bar">
        <?php include_once("includes/client/sidebar-1.php"); ?>
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
        <?php include_once("includes/client/sidebar-2.php"); ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer-container">
    <div class="footer">
      <?php 
      include_once('includes/client/footer.php');
      include_once('includes/client/seal-top.php');
      include_once('includes/client/footer-menu.php');
    ?>
    </div>
  </div>
</div>
</body>
</html>