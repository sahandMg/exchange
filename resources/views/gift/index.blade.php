@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')
<section class="pb_section pb_slant-light">
<div class="container">
   <div class="text-center giftcard-page">
    <h1 class="text-center">خرید کارت هدیه بیت کوین</h1>
    <span class="text-center">بیت کوین را به خانواده و دوستان خود هدیه بدهید.</span>
   </div>
   <div>
         <ul class="d-flex justify-content-around" style="padding-left: 0;">
            <li class="white-circle enter_info">2</li>
            <li class="white-circle enter_cart circle-active">1</li>
         </ul>
       </div>
   <div class="exchange-card" style="direction: rtl;" id="step1"> 
	  <h3>مقدار بیت کوین کارت هدیه خود را انتخاب کنید.</h3>
	  <br/>
	  <div class="d-flex flex-wrap justify-content-around">
          @for($i=0;$i<count($cardsType);$i++)
	  	<div class="square text-center" id="giftCart{{$i}}">
	  		<span id="cardType{{$i}}"></span>
	  		<p id="cardPrice{{$i}}" style="direction: rtl;"></p>
	  	</div>
          @endfor
	  </div>
	  <br/>
	  <table class="table text-center" id="cart-table" >
         <thead>
          <tr>
           <th class="text-center">کارت</th>
           <th class="text-center">تعداد</th>
           <th class="text-center">جمع کل</th>
          </tr>
    </thead>
    <tbody></tbody>
  </table>
   <div class="text-center" id="nextStep">
   	 <button class="btn btn-success mx-auto" id="nextStepBtn">مرحله بعد</button>
   </div>
  </div>
  <!--  step 2 -->
  <div class="exchange-card" style="direction: rtl;" id="step2"> 
	  <h3>مقدار بیت کوین کارت هدیه خود را انتخاب کنید.</h3>
	  <br/>
      @include('errors.formError')
	  <form method="POST" action="{{route('cardRegister')}}">
	  <div class="form-group">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>نام:</label>
        <input name="fname" pattern='[a-zA-Z0-9 آ ا ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی]+'  required type="text" value="{{old('fname')}}" class="form-control">
      </div>
      <div class="form-group">
        <label >نام خانوادگی:</label>
        <input name="lname" required type="text" pattern='[a-zA-Z0-9 آ ا ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی]+'  value="{{old('lname')}}" class="form-control">
      </div>
          <div class="form-group">
              <label>شماره تلفن:</label>
              <input name="phone" required type="tel" pattern="[0-9]+" value="{{old('phone')}}" class="form-control">
          </div>
          <div class="form-group">
              <label>ایمیل:</label>
              <input name="email" required type="email" value="{{old('email')}}"  class="form-control">
          </div>
          <div class="form-group">
        <label>آدرس:</label>
        <input name="address" required type="text" value="{{old('address')}}" pattern='[a-zA-Z0-9 آ ا ب پ ت ث ج چ ح خ د ذ ر ز ژ س ش ص ض ط ظ ع غ ف ق ک گ ل م ن و ه ی]+' class="form-control">
      </div>

          <div class="form-group" >
              <label>کد امنیتی:</label>
              <a onclick="refreshCaptcha(event)" style="cursor: pointer;">{{Captcha::img()}}</a>
              <br>
              <input name="captcha" type="text" class="form-control">
          </div>
      <div style="display: none;" id="cartInputshidden">
      	
      </div>
      <div class="d-flex justify-content-between">
        <button class="btn" id="return_step1">بازگشت</button>
   	    <button type="submit" class="btn btn-success mx-auto" id="submit">ثبت</button>
      </div>
      </form>
  </div>
  <br/>
  <br/><hr/><br/>
  <!-- Bitcoin gift card discription -->
  <div style="text-align: right;direction: rtl;">
   <h3 class="text-center">کارت هدیه بیت کوین، بهترین را برای هدیه دادن</h3>
   <br/>
   <p>کارت هدیه بیت کوین، باعث می شود به راحتی به دیگران بیت کوین هدیه بدهید. انتخاب خوبی برای هدیه تولد، عید نوروز و به عنوان کادو هستش. </p>
   <br/>
   <img  class="img-fluid rounded mx-auto d-block" src="assets/img/bitcoinGiftCard.png" alt="کارت هدیه بیت کوین">
  </div>
  <br/><hr/><br/>
  <!-- Bitcoin gift card discription -->
  <div style="text-align: right;direction: rtl;">
   <h3 class="text-center">چگونه سفارش بدیم؟</h3>
   <p>به آسانی ، چنتا کلیک می کنی و یه سری اطلاعات وارد می کنی همین.</p>
  </div>
  <br/><hr/><br/>
  <!-- Bitcoin gift card discription -->
  <div style="text-align: right;direction: rtl;">
   <h3 class="text-center">برای سازمان هه و شرکت ها</h3>
   <p>برای شرکت ها و سازمان ها اگر زیاد بخرند یه تخفیفی هم بهشون بدیم.</p>
  </div>
