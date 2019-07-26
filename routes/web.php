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

Route::get('signup/','AuthController@signup')->name('signup')->middleware('guest');

Route::post('signup','AuthController@post_signup')->name('signup');

Route::get('password-reset','AuthController@passwordReset')->name('passwordReset');

Route::post('password-reset','AuthController@post_passwordReset')->name('passwordReset');


// ==================== API EndPoints ===========================

Route::get('get-currencies','TradeController@getCurrencies')->name('getCurrencies');

Route::get('get-crypto-color','HandyController@getCryptoColor');

Route::get('set-crypto-color','HandyController@setCryptoColor');

Route::get('set-crypto-fname','HandyController@setCryptoFullName');