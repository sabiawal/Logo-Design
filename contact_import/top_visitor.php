<?php error_reporting(0);
if(!isset($_SESSION['reff']) && $isfrommail=false){$_SESSION['reff']=trim($_SERVER['HTTP_REFERER']);}
include("config/bdvars.php"); 
include("config/scriptvars.php"); 
include("includes/functions.php");  //script functions
include("includes/bdconnect.php");   //bd connect functions
set_time_limit(0);
?>
