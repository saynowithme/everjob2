<div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                            <a href="{{route('home')}}"><img src="{{asset('images/header/logo2.png')}}" alt="Logo" title="Job Pro" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 full_width">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="{{route('job')}}" class="gc_main_navigation">  Job&nbsp;</a>
                                    </li>
                                    <li class="parent gc_main_navigation"><a href="{{route('candidates')}}" class="gc_main_navigation">candidates &nbsp;</a>
                                    </li>
                                    <li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">company &nbsp;</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                            <a href="home"><img src="{{asset('images/header/logo2.png')}}" alt="Logo" title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000"/></g></g></svg>
													</a>
                                                <nav class="cd-dropdown">
                                                <h2><a href="">Job<span>Pro</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li>
                                                            <a href="{{route('candidates')}}">Candidates</a>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li >
                                                            <a href="{{route('job')}}">Jobs</a>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li >
                                                            <a href="#">Company</a>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact.html">Contact</a>
                                                        </li>
                                                        @if (Auth::user())
                                                        <li><a href="{{ route('logout') }}"><i class="fa fa-user"></i>&nbsp; LOG OUT</a></li>
                                                        @else
                                                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                                                       @endif
                                                    </ul>
                                                    <!-- .cd-dropdown-content -->
                                                </nav>
                                                <!-- .cd-dropdown -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            <div class="jp_navi_right_btn_wrapper">
                                <ul>

                                        @if (Auth::user())
                                        <li><a style="width:130px;" href="{{route('job-posting')}}"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
                                        <li><a style="width:130px;"href="{{ route('logout') }}"><i class="fa fa-user"></i>&nbsp; LOG OUT</a></li>
                                        @else
                                        <li><a style="width:130px;" href="{{ route('register') }}"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                        <li><a style="width:130px;" href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                                       @endif

                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>    
        