<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Import all models
use App\Models\Transaction;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Profit;
use App\Models\Debitprofit;
use App\Models\Earning;
use App\Models\Plan;
use App\Models\Refferal;

class UserFinanceHelper
{
    /**
     * Fetch and cache Bitcoin price from Bitstamp for 5 minutes.
     *
     * @return float
     */
    public static function getBitcoinPrice()
    {
        return Cache::remember('btc_price_usd', now()->addMinutes(5), function () {
            try {
                $client = new Client();
                $response = $client->get('https://www.bitstamp.net/api/v2/ticker/btcusd/');
                $data = json_decode($response->getBody(), true);
                return (float)($data['last'] ?? 0);
            } catch (RequestException $e) {
                \Log::error('Failed to fetch Bitcoin price: ' . $e->getMessage());
                return 0;
            }
        });
    }

    /**
     * Retrieve user's complete financial summary.
     *
     * @param int|null $userId
     * @return array
     */
    public static function getUserFinancialData($userId = null)
    {
        $userId = $userId ?? Auth::id();
        $price = self::getBitcoinPrice();

        $data = [
            'credit'      => Transaction::where('user_id', $userId)->where('status', '1')->sum('credit') ?? 0,
            'debit'       => Transaction::where('user_id', $userId)->where('status', '1')->sum('debit') ?? 0,
            'deposit'     => Deposit::where('user_id', $userId)->where('status', '1')->sum('amount') ?? 0,
            'withdrawal'  => Withdrawal::where('user_id', $userId)->sum('amount') ?? 0,
            'addprofit'   => Profit::where('user_id', $userId)->sum('amount') ?? 0,
            'debitprofit' => Debitprofit::where('user_id', $userId)->sum('amount') ?? 0,
            'earning'     => Earning::where('user_id', $userId)->sum('amount') ?? 0,
            'plan'        => Plan::where('user_id', $userId)->sum('amount') ?? 0,
            'referral'    => Refferal::where('user_id', $userId)->sum('amount') ?? 0,
        ];

        // Calculations
        $data['user_balance'] = $data['credit'] - $data['debit'];
        $data['btc_balance']  = $price > 0 ? $data['user_balance'] / $price : 0;
        $data['profit']       = $data['addprofit'] - $data['debitprofit'];
        $data['balance']      = $data['profit'] + $data['deposit'] + $data['earning'] + $data['referral'] - $data['withdrawal'] - $data['plan'];
        $data['btc_price']    = $price;

        return $data;
    }
}
