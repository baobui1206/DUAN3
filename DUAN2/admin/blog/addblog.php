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
                            action="index.php?act=addblog"
                            class="addProduct"
                            id="inputProduct"
                            data-blockForm
                            method="post" enctype="multipart/form-data">
                            <div class="category-product">
                               <span class="category-product__title">Danh mục bài viết</span>
                                <select class="category-product__category" name="iddmblog"  style="max-height: 150px; overflow-y: auto;">
                                    <?php foreach ($listdanhmucblog as $danhmucblog):
                                         ?>
                                        <option value="<?= $danhmucblog['id'] ?>"><?= $danhmucblog['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="name" placeholder="Tiêu đề bài viết"  />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tomtat" placeholder="tóm tắt bài viết " />
                            </div>
                            <div class="form-group__inp">
                                <input type="file" name="hinh"  />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="view" placeholder="lượt xem bài viết" />
                            </div>
                            <div class="form-group__desc">
                                <textarea name="noidung" id="noidung" placeholder="nội dung bài viết"></textarea>
                                <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace('noidung');
                                </script>
                            </div>
                            <div class="admin-formBtn">
                                <input type="submit" name="themmoi" value="Thêm bài viết " />
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