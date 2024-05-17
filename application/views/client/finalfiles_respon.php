
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Client Panel :: Logo Design Guarantee</title>
<base href="<?php echo base_url()?>clientpanel/"></base>
<meta name="description" content="high quality logo design and corporate identity solutions, affordable logo design, graphic design, custom logo designs, web 2.0 logos, web 2.0 logo design, logo design, company logos, small business logos, and corporate logos at reasonable prices."/>
<meta name="keywords" content="cheap logo design, cheap logos, affordable logos, affordable logo design, logos, logo design, corporate logos, custom logo design, custom logo design, web 2.0 logo design, logo design services, logo design website, web 2.0 logos, logo designers, logo, logo companies,"/>
<!--<link href="<?php echo base_url()?>assets/css/import.css" rel="stylesheet" type="text/css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/layout.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/style.css" />

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/clientpanel.css" /> -->



<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
	
    <link href="<?php echo base_url()?>assets/css/basket.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
.rwd-table {
margin: 1em 0;
min-width: 300px;
}
.rwd-table tr {
border-top: 1px solid #ddd;
border-bottom: 1px solid #ddd;
}
.rwd-table th {
display: none;
}
.rwd-table td {
display: block;
}
.rwd-table td:first-child {
padding-top: .5em;
}
.rwd-table td:last-child {
padding-bottom: .5em;
}
.rwd-table td:before {
content: attr(data-th) ": ";
font-weight: bold;
width: 6.5em;
display: inline-block;
}
@media (min-width: 480px) {
.rwd-table td:before {
display: none;
}
}
.rwd-table th, .rwd-table td {
text-align: left;
}

@media (min-width: 480px) {
.rwd-table th, .rwd-table td {
display: table-cell;
padding: .25em .5em;
}
.rwd-table th:first-child, .rwd-table td:first-child {
padding-left: 0;
}
.rwd-table th:last-child, .rwd-table td:last-child {
padding-right: 0;
}

}




@media (max-width: 980px){
   #black-bar-footer li {
  
    text-align: center;
}
}

@media (max-width: 360px){
.rwd-table tr {
display: block !important;
margin-bottom: 34px !important;
}
.rwd-table td:first-child {
background-color: #ddd !important;
}



.border-new {
    border-width: 0;
    margin-top: 0px;
    padding-top: 0px;
    border: none !important;
    }




.rwd-table tr {
  border-bottom: medium none;
  border-top: medium none;
  margin-bottom: 0px !important; 

}


}

</style>
    <style type="text/css">
	h2 {
    font: 16px/20px Arial,Helvetica,sans-serif !important;
}

.newprints h2
{
	font-weight: 700 !important;
margin: 15px 0px 10px !important;
font-size: 20px !important;
}

.newprints h1
{
	line-height:30px;
	margin-bottom:20px;
}

.correctfont
{font-size:15px !important;
line-height:25px !important;
padding-bottom:10px !important;
}
.col-main{
	padding:0 !important;
}
    </style>
<!--[if lt IE 8]>
<script src="<?php echo base_url()?>js/IE8.js"></script>
<![endif]-->


<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_client/newclientpanel.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

</head>
<body >


<?php include 'menu.php' ; ?>

    






      
    
    
<div class="container border-new">
<div class="row">
<div class="col-md-12">
<!-- <div class="col-md-12 hidden-xs"> -->
<div class="">
<!-- <div class="table-responsive"> -->
<table class="table rwd-table"  border="0" align="center" cellpadding="0" cellspacing="2">
<!-- <tr >
<td colspan="14" align="left">&nbsp;</td>
</tr>

<tr >
<td colspan="14" align="center">&nbsp;</td>
</tr> -->
<tr bgcolor="#99CCFF">
<th width="10%" align="center"><span class="style3">Submited On </span></th>
<th align="center"><span class="style3">.AI, .F11, .CDR </span></th>
<th align="center"><span class="style3">.EPS</span></th>
<th align="center"><span class="style3">.JPG</span></th>
<th align="center"><span class="style3">.PNG</span></th>
<th align="center"><span class="style3">.PSD</span></th>
<th align="center"><span class="style3">.TIF</span></th>
<th align="center"><span class="style3">.GIF</span></th>     

