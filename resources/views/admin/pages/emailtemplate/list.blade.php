@section('title')
Giao
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{trans('emailtemplate.emailTemplate')}}</h2>
                <a href="{{route('getAddEmailTemplate')}}" title="{{trans('general.addNew')}}" class="btn btn-primary btn-xs pull-right">{{trans('general.addNew')}}</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu Đề</th>
                                    <th>KEY</th>
                                    <th width="10%">Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mail as $em)
                                <tr>
                                    <td>{{$em->id}}</td>
                                    <td>{{$em->title}}</td>
                                    <td>{{$em->key}}</td>
                                    <td style="width:10%;" class="center">
                                        <a href="{{route('getEditEmailTemplate',['mail'=>$em->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                        <a onclick="return alertMsg('delete-{{$em->id}}.html','Bạn Có Muốn Xoá Mục Này Không?');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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

@endsection
