<?php
require_once './Controller/clientController.php';
require_once './Controller/adminController.php';
$url = isset($_GET['url']) ? $_GET['url'] : 'trang-chu';

switch($url){
    //Client
    case 'trang-chu':
        echo indexRoom();
        break;
    case 'gioi-thieu':
        echo gioiThieu();
        break;
    case 'loai-phong':
        echo loaiPhong();
        break;
    case 'dich-vu':
        echo dichVu();
        break;
    case 'lien-he':
        echo lienHe();
        break;
    case 'book-phong':
        echo datPhong();
        break;
    case 'dang-nhap':
        echo dangNhap();
        break;
    case 'dang-ky':
        echo dangKy();
        break;
    case 'quen-mat-khau':
        echo quenMatKhau();
        break;
//    case 'sua-tai-khoan':
//        echo quenMatKhau();
//        break;


    //Admin

    case 'admin':
        echo indexAdmin();
        break;
    case 'quan-ly-loai-phong':
        echo listLoaiPhong();
        break;
    case 'quan-ly-khach-hang':
        echo listKhachHang();
        break;
    case 'quan-ly-binh-luan':
        echo listBinhluan();
        break;
    case 'quan-ly-don-hang':
        echo listDonHang();
        break;
    case 'quan-ly-thong-ke':
        echo listThongKe();
        break;
    case 'quan-ly-uu-dai':
        echo listUuDai();
        break;
    case 'quan-ly-lien-he':
        echo listLienHe();
        break;

//        them-moi
    case 'them-moi-loai-phong':
        echo themLoaiPhong();
        break;
    case 'them-moi-tai-khoan':
        echo themTaiKhoan();
        break;
    case 'them-moi-uu-dai':
        echo themUuDai();
        break;

//
//
//
//        //edit
//    case 'sua-giao-dien':
//        echo
//        break;
    case 'sua-loai-phong':
        echo capNhatLoaiPhong();
        break;
    case 'cap-nhat-khach-hang':
        echo capNhatKhachHang();
        break;
    case 'sua-don-hang':
        echo capNhatDonHang();
        break;
//    case 'sua-thong-ke':
//        echo
//        break;
    case 'sua-uu-dai':
        echo capNhatUuDai();
        break;
    case 'sua-khach-hang':
        echo listone_Account();
        break;
//
//
//
//        //delete
//    case 'xoa-loai-phong':
//        echo
//        break;
    case 'xoa-khach-hang':
        echo deleteKhachHang();
        break;
//    case 'xoa-binh-luan':
//        echo
//        break;
//    case 'xoa-don-hang':
//        echo
//        break;
//    case 'xoa-thong-ke':
//        echo
//        break;
//    case 'xoa-uu-dai':
//        echo
//        break;
//    case 'xoa-lien-he':
//        echo
//        break;
//    case '':
//        echo
//        break;
//    case '':
//        echo
//        break;
//    case '':
//        echo
//        break;







    //Admin    
    default:
        echo 'Đường dẫn không tồn tại';
        break;    
}

?>