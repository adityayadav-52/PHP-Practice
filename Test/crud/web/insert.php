<?php

include_once __DIR__ . '/dbconnect.php';

$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];

$sql = "INSERT INTO student (name,class,address) values('{$name}','{$class}','{$address}');";
if(mysqli_query($conn,$sql)){
    echo "Record Inserted with id ".mysqli_insert_id($conn);
}
else {
    echo "Inserting Error";
}

?>