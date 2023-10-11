<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="./css/detail.css">
</head>

<body>
    <div id="wapper">
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
                            <a class="active" style="font-weight: normal;" href="logout.php"> Logout</a>
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
                <a href="http://localhost/ass/"> <img src="./img/logo.png" alt="Logo"></a>
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

        <main>

            <?php include 'db.php';
            if (isset($_GET['masp'])) {
                $masp = $_GET['masp'];
                $sqlsp = "select * from sanpham where id_sp='$masp'";
                $kqsp = $conn->query($sqlsp)->fetch();
            }
            ?>

            <div id="left"><img src="images/<?php echo $kqsp['anhsp'] ?>" alt="">

            </div>
            <div id="right">
                <h1><?php echo $kqsp['tensp'] ?></h1>
                <div class="tinvt">
                    <p><?php echo $kqsp['vantatsp'] ?></p>
                </div>
                <div class="price">
                    <span class="price-old"><?php echo $kqsp['giacu'] ?>₫</span>
                    <span class="price-new"><?php echo $kqsp['giamoi'] ?>₫</span>
                </div>
                <div class="buy">
                    <input type="submit" value="Mua Ngay">
                </div>
                <div class="chitiet">
                    <h2>Mô tả</h2>
                    <p><?php echo $kqsp['chitietsp'] ?></p>
                </div>

            </div>

        </main>
        <div id="text">
            <div class="text-left">
                <p class="to">Chất lượng sản phẩm?</p>
                <p class="nho">Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay khách hàng!</p>
                <p class="to">Sai màu sản phẩm?</p>
                <p class="nho">Vì 1 số yếu tố khách quan như độ sáng màn hình, chất lượng màn hình nên sản phẩm có thể ko đúng màu.</p>
                <p class="to">Hàng có sẵn không?</p>
                <p class="nho">Sản phẩm hiện có sẵn tại hệ thống cửa hàng XSHOP và online tại website.</p>
                <p class="to">Bảo hành sản phẩm</p>
                <p class="nho">Sản phẩm được bảo hành trong 30 ngày với bất kỳ lỗi nào. Hàng SALE không được bảo hành.</p>
            </div>

            <div class="text-right">
                <p class="to">Thời gian giao hàng?</p>
                <p class="nho">Chúng tôi sử dụng đơn vi vận chuyển uy tín và nhanh chóng nhất, thời dự kiến từ 1-4 ngày tuy khu vực.</p>
                <p class="to">Thời gian làm việc?</p>
                <p class="nho">Hệ thống cửa hàng và Online làm việc từ 8:30 - 22:00 hàng ngày.</p>
                <p class="to">Đổi hàng như thế nào?</p>
                <p class="nho">Việc đổi hàng rất dễ dàng và chúng tôi luôn muốn khách hàng ưng ý nhất. Hãy liên hệ fanpage để đổi!</p>
                <p class="to">Chọn sai size giày?</p>
                <p class="nho">Bạn có thể qua cửa hàng hoặc gửi lại để đổi hàng với sản phẩm mới 100%. Còn nguyên tem mác, hoá đơn mua hàng.</p>
            </div>
        </div>
    </div>

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
</body>

</html>