@extends('layouts.app')

@section('content')

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
                        <h2>Login</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->

<!-- jp login wrapper start -->
<div class="login_section">
    <!-- login_form_wrapper -->
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
    <div class="login_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- login_wrapper -->
                    <h1>LOGIN TO YOUR ACCOUNT</h1>
                    <div class="login_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                <a href="#" class="btn btn-primary google-plus"> Login  with Google <i class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                        <h2>or</h2>
                        <div class="formsix-pos">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback i-email">
                                <input type="email" class="form-control" id="email2" name="email" placeholder="Username*" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="formsix-e">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback i-password">
                                <input type="password" class="form-control" id="password2" name="password" placeholder="Password *" required autocomplete="current-password">
                                <span class="fa fa-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="login_remember_box">
                            <label class="control control--checkbox">Remember me

                                <input type="checkbox">
                                <span class="control__indicator"></span>
                            </label>
                            <a href="{{ url('/password/reset') }}" class="forget_password">
                                Forgot Password
                            </a>
                        </div>
                        <div class="login_btn_wrapper">
                            {{-- <a href="{{ __('Login') }}" class="btn btn-primary login_btn"> Login </a> --}}
                            <button type="submit" class="btn btn-primary login_btn">
                                    {{ __('Login') }}
                                </button>
                        </div>
                        <div class="login_message">
                            <p>Don’t have an account ? <a href="{{route('register')}}"> Register Now </a> </p>
                        </div>
                    </div>
                    <p>In case you are using a public/shared computer we recommend that
you logout to prevent any un-authorized access to your account</p>
                    <!-- /.login_wrapper-->
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- /.login_form_wrapper-->
</div>
<!-- jp login wrapper end -->
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
                                <p>Ever Job được tạo bởi : <br><br> Đặng Trường Trúc <br><br> Trần Xuân Ba <br><br> Nguyễn Thành Long. </p>
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

@endsection
