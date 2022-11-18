<?php
include "./Models/account.php";
include "./Models/pdo.php";
//List
function indexAdmin(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/home.php';
    include_once './View/Admin/footer.php';
}
function listLoaiPhong(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/loaiphong/list_loaiphong.php';
    include_once './View/Admin/footer.php';
}
function listKhachHang(){
    include_once './View/Admin/header.php';
    $list_account = loadall_account();
    include_once './View/Admin/taikhoan/list_taikhoan.php';
    include_once './View/Admin/footer.php';
}
function listBinhluan(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/binhluan/list_binhluan.php'; 
    include_once './View/Admin/footer.php';
}
function listDonHang(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/donhang/list_donhang.php';
    include_once './View/Admin/footer.php';
}
function listThongKe(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/home.php';
    include_once './View/Admin/footer.php';
}
function listUuDai(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/uudai/list_uudai.php';
    include_once './View/Admin/footer.php';
}
function listLienHe(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/lienhe/list_lienhe.php';
    include_once './View/Admin/footer.php';
}

//Add
function themLoaiPhong(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/loaiphong/add_loaiphong.php';
    include_once './View/Admin/footer.php';
}
function themUuDai(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/uudai/add_uudai.php';
    include_once './View/Admin/footer.php';
}
function themTaiKhoan(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/taikhoan/add_taikhoan.php';
    include_once './View/Admin/footer.php';
}

//Update
function capNhatDonHang(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/donhang/update_donhang.php';
    include_once './View/Admin/footer.php';
}
function capNhatLoaiPhong(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/loaiphong/update_loaiphong.php';
    include_once './View/Admin/footer.php';
}
function capNhatKhachHang(){
    include_once './View/Admin/header.php';
    if(isset($_GET['id'])&& ($_GET['id']>0)){
        $fixaccount = loadone_account($_GET['id']);
    }
    if(isset($_POST['capnhat']) && $_POST['capnhat']){
        $id_account = $_POST['id_account'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];

        $target = './View/src/uploand/';
        $image=$_FILES['anh']['name'];
        $maxsize = 2000000;
        $duoi = ['jpg','png'];
        $target_file = $target.$image;
        $tatfiletype = pathinfo($target_file,PATHINFO_EXTENSION);
        if($_FILES['anh']['size']> $maxsize){
            echo " ảnh của bạn có dung lược quá lớn không thể upload";
        }
        if(move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)){
                      echo "ảnh của bạn đã được thêm thành công ";
        }
         else{
            echo 'sorry, ảnh của bạn ko được uplead';
        }
          update_account($id_account,$image,$fullname,$password,$email,$address,$phone,$role);

      echo "bạn đã update thành công ";
    }

    include_once './View/Admin/taikhoan/update_taikhoan.php';
    include_once './View/Admin/footer.php';
}

function capNhatUuDai(){
    include_once './View/Admin/header.php';
    include_once './View/Admin/uudai/update_uudai.php';
    include_once './View/Admin/footer.php';
}
//delete
function deleteKhachHang(){
    include_once './View/Admin/header.php';
    if(isset($_GET['id']) && $_GET['id']>0){
        delete_account($_GET['id']);
    }
    $list_account = loadall_account();
    include_once './View/Admin/taikhoan/list_taikhoan.php';
    include_once './View/Admin/footer.php';
}
?>