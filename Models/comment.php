<?php
function list_comment(){
    $result = "Select * from comment order by id_cmt ";
    $comment = pdo_query($result);
    return $comment;
}
function loadall_binhluan($id_user){
    $sql="select * from comment where 1";
    if($id_user>0) $sql.=" AND idpro='".$id_user."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function insert_comment($content,$id_room,$id_user,$date_time){
    $sql="insert into comment(content,id_room,Id_user,date_time) value('$content','$id_room','$id_user','$date_time')";
    pdo_execute($sql);
}
function delete_commet($id_cmt){
    $result = "delete from comment where id_cmt = ".$id_cmt;
    pdo_execute($result);
}
?>