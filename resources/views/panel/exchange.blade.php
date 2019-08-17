@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')

<section class="pb_section pb_slant-light" id="section-faq">
    <div class="container">
       <div>
         <ul class="d-flex justify-content-around" style="padding-left: 0;">
            <li class="white-circle receive_coin">5</li>
            <li class="white-circle waitForExchange">4</li>
            <li class="white-circle send_funds">3</li>
            <li class="white-circle enter_address">2</li>
            <li class="white-circle enter_amount circle-active">1</li>
         </ul>
       </div>
       <br/>

       <div class="exchange-card" id="enter_amount">
         <div class="row">
            <div class="col-md-5 exchange-details-container">
                 <h3 class="text-right">جزئیات</h3>
                 <div class="exchange-details">
                   <span class="detail-desc">مقدار تبدیل مورد انتظار</span>
                   <span class="detail-value" id="enter_amount_expectedVal"></span>
                 </div>
                 <div class="exchange-details">
                     <span class="detail-desc">هزینه تبدیل</span>
                     <span class="detail-value" id="enter_amount_exchange_fee"></span>
                 </div>
                  <div class="exchange-details">
                     <span class="detail-desc">هزینه شبکه</span>
                     <span class="detail-value" id="enter_amount_networkFee"></span>
                 </div>
                 <div class="exchange-details">
                     <span class="detail-desc">زمان تقریبی</span>
                     <span class="detail-value" style="direction: rtl">5 تا 30 دقیقه</span>
                 </div>
                 <br/><br/>
             </div>
             <div class="col-md-7 col-sm-12">
                 <h3 class="text-right">مقدار ارز خود را وارد کنید</h3>
                 <div class="row">
                     <div class="col-md-12">
            <div class="row mx-auto">
              <input id="inputCoinValue"  oninput="exchangeRate()" type="text" class="form-control pb_height-50 inputCoin"  value="1" />
              <div class="select-exchange">
                <select name="item"><option value=""></option></select>
                <div>
                  <div class="selected-exchange">
                    <span>&#8597;</span>
                    <div id="inputCoinKind">Click and select </div>
                  </div>
                  <div class="select-dropdown-exchange">
                    <div class="item-search-exchange">
                      <input  id="inputCoinKindSearch" autocomplete="off" placeholder="جست و جو..." style="text-align: center;direction: rtl;">
                    </div>
                    <div class="items-exchange" id="inputCoinKindSelect">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" id="reverseBtn" style="background-color: inherit;border: 0px;margin-top: 10px;font-size: 20px;"><i class="fa fa-exchange fa-3" aria-hidden="true"></i></button>
          </div>
          <div class="col-md-12">
            <div class="row mx-auto">
              <input  id="outputCoinValue" type="text" class="form-control pb_height-50 inputCoin" placeholder="..." />
              <div class="select-exchange">
                <select name="item"><option value=""></option></select>
                <div>
                  <div class="selected-exchange">
                    <span>&#8597;</span>
                    <div id="outputCoinKind">Click and select </div>
                  </div>
                  <div class="select-dropdown-exchange">
                    <div class="item-search-exchange">
                      <input id="outputCoinKindSearch" autocomplete="off" placeholder="جست و جو..." style="text-align: center;direction: rtl;">
                    </div>
                    <div class="items-exchange" id="outputCoinKindSelect">
                    </div>
                    <!-- <div class="item-count-exchange">
                       30 products
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 exchange-button-container">
            <button class="btn btn-success exchange-button" type="submit" id="converBtn">تبدیل</button>
          </div>
                 </div>
             </div>
         </div>

       </div>

       <div class="exchange-card" id="enter_address"  style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>آدرس کیف پول</h3>
               <button class="btn" id="return_enter_amount">بازگشت</button>
           </div>
           <div class="form-group">
               <label>آدرس کیف پول</label>
               <input type="text" class="form-control" id="walletAddressInput">
           </div>
           <button id="enter_address_btn" class="btn btn-success" style="margin: auto;display: block;">مرحله بعدی</button>
       </div>

       <div class="exchange-card" id="send_funds" style="direction: rtl;">
           <div class="d-flex justify-content-between">
               <h3>چک کردن</h3>
               <button class="btn" id="return_enter_address">بازگشت</button>
           </div>
           <div style=" padding-right: 2%;">
               <div class="exchange-details">
                   <span class="detail-desc" >شما واریز می کنید</span>
                   <span class="detail-value" id="sending"></span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc" >شما دریافت می کنید</span>
                   <span class="detail-value" id="receiving"></span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">آدرس کیف پول شما</span>
                   <span class="detail-value" id="walletAddress">0xa552e9E883636C1aad8FacD3F52DDc2A9d6cbc28</span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">مقدار تبدیل مورد انتظار</span>
                   <span class="detail-value" id="send_funds_expectedVal"></span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">هزینه تبدیل</span>
                   <span class="detail-value" id="send_funds_exchange_fee"></span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">هزینه شبکه</span>
                   <span class="detail-value" id="send_funds_networkFee"></span>
               </div>
               <div class="exchange-details">
                   <span class="detail-desc">زمان تقریبی</span>
                   <span class="detail-value" style="direction: rtl">۵ تا ۳۰ دقیقه</span>
               </div>
               <br/>
               <form action="{{route('createTransaction')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{--<input type="text" name="amountFrom" style="display: none;" id="sendingValue">--}}
                <input type="text" name="amount" style="display: none;" id="sendingValue">
                <input type="text" name="from" style="display: none;" id="sendingKind">
                <input type="text" name="to" style="display: none;" id="recievingKind">
                <input type="text" name="rateId" style="display: none;" id="exchangeToken">
                <input type="text" name="extraId" style="display: none;" id="exteraId">
                <input type="text" name="address" style="display: none;" id="walletAdd">
                <button class="btn btn-success" type="submit" style="margin: auto;display: block;">مرحله بعدی</button>
               </form>
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

