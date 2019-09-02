@extends('master.layout')
@section('title')
    <title> اسم سایت | اکسچنج </title>
@endsection
@section('content')
<section class="pb_section pb_slant-light" id="section-faq">
    <div class="container">
      <div class="exchange-card" id="waitForExchange"  style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>ارسال ارز</h3>
               <span>شناسه انتقال: {{$trans->trans_id}}</span>
           </div>

           <div class="row">
               <div class="col-md-7 col-sm-12">
                   <br/>
                   <p class="text-right">لطفا با استفاده از کیف پول خود، به آدرس زیر پول را ارسال کنید.پس از تایید واریز شما توسط شبکه، به صورت خودکار پول به حساب شما واریز می شود.</p>
                   <div class="exchange-details">
                       <span class="detail-desc">مبلغ واریزی : </span>
                       <span class="detail-value">{{strtoUpper($trans->currencyFrom)}} {{$trans->amountExpectedFrom}} </span>


                   </div>
                   <div class="exchange-details">


                       <span class="detail-desc">مبلغ دریافتی : </span>
                       <span class="detail-value">{{strtoUpper($trans->currencyTo)}} {{$trans->amountExpectedTo}} </span>
                   </div>
                   <div class="exchange-details">
                       <span class="detail-desc"> آدرس کیف پول شما : </span>
                       <span class="detail-value">{{$trans->payoutAddress}}</span>
                   </div>
                   <div class="exchange-details">
                       <span class="detail-desc">ارسال به آدرس : </span>
                       <span class="detail-value">{{$trans->payinAddress}}</span>
                   </div>
                   <div class="exchange-details">
                       <span class="detail-desc">وضعیت پرداخت : </span>
                       <span id="status" class="detail-desc"></span>
                   </div>
               </div>
               <div class="col-md-5  col-sm-12 text-center">
                   <!-- <img src="assets/images/qrcode.png" style="width: 100%;height: auto;"> -->
                   {!! QrCode::size(200)->generate($trans->payinAddress) !!}
               </div>
           </div>
      </div>
    </div>
 </section>   
    

@include('master.footer')

@include('master.scripts')
<script type="text/javascript">
	$('#pb-navbar').addClass("scrolled awake");
    var ID = {!! json_encode(Route::current()->parameter('transId')) !!}
    var status = '';
    var states = {
        "waiting":"در انتظار پرداخت کاربر",
        "confirming":"در حال پردازش",
        "exchanging":"در حال تبادل",
        "sending":"در حال ارسال به کیف پول",
        "finished":"مبادله انجام شد",
        "failed":"تراکنش ناموفق",
        "refunded":"تراکنش برگشتی",
        "hold":"تراکنش مسدود شده",
        "expired":"تراکنش منقضی شده",
    };

    $(document).ready(function () {
        getStatus()
    });
    function getStatus() {

        axios.post('{{route('getStatus')}}',{'id':ID}).then(function (response) {

            status = response.data.result;
            $('#status').html(states[status])
        })
    }
    setInterval(function () {

        getStatus();

    },10000);

</script>

@endsection