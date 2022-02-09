<?php

// wap in php to show no-return type in constructor

class Test{
	
	public function __construct(){
		
		echo 'Constructor called automatically';
		echo PHP_EOL;
		return 10;
	}
}

#object creation
$test = new Test();
$test = new Test;
echo $test; // Implicitly called can note be return
$x = $test->__construct(); // Explicitly called as method can be return
echo $x;

?>