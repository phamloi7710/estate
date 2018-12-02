<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="icon" href="{{url('')}}/assets/logo-2.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{url('')}}/assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{url('')}}/assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{url('')}}/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- bootstrap DatetimePicker -->
        <link href="{{url('')}}/assets/admin/vendors/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="{{url('')}}/assets/admin/bootstrap-select/1.12.4/css/bootstrap-select.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="{{url('')}}/assets/admin/vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{url('')}}/assets/admin/build/css/custom.min.css" rel="stylesheet">
        <link href="{{url('')}}/assets/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/my-assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/my-assets/css/custom.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/my-assets/css/check-and-radio.css">
        <!-- jQuery -->
        <script src="{{url('')}}/assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <script src="{{url('')}}/assets/admin/ckeditor/ckeditor.js"></script>
        <!-- my js -->
        <script src="{{url('')}}/assets/admin/custom/custom.header.js"></script>
        <!-- iCheck -->
        <link href="{{url('')}}/assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/custom/custom.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/plugins/bootstrap/toastr/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/lou-multi-select-e052211/css/multi-select.css">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{url('')}}@if(Auth::user()){{Auth::user()->avatar}}@endif" alt="@if(Auth::user()){{Auth::user()->name}}@endif">@if(Auth::user()){{Auth::user()->name}}@endif
                                    <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="{{route('getDetailProfile', ['username'=>Auth::user()->username])}}"> Trang Cá Nhân</a></li>
                                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng Xuất</a></li>
                                    </ul>
                                </li>
                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge bg-green">{{$countContact}}</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            @if($countContact=='0')
                                            <p>Hiện Tại Không Có Liên Hệ Mới Nào!</p>
                                            @else
                                            <a href="{{route('getListContact')}}">
                                            <span class="image"><i class="fa fa-user"></i></span>
                                            <span>
                                            <span>Bạn Có {{$countContact}} Liên Hệ Mới</span>
                                            <!-- <span class="time">3 mins ago</span> -->
                                            </span>
                                            </a>
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                