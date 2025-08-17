<?php
function get_voucher_by_code($code){
    $sql = "SELECT * FROM voucher 
    WHERE code = '$code' 
    AND  ngayhethan >= CURDATE()";
    $voucher = pdo_query_one($sql);
    return $voucher;
}
function insert_voucher($tenvoucher,$code,$giamgia,$ngayhethan,$chitiet){
    $sql = "INSERT INTO voucher(name,code,giamgia,ngayhethan,chitiet) VALUES ('$tenvoucher','$code','$giamgia','$ngayhethan','$chitiet')";
    pdo_execute($sql);
}
function loadall_voucher(){
    $sql = "SELECT * FROM voucher ORDER BY id DESC";
    $listvoucher = pdo_query($sql);
    return $listvoucher;
}
function loadone_voucher($id){
    $sql = "SELECT * FROM voucher WHERE id=".$id;
    $voucher = pdo_query_one($sql);
    return $voucher;
}
function delete_voucher($id){
    $sql1 = "DELETE FROM voucher WHERE id=".$id;
    pdo_execute($sql1);
}
function update_voucher($id,$tenvoucher,$code,$giamgia,$ngayhethan,$chitiet){
    $sql = "UPDATE voucher SET name='".$tenvoucher."', code='".$code."', giamgia='".$giamgia."', ngayhethan='".$ngayhethan."',chitiet='".$chitiet."' WHERE id=".$id;
    pdo_execute($sql);
}

?>