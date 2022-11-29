<?php
require_once './Models/pdo.php';
require_once './Models/room.php';
require_once './Models/account.php';
require_once './Models/comment.php';
require_once './Models/dichvu.php';
require_once './Models/home.php';
require_once './Models/contact.php';

function indexRoom(){
    $giaoDien = giaoDienTrangChu();
    $listPhong = loaiphong_loadall();
    include_once './View/Client/indexView.php';
}
function gioiThieu(){
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/gioiThieu.php';
}
function loaiPhong(){
    $giaoDien = giaoDienTrangChu();
    $list_roomss = loaiphong_loadall();
    include_once './View/Client/loaiPhong.php';
}
function chitietphong(){
    if(isset($_GET['id']) && ($_GET['id']>0)){
        $list_onerooms = loaiphong_loadone($_GET['id']);
        $img_room = list_image_room($_GET['id']);

      }
    $list_roomss = loaiphong_loadall();
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/chiTietPhong.php';
    }
function dichVu(){
    $list_dichvu =dichvu_loadall();
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/dichVu.php';
}
function lienHe(){
    $giaoDien = giaoDienTrangChu();
    if(isset($_POST['gui']) && $_POST['gui']){
        $sex=$_POST['sex'];
        $name=$_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        insert_contact($sex,$name,$phone, $email,$content);
        $thongbao = "cảm ơn bạn đã để lại liên hệ";
    }
    include_once './View/Client/lienHe.php';
}
function dangNhap(){
    if (isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkuser = check_user($email, $password);
        if (is_array($checkuser)){
            $_SESSION['account'] = $checkuser;
            header('location: index.php');
        }else{
            $thongbao = 'Tài khoản không tồn tại';
        }
    }
    include_once './View/Client/taikhoan/login_taikhoan.php';
}
function dangKy(){
        if (isset($_POST['dangky'])){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $password = $_POST['password'];
            if ($_POST['password'] != '' && $_POST['repassword'] != '' && $_POST['password'] == $_POST['repassword']){
                insert_taiKhoan($fullname,$email,$tel,$password);
                $thongbao = 'Đăng ký thành công';
            }else{
                $thongbao = 'Hai mật khẩu bạn nhập không giống nhau';
            }
    }
    include_once './View/Client/taikhoan/register_taikhoan.php';
}
function quenMatKhau(){
    if (isset($_POST['quenmatkhau']) && ($_POST['quenmatkhau'])){
        $email = $_POST['email'];
        $checkemail = check_email($email);
//        var_dump($checkemail);
        if (is_array($checkemail) && $checkemail != null){
            $thongbao = 'Mật khẩu của bạn là: '.$checkemail['password'];
        }else{
            $thongbao = 'Email này không tồn tại!';
        }
    }
    include_once './View/Client/taikhoan/forgot_taikhoan.php';
}
function capNhatTaiKhoan(){
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($_POST['password'] != '' && $_POST['repassword'] != '' && $_POST['password'] == $_POST['repassword']){
            updateAccount($id, $fullname, $tel, $address, $email, $password);
            $_SESSION['account'] = check_user($email, $password);
            $thongbao = 'Cập nhật thành công';
        }else{
            $thongbao = 'Hai mật khẩu bạn nhập không giống nhau';
        }
    }
    include_once './View/Client/taikhoan/update_taikhoan.php';
}
function datPhong(){
    $user = $_SESSION['account'];
    $listPhong = loaiphong_loadall();
    $giaoDien = giaoDienTrangChu();
    include_once './View/Client/bookPhong.php';
}


?>