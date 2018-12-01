@section('title')
Danh Sách Tài Khoản
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Tài Khoản</h2>
            <a href="{{route('getAddUser')}}" class="btn btn-success pull-right" >Thêm Mới Tài Khoản</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="tableSortable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="center" style="text-align: center; width: 10%">Tên Đầy Đủ</th>
                                    <th class="center" style="text-align: center; width: 10%"> Ảnh Đại Diện</th>
                                    <th class="center" style="text-align: center; width: 10%">Tên Đăng Nhập</th>
                                    <th class="center" style="text-align: center; width: 10%">Email</th>
                                    <th class="center" style="text-align: center; width: 10%">Số Điện Thoại</th>
                                    <th class="center" style="text-align: center; width: 10%">Địa Chỉ</th>
                                    <th class="center" style="text-align: center; width: 8%"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $value)
                                <tr>
                                    <td class="center">{{$value->name}}</td>
                                    <td class="center"><img width="100" src="{{url('')}}{{$value->avatar}}"></td>
                                    <td class="center">{{$value->username}}</td>
                                    <td class="center">{{$value->email}}</td>
                                    <td class="center">{{$value->phone}}</td>
                                    <td class="center">{{$value->address}}</td>
                                    <td class="center">
                                        <a class="btn btn-primary btn-xs pull-right" href="{{route('getEditUser', ['id'=>$value->id])}}">Sửa</a>
                                        <a onclick="alertMsg('{{route('deleteUser', ['id'=> $value->id])}}', 'Bạn Có Muốn Xoá Mục Này Không?');" class="btn btn-danger btn-xs">Xoá</a>
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