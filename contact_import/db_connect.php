<?php
    $db_host = "50dollarlogo.com";
    $db_name = "dollar_50dollar";
    $db_user = "dollar_n50dol";
    $db_password = "@1HM:f#dw_r{[";
		
   if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'):
        $db_host = "localhost";
        $db_name = "50_backup";
        $db_user = "root";
        $db_password = "";   
    endif;

    //echo 'suman mahaarjan';
    mysql_connect($db_host,$db_user,$db_password) or die("error in connection"); 
    mysql_select_db($db_name)or die("Could not connect to database"); 