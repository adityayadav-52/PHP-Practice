<?php

// wap in php to show non-static keyword

function increments(){
	$i = 0;
	echo 'Befor incrementing...'.PHP_EOL;
	echo $i;
	echo PHP_EOL;
	$i++;
	echo 'After incrementing...'.PHP_EOL;
	echo $i;
	echo PHP_EOL;
}

increments();
increments();
increments();
increments();


?>