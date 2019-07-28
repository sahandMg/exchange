@extends('master.layout')
@section('title')
    <title> اسم سایت - ارتباط با ما</title>
@endsection
@section('content')

<section class="pb_section pb_slant-white" id="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>-->
                <h2>تماس با ما</h2>
            </div>
        </div>
        <form action="/action_page.php" style="direction: rtl;">
            <div class="form-group">
                <label for="email">آدرس ایمیل:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="comment">پیام:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال</button>
        </form>
    </div>
</section>

<footer class="pb_footer bg-light" role="contentinfo">
    <div class="container">
        <!--<div class="row text-center">-->
            <!--<div class="col">-->
                <!--<ul class="list-inline">-->
                    <!--<li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>-->
                    <!--<li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>-->
                    <!--<li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>-->
                <!--</ul>-->
            <!--</div>-->
        <!--</div>-->
        <div class="row">
            <div class="col text-center">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <span>آدرس: فلان</span>
                    </div>
                    <div class="col-md-6 text-cente">
                        <span>شماره تلفن: 54654842132132</span>
                    </div>
                </div>
                <br/>
                <p class="pb_font-14">تمام حقوق این سایت متعلق به صرافی فلان می باشد</p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>

<style>
    .pb_section p{
        direction: rtl;
    }
    .pb_footer {padding-top: 15%;}
</style>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>

<script src="assets/js/main.js"></script>
@include('master.scripts')
@endsection