</div>
</section>
<style type="text/css">


    .giftcard-page { margin-top: 10%;direction: rtl; }
	.square {
		border: 1px solid;
		border-radius: 2px;
		padding: 2% 4%;
		direction: ltr;
		text-align: right;
		cursor: pointer;

	}
	.circle-btn {border-radius: 50%;padding:3px 8px;}
	.square span {font-weight: bold;font-size: 1.4rem;}
	.cart-row span {  margin-right: 4%;margin-left: 4%;font-weight: 400; font-size: 1.4rem; }
  .square {margin-top: 1%;margin-bottom: 1%;}
  @media only screen and (max-width: 1025px) {
        .square {
          padding: 2% 3%;
        }
     }
  @media only screen and (max-width: 769px) {
        .square {
          padding: 1% 1%;
        }
  }
   @media only screen and (max-width: 420px) {
       .square span {font-weight: bold;font-size: 1rem;}
       .square p {font-weight: bold;font-size: 0.9rem;}
       .exchange-card h3 {font-size: 1rem;}
  }
</style>

@include('master.footer')
@include('master.scripts')
<!-- ************ for showing message **************** -->
<!-- <script type="text/javascript">
  alertify.success(`success`);
</script> -->
<script type="text/javascript">

    function refreshCaptcha(e) {
        var element = e;
        axios.get('captcha-refresh').then(function (response) {
            element.target.src = response.data

        });
    }

    axios.post('{{route('getCardPrice')}}',{'amount':0.001}).then(function (response) {

        var cards = response.data;
        for(var t=0;t<cards.length;t++){
            $('#cardType'+t).html(cards[t]['type']+' BTC');
            $('#cardPrice'+t).html(cards[t]['price']+' تومان ')
        }
    });
    $('#pb-navbar').addClass("scrolled awake"); 
    $('#cart-table').hide();$('#nextStep').hide(); $('#step2').hide();
    
    var cart = []; var flag = 0;

    $('#return_step1').on('click', function(event) {
    	event.preventDefault();
    	$('#step1').show();$('#step2').hide();
    	$('.white-circle').removeClass("circle-active");
    	$('.enter_cart').addClass("circle-active");
    });

    $('#nextStepBtn').on('click', function() {
    	if(cart.length > 0) {
    		$('#step1').hide();$('#step2').show();
    		$('.white-circle').removeClass("circle-active");
    		$('.enter_info').addClass("circle-active");
    		$('#cartInputshidden').empty();
    		for(var i=0; i< cart.length; i++) {
    		  $('#cartInputshidden').append(`
    		     <input type="text" class="form-control" name="giftCart`+cart[i].kind+`"  value="`+cart[i].quantity+`"/>
    		  `);	
    		}
    			
    	}
    });

    $('#giftCart0').on('click', function() {
        var price = $('#giftCart0 p').text().replace(',','').replace(',','');
        var btcValue =  $('#giftCart0 span').text().replace(' ','').replace('BTC','');
        for(var i =0; i<cart.length;i++) {
            if(cart[i].kind === 0) {
                cart[i].quantity = cart[i].quantity+1;
                updateCart();
                return;
            }
        }
        $('#cart-table').show();$('#nextStep').show();
        cart.push({kind: 0, quantity: 1, text: 'کارت هدیه '+btcValue+' بیت کوین' , price: price.replace(' ','').replace('تومان','') });
        updateCart();
        // $('.circle-btn').on('click', function(event) {
        //     cartAddOrRemoveHandler(event) ;
        // });
    });

    $('#giftCart1').on('click', function() {
        var price = $('#giftCart1 p').text().replace(',','').replace(',','');
        var btcValue =  $('#giftCart1 span').text().replace(' ','').replace('BTC','');
        for(var i =0; i<cart.length;i++) {
        	if(cart[i].kind === 1) {
        		cart[i].quantity = cart[i].quantity+1; 
        		updateCart();
        		return;
        	}
        }
        $('#cart-table').show();$('#nextStep').show(); 
        cart.push({kind: 1, quantity: 1, text: 'کارت هدیه '+btcValue+' بیت کوین' , price: price.replace(' ','').replace('تومان','') });
        updateCart();
        // $('.circle-btn').on('click', function(event) {        
        //    cartAddOrRemoveHandler(event) ;
        // });
    });

    $('#giftCart2').on('click', function() {
        var price = $('#giftCart2 p').text().replace(',','').replace(',','');
        var btcValue =  $('#giftCart2 span').text().replace(' ','').replace('BTC','');
        for(var i =0; i<cart.length;i++) {
        	if(cart[i].kind === 2) {
        		cart[i].quantity = cart[i].quantity+1; 
        		updateCart();
        		return;
        	}
        }
        $('#cart-table').show();$('#nextStep').show(); 
        cart.push({kind: 2, quantity: 1, text: 'کارت هدیه '+btcValue+' بیت کوین' , price: price.replace(' ','').replace('تومان','') });
        updateCart();
        // $('.circle-btn').on('click', function(event) {        
        //    cartAddOrRemoveHandler(event) ;
        // });
    });

    $('#giftCart3').on('click', function() {
        var price = $('#giftCart3 p').text().replace(',','').replace(',','');
        var btcValue =  $('#giftCart3 span').text().replace(' ','').replace('BTC','');
        for(var i =0; i<cart.length;i++) {
        	if(cart[i].kind === 3) {
        		cart[i].quantity = cart[i].quantity+1; 
        		updateCart();
        		return;
        	}
        }
        $('#cart-table').show();$('#nextStep').show(); 
        cart.push({kind: 3, quantity: 1, text: 'کارت هدیه '+btcValue+' بیت کوین' , price: price.replace(' ','').replace('تومان','') });
        updateCart();
        // $('.circle-btn').on('click', function(event) {        
        //    cartAddOrRemoveHandler(event) ;
        // });
    });

    $('#giftCart4').on('click', function() {
        var price = $('#giftCart4 p').text().replace(',','').replace(',','');
        var btcValue =  $('#giftCart4 span').text().replace(' ','').replace('BTC','');
        for(var i =0; i<cart.length;i++) {
        	if(cart[i].kind === 4) {
        		cart[i].quantity = cart[i].quantity+1; 
        		updateCart();
        		return;
        	}
        }
        $('#cart-table').show();$('#nextStep').show(); 
        cart.push({kind: 4, quantity: 1, text: 'کارت هدیه '+btcValue+' بیت کوین' , price: price.replace(' ','').replace('تومان','') });
        updateCart();
        // $('.circle-btn').on('click', function(event) {        
        //    cartAddOrRemoveHandler(event) ;
        // });
    });

    function appendToCart() {
    	 $('#cart-table tbody').append(`
            <tr class="cart-row">
              <td>`+cart[cart.length-1].text+`</td>
              <td>
                <div class="btn">
                 <button class="btn circle-btn" id="mines`+(cart.length-1)+`">-</button><span>1</span><button class="btn circle-btn" id="plus`+(cart.length-1)+`">+</button>
                </div> 
              </td>
              <td>`+cart[cart.length-1].price+`</td>
            </tr>
        	`);
    }

    function removeFromArray(arrayTemp, arrayIndex) {
    	var temp = [];
    	for(var i =0; i<arrayTemp.length;i++) {
    		if(i !== arrayIndex) {
    			temp.push(arrayTemp[i]);
    		}
    	}
    	if(temp.length === 0) {$('#cart-table').hide();$('#nextStep').hide();  }
    	return temp;
    }

    function updateCart() {
    	console.log("updateCart");console.log(cart);
    	$("#cart-table tbody").empty();
      var sum = 0;
    	for(var i =0; i<cart.length;i++) {
          sum = sum + parseInt(cart[i].price)*parseInt(cart[i].quantity) ; 
        	$('#cart-table tbody').append(`
            <tr class="cart-row">
              <td>`+cart[i].text+`</td>
              <td>
                <div class="btn">
                 <button class="btn circle-btn" id="mines`+i+`">-</button><span>`+cart[i].quantity+`</span><button class="btn circle-btn" " id="plus`+i+`">+</button>
                </div> 
              </td>
              <td>`+parseInt(cart[i].price)*parseInt(cart[i].quantity)+` تومان</td>
            </tr>
        	`);
        }
        if(cart.length > 0) {
          $('#cart-table tbody').append(`
            <tr class="cart-row">
              <td></td>
              <td> جمع کل:</td>
              <td>`+sum+` تومان</td>
            </tr>
          `);

         $('.circle-btn').on('click', function(event) {
           cartAddOrRemoveHandler(event) ;
          });
        }
    }

    function cartAddOrRemoveHandler(event) {
    	var elementId = event.target.id + '';
           if(elementId.includes("plus")) {
              var arrayIndex = parseInt(elementId.replace("plus", ""));
              console.log("plus");console.log(cart); console.log(arrayIndex);
              cart[arrayIndex].quantity = cart[arrayIndex].quantity + 1 ;
              updateCart(); 
           } else {
              var arrayIndex = parseInt(event.target.id.replace("mines", ""));
              if(parseInt(cart[arrayIndex].quantity) === 1) {
              	cart = removeFromArray(cart, arrayIndex); updateCart();
              } else {
              	cart[arrayIndex].quantity = cart[arrayIndex].quantity - 1 ;updateCart();
              }   
           }
    }
</script>
@endsection