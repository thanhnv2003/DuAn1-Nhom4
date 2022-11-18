<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="dk-box">
        <div class="info-dk">
            <div class="logo-dn">
                <a href="index.php?url=trang-chu"> <img
                        src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png"
                        alt=""></a>
            </div>
            <?php
            if (isset($_SESSION['account']) && is_array($_SESSION['account'])){
                $account = $_SESSION['account'];
            ?>
            <form action="index.php?url=sua-tai-khoan" method="post">
                <h2>Cập nhật tài khoản</h2>
                <div class="box-dk">
                    <p>Họ và tên</p>
                    <input type="text" value="<?php if (isset($account['fullname']) && ($account['fullname'])) echo $account['fullname']?>" name="fullname">
                </div>
                <div class="box-dk">
                    <p>Số điện thoại</p>
                    <input type="tel" value="<?php if (isset($account['tel']) && ($account['tel'])) echo $account['tel']?>" name="tel">
                </div>
                <div class="box-dk">
                    <p>Địa chỉ</p>
                    <input type="text" value="<?php if (isset($account['address']) && ($account['address'])) echo $account['address']?>" name="address">
                </div>
                <div class="box-dk">
                    <p>Email</p>
                    <input type="email" value="<?php if (isset($account['email']) && ($account['email'])) echo $account['email']?>" name="email">
                </div>
                <div class="box-dk">
                    <p>Mật khẩu</p>
                    <input type="password" value="<?php if (isset($account['password']) && ($account['password'])) echo $account['password']?>" name="password"> <br>
                </div>
                <div class="box-dk">
                    <p>Nhập lại mật khẩu</p>
                    <input type="password" name="repassword"><br>
                </div>
<!--                <button type="submit">CẬP NHẬT</button>-->
                <input type="hidden" value="<?php if (isset($account['id_account']) && ($account['id_account'])) echo $account['id_account']?>" name="id">
                <input type="submit" value="CẬP NHẬT" name="capnhat">
                <?php if (isset($thongbao) && ($thongbao != '')){
                    echo $thongbao;
                } ?>
            </form>
            <?php } ?>
        </div>
        <div class="info-dn-img">
            <img src="View/src/image/image 1.png" alt="">
        </div>
    </div>
</div>
</body>

</html>
