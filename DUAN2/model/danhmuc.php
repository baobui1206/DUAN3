<?php
    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by stt ASC";//sap xep theo tu be truoc lon sau
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
        // co bien ngay query thì phai có giá trị trả về
    }
    function insert_danhmuc($tendm,$stt,$hinh){
        $sql="insert into danhmuc(name,stt,img) values('$tendm','$stt','$hinh')";
        pdo_execute($sql);
    
    }
    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tendm,$stt,$hinh){
        if($hinh!="")
        $sql="update danhmuc set  name='".$tendm."',  stt='".$stt."',img='".$hinh."' where id=".$id;
    else
        $sql="update danhmuc set  name='".$tendm."',  stt='".$stt."' where id=".$id;
    pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql1 = "DELETE FROM sanphamdanhmuc WHERE iddm = ?";
        pdo_execute($sql1, $id);

        // Xóa danh mục
        $sql2 = "DELETE FROM danhmuc WHERE id = ?";
        pdo_execute($sql2, $id);
    }
   

?>