<!DOCTYPE html>
<!-- 
Template Name: Job Pro
Version: 1.0.0
Author: 
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Listing_single</title>
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
                            <h2>{{$job->JobName}} ({{$job->Experience}} Years Exp.)</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Developer</a> <i class="fa fa-angle-right"></i></li>
                                    <li>{{$job->JobName}} ({{$job->Experience}} Years Exp.)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>Job Description</h2>
                            <p>{{$job->bio}}</p>
                            <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#">www.example.com</a></li>
                                <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>

                            </ul>
                        </div>
                        <div class="jp_job_res">
                            <h2>Document of Job</h2>
                            <p>{{$job->Document}}</p>
                        </div>
                        <div class="jp_job_apply">
                            <h2>How To Apply</h2>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac
                                lectus.</p>
                        </div>
                        <div class="jp_job_map">
                            <h2>Loacation</h2>
                            <div id="map" style="width:100%; float:left; height:300px;"></div>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul class="hidden-xs">
                                <li>SHARE :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_key_wrapper">
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
                    <div class="jp_listing_related_heading_wrapper">
                        <h2>Related Jobs</h2>
                        <div class="jp_listing_related_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                                                <p>Webstrot Technology Pvt. Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                    <li><a href="#">Part Time</a></li>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Job Overview</h4>
                                </div>
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="{{asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>{{$job->JobName}} ({{$job->Experience}} Exp.)</h4>
                                        <p>{{$job->CompanyAdd}}</p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Date Posted:</li>
                                                <li>{{$job->RegDate}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>{{$job->CompanyAdd}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Job Title:</li>
                                                <li>{{$job->JobName}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Gender:</li>
                                                <li>{{$job->Gender}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Salary:</li>
                                                <li>{{$job->LevelGra}} P.A.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>JobType:</li>
                                                <li>{{$job->JobType}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Experience:</li>
                                                <li>{{$job->Experience}} Years Experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_right_bar_btn_wrapper">
                                        <div class="jp_listing_right_bar_btn">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Apply With Facebook</a></li>
                                                <li><a><i class="fa fa-plus-circle"></i> &nbsp;Apply NOw!</a></li>
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
    </div>
    <!-- jp listing Single cont Wrapper End -->
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
    <script>
        function initMap() {
        	var uluru = {lat: -36.742775, lng:  174.731559};
        	var map = new google.maps.Map(document.getElementById('map'), {
        	zoom: 15,
        	scrollwheel: false,
        	center: uluru
        	});
        	var marker = new google.maps.Marker({
        	position: uluru,
        	map: map
        	});
        	}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&callback=initMap">
    </script>
</body>

</html>