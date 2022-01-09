<?php

// wpa in php to show + operation in array with duplicate subscript

$x = [10,20,30,"Aadi"];
$y[0] = 'Doremon';
$y[1] = 70;
$y[2] = 90;

print_r($x);
print_r($y);
print_r($x + $y);  // $x.add($y)
print_r($y + $x);  // $y.add($x)

// subscript unique : Add
// subscript duplicate : Over-write : latest value will be stored

// in case of add subscript or indexing must be unique otherwise it will over-write.





?>