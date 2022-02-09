<?php

// wap in php to show exception handling

$x = readline('Enter first number : ');
$y = readline('Enter second number : ');
$result = 0;

try{
	echo "Block of try started.... \n";
	
	if($y==0){
	throw new Exception;
	}
	else {
		$result = $x/$y;
	}
	
	echo "Block of try ended.... \n";
}

catch(Exception $e){
	echo "Some Exception Raised ".$e->getMessage().PHP_EOL;
}

finally{
	echo "This block will be executed.... \n";
	echo "The Result = $result \n";
}


?>