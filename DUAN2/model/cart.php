<?php
function viewcart($giohang){
	global $img_patch;
	$tong = 0; 
	$i = 0;
	// if($del==1){
			
	//     $xoasp_td = '<td></td>';
	// }else{
	echo'

	<div class="cart-left"> 
	<div class="cart-product">';  
	//     $xoasp_td = '';
	// }
	foreach ($giohang as $cart){
			$hinh = $img_patch.$cart[2];
			$ttien = $cart[3] * $cart[4];
			$tong += $ttien;
			
			echo'<div class="item-cart">
			<div class="item-cart__left">
				<a href="index.php?act=delcart&idcart='.$i.'" style="color:red; cursor:pointer;"  > 
						<i class="fa-solid fa-xmark"></i>
					</a>
			</div>
				<div class="item-cart__right">
		<div class="name">
			<!-- img -->
			<div class="name__img">
				<a href="#!">
					<img
						src="'.$hinh.'"
						alt=""
				/></a>
			</div>
			<!--  -->
		</div>
		<div class="block-info">
			<div class="block-info__name">
				<h2>
					<a href="#!">'.$cart[1].'</a>
				</h2>
			</div>
			<div class="block-info__price">
				<span>' . number_format($ttien, 0, ',', '.') . '₫</span>
			</div>
			<div>
				<!-- quantity -->
				<div class="block-info__quantity">
				<button class="btn-quantity giam" data-id="'.$i.'">-</button>
					<input
					class="inp-quantity soluong"
					type="text"
					value="'.$cart[4].'"
					id="inpQuantity-cart"
					/>
			<button class="btn-quantity tang" data-id="'.$i.'">+</button>
				</div>
			</div>
		</div>
	</div>
	</div>';
		$i+=1;
	}
	echo'
		<div class="btn-act">
				<a href="index.php"><input class="btn-act__btn" type="button" value="Tiếp tục mua hàng"></a>
				<a href="index.php?act=delcart"> <input class="btn-act__btn" type="button" value="Xóa giỏ hàng"></a>
		</div>
	</div>
	</div>

	<div class="cart-right">
								<form class="info" action="index.php?act=giamgia" method="post">
									<span class="info__title">Hẹn giờ nhận hàng</span>
									 <div class="info-discountCode">
										<input type="text" id="vouchercode" class="inp-discountCode" name="code" placeholder="Nhập mã giảm giá" />
										<input id="applyVoucher" class="btn-discountCode" name="addtovoucher" type="submit" value="Áp dụng">           
									 </div>
									<!-- tạm tính  -->
									<div class="block-totalShip">
										<!-- phí vc -->
										<div class="voucher">
											<span class="total-line__name">Giá chưa giảm</span>
												<span class="total-line__price" id="tamtinh">' . number_format($tong, 0, ',', '.') . '₫</span>
										</div>
									</div>
									<!--  -->
									<div class="info-total">
										<div class="info-total__title">
											<span>Tạm tính</span>
										</div>
										<div class="info-totalPrice">
										 <span class="info-totalPrice__price" id="tongdonhang"> ' . number_format($tong, 0, ',', '.') . '₫</span>
										</div>
									</div>
									<!--  -->
										 <a href="index.php?act=bill">
											 <input type="submit" class="info-submit" name="addtovoucher" value="Thanh toán" >
										 </a>
									<!-- img -->
									<div class="info-paymentMethod">
										<img
											src="view/asset/images/footer_trustbadge.webp"
											alt="Phương thứ thanh toán"
										/>
									</div>
								</form>
							</div>
	</div>
';  
}

