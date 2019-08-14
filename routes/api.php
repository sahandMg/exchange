<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('get-exchange-amount','TradeController@getExchangeAmount')->name('getExchangeAmount');

Route::post('get-currencies','TradeController@getCurrencies')->name('getCurrencies');

Route::post('value','GiftCardController@getCardPrice')->name('getCardPrice');