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
        <div class="">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="View/src/image/chup-hinh-khach-san-nha-hang-mimosa-06-1 1.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="View/src/image/4 STUDIO 801_1 1920-min.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
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

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="View/src/image/5 DELUXE STUDIO_P704_1 1920-min.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
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
                    <div class="lp-product1">
                        <div class="lp-product-img">
                            <a href="index.php?url=chi-tiet"><img src="View/src/image/Rectangle 48.png" alt=""></a>
                        </div>
                        <div class="lp-product-info">
                            <a href="chitiet.html">
                                <h4>DELUXE</h4>
                            </a>
                            <span>Price : 900.000đ /ngày</span>
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
                    <script lang="javascript">
                        var __vnp = {
                            code: 4505,
                            key: '',
                            secret: '2d9af8430e9f03871b8868f5ddb7797c'
                        };
                        (function() {
                            var ga = document.createElement('script');
                            ga.type = 'text/javascript';
                            ga.async = true;
                            ga.defer = true;
                            ga.src = '//core.vchat.vn/code/tracking.js';
                            var s = document.getElementsByTagName('script');
                            s[0].parentNode.insertBefore(ga, s[0]);
                        })();
                    </script>
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
        </footer>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); 
        }
    </script>
</body>

</html>