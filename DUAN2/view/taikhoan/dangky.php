   <!--  -->
  <!-- ========== modal============== -->
  <div class="modal"></div>
  <div class="modal-menuMobile"></div>
    <!-- breadcrumb -->
    <div class="breadcrumb-bg">
      <div class="container">
        <ul class="breadcrumb">
          <div class="breadcrumb-block">
            <li><a href="index.php" class="changeurl">Trang chủ</a></li>
          </div>
          <div class="breadcrumb-block">
            <span class="spaceLink"
              ><i class="fa-solid fa-angles-right"></i
            ></span>
            <li><a href="#!" class="changeurl">Đăng ký</a></li>
          </div>
        </ul>
      </div>
    </div>

    <!-- main -->
    <main class="main mrSection">
      <div class="container">
        <div class="auth">
          <!--  -->
          <div class="auth__child">
            <ul class="auth-menu">
              <li class="auth-menu__items">
                <a href="loggin.html">Đăng nhập</a>
              </li>
              <li class="auth-menu__items">
                <a href="#!" class="activeMenu-auth">Đăng ký</a>
              </li>
            </ul>
            <!--  -->
            <h1 class="auth__title">Đăng ký</h1>
            <!--  -->
            <form action="" class="form-group" method="post">
              
              <!--  -->
              <div class="form-group__inp">
                <input type="text" placeholder="Tên đăng nhập" name="user" />
              </div>
              <!--  -->
              <div class="form-group__inp">
                <input type="email" placeholder="Email" name="email" />
              </div>
              <!--  -->
              <!--  -->
              <div class="form-group__inp">
                <input type="password" placeholder="Mật khẩu" name="pass" />
              </div>
              <!--  -->
              <input type="submit" class="form-group__submit" name="dangky" value="Đăng ký"> </button>
              <!--  -->
            </form>
            <h2 class="thongbao">
				<?php
					if(isset($thongbao)&&($thongbao!="")){
						echo $thongbao;
					}
				?>
			</h2>
            <div class="form-method">
              <span class="form-group__contentBottom">Hoặc đăng nhập bằng</span>
              <div class="form-method__child">
                <a href="#!">
                  <div class="form-method__items method-facebook">
                    <div class="form-method__icon">
                      <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="form-method__content">Facebook</div>
                  </div>
                </a>
                <a href="#!">
                  <div class="form-method__items method-google">
                    <div class="form-method__icon">
                      <i class="fa-brands fa-google"></i>
                    </div>
                    <div class="form-method__content">Google</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
    </main>
    
    <script src="view/asset/js/main.js"></script>
    <script>
      app.star = function () {
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.openSubmenu();
        this.openMenuMobile();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>
 