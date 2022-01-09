<?php

// wap in php to show re-declaration error in constants

define('garvity',10);
echo garvity;


echo PHP_EOL;
define('GRAVITY',9.8);
echo GRAVITY;   


//re-define

/*echo PHP_EOL;
define('garvity',9.8);
echo garvity;*/

echo PHP_EOL;
printf("The value of predefined constant true : %d \n", TRUE);
define('TRUE','yes');
printf("The value of predefined constant true : %d \n", TRUE);


printf("The value of user-defineed constant gravity : %d \n",garvity);
define('gravity',9.8);
printf("The value of user-defineed constant gravity : %d \n",garvity);


?>