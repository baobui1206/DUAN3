<!-- modal  -->
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
            <li><a href="#!" class="changeurl">Bài viết chi tiet</a></li>
          </div>
        </ul>
      </div>
    </div>
<?php
$thuVN = [
  'Monday' => 'Thứ hai',
  'Tuesday' => 'Thứ ba',
  'Wednesday' => 'Thứ tư',
  'Thursday' => 'Thứ năm',
  'Friday' => 'Thứ sáu',
  'Saturday' => 'Thứ bảy',
  'Sunday' => 'Chủ nhật'
];
$thu = date('l',strtotime($ngaydang));//thu sẽ hiện ra tiếng anh
?>   
<main class="main mrSection">
      <div class="container">
      <div class="readnew">
        <!-- left -->
     <div class="readnew__left">
     <h1 class="readnew__title"><?=$tieude?></h1>
        <div class="readnew-timeUser">
            <div class="time">
                <i class="fa-regular fa-clock"></i>
                <span class="time__content"><?= $thuVN[$thu] . ', ' . date('d/m/Y', strtotime($ngaydang)) ?></span> 
                <!-- de hien thu tiêng việt -->
            </div>
            <?php
            foreach($listtaikhoan as $tk){
              if($tk['id']==$iduser){
                $tacgia = $tk['user'];
                break;
              }
            }
            ?>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <span class="user__name"><?=$tacgia?></span>
            </div>
        </div>
        <!-- khối này inner data ra  -->
         <div class="inner-news"> 
            <?=$noidung?>
         </div>
     </div>
     <!-- right -->
      <div class="readnew__right">
          <div class="block-read">
          <h3 class="related-posts__title">Tin tức liên quan <i class="fa-solid fa-clover"></i></h3>
        <div class="related-posts">
            <!-- 1 block -->
             <?php foreach($blog_cung_loai as $blog):
              extract($blog);
              $linkbv = "index.php?act=baivietct&idbv=".$id;
              $hinh = $img_patch.$img;
              ?>
            <div class="related-new">
                <div class="related-new__img">
                    <a href="<?=$linkbv ?>">
                        <img src="<?=$hinh ?> "width='80' height='80' alt="">
                    </a>
                </div>
                <h3 class="related-new__name"><a href="<?=$linkbv ?>"><?=$tieude ?></a></h3>
            </div>
            <?php endforeach; ?>

          
           
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
        this.openMenuMobile();
        this.openSubmenu();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>