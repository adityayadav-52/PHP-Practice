<?php

include_once __DIR__ . '/dbconnect.php';

$sql = "SELECT * FROM student";
$record = mysqli_query($conn,$sql);
/*while($row = mysqli_fetch_array($record)){
    echo $row['id']."<br>";
    echo $row['name']."<br>";
    echo $row['class']."<br>";
    echo $row['address']."<br>";
}*/
?>

<html>
<head>
    <title>Show Data</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
        
        while($row = mysqli_fetch_array($record)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['class'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo "<td><a href='update.php?id=$row[id]'>Edit</a></td>";
            echo "<td><a href='delete.php?id=$row[id]'>Delete</a></td>";
            echo '</tr>';
        }
        
        ?>
    </table>
</body>
</html>