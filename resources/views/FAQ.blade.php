@extends('master.layout')
@section('title')
    <title> اسم سایت - سوالات متداول</title>
@endsection
@section('content')
<section class="pb_section pb_slant-white" id="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>-->
                <h2>سوالات متداول</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div id="pb_faq" class="pb_accordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">چرا؟</a>
                        <div id="pb_faq1" class="collapse show" role="tabpanel">
                            <div class="py-3">
                                <p>به این دلایل ما بهترین صرافی هستیم. </p>
                                <p>اگر از صرافی ما استفاده نکنید خیلی در اشتباه هستید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">چرا؟</a>
                        <div id="pb_faq2" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>به این دلایل ما بهترین صرافی هستیم. </p>
                                <p>اگر از صرافی ما استفاده نکنید خیلی در اشتباه هستید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">چرا؟</a>
                        <div id="pb_faq3" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>به این دلایل ما بهترین صرافی هستیم. </p>
                                <p>اگر از صرافی ما استفاده نکنید خیلی در اشتباه هستید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">چرا؟</a>
                        <div id="pb_faq4" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>به این دلایل ما بهترین صرافی هستیم. </p>
                                <p>اگر از صرافی ما استفاده نکنید خیلی در اشتباه هستید.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">چرا؟</a>
                        <div id="pb_faq5" class="collapse" role="tabpanel">
                            <div class="py-3">
                                <p>به این دلایل ما بهترین صرافی هستیم. </p>
                                <p>اگر از صرافی ما استفاده نکنید خیلی در اشتباه هستید.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('master.footer')



<style>
    .item a {direction: rtl;}
    .item p {direction: rtl;}
</style>

@include('master.scripts')

<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
</script>

@endsection