<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query

$name = readline('Enter name :');
$email = readline('Enter Email :');
$address = readline('Enter address :');

$sql = "INSERT INTO aditya_yadav(name,email,address) values('{$name}','{$email}','{$address}');";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

?>