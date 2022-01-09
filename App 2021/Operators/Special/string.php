<?php

// wap in php to show string concatination

$x = "life";
$y = " Partner";

var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y);
var_dump(getType($y));


$x = 10;
$y = 20;

var_dump($x.$y);
var_dump(getType($x.$y));

$result = 'The sum is = ';
echo $result.($x+$y);
// Note : PHP allows mathematical evaluation, only after using brackets() other wise non-numeric encountered error
// will be thrown


?>