<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh mục</title>
    <link rel="stylesheet" href="../css/qttk.css">
</head>

<body>
    <div id="wapper">

        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XSHOP</h2>
            </a>
            <ul>
            <li><a class="active" style="color:blue; font-size: 14px;" href="../logout.php">ĐĂNG XUẤT</a></li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="http://localhost/ass/"> <img src="../img/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                <li><a href="home.php">Trang Chủ</a></li>
                    <li><a href="./ad/quantridanhmuc.php">Loại hàng</a></li>
                    <li><a href="./ad/quantrisanpham.php">Hàng hóa</a></li>
                    <li><a href="./ad/quantritaikhoan.php" style="color: red; font-size: 19px;">Tài khoản</a></li>
                    <li><a href="./ad/quantritaikhoan.php">Bình luận</a></li>
                    <li><a href="./ad/quantritaikhoan.php">Thống kê</a></li>
                    <div id="nav">
                        <a href="product.php"> <img src="../img/search.png" alt=""></a>
                        <a href="product.php"><img src="../img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <!-- END HEADER -->

        <main>
            <h1 >Quản Trị Tài Khoản</h1>
            <table border="4" style="text-align: center; margin: 50px 0 0 50px; min-width: 1400px;">
                <tr style="font-size: 17px; color:#23232c; font-weight:bold; margin:10px; min-width: 120px;">
                    <td>ID Tài Khoản</td>
                    <td>Tên tài khoản</td>
                    <td>Mật Khẩu</td>
                    <td>Họ Tên</td>
                    <td>Ngày Sinh</td>
                    <td>Email</td>
                    <td>Số điện thoại</td>
                    <td>Quyền hạn</td>
                    <td>Sửa quyền hạn</td>
                    <td>Xóa Tài Khoản</td>
                </tr>
                <?php
                include '../db.php';
                $sql = "select * from taikhoan";
                $kq = $conn->query($sql);
                foreach ($kq as $key => $rows) {
                ?>
                
                    <tr>
                        
                        <td style="font-weight: bold;"><?php echo $rows['id_tk'] ?></td>
                        <td><?php echo $rows['user'] ?></td>
                        <td><?php echo $rows['pass'] ?></td>
                        <td><?php echo $rows['hoten'] ?></td>
                        <td><?php echo $rows['namsinh'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['sdt'] ?></td>
                        <td><?php if($rows['phanquyen'] == 1){
                            echo "ADMIN";
                        }
                        else{
                            echo "USER";
                        }
                        ?></td>
                        <td><a href="suataikhoan.php?masua=<?php echo $rows['id_tk'] ?>">Sửa quyền hạn</a></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa tài khoản không!')" href="xoataikhoan.php?maxoa=<?php echo $rows['id_tk'] ?>">Xóa</a></td>
                    </tr>
                <?php }
                ?>
            </table>
        </main>

        <!-- END MAIN -->

        <footer id="footer">
            <div id="logo_footer">
                <a href="#"><img src="../img/logo.png" alt=""></a>
                <p>Hệ thống giày thể thao số 1 Hà Nội</p>
                <p class="hotline"><span>Hotline</span> <a href="#">0123456789</a></p>
                <p><span>Store 1:</span> 57 Quan Hoa, Cầu Giấy, HN <br> <br> <span>Store 2:</span> 29 Trần Đại Nghĩa,
                    Hai Bà Trưng, HN <br> <br><span>Store 3:</span> 61
                    Trần Phú, Hà Đông, HN <br> <br> </p>
            </div>
            <div id="dichvu">
                <h2>DỊCH VỤ KHÁCH HÀNG</h2>
                <p><a href="#">Giới thiệu XSHOP</a> <br> </p>
                <p><a href="#">Hướng dẫn đặt hàng</a> <br> </p>
                <p><a href="#">Chính sách đổi trả và bảo hành</a> <br> </p>
                <p><a href="#">Chính sách bảo mật</a> <br> </p>
                <p><a href="#">Liên hệ XSHOP</a> <br> </p>
                <p><a href="#">Hệ thống cửa hàng</a></p>
            </div>

            <div id="facebook">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=256623368880552&autoLogAppEvents=1" nonce="aj8H3wq8"></script>
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>