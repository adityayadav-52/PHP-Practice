<?php

// wap in php to show unique values

$a = [10,10,10,10,10,20,30,30,30,40,40,40,50,50];

//print_r(array_unique($a));

$arr = [];
for($i=0; $i<count($a); $i++){
	if(!in_array($a[$i],$arr)){
		$arr[] = $a[$i];
	}
}

//print_r($arr);


$keys = [];
for ($i=0; $i<count($a); $i++){
	$keys[$a[$i]] = $a[$i];
}
print_r($keys);

//print_r(array_flip(array_flip(array_values($a))));
$arr3 = array_flip(array_flip(array_values($a)));
print_r($arr3);