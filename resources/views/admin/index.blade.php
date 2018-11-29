@section('title')
OSIMI - WEBSITE CHỦ ĐẦU TƯ
@stop
@extends('admin.general.master')
@section('content')
<script src="https://code.highcharts.com/highcharts.src.js"></script>
<div class="right_col" role="main">
	<div class="row top_tiles">
	    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        <div class="tile-stats">
	            <div class="icon"><i class="fa fa-building-o"></i></div>
	            <div class="count">{{count($dangtrienkhai)}}</div>
	            <h3>Dự Án Đang Triển Khai</h3>
	            
	        </div>
	    </div>
	    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        <div class="tile-stats">
	            <div class="icon"><i class="fa fa-building-o"></i></div>
	            <div class="count">{{count($datrienkhai)}}</div>
	            <h3>Dự Án Đã Triển Khai</h3>
	            
	        </div>
	    </div>
	    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        <div class="tile-stats">
	            <div class="icon"><i class="fa fa-users"></i></div>
	            <div class="count">{{count($dataContact)}}</div>
	            <h3>Liên Hệ</h3>
	            
	        </div>
	    </div>
	    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        <div class="tile-stats">
	            <div class="icon"><i class="fa fa-file-text-o"></i></div>
	            <div class="count">{{count($news)}}</div>
	            <h3>Tin Tức</h3>
	            
	        </div>
	    </div>
	</div>
	
    <div class="x_panel">
        <div class="x_title">
            <h2>
        </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        	<!-- <canvas id="canvas" height="300px" width="800px"></canvas> -->
            <!-- <div id="mainb" style="height:350px;"></div> -->
        </div>
    </div>
</div>
<!-- ECharts -->
    <script src="{{url('')}}/assets/admin/vendors/echarts/dist/echarts.min.js"></script>
    <script src="{{url('')}}/assets/admin/vendors/echarts/map/js/world.js"></script>
@stop