<!DOCTYPE html>
<html lang="vi">
    <head>
        <!-- ================= Favicon ================== -->
        <link rel="icon" href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/favicon.png" type="image/x-icon">
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">




        <title>@yield('title'){{isset($info->site_name) ? $info->site_name : ''}}</title>
        <meta name="description" content="@yield('description')"/>
        <meta name="keywords" content="@yield('keyword')"/>
        <!-- <meta property="fb:app_id" content="@yield('fbAppId')"/> -->
        <!-- <meta property="og:locale" content="@yield('locale')"> -->
        <!-- <meta property="og:type" content="@yield('type')"> -->
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:url" content="@yield('url')">
        <meta property="og:image" content="@yield('image')">
        <meta property="og:image:secure_url" content="@yield('image')">
        <meta property="og:site_name" content="{{isset($info->site_name) ? $info->site_name : ''}}">





        <link rel="icon" href="{{url('')}}/assets/logo-2.png" type="image/x-icon" />
        <script async src="{{url('')}}/assets/frontend/custom/custom.header.js"></script>
        <link href="{{url('')}}/assets/frontend/custom/custom.css" rel="stylesheet" type="text/css">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123748707-1"></script>
        <script async src="{{url('')}}/assets/frontend/slider/jssor.slider-27.5.0.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/plugin.scss.css" rel="stylesheet" type="text/css">                           
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/base.scss.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/style.scss.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/update.scss.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/module.scss.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/responsive.scss.css" rel="stylesheet" type="text/css">
        <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/stylesheet.scss.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.3/jquery.mmenu.all.css" rel="stylesheet" type="text/css">
        <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/jquery-2.2.3.min.js" type="text/javascript"></script> 
        <link href="//fonts.googleapis.com/css?family=Roboto:400,700' rel="stylesheet" type="text/css">
        <script>var ProductReviewsAppUtil=ProductReviewsAppUtil || {};</script>
        <style>
        .scrollq-desktop{ z-index: 10; float: left; position: fixed; top: 122px; width: 100%;}
        .scrollq-ipad{ z-index: 10; float: left; position: fixed; top: 80px; width: 100%;}
        .scrollq-tablet{ z-index: 10; position: fixed; top: 80px; width: 100%;}
        .scrollq-mobile{ z-index: 10; position: fixed; top: 80px; width: 100%;}
        .scrollq{ z-index: 9999; position: fixed; left: 0; top: 0; width: 100%;}
            
        </style>

<style>
    
    
</style>
    </head>
    <body>
    <div class="page-body">
        <div class="hidden-md hidden-lg opacity_menu"></div>
        <div class="opacity_filter"></div>
        <div class="op_login"></div>
        
        <header id="header" class="header">
            <div class="mainbar">
                <div class="container">
                    <div class="row">
                        <div id="menu-bar" class="menu-bar hidden-lg">
                            <a href="#nav-mobile">
                                <i class="fa fa-align-justify"></i>
                            </a>
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 col-sm-offset-3 col-sm-6 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-0 logo">
                            <a title="Libra Health" href="/">
                            <img width="150" class="img-responsive" src="{{url('')}}/assets/logo-1.png" alt="Logo">                  
                            </a> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6 searchBar hidden-sm">
                            <div class="searchbar">
                                <form method="GET" action="{{route('getSearch')}}">
                                    <div class="search_bar search-auto hidden-xs">
                                        <input type="text" class="form-control smartsearch_input" autocomplete="off" maxlength="70" name="data" title="Nhập từ khoá cần tìm" placeholder="Tìm kiếm" required>
                                        <button class="btn button-hover-3" type="submit">
                                        <i class="fa fa-search"></i>
                                        </button>
                                        <div class="search_choice">
                                            <label class="search_choice___label hidden-md">Tìm kiếm theo</label>
                                            <div class="search_choice___input">
                                                <div class="search_choice___input_index">
                                                    <input type="radio" class="search_product" name="type" value="project">
                                                    <span>Tên Dự Án</span>
                                                </div>
                                                <div class="search_choice___input_index margin-left-15">
                                                    <input type="radio" class="search_article" name="type" checked="checked" value="news">
                                                    <span>Tin Tức</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3 hotline-mobile">
                            <a class="hotline" href="tel:0939080603">
                                    <i style="font-size: 42px; padding-right: 10px; color: #2a7f49;" class="fa fa-mobile icon-mobile-top"></i>
                                <span class="hidden-sm hidden-xs">
                                0939.080.603
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu hidden-md hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-hg-12">
                            <nav>
                                <ul id="nav" class="nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Trang chủ</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('getGioiThieu')}}">Giới Thiệu</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="javascript:;" class="nav-link">Dự Án<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item-lv2">
                                                <a class="nav-link" href="{{route('getDuAnDangTrienKhai')}}">Dự Án Đang Triển Khai</a>
                                            </li>
                                            <li class="nav-item-lv2">
                                                <a class="nav-link" href="{{route('getDuAnDaTrienKhai')}}">Dự Án Đã Triển Khai</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="javascript:;" class="nav-link">Tin Tức<i class="fa fa-angle-down"></i></a>
                                        @if(isset($newsCate))
                                        <ul class="dropdown-menu">
                                            @foreach($newsCate as $catenews)
                                            <li class="nav-item-lv2">
                                                <a class="nav-link" href="{{route('getDanhMucTinTucFrontend', ['id'=>$catenews->id, 'slug'=>$catenews->slug])}}">{{$catenews->name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('tuyendung')}}">Tuyển Dụng</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('getLienHeFrontend')}}">Liên hệ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>