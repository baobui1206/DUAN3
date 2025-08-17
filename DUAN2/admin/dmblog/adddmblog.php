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
                action="index.php?act=adddmblog"
                class="addProduct"
                id="inputProduct"
                data-blockForm
                method="post" 
              >
                <div class="form-group__inp">
                  <input type="text" name="tendmblog" placeholder="Tên danh mục" />
                </div>
                <div class="form-group__inp">
                  <input type="text" name="stt" placeholder="số thự tự" />
                </div>
                
                <div class="admin-formBtn">
                  <input type="submit" name="themmoi" value="Thêm danh mục " />
                  <input type="reset" value="Nhập lại " />
                  <input type="button" value="Danh sách" onclick="window.location.href='index.php?act=listdmblog'" />
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
