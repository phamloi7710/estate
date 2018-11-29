
@section('content')
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
						<strong itemprop="title">Kết quả tìm kiếm</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="search-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="module-header">
                    <h1 class="module-title libra-health___title">
                        <span>Kết quả tìm kiếm phù hợp cho từ khóa "<i>{{$data}}</i>"</span>
                    </h1>
                </div>
            </div>
            <div class="products-view-grid">
                @foreach($result as $value)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 search-item search-grid-article">
                    <div class="item">
                        <div class="article-item">
                            <div class="article-thumbnail image-hover-1">
                                <a href="@if($type=='news'){{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}@elseif($type=='project'){{route('getChiTietDuAnFrontend', ['url'=>$value->url])}}@endif" title="{{$value->title}}">
                                <img src="{{url('')}}{{$value->image}}" data-lazyload="{{url('')}}{{$value->image}}" class="img-responsive" alt="{{$value->title}}">
                                </a>
                            </div>
                            <div class="article-info">
                                <h3 class="fw article-title">
                                    <a href="@if($type=='news'){{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}@elseif($type=='project'){{route('getChiTietDuAnFrontend', ['url'=>$value->url])}}@endif" title="{{$value->title}}">
                                    <span>{{$value->title}}</span>
                                    </a>
                                </h3>
                                <div class="article-summary">
                                    <i class="fa fa-edit" aria-hidden="true"></i>  
                                    {{$value->tomtat}}...
                                </div>
                                <div class="libra-health___viewmore">
                                    <a href="@if($type=='news'){{route('getChiTietTinTucFrontend', ['url'=>$value->slug])}}@elseif($type=='project'){{route('getChiTietDuAnFrontend', ['url'=>$value->url])}}@endif" title="Chi Tiết">
                                    <span>Chi Tiết</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
            {{$result->links('frontend.pages.phantrang')}}
        </div>
    </div>
</section>
@stop