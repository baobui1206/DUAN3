<?php
function loadall_danhgiaadmin($iduser,$idsp){
    $sql = "SELECT * FROM danhgia WHERE 1";
    if($idsp>0) $sql .= " AND idsp = '".$idsp."'";
    if($iduser>0) $sql .= " AND iduser = '".$iduser."'";
    $sql .= " ORDER BY  id desc";
    $listdg = pdo_query($sql);
    return $listdg;

}
function delete_danhgia($id){
    $sql = "DELETE FROM danhgia where id=".$id;
    pdo_execute($sql);
}
function insert_danhgia($iduser, $idsp, $noidung, $sosao, $ngaydanhgia){
    $sql = "INSERT INTO danhgia (iduser, idsp, noidung, sosao, ngaydanhgia) VALUES ('$iduser','$idsp','$noidung','$sosao','$ngaydanhgia')";
    pdo_execute($sql);
}
function loadall_danhgia($idsp){
    $sql = "SELECT dg.*, tk.user 
    FROM danhgia dg JOIN taikhoan tk ON dg.iduser = tk.id
    WHERE idsp=".$idsp;
    $sql .= " ORDER BY dg.id DESC";
    return pdo_query($sql); 
}
function damua_sanpham($iduser,$idsp){
	$sql = "SELECT * FROM cart
	INNER JOIN bill ON cart.idbill = bill.id 
	WHERE bill.iduser = ".$iduser;
	$sql .= " AND cart.idsp=".$idsp;
	$sql .= " AND bill.bill_status = 4";
	$result = pdo_query($sql);
	return count($result)>0;
	
}
?>