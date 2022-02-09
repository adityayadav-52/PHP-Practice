<?php

include_once __DIR__ . '/dbconnect.php';


$query = mysqli_query($conn,"SELECT * FROM student ");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
</head>
<body>
    <table width="100%" rules="all" border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php  while($res = mysqli_fetch_array($query)){
            echo '<tr style="text-align:center;">';
                echo '<td>'.$res['id'].'</td>';
                echo '<td>'.$res['name'].'</td>';
                echo '<td>'.$res['class'].'</td>';
                echo '<td>'.$res['address'].'</td>';
                echo '<td><a href="#?>">Update</a></td>';
                echo '<td><a href="# ">Delete</a></td>';
            echo '</tr>';
        }?>
    </table>
</body>
</html>
