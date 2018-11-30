@section('title')
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
    	@if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Đã Xảy Ra Lỗi!</strong> {{ $error }}
          </div>
        @endforeach
        @endif
        <div class="x_title">
            <h2>Thiết Lập Quyền Truy Cập</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        	<div class="row">
        		<div class="col-md-4">
        			<form class="form-horizontal form-label-left" method="POST" action="{{route('postAddPermisssion')}}">
		                    @csrf
		                    
		                    <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                    	<br>
		                        <b>Key</b>
		                        <select id="mutiselect" name="permission[]" class="form-control show-tick" multiple>
		                            @foreach($permission as $value)
		                                <option value="{{$value->id}}">{{$value->name}}</option>
		                            @endforeach
		                        </select>
		                    </div>
		                    <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                    	<br>
		                        <b>Tên Quyền Truy Cập</b>
		                        <div class="form-group">
		                            <input name="name" type="text" class="form-control" placeholder="Nhập Tên Quyền Truy Cập">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                        <button type="submit" class="btn btn-success pull-left">Lưu Lại</button>
		                    </div>
		            </form>
        		</div>
        		<div class="col-md-7 pull-right">
        			<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="center" style="width: 10%">ID</th>
                                <th style="width: 70%">Tên Quyền Truy Cập</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td class="center">{{$value->name}}</td>
                                <td class="center">
                                    <a href="{{route('getEditPermisssion', ['id'=>$value->id])}}" class="btn btn-success btn-xs">Sửa</a>
                                    <a class="btn btn-danger btn-xs">Xóa</a>
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
@section('script')
<script type="text/javascript">
  // run pre selected options
  $('#mutiselect').multiSelect();
  </script>
@stop
@stop