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
                    <h1 class="main-title">Quản lý Sản phẩm</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <div class="flex">
                        <form
                            action="index.php?act=addsp"
                            class="addProduct"
                            id="inputProduct"
                            data-blockForm
                            method="post" enctype="multipart/form-data">
                            <div class="category-product">
                               <span class="category-product__title">Danh mục</span>
                                <select class="category-product__category" name="iddm[]" multiple style="max-height: 150px; overflow-y: auto;">
                                    <?php foreach ($listdanhmuc as $danhmuc): ?>
                                        <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tensp" placeholder="Tên sản phẩm"  />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="giasp" placeholder="Price " />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="sale" placeholder="Sale" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="view" placeholder="View" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="sold" placeholder="sold" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="slug" placeholder="slug" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="stock" placeholder="Số lường hàng" />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="dvt" placeholder="đơn vị tính" />
                            </div>
                            <div class="form-group__inp">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="hinh[]" placeholder="Chọn hình ảnh" multiple />
                            </div>
                            <div class="form-group__desc">
                                <textarea name="desc" id="mota" placeholder="Mô tả"></textarea>
                                <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace('mota');
                                </script>
                            </div>
                            <div class="admin-formBtn">
                                <input type="submit" name="themmoi" value="Thêm sản phẩm " />
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
    <script src="/asset/js/main.js"></script>
    <script>
        app.star = function() {
            // this.tabAdmin();
            this.openCategory();
            this.renderTextInp();
            this.search();
        };
        app.star();
    </script>
</body>

</html>