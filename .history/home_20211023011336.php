<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- <link rel="stylesheet" href="./css/home.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
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
    figure {
        display: block;
    }

    /* code page */

    #wapper {
        width: 1500px;
        margin: auto;
        ;
        background: #ffffff;
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

    #header {
        width: 100%;
        height: 100px;
        background-color: #ffffff;
        padding: 10px 0 10px 0;
    }

    #header #logo img {
        float: left;
        width: 165px;
        height: 50px;
        color: #000;
        margin: 10px 100px 0 40px;
    }

    #header .menu ul {
        text-align: center;
        margin-right: 50px;
        line-height: 66px;
        margin-left: 200px;
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

    #banner {
        width: 1110px;
        grid-template-columns: 900px 1fr;
        background-color: #f5f5f5;
        /* margin-left: 200px; */
    }


    #banner a img {
        width: 700px;
    }

    #banner .slide{

    }

    #banner .slide .left{
        width: 700px;
    }

    #banner .slide .right{
        width: 200px;
    }



    #banner #nav_banner {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        padding: 20px 0 20px 0px;
        border: #f1f2f4;
    }

    #banner #nav_banner .item_nav {
        text-align: center;
    }

    #banner #nav_banner .item_nav img {
        width: 33x;
        height: 33px;
    }

    #banner #nav_banner .item_nav h4 {
        font-size: 18px;
        font-weight: unset;
        margin: 10px;
        color: #0c0c0c;
    }

    #banner #nav_banner .item_nav p {
        font-size: 17px;
        color: #7c7c80;
    }

    #content {
        width: 1110px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin-left: 200px;
    }

    #h1_content {
        font-size: 43px;
        font-weight: 600;
        color: #23232c;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        margin: 60px 0 60px 0;
    }

    #content #item_content {
        margin: 10px;
    }

    #content #item_content a h5:hover {
        color: violet;
    }

    #content #item_content img {
        width: 266px;
        height: 266px;
        border-radius: 3px;
    }

    #content #item_content h5 {
        font-size: 16px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 500;
        color: #23232c;
        margin: 10px;
        text-align: center;
    }

    #content #item_content .price {
        text-align: center;
        display: inline-flex;
        margin-left: 70px;
    }

    #content #item_content .old-price {
        font-size: 13px;
        font-weight: 750;
        color: #7a7a7a;
        text-decoration-line: line-through;
        margin-top: 2px;
    }

    #content #item_content .new-price {
        font-size: 16px;
        font-weight: 750;
        color: #ff0000;
        margin-left: 7px;
    }



    #Xshop {
        width: 1110px;
        margin: 100px 0 200px 200px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background-color: #f2f2f2;
    }

    #Xshop .Xshop_left {
        padding: 15px 70px 0 0;
        text-align: center;
    }

    #Xshop .Xshop_left p {
        font-size: 16px;
        color: #7a7a7a;
    }

    #Xshop .Xshop_left h1 {
        font-size: 70px;
    }

    #Xshop .Xshop_left img {
        margin-top: 40px;
        margin-left: 50px;
    }

    #Xshop .Xshop_right {
        text-align: center;
        border-left: 2px solid #ccc;
    }

    #Xshop .Xshop_right h1 {
        font-size: 40px;
        text-align: center;
        margin-bottom: 30px;
    }


    #Xshop .Xshop_right #tintuc {
        margin: 50px;
        border-bottom: 1px solid #ccc;
    }

    #Xshop .Xshop_right #tintuc a img {
        width: 350px;
        height: 290px;
    }

    #Xshop .Xshop_right #tintuc h3 {
        font-size: 18px;
        margin: 15px;
        color: #000;
    }

    #Xshop .Xshop_right #tintuc p {
        margin-bottom: 20px;
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

