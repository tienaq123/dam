<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       User <input type="text" name="user1" id="">
       Pass <input type="text" name="pass1" id="">
    <input type="submit" value="Login" name="btn">
</form>
<?php
include 'db.php';
if(isset($_POST['btn'])){
$user = $_POST['user1'];
$pass = $_POST['pass1'];
$sql ="select *from taikhoan where user='$user' and pass='$pass'";
$kq = $conn -> query($sql);
if($kq -> rowCount()==1){
    $_SESSION['user']=$user;
    header("location:home.php");
}else{
    echo "Tài khoản hoặc mật khẩu không hợp lệ";
}
}
?>
</body>
</html>