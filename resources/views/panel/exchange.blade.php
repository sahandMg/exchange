@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')

<section class="pb_section pb_slant-white" id="section-faq">
    <div class="container">
       <div>
         <ul class="d-flex justify-content-around" style="padding-left: 0;">
            <li class="white-circle circle-active">1</li>
            <li class="white-circle">2</li>
            <li class="white-circle">3</li>
            <li class="white-circle">4</li>
            <li class="white-circle">5</li>
         </ul>
       </div>
       <br/>

       <div class="exchange-card" id="enter_amount">
         <div class="row">
             <div class="col-md-5" style="border-right: 1px solid; padding-right: 2%;">
                 <h3 class="text-right">جزئیات</h3>
                 <div class="exchange-details">
                   <span class="detail-desc">مقدار تبدیل مورد انتظار</span>
                   <span class="detail-value">1 BTC = 100 ETH</span>
                 </div>
                 <div class="exchange-details">
                     <span class="detail-desc">هزینه تبدیل</span>
                     <span class="detail-value">0.0001 BTC</span>
                 </div>
                 <div class="exchange-details">
                     <span class="detail-desc">هزینه شبکه</span>
                     <span class="detail-value">0.00002</span>
                 </div>
                 <div class="exchange-details">
                     <span class="detail-desc">زمان تقریبی</span>
                     <span class="detail-value">5 تا 10 دقیقه</span>
                 </div>
                 <br/><br/>
             </div>
             <div class="col-md-7">
                 <h3 class="text-right">مقدار ارز خود را وارد کنید</h3>
                 <div class="row">
                     <div class="col-md-11" style="margin: auto;">
                         <div class="row">
                             <input  type="text" class="form-control pb_height-50 reverse" style="width: 60%;border-top-right-radius: 0px;border-bottom-right-radius: 0px;" value="1" />
                             <select class="form-control pb_height-50 reverse"  style="width: 40%;border-bottom-left-radius: 0px;border-top-left-radius: 0px;background-color: #f2f2f2;">
                                 <option value="" selected>Bitcoin</option>
                                 <option value="">Ethereum</option>
                                 <option value="">Stellar</option>
                                 <option value="">Tron</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-11 text-center"  style="margin: auto;">
                         <button type="button" style="background-color: inherit;border: 0px;margin-top: 10px;font-size: 20px;"><i class="fa fa-exchange fa-3" aria-hidden="true"></i></button>
                     </div>
                     <div class="col-md-11"  style="margin: auto;">
                         <div class="row">
                             <input  type="text" class="form-control pb_height-50 reverse" style="width: 60%;border-top-right-radius: 0px;border-bottom-right-radius: 0px;background-color: #f2f2f2;" value="10" />
                             <select class="form-control pb_height-50 reverse"  style="width: 40%;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                                 <option value="" selected>Bitcoin</option>
                                 <option value="">Ethereum</option>
                                 <option value="">Stellar</option>
                                 <option value="">Tron</option>
                             </select>
                         </div>
                     </div>
                     <div class="col-md-11" style="margin: auto;margin-top: 2%;">
                         <button class="btn btn-success exchange-button" type="submit" style="display: block;margin: auto;">تبدیل</button>
                     </div>
                 </div>
             </div>
         </div>

       </div>

       <div class="exchange-card" id="enter_address"  style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>آدرس کیف پول</h3>
               <button class="btn">بازگشت</button>
           </div>
           <div class="form-group">
               <label>آدرس کیف پول</label>
               <input type="text" class="form-control">
           </div>
           <button class="btn btn-success" style="margin: auto;display: block;">مرحله بعدی</button>
       </div>

       <div class="exchange-card" id="send_funds" style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>چک کردن</h3>
               <button class="btn">بازگشت</button>
           </div>
           <div style=" padding-right: 2%;">
               <div class="exchange-details">
                   <span class="detail-desc">شما واریز می کنید</span>
                   <span class="detail-value">1 BTC</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">شما دریافت می کنید</span>
                   <span class="detail-value">100 ETH</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">آدرس کیف پول شما</span>
                   <span class="detail-value">0xa552e9E883636C1aad8FacD3F52DDc2A9d6cbc28</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">مقدار تبدیل مورد انتظار</span>
                   <span class="detail-value">1 BTC = 100 ETH</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">هزینه تبدیل</span>
                   <span class="detail-value">0.0001 BTC</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">هزینه شبکه</span>
                   <span class="detail-value">0.00002</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">زمان تقریبی</span>
                   <span class="detail-value">5 تا 10 دقیقه</span>
               </div>
               <br/>
               <button class="btn btn-success" style="margin: auto;display: block;">مرحله بعدی</button>
               <br/>
           </div>
       </div>

       <div class="exchange-card" id="waitForExchange"  style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>ارسال ارز</h3>
               <span>شناسه انتقال: asdfadsfsadfsadfsd</span>
           </div>

           <div class="row">
               <div class="col-md-7">
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
               <div class="col-md-5">
                   <img src="assets/images/qrcode.png" style="width: 100%;height: auto;">
               </div>
           </div>
       </div>

       <div class="exchange-card" id="receive_coin"  style="direction: rtl;">
           <h3>دریافت ارز</h3>
       </div>
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
    .white-circle {
        border-radius: 50%;
        background-color: #FAFAFA;
        color: #b3b4b4;
        width: 40px;
        height: 40px;
        list-style: none;
        text-align: center;
        font-size: 1.2rem;
    }
    .circle-active {
        background-color: white;
        color: black;
        box-shadow: 0 10px 15px 0 rgba(0,0,0,.08);
    }
    .exchange-details {margin-top: 2%;direction: rtl;text-align: right;}
    .detail-desc {
        line-height: 1;
        font-size: 1em;
        color: rgb(179, 180, 180);
    }
    .detail-value {
        display: block;
        line-height: 1.1;
        font-size: 1.3em;
        direction: ltr;
        /*word-break: break-word;*/
    }
    .pb_footer {padding-top: 15%;}
</style>

@include('master.scripts')

<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
</script>
@endsection
