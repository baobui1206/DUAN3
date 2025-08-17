<?php
include "../model/voucher.php";
include "../model/pdo.php";
$code = $_POST['code'];
$tamtinh = $_POST['tamtinh'];
$voucher = get_voucher_by_code($code);
if($voucher){
    $giagiam = $voucher['giamgia'];
}else{
    $giagiam = 0;
}
// var_dump($tamtinh, $giagiam);
$tamtinh = str_replace(['₫', '.', ','], '', $tamtinh);
$tamtinh = (float)$tamtinh;
$giagiam = (float)$giagiam;
// var_dump($tamtinh, $giagiam);

$tongdonhang = $tamtinh -$giagiam;
$tongdonhang = max($tongdonhang, 0); //tránh bị trừ hết tiền thành âm ko co tiền trảtrả
echo number_format($tongdonhang, 0, ',', '.') . '₫';

?>