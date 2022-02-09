<?php

// wap in php to show no-return type in parameterised constructor

class Test{
	
	public function __construct($a){
		
		echo 'Constructor called automatically';
		echo PHP_EOL;
		return $a+100;
	}
}

#object creation
$test = new Test(200);
// echo $test; // Implicitly called can note be return
$x = $test->__construct(200); // Explicitly called as method can be return
echo $x;

?>