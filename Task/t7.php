<?php

# Wap in PHP to take radius as input and find , area, circumference of a circle.


$num = $_REQUEST['num'];
$pi = 3.14;
$ar = $pi*$num*$num;
$cir = 2*$pi*$num;
echo "Area of circle is : ".$ar."<br/>";
echo "Circumference of circle is : ".$cir;


?>