@include('master.footer')

<style>
     .exchange-details-container {
         border-right: 1px solid; padding-right: 2%;
     }

     .exchange-button-container {
       text-align: center; margin-top: 3%;
     }

     @media only screen and (max-width: 1024px) {
     }

     @media only screen and (max-width: 768px) {
         .exchange-button-container {margin-top: 3%;}
      }

      @media only screen and (max-width: 415px) {
         .exchange-button-container {margin-top: 3%;}
         .exchange-details-container { border-right: 0px; padding-right: 8%; }
         .container {padding-left: 0px; padding-right: 0px;}
         .pb_section {
           padding: 8em 0;
          }
          .detail-desc { font-size: 0.8rem; }
          .detail-value {font-size: 1rem;}
      }

      @media only screen and (max-width: 350px) { 
      }

     .inputCoin {
       width: 40%;border-top-right-radius: 0px;
       border-bottom-right-radius: 0px;background-color: white;
     }

    .selected-exchange span {
        float: right;
        margin-top: -5px;
    }

    .select-dropdown-exchange {
        overflow: hidden;
        height: 0px;
        transition: height ease 0.2s;
    }

    .select-dropdown-exchange.opened-exchange {
        height: 380px;
        transition: height ease 0.2s;
    }

    .selected-exchange {
        height: 48.5px;
        padding: 10px 10px;
        background: #f0f0f0;
        cursor: pointer;
    }

    select {
        display: none;
    }

    .select-exchange {
        text-align: left;
        display: inline-block;
        width: 60%;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        /*box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.1);*/
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px
    }

    .item-search-exchange {
        padding: 10px 5px;
        background: #fafafa;
        border-bottom: 1px solid #ddd;
    }

    .item-search-exchange input {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border: 2px solid #eee;
        border-radius: 5px;
        font-size: 16px;
    }

    .item-search-exchange input:focus {
        outline: none;
        border: 1px solid #4fa5ff;
        margin: 1px;
        box-shadow: 0px 0px 0px 5px #afd6ff;
    }

    .items-exchange {
        height: 380px;
        overflow: auto;
        overflow-x: hidden;
        background-color: white;
    }

    .item-count-exchange {
        padding: 15px 10px;
        background: #fafafa;
        border-top: 1px solid #ccc;
    }

    .items-exchange > div {
        border-top:  1px solid #eee;
        font-size: 0px;
    }

    .item-exchange {
      background-color: #f0f0f0; padding: 2%;margin-left: 0px;
    }
    .item-exchange img {
        margin-left: 5%;
    }
    .item-exchange span {
        margin-left: 5px;
        color: black;
        font-size: 15px;
    }

    .items-exchange > div:hover {
        background: #fcfcfc;
        cursor: pointer;
    }


    .items-exchange > div:last-child {
        border-bottom: 1px solid #eee;
    }

    .img-exchange {
        vertical-align: top;
        display: inline-block;
        width: 80px;
        padding: 12px 0px 0px 12px;
    }

    .content-exchange {
        display: inline-block;
        width: calc(100% - 120px);
        padding: 10px;
        font-size: 15px;
    }

    span.badge-exchange {
        border:  1px solid #ccc;
        padding:  3px 10px;
        font-size:  13px;
        background:  #fafafa;
        border-radius: 4px;
    }

    ::-webkit-scrollbar {
        width: 8px;
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(0,0,0,0.1);
        border-radius: 5px;
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
        word-break: break-word;
    }
    .pb_footer {padding-top: 15%;}
</style>

@include('master.scripts')

