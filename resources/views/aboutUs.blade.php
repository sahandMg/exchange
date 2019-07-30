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

<style>
 .pb_section p{
     direction: rtl;
 }
 .pb_footer {padding-top: 15%;}
</style>
@include('master.footer')
@include('master.scripts')
<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
</script>
@endsection