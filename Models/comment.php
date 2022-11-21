<?php
function list_comment(){
    $result = "Select * from comment order by id_cmt ";
    $comment = pdo_query($result);
    return $comment;
}
function delete_commet($id_cmt){
    $result = "delete from comment where id_cmt = ".$id_cmt;
    pdo_execute($result);
}
?>