@section('title')
Thêm Mới Trang Con
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <form action="{{route('postAddPageAdmin')}}" method="POST" class="form-horizontal form-label-left">
    <div class="x_panel">
        <div class="x_title">
            <h2>Thêm Mới Trang Con</h2>
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
                        <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="add-pages-title form-control required" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội Dung Của Trang</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea name="content" id="ckeditor" class="form-control col-md-7 col-xs-12"></textarea>
                        <script>CKEDITOR.replace('ckeditor');</script>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng Thái
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <input value="active" type="radio" class="flat" checked name="status"> Hoạt Động
                        </label><br>
                        <label>
                            <input value="inActive" type="radio" class="flat" name="status"> Không Hoạt Động
                        </label>
                    </div>
                </div>
            
        </div>
        <div class="row">
            <div class="x_title" data-toggle="collapse" data-target=".data-optional">
                <h2>Không Bắt Buộc <i class="fa fas fa-angle-double-down"
                    data-toggle="collapse"
                    data-target=".data-optional"></i></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content collapse data-optional">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Thẻ Tiêu Đề
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="txtSeoTitle" class="form-control">
                        <i>Tiêu đề tùy chỉnh hiển thị trong thẻ tiêu đề cho trang này</i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Thẻ Mô Tả
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="txtSeoDescription" class="form-control">
                        <i>Mô tả META cho trang này. Thao tác này sẽ ghi đè mọi mô tả được tạo tự động</i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Từ khóa (Phân cách bằng dấu phẩy)
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="txtSeoKeywords" class="form-control">
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
@endsection