<?php

#step1 : make connection 
include __DIR__ . '/dbconnect.php';

#step2 : prepare the query

$id = readline("Enter userid : ");

$sql = "delete from emp where id = '{$id}';";


#step3 : Exectue the query or fire the query
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo "Record Deleted Successfully";
	}
	else{
		echo "Cannot delete Either record does not exist or id is wrong";
	}
}
else{
	echo "Record not Deleted".mysqli_error($conn);
}


?>