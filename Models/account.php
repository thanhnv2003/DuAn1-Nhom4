<?php
include "pdo.php";
function loadall_account(){
    $result = "Select * from account order by id_account";
    $account = pdo_query($result);
    return $account;
}
function loadone_account($id_account){
    $result = "select * from account where id_account = ".$id_account;
    $fix = pdo_query_one($result);
    return $fix;
}
function update_account($file,$fullname,$password,$email,$address,$phone,$role){
    $result = 'update account set image = "'.$file.'",fullname = "'.$fullname.'",password = "'.$password.'",email = "'.$email.'",address = "'.$address.'",tel = "'.$phone.'",role = "'.$role.'"  where id_account = '.$id_account ;
    pdo_execute($result);
}
?>

