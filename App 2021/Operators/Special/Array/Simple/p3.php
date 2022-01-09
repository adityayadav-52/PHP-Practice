<?php

// wpa in php to show + operation in array with duplicate subscript

$x = [10,20,30,"Aadi"];
$y[4] = 100;
$y[5] = 70;
$y[6] = 90;
$y[7] = 80;


echo "The count of x : ".count($x);
echo PHP_EOL;
echo "The count of y : ".count($y);
echo PHP_EOL;

var_dump(count($x)==count($y));



print_r($x + $y);  // $x.add($y)
print_r($y + $x);  // $y.add($x)

var_dump(($x + $y)==($y + $x));  // equal
var_dump(($x + $y)!=($y + $x));  // unequal
var_dump(($x + $y)===($y + $x));  // equal not identical
var_dump(($x + $y)===($x + $y));  // identical
var_dump(($y + $x)===($y + $x));  // identical


var_dump(($y + $x)!==($x + $y));  // not identical

?>