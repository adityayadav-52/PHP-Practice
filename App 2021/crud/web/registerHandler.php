<?php

include_once __DIR__ . '/functions.php';
include_once __DIR__ . '/query-builder/Query.php';

$name = post('name');
$email = post('email');
//echo $name;
//echo $email;

$query = new Query();
if($query->insert('emp',[
    "name"=>$name,
    "email"=>$email,
]))
{
    //echo "data inserted with pk = ".$query->getId();
    header("Location:".url('show.php?status=record-added'));
}
else{
    echo "Insert Error....";
}


?>