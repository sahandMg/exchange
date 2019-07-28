<?php

namespace App;


class ChangellyHelper
{

    public function getChangellyData($method,$params){

        $apiKey = env('Changelly_Public');
        $apiSecret = env('Changelly_Secret');
        $apiUrl = 'https://api.changelly.com';
        $message = json_encode(
            array('jsonrpc' => '2.0', 'id' => 1, 'method' => $method, 'params' => $params)
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
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response,true);
        if(is_null($response)){
            $response = 500;
        }
        return $response;
    }
}