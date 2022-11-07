 <!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>SMart</title>
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets/frontend/100/047/633/themes/517833/assets/favicon221b.png" type="image/x-icon" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62caefdf7b967b117998e03d/1g7kbi15k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">User</h1>
    <div class="row">
      <!--<div class="col-xs-12 col-md-3">
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anhle1.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
          <div class="col-md-12"><img src="assets/frontend/images/anhle2.jpg" class="img-thumbnail"></div>
        </div>
        <div class="row">
          <div class="col-md-12"><img src="assets/frontend/images/anhle3.jpg" class="img-thumbnail"></div>
        </div>
      </div> -->
      <!-- class="col-md-9" -->
      <div> 
        <!-- slide -->
        <div class="owl-slider">
        
          <div class="item" > 
            <!-- ============================ -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active"> <img src="assets/frontend/images/anhbia2.jpg" alt="Los Angeles"> </div>
                <div class="item"> <img src="assets/frontend/images/anhbia3.jpg" alt="Los Angeles"> </div>
                <div class="item"> <img src="assets/frontend/images/anhbia.jpg" alt="Chicago"> </div>
                <!-- <div class="item"> <img src="assets/frontend/images/anhbia4.jpg" alt="New York"> </div> -->
              </div>
              
              <!-- Left and right controls --> 
            </div>
            <!-- ============================ --> 
          </div>
        </div>
        <!-- end slide --> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12"> 
        <!-- main -->
        
        <?php echo $this->view; ?> 
        
        <!-- end main --> 
      </div>
    </div>
  </div>
</div>
<!-- <div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao hàng miễn phí</h3>
          <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
        <div class="info">
          <h3>Khuyến mại</h3>
          <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="assets/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
        <div class="info">
          <h3>Hoàn trả lại tiền</h3>
          <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
        </div>
      </div>
    </div>
  </div>
</div> -->
<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>THÔNG TIN SMART</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/he-thong-sieu-thi">Hệ thống 350 Siêu thị (8:00-21:30)</a></li>
            <li><a href="https://mediamart.vn/thong-tin-chung/gioi-thieu-cong-ty">Giới thiệu công ty</a></li>
            <li><a href="https://mediamart.vn/tuyen-dung">Tuyển dụng</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-thanh-toan">Phương thức thanh toán</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Hỗ trợ khách hàng</h3>
          <ul class="list-unstyled">
            <li><a href="https://mediamart.vn/ho-tro-mua-hang/huong-dan-mua-hang-online">Hướng dẫn mua hàng Online</a></li>
            <li><a href="https://mediamart.vn/uu-dai-tra-gop">Mua hàng trả góp</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-doi-tra-hang">Chính sách bảo hành, đổi trả</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/chinh-sach-giao-nhan">Giao hàng và lắp đặt</a></li>
            <li><a href="https://mediamart.vn/chinh-sach-chung/quy-dinh-bao-mat">Chính sách bảo mật TT cá nhân</a></li>
            <li><a href="https://tracuuhoadon.mediamart.com.vn/">In hóa đơn điện tử</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Tổng đài gọi hỗ trợ</h3>
          <ul class="list-unstyled">
            <li><a href="tel:19006788">Bán hàng: 1900 6788</a></li>
            <li><a href="tel:19006743">Bảo hành: 1900 6743</a></li>
            <li><a href="tel:19006741">Khiếu nại: 1900 6741</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Theo dõi SMart trên</h3>
          <ul class="list-unstyled">
            <li>
              <a style="margin-left: 10px" href="https://www.facebook.com/DienmayMediaMart" title="SMart Facebook Fanpage"> 
                <img src="assets/frontend/images/fb.png" alt="SMart Facebook Fanpage">
              </a>
              <a style="margin-left: 10px" href="https://www.youtube.com/c/CongtyMediamart" title="SMart Youtube Channel"> 
                <img src="assets/frontend/images/yt.png" alt="SMart Youtube Channel"> 
              </a>
              <a style="margin-left: 10px" href="https://www.tiktok.com/@mediamart.official" title="SMart Tiktok Channel"> 
                <img src="assets/frontend/images/tt.png" alt="SMart Tiktok Channel"> 
              </a>
            </li>
            <h3 style="margin-top: 15px">Theo dõi SMart trên</h3>
            <li>
              <a href="https://apps.apple.com/vn/app/mediamartvn/id1572630752" title="SMart iOS App"> 
                <img style="witdh: 45%"  src="https://cdn.mediamart.vn/images/menu/mediamart-ios-app_4b5435b9.png" alt="SMart iOS App">
              </a>
              <a href="#" title="SMart Android App"> 
              <img style="witdh: 45%" src="https://cdn.mediamart.vn/images/menu/mediamart-android-app_0f2f434d.png" alt="SMart Android App"> 
              </a>
            </li>
          </ul>
          
        </div>
      </div>
      <div class="payments-method"> <img src="assets/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> © Bản quyền User</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Bước 1: Chèn đoạn mã HTML này trong phần footer-->

