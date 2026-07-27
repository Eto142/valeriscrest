<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class ManagePaymentController extends Controller
{
    //

    // public function ManagePayment(){
    // // Fetch all wallets (btc, eth, usdt) from DB
    // $wallets = Wallet::all();

    // // Pass them to the view
    // return view('admin.manage_payment', compact('wallets'));
       
    // }


    public function ManagePayment()
{
    // Fetch all crypto wallets (BTC, ETH, USDT, XRP)
    $wallets = Wallet::whereIn('method', ['usdt','btc','eth','xrp'])->get()->keyBy('method');

    // Fetch bank info (assuming only one bank record)
    $bank = Wallet::where('id', 1)->first();

    // Pass data to view
    return view('admin.manage_payment', compact('wallets', 'bank'));
}

}
