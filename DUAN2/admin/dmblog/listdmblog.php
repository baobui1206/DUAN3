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
					<h1 class="main-title">Quản lý danh mục bài viết</h1>
					<!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->

					<div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
						<input  type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
						<input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
						<input type="button" value="xóa các mục đã chọn">
						<a href="index.php?act=adddmblog"><input type="button" value="Nhập thêm"></a>
					</div>
					<!-- table  -->
					<table class="portfolio-table">
						<thead class="row-title">
							<tr>
								<th class="tb-col1"></th>
                                <th class="tb-col2">Số thứ tự </th>
								<th class="tb-col2">Id</th>
								<th class="tb-col4">Tên danh mục bài viết</th>
								<th class="tb-col2">Chức năng</th>
							</tr>
						</thead>
						<!-- body  -->
						<tbody>
						<?php
						foreach ($listdanhmucblog as $danhmucblog) {
							extract($danhmucblog);
							$suadmblog = "index.php?act=suadmblog&id=" . $id;
							$xoadmblog = "index.php?act=xoadmblog&id=" . $id;
							
							echo '<tr class="row-content">
								<td class="tb-col1"><input type="checkbox" class="checkbox-item" name="" id=""></td>
								<td class="tb-col2 col-stt">'.$stt.'</td>
								<td class="tb-col2 col-stt">'.$id.'</td>
								<td class="tb-col4 col-nameCategory">'.$name.'</td>
								
								<td class="tb-col2 col-del">
									<div>
									<a href="'.$suadmblog.'">Sửa</a>
									</div>
									<div style="margin-top:6px;">
									<a href="'.$xoadmblog.'">Xóa</a>
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