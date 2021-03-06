@section('title')
Chỉnh Sửa Thông Tin Slider
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2> Chỉnh Sửa Thông Tin Slider
        </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form method="POST" action="{{route('postEditSliderAdmin', ['id'=>$slider->id])}}" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="{{$slider->title}}" name="txtTitle" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input value="{{$slider->url}}" name="txtUrl" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình Ảnh
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a id="previewImage" href="@if($slider->image) {{$slider->image}} @else {{url('')}}/assets/uploads/images/no-image.jpg @endif" class="form-control preview imagePreview"><input value="{{$slider->image}}" name="image" id="image" style="width: 100%; border: none;" placeholder="Đường Dẫn Hình Ảnh"></a>
                        <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                        <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <input @if($slider->status=='active') checked @endif value="active" type="radio" class="flat" name="status"> Hiển Thị
                        </label><br>
                        <label>
                            <input @if($slider->status=='inActive') checked @endif value="inActive" type="radio" class="flat" name="status"> Không Hiển Thị
                        </label>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group pull-right">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="button">Huỷ Bỏ</button>
                        <button class="btn btn-primary" type="reset">Làm Lại</button>
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    $(".deleteImageNews").click(function(){
        $(".imagePreview").attr('href','');
        $(".imagePreview").attr('href','{{url('')}}/assets/uploads/images/no-image.jpg');
        $("#image").val('');
    });
</script>
<script type="text/javascript">
$('.preview').anarchytip();
(function ($) {

    $.fn.filemanager = function (type, options) {
        type = type || 'file';

        this.on('click', function (e) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
            localStorage.setItem('target_input', $(this).data('input'));
            localStorage.setItem('target_preview', $(this).data('preview'));
            window.open(route_prefix + '?type=' + type, 'FileManager', 'width=1200,height=800');
            window.SetUrl = function (url, file_path) {
                //set the value of the desired input to image url
                var target_input = $('#' + localStorage.getItem('target_input'));
                target_input.val(file_path).trigger('change');

                //set or change the preview image src
                var target_preview = $('#' + localStorage.getItem('target_preview'));
                target_preview.attr('href', url).trigger('change');
            };
            return false;
        });
    }

})(jQuery);  
</script>
@stop
@stop
