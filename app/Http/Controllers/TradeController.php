<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{

    public function getCurrencies(){

        $apiKey = '06e9b634be17420abfd7b02962df5544';
        $apiSecret = '88be352c46092cce107f10f3a8d32fc8a797375b4e990776fc10717d4905f875';
        $apiUrl = 'https://api.changelly.com';
        $message = json_encode(
            array('jsonrpc' => '2.0', 'id' => 1, 'method' => 'getCurrencies', 'params' => array())
        );
        $sign = hash_hmac('sha512', $message, $apiSecret);
        $requestHeaders = [
            'api-key:' . $apiKey,
            'sign:' . $sign,
            'Content-type: application/json'
        ];
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);

        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);
        $cryptoList = $this->checkForImage($response['result']);
        $cryptoDetail = $this->getCryptoDetails($cryptoList);
        return $cryptoDetail;
    }
// if crypto name wont be available in crypto images, it will be removed from list
    private function checkForImage(array $cryptoList){

        $number = count($cryptoList);
        for($i=0;$i< $number;$i++){

            if(!file_exists('assets/img/icons/'.$cryptoList[$i].'.png')){
                unset($cryptoList[$i]);
            }
        }
        return array_values($cryptoList);
    }

    // match changelly available coins with 425 that coins available in database and returns coins with color+name+fullname
    private function getCryptoDetails($cryptoList){
        $output = [];
        if(!Cache::has('records')){
            $records = DB::table('crypto_colors')->get();
            Cache::put('records',$records,1000);
        }else{
            $records = Cache::get('records');
        }
        foreach ($records as $index => $record){

            for($i=0;$i< count($cryptoList);$i++){

                if($record->name == $cryptoList[$i]){

                    array_push($output,$record);

                    break;
                }

            }
        }
        return $output;
    }

}
