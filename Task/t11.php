<?php

# Wap in PHP to take input of five subject of student, Enter his marks and show the marks of each subject with overall %.


$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$num3 = $_REQUEST['num3'];
$num4 = $_REQUEST['num4'];
$num5 = $_REQUEST['num5'];

$pr = (($num1+$num2+$num3+$num4+$num5)*100)/500;
echo "The number in first subject is : ".$num1."<br/>";
echo "The number in second subject is : ".$num2."<br/>";
echo "The number in third subject is : ".$num3."<br/>";
echo "The number in fourth subject is : ".$num4."<br/>";
echo "The number in fifth subject is : ".$num5."<br/>";
echo "The overall % is : ".$pr;


?>