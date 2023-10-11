<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị danh mục</title>
    <link rel="stylesheet" href="../css/qtdm.css">
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
            <h1>Quản trị danh mục</h1>
            <a href="themdanhmuc.php" class="themdanhmuc">Thêm danh mục</a>
            <table border="4" style="text-align: center;">
                <tr style="font-size: 17px; color:#23232c;">
                    <td></td>
                    <td>Mã danh mục</td>
                    <td>Tên danh mục</td>
                    <td>Sửa</td>
                    <td>Xóa</td>
                </tr>
                <?php
                include '../db.php';
                $sql = "select * from danhmuc";
                $kq = $conn->query($sql);
                foreach ($kq as $key => $rows) {
                ?>
                    <tr>
                        <td><input type='checkbox' name='name[]' id='check_all' value='' /></td>
                        <td><?php echo $rows['id_danhmuc'] ?></td>
                        <td><?php echo $rows['tendanhmuc'] ?></td>
                        <td class="suaxoa"><a href="suadanhmuc.php?masua=<?php echo $rows['id_danhmuc'] ?>">Sửa</a></td>
                        <td class="suaxoa"><a onclick="return confirm('Bạn có muốn xóa không!')" href="xoadanhmuc.php?maxoa=<?php echo $rows['id_danhmuc'] ?>">Xóa</a></td>
                    </tr>
                <?php }
                ?>
                <tr>
                    <td><input type="button" id="btn1" value="Chọn hết" />;<input type="button" id="btn2" value="Bỏ chọn" /></td>
                
                
            </tr>
                <script language="javascript">
                    // Chức năng chọn hết
                    document.getElementById("btn1").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('name[]');

                        // Lặp và thiết lập checked
                        for (var i = 0; i < checkboxes.length; i++) {
                            checkboxes[i].checked = true;
                        }
                    };

                    // Chức năng bỏ chọn hết
                    document.getElementById("btn2").onclick = function() {
                        // Lấy danh sách checkbox
                        var checkboxes = document.getElementsByName('name[]');

                        // Lặp và thiết lập Uncheck
                        for (var i = 0; i < checkboxes.length; i++) {
                            checkboxes[i].checked = false;
                        }
                    };
                </script>
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