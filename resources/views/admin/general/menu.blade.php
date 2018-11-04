<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">

            <a href="{{route('getIndexAdmin')}}" title="Trang Chu" target="_blank"><img src="{{url('')}}/assets/logo-1.png" alt="Home" style="width: 100%;"></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{url('uploads/avatars')}}/{{Auth::user()->avatar}}" alt="..."
                     class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin Chào</span>
                <h2>{{Auth::user()->username}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br/>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Danh Mục Chức Năng</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{route('getIndexAdmin')}}"><i class="fa fa-home"></i> Trang Chủ</a>
                    </li>
                    <li>
                        <a><i class="fa fa-calculator"></i> Slider<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('getListSliderAdmin')}}"> Danh Sách</a></li>
                            <li><a href="{{route('getAddSliderAdmin')}}"> Thêm Mới</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>