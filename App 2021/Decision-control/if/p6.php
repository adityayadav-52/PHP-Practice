<?php

// wap in php to find odd and even usinf single if

$n= readline("Enter the number : ");

/*   1st way

$array = ['even','odd'];
echo $array[$n%2];
*/
/*   2nd way

$output='odd';
if($n%2==0){
	$output='even';
}
echo $output;
*/
// 3rd way	

($n%2) or exit('Number is Even');
exit('Number is Odd');

?>