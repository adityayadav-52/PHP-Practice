<?php

// wap in php to sort array with 2 elements

$a = [30,10];

$temp = $a[0];
$a[0] = $a[1];
$a[1] = $temp;

print_r($a);