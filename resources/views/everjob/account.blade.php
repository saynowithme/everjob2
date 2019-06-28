<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8" />
            <title>Account Profile</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <meta name="description" content="Job Pro" />
            <meta name="keywords" content="Job Pro" />
            <meta name="author" content="" />
            <meta name="MobileOptimized" content="320" />
            <!--srart theme style -->
            <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/reset.cs')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/style_II.css')}}" />
            <link rel="stylesheet" type="text/css" href="{{asset('css/responsive2.css')}}" />
            <!-- favicon links -->
            <link rel="shortcut icon" type="image/png" href="{{asset('images/header/favicon.ico')}}" />
        </head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('images/header/loadinganimation.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Header Wrapper Start -->
        @include('includes.header-page')
    <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>{{$acc->name}}-Profile</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>{{$acc->name}}-Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
                        <img src="{{asset('images/content/cp1.png')}}" alt="profile_img">
							<h2>{{$acc->name}}</h2>
                            @if($acc->type==1)
							    <p>Candidate</p>
                            @elseif($acc->type==2)
							    <p>Recruiter</p>
                            @endif
                            @if($acc->type==2)
                                <a href="{{route('job-posting')}}"><i class="fa fa-plus-circle"></i> &nbsp;ADD JOB</a>
                            @elseif($acc->type==1)		
                                <a href="{{route('cv-posting')}}"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a>
                            @endif			
						</div>	
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="jp_cp_right_side_wrapper">
						<div class="jp_cp_right_side_inner_wrapper">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                    {{ $err }}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('flash_success'))
                                <div class="alert alert-success">
                                    <strong>Thành Công! </strong>{{ session('flash_success') }}
                                </div>
                            @endif
                            @if(session('flash_err'))
                                <div class="alert alert-danger">
                                    <strong>Cảnh Báo! </strong>{{ session('flash_err') }}
                                </div>
                            @endif
                            <form action="" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_adp_form_heading_wrapper">
                                        <h2>PERSONAL DETAILS</h2>
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="text" name="name" value="{{ $acc->name}}" placeholder="Full Name">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input disabled type="text" name="email" value="{{ $acc->email}}" placeholder="Email">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="password" name="password" value="{{ $acc->password}}" placeholder="Password">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input disabled type="text" name="username" value="{{ $acc->user}}" placeholder="User Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
                                    <div class="jp_adp_form_heading_wrapper">
                                        <p>* Can not edit email and user name</p>
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="text" name="technique" value="{{ $acc->technique}}" placeholder="Technique">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="text" name="phone" value="{{ $acc->phone}}" placeholder="Number Phone">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="text" name="address" value="{{ $acc->add}}" placeholder="Address">
                                    </div>
                                    <div class="jp_adp_form_wrapper">
                                        <input type="text" name="bio" value="{{ $acc->bio}}" placeholder="Company Name/Description">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_adp_choose_resume_bottom_btn_post">
                                        <ul>
                                            <li><button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i>&nbsp; Update</button></li>
                                        </ul>
                                    </div>
                                </div>
                             </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <!-- jp downlord Wrapper End -->
	<!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_text">
                        <img src="{{asset('images/content/news_logo.png')}}" class="img-responsive" alt="news_logo" />
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
                            <a href="#"><img src="{{asset('images/content/resume_logo.png')}}" alt="footer_logo"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <h2>Who We Are</h2>
                                    <p>This is Photoshop's version of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.<br><br> Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,</p>
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
                                        <p>© 2019-20 Job Pro. All Rights Reserved.</p>
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
    @include('includes.js_custom_page')
    <!--main js file end-->
</body>
</html>