<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;

class SalesDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
//        $date = Carbon::now();
        $user = auth()->user()->id;
//        $user_object = User::find($user);

        $calls = DB::table('calls')->leftJoin('customers', 'calls.company', '=', 'customers.customer_id')->get();


        return view('sales.dashboard')->with('calls', $calls);
    }
}
