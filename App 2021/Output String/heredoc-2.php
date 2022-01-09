<?php

// wap in php to show heredoc string 

$a = 100;
echo <<<aditya
	this is a Here Doc string, $a \n
"this is again new line of string "$a""
'This string is inside $a single quotes \t tabbed' = $a
aditya;


$a = 100;
echo <<<"BLOCK"
	this is a Here Doc string, $a \n
"this is again new line of string "$a""
'This string is inside $a single quotes \t tabbed' = $a
BLOCK;




?>