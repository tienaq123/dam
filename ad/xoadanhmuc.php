<?php
include '../db.php';
    if(isset($_GET['maxoa'])){
        $xoa = $_GET['maxoa'];
        $sql="delete from danhmuc where id_danhmuc='$xoa'";
        $kq=$conn->prepare($sql);
        if ($kq->execute()) {
            header("location:quantridanhmuc.php");
        } else {
            echo "Không xóa được";
        }
    }
?>