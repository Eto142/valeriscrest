<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserFinanceHelper;
use App\Http\Controllers\Controller;
use App\Models\Debitprofit;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Notification;
// Import your models
use App\Models\Plan;
use App\Models\Profit;
use App\Models\Refferal;
use App\Models\Traders;
use App\Models\Transaction;
use App\Models\Withdrawal;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Display the authenticated user's dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = UserFinanceHelper::getUserFinancialData();

        // ✅ Pass all data individually to Blade
         return view('user.home', $data);
    }



    

    public function UserForex(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.forex', $data);
    }


     public function Crypto(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.crypto', $data);
    }



    public function Binary(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.binary', $data);
    }

    public function Stocks(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.stocks', $data);
    }

     public function Wallet()
    {

       $client = new Client();

// Fetch BTC & ETH prices from CoinGecko in one request
$response = $client->get('https://api.coingecko.com/api/v3/simple/price', [
    'query' => [
        'ids' => 'bitcoin,ethereum',
        'vs_currencies' => 'usd',
    ],
]);

// Decode the JSON response
$data = json_decode($response->getBody(), true);

// Extract BTC & ETH prices
$btc_price = $data['bitcoin']['usd'];
$eth_price = $data['ethereum']['usd'];

// Fetch user transaction data
$data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
$data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
$data['user_balance'] = $data['credit'] - $data['debit'];

// Convert user balance to BTC & ETH
$data['btc_balance'] = $data['user_balance'] / $btc_price;
$data['eth_balance'] = $data['user_balance'] / $eth_price;
        return view('user.wallet', $data);
    }


    public function Copy(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
         $data['traders']  = Traders::get();
        return view('user.copy', $data);
    }


    public function Profile(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        
        return view('user.profile', $data);
    }


public function UserNotification()
{
    $data = UserFinanceHelper::getUserFinancialData();

    $data['notifications'] = Notification::where('user_id', auth()->id())
        ->latest()
        ->get();

    return view('user.notification', $data);
}



 // AJAX - mark as read
    public function markRead(Request $request)
    {
        $message = Message::find($request->id);

        if ($message && $message->is_read == 0) {
            $message->update(['is_read' => 1]);
        }

        $newCount = Message::where('is_read', 0)->count();

        return response()->json(['count' => $newCount]);
    }




     public function markAllRead(Request $request)
    {
        Notification::where('user_id', auth()->id())
            ->where('is_read', 0)
            ->update(['is_read' => 1]);

        return response()->json(['success' => true]);
    }



    
    public function CryptoBuy(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        
        return view('user.crypto-buy', $data);
    }



     public function InvestmentHistory(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        
        return view('user.investment-history', $data);
    }



    




    public function ReferUser(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        
        return view('user.referuser', $data);
    }


     public function  AccountHistory(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
         $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['earning'] =  Earning::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['transaction'] = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.account-history', $data);
    }



     public function BuyPlan(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.buy-plan', $data);
    }


     public function Photo(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.photo', $data);
    }

       public function verifyAccount(){

      // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();
        return view('user.verify-account', $data);
    }




     public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'string',
            'lname' => 'string',
            'phone' => 'string',
            'address' => 'string'

        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->name = $request['lname'];
        $user->phone = $request['phone'];
        $user->dob = $request['dob'];
        $user->address = $request['address'];


        $user->update();
        return back()->with('status', 'Profile Updated');
    }

    

    public function uploadKyc(Request $request)
{
    // Validate inputs
    $request->validate([
        'card' => 'required|file|mimes:jpeg,jpg,png,pdf|max:20000',
        'pass' => 'required|file|mimes:jpeg,jpg,png,pdf|max:20000',
    ]);

    $kyc = Auth::user();
    $kyc->kyc_status = 0;

    $file_id_card = $request->file('card');
    $file_passport = $request->file('pass');

    // Generate unique filenames
    $filename_id_card = time() . '_id.' . $file_id_card->getClientOriginalExtension();
    $filename_passport = time() . '_pass.' . $file_passport->getClientOriginalExtension();

    // Move uploaded files
    $file_id_card->move(public_path('uploads/kyc'), $filename_id_card);
    $file_passport->move(public_path('uploads/kyc'), $filename_passport);

    // Save to database
    $kyc->id_card = $filename_id_card;
    $kyc->passport = $filename_passport;
    $kyc->save();

    return redirect('user/profile')->with('status', 'Documents uploaded successfully. Please wait for approval.');
}


   public function uploadProfile(Request $request)
{
    // Validate input
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg|max:8000',
    ]);

    $update = Auth::user();

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('user/uploads/id'), $filename);
        $update->photo = $filename;
    }

    $update->update();

    return redirect('user/profile')->with('status', 'Profile picture updated successfully!');
}

}
