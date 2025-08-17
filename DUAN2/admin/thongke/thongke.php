<body>
		<!-- main -->
		<main class="main">
			<div class="container-fluid">
				<div class="admin">
					<?php
						include "./boxleft.php";
					?>
					<!--  -->
					<div class="admin__right">
						<h1 class="main-title">Thống kê doanh thu theo ngày </h1>
						<!-- block form  -->
						<!-- form -->
						<div class="statistical">
							<table class="statistical-table">
								<thead class="row-title">
									<tr>
										<th class="tb-col2">Stt</th>
										<th class="tb-col2">Ngày</th>
										<th class="tb-col2">Tổng đơn</th>
										<th class="tb-col2">Tổng sản phẩm</th>
										<th class="tb-col2">Doanh thu</th>
									</tr>
								</thead>
								<!-- body -->
								<tbody>
									<?php
									$i = 1 ;
									$tongcongsptheothang = 0;
									$tongdoanhthu = 0;
									foreach ($data as $row)
									:extract($row);
									$tongcongsptheothang += $tongsp;
									$tongdoanhthu += $doanhthu;
									 ?>
									<tr class="row-content">
										<td class="tb-col2 col-stt"><?=$i++?></td>
										<td class="tb-col2 col-price"><?= $ngay?></td>
										<td class="tb-col2 col-price"><?= $tongdon?></td>
										<td class="tb-col2 col-quantity"><?= $tongsp?></td>
										<td class="tb-col2 col-money"><?= number_format($doanhthu, 0, ',', '.') ?>₫</td>
									</tr>
									<?php endforeach; ?>
									<tfoot>
									<tr>
										<td colspan="3" class="col-contentSum">Tổng cộng</td>
										<td class="tb-col2 col-sumQuantity"><?=$tongcongsptheothang?></td>
										<td class="tb-col2 col-sum"><?= number_format($tongdoanhthu, 0, ',', '.') ?>₫</td>
									</tr>
								</tfoot>
									<!--  -->
								</tbody>
								<!--  -->
								
							</table>
						</div>
						<!--  -->
						<div class="statistics-table">
							<h2 class="statistics-table__title">
								Bảng thống kê doanh thu theo ngày
							</h2>
							<canvas id="doanhThuNgayChart" width="1000" height="350"></canvas>

							
						</div>
						<h1 class="main-title">Thống kê doanh thu theo sản phẩm(chưa tính mã giảm) </h1>
						<!-- block form  -->
						<!-- form -->
						<div class="statistical">
							<table class="statistical-table">
								<thead class="row-title">
									<tr>
										<th class="tb-col2">Stt</th>
										<th class="tb-col2">idsp</th>
										<th class="tb-col2">Tên sản phẩm</th>
										<th class="tb-col2">Tổng đơn</th>
										<th class="tb-col2">số lượng</th>
										<th class="tb-col2">Doanh thu</th>
									</tr>
								</thead>
								<!-- body -->
								<tbody>
									<?php
									$i = 1 ;
									$tongcongsp = 0;
									$tongdoanhthusp = 0;
									$tongcongsoluongsp = 0;
									foreach ($datasanpham as $row)
									:extract($row);
									$tongcongsp += $tongdonsp;
									$tongdoanhthusp += $doanhthusp;
									$tongcongsoluongsp += $tongsoluongsp;
									 ?>
									<tr class="row-content">
										<td class="tb-col2 col-stt"><?=$i++?></td>
										<td class="tb-col2 col-stt"><?=$idsp?></td>
										<td class="tb-col2 col-price"><?= $tensp?></td>
										<td class="tb-col2 col-price"><?= $tongdonsp?></td>
										<td class="tb-col2 col-quantity"><?= $tongsoluongsp?></td>
										<td class="tb-col2 col-money"><?= number_format($doanhthusp, 0, ',', '.') ?>₫</td>
									</tr>
									<?php endforeach; ?>
									<tfoot>
									<tr>
										<td colspan="3" class="col-contentSum">Tổng cộng</td>
										<td class="tb-col2 col-sumQuantity"><?=$tongcongsp?></td>
										<td class="tb-col2 col-sumQuantity"><?=$tongcongsoluongsp?></td>
										<td class="tb-col2 col-sum"><?= number_format($tongdoanhthusp, 0, ',', '.') ?>₫</td>
									</tr>
								</tfoot>
									<!--  -->
								</tbody>
								<!--  -->
								
							</table>
						</div>
						<!--  -->
						<div class="statistics-table">
							<h2 class="statistics-table__title">
								Bảng thống doanh thu theo sản phẩm(chưa tính mã giảm)
							</h2>
							<canvas id="doanhThuSanPhamChart" width="1000" height="350"></canvas>

							
						</div>
						<h1 class="main-title">Thống kê hóa đơn theo tình trạng đơn hàng </h1>
						<!-- block form  -->
						<!-- form -->
						<div class="statistical">
							<table class="statistical-table">
								<thead class="row-title">
									<tr>
										<th class="tb-col2">Stt</th>
										<th class="tb-col2">Tình trạng đơn hàng</th>
										<th class="tb-col2">tỷ lệ(%)</th>
										<th class="tb-col2">số lượng</th>
										
									</tr>
								</thead>
								<!-- body -->
								<tbody>
									<?php
									$i = 1 ;
									$tongsoluongtt = array_sum(array_column($datatrangthai, 'soluong'));
									foreach ($datatrangthai as $row)
									:extract($row);
									
									$tyle = round(($soluong/$tongsoluongtt)*100,2);//round làm tròn

									 ?>
									<tr class="row-content">
										<td class="tb-col2 col-stt"><?=$i++?></td>
										<td class="tb-col2 col-price"><?= get_ttdh($bill_status)?></td>
										<td class="tb-col2 col-price"><?= $tyle?>%</td>
										<td class="tb-col2 col-quantity"><?= $soluong?></td>
										
									</tr>
									<?php endforeach; ?>
									<tfoot>
									<tr>
										<td colspan="3" class="col-contentSum">Tổng </td>
										<td class="tb-col2 col-sum"><?=$tongsoluongtt?></td>
									</tr>
								</tfoot>
									<!--  -->
								</tbody>
								<!--  -->
								
							</table>
						</div>
						<!--  -->
						<div class="statistics-table">
							<h2 class="statistics-table__title">
							Thống kê hóa đơn theo tình trạng đơn hàng 
							</h2>
							<canvas id="pieChartTrangThai" 
							width="300" 
							height="300" 
							style="width: 100%; max-width: 1000px; max-height: 600px; margin:0 auto"></canvas>


							
						</div>
						<h1 class="main-title">Thống kê đánh giá trung bình theo sản phẩm  </h1>
						<!-- block form  -->
						<!-- form -->
						<div class="statistical">
							<table class="statistical-table">
								<thead class="row-title">
									<tr>
										<th class="tb-col2">Stt</th>
										<th class="tb-col2">Id sản phẩm</th>
										<th class="tb-col2">Tên sản phẩm</th>
										<th class="tb-col2">Số đánh giá</th>
										<th class="tb-col2">Đánh giá trung bình(★)</th>
										
									</tr>
								</thead>
								<!-- body -->
								<tbody>
									<?php
									$i=1;
									foreach ($datadanhgia as $row)
									:extract($row);
									?>
									<tr class="row-content">
										<td class="tb-col2 col-stt"><?=$i++?></td>
										<td class="tb-col2 col-price"><?= $id?></td>
										<td class="tb-col2 col-price"><?= $name?></td>
										<td class="tb-col2 col-price"><?= $sodanhgia?></td>
										<td class="tb-col2 col-quantity"><?= $danhgia_tb?>★</td>
										
									</tr>
									
									<?php endforeach; ?>
									
									<!--  -->
								</tbody>
								<!--  -->
								
							</table>
						</div>
						<!--  -->
						<div class="statistics-table">
							<h2 class="statistics-table__title">
							Thống kê đánh giá trung bình theo sản phẩm 
							</h2>
							<canvas id="donutChartDanhGia" 
							width="300" 
							height="300" 
							style="width: 100%; max-width: 1000px; max-height: 600px; margin:0 auto"></canvas>
						</div>
					</div>
					
				</div>
				
			</div>
		</main>
		<script>
			const ngays = <?= json_encode($ngays) ?>;
			const doanhthu = <?= json_encode($doanhthus) ?>;
			const tenSp = <?= json_encode($sanphams) ?>;
			const doanhThuSp = <?= json_encode($doanhthusanphams) ?>;
			const soLuongSp = <?= json_encode($soluongsanphams) ?>;
			const trangThaidh = <?= json_encode($trangthais)?>;
			const countTrangThaidh = <?= json_encode($counttrangthais)?>;
			const idSp = <?= json_encode($idsps)?>;
			const danhGiaTrungBinh = <?= json_encode($danhgia_trungbinh)?>;
			// console.log(idSp);
			// console.log(danhGiaTb);
			
		</script>
		<script src="/DUAN3/DUAN2/view/asset/js/thongke.js"></script>

		<!-- script -->
		<script src="../view/asset/js/main.js"></script>
		<script>
			app.star = function () {
				this.openValueName();
				// this.tabAdmin();
				this.openCategory();
				this.renderTextInp();
				this.search();
			};
			app.star();
		</script>
	</body>
</html>






