@extends('layouts.app')
@section('content')
    <div class="container">
    <div id="header">
        <div id="header-menu">
          <img src="image/logo.PNG" alt="">
            <ul class="menu">
                <li class="menu-item"><a href="#">TRANG CHỦ</a></li>
                <li class="menu-item"><a href="#">TIN TỨC</a></li>
                <li class="menu-item"><a href="#">VỀ CHÚNG TÔI</a></li>
                <li class="menu-item"><a href="#">ENGLISH</a></li>
                <li class="menu-item"><a href="#">ĐĂNG NHẬP</a></li>
                <li class="menu-item"><a href="#">TESTIMONIALS</a></li>
                <li class="menu-item"><a href="#">NEWS</a></li>
            </ul>
        </div>
        <div id="header-img">
        
            <h2>Air Quality</h2>
            <h2>GERMAN EMBASSY HANOI</h2>
            <img src="image/unhealthy.png" alt="">
            <div id="img-198">
                <p>Air quality Index</p>
                <h3>198</h3>
                <p>Unhealthy</p>
            </div>
            <div id="text_update">
                <p>Update at: 2019-03-18 19:34:08</p>
                <p>Humidity: 80%</p>
                <p>Temperature: 20%</p>
            </div>
    
        </div>
        <div class="s-footer">
            <span id="header-footer-hot">Hot!</span><span class="footer-bold"> Airsense</span><span
                class="footer-normal"> is an air monitor solution. </span><a href="#" class="footer-vang"> Contact us
                now!</a>
        </div>
    </div>
    <!-- chọn điểm đo -->
    <div id="Chon_diem_do">
        <div class="text-header">
            <h3>Chọn điểm đo</h3>
            <hr>
        </div>
        <div id="Chon_diem_do_body">
            <div class="row">
                <div class="col-sm-6">
                    <div id="AQI">
                        <select>
                            <option value="aqi">162BF00E</option>
                        </select>
                        <br>
                        <h1>AQI 51</h1>
                        <p>Chỉ số AQI chi tiết theo thành phần không khí</p>
                        <div class="row">
                            <img src="image/anh1.PNG" alt="">
                        </div>

                        <div class="row">
                            <img src="image/anh1.PNG" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="Nong_do">
                        <select>
                            <option value="aqi">Chi cục bảo vệ môi trường</option>
                        </select>
                        <br>
                        <h1>Nồng độ</h1>
                        <p>Biểu đồ chi tiết thông số từng thành phần không khí</p>
                        <div class="row">
                            <img src="image/anh13.PNG" alt="">
                        </div>

                        <div class="row">
                            <img src="image/anh13.PNG" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bản đồ -->
    <div id="Ban_do">
        <div class="text-header">
            <h3>Bản đồ</h3>
            <hr>
        </div>
        
        <div id="Ban_do_body">
                <iframe id="map_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.945831156634!2d105.80194400045046!3d21.022816135640994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1552926175824" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- bảng quy đổi giá trị AQI -->
    <div id="Bang_quy_doi">
        <div class="text-header">
            <h3>Bảng quy đổi giá trị AQI </h3>
            <hr>
        </div>
        <div id="Bang_quy_doi_table">
            <table>
                <tr id="table-th">
                    <th>Giá trị AQI</th>
                    <th>Đánh giá</th>
                    <th>Ảnh hưởng sức khỏe</th>
                    <th>Màu sắc</th>
                </tr>
                <tr>
                    <td>0-50</td>
                    <td>TỐT</td>
                    <td>Không ảnh hưởng đến sức khỏe</td>
                    <td ><p id="xanh">XANH</p> </td>
                </tr>
                <tr>
                    <td>51-100</td>
                    <td>TRUNG BÌNH</td>
                    <td>Nhóm nhạy cảm nên hạn chế thời gian ở ngoài</td>
                    <td><p id="vang"> VÀNG</p></td>
                </tr>
                <tr>
                    <td>101-200</td>
                    <td>KÉM</td>
                    <td>Nhóm nhạy cảm nên hạn chế thời gian ở ngoài</td>
                    <td><p id="da_cam"> DA CAM</p></td>
                </tr>
                <tr>
                    <td>201-300</td>
                    <td>XẤU</td>
                    <td>Nhóm nhạy cảm tránh ra ngoài,những người khác hạn chế ở ngoài</td>
                    <td><p id="do">ĐỎ</p></td>
                </tr>
                <tr>
                    <td>Từ 301</td>
                    <td>NGUY HẠI</td>
                    <td>Mọi người nên ở trong nhà</td>
                    <td><p id="nau">NÂU</p></td>
                </tr>
            </table>
            <p class="p-long">(*)Nhóm nhạy cảm bao gồm: trẻ em, người già và những người mắc bệnh hô hấp</p>
        </div>
    </div>
    <!-- tin tức -->
    <div id="Tin_tuc">
        <div class="text-header">
            <h3>Tin tức</h3>
            <hr>
            <p>Tin tức về môi trường tại Việt Nam</p>
        </div>
        <div id="Tin_tuc_body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/anh3.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
                <div class="col-sm-4">
                    <img src="image/anh4.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
                <div class="col-sm-4">
                    <img src="image/anh5.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/anh6.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
                <div class="col-sm-4">
                    <img src="image/anh7.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
                <div class="col-sm-4">
                    <img src="image/anh8.png" alt="">
                    <p>Industrial Wind Farms</p>
                </div>
            </div>
          
                  <a id="xem-them" class="btn">XEM THÊM</a>
        
        </div>
        <div class="s-footer s">
            <span class="footer-bold">Make the right choice! </span><span class="footer-normal">Do you need a consultat
                on?</span><a href="#" class="footer-vang"> Call us now!</a>
        </div>
    </div>
    <!-- our team -->
    <div id="our_team">
        <div class="text-header">
            <h3>Our Team</h3>
            <hr>
        </div>
        <div id="our_team_body">
            <div class="row">
                <div class="col-sm-3">
                    <img src="image/anh9.PNG" alt="">
                    <p class="text-card-vang">Sandra Ferguson</p>
                    <p>CEO,Founder</p>
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <img src="image/anh10.PNG" alt="">
                    <p class="text-card-vang">Ronald Chen</p>
                    <p>Marketer</p>
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <img src="image/anh11.PNG" alt="">
                    <p class="text-card-vang">Frances Watson</p>
                    <p>Support Operator</p>
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <img src="image/anh12.png" alt="">
                    <p class="text-card-vang">Joe Myers</p>
                    <p>Head of Business Development</p>
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div id="footer">
        <div id="footer-text">
            <div class="row">
                <div class="col-sm-3">
                    <b>About Us</b>
                    <p>Lorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Repellat amet, consequuntur
                        necessitatibus dignissimos molestias dolor consequatur
                        veniam odit, at quidem, totam architecto
                        provident veritatis ex place at facilis dolore recusandae ipsam.</p>
                </div>
                <div class="col-sm-3">
                    <b>Nhà tài trợ</b>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="image/anh3.PNG" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="image/anh4.PNG" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="image/anh5.PNG" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="image/anh6.PNG" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="image/anh7.PNG" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="image/anh8.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <b>Contact</b>
                    <ul id="list-footer">
                        <li><i class="fa fa-map-marker"></i> Đại Học Bách Khoa AseanTech</li>
                        <li><i class="fa fa-phone"></i> 1-800-1234-567,<br> 1-800-6780-345</li>
                        <li><i class="fa fa-envelope"></i> mail@airsense.vn</li>
                    </ul>
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <b>Newsletter</b>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Adip eligendi perspiciat
                        impedit unde? Adipisci neque illum quisquam beatae cumque,
                        perspiciatis vero vitae. Itaque, corporis!</p>
                    <input type="text" placeholder="Enter your e-mail" class="btn-footer" id="input-email">
                    <input type="submit" value="SUBSCRIBE"  id="btn-subcribe" class="btn-footer">
                </div>
            </div>
        </div>
        <hr>
        <a href="#" id="footer-link">2019 All Rights Reserved</a>
    </div>

@endsection