<?php
    $db_host = "localhost";
    $db_name = "dollar_50dollar";
    $db_user = "dollar_50dl";
    $db_password = "R#:fs45*&fd6^";
    
    //echo 'suman mahaarjan';
    mysql_connect($db_host,$db_user,$db_password) or die("error in connection"); 
    mysql_select_db($db_name)or die("Could not connect to database"); 
		
 ?>