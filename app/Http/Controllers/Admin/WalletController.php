<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet; // Model for wallets table

class WalletController extends Controller
{
    // public function chooseWallet(Request $request)
    // {
    //     // Validate based on selected wallet method
    //     $rules = [
    //         'method' => 'required|in:usdt,btc,eth,xrp',
    //     ];

    //     switch ($request->method) {
    //         case 'usdt':
    //             $rules['usdt_address'] = 'required|string|max:255';
    //             break;
    //         case 'btc':
    //             $rules['btc_address'] = 'required|string|max:255';
    //             break;
    //         case 'eth':
    //             $rules['eth_address'] = 'required|string|max:255';
    //             break;
    //         case 'xrp':
    //             $rules['xrp_address'] = 'required|string|max:255';
    //             $rules['xrp_destination_tag'] = 'nullable|string|max:255';
    //             break;
    //     }

    //     $validated = $request->validate($rules);

    //     // Save or update wallet
    //     $wallet = Wallet::updateOrCreate(
    //         ['method' => $validated['method']], // search by wallet type
    //         [
    //             'address' => $validated[$validated['method'].'_address'],
    //             'destination_tag' => $validated['xrp_destination_tag'] ?? null
    //         ]
    //     );

    //     return redirect()->back()->with('success', 'Wallet information updated successfully!');
    // }



    public function chooseWallet(Request $request)
    {
        // ----------------------------------------------
        // 1. VALIDATION RULES
        // ----------------------------------------------
        $rules = [];

        // ----- Wallet Validation -----
        if ($request->method && $request->method !== 'bank') {
            $rules['method'] = 'required|in:usdt,btc,eth,xrp';

            switch ($request->method) {
                case 'usdt':
                    $rules['usdt_address'] = 'required|string|max:255';
                    break;
                case 'btc':
                    $rules['btc_address'] = 'required|string|max:255';
                    break;
                case 'eth':
                    $rules['eth_address'] = 'required|string|max:255';
                    break;
                case 'xrp':
                    $rules['xrp_address'] = 'required|string|max:255';
                    $rules['xrp_destination_tag'] = 'nullable|string|max:255';
                    break;
            }
        }

        // ----- Bank Validation -----
        if ($request->method === 'bank') {
            $rules['bankName'] = 'required|string|max:255';
            $rules['accountName'] = 'required|string|max:255';
            $rules['accountNumber'] = 'required|string|max:255';
            $rules['swiftCode'] = 'required|string|max:255';
            $rules['bankAddress'] = 'required|string|max:255';

        }

        $validated = $request->validate($rules);

        // ----------------------------------------------
        // 2. SAVE WALLET (ONLY IF SELECTED)
        // ----------------------------------------------
        if ($request->method && $request->method !== 'bank') {
            Wallet::updateOrCreate(
                ['method' => $validated['method']],
                [
                    'address' => $validated[$validated['method'].'_address'] ?? null,
                    'destination_tag' => $validated['xrp_destination_tag'] ?? null,
                ]
            );
        }

        // ----------------------------------------------
        // 3. SAVE BANK (ONLY IF SELECTED)
        // ----------------------------------------------
        if ($request->method === 'bank') {
            Wallet::updateOrCreate(
                ['id' => 1], // assuming only one bank record
                [
                    'bankName'      => $validated['bankName'] ?? null,
                    'accountName'   => $validated['accountName'] ?? null,
                    'accountNumber' => $validated['accountNumber'] ?? null,
                    'swiftCode'     => $validated['swiftCode'] ?? null,
                    'bankAddress'   => $validated['bankAddress'] ?? null,
                ]
            );
        }

        // ----------------------------------------------
        // 4. RETURN SUCCESS
        // ----------------------------------------------
        return redirect()->back()->with('success', 'Payment information updated successfully!');
    }
}

