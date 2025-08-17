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
					<h1 class="main-title">Quản lý Đánh giá</h1>
					<!-- <span class="admin-left__content">Vui lòng chọn ở danh mục </span> -->
					<form action="index.php?act=dsdg" method="post" style="margin: 10px; text-align: center;" >
                        <select name="idtk">
                            <option value="0" selected>tất cả</option>
                            <?php
                            foreach ($listtaikhoan as $taikhoan) {
                                extract($taikhoan);
                                echo '<option value="' . $id . '">"' . $user . '" </option>';
                            }

                            ?>

                        </select>
						<select name="idsp">
                            <option value="0" selected>tất cả</option>
                            <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                echo '<option value="' . $id . '">"' . $name . '" </option>';
                            }

                            ?>

                        </select>
                        <input type="submit" name="listok" value="Tìm kiếm">
                    </form>	
					<div class="row mb10" style="margin: 40px 0 12px 0; text-align: right;">
						<input  type="button" value="Chọn tất cả" onclick="chonTatCa(true)">
						<input type="button" value="Bỏ chọn tất cả" onclick="chonTatCa(false)">
						<input type="button" value="xóa các mục đã chọn">
					</div>
					<!-- table  -->
					<table class="portfolio-table">
						<thead class="row-title">
							<tr>
								<th></th>
								<th class="tb-col2">Id</th>
								<th class="tb-col2">Id user</th>
								<th class="tb-col2">Id sản phẩm</th>
								<th class="tb-col2">Nội dung  bình luận </th>
								<th class="tb-col2">Số sao </th>
								<th class="tb-col2">Ngày đánh giá </th>
								<th class="tb-col3">Chức năng</th>
							</tr>
						</thead>
						<!-- body  -->
						<tbody>
						<?php
						foreach ($listdanhgia as $danhgia) {
							extract($danhgia);
							
							$xoadg = "index.php?act=xoadg&id=" . $id;
							
							echo '<tr class="row-content">
								<td><input type="checkbox" class="checkbox-item" name="" id=""></td>
								<td class="tb-col2 col-stt">'.$id.'</td>
								<td class="tb-col2 col-stt">'.$iduser.'</td>
								<td class="tb-col2 col-stt">'.$idsp.'</td>
								<td class="tb-col2 col-nameCategory">'.$noidung.'</td>
								<td class="tb-col2 col-nameCategory">'.$sosao.'★</td>
								<td class="tb-col2 col-nameCategory">'.$ngaydanhgia.'</td>
								<td class="tb-col3 col-del">
									
									<div>
									<a href="'.$xoadg.'">Xóa</a>
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