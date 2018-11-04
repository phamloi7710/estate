@section('title')
Thêm Mới Slider
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2> Thêm Mới Slider
        </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form method="POST" action="{{route('postAddSliderAdmin')}}" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtUrl" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình Ảnh
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a id="previewImage" href="{{url('')}}/assets/uploads/images/no-image.jpg" class="form-control preview imagePreview"><input name="image" id="image" style="width: 100%; border: none;" placeholder="Đường Dẫn Hình Ảnh"></a>
                        <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                        <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Đường Dẫn
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
<!-- <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Thêm Mới Slider<button type="button" class="btn btn-primary pull-right">Lưu Lại</button>
                        </h2>
                    </div>
                    <div class="body">
                            
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="txtTitle" type="text" class="form-control">
                                        <label class="form-label">Tiêu Đề Slider</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="txtUrl" type="text" class="form-control">
                                        <label class="form-label">Đường Dẫn</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <a id="previewImage" href="{{url('')}}/assets/uploads/images/no-image.jpg" class="form-control preview imagePreview"><input name="image" id="image" style="width: 100%; border: none;" placeholder="Đường Dẫn Hình Ảnh"></a>
                                        <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                                    <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                <div class="form-group">
                                    <div class="form-line">
                                       <div class="demo-radio-button">
                                            <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked />
                                            <label for="radio_30">RED</label>
                                            <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-pink" />
                                            <label for="radio_31">PINK</label>
                                        </div>
                                        <label class="form-label">Đường Dẫn</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
