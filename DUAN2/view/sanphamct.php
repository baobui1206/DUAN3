<div class="breadcrumb-bg">
  <div class="container">
    <ul class="breadcrumb">
      <div class="breadcrumb-block">
        <li><a href="index.php" class="changeurl">Trang chủ</a></li>
      </div>
      <div class="breadcrumb-block">
        <span class="spaceLink"><i class="fa-solid fa-angles-right"></i>
        </span>
        <?php
        if (!is_array($iddm)) {
          $iddm = explode(',', $iddm);
        }
        if (!empty($iddm)) {
          $firstId = $iddm[0];
          foreach ($listdanhmuc as $dm) {
            if ($dm['id'] == $firstId) {
              $linkdm = "index.php?act=sanpham&iddm=" . $firstId;
              echo '<li><a href="' . $linkdm . '" class="changeurl" data-id="' . $dm['id'] . '">' . $dm['name'] . '</a></li>';
              break;
            }
          }
        }
        ?>
      </div>
      <div class="breadcrumb-block">
        <span class="spaceLink"><i class="fa-solid fa-angles-right"></i></span>
        <li>
          <a href="#!" class="changeurl">Bưởi da xanh trái 1.7kg trở lên</a>
        </li>
      </div>
    </ul>
  </div>
</div>



 <!-- xem nhanh  -->
 <div class="product-quickview">
  <div class="close-quickview"><i class="fa-solid fa-xmark"></i></div>
 <div class="product-quickview__child">
 <div class="product-left">
  <div class="product-left__img">
    <a href="#!">
      <img class="quickview-img" src="upload/buoi-da-xanh-trai-tu-17kg-tro-len-202205111921599930.webp" alt="">
    </a>
  </div>
 </div>
 <?php
 $soluong =1;
 ?>
 <div class="product-right">
<h3 class="product-right__name "><a href="#!" class="quickview-name"></a></h3>
    <!-- tình trạng  -->
    <div class="detail-inventory">
              <div class="detail-status">
                <span class="stock-brand-title">Tình trạng:</span><span class="detail-status__content"> Còn hàng</span>
              </div>
              <div class="product-code">
                <span class="stock-brand-title">Mã sản phẩm:</span><span class="product-code__code quickview-id"></span>
              </div>
            </div>
            
            <!-- giá  -->
            <div class="details-price__price">
                <span class="detail-price__new quickview-priceNew"></span>
                <span class="detail-price__old quickview-priceOld"></span>
              </div>
   <!-- số lượng -->
     <div class="quantity-box">
       <span class="quantity__title"> Số lượng: </span>
      <div class="quantity-btnaddCart">
            
              <div class="quantity">
                <button class="quantity__btnPlus giamPopup">-</button>
                <input
                  class="quantity__inp soluongInpPopup"
                  type="text"
                  value="<?=$soluong?>"
                  min="1"
                  max="100" />
                <button class="quantity__btnMinus tangPopup">+</button>
              </div>
             <form action="index.php?act=addtocart&add=popup" method="post">
             <input type="hidden" name="id" class="input-hidden-id">
                  <input type="hidden" name="soluongPopup" value="<?= $soluong ?>">
                  <input type="hidden" name="name" class="input-hidden-name" >
                  <input type="hidden" name="img" class="input-hidden-img" >
                  <input type="hidden" name="price" class="input_hidden-price">
             <input type="submit" name="addtocart" id="submitBtnPopup" class="addToCart-quickview" value="Thêm vào giỏ hàng">
             </form>  
            </div>
              <!-- còn lại bao nhiêu -->
              <p class="quantity-remaining">
                <span class="bold-titleText">Kho:</span>
                <span class="quantity-remaining__number quickview-stock"></span>
              </p>
            </div>
            <!--  -->
            
 </div>
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

