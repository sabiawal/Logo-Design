<?php 
ob_start();
require dirname(__FILE__).'/lib/Yahoo.inc';
YahooSession::clearSession();
//echo '<pre>'; print_r($_SESSION); die;
header("Location: http://www.1logo.biz/ldg_new/client_panel/send_to_friends");
ob_flush();
?>