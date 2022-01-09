<?php

# Wap in PHP to make take p,r,t find SI.


$pa = $_REQUEST['pa'];
$rate = $_REQUEST['rate'];
$time = $_REQUEST['time'];

$SI  = ($pa*$rate*$time)/100;
echo "Simple Interest is : ".$SI;


?>