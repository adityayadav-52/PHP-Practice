<?php

// wap in php to show %(modulo) assignment operators

$sum = 20;
$x = 10;

$sum = $sum % $x;
echo "The value of modulo without assignment : $sum \n";

$sum = 20;
$x = 10;
$sum %= $x;
echo "The value of modulo with assignment : $sum \n";



?>