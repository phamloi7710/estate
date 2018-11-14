@section('title')
Quản Lý Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Dự Án</h2>
            <a href="{{route('getAddDuAnAdmin')}}" title="Thêm Mới Dự Án" class="btn btn-primary btn-xs pull-right"> Thêm Mới</a>
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
                                    <th class="center">Hình Ảnh</th>
                                    <th class="center">Sắp Xếp</th>
                                    <th class="center">Trạng Thái</th>
                                    <th class="center">Trang Chủ</th>
                                    <th class="center">Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($duan as $value)
                                <tr>
                                    <td class="center">{{$value->id}}</td>
                                    <td>{{$value->title}}</td>
                                    <td class="center"><img width="200" src="{{url('')}}{{$value->image}}"></td>
                                    <td class="center">{{$value->order}}</td>
                                    <td class="center">
                                        @if($value->status=='active')
                                        <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                                        @else
                                        <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                                        @endif
                                    </td>
                                    <td class="center">
                                        @if($value->status_home=='active')
                                        <p class="label label-success" style="font-size: 10px;" data-toggle="tooltip" data-placement="left" data-original-title='Nếu nhiều dự án có cùng trạng thái "Đang Hiển Thị" thì tự động sẽ lấy dự án đầu tiên để hiển thị ra trang chủ!'>Đang Hiển Thị</p>
                                        @else
                                        <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                                        @endif
                                    </td>
                                    <td style="width:10%;">
                                        <a href="{{route('getEditDuAnAdmin', ['id'=>$value->id])}}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="bottom" data-original-title="Chỉnh Sửa Dự Án">Sửa</a>
                                        <a onclick="return alertMsg('{{route('getDeleteDuAnAdmin', ['id'=>$value->id])}}','Thao Tác Này Sẽ Không Được Khôi Phục. Bạn Có Muốn Xoá Trang Này Không?');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" data-original-title="Xóa Dự Án">Xoá</a>
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