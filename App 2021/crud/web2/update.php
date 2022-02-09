<?php

include_once "dbconnect.php";
$id = $_GET['id'];
if(!empty($id)){
    $records = mysqli_query($conn,"SELECT * FROM aditya WHERE id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body>
    <form action="updateHandler.php" method="POST">
        <?php while($res = mysqli_fetch_array($records)){ ?>
        Name : <br><input type="text" name="name" value="<?php echo $res['name'] ?>" /><br><br>
        <input type="hidden" name="id" value="<?php echo $res['id'] ?>" />
        Email : <br><input type="email" name="email" value="<?php echo $res['email'] ?>" /><br><br>
        Department : <br><input type="text" name="dept" value="<?php echo $res['department'] ?>" /><br><br>
        Salary : <br><input type="number" name="salary" value="<?php echo $res['salary'] ?>" /><br><br>
        <input type="submit" name="save" value="REGISTER" />
        <?php } ?>
    </form>
</body>
</html>