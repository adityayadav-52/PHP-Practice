<?php

include_once "dbconnect.php";

$id = $_POST['id'];
$name = $_POST["name"];
$email = $_POST["email"];
$dept = $_POST["dept"];
$salary = $_POST["salary"];

$sql = "UPDATE aditya set name='{$name}', email='{$email}', department='{$dept}' WHERE id='{$id}' ;";
$res = mysqli_query($conn,$sql);
if ($res>0){
    header("Location:show.php");
}
else{
    exit("Cannot Update Record.......!");
}

?>