<div class="fixed-header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="admin-logo logo-wrap-pro">
                            <a href="#"><img src="{{url('')}}/assets/admin/img/logo/log.png" alt="" />
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                        <div class="header-top-menu tabl-d-n">
                            <ul class="nav navbar-nav mai-top-nav">
                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                    <div role="menu" class="dropdown-menu animated flipInX">
                                        <a href="#" class="dropdown-item">Company Info</a>
                                        <a href="#" class="dropdown-item">Documentation</a>
                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                        <a href="#" class="dropdown-item">Contact Support</a>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 pull-right">
                        <div class="header-right-info">
                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="adminpro-icon adminpro-chat-pro"></span><span class="indicator-ms"></span></a>
                                    <div role="menu" class="author-message-top dropdown-menu animated flipInX">
                                        <div class="message-single-top">
                                            <h1>Tin Nhắn</h1>
                                        </div>
                                        <ul class="message-menu">
                                            <li>
                                                <a href="#">
                                                    <div class="message-img">
                                                        <img src="{{url('')}}/assets/admin/img/message/1.jpg" alt="">
                                                    </div>
                                                    <div class="message-content">
                                                        <span class="message-date">16 Sept</span>
                                                        <h2>Advanda Cro</h2>
                                                        <p>Please done this project as soon possible.</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="message-view">
                                            <a href="#">Xem Tất Cả Tin Nhắn</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                    <div role="menu" class="notification-author dropdown-menu animated flipInX">
                                        <div class="notification-single-top">
                                            <h1>Thông Báo</h1>
                                        </div>
                                        <ul class="notification-menu">
                                            <li>
                                                <a href="#">
                                                    <div class="notification-icon">
                                                        <span class="adminpro-icon adminpro-checked-pro"></span>
                                                    </div>
                                                    <div class="notification-content">
                                                        <span class="notification-date">16 Sept</span>
                                                        <h2>Advanda Cro</h2>
                                                        <p>Please done this project as soon possible.</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="notification-view">
                                            <a href="#">Xem Tất Cả Thông Báo</a>
                                        </div>
                                    </div>
                                </li>   
                                @if(Auth::check())
                                <li class="nav-item" style="margin-right: 22px;">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                        <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                        <span class="admin-name">{{Auth::user()->name}}</span>
                                        <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                    </a>

                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                        <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>Quản Lý Tài Khoản</a>
                                        </li>
                                        <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>Trang Của Tôi</a>
                                        </li>
                                        </li>
                                        <li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Cài Đặt</a>
                                        </li>
                                        <li><a href="{{route('logoutAdmin')}}"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Đăng Xuất</a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>