<?php 
require_once './Models/room.php';

function indexRoom(){
    include_once './View/Client/indexView.php';
}
function gioiThieu(){
    include_once './View/Client/gioiThieu.php';
}
function loaiPhong(){
    include_once './View/Client/loaiPhong.php';
    
}
function dichVu(){
    include_once './View/Client/dichVu.php';
}
function lienHe(){
    include_once './View/Client/lienHe.php';
}
function dangNhap(){
    include_once './View/Client/taikhoan/login_taikhoan.php';
}
function dangKy(){
    include_once './View/Client/taikhoan/register_taikhoan.php';
}
function quenMatKhau(){
    include_once './View/Client/taikhoan/forgot_taikhoan.php';
}
function capNhatTaiKhoan(){
    include_once './View/Client/taikhoan/update_taikhoan.php';
}
function datPhong(){
    include_once './View/Client/bookPhong.php';
}


?>