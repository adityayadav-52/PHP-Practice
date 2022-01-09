<?php

// WAP in php to show, floating point numbers

$x =011;  //octal
echo $x;
echo PHP_EOL;
#$a = 08;   // Invalid numerical literal(conversion to ocatl range not possible)
#echo $a;

$b = 10.5;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c = 10.0;
echo $c;

echo PHP_EOL;
$d = 10.0000;
echo $d;
echo PHP_EOL;
echo getType($c);
echo PHP_EOL;
var_dump($c);

echo PHP_EOL;
$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);

echo PHP_EOL;
$z=0.5;
echo $z;
echo PHP_EOL;
echo getType($z);
echo PHP_EOL;
var_dump($z);

echo PHP_EOL;
$w=.5;
echo $w;
echo PHP_EOL;
echo getType($w);
echo PHP_EOL;
var_dump($w);


echo PHP_EOL;
$p='a';
$p.=$w;
echo $p;
echo PHP_EOL;
echo getType($p);


echo PHP_EOL;
$marks=9.999999999999999;  // out of the range
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);

echo PHP_EOL;
$m=9.939993;  // within the range
echo $m;
echo PHP_EOL;
echo getType($m);
echo PHP_EOL;
var_dump($m);

echo PHP_EOL;
printf("%.2f",$m);







?>