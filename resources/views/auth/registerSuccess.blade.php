<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Success</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    @include('includes.css_custom_page')
</head>
<body>
	<!-- Header Wrapper Start -->
    @include('includes.header-page')
    <!-- Header Wrapper End -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper" >
                        <div class="jp_tittle_heading text-center">
                            <h2>Register Success</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper text-center" style="color:#fff">
                                Chúc mừng bạn đã đăng kí thành công. Hãy mau chóng đăng nhập và tìm cho mình những điều thú vị hihi.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <i class="fa fa-envelope-o"></i>
                            <input type="text" placeholder="Enter Your Email">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('includes.footer');
	</div>
 	<!--main js file start-->
    @include('includes.js_custom_page');
    <!--main js file end-->
</body>

</html>