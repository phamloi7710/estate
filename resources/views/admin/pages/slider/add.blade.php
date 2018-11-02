@section('title')
Danh Sách Slider
@stop
@extends('admin.general.master')
@section('content')
<style>
    #preview {
  position: absolute;
  z-index: 100000;
  border: 1px solid #fff;
  background: #333;
  padding: 5px;
  display: none;
  border-radius:5px;
  color: #fff
}
</style>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Thêm Mới Slider</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="POST" action="{{route('postAddSliderAdmin')}}" class="form-horizontal form-label-left">
                @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Tiêu Đề
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Đường Dẫn
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <input value="{{old('txtUrl')}}" name="txtUrl" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Hình Ảnh
                        </label>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a id="previewImage" href="{{url('')}}/assets/uploads/images/no-image.jpg" class="form-control preview imagePreview">
                                <input readonly="" name="image" id="image" style="width: 100%; border: none;">
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Trạng Thái
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="radio radio-primary">
                                <input type="radio" class="flat" name="status" value="active" checked="">
                                <label for="radio1">
                                    Hiển Thị
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <input type="radio" class="flat" name="status" value="inActive" />
                                <label for="radio2">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-1 col-sm-1 col-xs-4 pull-right">
                            <button type="submit" class="btn btn-success"> Lưu Lại</button>
                        </div>
                    </div>
                </form>
            </div>
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
      (function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
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
    