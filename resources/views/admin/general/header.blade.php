<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="icon" href="{{url('')}}/assets/logo-2.png" type="image/x-icon" />
        <!-- Bootstrap -->
        <link href="{{url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{url('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <!-- bootstrap DatetimePicker -->
        <link href="{{url('assets/admin/vendors/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
        <link href="{{url('assets/admin/bootstrap-select/1.12.4/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{url('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin/my-assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin/my-assets/css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/admin/plugins/bootstrap-toastr/toastr.min.css')}}">
        <!-- iCheck -->
        <link href="{{url('')}}/assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="{{url('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{url('assets/admin/ckeditor/ckeditor.js')}}"></script>
        <!-- my js -->
        <script src="{{url('assets/admin/custom/custom.header.js')}}"></script>
    </head>
    <body class="nav-md">
        <!-- notification success -->
        <script type="text/javascript">
            $(document).ready(function(){
                $(".custom-notifications").delay(2000).slideUp();
            })
        </script>
        @if(Session('thongbao'))
        <div class="custom-notifications">
            <div class="tabbed_notifications">
                <div class="text alert-success">
                    <h1 style="text-align: center;"><i class="fa fa-bell"></i></h1>
                    <h3 style="text-align: center; font-size: 32px;">
                         <p>{{Session('thongbao')}}</p>
                    </h3>
                </div>
            </div>
        </div>
        @endif
        @if(Session('thongbaoloi'))
         <div class="custom-notifications">
            <div class="tabbed_notifications">
                <div class="text alert-error">
                    <h1 style="text-align: center;"><i class="fa fa-bell"></i></h1>
                    <h3 style="text-align: center; font-size: 32px;">
                         <p>{{Session('thongbaoloi')}}</p>
                    </h3>
                </div>
            </div>
        </div>
        @endif
        @if(Session::has('success')||Session::has('error'))
            <div class="custom-notifications">
                <div class="tabbed_notifications">
                    <div class="text @if(Session::has('error')) alert-error @else alert-success @endif message">
                        <h1 style="text-align: center;">@if(Session::has('error')) {{trans('general.warring')}} @else {{trans('general.success')}} @endif !</h1>
                        <h3 style="text-align: center; font-size: 24px;">
                             <p>{!! Session::get('error') !!}{!! Session::get('success') !!}</p>
                        </h3>
                    </div>
                </div>
            </div>
        @endif
        <!-- /notification success -->
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
                                    <img src="images/img.jpg" alt="">{{Auth::user()->username}}
                                    <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="{{url('/admin/user/edit').'/'.Auth::user()->id}}"> {{trans('general.profile')}}</a></li>
                                        <!-- <li>
                                            <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>{{trans('general.settings')}}</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">{{trans('general.help')}}</a></li> -->
                                        <li><a href="{{route('logoutAdmin')}}"><i class="fa fa-sign-out pull-right"></i> {{trans('general.logout')}}</a></li>
                                    </ul>
                                </li>
                                <!-- <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                            <span class="image"><i class="fa fa-user"></i></span>
                                            <span>
                                            <span>You have 6 new contact</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
                