<script type="text/javascript">

    var auth = `{!! json_encode(Auth::guard('user')->check()) !!}`;
    console.log("auth");
    console.log(auth);
    if(auth === true) {
       console.log("login");
    } else {
       console.log("not login");
    }

    // input coin value
   var inputCoinValue = `{!! isset($_GET["amount"])?$_GET["amount"]:1  !!}`;
   // input coin kind
   var inputCoinKind = `{!! isset($_GET["from"])?$_GET["from"]:'btc'  !!}`;
   // output coin kind
   var outputCoinKind = `{!! isset($_GET["to"])?$_GET["to"]:'eth'  !!}`;
   $('#inputCoinKind').html(`
               <div class="row" style="margin-left: 10px;">
                   <img  width="30" height="30" src="assets/img/icons/`+inputCoinKind+`.png">
                   <span  style="margin-left: 10px;margin-top: 3px;">`+inputCoinKind.toUpperCase()+`</span>
               </div>`);
    $('#outputCoinKind').html(`
               <div class="row" style="margin-left: 10px;">
                   <img  width="30" height="30" src="assets/img/icons/`+outputCoinKind+`.png">
                   <span  style="margin-left: 10px;margin-top: 3px;">`+outputCoinKind.toUpperCase()+`</span>
               </div>`);
   // $('#inputCoinKind').html(inputCoinKind);$('#outputCoinKind').html(outputCoinKind);
   $('#inputCoinValue').val(inputCoinValue);
   // console.log(inputCoinValue);console.log(inputCoinKind);console.log(outputCoinKind);
    var coinList = [];

    $('.selected-exchange').on('click', function() {
        console.log("selected clicked");
        $(this).next().toggleClass('opened-exchange');
        exchangeRate();
    });


    
    $('#inputCoinKindSearch').on('keyup', function() {
        // console.log("item-select-search");
        var txt = $(this).val().toLowerCase();
        console.log(txt);
        $(this).parent().parent().parent().find('#inputCoinKindSelect > div').hide();
        for(var i=0; i<coinList.length; i++) {
          if(coinList[i].full_name.toLowerCase().includes(txt) || coinList[i].name.toLowerCase().includes(txt)) {
            $('#coin1'+i).show();
          } else {console.log(coinList[i].full_name+" , "+txt);}
        }
        
    });

    $('#outputCoinKindSearch').on('keyup', function() {
        // console.log("item-select-search");
        var txt = $(this).val().toLowerCase();
        console.log(txt);
        $(this).parent().parent().parent().find('#outputCoinKindSelect > div').hide();
        for(var i=0; i<coinList.length; i++) {
          if(coinList[i].full_name.toLowerCase().includes(txt) || coinList[i].name.toLowerCase().includes(txt)) {
            $('#coin2'+i).show();
          } else {console.log(coinList[i].full_name+" , "+txt);}
        }
        
    });

    // Get currencies
    axios.post('{{route('getCurrencies')}}').then(function (response) {
        console.log("getCurrencies");console.log(response);
         coinList = response.data;
        for(var i=0; i<coinList.length; i++) {
        
          $('#inputCoinKindSelect').append(`
               <div class="row item-exchange" id="coin1`+i+`">
                   <img  width="20" height="20" src="assets/img/icons/`+coinList[i].name+`.png">
                   <span class="coinSmallName" style="color:`+coinList[i].color+`;">`+coinList[i].name+`</span>
                   <span>`+coinList[i].full_name+`</span>
               </div>
            `);
          $('#outputCoinKindSelect').append(`
               <div class="row item-exchange" id="coin2`+i+`">
                   <img  width="20" height="20" src="assets/img/icons/`+coinList[i].name+`.png">
                   <span class="coinSmallName" style="color:`+coinList[i].color+`;">`+coinList[i].name+`</span>
                   <span>`+coinList[i].full_name+`</span>
               </div>
            `);
        }
        // $('#inputCoinKind').html("btc");$('#outputCoinKind').html("eth");
          // console.log($('#inputCoinValue').val());
          // console.log($('#inputCoinKind').text());
          // console.log($('#inputCoinValue').val());
          exchangeRate();
        $('.item-exchange').on('click', function() {
          console.log("item-select");
          var txt = $(this).find('span.coinSmallName').text();
          console.log($(this));
          console.log(txt);
          $(this).parent().parent().parent().find('.selected-exchange div').html(`
               <div class="row" style="margin-left: 10px;">
                   <img  width="30" height="30" src="assets/img/icons/`+txt+`.png">
                   <span  style="margin-left: 10px;margin-top: 3px;">`+txt.toUpperCase()+`</span>
               </div>`
            );
          $(this).parent().parent().parent().find('.opened-exchange').removeClass('opened-exchange');
           exchangeRate();
          
        });
    });

     // reverse exchange
     
     $('#reverseBtn').on('click', function() {
          console.log("reverseBtn");
          var Temp = $('#inputCoinKind').html();
          $('#inputCoinKind').html($('#outputCoinKind').html());
          $('#outputCoinKind').html(Temp);
          $('#inputCoinValue').val($('#outputCoinValue').val());
          exchangeRate();
      });

    function exchangeRate() {
//      var link = 'http://localhost:70/exchange/public/get-exchange-amount?from='+$('#inputCoinKind').text()+'&to='+$('#outputCoinKind').text()+'&amount='+$('#inputCoinValue').val();
//      console.log(link);
      if( isNumeric($('#inputCoinValue').val()) && ($('#inputCoinValue').val() !== "") ) {
//        console.log("exchangeRate");$('#outputCoinValue').val("...");

          axios.post('{{route('getExchangeAmount')}}',{
              'from':$('#inputCoinKind span').text(),
              'to':$('#outputCoinKind span').text(),
              'amount':$('#inputCoinValue').val()
          }).then(function (response) {
               console.log("axios test");
               console.log(response.data);
              if(response.data == 500){
                 
              } else {
              
                 // vm.receiveNumber = response.data.toFixed(8);
                  var resp = response.data.result[0];
                  
                  $('#sendingValue').val($('#inputCoinValue').val());
                  $('#sendingKind').val($('#inputCoinKind span').text());
                  $('#recievingKind').val($('#outputCoinKind span').text());
                  $('#exchangeToken').val(resp.rateId);
                  $('#exteraId').val("");
                  
                  // console.log(parseFloat(resp.fee).toFixed(8));
                  $('#outputCoinValue').val(resp.result);
                  $('#enter_amount_exchange_fee').html(parseFloat(resp.fee).toFixed(8) +' ' + resp.to.toUpperCase());
                  $('#send_funds_exchange_fee').html(parseFloat(resp.fee).toFixed(8) +' ' + resp.to.toUpperCase());
                  $('#enter_amount_expectedVal').html('1 '+ resp.from.toUpperCase() + ' = ' + parseFloat(resp.rate).toFixed(8) +' '+ resp.to.toUpperCase());
                  $('#send_funds_expectedVal').html('1 '+ resp.from.toUpperCase() + ' = ' + parseFloat(resp.rate).toFixed(8) +' '+ resp.to.toUpperCase());
                  $('#enter_amount_networkFee').html(parseFloat(resp.networkFee).toFixed(8) +' '+resp.to.toUpperCase());
                  $('#send_funds_networkFee').html(parseFloat(resp.networkFee).toFixed(8) +' '+resp.to.toUpperCase());
                  $('#sending').html(parseFloat(resp.amount).toFixed(8) +' '+resp.from.toUpperCase());
                  $('#receiving').html(parseFloat(resp.result).toFixed(8) +' '+resp.to.toUpperCase());
              }
          })
      }
    }

    function isNumeric(num){
       return !isNaN(num)
    }

    $('#pb-navbar').addClass("scrolled awake"); 

    function hideAllExchangeParts() {
      $('#enter_amount').hide();
      $('#enter_address').hide();
      $('#send_funds').hide();
      $('#waitForExchange').hide();
      $('#receive_coin').hide();
      $('.white-circle').removeClass("circle-active");
    }

    function showExchangePart1() {
      $('#enter_amount').show(); $('.enter_amount').addClass("circle-active");
    }
    function showExchangePart2() {
        $('#enter_address').show(); $('.enter_address').addClass("circle-active");
    }
    function showExchangePart3() {
      $('#send_funds').show(); $('.send_funds').addClass("circle-active");
    }
    function showExchangePart4() {
      $('#waitForExchange').show(); $('.waitForExchange').addClass("circle-active");
    }
    function showExchangePart5() {
      $('#receive_coin').show(); $('.receive_coin').addClass("circle-active");
    }
 
    hideAllExchangeParts();
    showExchangePart1();
    
     $('#converBtn').on('click', function() {
      if(auth === "true") {
        hideAllExchangeParts();showExchangePart2();
      } else {
        $('#authForm h3').text("ثبت نام");
       $('#authForm button').text("ثبت نام");
      $('#authForm form').attr('action', `{!! route('signup') !!}`);
       $('#userName').show();
      $('#passwordRepeat').show();
     $('#signUpGoogle').show();
      $('#loginGoogle').hide();
        modal.style.display = "block";
      }
    });

     $('#return_enter_amount').on('click', function() {
        hideAllExchangeParts();showExchangePart1();
    });
    $('#enter_address_btn').on('click', function() {
        hideAllExchangeParts();showExchangePart3();
        $('#walletAddress').html($('#walletAddressInput').val());
        $('#walletAdd').val($('#walletAddressInput').val());
    }); 
    $('#return_enter_address').on('click', function() {
        hideAllExchangeParts();showExchangePart2();
    });

</script>
@endsection
