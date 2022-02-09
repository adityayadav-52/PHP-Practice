<?php

// wap in php to show constructor and destructor

class Test{
	
	public function __construct(){
		echo "Called constructor automatically";
		echo PHP_EOL;
	}
	
	public function wish(){
		echo "Hey!! Good morning....".PHP_EOL;
	}
	
	public function __destruct(){
		echo "Called destructor automatically";
		echo PHP_EOL;	
	}
}

$test = new Test;
$test->wish();

?>