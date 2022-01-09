<?php

// wap in php to show raw strings.

echo 'This is a simple raw string';
echo PHP_EOL;

echo " This is a simple processed string";
echo PHP_EOL;

// escape sequence


echo 'This is a \t tabbed line';
echo PHP_EOL;


echo "This is a \t tabbed line";
echo PHP_EOL;

echo 'This is a \n mew line';
echo PHP_EOL;


echo "This is a \n new line";
echo PHP_EOL;

// with variables

$name = 'Aadi';
$class = 'Btech';
$roll_no = 101;

echo 'name = $name, class = $class, rollno = $roll_no, inside single quote';
echo PHP_EOL;

echo "name = $name, class = $class, rollno = $roll_no, inside double quote";
echo PHP_EOL;



?>