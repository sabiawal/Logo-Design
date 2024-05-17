<?php 
//session_start();
include 'db_connect.php';
mysql_query("truncate sender_details");
header("Location: http://www.logodesignguarantee.com/client_panel/send_to_friends");
?>