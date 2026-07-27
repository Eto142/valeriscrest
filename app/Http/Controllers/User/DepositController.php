<?php

namespace App\Http\Controllers\User;

use App\Helpers\UserFinanceHelper;
use App\Http\Controllers\Controller;
use App\Models\Debitprofit;
use App\Models\Deposit;
use App\Models\Earning;
use App\Models\Plan;
use App\Models\Profit;
use App\Models\Refferal;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Models\Withdrawal;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;

class DepositController extends Controller
{
    public function index()
    {
        // ✅ Fetch all balances + Bitcoin price via helper
        $data = UserFinanceHelper::getUserFinancialData();

        // ✅ Fetch payment info
        $data['payment'] = DB::table('users')->where('id', 4)->get();

        // ✅ Return view
        return view('user.deposit.index', $data);
    }



//      public function getDeposit(Request $request)
//     {

//        $btcPrice = 0;
//     $ethPrice = 0;
//     $client = new Client();

//     try {
//         // Fetch Bitcoin price from CoinGecko API
//         $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
//         $btcData = json_decode($response->getBody(), true);
//         $btcPrice = $btcData['bitcoin']['usd'] ?? 0;
//     } catch (\GuzzleHttp\Exception\RequestException $e) {
//         \Log::error('Failed to fetch Bitcoin price: ' . $e->getMessage());
//     }

//     try {
//         // Fetch Ethereum price from CoinGecko API
//         $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd');
//         $ethData = json_decode($response2->getBody(), true);
//         $ethPrice = $ethData['ethereum']['usd'] ?? 0;
//     } catch (\GuzzleHttp\Exception\RequestException $e) {
//         \Log::error('Failed to fetch Ethereum price: ' . $e->getMessage());
//     }

//     // Calculate user balance
//     $userId = Auth::id();
//     $credit = Transaction::where('user_id', $userId)->where('status', '1')->sum('credit');
//     $debit = Transaction::where('user_id', $userId)->where('status', '1')->sum('debit');
//     $userBalance = $credit - $debit;
     
//      $wallets = Wallet::all();

//     // Prepare data for the view
//     $data = [
//         'user_balance' => $userBalance,
//         'btc_balance' => $btcPrice > 0 ? $userBalance / $btcPrice : 0,
//         'amount' => $request->input('amount'),
//         'btc_amount' => $btcPrice > 0 ? $request->input('amount') / $btcPrice : 0,
//         'eth_amount' => $ethPrice > 0 ? $request->input('amount') / $ethPrice : 0,
//         'item' => $request->input('item'),
//         // 'payment' => DB::table('users')->where('id', 4)->get(),  // Use first() for a single record
//     ];
//   // Return the appropriate view
//     return $data['item'] === 'Bank' ? 
//         view('user.deposit.bank', $data) : 
//         view('user.deposit.payment', $data);
// }





public function getDeposit(Request $request)
{
    $btcPrice = 0;
    $ethPrice = 0;
    $client = new Client();

    try {
        // Fetch Bitcoin price from CoinGecko API
        $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
        $btcData = json_decode($response->getBody(), true);
        $btcPrice = $btcData['bitcoin']['usd'] ?? 0;
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        Log::error('Failed to fetch Bitcoin price: ' . $e->getMessage());
    }

    try {
        // Fetch Ethereum price from CoinGecko API
        $response2 = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd');
        $ethData = json_decode($response2->getBody(), true);
        $ethPrice = $ethData['ethereum']['usd'] ?? 0;
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        Log::error('Failed to fetch Ethereum price: ' . $e->getMessage());
    }

    // Calculate user balance
    $userId = Auth::id();
    $credit = Transaction::where('user_id', $userId)->where('status', '1')->sum('credit');
    $debit = Transaction::where('user_id', $userId)->where('status', '1')->sum('debit');
    $userBalance = $credit - $debit;

    // Fetch wallet details (e.g., BTC, ETH, USDT, etc.)
    $wallets = Wallet::all(['method', 'address', 'bankName', 'accountName', 'accountNumber',
'swiftCode', 'bankAddress']); 
    // assuming you have these columns: name, address, qr_code, network

    // Prepare data for the view
    $data = [
        'user_balance' => $userBalance,
        'btc_balance'  => $btcPrice > 0 ? $userBalance / $btcPrice : 0,
        'amount'       => $request->input('amount'),
        'btc_amount'   => $btcPrice > 0 ? $request->input('amount') / $btcPrice : 0,
        'eth_amount'   => $ethPrice > 0 ? $request->input('amount') / $ethPrice : 0,
        'item'         => $request->input('item'),
        'wallets'      => $wallets,
    ];

    // Return the appropriate view
    return $data['item'] === 'Bank'
        ? view('user.deposit.bank', $data)
        : view('user.deposit.payment', $data);
}





public function makeDeposit(Request $request)
{
   
$client = new Client();

// Fetch Bitcoin (BTC) price in USD using CoinGecko API
$responseBTC = $client->get('https://api.coingecko.com/api/v3/simple/price', [
    'query' => [
        'ids' => 'bitcoin',
        'vs_currencies' => 'usd',
    ],
]);

$dataBTC = json_decode($responseBTC->getBody(), true);
$priceBTC = $dataBTC['bitcoin']['usd'];

    // Fetch Ethereum (ETH) price in USD
    $responseETH = $client->get('https://api.coingecko.com/api/v3/simple/price', [
        'query' => [
            'ids' => 'ethereum',
            'vs_currencies' => 'usd',
        ],
    ]);
    $dataETH = json_decode($responseETH->getBody(), true);
    $priceETH = $dataETH['ethereum']['usd'];

    $transaction_id = rand(76503737, 12344994);

    // Create a new deposit object
    $deposit = new Deposit;
    $deposit->transaction_id = $transaction_id;
    $deposit->user_id = Auth::user()->id;
    $deposit->amount = $request['amount'];

    // Calculate BTC and ETH amounts
    $deposit->btc_amount = $deposit->amount / $priceBTC;
    $deposit->eth_amount = $deposit->amount / $priceETH;

    $deposit->payment_method = $request['payment_method'];

    if($request->hasFile('image')){
        $file= $request->file('image');

        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/deposits',$filename);
        $deposit->image =  $filename;
    }

    $deposit->save();

    // Create a new transaction object to log the deposit transaction
    $transaction = new Transaction;
    $transaction->user_id = Auth::user()->id;
    $transaction->transaction_id = $transaction_id;
    $transaction->transaction_type = "Credit";
    $transaction->transaction = "credit";
    $transaction->credit =  $request['amount'];
    $transaction->debit = "0";
    $transaction->status = 0;
    $transaction->save();

    // Prepare data to pass to the view
    $dataForView = [
        'deposit' => $deposit,
        'payment_method' => $deposit->payment_method,
        'btcAmount' => $deposit->btc_amount,
        'ethAmount' => $deposit->eth_amount
    ];

    return view('user.deposit.deposit-success', $dataForView);
}




