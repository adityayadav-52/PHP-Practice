<?php

#step1 : make connection 
include __DIR__ . '/dbconnect.php';

#step2 : prepare the query

$name = readline("Enter name : ");
$email = readline("Enter email : ");

$sql = "INSERT INTO emp(name,email) values ('{$name}','{$email}');";


#step3 : Exectue the query or fire the query
if(mysqli_query($conn,$sql)){
	echo "Record Inserted....!".mysqli_insert_id($conn);
}
else{
	echo "Inserted Error ".mysqli_error($conn);
}




?>