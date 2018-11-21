@extends('layout')
@section('style')
  {!! eCharts::styles() !!}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">eChart Demo</div>
<div class="panel-body">
                    {!! $echart->html() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! eCharts::scripts() !!}
{!! $echart->script() !!}
@endsection