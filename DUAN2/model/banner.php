<?php
function insert_banner($tenbanner,$stt,$link,$hinh){
    $sql="INSERT INTO banner(stt,name,link,img) VALUES('$stt','$tenbanner','$link','$hinh')";
        pdo_execute($sql);
}function loadall_banner(){
    $sql = "select * from banner order by stt ASC";//sap xep theo tu be truoc lon sau
    $listbanner = pdo_query($sql);
    return $listbanner;
    // co bien ngay query thì phai có giá trị trả về
}
function loadone_banner($id){
    $sql = "select * from banner where id=".$id;
    $banner = pdo_query_one($sql);
    return $banner;
}
function update_banner($id,$tenbanner,$stt,$link,$hinh){
    if($hinh!="")
        $sql="UPDATE banner SET name='".$tenbanner."',  stt='".$stt."', link='".$link."', img='".$hinh."' WHERE id=".$id;
    else
        $sql="UPDATE banner SET name='".$tenbanner."',  stt='".$stt."', link='".$link."' WHERE id=".$id;
    pdo_execute($sql);
}
function delete_banner($id){
    $sql1 = "DELETE FROM banner WHERE id = ?";
    pdo_execute($sql1, $id);
}
function loadone_banner_stt($stt){
    $sql = "select * from banner where stt=".$stt;
    $banner = pdo_query_one($sql);
    return $banner;
} 
?>