<?php

require_once "init.php";

if($conn = mysqli_connect(
    $settings['db:config']['host'],
    $settings['db:config']['user'],
    $settings['db:config']['password'],
    $settings['db:config']['dbname'],
))
{
    // echo "<pre>";
    // print_r($conn);
}
else{
    echo "Connection Error..!";
}

?>