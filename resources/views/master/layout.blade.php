<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/fonts/ionicons/css/ionicons.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::asset('assets/fonts/law-icons/font/flaticon.css')}}">--}}

    <link rel="stylesheet" href="{{URL::asset('assets/fonts/fontawesome/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{URL::asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/slick-theme.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/helpers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/landing-2.css')}}">
    <style>
        @font-face {
            font-family: BYekanFont;
            src: url(assets/fonts/Yekan.ttf);
        }
        * {
            font-family: BYekanFont;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: BYekanFont;
        }
        th, a, p, input, button, legend, label, blockquote {font-family: BYekanFont;}
        .btn {font-family: BYekanFont;}
    </style>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Best Exchange</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">سوالات متداول</a></li>
                {{--<!--<li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>-->--}}
                <li class="nav-item"><a class="nav-link" href="{{route('coins')}}">coins</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}">خانه</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="{{route('signup')}}" target="_blank"><span class="pb_rounded-4 px-4">ثبت نام</span></a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="{{route('login')}}" target="_blank"><span class="pb_rounded-4 px-4">ورود</span></a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<style>
    .media-body p {direction: rtl;}
</style>

<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>

<script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/slick.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>

<script src="{{URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>

<script src="{{URL::asset('assets/js/main.js')}}"></script>

<script>
    // scroll
    var scrollWindow = function() {
        $(window).scroll(function(){
            var $w = $(this),
                    st = $w.scrollTop(),
                    navbar = $('.pb_navbar'),
                    sd = $('.js-scroll-wrap');

            if (st > 150) {
                if ( !navbar.hasClass('scrolled') ) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if ( navbar.hasClass('scrolled') ) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if ( st > 350 ) {
                if ( !navbar.hasClass('awake') ) {
                    navbar.addClass('awake');
                }

                if(sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if ( st < 350 ) {
                if ( navbar.hasClass('awake') ) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if(sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();
</script>
</body>
</html>