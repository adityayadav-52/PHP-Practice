<?php


// wap in php to show logical operators AND

$x = readline("Enter the value of x : ");

var_dump($x!=10);

var_dump(!(!($x<10) && !($x>10)));  // de-morgan theorem

?>