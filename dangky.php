<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="login-box">
        <h2>Register</h2>
        <form action="" method="POST">
            <div class="user-box">
                <input type="text" name="user" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="hoten" required="">
                <label>Họ Tên</label>
            </div>
            <div class="user-box">
                <p style="color: #ffffff;">Ngày-Tháng-Năm-sinh</p>
                <input type="date" name="namsinh" required="">
            </div>
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="sdt" required="">
                <label>Số điện thoại</label>
            </div>



            <input style="
      width: 150px;
    height: 40px;
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: black;
    font-size: 16px;
    text-transform: uppercase;
    " type="submit" value="Submit" name="btn" id="sub"> <br>
            <a href=""></a>

            <?php
            include 'db.php';
            if (isset($_POST['btn'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $hoten = $_POST['hoten'];
                $namsinh = $_POST['namsinh'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];

                $sql = "select * from taikhoan where user='$user' or email='$email'";
                $kq = $conn->query($sql);

                
                if ($kq -> rowCount() > 0) {
                    echo '<span style="color:#AFA;text-align:center;"><br>Trùng UserName hoặc Email</span>';
                    die();
                } else {
                    $sql = "insert into taikhoan (user, pass, hoten, namsinh, email, sdt) VALUES ('$user','".md5($pass)."', '$hoten', '$namsinh', '$email', '$sdt')";
                    echo '<span style="color:#AFA;text-align:center;"><br>Đăng ký thành công!  <a style="color:#fff;" href="login.php"> Login</a><br></span>';
                }

                if ($kq = $conn->exec($sql)) {
                } else {
                    echo "Lỗi đăng ký";
                }
            }
            ?>
        </form>
    </div>


</body>

</html>