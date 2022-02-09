<?php

include_once "dbconnect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registerHandler.php" method="POST">
        Name : <br><input type="text" name="name" value="" /><br><br>
        Email : <br><input type="email" name="email" value="" /><br><br>
        Department : <br><input type="text" name="dept" value="" /><br><br>
        Salary : <br><input type="number" name="salary" value="" /><br><br>
        <input type="submit" name="save" value="REGISTER" />
    </form>
</body>
</html>