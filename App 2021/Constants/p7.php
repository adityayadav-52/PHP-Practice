<?php

// wap in php to show constant are global


define('GRAVITY','10');
printf("The value of GRAVITY at global scope : %d \n",GRAVITY);
$gravity = 9.8;
printf("The value of gravity at global scope : %d \n",$gravity);

function test()
{

	printf("The value of GRAVITY at local scope : %d \n",GRAVITY);
	
	printf("The value of gravity at local scope : %d \n",$gravity);
	
}

test();


?>