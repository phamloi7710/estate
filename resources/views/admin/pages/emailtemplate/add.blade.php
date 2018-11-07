@section('title')
Thêm Mới Email Template
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <form id="test" method="POST" action="{{route('postAddEmailTemplate')}}" class="category-level-select-language-add form-horizontal form-label-left">
            @csrf
            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm Mới Email Template</h2>
                    <button type="submit" class="btn btn-success pull-right">{{trans('general.addNew')}}</button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txttitle" value="{{old('txttitle')}}" type="text" class="form-control required" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">KEY
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="txtkey" required="required" class="form-control required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội Dung
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="content" id="ckeditor" class="form-control col-md-7 col-xs-12"></textarea>
                            <script>CKEDITOR.replace('ckeditor');</script>
                            @if($errors->has('content'))
                                <p style="color:red; float:left">{{$errors->first('content')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
