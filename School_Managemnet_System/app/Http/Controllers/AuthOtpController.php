<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\verificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthOtpController extends Controller
{

    public function login(){

        return view('auth.otp-login');
    }
    public function generate(Request $request){

        $request->validate([
            'mobile_no' => 'required|exists:users,mobile_no'
        ]);


        $verificationCode = $this->generateOtp($request->mobile_no);
        
        $message =  "Your OTP To Login is -" . $verificationCode ->otp;

        return redirect()->route('otp.verification')->with('success', $message);
    }
    public function generateOtp($mobile_no){
        $user = User::where('mobile_no', $mobile_no)->first();

        $verificationCode = verificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){

            return $verificationCode;
        }

        return verificationCode::created([

            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at'=> Carbon::now()->addMinutes(10)
        ]);
    }
}
