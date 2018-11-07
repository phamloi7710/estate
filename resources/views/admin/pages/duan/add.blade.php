@section('title')
Thêm Mới Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
        <form action="{{route('postAddDuAnAdmin')}}" method="POST" class="form-horizontal form-label-left">
            @csrf
            <div class="x_panel">
                <div class="x_title">
                    <h2> Thêm Mới Dự Án</h2>
                    <button type="submit" class="btn btn-success pull-right"> Lưu Lại</button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tên Dự Án
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Danh Mục Dự Án
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="sltCategory" class="form-control">
                                <option value="">---Chọn Danh Mục---</option>
                                <option value="Dự Án Đang Triển Khai">Dự Án Đang Triển Khai</option>
                                <option value="Dự Án Đã Triển Khai">Dự Án Đã Triển Khai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh Đại Diện
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <a id="previewImage" href="{{url('')}}/assets/uploads/images/no-image.jpg" class="form-control preview imagePreview"><input name="avatar" id="image" style="width: 100%; border: none;" placeholder="Đường Dẫn Hình Ảnh"></a>
                            <a data-input="image" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImage">Chọn Ảnh</a>
                            <a href="javascript:;" class="btn btn-danger btn-xs deleteImageNews">Xoá</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tóm Tắt
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="tomtat" name="" id="" cols="30" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tabGioiThieu" role="tab" data-toggle="tab" aria-expanded="true">Giới Thiệu</a>
                            </li>
                            <li role="presentation" class=""><a href="#tabViTri" role="tab" data-toggle="tab" aria-expanded="false">Vị Trí</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabThietKe" role="tab" data-toggle="tab" aria-expanded="false">Thiết Kế</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabTienIch" role="tab" data-toggle="tab" aria-expanded="false">Tiện Ích</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabThanhToan" role="tab" data-toggle="tab" aria-expanded="false">Thanh Toán</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabHinhAnh" role="tab" data-toggle="tab" aria-expanded="false">Hình Ảnh</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabVideo" role="tab" data-toggle="tab" aria-expanded="false">Video</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#tabLienHe" role="tab" data-toggle="tab" aria-expanded="false">Liên Hệ</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tabGioiThieu" aria-labelledby="home-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="gioithieu" id="tab1" class="form-control col-md-7 col-xs-12"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabViTri" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="vitri" id="tab2" class="form-control col-md-7 col-xs-12"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabThietKe" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="thietke" id="tab3" class="form-control col-md-7 col-xs-12"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabTienIch" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="tienich" id="tab4" class="form-control col-md-7 col-xs-12"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabThanhToan" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="thanhtoan" id="tab5" class="form-control col-md-7 col-xs-12"></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabHinhAnh" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <a onclick="addImage();" class="btn btn-success btn-xs  pull-right">Thêm Mới Hình Ảnh</a>
                                            </div>
                                        </div>
                                        
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20%">Tiêu Đề</th>
                                                    <th style="width: 40%">Hình Ảnh</th>
                                                    <th style="width: 5%"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="contentAttribute">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabVideo" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <a onclick="addVideo();" class="btn btn-success btn-xs  pull-right">Thêm Mới ID Video</a>
                                                    </div>
                                                </div>
                                                
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 40%">ID Video Youtube</th>
                                                            <th style="width: 5%"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="contentVideo">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tabLienHe" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="lienhe" id="tab8" class="form-control col-md-7 col-xs-12"></textarea>
                                        <script>CKEDITOR.replace('tab8');</script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@section('script')
<script type="text/javascript">
    CKEDITOR.replace('tab1');
    CKEDITOR.replace('tab2');
    CKEDITOR.replace('tab3');
    CKEDITOR.replace('tab4');
    CKEDITOR.replace('tab5');
    CKEDITOR.replace('tab6');
    CKEDITOR.replace('tab7');
    
</script>
<script>
    $(document).ready(function(){
    $('.selectImage').filemanager('image');
    var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
        window.SetUrl = cb;
    };
    $(".deleteImage").click(function(){
        $(".imagePreview").attr('src','');
        $(".imagePreview").attr('src','../assets/uploads/images/no-avatar.png');
        $("#image").val('');
    });
});
</script>
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
@endsection