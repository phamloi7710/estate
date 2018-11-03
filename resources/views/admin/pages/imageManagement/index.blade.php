@section('title')
Quản Lý Hình Ảnh
@stop
@extends('admin.general.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Quản Lý Hình Ảnh</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <iframe width="100%" height="450px;" frameborder="0" src="{{url('')}}/admin/uploads?type=image"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop