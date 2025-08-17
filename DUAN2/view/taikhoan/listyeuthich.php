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
			<li><a href="#!" class="changeurl">Yêu thích</a></li>
		  </div>
		</ul>
	  </div>
	</div>
	<div class="modal"></div>
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
		<div class="love-product">
		  <h1 class="love-product__title">Sản phẩm yêu thích</h1>
		  <!-- list sp -->
		  <div class="love-product__list product-col5Nohidden">
        <?php
        if (!empty($listyeuthich)) {
          foreach ($listyeuthich as $yeuthich){
            extract($yeuthich);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $xoathich = "index.php?act=xoayeuthich&idthich=" .$idthich;
            $pricenew = $priceold - ($priceold * $sale / 100);
            $hinh = $img_patch . $yeuthich['img'];
            $saleHtml = ($sale > 0) ? '<span class="price-minus flex-center">Giảm ' . $sale . '%</span>' : '';
            $oldPriceHtml = ($sale > 0) ? '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>' : '';
            echo ' 
            <div class="product" data-salesQuantity="20" >
            <!-- btn sản phẩm -->
            <ul class="btn-Listwishlist">
            <li class="btn-Listwishlist__btn">
              <form action="index.php?act=addtocart" method="post" style="display:inline">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="img" value="'.$img.'">
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
            <li class="btn-Listwishlist__btn">
              <a href="#!"
              ><i class="fa-solid fa-magnifying-glass reduce-icon"></i>
              </a>
            </li>
            <li class="btn-Listwishlist__btn">
              <a href="' . $xoathich . '"
              ><i class="fa-solid fa-xmark"></i>
              </a>
            </li>
            
            </ul>
            <!-- đóng btn sản phẩm -->
            '.$saleHtml.'
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
              <a href="' . $linksp . '"> ' . $name . ' </a>
              </h3>
              <div class="product-price">
              <span class="product-price__new"> ' . number_format($pricenew) . '₫</span>
              '.$oldPriceHtml.'
              </div>
              <div class="product-sold">
              <div class="sold-content">
                <span class="sold-content__left"
                >Đã bán
                <span class="bold-passageSemi-Bold">' . $sold . '</span></span
                >
              </div>
              </div>
            
            </div>
            <!--  -->
            </div>
          </div>';
          }
        }else{
          echo '<p>Không có sản phẩm yêu thích.</p>';
        }
        ?>
		  </div>
		  <!--  -->
		</div>
	  </div>
	</main>
	<script src="view/asset/js/main.js"></script>
	<!-- chạy hàm cần chạy  -->
	<script>
	  app.star = function () {
		this.slideMenuHeaderLeft();
		this.slideMenuHeaderRight();
		this.openSubmenu();
		this.openMenuMobile();
		this.openCategory();
		this.openPopup();
		this.renderTextInp();
		this.search();
	  };
	  app.star();
	</script>
