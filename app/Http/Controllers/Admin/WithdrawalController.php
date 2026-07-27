<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;





class WithdrawalController extends Controller
{
    //


public function approveWithdrawal(Request $request, $id)
{
    $withdrawal = Withdrawal::findOrFail($id);

    // Wrap DB updates in a transaction
    DB::transaction(function() use ($withdrawal) {
        $withdrawal->status = 1; // approved
        $withdrawal->save();

        Transaction::where('transaction_id', $withdrawal->transaction_id)
                   ->update(['status' => 1]);
    });

    // Email to user
    $email = $withdrawal->email ?? null;

    if (!empty($email)) {
        $data = [
            'message' => "Your withdrawal of $" . $withdrawal->amount . " has been approved.",
            'amount' => $withdrawal->amount,
            // 'withdrawal_type' => $withdrawal->withdrawal_type ?? 'N/A'
        ];

        try {
            Mail::to($email)->send(new \App\Mail\ApproveWithdrawalEmail($data));
        } catch (\Exception $e) {
            Log::error("Approve withdrawal email failed for withdrawal ID {$withdrawal->id}: " . $e->getMessage());
        }
    }

    return redirect()->back()->with('success', 'Withdrawal has been approved successfully.');
}



public function declineWithdrawal(Request $request, $id)
{
    $withdrawal = Withdrawal::findOrFail($id);

    DB::transaction(function() use ($withdrawal) {
        $withdrawal->status = 2; // declined
        $withdrawal->save();

        Transaction::where('transaction_id', $withdrawal->transaction_id)
                   ->update(['status' => 2]);
    });

    $email = $withdrawal->email ?? null;

    if (!empty($email)) {
        $data = [
            'message' => "Your withdrawal of $" . $withdrawal->amount . " has been declined.",
            'amount' => $withdrawal->amount,
            // 'reason' => $withdrawal->reason ?? 'No reason provided'
        ];

        try {
            Mail::to($email)->send(new \App\Mail\DeclineWithdrawalEmail($data));
        } catch (\Exception $e) {
            Log::error("Decline withdrawal email failed for withdrawal ID {$withdrawal->id}: " . $e->getMessage());
        }
    }

    return redirect()->back()->with('success', 'Withdrawal has been declined successfully.');
}

}
