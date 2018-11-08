@extends('admin.general.master')
@section('title', 'Cấu Hình Thông Tin Chung Website | OSIMI.VN - WEBSITE CHỦ ĐẦU TƯ')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	    	<form method="POST" action="{{route('postWebInfo',['key'=>'web-info'])}}" class="form-horizontal form-label-left"">
	        @csrf
			    <div class="x_panel">
			        <div class="x_title">
			            <h2>Cấu Hình Thông Tin Chung Website</h2>
			            <button type="submit" class="btn btn-success pull-right">Cập Nhật Dữ Liệu</button>
			            <div class="clearfix"></div>
			        </div>
			        <div class="x_content">
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Tên Website
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtSiteName" value="@if($info){{$info->site_name}}@endif" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Số Điện Thoại
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <table class="table table-bordered">
			                      	<thead>
			                        	<tr>
		                          			<th class="center" style="width: 30%">Tiêu Đề</th>
		                          			<th class="center" style="width: 30%">Số Điện Thoại</th>
				                          	<th class="center" style="width: 5%"><a onclick="addPhoneNumber();" href="javascript:;" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a></th>
			                        	</tr>
			                      	</thead>
			                      	<tbody id="contentPhone">
			                      		@if($info)
			                      		@php $i=0 @endphp
                                        @foreach (unserialize($info->phone) as $value)
		                        		<tr id="rowPhone{{$i}}">
										    <td class="center"> <input value="{{$value['title']}}" name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
										    <td class="center"> <input value="{{$value['phone']}}" name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>
										    <td class="center"><a href="javascript:void(0)" onclick="$('#rowPhone{{$i}}').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
										</tr>
										@php $i++ @endphp
                                        @endforeach
                                        @endif
			                      </tbody>
			                    </table>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Email
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <table class="table table-bordered">
			                      	<thead>
			                        	<tr>
		                          			<th class="center" style="width: 30%">Tiêu Đề</th>
		                          			<th class="center" style="width: 30%">Email</th>
				                          	<th class="center" style="width: 5%"><a onclick="addEmail();" href="javascript:;" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a></th>
			                        	</tr>
			                      	</thead>
			                      	<tbody id="contentMail">
			                      		@if($info)
			                      		@php $i=0 @endphp
                                        @foreach (unserialize($info->email) as $value)
                                        <tr id="rowMail{{$i}}">
											<td class="center"> <input value="{{$value['title']}}" name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
											<td class="center"> <input value="{{$value['email']}}" name="txtMail[]" value="" type="email" class="form-control" placeholder="Email"></td>
											<td class="center"><a href="javascript:void(0)" onclick="$('#rowMail{{$i}}').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
										</tr>
										@php $i++ @endphp
                                        @endforeach
                                        @endif
			                      </tbody>
			                    </table>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Địa Chỉ
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <table class="table table-bordered">
			                      	<thead>
			                        	<tr>
		                          			<th class="center" style="width: 30%">Tiêu Đề</th>
		                          			<th class="center" style="width: 30%">Địa Chỉ</th>
				                          	<th class="center" style="width: 5%"><a onclick="addAddress();" href="javascript:;" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a></th>
			                        	</tr>
			                      	</thead>
			                      	<tbody id="contentAddress">
			                      		@if($info)
		                        		@php $i=0 @endphp
                                        @foreach (unserialize($info->address) as $value)
                                        <tr id="rowAddress{{$i}}">
											<td class="center"> <input value="{{$value['title']}}" name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>
											<td class="center"> <input value="{{$value['address']}}" name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>
											<td class="center"><a href="javascript:void(0)" onclick="$('#rowAddress{{$i}}').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
										</tr>
										@php $i++ @endphp
                                        @endforeach
                                        @endif
			                      </tbody>
			                    </table>
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Link Fanpage
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtFanPage" value="@if($info){{$info->fanpage}}@endif" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Link Twitter
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtTwitter" value="@if($info){{$info->twitter}}@endif" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Link Google Plus
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtGooglePlus" value="@if($info){{$info->google_plus}}@endif" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Link Youtube Channel
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtYoutubeChannel" value="@if($info){{$info->youtube_channel}}@endif" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Link Instagram
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtInstagram" value="@if($info){{$info->instagram}}@endif" type="text" class="form-control">
					        </div>
					    </div>
			        </div>
			    </div>
			</form>
		</div>
	</div>
</div>
<?php
	$phoneData = unserialize($info->phone);
	$emailData = unserialize($info->email);
	$addressData = unserialize($info->address);
?>
<script>
var row = {{count($phoneData)}};
function addPhoneNumber(){
    html = '<tr id="rowPhone'+row+'">';
    html += '<td class="center"> <input name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowPhone'+row+'\').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td></tr>';
    $('#contentPhone').append(html);
    row++;
}
</script>
<script>
function addEmail(){
	var row = {{count($emailData)}};
    html = '<tr id="rowMail'+row+'">';
    html += '<td class="center"> <input name="txtTitleMail[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtMail[]" value="" type="email" class="form-control" placeholder="Email"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowMail'+row+'\').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td></tr>';
    $('#contentMail').append(html);
    row++;
}
</script>
<script>
function addAddress(){
	var row = {{count($addressData)}};
    html = '<tr id="rowAddress'+row+'">';
    html += '<td class="center"> <input name="txtTitleAddress[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtAddress[]" value="" type="text" class="form-control" placeholder="Địa Chỉ"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowAddress'+row+'\').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td></tr>';
    $('#contentAddress').append(html);
    row++;
}
</script>
@endsection