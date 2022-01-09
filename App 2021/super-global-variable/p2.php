<?php

// WAP in php to check a array is homogenous or hetrogenous 
// WAP in php to show argv is always homogenous

//print_r($argv);

function is_homo($array=[])
{
	$key_type = getType($array[0]);
	for($i=0; $i<count($array); $i++)
	{
		//echo getType($array[$i]);
		//echo PHP_EOL;
		if($key_type===getType($array[$i]))
		{	
		}
		else
		{
			return false;
		}
	}
	return true;	
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,30,40]));
var_dump(is_homo([10,10.5,'true','false','ravi','aditya']));
var_dump(is_homo(['pagal','alias','aditya','yadav']));
?>