<!-- <div class="popup-notifi popup-comment">
  <div class="popup-notifi__child">
   
    <div class="notifi-top">
      <div class="notifi-top__title">Đánh giá</div>
      <div class="close-popup close-popupComment">
        <i class="fa-solid fa-xmark"></i>
      </div>
    </div>
  
    <div class="notifi-bottom">
      <span class="popup-comment__content"
        >Vui lòng đăng nhập hoặc đăng ký nếu chưa có tài khoản để được đánh
        giá.</span
      >
      <div class="comment-list">
        <button class="comment-list__btn"><a href="#!">Đăng ký</a></button
        ><button class="comment-list__btn">
          <a href="#!">Đăng nhập</a>
        </button>
      </div>
    </div>
  </div>
</div> -->


<!-- <div class="popup-notifi popup-evaluate">
  <div class="popup-notifi__child">
  
    <div class="notifi-top">
      <div class="notifi-top__title">Đánh giá & nhận xét</div>
      <div class="close-popup close-popupeValuate">
        <i class="fa-solid fa-xmark"></i>
      </div>
    </div>
   
    <form method="#" class="notifi-bottom evaluate-bottom">
      <span class="evaluate-title">Đánh giá chung</span>
      <ul class="evaluate-listStart">
        <li class="evaluate-listStart__start">
          <i class="fa-solid fa-star"></i><span>Rất tệ</span>
        </li>
        <li class="evaluate-listStart__start">
          <i class="fa-solid fa-star"></i><span>Tệ</span>
        </li>
        <li class="evaluate-listStart__start">
          <i class="fa-solid fa-star"></i><span>Bình thường</span>
        </li>
        <li class="evaluate-listStart__start">
          <i class="fa-solid fa-star"></i><span>Tốt</span>
        </li>
        <li class="evaluate-listStart__start">
          <i class="fa-solid fa-star"></i><span>Tuyệt vời</span>
        </li>
      </ul>
   
      <textarea
        name=""
        id="evaluate-comment"
        placeholder="Xin mời chia sẻ một số cảm nhận về sản phẩm "
      ></textarea>
      <input class="evaluate-submit" type="submit" value="Gửi đánh giá" />
    </form>
  </div>
</div> -->
<!--  -->
<?php
$pricenew = $priceold - ($priceold * $sale / 100);
$sale1 = ($priceold * $sale / 100);
$soluong = 1;
?>

