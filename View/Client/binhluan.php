<?php
session_start();
require_once '../../Models/pdo.php';
require_once '../../Models/comment.php';
$id_room = $_REQUEST['id_room'];
$loadone_comment = loadall_binhluan($id_room);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="binhluan">
        <h3>Bình luận </h3>
        <div class="thanhphan">
            <table>
                    <?php
                    foreach ($loadone_comment as $item){
                        extract($item);
                        echo '<tr> <td>'.$content.'</td>' ;
                        echo '<td>'.$Id_user.'</td>' ;
                        echo '<td>'.$date_time	.'</td></tr>' ;
                    }
                    ?>

            </table>
        </div>
        <div class="frombinhlian">
            <?php
            if(isset($_SESSION['user'])){
            ?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="id_room" id="" value="<?=$id_room?>">
                <input type="text" name="content">
                <input type="submit" name="guibinhluan" value="gửi bình luận ">
            </form>
                <?php
            }
            else{
                echo 'bạn cần đăng ký tài khoản ';
            }
            ?>
        </div>
        <?php
        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $content = $_POST['content'];
            $id_room = $_POST['id_room'];
            $id_user = $_SESSION['user']['id_account'];
            $date_time = date('h:i:sa d/m/Y');
            insert_comment($content,$id_room,$id_user,$date_time);
            header("location:  ".$_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>
</html>