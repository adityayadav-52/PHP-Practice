<?php

// wap in php to show odd-even using switch

$x = readline("Enter the number : ");
switch(!($x%2==0)){
	case 0:
	echo "$x is even number ";
	break;
	
	default:
	echo "$x is odd number";
	break;
}



?>