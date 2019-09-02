<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function post_contact(Request $request){

        $this->validate($request,['email'=>'required|email','body'=>'required','captcha'=>'required|captcha']);

        $msg = new Message();
        $msg->email = $request->email;
        $msg->subject = $request->subject;
        $msg->body = $request->body;
        $msg->save();

        $data = ['email'=>$request->email,'body'=>$request->body,'subject'=>$request->subject];
        // TODO Contact Email pages
        // send email to admin
//        Mail::send($data,'emails.contact_admin',function($message)use($data){
//            $message->to(env('Admin_Mail'));
//            $message->from(env($data['email']));
//            $message->subject(env($data['subject']));
//        });

        // send feedback to user
//        Mail::send($data,'emails.contact_feedback',function($message)use($data){
//            $message->to($data['email']);
//            $message->from(env('Support_Mail'));
//            $message->subject('ارتباط با مشتری');
//        });
        session()->flash('message','پیام شما ارسال شد');
        return redirect()->back();

    }

    public function coinsList(){

        return view('welcome');
    }

}

