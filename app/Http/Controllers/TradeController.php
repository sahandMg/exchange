<?php

namespace App\Http\Controllers;


use App\ChangellyHelper;
use App\FixRateTransaction;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

        // Fake
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

           $response = $this->changellyHelper->getChangellyData('getCurrencies',[]);
           if(isset($response['error'])){
               return $response;
           }
           $cryptoList = $this->checkForImage($response['result']);
           $cryptoDetail = $this->getCryptoDetails($cryptoList);

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
//            $response =
//                [
//                'id'=>1,
//                'result'=>[
//                            [
//                            'amount'=> "1",
//                            'fee'=> "0.2443841321608040201005",
//                            'from'=> "btc",
//                            'networkFee' => "0.0020000000000000000000",
//                            'rate'=> "48.8768264321608040201",
//                            'result'=> "48.6324423",
//                            'to'=> "eth",
//                            'visibleAmount'=> "48.8768264321608040201"
//                                ],
//                    [
//                        'amount'=> "1",
//                        'fee'=> "0.2443841321608040201005",
//                        'from'=> "btc",
//                        'networkFee' => "0.0020000000000000000000",
//                        'rate'=> "48.8768264321608040201",
//                        'result'=> "48.6324423",
//                        'to'=> "eth",
//                        'visibleAmount'=> "48.8768264321608040201"
//                    ]
//
//                        ]
//                ];
        //===============
            $rateId = $this->getFixRate($request->from,$request->to);
            $from = $request->from;
            $to = $request->to;
            $amount = $request->amount;
            $response = $this->changellyHelper->getChangellyData('getExchangeAmount',[['from'=> $from,'to'=> $to , 'amount'=>$amount],['from'=> $from,'to'=> $to , 'amount'=>$amount]]);
//        $response['result'][0]['rateId'] = $rateId['result'][0]['id'];
//        $response['result'][0]['rate'] = $rateId['result'][0]['result'];
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
            'refundAddress'=>'1GhPXFa8p9Chdd4hHrBuknpv8o7cfyuYqH'
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

        return redirect()->route('exchangePaying',['id'=>$trans->trans_id]);
    }


    // shows min & max values that changelly accepts to convert
    public function getFixRate($from,$to){

        $response = $this->changellyHelper->getChangellyData('getFixRate',[
            [
            'from'=> $from,
            'to'=> $to
            ]
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
        $refundAddress = '1GhPXFa8p9Chdd4hHrBuknpv8o7cfyuYqH';
//        $refundAddress = $request->refundAddress;
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
        // ===== Fake
//        $transactionData = [
//            'id'=>'g3u2ia9qav0d4xd1',
//            'apiExtraFee'=>0,
//            'changellyFee'=>'0.5',
//            'payinExtraId'=>'',
//            'payoutExtraId'=>'',
//            'refundAddress'=>'',
//            'amountExpectedFrom'=>'0.2',
//            'amountExpectedTo'=>'9.097285',
//            'payTill'=>'2019-08-02T11:43:56.521Z',
//            'status'=>'new',
//            'currencyFrom'=>'btc',
//            'currencyTo'=>'eth',
//            'amountTo'=>0,
//            'payinAddress'=>'33cP1Q9Zvx3nGBB6wjxbENz6peLJQtNn7x',
//            'payoutAddress'=>'0xf8B1392351dcf6912Af12d1365F3415620Bb44bD'
//        ];
        // ======
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

        return redirect()->route('exchangePaying',['id'=>$trans->trans_id]);
    }

    public function exchangePaying($transId){

        $trans = $trans = DB::connection('mysql')->table('fix_rate_transactions')->where('trans_id',$transId)->first();
       if(is_null($trans)){

           return ['error'=>500,'body'=>'invalid trans id'];
       }
        return view('panel.WalletPaying',compact('trans'));
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
        $response = $this->changellyHelper->getChangellyData('getStatus',[
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
