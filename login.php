<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="" method="POST">
      <div class="user-box">
        <input type="text" name="user1" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="pass1" required="">
        <label>Password</label>
      </div>


      <input style="
      width: 150px;
      height: 40px;
      margin-top: 20px;
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      color: black;
      font-size: 16px;
      text-transform: uppercase;
    " type="submit" value="Submit" name="btn" id="sub"> <br>
      <a style="font-size: 16px; font-weight:bold; position: relative;
    display: inline-block; padding-top: 15px; color:#AFA" href="dangky.php">Register</a>

      <?php
      include 'db.php';
      if (isset($_POST['btn'])) {
        $user = $_POST['user1'];
        $pass = $_POST['pass1'];
        $sql = "select * from taikhoan where user='$user' and pass='" . md5($pass) . "'";
        // $sql = "select * from taikhoan";
        $kq = $conn->query($sql);
        if ($kq->rowCount() == 1) {
          $_SESSION['user'] = $user;
          $selectedUser = $kq->fetchAll()[0];
          if ($selectedUser['phanquyen'] == 1) {
            // admin
            header("location: admin.php");
          } else {
            // user
            header("location: home.php");
          }
        } else {
          echo '<span style="color:#AFA;text-align:center;"><br>Tài khoản hoặc mật khẩu không hợp lệ</span>';
        }
      }
      ?>
    </form>
  </div>


</body>

</html>