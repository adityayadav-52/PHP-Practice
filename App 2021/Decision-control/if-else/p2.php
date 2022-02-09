<?php

// wap in php to find co-ordinate according to given condition 

$x = readline("Enter the x value : ");
$y = readline("Enter the y value : ");

if($x>0 and $y>0)
	echo "I'st Quardent";
else if($x>0 and $y<0)
	echo "IV'th Quardent";
else if($x<0 and $y>0)
	echo "II'nd Quardent";
else
	echo "III'rd Quardent";

?>