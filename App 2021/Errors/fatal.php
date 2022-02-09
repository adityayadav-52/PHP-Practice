<?php

// wap in php to show fatal error
// Since we can not re-declare the singnature(or definition) of function since it generates the, Fatal Error, 	hence it is possible at least in php for the current version to support method overloading

function test(){
	echo "Hello from test function".PHP_EOL;
}
test();

//Re-declaration of function

function test(){
	echo "Hello from test function".PHP_EOL;
}


?>