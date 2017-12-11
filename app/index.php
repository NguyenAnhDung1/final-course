<?php session_start(); ?>
<?php
 define("URL_IMAGE", "http://localhost/final-course/public/uploads/");?>
<?php require_once "../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>SHOP</title>
    <title>SHOP MSI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">
    <link href="../public/css/menu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
    <script src="../public/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton|Concert+One" rel="stylesheet">
</head>
<body>
    <div class="row dau1" style="background-color:#f2f2f2;"> <!-Phần đầu 1 ->
        <div class="container">
            <div class="row">            
                <div id="daut" class="col-md-6">
                    <select style="color: black">
                        <option>Chọn Ngôn Ngữ</option>
                        <option>Tiếng Việt</option>
                        <option>Tiếng Anh</option>
                    </select>
                        <h7 id="bd">Hotline 0123 456 789</h7>
                        
                    </div>
            <div id="daup" class="col-md-6"> 
                <?php if(isset($_SESSION["login"])) { ?>
                 <a class="nav-link" href="admin/logout.php">&nbsp;Logout&nbsp;</a>
                 <a class="nav-link" href="admin/index.php" >Admin Page&nbsp;</a>
                 <?php }else{ ?> 
                 <a href="dangnhap.html" style="float: right; color: black"><img src="../public/img/icondn.png">Đăng Nhập</a>
                 <?php } ?>
                
            </div>
        </div>
        </div>
    </div>
        <div class="container">
            <div class="col-md-3" id="logoh">
                <a href="index.html"><img style="height: 90px; width: 255px" src="../public/img/logohome.png"></a>
            </div>
            <div class="col-md-5">
                <div style="padding-top: 22px">
                    <form action="">
                        <input type="search" placeholder="Tìm kiếm sản phẩm/mã sản phẩm ...">
                    </form>
                </div>
                <div id="dchi" style="padding-top: 10px">
                    Địa chỉ : 15CDTH11, Trường Cao Đẳng Công Nghiệp , TP.HUẾ
                </div>
            </div>
            <div class="col-md-4">
                <div id="lgicon">
                    <img src="http://hstatic.net/716/1000026716/1000149002/giaohang.png?v=124"><small>Giao hàng toàn quốc</small>
                    <img src="../public/img/khien.png"><small>Giao dịch an toàn</small>
                </div>
            </div>
        </div> <!-Phần đầu 2 ->
    </div>
    <div class="row dau3" style="padding-top: 10px"> <!-Đầu 3->
        <div class="container" >
            <ul id="nav">
                <li class="chon"><a href="index.html" style="font-size: 17px">Trang Chủ</a></li>
                <li><a href="" style="font-size: 17px">Tai Nghe</a></li>
                <li><a href="" style="font-size: 17px">Bàn Phím</a></li>
                <li><a href="" style="font-size: 17px">Chuột</a></li>
                <li><a href="" style="font-size: 17px">Mousepad</a></li>
                <li><a href="" style="font-size: 17px">Tin Tức</a></li>
                <li><a href="" style="font-size: 17px">Liên Hệ</a></li>
            </ul>
        </div>
            
        
    </div><!-end ->

    <div id="giuaqc" style="padding-top: 10px">
        <div class="container">
            <div class="col-md-9 col-xs-9" style="height: 300px">
                <img style="height: 100%;width: 100%" src="../public/img/gif1.gif">
            </div>
            <div class="col-md-3 col-xs-3" style="height:300px">
                <img style="height: 100%;width: 100%" src="../public/img/logomsi2.jpg"> 
            </div>
        </div> <!-Đoạn đầu 1 của trang-><!-Phần ảnh ->
    </div>
    <div class="row main" style="padding-top: 15px"> <!-Phần giửa chính->
        <div class="container">
            <div class="col-md-9 col-xs-9">
                <div class="hangmain2">
                    <div style="float:left;">
                        <b style="font-size: 25px;color: #cc0000;"><img style="width: 50px" src="https://asset.msi.com/global/picture/app/plus-icon.png">MSI GAMING &nbsp;&nbsp;&nbsp;&nbsp;</b>
                        <select style="padding: 15px">
                            <option>Sắp xếp sản phẩm theo :</option>
                            <option>Giá tăng dần</option>
                            <option>Giá giảm dần</option>
                            <option>Sản phẩm mới nhât</option>
                        </select>
                    </div>
                    <div style="float:right;margin: 15px 10px ">
                    <span style="color: white">Trang:</span>: <b style="color: red">1</b>&nbsp;<a href="">2</a>&nbsp;<a href=""><img style="height: 15px;width: 15px" src="https://cdn3.iconfinder.com/data/icons/glyph/227/Button-Next-512.png" ></a>
                    </div>
                </div>
                <div class="hangsp col-md-12 " style="padding: 5px"> <!-Hàng sản phẩm 1->
                    <div class="col-md-3 bdsp chon">
                        <a href="" title="-CPU: Intel Core i7-6700HQ (6M Cache, 8x2.6GHz up to 3.50 GHz) 14nm, 45W
                        -RAM: 2x8GB DDR3L 2133Mhz
                        -HDD: 1TB SATA (7200RPM) + 128GB SSD
                        -VGA: Nvidia GTX1060 6GB GDDR5
                        -LCD: 17.3inch LED Chống chói FullHD (1920x1080), IPS Camera 1.0MP
                        -Siêu mỏng + Bàn phím w backlight Multicolor (Steelseries)
                        -Chính hãng MSI. Bảo Hành 2 năm "
                        ><img src="../public/img/sp1.jpg" style="width: 100%;height: 180px"></a>
                        <div id="">
                            <span class="so5"></span>
                            <span class="so2"></span>
                            <span class="cham"></span>
                            <span class="so2"></span>
                            <span class="so2"></span>
                            <span class="so2"></span>
                            <span class="cham"></span>
                        </div>
                        <p style="color: red">Mã SP: MSI GT72VR 6RD - 231XVN</p>
                        <div style="font-size: 15px; color: blue">
                        Còn hàng
                            <a href=""><img src="../public/img/cart.png"></a>
                            <a href="" class="mua">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-3" >
                <div class="boxphai">

                </div>
                <div class="boxcheck">
                    <h4><b>CPU</b></h4>
                    <ul>
                        <li><input type="checkbox" >Intel Core i7</li>
                        <li><input type="checkbox" >Intel Core i5</li>
                        <li><input type="checkbox" >Intel Core i3</li>
                    </ul>
                    <h4><b>HDD</b></h4>
                    <ul>
                        <li><input type="checkbox" >1TB Sata + Super Raid 256GB(m.2 SATA)</li>
                        <li><input type="checkbox" >1TB Sata + 128GB SSD</li>
                        <li><input type="checkbox" >1TB</li>
                        <li><input type="checkbox" >1TB 7200 rpm + Super Raid 3 512GB SSD (M.2 sata)</li>
                    </ul>
                    <h4><b>RAM</b></h4>
                    <ul>
                        <li><input type="checkbox" >4GB</li>
                        <li><input type="checkbox" >8GB</li>
                        <li><input type="checkbox" >16GB</li>
                        <li><input type="checkbox" >32GB</li>
                    </ul>
                    <h4><b>MÀN HÌNH</b></h4>
                    <ul>
                        <li><input type="checkbox" >14"</li>
                        <li><input type="checkbox" >17,3"</li>
                        <li><input type="checkbox" >15,6"</li>
                        <li><input type="checkbox" >18,4"</li>
                    </ul>
                    <h4><b>HỆ ĐIỀU HÀNH</b></h4>
                    <ul>
                        <li><input type="checkbox" >Window 10</li>
                        <li><input type="checkbox" >Window 8.1</li>
                        <li><input type="checkbox" >Window 7</li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="phancuoi"> <!-Phần cuối ->
        <div class="container">
            <div class="col-md-5"><div>
                    <img src="https://asset.msi.com/global/picture/article/article_147486005857e8941a83c062.png" style="width: 70px;height: 70px">
                    <marquee direction="left"><p style="color: #eff2f6;font-size: 17px"><b>SHOP CHUYÊN CUNG CẤP LAPTOP MSI GAMING</b></p></marquee>
                </div>
                <div style="color: white"> 
                    Địa chỉ: 15CDTH11<br>
                    Email: EMAIL@gmail.com<br>
                    Hotline : 0123 456 789
                    <img src="http://woodstock.temashdesign.com/electronics/wp-content/themes/woodstock/images/payment_cards.png" style="width: 100%">
                </div></div>
            <div class="col-md-3">
                <h4 class="bdb">CỘNG ĐỒNG</h4>
                <a href=""><img src="img/fb.png"></a>
                <a href=""><img src="img/yb.png"></a>
                <a href=""><img src="img/tw.png"></a>
            </div>
            <div class="col-md-4">
                <div>
                    <h4 class="bdb">BẢN ĐỒ CỦA SHOP</h4>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:380px;'><div id='gmap_canvas' style='height:300px;width:380px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://buywebsitetrafficreviews.org/trafficwebsites/">know more about the best traffic sellers!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(16.4573959,107.58787210000003),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(16.4573959,107.58787210000003)});infowindow = new google.maps.InfoWindow({content:'<strong>SHOP MSI</strong><br>15CDTH11-TRƯỜNG CĐCN HUẾ<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>