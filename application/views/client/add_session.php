<?php
session_start();
$session=$_POST["sesName1"];
$session2=$_POST["sesName2"];
//unset($_SESSION[$session]
$_SESSION[$session]=$_POST["sesValue1"];
$_SESSION[$session2]=$_POST["sesValue2"];
if($_POST['id']=='opt16')
{
	if(isset($_POST['select']))
		$_SESSION['select'] = $_POST['select'];	
}
if($_POST['id']=='opt17')
{
	if(isset($_POST['select2']))
		$_SESSION['select2'] = $_POST['select2'];	
	if(isset($_POST['select3']))
		$_SESSION['select3'] = $_POST['select3'];
}
if($_POST['id']=='opt20')
{
	if(isset($_POST['select4']))
		$_SESSION['select4'] = $_POST['select4'];
	if(isset($_POST['select5']))
		$_SESSION['select5'] = $_POST['select5'];
	if(isset($_POST['select6']))
		$_SESSION['select6'] = $_POST['select6'];
	if(isset($_POST['select7']))
		$_SESSION['select7'] = $_POST['select7'];
	if(isset($_POST['select8']))
		$_SESSION['select8'] = $_POST['select8'];	
							
}
if(isset($_POST['subtotal']))
	$_SESSION['subtotal'] = $_POST['subtotal'];
	
	
if($_SESSION['deletedServices'][$session])
	unset($_SESSION['deletedServices'][$session]);
echo $_SESSION[$session].'----'.$_SESSION[$session2];
?>