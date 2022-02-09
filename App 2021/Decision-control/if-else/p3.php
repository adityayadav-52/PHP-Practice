<?php

// wap in php to show sequential nature of else-if ladder

$case = readline("Enter the case value : ");
/*if ($case==1)
	echo "Case 1 is executing \n";
else if ($case==2)
	echo "Case 2 is executing \n";
else if ($case==3)
	echo "Case 3 is executing \n";
else if ($case==4)
	echo "Case 4 is executing \n";
else if ($case==5)
	echo "Case 5 is executing \n";
else
	echo "Case default is executing \n";
*/

// if we not put else in this program it behaviour like switch
if ($case)
	echo "Case 1 is executing \n";
if ($case)
	echo "Case 2 is executing \n";
if ($case)
	echo "Case 3 is executing \n";
if ($case)
	echo "Case 4 is executing \n";
if ($case)
	echo "Case 5 is executing \n";
else
	echo "Case default is executing \n";
?>