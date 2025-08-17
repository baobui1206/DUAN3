<body>
	<!-- main -->
	<main class="main">
		<div class="container-fluid">
			<div class="admin">
				<?php
				include "../admin/boxleft.php";
				?>
				<!--  -->
				<div class="admin__right">
					<h1 class="main-title">Quản lý danh mục</h1>
					<!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->

					<div class="row mb10" style="margin: 40px 0 12px 0; text-align: right; ">
						<input  type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
						<input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
						<input type="button" value="xóa các mục đã chọn">
						<a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
					</div>
					<!-- table  -->
					<table class="portfolio-table">
						<thead class="row-title">
							<tr>
								<th></th>
								<th class="tb-col2">Stt</th>
								<th class="tb-col2">Id</th>
								<th class="tb-col2">Tên danh mục</th>
								<th class="tb-col2">Ảnh </th>
								<th class="tb-col3">Chức năng</th>
							</tr>
						</thead>
						<!-- body  -->
						<tbody>
							<?php
							foreach ($listdanhmuc as $danhmuc) {
								extract($danhmuc);
								$suadm = "index.php?act=suadm&id=" . $id;
								$xoadm = "index.php?act=xoadm&id=" . $id;
								$hinhpath = "../upload/" . $img;
								if (is_file($hinhpath)) {
									$hinh = "<img src='" . $hinhpath . "' height='80' width='80'>";
								} else {
									$hinh = "no photo";
								}
								echo '<tr class="row-content">
									<td><input type="checkbox" class="checkbox-item" name="" id=""></td>
									<td class="tb-col2 col-stt">' . $stt . '</td>
									<td class="tb-col2 col-stt">' . $id . '</td>
									<td class="tb-col2 col-nameCategory">' . $name . '</td>
									<td class="tb-col2 col-nameCategory">' . $hinh . '</td>
									<td class="tb-col3 col-del">
											<div>
											<a href="' . $suadm . '">Sửa</a>
											</div>
											<div>
											<a href="' . $xoadm . '">Xóa</a>
											</div>
									</td>';
							}
							?>
						</tbody>
						<!--  -->
					</table>
					
				</div>
			</div>
		</div>
	</main>

	<!-- script -->
	<script src="/asset/js/main.js"></script>
	<script>
		app.star = function() {
			// this.tabAdmin();
			this.openCategory();
			this.renderTextInp();
			this.search();
		};
		app.star();
	</script>
</body>

</html>