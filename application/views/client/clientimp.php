<?php
$id = $_SESSION['logoWebId'];
?>
  
<?php $this->load->view("includes/client/header.php"); ?>
<?php $this->load->view("includes/client/top_container.php"); ?> 
  
  <div class="main-container">
    <div class="main col2-right-layout">
    <div class="col-main client-panel">
    
<?php
$sql2="select count('designer_post_order_id')c from tbl_designers_post_orders where logo_web_id=$id";
$result2=mysql_fetch_array(mysql_query($sql2));
				
if($result2['c']>0)
{
	$sql3="select max(designer_post_order_id)m from tbl_designers_post_orders where logo_web_id=$id";
	$result3=mysql_fetch_array(mysql_query($sql3));
	
	//this is original
	//$max=sresult("select max(designer_post_order_id)m from tbl_designers_post_orders where logo_web_id=$id",m);
	
	//$result=mysql_query("select * from tbl_designers_post_orders where designer_post_order_id=$max");
	
	/*$result=mysql_query("select * from tbl_designers_post_orders where designer_post_order_id='".$result3['m']."'");
	$row=mysql_fetch_array($result);*/
	?>
        
<form method="post" name="form1" action="logo_sample.php?id=<?php echo $id ?>" class="sample">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">   
        <tr>
            <td colspan="10">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="10"><h1>Your logo samples </h1></td>
        </tr>
        
        
        <?php
        $result=mysql_query("select * from tbl_designers_post_orders where logo_web_id='".$id."' order by submit_date desc");
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {
                if($row['file_one']=='' and $row['file_two']=='' and $row['file_three']=='' and $row['file_four']=='')	
                {
                
                }
                else
                {
                $sample='yes';
                ?>
                <tr>                    
                    <td>
                    <?php
                    if($row['file_one']!="")
                    {                        
                        $thumb = PATH_SAMPLE_THUMB.$row['file_one'];                        
                        if (file_exists($thumb)) 
                        {
                            $path_thumb = PATH_SAMPLE_THUBM.$row['file_one'];   
                        } 
                        else 
                        {
                            $path_thumb = PATH_SAMPLE_THUMB_DEFAULT;
                        }                         
                        $path_sample = PATH_SAMPLE.$row['file_one'];                        
                    ?>
                    <a class="zoom" rel="group" href="<?= $path_sample; ?>"> <img src="<?= $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                    <?php
                    }
                    
                    if($row['file_two']!="")
                    {                        
                        $thumb = PATH_SAMPLE_THUMB.$row['file_two'];                        
                        if (file_exists($thumb)) 
                        {
                            $path_thumb = PATH_SAMPLE_THUBM.$row['file_two'];   
                        } 
                        else 
                        {
                            $path_thumb = PATH_SAMPLE_THUMB_DEFAULT;
                        }                         
                        $path_sample = PATH_SAMPLE.$row['file_two'];                        
                    ?>
                    <a class="zoom" rel="group" href="<?= $path_sample; ?>"> <img src="<?= $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                    <?php
                    }
                    
                    if($row['file_three']!="")
                    {                        
                        $thumb = PATH_SAMPLE_THUMB.$row['file_three'];                        
                        if (file_exists($thumb)) 
                        {
                            $path_thumb = PATH_SAMPLE_THUBM.$row['file_three'];   
                        } 
                        else 
                        {
                            $path_thumb = PATH_SAMPLE_THUMB_DEFAULT;
                        }                         
                        $path_sample = PATH_SAMPLE.$row['file_three'];                        
                    ?>
                    <a class="zoom" rel="group" href="<?= $path_sample; ?>"> <img src="<?= $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                    <?php
                    }
                    
                    if($row['file_four']!="")
                    {                        
                        $thumb = PATH_SAMPLE_THUMB.$row['file_four'];                        
                        if (file_exists($thumb)) 
                        {
                            $path_thumb = PATH_SAMPLE_THUBM.$row['file_four'];   
                        } 
                        else 
                        {
                            $path_thumb = PATH_SAMPLE_THUMB_DEFAULT;
                        }                         
                        $path_sample = PATH_SAMPLE.$row['file_four'];                        
                    ?>
                    <a class="zoom" rel="group" href="<?= $path_sample; ?>"> <img src="<?= $path_thumb ?>" width="180" height="200" style="border:1px solid #006600; padding:3px;" /></a>
                    <?php
                    }                    
                    ?></td>
                </tr>
                <?php
                }
            }
        }
        ?>
    </table>
</form>
<?php
}
else
{
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td align="center"><strong>Sorry no samples for your order till now.<br />
        <br />
        We will be in touch shortly if you have ordered this particular design service.  <br /><br />
        Thank you !!!</strong> </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <?php
        if($sample=='' and $result2['c']>0)
        {
        ?>
        <tr>
        <td colspan="10"><strong>No logo samples
        </strong></td>
        </tr>
        
        <?php
        }
        ?>	
    </table>    
    <?php
}

if($sample!='')  
{
    ?>                      
    <span class="style1">Click to Enlarge any image</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="button"	type="button" onclick="location='clientimp.php'" class="imp-submit" /><br />
    <div style="width:350px; margin:10px 0 0 230px; color:#990000; font-size:12px; ">"Attach any documents if desired (optional)"</div>
    <?php
}

?>
<script language="javascript">
	document.title=":: Client Panel"
	document.bgColor="#99FFCC"
	function logo(a)
		{
			window.open(a, "myWindow", "status = 1,resizable = 1,scrollbars=yes, width=400" )
		}
</script>
    
    <div style="clear: left;"></div>
    <?php include('includes/client/copyright.php') ?>
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