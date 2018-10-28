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
                        <strong itemprop="title">Liên Hệ</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="contact page-template padding-0">
    <!-- <div class="mapiframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29825.22945343809!2d106.691545!3d20.865855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13291dc04c4248f4!2sVincom+Plaza!5e0!3m2!1sen!2sus!4v1532052163883" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="fw">
                    <div class="module-header padding-top-20">
                        <h1 class="title-head page_title">Liên hệ với chúng tôi</h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-push-8 col-lg-4 margin-bottom-30">
                            <div class="module-header">
                                <h2 class="module-title libra-health___title">
                                    <span><i class="fa fa-info-circle" aria-hidden="true"></i> Thông tin</span>
                                </h2>
                            </div>
                            <div class="module-content">
                                <div class="contact-page-info">
                                    <div class="fw">
                                        <label class="contact-info-title">Điện thoại :</label>
                                        <a class="contact-info" href="tel:0123456789">0123456789</a>
                                    </div>
                                    <div class="fw">
                                        <label class="contact-info-title">Hotline :</label>
                                        <a class="contact-info" href="tel:0123456789">0123.456.789</a>
                                    </div>
                                    <div class="fw">
                                        <label class="contact-info-title">Email :</label>
                                        <a class="contact-info" href="mailto:demo@demo.com">demo@demo.com</a>
                                    </div>
                                    <div class="fw">
                                        <div class="contact-info">Thứ 2 - Thứ 6: 8h00 - 22h00<br>Thứ 7 - Chủ nhật: 8h00 - 21h00</div>
                                    </div>
                                    <div class="fw">
                                        <label class="contact-info-title">Địa chỉ :</label>
                                        <span class="contact-info">475B Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-pull-4 col-lg-8 margin-bottom-30">
                            <div class="module-header">
                                <h2 class="module-title libra-health___title">
                                    <span><i class="fa fa-hand-o-right" aria-hidden="true"></i> Liên hệ</span>
                                </h2>
                            </div>
                            <div class="module-content">
                                <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
                                    <input name="FormType" type="hidden" value="contact">
                                    <input name="utf8" type="hidden" value="true">
                                    <div id="emtry_contact" class="form-signup form_contact clearfix">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <fieldset class="form-group">   
                                                    <label>Họ tên</label>
                                                    <input type="text" placeholder="Vui lòng nhập Họ &amp; tên" name="contact[name]" id="name" class="form-control form-control-lg" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <fieldset class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" placeholder="Vui lòng nhập Email" name="contact[email]" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" data-validation="email" id="email" class="form-control form-control-lg" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <fieldset class="fw form-group contact-content">
                                                    <label>Nội dung</label>
                                                    <textarea name="contact[body]" placeholder="Vui lòng nhập nội dung" rows="3" id="comment" class="form-control form-control-lg" required=""></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <button tyle="submit" class="btn libra-health___button">
                                                <span>Gửi liên hệ</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop