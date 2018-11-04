@section('title')
Danh Mục Tin Tức
@stop
@extends('admin.general.master')
@section('content')
<?php 
    $conn = new mysqli('localhost', 'root', '', 'estate');
    $sql = $conn->query("SELECT id, name, sort FROM news_category ORDER BY sort");
    if(isset($_post['update'])){
        foreach($_post['sort'] as $sort){
            $index = $sort[0];
            $newSort = $sort[1];
            $conn->query("UPDATE news_category SET sort='$newSort' WHERE id='$index'");
        }
        exit('success');
    }
    ?>
<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Danh Sách Danh Mục Tin Tức
                                    <button class="btn btn-success pull-right" waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">Thêm Mới Danh Mục</button>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <table id="tableSortable" class="table table-hover table-bordered" style="font-size: 14px;">
                            <thead>
                                <tr>
                                    <th class="column-title"></th>
                                    <th class="column-title"> {{__('general.categoryName')}}</th>
                                    <th class="column-title" style="text-align: center; width: 10%"> {{__('general.sort')}}</th>
                                    <th class="column-title" style="text-align: center; width: 10%"> {{__('general.status')}}</th>
                                    <th class="column-title" style="text-align: center; width: 10%"> {{__('general.statusHome')}}</th>
                                    <th class="column-title no-link last" style="text-align: center; width: 10%"></th>
                                </tr>
                            </thead>
                            <tbody id="categoryItem">
                                <?php echo listCate($category); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Thêm Mới Danh Mục Tin Tức</h4>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form method="POST" action="{{route('postAddNewsCate')}}" class="form-horizontal form-label-left" id="form_validation">
                            @csrf
                            <div class="modal-body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h5 class="card-inside-title">Tên Danh Mục</h5>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="txtCategoryName" required maxlength="10" minlength="3" placeholder="Nhập Tên Danh Mục">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h5 class="card-inside-title">Danh Mục Cha</h5>
                                            <div class="form-line">
                                                <select name="sltparentCategory" class="form-control show-tick" required>
                                                    <option value="0">----Thư Mục Gốc----</option>
                                                    <?php menuMultiInCate($category,0,$str = "&ensp;",old('sltparentCategory')) ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <h5 class="card-inside-title">Trạng Thái Hoạt Động</h5>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="demo-radio-button">
                                                            <input value="active" name="status" type="radio" id="radio_30" class="with-gap radio-col-green" checked>
                                                            <label for="radio_30">Hiển Thị</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="demo-radio-button">
                                                            <input value="inActive" name="status" type="radio" id="radio_31" class="with-gap radio-col-red">
                                                            <label for="radio_31">Không Hiển Thị</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5 class="card-inside-title">Trạng Thái Hiển Thị Ở Trang Chủ</h5>
                                                <div class="row clearfix">
                                                    <div class="col-sm-6">
                                                        <div class="demo-radio-button">
                                                            <input value="active" name="statusHome" type="radio" id="radio_32" class="with-gap radio-col-green">
                                                            <label for="radio_32">Hiển Thị</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="demo-radio-button">
                                                            <input value="inActive" name="statusHome" type="radio" id="radio_33" class="with-gap radio-col-red" checked>
                                                            <label for="radio_33">Không Hiển Thị</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <h5 class="card-inside-title">Ghi Chú</h5>
                                            <div class="form-line">
                                                <textarea name="note" rows="2" class="form-control no-resize auto-growth" placeholder="Nhập Ghi Chú Tại Đây"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link waves-effect">LƯU LẠI</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ĐÓNG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($category as $value)
<div class="modal fade token-{{$value['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Thêm Mới Danh Mục Tin Tức</h4>
            </div>
             <form method="POST" action="{{route('postEditNewsCate', ['alias'=>$value->slug])}}" class="form-horizontal form-label-left" id="form_validation">
                @csrf
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="card-inside-title">Tên Danh Mục</h5>
                                <div class="form-line">
                                    <input value="{{$value->name}}" type="text" class="form-control" name="txtCategoryName" required maxlength="20" minlength="3" placeholder="Nhập Tên Danh Mục">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h5 class="card-inside-title">Danh Mục Cha</h5>
                                <div class="form-line">
                                    <select name="sltparentCategory" class="form-control show-tick" required>
                                        <option value="0">----Thư Mục Gốc----</option>
                                        <?php menuMultiInCate($category,0,$str = "&ensp;",$value['parent_id']) ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h5 class="card-inside-title">Trạng Thái Hoạt Động</h5>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="demo-radio-button">
                                                <input @if($value->status=='active') checked @endif value="active" name="status" type="radio" id="status_{{$value->id}}_active" class="with-gap radio-col-green" checked>
                                                <label for="status_{{$value->id}}_active">Hiển Thị</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="demo-radio-button">
                                                <input @if($value->status=='inActive') checked @endif value="inActive" name="status" type="radio" id="status_{{$value->id}}_inActive" class="with-gap radio-col-red">
                                                <label for="status_{{$value->id}}_inActive">Không Hiển Thị</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="card-inside-title">Trạng Thái Hiển Thị Ở Trang Chủ</h5>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="demo-radio-button">
                                                <input @if($value->status_home=='active') checked @endif value="active" name="statusHome" type="radio" id="statusHome_{{$value->id}}_active" class="with-gap radio-col-green">
                                                <label for="statusHome_{{$value->id}}_active">Hiển Thị</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="demo-radio-button">
                                                <input @if($value->status_home=='inActive') checked @endif value="inActive" name="statusHome" type="radio" id="statusHome_{{$value->id}}_inActive" class="with-gap radio-col-red" checked>
                                                <label for="statusHome_{{$value->id}}_inActive">Không Hiển Thị</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                            <h5 class="card-inside-title">Ghi Chú</h5>
                                <div class="form-line">
                                    <textarea name="note" rows="2" class="form-control no-resize auto-growth" placeholder="Nhập Ghi Chú Tại Đây">{{$value->note}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">LƯU LẠI</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ĐÓNG</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@section('script')
<script type="text/javascript">
    $(function(){
        $("#categoryItem").sortable({
            stop: function(){
                $.map($(this).find('tr'), function(el){
                    var itemID = el.id;
                    var itemIndex = $(el).index();
                    $.ajax({
                        url: '<?php echo route('postUpdateSort') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            "_token": "{{csrf_token()}}",
                            itemID: itemID,
                            itemIndex: itemIndex
                        }
                    })
                });
            }
        });

    }) 
</script>
@stop
@stop
