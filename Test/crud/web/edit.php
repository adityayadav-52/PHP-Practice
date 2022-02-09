<?php

include_once __DIR__ . '/dbconnect.php';
$id = $_GET['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];

$sql = "UPDATE student set name='{$name}', class='{$class}', address='{$address}' WHERE id='{$id}' ;";
$res = mysqli_query($conn,$sql);
if ($res>0){
    echo "Updated";
}
else{
    echo "OOPs....!";
}

?>