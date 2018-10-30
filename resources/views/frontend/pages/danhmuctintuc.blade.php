
@section('content')
@section('title')
@stop
@extends('frontend.general.master')
@section('content')
<section class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <li class="home">
                        <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                    </li>
                    <li>
                        <strong itemprop="title">Danh Mục Tin Tức</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="collection-template">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-md-push-4 col-lg-push-3">
                <div class="article-lists">
                    <h1 class="title-head blog-title">
                        <span>Danh Sách Tin Tức</span>
                    </h1>
                    <div class="fw">
                        <article class="article-item blog-article-item">
                            <div class="article-thumbnail image-hover-1">
                                <a href="{{route('getChiTietDuAn')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                <img src="https://lh3.googleusercontent.com/nnRmCRKlSGvjPuUhHDwHOpRcCGGXsS8KH7reU_kYEaGFoPydUq1A7Do7lSIIBu9LxloHdA7_4e4F8hoL8YUnjJkGCXc_drhueGZZ_k9napfJNLASgMJXuQa1J7T3VQMbvXQFL0tvTC2sGB_YKTmt9JKd4CrCh5qq8l8sq_jSL6M5om-5Lcap9mWULfv0eQ6BFkZ0GIyBEn3gogvj1hSss0VVTHtfhB9ZIq8zjZ5OiR1ik46r3l2T006ZLcWbtzEmwfaHkGA9hMBKdJRHtB_XUkduUzWP3vn7HXKyTX0MqllSNuc7CvKbdWo3Weae3yk9wxkQd65agxFrdXtn_7iA71XVpqbx_s3csll5WWibb2cEbaqCoMXMFAgSRlUKCitkHbMSw5T3zu0d1oSKRLVrGgny1xCuayyJVgBScu-P-t7w5S6zqDxsH2pgAcVlLdBrMT3Ird_cbmVcRDDPRywoZF74iEPhNH8As1iUbEa16jDDS5nOW7uH-OhZIrzT61yDpaR5bmVD_8fj-CDGwgQ6LPLzedtcBDBAyxT17ZobayfQFOCtKf_Kdmxw9ytrTo4l7JO8lztR6wRNfbqp17---t3EGeSYwFCP4j_BFc8UfaZqrf5NLubwkr9g0k87RBAW28TEIBD2dEZmwO-fuemeQvgW--uqqPPj=w960-h638-no" data-lazyload="https://lh3.googleusercontent.com/nnRmCRKlSGvjPuUhHDwHOpRcCGGXsS8KH7reU_kYEaGFoPydUq1A7Do7lSIIBu9LxloHdA7_4e4F8hoL8YUnjJkGCXc_drhueGZZ_k9napfJNLASgMJXuQa1J7T3VQMbvXQFL0tvTC2sGB_YKTmt9JKd4CrCh5qq8l8sq_jSL6M5om-5Lcap9mWULfv0eQ6BFkZ0GIyBEn3gogvj1hSss0VVTHtfhB9ZIq8zjZ5OiR1ik46r3l2T006ZLcWbtzEmwfaHkGA9hMBKdJRHtB_XUkduUzWP3vn7HXKyTX0MqllSNuc7CvKbdWo3Weae3yk9wxkQd65agxFrdXtn_7iA71XVpqbx_s3csll5WWibb2cEbaqCoMXMFAgSRlUKCitkHbMSw5T3zu0d1oSKRLVrGgny1xCuayyJVgBScu-P-t7w5S6zqDxsH2pgAcVlLdBrMT3Ird_cbmVcRDDPRywoZF74iEPhNH8As1iUbEa16jDDS5nOW7uH-OhZIrzT61yDpaR5bmVD_8fj-CDGwgQ6LPLzedtcBDBAyxT17ZobayfQFOCtKf_Kdmxw9ytrTo4l7JO8lztR6wRNfbqp17---t3EGeSYwFCP4j_BFc8UfaZqrf5NLubwkr9g0k87RBAW28TEIBD2dEZmwO-fuemeQvgW--uqqPPj=w960-h638-no" class="img-responsive" alt="Du Lịch Đại Dương">
                                </a>
                            </div>
                            <div class="article-info">
                                <h3 class="fw article-title">
                                    <a href="{{route('getChiTietTinTuc')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                    <span>NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY</span>
                                    </a>
                                </h3>
                                <div class="article-summary">
                                    <i class="fa fa-edit" aria-hidden="true"></i> Nhân ngày quốc tế thiếu nhi 01/06, hưởng ứng Tháng hành động Vì trẻ em, ngày 03/06/2018,  Đoàn thanh niên phối hợp với Công đoàn công ty đã tổ chức chương trình “Ngày hội thiếu nhi HODECO” cho các cháu thiếu nhi là con em CB-CNV công ty. Đây thực sự là hoạt động ý nghĩa cho các cháu được vui chơi, giao lưu trong không khí vui tươi, đầm ấm.
                                </div>
                                <div class="libra-health___viewmore">
                                    <a href="{{route('getChiTietTinTuc')}}" title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <nav class="fw pagination-parent">
                        <ul class="pagination clearfix">
                            <li class="page-item disabled hidden-xs">
                                <a class="page-link" href="#">«</a>
                            </li>
                            <li class="active page-item disabled">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="/tin-tuc?page=2">2</a>
                            </li>
                            <li class="page-item hidden-xs">
                                <a class="page-link" href="/tin-tuc?page=2">»</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-12 col-xs-12">
                <!-- DANH MỤC SẢN PHẨM -->
                <!-- <div class="sidebar-item sidebar-menu sidebar-collection-menu hidden-lg hidden-md">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title">
                            <span>Danh mục Tin Tức</span>
                        </h2>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- FILTERS -->
                <div class="aside-filter sidebar-item">
                    <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                        <div class="module-header">
                            <h2 class="module-title libra-health___title">
                                <span>
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Danh Mục Tin Tức
                                </span>
                            </h2>
                        </div>
                        <div class="sidebar-menu-content module-content">
                            <div class="sidebar-linklists">
                                <ul>
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDanhMucTinTuc')}}" title="">
                                            <span>Danh Mục 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDanhMucTinTuc')}}" title="">
                                            <span>Danh Mục 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDanhMucTinTuc')}}" title="">
                                            <span>Danh Mục 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
            </aside>
            <div id="open-filters" class="open-filters hidden-lg hidden-md">
                <i class="fa fa-align-justify"></i>
                <span>Menu</span>
            </div>
        </div>
    </div>
</section>
@stop
@stop