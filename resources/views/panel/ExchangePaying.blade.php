@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')
<section class="pb_section pb_slant-light" id="section-faq">
    <div class="container">
      <div class="exchange-card" id="waitForExchange"  style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>ارسال ارز</h3>
               <span>شناسه انتقال: asdfadsfsadfsadfsd</span>
           </div>

           <div class="row">
               <div class="col-md-7 col-sm-12">
                   <br/>
                   <p class="text-right">لطفا با استفاده از کیف پول خود، به آدرس زیر پول را ارسال کنید.پس از تایید واریز شما توسط شبکه، به صورت خودکار پول به حساب شما واریز می شود.</p>
                   <div class="exchange-details">
                       <span class="detail-desc">شما واریز می کنید</span>
                       <span class="detail-value">1 BTC</span>
                   </div>
                   <div class="exchange-details">
                       <span class="detail-desc">آدرس کیف پول </span>
                       <span class="detail-value">0xa552e9E883636C1aad8FacD3F52DDc2A9d6cbc28</span>
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
</script>
@endsection