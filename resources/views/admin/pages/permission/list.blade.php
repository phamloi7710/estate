@section('title')
@stop
@extends('admin.general.master')
@section('content')
<section class="content">
    <div class="container-fluid">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
		                <form class="form-horizontal form-label-left" method="POST" action="{{route('postAddPermisssion')}}">
		                        @csrf
		                        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                            <b>Tên</b>
		                            <div class="input-group">
		                                <div class="form-line">
		                                    <input name="name" type="text" class="form-control" placeholder="Nhập Tên Quyền Truy Cập">
		                                </div>
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                            <b>Quyền</b>
		                            <select name="permission[]" class="form-control show-tick" multiple>
                                        @foreach($permission as $value)
		                                    <option value="{{$value->id}}">{{$value->name}}</option>
	                                    @endforeach
                                    </select>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12">
		                            <button type="submit" class="btn btn-success pull-right">Thêm Mới</button>
		                        </div>
		                </form>
		            </div>
		        </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
		                <table class="table table-bordered">
	                        <thead>
	                            <tr>
	                                <th>ID</th>
	                                <th>Tên</th>
	                                <th></th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                            @foreach($roles as $value)
	                            <tr>
	                                <td>{{$value->id}}</td>
	                                <td>{{$value->name}}</td>
	                                <td>
	                                    <a class="btn btn-success">Sửa</a>
	                                    <a class="btn btn-success">Xóa</a>
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
    </div>
</section>
@stop