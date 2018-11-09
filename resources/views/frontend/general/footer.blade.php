<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
                                <div class="footer-widget">
                                    <h4 class="footer-title">
                                        <span><i class="fa fa-home" aria-hidden="true"></i> @if(isset($info)){{$info->site_name}}@endif</span>
                                    </h4>
                                    <div class="footer-details">
                                        <!-- <div class="footer-detail rte">
                                            [TÊN_CÔNG_TY]
                                        </div> -->
                                        <div class="footer-detail rte">
                                            Thứ 2 - Thứ 6: 8h00 - 22h00<br>Thứ 7 - Chủ nhật: 8h00 - 21h00
                                        </div>
                                        <div class="footer-detail rte">
                                            <label class="contact-info-title">
                                            Địa chỉ:
                                            </label>
                                            <div class="contact-info">
                                                @if(isset($info))
                                                @foreach (unserialize($info->address) as $value)
                                                <br>
                                                &#160;&#160;&#160;&#160;
                                                + {{$value['title']}}: {{$value['address']}}
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="footer-detail">
                                            <label class="contact-info-title">
                                            Điện thoại:
                                            </label>
                                            <div class="contact-info">
                                                @if(isset($info))
                                                @foreach (unserialize($info->phone) as $value)
                                                <br>
                                                &#160;&#160;&#160;&#160;
                                                <a href="javascript:;">+ {{$value['title']}}: </a>
                                                <a href="tel:{{$value['phone']}}">0{{number_format($value['phone'], 0, ".",".")}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="footer-detail">
                                            <label class="contact-info-title">
                                            Email:
                                            </label>
                                            <div class="contact-info">
                                                @if(isset($info))
                                                @foreach (unserialize($info->email) as $value)
                                                <br>
                                                &#160;&#160;&#160;&#160;
                                                <a href="javascript:;">+ {{$value['title']}}: </a>
                                                <a href="mailto:{{$value['email']}}">{{$value['email']}}</a>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="footer-detail">
                                            <label class="contact-info-title">
                                            Website: 
                                            </label>
                                            <div class="contact-info">
                                                <a href="{{url('')}}">{{url('')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-social">
                                        <ul class="inline-list social-icons">
                                            <li>
                                                <a target="_blank" class="icon-fallback-text txt-facebook hv-bg-facebook hv-bd-facebook" href="@if(isset($info)){{$info->fanpage}}@endif" rel="nofollow" title="@if(isset($info)){{$info->site_name}}@endif">
                                                <span class="icon icon-facebook" aria-hidden="true">
                                                <i class="fa fa-facebook"></i>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" class="icon-fallback-text txt-twitter hv-bg-twitter hv-bd-twitter" href="@if(isset($info)){{$info->twitter}}@endif" rel="nofollow" title="@if(isset($info)){{$info->site_name}}@endif">
                                                <span class="icon icon-twitter" aria-hidden="true">
                                                <i class="fa fa-twitter"></i>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" class="icon-fallback-text txt-google-plus hv-bg-google-plus hv-bd-google-plus" href="@if(isset($info)){{$info->google_plus}}@endif" rel="nofollow" title="@if(isset($info)){{$info->site_name}}@endif">
                                                <span class="icon icon-google-plus" aria-hidden="true">
                                                <i class="fa fa-google-plus"></i>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" class="icon-fallback-text txt-youtube hv-bg-youtube hv-bd-youtube" href="@if(isset($info)){{$info->youtube_channel}}@endif" rel="nofollow" title="@if(isset($info)){{$info->site_name}}@endif">
                                                <span class="icon icon-youtube" aria-hidden="true">
                                                <i class="fa fa-youtube"></i>
                                                </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" class="icon-fallback-text txt-instagram hv-bg-instagram hv-bd-instagram" href="@if(isset($info)){{$info->instagram}}@endif" rel="nofollow" title="@if(isset($info)){{$info->site_name}}@endif">
                                                <span class="icon icon-instagram" aria-hidden="true">
                                                <i class="fa fa-instagram"></i>
                                                </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                                <div class="footer-widget">
                                    <h4 class="footer-title">
                                        <span>Fanpage</span>
                                    </h4>
                                    <div class="footer-fanpage">
                                        <div class="fb-page" data-href="@if(isset($info)){{$info->fanpage}}@endif"  data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                                            <blockquote cite="@if(isset($info)){{$info->fanpage}}@endif" class="fb-xfbml-parse-ignore">
                                                <a href="@if(isset($info)){{$info->fanpage}}@endif"></a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 hotline_bottom">
                                <img src="{{url('')}}/assets/frontend/img/bottom_hotline.png" alt="Hotline" class="img-responsive">
                                <a href="tel:0939080603">0939.080.603</a><span class="hidden-sm hidden-xs">(Miễn phí cuộc gọi)</span>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 copyright">
                                <span>Bản quyền thuộc về <a href="#" title="Title Here" rel="nofollow" target="_blank"><strong>OSIMI.VN</strong></a></span><span class="hidden-xs">
                            </div>
                        </div>
                        <div class="back-to-top"><i class="fa fa-arrow-circle-up"></i></div>
                    </div>
                </div>
            </footer>
            <script src="{{url('')}}/assets/frontend/assets/themes_support/api.jquery.js" type="text/javascript"></script> 
            <!-- Plugin JS -->
            <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/plugin.js" type="text/javascript"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.3/jquery.mmenu.all.js" type="text/javascript"></script>
            <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/cs.script.js" type="text/javascript"></script>
            <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/api.jquery.custom.js" type="text/javascript"></script>
            <!-- Main JS -->
            <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/main.js" type="text/javascript"></script>
            <!-- TÍNH NĂNG CHO SITE BÁN SẢN PHẨM -->
            <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/bpr-products-module.css" rel="stylesheet" type="text/css">
            <link href="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/sidebar_menu.scss.css" rel="stylesheet" type="text/css">
            <script src="{{url('')}}/assets/frontend/100/326/299/themes/691188/assets/sidebar_menu.js" type="text/javascript"></script>
            <!-- Facebook Fanpage -->
            <div id="fb-root"></div>
            <script>
                if(navigator.userAgent.indexOf("Speed Insights") == -1) { 
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                }
            </script>
        </div>
        <nav id="nav-mobile" class="hidden-lg">
            <div id="panel-menu">
                <ul>
                    <li class="active">
                        <a href="/">Trang chủ</a>
                    </li>
                    <li >
                        <a href="{{route('getGioiThieu')}}">Giới Thiệu</a>
                    </li>
                    <li >
                        <a href="">Dự Án</a>
                        <ul>
                            <li >
                                <a href="{{route('getDuAnDaTrienKhai')}}">Dự Án Đã Triển Khai</a>
                            </li>
                            <li >
                                <a href="{{route('getDuAnDangTrienKhai')}}">Dự Án Đang Triển Khai</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                        <a href="#">Tin Tức</a>
                        @if(isset($newsCate))
                        <ul>
                            @foreach($newsCate as $value)
                            <li >
                                <a href="{{route('getDanhMucTinTucFrontend', ['id'=>$value->id, 'slug'=>$value->slug])}}">{{$value->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    <li>
                        <a href="{{route('tuyendung')}}">Tuyển Dụng</a>
                    </li>
                    <li>
                        <a href="{{route('getLienHeFrontend')}}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <div id="panel-account">
                <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
                <input name="FormType" type="hidden" value="contact">
                <input name="utf8" type="hidden" value="true">
                <div id="emtry_contact" class="form-signup form_contact clearfix">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <fieldset class="form-group">   
                                
                                <input type="text" placeholder="Nhập Từ Khoá Tìm Kiếm" name="txtSearch" class="form-control form-control-lg" required="">
                            </fieldset>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label>Tìm Kiếm Theo: </label>
                            <div class="search_choice___input_index">
                                <div class="search-form col-xs-6">
                                    <input checked type="radio" class="search_product" name="typeSearch" value="true">
                                    <span>Tên Dự Án</span>
                                </div>
                                <div class="search-form col-xs-6">
                                    <input type="radio" class="search_product" name="typeSearch" value="true">
                                    <span>Tin Tức</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top: 20px;">
                            <button tyle="submit" class="btn libra-health___button pull-right">
                                <span>Tìm Kiếm</span>
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </nav>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1965284407097212&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <script type="text/javascript" src="{{url('')}}/assets/frontend/custom/custom.footer.js"></script>
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b9631bdafc2c34e96e85f24/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>