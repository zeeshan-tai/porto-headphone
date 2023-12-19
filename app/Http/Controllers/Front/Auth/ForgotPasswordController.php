<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{

    public function showLinkRequestForm()
    {
        return view('front.forgotpassword');
    }

    public function sendOtpEmail(Request $request)
    {
        $this->validateEmail($request);

        // Generate a random OTP (you may adjust the length as needed)
        $otp = str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT);

        // Save the OTP in the user table
        $user = User::where('email', $request->input('email'))->first();
        $user->user_otp = $otp;
        $user->save();
        $email = $request->email;


        // Send the OTP in the email
        $this->sendOtpMail($user->email, $otp);

        return redirect()->route('front.otp_verification', ['email' => $email]);
        // return response()->json(['message' => 'OTP sent successfully']);
    }

    protected function sendOtpMail($email, $otp)
    {
        // Customize the mail content as needed
        $subject = 'Your OTP for Password Reset';
        $message = 'Your OTP is: ' . $otp;

        // Use Laravel's mail function to send the email
        \Mail::raw($message, function ($mail) use ($email, $subject) {
            $mail->to($email)->subject($subject);
        });
    }

    // public function hello(Request $request){
    //     dd($request->all());
    // }
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

}
