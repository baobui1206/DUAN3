<!-- modal  -->
<div class="modal"></div>
 <div class="modal-menuMobile"></div> 
 
 <!-- breadcrumb -->
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
            <li><a href="#!" class="changeurl">Đơn hàng của tôi</a></li>
          </div>
        </ul>
      </div>
    </div>
    
<main class="main mrSection">
      <div class="container-small">
       <div class="mybill">
        <h1 class="mybill__title">Đơn hàng của tôi</h1>
        <!--  -->
        <ul class="order-list">
        <?php

            $donhangs = [];
            foreach ($listbill as $item) {
                $donhangs[$item['id']][] = $item;// mỗi id tạo 1 mảng con
                //gom sản phẩm theo idbill mỗi item sẽ chứa du liệu  cung item nhu soluong cart
                //cai này ko  đóng foreach
                
            }
                
            foreach ($donhangs as $idbill => $donhang)://mỗi donhang là một mảng sp có cùng id
                $first = $donhang[0]; 
                $total = $first['total'];
                $bill_status = $first['bill_status'];
                // để lấy dữ liệu chung của đơn hàng vd total bill_status vì đều lặp qua các thông tin này
        ?>
            <li class="order-item">
                <div class="status">
                    <div></div>
                    <div class="status__content"><?= get_ttdh($bill_status) ?></div>
                </div>

                <!-- danh sách sản phẩm -->
                <?php 
                    foreach ($donhang as $sp):
                    //lặp qua từng sản phẩm để hiện thị tên giá sô lượng của 1 sản phẩm của mảng donhangs
                ?>
                <div class="bill-product">
                    <div class="bill-product__img">
                        <a href="#!">
                            <img src="<?= $img_patch . $sp['img'] ?>" alt="">
                        </a>
                    </div>
                    <div class="bill-product__info">
                        <h3 class="info-name"><a href="#!"><?= $sp['name'] ?></a></h3>
                        <div class="info-quantityPrice">
                            <span class="info-quantityPrice__quantity">x<?= $sp['soluong'] ?></span>
                            <span class="info-quantityPrice__price"><?= number_format($sp['thanhtien'], 0, ',', '.') ?>đ</span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                        <!-- dong foreach -->
                <!-- Tổng tiền -->
                <div class="checkout">
                    <div class="checkout__left">
                        <span>Vui lòng chỉ nhấn "Đã nhận được hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào.</span>
                    </div>
                    <div class="checkout__right">
                        <div class="checkout-money">
                            <span class="checkout-money__title">Thành tiền:</span>
                            <span class="checkout-money__money"><?= number_format($total, 0, ',', '.') ?>đ</span>
                        </div>
                        <button class="checkout-btn">Đã nhận hàng</button>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
                        <!-- dong foreach -->

            
        </ul>
        <!--  -->
       </div>
      </div>
    </main>

    <script src="./view/asset/js/main.js"></script>
    <script>
      app.star = function () {
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.openMenuMobile();
        this.openSubmenu();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>