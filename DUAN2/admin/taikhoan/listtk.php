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
					<h1 class="main-title">Quản lý tài khoản</h1>
					<!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->

					<div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
						<input  type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
						<input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
						<input type="button" value="xóa các mục đã chọn">
					</div>
					<!-- table  -->
					<table class="portfolio-table">
						<thead class="row-title">
							<tr>
								<th class="tb-col1"></th>
								<th class="tb-col2">Id</th>
								<th class="tb-col2">Tài khoản</th>
								<th class="tb-col3">Email</th>
								<th class="tb-col2">Điện thoại </th>
								<th class="tb-col2">Chức năng</th>
							</tr>
						</thead>
						<!-- body  -->
						<tbody>
						<?php
						foreach ($listtaikhoan as $taikhoan) {
							extract($taikhoan);
							$suatk = "index.php?act=suatk&id=" . $id;
							$xoatk = "index.php?act=xoatk&id=" . $id;
							// $hinhpath = "../upload/".$img;
							// if(is_file($hinhpath)){
							//     $hinh = "<img src='".$hinhpath."' height='80'>";
							// }else{
							//     $hinh = "no photo";
							// }
							echo '<tr class="row-content">
								<td class="tb-col1"><input type="checkbox" class="checkbox-item" name="" id=""></td>
								<td class="tb-col2 col-stt">'.$id.'</td>
								<td class="tb-col2 col-stt">'.$user.'</td>
								<td class="tb-col3 col-stt">'.$email.'</td>
								<td class="tb-col2 col-nameCategory">'.$tel.'</td>
								
								<td class="tb-col2 col-del">
									<div>
									<a href="'.$suatk.'">Sửa</a>
									</div>
									<div style="margin-top:6px;">
									<a href="'.$xoatk.'">Xóa</a>
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