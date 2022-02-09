<?php

// wap in php to show instance variable and instance

class Test{
	var $a = 10;  // instance variable
	var $b = 20;  // instance variable
	var $c = 30;  // instance variable
}

$x = 20;

$test = new Test();
var_dump($test);   // instance

var_dump($test instanceof Test);  // instanceof operator : used to check if the given object is instance of Test or not
var_dump($x instanceof Test);

?>