<body>
    <div id="wapper">


        </p>
        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XSHOP</h2>
            </a>
            <ul>
                <li>
                    <p style="color:red; font-size: 17px;font-weight: bold;">
                        Hello <?php

                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user'];
                                ?>
                            <a class="active" style="font-weight: normal;" href="logout.php"> | Logout |</a>
                        <?php } else {
                                    echo "you!";
                        ?>
                            <a class="active" style="font-weight: normal;" href="login.php"> =>Login<= </a>
                                <?php }
                                ?>
                    </p>
                </li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="http://localhost/xshop/"> <img src="./img/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <?php include 'db.php';
                    $sql = "select * from danhmuc";
                    $kq = $conn->query($sql);
                    foreach ($kq as $key => $rows) {
                    ?>

                        <li>
                            <a href="showdanhmuc.php?madanhmuc=<?php echo $rows['id_danhmuc'] ?>">
                                <?php echo $rows['tendanhmuc'] ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                    <div id="nav">
                        <a href="product.php"> <img src="./img/search.png" alt=""></a>
                        <a href="product.php"><img src="./img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <!-- end header -->

        <div id="banner">
            <div class="slide">
                <div class="left">
                <a href="home.php"><img src="./img/banner.jpg" alt=""></a>\
            </div>
                <div class="right">
                <!-- <h2>Active Item in a List Group</h2> -->
                <div class="list-group">
                    <a href="#" class="list-group-item active">Danh mục</a>
                    <a href="#" class="list-group-item">Giày NIKE</a>
                    <a href="#" class="list-group-item">Giày ADIDAS</a>
                    <a href="#" class="list-group-item">Giày VANS</a>
                    <a href="#" class="list-group-item">Giày Thời Trang</a>
                </div>
            </div>
            </div>
                <nav id="nav_banner">
                    <div class="item_nav">
                        <img src="./img/giaohang.png" alt="">
                        <h4>GIAO HÀNG TOÀN QUỐC</h4>
                        <p>Vận chuyển khắp Việt Nam</p>
                    </div>
                    <div class="item_nav">
                        <img src="./img/thanhtoan.png" alt="">
                        <h4>THANH TOÁN KHI NHẬN HÀNG</h4>
                        <p>Nhận hàng tại nhà rồi thanh toán</p>
                    </div>
                    <div class="item_nav">
                        <img src="./img/baohanh.png" alt="">
                        <h4>BẢO HÀNH DÀI HẠN</h4>
                        <p>Bảo hành lên đến 60 ngày</p>
                    </div>
                    <div class="item_nav">
                        <img src="./img/doihang.png" alt="">
                        <h4>ĐỔI HÀNG DỄ DÀNG</h4>
                        <p>Đổi hàng thoải mái trong 30 ngày</p>
                    </div>
                </nav>
            
            
        </div>

        <!-- end banner -->
                <h1 id="h1_content">TOP SẢN PHẨM MỚI NHẤT</h1>

                <section id="content">

                    <?php include 'db.php';
                    $sql = "select * from sanpham";
                    $kq = $conn->query($sql);
                    foreach ($kq as $key => $rows) {
                    ?>
                        <article id="item_content">
                            <a href="detail.php?masp=<?php echo $rows['id_sp'] ?>">
                                <img src="images/<?php echo $rows['anhsp'] ?>" alt="">
                                <h5><?php echo $rows['tensp'] ?></h5>
                                <div class="price">
                                    <div class="old-price">
                                        <p><?php echo $rows['giacu'] ?>đ</p>
                                    </div>
                                    <div class="new-price">
                                        <p><?php echo $rows['giamoi'] ?>đ</p>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php
                    }
                    ?>

                </section>
                <h1 id="h1_content">TOP SẢN PHẨM BÁN CHẠY</h1>
                <section id="content">

                    <?php include 'db.php';
                    $sql = "select * from sanpham";
                    $kq = $conn->query($sql);
                    foreach ($kq as $key => $rows) {
                    ?>
                        <article id="item_content">
                            <a href="detail.php?masp=<?php echo $rows['id_sp'] ?>">
                                <img src="images/<?php echo $rows['anhsp'] ?>" alt="">
                                <h5><?php echo $rows['tensp'] ?></h5>
                                <div class="price">
                                    <div class="old-price">
                                        <p><?php echo $rows['giacu'] ?>đ</p>
                                    </div>
                                    <div class="new-price">
                                        <p><?php echo $rows['giamoi'] ?>đ</p>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php
                    }
                    ?>
                </section>

        <section id="Xshop">
            <section class="Xshop_left">
                <p>Hơn 6 năm phát triển, XSHOP luôn mang đến những mẫu giày chất lượng tốt nhất với giá cả hợp lí nhất
                    đến tay người tiêu dùng với hệ thống cửa hàng Số 1 Hà Nội và bán online khắp Việt Nam.</p>
                <h1>1 234 567</h1>
                <p>Số Sản Phẩm Đã Bán</p>
                <h1>543 212</h1>
                <p>Khách Hàng Đã Mua</p>
                <img src="./img/Xshop.jpg" alt="">
                <img width="480px" height="300px" src="./img/left.jpg" alt="">
                <img width="480px" height="300px" src="./img/left2.jpg" alt="">
            </section>

            <section class="Xshop_right">
                <h1>TIN TỨC MỚI NHẤT</h1>
                <article id="tintuc">
                    <a href="#"><img src="./img/7-cach-bao-quan.png" alt=""></a>
                    <a href="#">
                        <h3>7 cách bảo quản giày thể thao tốt nhất</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
                <article id="tintuc">
                    <a href="#"><img src="./img/giu-phong-do.png" alt=""></a>
                    <a href="#">
                        <h3>Giữ “phong độ” cho Sneaker trắng ra sao</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
                <article id="tintuc">
                    <a href="#"><img src="./img/u30-meo.jpg" alt=""></a>
                    <a href="#">
                        <h3>9 kỹ thuật làm đẹp dành cho U30</h3>
                    </a>
                    <a href="#">
                        <p> XEM CHI TIẾT >></p>
                    </a>
                </article>
            </section>
        </section>

        <footer id="footer">
            <div id="logo_footer">
                <a href="#"><img src="./img/logo.png" alt=""></a>
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