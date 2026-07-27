<?php
use App\Http\Controllers\Admin\AddRefferalController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CreditDebitController;
use App\Http\Controllers\Admin\DebitProfitController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\ManageDepositController;
use App\Http\Controllers\Admin\ManageEscrowController;
use App\Http\Controllers\Admin\ManageLoanController;
use App\Http\Controllers\Admin\ManagePaymentController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\ProfitController;
use App\Http\Controllers\Admin\SendEmailController;
use App\Http\Controllers\Admin\UserNotificationController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\WithdrawalController;
use App\Http\Controllers\TransactionController;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Route;











    //  Route::middleware(['web'])->prefix('admin')->name('admin.')->group(function () {

    // Route::middleware('guest:admin')->group(function () {
    //     Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    //     Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');
    // });

    Route::prefix('admin')->name('admin.')->middleware('web')->group(function () {
    
    // Guest routes (NOT logged in as admin)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');
    });


    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    });





// User Profile Route
Route::get('/admin/user/{id}', [AdminController::class, 'userProfile'])->name('admin.user.profile');

// Financial Operations
//deposit route
Route::post('/add-deposit', [DepositController::class, 'addUserDeposit'])->name('add.deposit');


Route::post('/add-referral', [AddRefferalController::class, 'addUserReferral'])->name('add.referral');


//profit route
Route::post('/add-profit', [ProfitController::class, 'addUserProfit'])->name('add.profit');
Route::post('/debit-profit', [DebitProfitController::class, 'debitUserProfit'])->name('debit.profit');



// User Settings & Updates
Route::post('/signal-strength/{id}', [ManageUserController::class, 'updateSignalStrength'])->name('signal.strength');
// Route::post('/update-notification/{id}', [ManageUserController::class, 'updateNotification'])->name('update.notification');
Route::post('/update-escrow/{id}', [ManageUserController::class, 'updateEscrow'])->name('update.escrow');
Route::post('/update-tradefee/{id}', [ManageUserController::class, 'updateTradeFee'])->name('update.tradefee');

Route::post('/update-kyc/{id}', [ManageUserController::class, 'updateKyc'])->name('update.kyc');
// Transaction Management
Route::post('/admin/add-transaction/{id}', [AdminController::class, 'addTransaction'])->name('admin.add.transaction');
Route::post('/admin/withdrawal-status/{id}', [AdminController::class, 'updateWithdrawalStatus'])->name('admin.withdrawal.status');

// Approval Routes
Route::post('/approve-deposit/{id}', [DepositController::class, 'approveDeposit'])->name('approve.deposit');
Route::post('/decline-deposit/{id}', [DepositController::class, 'declineDeposit'])->name('decline.deposit');
Route::post('/approve-withdrawal/{id}', [WithdrawalController::class, 'approveWithdrawal'])->name('approve.withdrawal');
Route::post('/decline-withdrawal/{id}', [WithdrawalController::class, 'declineWithdrawal'])->name('decline.withdrawal');
// Route::post('/accept-kyc/{id}', [ManageUserController::class, 'acceptKyc'])->name('accept.kyc');
// Route::post('/decline-kyc/{id}', [ManageUserController::class, 'declineKyc'])->name('decline.kyc');


// Escrow Management
Route::post('/admin/escrow/approve/{id}', [AdminController::class, 'approveEscrow'])->name('admin.escrow.approve');
Route::post('/admin/escrow/decline/{id}', [AdminController::class, 'declineEscrow'])->name('admin.escrow.decline');

// Account Management
Route::post('/clear-account/{id}', [AdminController::class, 'clearAccount'])->name('clear.account');
    
  Route::get('/users', [ManageUserController::class, 'ManageUsers'])->name('users'); // becomes 'admin.user'
  Route::get('/show', [ManageUserController::class, 'ShowUsers'])->name('show'); // becomes 'admin.user'
  Route::get('/profile/{id}/', [ManageUserController::class, 'userProfile'])->name('profile');
  Route::delete('/delete/{id}', [ManageUserController::class, 'deleteUser'])->name('delete');

      //loan controller
    Route::get('user_loans', [ManageLoanController::class, 'UsersLoans'])->name('loans');
    Route::post('add.loans', [ManageLoanController::class, 'AddUserLoan'])->name('add.loans');
    Route::post('add.outstandingloan', [ManageLoanController::class, 'AddUserOutstandingBalance'])->name('add.outstandingloan');
    Route::post('add.interestrate', [ManageLoanController::class, 'AddInterestRate'])->name('add.interestrate');
    Route::post('add-monthlypay', [ManageLoanController::class, 'AddMonthlyPay'])->name('add.monthlypay');
  
  Route::prefix('admin/mail')->group(function() {
    Route::get('/compose/{user}', [MailController::class, 'compose'])->name('mail.compose');
    Route::post('/send', [MailController::class, 'send'])->name('users.send-mail');
    Route::get('/history', [MailController::class, 'history'])->name('admin.mail.history');

    Route::match(['get', 'post'], 'credit-user', [CreditDebitController::class, 'creditUser'])->name('credit.user');
 Route::match(['get', 'post'], 'debit-user', [CreditDebitController::class, 'debitUser'])->name('debit.user');


//DepositController 
   Route::post('/approve-deposit/{id}', [DepositController::class, 'ApproveDeposit'])->name('approve-deposit');
  Route::post('/decline-deposit/{id}', [DepositController::class, 'DeclineDeposit'])->name('decline-deposit');

  //transaction controller
   Route::get('user_transactions', [TransactionController::class, 'usersTransaction'])->name('transactions');
    Route::post('add-transaction/{id}', [ManageUserController::class, 'addTransaction'])
    ->name('add.transaction');

     Route::post('withdrawal_tax_code/{id}', [ManageUserController::class, 'WithdrawalTaxCode'])
    ->name('withdrawal.tax.code');

        Route::post('withdrawal_status/{id}', [ManageUserController::class, 'WithdrawalStatus'])
    ->name('withdrawal.status');

    //manage escrow ;
// Approve escrow verification
Route::post('/escrow/{id}/approve', [ManageEscrowController::class, 'approve'])->name('escrow.approve');

// Decline escrow verification
Route::post('/escrow/{id}/decline', [ManageEscrowController::class, 'decline'])->name('escrow.decline');

//Manage Payment
   Route::get('manage-payment', [ManagePaymentController::class, 'ManagePayment'])->name('manage.payment');

   // Send Mail

Route::get('/send-email', [SendEmailController::class, 'index'])->name('send.email');
Route::post('/send-email', [SendEmailController::class, 'send'])->name('send.email.post');


//wallet update

    Route::post('/choose-wallet', [WalletController::class, 'chooseWallet'])->name('choose.wallet');


    Route::get('/deposits', [ManageDepositController::class, 'UsersDepositHistory'])->name('deposits'); // becomes 'admin.user'



    // Route::post('/add-notification/{id}', [UserNotificationController::class, 'addNotification'])
    // ->name('update.notification');
    Route::post('/add-notification/{id}', [UserNotificationController::class, 'addNotification'])
    ->name('update.notification');

  Route::delete('/notification/{id}', [UserNotificationController::class, 'deleteNotification'])->name('delete.notification');

    // Route::post('/update-notification/{id}', [ManageUserController::class, 'updateNotification'])->name('update.notification');

});
});


