<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại phòng</title>
    <link rel="stylesheet" href="View/src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <header>
        <div class="menu">
            <div class="logo">
                <a href="index.php?url=trang-chu"> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php?url=trang-chu">Trang chủ</a></li>
                    <li><a href="index.php?url=gioi-thieu">Giới thiệu</a></li>
                    <li><a href="index.php?url=loai-phong">Loại phòng</a></li>
                    <li><a href="index.php?url=dich-vu">Dịch vụ</a></li>
                    <li><a href="index.php?url=lien-he">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header_book">
            <a href="index.php?url=book-phong"><input type="button" value="ĐẶT PHÒNG"></a>
            <a href="index.php?url=dang-nhap"> <input type="button" value="Đăng nhập"></a>
        </div>
    </header>
    <div class="banner">
        <img src="View/src/image/nhieu-loai-phong-khach-nhau 1.png" alt="">
    </div>
    <main>
        <div class="main-loaiphong">
            <h1>Kind of room</h1>
            <div class="lp-fillter">
                <input type="text" placeholder="Tìm kiếm loại phòng...">
                <select name="" id="">
                    <option value="0">--Lọc giá--</option>
                    <option value="1">Dưới 1.000.000đ</option>
                    <option value="1">Trên 1.000.000đ</option>
                    <option value="1">Trên 3.000.000đ</option>
                </select>
            </div>
            <div class="lp-product">
              <?php
               foreach ($list_roomss as $value) {
                extract($value);
                   echo '
                   <div class="lp-product1" >
                   <div class="lp-product-img" >
                       <a href = "index.php?url=chi-tiet-phong&id='.$id_cate .'" ><img src = "./View/src/upload/'.$image.'" alt = "" ></a >
                   </div >
                   <div class="lp-product-info" >
                       <a href = "index.php?url=chi-tiet-phong&id='.$id_cate .'" >
                           <h4>'.$name.'</h4 >
                       </a >
                       <span > Price :'.$price.'/ ngày </span >
                   </div >
               </div >
         

           ';
           }
             ?>
                <!-- <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div>
                <div class="lp-product1">
                    <div class="lp-product-img">
                        <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                    </div>
                    <div class="lp-product-info">
                        <a href="index.php?url=chi-tiet">
                            <h4>DELUXE</h4>
                        </a>
                        <span>Price : 900.000đ/ngày</span>
                    </div>
                </div> -->

         
          </div>
        </div>
    </main>
    <footer>
        <div class="footer-box1">
            <div class="footer-box">
                <h2>Khách sạn CHAN MAY VN</h2>
                <p><i class="fa-sharp fa-solid fa-location-dot"></i> Số 1 Đường Trịnh Văn Bô-Nam Từ Niêm -Hà Nội</p>
                <p><i class="fa-sharp fa-solid fa-phone"></i> 0999999899</p>
                <p><i class="fa-sharp fa-solid fa-envelope"></i> nhom4duan1@gmail.com</p>
            </div>
            <div class="footer-box">
                <h2>Về chúng tôi</h2>
                <a href="index.php?url=lien-he">Liên hệ</a> <br>
                <a href="#">Vị trí & chỉ đường</a> <br>
                <a href="#">Tiện ích</a>
            </div>
            <div class="footer-box">
                <h2>Những điều cần biết</h2> <br>
                <a href="#">Hỏi đáp</a> <br>
                <a href="#">Điều khoản & điều kiện</a>
            </div>
            <div class="footer-box2">
                <a href=""> <img src="View/src/image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png" alt=""></a>
                <script lang="javascript">var __vnp = { code: 4505, key: '', secret: '2d9af8430e9f03871b8868f5ddb7797c' }; (function () { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.defer = true; ga.src = '//core.vchat.vn/code/tracking.js'; var s = document.getElementsByTagName('script'); s[0].parentNode.insertBefore(ga, s[0]); })();
                </script>
            </div>
        </div>
    </footer>
</div>
</body>

</html>
