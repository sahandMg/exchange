<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    {{--<script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" ></script>--}}
    <script src="{{URL::asset('assets/js/axios.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/fonts/ionicons/css/ionicons.min.css')}}">
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
            font-family:BYekanFont;
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
                <li class="nav-item"><a class="nav-link" href="{{route('exchangePage')}}">Exchage</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('giftIndex')}}">GiftCard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}">خانه</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="" id="signupBtn"><span class="pb_rounded-4 px-4">ثبت نام</span></a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href=""  id="loginBtn"><span class="pb_rounded-4 px-4">ورود</span></a></li>
                <!-- for authentication -->
                <!-- <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href=""><span class="pb_rounded-4 px-4">my account</span></a></li> -->
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<style>
    .media-body p {direction: rtl;}
@media only screen and (max-width: 769px) {
  .navbar {
    text-align: center;
  }
  .navbar li { margin-top: 1%; }
}
/* The Modal (background) */
.custom-modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.custom-modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.custom-close {
  color: black;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.custom-close:hover,
.custom-close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.custom-modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.custom-modal-body {padding: 2px 16px;}

.custom-modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
.auth-form {
    text-align: right;direction: rtl; width: 80%; margin: auto; padding: 5%;
}
</style>

<!-- The Modal -->
<div id="authForm" class="custom-modal">

  <!-- Modal content -->
  <div class="custom-modal-content">
    <span class="custom-close" style="margin-right: 2%;margin-top: 2%; ">&times;</span>

    <h3 class="text-center" style="margin-top: 2%;">ثبت نام</h3>
    <form class="auth-form" method="post" id="authForm">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
       <div class="form-group" id="userName">
        <label>نام کاربری:</label>
        <input name="name" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>ایمیل:</label>
        <input name="email" type="email" class="form-control">
      </div>
      <div class="form-group">
        <label>رمز:</label>
        <input name="password" type="password" class="form-control">
      </div>
      <div class="form-group" id="passwordRepeat">
        <label>تکرار رمز:</label>
        <input name="confirm_password" type="password" class="form-control">
      </div>
        <div class="form-group" id="passwordRepeat">
            <label>کد امنیتی:</label>
            <a onclick="refreshCaptcha(event)" style="cursor: pointer;">{{Captcha::img()}}</a>
            <br>
            <input name="captcha" type="text" class="form-control">
        </div>
      <input type="text" name="from" class="form-control" id="inputCoinKindHidden" style="display: none;">
      <input type="text" name="to" class="form-control" id="outputCoinKindHidden" style="display: none;">
      <input type="text" name="amount" class="form-control" id="inputCoinvalueHidden" style="display: none;">
      <div class="text-center">
        <button class="btn btn-success mx-auto" type="submit">ثبت</button>
      </div>
    </form>
    <!-- <br/> -->
    <div class="text-center">
      <a href="" id="signUpGoogle"><img src="assets/img/googleicon.png" /></a>
      <a href="" id="loginGoogle"><img src="assets/img/googleicon.png" /></a>
    </div>
    <br/>
  </div>

</div>

<script type="text/javascript">
    // Get the modal
var modal = document.getElementById("authForm");

// Get the button that opens the modal
var btn = document.getElementById("signupBtn");
var loginBtn = document.getElementById("loginBtn");
var frm = document.getElementById('authForm');
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("custom-close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function(event) {
  console.log("sign up clicked;");
  event.preventDefault();
  frm.action = {!! route('signup') !!};
  $('#userName').show();
  $('#passwordRepeat').show();
  $('#signUpGoogle').show();
  $('#loginGoogle').hide();
  modal.style.display = "block";
}

loginBtn.onclick = function(event) {
  console.log("loginBtn clicked;");
  event.preventDefault();
  frm.action = '{!! route('login') !!}';
  $('#userName').hide();
  $('#passwordRepeat').hide();
  $('#signUpGoogle').hide();
  $('#loginGoogle').show();
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

function refreshCaptcha(e) {
    var element = e;
    axios.get('captcha-refresh').then(function (response) {
        element.target.src = response.data

    });
}

</script>
</body>
</html>
