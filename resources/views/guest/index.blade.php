<!DOCTYPE html>
<html>
<head>
    <title>Airsense</title>
    <link rel="stylesheet" href="{{url('/css/air.css')}}">
    <link rel="stylesheet" href="{{url('/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">
       {{-- Header --}}
        <nav class="navbar navbar-expand-lg navbar-light">
            <span class="navbar-brand mb-0 h1">
                <a href="/">
                    <img src="image/logoo.PNG" alt="AirSense">
                </a>
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">VỀ CHÚNG TÔI</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">ENGLISH</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- Main Page --}}
        <div class="container" id="main">
            <div class="row">
                <div class="col-sm-7">
                    <div id="map-canvas"></div>
                </div>
                <div class="col-sm-5">
                    <div class="mb-2">
                        <b><i class="fa fa-bars"></i> Chọn điểm đo</b>
                    </div>
                    <select class="custom-select mb-4">
                        <option value="">Chi cục bảo vệ môi trường</option>
                    </select>
                    <p>Số liệu đến ngày 07-06-2019</p>
                    <div class="text-center" id="aqi_value">
                        <h3>AQI 91</h3>
                    </div>
                    <div id="chart_div"></div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-6  text-center">
                    <h5>Chỉ số AQI chi tiết theo thành phần không khí</h5>
                    <div id="chart_div_1"></div>
                    <div id="chart_div_2"></div>
                </div>
                <div class="col-sm-6 text-center">
                    <h5>Biểu đồ chi tiết thông số từng thành phần không khí</h5>
                    <div id="chart_div_3"></div>
                    <div id="chart_div_4"></div>
                </div>
            </div>

            <div class="row mt-4" style="justify-content: center;">
                <div>
                    <div class="text-header mb-4">
                        <h3>Bảng quy đổi giá trị AQI </h3>
                        <hr>
                    </div>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Giá trị AQI</th>
                                <th scope="col">Đánh giá</th>
                                <th scope="col">Ảnh hưởng tới sức khỏe</th>
                                <th scope="col">Màu sắc</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">0-50</th>
                                <td>TỐT</td>
                                <td>Không ảnh hưởng đến sức khỏe</td>
                                <td><p id="xanh">XANH</p></td>
                            </tr>
                            <tr>
                                <th scope="row">51-100</th>
                                <td>TRUNG BÌNH</td>
                                <td>Nhóm nhạy cảm nên hạn chế thời gian ở ngoài</td>
                                <td><p id="vang"> VÀNG</p></td>
                            </tr>
                            <tr>
                                <th scope="row">101-200</th>
                                <td>KÉM</td>
                                <td>Nhóm nhạy cảm nên hạn chế thời gian ở ngoài</td>
                                <td><p id="da_cam"> DA CAM</p></td>
                            </tr>
                            <tr>
                                <th scope="row">201-300</th>
                                <td>XẤU</td>
                                <td>Nhóm nhạy cảm tránh ra ngoài,những người khác hạn chế ở ngoài</td>
                                <td><p id="do">ĐỎ</p></td>
                            </tr>
                            <tr>
                                <th scope="row">Từ 301</th>
                                <td>NGUY HẠI</td>
                                <td>Mọi người nên ở trong nhà</td>
                                <td><p id="nau">NÂU</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-4" style="justify-content: center">
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
                    <div class="text-center">
                        <button class="btn btn-outline-success">
                            <b>XEM THÊM</b>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-4" style="justify-content: center">
                <div class="text-header mb-4">
                    <h3>Our Team</h3>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
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
                    <div class="col-lg-3 col-sm-6 col-12">
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
                    <div class="col-lg-3 col-sm-6 col-12">
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
                    <div class="col-lg-3 col-sm-6 col-12">
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
   </div>
   <div id="footer">
        <div class="container">
            <div class="row pt-4">
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
        <div class="container">
            <a href="#" id="footer-link">2019 All Rights Reserved</a>
        </div>
    </div>


    {{-- Map Script --}}
    {{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAC740QttEVaZ87JB75x5aQmAa_PPRAuU&callback=initMap">
    </script> --}}
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script>
    <script>
        if (document.getElementById('map-canvas')){
            // Coordinates to center the map
            var myLatlng = new google.maps.LatLng(21.5, 105.8);

            // Other options for the map, pretty much selfexplanatory
            var mapOptions = {
                zoom: 14,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Attach a map to the DOM Element, with the defined settings
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        }
    </script>
    {{-- Chart --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'AQI');

            data.addRows([
                [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
                [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
                [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
                [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
                [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
                [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
                [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
                [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
                [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
                [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
                [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
                [66, 70], [67, 72], [68, 75], [69, 80]
            ]);

            var options = {
                // hAxis: {
                // title: 'Time'
                // },
                vAxis: {
                    title: 'PM2.5 AQI'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            var chart1 = new google.visualization.LineChart(document.getElementById('chart_div_1'));
            var chart2 = new google.visualization.LineChart(document.getElementById('chart_div_2'));
            var chart3 = new google.visualization.LineChart(document.getElementById('chart_div_3'));
            var chart4 = new google.visualization.LineChart(document.getElementById('chart_div_4'));

            chart.draw(data, options);
            chart1.draw(data, options);
            chart2.draw(data, options);
            chart3.draw(data, options);
            chart4.draw(data, options);
        }
    </script>
</body>

</html>