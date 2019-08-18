<?php

namespace App\Http\Controllers;


use App\Repo\IpFinder;
use App\User;
use App\VerifyUser;
use BaconQrCode\Encoder\QrCode;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function signup(){

        return view('auth.signup');
    }

    public function post_signup(Request $request,IpFinder $ipFinder){

        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password'=> 'required',
            'confirm_password' => 'required|same:password',
            'captcha'=>'required|captcha'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->ip = $ipFinder->getIp();
        try{

            $user->country = strtolower(Location::get($ipFinder->getIp())->countryCode);
        }catch (\Exception $exception){
            $user->country = 'fr';
        }

        $user->code = strtoupper(uniqid());
        $user->password = Hash::make($request->password);
        $user->save();
        $data = [
            'code'=> $user->code,
            'email'=>$user->email
        ];
        $token = str_random(40);
        VerifyUser::create([
            'user_id' => $user->id,
            'token' => $token
        ]);

        session(['pop'=>1]);
        Session::flash('message', 'ایمیل فعال سازی حساب ارسال شد. درصورت دریافت نکردن ایمیل، روی ارسال مجدد کلیک کنید');
        Session::put('userToken', $token);
//
//        Mail::send('emails.VerifyEmail',['user'=>$user],function($message) use($data){
//            $message->from (env('Admin_Mail'));
//            $message->to ($data['email']);
//            $message->subject ('فعال سازی حساب');
//        });
//
//        Mail::send('emails.admin.newUser',['user'=>$user],function($message) use($data){
//            $message->from (env('Admin_Mail'));
//            $message->to (env('Info_Mail'));
//            $message->subject ('New User');
//        });

        return redirect()->route('VerifyUserPage');
    }


    // redirect users to verification page for sending verification link again
    public function VerifyUserPage(){

//        $token = Session::get('userToken');
//
//        if(!$token){
//            return 'Not Authorized';
//        }
//        $user = VerifyUser::where('token',$token)->first()->user;
//
//        if(is_null($user)){
//            return 'Invalid Token!';
//        }
        $token = 'tkoE3pW1Ek9ffLaq4UBivrwV31Vg93Jp902WEFdz';

        return view('auth.resendEmailVerification',compact('token'));
    }

    // this function triggers when user click on verification link on email
    public function VerifyUser(Request $request){

        $user = VerifyUser::where('token',$request->token)->first()->user;

        if(is_null($user)){
            return 'Corrupt Link';
        }
        $user->update(['verified'=>1]);
        $data = [
            'code'=> $user->code,
            'email'=>$user->email
        ];

//        Mail::send('emails.welcome',$data,function($message) use($data){
//            $message->from (env('Admin_Mail'));
//            $message->to ($data['email']);
//            $message->subject ('تایید عضویت');
//        });

        Auth::guard('user')->login($user);
        return redirect()->route('dashboard');
    }


    // resend verification link
    public function ResendVerification(Request $request){

        $this->validate($request,[
            'captcha'=>'required|captcha'
        ]);
        $token = $request->userToken;
        $VerifyUser = VerifyUser::where('token',$token)->first();
        $user = $VerifyUser->user;
        $VerifyUser->update(['token'=>str_random(40)]);
        $data = [
            'email'=>$user->email,
            'token'=>$user->verifyUser->token,
        ];
        Mail::send('emails.VerifyEmail',['user'=>$user],function($message) use($data){
            $message->from (env('Admin_Mail'));
            $message->to ($data['email']);
            $message->subject ('فعال سازی حساب');
        });
        Session::flash('message','لینک فعال سازی ارسال شد');

        return redirect()->route('index');

    }

    public function login(Request $request){

        return view('auth.login');
    }

    public function post_login(Request $request,IpFinder $ipFinder){

        $this->validate($request,[
            'email'=> 'required|email',
            'password'=>'required|min:6',
            'captcha'=>'required|captcha'
        ]);

        if(Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password],true)){


            if(Auth::guard('user')->user()->verified == 0){
                $token = Auth::guard('user')->user()->verifyUser->token;
                Auth::guard('user')->logout();
                Session::flash('error','حساب کاربری شما فعال نیست. با مراجعه به لینک ارسال شده به ایمیلتان، اقدام به فعال سازی حساب خود کنید');
                Session::flash('userToken',$token);
                return redirect()->route('VerifyUserPage');
            }

            try{

                $country = strtolower(Location::get($ipFinder->getIp())->countryCode);
            }catch (\Exception $exception){
                $country = 'fr';
            }
            Auth::guard('user')->user()->update(['ip'=>$ipFinder->getIp(),'country'=>$country]);

            return redirect($_SERVER['HTTP_REFERER']);

        }else{

            return redirect()->back()->with(['error'=>'Wrong email or password']);
        }

    }
    /*
     * Google Login Apis
     */
// TODO create an authentication service at dev.google
    public function redirectToProvider()
    {
//
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(IpFinder $ipFinder){

        $client =  Socialite::driver('google')->stateless()->user();

//        try{
//            $user = User::where('email',$client->email)->firstOrFaile();
//        }catch (\Exception $exception){
//
//            return 404;
//        }

//            $userData = JWTAuth::parseToken()->authenticate();

//            return ['token'=>$token,'userData'=>$user];

        $user = User::where('email',$client->email)->first();
        if(!is_null($user)){
            $user->avatar = $client->avatar;
            $user->ip = $ipFinder->getIp();
            try{

                $user->country = strtolower(Location::get($ipFinder->getIp())->countryCode);
            }catch (\Exception $exception){
                $user->country = 'fr';
            }

            $user->save();

            Auth::guard('user')->login($user);
            return redirect()->route('dashboard');
        }

        $user = new User();
        $user->name = $client->name;
        $user->email = $client->email;
        $user->code = uniqid();
        $user->avatar = $client->avatar;
        $user->ip = $ipFinder->getIp();
        $user->verified = 1;

        try{

            $user->country = strtolower(Location::get($ipFinder->getIp())->countryCode);
        }catch (\Exception $exception){
            $user->country = 'fr';
        }

        $user->save();

        $data = [
            'code'=> $user->code,
            'email'=>$user->email
        ];
        Auth::guard('user')->login($user);

        Mail::send('email.admin.newUser',['user'=>$user],function($message) use($data){
            $message->from (env('Admin_Mail'));
            $message->to (env('Info_Mail'));
            $message->subject ('کاربر جدید');
        });
        Mail::send('email.thanks',$data,function($message) use($data){
            $message->from (env('Admin_Mail'));
            $message->to ($data['email']);
            $message->subject ('Subscription Email');
        });
        session(['pop'=>1]);
        return redirect()->route('dashboard');
    }

    public function passwordReset(){

        return view('password_reset');
    }

    public function post_passwordReset(Request $request){

        $this->validate($request,[
            'email'=> 'required|email'
        ]);

        $user = User::where('email',$request->email)->first();
        if(is_null($user)){

            return redirect()->back()->with(['error'=>'Email address not found']);
        }
        $pass = strtolower(str_random(10));
        $user->password = bcrypt($pass);
        $user->save();
        Mail::send('email.reset_password',['pass'=>$pass,'user'=>$user],function($message) use($user){
            $message->from (env('Admin_Mail'));
            $message->to ($user->email);
            $message->subject ('Password Reset');
        });

        return redirect()->route('login')->with(['message'=>'An Email with a new password has been sent to your email address']);

    }

    public function logout(){

        Session::flush();
        Auth::guard('user')->logout();
        return redirect()->route('index');
    }
}
