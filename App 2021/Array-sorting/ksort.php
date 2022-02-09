<?php

// wap in php to show ksort() and krsort()

$a = ['name'=>'Aditya','age'=>19,'class'=>'CSE'];

ksort($a);
print_r($a);

krsort($a);
print_r($a);
