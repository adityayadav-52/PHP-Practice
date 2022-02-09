<?php

include_once "dbconnect.php";

$id = $_GET['id'];

//$sql = "";

if(!empty($id)){
    if(mysqli_query($conn,"DELETE FROM aditya WHERE id=$id")){
        header("Location:show.php");
    }
    else{
        exit("Cannot Delete Record.......!");
    }
}

?>