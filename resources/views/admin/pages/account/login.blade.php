<!--  -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gentelella Alela! | </title>
        <!-- Bootstrap -->
        <link href="{{url('')}}/assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{url('')}}/assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{url('')}}/assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{url('')}}/assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{url('')}}/assets/admin/build/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="POST" action="{{route('postLoginAdmin')}}">
                        @csrf
                            <h1>Đăng Nhập Hệ Thống</h1>
                            <div>
                                <input type="text" class="form-control" name="txtUsername" placeholder="Nhập Tên Đăng Nhập" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Nhập Mật Khẩu" class="form-control" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit">Đăng Nhập</button>
                                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                            </div>
                            <div class="clearfix"></div><!-- 
                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div> -->
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>