@section('title')
Danh Sách Slider
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sliders</h2>
                <a class="btn btn-primary pull-right" href="{{route('getAddSliderAdmin')}}"> Thêm Mới</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-bordered">
                    <thead>
                        <tr class="center">
                            <th>#</th>
                            <th>Tiêu Đề</th>
                            <th>Đường Dẫn</th>
                            <th>Hình Ảnh</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="center">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                <a onclick="return alertMsg('','Bạn Có Muốn Xoá Slider Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
    