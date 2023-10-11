<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="./css/product.css">
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

        <!-- end header -->
        <div id="title_product">
            <h1>PRODUCT</h1>
            <span><a href="http://localhost/ass/">Trang chủ </a>> Product</span>
        </div>

        <h1 id="h1_content">Giày Nike</h1>
        <section id="content">
        <?php include 'db.php';
            $sql = "select * from sanpham where id_danhmuc = 1";
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
        <h1 id="h1_content">Giày Adidas</h1>
        <section id="content">

        <?php include 'db.php';
            $sql = "select * from sanpham where id_danhmuc = 2";
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

        <h1 id="h1_content">Giày Vans</h1>
        <section id="content">
        <?php include 'db.php';
            $sql = "select * from sanpham where id_danhmuc = 3";
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

        <h1 id="h1_content">Giày thời trang</h1>
        <section id="content">
        <?php include 'db.php';
            $sql = "select * from sanpham where id_danhmuc = 4";
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
                <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=256623368880552&autoLogAppEvents=1"
                    nonce="aj8H3wq8"></script>
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="250"
                    data-height="300" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/huutienxt/" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/huutienxt/">Facebook</a></blockquote>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>