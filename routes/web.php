<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('captcha-refresh',function (){

    $captcha = \Mews\Captcha\Facades\Captcha::create();
    return Captcha::src();

});

Route::get('/','LandingController@index')->name('index');

Route::get('coins-list','LandingController@coinsList')->name('coins');

Route::get('about','LandingController@aboutUs')->name('aboutUs');

Route::get('contact','LandingController@contact')->name('contact');

Route::get('faq','LandingController@faq')->name('faq');

// ============== Authentication Routes =============================
Route::get('login','AuthController@login')->name('login')->middleware('guest');

Route::post('login','AuthController@post_login')->name('login');

Route::get('user/verify/{token}','AuthController@VerifyUser');

Route::get('user/email-verify','AuthController@VerifyUserPage')->name('VerifyUserPage');

Route::post('resend-verification','AuthController@ResendVerification')->name('ResendVerification');

Route::get('google/login','AuthController@redirectToProvider')->name('redirectToProvider');

Route::get('google/login/callback','AuthController@handleProviderCallback')->name('handleProviderCallback');

Route::get('signup','AuthController@signup')->name('signup')->middleware('guest');

Route::post('signup','AuthController@post_signup')->name('signup');

Route::get('password-reset','AuthController@passwordReset')->name('passwordReset');

Route::post('password-reset','AuthController@post_passwordReset')->name('passwordReset');

Route::get('logout','AuthController@logout')->name('logout');

// ===================== Gift Card Routes =============================

Route::get('make-key','GiftCardController@makeKey');

Route::get('generate-qr','GiftCardController@generateQr');

Route::get('gift-card','GiftCardController@index')->name('giftIndex');

Route::post('value','GiftCardController@getCardPrice')->name('getCardPrice');

Route::post('card-register','GiftCardController@cardRegister')->name('cardRegister');


// ===================== Panel Routes =============================

Route::get('exchange','TradeController@exchangePage')->name('exchangePage');

// ==================== API EndPoints ===========================

Route::post('get-currencies','TradeController@getCurrencies')->name('getCurrencies');

Route::post('get-min-amount','TradeController@getMinAmount')->name('getMinAmount');

Route::post('get-exchange-amount','TradeController@getExchangeAmount')->name('getExchangeAmount');

Route::post('create-transaction','TradeController@createTransaction')->name('createTransaction')->middleware('guest');

Route::post('create-fix-transaction','TradeController@createFixRateTransaction')->name('createFixRateTransaction');

Route::post('get-transaction','TradeController@getTransactions')->name('getTransactions');

Route::post('get-status','TradeController@getStatus')->name('getStatus');

Route::post('get-rate','TradeController@getFixRate')->name('getFixRate');

Route::post('get-rate-bulk','TradeController@getFixRateBulk')->name('getFixRateBulk');

Route::post('get-crypto-color','HandyController@getCryptoColor');

Route::post('set-crypto-color','HandyController@setCryptoColor');

Route::post('set-crypto-fname','HandyController@setCryptoFullName');

// =================================================================================

Route::get('wallet-paying/{transId}',['as'=>'walletPaying','uses'=>'TradeController@walletPaying']);


// ============================== Payment Routes ===================================

Route::get('payment/success',['as'=>'PaymentSuccess','uses'=>'TransactionController@successPayment']);

Route::get('payment/failed',['as'=>'PaymentFailed','uses'=>'TransactionController@FailedPayment']);

Route::get('zarrin/callback', 'TransactionController@ZarrinCallback')->name('ZarrinCallback');