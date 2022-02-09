<?php

//p2.php

include_once 'p1.php';
include_once 'p1.php';
include_once 'p1.php';
include_once 'p1.php';


echo PHP_EOL;
echo "Code from p2.php";

$b = 100;
echo PHP_EOL;
echo "A = ".$a;
echo PHP_EOL;
echo "B = ".$b;
echo PHP_EOL;

test();
test();
test();

print_r(get_included_files());


?>