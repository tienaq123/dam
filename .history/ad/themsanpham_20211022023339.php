<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hàng hóa</title>
    <link rel="stylesheet" href="../css/them.css">
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

        <!-- END HEADER -->

        <main>
            <h2 style="text-align: center; margin: 20px 0px 40px 0px;">THÊM HÀNG HÓA</h2>
            <form action="" method="POST" enctype="multipart/form-data">

                <table>
                    <tr>
                        <td class="left">Loại hàng</td>
                        <td class="right"><select style="width: 500px; height: 40px; border-radius: 5px;" name="danhmuc">
                                <?php
                                include '../db.php';
                                $sqldmuc = "select * from danhmuc";
                                $kqdm = $conn->query($sqldmuc);
                                foreach ($kqdm as $key => $rows) {
                                ?>
                                    <option value="<?php echo $rows['id_danhmuc'] ?>"><?php echo $rows['tendanhmuc'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Mã hàng hóa</td>
                        <td class="right"><input type="text" name="ma_hh" value="   Auto number" disabled> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Tên hàng hóa</td>
                        <td class="right"><input type="text" name="tensp"> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Đơn giá</td>
                        <td class="right"><input type="text" name="don_gia"> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Giảm giá</td>
                        <td class="right"><input type="text" name="giam_gia"> <br></td>
                    </tr>
                    <tr>
                        <td class="left">Ảnh</td>
                        <td class="right"><input type="file" name="hinh"><br></td>
                    </tr>

                    <tr>
                        <td class="left">Hàng đặc biệt??</td>
                        <td class="right"><input name="dac_biet" type="radio" value="Đặc biệt" /><span style="font-size: 17px; font-weight:bold; margin-bottom: 30px"> Đặc biệt</span>
                                          <input name="dac_biet" type="radio" value="Thường" /><span style="font-size: 17px; font-weight:bold; margin-bottom: 30px"> Thường</span> <br>
                        </td>
                    </tr>

                    <tr>
                        <td class="left">Ngày nhập</td>
                        <td class="right"><input type="date" name="ngay_nhap"> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Số lượt xem</td>
                        <td class="right"><input type="text" name="so_luot_xem" value="   0" disabled> <br></td>
                    </tr>

                    <tr>
                        <td class="left">Mô tả</td>
                        <td class="right"><input type="text" name="mo_ta"> <br></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td class="right"><input type="submit" value="Thêm hàng hóa" name="btn"></td>
                    </tr>
                </table>

            </form>
            <?php
            if (isset($_POST['btn'])) {
                $tensp = $_POST['ten_hh'];
                $dongia = $_POST['don_gia'];
                $giamgia = $_POST['giam_gia'];
                $dacbiet = $_POST['dac_biet'];
                $ngaynhap = $_POST['ngay_nhap'];
                $soluotxem = $_POST['so_luot_xem'];
                $mota = $_POST['mo_ta'];
                $danhmuc = $_POST['danhmuc'];

                $tenanh = $_FILES['hinh']['name'];
                $duongdananh = $_FILES['hinh']['tmp_name'];
                move_uploaded_file($duongdananh, '../images/' . $tenanh);

                $sql = "insert into sanpham values(null, '$tensp', '$tenanh', '$giacu', '$giamoi', '$vantatsp', '$chitietsp', '$danhmuc')";
                $kq = $conn->prepare($sql);
                if ($kq->execute()) {
                    header("location:quantrisanpham.php");
                } else {
                    echo "Không thêm được";
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