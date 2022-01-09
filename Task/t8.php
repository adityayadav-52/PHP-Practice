<?php

# Wap in PHP to find remainder of given two number when a/b using % operator.


$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];

$r = $num1%$num2;
echo "The reminder is : ".$r;


?>