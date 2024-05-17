<?php @session_start();
@error_reporting(0);
@ini_set("display_errors", 0);
$isfrommail=false;
if (eregi('INBOX', strtoupper($_SERVER['HTTP_REFERER'])))
{
	$isfrommail=true;
}
if(!isset($_SESSION['reff']) && $isfrommail=false){$_SESSION['reff']=trim($_SERVER['HTTP_REFERER']);}
if(trim($_SESSION['reff'])==""){$_SESSION['reff']=trim($_SERVER['HTTP_REFERER']);}


include_once("config/bdvars.php"); 
include_once("config/scriptvars.php"); 
include_once("includes/functions.php");  //script functions
include_once("includes/bdconnect.php");   //bd connect functions
is_banned_ip($_SERVER['REMOTE_ADDR']); //check banned
set_time_limit(0);
?>
