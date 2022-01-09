<?php

// wap in php to find the reminder without % operator
//using type casting


$x=readline('Enter the value of x : ');
$y=readline('Enter the value of y : ');

$Q = $x/$y;
//echo getType($Q);
//echo PHP_EOL;
$Q = intval($x/$y);
//echo getType($Q);
//echo PHP_EOL;
echo $Q;
$rem = $x-($Q*$y);
echo PHP_EOL;
echo $rem;


?>