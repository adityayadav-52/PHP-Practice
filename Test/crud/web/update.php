?>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <form action="edit.php" method="post">
        Name :<br><input type="text" name="name"  /><br><br>
        <input type="hidden" name="id"  />
        Class :<br><input type="number" name="class"   /><br><br>
        Address :<br><input type="text" name="address"   /><br><br>
        <input type="submit" name="save" value="update"/>
    </form>
</body>
</html>