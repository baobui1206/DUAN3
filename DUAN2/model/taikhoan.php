<?php
function insert_taikhoan($user,$pass,$email){
	$sql = "INSERT INTO taikhoan(user,pass,email) VALUES ('$user','$pass','$email')";
	pdo_execute($sql);
}
function checkuser($user,$pass){
	$sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."'";
	$tk = pdo_query_one($sql);
	return $tk;
}
function update_taikhoan($id,$tel,$address,$pass){
	$sql = "UPDATE taikhoan SET tel = '".$tel."',address = '".$address."',pass = '".$pass."' WHERE id=".$id;
	pdo_execute($sql);
}
function checkemail_user($user,$email){
	$sql = "SELECT * FROM taikhoan WHERE user='".$user."'AND email='".$email."'";
	$tk = pdo_query_one($sql);
	return $tk;
}
function loadall_taikhoan(){
	$sql = "SELECT * FROM taikhoan ORDER BY id desc";
	$listtaikhoan = pdo_query($sql);
	return $listtaikhoan;
}
function loadone_taikhoan($id){
	$sql = "SELECT * FROM taikhoan WHERE id=".$id;
	$tk = pdo_query_one($sql);
	return $tk;
}
function update_taikhoan_admin($id,$tel,$address,$pass,$role){
	$sql = "UPDATE taikhoan SET tel = '".$tel."',address = '".$address."',pass = '".$pass."',role = '".$role."' WHERE id=".$id;
	pdo_execute($sql);
}
function delete_taikhoan($id){
	$sql1 = "DELETE FROM bill WHERE iduser=".$id;
	pdo_execute($sql1);
	$sql2 = "DELETE FROM blog WHERE iduser=".$id;
	pdo_execute($sql2);
	$sql3 = "DELETE FROM danhgia WHERE iduser=".$id;
	pdo_execute($sql3);
	$sql4 = "DELETE FROM cart WHERE iduser=".$id;
	pdo_execute($sql4);
	$sql5 = "DELETE FROM taikhoan WHERE id=".$id;
	pdo_execute($sql5);


}
function insert_yeuthich($iduser,$idsp){
	$sql = "INSERT INTO yeuthich(iduser, idsp) VALUES ('$iduser','$idsp')";
	pdo_execute($sql);
}
function check_yeuthich($iduser,$idsp){
	$sql = "SELECT * FROM yeuthich WHERE iduser='".$iduser."'AND idsp='".$idsp."'";
	$yeuthich = pdo_query_one($sql);
	return $yeuthich;
}
function loadall_yeuthich($iduser=0){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img,yt.id AS idthich FROM sanpham sp 
	INNER JOIN yeuthich yt ON sp.id = yt.idsp
	WHERE yt.iduser=".$iduser;
	$yeuthich = pdo_query($sql);
	return $yeuthich;
}
function delete_yeuthich($id){
	$sql = "DELETE FROM yeuthich WHERE id=".$id;
	pdo_execute($sql);
}
?>