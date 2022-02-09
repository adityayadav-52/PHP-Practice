<?php

// wap in php to show, object making

class Test{
	var $a = 10;
	var $b = 10;
	var $c = 10;
}

$test = new Test();
var_dump($test);
$test = Test();
var_dump($test);
$test = 10;

function Test(){
	return "Hey from test function";
}


?>