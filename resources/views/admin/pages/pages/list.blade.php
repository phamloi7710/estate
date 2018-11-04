@section('title')
Quản Lý Trang Con
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Các Trang Con</h2>
            <a href="{{route('getAddPageAdmin')}}" title="Thêm Mới Trang Con" class="btn btn-primary btn-xs pull-right"> Thêm Mới</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="center">ID</th>
                                    <th class="center">Tiêu Đề</th>
                                    <th class="center">Đường Dẫn</th>
                                    <th class="center">Trạng Thái</th>
                                    <th class="center">Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                <tr style=" width:100%;">
                                    <td style="width:5%;">{{$page->id}}</td>
                                    <td style="width:20%;">{{$page->title}}</td>
                                    <td><a target="_blank" href="{{url('')}}/{{$page->url}}.html" title="">{{url('')}}/{{$page->url}}.html</a></td>
                                    <td class="center">
                                        @if($page->status=='active')
                                        <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                                        @else
                                        <p class="label label-danger" style="font-size: 10px;">Không Hoạt Động</p>
                                        @endif
                                    </td>
                                    <td style="width:10%;">
                                        <a href="{{route('getEditPageAdmin', ['id'=>$page->id])}}" class="btn btn-primary btn-xs">Sửa</a>
                                        <a onclick="return alertMsg('','Bạn Có Muốn Xoá Trang Này Không?');" class="btn btn-danger btn-xs">Xoá</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->


@endsection