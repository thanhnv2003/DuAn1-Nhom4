<?php
function giaoDienTrangChu(){
    $sql = "SELECT * FROM `setting` WHERE id_st = 1";
    $trangChu = pdo_query($sql);
    return $trangChu;
}
function suaGiaoDien($logo, $address, $tel, $email, $copyright){
    if ($logo != '') {
        $sql = "UPDATE `setting` SET `logo` = '$logo', `address` = '$address', `tel` = '$tel', `email` = '$email', `copyright` = '$copyright' WHERE `setting`.`id_st` = 1";
    }else{
        $sql = "UPDATE `setting` SET `address` = '$address', `tel` = '$tel', `email` = '$email', `copyright` = '$copyright' WHERE `setting`.`id_st` = 1";
    }
    pdo_execute($sql);
}
function themMoiSlider($image,$url,$title,$desc){
    $sql = "INSERT INTO `slider` (`id_slider`, `image`, `url`, `title`, `description`) VALUES (NULL, '$image', '$url', '$title', '$desc')";
    pdo_execute($sql);
}
function listAnhSlider(){
    $sql = "SELECT * FROM slider";
    $slider = pdo_query($sql);
    return $slider;
}
function listOneAnhSlider($id){
    $sql = "SELECT * FROM slider where id_slider = ".$id;
    $one = pdo_query_one($sql);
    return $one;
}
function suaSlider($id, $image, $url, $title, $desc){
    if ($image != ''){
        $sql = "UPDATE `slider` SET `image` = '$image', `url` = '$url', `title` = '$title', `description` = '$desc' WHERE `slider`.`id_slider` = ".$id;
    }else{
        $sql = "UPDATE `slider` SET `url` = '$url', `title` = '$title', `description` = '$desc' WHERE `slider`.`id_slider` = ".$id;
    }
//    return $sql;
    pdo_execute($sql);
}
function deleteAnhSlider($id){
    $sql = "DELETE FROM slider WHERE id_slider = ".$id;
    pdo_execute($sql);
}



?>
