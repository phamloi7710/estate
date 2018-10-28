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
                        <strong itemprop="title">Đăng Ký Tài Khoản</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="account-template">
    <div class="container">
        <h1 class="title-head account-title margin-bottom-20">Đăng ký tài khoản</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="page-login">
                    <div id="login">
                        <p>Nếu chưa có tài khoản vui lòng đăng ký tại đây</p>
                        <form accept-charset="UTF-8" action="#" id="customer_register" method="post">
                            @csrf
                            <div class="form-signup">
                            </div>
                            <div class="form-signup clearfix">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <fieldset class="form-group">
                                            <label>Họ: </label>
                                            <input type="text" class="form-control form-control-lg" value="" name="lastName" id="lastName" placeholder="Họ" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <fieldset class="form-group">
                                            <label>Tên: </label>
                                            <input type="text" class="form-control form-control-lg" value="" name="firstName" id="firstName" placeholder="Tên" required="">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <fieldset class="form-group">
                                            <label>Email: </label>
                                            <input type="email" class="form-control form-control-lg" value="" name="email" id="email" placeholder="Email" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <fieldset class="form-group">
                                            <label>Mật khẩu: </label>
                                            <input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="Mật khẩu" required="">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-left margin-top-20 padding-0">
                                    <button type="summit" value="Đăng ký" class="btn button-hover-3">
                                    <span>Đăng ký</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop