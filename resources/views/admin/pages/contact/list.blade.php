@section('title')
Liên Hệ
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Danh Sách Liên Hệ</h2>
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
                                    <th>Họ Và Tên</th>
                                    <th>Email</th>
                                    <th>Số Điện Thoại</th>
                                    <th class="center">Trạng Thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contact as $cont)
                                <tr>
                                    <td>{{$cont->name}}</td>
                                    <td>{{$cont->email}}</td>
                                    <td>{{$cont->phone}}</td>
                                    
                                    <td class="center">
                                        @if($cont->status=='true')
                                        <a class="btn btn-success btn-xs">Đã Liên Hệ</a>
                                        @elseif($cont->status=='false')
                                        <a class="btn btn-danger btn-xs">Đang Chờ</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target=".{{$cont->id}}" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></a>
                                        <a onclick="return alertMsg('{{route('deleteContact',['id'=>$cont->id])}}','Bạn Có Muốn Xóa Liên Hệ Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pull-right">{!! $contact->render() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($contact as $cont)
<div class="modal fade {{$cont->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{route('postEditContact',['id'=>$cont->id])}}" class="form-horizontal form-label-left date" method="POST">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Chi Tiết Liên Hệ</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Họ Và Tên</th>
                            <td class="col-md-10 col-sm-10 col-xs-10">{{$cont->name}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Địa Chỉ Email</th>
                            <td class="col-md-10 col-sm-10 col-xs-10"><a href="mailto:{{$cont->email}}?subject=feedback" "email me" title="Send Mail To {{$cont->email}}">{{$cont->email}}</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Số Điện Thoại</th>
                            <td class="col-md-10 col-sm-10 col-xs-10">{{$cont->phone}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Trạng Thái</th>
                            <td class="col-md-10 col-sm-10 col-xs-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        @if($cont->status=='true')
                                        <a class="btn btn-success btn-xs">Đã Liên Hệ</a>
                                        @else
                                        <a class="btn btn-danger btn-xs">Đang Chờ</a>
                                        @endif
                                    </div>
                                    <div class="col-md-4" id="{{$cont->id}}" style="padding-right: 30px;">
                                        <select name="sltstatus" class="form-control pull-right">
                                            <option value="true" 
                                                <?php
                                                    if($cont->status=='true')
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>
                                                >Đã Liên Hệ</option>
                                            <option value="false"
                                                <?php
                                                    if($cont->status=='false')
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>
                                                >Đang Chờ</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 pull-right">
                                        <a href="#" title="Show Edit Status" class="btn btn-success btn-xs pull-right offset-md-4" id="show{{$cont->id}}">Cập Nhật Trạng Thái</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Nội Dung</th>
                            <td class="col-md-10 col-sm-10 col-xs-10">{{$cont->content}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-2 col-sm-2 col-xs-2">Ghi Chú</th>
                            <td class="col-md-10 col-sm-10 col-xs-10"><textarea name="note" class="form-control">{{$cont->note}}</textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#{{$cont->id}}").hide();
        $("#show{{$cont->id}}").click(function(){
            $("#{{$cont->id}}").slideToggle();
        });
    })
    
</script>
@endforeach
@endsection