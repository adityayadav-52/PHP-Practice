<?php

//WAP in php to handle Associative Array using foreach loop 

$data = [
[
'id'=>'1',
'name'=>'Aditya',
'class'=>'Btech',
],
[
'id'=>'2',
'name'=>'Deepak',
'class'=>'Btech',
],
[
'id'=>'3',
'name'=>'Manish',
'class'=>'Btech',
],
];

foreach($data as $user){
	echo "------------------------ \n";
	echo "user id = {$user['id']} \n";
	echo "user name = {$user['name']} \n";
	echo "user class = {$user['class']} \n";
}

?>