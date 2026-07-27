<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AddProfitEmail;
use App\Models\Profit;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfitController extends Controller
{
    //
      public function addUserProfit(Request $request)
    {
        // $validate->validate($request,[
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);
        $transaction_id = rand(76503737, 12344994);
        $topUp = new Profit;
        $topUp->transaction_id = $transaction_id;
        $topUp->user_id = $request['user_id'];
        // $topUp->plan_name=$request['plan_name'];
        $topUp->amount = $request['amount'];
        // $topUp->plan_type=$request['plan_type'];

        $topUp->save();

        $user = User::find($request['user_id']);
        if ($user) {
            Mail::to($user->email)->send(new AddProfitEmail([
                'name'           => $user->name,
                'amount'         => $request['amount'],
                'transaction_id' => $transaction_id,
                'date'           => now()->format('M d, Y'),
            ]));
        }

        $transaction = new Transaction;
        $transaction->user_id = $request['user_id'];
        $transaction->transaction_id = $transaction_id;
        $transaction->transaction_type = "Profit";
        $transaction->transaction = "credit";
        $transaction->credit = $request['amount'];
        $transaction->debit = "0";
        $transaction->status = 1;
        $transaction->save();
        return redirect()->back()->with('success', 'User Profit Topped Up Successfully');
    }

}
