<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/themdm.css">
</head>
<style>
    .main {
        margin-left: 200px;
    }
</style>

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
                    <li><a href="quantridanhmuc.php" style="color: red; font-size: 19px;">Quản trị danh mục</a></li>
                    <li><a href="quantrisanpham.php">Quản trị sản phẩm</a></li>
                    <li><a href="quantritaikhoan.php">Quản trị tài khoản</a></li>
                    <div id="nav">
                        <a href="product.php"> <img src="../img/search.png" alt=""></a>
                        <a href="product.php"><img src="../img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <!-- END HEADER -->

        <main>
            <h2 style="font-size: 25px; padding-top: 30px; margin-left: 0px; margin-bottom: 100px;">Thêm loại hàng</h2>
            <form action="" method="POST">
                <table class="main">
                    <tr>
                        <td>
                            <Span style="font-size: 23px; font-weight:bold;">Mã loại hàng </Span>
                        </td>
                        <td>
                            <input style="margin: 20px 0px 20px 10px;  width: 600px; height: 35px; font-weight:bold;" type="text" name="tendanhmuc" value="          Auto numble"> <br>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>
                            <Span style="font-size: 23px; font-weight:bold;">Tên loại hàng </Span>
                        </td>
                        <td>
                            <input style="margin: 20px 0px 20px 10px;  width: 1000px; height: 35px; font-weight:bold;" type="text" name="tendanhmuc"> <br>
                        </td>
                    </tr>

                    
                </table>
                
                       <input style="background-color: #ccc; width: 160px; height: 30px; margin:40px 0px 20px 90px;" type="submit" value="Thêm loại hàng" name="btn">
                       <input style="background-color: #ccc; width: 160px; height: 30px; margin:40px 0px 20px 90px;" type="reset" value="Nhập lại" name="btn">
                       <button style="background-color: #ccc; width: 160px; height: 30px; margin:40px 0px 20px 90px;"><a href="quantridanhmuc.php">Danh Sách Danh mục</a></button>
                   
                <!-- <input style="margin: 20px 0px 20px 10px; " type="text" name="tendanhmuc"> <br>
                <input style="background-color: #ccc; width: 160px; height: 30px; margin:0px 0px 20px 90px;" type="submit" value="Thêm danh mục" name="btn"> -->
            </form>
            <?php
            include '../db.php';
            if (isset($_POST['btn'])) {
                $tendanhmuc = $_POST['tendanhmuc'];
                $sql = "insert into danhmuc values(null, '$tendanhmuc')";
                $kq = $conn->exec($sql);
                if ($kq == 1)
                    // echo "Thêm thành công danh mục!";
                    header("location:quantridanhmuc.php");
                else
                    echo "Không thêm được";
            }
            ?>
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