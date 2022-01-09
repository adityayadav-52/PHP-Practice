<?php

//wap in php to show empty variable

$x='';
var_dump($x);

var_dump($x=='');

var_dump($x=="");

var_dump($x==='');

var_dump($x==="");

var_dump(empty($x));

var_dump(empty(''));

var_dump(empty(""));
$y="";
var_dump($y);



var_dump($x==$y);

var_dump($x===$y);


echo 'Be aware between empty and "<space>"';
echo PHP_EOL;
printf("The value from empty :",'');
echo PHP_EOL;
printf("The value from empty :",' ');
echo PHP_EOL;
var_dump(''==' ');
var_dump(''===' ');

echo '';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen(''); 

echo ' ';
echo PHP_EOL;
echo getType(' '); 
echo PHP_EOL;
echo strlen(' '); 
echo PHP_EOL;
echo ord('');  //ASCII
echo PHP_EOL;
echo ord('a');  //ASCII




?>