<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Session\Session;

class AuthController extends Controller
{





    // Show forgot password form
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Send reset link
  

    // Show reset password form
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Reset password
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['success' => true, 'message' => __($status), 'redirect' => route('login')])
            : response()->json(['success' => false, 'message' => __($status)], 400);
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        Auth::logout(); // Logs out the user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates the CSRF token

        return redirect('/login'); // Redirects to the homepage or login page
    }




    public function showVerifyForm()
{
    return view('auth.verify');
}

public function showpersonalDetailsForm()
{
    return view('auth.update_details');
}



// public function verifyCode(Request $request)
// {
//     $request->validate([
//         'email' => 'required|email',
//         'code'  => 'required|digits:6',
//     ]);

//     $user = User::where('email', $request->email)
//                 ->where('verification_code', $request->code)
//                 ->first();

//     if ($user) {
//         $user->is_verified = 1; // integer instead of true
//         $user->verification_code = null;
//         $user->save();

//         return redirect()->route('login')->with('success', 'Account verified! You can now log in.');
//     }

//     return back()->withErrors(['code' => 'Invalid verification code.']);
// }


    // Step 3 POST: verify OTP
    public function step3(Request $request)
{
    $request->validate([
        'otp_code' => 'required|digits:4',
    ]);

    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }

    if ($request->otp_code == $user->otp_code) {
        $user->is_verified = 1;
        $user->otp_code = null; // Clear OTP
        $user->save();

        return redirect()->route('user.home')->with('success', 'Your account has been verified!');
    }

    return back()->with('error', 'Failed to verify OTP. Please try again.');
}



public function resendOtp(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }

    // Generate new 4-digit OTP
    $otp = rand(1000, 9999);

    // Save new OTP to user
    $user->otp_code = $otp;
    $user->save();

    // Send OTP email
    Mail::to($user->email)->send(new OtpMail($user, $otp));

    return back()->with('success', 'A new OTP has been sent to your email.');
}

}



