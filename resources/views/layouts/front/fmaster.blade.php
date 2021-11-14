<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <title>@yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/medical-guide-icons.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/zerogrid.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/front/css/loader.css">
    <link rel="shortcut icon" href="{{url('/')}}/assets/front/images/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<!--Loader-->
<div class="loader">
    <div class="loader__figure"></div>
    <p class="loader__label"><img src="{{url('/')}}/assets/front/images/logo.png" alt="logo"></p>
</div>

<!--Topbar-->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-left hidden-xs">Medix Healthcare Come to Expect the Best in Town</p>
                <p class="pull-right"><i class="fa fa-ambulance"></i>Emergency Line (+001) 321-125-152</p>
            </div>
        </div>
    </div>
</div>

<!--Header-->
<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home V1</a></li>
                                        <li><a href="index2.html">Home V2</a></li>
                                        <li><a href="index3.html">Home V3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about us</a></li>

                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">Services V1</a></li>
                                        <li><a href="services_2.html">Services V2</a></li>
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="departments.html">Departments</a></li>
                                        <li><a href="procedure.html">Procedures</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery.html">Gallery Three</a></li>
                                        <li><a href="gallery4c.html">Gallery Four column</a></li>
                                        <li><a href="gallery2c.html">Gallery Two column</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="appointment.html">appointment</a></li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<!--Slider-->
@yield('slider');
@yield('appointment');
@yield('content');

<!--Footer-->
<footer class="padding-top dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Why Medix?</h4>
                <hr class="half_space">
                <p class="half_space">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore dolor in hendrerit in vulputate.</p>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
           </div>
            <div class="col-md-3  col-sm-6 footer_column">
                <h4 class="heading">Quick Links</h4>
                <hr class="half_space">
                <ul class="widget_links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Specilaties</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Timetable</a></li>
                    <li><a href="#">Docotors</a></li>
                    <li><a href="#">Why Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Newsletter</h4>
                <hr class="half_space">
                <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
                <div id="result1" class="text-center"></div>

                <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&id=494727d648&c=?" method="get" onSubmit="return false" class="newsletter">
                    <div class="form-group">
                        <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn-submit button3" value="Subscribe" />
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Get in Touch</h4>
                <hr class="half_space">
                <p>Medical Bibendum auctor, to consequat ipsum nec sagittis sem.</p>
                <p class="address"><i class="icon-location"></i>Medical Ltd, Manhattan 1258,New York, USA Lahore</p>
                <p class="address"><i class="fa fa-phone"></i>(+1) 234 567 8901</p>
                <p class="address"><i class="icon-dollar"></i><a href="mailto:hello@website.com">hello@website.com</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright clearfix">
                    <p>Copyright &copy; 2016 Medix. All Right Reserved</p>
                    <ul class="social_icon">
                        <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                        <li><a href="#" class="google"><i class="icon-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="{{url('/')}}/assets/front/js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/front/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/front/js/jquery.geolocation.edit.min.js"></script>
<script src="{{url('/')}}/assets/front/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{url('/')}}/assets/front/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('/')}}/assets/front/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('/')}}/assets/front/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('/')}}/assets/front/js/revolution.extension.navigation.min.js"></script>
<script src="{{url('/')}}/assets/front/js/revolution.extension.parallax.min.js"></script>
<script src="{{url('/')}}/assets/front/js/revolution.extension.slideanims.min.js"></script>
<script src="{{url('/')}}/assets/front/js/revolution.extension.video.min.js"></script>
<script src="{{url('/')}}/assets/front/js/slider.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/front/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/front/js/jquery.parallax-1.1.3.js"></script>
<script src="{{url('/')}}/assets/front/js/parallax.js"></script>
<script src="{{url('/')}}/assets/front/js/jquery.mixitup.min.js"></script>
<script src="{{url('/')}}/assets/front/js/jquery.fancybox.js"></script>
<script src="{{url('/')}}/assets/front/js/functions.js" type="text/javascript"></script>

</body>
</html>

