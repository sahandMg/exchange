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