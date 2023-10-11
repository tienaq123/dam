<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa hàng hóa</title>
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

        <!-- END HEADER -->

        <main>
            <?php include '../db.php';
            if (isset($_GET['masua'])) {
                $maspsua = $_GET['masua'];
                $sqlsp = "select * from sanpham where id_sp='$maspsua'";
                $kqsp = $conn->query($sqlsp)->fetch();
            }
            ?>
            <h2 style="text-align: center; margin: 20px 0px 40px 0px;">SỬA HÀNG HÓA</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Loại hàng</td>
                        <td><select style="width: 500px; height: 40px; border-radius: 5px;" name="danhmuc" id="">
                                <?php
                                $sqldmuc = "select * from danhmuc";
                                $kqdm = $conn->query($sqldmuc);
                                foreach ($kqdm as $key => $rows) {
                                ?>
                                    <option value="<?php echo $rows['id_danhmuc'] ?>"><?php echo $rows['tendanhmuc'] ?></option>
                                <?php
                                }
                                ?>
                            </select> <br></td>
                    </tr>

                    <input type="hidden" name="masp" value="<?php echo $kqsp['id_sp'] ?>">

                    <tr>
                        <td>Tên hàng hóa</td>
                        <td><input type="text" name="tensp" value="<?php echo $kqsp['tensp'] ?>"> <br></td>
                    </tr>

                    <tr>
                        <td>Ảnh hàng hóa</td>
                        <td><img src="../images/<?php echo $kqsp['anhsp'] ?>" alt=""> <input type="file" name="anhsp"><br></td>
                    </tr>

                    <tr>
                        <td>Giá cũ</td>
                        <td><input type="text" name="giacu" value="<?php echo $kqsp['giacu'] ?>"> <br></td>
                    </tr>

                    <tr>
                        <td>Giá mới</td>
                        <td><input type="text" name="giamoi" value="<?php echo $kqsp['giamoi'] ?>"> <br></td>
                    </tr>

                    <tr>
                        <td>Vắn tắt hàng hóa</td>
                        <td><input type="text" name="vantatsp" value="<?php echo $kqsp['vantatsp'] ?>"> <br></td>
                    </tr>

                    <tr>
                        <td>Chi tiết hàng hóa</td>
                        <td><input type="text" name="chitietsp" value="<?php echo $kqsp['chitietsp'] ?>"> <br></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Sửa hàng hóa" name="btn_sua"></td>
                    </tr>
                </table>

            </form>
            <?php
            if (isset($_POST['btn_sua'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giacu = $_POST['giacu'];
                $giamoi = $_POST['giamoi'];
                $vantatsp = $_POST['vantatsp'];
                $chitietsp = $_POST['chitietsp'];
                $danhmuc = $_POST['danhmuc'];

                $tenanh = $_FILES['anhsp']['name'];
                $duongdananh = $_FILES['anhsp']['tmp_name'];
                move_uploaded_file($duongdananh, '../images/' . $tenanh);

                $sqlsua = "update sanpham set tensp='$tensp', anhsp='$tenanh',  giacu='$giacu', giamoi='$giamoi', vantatsp='$vantatsp', chitietsp='$chitietsp' where id_sp='$masp'";
                $kq = $conn->prepare($sqlsua);



                if ($kq->execute()) {
                    header("location:quantrisanpham.php");
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