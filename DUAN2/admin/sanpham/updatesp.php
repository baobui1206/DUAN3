<?php
if (is_array(($sanpham))) {
  extract($sanpham);
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
                    <h1 class="main-title">Quản lý sản phẩm</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <div class="flex">
                        <form
                            action="index.php?act=updatesp"
                            class="addProduct"
                            id="inputProduct"
                            data-blockForm
                            method="post" enctype="multipart/form-data">
                            <div class="category-product">
                               <span class="category-product__title">Danh mục</span>
                                <select class="category-product__category" name="iddm[]" multiple style="max-height: 150px; overflow-y: auto;">
                                    <?php
                                    if (!empty($iddm)) {
                                        $iddmList = explode(',', $iddm); //iddm chua id của dm ở dang chuỗi 2 3 5, va explore de chuyen thanh mảng
                                    } else {
                                        $iddmList = [];
                                    }

                                    foreach ($listdanhmuc as $danhmuc):
                                        $selected = in_array($danhmuc['id'], $iddmList) ? "selected" : "";
                                    ?>
                                        <option value="<?= $danhmuc['id'] ?>" <?= $selected ?>><?= $danhmuc['name'] ?></option>
                                    <?php endforeach; //neu danh muc da chon thi check va hiên thị danhmuc theo ten danhmuc 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tensp" placeholder="Tên sản phẩm" value="<?= $name ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="giasp" placeholder="Price " value="<?= $priceold ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="sale" placeholder="Sale" value="<?= $sale ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="view" placeholder="View" value="<?= $view ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="sold" placeholder="sold" value="<?= $sold ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="slug" placeholder="slug" value="<?= $slug ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="stock" placeholder="Số lường hàng" value="<?= $stock ?>" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="dvt" placeholder="đơn vị tính" value="<?= $dvt ?>" />
                            </div>
                            <!-- check  -->
                            <div class="form-group__check">
                                <label style="font-weight:550; color:#679210;">Loại sản phẩm</label>
                            <div class="input-check">
                                <div>
                                <input type="radio" name="dacbiet" value="1" <?php if (isset($dacbiet) && $dacbiet == "1") echo "checked"; ?>> <span>Đặc biệt</span>
                                </div>
                                <div>
                                    <input type="radio" name="dacbiet" value="0" <?php if (isset($dacbiet) && $dacbiet == "0") echo "checked"; ?>> <span>Sản phẩm bình thường</span>
                                </div>
                            </div>
                            </div>
                           
                            <div class="form-group__inp">
                                <label for="" style="font-size:1.6rem;">Hình ảnh hiện tại</label>
                                <?php
                                $list_anh = loadall_img_by_idsp($id);
                                ?>
                                <?php if (!empty($list_anh)): ?>
                                    <div style="display: flex; flex-wrap: wrap; gap: 10px;margin-top:8px">
                                        <?php
                                        foreach ($list_anh as $anh): ?>
                                            <div style="width: 120px; text-align: center;">
                                                <img src="../upload/<?= $anh['img'] ?>" height="80" width="120" style="object-fit: cover; border-radius: 5px;">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <input type="file" name="hinh[]" multiple>
                            </div>
                            <div class="form-group__desc">
                                <textarea name="desc" id="mota" placeholder="Mô tả"><?=$mota?></textarea>
                                <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>
                            </div>
                            <div class="admin-formBtn">
                                <input type="hidden" name="id" value="<?=$id ?>">
                                <input type="submit" name="capnhat" value="thêm sản phẩm">
                                <input type="reset" value="Nhập lại " />
                                <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listsp'" />
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