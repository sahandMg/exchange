@extends('master.layout')
@section('title')
  <title> اسم سایت - خانه</title>
@endsection
@section('content')
<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light exchange-header-section" id="section-home">
      <div class="container">
       <div class="row exchange-header">
        <div class="col-md-5 col-sm-12">
         <h1 class="text-center" style="color: white;">راه آسان و امن برای تبدیل بیش از 140 ارز دیجیتال</h1>
        </div>
        <div class="col-md-7 col-sm-12 row">
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
                      <input autocomplete="off" placeholder="search...">
                    </div>
                    <div class="items-exchange">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="button" style="background-color: inherit;border: 0px;margin-top: 10px;font-size: 20px;"><i class="fa fa-exchange fa-3" aria-hidden="true"></i></button>
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
                      <input autocomplete="off" placeholder="search...">
                    </div>
                    <div class="items-exchange">
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
            <button class="btn btn-primary exchange-button" type="submit">تبدیل</button>
          </div>
        </div>
       </div>
      </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Features</strong></h5>-->
            <h2>ویژگی های ما</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-right">
              <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3">دفتر حساب</h5>
                <p>می توانید تمام تبدیل های خود را ببینید.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-right">
              <div class="pb_icon"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3">تبدیل سریع</h5>
                <p>در سریع ترین زمان ممکن تبدیل ارز را انجام می دهیم</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-right">
              <div class="pb_icon"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3">بیش از 140 ارز</h5>
                <p>صرافی ما بیش از 140 ارز را برای شما تبدیل می کند.</p>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-4 col-md- col-sm-6">-->
            <!--<div class="media d-block pb_feature-v1 text-right">-->
              <!--<div class="pb_icon"><i class="ion-ios-color-filter-outline pb_icon-gradient"></i></div>-->
              <!--<div class="media-body">-->
                <!--<h5 class="mt-0 mb-3">Component Based Design</h5>-->
                <!--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
              <!--</div>-->
            <!--</div>-->
          <!--</div>-->
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-right">
              <div class="pb_icon"><i class="fa fa-exchange pb_icon-gradient" style="line-height: 1.8;"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3">نرخ تبدیل کم</h5>
                <p>0.5 درصد از تبدیل شما به عنوان نزخ تبدیل کسر می شود.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-right">
              <div class="pb_icon"><i class="ion-ios-paperplane-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3">پاسخگو تماس ها</h5>
                <p>تمامی سوالات شما را در اسرع وقت پاسخگو هستیم.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="pb_section pb_slant-light pb_pb-220" id="section-reviews">
      <div class="container">
        <div class="row justify-content-center mb-1">
          <div class="col-md-6 text-center mb-5">
            <!--<h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>نظرها</strong></h5>-->
            <h2>نظرهای دیگران</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_slide_testimonial_sync_v1">
              <div class="pb_slider_content js-pb_slider_content2">
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">سایت ه خیلی خوبی ، فوق العاده هستش ، اینا منصفند ، نرخ تبدیلشون خیلی کمه ، از ارزهای زیادی پشتیبانی می کنند به خصوص طراحی سایتشون خیلی خوبه</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">محمد</h3>
                      <!--<span class="subheading">@garry</span>-->
                      
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">سایت ه خیلی خوبی ، فوق العاده هستش ، اینا منصفند ، نرخ تبدیلشون خیلی کمه ، از ارزهای زیادی پشتیبانی می کنند به خصوص طراحی سایتشون خیلی خوبه</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">شاهین</h3>
                      <!--<span class="subheading">@deborah</span>-->
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">سایت ه خیلی خوبی ، فوق العاده هستش ، اینا منصفند ، نرخ تبدیلشون خیلی کمه ، از ارزهای زیادی پشتیبانی می کنند به خصوص طراحی سایتشون خیلی خوبه</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">سهند</h3>
                      <!--<span class="subheading">@james</span>-->
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">سایت ه خیلی خوبی ، فوق العاده هستش ، اینا منصفند ، نرخ تبدیلشون خیلی کمه ، از ارزهای زیادی پشتیبانی می کنند به خصوص طراحی سایتشون خیلی خوبه</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">حسن</h3>
                      <!--<span class="subheading">@marie</span>-->
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="pb_slider_nav js-pb_slider_nav2">
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="{{URL::asset('assets/img/person_1.jpg')}}" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="{{URL::asset('assets/img/person_5.jpg')}}" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="{{URL::asset('assets/img/person_2.jpg')}}" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="{{URL::asset('assets/img/person_6.jpg')}}" alt="Generic placeholder image">
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- END sync_v1 -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
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



  <style type="text/css">
     .exchange-header {
      height: 50vh !important;margin-top: 15%;
     }
     .exchange-button-container {
      text-align: center;
     }
    
     @media only screen and (max-width: 1024px) {
        .exchange-header-section {
            height: 70vh;
        } 
        .exchange-header {
           height: 20vh !important;margin-top: 15%;
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
         .exchange-header { margin-top: 5%;padding-top: 0px !important; }
      }

      @media only screen and (max-width: 350px) {
         .exchange-header-section {
            height: 100vh;
        } 
      }
     
    .inputCoin {
      width: 40%;border-top-right-radius: 0px;border-bottom-right-radius: 0px;background-color: white;
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
  </style>

  @include('master.scripts')

  <script type="text/javascript">
    console.log("Start");

    var coinList = [];

    $('.selected-exchange').on('click', function() {
        console.log("selected clicked");
        $(this).next().toggleClass('opened-exchange');
        exchangeRate();
    });

    // $('.item-exchange').on('click', function() {
    //     console.log("item-select");
    //     var txt = $(this).find('span').text();
    //     console.log($(this));
    //     console.log(txt);
    //     $(this).parent().parent().parent().find('.selected-exchange div').html(txt);
    //     $(this).parent().parent().parent().find('.opened-exchange').removeClass('opened-exchange');
    // });

    // $('.items-exchange > div').on('click', function() {
    //     console.log("item-select");
    //     var txt = $(this).find('.content-exchange > div:first-child b').text();
    //     $(this).parent().parent().parent().find('.selected-exchange div').html(txt);
    //     $(this).parent().parent().parent().find('.opened-exchange').removeClass('opened-exchange');
    // });

    $('.item-search-exchange input').on('keyup', function() {
        console.log("item-select-search");
        var txt = $(this).val().toLowerCase();
        console.log(txt);
        $(this).parent().parent().parent().find('.items-exchange > div').hide();
        for(var i=0; i<coinList.length; i++) {
          if(coinList[i].full_name.toLowerCase().includes(txt) || coinList[i].name.toLowerCase().includes(txt)) {
            $('#coin'+i).show();
          } else {console.log(coinList[i].full_name+" , "+txt);}
        }
        
    })
    // console.log('{{route('getCurrencies')}}');
    axios.post('{{route('getCurrencies')}}').then(function (response) {
        console.log("getCurrencies");console.log(response);
         coinList = response.data;
        for(var i=0; i<coinList.length; i++) {
          $('.items-exchange').append(`
               <div class="row item-exchange" id="coin`+i+`">
                   <img  width="20" height="20" src="assets/img/icons/`+coinList[i].name+`.png">
                   <span class="coinSmallName" style="color:`+coinList[i].color+`;">`+coinList[i].name+`</span>
                   <span>`+coinList[i].full_name+`</span>
               </div>
            `);
        }
        $('#inputCoinKind').html("btc");$('#outputCoinKind').html("eth");
          // console.log($('#inputCoinValue').val());
          // console.log($('#inputCoinKind').text());
          // console.log($('#inputCoinValue').val());
          exchangeRate();
        $('.item-exchange').on('click', function() {
          console.log("item-select");
          var txt = $(this).find('span.coinSmallName').text();
          console.log($(this));
          console.log(txt);
          $(this).parent().parent().parent().find('.selected-exchange div').html(txt);
          $(this).parent().parent().parent().find('.opened-exchange').removeClass('opened-exchange');
           exchangeRate();
          
        });
    });

    // document.getElementById("inputCoinValue").addEventListener('change', exchangeRate);


    function exchangeRate() {
      var link = 'http://localhost:70/exchange/public/get-exchange-amount?from='+$('#inputCoinKind').text()+'&to='+$('#outputCoinKind').text()+'&amount='+$('#inputCoinValue').val();
      console.log(link);
      if( isNumeric($('#inputCoinValue').val()) && ($('#inputCoinValue').val() !== "") ) {
        console.log("exchangeRate");
        axios.get(link).then(function (response) {
               console.log("axios test");
               console.log(response);
              if(response.data == 500){
                 
              } else {
                 // vm.receiveNumber = response.data.toFixed(8);
                 $('#outputCoinValue').val(response.data);
              }
          })
      }
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