<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>File Uploading</h1> <hr>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Select File : <br><input type="file" name="file" required><br><br>
        <input type="submit" value="UPLOAD" name="save">
    </form>
</body>
</html>