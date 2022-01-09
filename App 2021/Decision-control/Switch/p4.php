<?php

// wap in php to show consonents and vowels with multicase

$x = readline("Enter the character : ");

(getType($x=='string')and strlen($x)==1 and ctype_alpha($x))? : exit('Invaliid value supplied');
switch(strtolower($x)){
	case 'a':
	case 'e':
	case 'i':
	case 'o':
	case 'u':
	echo "$x is vowel";
	break;
	
	default:
	echo "$x is consonent";
}


?>