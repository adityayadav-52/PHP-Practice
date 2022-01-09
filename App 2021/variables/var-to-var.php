<?php

// wap in php to show var-to-var reference

$x =10;   //normal variable
echo $x;   //normal variable


echo PHP_EOL;
$y ='aadi';        //string value
echo $y;

echo PHP_EOL;
$aadi =50;
echo $aadi;

echo PHP_EOL;
$z = 'Aditya';
$$z = 500;
echo 'The value of aditya = '.$Aditya;

echo PHP_EOL;
$w ='_100';
$$w ='king';
printf("The value of w = %s \n",$w);
printf("The value of king = %s \n",$$w);
printf("The value of _100 = %s \n",$_100);

$exp ='x';
echo $exp;
echo PHP_EOL;
echo getType ($exp);
echo PHP_EOL;
echo $$exp;

echo PHP_EOL;

$student['name']='Aditya';
$student['class']='Btech';

foreach($student as $key => $value)
{
	$$key = $value;
	printf("%s : %s \n",$key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;

echo PHP_EOL;

echo 'Without using variable to variable';
echo PHP_EOL;

$car['name']='BMW';
$car['class']='A Class';
$car['price']='50.8 Lack';

printf("The name of car : %s \n",$car['name']);
printf("The class of car : %s \n",$car['class']);
printf("The price of car : %s \n",$car['price']);

echo PHP_EOL;
extract($car);

printf("The name of car : %s \n",$name);
printf("The class of car : %s \n",$class);
printf("The price of car : %s \n",$price);





?>