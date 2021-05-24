
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Tên lớp: <input type="text" name="className">
    <input type="submit" name="btn" value="Xác Nhận">
</form>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $className = $_REQUEST['className'];
    $pattern = '/^[C\|A\|P][0-9]{4}[G\|H\|I\|K\|L\|M]$/';
    if (preg_match($pattern,$className)){
        echo "Tên lớp: $className hợp lệ ";
    }else{
        echo "Tên lớp: $className không hợp lệ ";
    }
}
?>
</body>
</html>