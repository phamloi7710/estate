@section('title')
@stop
@extends('admin.general.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
	            <ol class="breadcrumb breadcrumb-bg-cyan">
	                <li><a href="{{route('getIndexAdmin')}}"><i class="material-icons">home</i> Trang Chủ</a></li>
	                <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Tin Tức</a></li>
	                <li class="active">Danh Sách Tin Tức</li>
	            </ol>
			</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tất Cả Tin Tức
                        </h2>
                        <div class="header-dropdown m-r--5">
                            <a href="{{route('getAddNews')}}" class="btn btn-success">Thêm Mới</a>
                        </div>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tiêu Đề</th>
                                    <th>Ảnh Bìa</th>
                                    <th>Tóm Tắt</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop