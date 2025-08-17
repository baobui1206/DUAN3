<?php
    if(is_array(($banner))){
        extract($banner);
    }
    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
      $hinh = "<img src='".$hinhpath."' height='80'>";
    }else {
      $hinh = "no photo";
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
            <h1 class="main-title">Quản lý banner</h1>
            <!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
            <div class="flex">
              <form
                action="index.php?act=updatebanner"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" enctype="multipart/form-data"
              >
                <div class="form-group__inp">
                    <input type="text" name="stt" placeholder="số thứ tự " value="<?=$stt ?>" />
                </div>
                <div class="form-group__inp">
                    <input type="text" name="tenbanner" placeholder="Tên banner" value="<?=$name?>" />
                </div>
                <div class="form-group__inp">
                    <input type="text" name="link" placeholder="Link ảnh" value="<?=$link?>" />
                </div>
                <div style="margin-bottom: 0" class="form-group__inp">
                    <input type="file" name="hinh" placeholder="img " /><?=$hinh?>
                </div>
                <div class="admin-formBtn">
                  <input type="hidden" name="id" value="<?=$id ?>">
                  <input type="submit" name="capnhat" value="cập nhật" > 
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listbanner'" />
                  
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
