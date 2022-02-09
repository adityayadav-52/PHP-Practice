<?php
#step1 : make connection
include __DIR__ . '/dbconnect.php';

#step2 : prepare the query

$id = readline("Enter the userid : ");
$name = readline("Enter the name  : ");
$email = readline("Enter the email  : ");

$sql = "update emp set name = '{$name}',email = '{$email}',where id = '{$id}';";

#step3 : Execute the query or fire the query

if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn) > 0){
		echo "Record updated successfully";
	}
	else{
		echo "Record cannot be updated";
	}
}
else{
	echo "Record not updated error = ".mysqli_error($conn);
}

?>