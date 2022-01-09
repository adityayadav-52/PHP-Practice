<?php

// wap in php to show example of if-else
	
$a = readline("Enter the value of a : ");

if($a>2)
	{$x="hii";
}
else
	{$x="hello";
}
echo "The value of using if-else : $x \n";


$x=($a>2)?"hii":"hello"; // R-L
echo "The value of using ternary R to L : $x \n";


($a>2)?$x="hii":$x="hello";  // L-R
echo "The value of using ternary L to R : $x \n";




?>