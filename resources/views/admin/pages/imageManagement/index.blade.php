@section('title')
Quản Lý Hình Ảnh
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <!-- <div class="x_title">
            <h2>Quản Lý Hình Ảnh</h2>
            <div class="clearfix"></div>
        </div> -->
        <div class="x_content">
            <iframe width="100%" height="1000px;" frameborder="0" src="{{url('')}}/admin/uploads?type=image"></iframe>
        </div>
    </div>
</div>
@stop