@extends('master.layout')
@section('title')
  <title> اسم سایت | خانه</title>
@endsection
@section('content')

  @include('landing/header') 
  @include('landing/coinsPrice') 
  @include('landing/features')
  @include('landing/comments')


  <style type="text/css">
     .exchange-header {
      /*height: 50vh !important;*/
      margin-top: 15%;
     }
     .exchange-button-container {
      text-align: center;
     }
    
     @media only screen and (max-width: 1024px) {
        /*.exchange-header-section {
            height: 70vh;
        } */
        .exchange-header {
           /*height: 20vh !important;*/
           margin-top: 15%;
        } 
        .exchange-header h1{ font-size: 2rem; }
     }

     @media only screen and (max-width: 768px) {
         .exchange-header h1{ font-size: 1.7rem; }
         .exchange-button-container {margin-top: 3%;}
      }

      @media only screen and (max-width: 414px) {
         .exchange-header h1{ font-size: 1.5rem; margin-bottom: 10%; }
         .exchange-button-container {margin-top: 3%;}
         .exchange-header { margin-top: 15%;padding-top: 0px !important; }
      }

      @media only screen and (max-width: 350px) {
       /*  .exchange-header-section {
            height: 100vh;
        } */
      }
     
    .inputCoin {
      width: 40%;border-top-right-radius: 0px;border-bottom-right-radius: 0px;background-color: white;
      height: 51.8px;
      border: 0px;
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
        height: 100%;
        padding: 10px 10px;
        background: #f0f0f0;
        cursor: pointer;

    }

    .selected-exchange span {
        float: right;
        margin-top: 12px;
        margin-right: 12px;
    }

    .selected-exchange b {
     border-color: #252525 transparent transparent transparent;
     border-style: solid;
     border-width: 8px 6px 0 6px;
     /*height: 0;*/
     /*left: 90%;*/
     /*margin-left: -10px;*/
     /*margin-top: 10px;*/
     position: absolute;
     /*top: 50%;*/
     /*width: 0;*/
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
        border-top-left-radius: 0px;
        border: 0px;
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
  </style>
  @include('master.footer')
  @include('master.scripts')
<!-- ************ for showing message **************** -->
<!-- <script type="text/javascript">
  alertify.success(`success`);
</script> -->
  <script type="text/javascript">
    console.log("Start");
    var exchangeLink = `{!! route("exchangePage")!!}`;
   
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
    // set deafault currencies
    var txt1 = 'btc'; var txt2 = 'eth';
        $('#inputCoinKind').html(`
               <div class="row" style="margin-left: 10px;">
                   <img  width="30" height="30" src="assets/img/icons/`+txt1+`.png">
                   <span  style="margin-left: 10px;margin-top: 3px;">`+txt1.toUpperCase()+`</span>
               </div>`);
        $('#outputCoinKind').html(`
               <div class="row" style="margin-left: 10px;">
                   <img  width="30" height="30" src="assets/img/icons/`+txt2+`.png">
                   <span  style="margin-left: 10px;margin-top: 3px;">`+txt2.toUpperCase()+`</span>
               </div>`);
        $('#inputCoinValue').val(1);

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
        
          // console.log($('#inputCoinValue').val());
          // console.log($('#inputCoinKind').text());
          // console.log($('#inputCoinValue').val());
          exchangeRate();
        $('.item-exchange').on('click', function() {
          console.log("item-select");
          var txt = $(this).find('span.coinSmallName').text();
          console.log($(this));
          console.log(txt);
          // $(this).parent().parent().parent().find('.selected-exchange div').html(txt);
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

      updateHiddenInputs();

      if( isNumeric($('#inputCoinValue').val()) && ($('#inputCoinValue').val() !== "") ) {
        console.log("exchangeRate");$('#outputCoinValue').val("...");
        axios.post('{{route('getExchangeAmount')}}',{
                    'from':$('#inputCoinKind span').text(),
                    'to':$('#outputCoinKind span').text(),
                    'amount':$('#inputCoinValue').val()
                }).then(function (response) {
               console.log(response);
              if(response.data == 500){
                 
              } else {
                 // vm.receiveNumber = response.data.toFixed(8);
                  $('#outputCoinValue').val(response.data.result[0].result);
                  $('#exchangePageLink').attr("href", exchangeLink+"?from="+$('#inputCoinKind span').text()+"&to="+$('#outputCoinKind span').text()+"&amount="+$('#inputCoinValue').val())
              }
          })
      }
    }

    function updateHiddenInputs() {
      $('#inputCoinKindHidden').val($('#inputCoinKind span').text());
      $('#outputCoinKindHidden').val($('#outputCoinKind span').text());
      $('#inputCoinvalueHidden').val($('#inputCoinValue').val());
    }

    function isNumeric(num){
       return !isNaN(num)
    }

    // scroll
    var scrollWindow = function() {
        $(window).scroll(function(){
            var $w = $(this),
                    st = $w.scrollTop(),
                    navbar = $('.pb_navbar'),
                    sd = $('.js-scroll-wrap');

            if (st > 150) {
                if ( !navbar.hasClass('scrolled') ) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if ( navbar.hasClass('scrolled') ) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if ( st > 350 ) {
                if ( !navbar.hasClass('awake') ) {
                    navbar.addClass('awake');
                }

                if(sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if ( st < 350 ) {
                if ( navbar.hasClass('awake') ) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if(sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();
  </script>
@endsection