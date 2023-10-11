<?php 
session_start();
$_SESSION['user']='Tienbh';
if(isset($_SESSION['user'])){
    echo "Chao".$_SESSION['user'];
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
    <p><a href="home.php">Chuyển đến home</a></p>
</body>
</html>