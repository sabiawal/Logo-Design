<?php error_reporting(E_ALL);?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>:: Client Panel ::</title>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<link href="<?php echo base_url()?>assets/css_client/import.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
</head>
<body>
<div class="wrapper">  
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php"); ?> 
  
  <div class="main-container">
    <div class="main col1-layout">
    <div class="col-main client-panel">
   
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
<tr >
<td colspan="14" align="left">&nbsp;</td>
</tr>

<tr >
<td colspan="14" align="center">&nbsp;</td>
</tr>
<tr bgcolor="#99CCFF">
<th align="center"><span class="style3">.AI, .F11, .CDR </span></th>
<th align="center"><span class="style3">.EPS</span></th>
<th align="center"><span class="style3">.JPG</span></th>
<th align="center"><span class="style3">.PNG</span></th>
<th align="center"><span class="style3">.PSD</span></th>
<th align="center"><span class="style3">.TIF</span></th>
<th align="center"><span class="style3">.GIF</span></th>     

<th align="center">Stationary Files </th>
<th align="center"><span class="style3">ZIP FILE (LOGO)</span> </th>
<th width="10%" align="center"><span class="style3">Submited On </span></th>
</tr>

<?php
if(!empty($final))
{
foreach($final as $rown)
{
	$designer_post_id = $rown['final_id'];
			$oldORnew = 'old';
			
			if($this->clientmodel->countTotal('tbl_final_files', array('designer_final_id'=>$designer_post_id)) > 0)
			{	
				$oldORnew = 'new';			
				$logos = $this->clientmodel->getAll( 'tbl_final_files', 'id',"designer_final_id = '".$designer_post_id."' and (file_type = 'logo' or file_type = 'zip')");
				//echo $this->db->last_query();
				$stationary = $this->clientmodel->getAll( 'tbl_final_files', 'id', array('designer_final_id'=>$designer_post_id,'file_type'=>'stationary'));
				//echo $this->db->last_query();
			}
			
		    if($oldORnew == 'new') {
				$logoArray = array();
				if(!empty($logos)){										
					foreach($logos as $row1){						
						if (@fopen('http://50dollarlogo.com/admin_panel/final/'.$row1->file_name, "r") && $row1->file_name!='')
							$logoArray[strtolower(getExtension($row1->file_name))] = $row1->file_name;										
					}
				}
				//print_r($logoArray);
				//die();
				
				?>
                <tr>
                	<td><?php if (array_key_exists("ai",$logoArray) or array_key_exists("f11",$logoArray) or array_key_exists("cdr",$logoArray)){
						if (array_key_exists("ai",$logoArray))
							$idx = 'ai';
						else if(array_key_exists("f11",$logoArray))
							$idx = 'f11';
						else if(array_key_exists("cdr",$logoArray))
							$idx = 'cdr';
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray[$idx]; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("eps",$logoArray)){						
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['eps']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("jpg",$logoArray) or array_key_exists("jpeg",$logoArray)){						
					if (array_key_exists("jpg",$logoArray))
							$idx = 'jpg';
						else if(array_key_exists("jpeg",$logoArray))
							$idx = 'jpeg';
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray[$idx]; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("png",$logoArray)){						
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['png']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("psd",$logoArray)){						
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['psd']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("tif",$logoArray)){						
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['tif']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("gif",$logoArray)){						
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['gif']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (!empty($stationary)){						
						?>
					<a href="<?php echo base_url()?>client_panel/finalStationary/<?php echo $rown['final_id']?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php if (array_key_exists("zip",$logoArray) or array_key_exists("rar",$logoArray)){						
					if (array_key_exists("zip",$logoArray))
						$zipfile = $logoArray['zip'];
					else
						$zipfile = $logoArray['rar'];
						?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $zipfile; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
					<?php } else {echo 'Empty';}?></td>
                    <td><?php 
$submitDate=strtotime($rown['submit_date']);
echo date("D d M Y H:i",$submitDate); ?></td>                   
                </tr>
                <?php
				/*if(!empty($logos)){
					?>
					<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['zip_file']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
				}*/
			
				?>
				<?php /*if(!empty($stationary)){
					echo '<tr><td><strong>Stationary Samples</strong></td></tr><tr><td>';
					foreach($stationary as $row){
						echo '<a href="'.$this->config->item('sample_files_path').$row->sample_name.'" target="_blank"><img src="'.$this->config->item('sample_files_path').'thumb_'.$row->sample_name.'"></a>';
					}
					echo '</td></tr>';
				}*/
				  
			}
			else
			{

?>

<tr>

<td align="center" valign="middle">
<?php 
$file = $rown['file_ai'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_ai']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  />				</a>
<?php
}
?></td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_eps'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_eps']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_jpg'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_jpg']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_png'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_png']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_psd'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_psd']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_tif'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_tif']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>

<td align="center" valign="middle">
<?php 
$file = $rown['file_gif'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['file_gif']; ?>" target="_blank"><img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>                              </td>

<td align="center" valign="middle">
<?php 

if($rown['busiCard'] =="" && $rown['letterHead1']=="" && $rown['letterHead2']=='' && $rown['letterHead3']=='' && $rown['comSlip']=='')
{
echo "Empty";
}
else
{
?>
<a href="<?php echo base_url()?>client_panel/finalStationary/<?php echo $rown['final_id']?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>

<!--<td align="center" valign="middle">
<?php 
/*$file = $rown['busiCard'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['busiCard']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>
</td>
<td align="center" valign="middle">
<?php 
$file = $rown['letterHead1'];
if($file =="")
{
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
}*/
?>
</td>-->
<td align="center" valign="middle">
<?php 
$file = $rown['zip_file'];
if($file =="")
{
echo "Empty";
}
else
{
?>
<a href="http://50dollarlogo.com/admin_panel/final/<?php echo $rown['zip_file']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
<?php
}
?>      </td>
<td><?php 
$submitDate=strtotime($rown['submit_date']);
echo date("D d M Y H:i",$submitDate); ?></td>
</tr>

<?php			

			}
}
}
else
{
	
?>

<tr>
<td colspan="14" align="center" style="color:#FF0000;">&nbsp;</td>
</tr>
<tr bgcolor="#99CCFF">

<td colspan="14" align="center" style="color:#FF0000;"><strong>No final files has been submited till now</strong></td>
</tr>
<tr>
<td colspan="14" align="center" style="color:#FF0000;">&nbsp;</td>
</tr>

<?php
}

?>
</table>
    
    <div style="clear: left;"></div>
    <?php $this->load->view('includes/client/copyright.php'); ?>
    </div>
    <div class="side-bar">
    <?php $this->load->view("includes/client/sidebar-1.php"); ?>
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
    <?php $this->load->view("includes/client/sidebar-2.php"); ?>
    </div>
    <div class="clear"></div>
    </div>    
    </div>
<div class="footer-container">
    <div class="footer">
   <?php 
      $this->load->view('includes/client/footer.php');
      $this->load->view('includes/client/seal-top.php');
      $this->load->view('includes/client/footer-menu.php');
    ?>
    </div>
</div>
</div>
</body>
</html>