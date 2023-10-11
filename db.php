<?php
    try {
        $conn=new PDO("mysql:host=localhost; dbname=dam;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "Lỗi kết nối";
    }
