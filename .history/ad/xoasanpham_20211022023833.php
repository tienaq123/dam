<?php
include '../db.php';
    if(isset($_GET['maxoa'])){
        $xoa = $_GET['maxoa'];
        $sql="delete from hang_hoa where ma_hh='$xoa'";
        $kq=$conn->prepare($sql);
        if ($kq->execute()) {
            header("location:quantrisanpham.php");
        } else {
            echo "Không xóa được";
        }
    }
?>