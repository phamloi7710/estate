@section('title')
Danh Sách Slider
@stop
@extends('admin.general.master')
@section('content')

<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Slider</h2>
            
            <a href="{{route('getAddSliderAdmin')}}"  class="btn btn-success pull-right">Thêm Mới</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content" style="overflow-x:auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="column-title center">ID</th>
                        <th class="column-title center">Tiêu Đề</th>
                        <th class="column-title center">Đường Dẫn</th>
                        <th class="column-title center">Hình Ảnh</th>
                        <th class="column-title center">Trạng Thái</th>
                        <th style="width: 10%">Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slider as $value)
                    <tr>
                        <td class="center">{{$value->id}}</td>
                        <td class="center">{{$value->title}}</td>
                        <td class="center">{{$value->url}}</td>
                        <td class="center">
                            @if($value->image)
                            <img width="200" src="{{url('')}}{{$value->image}}">
                            @else
                            <p class="label label-warning" style="font-size: 10px;">Chưa Có Hình Ảnh</p>
                            @endif
                        </td>
                        <td class="center">
                            @if($value->status=='active')
                            <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                            @else
                            <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                            @endif
                        </td>
                        <td class="center">
                            <a class="btn btn-primary btn-xs pull-right" href="{{route('getEditSliderAdmin', ['id'=> $value->id])}}">Sửa</a>
                            <a onclick="alertMsg('{{route('deleteSliderAdmin', ['id'=> $value->id])}}', 'Bạn Có Muốn Xoá Mục Này Không?');" class="btn btn-danger btn-xs">Xoá</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
