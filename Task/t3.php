<?php  


#Wap in PHP to make calculator to find, +,-,*,/

$number1 = $_REQUEST['number1']; 
$number2 = $_REQUEST['number2'];
$sum =  $number1+$number2;
$sub =  $number1-$number2;
$mul =  $number1*$number2;
$div =  $number1/$number2;
echo "The Addition is: ".$sum."<br/>"; 
echo "The Subtraction is: ".$sub."<br/>"; 
echo "The multiplication is: ".$mul."<br/>"; 
echo "The divison is: ".$div; 




?> 