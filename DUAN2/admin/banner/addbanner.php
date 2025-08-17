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
                action="index.php?act=addbanner"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" enctype="multipart/form-data"
              >
                <div class="form-group__inp">
                  <input type="text" name="stt" placeholder="số thự tự" />
                </div>
                <div class="form-group__inp">
                  <input type="text" name="tenbanner" placeholder="Tên banner" />
                </div>
                <div class="form-group__inp">
                  <input type="text" name="link" placeholder="đường dẫn" />
                </div>
                <div style="margin-bottom: 0" class="form-group__inp">
                  <input type="file" name="hinh"  />
                </div>
                <div class="admin-formBtn">
                  <input type="submit" name="themmoi" value="Thêm banner " />
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listbanner'" />
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
