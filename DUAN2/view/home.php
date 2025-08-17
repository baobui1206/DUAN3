<!-- modal  -->
<div class="modal"></div>
 <div class="modal-menuMobile"></div>

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
                  <input type="hidden" name="soluongPopup" value="<?= $soluong?>">
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

<main class="main mrSection">
  <section class="section-productFlashSale">
    <div class="container">
      <div class="flashSale" id="tabSale1" data-contentSale>
        <!--  -->
        <div class="flashSale-top">
              <!-- tab  -->
              <div class="tab-flashSale">
                <button class="tab-flashSale__btn active-tabSale">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"
                    />
                  </svg>
                  Sản phẩm bán chạy</button
                ><button
                  class="tab-flashSale__btn hover-tabSale"
                  data-targetSale="tabSale2"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"
                    />
                  </svg>

                  Sản phẩm đặc biệt
                </button>
              </div>
              <!-- time  -->
              <div class="groupTitle-time">
                <span class="groupTitle-time__title">
                  <img src="view/asset/images/flash.svg" alt="icon flash sale" />
                  Flash Sale
                </span>
                <div class="groupTitle-time__child">
                  <div class="blockTime">
                    <span class="blockTime__time">10</span>
                    <span class="blockTime__content">Ngày</span>
                  </div>
                  <span class="colon-time">:</span>
                  <div class="blockTime">
                    <span class="blockTime__time">09</span>
                    <span class="blockTime__content">Giờ</span>
                  </div>
                  <span class="colon-time">:</span>
                  <div class="blockTime">
                    <span class="blockTime__time">40</span>
                    <span class="blockTime__content">Phút</span>
                  </div>
                  <span class="colon-time">:</span>
                  <div class="blockTime">
                    <span class="blockTime__time">44</span>
                    <span class="blockTime__content">Giây</span>
                  </div>
                </div>
              </div>
            </div>

        <!-- product -->
        <div class="product-flashSale product-col5">
          <?php
          foreach ($spbanchay as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_patch . $sp['img'];
            $pricenew = $priceold - ($priceold * $sale / 100);
            $tonKho = $stock - $sold;
            $phanTramTonKho = ($tonKho / $stock) * 100;
            $phanTram = floor($phanTramTonKho);
            $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
            $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
            $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
            echo '
                     <div class="product" data-salesQuantity="20">
                ' . $saleHtml . '
                <!-- btn sản phẩm -->
                <ul class="btn-Listwishlist">
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"
                      ><i class="fa-solid fa-magnifying-glass reduce-icon"></i>
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'">
                    </a>
                  </li>
                </ul>
                <!-- đóng btn sản phẩm -->

                <div class="product__child">
                  <div class="product__thumbnail">
                    <a href="' . $linksp . '" class="img__thumb">
                      <img
                        src="' . $hinh . '"
                        alt=""
                      />
                    </a>
                  </div>
                  <!-- info product -->
                  <div class="product-info">
                    <h3 class="product__name">
                      <a href="' . $linksp . '">
                        ' . $name . '
                      </a>
                    </h3>
                    <div class="product-price">
                      <span class="product-price__new"> ' . number_format($pricenew, 0, ',', '.') . '₫</span>
                      ' . $oldPriceHtml . '
                    </div>
                    <!--  -->
                    <div class="product-sold">
                      <div class="sold-content">
                        <span class="sold-content__left"
                          >Đã bán
                          <span class="bold-passageSemi-Bold">' . $sold . '</span></span
                        >
                        <span class="sold-content__right">' . $phanTram . '%</span>
                      </div>
                      <div class="product-sold__line">
                        <span style="--line: ' . $phanTram . '%"></span>
                      </div>
                    </div>
                    <!-- btn  -->
                    <!-- <i class="fas fa-fire"></i>
                      <i class="fas fa-star"></i> -->
                    <form action="index.php?act=addtocart" method="post">
                      <input type="hidden" name="id" value="'.$id.'">
                      <input type="hidden" name="name" value="'.$name.'">
                      <input type="hidden" name="img" value="'.$sp['img'].'">
                      <input type="hidden" name="price" value="'.$pricenew.'">
                      <input type="submit" name="addtocart" style="display:none" id="submitBtn_'.$id.'">               
                      <div class="product-btnAddcart" onclick="document.getElementById(\'submitBtn_'.$id.'\').click()" style="cursor:pointer;">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Thêm vào giỏ </span>
                      </div>
                    </form>
                  </div>
                  <!--  -->
                </div>
              </div>';
          }
          ?>
          <!--product  -->

          <!--  -->
        </div>
        <div class="text-center">
          <a href="index.php?act=sanphambanchay" class="btn-seeAll"><span>Xem tất cả</span><i class="fa-solid fa-chevron-right"></i></a>
        </div>
      </div>

      <!-- =============== tab 2 ============ -->
      <div
        class="flashSale none-contentTabSale"
        id="tabSale2"
        data-contentSale>
        
        <!--  -->
        <div class="flashSale-top">
              <!-- tab  -->
              <div class="tab-flashSale">
                <button
                  class="tab-flashSale__btn hover-tabSale"
                  data-targetSale="tabSale1"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z"
                    />
                  </svg>
                  Sản phẩm hấp dẫn</button
                ><button class="tab-flashSale__btn active-tabSale">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z"
                    />
                  </svg>

                  Sản phẩm đặc biệt
                </button>
              </div>
            </div>

        <!-- product -->
        <div class="product-flashSale product-col5">
          <!--product  -->
          <?php
          foreach ($spdacbiet as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_patch . $sp['img'];
            $pricenew = $priceold - ($priceold * $sale / 100);
            $tonKho = $stock - $sold;
            $phanTramTonKho = ($tonKho / $stock) * 100;
            $phanTram = floor($phanTramTonKho);
            $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
            $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
            $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
            echo '
                     <div class="product" data-salesQuantity="20">
                ' . $saleHtml . '
                <!-- btn sản phẩm -->
                <ul class="btn-Listwishlist">
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"
                      ><i class="fa-solid fa-magnifying-glass reduce-icon"></i>
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                  </li>
                </ul>
                <!-- đóng btn sản phẩm -->

                <div class="product__child">
                  <div class="product__thumbnail">
                    <a href="' . $linksp . '" class="img__thumb">
                      <img
                        src="' . $hinh . '"
                        alt=""
                      />
                    </a>
                  </div>
                  <!-- info product -->
                  <div class="product-info">
                    <h3 class="product__name">
                      <a href="' . $linksp . '">
                        ' . $name . '
                      </a>
                    </h3>
                    <div class="product-price">
                      <span class="product-price__new"> ' . number_format($pricenew, 0, ',', '.') . '₫</span>
                      ' . $oldPriceHtml . '
                    </div>
                    <!--  -->
                    <div class="product-sold">
                      <div class="sold-content">
                        <span class="sold-content__left"
                          >Đã bán
                          <span class="bold-passageSemi-Bold">' . $sold . '</span></span
                        >
                        <span class="sold-content__right">' . $phanTram . '%</span>
                      </div>
                      <div class="product-sold__line">
                        <span style="--line: ' . $phanTram . '%"></span>
                      </div>
                    </div>
                    <!-- btn  -->
                    <!-- <i class="fas fa-fire"></i>
                      <i class="fas fa-star"></i> -->
                      <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$sp['img'].'">
                        <input type="hidden" name="price" value="'.$pricenew.'">
                        <input type="submit" name="addtocart" style="display:none" id="submitBtn_'.$id.'">               
                        <div class="product-btnAddcart" onclick="document.getElementById(\'submitBtn_'.$id.'\').click()" style="cursor:pointer;">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Thêm vào giỏ </span>
                        </div>
                      </form>
                  </div>
                  <!--  -->
                </div>
              </div>';
          }
          ?>
          <!--  -->
        </div>

        <div class="text-center">
          <a href="index.php?act=sanphamdacbiet " class="btn-seeAll"><span>Xem tất cả</span><i class="fa-solid fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!--  -->
  <section class="section-service mrSection">
        <div class="container">
          <div class="service">
            <!--  -->
            <div class="groupTitle-index">
              <div>
                <h2 class="groupTitle__title">
                  Dịch vụ đặc biệt của chúng tôi
                  <i class="fa-solid fa-clover"></i>
                </h2>
                <p class="groupTitle__content">
                  Những dịch vụ tốt nhất dành cho khách hàng của chúng tôi
                </p>
              </div>
            </div>

            <!-- list  -->
            <div class="swiper block-service">
              <div class="service-list swiper-wrapper">
                <div class="service-items swiper-slide">
                  <img
                    src="view/asset/images/chungToi/dichvu_1.webp"
                    alt=""
                    class="service__img"
                  />
                  <h3 class="service__title">Rau hữu cơ</h3>
                  <p class="service__content">
                    Được trồng theo phương pháp hiện đại nhất, đạt tiêu chuẩn
                    quốc tế, vô cùng an toàn khi sử dụng.
                  </p>
                  <!-- <div class="text-center learn-more">
                  <a href="#!" class="btn-primary">Tìm hiểu thêm</a>
                </div> -->
                </div>
                <div class="service-items swiper-slide">
                  <img
                    src="view/asset/images/chungToi/dichvu_2.webp"
                    alt=""
                    class="service__img"
                  />
                  <h3 class="service__title">Giao hàng nhanh chóng</h3>
                  <p class="service__content">
                    Giao hàng nhanh nhất để đảm bảo chất lượng tốt nhất cho
                    những sản phẩm bạn đã đặt.
                  </p>
                  <!-- <div class="text-center learn-more">
                  <a href="#!" class="btn-primary">Tìm hiểu thêm</a>
                </div> -->
                </div>
                <div class="service-items swiper-slide">
                  <img
                    src="view/asset/images/chungToi/dichvu_3.webp"
                    alt=""
                    class="service__img"
                  />
                  <h3 class="service__title">Thanh toán dễ dàng</h3>
                  <p class="service__content">
                    Nhiều hình thức thanh toán làm cho việc đặt hàng của bạn và
                    shop trở nên dễ dàng và tiện lợi hơn rất nhiều.
                  </p>
                  <!-- <div class="text-center learn-more">
                  <a href="#!" class="btn-primary">Tìm hiểu thêm</a>
                </div> -->
                </div>
              </div>
            </div>
            <!-- script -->
            <script>
              const swiper = new Swiper(".block-service", {
                loop: false,
                spaceBetween: 24,
                slidesPerView: 3,
                breakpoints: {
                  950: {
                    slidesPerView: 3,
                  },
                  575: {
                    slidesPerView: 1.5,
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
          </div>
        </div>
      </section>

  <!--  -->
  <section class="section-productFruit mrSection">
    <div class="container">
      <?php
				$tendm = $list_sanpham_danhmuc1[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc1[0]['imgdm']
				?>
      <!--  -->
      <div class="container-product">
        <div class="product-imgleft">
          <a href="#!">
            <img
              src="<?php echo $hinhdm;?>"
              alt="" />
          </a>
        </div>
        <!--  -->
        <div class="product-vegetable">
          <div class="groupTitle-index">
            <div class="groupTitle">
              <a href="#!">
                <h2 class="groupTitle__title">
                  <?php echo $tendm;?>
                  <i class="fa-solid fa-clover"></i>
                </h2>
              </a>
            </div>
            <!--  -->
     
          </div>

          <!--  -->
          <div class="vegetable product-col4">
            <?php
              foreach ($list_sanpham_danhmuc1 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_patch . $sp['img'];
                $pricenew = $priceold - ($priceold * $sale / 100);
                $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
                $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
                $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
                echo ' <div class="product" data-salesQuantity="20">
                <!-- btn sản phẩm -->
                <ul class="btn-Listwishlist">
                  <li class="btn-Listwishlist__btn">
                    <form action="index.php?act=addtocart" method="post" style="display:inline">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$sp['img'].'">
                    <input type="hidden" name="price" value="'.$pricenew.'">
                    <input type="submit" name="addtocart" id="submitBtn_'.$id.'" style="display:none">
                    <a href="#!" onclick="document.getElementById(\'submitBtn_'.$id.'\').click(); return false;">
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
                    </form>
                  </li>
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i
                        class="fa-solid fa-magnifying-glass reduce-icon"></i>
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                  </li>
                </ul>
                <!-- đóng btn sản phẩm -->
                '.$saleHtml.'

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
                      <a href="' . $linksp . '">
                        ' . $name . '
                      </a>
                    </h3>
                    <div class="product-price">
                      <span class="product-price__new"> ' . number_format($pricenew) . '₫</span>
                      '.$oldPriceHtml.'
                    </div>
                    <div class="product__line hiddenUi"></div>
                    <span class="product__sold hiddenUi">Đã bán ' . $sold . '</span>
                  </div>
                  <!--  -->
                </div>
              </div>';
              }
            ?>
          </div>
          <div class="text-center">
            <a href="index.php?act=sanphamall&stt=<?=$stt1?>" class="btn-seeAll"><span>Xem tất cả</span><i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <!--  -->
        </div>
      </div>
      <!--  -->
    </div>
  </section>

  <!--  -->
  <section class="section-3banner mrSection">
        <div class="container">
          <div class="swiper slide-baner3Img">
            <div class="hero-image3img swiper-wrapper">
              <div class="hero-image__img3 swiper-slide">
                <a href="<?=$banner5['link']?>" class="hero-image__hover">
                  <img
                    src="<?=$img_patch.$banner5['img'] ?>"
                    alt="<?=$banner5['name']?>"
                  />
                </a>
              </div>
              <div class="hero-image__img3 swiper-slide">
                <a href="<?=$banner6['link']?>" class="hero-image__hover">
                  <img
                    src="<?=$img_patch.$banner6['img'] ?>"
                    alt="<?=$banner6['name']?>"
                  />
                </a>
              </div>
              <div class="hero-image__img3 swiper-slide">
                <a href="<?=$banner7['link']?>" class="hero-image__hover">
                  <img
                    src="<?=$img_patch.$banner7['img'] ?>"
                    alt="<?=$banner7['name']?>"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

  <!--  -->
  <section class="section-productFruit mrSection">
    <div class="container">
      <?php
				$tendm = $list_sanpham_danhmuc2[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc2[0]['imgdm']
				?>
      <!--  -->
      <div class="container-product">
        <div class="product-imgleft">
          <a href="#!">
            <img
              src="<?php echo $hinhdm;?>"
              alt="" />
          </a>
        </div>

        <!--  -->
        <div class="product-dryGoods">
          <div class="groupTitle-index">
            <div class="groupTitle">
              <a href="#!">
                <h2 class="groupTitle__title">
                  <?php echo $tendm;?>
                  <i class="fa-solid fa-clover"></i>
                </h2>
              </a>
            </div>
            <!--  -->
  
          </div>

          <!--  -->
          <div class="dryGoods product-col4">
            <?php
              foreach ($list_sanpham_danhmuc2 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_patch . $sp['img'];
                $pricenew = $priceold - ($priceold * $sale / 100);
                $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
                $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
                $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
                echo ' <div class="product" data-salesQuantity="20">
                <!-- btn sản phẩm -->
                <ul class="btn-Listwishlist">
                  <li class="btn-Listwishlist__btn">
                  <form action="index.php?act=addtocart" method="post" style="display:inline">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="img" value="'.$sp['img'].'">
                  <input type="hidden" name="price" value="'.$pricenew.'">
                  <input type="submit" name="addtocart" id="submitBtn_'.$id.'" style="display:none">
                  <a href="#!" onclick="document.getElementById(\'submitBtn_'.$id.'\').click(); ">
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
                  </form>
                  </li>
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i
                        class="fa-solid fa-magnifying-glass reduce-icon"></i>
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich"></i>
                    <input type = "hidden" value="'.$id.'"></a>
                  </li>
                </ul>
                <!-- đóng btn sản phẩm -->
                '.$saleHtml.'

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
                      <a href="' . $linksp . '">
                        ' . $name . '
                      </a>
                    </h3>
                    <div class="product-price">
                      <span class="product-price__new"> ' . number_format($pricenew) . '₫</span>
                      '.$oldPriceHtml.'
                    </div>
                    <div class="product__line hiddenUi"></div>
                    <span class="product__sold hiddenUi">Đã bán ' . $sold . '</span>
                  </div>
                  <!--  -->
                </div>
              </div>';
              }
            ?>
          </div>
          <div class="text-center">
            <a href="index.php?act=sanphamall&stt=<?=$stt2?>" class="btn-seeAll"><span>Xem tất cả</span><i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <!--  -->
        </div>
      </div>
      <!--  -->
    </div>
  </section>

  <!--  -->
  <section class="section-1banner mrSection">
    <div class="container">
      <div class="hero-image1img">
        <a href="<?=$banner8['link']?>" class="hero-image__hover">
          <img src="<?=$img_patch.$banner8['img'] ?>" alt="<?=$banner7['name']?>" />
        </a>
      </div>
    </div>
  </section>

  <!--  -->
  <section class="section-dryGoods mrSection">
    <div class="container">
      <!--  -->
      <div class="container-product">
        <?php
				$tendm = $list_sanpham_danhmuc3[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc3[0]['imgdm']
				?>
        <div class="product-imgleft">
          <a href="#!">
            <img
              src="<?php echo $hinhdm;?>"
              alt="" />
          </a>
        </div>
        <!--  -->
        <div class="product-dryGoods">
          <div class="groupTitle-index">
            <div class="groupTitle">
              <a href="#!">
                <h2 class="groupTitle__title">
                  <?php echo $tendm;?>
                  <i class="fa-solid fa-clover"></i>
                </h2>
              </a>
            </div>
            <!--  -->
            <!-- <div class="button-control">
                  <div class="btn-control__prev flex-center">
                    <i class="fa-solid fa-chevron-left"></i>
                  </div>
                  <div class="btn-control__next flex-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  </div>
                </div> -->
          </div>
          <!--  -->
          <div class="dryGoods product-col4">
          <?php
              foreach ($list_sanpham_danhmuc3 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_patch . $sp['img'];
                $pricenew = $priceold - ($priceold * $sale / 100);
                $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
                $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
                $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
                echo ' <div class="product" data-salesQuantity="20">
                <!-- btn sản phẩm -->
                <ul class="btn-Listwishlist">
                  <li class="btn-Listwishlist__btn">
                  <form action="index.php?act=addtocart" method="post" style="display:inline">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="img" value="'.$sp['img'].'">
                  <input type="hidden" name="price" value="'.$pricenew.'">
                  <input type="submit" name="addtocart" id="submitBtn_'.$id.'" style="display:none">
                  <a href="#!" onclick="document.getElementById(\'submitBtn_'.$id.'\').click(); ">
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
                  </form>
                  </li>
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i
                        class="fa-solid fa-magnifying-glass reduce-icon"></i>
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                    
                  </li>
                </ul>
                <!-- đóng btn sản phẩm -->
                '.$saleHtml.'

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
                      <a href="' . $linksp . '">
                        ' . $name . '
                      </a>
                    </h3>
                    <div class="product-price">
                      <span class="product-price__new"> ' . number_format($pricenew) . '₫</span>
                      '.$oldPriceHtml.'
                    </div>
                    <div class="product__line hiddenUi"></div>
                    <span class="product__sold hiddenUi">Đã bán ' . $sold . '</span>
                  </div>
                  <!--  -->
                </div>
              </div>';
              }
            ?>
            
            <!--  -->
          </div>
          <div class="text-center">
            <a href="index.php?act=sanphamall&stt=<?=$stt3?>" class="btn-seeAll"><span>Xem tất cả</span><i class="fa-solid fa-chevron-right"></i></a>
          </div>
          <!--  -->
        </div>
      </div>
      <!--  -->
    </div>
  </section>

  <!--  -->
  <section class="section-1banner mrSection">
    <div class="container">
      <div class="hero-image1img">
        <a href="<?=$banner9['link']?>" class="hero-image__hover">
          <img src="<?=$img_patch.$banner9['img'] ?>" alt="<?=$banner9['name']?>" />
        </a>
      </div>
    </div>
  </section>

   <!-- tin tức nè ư -->

  <!-- đóng block tin tuwscs  -->
  <div class="latest-new">
    <div class="container">
     <div class="groupTitle-index">
       <div class="groupTitle">
         <a href="#!"
           ><h2 class="groupTitle__title">
             Tin tức mới nhất
             <i class="fa-solid fa-clover"></i></h2
         ></a>
       </div>
       <!--  -->
       <div class="button-control">
         <div class="btn-control__prev">
           <i class="fa-solid fa-chevron-left"></i>
         </div>
         <div class="btn-control__next">
           <i class="fa-solid fa-chevron-right"></i>
         </div>
       </div>
     </div>
     <!-- tin tức  -->
      <div class="swiper block-article">
         <div class="swiper-wrapper">
          <?php
          foreach($listbaiviet as $baiviet):
            extract($baiviet);
            $linkbv = "index.php?act=baivietct&idbv=".$id;
            $hinh = $img_patch . $img;

          
          ?>
          <div class="swiper-slide article">
            <div class="article__img">
              <a href="<?=$linkbv ?>">
                <img src="<?=$hinh ?>" alt="">
              </a>
            </div>
            <!--  -->
            <div class="article-time">
              <span class="article-time__day"><?= date('d',strtotime($ngaydang))?></span><span class="article-time__month">Tháng <?=date('m',strtotime($ngaydang))?></span>
            </div>
            <!--  -->
            <div class="article-content">
              <h3 class="article-content__title"><a href="<?=$linkbv?>"><?=$tieude ?></a></h3>
              <p class="article-content__main"><?=$tomtat ?></p>
              <div class="article-content__btn"><a href="<?=$linkbv?>">Đọc tiếp</a></div>
            </div>
          </div>
          <?php endforeach; ?>
          <!--  -->
         
         </div>
      </div>
    </div>
   </div>

   <script>
     const swiperArticle = new Swiper(".block-article", {
      loop: false,
      // autoplay: {
      //   delay: 2000,
      // },
      speed: 1000,
      spaceBetween: 20,
      slidesPerView: 4,
      breakpoints: {
        1023: {
          slidesPerView: 4,
        },
        767: {
          slidesPerView: 3,
        },
        0: {
          slidesPerView: 2,
        },
      },
      navigation: {
        nextEl: ".latest-new .btn-control__next",
        prevEl: ".latest-new .btn-control__prev",
      },
      on: {
        init: function () {
          if (this.slides.length > this.params.slidesPerView) {
            document.querySelector(".latest-new .btn-control__next").classList.add("active-btn");
          }
        },

        //change
        slideChange: function () {
          if (this.isEnd) {
            document.querySelector(".latest-new .btn-control__prev").classList.add("active-btn");
            document.querySelector(".latest-new .btn-control__next").classList.remove("active-btn");
          } else {
            document.querySelector(".latest-new .btn-control__prev").classList.add("active-btn");
            if (
              !document.querySelector(".latest-new .btn-control__next").classList.contains("active-btn")
            ) {
              document.querySelector(".latest-new .btn-control__next").classList.add("active-btn");
            }
          }
          // đầu slide
          if (this.isBeginning) {
            document.querySelector(".latest-new .btn-control__prev").classList.remove("active-btn");
          }
        },
      },
      //
    });
   </script>

  <!--  --> <?php
				$tendm = $list_sanpham_danhmuc4[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc4[0]['imgdm']
				?>
 <!-- mới nhát ============== -->
<section class="section-productCategory mrSection">
        <div class="container">
          <div class="productCategory">
            <!--  -->
            <div class="category__items categoryProduct-col1">
              <div class="groupTitle-index">
                <div>
                  <h2 class="groupTitle__title">
                    <!-- inner tên -->
                  <?=$tendm?>
                    <i class="fa-solid fa-clover"></i>
                  </h2>
                </div>
                <!--  -->
                <div class="button-control">
                  <div class="btn-control__prev flex-center">
                    <i class="fa-solid fa-chevron-left"></i>
                  </div>
                  <div class="btn-control__next flex-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="swiper swiper-categoryProduct1">
                <div class="swiper-wrapper category-listProduct">

                <?php
					foreach ($list_sanpham_danhmuc4 as $sp) {
						extract($sp);
						$linksp = "index.php?act=sanphamct&idsp=" . $id;
						$hinh = $img_patch . $sp['img'];
						$pricenew = $priceold - ($priceold * $sale / 100);
            $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
						echo '<div class="product swiper-slide">
            <div class="product__thumbnail">
              <a href="'.$linksp.'" class="product__thumb">
                <img
                  src="' . $hinh . '"
                  alt="" />
              </a>
            </div>
            <!--  -->
            <div class="product-info">
              <h3 class="product__name">
                <a href="'.$linksp.'">' . $name . '</a>
              </h3>
              <div>
                <div class="product-price">
                  <div class="product-price__new">' . number_format($pricenew) . '₫</div>';
                  if($sale > 0){
										echo '<div class="product-price__old">' . number_format($priceold) . '₫</div>';
									}
                echo'</div>
                <div class="product-listBtn">
                  <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$sp['img'].'">
                    <input type="hidden" name="price" value="'.$pricenew.'">
                    <input type="submit" name="addtocart" style="display:none" id="submitBtn_'.$id.'">              
                    <div class="product__btn" onclick="document.getElementById(\'submitBtn_'.$id.'\').click()" style="cursor:pointer;">
                      <a href="#!">
                      <i class="fa-solid fa-basket-shopping"></i></a>
                    </div>
                  </form>
                  
                  <div class="product__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
                  <div class="product__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
					}
					?>
                </div>
              </div>
            </div>

             <!--  --> <?php
				$tendm = $list_sanpham_danhmuc5[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc5[0]['imgdm']
				?>
            <!-- col 2  -->
             <div class="category__items categoryProduct-col2">
              <div class="groupTitle-index">
                <div>
                  <h2 class="groupTitle__title">
                  <?=$tendm?>
                    <i class="fa-solid fa-clover"></i>
                  </h2>
                </div>
                <!--  -->
                <div class="button-control">
                  <div class="btn-control__prev flex-center">
                    <i class="fa-solid fa-chevron-left"></i>
                  </div>
                  <div class="btn-control__next flex-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="swiper swiper-categoryProduct2">
                <div class="swiper-wrapper category-listProduct">

                <?php
					foreach ($list_sanpham_danhmuc5 as $sp) {
						extract($sp);
						$linksp = "index.php?act=sanphamct&idsp=" . $id;
						$hinh = $img_patch . $sp['img'];
						$pricenew = $priceold - ($priceold * $sale / 100);
            $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
						echo '<div class="product swiper-slide">
            <div class="product__thumbnail">
              <a href="'.$linksp.'" class="product__thumb">
                <img
                  src="' . $hinh . '"
                  alt="" />
              </a>
            </div>
            <!--  -->
            <div class="product-info">
              <h3 class="product__name">
                <a href="'.$linksp.'">' . $name . '</a>
              </h3>
              <div>
                <div class="product-price">
                  <div class="product-price__new">' . number_format($pricenew) . '₫</div>';
                  if($sale > 0){
										echo '<div class="product-price__old">' . number_format($priceold) . '₫</div>';
									}
                echo'</div>
                <div class="product-listBtn">
                  <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$sp['img'].'">
                    <input type="hidden" name="price" value="'.$pricenew.'">
                    <input type="submit" name="addtocart" style="display:none" id="submitBtn_'.$id.'">              
                    <div class="product__btn" onclick="document.getElementById(\'submitBtn_'.$id.'\').click()" style="cursor:pointer;">
                      <a href="#!">
                      <i class="fa-solid fa-basket-shopping"></i></a>
                    </div>
                  </form>
                  
                  <div class="product__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
                  <div class="product__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
					}
					?>
                </div>
              </div>
            </div>

                   <!--  --> <?php
				$tendm = $list_sanpham_danhmuc6[0]['tendm'];
				$hinhdm = $img_patch . $list_sanpham_danhmuc6[0]['imgdm']
				?>
            <!-- col 3 -->
            <div class="category__items categoryProduct-col3">
              <div class="groupTitle-index">
                <div>
                  <h2 class="groupTitle__title">
                    <!-- inner -->
                   <?=$tendm?>

                    <i class="fa-solid fa-clover"></i>
                  </h2>
                </div>
                <!--  -->
                <div class="button-control">
                  <div class="btn-control__prev flex-center">
                    <i class="fa-solid fa-chevron-left"></i>
                  </div>
                  <div class="btn-control__next flex-center">
                    <i class="fa-solid fa-chevron-right"></i>
                  </div>
                </div>
              </div>
              <!--  -->
              <div class="swiper swiper-categoryProduct3">
                <div class="swiper-wrapper category-listProduct">

                <?php
					foreach ($list_sanpham_danhmuc6 as $sp) {
						extract($sp);
						$linksp = "index.php?act=sanphamct&idsp=" . $id;
						$hinh = $img_patch . $sp['img'];
						$pricenew = $priceold - ($priceold * $sale / 100);
            $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
						echo '<div class="product swiper-slide">
            <div class="product__thumbnail">
              <a href="'.$linksp.'" class="product__thumb">
                <img
                  src="' . $hinh . '"
                  alt="" />
              </a>
            </div>
            <!--  -->
            <div class="product-info">
              <h3 class="product__name">
                <a href="'.$linksp.'">' . $name . '</a>
              </h3>
              <div>
                <div class="product-price">
                  <div class="product-price__new">' . number_format($pricenew) . '₫</div>';
                  if($sale > 0){
										echo '<div class="product-price__old">' . number_format($priceold) . '₫</div>';
									}
                echo'</div>
                <div class="product-listBtn">
                  <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'.$sp['img'].'">
                    <input type="hidden" name="price" value="'.$pricenew.'">
                    <input type="submit" name="addtocart" style="display:none" id="submitBtn_'.$id.'">              
                    <div class="product__btn" onclick="document.getElementById(\'submitBtn_'.$id.'\').click()" style="cursor:pointer;">
                      <a href="#!">
                      <i class="fa-solid fa-basket-shopping"></i></a>
                    </div>
                  </form>
                  
                  <div class="product__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sp['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div>
                  <div class="product__btn">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich">
                    </i><input type = "hidden" value="'.$id.'"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>';
					}
					?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
<script src="view/asset/js/main.js"></script>
<script src="view/asset/js/yeuthich.js"></script>
<script src="view/asset/js/chitiet.js"></script> 
<!-- chạy hàm  -->
<script>
      app.star = function () {
        // this.search();
        this.openQuickView();
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.openSubmenu();
        this.openMenuMobile();
        this.slideBanner3Img();
        this.renderTextInp();
        this.renderData();
        // // this.renderProduct(1, ".section-1banner"); // đóng cái này
        this.openContentSale();
        this.preSlider();
        this.nextSlider();
        this.intervalSlider = setInterval(() => this.autoRun(), this.timeRun);
        this.swiperSliderCategory();
      };
      app.star();
    </script>


