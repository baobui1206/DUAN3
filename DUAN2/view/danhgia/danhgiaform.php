<?php
session_start();
include_once "../../model/pdo.php";
include "../../model/danhgia.php";



if (isset($_SESSION['user']) && isset($_POST['idsp'], $_POST['sosao'], $_POST['noidung'])) {
    $iduser = $_SESSION['user']['id'];
    $idsp = $_POST['idsp'];
    $sosao = $_POST['sosao'];
    $noidung = $_POST['noidung'];
    $ngaydanhgia = date('Y-m-d H:i:s');
    insert_danhgia($iduser, $idsp, $noidung, $sosao, $ngaydanhgia);
}

// Dù có thêm hay không, vẫn load danh sách đánh giá mới
$idsp = $_POST['idsp'];
$danhgias = loadall_danhgia($idsp);
?>
<?php if (!empty($danhgias)): ?>
<ul class="comment-product">
    <?php foreach($danhgias as $dg): ?>
        <?php $damua= damua_sanpham($dg['iduser'],$dg['idsp']); ?>
        <li class="user-comment">
            <div class="top">
                <div class="top__avatar">
                    <img src="view/asset/images/th.jpg" alt="" />
                </div>
                
            <div>
              <div class="block-content">
                <span class="top__userName"><?= $dg['user'] ?></span>
                <div class="top-time">
                    <i class="fa-regular fa-clock"></i>
                    <span class="top-time__date"><?= date('d/m/Y', strtotime($dg['ngaydanhgia'])) ?></span>
                    <!-- stroe time biên chuỗi thành thoiwfgian dùng date hiện ra -->
                    <span class="top-time__time"><?= date('H:i', strtotime($dg['ngaydanhgia'])) ?></span>
                </div>
              </div>
              <!--  -->
              <?php if($damua): ?>
              <div class="bought"><i class="fa-regular fa-circle-check"></i> <span>Đã mua hàng tại Organic Home</span></div>
              <?php endif; ?>  
              </div>
            </div>
            <!--  -->
            <div class="bottom">
                <div class="center__start">
                    <?php 
                    for($i = 1 ; $i <=5; $i++) {
                        if($i <=$dg['sosao']){
                            echo '<i class="fa-solid fa-star"></i>';
                        }else {
                            echo '<i class="fa-regular fa-star"></i>';
                        }
                    }
                    ?>
                   
                </div>
            <!--  -->
            <div class="review-content">
                <?= htmlspecialchars($dg['noidung']) ?> 
            </div>
            </div>
            <!--  -->
        </li>
    <?php endforeach; ?>
</ul>
<?php else: ?>
<div class="no-comment">
    <span>Hiện tại sản phẩm chưa có đánh giá nào.</span>
</div>
<?php endif;?>