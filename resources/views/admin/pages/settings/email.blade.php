@section('title', 'Cấu Hình Email | OSIMI.VN - WEBSITE CHỦ ĐẦU TƯ')
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	    	<form method="POST" action="{{route('postEmailConfig')}}" class="form-horizontal form-label-left">
	         @csrf
			    <div class="x_panel">
			        <div class="x_title">
			            <h2>Cấu Hình Email</h2>
			            <button type="submit" class="btn btn-success pull-right"> Cập Nhật Dữ Liệu</button>
			            <div class="clearfix"></div>
			        </div>
			        <div class="x_content">
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Người Gửi </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtsender" value="{{$emailSetting['sender']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Địa Chỉ Email
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtemail" value="{{$emailSetting['email']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Mật Khẩu
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtpassword" value="{{$emailSetting['password']}}" type="password" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Driver
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtdriver" value="{{$emailSetting['driver']}}" type="text" class="form-control">
					        </div>
					    </div>
					     <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> SMTP Host
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txthost" value="{{$emailSetting['host']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> SMTP Port
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtport" value="{{$emailSetting['port']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Encrypt
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <div class="radio radio-primary">
	                                <input type="radio" name="radioencrypt" id="radio1" value="normal"
									<?php  
										if ($emailSetting['encrypt']=='normal') {
											echo "checked";
										}
									?>
	                                >
	                                <label for="radio1">
	                                    Normal
	                                </label>
	                            </div>
	                            <div class="radio radio-primary">
	                                <input type="radio" name="radioencrypt" id="radio2" value="ssl"
	                                <?php  
										if ($emailSetting['encrypt']=='ssl') {
											echo "checked";
										}
									?>
	                                >
	                                <label for="radio2">
	                                     SSL
	                                </label>
	                            </div>
					        </div>
					    </div>
			        </div>
			    </div>
			</form>
		</div>
	</div>
</div>
@endsection