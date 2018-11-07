@section('title')
Chỉnh Sửa Email Template
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <form id="test" method="POST" action="{{route('postEditEmailTemplate', ['id'=>$mail->id])}}" class="category-level-select-language-add form-horizontal form-label-left">
            @csrf
            <div class="x_panel">
                <div class="x_title">
                    <h2>Chỉnh Sửa Email Template</h2>
                    <button type="submit" class="btn btn-success pull-right">Cập Nhật Thay Đổi</button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txttitle" value="{{$mail->title}}" type="text" class="form-control required" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">KEY
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{$mail->key}}" type="text" name="txtkey" required="required" class="form-control required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội Dung
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="content" id="ckeditor" class="form-control col-md-7 col-xs-12">{!!$mail->content!!}</textarea>
                            <script>CKEDITOR.replace('ckeditor');</script>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
