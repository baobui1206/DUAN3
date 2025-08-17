<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Organic Home</title>
	<!-- Favicon  -->
	<link
	  rel="apple-touch-icon"
	  sizes="180x180"
	  href="viewview/asset/images/favicon/apple-touch-icon.png"
	/>
	<link
	  rel="icon"
	  type="image/png"
	  sizes="32x32"
	  href="view/asset/images/favicon/favicon-32x32.png"
	/>
	<link
	  rel="icon"
	  type="image/png"
	  sizes="16x16"
	  href="view/asset/images/favicon/favicon-16x16.png"
	/>
	<link rel="manifest" href="view/asset/images/favicon/site.webmanifest" />

	<!-- font chữ -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
	  href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
	  rel="stylesheet"
	/>
	<!-- icon -->
	<link
	  rel="stylesheet"
	  href="view/asset/fontawesome-free-6.6.0-web/css/all.min.css"
	/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	 <!-- link thư viện ngoài  -->
	 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<!-- link css -->
	<link rel="stylesheet" href="view/asset/scss/main.css" />
	<script src="view/asset/js/node_modules/axios/dist/axios.min.js"></script>
  </head>
  <body>
	<h1 style="display: none">
	  Organic Home chuyên cung cấp rau sạch xanh và không thuốc men
	</h1>
	<!-- ======== header ======== -->
	<header class="header">
	<div class="header-border">
        <div class="container">
          <div class="header-child">
            <!-- left -->
            <div class="header-logo">
              <!-- bar  -->
              <div class="bar-mobile">
                <i class="fa-solid fa-bars-staggered"></i>
              </div>
              <!-- modal  -->
              <!-- menu mobile  -->
              <div class="menu-mobile">
                <div class="menu-loggin">
                  <div class="menu-loggin__icon">
                    <div class="overflowIcon">
                      <i class="fa-solid fa-user"></i>
                    </div>
                  </div>
                  <div class="loggin-content">
                    <a class="loggin-content__loggin" href="loggin.html"
                      >Đăng nhập</a
                    >
                    <a class="loggin-content__register" href="register.html"
                      >Đăng ký</a
                    >
                  </div>
                </div>
                <!--  -->
                <ul class="list-menu">
                  <li class="menu">
                    <div class="menu__content"><a href="#!">Trang chủ </a></div>
                  </li>
                  <li class="menu">
                    <div class="menu__content"><a href="#!">Giới thiệu</a></div>
                  </li>
                  <li class="menu">
                    <div class="menu__content">
                      <a href="#!">Sản phẩm</a>
                      <div class="menu-click">
                        <i class="fa-solid fa-plus"></i>
                      </div>
                    </div>

                    <!-- sub menu -->
                    <ul class="sub-menu">
                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Rau quả</a>
                          <div class="menu-click">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>

                        <!-- sub menu -->
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Rau lá</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Củ, quả</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Nấm các loại</a>
                            </div>
                          </li>
                        </ul>
                        <!--đóng -->
                      </li>
                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Trái cây</a>
                          <div class="menu-click">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                        <!-- sub menu -->
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Cam, bưởi</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Xoài</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Chuối</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Nho</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Dưa</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Táo</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Trái cây khác</a>
                            </div>
                          </li>
                        </ul>
                        <!--đóng -->
                      </li>

                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Đồ khô</a>
                          <div class="menu-click">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                        <!-- sub menu -->
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Gạo các loại</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Bột các loại </a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Đồ chay các loại</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Rong biển, bánh tráng, đậu</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Các loại đồ khô khác </a>
                            </div>
                          </li>
                        </ul>
                        <!--đóng -->
                      </li>
                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Nước ép</a>
                          <div class="menu-click">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                        <!-- sub menu -->
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Nước ép đóng chai</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Nước ép có đường </a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Nước ép không đường</a>
                            </div>
                          </li>
                        </ul>
                        <!--đóng -->
                      </li>
                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Salad</a>
                          <div class="menu-click">
                            <i class="fa-solid fa-plus"></i>
                          </div>
                        </div>
                        <!-- sub menu -->
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Cải xoăn</a>
                            </div>
                          </li>
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Rau xà lách</a>
                            </div>
                          </li>
                        </ul>
                        <!--đóng -->
                      </li>
                      <li class="menu">
                        <div class="menu__content">
                          <a href="#!">Thực phẩm Organic khác</a>
                        </div>
                        <ul class="sub-menu">
                          <li class="menu">
                            <div class="menu__content">
                              <a href="#!">Đồ chạy các loại</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li class="menu">
                    <div class="menu__content">
                      <a href="#!">Sản phẩm khuyến mãi</a>
                    </div>
                  </li>
                  <li class="menu">
                    <div class="menu__content"><a href="#!">Liên hệ</a></div>
                  </li>
                </ul>
              </div>
              <!--  -->
              <a href="index.php">
                <img src="view/asset/images/logo/Logo(main) (1).png" alt="Organic Home" />
              </a>
              <div class="block"></div>
            </div>
            <!-- form -->
			<form action="index.php?act=sanpham" method="post" class="header-form">
			  <input
				id="header-form__inp"
				type="text"
				placeholder="Tìm cái gì..."
				name="kyw"
			  />
			  <button id="btnSearch" type="submit" name="timkiem">
				<i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm
			  </button>
			</form>
            <!-- right -->
            <div class="header-timeWork">
              <div class="header-timeWork__items">
                <img src="view/asset/images/time-work.webp" alt="" />
                <div class="header-timeWork__content">
                  <p>
                    Thời gian làm việc <br /><span>8 - 21h </span> (từ thứ 2 -
                    Chủ nhật)
                  </p>
                </div>
              </div>
              <div class="header-timeWork__items">
                <img src="view/asset/images/free-ship.png" alt="" />
                <div class="header-timeWork__content">
                  <p>Tốc độc nhanh chóng</p>
                  <img src="view/asset/images/free-ship-2h.webp" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	  <!--tiếp   -->
