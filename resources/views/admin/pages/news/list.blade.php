
@section('title')
Quản Lý Tin Tức
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Mục Tin Tức</h2>
            <a href="{{route('getAddNews')}}" class="btn btn-success pull-right" >Thêm Mới Tin Tức</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="tableSortable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class=""> Tiêu Đề</th>
                                    <th class=""> Danh Mục</th>
                                    <th class=""> Ảnh Bìa</th>
                                    <th class=""> Tóm Tắt</th>
                                    <th class="" style="text-align: center; width: 10%"> Trạng Thái</th>
                                    <th class=" no-link last" style="text-align: center; width: 10%"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($news as $value)
                                <tr>
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->category->name}}</td>
                                    <td class="center"><img width="200" src="{{url('')}}{{$value->image}}"></td>
                                    <td>{{$value->tomtat}}</td>
                                    <td class="center">
                                        @if($value->status=='active')
                                        <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                                        @else
                                        <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-primary btn-xs pull-right" href="{{route('getEditNews', ['id'=>$value->id])}}">Sửa</a>
                                        <a onclick="alertMsg('{{route('deleteNews', ['id'=> $value->id])}}', 'Bạn Có Muốn Xoá Mục Này Không?');" class="btn btn-danger btn-xs">Xoá</a>
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
@stop