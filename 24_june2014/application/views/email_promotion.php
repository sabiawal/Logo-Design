<?php
date_default_timezone_set('GMT'); // GMT time for all site, just beacuseof promotional code date in GMT in promotional_codes table 
$order_id   = $_GET['order_id'];
$p_code     = $_GET['p_code'];
if($order_id){
    if($p_code){
        $q  = "select discounted_logo_id as order_id from promotional_codes where `discounted_logo_id`= '$order_id' and `pc_code`= '$p_code' and `auto_generated`='1'";
        if(mysql_num_rows(mysql_query($q))>0){
            $row = mysql_fetch_object(mysql_query($q));
            echo $row->order_id;
            //print_r($row);
        }
        else{
            die('Invalid Link');
        }
    }    
    else{
        echo 'no promotional';
    }
}
else{
    die('Invalid Link');
}