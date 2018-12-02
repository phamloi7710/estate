@section('title')
Thêm Mới Tài Khoản
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <form id="formAddUser" method="POST" action="{{route('postAddUser')}}" data-parsley-validate class="form-horizontal form-label-left">
        @csrf
            <div class="x_title">
                <h2>Thêm Mới Tài Khoản</h2>
                <button type="submit" class="btn btn-success pull-right" >Lưu Lại</button>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
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
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Họ Tên Đầy Đủ<span class="required" style="color: red;">  (*)</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtFullName" type="text" class="form-control" placeholder="Nhập Họ Đầy Đủ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Địa Chỉ Email<span class="required" style="color: red;">  (*)</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtEmail" type="text" class="form-control" placeholder="Nhập Địa Chỉ Email">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Tên Đăng Nhập<span class="required" style="color: red;">  (*)</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtUserName" type="text" class="form-control" placeholder="Nhập Tên Đăng Nhập">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Địa Chỉ<span class="required" style="color: red;">  (*)</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtAddress" type="text" class="form-control" placeholder="Nhập Địa Chỉ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Số Điện Thoại<span class="required" style="color: red;">  (*)</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input name="txtPhone" type="text" class="form-control" placeholder="Nhập Số Điện Thoại">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12">Quyền Truy Cập<span class="required" style="color: red;">  (*)</span> (<i>Thiết lập các chức năng trên website mà tài khoản này có thể truy cập</i>)
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <select name="roles[]" id="optgroup" class="ms form-control" multiple="multiple">
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
        </form>
    </div>
</div>
@section('script')
<script type="text/javascript">
  // run pre selected options
  $('#optgroup').multiSelect();
  $(document).ready(function() {

        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formAddUser").validate({
            rules: {
                txtFullName: "required",
                txtEmail: {
                    required: true,
                    email: true
                },
                txtUserName: "required",
                txtAddress: {
                    required: true,
                    minlength: 6
                },
                txtPhone: {
                    required: true,
                    number: true
                },
                roles: "required"
            },
            messages: {
                txtFullName: "Tên đầy đủ không được bỏ trống",
                txtEmail: {
                    required: "Địa chỉ Email không được bỏ trống",
                    email: "Địa chỉ email không đúng định dạng"
                },
                txtUserName: "Tên đăng nhập không được bỏ trống",
                txtAddress: {
                    required: "Vui lòng nhập địa chỉ",
                    minlength: "Địa chỉ phải có ít nhất 6 ký tự"
                },
                txtPhone: {
                    required: "Số điện thoại không được bỏ trống",
                    number: "Chỉ cho phép nhập số"
                },
                roles: "Chưa có quyền nào được chọn"
            }
        });
    });
  </script>

@stop
@stop