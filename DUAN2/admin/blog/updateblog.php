<?php
if (is_array(($blog))) {
  extract($blog);
}
$hinhpath = "../upload/".$img;
	if(is_file($hinhpath)){
		$hinh = "<img src='".$hinhpath."' height='80' >";
	}else {
		$hinh = "no photo";
	}
?>

<body>
    <!-- main -->
    <main class="main">
        <div class="container-fluid">
            <div class="admin">
                <?php
                include "../admin/boxleft.php";
                ?>
                <!--  -->
                <div class="admin__right">
                    <h1 class="main-title">Quản lý bài viết</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <div class="flex">
                        <form
                            action="index.php?act=updateblog"
                            class="addProduct"
                            id="inputProduct"
                            data-blockForm
                            method="post" enctype="multipart/form-data">
                            <div class="category-product">
                               <span class="category-product__title">Danh mục</span>
                                <select class="category-product__category" name="iddmblog"  style="max-height: 150px; overflow-y: auto;">
                                    <?php
                                    

                                    foreach ($listdanhmucblog as $danhmucblog){
                                        if($iddmblog == $danhmucblog['id']) $s="selected"; else $s="";
										
									echo '<option value="'.$danhmucblog['id'].'" '.$s.'>"'.$danhmucblog['name'].'" </option>';
                                    }
                                    ?>
                                        
                                    
                                </select>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="name" placeholder="Tiêu đề bài viết" value="<?= $tieude ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tomtat" placeholder="Tóm tắt " value="<?= $tomtat ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="view" placeholder="Lượt xem" value="<?= $view ?>" />
                            </div>
                            <div class="form-group__inp "  >
                                <input type="file" name="hinh"   style="display:block;margin-bottom:10px" /><?=$hinh ?>
                            </div>
                            <div class="form-group__desc" >
                                <textarea name="noidung" id="noidung" placeholder="Mô tả"><?=$noidung?></textarea>
                                <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace('noidung');
                                </script>
                            </div>
                            <div class="admin-formBtn">
                                <input type="hidden" name="id" value="<?=$id ?>">
                                <input type="submit" name="capnhat" value="thêm bài viết">
                                <input type="reset" value="Nhập lại " />
                                <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listblog'" />
                                <!-- <button type="submit">Thêm</button>
                  <button type="reset">Nhập lại</button>
                  <button type="button">Danh sách</button> -->
                                <!-- <button type="submit">Nhập lại</button> -->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- script -->
    
</body>

</html>