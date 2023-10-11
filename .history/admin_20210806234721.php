<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">

   
    <title>Admin</title>
</head>

<body>
    <div id="wapper">

        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XSHOP</h2>
            </a>
            <ul>
            <li><a class="active" style="color:blue; font-size: 14px;" href="logout.php">ĐĂNG XUẤT</a></li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="http://localhost/ass/"> <img src="./img/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Trang Chủ</a></li>
                    <li><a href="./ad/quantridanhmuc.php">Quản trị danh mục</a></li>
                    <li><a href="./ad/quantrisanpham.php">Quản trị sản phẩm</a></li>
                    <li><a href="./ad/quantritaikhoan.php">Quản trị tài khoản</a></li>
                    <div id="nav">
                        <a href="product.php"> <img src="./img/search.png" alt=""></a>
                        <a href="product.php"><img src="./img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <div id="banner">
            <a href="home.php"><img src="./img/banner.jpg" alt=""></a>

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