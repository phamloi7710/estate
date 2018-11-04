@section('title')
@stop
@extends('frontend.general.master')
@section('content')
@include('frontend.includes.slider')
<section id="banner" class="lib-section-1">
    <div id="jssor_1" class="jssor_1">
        <div data-u="loading" class="jssorl-009-spin loadding-slider">
            <img class="loadding-spin-slider" src="{{url('')}}/assets/frontend/img/spin.svg" />
        </div>
        <div class="jssorl-item" data-u="slides">
            @foreach($slider as $value)
            <a href="{{$value->url}}">
                <div data-b="0">
                    <img data-u="image" src="{{url('')}}{{$value->image}}">
                    <div class="slider-frontend" data-u="caption" data-t="7" style=""><b>{{$value->title}}</b></div>
                </div>
            </a>
            @endforeach
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
                            TỔNG QUAN
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_introduce___image">
                            <picture>
                                <source media="(min-width: 1200px)" srcset="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg">
                                <img src="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg" class="img-responsive" alt="Lỗi Liquid: Value cannot be null.
                                    Parameter name: key">
                            </picture>
                        </div>
                        <div class="section_introduce___desc">
                            <b>SAIGON INTELA "MANG ĐẾN PHONG CÁCH SỐNG KHÁC BIỆT"</b><br><br>
                            Saigon Intela chào đón bạn với những giá trị sống đích thực của một cuộc sống hiện đại. Hãy cùng người thân yêu tận hưởng món quà từ công nghệ cao, từ những tiện ích tối ưu, vượt trội chưa từng có, cùng đón chào ngày mới với nhiều điều diệu kỳ.
                            <p>
                                <i class="fa fa-hand-o-right"></i> Tên dự án: Sài Gòn Intela
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Chủ đầu tư: LDG Group
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Đơn vị phân phối độc quyền: Công ty CP Bất Động Sản 3C</p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Số lượng căn hộ: 1068 căn
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Diện tích đất: 9,016 m2
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Quy mô dân số: 2,200 người
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Mật độ xây dựng: 34,80%
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Hệ số sử dụng đất: 8,27
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Chiều cao: 24 tầng (2 Block)
                            </p>
                            <p>
                                <i class="fa fa-hand-o-right"></i> Tổng diện tích sàn: 74,599 m2 (không bao gồm 2 tầng hầm và sân thượng)
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
                            VỊ TRÍ SÀI GÒN INTELA
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-4 col-lg-8">
                                <div class="section_service___list">
                                    <img src="{{url('')}}/assets/uploads/location-img.jpg" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-8 col-lg-4">
                                <div class="section_service___desc">
                                    <p>Sở hữu vị trí đắc địa, nằm ngay mặt tiền đại lộ Nguyễn Văn Linh, cách trung tâm thành phố khoảng 10 phút, kết nối vào khu đô thị Phú Mỹ Hưng và liền kề nhiều khu dịch vụ tiện ích hiện hữu... nên cư dân tại Khu căn hộ thông minh ven sông Saigon Intela sẽ rất thuận lợi trong việc di chuyển cũng như tiếp cận với các tiện nghi hiện đại.</p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> 5 phút để tới Tuyến Metro Số 5,  ROSA MART 
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> 10 phút để tới Bệnh viện Chợ Rẫy, Bệnh viện Nhiệt Đới, Đại học Văn Hiến, Siêu thị CO.OP MART.
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> 15 phút để tới Đại học RMIT, Chợ Bình Điền, Bệnh viện FV, Khu đô thị PHÚ MỸ HƯNG, Đại học Tôn Đức Thắng, Khu dân cư Trung Sơn.
                                    </p>
                                    <p>
                                        <i class="fa fa-hand-o-right"></i> 30 phút để tới Sân bay Tân Sơn Nhất và trung tâm Thành Phố
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-5">
    <div class="section_news_slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="/dich-vu">
                            <span>
                            TIỆN ÍCH NỘI KHU ĐẲNG CẤP
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="section_service___list">
                                    <img src="{{url('')}}/assets/uploads/ho-boi-view1-L.jpg" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="section_service___desc">
                                    <h4><b style="color: #32A22D">TẬN HƯỞNG CUỘC SỐNG ĐẲNG CẤP TẠI CĂN HỘ THÔNG MINH</b></h4>
                                    <p>
                                        Với mong muốn tạo cho cư dân <b>căn hộ Sài Gòn Intela</b> mọi tiện ích thiết yếu nhất mà không cần phải đi đâu xa bởi, tất cả đều có ngay gần nhà, <b>chủ đầu tư LDG Group</b> đã kiến tạo nên những tiện ích phong phú và đa dạng như: nhà trẻ, siêu thị tiện lợi, hồ bơi, khu vui chơi trẻ em, gym, spa, nhà hàng café… Saigon Intela luôn được trang bị hệ thống an ninh khép kín, PCCC, bảo vệ 24/24h mang lại cuộc sống bình yên nhất cho giấc ngủ của cư dân.
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <img src="http://www.canhosaigonintela.vn/template/tint/images/utility-big-1.jpg" alt="">
        </div>
    </div>
</section> -->

