<?php

// wap in php to show static context

class Test{
	public $a = 300;  #non-statict context
	public static $b = 400;  #static context
	
	public function get_a(){  #non-statict method
		echo "The value from non-statict context = {$this->a} \n";
		echo "The value from Non Context = ";
		// echo Test::a; # error due to accessing non-statict a from static context
		echo PHP_EOL;
	}
	
	public function get_b(){  #static method
		// echo "The value from Non Static context {$this->a} \n"
		echo PHP_EOL;
		echo "The value from static context = ";
		echo Test::$b;
		// echo $this->b; #error due to $this object context for static context b
	}
}

$test = new Test();
$test->get_a();
//Test::get_a();# error get_a scope non static it cannot be called by class context
$test->get_b();
Test::get_b();
?>