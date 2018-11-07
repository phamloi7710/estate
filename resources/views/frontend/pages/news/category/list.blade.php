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
                    	@foreach($cateNews->news as $value)
                        <article class="article-item blog-article-item">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 image-hover-1">
                                <a href="{{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}" title="{{$value->title}}">
                                <img src="{{url('')}}{{$value->image}}" class="img-responsive" alt="Du Lịch Đại Dương">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                <h4 class="fw article-title">
                                    <a href="{{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}" title="{{$value->title}}">
                                    <span>{{$value->title}}</span>
                                    </a>
                                </h4>
                                <div class="hidden-xs article-summary" style="height: px;overflow: hidden;">
                                    <i class="fa fa-edit" aria-hidden="true"></i>    {{$value->tomtat}}...
                                </div>
                                <div class="clearfix"></div>
                                <div class="libra-health___viewmore">
                                    <a href="{{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}" title="Xem chi tiết">
                                    <span>Xem chi tiết</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
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
                                	@foreach($category as $cate)
                                    <li class="sidebar-menu-list blog-sidebar-menu">
                                        <a class="ajaxLayer" href="{{route('getDanhMucTinTucFrontend', ['slug'=>$cate->slug])}}" title="">
                                            <span>{{$cate->name}}</span>
                                        </a>
                                    </li>
                                    @endforeach
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