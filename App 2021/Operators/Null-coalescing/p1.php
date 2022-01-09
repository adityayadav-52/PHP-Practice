<?php

// supress operator(@)
// never use @ operator because debugging is impoortant
$x = 20;
echo "The value of x : $x";

echo PHP_EOL;
echo "The value of y : ".@$y;

$z = 10;
$z=isset($z)?$z:null;
echo PHP_EOL;
echo "The value of z using ternary operator : ".$z;
var_dump($z);



$z=isset($z)??null;
echo PHP_EOL;
echo "The value of z using nullcoalescing : ".$z;
var_dump($z);

$p = (5>2)??null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'P if running by nullcoalescing ';	
}
else{
	echo 'P else running by nullcoalescing';
}


$p = (5<2)?'':null;
echo PHP_EOL;
var_dump($p);

if($p){
	echo 'P if running by ternary';
}
else{
	echo 'P else running by ternary';
}


?>