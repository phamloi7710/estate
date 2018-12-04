

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
            <div class="login_wrapper">
                <div class="animate form login_form">
                  @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                  @endif
                  @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{$errors->first('email')}} <br>
                        <p>Bấm vào <a href="{{url('admin/login.html#signup')}}">đây</a> để thực hiện tại thao tác lấy lại mật khẩu</p>
                    </div>
                    @endif
                    <section class="login_content">
                        <form id="formLogin" method="POST" action="{{route('postResetPass')}}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        @csrf
                            <h1>Khôi Phục Mật Khẩu</h1>
                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Nhập Lại Địa Chỉ Email Của Bạn">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required placeholder="Nhập Mật Khẩu Mới">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" name="password_confirmation" required placeholder="Nhập Lại Mật Khẩu Mới">
                                 @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success pull-right">Đặt Lại Mật Khẩu</button>
                            </div>
                            <div class="clearfix"></div>
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