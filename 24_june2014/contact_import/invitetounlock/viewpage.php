<?php session_start();error_reporting(0); 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
include("config/scriptvars.php");
$pagetitle=$_GET['pagetitle'];
$staf_inviter_esent=trim($_COOKIE['staf_inviter_esent']);
$staf_inviter_pagetitle=trim($_COOKIE['staf_inviter_pagetitle']);
if(($staf_inviter_esent>=$nrofinvites) && isset($_COOKIE['staf_inviter_esent']))
{echo("showpage");}

else
{echo("hidepage");}
?>