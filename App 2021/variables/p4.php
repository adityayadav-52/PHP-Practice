<?php

//WAP in php to show boolean false stored in variant

$x=false;
echo $x;   //nothing
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x);  //bool(false)
echo PHP_EOL;
echo json_encode($x);  //raw formate

echo PHP_EOL;
echo 'On comparing the values we get : ';
echo PHP_EOL;
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump (0==false);
echo PHP_EOL;
var_dump (0==FALSE);  // type is optional match content
echo PHP_EOL;
var_dump (0==FALSE); // implicit type conversion because of PHP is stores dynamic nature
echo PHP_EOL;
var_dump (0===FALSE);  // content match and type match


echo 'Working with Printf and boolean values ';
echo PHP_EOL;
printf("The value of string : %s","Aditya");
echo PHP_EOL;
printf("The value of int as int : %d",10);
echo PHP_EOL;
printf("The value of true as bool : %b",true);
echo PHP_EOL;
printf("The value of 1 as itn : %d",1);
echo PHP_EOL;
printf("The value of true as int : %d",true);
echo PHP_EOL;
printf("The value of true as string : %s",true);
echo PHP_EOL;
printf("The value of 1 as string : %s",1);
echo PHP_EOL;
printf("The value of 0 as string : %s",0);
echo PHP_EOL;
printf("The value of bool false as string : %s",false);
echo PHP_EOL;
printf("The value of bool false as bool : %b",false);
echo PHP_EOL;
printf("The value of bool false as integer : %d",false);
echo PHP_EOL;
?>