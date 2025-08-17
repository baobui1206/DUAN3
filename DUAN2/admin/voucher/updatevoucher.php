<?php
    if(is_array($voucher)){
        extract($voucher);
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
            <h1 class="main-title">Quản lý Voucher</h1>
            <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
            <div class="flex">
              <form
                action="index.php?act=updatevoucher"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" 
              >
              <div class="form-group__inp">
                  <input type="text" name="tenvoucher" placeholder="Tên voucher" value="<?=$name?>" />
                </div>
                <div class="form-group__inp">
                  <input type="text" name="code" placeholder="Mã code" value="<?=$code?>"/>
                </div>
                <div class="form-group__inp">
                  <input type="text" name="giamgia" placeholder="Giảm giá" value="<?=$giamgia?>" />
                </div>
                <div class="form-group__inp">
                  <input type="date" name="ngayhethan" placeholder="Ngày hết hạn" value="<?=$ngayhethan?>"/>
                </div>
                <div class="form-group__desc">
                    <textarea name="chitiet"  placeholder="Chi tiết giảm giá"><?=$chitiet?></textarea>
                </div>
                <div class="admin-formBtn">
                  <input type="hidden" name="id" value="<?=$id ?>">
                  <input type="submit" name="capnhat" value="cập nhật" > 
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listvoucher'" />
                  
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
      app.star = function () {
        // this.tabAdmin();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>
  </body>
</html>
