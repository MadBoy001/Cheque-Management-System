<?php

namespace App\Http\Controllers;

use App\Models\Cheque;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuperuserController extends Controller
{
    public function dashboard()
    {
        // $today = Carbon::today()->toDateString();
        // $nextmonth = Carbon::today()->addMonth()->toDateString();

        // $chequeCount = Cheque::count();

        // $activeChequeCount = Cheque::where('status', 'active')->where('chequeexpirydate', '>', $today)->count();

        // $inactiveChequeCount = Cheque::where('status', 'inactive')
        //     ->orWhere('chequeexpirydate', '<', $today)
        //     ->count();
        
        //     $expiringChequeCount = Cheque::where('status', 'active')
        // ->where('chequeexpirydate', '>', $today)
        // ->where('chequeexpirydate', '<', $nextmonth)
        // ->count();
        
        // $expiredChequeCount = Cheque::where('status', 'active')
        // ->where('chequeexpirydate', '<', $today)
        // ->count();

        // $returnedChequeCount = Cheque::where('status', 'inactive')
        // ->count();
        
        return view(
            'superuser.dashboard',
            // compact(
            //     'chequeCount',
            //     'activeChequeCount',
            //     'inactiveChequeCount',
            //     'expiringChequeCount',
            //     'expiredChequeCount',
            //     'returnedChequeCount'
            // )
        );
    }
}
