<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book phòng</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c37014309.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <header>

        <div class="menu">
            <div class="logo">
                <a href="index.html"> <img
                        src="../image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="gioithieu.html">Giới thiệu</a></li>
                    <li><a href="loaiphong.html">Loại phòng</a></li>
                    <li><a href="dichvu.html">Dịch vụ</a></li>
                    <li><a href="lienhe.html">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header_book">
            <a href="bookphong.html"><input type="button" value="ĐẶT PHÒNG"></a>
            <a href="dangnhap.html"> <input type="button" value="Đăng nhập"></a>
        </div>
    </header>
    <div class="banner">
        <img src="../image/4 STUDIO 801_1 1920-min.jpg" alt="">
    </div>
    <!--Main-->
    <main>
        <div class="main-bookphong">
            <h2>Thông tin đặt phòng</h2>
            <form action="#">
                <div class="frm-boxphong">
                    <div class="boxphong-item">
                        <p>Ngày đến</p>
                        <input type="date" name="">
                    </div>
                    <div class="boxphong-item">
                        <p>Người lớn</p>
                        <select name="" id="">
                            <option value="0">-Lựa chọn-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="boxphong-item">
                        <p>Ngày đi</p>
                        <input type="date" name="">
                    </div>
                    <div class="boxphong-item">
                        <p>Trẻ em</p>
                        <select name="" id="">
                            <option value="0">-Lựa chọn-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <table>
                    <tr>
                        <td>Loại phòng</td>
                        <td>Gía/đêm</td>
                        <td>Số người tối đa</td>
                        <td>Chọn phòng</td>
                    </tr>
                    <tr>

                        <th>Bình dân</th>
                        <th>900.000đ/đêm</th>
                        <th>2</th>
                        <th><select name="" id="">
                                <option value="0">--lựa chọn--</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="1">5</option>
                            </select>
                        </th>

                    </tr>
                    <tr>

                        <th>Bình dân</th>
                        <th>900.000đ/đêm</th>
                        <th>2</th>
                        <th><select name="" id="">
                                <option value="0">--lựa chọn--</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="1">5</option>
                            </select>
                        </th>

                    </tr>
                    <tr>

                        <th>Bình dân</th>
                        <th>900.000đ/đêm</th>
                        <th>2</th>
                        <th><select name="" id="">
                                <option value="0">--lựa chọn--</option>
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="1">5</option>
                            </select>
                        </th>

                    </tr>

                </table>
                <div class="frm-boxphong">
                    <div class="boxphong-item">
                        <p>Giới tính</p>
                        <select name="" id="">
                            <option value="0">Lựa chọn</option>
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                        </select>
                    </div>
                    <div class="boxphong-item">
                        <p>Họ tên</p>
                        <input type="text" placeholder="Nhạp họ tên">
                    </div>
                    <div class="boxphong-item">
                        <p>Email</p>
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="boxphong-item">
                        <p>Số điện thoại</p>
                        <input type="number" placeholder="Số điện thoại">
                    </div>

                    <div class="boxphong-item">
                        <p>Thời gian đến</p>
                        <input type="date" name="" id="">

                    </div>
                    <div class="boxphong-item">
                        <p>Địa chỉ</p>
                        <input type="text" placeholder="Địa chỉ">
                    </div>
                    <div class="boxphong-item">
                        <p>Thành phố</p>
                        <input type="text" placeholder="Thành phố">
                    </div>
                    <div class="boxphong-item">
                        <p>Yêu cầu khác</p>
                        <textarea name="" id="" placeholder="NHập yêu cầu của bạn..."></textarea>
                    </div>
                </div>
                <div class="checkbox-bp">
                    <input type="checkbox" value=""><label>Tôi đồng ý và chấp nhận điều khoản của khách sạn</label>
                    <br>
                    <button type="submit">Gửi</button>
                </div>


            </form>
        </div>
    </main>
    <!--footer-->
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
                <a href="lienhe.html">Liên hệ</a> <br>
                <a href="#">Vị trí & chỉ đường</a> <br>
                <a href="#">Tiện ích</a>
            </div>
            <div class="footer-box">
                <h2>Những điều cần biết</h2> <br>
                <a href="#">Hỏi đáp</a> <br>
                <a href="#">Điều khoản & điều kiện</a>
            </div>
            <div class="footer-box2">
                <a href=""> <img
                        src="../image/Xanh nước biển và Trắng Cổ điển Đường tròn Thời trang Biểu trưng Thời trang (95 × 98 px) 3.png"
                        alt=""></a>
                <script lang="javascript">var __vnp = { code: 4505, key: '', secret: '2d9af8430e9f03871b8868f5ddb7797c' }; (function () { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.defer = true; ga.src = '//core.vchat.vn/code/tracking.js'; var s = document.getElementsByTagName('script'); s[0].parentNode.insertBefore(ga, s[0]); })();
                </script>
            </div>
        </div>
    </footer>
</div>
</body>

</html>
