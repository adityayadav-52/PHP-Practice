<?php

// wap in php to show setter and getter
// setter : @method
// getter : @method

class Test{
	public $a = 10;  #a variable public : are global variable
	public $b = 20;  #a variable public : are global variable
	var $c = 30;  #a variable public : are global variable
	
	public function setValue($a,$b,$c){
		$this->a = $a; // local
		$this->b = $b; // local
		$this->c = $c; // local
	}
	
	public function getValue(){
		echo "The value of a from getter = {$this->a} \n";
		echo "The value of b from getter = {$this->b} \n";
		echo "The value of c from getter = {$this->c} \n";
	}
}

$test = new Test();

echo "The value of member a before setter = {$test->a} \n";
echo "The value of member b before setter = {$test->b} \n";
echo "The value of member c before setter = {$test->c} \n";

$test-> setValue(100,200,300);  //setter

echo "The value of member a after setter = {$test->a} \n";
echo "The value of member b after setter = {$test->b} \n";
echo "The value of member c after setter = {$test->c} \n";

$test-> getValue();  //getter


?>