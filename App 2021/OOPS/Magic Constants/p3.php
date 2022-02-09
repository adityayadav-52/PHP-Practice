<?php

// wap in php to show magic constant : __FUNCTION__ and __CLASS__ and __METHOD__

class Tv{
	public function display(){
	echo "Called from display class is : ".__CLASS__." and method from  = ".__METHOD__;
	echo PHP_EOL;
	echo "Called from display method : ".__CLASS__." : ".__FUNCTION__;
	echo PHP_EOL;
	echo "The method name from class Tv : ".__CLASS__." :: ".__FUNCTION__;
	echo PHP_EOL;
	var_dump((__CLASS__." :: ".__FUNCTION__)==__METHOD__);
	}
}


function display(){
	echo "Called from display  function : ".__METHOD__;
	echo PHP_EOL;
	echo "Called from display  function : ".__METHOD__;
	echo PHP_EOL;
}
display();
$class = new Tv;
$class->display();
?>