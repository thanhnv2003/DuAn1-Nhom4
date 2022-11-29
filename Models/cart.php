<?php
//toongt giá trị đơn hàng
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycard'] as $key => $value){
        $tong += $value[5];
    }
    return $tong;
}
//thêm mới bill
function themMoiDonHang($fullname, $tel, $email, $adults, $children, $totalprice, $status, $datetime, $checkindate, $checkoutdate){
    $sql = "INSERT INTO `book` (`id_book`, `fullname`, `tel`, `email`, `adults`, `children`, `total_price`, `status`, `date_time`, `check_in_date`, `check_out_date`) VALUES (NULL, '$fullname', '$tel', '$email', '$adults', '$children', '$totalprice', '$status', '$datetime', '$checkindate', '$checkoutdate')";
    return pdo_execute_return_lastInsertId($sql);
}
//thêm mới book detail
function themMoiBookDetail($idroom, $idbook, $price, $quantity, $initprice){
    $sql = "INSERT INTO `book_detail` VALUES ('$idroom', '$idbook', '$price', '$quantity', '$initprice')";
    return pdo_execute($sql);
}
//list one dơn hàng
function listDonHangkh($idbook){
    $sql = "SELECT * FROM book_detail WHERE id_book = ".$idbook;
    $ok = pdo_query($sql);
    return $ok;
}
?>
