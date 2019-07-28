@extends('master.layout')
@section('title')
  <title> اسم سایت - خانه</title>
@endsection
@section('content')
<section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
      <div class="container">
        <br/><br/><br/><br/><br/><br/>
        <h1 class="text-center" style="color: white;">راه آسان و امن برای تبدیل بیش از 140 ارز دیجیتال</h1>
        <br/><br/>
        <div class="row">
          <div class="col-md-4">
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
          <div class="col-md-1 text-center">
            <button type="button" style="background-color: inherit;border: 0px;margin-top: 10px;font-size: 20px;"><i class="fa fa-exchange fa-3" aria-hidden="true"></i></button>
          </div>
          <div class="col-md-4">
            <div class="row">
              <input  type="text" class="form-control pb_height-50 reverse" style="width: 60%;border-top-right-radius: 0px;border-bottom-right-radius: 0px;background-color: #f2f2f2;" placeholder="Full name" />
              <select class="form-control pb_height-50 reverse"  style="width: 40%;border-bottom-left-radius: 0px;border-top-left-radius: 0px;">
                <option value="" selected>Bitcoin</option>
                <option value="">Ethereum</option>
                <option value="">Stellar</option>
                <option value="">Tron</option>
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <button class="btn btn-primary exchange-button" type="submit">تبدیل</button>
          </div>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <h2 class="heading mb-3">Fly makes you faster</h2>
            <div class="sub-heading">
              <p class="mb-4">New free template by <a href="http://uicookies.com" target="_blank">uicookies.com</a>. For more templates visit the <a href="http://uicookies.com" target="_blank">site</a>. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span class="pb_font-14 text-uppercase pb_letter-spacing-1">See Pricing</span></a></p>
            </div>
          </div> 
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">
            
            <form action="#" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">Sign Up for Free</h2>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Full name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <div class="pb_select-wrap">
                  <select class="form-control pb_height-50 reverse">
                    <option value="" selected>Type</option>
                    <option value="">Basic</option>
                    <option value="">Business</option>
                    <option value="">Free</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">
              </div>
            </form>

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



    <!--<section class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8"  style="background-image: url(assets/images/1900x1200_img_5.jpg)">-->
      <!--<div class="container">-->
        <!--<div class="row align-items-center justify-content-center">-->
          <!--<div class="col-md-5 justify-content-center">-->
            <!--<h2 class="heading mb-5 pb_font-40">Join over 1M+ people who uses Instant App</h2>-->
            <!--<div class="sub-heading">-->
              <!--<p class="mb-4">New free template by <a href="http://uicookies.com" target="_blank">uicookies.com</a>. For more templates visit the <a href="http://uicookies.com" target="_blank">site</a>. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
            <!--</div>-->
          <!--</div> -->
          <!--<div class="col-md-1"></div>-->
          <!--<div class="col-md-5">-->
             <!--<form action="#" class="bg-white rounded pb_form_v1">-->
              <!--<h2 class="mb-4 mt-0 text-center">Sign Up for Free</h2>-->
              <!--<div class="form-group">-->
                <!--<input type="text" class="form-control py-3 reverse" placeholder="Full name">-->
              <!--</div>-->
              <!--<div class="form-group">-->
                <!--<input type="text" class="form-control py-3 reverse" placeholder="Email">-->
              <!--</div>-->
              <!--<div class="form-group">-->
                <!--<input type="text" class="form-control py-3 reverse" placeholder="Email">-->
              <!--</div>-->
              <!--<div class="form-group">-->
                <!--<div class="pb_select-wrap">-->
                  <!--<select class="form-control pb_height-50 reverse">-->
                    <!--<option value="" selected>Type</option>-->
                    <!--<option value="">Basic</option>-->
                    <!--<option value="">Business</option>-->
                    <!--<option value="">Free</option>-->
                  <!--</select>-->
                <!--</div>-->
              <!--</div>-->
              <!--<div class="form-group">-->
                <!--<input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">-->
              <!--</div>-->
            <!--</form>-->
          <!--</div>-->
        <!--</div>-->
      <!--</div>-->
    <!--</section>-->
    <!--&lt;!&ndash; END section &ndash;&gt;-->

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


@endsection