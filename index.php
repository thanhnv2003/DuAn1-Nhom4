<?php
require_once './Controller/roomController.php';
$url = isset($_GET['url']) ? $_GET['url'] : 'trang-chu';

switch($url){
    //Client
    case 'trang-chu':
        echo indexRoom();
        break;
    case 'dich-vu':






    //Admin    
    default:
        echo 'Đường dẫn không tồn tại';
        break;    
}

?>