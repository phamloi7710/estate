@section('title')
Dự Án Đang Triển Khai
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
                        <strong itemprop="title">Danh Sách Dự Án Đang Triển Khai</strong>
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
                        <span>Danh Sách Dự Án Đang Triển Khai</span>
                    </h1>
                    <div class="fw">
                        @foreach($duan as $datrienkhai)
                        <article class="article-item blog-article-item">
                            <div class="article-thumbnail image-hover-1">
                                <a href="{{route('getChiTietDuAnFrontend', ['url'=>$datrienkhai->url])}}" title="{{$datrienkhai->title}}">
                                <img src="{{url('')}}{{$datrienkhai->image}}" data-lazyload="{{url('')}}{{$datrienkhai->image}}" class="img-responsive" alt="{{$datrienkhai->title}}">
                                </a>
                            </div>
                            <div class="article-info">
                                <h3 class="fw article-title">
                                    <a href="{{route('getChiTietDuAnFrontend', ['url'=>$datrienkhai->url])}}" title="{{$datrienkhai->title}}">
                                    <span>{{$datrienkhai->title}}</span>
                                    </a>
                                </h3>
                                <div class="article-summary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>  {{$datrienkhai->tomtat}}... 
                                </div>
                                <div class="libra-health___viewmore">
                                    <a href="{{route('getChiTietDuAnFrontend', ['url'=>$datrienkhai->url])}}" title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <!-- <div class="pull-right">{{$duan->render()}}</div> -->
                    <nav class="pull-right">
                        {{$duan->render()}}
                    </nav>
                </div>
            </div>
            <aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-12 col-xs-12">
                <!-- DANH MỤC SẢN PHẨM -->
                <div class="sidebar-item sidebar-menu sidebar-collection-menu">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title">
                            <span>Danh mục Dự Án</span>
                        </h2>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FILTERS -->
                <div class="aside-filter sidebar-item">
                    <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                        <div class="sidebar-menu-content module-content">
                            <div class="sidebar-linklists">
                                <ul>
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDuAnDangTrienKhai')}}" title="Dự Án Đang Thực Hiện">
                                            <span>Dự Án Đang Triển Khai</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDuAnDaTrienKhai')}}" title="Dự Án Đã Thực Hiện">
                                            <span>Dự Án Đã Triển Khai</span>
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