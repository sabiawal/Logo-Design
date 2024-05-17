<?php
//if($_SERVER['HTTP_HOST']!='localhost')
//{ 
echo "suman";
$conn= mysql_connect("50dollarlogo.com","dollar_50dl","R#:fs45*&fd6^") or die(mysql_error());
$status=mysql_select_db("dollar_50dollar")or die("error in connection");
//}
//else
//{ 
//echo "maharjan";
//	$conn= mysql_connect("localhost","root","") or die(mysql_error());
//	$status=mysql_select_db("dollar_50dollar")or die("error in connection");
//}
//echo "<pre>"; 
//$my_result=mysql_query("SELECT * FROM contact_import");
//$datas = mysql_fetch_array($my_result);
print_r($_POST); //die;
?>
