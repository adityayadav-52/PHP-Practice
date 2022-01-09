<?php


$fp = fopen('aditya.txt','r');
$txt = fgets($fp,1);
echo json_encode($txt);


?>