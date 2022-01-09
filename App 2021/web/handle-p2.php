<?php

#echo gettype($_REQUEST);
#print_r($_REQUEST);


$name = $_REQUEST['name'];   // here $_REQUEST is super global variable (predefined in PHP)
//echo $name;

//Hy welcome ! Mr. Aditya
printf("Hy Welcome ! Mr. %s", $name);

?>