<?php
//echo "<pre>";
//print_r($copyright_package);

$basic_package     =  $copyright_package[0]->package_type;
$executive_package = $copyright_package[1]->package_type;

if(COUNTRY == 'UK')
{
    $basic_price        = $copyright_package[0]->gbp;
    $executive_price    = $copyright_package[1]->gbp;
    
    $basic_price_reg    = $copyright_package[0]->gbp_reg;
    $executive_price_reg= $copyright_package[1]->gbp_reg;    
}
if(COUNTRY == 'USA')
{
    $basic_price        = $copyright_package[0]->usd;
    $executive_price    = $copyright_package[1]->usd;
    
    $basic_price_reg    = $copyright_package[0]->usd_reg;
    $executive_price_reg= $copyright_package[1]->usd_reg;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->

<script language="javascript" type="text/javascript">
function submitPackage(Pack,Price)
{
    document.getElementById('copyright_package').value=Pack;
    document.getElementById('copyright_price').value=Price;
    document.forms.packageFrm.submit();
}
</script>
</head>
<body>
<div class="wrapper">
  <?php include_once("includes/client/header.php"); ?>
  <?php include_once("includes/client/top_container_copyright.php"); ?>
  <div class="main-container">
    <div class="main col2-right-layout">
      <div class="col-main copyright">
        
        <div class="copyright-package">
        <img src="<?= base_url(); ?>images/client/copyright_package.gif" />
        <div align="justify" style="font-size:12px; width:685px;">To prove ownership, protect your original work and prevent theft and plagiarism, it is important to register a copyright. It's fast, inexpensive and its protection provides powerful ammunition against potential infringement. A copyrighted work may not be copied, reproduced, distributed or publicly displayed without the consent of the author or copyright owner.
        
        <!-- Copyright Package Table  Heading -->
        <div class="copy_table" style="width:640px;">
        <div class="copy_table_head" style="width:400px;">Apply Online Now - It takes only 60 seconds!</div>
        
        
        <div align="left" class="copy_package goldPack" style="width:120px;"><a href="#"><span class="exclusive"><?php echo str_replace(" ", "<br />",$executive_package) ?></span><br /><span style="text-decoration:line-through; line-height:14px; color:#000;"><?= CURRENCY.$executive_price_reg; ?></span> <span style="color:green; font-size:14px;"><?= CURRENCY.$executive_price;?>*</span></a></div>
        <div  align="left" class="copy_package silverPack" style="width:120px;"><a href="#"><span class="basic"><?php echo str_replace(" ", "<br />",$basic_package) ?></span><br /><span style="text-decoration:line-through; line-height:14px; color:#000;"><?= CURRENCY.$basic_price_reg; ?></span> <span style="color:green; font-size:14px;"><?= CURRENCY.$basic_price; ?>*</span></a></div>
        </div>
        <!-- Copyright Package Table  Heading Ends -->
        
        <div class="copy_TableTop"></div>
        <div class="copy_TableBody">
        
        <div class="copy_TableContent">
            <table>
                <tr>
                    <td class="description">Fill out your copyright application using our electronic form.</td>   
                    <td class="check basic"><img src="<?= base_url()."images/client/ico_check_basic.gif"; ?>" alt="Check" class="icoCheck" /></td>              
                    <td class="check exclusive"><img src="<?= base_url()."images/client/ico_check.gif"; ?>" alt="Check" class="icoCheck" /></td>
                </tr>
                <tr>
                    <td class="description">Professional proofreading for accuracy, common errors and completeness.</td>    
                    <td class="check basic"><img src="<?= base_url()."images/client/ico_check_basic.gif"; ?>" alt="Check" class="icoCheck" /></td>              
                    <td class="check exclusive"><img src="<?= base_url()."images/client/ico_check.gif"; ?>" alt="Check" class="icoCheck" /></td>                               
                </tr>
                
                <tr>
                    <td class="description">Customer Support</td>         
                    <td class="check basic"><img src="<?= base_url()."images/client/ico_check_basic.gif"; ?>" alt="Check" class="icoCheck" /></td>              
                    <td class="check exclusive"><img src="<?= base_url()."images/client/ico_check.gif"; ?>" alt="Check" class="icoCheck" /></td>                          
                </tr>               
                <tr>
                    <td class="description">Preparation of a deposit copy of your copyright material to conform to filing requirements.</td>
                    <td class="check basic"><img src="<?= base_url()."images/client/ico_check_basic.gif"; ?>" alt="Check" class="icoCheck" /></td>              
                    <td class="check exclusive"><img src="<?= base_url()."images/client/ico_check.gif"; ?>" alt="Check" class="icoCheck" /></td>
                </tr>                 
                <tr>
                
                    <td class="description">Notification of your filing including Copyright Case Number.</td>
                    <td class="check basic"><img src="<?= base_url()."images/client/ico_check_basic.gif"; ?>" alt="Check" class="icoCheck" /></td>              
                    <td class="check exclusive"><img src="<?= base_url()."images/client/ico_check.gif"; ?>" alt="Check" class="icoCheck" /></td>
                </tr>    
                
                <tr>
                    <td class="description">Length of Registration</td>
                    <td class="check basic" style="color:#3c70aa; font-weight:bold;"><span>5 Years</span></td>
                    <td class="check exclusive" style="color:#ff6000; font-weight:bold;"><span>5 Years</span></td>
                </tr>
                
                
                <tr>                
                    <td class="description">Priority Express Rush Processing </td>
                    <td class="check basic" style="color:#3c70aa; font-weight:bold;"><span>5 Days</span></td>
                    <td class="check exclusive" style="color:#ff6000; font-weight:bold;"><span>12-24 <br />Hours</span></td>
                </tr>
                <form action="<?= site_url('client_panel/copy_ordermid'); ?>" method="post">
                <tr class="last">                
                    <td class="description"></td>
                    <td class="check basic">
                    
                    <input type="hidden" name="copyright_package" id="copyright_package" value="" />
                    <input type="hidden" name="copyright_price" id="copyright_price" value="" />
                    <input type="image" onclick="submitPackage('<?= $basic_package; ?>','<?= $basic_price; ?>');" src="<?= base_url(); ?>images/client/ordernow_basic.jpg" name="executive_package" id="executive_package"  /></td>
                    <td class="check exclusive">
                    <input type="image" onclick="submitPackage('<?= $executive_package; ?>','<?= $executive_price; ?>');" src="<?= base_url(); ?>images/client/ordernow_exclusive.jpg" name="executive_package" id="executive_package"  />                    
                    </td>
                </tr>
                </form>
            </table>
        <div class="copy_TableBottom"></div>
        </div>               
        </div>
        <br />
        <div class="copy_TableFootnote">
        <h2><img src="<?= base_url(); ?>images/client/copyright_in_4_step.gif" /></h2>
        <ol class="steps">
            <li>In only <strong>60 seconds,</strong> you fill out our secure and easy online <strong>copyright registration</strong> form.</li>
            <li><strong>Upload</strong> or send us your copyright material and we'll set up a deposit copy of your work in <br /> compliance with filing requirements. <strong>Note:</strong> If it is for a logo we have designed for you, this <br /> step is unnecessary.</li>
            <li>Our attorneys will promptly <strong>file</strong> your completed application. Our professional staff reviews <br /> your application for accuracy, completeness and common errors.</li>
            <li>You'll receive a <strong>confirmation</strong> notice of your filing and will then mail you the Certificate of <br /> Registration. </li>
        </ol>
        
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