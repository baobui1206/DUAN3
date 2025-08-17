<?php
function load_5_sanpham_sale(){
	$sql = "SELECT sp.*,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp 
	ORDER BY sp.sale DESC LIMIT 5";
	return pdo_query($sql);

	
}
function load_all_sanpham_sale(){
	$sql = "SELECT sp.*,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp 
	WHERE sp.sale > 0
	ORDER BY sp.sale DESC ";
	return pdo_query($sql);

	
}
function load_5_sanpham_sold(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	ORDER BY sp.sold DESC LIMIT 5 ";
	return pdo_query($sql);
}
function load_all_sanpham_sold(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	ORDER BY sp.sold DESC  ";
	return pdo_query($sql);
}
function load_5_sanpham_datbiet(){
	$sql = "SELECT sp.*, (SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	WHERE sp.dacbiet = 1
	ORDER BY sp.id DESC LIMIT 5";
	return pdo_query($sql);
}
function load_all_sanpham_datbiet(){
	$sql = "SELECT sp.*, (SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	WHERE sp.dacbiet = 1
	ORDER BY sp.id DESC ";
	return pdo_query($sql);
}
// function load_5_sanpham_sale() {
//     $sql = "SELECT sp.*, (SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
//             FROM sanpham sp
//             WHERE sp.sale > 0  -- Điều kiện sản phẩm có giảm giá
//             ORDER BY sp.sale DESC  -- Sắp xếp theo sale giảm dần
//             LIMIT 5";  -- Lấy 5 sản phẩm
//     return pdo_query($sql);
// }
// function load_5_sanpham_sold(){
// 	$sql = "SELECT * FROM sanpham ORDER BY sold DESC LIMIT 5";
// 	$listsanpham = pdo_query($sql);
// 	foreach ($listsanpham as &$sp) {//& truy cập vào mảng góc thì vì tạo bảng sao
// 		$idsp = $sp['id'];
// 		$sql_img = "SELECT img FROM img WHERE idsp = ?";//lấy cột img từ bảng img và lọc theo idsp
// 		$images = pdo_query($sql_img, $idsp); // Lấy danh sách ảnh

// 		$sp['img'] = !empty($images) ? $images[0]['img'] : 'no-image.jpg'; // Lấy ảnh đầu tiên hoặc ảnh mặc định
// 	}

// 	return $listsanpham;
// }

function insert_sanpham($tensp,$giasp,$sale,$view,$sold,$slug,$stock,$dvt,$desc){
	$sql = "INSERT INTO sanpham(name,priceold,sale,view,sold,slug,stock,dvt,mota) VALUES ('$tensp','$giasp','$sale','$view','$sold','$slug','$stock','$dvt','$desc')";
	$conn = pdo_get_connection(); // Kết nối PDO
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	return $conn->lastInsertId(); // Trả về ID của sản phẩm vừa thêm
}
function insert_sanphamdanhmuc($idsp,$iddm){
	$sql = "INSERT INTO sanphamdanhmuc(idsp,iddm) VALUES ('$idsp','$iddm')";
	pdo_execute($sql);
}
function insert_img($idsp,$img){
	$sql = "INSERT INTO img(idsp,img) VALUES ('$idsp','$img')";
	pdo_execute($sql);
}
function loadall_listsanpham($kyw = "", $iddm=0){
	$sql = "SELECT sanpham.*,(SELECT img.img FROM img WHERE img.idsp = sanpham.id LIMIT 1) AS img FROM sanpham
	LEFT JOIN sanphamdanhmuc ON sanpham.id = sanphamdanhmuc.idsp WHERE 1";
	if($kyw != ""){
		$sql .= " AND sanpham.name LIKE '%" .$kyw. "%'";
	}
	if($iddm > 0){
		$sql .= " AND sanphamdanhmuc.iddm = '".$iddm."'";
	}
	$sql .= " GROUP BY sanpham.id ORDER BY sanpham.id DESC  ";
	return pdo_query($sql);
}

