<?php


class Test{
	public function __construct(){
		echo "Constructor running \n";
	}
}
$test = new Test;
$test1 = new Test();
$test->__construct();
$test1->__construct();




?>