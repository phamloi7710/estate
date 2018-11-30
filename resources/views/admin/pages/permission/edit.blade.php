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
        <form class="form-horizontal form-label-left" method="POST" action="{{route('postEditPermisssion', ['id'=>$role->id])}}">
            @csrf
            <div class="x_title">
                <h2>Chỉnh Sửa Quyền Truy Cập</h2>
                <button type="submit" class="btn btn-success pull-right">Lưu Lại</button>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-ls-4">
                            <br>
                            <b>Tên Quyền Truy Cập</b>
                            <div class="form-group">
                                <input value="{{$role->name}}" name="name" type="text" class="form-control" placeholder="Nhập Tên Quyền Truy Cập">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-ls-8">
                            <br>
                            <b>Key</b>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            @php $i=0 @endphp
                                            @foreach($permission as $value)
                                            <div class="checkbox">
                                                 <input name="permission[{{$i}}]" type="checkbox" class="flat" value="{{$value->id}}" @foreach($rolePermissions as $rolePermission) @if($rolePermission==$value->id) checked  @else @endif @endforeach>   {{$value->name}}
                                            </div>
                                            @php $i++ @endphp
                                            @endforeach
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>
        </form>
    </div>
</div>
@stop