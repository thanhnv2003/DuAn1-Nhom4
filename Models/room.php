<!-- THÊM MỚI LOẠI PHÒNG -->

<?php 
function loaiphong_inset($usename,$hinh,$description,$price,$quantity){
    $sql = "INSERT INTO `categories_room`(`id_cate`, `name`, `image`, `description`, `price`, `quantity`) VALUES (null,'$usename','$hinh','$description','$price','$quantity')";
    pdo_execute($sql);
    // return $sql;
};
function loaiphong_loadall(){
    $sql = "SELECT * FROM `categories_room` ORDER BY id_cate";
    $list_loaiphong = pdo_query($sql);
    return $list_loaiphong;
}
function loaiphong_loadone($id_cate){
    $sql = "SELECT * FROM `categories_room` WHERE id_cate=".$id_cate;
    $loaiphong=pdo_query_one($sql);
    return $loaiphong;
}
function loaiphong_delete($id_cate){
    $sql = "DELETE FROM `categories_room` WHERE id_cate=".$id_cate;
    pdo_execute($sql);
 }
 function loaiphong_update($id_cate,$nameroom,$hinh,$description,$price,$quantity){
    if ($hinh!= "")
    $sql ="UPDATE `categories_room` SET `name`='$nameroom',`image`='$hinh',`description`='$description',`price`='$price',`quantity`='$quantity' WHERE id_cate=".$id_cate;
    else
        $sql ="UPDATE `categories_room` SET `name`='$nameroom',`description`='$description',`price`='$price',`quantity`='$quantity' WHERE id_cate=".$id_cate;
     pdo_execute($sql);
 }

 //thêm mới ảnh phòng
function them_moi_anh_phong($image, $idRoom){
    $sql = "INSERT INTO image_room VALUES (null, '$image', '$idRoom')";
    pdo_execute($sql);
}

//list ảnh trong phòng
function list_image_room($id){
    $sql = "SELECT * FROM image_room where id_room = ".$id;
    $img = pdo_query($sql);
    return $img;
}
?>
