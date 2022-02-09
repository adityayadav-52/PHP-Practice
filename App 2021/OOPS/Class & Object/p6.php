<?php

// wap in php tot show variable and methods in php

class Test{
	var $a = 20;
	var $b = 30;
	
	function add(){
		$a = 100;
		$b = 200;
		
		echo $a+$b.PHP_EOL;
		echo "This is add function".PHP_EOL;
		echo $this->a+$this->b;
		echo PHP_EOL;
		var_dump($this);
	}
}

$abc = new Test;
$abc->add();

var_dump($abc);



?>