function giamgia(){
	$giagiam = 0;
	if(isset($_SESSION['voucher'])){
		$giagiam = $_SESSION['voucher']['giamgia'];
		
	}
	return $giagiam;
}
function tamtinh(){
	$tong = 0;
	$phiship = 50000;
	foreach($_SESSION['mycart'] as $cart){
		$ttien = $cart[3] * $cart[4];
		$tong += $ttien;
	}
	$tongcong = $tong + $phiship;
	return $tongcong;
}
function tongdonhang(){
	$tong = 0;
	foreach($_SESSION['mycart'] as $cart){
		$ttien = $cart[3] * $cart[4];
		$tong += $ttien;
	}
	$giagiam = 0;
	$phiGiaoHang = 50000;
	if(isset($_SESSION['voucher'])){
		$giagiam = $_SESSION['voucher']['giamgia'];
			if($giagiam > $tong){
				$giagiam = $tong;
				$phiGiaoHang = 0;
			} 
	}
	if($tong - $giagiam < $phiGiaoHang){
		$phiGiaoHang = $tong - $giagiam;
	}
	$tongTien = $tong - $giagiam + $phiGiaoHang;
	return max(0,$tongTien);
}
function get_ttdathang($n){
	switch($n) {
		case '1':
			$tt = "Thanh toán khi nhận hàng";
			break;
		case '2':
			$tt = "Chuyển khoản ngân hàng";
			break;
		case '3':
			$tt = "Thanh toán qua cổng trung gian";
		default:
			$tt = "Thanh toán khi nhận hàng";
			break;
	}
	return $tt;
}
function insert_bill($iduser,$idvoucher,$user,$email,$address,$backupaddress,$tel,$ghichu,$pttt,$ngaydathang,$tamtinh,$voucher,$tongdonhang){
	$sql = "INSERT INTO bill(iduser,idvoucher,bill_name,bill_email,bill_address,bill_backupaddress,bill_tel,bill_ghichu,bill_pttt,ngaydathang,tamtinh,giamgia,total) VALUES('$iduser','$idvoucher','$user','$email','$address','$backupaddress','$tel','$ghichu','$pttt','$ngaydathang','$tamtinh','$voucher','$tongdonhang') ";
	return pdo_execute_return_lastInsertId($sql);
	// sao khi  no insert xong no cha ve id moi  vua insert de minh co id order de into vo bảng cart
}
function insert_cart($iduser,$idsp,$img,$name,$price,$soluong,$thanhtien,$idbill){
	$sql = "INSERT INTO cart(iduser,idsp,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idsp','$img','$name','$price','$soluong','$thanhtien','$idbill')";
	return pdo_execute($sql);
}
function bill_chi_tiet($billct){
	global $img_patch;
	$tong = 0;
	
	
	echo '<thead class="row-title">
							<tr>
								<th class="tb-col1"></th>
								<th class="tb-col2">Id</th>
								<th class="tb-col2">Tài khoản</th>
								<th class="tb-col3">Email</th>
								<th class="tb-col2">Điện thoại </th>
								<th class="tb-col2">Chức năng</th>
							</tr>
						</thead>
						<tbody>';
	foreach ($billct as $cart) {
		$hinh= $img_patch.$cart['img'];
		
		$tong += $cart['thanhtien']; 
		
		echo '
				<tr class="row-content">
								<td class="tb-col1"><input type="checkbox" class="checkbox-item" name="" id=""></td>
								<td class="tb-col2 col-stt">'.$hinh.'</td>
								<td class="tb-col2 col-stt">'.$cart['name'].'</td>
								<td class="tb-col2 col-stt">'.$cart['price'].'</td>
								<td class="tb-col3 col-stt">'.$cart['soluong'].'</td>
								<td class="tb-col2 col-nameCategory">'.$cart['thanhtien'].'</td>
								
						
				<tr>	
				<tbody';
		
	}
	
}

						
function loadone_bill($id){
	$sql = "SELECT * FROM bill WHERE id=".$id;
	$bill = pdo_query_one($sql);
	return $bill;
}
function loadall_cart($idbill){
	$sql = "SELECT * FROM cart WHERE idbill=".$idbill;
	$cart = pdo_query($sql);
	return $cart;
}
function loadall_bill($kyw="",$iduser=0){
	$sql = "SELECT bill.*,cart.name,cart.img,cart.thanhtien,cart.soluong
	FROM bill 
	LEFT JOIN cart ON bill.id = cart.idbill
	WHERE 1";
	if($iduser>0) $sql .= " AND bill.iduser=".$iduser;
	if($kyw!="") $sql .= " AND id like '%".$kyw."%'";
	$sql .= " ORDER BY id DESC";
	$listbill = pdo_query($sql);
	return $listbill;
}
function loadall_cart_count($idbill){//dung để đém số lượng trong giỏ hàng
	$sql = "SELECT * FROM cart WHERE idbill=".$idbill;
	$bill = pdo_query($sql);
	return sizeof($bill);//size of nẽ sẽ đếm số phần tử  có trong mảng
}
function loadall_yeuthich_count($iduser){//dung để đém số lượng trong giỏ hàng
	$sql = "SELECT * FROM yeuthich WHERE iduser = ".$iduser;
	$user = pdo_query($sql);
	return sizeof($user);//size of nẽ sẽ đếm số phần tử  có trong mảng
}
// function loadall_yeuthich_count($iduser) {
// 	if ($iduser !== null) {
// 		$sql = "SELECT * FROM yeuthich WHERE iduser = " . $iduser;
// 		$user = pdo_query($sql);
// 		return sizeof($user);
// 	} else {
// 		return 0;
// 	}
// }
function get_ttdh($n){
	switch ($n) {
		case '0':
			$tt = "Chờ xử lý";
			break;
		case '1':
			$tt = "Đang xử lý";
			break;
		case '2':
			$tt = "Đang giao hàng";
			break;
		case '3':
			$tt = "Đã giao";
			break;
		case '4':
			$tt = "Hoàn tất";
			break;
		case '5':
			$tt = "Đơn hàng đã hủy";
			break;
		default:
			$tt = "Chờ xử lý";
			break;
	}
	return $tt;
}
function delete_bill($id){
	$sql2 = "DELETE FROM cart WHERE idbill= ".$id;
	pdo_execute($sql2);
	$sql1 = "DELETE FROM bill WHERE id=".$id;
	pdo_execute($sql1);
}
function update_bill($id,$billstatus){
	$sql = "UPDATE bill set bill_status='".$billstatus."' WHERE id=".$id;
	pdo_execute($sql);
}
function thongke_doanhthu_theo_ngay() {
    $sql = "SELECT 
                DATE(b.realdate) AS ngay,
                SUM(b.total) AS doanhthu,
                COUNT(DISTINCT b.id) AS tongdon,
                (SELECT SUM(soluong) FROM cart c WHERE c.idbill = b.id) AS tongsp
            FROM bill b
            WHERE b.bill_status = 0
            GROUP BY DATE(b.realdate)
            ORDER BY ngay ASC";
    return pdo_query($sql);
}



function thongke_doanhthu_theo_sanpham(){
	$sql = "SELECT c.idsp, sp.name AS tensp ,c.thanhtien AS doanhthusp, COUNT(DISTINCT b.id) AS tongdonsp,
	SUM(c.soluong) AS tongsoluongsp
		FROM cart c 
		JOIN bill b ON c.idbill = b.id
		JOIN sanpham sp ON c.idsp = sp.id
		WHERE b.bill_status = 0
		GROUP BY c.idsp, sp.name
		ORDER BY doanhthusp DESC";
	return pdo_query($sql);
}
function thongke_tinhtrang_donhang(){
	$sql = "SELECT bill_status,COUNT(*) AS soluong 
	FROM bill GROUP BY bill_status";
	return pdo_query($sql);
}
function thongke_danhgia_trungbinh(){
	$sql = "SELECT sp.id,sp.name,ROUND(AVG(dg.sosao),1) AS danhgia_tb
	,COUNT( dg.sosao) AS sodanhgia
	FROM sanpham sp
	JOIN danhgia dg ON sp.id = dg.idsp
	GROUP BY sp.id,sp.name
	ORDER BY danhgia_tb DESC";
	return pdo_query($sql); 
}

?>