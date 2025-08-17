<?php
function insert_danhmucblog($tendmblog,$stt){
	$sql = "INSERT INTO danhmucblog(name,stt) VALUES ('$tendmblog','$stt')";
	pdo_execute($sql);
}
function loadall_danhmucblog(){
	$sql = "SELECT * FROM danhmucblog ORDER BY stt ASC";
	$listdmblog = pdo_query($sql);
	return $listdmblog;
}
function loadone_danhmucblog($id){
	$sql = "SELECT * FROM danhmucblog WHERE id=".$id;
	$dmblog = pdo_query_one($sql);
	return $dmblog;
}
function update_danhmucblog($id,$stt,$tendmblog){
	$sql = "UPDATE danhmucblog SET stt = '".$stt."',name = '".$tendmblog."' WHERE id=".$id;
	pdo_execute($sql);
}
function delete_danhmucblog($id){

	$sql1 = "DELETE FROM blog WHERE iduser=".$id;
	pdo_execute($sql1);
	$sql2 = "DELETE FROM danhmucblog WHERE id=".$id;
	pdo_execute($sql2);
    

}
function insert_blog($iddmblog, $iduser, $tenblog, $tomtat,$view,$noidung,$hinh){
    $sql="INSERT INTO blog(iddmblog ,iduser, tieude, tomtat, view, noidung, img) values('$iddmblog','$iduser','$tenblog','$tomtat','$view','$noidung','$hinh')";
    pdo_execute($sql);
}
function loadall_blog($kyw="",$iddmblog=0){
    $sql = "SELECT * FROM blog WHERE 1";
    if($kyw !=""){
        $sql.= " AND tieude LIKE '%".$kyw."%'";
    } 
    if($iddmblog > 0){
        $sql.= " AND iddmblog = '".$iddmblog."'";
    } 
    $sql.= " ORDER BY id DESC";
    
    $listblog = pdo_query($sql);
    return $listblog;
    // co bien ngay query thì phai có giá trị trả về
}
function loadone_blog($id){
    $sql="SELECT * FROM blog WHERE id=".$id;
    $blog=pdo_query_one($sql);
    return $blog;
}
function update_blog($id,$iddmblog, $tenblog, $tomtat, $view,$noidung,$hinh){
    if($hinh!="")
        $sql="update blog set iddmblog ='".$iddmblog."', tieude = '".$tenblog."',  tomtat='".$tomtat."',view='".$view."',noidung='".$noidung."',img='".$hinh."' where id=".$id;
    else
        $sql="update blog set iddmblog='".$iddmblog."', tieude = '".$tenblog."',  tomtat='".$tomtat."',view='".$view."',noidung='".$noidung."' where id=".$id;
    pdo_execute($sql);
}
function delete_blog($id){
    $sql="DELETE FROM blog WHERE id=".$id;
    pdo_execute($sql);
    
}
function load_blog_cungloai($id,$iddmblog){
    $sql="SELECT * FROM blog where iddmblog = ".$iddmblog." AND id <> ".$id;//id<>$id loai tru bai viêt dang xem id khác id
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>