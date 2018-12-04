

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng Nhập Hệ Thống | OSIMI.VN - Website Chủ Đầu Tư </title>
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
        <style>
            .error {
                border-color: red;
                color: red;
                font-weight: normal;
                float: left;
            }
        </style>
    </head>
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">

                    <section class="login_content">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form id="formLogin" method="POST" action="{{route('postLoginAdmin')}}">
                        @csrf
                            <h1>Đăng Nhập Hệ Thống</h1>
                            <div>
                                <input type="text" class="form-control" name="txtUsername" placeholder="Nhập Tên Đăng Nhập" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Nhập Mật Khẩu" class="form-control" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success pull-right">Đăng Nhập</button>
                                <a href="#signup" class="reset_pass" href="#">Lấy Lại Mật Khẩu</a>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </section>
                </div>
                
                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form id="formFogotPass" method="POST" action="{{route('postForgotPass')}}">
                        @csrf
                            <h1>Lấy Lại Mật Khẩu</h1>
                            <div>
                                <input type="text" name="email" class="form-control" placeholder="Nhập Địa Chỉ Email" required="">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <p style="color:red;">{{ $errors->first('email') }}</p>
                                </span>
                            @endif
                            <div>
                                <button type="submit" class="btn btn-success pull-right">Gửi Yêu Cầu</button>
                                    <a href="#signin" class="reset_pass"> Quay Lại Trang Đăng Nhập </a>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <script src="{{url('')}}/assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <script src="{{url('')}}/assets/admin/vendors/jquery/validation/jquery.validate.js"></script>
    </body>
    <script type="text/javascript">
    $(document).ready(function() {
          $("#formLogin").validate({
              rules: {
                  txtUsername: "required",
                  txtPassword: "required",
              },
              messages: {
                  txtUsername: "Tên Đăng Nhập Không Được Bỏ Trống",
                  txtPassword: "Mật Khẩu Không Được Bỏ Trống",
              }
          });
          $("#formFogotPass").validate({
              rules: {
                   txtEmail: {
                    required: true,
                    email: true
                   }
              },
              messages: {
                   txtEmail: {
                        required: "Email Không Được Bỏ Trống",
                        email: "Email Không Đúng Định Dạng"
                   }
              }
          });
      });
</script>
</html>