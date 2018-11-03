@section('title')
Danh Sách Thành Viên
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
                            <div class="col-xs-12 col-sm-12">
                                <h2>Danh Sách Thành Viên
                                    <button class="btn btn-success pull-right" waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">Thêm Mới Thành Viên</button>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Thêm Mới Thành Viên</h4>
            </div>
             <form method="POST" action="{{route('postAddUser')}}" class="form-horizontal form-label-left">
                        @csrf
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="card">
                                <div class="body">
                                    <img style="width: 100%; height: 100%;" id="previewImage" class="imagePreview img-responsive thumbnail" src="{{url('')}}/assets/uploads/images/no-avatar.png">
                                    <input id="avatar" name="avatar" class="form-control" type="hidden">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a data-input="avatar" data-preview="previewImage" class="btn btn-info btn-xs selectImage"> Chọn Ảnh Đại Diện</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="javascript:;" class="btn btn-danger btn-xs deleteImage">Xoá Hình Ảnh</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Họ Và Tên Lót</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtLastName" type="text" class="form-control" placeholder="Nhập Họ Và Tên Lót">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Tên</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtFirstName" type="text" class="form-control" placeholder="Nhập Tên">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Địa Chỉ Email</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtEmail" type="text" class="form-control" placeholder="Nhập Địa Chỉ Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Tên Đăng Nhập</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtUserName" type="text" class="form-control" placeholder="Nhập Tên Đăng Nhập">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Mật Khẩu</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtPassword" type="password" class="form-control" placeholder="Nhập Mật Khẩu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Nhập Lại Mật Khẩu</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtRePassword" type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Địa Chỉ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtAddress" type="text" class="form-control" placeholder="Nhập Địa Chỉ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-ls-6">
                                            <b>Số Điện Thoại</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input name="txtPhone" type="text" class="form-control" placeholder="Nhập Số Điện Thoại">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
                                            <b>Quyền Truy Cập Website</b>
                                            <div class="input-group">
                                                <select id="optgroup" class="ms form-control" multiple="multiple">
                                                    @foreach($roles as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                            

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">LƯU LẠI</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ĐÓNG</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop