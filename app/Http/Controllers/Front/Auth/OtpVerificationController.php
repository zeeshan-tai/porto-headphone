<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{

    public function showOtpForm($email)
    {
        // dd($email);
        return view('front.otp_verification',compact('email'));
    }

    public function verify(Request $request){
// dd($request->all());
        // $request->validate([
        //     'otp' => 'required|numeric|digits:4',
        // ]);
        // $otp = $request->input('otp1') . $request->input('otp2') . $request->input('otp3') . $request->input('otp4');

        $user = User::where('email', $request->input('email'))->first();

        if ($user == $request->input('otp')) {
            // OTP is correct, you can consider it verified
            // You may want to reset the stored OTP in the user table after successful verification
            $user->user_otp = null;
            $user->save();

            return redirect('front.auth.change_password'); // Replace with the desired redirect path
        } else {
            // Incorrect OTP, handle this as needed (e.g., show an error message)
            return redirect()->back()->withInput()->withErrors(['otp' => 'Invalid OTP']);
        }
    }
}
