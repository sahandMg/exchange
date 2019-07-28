<?php

namespace App\Http\Controllers;


use App\ChangellyHelper;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    protected $changellyHelper;

    public function __construct(ChangellyHelper $changellyHelper)
    {
        $this->changellyHelper = $changellyHelper;
    }

    public function getCurrencies(){

       if(!Cache::has('cryptoList')){
           $response = $this->changellyHelper->getChangellyData('getCurrencies',[]);
           $cryptoList = $this->checkForImage($response['result']);
           $cryptoDetail = $this->getCryptoDetails($cryptoList);
           Cache::put('cryptoList',$cryptoDetail,1000000);
       }else{

           $cryptoDetail = Cache::get('cryptoList');
       }
        return $cryptoDetail;
    }

    public function getMinAmount(Request $request){
        $from = $request->from;
        $to = $request->to;
        $response = $this->changellyHelper->getChangellyData('getMinAmount',['from'=> $from,'to'=> $to]);
        if(!is_numeric($response['result'])){
            return 500;
        }
        return $response['result'];
    }

    public function getExchangeAmount(Request $request){
            $from = $request->from;
            $to = $request->to;
            $amount = $request->amount;
        $response = $this->changellyHelper->getChangellyData('getExchangeAmount',['from'=> $from,'to'=> $to , 'amount'=>$amount]);
        dd($response);
        if(!is_numeric($response['result'])){
            return 500;
        }
        return $response['result'];
    }
// get refound address from user to take back user the found he sent when transaction failed
    public function createTransaction(Request $request){

        $from = $request->from;
        $to = $request->to;
        $extraId = $request->extraId;
        $amount = $request->amount;
        $address = $request->address;
        $refundAddress = $request->refundAddress;
        $response = $this->changellyHelper->getChangellyData('createTransaction',[
            'from'=> $from,
            'to'=> $to ,
            'address'=>$address,
            'extraId'=>$extraId,
            'amount'=>$amount,
            'refundAddress'=>$refundAddress
        ]);

        $transactionData = $response['result'];
        $trans = new Transaction();
        $trans->trans_id = $transactionData['id'];
        $trans->user_id = 1;
        $trans->apiExtraFee = $transactionData['apiExtraFee'];
        $trans->changellyFee = $transactionData['changellyFee'];
        $trans->payinExtraId = $transactionData['payinExtraId'];
        $trans->payoutExtraId = $transactionData['payoutExtraId'];
        $trans->amountExpectedFrom = $transactionData['amountExpectedFrom'];
        $trans->status = $transactionData['status'];
        $trans->currencyFrom = $transactionData['currencyFrom'];
        $trans->currencyTo = $transactionData['currencyTo'];
        $trans->amountTo = $transactionData['amountTo'];
        $trans->amountExpectedTo = $transactionData['amountExpectedTo'];
        $trans->payinAddress = $transactionData['payinAddress'];
        $trans->payoutAddress = $transactionData['payoutAddress'];
        $trans->save();

        return $transactionData['id'];
    }

    public function createFixRateTransaction(Request $request){


    }

    public function getTransactions(Request $request){

        $currency = $request->currency;
        $address = $request->address;
        $extraId = $request->extraId;
        $response = $this->changellyHelper->getChangellyData('getTransactions',[
            'currency'=> $currency,
            'address'=>$address,
            'extraId'=>$extraId,
            'limit'=>10,
            'offset'=> 0
        ]);

        return $response['result'];
    }


    public function getStatus(Request $request){

        $id = $request->id;
        $response = $this->changellyHelper->getChangellyData('getTransactions',[
            'id'=> $id,
        ]);

        return $response['result'];
    }

    // shows min & max values that chagelly accepts to convert
    public function getFixRate(Request $request){

        $from = $request->from;
        $to = $request->to;
        $response = $this->changellyHelper->getChangellyData('getFixRate',[
            'from'=> $from,
            'to'=> $to,
        ]);

        return $response;
    }
// gets all coin pairs fix rate
    public function getFixRateBulk(){

        $response = $this->changellyHelper->getChangellyData('getFixRateBulk',[]);

        return $response;
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