    //buy plans
    public function buyPlans(Request $request)
    {
        $data['deposit'] = Deposit::where('user_id', Auth::user()->id)->where('status', '1')->sum('amount');
        $data['withdrawal'] = Withdrawal::where('user_id', Auth::user()->id)->sum('amount');
        $data['addprofit'] = Profit::where('user_id', Auth::user()->id)->sum('amount');
        $data['debitprofit'] = Debitprofit::where('user_id', Auth::user()->id)->sum('amount');
        $data['profit'] = $data['addprofit'] - $data['debitprofit'];
        $data['earning'] = Earning::where('user_id', Auth::user()->id)->sum('amount');
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->sum('amount');
        $data['referral'] = Refferal::where('user_id', Auth::user()->id)->sum('amount');
        $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        $client = new Client();
$response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
$data = json_decode($response->getBody(), true);

// Extract BTC price from CoinGecko API response
$price = $data['bitcoin']['usd'];

$data['credit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('credit');
$data['debit'] = Transaction::where('user_id', Auth::user()->id)->where('status', '1')->sum('debit');
$data['user_balance'] = $data['credit'] - $data['debit'];
$data['btc_balance'] = $data['user_balance'] / $price;
        
        if ($data['user_balance'] <= '0') {
            return back()->with('status', 'Your Balance Is Insufficient');
        }
        $transaction_id = rand(76503737, 12344994);
        $buy = new Plan;
        $buy->transaction_id = $transaction_id;
        $buy->user_id = Auth::user()->id;
        $buy->amount = $request['amount'];
        $buy->plan_name = $request['plan_name'];
        $buy->plan_duration = $request['plan_duration'];
        $buy->status = $request['status'];
        $buy->amount = $request['amount'];

        $buy->save();


        $transaction = new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Debit";
        $transaction->transaction = "debit";
        $transaction->credit = "0";
        $transaction->debit = $request['amount'];
        $transaction->status = 1;
        $transaction->save();

        return back()->with('status', 'Plan Has Been Purchased Successfully');
    }






    
public function InvestmentHistory()
    {

       // Fetch Bitcoin price from CoinGecko API
    $price = 0;
    try {
        $client = new Client();
        $response = $client->get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
        $data = json_decode($response->getBody(), true);
        $price = $data['bitcoin']['usd'] ?? 0;
    } catch (RequestException $e) {
        \Log::error('Failed to fetch Bitcoin price: ' . $e->getMessage());
    }
 // Retrieve user financial data
    $userId = Auth::id();
    $data = [
        'credit' => Transaction::where('user_id', $userId)->where('status', '1')->sum('credit'),
        'debit' => Transaction::where('user_id', $userId)->where('status', '1')->sum('debit'),
        'deposit' => Deposit::where('user_id', $userId)->where('status', '1')->sum('amount'),
        'withdrawal' => Withdrawal::where('user_id', $userId)->sum('amount'),
        'addprofit' => Profit::where('user_id', $userId)->sum('amount'),
        'debitprofit' => Debitprofit::where('user_id', $userId)->sum('amount'),
        'earning' => Earning::where('user_id', $userId)->sum('amount'),
        'plan' => Plan::where('user_id', $userId)->sum('amount'),
        'referral' => Refferal::where('user_id', $userId)->sum('amount')
    ];

    // Calculate balances and BTC equivalent
    $data['user_balance'] = $data['credit'] - $data['debit'];
    $data['btc_balance'] = $price > 0 ? $data['user_balance'] / $price : 0;
    $data['profit'] = $data['addprofit'] - $data['debitprofit'];
    $data['balance'] = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        $data['deposit'] =  Deposit::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['withdrawal'] =  Withdrawal::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['earning'] =  Earning::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();
        $data['transaction'] = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $data['plan'] = Plan::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('user.investment-history', $data);
    }

}
