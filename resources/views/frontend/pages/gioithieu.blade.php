	
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
						<strong itemprop="title">Giới thiệu</strong>
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
						<h1 class="title-head page_title">Giới thiệu</h1>
					</div>
				<div class="content-page rte">
					<p>Nội dung trang giới thiệu</p>
				</div>
			</div>
		</div>
	</div>
</div>
		
@stop