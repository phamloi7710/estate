
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
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 image-hover-1">
                                <a href="{{route('getChiTietDuAn')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAM1BMVEXMzMyVlZWTk5PLy8uXl5fPz8+5ubnHx8ednZ2ampq1tbXDw8O8vLzAwMCtra2ioqKnp6dvyVRkAAAEbUlEQVR4nO3Y7ZajNgyAYfyBAWMM93+1lWQgJLPbSff0dMjp+/zYDIF1sLBlma4DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPwv9OLl+PX8P2jqX2rpZw2p1rw8jpdccwnnYdDT81sthVJrTcN5POenw1Ck5SX86n/eTFkn5+KY93sNeY1yWI+uDJueXtMbXRm20Tk3bnt8Q5GW3LQd8RzyGC8/dGOzdNl56XZqx2lqh7WN8rC10+P3I+W4NK7t2kUjJNa9pRrt9JTvPn/6Ue8yrdIVGxmzdGwt8s/YnnaSR1uTXFSHv21HWsoxujVliWnVoRCqNJIlEL5FW0O0LvJD63sT8ecs3k1yz2V0Xp9fn1yMS9dL9zZ9nBoyec4pRv9dT2a9VOeeb4Nq8DHmvpfwRmupSsuhG6Tluw+UIVvnddzbpzzcbdAOuFUHhsysmPpulsf7XR6QuTHJJX2R/6IxSV6GhQRZDnXIDfIL9fyBe+t77as+Tp33R+dl+IxFh020DlpPzpiEQewfl0D1s003HVP6x975QWKiA0Omji+6ilmoPsEgsdCsukg2KPqFDXwZL9FNOqWy5Ibj6fab937suyXK55cZJeGLk4ZxbC3K7Is6AtMUvY08yV/lv+zaHwpBMmPUO11iG+kh2srTb9GNFpO45+DOYhJjnCVxSP788siTpqKhtWAZarUReLYwx3OJu7M559Emu+RaeYoWk8me8jGldA65Mya5TjFWHVrrl9Sgq4tFN7jYYiJhtZhIy3uGch8QkyJVw5745E9bhPeRrw/Z1p9j5JvQyZQaNXzlNe9KJo1t2Q4+TkdMxv4x+2R58unmC0+ngfBuT3xvxaQlznWvQ55oSFr98eExGUqSKtzu+M2YaLFxlnWXr7OLtl51Hx+T7lGznTl2+n2OVUGybKyvrSySX6d8XPElx04flGOVJNOpf2/dUbrCftm4aCDPQH30umMd082Kb/WJt1XjUZ/E1/pEFR/j68albXiOFPPb+kTm1N3rk7mm/hETrcC1jp33vKKV+dDq2GtC7XVEyJVPLUnibQt5s5e+w2i7g052f1bMaB17802g3mLXnQXr635naPsd7dDlDYqWK2N62eFKE60i2ZW23znmzLHf2X61XN3Loq8Kgu1G8lGcFUuh9gJFs8EYuty2PQeZF61mu+4LZUDopXbejqP2PmgD1lJrY9nTzJ1pp6eq79ZsVbDHOebH+5MifdiszH10f9EsI7W9XvkYPZIw3JaysaJNK9dajw2UbS/X9AnvT2RaeHsbNu2LQWlvx+I+BEJtpy97Wd3vaNVi79HOqsWmjhx75/dd0Nxa9seGWgbK9YfubKkyb+J63GmQ+k0Oz1kxVH0Tt11eLdu+eNEz8umfdsuHFsBFX+U+3uzqm17/3pvdHxeWlMplPM8lpeXl9NNWT76wjs1p/+P89rBfPmhLlxBIy+X2EwcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/thfd/YmrD763FMAAAAASUVORK5CYII=" class="img-responsive" alt="Du Lịch Đại Dương">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                <h4 class="fw article-title">
                                    <a href="{{route('getChiTietTinTuc')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                    <span>NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY</span>
                                    </a>
                                </h4>
                                <div class="hidden-xs article-summary" style="height: px;overflow: hidden;">
                                    <i class="fa fa-edit" aria-hidden="true"></i> Nhân ngày quốc tế thiếu nhi 01/06, hưởng ứng Tháng hành động Vì trẻ em, ngày 03/06/2018,  Đoàn thanh niên phối hợp với Công đoàn công ty đã tổ chức chương trình “Ngày hội thiếu nhi HODECO” cho các cháu ....
                                </div>
                                <div class="clearfix"></div>
                                <div class="libra-health___viewmore">
                                    <a href="{{route('getChiTietTinTuc')}}" title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="article-item blog-article-item">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 image-hover-1">
                                <a href="{{route('getChiTietDuAn')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAM1BMVEXMzMyVlZWTk5PLy8uXl5fPz8+5ubnHx8ednZ2ampq1tbXDw8O8vLzAwMCtra2ioqKnp6dvyVRkAAAEbUlEQVR4nO3Y7ZajNgyAYfyBAWMM93+1lWQgJLPbSff0dMjp+/zYDIF1sLBlma4DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPwv9OLl+PX8P2jqX2rpZw2p1rw8jpdccwnnYdDT81sthVJrTcN5POenw1Ck5SX86n/eTFkn5+KY93sNeY1yWI+uDJueXtMbXRm20Tk3bnt8Q5GW3LQd8RzyGC8/dGOzdNl56XZqx2lqh7WN8rC10+P3I+W4NK7t2kUjJNa9pRrt9JTvPn/6Ue8yrdIVGxmzdGwt8s/YnnaSR1uTXFSHv21HWsoxujVliWnVoRCqNJIlEL5FW0O0LvJD63sT8ecs3k1yz2V0Xp9fn1yMS9dL9zZ9nBoyec4pRv9dT2a9VOeeb4Nq8DHmvpfwRmupSsuhG6Tluw+UIVvnddzbpzzcbdAOuFUHhsysmPpulsf7XR6QuTHJJX2R/6IxSV6GhQRZDnXIDfIL9fyBe+t77as+Tp33R+dl+IxFh020DlpPzpiEQewfl0D1s003HVP6x975QWKiA0Omji+6ilmoPsEgsdCsukg2KPqFDXwZL9FNOqWy5Ibj6fab937suyXK55cZJeGLk4ZxbC3K7Is6AtMUvY08yV/lv+zaHwpBMmPUO11iG+kh2srTb9GNFpO45+DOYhJjnCVxSP788siTpqKhtWAZarUReLYwx3OJu7M559Emu+RaeYoWk8me8jGldA65Mya5TjFWHVrrl9Sgq4tFN7jYYiJhtZhIy3uGch8QkyJVw5745E9bhPeRrw/Z1p9j5JvQyZQaNXzlNe9KJo1t2Q4+TkdMxv4x+2R58unmC0+ngfBuT3xvxaQlznWvQ55oSFr98eExGUqSKtzu+M2YaLFxlnWXr7OLtl51Hx+T7lGznTl2+n2OVUGybKyvrSySX6d8XPElx04flGOVJNOpf2/dUbrCftm4aCDPQH30umMd082Kb/WJt1XjUZ/E1/pEFR/j68albXiOFPPb+kTm1N3rk7mm/hETrcC1jp33vKKV+dDq2GtC7XVEyJVPLUnibQt5s5e+w2i7g052f1bMaB17802g3mLXnQXr635naPsd7dDlDYqWK2N62eFKE60i2ZW23znmzLHf2X61XN3Loq8Kgu1G8lGcFUuh9gJFs8EYuty2PQeZF61mu+4LZUDopXbejqP2PmgD1lJrY9nTzJ1pp6eq79ZsVbDHOebH+5MifdiszH10f9EsI7W9XvkYPZIw3JaysaJNK9dajw2UbS/X9AnvT2RaeHsbNu2LQWlvx+I+BEJtpy97Wd3vaNVi79HOqsWmjhx75/dd0Nxa9seGWgbK9YfubKkyb+J63GmQ+k0Oz1kxVH0Tt11eLdu+eNEz8umfdsuHFsBFX+U+3uzqm17/3pvdHxeWlMplPM8lpeXl9NNWT76wjs1p/+P89rBfPmhLlxBIy+X2EwcAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/thfd/YmrD763FMAAAAASUVORK5CYII=" class="img-responsive" alt="Du Lịch Đại Dương">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                <h4 class="fw article-title">
                                    <a href="{{route('getChiTietTinTuc')}}" title="NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY">
                                    <span>NGÀY 03/06/2018 ĐOÀN TN KẾT HỢP VỚI CÔNG ĐOÀN CÔNG TY TỔ CHỨC 'NGÀY HỘI THIẾU NHI HODECO' CHO CON EM CB-CNV CÔNG TY</span>
                                    </a>
                                </h4>
                                <div class="hidden-xs article-summary" style="height: px;overflow: hidden;">
                                    <i class="fa fa-edit" aria-hidden="true"></i> Nhân ngày quốc tế thiếu nhi 01/06, hưởng ứng Tháng hành động Vì trẻ em, ngày 03/06/2018,  Đoàn thanh niên phối hợp với Công đoàn công ty đã tổ chức chương trình “Ngày hội thiếu nhi HODECO” cho các cháu....
                                </div>
                                <div class="clearfix"></div>
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
            <aside class="col-xs-12 col-md-4 col-sm-4 col-lg-3 col-md-pull-8 col-lg-pull-9 dqdt-sidebar sidebar left left-content">
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