<?php
include_once __DIR__ . '/query-builder/Query.php'; 
include_once __DIR__ . '/functions.php';
$id = get('id');

if(!empty($id)){
    $query = new Query();
    $record = $query->select('*')->table('emp')->where('id',$id)->first();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-1</title>
</head>
<body>
    <form action="<?php echo url("updateHandler.php"); ?>" method="post">
        Name : <input type="text" name="name" value="<?php echo $record->name ?>" /><br><br>
        <input type="hidden" name="id" value="<?php echo $record->id ?>" />
        Email : <input type="email" name="email"  value="<?php echo $record->email ?>"  /><br><br>
        <input type="submit" value="update" name="save" />
    </form>
</body>
</html>