<?php
if (is_array(($bill))) {
  extract($bill);
}
$status_arr = [
    0 => "Chờ xử lý",
    1 => "Đang xử lý",
    2 => "Đang giao hàng",
    3 => "Đã giao",
    4 => "Hoàn tất",
    5 => "Đơn hàng đã hủy"
]
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
                    <h1 class="main-title">Quản lý Hóa đơn</h1>
                    <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
                    <div class="flex">
                        <form
                            action="index.php?act=updatebill"
                            class="addProduct"
                            id="inputProduct"
                            data-blockForm
                            method="post" >
                            
                            <div class="form-group__inp">
                                <input type="text" name="tenkh" placeholder="Tên khách hàng" value="<?= $bill_name ?>(Tên khách hàng)" disabled/>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="email" placeholder="Địa chỉ email " value="<?= $bill_address ?>(Địa chỉ email)" disabled/>
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tel" placeholder="điện thoại" value="<?= $bill_tel ?>(Điện thoại)" disabled />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tamtinh" placeholder="tạm tính có phí ship" value="<?= number_format($tamtinh+50000, 0, ',', '.') ?>VND(Tạm tính có phí ship)" disabled />
                            </div>
                           
                            <div class="form-group__inp">
                                <input type="text" name="giamgia" placeholder="giảm giá" value="<?=  number_format($giamgia, 0, ',', '.') ?>VND(Giảm giá)" disabled />
                            </div>
                            <div class="form-group__inp">
                                <input type="text" name="tongdonhang" placeholder="tổng đơn hàng" value="<?= number_format($total, 0, ',', '.') ?>VND(Tổng đơn hàng)" disabled />
                            </div>
                            
       
                            <div class="input-check">
                                <label>tình trạn đơn hàng</label>
                                <select name="bill_status" >
                                    <?php
                                    foreach ($status_arr as $key => $value){
                                        //chỉ hiện thị những trạng thái >= trạng thái  hiện tại
                                        if($key >= $bill_status){
                                            $select = ($key == $bill_status) ? "selected" : "";
                                            echo "<option value='$key' $selected>$value</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="admin-formBtn">
                                <input type="hidden" name="id" value="<?=$id ?>">
                                <input type="submit" name="capnhat" value="Cập nhật bill">
                                <input type="reset" value="Nhập lại " />
                                <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listbill'" />
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