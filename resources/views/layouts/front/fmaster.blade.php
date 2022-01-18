@php
  $setting = App\Http\Controllers\HomeController::getsetting()
@endphp
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
                            <a class="navbar-brand" href="index.html"><img src="{{url('/')}}/assets/front/images/logo.png" height="120" width="120" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class=" active">
                              <a href="{{route('home')}}">Home</a></li>

                                @include('front.category')
                                <li><a href="{{route('user_randevu')}}">Appointment</a></li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li><a href="{{route('references')}}">References</a></li>
                                @auth
                                @php
                                    $userRoles = Auth::user()->role->pluck('name');

                                @endphp
                                @if($userRoles->contains('admin'))
                                <li><a href="{{route('admin')}}" target="_blank">Admin Panel</a></li>
                                    @endif

                                @endauth
                                @auth

                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">{{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('myprofile')}}">My Account</a> </li>
                                        <li><a href="{{route('user_randevu')}}">My Randevus</a> </li>
                                        <li><a href="{{route('myreviews')}}">My comments</a></li>
                                        <li><a href="{{route('admin_logout')}}">log out</a></li>  </ul>
                                </li>
                                @endauth
                                @guest
                                    <li><a href="/login">login</a></li>
                                    <li><a href="/register">join</a></li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!--Slider-->
@yield('slider')
@yield('appointment')
@yield('content')

<!--Footer-->
<footer class="padding-top dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer_column">
                <h4 class="heading">Why {{ $setting->company}}?</h4>
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
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
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
                <p>{{ $setting->company}}</p>
                <p class="address"><i class="icon-location"></i>location:{{ $setting->address}}</p>
                <p class="address"><i class="icon-phone"></i>fax:{{ $setting->fax}}</p>
                <p class="address"><i class="fa fa-phone"></i>phone:{{ $setting->phone}}</p>
                <p class="address"><i class="icon-dollar"></i>email:{{ $setting->email}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright clearfix">
                    <p>Copyright &copy; 2016 {{ $setting->company}} All Right Reserved</p>
                    <ul class="social_icon">
                        @if($setting->twitter!=null) <li><a href="{{ $setting->twitter}}" target="_blank" class="twitter"><i class="icon-twitter4"></i></a></li>@endif
                            @if($setting->instagram!=null) <li><a href="{{ $setting->instagram}}" target="_blank" class="instagram"><i class="icon-instagram"></i></a></li>@endif
                            @if($setting->youtube!=null) <li><a href="{{ $setting->youtube}}" target="_blank" class="youtube"><i class="icon-youtube"></i></a></li>@endif
                            @if($setting->facebook!=null) <li><a href="{{ $setting->facebook}}" target="_blank" class="facebook"><i class="icon-facebook5"></i></a></li>@endif  </ul>
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

