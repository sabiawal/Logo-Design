<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>



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

<div class="partnership">

<h1>Partnership programme</h1>



<p><?php echo SITE_NAME ?> seeks continued strategic partnerships for successful growth. We welcome contact from any individual or organisation that believes they can benefit our work as well as providing greater returns for them.</p>



<p>We seek partners with complementary business models like in web design or printing services, as well from the logo design sector. We value our <strong>outsourcing possibilities</strong> and the efficiency by which <?php echo SITE_NAME ?> can provide very affordable services in an easy and efficient manner. </p>



<p>For those able to contract large numbers of orders on a regular basis <strong>we can offer attractive discounts.</strong> Further, we provide a dedicated account manager for each partner for efficient communication.</p>



<p>We welcome any form of partnership/ contracting relationship and guarantee a reply to all such emails. If you are keen to pursue a partnership arrangement, please send an email with your brief proposal to <a href="mailto:Partners@<?php echo SITE_NAME ?>">Partners@<?php echo SITE_NAME ?>.</a></p>



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