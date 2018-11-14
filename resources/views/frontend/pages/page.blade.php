@section('title')Liên Hệ - @stop
@section('url', route('tuyendung'))
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
                        <strong itemprop="title">{{$page->title}}</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-articles article">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-md-push-4 col-lg-push-3">
                <article class="article-main module-content" itemscope="" itemtype="http://schema.org/Article">
                    
                    <div class="row">
                        <div class="article-main-content">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 class="title-head article-title">
                                    <span>{{$page->title}}</span>
                                </h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                
                                <div class="article-content">
                                    <div class="rte">
                                        {!!$page->content!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-md-pull-8 col-lg-pull-9">
                <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title">
                            <span>
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> Danh Mục Dự Án
                            </span>
                        </h2>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="{{route('getDuAnDangTrienKhai')}}" title="Dự Án Đang Triển Khai">
                                    <span>Dự Án Đang Triển Khai</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="{{route('getDuAnDaTrienKhai')}}" title="Dự Án Đã Triển Khai">
                                    <span>Dự Án Đã Triển Khai</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title">
                            <span>
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> Danh Mục in Tức
                            </span>
                        </h2>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                                @foreach($newsCate as $cateNews)
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="{{route('getDanhMucTinTucFrontend', ['id'=>$cateNews->id, 'slug'=>$cateNews->slug])}}" title="{{$cateNews->name}}">
                                    <span>{{$cateNews->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop