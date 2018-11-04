@section('title')
{{trans('general.edit')}} {{trans('emailtemplate.emailTemplate')}}
@stop
@extends('pages.general.master')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{trans('general.edit')}} {{trans('emailtemplate.emailTemplate')}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="test" method="POST" action="{{route('postEditEmailTemplate',['mail'=>$mail])}}" class="category-level-select-language-add form-horizontal form-label-left" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.title')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txttitle" value="{{$mail->title}}" type="text" class="form-control" required="required" required>
                            @if($errors->has('txttitle'))
                                <p style="color:red; float:left">{{$errors->first('txttitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.key')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" class="form-control" value="{{$mail->key}}" required="required" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('slider.chooseLanguage')}}</label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <select name="sltlang" class="form-control" required="required">
                                <option value="">--{{trans('general.selectOne')}} {{trans('general.language')}}--</option>
                                @foreach($language as $lang)
                                <option value="{{$lang->code}}"
                                <?php  
                                    if ($mail->language->id==$lang->id) {
                                        echo "selected";
                                    }
                                ?>
                                >{{$lang->title}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('sltlang'))
                            <p style="color:red; float:left">{{$errors->first('sltlang')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.content')}}
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea name="content" id="ckeditor" class="form-control col-md-7 col-xs-12">{!!$mail->content!!}</textarea>
                            <script>CKEDITOR.replace('ckeditor');</script>
                            @if($errors->has('content'))
                                <p style="color:red; float:left">{{$errors->first('content')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-1 col-sm-1 col-xs-1 pull-right">
                            <button type="submit" class="btn btn-success">{{trans('general.update')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
