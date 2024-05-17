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
</head>
<body>
<div class="wrapper">  
<?php include_once("includes/client/header.php"); ?>
<?php include_once("includes/client/top_container.php"); ?> 
  
  <div class="main-container">
    <div class="main col1-layout">
    <div class="col-main client-panel">
    
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
<tr >
<td align="left">Stationary Files</td>
</tr>


<?php
if(!empty($final)){
    foreach($final as $rown){
    	$designer_post_id = $rown['final_id'];
		$oldORnew = 'old';
		if($this->clientmodel->countTotal('tbl_final_files', array('designer_final_id'=>$designer_post_id)) > 0){	
			$oldORnew = 'new';				
			$stationary = $this->clientmodel->getAll( 'tbl_final_files', 'id', array('designer_final_id'=>$designer_post_id,'file_type'=>'stationary'));
		}
    			
	    if($oldORnew == 'new') {
			if(!empty($stationary)){
				$logoArray = array();
                if($_SERVER['REMOTE_ADDR'] == '202.166.221.51'): /*echo '<pre>'; print_r($stationary);*/ endif;
				foreach($stationary as $row1){						
					if (@fopen('http://50dollarlogo.com/admin_panel/final/'.$row1->file_name, "r") && $row1->file_name!='')
						//$logoArray[getExtension($row1->file_name)] = $row1->file_name;	
						?>									
						<tr><td><a href="http://50dollarlogo.com/admin_panel/final/<?php echo $row1->file_name; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  width="80px"/></a>
				</td></tr>
                <?php
				}
			}
		}
        else{
            ?>
            <tr>
                <td align="center" valign="middle">
                <?php 
                $file = $rown['busiCard'];
                if($file ==""){
                    echo "Empty";
                }
                else{
                    ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['busiCard']; ?>" target="_blank">
                    <img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php
                }
                ?>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle">
                <?php 
                $file = $rown['letterHead1'];
                if($file ==""){
                echo "Empty";
                }
                else
                {
                ?>
                <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead1']; ?>" target="_blank">
                <img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                <?php
                }
                ?>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle">
                <?php 
                $file = $rown['letterHead2'];
                if($file =="")
                {
                echo "Empty";
                }
                else
                {
                ?>
                <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead2']; ?>" target="_blank">
                <img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                <?php
                }
                ?>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle">
                <?php 
                $file = $rown['letterHead3'];
                if($file =="")
                {
                echo "Empty";
                }
                else
                {
                ?>
                <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['letterHead3']; ?>" target="_blank">
                <img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                <?php
                }
                ?>
                </td>
            </tr>
            <tr>
                <td align="center" valign="middle">
                <?php 
                $file = $rown['comSlip'];
                if($file =="")
                {
                echo "Empty";
                }
                else
                {
                ?>
                <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['comSlip']; ?>" target="_blank">
                <img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                <?php
                }
                ?>
                </td>
            </tr>
            <?php			
        }
    }
}


?>
</table>
    
    <div style="clear: left;"></div>
    <?php include_once('includes/client/copyright.php'); ?>
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