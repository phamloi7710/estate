@section('title')
Sửa Tin Tức
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <form action="{{route('postEditNews', ['id'=>$news->id])}}" method="POST" class="form-horizontal form-label-left">
    <div class="x_panel">
        <div class="x_title">
            <h2>Sửa Tin Tức</h2>
            <button type="submit" class="btn btn-success pull-right"> Lưu Lại</button>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu Đề
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="txtTitle" value="{{$news->title}}" type="text" class="add-pages-title form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh Mục Tin Tức
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="sltCategory" class="form-control">
                            <option value="">---Chọn Danh Mục---</option>
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}" @if($news->cate_id==$cate->id) selected @endif>{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh Bìa
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a id="previewImage" href="@if($news->image) {{$news->image}} @else {{url('')}}/assets/uploads/images/no-image.jpg @endif" class="form-control preview imagePreview"><input value="{{$news->image}}" name="image" id="image" style="width: 100%; border: none;" placeholder="Đường Dẫn Hình Ảnh"></a>
                            <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                            <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tóm Tắt</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="tomtat" rows="6" class="form-control col-md-7 col-xs-12">{!!$news->tomtat!!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội Dung</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="content" id="ckeditor" class="form-control col-md-7 col-xs-12">{{$news->content}}</textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                    </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sắp Xếp
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <input value="{{$news->order}}" name="txtOrder" type="number" class="form-control">
                        </div>
                    </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng Thái
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <input @if($news->status=='active')checked @endif value="active" type="radio" class="flat" name="status"> Hiển Thị
                        </label><br>
                        <label>
                            <input @if($news->status=='inActive')checked @endif value="inActive" type="radio" class="flat" name="status"> Không Hiển Thị
                        </label>
                    </div>
                </div>
             </div>
            
        </div>
        <div class="row">
            <div class="x_title" > SEO <i>(Search Engine Optimization)</i> <i class="fa fas fa-angle-double-down"></i>
                <div class="clearfix"></div>
            </div>
            <div class="x_content collapse data-optional">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Thẻ Tiêu Đề
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="{{$news->seoTitle}}" type="text" name="txtSeoTitle" class="form-control">
                        <i>Tiêu đề tùy chỉnh hiển thị trong thẻ tiêu đề cho trang này</i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Thẻ Mô Tả
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="{{$news->seoDescription}}" type="text" name="txtSeoDescription" class="form-control">
                        <i>Mô tả META cho trang này. Thao tác này sẽ ghi đè mọi mô tả được tạo tự động</i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Từ khóa (Phân cách bằng dấu phẩy)
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="{{$news->seoKeyWorks}}" type="text" name="txtSeoKeywords" class="form-control">
                        <i>Danh sách các từ khóa quan trọng nhất được phân tách bằng dấu phẩy cho trang này sẽ được viết dưới dạng từ khóa META</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-2 col-sm-2 col-xs-4 pull-right">
                
            </div>
        </div>
    </div>
</div>
</form>
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