function delete_sanpham($id){
	$sql1 = "DELETE FROM img WHERE idsp = ".$id;
	pdo_execute($sql1);
	$sql2 = "DELETE FROM sanphamdanhmuc WHERE idsp = ".$id;
	pdo_execute($sql2); 
	$sql3 = "DELETE FROM cart WHERE idsp=".$id;
	pdo_execute($sql3);
	// Xóa sản phẩm
	$sql4 = "DELETE FROM yeuthich WHERE idsp=".$id;
	pdo_execute($sql4);
	$sql5 = "DELETE FROM danhgia WHERE idsp=".$id;
	pdo_execute($sql5);
	$sql6 = "DELETE FROM sanpham WHERE id = ".$id;
	pdo_execute($sql6);
	
}
function loadone_sanpham($id){
    $sql = "SELECT sanpham.*, 
                   GROUP_CONCAT(DISTINCT img.img) AS images,
                   GROUP_CONCAT(DISTINCT sanphamdanhmuc.iddm) AS iddm
            FROM sanpham
            LEFT JOIN img ON sanpham.id = img.idsp
            LEFT JOIN sanphamdanhmuc ON sanpham.id = sanphamdanhmuc.idsp
            WHERE sanpham.id = ".$id."
            GROUP BY sanpham.id";
    $sp=pdo_query_one($sql);
	return $sp;
}
function update_sanpham($id,$tensp,$giasp,$sale,$view,$sold,$slug,$stock,$dvt,$desc,$dacbiet){
	$sql = "UPDATE sanpham SET name = '".$tensp."', priceold = '".$giasp."', sale = '".$sale."', view = '".$view."', sold = '".$sold."',slug = '".$slug."',stock = '".$stock."',dvt = '".$dvt."',mota = '".$desc."',dacbiet = '".$dacbiet."'  WHERE id =".$id;
	pdo_execute($sql);
}
function update_sanphamdanhmuc($idsp,$iddm){
	$sql = "UPDATE sanphamdanhmuc SET iddm = '".$iddm."' WHERE idsp=".$idsp;
	pdo_execute($sql);
}
function update_img($id, $all_images){
	if(!empty($all_images)){
		$sql = "UPDATE img SET img = '".$all_images."' WHERE idsp=".$id;
		pdo_execute($sql);
	}
}
function delete_sanphamdanhmuc($idsp) {
    $sql = "DELETE FROM sanphamdanhmuc WHERE idsp = ".$idsp;
    pdo_execute($sql);
}
function delete_img($id) {
    $sql = "DELETE FROM img WHERE idsp = ".$id;
    pdo_execute($sql);
}
// function load_4_sanpham_by_danhmuc($iddm){
// 	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
// 	FROM sanpham sp
// 	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
// 	JOIN danhmuc dm ON spdm.iddm = dm.id
// 	WHERE spdm.iddm=".$iddm."
// 	ORDER by sp.id DESC LIMIT 4";
// 	return pdo_query($sql);
// }
function load_4_sanpham_by_danhmuc($stt){
	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
	JOIN danhmuc dm ON spdm.iddm = dm.id
	WHERE dm.stt=".$stt."
	ORDER by sp.id DESC LIMIT 4";
	return pdo_query($sql);
}
function load_2_sanpham_by_danhmuc($iddm){
	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
	JOIN danhmuc dm ON spdm.iddm = dm.id
	WHERE spdm.iddm=".$iddm."
	ORDER by sp.id DESC LIMIT 2";
	return pdo_query($sql);
}
// function load_all_sanpham_by_danhmuc($iddm){
// 	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
// 	FROM sanpham sp
// 	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
// 	JOIN danhmuc dm ON spdm.iddm = dm.id
// 	WHERE spdm.iddm=".$iddm."
// 	ORDER by sp.id DESC ";
// 	return pdo_query($sql);
// }
// function load_all_sanpham_by_danhmuc($stt){
// 	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
// 	FROM sanpham sp
// 	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
// 	JOIN danhmuc dm ON spdm.iddm = dm.id
// 	WHERE spdm.iddm=".$stt."
// 	ORDER by sp.id DESC ";
// 	return pdo_query($sql);
// }
function load_all_sanpham_by_danhmuc($stt){
	$sql = "SELECT sp.*,dm.name AS tendm,dm.img AS imgdm,(SELECT img.img from img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
	JOIN danhmuc dm ON spdm.iddm = dm.id
	WHERE dm.stt =".$stt."
	ORDER by sp.id DESC ";
	return pdo_query($sql);
}
function load_sanpham_cungloai($id,$iddm){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp 
	JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
	WHERE spdm.iddm = $iddm AND sp.id <> $id
	ORDER BY sp.id DESC LIMIT 4";
	return pdo_query($sql);	
}
// function load_sanpham_cungloai($id, $iddm) {
//     $sql = "SELECT sp.*, 
//                    (SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
//             FROM sanpham sp
//             JOIN sanphamdanhmuc spdm ON sp.id = spdm.idsp
//             WHERE spdm.iddm = $iddm AND sp.id <> $id
//             ORDER BY sp.id DESC";
//     return pdo_query($sql);
// }
//coales để  đảm bảo giá trị nhập luôn có gia trị chuõi
function loadall_img_by_idsp($idsp) {
    $sql = "SELECT * FROM img WHERE idsp = ?";
    return pdo_query($sql, $idsp);
}
// function update_soluong($idsp, $soluong) {
//     // Kiểm tra số lượng tồn kho
//     $sql = "SELECT stock FROM sanpham WHERE id = ?";
//     $stock = pdo_query_value($sql, $idsp);

