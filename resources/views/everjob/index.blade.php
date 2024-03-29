<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Ever Job</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Ever Job" />
    <meta name="keywords" content="Ever Job" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="{{route('home')}}"><img src="images/header/logo.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                 <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="{{route('job')}}" class="gc_main_navigation">  Job&nbsp;</i></a>
                                        <!-- mega menu start --></li>
                                    @if (Auth::user())
                                    <li class="parent gc_main_navigation"><a href="{{route('candidates')}}" class="gc_main_navigation">candidates &nbsp;</a>
                                    </li>
                                    @endif
                                    <li class="parent gc_main_navigation"><a href="{{route('company')}}" class="gc_main_navigation">company &nbsp;</a>
                                    </li>
                                    @if (Auth::user())
                                    <li class="gc_main_navigation parent"><a href="{{route('account',Auth::user()->id)}}" class="gc_main_navigation">my account</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="{{route('home')}}"><img src="images/header/logo.png" alt="Logo" title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
													</a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">Job<span>Pro</span></a></h2>
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
                                                            <a href="{{route('company')}}">Company</a>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        @if (Auth::user())
                                                        <li >
                                                            <a href="">My Account</a>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
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
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-user"></i>&nbsp; LOG OUT</a></li>
                                    @else
                                    <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                                   @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>3,000+</span> Browse Jobs</h1>
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            <form action="search" method="Get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="key" value="{{old('key')}}" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="jp_form_location_wrapper">
                                        <i class="fa fa-dot-circle-o first_icon"></i>
                                        <select name="city" value="{{old('city')}}">
                                            <option value="">Select Location</option>
                                            <option value="Hà Nội" >Ha Noi</option>
                                            <option>Ho Chi Min</option>
                                            <option>Da Nang</option>
                                        </select><i class="fa fa-angle-down second_icon"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <div class="jp_form_exper_wrapper">
                                        <i class="fa fa-dot-circle-o first_icon"></i>
                                <select name="cate">
                                        <option value="" disabled selected>Choose Categories</option>
                                    @foreach($cates as $cate)   
                                        <option value="{{$cate->id}}" class="parent">{{$cate->name}}</option>
                                    @endforeach
                                </select><i class="fa fa-angle-down second_icon"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="jp_form_btn_wrapper_check">
                                        <ul>
                                            <li><button type="submit"><i class="fa fa-search"></i>&nbsp; Search</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                    <li><a href="#">ui designer,</a></li>
                                    <li><a href="#">developer,</a></li>
                                    <li><a href="#">senior</a></li>
                                    <li><a href="#">it company,</a></li>
                                    <li><a href="#">design,</a></li>
                                    <li><a href="#">call center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_jobs_categories_wrapper">
            <div class="container">
            @foreach($cates as $cate)
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-code"></i>
                        <h3><a href="{{route('cate',$cate->id)}}">{{$cate->name}}</a></h3>
                        <p>({{$cate->recruiment->where('RegStatus',1)->count()}} jobs)</p>
                    </div>
                </div>
            @endforeach
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-th-large"></i>
                        <h3><a href="{{route('job')}}">All Jobs</a></h3>
                        <p>({{$listjob->count()}})</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- jp tittle slider Wrapper Start -->
    <div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%; margin-top:30px;">
        <div class="container">
            <div class="jp_tittle_name_wrapper">
                <div class="jp_tittle_name">
                    <h3>Tranding</h3>
                    <h4>Jobs</h4>
                </div>
            </div>
            <div class="jp_tittle_slider_wrapper">
                <div class="jp_tittle_slider_content_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Graphic Designer (UI / UX)</h4>
                                    <p>Webstrot Pvt. Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp tittle slider Wrapper End -->
    <!-- jp first sidebar Wrapper Start -->
    <div class="jp_first_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_hiring_slider_main_wrapper">
                                <div class="jp_hiring_heading_wrapper">
                                    <h2>Top Hiring Companies</h2>
                                </div>
                                <div class="jp_hiring_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                    @foreach($listcompanies->where('type',2) as $list)
                                        <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="images/content/hiring_img1.png" alt="hiring_img" />
                                                    <h4>{{$list->bio}}</h4>
                                                    <p>({{$list->add}})</p>
                                                    <ul>
                                                        <li><a href="{{route('job_company',$list->id)}}">{{$list->recruiment->count()}} Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 
                                       
                                    @endforeach                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cc_featured_product_main_wrapper">
                                <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                                    <h2>Recent Jobs</h2>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="best">
                                    <div class="ss_featured_products">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item" data-hash="zero">
                                            @foreach($listjob->take(3) as $list)
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>{{$list->JobName}} ({{$list->Experience}} Year.)</h4>
                                                                    <p>{{$list->CompanyName}}</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; {{$list->LevelGra}} P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; {{$list->CompanyAdd}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><p>{{$list->JobType}}</p></li>
                                                                        <li><a href="{{route('job1',$list->RecID)}}">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach   
                                            </div>

                                        </div>
                                    </div>
                                    <div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                            <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="hot">
                                    <div class="ss_featured_products">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item" data-hash="zero">
                                            @foreach($listjob as $list)
                                                <div class="jp_job_post_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>{{$list->JobName}} ({{$list->Experience}} Year.)</h4>
                                                                    <p>{{$list->CompanyName}}</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; {{$list->LevelGra}} P.A.</li>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; {{$list->CompanyAdd}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><p>{{$list->JobType}}</p></li>
                                                                        <li><a href="#">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-tags"></i>Keywords :</li>
                                                            <li><a href="#">ui designer,</a></li>
                                                            <li><a href="#">developer,</a></li>
                                                            <li><a href="#">senior</a></li>
                                                            <li><a href="#">it company,</a></li>
                                                            <li><a href="#">design,</a></li>
                                                            <li><a href="#">call center</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                            <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!Auth::user())
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_register_section_main_wrapper">
                                <div class="jp_regis_left_side_box_wrapper">
                                    <div class="jp_regis_left_side_box">
                                        <img src="images/content/regis_icon.png" alt="icon" />
                                        <h4>I’m an EMPLOYER</h4>
                                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                        <ul>
                                            <li><a href="{{ route('register') }}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_regis_right_side_box_wrapper">
                                    <div class="jp_regis_right_img_overlay"></div>
                                    <div class="jp_regis_right_side_box">
                                        <img src="images/content/regis_icon2.png" alt="icon" />
                                        <h4>I’m an candidate</h4>
                                        <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                                        <ul>
                                            <li><a href="{{ route('register') }}"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS CANDIDATE</a></li>
                                        </ul>
                                    </div>
                                    <div class="jp_regis_center_tag_wrapper">
                                        <p>OR</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="jp_first_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_add_resume_wrapper">
                                    <div class="jp_add_resume_img_overlay"></div>
                                    <div class="jp_add_resume_cont">
                                        <img src="images/content/resume_logo.png" alt="logo" />
                                        <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                        <ul>
                                            <li><a href="{{route('cv-posting')}}"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_spotlight_main_wrapper">
                                    <div class="spotlight_header_wrapper">
                                        <h4>Job Spotlight</h4>
                                    </div>
                                    <div class="jp_spotlight_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                        @foreach($listjob->where('LevelHot','>=',3) as $list)
                                            <div class="item">
                                                <div class="jp_spotlight_slider_img_Wrapper">
                                                    <img src="images/content/spotlight_img.jpg" alt="spotlight_img" />
                                                </div>
                                                <div class="jp_spotlight_slider_cont_Wrapper">
                                                    <h4>{{$list->JobName}} ({{$list->Experience}} Year.)</h4>
                                                    <p>{{$list->CompanyName}}</p>
                                                    <ul>
                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; {{$list->LevelGra}} P.A.</li>
                                                        <li><i class="fa fa-map-marker"></i>&nbsp; {{$list->CompanyAdd}}</li>
                                                    </ul>
                                                </div>
                                                <div class="jp_spotlight_slider_btn_wrapper">
                                                    <div class="jp_spotlight_slider_btn">
                                                        <ul>
                                                            <li><a href="{{route('job-posting')}}"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_rightside_job_categories_wrapper">
                                    <div class="jp_rightside_job_categories_heading">
                                        <h4>Jobs by Category</h4>
                                    </div>
                                    <div class="jp_rightside_job_categories_content">
                                        <ul>
                                        @foreach($cates as $cate)
                                            <li><i class="fa fa-caret-right"></i> <a href="{{route('cate',$cate->id)}}">{{$cate->name}} <span>({{$cate->recruiment->where('RegStatus',1)->count()}})</span></a></li>
                                        @endforeach  
                                            <li><i class="fa fa-caret-right"></i> <a href="#">View More</span></a></li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp first sidebar Wrapper End -->
    <!-- jp counter Wrapper Start -->
    <div class="jp_counter_main_wrapper">
        <div class="container">
            <div class="gc_counter_cont_wrapper">
                <div class="count-description">
                    <span class="timer">2540</span><i class="fa fa-plus"></i>
                    <h5 class="con1">Jobs Available</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper2">
                <div class="count-description">
                    <span class="timer">7325</span><i class="fa fa-plus"></i>
                    <h5 class="con2">Members</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper3">
                <div class="count-description">
                    <span class="timer">1924</span><i class="fa fa-plus"></i>
                    <h5 class="con3">Resumes</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper4">
                <div class="count-description">
                    <span class="timer">4275</span><i class="fa fa-plus"></i>
                    <h5 class="con4">Company</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- jp counter Wrapper End -->
    <!-- jp Best deals Wrapper Start -->
    <div class="jp_best_deals_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="jp_best_deal_slider_main_wrapper">
                        <div class="jp_best_deal_heading_wrapper">
                            <h2>Offering the best Deals</h2>
                        </div>
                        <div class="jp_best_deal_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Search a Jobs</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-users"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Apply a Good Job</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-shield"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Security</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-notification"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Notifications</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Search a Jobs</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-users"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Apply a Good Job</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-shield"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Security</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-notification"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Notifications</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Search a Jobs</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-users"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Apply a Good Job</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-shield"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Security</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-notification"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="#">Job Notifications</a></h4>
                                                    <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
                        <div class="jp_rightside_career_heading">
                            <h4>Recent Resumes</h4>
                        </div>
                        <div class="jp_rightside_career_main_content">
                        @foreach($listresumes->take(3) as $listresume)
                            <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                <div class="jp_rightside_career_img">
                                    <img src="images/content/client_img1.jpg" alt="career_img" />
                                </div>
                                <div class="jp_rightside_career_img_cont">
                                    <h4>{{$listresume->Name}}</h4>
                                    <p><i class="fa fa-folder-open-o"></i> &nbsp;{{$listresume->Job}}</p>
                                </div>
                            </div>
                        @endforeach    
                            <div class="jp_rightside_career_btn">
                                <a href="{{route('candidates')}}"><i class="fa fa-plus-circle"></i> View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jp pricing Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_text">
                            <img src="images/content/news_logo.png" class="img-responsive" alt="news_logo" />
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_field">
                            <i class="fa fa-envelope-o"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <div class="jp_footer_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_footer_logo_wrapper">
                            <div class="jp_footer_logo">
                                <a href="#"><img src="images/content/resume_logo.png" alt="footer_logo"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>Who We Are</h2>
                                    <p>Đặng Trường Trúc (DEV)<br><br> Nguyễn Thành Long(DEV)<br><br> Trần Xuân Ba(DEV) <br><br> Ngô Văn Luân (TESTER)</p>
                                    <ul>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">READ MORE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                                <div class="jp_footer_candidate">
                                    <h2>For candidate</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add a Resume</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> candidate Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Past Applications</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Alerts</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Bookmarks</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Your Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                <div class="jp_footer_candidate">
                                    <h2>For Employers</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Browse candidates</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Employer Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Job</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Page</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Job Packages</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Work Process</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                <div class="jp_footer_candidate">
                                    <h2>Information</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers with Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Sitemap</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_bottom_footer_Wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_left_cont">
                                        <p>© 2019-20 Ever Job Pro. All Rights Reserved.</p>
                                    </div>
                                    <div class="jp_bottom_top_scrollbar_wrapper">
                                        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_right_cont">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/custom.js"></script>
    <!--main js file end-->
</body>

</html>