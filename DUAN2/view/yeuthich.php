<?php

include "../model/pdo.php";
include "../model/taikhoan.php";
session_start();
if (!isset($_SESSION['user'])) {
    // Nếu chưa đăng nhập, trả về thông báo cho JS xử lý chuyển trang
    echo "chudangnhap";
    exit;
}

$iduser = $_SESSION['user']['id'];

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $idsp = $_POST['id'];
    if(check_yeuthich($iduser,$idsp)){
        echo "dathich";
    }else{
        insert_yeuthich($iduser, $idsp);
        echo "yeuthich";
    }
}
?>