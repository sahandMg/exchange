<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        return view('index');
    }

    public function aboutUs(){

        return view('aboutUs');
    }

    public function faq(){

        return view('faq');
    }

    public function contact(){

        return view('contact');
    }

    public function coinsList(){

        return view('welcome');
    }

}

