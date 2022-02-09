<?php

include_once __DIR__ . '/dbconnect.php';

$name = $_POST["name"];
$class = $_POST["class"];
$address = $_POST["address"];

$sql = mysqli_query($conn,"INSERT INTO student(name,class,address) values('$name','$class','$address')");
if($sql){
    //echo "Insert done".mysqli_insert_id($conn);
    header("Location:show.php");
}
else{
    echo "Insert error";
}

?>
