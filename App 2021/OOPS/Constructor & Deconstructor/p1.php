<?php

// wap in php to show constructor

class Test{
	
	public function __construct(){  // explicit constructor
		echo "Test method called";
	}
}

class test{   // implicit constructor
	
}
$test = new Test;
$demo = new test;

?>