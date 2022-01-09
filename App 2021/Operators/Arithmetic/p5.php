<?php

// wap in php to find the reminder without % operator
//using sprintf()


$x=readline('Enter the value of x : ');
$y=readline('Enter the value of y : ');

$Q = $x/$y;
$A=sprintf("%d \n",$Q);
$B=sprintf("%f \n",$Q);
$C=sprintf("%.2f \n",$Q);
echo $A;
echo $B;
echo $C;


?>