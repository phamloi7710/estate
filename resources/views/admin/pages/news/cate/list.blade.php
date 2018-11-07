
@section('title')
Quản Lý Trang Con
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Mục Tin Tức</h2>
            <button class="btn btn-success pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Thêm Mới Danh Mục</button>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="tableSortable" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class=""> Tên Danh Mục</th>
                                    <th class="" style="text-align: center; width: 10%"> Trạng Thái</th>
                                    <th class=" no-link last" style="text-align: center; width: 10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $cate)
                                <tr>
                                    <td>{{$cate->name}}</td>
                                    <td class="center">
                                        @if($cate->status=='active')
                                        <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                                        @else
                                        <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-primary btn-xs pull-right" href="javascript:;" data-toggle="modal" data-target=".{{$cate->id}}">Sửa</a>
                                        <a onclick="alertMsg('{{route('deleteNewsCate', ['id'=> $cate->id])}}', 'Bạn Có Muốn Xoá Mục Này Không?');" class="btn btn-danger btn-xs">Xoá</a>
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Thêm Mới Danh Mục Tin Tức</h4>
         </div>
         <form action="{{route('postAddNewsCate')}}" method="POST" class="form-horizontal form-label-left">
            @csrf
             <div class="modal-body">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtCategoryName" value="{{old('txtCategoryName')}}" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng Thái
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <input value="active" type="radio" class="flat" checked name="status"> Hiển Thị
                        </label><br>
                        <label>
                            <input value="inActive" type="radio" class="flat" name="status"> Không Hiển Thị
                        </label>
                    </div>
                </div>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> Thêm Mới</button>
             </div>
        </form>
      </div>
   </div>
</div>
@foreach($category as $cate)
<div class="modal fade {{$cate->id}}" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Chỉnh Sửa Danh Mục Tin Tức</h4>
         </div>
         <form action="{{route('postEditNewsCate', ['id'=>$cate->id])}}" method="POST" class="form-horizontal form-label-left">
            @csrf
             <div class="modal-body">
                
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="{{$cate->name}}" name="txtCategoryName" value="{{old('txtCategoryName')}}" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng Thái
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <input @if($cate->status=='active')checked @endif value="active" type="radio" class="flat" name="status"> Hiển Thị
                        </label><br>
                        <label>
                            <input @if($cate->status=='inActive')checked @endif value="inActive" type="radio" class="flat" name="status"> Không Hiển Thị
                        </label>
                    </div>
                </div>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> Cập Nhật</button>
             </div>
        </form>
      </div>
   </div>
</div>
@endforeach
@stop
