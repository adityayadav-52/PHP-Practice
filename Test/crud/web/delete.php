<?php

include_once __DIR__ .'/dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM student where id='$id'";

$record = mysqli_query($conn,$sql);
if($record){
    header("Location:select.php");
}
else{
    echo "Can not delete";
}

?>