<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Jquery Core Js -->
        <script src="{{url('')}}/assets/admin/plugins/jquery/jquery.min.js"></script>
        <script src="{{url('')}}/assets/admin/custom/custom.header.js"></script>
        <!-- Bootstrap Core Css -->
        <link href="{{url('')}}/assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="{{url('')}}/assets/admin/plugins/node-waves/waves.css" rel="stylesheet" />
        <!-- Animation Css -->
        <link href="{{url('')}}/assets/admin/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Morris Chart Css-->
        <link href="{{url('')}}/assets/admin/plugins/morrisjs/morris.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="{{url('')}}/assets/admin/css/style.css" rel="stylesheet">
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{url('')}}/assets/admin/css/themes/all-themes.css" rel="stylesheet" />
        <!-- Bootstrap Spinner Css -->
        <link href="{{url('')}}/assets/admin/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">
        <!-- Bootstrap Select Css -->
        <link href="{{url('')}}/assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Colorpicker Css -->
        <link href="{{url('')}}/assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
        <!-- noUISlider Css -->
        <link href="{{url('')}}/assets/admin/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
        <!-- Dropzone Css -->
        <link href="{{url('')}}/assets/admin/plugins/dropzone/dropzone.css" rel="stylesheet">

        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="{{url('')}}/assets/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        <!-- custom css -->
        <link href="{{url('')}}/assets/admin/custom/custom.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
        <link href="{{url('')}}/assets/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- JQuery DataTable Css -->
        <link href="{{url('')}}/assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <!-- Multi Select Css -->
        <link href="{{url('')}}/assets/admin/plugins/multi-select/css/multi-select.css" rel="stylesheet">
        <link href="{{url('')}}/assets/admin/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet">
        

    </head>
    <body class="theme-blue">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>{{__('general.pleaseWait')}}...</p>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="Tìm Kiếm Thứ Gì Đó...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
@include('admin.general.top')
@include('admin.general.menu')