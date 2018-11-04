@section('title')
Danh Sách Slider
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2>Danh Sách Slider</h2>
            
            <a href="{{route('getAddSliderAdmin')}}"  class="btn btn-success pull-right">Thêm Mới</a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="tableSortable" class="table table-hover table-bordered" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th class="column-title">ID</th>
                        <th class="column-title">Tiêu Đề</th>
                        <th class="column-title">Đường Dẫn</th>
                        <th class="column-title">Hình Ảnh</th>
                        <th class="column-title">Trạng Thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    
</script>
@stop
@stop
