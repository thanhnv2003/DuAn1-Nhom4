<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="dk-box">
            <div class="info-dk">
                <div class="logo-dn">
                    <a href="index.php?url=trang-chu"> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
                </div>
                <!--form đăng kí-->
                <form action="index.php?url=dang-ky" method="post">
                    <h2>Đăng kí thành viên</h2>
                    <div class="box-dk">
                        <p>Họ và Tên</p>
                        <input type="text" placeholder="Họ và tên" name="fullname" required>
                    </div>
                    <div class="box-dk">
                        <p>Email</p>
                        <input type="email" placeholder="abcxyz@gmail.com" name="email" required>
                    </div>
                    <div class="box-dk">
                        <p>Số điện thoại</p>
                        <input type="number" placeholder="0900000000" name="tel" required>
                    </div>
                    <div class="box-dk">
                        <p>Mật khẩu</p>
                        <input type="password" placeholder="**********" name="password" required> <br>
                    </div>
                    <div class="box-dk">
                        <p>Nhập lại mật khẩu</p>
                        <input type="password" placeholder="**********" name="repassword" required> <br>
                    </div>
                    <!--                <button type="submit"> Đăng kí</button>-->
                    <input type="submit" value="Đăng ký" name="dangky" class="info-dk-ip">
                    <?php if (isset($thongbao) && ($thongbao != '')) { ?>
                        <h1 style="color: red;"><?php echo $thongbao ?></h1>
                    <?php   } ?>
                </form>
            </div>
            <div class="info-dn-img">
                <img src="View/src/image/image 1.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>