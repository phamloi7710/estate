
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Đăng Nhập Hệ Thống</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('')}}/assets/admin/css/bootstrap.min.css">
    <link href="{{url('')}}/assets/admin/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('')}}/assets/admin/style.css">
</head>

<body class="login-page">
    <div class="login-box">
        
        <div class="card">
            <div class="body">
                <form method="POST" action="{{route('postLoginAdmin')}}">
                    @csrf                  
                    <div class="msg">Đăng Nhập Vào Hệ Thống</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="txtUsername" placeholder="Nhập Tên Đăng Nhập" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="txtPassword" placeholder="Nhập Mật Khẩu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ghi Nhớ Đăng Nhập</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-green waves-effect" type="submit">Đăng Nhập</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 pull-right">
                            <a href="forgot-password.html">Lấy Lại Mật Khẩu</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>