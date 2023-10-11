<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa quyền hạn</title>
    <link rel="stylesheet" href="../css/sua.css">
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
                    <li><a href="../home.php">Trang Chủ</a></li>
                    <li><a href="quantridanhmuc.php">Quản trị danh mục</a></li>
                    <li><a href="quantridanhmuc.php">Quản trị sản phẩm</a></li>
                    <li><a href="quantritaikhoan.php" style="color: red; font-size: 19px;">Quản trị tài khoản</a></li>
                    <div id="nav">
                        <a href="product.php"> <img src="../img/search.png" alt=""></a>
                        <a href="product.php"><img src="../img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <!-- END HEADER -->

        <main>
            <?php include '../db.php';
            if (isset($_GET['masua'])) {
                $masua = $_GET['masua'];
                $sqltk = "select * from taikhoan where id_tk='$masua'";
                $kqtk = $conn->query($sqltk)->fetch();
            }
            ?>
            <h2 style="text-align: center; margin: 20px 0px 40px 0px;">SỬA QUYỀN HẠN</h2>
            <form action="" method="POST" enctype="multipart/form-data">
            <table>
                
                <input type="hidden" name="id_tk" value="<?php echo $kqtk['id_tk'] ?>">

                <tr>
                    <td style="font-size: 15px; font-weight:bold; padding:10px 20px 0 0;">Quyền hạn(1 = Admin || 0 = User):</td>
                    <td><input type="text" name="phanquyen" value="<?php echo $kqtk['phanquyen'] ?>"> <br></td>
                </tr>


                <tr>
                    <td></td>
                    <td><input type="submit" value="Lưu" name="btn_sua"></td>
                </tr>
            </table>
            
            </form>
            <?php
            if (isset($_POST['btn_sua'])) {
                $id_tk = $_POST['id_tk'];
                $phanquyen = $_POST['phanquyen'];

                $sqlsua = "update taikhoan set phanquyen='$phanquyen' where id_tk='$id_tk'";
                $kq = $conn->prepare($sqlsua);



                if ($kq->execute()) {
                    header("location:quantritaikhoan.php");
                } else {
                    echo "Không sửa được";
                }
            }
            ?>
        </main>

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