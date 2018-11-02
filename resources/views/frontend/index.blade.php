@section('title')
@stop
@extends('frontend.general.master')
@section('content')
@include('frontend.includes.slider')
<section id="banner" class="lib-section-1">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="https://osimi.vn/assets/frontend/img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <a href="{{route('getChiTietDuAn')}}">
                <div data-b="0">
                    <img data-u="image" src="https://wonderfulengineering.com/wp-content/uploads/2014/05/twitter-header-photo-610x203.jpg" />
                    <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;"><b>Khu nhà ở phía tây đường 3/2</b></div>
                </div>
            </a>
            <a href="{{route('getChiTietDuAn')}}">
                <div data-b="0">
                    <img data-u="image" src="http://hodeco.vn/files/106405bc8402f00898.jpg" />
                    <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;"><b>Ecotown Phú Mỹ</b></div>
                </div>
            </a>  
            <a href="{{route('getChiTietDuAn')}}">
                <div data-b="0">
                    <img data-u="image" src="http://hodeco.vn/files/84535927d01c08453.jpg" />
                    <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;"><b>FUSION SUITES VŨNG TÀU</b></div>
                </div>
            </a> 
            <a href="{{route('getChiTietDuAn')}}">
                <div data-b="0">
                    <img data-u="image" src="http://hodeco.vn/files/829456c3f0d5dc670.jpg" />
                    <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;"><b>Chung Cư Bình Giã</b></div>
                </div>
            </a>
            <a href="{{route('getChiTietDuAn')}}">
                <div data-b="0">
                    <img data-u="image" src="http://hodeco.vn/files/30405591a4562ace9a.jpg" />
                    <div data-u="caption" data-t="7" style="position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;"><b>HODECO SEA VILLAGE</b></div>
                </div>
            </a>  
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
</section>
<section class="lib-section-3">
    <div class="section_introduce">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="#">
                            <span>
                            Giới thiệu chung 
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_introduce___image">
                            <picture>
                                <source media="(min-width: 1200px)" srcset="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png">
                                <img src="https://www.safira.com.vn/thumb/678x440/1/upload/hinhanh/221426836986282.png" class="img-responsive" alt="Lỗi Liquid: Value cannot be null.
                                    Parameter name: key">
                            </picture>
                        </div>
                        <div class="section_introduce___desc">
                            <b>SAFIRA - MỘT VIÊN NGỌC TRÂN QUÝ TỪ KHANG ĐIỀN CHO CUỘC SỐNG TRÀN NĂNG LƯỢNG</b><br>
                            Nhà là nơi để trở về, để chia sẻ tình yêu thương và tận hưởng những giây phút bình yên, tái tạo nguồn năng lượng cho ta vui sống mỗi ngày. SAFIRA hội tụ các giá trị vượt trội về vị trí, tiện ích và môi trường sống xanh, sạch, an toàn cho những gia đình trẻ hiện đại. Giá dự kiến TỪ 1,27 TỶ/CĂN (1+1PN, chưa VAT)
                            <p>
                                <i class="fa fa-hand-o-right"></i> Diện tích dự án: 2.7 ha
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Tổng căn hộ: 1570
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Quy mô: 4 tháp - 22 tầng                                         </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Diện tích mảng xanh: 6500 m2
                            </p>
                            <!-- <div class="libra-health___viewmore">
                                <a href="" title="Giới thiệu">
                                <span>Xem thêm</span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-4">
    <div class="section_service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="/dich-vu">
                            <span>
                            Vị Trí Dự Án
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-4 col-lg-8">
                                <div class="section_service___list">
                                    <img src="https://www.safira.com.vn/upload/hinhanh/bd-8497.png" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-8 col-lg-4">
                                <div class="section_service___desc">
                                    <p>Safira tọa lạc tại mặt tiền đường N6 (lộ giới 20m) kết nối vào đường N5 (lộ giới 20m) tiếp giáp đường Võ Chí Công, ngay góc giao cao tốc TP.HCM - Long Thành - Dầu Giây; cách trung tâm quận 1 và khu đô thị Phú Mỹ Hưng từ 10 đến 15 phút di chuyển. Safira liền kề khu dân cư văn minh hiện hữu Mega Residence, Mega Ruby và khu biệt thự cao cấp Lucasta… Từ Safira có thể dễ dàng di chuyển đến:</p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> Khu công nghệ cao Q9
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> Đại học Fulbright
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> Parkson Cantavil, Metro, siêu thị Big C
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> Trường Quốc tế Úc, Mỹ,…
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> Bệnh viện Quốc Tế
                                    </p>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="#">
                            <span>
                            Đối Tác Chiến Lược
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_product_type_3 owl-theme owl-carousel nav-enable nav-left-right" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="1" data-margin="30" data-nav="true" data-loop="true" data-autoplay="true">
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" data-lazyload="https://www.ccjabersauto.com/templates/1006/images/400x250.gif" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="/san-pham-khuyen-mai">
                            <span>
                            Tin Tức Cập Nhật
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_product_type_3 owl-theme owl-carousel nav-enable nav-left-right" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-margin="30" data-nav="true">
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img class="img-responsive" src="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" data-lazyload="https://safira.com.vn/upload/images/IMG_8589_nen.jpg" alt="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTuc')}}" title="Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon">
                                            Lễ trao giải PropertyGuru Vietnam Property Awards 2018 diễn ra vào ngày 22/6/2018 tại khách sạn InterContinental Asiana Saigon
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
