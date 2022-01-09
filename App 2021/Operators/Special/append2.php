<?php

// WAP in php to make userdefined string_repeat or str_multiply() function which repeat the string n no of times
// wap in php to show string multiplication


/*$x = readline("Enter the string : ");
function string_repeat(){
	for ($i=0; $i<=9; $i++)
	{
		global $x;
		echo $x."\n";
	}
	
}

string_repeat();*/

function string_repeat($str='',$n=0){
	if($n==0){
		return $str;
	}
	$x='';
	for($i=1;$i<=$n;$i++){
		$x .= $str;
	}
	return $x;
}

$a=readline('Enter a string : ');
$n=readline('How many times to repeat : ');
echo string_repeat($a,$n);



?>