<th align="center">Stationary Files </th>
<th align="center"><span class="style3">ZIP FILE (LOGO)</span> </th>
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
                <td data-th="DATE "><?php 
$submitDate=strtotime($rown['submit_date']);
echo date("D d M Y H:i",$submitDate); ?></td> 
                    <td data-th=".AI, .F11, .CDR "><?php if (array_key_exists("ai",$logoArray) or array_key_exists("f11",$logoArray) or array_key_exists("cdr",$logoArray)){
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
                    <td  data-th=".EPS "><?php if (array_key_exists("eps",$logoArray)){                      
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['eps']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th=".JPG "><?php if (array_key_exists("jpg",$logoArray) or array_key_exists("jpeg",$logoArray)){                       
                    if (array_key_exists("jpg",$logoArray))
                            $idx = 'jpg';
                        else if(array_key_exists("jpeg",$logoArray))
                            $idx = 'jpeg';
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray[$idx]; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th=".PNG "><?php if (array_key_exists("png",$logoArray)){                      
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['png']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th=".PSD "><?php if (array_key_exists("psd",$logoArray)){                      
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['psd']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th=".TIF "><?php if (array_key_exists("tif",$logoArray)){                      
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['tif']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th=".GIF "><?php if (array_key_exists("gif",$logoArray)){                      
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $logoArray['gif']; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th="Stationary Files  "><?php if (!empty($stationary)){                     
                        ?>
                    <a href="<?php echo base_url()?>client_panel/finalStationary/<?php echo $rown['final_id']?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                    <td data-th="ZIP FILE (LOGO) "><?php if (array_key_exists("zip",$logoArray) or array_key_exists("rar",$logoArray)){                        
                    if (array_key_exists("zip",$logoArray))
                        $zipfile = $logoArray['zip'];
                    else
                        $zipfile = $logoArray['rar'];
                        ?>
                    <a href="http://50dollarlogo.com/admin_panel/final/<?php echo $zipfile; ?>" target="_blank">
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  /></a>
                    <?php } else {echo 'Empty';}?></td>
                                      
                </tr>
                <?php
               
            
                ?>
                <?php 
                  
            }
            else
            {

?>

<tr>
<td><?php 
$submitDate=strtotime($rown['submit_date']);
echo date("D d M Y H:i",$submitDate); ?></td>

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
<img src="http://50dollarlogo.com/admin_panel/images/load.png" alt="Download file" border="0"  />               </a>
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

</tr>

<?php           

            }
}
}
else
{
    
?>

<tr>
<td colspan="14" align="center" style="color:#A9A9A9;">&nbsp;</td>
</tr>
<tr bgcolor="#99CCFF">

<td colspan="14" align="center" style="color:#777;"><strong>No final files has been submitted till now</strong></td>
</tr>
<tr>
<td colspan="14" align="center" style="color:#A9A9A9;">&nbsp;</td>
</tr>

<?php
}

?>

</table>
</div>
</div>


<!--  <div class="col-md-12 visible-xs">
<table class="table table-bordered table-condensed" cellpadding="5">
    <thead>
        <tr bgcolor="#99CCFF">
            <th>File Types</th>
            <th>Download </th>
            <th>Submitted on :</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>.AI, .F11, .CDR</td>
            <td><a href="<?php echo base_url()?>assets/images/br1.jpg">example file</a></td>
            <td>Wednesday Feb 17,2016 </td>
            
        </tr>
        <tr>
            <td>.EPS</td>

  <td><a href="<?php echo base_url()?>assets/images/br1.jpg">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
               
            <td>.JPG</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
            
            <td>.PNG</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
             
            <td>.PSD</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
             
            <td>.TIF</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
              
            <td>.GIF</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>
        <tr>
          
            <td>Stationary Files </td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>

        <tr>
          
            <td> 	ZIP FILE (LOGO)</td>
            <td><a href="">example file</a></td>
              <td>Wednesday Feb 17,2016 </td>
        </tr>

        <tr>
          
        </tr>	
    </tbody>
</table>
</div>  -->
</div>    
    </div>

<?php include "footer.php" ;?>  


</body>
</html>