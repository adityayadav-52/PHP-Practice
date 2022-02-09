<?php

// wap in php to show method chaining

class Test{
	public function a(){
		echo "A function \n";
		return $this;
	}
	public function b(){
		echo "B function \n";
		return $this;
	}
	public function c(){
		echo "C function \n";
		return $this;
	}
	public function d(){
		echo "D function \n";
		return $this;
	}
}


$test = new Test();
$test->a();
$test->b();
$test->c();
$test->d();

$test->a()->b()->c()->d();
?>