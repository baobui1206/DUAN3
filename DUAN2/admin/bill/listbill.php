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
                    <h1 class="main-title">Quản lý hóa đơn</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <form action="index.php?act=listbill" method="post" style="margin: 10px; text-align: center;" >
                        <input type="text" name="kyw">
                        <select name="idtk">
                            <option value="0" selected>tất cả</option>
                            <?php
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                echo '<option value="' . $id . '">"' . $user . '" </option>';
                            }

                            ?>

                        </select>
                        <input type="submit" name="listok" value="Go">
                    </form>
                    <div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
                        <input type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
                        <input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
                        <input type="button" value="xóa các mục đã chọn">
                       
                    </div>
                    <!-- table  -->
                    <table class="portfolio-table">
                        <thead class="row-title">
                            <tr>
                                <th class="tb-col1"></th>
                                <th class="tb-col1">Mã</th>
                                <th class="tb-col3">Khách hàng</th>
                                <th class="tb-col1">Số lượng  </th>
                                <th class="tb-col2">Thành tiền</th>
                                <th class="tb-col2">Ngày đặt hàng</th>
                                <th class="tb-col1">Trạng thái</th>
                                <th class="tb-col1">Chức năng</th>
                            </tr>
                        </thead>
                        <!-- body  -->
                        <tbody>
                            <?php
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $suadh = "index.php?act=suadh&id=" . $id;
                                $xoadh = "index.php?act=xoadh&id=" . $id;
                                
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp =  loadall_cart_count($bill["id"]);
                                echo '<tr class="row-content">
                                <td class="tb-col1"><input type="checkbox" class="checkbox-item" name="" id=""></td>
                                <td class="tb-col1 col-stt">DM-' . $id . '</td>
                                
                                <td class="tb-col3 col-nameCategory"><div><span style="display:block;font-size:1.4rem;font-weight:600;">Tên:</span>
                                <span style="font-size:1.6rem;">' . $bill_name. '</span></div>
                                <div style="margin-top:6px"><span style="display:block;font-size:1.4rem;font-weight:600;">Email:</span>
                                <span style="font-size:1.6rem;">' . $bill_email. '</span></div>
                                <div style="margin-top:6px"><span style="display:block;font-size:1.4rem;font-weight:600;">Điện thoại</span>
                                <span style="font-size:1.6rem;">' . $bill_tel. '</span></div>
                                </td>
                              
                                <td class="tb-col1 col-nameCategory">' . $countsp . '</td>

                                  <td class="tb-col2 col-nameCategory"><div><span style="display:block;font-size:1.4rem;font-weight:600;">Tạm tính:</span>' . number_format($tamtinh+50000, 0, ',', '.') . '₫</div>
                                <div style="margin-top:6px"><span style="display:block;font-size:1.4rem;font-weight:600;">Giảm giá:</span>' . number_format($giamgia, 0, ',', '.') . '₫</div>
                                <div style="margin-top:6px"><span style="display:block;font-size:1.4rem;font-weight:600;">Tổng tiền:</span>' . number_format($total + 50000, 0, ',', '.') . '₫</div>
                                </td>

                                <td class="tb-col2 col-nameCategory" style="font-size:1.3rem;font-weight:600;">' . $ngaydathang . '</td>
                                <td class="tb-col1 col-nameCategory">' . $ttdh . '</td>
                
                                <td class="tb-col1 col-del">
                                    <div>
                                    <a href="' . $suadh . '">Cập nhật trạng thái </a>
                                    </div>
                                    <div style="margin-top:6px;">
                                    <a href="' . $xoadh . '">Xóa</a>
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