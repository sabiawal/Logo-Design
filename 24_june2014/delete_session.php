<?php
session_start();
$session=$_POST["sesName1"];
$session2=$_POST["sesName2"];
//unset($_SESSION[$session]
unset($_SESSION[$session]);
unset($_SESSION[$session2]);
/*if($_POST['id']=='opt16')
{
	unset($_SESSION['select']);
}
if($_POST['id']=='opt17')
{
	unset($_SESSION['select2']);
	unset($_SESSION['select3']);
}
if($_POST['id']=='opt20')
{
	unset($_SESSION['select4']);
	unset($_SESSION['select5']);
	unset($_SESSION['select6']);
	unset($_SESSION['select7']);
	unset($_SESSION['select8']);	
							
}*/
if(isset($_POST['subtotal']))
	$_SESSION['subtotal'] = $_POST['subtotal'];
	
//$size = sizeof($_SESSION['deletedServices']);
$_SESSION['deletedServices'][$session] = $_POST['id'].'___'.$_POST['sesName1'].'___'.$_POST['sesValue1'].'___'.$_POST['sesName2'].'___'.$_POST['sesValue2'];
echo @$_SESSION[$session].'----'.@$_SESSION[$session2];
?>