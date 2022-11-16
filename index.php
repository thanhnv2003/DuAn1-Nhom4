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
    case 'dat-phong':
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

        //them-moi
//    case 'them-moi-loai-phong':
//        echo
//        break;
//    case 'them-moi-khach-hang':
//        echo
//        break;
//    case 'them-moi-uu-dai':
//        echo
//        break;
//
//
//
//        //edit
//    case 'sua-giao-dien':
//        echo
//        break;
//    case 'sua-loai-phong':
//        echo
//        break;
//    case 'sua-khach-hang':
//        echo
//        break;
//    case 'sua-don-hang':
//        echo
//        break;
//    case 'sua-thong-ke':
//        echo
//        break;
//    case 'sua-uu-dai':
//        echo
//        break;
//
//
//
//        //delete
//    case 'xoa-loai-phong':
//        echo
//        break;
//    case 'xoa-khach-hang':
//        echo
//        break;
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