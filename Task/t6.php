<?php

# Wap in PHP to accept lenght, breadth from user and calculate area of rectangle, perimeter.


$len = $_REQUEST['len'];
$wid = $_REQUEST['wid'];

$ar = ($len*$wid);
$pr = 2*($len+$wid);
echo "Area of rectangle is : ".$ar."<br/>";
echo "Perimeter of rectangle is : ".$pr;


?>