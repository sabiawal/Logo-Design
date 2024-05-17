<?php 
//error_reporting(0);

$conn= mysql_connect("localhost","dollar_imports","91429235") or die(mysql_error());
$status=mysql_select_db("dollar_import_contact")or die("error in connection");
//echo "database connected"; die;

$emails = $_POST['emails'];
$explode = explode(',',$emails);
//print_r($explode); die;

for($i=0;$i<count($explode);$i++){
echo '<li id="addrs'.$i.'" class="sumans"><input name="addr_addemail1[]" id="checked_datas'.$i.'" type="text" value='.$explode[$i].' disabled="disabled"></li>';
}

?>
	
