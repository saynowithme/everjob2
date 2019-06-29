<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add-Posting</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    @include('includes.css_custom_page')
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <!-- Top Header Wrapper End -->
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
                            <h2>Add-Posting</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Add-Posting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="container">
			<div class="row">
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
						<h2>Job Details</h2>
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" name="name" value="{{ old('name')}}" placeholder="Job Title">
					</div>
					<div class="jp_adp_form_wrapper">
						<select name="city">
							<option>Ha Noi</option>
							<option>Ho Chi Minh</option>
							<option>Da Nang</option>
						</select>
					</div>
                    <div class="jp_adp_form_wrapper">
                        <input type="text" name="phone" value="{{ old('phone')}}" placeholder="Contact (Phone Number)">
					</div>
                    <div class="jp_adp_form_wrapper">
                        <input type="text" name="address" value="{{ old('address')}}" placeholder="Address">
					</div>
                    <div class="jp_adp_form_wrapper">
                        <input type="text" name="company" value="{{ old('company')}}" placeholder="Company">
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" name="minsalary" value="{{ old('minsalary')}}" placeholder="Salary Min">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" name="maxsalary" value="{{ old('maxsalary')}}" placeholder="Salary Max">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
					<div class="jp_adp_form_heading_wrapper">
						<p>Fields with * are mandetory</p>
					</div>
					<div class="jp_adp_form_wrapper">
						<select name="cate">
                        @foreach($cates as $cate)
							<option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
						</select>
					</div>
					<div class="jp_adp_form_wrapper">
                        <input type="text" name="jobtype" value="{{ old('jobtype')}}" placeholder="Job Type">
					</div>
                    <div class="jp_adp_form_wrapper">
                        <input type="text" name="gender" value="{{ old('gender')}}" placeholder="Gender">
					</div>
                    <div class="jp_adp_form_wrapper">
                        <input type="text" name="amount" value="{{ old('amount')}}" placeholder="Number Candidate">
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" name="exp" value="{{ old('exp')}}" placeholder="Experience Require (Ex: +4 year)">
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" name="regtime" value="{{ old('regtime')}}" placeholder="Time Register">
					</div>
				</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
						<textarea rows="7" name="doc" placeholder="Job Document">{{old('doc')}}</textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
						<textarea rows="7" name="desc" placeholder="Job Description">{{old('desc')}}</textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume_bottom_btn_post">
						<ul>
                            <li><button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</button></li>
						</ul>
					</div>
				</div>
            </form>
			</div>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->
    
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