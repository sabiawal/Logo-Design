<?php
$package_rows = intval($package_rows);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $c_id = ""; $c_id = $this->session->userdata('c_id'); if(isset($c_id) && $c_id !=""){echo "::Client Panel :: ";} ?>Logo Design Guarantee</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?=base_url()?>css/import.css" rel="stylesheet" type="text/css" />
<?php if(isset($c_id) && $c_id !="")//checking for client panel login
{
	?>
	<link href="<?php echo base_url()?>css_client/import.css" rel="stylesheet" type="text/css" />
	<?php 
}
?>
<script language="javascript" type="text/javascript" src="<?=base_url(); ?>js/jquery.js"></script>
<!--[if lt IE 8]>
<script src="<?=base_url()?>js/IE8.js"></script>
<![endif]-->
</head>
<body <?php if(@$c_id == ''){echo 'class="theme2"';} ?>>
<div class="wrapper">
    <div class="header-container">
        <?php include_once("includes/new44/header.php"); ?>
    </div>
    <div class="top-container">
        <div class="top">
        <?php include_once("includes/new44/menu-banner.php"); ?>
        </div>
    </div>
    
<div class="main-container">
<div class="main col2-right-layout box-shadow">
<div class="col-main">
<div class="pages category">
    <h2>Step 1. What do you want designed?</h2><br />
    <div style="overflow: hidden;">
        <?php
                    
            $this->db->select('*');           
            $this->db->from('new_category');            
            //$where = "id <'45'";
            //$this->db->where($where);
            $this->db->order_by("categories", "asc"); 
            $query = $this->db->get(); 
                        
            $count = 1;           
            foreach ($query->result() as $row)
            {
                
                $subheading = $row->categories;
                $category_id = $row->id;
                
                if($count % 2 == 0){ $style = 'style="margin-right:0;"'; }else{$style = "";}
                if($count  == 5){ $style = 'style="margin-bottom:20px;"'; }
                echo '<div class="new-package-detail"'.$style.'>';
                echo '<h3>'.$subheading.'</h3>';
                echo '<ul>';
                
                
				//$this->db->select('*');
                //$this->db->from('new_packages');
                //$this->db->where('category_id', $category_id); 
                //$this->db->order_by("package_name", "asc"); 
                //$query2 = $this->db->get();
				$query2 = $this->db->query("Select * from new_packages where category_id='".$category_id."' Order by package_name asc");
                foreach($query2->result() as $row2)
                { 
                    $package_name = $row2->package_name;
                    $package_id = $row2->id;
                    
                    $q  = $this->db->query("select * from new_sub_packages where package_id = $package_id");
                    $pp = $q->row(); 
                   
                    if(COUNTRY == 'UK'){$package_price = $pp->gbp;}else{$package_price = $pp->usd;}                    
                    echo '<li> <a href="'.site_url('new44/newpackages').'?pid='.$package_id.'">'.$package_name.' <span class="price-detail">from '.CURRENCY.$package_price.'</span></a></li>';
                    
                    
                }
                
                echo '</ul>';
                echo '</div>';
                $count++;
            }
        ?>
    </div>
</div>
    

</div>
<div class="side-bar">
<?php 
if(isset($c_id) && $c_id!="")
{
	include_once("includes/client/sidebar-1.php");
	?>
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
	<?php include_once("includes/client/sidebar-2.php");
}
else
{
	include_once("includes/new44/sidebar-1.php");
	?>
	<div class="security">
	<h2 align="center"><img src="<?= base_url()?>images/thumb_bbb.jpg" alt="Realiablity Program" title="Realiablity Program" /></h2>
	<h2 align="center"><img src="<?= base_url()?>images/thumb_verisign.jpg" alt="VeriSign" title="VeriSign" /></h2>
	<h2 align="center"><img src="<?= base_url()?>images/thumb_hackersafe.jpg" alt="Hack Safe" title="Hack Safe" /></h2>
	<h2 align="center"><img src="<?= base_url()?>images/moneyback.jpg" alt="moneyback" title="moneyback" /></h2>
	</div>
<?php 
}
?>
</div>
<div class="clear"></div>
<?php  if(isset($c_id) && $c_id !=""): ?>
    <?php include_once('includes/client/copyright.php'); ?>
<?php endif; ?>
<?php 
if(isset($c_id) && $c_id!="")//checking for client panel login
    {}//Nothing
else
    include_once("includes/logo-design/seal-top.php"); 
?>
</div>
</div>

<div class="footer-container">
<?php 
if(isset($c_id) && $c_id!="")//checking for client panel login
{
    ?>
    <div class="footer">
      <?php 
      include_once('includes/client/footer.php');
      include_once('includes/client/seal-top.php');
      include_once('includes/client/footer-menu.php');
    ?>
    </div><?php
}
else
    include_once("includes/new44/footer.php"); 
?>
</div>
</div>
</body>
</html>