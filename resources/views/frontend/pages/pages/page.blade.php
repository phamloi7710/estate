@section('title'){{$page->title}} - @stop
@section('description', $page->seoDescription)
@section('keyword', $page->seoKeyWorks)
@section('url', route('getPageFrontend',['slug'=>$page->url]))
@section('image'){{url('')}}{{$page->image}}@stop
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
						<strong itemprop="title">{{$page->title}}</strong>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="contact page-template">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="fw margin-bottom-30">
					<div class="module-title module-header margin-0">
						<h1 class="title-head page_title">{{$page->title}}</h1>
					</div>
				</div>
				<div class="content-page rte">
					{!!$page->content!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop