<?php

include_once "init.php";

if(	$conn = mysqli_connect(
	
    $settings['db:config']['host'],
    $settings['db:config']['user'],
    $settings['db:config']['password'],
    $settings['db:config']['dbname'])
    
){	

//print_r($conn);
}else{
    echo "Database Connection Error";
}

?>