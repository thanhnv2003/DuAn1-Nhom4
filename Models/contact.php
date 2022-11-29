<?php
function insert_contact($sex,$name,$phone, $email,$content){
    $sql = "insert into contact(sex,fullname,email,tel,content) values ('$sex','$name','$email','$phone','$content') ";
    pdo_execute($sql);
}
?>