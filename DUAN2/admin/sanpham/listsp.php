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
                    <form action="index.php?act=listsp" method="post" style="margin: 10px; text-align: center;" >
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">"' . $name . '" </option>';
                            }

                            ?>

                        </select>
                        <input type="submit" name="listok" value="Tìm kiếm">
                    </form>

                    <div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
                        <input type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
                        <input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
                        <input type="button" value="xóa các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                    <!-- table  -->
                    <table class="portfolio-table">
                        <thead class="row-title">
                            <tr>
                                <th></th>
                                <th class="tb-col2">Mã loại</th>
                                <th class="tb-col2">Tên sản phẩm</th>
                                <th class="tb-col2">hình </th>
                                <th class="tb-col3">giá</th>
                                <th class="tb-col3">lượt xem</th>
                                <th class="tb-col3">sale</th>
                                <th class="tb-col3">lượt bán</th>
                                <th class="tb-col3">stock</th>
                                <th class="tb-col3">chức năng</th>
                            </tr>
                        </thead>
                        <!-- body  -->
                        <tbody>
                            <?php
                            foreach ($listsanpham as $sanpham) {

                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=" . $id;
                                $xoasp = "index.php?act=xoasp&id=" . $id;
                                if (!empty($img)) {
                                    $hinhpath = "../upload/" . $img;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                    } else {
                                        $hinh = "no photo";
                                    }
                                } else {
                                    $hinh = "no photo";
                                }
                                echo '<tr class="row-content">
                                <td><input type="checkbox" class="checkbox-item" name="" id=""></td>
                                <td class="tb-col2 col-stt">' . $id . '</td>
                                <td class="tb-col2 col-nameCategory">' . $name . '</td>
                                <td class="tb-col2 col-nameCategory">' . $hinh . '</td>
                                <td class="tb-col3 col-nameCategory">' . $priceold . '</td>
                                <td class="tb-col3 col-nameCategory">' . $view . '</td>
                                <td class="tb-col3 col-nameCategory">' . $sale . '</td>
                                
                                <td class="tb-col3 col-nameCategory">' . $sold . '</td>
                                <td class="tb-col3 col-nameCategory">' . $stock . '</td>
                               
                                <td class="tb-col3 col-del">
                                    <div>
                                    <a href="' . $suasp . '">Sửa</a>
                                    </div>
                                    <div>
                                    <a href="' . $xoasp . '">Xóa</a>
                                    </div>
                                </td>';
                            }
                            ?>
                        </tbody>
                        <!--  -->
                    </table>
                  
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