<?php 
function uudai_inset($usename,$giftcode,$price){
    $sql = "INSERT INTO `voucher`(`id_voucher`, `name`, `giftcode`, `price`) VALUES (null,'$usename','$giftcode','$price')";
    pdo_execute($sql);
    // return $sql;
};
function uudai_loadall(){
    $sql = "SELECT * FROM `voucher` ORDER BY id_voucher";
    $list_uudai = pdo_query($sql);
    return $list_uudai;
}
function uudai_loadone($id_voucher){
    $sql = "SELECT * FROM `voucher` WHERE id_voucher=".$id_voucher;
    $uudai=pdo_query_one($sql);
    return $uudai;
}
function uudai_update($id_voucher,$tenuudai,$giftcode,$price){
    $sql = "UPDATE `voucher` SET `name`='$tenuudai',`giftcode`='$giftcode',`price`='$price' WHERE id_voucher=".$id_voucher;
    pdo_execute($sql);
 }
 function uudai_delete($id_voucher){
    $sql = "DELETE FROM `voucher` WHERE id_voucher=".$id_voucher;
    pdo_execute($sql);
 }
?>