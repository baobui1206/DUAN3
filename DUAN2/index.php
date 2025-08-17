<?php
	session_start();
	ob_start();
	include 'model/pdo.php';
	include 'model/danhmuc.php';
	include 'model/sanpham.php';
	include 'model/taikhoan.php';
	include 'model/cart.php';
	include 'model/voucher.php';
	include 'model/banner.php';
	include 'model/blog.php';
	$listbaiviet = loadall_blog();
	$dsdm = loadall_danhmuc();
	$iduser = (isset($_SESSION['user']['id'])) ? $_SESSION['user']['id'] : 0;
	$count_yt = loadall_yeuthich_count($iduser);
	$count_cart = 0;
	if(isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])){
		$count_cart = count($_SESSION['mycart']);
	} 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$spbanchay = load_5_sanpham_sold();
	$spdacbiet = load_5_sanpham_datbiet();
	$stt1 = 1;
	$stt2 =2;
	$stt3 = 3;
	$stt4 = 4;
	$stt5 = 5;
	$stt6 = 6;
	$stt7 = 7;
	$list_sanpham_danhmuc1 = load_4_sanpham_by_danhmuc($stt1);
	$list_sanpham_danhmuc2 = load_4_sanpham_by_danhmuc($stt2);
	$list_sanpham_danhmuc3 = load_4_sanpham_by_danhmuc($stt3);
	$list_sanpham_danhmuc4 = load_4_sanpham_by_danhmuc($stt4);
	$list_sanpham_danhmuc5 = load_4_sanpham_by_danhmuc($stt5);
	$list_sanpham_danhmuc6 = load_4_sanpham_by_danhmuc($stt6);
	$ds_stt = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($ds_stt as $i) {
		${"banner" . $i} = loadone_banner_stt($i);
	}
	// if(!isset($_GET['act']) || $_GET['act'] == ""){
	// 	include "view/header_home.php";
	// }
	// else{
	// 	// include "view/header.php";
	// }
	include 'global.php';

	if(isset($_GET['act']) && ($_GET['act']!="")){
		$act = $_GET['act'];
		switch ($act) {
			case 'gioithieu':
				$pageTitle = "Giới thiệu";
				include "view/header.php";
				include "view/gioithieu.php";
				break;

			case 'lienhe':
				$pageTitle = "Liên hệ";
				include "view/header.php";
				include "view/lienhe.php";
				break;

			// case 'sanphamct':
			// 	$pageTitle = "Chi tiết sản phẩm";
			// 	include "view/header.php";
			// 	if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
			// 		$id = $_GET['idsp'];
			// 		$onesp = loadone_sanpham($id);
			// 		$iddm_first = 0;
			// 		if($onesp){
			// 			$image = !empty($onesp['images']) ? explode(',', $onesp['images']) : [];
			// 			$iddm = !empty($onesp['iddm']) ? explode(',', $onesp['iddm']) : [];
			// 			$iddm_first = !empty($iddm) ? $iddm[0] : 0;
			// 			extract($onesp);
			// 		} else {
			// 			$image = [];
			// 			$iddm = [];
			// 		}
			// 		$sp_cung_loai = load_sanpham_cungloai($id, $iddm_first);
			// 		$listdanhmuc = loadall_danhmuc();
			// 		$listvoucher = loadall_voucher();
					
			// 		include "view/sanphamct.php";
					
			// 	}else{
			// 		header('Location:index.php');
			// 	}	
			// 	break;
			case 'sanphamct'://case  mới
				$pageTitle = "Chi tiết sản phẩm";
				include "view/header.php";
				if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
					$id = $_GET['idsp'];
					$onesp = loadone_sanpham($id);
					$iddm_first = 0;
					if($onesp){
						$image = !empty($onesp['images']) ? explode(',', $onesp['images']) : [];
						$iddm = !empty($onesp['iddm']) ? explode(',', $onesp['iddm']) : [];
						$iddm_first = !empty($iddm) ? $iddm[0] : 0;
						extract($onesp);
						if(!isset($_SESSION['sanpham_daxem'])){
							$_SESSION['sanpham_daxem'] = [];//luu vào session
						}
						if(!in_array($id, $_SESSION['sanpham_daxem'])){
							$_SESSION['sanpham_daxem'][] = $id;
						}
					} else {
						$image = [];
						$iddm = [];
					}
					
					$sanpham_daxem = [];
					if(!empty($_SESSION['sanpham_daxem'])){
						$sanpham_daxem =  loadall_sanpham_list_id($_SESSION['sanpham_daxem']);
						if(count($_SESSION['sanpham_daxem'])>6){
							array_shift($_SESSION['sanpham_daxem']);// cai này nếu để  nó hiển thị 6 cái thôi
						}
					}
					$sp_cung_loai = load_sanpham_cungloai($id, $iddm_first);
					$listdanhmuc = loadall_danhmuc();
					$listvoucher = loadall_voucher();
					
					include "view/sanphamct.php";
					
				}else{
					header('Location:index.php');
				}	
				break;

			case 'sanpham':
				$pageTitle = "Sản phẩm";
				include "view/header.php";
				if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
					$kyw = $_POST['kyw'];
				}else{
					$kyw = "";
				}
				if(isset($_GET['iddm'])&&($_GET['iddm'])>0){
					$iddm = $_GET['iddm'];
				}else{
					$iddm = 0;
				}
				$listsanpham = loadall_listsanpham($kyw,$iddm);
				include "view/sanpham.php";
				break;

			// case 'sanphamall':
			// 	$pageTitle = "Sản phẩm";
			// 	include "view/header.php";
			// 	if(isset($_GET['iddm'])&&$_GET['iddm']>0){
			// 		$iddm = $_GET['iddm'];
			// 		$listsanpham = load_all_sanpham_by_danhmuc($iddm);
			// 		include "view/sanpham.php";
			// 	}else{
			// 		$listsanpham = loadall_listsanpham();
			// 		include "view/sanpham.php";
			// 	}
			// 	break;
			case 'sanphamall':
				$pageTitle = "Sản phẩm";
				include "view/header.php";
				if(isset($_GET['stt'])&&$_GET['stt']>0){
					$stt = $_GET['stt'];
					$listsanpham = load_all_sanpham_by_danhmuc($stt);
					include "view/sanpham.php";
				}else{
					$listsanpham = loadall_listsanpham();
					include "view/sanpham.php";
				}
				break;
			case 'sanphamsale':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham = load_all_sanpham_sale();
				include "view/sanpham.php";
				break;

			case 'sanphambanchay':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham = load_all_sanpham_sold();
				include "view/sanpham.php";
				break;

			case 'sanphamdacbiet':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham = load_all_sanpham_datbiet();
				include "view/sanpham.php";
				break;

			case 'sanphamgiagiam':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham =  load_all_sanpham_giagiam();
				include "view/sanpham.php";
				break;

			case 'sanphamgiatang':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham =  load_all_sanpham_giatang();
				include "view/sanpham.php";
				break;

			case 'sanphamtheoten':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham =  load_all_sanpham_theoten();
				include "view/sanpham.php";
				break;

			case 'sanphammoinhat':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham = loadall_listsanpham();
				include "view/sanpham.php";
				break;

			case 'sanphamcunhat':
					$pageTitle = "Sản phẩm";
				include "view/header.php";
				$listsanpham = loadall_sanphamcu();
				include "view/sanpham.php";
				break;

			case 'dangky':
				$pageTitle = "Đăng ký";
				include "view/header.php";
				if(isset($_POST['dangky'])&&($_POST['dangky'])){
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$email = $_POST['email'];
					insert_taikhoan($user,$pass,$email);
					$thongbao = "đăng ký thành công vui lòng đăng nhập để thực
					hiện chức năng đánh giá và đặt hàng";
				}
				include "view/taikhoan/dangky.php";
				break;

			case 'dangnhap':
				$pageTitle = "Đăng nhập";
				include "view/header.php";
				if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$checkuser = checkuser($user,$pass);
					if(is_array($checkuser)){
						$_SESSION['user']=$checkuser;
						header('Location:index.php');
						exit;
					}else{
						$thongbao ="tai khoan ko ton tai hoac sai mk";
					}
				}
				if(isset($_POST['guimail'])&&($_POST['guimail'])){
					$email = $_POST['email'];
					$user = $_POST['user'];
					$checkemail = checkemail_user($user,$email);
					if(is_array($checkemail)){
						$thongbao = "mật  khẩu của bạn là: ".$checkemail['pass'];

					}else{
						$thongbao = "email hoặc tài khoản này không đúng";
					}
				}
				include "view/taikhoan/dangnhap.php";
				break;

			case 'edit_taikhoan':
				$pageTitle = "Cập nhật tài khoản";
				include "view/header.php";
				if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
					$tel = $_POST['tel'];
					$address = $_POST['address'];
					$pass = $_POST['pass'];
					$id = $_POST['id'];
					update_taikhoan($id,$tel,$address,$pass);
					$_SESSION['user'] = checkuser($user,$pass);
					$thongbao ="cập nhật tài khoản thành công";
				}
				include "view/taikhoan/edit_taikhoan.php";
				break;

			case 'quenmk':
				$pageTitle = "Tài khoản";
				include "view/header.php";
				if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
					$user = $_POST['user'];
					$pass = $_POST['pass'];
					$checkuser = checkuser($user,$pass);
					if(is_array($checkuser)){
						$_SESSION['user']=$checkuser;
						header('Location:index.php');
						exit;
					}else{
						$thongbao ="tai khoan ko ton tai hoac sai mk";
					}
					
				}
				if(isset($_POST['guimail'])&&($_POST['guimail'])){
					$email = $_POST['email'];
					$user = $_POST['user'];
					$checkemail = checkemail_user($user,$email);
					if(is_array($checkemail)){
						$thongbao = "mật  khẩu của bạn là: ".$checkemail['pass'];

					}else{
						$thongbao = "email hoặc tài khỏa này không đúng";
					}
				}
				include "view/taikhoan/dangnhap.php";
				break;

			case 'thoat':
				session_unset();
				header('Location:index.php');
				exit;
				break;

			case 'addtocart':
				if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
					$id = $_POST['id'];
					$name = $_POST['name'];
					$img = $_POST['img'];
					$price = (int)$_POST['price'];
					$soluong = isset($_POST['soluong']) ? (int)$_POST['soluong'] : 1;
					
					$check= isset($_GET['add']) ? $_GET['add'] : '';

					if($check=="popup"){
						$soluong=isset($_POST['soluongPopup']) ? (int)$_POST['soluongPopup'] : 1;
					}

					if(!isset($_SESSION['mycart'])){
						$_SESSION['mycart'] = [];	
					}
					//biến kiêm tra sản phẩm có trong giỏ hàng không
					$found = false;
					foreach($_SESSION['mycart'] as &$cartItem){//& để tham chiếu đến phần tử thật thay vì value là bản  sao
						if($cartItem[0]==$id){//so sánh id sản phẩm
							$cartItem[4] += $soluong;
							$cartItem[5] = $cartItem[4] * $cartItem[3];
							$found = true;
							break;
						}
					}
					if(!$found){
						$ttien = $soluong * $price;
						$spadd = [$id,$name,$img,$price,$soluong,$ttien];
						array_push($_SESSION['mycart'], $spadd);
					}
					
				}
				$listvoucher = loadall_voucher();
				header('Location:index.php?act=viewcart');
				break;

			case 'giamgia':
				if(isset($_POST['addtovoucher'])&&($_POST['addtovoucher'])){
					$code = $_POST['code'];
					$checkcode = get_voucher_by_code($code);
					if(is_array($checkcode)){
						$_SESSION['voucher'] = $checkcode;
					}else{
						unset($_SESSION['voucher']);
					}
				}
				$listvoucher = loadall_voucher();
				header('Location:index.php?act=bill');
				break;

			case 'delcart':
				if(isset($_GET['idcart'])){
					array_splice($_SESSION['mycart'],$_GET['mycart'],1);
					//tham số 1 mảng  là vị trí xóa và 3 là phần tử xóa
				}else{
					$_SESSION['mycart']=[];
				}
				header('Location:index.php?act=viewcart');
				break;

			case 'bill':
				$pageTitle = "Thanh toán";
				include "view/header.php";
				include "view/cart/bill.php";
				break;

			case 'viewcart':
				$pageTitle = "Giỏ hàng";
				include "view/header.php";
				$mycart = $_SESSION['mycart'] ?? [];
				$listvoucher = loadall_voucher();
				include "view/cart/viewcart.php";
				break;
				
			case 'billcomfirm':		
				if(isset($_POST['addtovoucher'])&&($_POST['addtovoucher'])){
					$code = $_POST['code'];
					$checkcode = get_voucher_by_code($code);
					if(is_array($checkcode)){
						$_SESSION['voucher'] = $checkcode;
					}else{
						unset($_SESSION['voucher']);
					}
					include "view/cart/bill.php";
				}elseif(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
					if(isset($_SESSION['user'])) $iduser  = $_SESSION['user']['id'];
					else $iduser = 0;
					if(isset($_SESSION['voucher'])) $idvoucher = $_SESSION['voucher']['id'];
					else $idvoucher = 0;
					$user = $_POST['user'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$backupaddress = $_POST['backupaddress'];
					$tel = $_POST['tel'];
					$ghichu = $_POST['ghichu'];
					$pttt = $_POST['pttt'];
					$tamtinh = tamtinh();
					$voucher = giamgia();
					$ngaydathang = date('h:i:sa d/m/Y');
					$tongdonhang = tongdonhang();
					$idbill = insert_bill($iduser,$idvoucher,$user,$email,$address,$backupaddress,$tel,$ghichu,$pttt,$ngaydathang,$tamtinh,$voucher,$tongdonhang);
					foreach($_SESSION['mycart'] as $cart){
						$thanhtien = $cart[3] * $cart[4];
						insert_cart($iduser,$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$thanhtien,$idbill);

					}
					foreach ($_SESSION['mycart'] as $cart) {
						$idsp = $cart[0];
						$soluong = $cart[4];
						update_soluong($idsp,$soluong);
					}
					$_SESSION['mycart'] = [];
					unset($_SESSION['voucher']);
					$bill =  loadone_bill($idbill);
					$billct =  loadall_cart($idbill);
					$pageTitle = "Thanh toán";
					include "view/header.php";
					include "view/cart/billcomfirm.php";
					
					// header('Location:index.php');
					// header('Location:index.php?act=billcamon');
				} 
				break;
			
				case 'mybill':
					$pageTitle = "Hóa đơn của tôi";
					include "view/header.php";
					$listbill = loadall_bill("",$_SESSION['user']['id']);
					include "view/cart/mybill.php";
					break;
			case 'list_yeuthich':
				$pageTitle = "List yêu thích";
				include "view/header.php";
				$listyeuthich = loadall_yeuthich($_SESSION['user']['id']);
				include "view/taikhoan/listyeuthich.php";
				break;
			case 'xoayeuthich':
				$pageTitle = "List yêu thích";
				include "view/header.php";
				if(isset($_GET['idthich'])&&($_GET['idthich']>0)){
					delete_yeuthich($_GET['idthich']);
				}
				$listyeuthich = loadall_yeuthich($_SESSION['user']['id']);
				include "view/taikhoan/listyeuthich.php";
				break;
			case 'baivietct':
				$pageTitle = "bài viết chi tiết";
				include "view/header.php";
				if(isset($_GET['idbv'])&&($_GET['idbv']>0)){
					$id = $_GET['idbv'];
					$onebv = loadone_blog($id);
					extract($onebv);
					$listtaikhoan = loadall_taikhoan();
					$blog_cung_loai = load_blog_cungloai($id,$iddmblog);
					include "view/baivietct.php";
				}else{
					echo "
					<script>
						alert('Bài viết không tồn tại hoặc đã bị xóa!');
						window.location.href = 'index.php';
					</script>";
					
				}
				break;
			default:

			include "view/header_home.php";
				include 'view/home.php';
				break;
			}
	}else{
		include "view/header_home.php";
		include "view/home.php";
	}
	include "view/footer.php";
	ob_end_flush();
?>
