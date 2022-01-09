<?php

// wap in php to show constant are global inside class


define('GRAVITY','10');
printf("The value of GRAVITY at global scope : %d \n",GRAVITY);
$gravity = 9.8;
printf("The value of gravity at global scope : %d \n",$gravity);

class Test
{
	private $g;   //instance variable
	private $G;   //instance variable
	
	public function __construct()       // constructor 
	{
		$this->G=GRAVITY;
		$this->g=$gravity;   // local variable $gravity ----> assign g
		printf("The value of GRAVITY inside method : %d \n",GRAVITY);  // constant
		printf("The value of gravity inside method : %d \n",$gravity);   // undefined variable g
		printf("The value of gravity using g for class : %d \n",$this->g);   // undefined variable g
		printf("The value of gravity using G for class : %d \n",$this->G);
	}
}
$test = new Test();

?>