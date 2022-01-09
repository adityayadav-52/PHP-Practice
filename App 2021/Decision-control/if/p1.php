<?php

// wap in php to show conditional block

$n=readline("Enter the value of n : ");
echo "first line ".__LINE__." is executing \n";
if($n==5){
	echo "another line ".__LINE__." is executing \n";  // decision controlled statement
}
echo "another line ".__LINE__." is executing \n";
echo "last line ".__LINE__." is executing \n";


?>