<section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="/dich-vu">
                            <span>
                            THƯ VIỆN ẢNH
                            </span>
                            </a>
                        </h2>
                    </div>
                    <section class="portfolio" id="portfolio">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="gallery_product filter">
                                        <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/ho-boi-view1-L.jpg">
                                            <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/ho-boi-view1-L.jpg">
                                            <div class='img-info'>
                                                <h3>Hồ Bơi</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-bo-song.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-bo-song.jpg">
                                                    <div class='img-info'>
                                                        <h3>Công Viên Nước Bờ Sông</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/skybar.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/skybar.jpg">
                                                    <div class='img-info'>
                                                        <h3>Skybar</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 16px;">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/khu-sinh-hoat-cong-dong.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/khu-sinh-hoat-cong-dong.jpg">
                                                    <div class='img-info'>
                                                        <h3>Khu Sinh Hoạt Cộng Đồng</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/trung-tam-thuong-mai.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/trung-tam-thuong-mai.jpg">
                                                    <div class='img-info'>
                                                        <h3>Khu Trung Tâm Thương Mại</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 16px;">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-co-tich-l.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-co-tich-l.jpg">
                                                    <div class='img-info'>
                                                        <h3>CÔNG VIÊN SAIGON INTELA</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="gallery_product filter">
                                                <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-gia-dinh-l.jpg">
                                                    <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-gia-dinh-l.jpg">
                                                    <div class='img-info'>
                                                        <h3>CÔNG VIÊN GIA ĐÌNH FAMILY SITE</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="gallery_product filter">
                                        <a class="fancybox" rel="ligthbox" href="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-co-tich-l.jpg">
                                            <img class="img-responsive" alt="" src="http://www.canhosaigonintela.vn/template/tint/images/cong-vien-co-tich-l.jpg">
                                            <div class='img-info'>
                                                <h3>Công Viên Xì Trum</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-6">
    <div class="section_service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="/dich-vu">
                            <span>
                            8 ĐIỀU KHÁC BIỆT
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section_service___list">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="THIẾT KẾ KHÔNG GIAN THÔNG MINH">
                                                <i class="fas fa-home" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="THIẾT KẾ KHÔNG GIAN THÔNG MINH">
                                                    <span>THIẾT KẾ KHÔNG GIAN THÔNG MINH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="TRANG BỊ NỘI THẤT THÔNG MINH">
                                                <i class="fas fa-bed" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="TRANG BỊ NỘI THẤT THÔNG MINH">
                                                    <span>TRANG BỊ NỘI THẤT THÔNG MINH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG">
                                                <i class="fas fa-car" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG">
                                                    <span>HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="HỆ THỐNG ĐIỆN CẢM BIẾN">
                                                <i class="fas fa-hand-pointer" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="HỆ THỐNG ĐIỆN CẢM BIẾN">
                                                    <span>HỆ THỐNG ĐIỆN CẢM BIẾN</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="QUẢN LÝ KHU CĂN HỘ SMARTCITY">
                                                <i class="fas fa-cogs" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="QUẢN LÝ KHU CĂN HỘ SMARTCITY">
                                                    <span>QUẢN LÝ KHU CĂN HỘ SMARTCITY</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="CÔNG NGHỆ NĂNG LƯỢNG SẠCH">
                                                <i class="fas fa-solar-panel" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="CÔNG NGHỆ NĂNG LƯỢNG SẠCH">
                                                    <span>CÔNG NGHỆ NĂNG LƯỢNG SẠCH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM">
                                                <i class="fas fa-users" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM">
                                                    <span>KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="MỞ KHÓA CỦA BẰNG VÂN TAY">
                                                <i class="fas fa-fingerprint" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="MỞ KHÓA CỦA BẰNG VÂN TAY">
                                                    <span>MỞ KHÓA CỦA BẰNG VÂN TAY</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="section_service___desc">
                                    <h2 style="color: #32a22d">CĂN HỘ SMART CITY TÍCH HỢP CÔNG NGHỆ</h2>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<style>
    .gallery-title{
    font-size: 36px;
    color: #3F6184;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.filter-button{
    font-size: 18px;
    border: 2px solid #3F6184;
    padding:5px 10px;
    text-align: center;
    color: #3F6184;
    margin-bottom: 30px;
    background:transparent;
}
.filter-button:hover,
.filter-button:focus,
.filter-button.active{
    color: #ffffff;
    background-color:#3F6184;
    outline:none;
}
.gallery_product{
    margin: 0px;
    padding:0;
    position:relative;
}
.gallery_product .img-info{
    position: absolute;
    background: rgba(0,0,0,0.5);
    left: 0;
    right: 0;
    bottom: 0;
    padding: 20px;
    overflow:hidden;
    color:#fff;
    top:0;
    display:none;
       -webkit-transition: 2s;
    transition: 2s;
}

.gallery_product:hover .img-info{
    display:block;
   -webkit-transition: 2s;
    transition: 2s;
}
.img-info h3{
    color: #fff;
}
/*  end gallery */
</style>
<script>
    /*  gallery */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

                if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });
});
/*  end gallery */

$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
</script>

<section class="lib-section-9">
    <div class="section_news_slide">
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
