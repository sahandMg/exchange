@extends('master.layout')
@section('title')
    <title> اسم سایت - درباره ما</title>
@endsection
@section('content')

<section class="pb_section pb_slant-white" id="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>-->
                <h2>درباره ما</h2>
            </div>
        </div>
        <p>ما خیلی خوبیم.</p>
        <p>از ما بهتر پیدا نمیشه و پیدا نمی تونید بکنید.</p>
        <p>از 140 ارز پشتیبانی می کنیم.</p>
        <p>در سریع ترین زمان ممکن تبدیل انجام می شود.</p>
        <p>در سریع ترین زمان ممکن تبدیل انجام می شود.</p>
        <p>از 140 ارز پشتیبانی می کنیم.</p>
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

@include('master.scripts')
<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
</script>
@endsection