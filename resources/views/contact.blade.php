@extends('master.layout')
@section('title')
    <title> اسم سایت | ارتباط با ما</title>
@endsection
@section('content')
<section class="pb_section pb_slant-light pb_pb-220" id="section-reviews">
   <div class="container">
        <h2 class="text-center">تماس با ما</h2>
        <p>در صورت وجود هرگونه پرسش و یا مشکل با تیم پشتیبانی ما تماس بگیرید. کارشناسان پشتیبانی در تمامی روزهای هفته به صورت شبانه روز پاسخگوی شما خواهند بود.</p>
        <form action="{{route('contact')}}" method="post" style="direction: rtl;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
                <label for="email">آدرس ایمیل</label>
                <input required name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="subject">موضوع</label>
                <input required name="subject" type="text" class="form-control" id="subject">
            </div>
            <div class="form-group">
                <label for="comment">پیام</label>
                <textarea required name="body" class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="wrap-input100 validate-input pass m-b-10" data-validate = "Please enter password">
                <a id="captchaTag" onclick="refreshCaptcha(event)" style="cursor: pointer;"></a>
            </div>
            <input class="form-control" style="width: 120px;margin-top: 5px;" type="text" pattern="[a-zA-Z0-9]+" required name="captcha" placeholder="کد امنیتی">
            <br>
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
    $(document).ready(function () {
        var captcha = document.getElementById('captchaMaster').innerHTML;
        $('#captchaTag').html(captcha);
    });

    function refreshCaptcha(e) {
        var element = e;
        axios.get('captcha-refresh').then(function (response) {
            element.target.src = response.data

        });
    }

    $('#pb-navbar').addClass("scrolled awake"); 
</script>
@endsection