<?php  

#Wap in php to take three numbers as input and display result of sum.

$number1 = $_REQUEST['number1']; 
$number2 = $_REQUEST['number2'];
$number3 = $_REQUEST['number3'];
$sum =  $number1+$number2+$number3;
printf("The sum is: ".$sum);




?> 