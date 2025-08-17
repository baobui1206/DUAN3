<?php
    if(is_array($dmblog)){
        extract($dmblog);
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
            <h1 class="main-title">Quản lý danh mục bài viết</h1>
            <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
            <div class="flex">
              <form
                action="index.php?act=updatedmblog"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" 
              >
              <div class="form-group__inp">
                  <input type="text" name="stt" placeholder="Số thứ tự" value="<?=$stt?>"/>
                </div>
              <div class="form-group__inp">
                  <input type="text" name="tendmblog" placeholder="Tên danh mục bài viết" value="<?=$name?>" />
                </div>
                
                
                
                <div class="admin-formBtn">
                  <input type="hidden" name="id" value="<?=$id ?>">
                  <input type="submit" name="capnhat" value="cập nhật" > 
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listdmblog'" />
                  
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
