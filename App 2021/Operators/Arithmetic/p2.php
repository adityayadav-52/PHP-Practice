<?php

// wap in php to show problem with dynamic nature of (/)divide operator

$x=readline('Enter the value of x : ');
$y=readline('Enter the value of y : ');


printf("The Division = %d \n",$x/$y);
printf("The Division = %f \n",$x/$y);
echo "The Division = ";
echo $x/$y;


echo PHP_EOL;
echo "The Reminder = ";
echo $x%$y;




?>