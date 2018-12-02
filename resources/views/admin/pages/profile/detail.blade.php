@section('title')
Thông Tin Tài Khoản
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
  <div class="x_panel">
      @if(Session('success'))
      <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <strong>Thành Công!</strong> {{Session('success')}}
      </div>
      @endif
      <div class="x_title">
          <h2>Thông Tin Tài Khoản</h2>
          <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <div class="row">
              <form id="formUpdateProfile" action="{{route('postDetailProfile', ['username'=>Auth::user()->username])}}" method="POST" class="form-horizontal form-label-left">
                  @csrf
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                      <img style="width: 100%; height: 100%;" id="previewImage" class="imagePreview img-responsive thumbnail" src="{{url('')}}{{$user->avatar}}">
                      <input value="{{$user->avatar}}" id="avatar" name="avatar" class="form-control" type="hidden">
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
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#thongtincoban" id="tabThongTinCoBan" role="tab" data-toggle="tab" aria-expanded="true">Thông Tin Cơ Bản</a>
                              </li>
                              <li role="presentation" class=""><a href="#doimatkhau" role="tab" id="tabChangePassword" data-toggle="tab" aria-expanded="false">Thay Đổi Mật Khẩu</a>
                              </li>
                          </ul>
                          <div id="myTabContent" class="tab-content">
                              <div role="tabpanel" class="tab-pane fade active in" id="thongtincoban" aria-labelledby="tabThongTinCoBan">
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                              <label class="col-md-12 col-sm-12 col-xs-12">Họ Tên Đầy Đủ
                                              </label>
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                  <input value="{{$user->name}}" name="txtFullName" type="text" class="form-control" placeholder="Nhập Họ Đầy Đủ">
                                              </div>
                                          </div>
                                          <br>
                                          <div class="form-group">
                                              <label class="col-md-12 col-sm-12 col-xs-12">Địa Chỉ Email
                                              </label>
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                  <input value="{{$user->email}}" disabled name="txtEmail" type="text" class="form-control" placeholder="Nhập Địa Chỉ Email">
                                              </div>
                                          </div>
                                          <br>
                                          <div class="form-group">
                                              <label class="col-md-12 col-sm-12 col-xs-12">Tên Đăng Nhập
                                              </label>
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                  <input value="{{$user->username}}" disabled name="txtUserName" type="text" class="form-control" placeholder="Nhập Tên Đăng Nhập">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="form-group">
                                              <label class="col-md-12 col-sm-12 col-xs-12">Địa Chỉ
                                              </label>
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                  <input value="{{$user->address}}" name="txtAddress" type="text" class="form-control" placeholder="Nhập Địa Chỉ">
                                              </div>
                                          </div>
                                          <br>
                                          <div class="form-group">
                                              <label class="col-md-12 col-sm-12 col-xs-12">Số Điện Thoại
                                              </label>
                                              <div class="col-md-12 col-sm-12 col-xs-12">
                                                  <input value="{{$user->phone}}" name="txtPhone" type="text" class="form-control" placeholder="Nhập Số Điện Thoại">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-success pull-right" >Lưu Lại Thông Tin</button>
              </form>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="doimatkhau" aria-labelledby="tabChangePassword">
              <form id="formChangePass" action="{{route('postChangePassword', ['username'=>Auth::user()->username])}}" method="POST" class="form-horizontal form-label-left">
              @csrf
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật Khẩu Cũ
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="oldPass" type="password" required="required" class="form-control">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật Khẩu Mới
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="newPass" name="newPass" type="password" required="required" class="form-control">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nhập Lại Mật Khẩu Mới
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
              <input name="reNewPass" type="password" required="required" class="form-control">
              </div>
              </div>
              <button type="submit" class="btn btn-success pull-right">Đổi Mật Khẩu</button>
              </form>
              </div>
              </div>
              </div> 
              </div>
          </div>
      </div>
  </div>
</div>
@section('script')
<script type="text/javascript">
    // run pre selected options
    $('#optgroup').multiSelect();
    $(document).ready(function() {
    
          //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
          $("#formUpdateProfile").validate({
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
          $("#formChangePass").validate({
              rules: {
                  oldPass: {
                      required: true,
                      minlength: 6
                  },
                  newPass: {
                      required: true,
                      minlength: 6
                  },
                  reNewPass: {
                      required: true,
                      minlength: 6,
                      equalTo: "#newPass"
                  },
              },
              messages: {
                  oldPass: {
                      required: "Trường này không được bỏ trống.",
                      minlength: "Mật khẩu cũ phải có ít nhất 6 ký tự."
                  },
                  newPass: {
                      required: "Trường này không được bỏ trống.",
                      minlength: "Mật khẩu mới phải có ít nhất 6 ký tự."
                  },
                  reNewPass: {
                      required: "Trường này không được bỏ trống.",
                      minlength: "Mật khẩu nhập lại phải có ít nhất 6 ký tự.",
                      equalTo: "Nhập lại mật khẩu mới không trùng khớp."
                  },
              }
          });
      });
</script>
@stop
@stop