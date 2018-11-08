@section('title'){{$news->title}} - @stop
@section('description', $news->seoDescription)
@section('keyword', $news->seoKeyWorks)
@section('url', route('getChiTietTinTucFrontend',['slug'=>$news->slug]))
@section('image'){{url('')}}{{$news->image}}@stop
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
                        <strong itemprop="title">Danh Mục Tin Tức</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-articles article">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-md-push-4 col-lg-push-3">
                <article class="article-main module-content" itemscope="" itemtype="http://schema.org/Article">
                    <div class="row">
                        <div class="article-main-content">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h1 class="title-head article-title">
                                    <span>{{$news->title}}</span>
                                </h1>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="fw article-info">
                                    <div class="fw article-detail">
                                        <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{date('d/m/Y h:i', strtotime($news->created_at))}}
                                        </span>
                                    </div>
                                </div>
                                <div class="article-image">
                                    <img class="img-responsive" src="{{url('')}}{{$news->image}}" alt="{{$news->title}}">
                                </div>
                                <div class="article-content">
                                    <div class="rte">
                                        {!!$news->content!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tags_and_social">
                                <ul class="article_tags tags-list">
                                    <li class="tag-item">
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/apple" title="Các bài viết có tag : apple">apple</a>
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/iphone" title="Các bài viết có tag : iphone">iphone</a>
                                        <a class="tag_hover_style_1" href="/blogs/all/tagged/mobile" title="Các bài viết có tag : mobile">mobile</a>
                                    </li>
                                </ul>
                                <div class="social-sharing article-sharing">
                                    <div class="social-media social-icons" data-permalink="https://libra-health.bizwebvietnam.net/phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphone-2018">
                                        <div class="sharing-item">
                                            <a target="_blank" href="//www.facebook.com/sharer.php?u=https://libra-health.bizwebvietnam.net/phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphone-2018" class="share-facebook txt-facebook hv-bg-facebook hv-bd-facebook" title="Chia sẻ lên Facebook">
                                            <span class="icon icon-facebook" aria-hidden="true">
                                            <i class="fa fa-facebook"></i>
                                            </span>
                                            </a>
                                            <a target="_blank" href="//twitter.com/share?text=phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphon&amp;url=https://libra-health.bizwebvietnam.net/phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphone-2018" class="share-twitter txt-twitter hv-bg-twitter hv-bd-twitter" title="Chia sẻ lên Twitter">
                                            <span class="icon icon-twitter" aria-hidden="true">
                                            <i class="fa fa-twitter"></i>
                                            </span>
                                            </a>
                                            <a target="_blank" href="//plus.google.com/share?url=https://libra-health.bizwebvietnam.net/phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphone-2018" class="share-google txt-google-plus hv-bg-google-plus hv-bd-google-plus" title="+1 lên Google Plus">
                                            <span class="icon icon-google-plus" aria-hidden="true">
                                            <i class="fa fa-google-plus"></i>
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="related_articles">
                                <div class="module-header">
                                    <h2 class="module-title libra-health___title">
                                        <a href="/tin-cong-nghe">
                                        <span>
                                        <i class="fa fa-edit" aria-hidden="true"></i> Bài viết cùng chủ đề
                                        </span>
                                        </a>
                                    </h2>
                                </div>
                                <div class="module-content">
                                    <div class="fw">
                                        <ul>
                                            @foreach($cungchude as $baivietcungchude)
                                            <li class="item">
                                                <a class="article-title" href="{{route('getChiTietTinTucFrontend', ['slug'=>$baivietcungchude->slug])}}" title="{{$baivietcungchude->title}}">
                                                <span>{{$baivietcungchude->title}}</span>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="comments">
                                <div class="bg-warning padding-15">
                                    <div class="text-warning">
                                        Nội dung này chưa có bình luận, hãy gửi bình luận đầu tiên của bạn.
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Binh luan -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form accept-charset="UTF-8" action="/posts/phan-tich-quy-luat-chon-ngay-dep-cua-apple-de-xac-dinh-ngay-ra-mat-cac-mau-iphone-2018/comments" id="article_comments" method="post">
                                <input name="FormType" type="hidden" value="article_comments">
                                <input name="utf8" type="hidden" value="true">
                                <div class="notification">
                                    <!-- Thông báo -->
                                    <!-- Thông báo lỗi -->
                                </div>
                                <!-- Bình luận -->
                                <!-- <fieldset class="form-comment">
                                    <legend>Viết bình luận</legend>
                                    <div class="row margin-bottom-15">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <fieldset class="form-group">
                                                <label>Nội dung <span class="text-danger">*</span></label>
                                                <textarea class="form-control form-control-lg input-control" id="comment" name="Body" rows="5" maxlength="500" minlength="5" placeholder="Vui lòng nhập nội dung" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <fieldset class="form-group margin-top-15">
                                                <label>Họ tên <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg input-control" value="" id="full-name" name="Author" placeholder="Vui lòng nhập họ tên" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <fieldset class="form-group margin-top-15">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control form-control-lg input-control" value="" id="email" name="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$" placeholder="Vui lòng nhập email" required="">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn libra-health___button">
                                    <span>Gửi bình luận</span>
                                    </button>
                                </fieldset> -->
                            </form>
                        </div>
                        <!-- Binh luan -->
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-md-pull-8 col-lg-pull-9">
                <!-- DANH MỤC BLOG -->
                <div class="sidebar-item sidebar-menu sidebar-blog-menu item-border">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title">
                            <span>
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i> Danh mục tin tức
                            </span>
                        </h2>
                    </div>
                    <div class="sidebar-menu-content module-content">
                        <div class="sidebar-linklists">
                            <ul>
                                @foreach($category as $cate)
                                <li class="sidebar-menu-list blog-sidebar-menu">
                                    <a class="ajaxLayer" href="{{route('getDanhMucTinTucFrontend', ['url'=>$cate->slug])}}" title="{{$cate->name}}">
                                    <span>{{$cate->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop