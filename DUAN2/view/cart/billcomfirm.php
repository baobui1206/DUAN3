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
			<li><a href="#!" class="changeurl">Đăng ký</a></li>
		  </div>
		</ul>
	  </div>
	</div>

	<!-- main -->
	<main class="main mrSection">
	  <div class="container-small">
      <div class="order-success">
        <div class="success-tick">
          <div class="success-tick__icon">
            <i class="fa-solid fa-check"></i>
          </div>
          <div class="success-tick__content">Đặt hàng thành công</div>
        </div>
        <!--  -->
        <?php
          if(isset($bill)&&(is_array($bill))){
            //kiem tra lits bill ton tai va no co phai la mang hay khong
            extract($bill);
          }
        ?>
        <div class="success-content">
          <p class="success-content__info">
            Bạn đã đặt hàng thành công mã đơn hàng DM-
            <span class="bold-passageMedium"><?=$bill['id']?></span>
            trị giá <span class="bold-passageMedium"><?= number_format($bill['total']+50000, 0, ',', '.') ?>đ</span>,
            <span class="bold-passageMedium"> thanh toán khi nhận hàng </span>
          </p>
          <!--  -->
          <div class="success-contenUser">
            <span class="success-contenUser__title">Thông tin người đặt</span>
            <div class="success-contenUser__content">
            <p>
              Người đặt:
              <span class="bold-passageMedium"><?= $bill['bill_name']?></span>
            </p>
            <p>
              Địa chỉ:
              <span class="bold-passageMedium"><?= $bill['bill_address']?></span>
            </p>
            <p>
              Email:
              <span class="bold-passageMedium"><?= $bill['bill_email']?></span>
            </p>
            <p>
              Điện thoại: <span class="bold-passageMedium"><?= $bill['bill_tel']?></span>
            </p>
            <p>
              Phương thức thanh toán: <span class="bold-passageMedium"><?= get_ttdathang($bill['bill_pttt'])?></span>
            </p>
            
            <!--  -->
            <p class="success-contenUser__thank">
              <span class="bold-passageSemi-Bold">Organic Home</span> rất
              hân hạnh phục vụ bạn
            </p>
            </div>
          </div>

          <a class="btn-continueBuy" href="index.html">Tiếp tục mua hàng </a>
        </div>
      </div>
      
	  </div>
	</main>