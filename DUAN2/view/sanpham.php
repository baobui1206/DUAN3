
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
            <li><a href="#!" class="changeurl">Tất cả sản phẩm</a></li>
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

<!-- modal  -->
<div class="modal"></div>
 <div class="modal-menuMobile"></div>
 
    <!-- main -->
    <main class="main mrSection">
      <div class="container">
        <div class="allProduct-page">
          <div class="allProduct-page__left">
            <div class="sticky">
              <!--  -->
              <div class="allProduct-page__category">
                <h3 class="groupTitle__title">Danh mục sản phẩm</h3>
                <!--  -->
                <ul class="category">
                  <?php
                  foreach($dsdm as $dm){
                      extract($dm);
                      $linkdm = "index.php?act=sanpham&iddm=".$id;
                      echo
                      '<li class="category__items">
                      <a href="' . $linkdm . '">
                      <span class="category__content">' . $name . '</span
                      ><i class="fa-solid fa-plus"></i
                      ></a>
                      </li>';
                  }
                  ?>
                </ul>
              </div>
              <!--  -->
              <!-- tit;le -->
              <div class="filter__title">
                <h2 class="groupTitle__title">Bộ lọc sản phẩm</h2>
              </div>
              <!--  -->

              <!-- bộ lọc nè  -->
              <div class="filter">
                <h3 class="groupTitle__title">Chọn mức giá</h3>
                <ul class="filter__list">
                  <li class="filter__items">
                    <input
                      type="checkbox"
                      data-min="0"
                      data-max="100000"
                      id="filter1"
                      data-smaller="100000"
                    /><label for="id1">Dưới 100.000đ</label>
                  </li>
                  <li class="filter__items">
                    <input type="checkbox" data-min="10000" data-max="50000" id="filter2" /><label for="filter2"
                      >Từ 10.000đ - 50.000đ</label
                    >
                  </li>
                  <li class="filter__items">
                    <input type="checkbox" data-min="50000" data-max="100000" id="filter3" /><label for="filter3"
                      >Từ 50.000đ - 100.000đ</label
                    >
                  </li>
                  <li class="filter__items">
                    <input type="checkbox" data-min="100000" data-max="200000" id="filter4" /><label for="filter4"
                      >Từ 100.000đ - 200.000đ</label
                    >
                  </li>
                  <li class="filter__items">
                    <input type="checkbox" data-min="200000" data-max="300000"  id="filter5" /><label
                      for="filter5"
                      >Từ 200.000đ - 300.000đ</label
                    >
                  </li>
                  <li class="filter__items">
                    <input type="checkbox" data-min="300000" data-max="500000" id="filter6" /><label
                      for="filter6"
                      >Từ 300.000đ - 500.000đ</label
                    >
                  </li>
                  
                  <li class="filter__items">
                    <input type="checkbox" data-min="500000" id="filter8" /><label
                      for="filter8"
                      >Trên 500.000đ</label
                    >
                  </li>
                </ul>
              </div>
              <!--  -->
              <!-- bộ lọc nè  -->
             
              <!-- bộ lọc nè  -->
              
              <!-- đóng filter -->
            </div>
          </div>

          <div class="allProduct-page__right">
            <div class="arrange">
              <!--  -->
              <div class="arrange__left">
                <h1 class="groupTitle__title">Tất cả sản phẩm</h1>
              </div>
              <!--  -->
              <div class="arrange__right">
                <div class="filter-mobile">
                  <i class="fa-solid fa-filter"></i>
                </div>
                <div class="arrange__title">
                  <label>Sắp xếp theo:</label>
                  <div class="arrange-select">
                    <span>Mặc định</span>
                    <i class="fa-solid fa-angle-down"></i>
                    <ul class="arrange-show">
                      <li class="arrange-show__items">
                        <a href="#!">Mặc định</a>
                      </li>
                      <li class="arrange-show__items">
                        <a href="index.php?act=sanphamtheoten">A->Z</a>
                      </li>
                      <li class="arrange-show__items">
                        <a href="index.php?act=sanphamgiatang">Giá tăng dần</a>
                      </li>
                      <li class="arrange-show__items">
                        <a href="index.php?act=sanphamgiagiam">Giá giảm dần</a>
                      </li>
                      <li class="arrange-show__items">
                        <a href="index.php?act=sanphammoinhat">Hàng mới nhất</a>
                      </li>
                      <li class="arrange-show__items">
                        <a href="index.php?act=sanphamcunhat">Hàng cũ nhất</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- product -->
            <div class="all-product product-col4Nohidden">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit=12;
            $offset=($page - 1) * $limit;
            $pageProduct=array_slice($listsanpham,$offset,$limit);

              foreach($pageProduct as $sanpham){
                extract($sanpham);
                
                $hinhpath = $img_patch.$img;
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                $pricenew = $priceold - ($priceold * $sale / 100);
                $hinh = $img_patch . $sanpham['img'];
                $oldPriceDataProduct = ($sale > 0) ? number_format($priceold, 0, ',', '.') . '₫' : '';
              
                echo
                ' <div class="product" data-price="'.$pricenew.'" data-salesQuantity="20">
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
                  <li class="btn-Listwishlist__btn open-quickview" data-name="'.$name.'" data-price="'.$pricenew.'" data-pricenew="' . number_format($pricenew, 0, ',', '.') . '₫" data-priceold="'.$oldPriceDataProduct.'" data-images="'.$sanpham['img'].'" data-id="'.$id.'" data-stock="'.$stock.'">
                    <a href="#!"
                      ><i class="fa-solid fa-magnifying-glass reduce-icon"></i>
                      
                    </a>
                  </li>
                  <li class="btn-Listwishlist__btn ">
                    <a href="#!"><i class="fa-regular fa-heart yeuthich"></i> 
                    <input type="hidden" value="'.$id.'">
                    </a>
                  </li>
                </ul>';
                if($sale > 0){
                  echo '<span class="price-minus flex-center">Giảm '.$sale.'%</span>';
                }
                
                echo'<a href="'.$linksp.'">
                  <div class="product__child">
                    <div class="product__thumbnail">
                      <a href="'.$linksp.'" class="img__thumb">
                        <img
                          src="'.$hinhpath.'"
                          alt=""
                        />
                      </a>
                    </div>
                    <!-- info product -->
                    <div class="product-info">
                      <h3 class="product__name">
                        <a href="'.$linksp.'"> '.$name.' </a>
                      </h3>
                      <div class="product-price">
                        <span class="product-price__new">' . number_format($pricenew, 0, ',', '.') . '₫</span>';
                        if($sale > 0){
                          echo '<span class="product-price__old">' . number_format($priceold, 0, ',', '.') . '₫</span>';
                        }
                        echo
                        '</div>
                          <div class="product-sold">
                      <div class="sold-content">
                        <span class="sold-content__left"
                          >Đã bán
                          <span class="bold-passageSemi-Bold">' . $sold . '</span></span>
                      </div>
                    </div>
                    
                    </div>
                    <!--  -->
                  </div>
                </a>
              </div>';
              }
              ?>
            </div>
            <?php
         if(count($listsanpham)>12){
          $numberPage=ceil(count($listsanpham) / 12 );
          echo'<ul class="btn-tabProduct">
          ';
          if($page>1){
            echo '
             <li class="btn-tabProduct__tab">
             <a href="?act=sanpham&page='.($page-1).'"><i class="fa-solid fa-angles-left"></i></a>
           </li>
            ';
          }
          for($i=1;$i<=$numberPage;$i++){
            $active=($i==$page) ? 'active-tabProduct' : '';
            echo'<li class="btn-tabProduct__tab">
             <a href="?act=sanpham&page='.$i.'" class="'.$active.'" >'.$i.'</a>
           </li>';
          }
          if($page<$numberPage){
            echo '
            <li class="btn-tabProduct__tab">
             <a href="?act=sanpham&page='.($page+1).'"><i class="fa-solid fa-angles-right"></i></a>
           </li>';
          }
          echo '
          </ul>';

        
         }
          ?>
       
       <!-- <script>
        const btn =document.querySelectorAll('.btn-tabProduct__tab');
        btn.forEach((el)=>{
          el.onclick=()=>{
            const page=el.dataset.page;
  
            fetch('?act=sanpham&page=' + page)
            .then(res=>res.text())
            .then((data=>{
              console.log('data');
            }))
          }
        })
       </script> -->

          </div>
        </div>
      </div>
    </main>
       
    <script src="view/asset/js/main.js"></script>
    <script>
      app.star = function () {
        this.openQuickView();
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.openFilterMobile();
        this.openSubmenu();
        this.openMenuMobile();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>

    <script src="view/asset/js/chitiet.js"></script>          
    <script src="view/asset/js/locgia.js"></script>   
    <script src="view/asset/js/yeuthich.js"></script>
    <!-- <script>
      const checkboxes = document.querySelectorAll('.filter__list input[type="checkbox"]');
      checkboxes.forEach((checkbox)=> {
        checkbox.addEventListener ('change', function(){
          if(this.checked){//thís là checkbox đc thao tác, nếu check vừa đc stick thực hiện các bước sau
            checkboxes.forEach((cb) => {
              if(cb !== this) cb.checked = false;//nếu checkbox kiểm tra ko phải đc stick thì bỏ stick nó
            });
          }
        });
      });
    </script> -->