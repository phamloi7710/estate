<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/admin/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('')}}/assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    @include('admin.general.menu')
    @include('admin.general.top')