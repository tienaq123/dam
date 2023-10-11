<?php
include '../db.php';
    if(isset($_GET['maxoa'])){
        $xoa = $_GET['maxoa'];
        $sql="delete from taikhoan where id_tk='$xoa'";
        $kq=$conn->prepare($sql);
        if ($kq->execute()) {
            header("location:quantritaikhoan.php");
        } else {
            echo "Không xóa được";
        }
    }
?>