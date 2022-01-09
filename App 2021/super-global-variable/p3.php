<?php

//  WAP to find the sum of all the arguments supplied from coommand line and average also.

print_r($argv);
$sum =0;
$avg =0;
for($i=1; $i<$argc; $i++)
{
	$sum = $sum + (int)$argv[$i];
}
printf("The sum = %d ",$sum);
echo PHP_EOL;
//$avg = $sum/($argc-1);
printf("The average = %d ",$sum/($argc-1));

?>