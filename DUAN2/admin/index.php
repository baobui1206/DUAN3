<!-- ../view/asset -->

<?php
session_start();
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/voucher.php";
    include "../model/cart.php";
    include "../model/danhgia.php";
    include "../model/banner.php";
    include "../model/blog.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    
                    $tendm = $_POST['tendm'];
                    
                    $stt = $_POST['stt'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                    // lay tên file là name kich thước file là size kiểu file là type
                    // do masp là inpit  khong nhap dc nên không can post cho nó
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_danhmuc($tendm,$stt,$hinh);
                    // neu khong co iddm thi no lỗi vì nó là khóa ngoài
                    $thongbao = "Thêm thành công";

                }
                
                // de no lay tat ca danh muc show vao select trong addsp
               
               include "danhmuc/adddm.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/updatedm.php";
                break;
            case 'updatedm':
                
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    $stt = $_POST['stt'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_danhmuc($id,$tendm,$stt,$hinh);

                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
            case 'addbanner':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){   
                    $stt = $_POST['stt'];
                    $tenbanner = $_POST['tenbanner'];
                    $link =  $_POST['link'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_banner($tenbanner,$stt,$link,$hinh);
                }
                
                // de no lay tat ca danh muc show vao select trong addsp
                
                include "banner/addbanner.php";
                break; 
            case 'listbanner':
                $listbanner = loadall_banner();
                include "banner/listbanner.php";
                break; 
            case 'suabanner':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $banner = loadone_banner($_GET['id']);
                }
                include "banner/updatebanner.php";
                break;
            case 'updatebanner':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $tenbanner = $_POST['tenbanner'];
                    $stt = $_POST['stt'];
                    $link = $_POST['link'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_banner($id,$tenbanner,$stt,$link,$hinh);

                }
                $listbanner = loadall_banner();
                include "banner/listbanner.php";
                break;
            case 'xoabanner':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_banner($_GET['id']);
                }
                $listbanner = loadall_banner();
                include "banner/listbanner.php";
                break;

            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $sale = $_POST['sale'];
                    $view = $_POST['view'];
                    $sold = $_POST['sold'];
                    $slug = $_POST['slug'];
                    $stock = $_POST['stock'];
                    $dvt = $_POST['dvt'];
                    $desc = $_POST['desc'];
                    $iddms = $_POST['iddm'];
                    $idsp = insert_sanpham($tensp,$giasp,$sale,$view,$sold,$slug,$stock,$dvt,$desc);
                    if($idsp){
                        foreach($iddms as $iddm){
                            insert_sanphamdanhmuc($idsp,$iddm);
                        }
                    }
                    if(!empty($_FILES['hinh']['name'][0])){
                        $target_dir = "../upload/";
                        foreach($_FILES['hinh']['name'] as $key => $img_name){
                            $target_file = $target_dir . basename($img_name);
                            if(move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $target_file)){
                            insert_img($idsp,$img_name);
                            }
                        }
                    }
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/addsp.php";
                break;
                case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else{
                        $kyw = '';
                        $iddm = 0;
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_listsanpham($kyw,$iddm);
                    include "sanpham/listsp.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_listsanpham();

                    include "sanpham/listsp.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        
                        $sanpham = loadone_sanpham($_GET['id']);
                        if ($sanpham) {
                            $images = !empty($sanpham['images']) ? explode(',', $sanpham['images']) : [];
                            $iddm = !empty($sanpham['iddm']) ? explode(',', $sanpham['iddm']) : [];
                        } else {
                            $images = [];
                            $iddm = [];
                        }

                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/updatesp.php";
                    break;
                    // case 'updatesp':
                    //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    //         $id = $_POST['id'];    
                    //         $tensp = $_POST['tensp'];
                    //         $giasp = $_POST['giasp'];
                    //         $sale = $_POST['sale'];
                    //         $view = $_POST['view'];
                    //         $sold = $_POST['sold'];
                    //         $slug = $_POST['slug'];
                    //         $stock = $_POST['stock'];
                    //         $dvt = $_POST['dvt'];
                    //         $desc = $_POST['desc'];
                    //         $dacbiet = $_POST['dacbiet'];
                    //         $iddms = $_POST['iddm'];
                    
                    //         // Cập nhật sản phẩm
                    //         update_sanpham($id, $tensp, $giasp, $sale, $view, $sold, $slug, $stock, $dvt, $desc, $dacbiet);
                    
                    //         // Xóa tất cả danh mục cũ và thêm mới
                    //         delete_sanphamdanhmuc($id);
                    //         foreach ($iddms as $iddm) {
                    //             insert_sanphamdanhmuc($id, $iddm);
                    //         }
                    
                    //         // Lấy danh sách ảnh cũ từ input hidden
                    //         $old_images = isset($_POST['old_images']) ? explode(',', $_POST['old_images']) : [];
                    //         $new_images = $old_images; // Mặc định giữ nguyên ảnh cũ
                    
                    //         // Xử lý upload ảnh mới
                    //         if (!empty($_FILES['hinh']['name'][0])) {
                    //             $target_dir = "../upload/";
                    //             foreach ($_FILES['hinh']['name'] as $key => $img_name) {
                    //                 if (!empty($img_name)) { 
                    //                     $target_file = $target_dir . basename($img_name);
                    //                     if (move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $target_file)) {
                    //                         // Xóa ảnh cũ tại vị trí đó
                    //                         if (isset($old_images[$key])) {
                    //                             unset($new_images[$key]);
                    //                         }
                    //                         // Thêm ảnh mới vào vị trí đó
                    //                         $new_images[$key] = $img_name;
                    //                     }
                    //                 }
                    //             }
                    //         }
                    
                    //         // Xóa toàn bộ ảnh cũ trong database
                    //         delete_img($id);
                    
                    //         // Cập nhật lại toàn bộ ảnh mới vào database
                    //         foreach ($new_images as $image) {
                    //             insert_img($id, $image);
                    //         }
                    //     }
                    
                    //     $listdanhmuc = loadall_danhmuc();
                    //     $listsanpham = loadall_listsanpham();
                    //     include "sanpham/listsp.php";
                    //     break; cbhua fix dc
                    
                
                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];    
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $sale = $_POST['sale'];
                        $view = $_POST['view'];
                        $sold = $_POST['sold'];
                        $slug = $_POST['slug'];
                        $stock = $_POST['stock'];
                        $dvt = $_POST['dvt'];
                        $desc = $_POST['desc'];
                        $dacbiet = $_POST['dacbiet'];
                        $iddms = $_POST['iddm'];
                
                        // Cập nhật sản phẩm
                        update_sanpham($id, $tensp, $giasp, $sale, $view, $sold, $slug, $stock, $dvt, $desc, $dacbiet);
                
                        // Xóa tất cả danh mục cũ và thêm mới
                        delete_sanphamdanhmuc($id);
                        foreach ($iddms as $iddm) {
                            insert_sanphamdanhmuc($id, $iddm);
                        }
                        // Mảng lưu ảnh mới
                        $new_images = [];
                
                        if (!empty($_FILES['hinh']['name'][0])) {
                            // nếu có ảnh mới thì Xóa toàn bộ ảnh cũ
                            delete_img($id);
                            $target_dir = "../upload/";
                            foreach ($_FILES['hinh']['name'] as $key => $img_name) {
                                if (!empty($img_name)) { // Nếu có ảnh mới
                                    $target_file = $target_dir . basename($img_name);
                                    if (move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $target_file)) {
                                        $new_images[] = $img_name;
                                    }
                                }
                            }
                        }
                
                        // Thêm ảnh mới vào database
                        foreach ($new_images as $image) {
                            insert_img($id, $image);
                        }
                    }
                    // Load lại danh sách
                    $listdanhmuc = loadall_danhmuc();
                    $listsanpham = loadall_listsanpham();
                    include "sanpham/listsp.php";
                    break;
                case 'dstk':
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan//listtk.php";
                    break;
                case 'suatk':
                    if(isset($_GET['id'])&&($_GET['id'])){
                        $taikhoan = loadone_taikhoan($_GET['id']);
                    }
                    include "taikhoan/updatetk.php";
                    break;
                case 'updatetk':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $pass = $_POST['pass'];
                        $tel = $_POST['tel'];
                        $role = $_POST['role'];
                        $address = $_POST['address'];
                        update_taikhoan_admin($id,$tel,$address,$pass,$role);

                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/listtk.php";
                    break;
                case 'xoatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/listtk.php";
                    break;
                case 'addvoucher':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenvoucher = $_POST['tenvoucher'];
                        $code = $_POST['code'];
                        $giamgia = $_POST['giamgia'];
                        $ngayhethan = $_POST['ngayhethan'];
                        $chitiet = $_POST['chitiet'];
                        insert_voucher($tenvoucher,$code,$giamgia,$ngayhethan,$chitiet);
                    }
                    include "voucher/addvoucher.php";
                    break;
                case 'listvoucher':
                    $listvoucher = loadall_voucher();
                    include "voucher/listvoucher.php";
                    break;
                case 'suavoucher':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $voucher = loadone_voucher($_GET['id']);
                    }
                    include "voucher/updatevoucher.php";
                    break;
                case 'updatevoucher':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $tenvoucher = $_POST['tenvoucher'];
                        $code = $_POST['code'];
                        $giamgia = $_POST['giamgia'];
                        $ngayhethan = $_POST['ngayhethan'];
                        $chitiet = $_POST['chitiet'];
                        update_voucher($id,$tenvoucher,$code,$giamgia,$ngayhethan,$chitiet);

                    }
                    $listvoucher = loadall_voucher();
                    include "voucher/listvoucher.php";
                    break;
                case 'xoavoucher':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_voucher($_GET['id']);
                    }
                    $listvoucher = loadall_voucher();
                    include "voucher/listvoucher.php";
                    break;
                case 'adddmblog':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        
                        $tendmblog = $_POST['tendmblog'];
                        $stt = $_POST['stt'];
                        
                        
                        insert_danhmucblog($tendmblog,$stt);
                        // neu khong co iddm thi no lỗi vì nó là khóa ngoài
                        $thongbao = "Thêm thành công";
    
                    }
                    include "dmblog/adddmblog.php";
                    break;
                case 'listdmblog':
                    $listdanhmucblog = loadall_danhmucblog();
                    include "dmblog/listdmblog.php";
                    break;
                case 'suadmblog':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dmblog = loadone_danhmucblog($_GET['id']);
                    }
                    include "dmblog/updatedmblog.php";
                    break;
                case 'updatedmblog':
            
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $tendmblog = $_POST['tendmblog'];
                        $stt = $_POST['stt'];
                        update_danhmucblog($id,$stt,$tendmblog);
                    }
                    $listdanhmucblog = loadall_danhmucblog();
                    include "dmblog/listdmblog.php";
                    break;
                case 'xoadmblog':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhmucblog($_GET['id']);
                    }
                    $listdanhmucblog = loadall_danhmucblog();
                    include "dmblog/listdmblog.php";
                    break;
                case 'addblog':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddmblog = $_POST['iddmblog'];
                        if(isset($_SESSION['user'])) $iduser  = $_SESSION['user']['id'];
                        $tenblog = $_POST['name'];
                        $tomtat = $_POST['tomtat'];
                        $view = $_POST['view'];
                        $noidung = $_POST['noidung'];
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                        // lay tên file là name kich thước file là size kiểu file là type
                        //file tmp là đường dẫn tạm thới trước khi lưu file move nó từ tạm thơi sang chính thức target  
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                        } else {
                            // echo "Sorry, there was an error uploading your file.";
                        }
                        insert_blog($iddmblog, $iduser, $tenblog, $tomtat,$view,$noidung,$hinh);
                        // neu khong co iddm thi no lỗi vì nó là khóa ngoài
                        

                    }
                    $listdanhmucblog = loadall_danhmucblog();
                    // de no lay tat ca danh muc show vao select trong addsp
                
                    include "blog/addblog.php";
                    break;
                    case 'listblog':
                        if(isset($_POST['listok'])&&($_POST['listok'])){
                            $kyw = $_POST['kyw'];
                            $iddmblog = $_POST['iddmblog'];
                        }else {
                            $kyw = '';
                            $iddmblog = 0;
                        }
                        $listdanhmucblog = loadall_danhmucblog();
                        $listblog = loadall_blog($kyw,$iddmblog);
                        // $kyw tim kiếm sp theo từ khóa và iddm tim kiếm theo iddm
                        include "blog/listblog.php";
                        break;
                    case 'suablog':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                    
                            $blog = loadone_blog($_GET['id']);
                        }
                        $listdanhmucblog = loadall_danhmucblog();
                        include "blog/updateblog.php";
                        break;
                    case 'updateblog':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $id = $_POST['id'];
                            $iddmblog = $_POST['iddmblog'];
                            $tenblog = $_POST['name'];
                            $tomtat = $_POST['tomtat'];
                            $view = $_POST['view'];
                            $noidung = $_POST['noidung'];
                            $hinh = $_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                            // lay tên file là name kich thước file là size kiểu file là type
                            //file tmp là đường dẫn tạm thới trước khi lưu file move nó từ tạm thơi sang chính thức target  
                            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                            } else {
                                // echo "Sorry, there was an error uploading your file.";
                            }
                            update_blog($id,$iddmblog, $tenblog, $tomtat, $view,$noidung,$hinh);
                            // neu khong co iddm thi no lỗi vì nó là khóa ngoài
                            
    
                        }
                        $listdanhmucblog = loadall_danhmucblog();
                        $listblog = loadall_blog();
                        // de no lay tat ca danh muc show vao select trong addsp
                    
                        include "blog/listblog.php";
                        break;
                    case 'xoablog':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_blog($_GET['id']);
                        }
                        $listblog = loadall_blog();
                        $listdanhmucblog = loadall_danhmucblog();
                        
                        include "blog/listblog.php";
                        break;
                case 'dsdg':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $idtk = $_POST['idtk'];
                        $idsp = $_POST['idsp'];
                        //thiếu tìm theo sản phẩm
                    }else {
                        $idsp = 0;
                        $idtk = 0;
                    }
                    $listsanpham = loadall_listsanpham();
                    $listtaikhoan = loadall_taikhoan();
                    $listdanhgia = loadall_danhgiaadmin($idtk,$idsp);
                    include "danhgia/listdg.php";
                    break;
                case 'xoadg':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhgia($_GET['id']);
                    }
                    $listdanhgia =  loadall_danhgiaadmin(0,0);
                    include "danhgia/listdg.php";
                    break;
                case 'listbill':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw = $_POST['kyw'];
                        $idtk = $_POST['idtk'];
                    }else {
                        $kyw = '';
                        $idtk = 0;
                    }
                    $listtaikhoan = loadall_taikhoan();
                    $listbill = loadall_bill($kyw,$idtk);
                    include "bill/listbill.php";
                    break;
                case 'xoadh':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_bill($_GET['id']);
                    }
                    $listbill = loadall_bill("",0);
                    $listtaikhoan = loadall_taikhoan();
                    include "bill/listbill.php";
                    break;
                case 'suadh':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        
                        $bill=loadone_bill($_GET['id']);
                    }
                    include "bill/updatebill.php";
                    break;
                case 'updatebill':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id = $_POST['id'];
                        $bill_status = $_POST['bill_status'];
    
                        update_bill($id,$bill_status);
                        $thongbao = "cập nhật thành công thành công";
    
                    }
                    $listbill = loadall_bill("",0);
                    // list bill no phai  giong voi bien list trong listbill
                    
                    $listtaikhoan = loadall_taikhoan();
                    
                    include "bill/listbill.php";
                    break; 
                    case 'thongke':     
                        $data = thongke_doanhthu_theo_ngay();
                        $ngays = [];
                        $doanhthus = [];
                        foreach ($data as $row) {
                            $ngays[] = $row['ngay']; 
                            $doanhthus[] = $row['doanhthu'];
                        }
                        $datasanpham = thongke_doanhthu_theo_sanpham();
                        $sanphams = [];
                        $doanhthusanphams = [];
                        foreach ($datasanpham as $row){
                            $sanphams[] = $row['idsp'];
                            $doanhthusanphams[] = $row['doanhthusp'];
                            $soluongsanphams[] = $row['tongsoluongsp']; // Thêm [] ở đây
                        }
                        $datatrangthai = thongke_tinhtrang_donhang();
                        $trangthais = [];
                        $counttrangthais = [];
                        foreach($datatrangthai as $row){
                            $trangthais[] = get_ttdh($row['bill_status']);
                            $counttrangthais[] = $row['soluong'];
                        }
                        $datadanhgia = thongke_danhgia_trungbinh();
                        $idsps = [];
                        $danhgia_trungbinh = [];
                        foreach($datadanhgia as $row){
                            $idsps[] = $row['name'];
                            $danhgia_trungbinh[] = $row['danhgia_tb'];
                        }
                        include "thongke/thongke.php";
                    break;                
            default:
                include "home.php";
                break;
        }

    }else{
        include "home.php";
    }
    
?>
<script>
	function chonTatCa(chon) {
    const checkboxes = document.querySelectorAll('.checkbox-item');
    checkboxes.forEach(checkbox => {
        checkbox.checked = chon;
    });
}
</script>