<!-- ======== main ======== -->
<main class="mainProduct mrSection">
  <div class="container">
    <div class="main-wrapper">
      <div class="main-wrapper__left">
        <div class="product-control">
          <!--  -->
          <div class="detail-image">
            <div class="sticky">
              <!-- list img -->
              <div class="detail-slider">
                <div class="detail-img__listImg">
                  <?php
                  if (!empty($image)) {
                    foreach ($image as $img) {
                      echo '
                      <div class="detail-image__img">
                      <a href="#!">
                          <img id="slider-imgDetail"
                          src="upload/' . $img . '"
                          alt="" />
                      </a>
                      </div>';
                    }
                  }
                  ?>
                </div>
                <div class="btn-wishlist">
                  <a href="#!"><i class="fa-regular fa-heart yeuthich"></i>
                <input type="hidden" value="<?= $id?>"></a>
                </div>
                <!-- đây nè  -->
                <?php
                if ($sale > 0) {
                  echo
                  '<div class="timeSale">
                      <div class="timeSale__title">
                          <img src="asset/images/flash.svg" alt="" />
                          <span>Khuyến mãi chỉ còn:</span>
                      </div>
                      <div class="timeSale__listTime">
                          <div class="timeSale__time flex-center">02</div>
                          <div class="timeSale__time flex-center">04</div>
                          <div class="timeSale__time flex-center">10</div>
                          <div class="timeSale__time flex-center">02</div>
                      </div>
                  </div>';
                }
                ?>

              </div>
              <!--  -->
              <div>
                <ul class="preview-image">
                  <?php
                  if (!empty($image)) {
                    foreach ($image as $img) {
                      echo '
                          <li class="preview-image__items" data-hash="0">
                              <div class="pd-100">
                                  <img
                                  src="upload/' . $img . '"
                                  alt="" />
                              </div>
                          </li>';
                    }
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="details-pro">
            <h1 class="detail__nameProduct">
              <?= $name ?>
            </h1>
            <!--  -->
            <div class="detail-inventory">
              <div class="detail-status">
                <span class="stock-brand-title">Tình trạng:</span><span class="detail-status__content"> Còn hàng</span>
              </div>
              <div class="product-code">
                <span class="stock-brand-title">Mã sản phẩm:</span><span class="product-code__code"> <?= $id ?></span>
              </div>
            </div>
            <!--  -->
            <div class="details-price">
              <div class="details-price__price">
                <span class="detail-price__new"><?= number_format($pricenew, 0, ',', '.') ?>₫</span>
                <?php
                if ($sale > 0) {
                  echo '<span class="detail-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>';
                }
                ?>
              </div>
              <div class="product-priceSave">
                <?php
                if ($sale > 0) {
                  echo '<span class="stock-brand-title">Tiết kiệm</span><span class="product-priceSave__content">' . number_format($sale1, 0, ',', '.') . '₫</span>';
                }
                ?>
              </div>
              <div class="details-price__unit">
                <span class="bold-titleText">Đơn vị:</span>
                <span>1 <?= $dvt ?></span>
              </div>
            </div>

            <!-- số lượng -->
            <div class="quantity-box">
              <span class="quantity__title"> Số lượng: </span>
              <div class="quantity">
                <button class="quantity__btnPlus giam">-</button>
                <input
                  class="quantity__inp soluong"
                  type="text"
                  value="<?= $soluong ?>"
                  min="1"
                  max="100" />
                <button class="quantity__btnMinus tang">+</button>
              </div>
              <!-- còn lại bao nhiêu -->
              <p class="quantity-remaining">
                <span class="bold-titleText">Kho:</span>
                <span class="quantity-remaining__number"><?= $stock ?> sản phẩm</span>
              </p>
            </div>
            <!--  -->
            <div class="btn-cart">
              <div class="btn-cart__icon flex-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
              </div>
              <!--btn  -->
              <div class="btn-cart__contentBox flex-center">
                <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <input type="hidden" name="soluong" value="<?= $soluong ?>">
                  <input type="hidden" name="name" value="<?= $name ?>">
                  <input type="hidden" name="img" value="<?= $image[0] ?>">
                  <input type="hidden" name="price" value="<?= $pricenew = $priceold - ($priceold * $sale / 100); ?>">
                  <input type="submit" name="addtocart" style="display:none" id="submitBtn">
                  <div onclick="document.getElementById('submitBtn').click()" style="cursor:pointer;">
                    <span class="btn-cart__title">Thêm vào giỏ hàng</span>
                    <span class="btn-cart__content">Giao hàng tận nơi miễn phí</span>
                  </div>
                </form>
              </div>
              <!--  -->
            </div>
            <!--  -->
            <div class="line-productSale">
              <?php
              $tonKho = $stock - $sold;
              $phanTramTonKho = ($tonKho / $stock) * 100;
              $phanTram = floor($phanTramTonKho);
              ?>
              <style>
                .line-productSale::before {
                  width: <?=$phanTram?>%;
              }
              </style>
            </div>

            <!--  -->
            <div class="promotion promotion-desk">
              <div class="promotion__title">
                <img src="view/asset/images/giftbox.webp" alt="" />
                <span>Khuyến mãi đặc biệt !!!</span>
              </div>
              <!--  -->
              <ul class="promotion__listContent">
                <li class="promotion__content">
                  <img src="view/asset/images/km_product1.webp" alt="icon" />
                  <p>
                    Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.
                  </p>
                </li>
                <li class="promotion__content">
                  <img src="view/asset/images/km_product1.webp" alt="icon" />
                  <p>Giảm giá 10% khi mua từ 5 sản phẩm trở lên.</p>
                </li>
                <li class="promotion__content">
                  <img src="view/asset/images/km_product3.webp" alt="icon" />
                  <p>
                    <span class="bold-passageMedium">Tặng 100.000₫</span>
                    mua hàng tại website thành viên
                    <span class="bold-passageMedium">Organic Home</span>, áp
                    dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực
                    khác.
                  </p>
                </li>
              </ul>
              <!--  -->
            </div>
          </div>
        </div>
        <!--  -->
        <div class="promotion promotion-mobile mrSection">
          <div class="promotion__title">
            <img src="view/asset/images/giftbox.webp" alt="" />
            <span>Khuyến mãi đặc biệt !!!</span>
          </div>
          <!--  -->
          <ul class="promotion__listContent">
            <li class="promotion__content">
              <img src="view/asset/images/km_product1.webp" alt="icon" />
              <p>Áp dụng Phiếu quà tặng/ Mã giảm giá theo ngành hàng.</p>
            </li>
            <li class="promotion__content">
              <img src="view/asset/images/km_product1.webp" alt="icon" />
              <p>Giảm giá 10% khi mua từ 5 sản phẩm trở lên.</p>
            </li>
            <li class="promotion__content">
              <img src="view/asset/images/km_product3.webp" alt="icon" />
              <p>
                <span class="bold-passageMedium">Tặng 100.000₫</span> mua
                hàng tại website thành viên
                <span class="bold-passageMedium">Organic Home</span>, áp
                dụng khi mua Online tại Hồ Chí Minh và 1 số khu vực khác.
              </p>
            </li>
          </ul>
        </div>

        <!--  -->
        <div class="product-desc" data-aos="zoom-out-down">
          <!-- menu -->
          <ul class="desc-listTab">
            <li
              class="desc-listTab__tab active__tab"
              data-target="#content1">
              Mô tả sản phẩm
            </li>
            <li class="desc-listTab__tab" data-target="#content2">
              Hướng dẫn mua hàng
            </li>
            <li class="desc-listTab__tab" data-target="#content3">
              Đánh giá sản phẩm
            </li>
          </ul>
          <!--  -->
          <div class="block-desc">
            <div class="block-desc__desc active" id="content1" content-data>
              <div class="content-height">
                <div id="checkHeight">
                  <?= $mota ?>
                  <div class="content-height__overlay"></div>
                </div>
              </div>
              <button class="block-desc__btn">Thu gọn</button>
            </div>

            <!-- content-2 -->
            <div class="block-desc__desc" id="content2" content-data>
              <p>
                <span class="bold-titleText">Bước 1:</span> Truy cập website
                và lựa chọn sản phẩm cần mua
              </p>
              <!--  -->
              <div class="mr-block">
                <p class="mr-title">
                  <span class="bold-titleText">Bước 2:</span> Click và sản
                  phẩm muốn mua, màn hình hiển thị ra pop up với các lựa
                  chọn sau
                </p>
                <p class="mr-content">
                  - Nếu bạn muốn tiếp tục mua hàng: Bấm vào phần tiếp tục
                  mua hàng để lựa chọn thêm sản phẩm vào giỏ hàng
                </p>
                <p class="mr-content">
                  - Nếu bạn muốn xem giỏ hàng để cập nhật sản phẩm: Bấm vào
                  xem giỏ hàng
                </p>
                <p class="mr-content">
                  - Nếu bạn muốn đặt hàng và thanh toán cho sản phẩm này vui
                  lòng bấm vào: Đặt hàng và thanh toán
                </p>
              </div>
              <!--  -->
              <div class="mr-block">
                <p class="mr-title">
                  <span class="bold-titleText">Bước 3:</span> Lựa chọn thông
                  tin tài khoản thanh toán
                </p>
                <p class="mr-content">
                  - Nếu bạn đã có tài khoản vui lòng nhập thông tin tên đăng
                  nhập là email và mật khẩu vào mục đã có tài khoản trên hệ
                  thống
                </p>
                <p class="mr-content">
                  - Nếu bạn chưa có tài khoản và muốn đăng ký tài khoản vui
                  lòng điền các thông tin cá nhân để tiếp tục đăng ký tài
                  khoản. Khi có tài khoản bạn sẽ dễ dàng theo dõi được đơn
                  hàng của mình
                </p>
              </div>
              <p class="mr-content">
                - Nếu bạn muốn mua hàng mà không cần tài khoản vui lòng nhấp
                chuột vào mục đặt hàng không cần tài khoản
              </p>
              <!--  -->
              <p class="mr-block">
                <span class="bold-titleText">Bước 4:</span> Điền các thông
                tin của bạn để nhận đơn hàng, lựa chọn hình thức thanh toán
                và vận chuyển cho đơn hàng của mình
              </p>
              <!--  -->
              <div class="mr-block">
                <p class="mr-title">
                  <span class="bold-titleText">Bước 5:</span> Xem lại thông
                  tin đặt hàng, điền chú thích và gửi đơn hàng
                </p>
                <p class="mr-content">
                  - Sau khi nhận được đơn hàng bạn gửi chúng tôi sẽ liên hệ
                  bằng cách gọi điện lại để xác nhận lại đơn hàng và địa chỉ
                  của bạn.
                </p>
              </div>

              <p class="bold-passageSemi-Bold">Trân trọng cảm ơn.</p>
            </div>
            <div class="block-desc__desc" id="content3" content-data>
              <div id="popup-login" class="popup-notifi popup-comment">
                <div class="popup-notifi__child">

                  <div class="notifi-top">
                    <div class="notifi-top__title">Đánh giá</div>
                    <div class="close-popup close-popupComment">
                      <i class="fa-solid fa-xmark"></i>
                    </div>
                  </div>

                  <div class="notifi-bottom">
                    <span class="popup-comment__content">Vui lòng đăng nhập hoặc đăng ký nếu chưa có tài khoản để được đánh
                      giá.</span>
                    <div class="comment-list">
                      <button class="comment-list__btn"><a href="index.php?act=dangky">Đăng ký</a></button><button class="comment-list__btn">
                        <a href="index.php?act=dangnhap">Đăng nhập</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="popup-notifi popup-evaluate">
                <div class="popup-notifi__child">
                  <div class="notifi-top">
                    <div class="notifi-top__title">Đánh giá & nhận xét</div>
                    <div class="close-popup close-popupeValuate">
                      <i class="fa-solid fa-xmark"></i>
                    </div>
                  </div>

                  <form id="form-danhgia" class="notifi-bottom evaluate-bottom">
                    <span class="evaluate-title">Đánh giá chung</span>
                    <ul class="evaluate-listStart">
                      <?php for ($i = 1; $i <= 5; $i++): ?>
                        <li data-value="<?= $i ?>" class="evaluate-listStart__start">
                          <i class="fa-solid fa-star start-popup"></i><span></i><span><?= ["Rất tệ", "Tệ", "Bình thường", "Tốt", "Tuyệt vời"][$i - 1] ?></span>
                        </li>
                      <?php endfor; ?>

                    </ul>
                    <input type="hidden" name="sosao" id="rating-value" value="5">
                    <!-- neu  ko  cchon sao mac dinh là 5 -->
                    <textarea
                      name="noidung"
                      id="evaluate-comment"
                      placeholder="Xin mời chia sẻ một số cảm nhận về sản phẩm "></textarea>
                    <input class="evaluate-submit" type="submit" value="Gửi đánh giá" />
                  </form>
                </div>
              </div>
              <!-- kohong có đánh giá   -->
              <!-- <div class="no-comment">
                <span class="no-comment__content">Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành
                  người đầu tiên đánh giá cho sản phẩm này</span>
                <button class="no-comment__btn btn-comment">
                  Gửi đánh giá của bạn
                </button>
              </div> -->

              <!-- conent -->
              <div class="proceedComment">
                <span class="proceedComment__title">Bạn đánh giá sao về sản phẩm này?</span>
                <button id="btn-openFormComment" class="btn-comment">
                  Gửi đánh giá của bạn
                </button>
              </div>

              <!-- có đánh giá  -->
              <div id="danhgia-list"></div>
              <!--  -->
              <script>
                const idsp = <?= $id ?>;

                // Mở popup
                $('#btn-openFormComment').on('click', () => {
                  <?php if (isset($_SESSION['user'])): ?>
                    $('.popup-evaluate').addClass('open-popup');
                    $('.modal').addClass('openModalFull');
                    // icon close 
                    $('.close-popupeValuate').click(() => {
                      $('.popup-evaluate').removeClass('open-popup');
                      $('.modal').removeClass('openModalFull');
                    });

                    // modal close 
                    $('.modal').on('click', () => {
                      $('.popup-evaluate').removeClass('open-popup');
                      $('.modal').removeClass('openModalFull');
                    })

                  <?php else: ?>
                    $('#popup-login').addClass('open-popup');
                    $('.modal').addClass('openModalFull');
                    // icon close 
                    $('.close-popupComment').click(() => {
                      $('#popup-login').removeClass('open-popup');
                      $('.modal').removeClass('openModalFull');
                    });

                    // modal close 
                    $('.modal').on('click', () => {
                      $('#popup-login').removeClass('open-popup');
                      $('.modal').removeClass('openModalFull');
                    })

                  <?php endif; ?>
                });

                // Chọn sao
                $('.evaluate-listStart__start').on('click', function() {
                  let value = $(this).data('value');
                  $('#rating-value').val(value);
                  $('.evaluate-listStart__start i').each(function(i) {
                    $(this).toggleClass('fa-solid', i < value); //togglass neu gia trị dung no lấy class này
                    $(this).toggleClass('fa-regular', i >= value);
                  });
                });

                // Gửi đánh giá
                $('#form-danhgia').on('submit', function(e) {
                  e.preventDefault();
                  $.post('view/danhgia/danhgiaform.php', {
                    idsp: idsp,
                    sosao: $('#rating-value').val(),
                    noidung: $('#evaluate-comment').val()
                  }, function(data) {
                    $('#danhgia-list').html(data);
                    $('.start-popup').each((index, el) => {
                      $(el).removeClass('fa-regular');
                      $(el).addClass('fa-solid');

                    })
                    $('.popup-evaluate').removeClass('open-popup')
                    $('#evaluate-comment').val('');
                    $('.modal').removeClass('openModalFull').addClass('modal');
                  });
                });

                // Load lần đầu
                $(document).ready(() => {
                  $('#danhgia-list').load('view/danhgia/danhgiaform.php', {
                    idsp: idsp
                  });
                });
              </script>
            </div>
          </div>
        </div>

        <!--  -->
        <div class="container-product mrSection">
          <div class="product-relateTo">
            <!--  -->
            <div class="groupTitle-index">
              <div class="groupTitle">
                <a href="#!">
                  <h2 class="groupTitle__title">
                    Sản phẩm liên quan
                    <i class="fa-solid fa-clover"></i>
                  </h2>
                </a>
              </div>
              <!--  -->
            </div>
            <!--  -->
            <div class="related-products product-col4 list-product">
              <?php
              if (!empty($sp_cung_loai) && is_array($sp_cung_loai)) {
                foreach ($sp_cung_loai as $sp) {
                  extract($sp);
                  $linksp = "index.php?act=sanphamct&idsp=" . $id;
                  $hinh = $img_patch . $sp['img'];
                  $pricenew = $priceold - ($priceold * $sale / 100);
                  $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
                  echo ' <div class="product" data-salesQuantity="20">
                  <!-- btn sản phẩm -->
                  <ul class="btn-Listwishlist">
                    <li class="btn-Listwishlist__btn">
                      <a href="#!">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                      </a>
                    </li>
                    <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                      <a href="javascript:void(0)"><i
                          class="fa-solid fa-magnifying-glass reduce-icon"></i>
                      </a>
                    </li>
                    <li class="btn-Listwishlist__btn">
                      <a href="#!"><i class="fa-regular fa-heart yeuthich"></i>
                      <input value="' . $id . '" type= "hidden" ></a>
                    </li>
                  </ul>';
                  if ($sale > 0) {
                    echo ' <span class="price-minus flex-center">Giảm ' . $sale . '%</span>';
                  }

                  echo '

                  <div class="product__child">
                    <div class="product__thumbnail">
                      <a href="' . $linksp . '" class="img__thumb">
                        <img
                          src="' . $hinh . '"
                          alt="" />
                      </a>
                    </div>
                    <!-- info product -->
                    <div class="product-info">
                      <h3 class="product__name">
                        <a href="#!"> ' . $name . ' </a>
                      </h3>
                      <div class="product-price">
                        <span class="product-price__new"> ' . number_format($pricenew, 0, ',', '.') . '₫</span>';
                  if ($sale > 0) {
                    echo '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>';
                  }

                  echo '</div>
                      <div class="product__line hiddenUi"></div>
                      <span class="product__sold hiddenUi">Đã bán  ' . $sold . '</span>
                    </div>
                    <!--  -->
                  </div>
                </div>';
                }
              } else {
                echo 'không có sản phẩm cùng loại nào để hiển thị';
              }
              ?>

            </div>
          </div>
        </div>
        <!-- sản phẩm đã xem  -->

        <!--  -->
        <div class="product-relateTo mrSection">
          <!--  -->
          <div class="groupTitle-index">
            <div class="groupTitle">
              <a href="#!">
                <h2 class="groupTitle__title">
                  Sản phẩm đã xem
                  <i class="fa-solid fa-clover"></i>
                </h2>
              </a>
            </div>
            <!--  -->
            <div class="button-control">
              <div class="btn-control__prev">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
              <div class="btn-control__next ">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            </div>
          </div>
          <!--  -->

          <div class="swiper viewed-products">
            <div class="viewed-products__child list-product swiper-wrapper">
            <?php
              if (!empty($sanpham_daxem) && is_array($sanpham_daxem)) {
                foreach ($sanpham_daxem as $sp) {
                  extract($sp);
                  $linksp = "index.php?act=sanphamct&idsp=" . $id;
                  $hinh = $img_patch . $sp['img'];
                  $pricenew = $priceold - ($priceold * $sale / 100);
                  $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
                  echo ' <div class="product swiper-slide" data-salesQuantity="20">
                  <!-- btn sản phẩm -->
                  <ul class="btn-Listwishlist">
                    <li class="btn-Listwishlist__btn">
                      <a href="#!">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="size-6">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                      </a>
                    </li>
                    <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                      <a href="#!"><i
                          class="fa-solid fa-magnifying-glass reduce-icon"></i>
                      </a>
                    </li>
                    <li class="btn-Listwishlist__btn">
                      <a href="#!"><i class="fa-regular fa-heart yeuthich"></i>
                      <input value="' . $id . '" type= "hidden" ></a>
                    </li>
                  </ul>';
                  if ($sale > 0) {
                    echo ' <span class="price-minus flex-center">Giảm ' . $sale . '%</span>';
                  }

                  echo '

                  <div class="product__child">
                    <div class="product__thumbnail">
                      <a href="' . $linksp . '" class="img__thumb">
                        <img
                          src="' . $hinh . '"
                          alt="" />
                      </a>
                    </div>
                    <!-- info product -->
                    <div class="product-info">
                      <h3 class="product__name">
                        <a href="#!"> ' . $name . ' </a>
                      </h3>
                      <div class="product-price">
                        <span class="product-price__new"> ' . number_format($pricenew, 0, ',', '.') . '₫</span>';
                  if ($sale > 0) {
                    echo '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>';
                  }

                  echo '</div>
                      <div class="product__line hiddenUi"></div>
                      <span class="product__sold hiddenUi">Đã bán  ' . $sold . '</span>
                    </div>
                    <!--  -->
                  </div>
                </div>';
                }
              } else {
                echo 'không có sản phẩm đã xem nào ở đây cả';
              }
              ?>
              
              <!--  -->
            </div>
          </div>
          <!-- script -->
          <script>
            const swiper = new Swiper(".viewed-products", {
              loop: false,
              autoplay: {
                delay: 2500,
              },
              speed: 600,
              spaceBetween: 20,
              slidesPerView: 4,
              breakpoints: {
                951: {
                  slidesPerView: 4,
                },
                768: {
                  slidesPerView: 3,
                },
                0: {
                  slidesPerView: 2,
                },
              },
              navigation: {
                nextEl: ".btn-control__next",
                prevEl: ".btn-control__prev",
              },
              on: {
                init: function() {
                  if (this.slides.length > this.params.slidesPerView) {
                    document
                      .querySelector(".btn-control__next")
                      .classList.add("active-btn");
                  }
                },

                //change
                slideChange: function() {
                  if (this.isEnd) {
                    document
                      .querySelector(".btn-control__prev")
                      .classList.add("active-btn");
                    document
                      .querySelector(".btn-control__next")
                      .classList.remove("active-btn");
                  } else {
                    document
                      .querySelector(".btn-control__prev")
                      .classList.add("active-btn");
                    if (
                      !document
                      .querySelector(".btn-control__next")
                      .classList.contains("active-btn")
                    ) {
                      document
                        .querySelector(".btn-control__next")
                        .classList.add("active-btn");
                    }
                  }

                  // đầu slide
                  if (this.isBeginning) {
                    document
                      .querySelector(".btn-control__prev")
                      .classList.remove("active-btn");
                  }
                },
              },
              //
            });
          </script>
          <!--  -->
        </div>


      </div>

      <div class="main-wrapper___right">
        <div class="policy">
          <span class="policy__title">Chính sách cửa hàng <i class="fa-solid fa-clover"></i></span>
          <!--  -->
          <ul class="policy__listItems">
            <li class="policy-items">
              <img src="view/asset/images/policy/chinhsach_1.webp" alt="" />
              <div class="policy-items__content">
                <span>Miễn phí vận chuyển</span>
                <span>Cho tất cả đơn hàng trong nội Thành Phố Hồ Chí Minh</span>
              </div>
            </li>
            <li class="policy-items">
              <img src="view/asset/images/policy/chinhsach_2.webp" alt="" />
              <div class="policy-items__content">
                <span>Miễn phí đổi - trả</span>
                <span>Đối với sản phẩm lỗi sản xuất hoặc vận chuyển</span>
              </div>
            </li>
            <li class="policy-items">
              <img src="view/asset/images/policy/chinhsach_3.webp" alt="" />
              <div class="policy-items__content">
                <span>Hỗ trợ nhanh chóng</span>
                <span>Gọi: 0982746987 để được hỗ trợ ngay</span>
              </div>
            </li>
            <li class="policy-items">
              <img src="view/asset/images/policy/chinhsach_4.webp" alt="" />
              <div class="policy-items__content">
                <span>Ưu đãi combo</span>
                <span>Mua theo combo,mùa càng mua nhiều giá càng rẻ</span>
              </div>
            </li>
          </ul>
        </div>

        <!-- mã khuyến mãi -->
        <div class="promo-code">
          <span class="promo-code__title">Mã khuyến mãi <i class="fa-solid fa-clover"></i></span>
          <!--  -->
          <ul class="discount-code">
            <?php
            foreach ($listvoucher as $voucher) {
              extract($voucher);
              echo '<li class="block-code">
              <div class="blockCode-top">
                <span>' . $code . '</span>
                <span>Giảm ' . number_format($giamgia, 0, ',', '.') . 'đ giá trị đơn hàng</span>
              </div>
              <div class="blockCode-bottom">
                <span> HSD: ' . $ngayhethan . '</span>
                <button class="blockCode-bottom__btn" data-copy="'.$code.'">Sao chép</button>
              </div>
              <button
                class="info-btn"
                data-code="' . $code . '"
                data-time="' . $ngayhethan . '"
                data-content=" ' . $chitiet . '">
                <i class="fa-solid fa-info"></i>
              </button>
            </li>';
            }
            ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="view/asset/js/main.js"></script>
<script>
  app.star = function() {
    this.openQuickView();
    this.copyCodeDetailProduct();
    this.slideMenuHeaderLeft();
    this.slideMenuHeaderRight();
    this.sliderDetailProduct();
    // this.openFormComment();
    this.openSubmenu();
    this.openMenuMobile();
    this.openCategory();
    this.renderTextInp();
    this.search();
    this.openPopup();
    // chạy các hàm ẩn hiện mô tả
    this.openDesc();
    this.openTab();
    this.setHeightDesc();
  };
  // chạy
  app.star();
</script>
<script src="view/asset/js/yeuthich.js"></script>
<script src="view/asset/js/chitiet.js"></script>