<div class="social-button">
    <div class="social-button-content">
       <a href="tel:0981481368" class="call-icon" rel="nofollow">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
          <div class="animated alo-circle"></div>
          <div class="animated alo-circle-fill  "></div>
           <span>Hotline: 098 148 1368</span>
        </a>
        <a href="sms:0981481368" class="sms">
          <i class="fa fa-weixin" aria-hidden="true"></i>
          <span>SMS: 098 148 1368</span>
        </a>
        <a href="https://www.facebook.com/Ngocthang.net/" class="mes">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
          <span>Nhắn tin Facebook</span>
        </a>
        <a href="http://zalo.me/0981481368" class="zalo">
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span>Zalo: 098.148.1368</span>
        </a>
    </div>
       
    <a class="user-support">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <div class="animated alo-circle"></div>
      <div class="animated alo-circle-fill"></div>
    </a>
  </div>

  <!--Bước 2: Hãy CSS một chút cho nó bắt mắt nhé-->
  <style>
    .social-button{
      display: inline-grid;
        position: fixed;
        bottom: 15px;
        left: 45px;
        min-width: 45px;
        text-align: center;
        z-index: 99999;
    }
    .social-button-content{
      display: inline-grid;   
    }
    .social-button a {padding:8px 0;cursor: pointer;position: relative;}
    .social-button i{
      width: 40px;
        height: 40px;
        background: #43a1f3;
        color: #fff;
        border-radius: 100%;
        font-size: 20px;
        text-align: center;
        line-height: 1.9;
        position: relative;
        z-index: 999;
    }
    .social-button span{
      display: none;
    }
    .alo-circle {
        animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-fill-mode: both;
        animation-name: zoomIn;
        width: 50px;
        height: 50px;
        top: 3px;
        right: -3px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        opacity: .1;
        border-color: #0089B9;
        opacity: .5;
    }
    .alo-circle-fill {
      animation-iteration-count: infinite;
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-name: pulse;
        width: 60px;
        height: 60px;
        top: -2px;
        right: -8px;
        position: absolute;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        background-color: rgba(0, 175, 242, 0.5);
        opacity: .75;
    }
    .call-icon:hover > span, .mes:hover > span, .sms:hover > span, .zalo:hover > span{display: block}
    .social-button a span {
        border-radius: 2px;
        text-align: center;
        background: rgb(103, 182, 52);
        padding: 9px;
        display: none;
        width: 180px;
        margin-left: 10px;
        position: absolute;
        color: #ffffff;
        z-index: 999;
        top: 9px;
        left: 40px;
        transition: all 0.2s ease-in-out 0s;
        -moz-animation: headerAnimation 0.7s 1;
        -webkit-animation: headerAnimation 0.7s 1;
        -o-animation: headerAnimation 0.7s 1;
        animation: headerAnimation 0.7s 1;
    }

    .social-button a span:before {
      content: "";
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 10px 10px 10px 0;
      border-color: transparent rgb(103, 182, 52) transparent transparent;
      position: absolute;
      left: -10px;
      top: 10px;
    }
  </style>

  <!--Bước 3: Thêm 1 chút hiệu ứng vào nữa là Ok rồi!-->
  <script>
  $(document).ready(function(){
    $('.user-support').click(function(event) {
      $('.social-button-content').slideToggle();
    });
    });
</script>
</body>
</html>