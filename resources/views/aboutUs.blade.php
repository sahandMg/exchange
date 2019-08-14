@extends('master.layout')
@section('title')
    <title> اسم سایت - درباره ما</title>
@endsection
@section('content')

<section class="pb_section pb_slant-light" id="section-faq">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-6 text-center mb-5">
                <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>-->
                <h2>درباره ما</h2>
            </div>
        </div>
        <p>نانا پلت فرمی برای تبدیل ارزهای دیجیتال به یکدیگر است. این سایت به عنوان یک سایت پیشرو در ایران در حوزه اکسچنج ها فعالیت خود را با پشتیبانی از 10 رمز ارز آغاز کرد. هم اکنون این سایت از 140 ارز دیجیتال مختلف پشتیبانی می کند.</p>
        <p>ما با در نظر گرفتن تمامی نیاز ها و چالش های موجود برای یک مبادله گر یا به اصطلاح تریدر، اقدام به طراحی و پیاده سازی این پلت فرم کرده ایم.</p>
        <p>هدف اصلی ما به عنوان یک وب سایت اکسچنج این است که بتوانیم نقش خود را در اکوسیستم بلاک چین مالی کشور ایران ایفا کنیم و مبادله گران را تشویق نماییم تا به جای استفاده از سایت های بعضا با کیفیت پایین و نا امن اکسچنج خارجی اقدام به حضور فعال در این اکوسیستم و استفاده از خدمات مرتبط از طریق سایت های ایرانی نمایند.</p>
        <p>بدون شک برای ارائه بالاترین کیفیت ممکن در این زمینه همچنان راه برای توسعه ی نانا وجود دارد اما با اطمینان می گوییم که نانا در وضعیت حال حاضر خود با توجه به زیرساخت، امکانات ارائه شده و مزیت های موجود، توانایی رقابت با معدود سایت های اکسچنج طراز اول جهانی را داراست.</p>
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