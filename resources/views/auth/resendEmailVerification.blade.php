@extends('master.layout')
@section('title')
    <title> اسم سایت - تایید ایمیل</title>
@endsection
@section('content')
    <section class="pb_section pb_slant-light pb_pb-220">
        <div class="container">
        <h2 class="text-center">تایید ایمیل</h2>
        <p>برای تایید ایمیل خود، روی لینک ارسال ش
        ده به ایمیل خود کلیک کنید.</p>
       @foreach($errors->all() as $error)
         <div class="alert alert-danger">
           {{$error}}.
         </div>               
         @endforeach
        <form method="post" action="{{route('ResendVerification',['locale'=>session('locale')])}}"  style="direction: rtl;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
           <input type="hidden" name="userToken" value="{{$token}}">
            <p>اگر ایمیلی به ارسال نشده است، با کلیک کردن بر روی مستطیل آبی زیر، ایمیل به شما دوباره ارسال می شود. </p>
            <div class="form-group">
               <div class="wrap-input100 validate-input pass m-b-10" data-validate = "Please enter password">
                    <a onclick="refreshCaptcha(event)" style="cursor: pointer;">{{Captcha::img()}}</a>
               </div>
               <input class="form-control" style="width: 120px;margin-top: 5px;" type="text" pattern="[a-zA-Z0-9]+" required name="captcha" placeholder="کد امنیتی">
             </div>
             <br/>
            <button type="submit" class="btn btn-primary">ارسال دوباره</button>
        </form>
    </div>
    </section>
<!--     <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form onsubmit="submitForm()" method="post" action="{{route('ResendVerification',['locale'=>session('locale')])}}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li style="color: red;margin-bottom: 1%;">{{$error}}</li>
                        @endforeach
                    </ul>
                    @if(session()->has('error'))
                        <p style="color: red;text-align: right">{{session('error')}}</p>
                    @endif
                    @if(session()->has('message'))
                        <p style="color: green;text-align: right">{{session('message')}}</p>
                    @endif
                    <br>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="userToken" value="{{$token}}">
                    <span class="login100-form-title">
						{{__("Account Verification")}}
					</span>


                    <div class="text-right p-t-13 p-b-23">
						<span class="txt1">

						</span>
                        <div class="wrap-input100 validate-input pass m-b-10" data-validate = "Please enter password">
                            <input class="input100" type="text" pattern="[a-zA-Z0-9]+" required name="captcha" placeholder="{{__("Security Code")}}">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input pass m-b-10" data-validate = "Please enter password">
                            <a onclick="refreshCaptcha(event)" style="cursor: pointer;">{{Captcha::img()}}</a>
                        </div>

                    </div>

                    <div class="container-login100-form-btn">
                        <button id="submitBtn" class="login100-form-btn">
                            {{__("Send Verification link Again")}}
                        </button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div> -->
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