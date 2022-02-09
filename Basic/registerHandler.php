<?php

require_once "dbconnect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$dept = $_POST['dept'];
$salary = $_POST['salary'];

$sql = "INSERT INTO aditya(name,email,department,salary) values ('{$name}','{$email}','{$dept}','{$salary}');";

if(mysqli_query($conn,$sql)){
    header("Location:show.php");
}
else{
    echo "Insert Error...! Try Again......";
}

?>