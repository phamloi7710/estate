@section('title')
Quản Lý Đối Tác
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Đối Tác</h2>
            <a onclick="addImageIndex();" title="Thêm Mới Đối Tác" class="btn btn-primary btn-xs pull-right"> Thêm Mới</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <br>
                </div>
                <form action="{{route('postAddDoiTacAdmin')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 20%">Tiêu Đề</th>
                                        <th style="width: 40%">Hình Ảnh</th>
                                        <th style="width: 5%"></th>
                                    </tr>
                                </thead>
                                <tbody id="contentHinhAnhIndex">
                                    @if($doitac)
                                    @php $i=0 @endphp
                                    @foreach ($doitac as $value)
                                    <tr id="rowImageIndex{{$i}}">
                                        <td>
                                            <input value="{{$value['title']}}" type="text" name="txtImageTitleIndex[]" class="form-control" placeholder="Tiêu Đề Hình Ảnh">
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <input value="{{$value['image']}}" id="imageIndex{{$i}}" type="text" name="imageIndex[]" class="form-control" placeholder="Đường Dẫn Hình Ảnh">
                                                </div>
                                                <div class="col-md-2">
                                                    <a data-input="imageIndex{{$i}}" data-preview="previewImage" href="javascript:;" class="btn btn-default btn-xs selectImageIndex{{$i}}">Chọn Ảnh</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="center">
                                            <a href="javascript:void(0)" onclick="$('#rowImageIndex{{$i}}').remove();" title="Xóa" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('.selectImageIndex{{$i}}').filemanager('image');
                                            var lfm = function(options, cb) {
                                                var route_prefix = (options && options.prefix) ? options.prefix : '/uploads';
                                                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
                                                window.SetUrl = cb;
                                            };
                                        })
                                        
                                    </script>
                                    @php $i++ @endphp
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-success pull-right">Lưu Lại</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection