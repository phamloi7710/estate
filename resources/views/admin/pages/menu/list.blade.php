@section('title')
Thiết Lập Menu
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Thiết Lập Menu</h2>
            <a href="javascript:;" data-toggle="modal" data-target=".add-new-menu" title="Thêm Mới" class="btn btn-primary btn-xs pull-right"> Thêm Mới</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <br>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="center">Tiêu Đề</th>
                                <th class="center">Đường Dẫn</th>
                                <th class="center">Sắp Xếp</th>
                                <th class="center">Trạng Thái</th>
                                <th class="center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $value)
                            <tr style=" width:100%;"  class="center">
                                <td style="width:15%;">{{$value->title}}</td>
                                <td style="width:30%;"><a target="_blank" href="{{$value->url}}" title="">{{$value->url}}</a></td>
                                
                                <td style="width:5%;">{{$value->order}}</td>
                                <td class="center" style="width:5%;">
                                    @if($value->status=='active')
                                    <p class="label label-success" style="font-size: 10px;">Đang Hoạt Động</p>
                                    @else
                                    <p class="label label-danger" style="font-size: 10px;">Đang Ẩn</p>
                                    @endif
                                </td>
                                <td style="width:5%;">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target=".{{$value->id}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                    <a onclick="return alertMsg('','{{trans('general.msgDelete')}}');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade add-new-menu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="{{route('postAddMenu')}}" class="form-horizontal form-label-left date" method="POST">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Thêm Mới Menu</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Tiêu Đề</th>
                            <td class="col-md-10 col-sm-10 col-xs-10"><input type="text" class="form-control" name="txtTitle"></td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Đường Dẫn</th>
                            <td class="col-md-10 col-sm-10 col-xs-10">
                                <input type="text" class="form-control" name="txtUrl">
                                <i>VD: {{url('')}}/gioi-thieu.html</i>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Sắp Xếp</th>
                            <td class="col-md-2 col-sm-2 col-xs-2">
                                <input type="number" class="form-control" name="txtOrder">
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Trạng Thái</th>
                            <td class="col-md-3 col-sm-3 col-xs-3">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>
                                        <input value="active" type="radio" class="flat" checked name="status"> Hoạt Động
                                    </label><br>
                                    <label>
                                        <input value="inActive" type="radio" class="flat" name="status"> Không Hoạt Động
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{trans('general.close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('general.save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection