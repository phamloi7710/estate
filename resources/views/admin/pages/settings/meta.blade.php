@extends('admin.general.master')
@section('title', 'Meta SEO | OSIMI.VN - WEBSITE CHỦ ĐẦU TƯ')
@section('content')
<div class="right_col" role="main">
	<div class="row">
	    <div class="col-md-12 col-sm-12 col-xs-12">
	    	<form method="POST" action="{{route('postMetaSEO',['key'=>'meta'])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
	        @csrf
			    <div class="x_panel">
			        <div class="x_title">
			            <h2>Meta SEO Setting</h2>
			            <button type="submit" class="btn btn-success pull-right">Cập Nhật Dữ Liệu</button>
			            <div class="clearfix"></div>
			        </div>
			        <div class="x_content">
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề (Meta Title)
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txttitle" value="{{$meta['title']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thẻ Từ Khoá (Meta Keyword)
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtkeyword" value="{{$meta['keyword']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thẻ Mô Tả (Meta Description)
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtdescription" value="{{$meta['description']}}" type="text" class="form-control">
					        </div>
					    </div>
					    <div class="form-group">
					        <label class="control-label col-md-3 col-sm-3 col-xs-12">Charset
					        </label>
					        <div class="col-md-6 col-sm-6 col-xs-12">
					            <input name="txtcharset" value="{{$meta['charset']}}" type="text" class="form-control">
					        </div>
					    </div>
			        </div>
			    </div>
			</form>
		</div>
	</div>
</div>
@endsection