<?php

// wap in php to show exception handling

$x = readline('Enter first number : ');
$y = readline('Enter second number : ');

try{
	echo "Block of try started.... \n";
	
	$result = $x/$y;
	
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