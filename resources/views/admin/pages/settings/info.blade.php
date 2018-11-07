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
					            <input name="txtSiteName" value="" type="text" class="form-control">
					        </div>
					    </div>
			        </div>
			        <div class="x_content">
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">
					        	Số Điện Thoại
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <table class="table table-bordered">
			                      	<thead>
			                        	<tr>
			                          		<th class="center" style="width: 5%">STT</th>
		                          			<th class="center">Tiêu Đề</th>
		                          			<th class="center">Số Điện Thoại</th>
				                          	<th class="center" style="width: 5%"><a onclick="addPhoneNumber();" href="javascript:;" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a></th>
			                        	</tr>
			                      	</thead>
			                      	<tbody id="contentPhone">
		                        		
			                      </tbody>
			                    </table>
					        </div>
					    </div>
			        </div>
			    </div>
			</form>
		</div>
	</div>
</div>
<script>
var row = 1;
function addPhoneNumber(){
    html = '<tr id="rowPhone'+row+'">';
    html += '<td class="center">'+row+'</td>';
    html += '<td class="center"> <input name="txtTitlePhone[]" value="" type="text" class="form-control" placeholder="Tiêu Đề"></td>';
    html += '<td class="center"> <input name="txtPhone[]" value="" type="number" class="form-control" placeholder="Số Điện Thoại"></td>';
    html += '<td class="center"><a href="javascript:void(0)" onclick="$(\'#rowPhone'+row+'\').remove();" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>';
    $('#contentPhone').append(html);
    row++;
}
</script>
@endsection