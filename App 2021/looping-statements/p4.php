<?php

// wap in php to fing reverse of the number

$no = readline("Enter the number : ");
$count = strlen($no);

$sum = 0;
while($no!=0){
	$q = $no/10;
	$rem = $no%10;
	$ef = $rem * (pow(10,$count-1));
	$sum = $sum + $ef;
	$no = $q;
	$count--;
}
echo $sum;
?>