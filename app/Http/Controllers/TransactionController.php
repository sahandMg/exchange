<?php

namespace App\Http\Controllers;

use App\ZarrinPal;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function successPayment(){

        return view('Payment.success');
    }

    public function failedPayment(){

        return view('Payment.failed');
    }

    public function ZarrinCallback(Request $request){

        $zarrin = new ZarrinPal($request);

        return $zarrin->verify();
    }
}
