
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
						<li><a href="#" class="changeurl">Thanh toán</a></li>
					</div>
				</ul>
			</div>
		</div>

	<!-- modal  -->
<div class="modal"></div>
 <div class="modal-menuMobile"></div>
 
		<!-- main -->
		<main class="main mrSection">
			<form class="container" action="index.php?act=billcomfirm" method="post">
				<div class="pay">
					<div class="pay__left">
						<div class="pay-info">
							<div class="pay-one">
								<!-- title -->
								<div class="pay-title">
									<h2>Thông tin nhận hàng</h2>
									<div class="pay-title__loggin">
										<a href="#!">
											<i class="fa-solid fa-user"></i>
											<span>Đăng nhập</span>
										</a>
									</div>
								</div>
								<!--  -->
								<?php
										if(isset($_SESSION['user'])){
												$name = $_SESSION['user']['user'];
												$address = $_SESSION['user']['address'];
												$email = $_SESSION['user']['email'];
												$tel = $_SESSION['user']['tel'];
										}else{
												$name = "";
												$address = "";
												$email = "";
												$tel = "";
										}
								?>
								<div class="list-inp">
									<div class="list-inp__inp">
										<input type="email" name="email" placeholder="Email" value="<?=$email?>" />
									</div>
									<!--  -->
									<div class="list-inp__inp">
										<input type="text" name="user" placeholder=" tên" value="<?=$name?>" />
									</div>
									<!--  -->
									<div class="list-inp__inp">
										<input
											type="tel"
											name="tel"
											placeholder="Số điện thoại "
											value="<?=$tel?>"
										/>
									</div>
									<!--  -->
									<div class="list-inp__inp">
										<input type="text" name="address" placeholder="Địa chỉ " value="<?=$address?>"/>
									</div>
									<div class="list-inp__inp">
										<input type="text" name="backupaddress" placeholder="Địa chỉ thứ 2 " />
									</div>
									<!-- ghi chú đơn hàng -->
									<div class="list-inp__desc">
										<textarea
											name="ghichu"
											id=""
											placeholder="Ghi chú (tùy chọn)"
										></textarea>
									</div>
								</div>
								<!--  -->
							</div>
							<!-- 2 -->
							<div class="pay-two">
								<!--  -->
								<div class="pay-ship">
									<div class="pay-title">
										<h2>Vận chuyển</h2>
									</div>
									<div class="pay-ship__content">
										<span>Vui lòng nhập thông tin giao hàng</span>
									</div>
								</div>
								<!--  -->
								<div class="pay-pay">
									<div class="pay-title">
										<h2>Thanh toán</h2>
									</div>
									<div class="pay-method">
										<div class="pay-method__left">
											<input
												type="radio"
												name="pttt"
												id="radio-payMethod1"
												value="1"
												checked
											/>
											<label for="radio-payMethod1"
												>Thanh toán khi nhận hàng</label
											>
										</div>
										<div>
											<i class="fa-solid fa-money-bill-1-wave"></i>
										</div>
									</div>
									<div class="pay-method">
										<div class="pay-method__left">
											<input
												type="radio"
												name="pttt"
												id="radio-payMethod2"
												value="2"
											/>
											<label for="radio-payMethod2">Chuyển khoản ngân hàng</label>
										</div>
										<div>
											<i class="fa-solid fa-money-bill-1-wave"></i>
										</div>
									</div>
									<div class="pay-method">
										<div class="pay-method__left">
											<input
												type="radio"
												name="pttt"
												id="radio-payMethod3"
												value="3"
												
											/>
											<label for="radio-payMethod3"
												>Thanh toán qua cổng trung gian</label
											>
										</div>
										<div>
											<i class="fa-solid fa-money-bill-1-wave"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- btn  -->
						<div class="pay-orderProcess open-mobiles">
                       <a href="index.php?act=addtocart"
                         ><i class="fa-solid fa-chevron-left"></i>Quay lại giỏ hàng</a
                       >
                       <input class="pay-orderProcess__btn" type="submit" name="dongydathang" value="Đặt hàng">
                     </div>
					 <!--  -->
					</div>

				

					<!-- right nè  -->
					<div class="pay__right">
						<div class="bg">
							<div class="pay-title">
								<h2>Đơn hàng (<span id="totalOrders">2</span>) sản phẩm</h2>
							</div>
							<!-- content -->
							<div class="pay-summary">
								<ul class="pay-product">
									<!-- block sản phẩm -->
									 <?php
									 $tong = 0;
									
									 foreach($_SESSION['mycart'] as $index => $item):
										$ttien = $item[3] * $item[4];
									 	$tong += $ttien;
										?>
										<?php
											
											?>
										<li class="pay-product__items">
											<!--hình ảnh và nội dung  -->
											<div class="product__left">
												<div class="product-img">
													<span class="product-img__number"><?=$item[4]?></span>
													<div class="product-img__thumb">
														<img
															src="<?= $img_patch. $item[2]?>"
															alt=""
														/>
													</div>
												</div>
												<div class="product-content">
													<h3 class="product-content__name">
														<?=$item[1]?>
													</h3>
													<span class="product-content__weight"><?=$item[4]?> Sản phẩm</span>
												</div>
											</div>
											<!-- giá -->
											<div class="product__right">
												<span class="product-price"><?= number_format($ttien, 0, ',', '.') ?>₫</span>
											</div>
											<!--  -->
										</li>
									<?php endforeach; ?>
									
									<!-- đóng blocjk -->
									<!-- block sản phẩm -->
									
									<!-- đóng blocjk -->
								</ul>
								<?php
								if(isset($_SESSION['voucher'])){
									$code = $_SESSION['voucher']['code'];
									$giamgia = $_SESSION['voucher']['giamgia'];
								}else{
									$code='';
									$giamgia = '0';
								}
								?>
								<!-- mã giảm giá -->
								<div  class="enter-discountCode"  >
									<input
										class="enter-discountCode__inp inp-discountCode"
										type="text"
										placeholder="Nhập mã giảm giá"
										name="code"
										value="<?=$code?>"
										<?= isset($_SESSION['voucher']) ? 'readonly' : '' ?>
									/>
									<input type="submit" name="addtovoucher" class="enter-discountCode__btn btn-discountCode" value="Áp dụng">
								</div>
								<!--  -->
								<div class="pay-blockTotal">
									<div class="block-totalShip">
										<div class="total">
											<span class="total-line__name">Tạm tính</span>
											<span class="total-line__price"><?= number_format($tong, 0, ',', '.') ?>₫</span>
										</div>
										<!-- phí vc -->
										<div class="ship">
											<span class="total-line__name">Phí vận chuyển</span>
											<span class="total-line__price">50.000₫</span>
										</div>
										<div class="ship">
											<span class="total-line__name">Giảm giá Voucher</span>
											<span class="total-line__price">-<?= number_format($giamgia, 0, ',', '.') ?>₫</span>
										</div>
									</div>
									<?php
									$phigiaohang = 50000;
									if ($giamgia > $tong) {
										$giamgia = $tong;
										$phigiaohang = 0;
									}
									
									$tongCongTien = $tong -$giamgia+$phigiaohang;
									?>
									<!--  -->
									<div class="pay-total">
										<span class="pay-total__name">Tổng cộng</span>
										<span id="totalPrice"><?= number_format($tongCongTien, 0, ',', '.') ?>₫</span>
									</div>
									<!-- button -->
									   
									
									<div class="pay-orderProcess hidden-mobile">
                                       <a href="index.php?act=addtocart"
                                         ><i class="fa-solid fa-chevron-left"></i>Quay lại giỏ
                                         hàng</a
                                       >
				                    	<input class="pay-orderProcess__btn" type="submit" name="dongydathang" value="Đặt hàng">
                                     </div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</main>
		<script src="view/asset/js/main.js"></script>

		<!-- chạy hàm cần chạy  -->
		<script>
      app.star = function () {
        this.slideMenuHeaderLeft();
        this.slideMenuHeaderRight();
        this.eventInpDiscountCode();
        this.openSubmenu();
        this.openMenuMobile();
        this.openCategory();
        this.renderTextInp();
        this.search();
      };
      app.star();
    </script>