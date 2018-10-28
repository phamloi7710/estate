@section('title')
@stop
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
                        <strong itemprop="title">Đăng Nhập</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="account-template">
    <div class="container">
        <h1 class="title-head account-title margin-bottom-20">Đăng nhập tài khoản</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="page-login margin-bottom-20">
                    <div id="login">
                        <p>Nếu bạn đã có tài khoản, đăng nhập tại đây.</p>
                        <form accept-charset="UTF-8" action="#" id="customer_login" method="post">
                            @csrf
                            <div class="form-signup">
                            </div>
                            <div class="form-signup clearfix">
                                <fieldset class="form-group">
                                    <label>Email: </label>
                                    <input type="email" class="form-control form-control-lg" value="" name="email" id="customer_email" placeholder="Email">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label>Mật khẩu: </label>
                                    <input type="password" class="form-control form-control-lg" value="" name="password" id="customer_password" placeholder="Mật khẩu">
                                </fieldset>
                                <div class="pull-xs-left" style="margin-top: 25px;">
                                    <button class="btn button-hover-3" type="submit" value="Đăng nhập">
                                    <span>Đăng nhập</span>
                                    </button>
                                    <a href="/account/register" class="btn-link-style btn-register">Đăng ký</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div id="recover-password" class="form-signup">
                    <p>Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</p>
                    <form accept-charset="UTF-8" action="/account/recover" id="recover_customer_password" method="post">
                        <input name="FormType" type="hidden" value="recover_customer_password">
                        <input name="utf8" type="hidden" value="true">
                        <div class="form-signup aaaaaaaa ">
                        </div>
                        <div class="form-signup clearfix">
                            <fieldset class="form-group">
                                <label>Email: </label>
                                <input type="email" class="form-control form-control-lg" value="" name="Email" id="recover-email" placeholder="Email">
                            </fieldset>
                        </div>
                        <div class="action_bottom">
                            <button class="btn button-hover-3 margin-top-25" type="submit" value="Lấy lại mật khẩu">
                            <span>Lấy lại mật khẩu</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showRecoverPasswordForm() {
        	document.getElementById('recover-password').style.display = 'block';
        	document.getElementById('login').style.display='none';
        }
        
        function hideRecoverPasswordForm() {
        	document.getElementById('recover-password').style.display = 'none';
        	document.getElementById('login').style.display = 'block';
        }
    </script>
</div>
@stop