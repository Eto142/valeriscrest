<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;




class LoginController extends Controller
{
    //

    public function showLoginForm(){

    return view('auth.login');
   
    }

//   public function login(Request $request)
// {
//     try {
//         // Validate input
//         $request->validate([
//             'email'    => 'required|email',
//             'password' => 'required|string|min:6',
//         ]);

//         $credentials = $request->only('email', 'password');
//         $remember = $request->boolean('remember');

//         if (Auth::attempt($credentials, $remember)) {
//             $request->session()->regenerate();

//             // Redirect to home page after successful login
//             return redirect()->route('user.home')->with('success', 'Login successful!');
//         }

//         // Failed login
//         return back()->withErrors([
//             'email' => trans('auth.failed'),
//         ])->withInput();

//     } catch (\Throwable $e) {
//         \Log::error('Login error: ' . $e->getMessage());

//         return back()->with('error', 'An error occurred during login. Please try again.');
//     }
// }



public function login(Request $request)
{
    try {
        // Validate input
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Check if user is activated
            if ($user->is_activated == 0) {
                return redirect()->route('step2')
                    ->with('info', 'Please update your details to activate your account.');
            }

            // If user is not verified, resend OTP
            if ($user->is_verified == 0) {
                // Generate new 4-digit OTP
                $otp = rand(1000, 9999);

                // Save OTP to user in DB
                $user->otp_code = $otp;
                $user->save();

                // Send OTP email
                try {
                    Mail::to($user->email)->send(new OtpMail($user, $otp));
                } catch (\Exception $e) {
                    \Log::error('OTP resend failed: ' . $e->getMessage());
                }

                return redirect()->route('user.step3.form')
                    ->with('info', 'Your account is not verified. A new OTP has been sent to your email.');
            }

            // Redirect to home page if activated and verified
            return redirect()->route('user.home')->with('success', 'Login successful!');
        }

        // Failed login
        return back()->withErrors([
            'email' => trans('auth.failed'),
        ])->withInput();

    } catch (\Throwable $e) {
        \Log::error('Login error:', [
            'message' => $e->getMessage(),
            'file'    => $e->getFile(),
            'line'    => $e->getLine(),
        ]);

        return back()->with('error', 'An error occurred during login. Please try again.');
    }
}



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