<!-- mới===================  -->
<div class="container">
        <nav class="header-nav">
          <div class="header-nav__left">
            <div class="category-btn">
              <i class="fa-solid fa-layer-group"></i>
              <span>Danh mục sản phẩm</span>
            </div>
          </div>
          <!--  -->
          <div class="header-nav__center">
            <div class="header-menu">
              <div class="block-menu">
                <ul class="header-menu__child">
                  <li class="header-menu__list">
                    <a class="title-header" href="index.php">Trang chủ</a>
                  </li>
                  <li class="header-menu__list">
                    <a class="title-header" href="index.php?act=gioithieu">Giới thiệu</a>
                  </li>
                  <li class="header-menu__list header-menu__showMenu">
                    <a class="title-header" href="index.php?act=sanpham">
                      Sản phẩm <i class="fa-solid fa-caret-down"></i
                    ></a>

                    <!--=============mega content=======  -->
                    <div class="mega-content">
                      <ul class="list-content">
                        <li class="block-content">
                          <a href="#!" class="block-content__title">
                            Rau quả
                          </a>
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!"> Rau lá </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Củ, quả</a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Nấm các loại</a>
                            </li>
                          </ul>
                        </li>
                        <li class="block-content">
                          <a href="#!" class="block-content__title">
                            Trái cây</a
                          >
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!"> Cam, bưởi </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Xoài </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Chuối </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Nho</a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Dưa</a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Táo</a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Trái cây khác </a>
                            </li>
                          </ul>
                        </li>
                        <li class="block-content">
                          <a href="#!" class="block-content__title"> Đồ khô</a>
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!"> Gạo các loại </a>
                            </li>
                            <li class="content__items">
                              <a href="#!">Bột các loại </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Đồ chay các loại </a>
                            </li>
                            <li class="content__items">
                              <a href="#!">Rong biển, bánh tráng, đậu </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Các loại đồ khô khác </a>
                            </li>
                          </ul>
                        </li>
                        <li class="block-content">
                          <a href="#!" class="block-content__title">
                            Nước ép
                          </a>
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!"> Nước ép đóng chai</a>
                            </li>
                            <li class="content__items">
                              <a href="#!">Nước ép có đường </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Nước ép không đường </a>
                            </li>
                          </ul>
                        </li>
                        <li class="block-content">
                          <a href="#!" class="block-content__title"> Salad </a>
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!"> Cải xoăn </a>
                            </li>
                            <li class="content__items">
                              <a href="#!"> Rau xà lách</a>
                            </li>
                          </ul>
                        </li>
                        <li class="block-content">
                          <a href="#!" class="block-content__title">
                            Thực phẩm Organic khác
                          </a>
                          <ul class="content">
                            <li class="content__items">
                              <a href="#!">Đồ chay các loại </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="header-menu__list">
                    <a class="title-header" href="index.php?act=sanphamsale">Sản phẩm khuyến mãi</a>
                  </li>
                  <li class="header-menu__list">
                    <a class="title-header" href="index.php?act=lienhe">Liên hệ</a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="header-menu__arrow">
              <li><i class="fa-solid fa-chevron-left btnarr-left"></i></li>
              <li>
                <i class="fa-solid fa-chevron-right btnarr-right active-ar"></i>
              </li>
            </ul>
          </div>
          <div class="header-nav__right">
            <ul class="header-user">
              <a href="#!">
                <li class="header-user__list header-user__phone">
                  <div class="header-userCircle flex-center">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <span class="tell">0982746987</span>
                </li></a>
                <?php if(isset($_SESSION['user'])): ?>
              <a href="index.php?act=list_yeuthich">
                <li class="header-user__list header-user__loveProduct">
                    <i class="fa-regular fa-heart"></i>
                    <div class="count-love"><?=$count_yt?>
                    </div>
                </li>
              </a>
              <?php endif; ?>
              <a href="index.php?act=viewcart"
                ><li class="header-user__list header-user__cart">
                  <i class="fa-solid fa-cart-shopping"></i>
                  <div class="header-count flex-center"><?=$count_cart?></div>
                </li>
              </a
              >
              <li class="header-user__list header-user__user">
                <i class="fa-regular fa-circle-user"></i>
				<!-- accout -->
            	<div class="drop-account">
				<?php
				if (isset($_SESSION['user'])) {
				  extract($_SESSION['user']);
				?>
				  <a href="#">xin chao <?= $user ?></a>
				  <a href="index.php?act=mybill">Đơn hàng của tôi</a>
          <a href="index.php?act=list_yeuthich">Sản phẩm yêu thích</a>
				  <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
				  <?php
				  if ($role == 1) {
				  ?>
				  <a href="admin/index.php">Vào trang quản trị</a>
				  <?php } ?>
				  <a href="index.php?act=thoat">Thoát</a>
				<?php
				} else {
				?>
					<a href="index.php?act=dangky">Đăng ký </a>
				  <a href="index.php?act=dangnhap">Đăng nhập </a>
				  <a href="index.php?act=quenmk">Quên mật khẩu</a>
				<?php } ?> 
				</div>
              </li>
            </ul>
          </div>
        </nav>
      </div>

     <!-- block banner  -->
	  <section class="section-menuSlider">
        <div class="container">
          <div class="category-slider">
            <div class="category">
			<ul class="category__list">
				<?php
				foreach ($dsdm as $dm) {
					extract($dm);
					$linkdm = "index.php?act=sanpham&iddm=".$id;
					echo
					'<li class="category__items">
					<a href="'.$linkdm.'">
						<i class="fa-solid fa-leaf"></i><span>'.$name.'</span>
					</a>
					</li>
					';   
				};
				?>
			  </ul>
            </div>
            <!-- slider -->
            <div class="slider">
              <!-- list banner -->
              <div class="slider__listImg">
                <!--  -->
                <div class="slider__img">
                  <a href="<?=$banner1['link']?>"
                    ><img src="<?=$img_patch.$banner1['img'] ?>" alt="<?=$banner1['name']?>"
                  /></a>
                </div>
                <div class="slider__img">
                  <a href="<?=$banner2['link']?>"
                    ><img
                      src="<?=$img_patch.$banner2['img'] ?>"
                      alt="<?=$banner2['name']?>"
                  /></a>
                </div>
                <!--  -->
              </div>
              <!-- control -->
              <div class="slider-control">
                <button class="slider-control__btnLeft flex-center">
                  <i class="fa-solid fa-chevron-left"></i></button
                ><button class="slider-control__btnRight flex-center">
                  <i class="fa-solid fa-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

	  
    <!-- modal  -->
    <div class="modal"></div>

    <!--  -->
    <section class="section-2banner mrSection">
      <div class="container">
        <div class="hero-image">
          <div class="hero-image__img">
            <a href="<?=$banner3['link']?>"
              ><img
                src="<?=$img_patch.$banner3['img'] ?>"
                alt="<?=$banner3['name']?>"
            /></a>
          </div>
          <div class="hero-image__img">
            <a href="<?=$banner4['link']?>"
              ><img src="<?=$img_patch.$banner4['img'] ?>" alt="<?=$banner4['name']?>"
            /></a>
          </div>
        </div>
      </div>
    </section>


	</header>




	