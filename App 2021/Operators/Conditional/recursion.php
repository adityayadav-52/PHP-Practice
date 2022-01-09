<?php

// wap to find perfect no in php
 
$a = readline("Enter the a value : ");
$sum = 0;

for($i=1; $i<$a; $i++)
{
	if($a%$i==0){
		$sum += $i; 
	}
}
if($sum==$a){
	echo "Number is perfect";
}
else{
	echo "Number is not perfect";
}


?>