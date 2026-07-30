<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\WithdrawalController;
use Illuminate\Support\Facades\Route;








Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/faqs', function () {
    return view('home.faqs');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/trade', function () {
    return view('home.trade');
});

// Market Pages
Route::get('/markets/cryptos', function () { return view('home.markets.cryptos'); })->name('market.cryptos');
Route::get('/markets/indices', function () { return view('home.markets.indices'); })->name('market.indices');
Route::get('/markets/forex', function () { return view('home.markets.forex'); })->name('market.forex');
Route::get('/markets/energies', function () { return view('home.markets.energies'); })->name('market.energies');
Route::get('/markets/shares', function () { return view('home.markets.shares'); })->name('market.shares');
Route::get('/markets/options', function () { return view('home.markets.options'); })->name('market.options');
Route::get('/markets/etfs', function () { return view('home.markets.etfs'); })->name('market.etfs');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/step2', [RegisterController::class, 'step2'])->name('user.step2');
Route::post('/step3', [AuthController::class, 'step3'])->name('user.step3');



// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('user.logout');


Route::get('/step2', [AuthController::class, 'showpersonalDetailsForm'])->name('step2');
Route::get('/step3', [AuthController::class, 'showVerifyForm'])->name('user.step3.form');
Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('user.resend.otp')->middleware('throttle:3,1');


Route::get('/update-details', [AuthController::class, 'showpersonalDetailsForm'])->name('update.details');
Route::get('/verify', [AuthController::class, 'showVerifyForm'])->name('verify.form');
Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');





Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.form');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.submit');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.submit');




Route::prefix('user')
    ->as('user.')
    ->middleware(['auth']) // add your UserMiddleware alias
    ->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home'); // user.home
    Route::get('/forex', [DashboardController::class, 'UserForex'])->name('forex'); // user.forex
    Route::get('/binary', [DashboardController::class, 'Binary'])->name('binary'); // user.forex
    Route::get('/stocks', [DashboardController::class, 'Stocks'])->name('stocks'); // user.forex
    Route::get('/crypto', [DashboardController::class, 'Crypto'])->name('crypto'); // user.forex
     Route::get('/crypto-buy', [DashboardController::class, 'CryptoBuy'])->name('crypto.buy'); // user.forex
    Route::get('/copy', [DashboardController::class, 'Copy'])->name('copy'); // user.forex
    Route::get('/buy-plan', [DashboardController::class, 'BuyPlan'])->name('buy.plan'); // user.forex
    Route::get('/active-trade/{plan}', [DashboardController::class, 'activeTrade'])->name('active.trade');
    Route::get('/wallet', [DashboardController::class, 'Wallet'])->name('wallet'); // user.forex
     Route::get('/profile', [DashboardController::class, 'Profile'])->name('profile'); // user.forex
     Route::get('/accounthistory', [DashboardController::class, 'AccountHistory'])->name('accounthistory'); // user.forex
      Route::get('/referuser', [DashboardController::class, 'Referuser'])->name('refer'); // user.forex
     Route::get('/notifications', [DashboardController::class, 'UserNotification'])->name('notifications'); // user.forex
      Route::post('/notifications/mark-all-read', [DashboardController::class, 'markAllRead'])->name('notifications.markAllRead');



Route::get('/verify-account', [DashboardController::class, 'verifyAccount'])->name('verify.account');
Route::get('/upload-kyc', [DashboardController::class, 'uploadKyc']);
Route::post('/upload-kyc', [DashboardController::class, 'uploadKyc'])->name('upload.kyc');

Route::post('/profile-update',  [DashboardController::class, 'profileUpdate'])->name('profile.update');

Route::get('/photo', [DashboardController::class, 'Photo'])->name('photo');
Route::post('/upload-picture', [DashboardController::class, 'uploadProfile'])->name('upload.picture');

     



     
     Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout.perform');
    Route::post('/change-password', 'App\Http\Controllers\UserController@updatePassword')->name('update-password');
    Route::post('/confirm-password', 'App\Http\Controllers\UserController@ConfirmPassword')->name('confirm-password');


// ✅ Deposit dashboard page (fund wallet)
Route::get('/investments', [DepositController::class, 'investmentHistory'])->name('investment');

// ✅ Deposit dashboard page (fund wallet)
Route::get('/fund-wallet', [DepositController::class, 'index'])->name('fund.wallet');

// ✅ Fetch deposit data (AJAX or POST request)
Route::post('/get-deposit', [DepositController::class, 'getDeposit'])->name('deposit.get');


// ✅ Make a new deposit
Route::post('/make-deposit', [DepositController::class, 'makeDeposit'])->name('deposit.make');

// ✅ Buy Plan
Route::post('/buy-plan', [DepositController::class, 'buyPlans'])->name('buy.plan');







Route::post('/get-withdrawal', [WithdrawalController::class, 'getUserWithdrawal'])->name('get.withdrawal');

// ✅ User withdrawal main page
Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal');


// ✅ Withdrawal funds page
Route::get('/withdraw-funds', [WithdrawalController::class, 'withdrawFunds'])->name('withdraw.funds');

// ✅ Normal withdrawal request
Route::post('/make-withdrawal', [WithdrawalController::class, 'makeWithdrawal'])->name('make.withdrawal');

// ✅ Bitcoin or crypto withdrawal request
Route::post('/make-bwithdrawal', [WithdrawalController::class, 'makeBWithdrawal'])->name('withdraw.makeb');

});

