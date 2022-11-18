<?php
//thêm mới tài khoản
function insert_taiKhoan($fullname, $email, $tel, $password){
    $sql = "INSERT INTO `account` (`id_account`, `image`, `fullname`, `password`, `email`, `address`, `tel`, `role`) VALUES (NULL, NULL, '$fullname', '$password', '$email', NULL, '$tel', '0')";
    pdo_execute($sql);
}
//kiểm tra tài khoản
function check_user($email,$password){
    $sql = "select * from account where email = '$email' and password = '$password'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//Kiểm tra email
function check_email($email){
    $sql = "select * from account where email = '$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
//cập nhật tài khoản
function update_account($id, $fulname, $tel, $address, $email, $password){
    $sql = "UPDATE `account` SET `fullname` = '$fulname', `password` = '$password', `email` = '$email', `address` = '$address', `tel` = '$tel' WHERE `account`.`id_account` = '$id'";
    pdo_execute($sql);
}

?>
