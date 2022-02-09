<?php

// wap in php to show magic constant : __FILE__ and __DIR__

echo "File system path is : ".__FILE__;
echo "\n";
echo "File system path is : ".__DIR__;
echo "\n";

echo "Before folder path is : ".dirname(dirname(__DIR__));
echo "\n";
echo "Before folder path is : ".dirname(dirname(dirname(__DIR__)));

$laragon_path = dirname(dirname(dirname(__DIR__)));
echo "\n";
echo $laragon_path;
echo "\n";
echo "Diffrent path = ".$laragon_path."\\".'cloner\\';
?>