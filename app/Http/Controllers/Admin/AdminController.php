<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index (){

          // User Statistics
        $newUsersCount = User::where('created_at', '>=', Carbon::now()->subDays(7))->count();
        $totalUsersCount = User::count();
        $totalDepositCount = Deposit::count();
        $totalPlanCount = Plan::count();
        $totalTransactionCount = Transaction::count();
        $totalWithdrawalCount = Withdrawal::count();
        //  $totalTransactionCount = Transaction::count();

         // Recent Activity
        $recentUsers = User::latest()->take(20)->get();


        return view('admin.dashboard', compact(
            'newUsersCount',
            'totalUsersCount',
            'totalDepositCount',
            'totalPlanCount',
            'totalWithdrawalCount',
            'totalTransactionCount',
            'recentUsers',
        ));
     
    }


    

}
