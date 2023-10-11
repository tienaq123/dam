<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị hàng hóa</title>
    <style>
        img {
            width: 200px;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 12px;
        }

        a {
            text-decoration: none;
            color: blue;
            list-style: none;
        }



        img {
            border: 0px;
        }

        header,
        nav,
        section,
        aside,
        article,
        footer,
        table,
        figure {
            display: block;
        }

        /* code page */

        #wapper {
            width: 1500px;
            margin: auto;
            ;
            overflow: hidden;
        }

        #topbar {
            width: 1500px;
            height: 45px;
            background-color: #f1f2f4;
            float: left;
        }

        #topbar h2 {
            font-size: 17px;
            font-weight: 500;
            line-height: 45px;
            margin-left: 40px;
            color: #000;
            float: left;
        }

        #topbar ul {
            float: right;
        }

        #topbar ul li {
            display: inline-block;
            line-height: 45px;
            margin-right: 35px;
        }

        #topbar ul li a {
            color: #000;
            font-weight: bolder;
        }

        #topbar ul li a:hover {
            color: #775454;
        }

        #topbar ul li .active {
            color: cornflowerblue;
            font-size: 14px;
        }

        #header {
            width: 100%;
            height: 100px;
            background-color: #ffffff;
            padding: 10px 0 40px 0;
        }

        #header #logo img {
            float: left;
            width: 165px;
            height: 50px;
            color: #000;
            margin: 10px 0 0 40px;
        }

        #header .menu ul {
            text-align: center;
            margin-right: 50px;
            line-height: 66px;
        }

        #header .menu ul li {
            display: inline-block;
            margin-right: 35px;
        }

        #header .menu ul li a {
            font-size: 17px;
            font-weight: bold;
            color: #23232c;
        }

        #header .menu ul li a:hover {
            color: red;
        }

        #nav {
            float: right;
            line-height: 80px;
        }

        #nav img {
            width: 35px;
            height: 35px;
            margin-right: 20px;
        }

        main {
            background-color: whitesmoke;
            border-radius: 15px;
            padding-bottom: 100px;
        }

        main>a {
            font-size: 20px;
            display: block;
            text-align: center;
            padding-bottom: 20px;
        }

        main table td {
            border-right: 1px solid red;
            border-bottom: 1px solid red;
            border-radius: 3px;
            padding: 10px;
        }

        main table .suaxoa {
            background-color: antiquewhite;
            font-size: 15px;
        }

        #footer {
            width: 1500px;
            border-top: 1px solid #ccc;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        #footer #logo_footer {
            float: left;
        }

        #footer #logo_footer img {
            width: 240px;
            height: 80px;
            margin: 30px 0 30px 240px;
        }

        #footer #logo_footer a {
            color: #909097;
        }

        #footer #logo_footer span {
            color: #999999;
            margin-right: 15px;
        }

        #footer #logo_footer p {
            font-size: 14px;
            margin: 20px 0 20px 240px;
        }

        #footer #dichvu {
            text-align: center;
            margin: 60px 30px 40px 0;
        }

        #footer #dichvu h2 {
            margin-bottom: 75px;
        }

        #footer #dichvu p {
            margin-bottom: 20px;
        }

        #footer #dichvu p a {
            font-size: 14px;
            color: #999999;
        }

        #footer #facebook {
            margin: 30px 0 0 50px;
        }
    </style>
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
                <a href="http://localhost/xshop/"> <img src="../img/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../home.php">Trang Chủ</a></li>
                    <li><a href="quantridanhmuc.php">Loại hàng</a></li>
                    <li><a href="quantrisanpham.php" style="color: red; font-size: 19px;">Hàng hóa</a></li>
                    <li><a href="quantritaikhoan.php">Tài khoản</a></li>
                    <li><a href="quantritaikhoan.php">Bình luận</a></li>
                    <li><a href="quantritaikhoan.php">Thống kê</a></li>
                    <div id="nav">
                        <a href="product.php"> <img src="../img/search.png" alt=""></a>
                        <a href="product.php"><img src="../img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <main>
            <h1 style="text-align: center; padding: 30px 0px 20px 0px;">Quản lí hàng hóa</h1>
            <a href="themsanpham.php">Thêm hàng hóa</a>
            <table style="text-align: center; background-color:beige; border: 1px solid red">
                <tr style="font-size: 17px; font-weight:bold; color:#23232c; background-color:bisque;">
                    <td></td>
                    <td>Mã hàng hóa</td>
                    <td>Tên hàng hóa</td>
                    <td>Đơn giá</td>
                    <td>Giảm giá</td>
                    <td>Lượt xem</td>
                    <td class="suaxoa">Sửa</td>
                    <td class="suaxoa">Xóa</td>
                </tr>
                <?php
                include '../db.php';
                $sql = "select * from hang_hoa";
                $kq = $conn->query($sql);
                foreach ($kq as $key => $rows) {
                ?>
                    <tr>
                        <td><input type='checkbox' name='name[]' id='check_all' value='' /></td>
                        <td style="font-weight: bold;"><?php echo $rows['ma_hh'] ?></td>
                        <td style="font-size: 15px; color:#775454"><?php echo $rows['ten_hh'] ?></td>
                        <td><?php echo $rows['don_gia'] ?>đ</td>
                        <td><?php echo $rows['giam_gia'] ?>%</td>
                        <td><?php echo $rows['so_luot_xem'] ?></td>
                        <td class="suaxoa"><a href="suasanpham.php?masua=<?php echo $rows['ma_hh'] ?>">Sửa</a></td>
                        <td class="suaxoa"><a onclick="return confirm('Bạn có muốn xóa không!')" href="xoasanpham.php?maxoa=<?php echo $rows['ma_hh'] ?>">Xóa</a></td>
                    </tr>
                <?php }
                ?>
            </table>
            <input style="background-color: #fff; width: 160px; height: 30px; margin:40px 0px 20px 20px; border: 1px solid #000; cursor:pointer;" type="button" id="btn1" value="Chọn hết" />
            <input style="background-color: #fff; width: 160px; height: 30px; margin:40px 0px 20px 20px; border: 1px solid #000; cursor:pointer;" type="button" id="btn2" value="Bỏ chọn" />
            <input style="background-color: #fff; width: 160px; height: 30px; margin:40px 0px 20px 20px; border: 1px solid #000; cursor:pointer;" type="button" id="btn" value="Delete" />
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