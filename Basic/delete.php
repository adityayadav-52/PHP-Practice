<?php

require_once "dbconnect.php";

$id = $_GET['id'];

$sql = "DELETE FROM aditya WHERE id=$id ;";

if(mysqli_query($conn,$sql)){
    header("Location:show.php");
}
else{
    echo "Can not delete the record try again....!";
}


?>