<?php

// wap in php to show non-case-sensitive constants


echo true;
echo PHP_EOL;

echo TRUE;
echo PHP_EOL;

echo True;
echo PHP_EOL;

echo TrUe;
echo PHP_EOL;

var_dump(true==TRUE);
var_dump(True==TRUE);
var_dump(True==TrUe);




?>