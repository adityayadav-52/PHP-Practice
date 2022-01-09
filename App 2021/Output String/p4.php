<?php

// wap in php to show difference b/w raw and processed in the combination 

#echo ''''; // invalid
#echo """"; // invalid

// escape characters

echo 'The line is \n single tabbed and "\t double" tabbed';

echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tabbed";


// with variable
echo PHP_EOL;
$a = 100;

echo 'The value of $a is : "$a"';

echo PHP_EOL; 
echo "The value of $a is : '$a'"; 

echo PHP_EOL; 
echo "The value of \$a is : '$a'"; 

echo PHP_EOL; 
echo 'The value of $a'. " is : '$a'"; 




?>