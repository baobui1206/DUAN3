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
                    <h1 class="main-title">Quản lý danh mục</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <form action="index.php?act=listblog" method="post" style="margin: 10px; text-align: center;" >
                        <input type="text" name="kyw">
                        <select name="iddmblog">
                            <option value="0" selected>tất cả</option>
                            <?php
                            foreach ($listdanhmucblog as $danhmucblog) {
                                extract($danhmucblog);
                                echo '<option value="' . $id . '">"' . $name . '" </option>';
                            }

                            ?>

                        </select>
                        <input type="submit" name="listok" value="Tìm kiếm">
                    </form>
                    <?php
                    
                    ?>    
                    
                     <div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
                        <input type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
                        <input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
                        <input type="button" value="xóa các mục đã chọn">
                        <a href="index.php?act=addblog"><input type="button" value="Nhập thêm"></a>
                    </div>   
                    <!-- table  -->
                    <table class="portfolio-table">
                        <thead class="row-title">
                            <tr>
                                <th></th>
                                <th class="tb-col2">Mã loại</th>
                                <th class="tb-col2">tên danh mục</th>
                                <th class="tb-col2">Tiêu đề bài viết</th>
                                <th class="tb-col2">hình  </th>
                                <th class="tb-col2">lượt xem </th>
                                <th class="tb-col3">ngày đăng</th>
                                <th class="tb-col3">chức năng</th>
                            </tr>
                        </thead>
                        <!-- body  -->
                        <tbody>
                            <?php
                            foreach ($listblog as $blog) {

                                extract($blog);
                                $tendmblog = '';
                                foreach($listdanhmucblog as $danhmucblog){
                                    if($danhmucblog['id'] == $iddmblog ){
                                        $tendmblog = $danhmucblog['name'];
                                        break;
                                    }
                                }
                                $suablog = "index.php?act=suablog&id=" . $id;
                                $xoablog = "index.php?act=xoablog&id=" . $id;
                                if (!empty($img)) {
                                    $hinhpath = "../upload/" . $img;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' height='80' width='100'>";
                                    } else {
                                        $hinh = "no photo";
                                    }
                                } else {
                                    $hinh = "no photo";
                                }
                                echo '<tr class="row-content">
                                <td><input type="checkbox" class="checkbox-item" name="" id=""></td>
                                <td class="tb-col2 col-stt">' . $id . '</td>
                                <td class="tb-col2 col-stt">' . $tendmblog . '</td>
                                <td class="tb-col2 col-nameCategory">' . $tieude . '</td>
                                <td class="tb-col2 col-nameCategory">' . $hinh . '</td>
                                <td class="tb-col3 col-nameCategory">' . $view . '</td>
                                <td class="tb-col3 col-nameCategory">' . $ngaydang . '</td>
                                
                               
                                <td class="tb-col3 col-del">
                                    <div>
                                    <a href="' . $suablog . '">Sửa</a>
                                    </div>
                                    <div>
                                    <a href="' . $xoablog . '">Xóa</a>
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