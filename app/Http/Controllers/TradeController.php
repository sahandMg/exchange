<?php

namespace App\Http\Controllers;


use App\ChangellyHelper;
use App\FixRateTransaction;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    protected $changellyHelper;
    protected $apiError;

    public function __construct(ChangellyHelper $changellyHelper)
    {
        $this->changellyHelper = $changellyHelper;
        $this->apiError = 'Service Error';
    }

    public function getCurrencies(){

        //
        $cryptoDetail = [
            [
                'color'=> "#F7931A",
                'created_at'=> null,
                'full_name'=> "Bitcoin",
                'id'=> 61,
                'name'=> "btc",
                'persian'=> null,
                'updated_at'=> null
            ],
            [
            'color'=> "#627EEA",
            'created_at'=> null,
            'full_name'=> "Ethereum",
            'id'=> 142,
            'name'=> "eth",
            'persian'=> null,
            'updated_at'=> null
        ],
            [
                'color'=> "#8dc351",
                'created_at'=> null,
                'full_name'=> "Bitcoin Cash",
                'id'=> 38,
                'name'=> "bch",
                'persian'=> null,
                'updated_at'=> null
            ],
        ];
        //
//       if(!Cache::has('cryptoList')){
//           $response = $this->changellyHelper->getChangellyData('getCurrencies',[]);
//           if(isset($response['error'])){
//               return $response;
//           }
//           $cryptoList = $this->checkForImage($response['result']);
//           $cryptoDetail = $this->getCryptoDetails($cryptoList);
//           Cache::put('cryptoList',$cryptoDetail,1000000);
//
//       }else{
//
//           $cryptoDetail = Cache::get('cryptoList');
//       }
        return $cryptoDetail;
    }

    public function getMinAmount(Request $request){
        $from = $request->from;
        $to = $request->to;
        $response = $this->changellyHelper->getChangellyData('getMinAmount',['from'=> $from,'to'=> $to]);

        return $response;
    }

    public function getExchangeAmount(Request $request){

        //  Fake data
            $response =
                [
                'id'=>1,
                'result'=>[
                            [
                            'amount'=> "1",
                            'fee'=> "0.2443841321608040201005",
                            'from'=> "btc",
                            'networkFee' => "0.0020000000000000000000",
                            'rate'=> "48.8768264321608040201",
                            'result'=> "48.6324423",
                            'to'=> "eth",
                            'visibleAmount'=> "48.8768264321608040201"
                                ],
                    [
                        'amount'=> "1",
                        'fee'=> "0.2443841321608040201005",
                        'from'=> "btc",
                        'networkFee' => "0.0020000000000000000000",
                        'rate'=> "48.8768264321608040201",
                        'result'=> "48.6324423",
                        'to'=> "eth",
                        'visibleAmount'=> "48.8768264321608040201"
                    ]

                        ]
                ];
        //
//            $from = $request->from;
//            $to = $request->to;
//            $amount = $request->amount;
//            $response = $this->changellyHelper->getChangellyData('getExchangeAmount',[['from'=> $from,'to'=> $to , 'amount'=>$amount],['from'=> $from,'to'=> $to , 'amount'=>$amount]]);

        return $response;
    }
// get refound address from user to take back user the found he sent when transaction failed
// check min and max for entered value
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

        if(isset($response['error'])){
            return $response;
        }
        $transactionData = $response['result'];
        $trans = new Transaction();
        $trans->trans_id = $transactionData['id'];
        $trans->user_id = 1;
        $trans->apiExtraFee = $transactionData['apiExtraFee'];
        $trans->changellyFee = $transactionData['changellyFee'];
        $trans->payinExtraId = $transactionData['payinExtraId'];
        $trans->payoutExtraId = $transactionData['payoutExtraId'];
        $trans->amountExpectedFrom = $transactionData['amountExpectedFrom'];
        $trans->amountExpectedTo = $transactionData['amountExpectedTo'];
        $trans->status = $transactionData['status'];
        $trans->currencyFrom = $transactionData['currencyFrom'];
        $trans->currencyTo = $transactionData['currencyTo'];
        $trans->amountTo = $transactionData['amountTo'];
        $trans->payinAddress = $transactionData['payinAddress'];
        $trans->payoutAddress = $transactionData['payoutAddress'];
        $trans->save();

        return $response;
    }


    // shows min & max values that chagelly accepts to convert
    public function getFixRate(Request $request){

        $from = $request->from;
        $to = $request->to;
        $response = $this->changellyHelper->getChangellyData('getFixRate',[
            ['from'=> $from,
            'to'=> $to]
        ]);

        return $response;
    }

    public function createFixRateTransaction(Request $request){

        $from = $request->from;
        $to = $request->to;
        $extraId = $request->extraId;
        $amountFrom = $request->amountFrom;
        $amountTo = $request->amountTo;
        $rateId =  $request->rateId;
        $refundExtraId =  $request->refundExtraId;
        $address = $request->address;
        $refundAddress = $request->refundAddress;
        $response = $this->changellyHelper->getChangellyData('createFixTransaction',[
            'from'=> $from,
            'to'=> $to ,
            'address'=>$address,
            'extraId'=>$extraId,
            'amountTo'=>$amountTo,
            'amountFrom'=>$amountFrom,
            'rateId'=>$rateId,
            'refundAddress'=>$refundAddress,
            'refundExtraId'=>$refundExtraId
        ]);
        if(isset($response['error'])){
            return $response;
        }
        $transactionData = $response['result'];
        $trans = new FixRateTransaction();
        $trans->trans_id = $transactionData['id'];
        $trans->user_id = 1;
        $trans->apiExtraFee = $transactionData['apiExtraFee'];
        $trans->changellyFee = $transactionData['changellyFee'];
        $trans->payinExtraId = $transactionData['payinExtraId'];
        $trans->payoutExtraId = $transactionData['payoutExtraId'];
        $trans->refundAddress = $transactionData['refundAddress'];
        $trans->amountExpectedFrom = $transactionData['amountExpectedFrom'];
        $trans->amountExpectedTo = $transactionData['amountExpectedTo'];
        $trans->payTill = $transactionData['payTill'];
        $trans->status = $transactionData['status'];
        $trans->currencyFrom = $transactionData['currencyFrom'];
        $trans->currencyTo = $transactionData['currencyTo'];
        $trans->amountTo = $transactionData['amountTo'];
        $trans->payinAddress = $transactionData['payinAddress'];
        $trans->payoutAddress = $transactionData['payoutAddress'];
        $trans->save();
        return $response;
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

        return $response;
    }


    public function getStatus(Request $request){

        $id = $request->id;
        $response = $this->changellyHelper->getChangellyData('getTransactions',[
            'id'=> $id,
        ]);

        return $response;
    }

// gets all coin pairs fix rate
    public function getFixRateBulk(){

        $response = $this->changellyHelper->getChangellyData('getFixRateBulk',[]);
        if(isset($response['error'])){
            return $response['body'];
        }
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

    public function exchangePage(){

        return view('panel.exchange');
    }

}
