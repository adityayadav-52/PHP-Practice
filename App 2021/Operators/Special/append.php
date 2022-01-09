<?php

// wap in php to show append operation in string

$name="Aditya";
$lname=" Yadav";
$name=$name.$lname;
echo $name;

echo PHP_EOL;

$name="Aditya";
$lname=" Yadav";
$name .= $lname;

echo $name."\n";

$name .= $lname;
echo $name;

?>