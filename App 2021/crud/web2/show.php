<?php

include_once "dbconnect.php";

$sql = "SELECT * FROM aditya";
$records = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    <table border="1" width="100%" style="text-align:center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php 
        while($rows = mysqli_fetch_array($records)){
            echo '<tr>';
            echo '<td>'.$rows['id'].'</td>';
            echo '<td>'.$rows['name'].'</td>';
            echo '<td>'.$rows['email'].'</td>';
            echo '<td>'.$rows['department'].'</td>';
            echo '<td>'.$rows['salary'].'</td>';
            echo "<td><a href='update.php?id=$rows[id]'>Update</a></td>";
            echo "<td><a href='delete.php?id=$rows[id]'>Delete</a></td>";
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>