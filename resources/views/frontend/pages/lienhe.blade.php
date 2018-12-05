@section('title')Liên Hệ - @stop
@section('url', route('getLienHeFrontend'))
@extends('frontend.general.master')
@section('content')
<style>
    .error{
        font-size: 12px;
        text-transform: none;
    }
</style>
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
<!--  dd(config('mail')) -->
<div class="contact page-template padding-0">
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
                                    <!-- @if(isset($info))
                                        @foreach (unserialize($info->phone) as $value)
                                            <div class="fw">
                                                <label class="contact-info-title">{{$value['title']}}:</label>
                                                <a class="contact-info" href="tel:{{$value['phone']}}">0{{number_format($value['phone'], 0, ".",".")}}</a>
                                            </div>
                                        @endforeach
                                    @endif
                                    @if(isset($info))
                                        @foreach (unserialize($info->email) as $value)
                                            <div class="fw">
                                                <label class="contact-info-title">{{$value['title']}}:</label>
                                                <a class="contact-info" href="mailto:{{$value['email']}}">{{$value['email']}}</a>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="fw">
                                        <label class="contact-info-title">Địa chỉ :</label>
                                        <span class="contact-info">
                                            @if(isset($info))
                                                @foreach (unserialize($info->address) as $value)
                                                <br>
                                                &#160;&#160;&#160;&#160;
                                                <b>+ {{$value['title']}}:</b> {{$value['address']}}
                                                @endforeach
                                                @endif
                                            </span>
                                    </div> -->
                                    @if(isset($info1))
                                        {!!$info1->content!!}
                                    @endif
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
                                <form id="formContact" accept-charset="UTF-8" action="{{route('sendContact')}}" method="POST" data-parsley-validate>
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <fieldset class="form-group">   
                                                <label>Họ tên</label>
                                                <input type="text" placeholder="Vui Lòng Nhập Họ & Tên" name="txtContactName" class="form-control form-control-lg" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Số Điện Thoại</label>
                                                <input type="text" placeholder="Vui Lòng Nhập Số Điện Thoại" name="txtContactPhone" class="form-control form-control-lg" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <fieldset class="form-group">
                                                <label>Email</label>
                                                <input type="email" placeholder="Vui Lòng Nhập Email" name="txtContactEmail" class="form-control form-control-lg" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <fieldset class="fw form-group contact-content">
                                                <label>Nội dung</label>
                                                <textarea name="contentContact" placeholder="Vui lòng nhập nội dung" rows="3" class="form-control form-control-lg"=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <button tyle="submit" class="btn libra-health___button pull-right">
                                            <span>Gửi Yêu Cầu</span>
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
    </div>
</div>
<script src="{{url('')}}/assets/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{url('')}}/assets/admin/vendors/jquery/validation/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    
          //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
          $("#formContact").validate({
              rules: {
                  txtContactName: "required",
                  txtContactEmail: {
                      required: true,
                      email: true
                  },
                  txtContactPhone: {
                      required: true,
                      number: true
                  }
              },
              messages: {
                  txtContactName: "Tên không được bỏ trống",
                  txtContactEmail: {
                      required: "Địa chỉ Email không được bỏ trống",
                      email: "Địa chỉ email không đúng định dạng"
                  },
                  txtContactPhone: {
                      required: "Số điện thoại không được bỏ trống",
                      number: "Chỉ cho phép nhập số"
                  }
              }
          });
      });
</script>
@stop