<?php

// wap in php to find perfect no using recursion and ternary operator

$n = readline("Enter the a value : ");

if(is_perfect($n))
{
	echo "$n is perfect Number";
}
else{
	echo "$n is not perfect Number";
}

function is_perfect($n,$i=1,$sum=0){
	if($i==$n){
		return false;
	}
	else{
		if($n % $i==0){
			$sum=$sum+$i;
		}
		if($sum==$n){
			return true;
		}
		return is_perfect($n,$i+1,$sum);
	}
}



?>