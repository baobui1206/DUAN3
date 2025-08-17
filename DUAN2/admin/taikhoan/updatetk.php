<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
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
            <h1 class="main-title">Quản lý tài khoản</h1>
            <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
            <div class="flex">
              <form
                action="index.php?act=updatetk"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" enctype="multipart/form-data"
              >
              <div class="form-group__inp">
                  <input type="text" name="name" placeholder="Name" value="<?=$user?>" disabled/>
                </div>
                <div class="form-group__inp">
                  <input type="text" name="pass" placeholder="Pass" value="<?=$pass?>"/>
                </div>
                <div class="form-group__inp">
                  <input type="text" name="email" placeholder="Email" value="<?=$email?>" disabled/>
                </div>
                <div class="form-group__inp">
                  <input type="text" name="address" placeholder="Địa chỉ" value="<?=$address?>"/>
                </div>
                <div class="form-group__inp">
                  <input type="text" name="tel" placeholder="Điện thoại" value="<?=$tel?>" />
                </div>
                <div class="form-group__check">
                  <!-- <span>Vui lòng chọn </span> -->
                  <div class="input-check" style="display:block" >
                    <label for="role">User</label>
                    <input type="radio" id="role" name="role" value="0"  <?php if (isset($role) && $role == "0") echo "checked"; ?>  />
                  </div>
                  <div class="input-check" style="display:block">
                    <label for="role">Admin</label>
                    <input type="radio" id="role" name="role" value="1"  <?php if (isset($role) && $role == "1") echo "checked"; ?>/>
                  </div>
                </div>
                <div class="admin-formBtn">
                  <input type="hidden" name="id" value="<?=$id ?>">
                  <input type="submit" name="capnhat" value="cập nhật" > 
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=dstk'" />
                  
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
