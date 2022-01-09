<?php  


# Wap in PHP to take info of user, name, email, password, mobile and display his information in next page.

$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
$email = $_REQUEST['email'];
$num = $_REQUEST['num'];
echo "Your name is : ".$name."<br/>"; 
echo "Your pass is : ".$pass."<br/>"; 
echo "Your email is : ".$email."<br/>"; 
echo "Your mobile is : ".$num; 




?> 