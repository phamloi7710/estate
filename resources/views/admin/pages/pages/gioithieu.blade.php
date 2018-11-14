@section('title')
Giới Thiệu Về Osimi
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <form action="{{route('postgioithieu')}}" method="POST" class="form-horizontal form-label-left">
    <div class="x_panel">
        <div class="x_title">
            <h2>Nội Dung Trang Giới Thiệu</h2>
            <button type="submit" class="btn btn-success pull-right"> Lưu Lại</button>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            
                @csrf
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                         <textarea name="content" id="ckeditor" class="form-control">@if($gioithieu){!!$gioithieu->content!!}@endif</textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                    </div>
                </div>
            
        </div>
    </div>
</div>
</form>
</div>
@stop