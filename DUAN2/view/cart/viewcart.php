<div class="breadcrumb-bg">
      <div class="container">
        <ul class="breadcrumb">
          <div class="breadcrumb-block">
            <li><a href="#!" class="changeurl">Trang chủ</a></li>
          </div>
          <div class="breadcrumb-block">
            <span class="spaceLink"
              ><i class="fa-solid fa-angles-right"></i
            ></span>
            <li><a href="#!" class="changeurl">Giỏ hàng</a></li>
          </div>
        </ul>
      </div>
    </div>
    <!-- modal  -->
    <div class="modal"></div>
 <div class="modal-menuMobile"></div>

    <!-- ================== info voucher============ -->
    <div class="popup-notifi popup-coupon">
      <div class="popup-notifi__child">
        <!--  -->
        <div class="notifi-top">
          <div class="notifi-top__title">Thông tin Voucher</div>
          <div class="close-popup close-popupCoupon">
            <i class="fa-solid fa-xmark"></i>
          </div>
        </div>
        <!--  -->
        <ul class="notifi-bottom">
          <li class="info">
            <div class="info__title">Mã giảm giá:</div>
            <div class="info__content inner-code">Dola10</div>
          </li>
          <li class="info">
            <div class="info__title">Ngày hết hạn:</div>
            <div class="info__content inner-time">1/10/2023</div>
          </li>
          <li class="info">
            <div class="info__title">Điều kiện:</div>
            <div class="info__content inner-content">
              Áp dụng cho đơn hàng từ 200k trở lên Không đi kèm với chương trình
              khác
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- main -->
    <main class="main mrSection">
      <div class="container">
        <div class="cart">
          <div class="discount-code swiper">
            <ul class="discount-code__child swiper-wrapper">
              <?php
              foreach($listvoucher as $voucher){
                extract($voucher);
                echo '
                <li class="block-code swiper-slide">
                  <div class="blockCode-top">
                    <span>'.$code.'</span>
                    <span>Giảm '. number_format($giamgia, 0, ',', '.') .'đ giá trị đơn hàng</span>
                  </div>
                  <div class="blockCode-bottom">
                    <span> HSD: '.$ngayhethan.'</span>
                    <button class="blockCode-bottom__btn" data-codebtn="'.$code .'">Áp dụng</button>
                  </div>
                  <button
                    class="info-btn"
                    data-code="'.$code.'"
                    data-time="'.$ngayhethan.'"
                    data-content=" '.$chitiet.'">
                    <i class="fa-solid fa-info"></i>
                  </button>
                </li>';
              }
              ?>

            </ul>
          </div>
          <script>
            const swiper = new Swiper(".swiper", {
              loop: false,
              spaceBetween: 10,
              slidesPerView: 4,
              breakpoints: {
                1200: {
                  slidesPerView: 4,
                },
                768: {
                  slidesPerView: 2.2,
                },
                0: {
                  slidesPerView: 1.2,
                },
              },
              // pagination: {
              //   el: ".swiper-pagination",
              //   clickable: true,
              // },
              // navigation: {
              //   nextEl: ".swiper-button-next",
              //   prevEl: ".swiper-button-prev",
              // },
            });
          </script>
          <!--  -->
          <div class="cart-full">
            <h1 class="cart__title">Giỏ hàng</h1>
            <div class="cart__child" id="cart">
              <!-- left -->
              <?php
                $mycart = isset($_SESSION['mycart']) ? $_SESSION['mycart'] : [];
                viewcart($mycart);
              ?>
            </div>
          <!-- test  -->
	
          </div>
        </div>
      </div>
    </main>
    <script src="view/asset/js/main.js"></script>
    <!-- chạy hàm cần chạy  -->
    <script>
      app.star = function () {
        this.appliCodeInpCart();
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.eventInpDiscountCode();
        this.openSubmenu();
        this.openMenuMobile();
        this.openCategory();
        this.openPopup();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>
    <script src="view/asset/js/giohang.js"></script> 