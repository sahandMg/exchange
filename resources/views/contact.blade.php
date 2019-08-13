@extends('master.layout')
@section('title')
    <title> اسم سایت - ارتباط با ما</title>
@endsection
@section('content')

<section class="pb_section pb_slant-white" id="section-faq">
    <div class="container">
        <h2 class="text-center">تماس با ما</h2>
        <p>در صورت وجود هرگونه پرسش و یا مشکل با تیم پشتیبانی ما تماس بگیرید. کارشناسان پشتیبانی در تمامی روزهای هفته به صورت شبانه روز پاسخگوی شما خواهند بود.</p>
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