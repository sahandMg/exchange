@extends('master.layout')
@section('title')
    <title> اکسچنج - اسم سایت </title>
@endsection
@section('content')

<div class="container">
   <div class="text-center giftcard-page">
    <h1 class="text-center">خرید کارت هدیه بیت کوین</h1>
    <span class="text-center">بیت کوین را به خانواده و دوستان خود هدیه بدهید.</span>
   </div>
   <div>
         <ul class="d-flex justify-content-around" style="padding-left: 0;">
            <li class="white-circle enter_address">2</li>
            <li class="white-circle enter_amount circle-active">1</li>
         </ul>
       </div>
   <div class="exchange-card" style="direction: rtl;" id="step1"> 
	  <h3>مقدار بیت کوین کارت هدیه خود را انتخاب کنید.</h3>
	  <br/>
	  <div class="d-flex justify-content-around">
	  	<div class="square text-center" id="giftCart1">
	  		<span>0.0001 BTC</span>
	  		<p style="direction: rtl;">12,000 تومان</p>
	  	</div>
	  	<div class="square text-center" id="giftCart2">
	  		<span>0.0005 BTC</span>
	  		<p style="direction: rtl;">60,000 تومان</p>
	  	</div>
	  	<div class="square text-center" id="giftCart3">
	  		<span>0.001 BTC</span>
	  		<p style="direction: rtl;">120,000 تومان</p>
	  	</div>
	  	<div class="square text-center" id="giftCart4">
	  		<span>0.01 BTC</span>
	  		<p style="direction: rtl;">1,200,000 تومان</p>
	  	</div>
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
	  <div class="form-group">
        <label>نام:</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label >نام خانوادگی:</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>آدرس:</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label>شماره تلفت:</label>
        <input type="text" class="form-control">
      </div>
  </div>

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
</style>

@include('master.footer')
@include('master.scripts')
<script type="text/javascript">
    $('#pb-navbar').addClass("scrolled awake"); 
    $('#cart-table').hide();$('#nextStep').hide(); $('#step2').hide();
    
    var cart = []; var flag = 0;

    $('#nextStepBtn').on('click', function() {
    	if(cart.length > 0) {
    		$('#step1').hide();$('#step2').show();
    	}
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
        $('.circle-btn').on('click', function(event) {        
           cartAddOrRemoveHandler(event) ;
        });
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
        $('.circle-btn').on('click', function(event) {        
           cartAddOrRemoveHandler(event) ;
        });
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
        $('.circle-btn').on('click', function(event) {        
           cartAddOrRemoveHandler(event) ;
        });
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
        $('.circle-btn').on('click', function(event) {        
           cartAddOrRemoveHandler(event) ;
        });
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
    	for(var i =0; i<cart.length;i++) {
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
        $('.circle-btn').on('click', function(event) {
           cartAddOrRemoveHandler(event) ;
        });
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