//     // Kiểm tra xem kho có đủ để trừ hay không
//     if ($stock >= $soluong) {
//         // Nếu có đủ hàng trong kho, thực hiện cập nhật
//         $sql = "UPDATE sanpham SET stock = stock - ? WHERE id = ? AND stock >= ?";
//         pdo_execute($sql, $soluong, $idsp, $soluong);
//     } else {
//         // Nếu kho không đủ, có thể thông báo lỗi hoặc xử lý khác
//         echo "Không đủ hàng cho sản phẩm ID: $idsp. Vui lòng chọn số lượng ít hơn!";
//     }
// }
function update_soluong($idsp, $soluong) {
    $sql = "SELECT stock FROM sanpham WHERE id =".$idsp;
    $stock = pdo_query_value($sql);  // Truy vấn số lượng tồn kho

    if ($stock >= $soluong) {
        $sql = "UPDATE sanpham SET stock = stock - $soluong,sold = sold + $soluong WHERE id =".$idsp;
        pdo_execute($sql);  // Cập nhật kho
    } else {
        echo "Không đủ hàng trong kho!";
    }
}
function load_all_sanpham_giagiam(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp";
	$listsanpham = pdo_query($sql);
	foreach($listsanpham as &$sp){
		$sp['pricenew'] = $sp['priceold'] -($sp['priceold'] * $sp['sale']/100);
	}
	usort($listsanpham,function($a,$b){
		return $b['pricenew'] <=> $a['pricenew'];
	});
	return $listsanpham;
}
function load_all_sanpham_giatang(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp";
	$listsanpham = pdo_query($sql);
	foreach($listsanpham as &$sp){
		$sp['pricenew'] = $sp['priceold'] -($sp['priceold'] * $sp['sale']/100);
	}
	usort($listsanpham,function($a,$b){
		return $a['pricenew'] <=> $b['pricenew'];
	});
	return $listsanpham;
}
function load_all_sanpham_theoten(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp";
	$listsanpham = pdo_query($sql);
	//sap xếp sản phẩm theo tên từ a tới z
	$colattor = collator_create('vi_VN');

	usort($listsanpham,function($a,$b) use ($colattor){
		return  $colattor->compare($a['name'], $b['name']);
	});
	return $listsanpham;
// 	< 0 → $str1 sẽ được đặt trước $str2 (sắp xếp từ A đến Z).
// 0 → Không thay đổi vị trí giữa $str1 và $str2 (chúng là bằng nhau).
// > 0 → $str1 sẽ được đặt sau $str2 (nếu sắp xếp từ A đến Z).
}
function loadall_sanphamcu(){
	$sql = "SELECT sp.*,(SELECT img.img FROM img WHERE img.idsp = sp.id LIMIT 1) AS img
	FROM sanpham sp
	ORDER BY sp.id ASC  ";
	return pdo_query($sql);
}
function loadall_sanpham_list_id($list_id){
	if (empty($list_id)) return [];
	$list_id = array_reverse($list_id); // để đảo ngược mảng 
	//chuyenr id thành chuỗi 1 2 3
	$ids = implode(',',array_map('intval', $list_id));

	$sql = "SELECT sanpham.*,(SELECT img.img FROM img WHERE img.idsp = sanpham.id LIMIT 1) AS img FROM sanpham
	LEFT JOIN sanphamdanhmuc ON sanpham.id = sanphamdanhmuc.idsp 
	WHERE sanpham.id IN ($ids)
	GROUP BY sanpham.id ORDER BY FIELD(sanpham.id, $ids)";//gorder field giúp sản phẩm hiển thị theo duungs thứ tự xem sản phẩm cuối mảng
	//sẽ hiên thị sau cung
	//in để  kiểm tra gtri có nằm trongn danh sách hay không
	return pdo_query($sql);
}
?>