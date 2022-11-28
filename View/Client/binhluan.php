<?php
session_start();
$id_user = $_REQUEST['id_user'];
$dsbl = loadall_binhluan($id_user);
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
                <tr>
                    <td>id_user</td>
                    <td>nội dung</td>
                    <td>ngày bình luận </td>
                </tr>
            </table>
        </div>
        <div class="frombinhlian">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="id_user" id="" value="<?=$id_user?>">
                <input type="text" name="content">
                <input type="submit" name="guibinhluan" value="gửi bình luận ">
            </form>
        </div>
    </div>
</body>
</html>