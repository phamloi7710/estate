@section('title')
@stop
@extends('admin.general.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
	            <ol class="breadcrumb breadcrumb-bg-cyan">
	                <li><a href="{{route('getIndexAdmin')}}"><i class="material-icons">home</i> Trang Chủ</a></li>
	                <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Tin Tức</a></li>
	                <li class="active">Thêm Mới Tin Tức</li>
	            </ol>
			</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="" method="POST">
                    @csrf
                    <div class="card">
                        <div class="header">
                            <h2>
                                Thêm Mới Tin Tức
                            </h2>
                            <div class="header-dropdown m-r--5">
                                <button type="submit" class="btn btn-primary">Lưu Dữ Liệu</button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label">
                                    <label class="pull-left" for="title_News">{{__('general.title')}}</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input name="txtTitle" type="text" id="title_News" class="form-control" placeholder="{{__('placeholder.titleNews')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label">
                                    <label class="pull-left" for="title_News">{{__('general.categoryNews')}}</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <select name="sltCategory" class="form-control">
                                            <option value="0">----{{__('general.root')}}----</option>
                                            <?php menuMultiInCate($category,0,$str = "&ensp;",old('sltparentCategory')) ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label">
                                    <label class="pull-left" for="title_News">{{__('general.categoryNews')}}</label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default selectImage">Chọn Ảnh</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <a href="javascript:;" class="btn btn-danger deleteImageNews">Xoá Hình Ảnh</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <a id="previewImage" href="{{url('')}}/assets/uploads/images/no-image.jpg" class="form-control preview imagePreview thumbnail"><input name="image" id="image" style="width: 100%; border: none;"></a>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label">
                                    <label class="pull-left" for="title_News">{{__('general.content')}}</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group">
                                        <textarea id="editor" rows="6" name="content" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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