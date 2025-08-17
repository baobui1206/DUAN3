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
        <li><a href="#!" class="changeurl">Đăng nhập</a></li>
      </div>
    </ul>
  </div>
</div>

<!-- main  -->
<main class="main mrSection">
  <div class="container">
    <div class="auth">
      <!--  -->
      <div class="auth__child">
        <!--  -->
        <h1 class="auth__title">CẬP NHẬT TÀI KHOẢN</h1>
        <?php 
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
        ?>
        <!--  -->
        <form action="" class="form-group" method="post">
          <div class="form-group__inp">
            <input type="text" name="user" placeholder="tên đăng nhập" value="<?=$user?>" disabled />
          </div>
          <div class="form-group__inp">
            <input type="email" name="email" placeholder="tên email" value="<?=$email?>" disabled />

          </div>
          <div class="form-group__inp">
            <input type="tel" name="tel" placeholder="nhập số điện thoại" value="<?=$tel?>" />
          </div>
          <div class="form-group__inp">
            <input type="text" name="address" placeholder="nhập địa chỉ nhà" value="<?=$address?>" />
          </div>
          <!--  -->
          <div class="form-group__inp">
            <input type="password" name="pass" placeholder="Password"  value="<?=$pass?>"/>
          </div>
          <!--  -->
          <input type="hidden" name="id" value="<?=$id?>">
          <input class="form-group__submit" type="submit" value="Cập nhật tài khoản" name="capnhat">
          <input class="form-group__submit" type="reset" value="Nhập lại" >
          
        </form>
        <h2 class="thongbao">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </h2>

        <!-- quên pass nè  -->
        
        
        <!-- quên pass đóng  -->

        
      </div>
      <!--  -->
    </div>
  </div>
</main>