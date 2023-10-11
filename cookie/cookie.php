<?php
setcookie('user', 'tienbh', time()+500);
if(isset($_COOKIE['user'])){
    echo "Xin chào ".$_COOKIE['user'];
}
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
    <br>
    <a href="home.php">Chuyển đến home</a>
</body>
</html>